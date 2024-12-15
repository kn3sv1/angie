
//Core packages of node.js
var http = require('http');
var url = require('url');

const cookie = require("cookie");
const { convertChunksToObject } = require('./convertChunksToObject');

function parseDataMiddleware(req, res) {
    const chunks = [];
    req.on("data", (chunk) => {
        chunks.push(chunk);
    });
    req.on("end", () => {
        req.parsedBody = convertChunksToObject(req, chunks);
        startProcess(req, res)
    });
}

http.createServer(parseDataMiddleware).listen(5000);

// Supposing we already signed up and stored user.
let users = [
    {
        firstname: "Angelique",
        lastname: "Neophytou",
        username: "angie",
        password: "1234",
    },
    // {
    //     username: "roma",
    //     password: "1234",
    // },
];

function getURL(req) {
    // /api/weather or /api/weather/ will work

    // IF "/api/weather/" I will remove '/' and add '/'
    // IF "/api/weather" I will remove NOTHING and add '/'
    return req.url.replace(/\/+$/, '') + '/';
}


// Its example how format should be.
let sessions = [
    // {
    //     username: "angie",
    //     sess_id: "angie_1234",
    // },
];

function notAuthenticated(req, res) {
    return error(req, res, "Not authenticated", 401);
}

function notFound(req, res) {
    return error(req, res, "Route not found", 404);
}

function error(req, res, message, httpCode = 400) {
    res.writeHead(httpCode, {'Content-Type': 'application/json'});
    res.end(JSON.stringify(
        {
            message: message,
            success: false
        }));
}

function getSessionId(req, res) {
    //console.log(JSON.stringify(req.headers));

    // We added || "" because no such key "cookie" if we delete it from postman -
    // We cannot pass null value. Library only works with string or empty string.
    const cookies = cookie.parse(req.headers['cookie'] || "");
    console.log(cookies);

    return cookies.sess_id;
}

function deleteSession(user) {
    //findIndex method is used to find index in an array.
    let sessionIndex = sessions.findIndex( function (session) {
        return session.username === user.username;
    });

    // delete sessions[sessionIndex];
    sessions.splice(sessionIndex, 1);
}


function deleteSessionAndUser(user) {
    deleteSession(user);

    let userIndex = users.findIndex( function (currentUser) {
        return currentUser.username === user.username;
    });

    // delete users[userIndex];
    users.splice(userIndex, 1);
}

function getUser(req, res) {
    let sess_id = getSessionId(req, res);

    //If session-cookie doesn't exist we don't have a user.
    if (!sess_id) {
        return null;
    }

    //Return the value of the sess_id that was stored when a user logged in that's equal to the value of the
    //sess
    // console.log('sessions:', sessions);
    let session = sessions.find( function (session) {
        return session.sess_id === sess_id;
    });

    //If session doesn't exist we cannot compare username with session.
    if (!session) {
        return null;
    }
    //Return the value of the username that was created that's equal to the value of the username that logged in.
    return users.find( function (user) {
        return user.username === session.username;
    });
}

// We install library
// https://www.npmjs.com/package/cookie

function hello(req, res) {


    res.writeHead(200, {
        'Content-Type': 'text/html; charset=UTF-8',
    });
    res.end("Hello from Angie");
    return;


 /*   res.end(JSON.stringify(
        {
           message: "hello page" + req.method,
        }));

 */

}

function homepage(req, res) {
    if (!getSessionId(req, res)) {
        notAuthenticated(req, res);
        return;
    }
    let user = getUser(req, res);

    res.writeHead(200, {
        'Content-Type': 'application/json',
    });
    res.end(JSON.stringify(
        {
            message: "Home page",
            user: user,
        }));
}

function login(req, res) {
    // Accept from post username and password and if not found from array send back - notFound(req, res)
    let userData = req.parsedBody;

    let user = users.find(function (user) {
        return user.username === userData.username && user.password === userData.password
    });

    if (!user) {
        return error(req, res, "You are not authenticated.", 401);
    }
    let sess_id = `${user.username}_${user.password}`;
    sessions.push(
        {
            username: user.username,
            sess_id: sess_id,
        }
    );
    res.writeHead(200, {
        'Content-Type': 'application/json',
        'Set-Cookie': [
            `sess_id=${sess_id}; Path=/; Secure; HttpOnly`,
        ]
    });
    res.end(JSON.stringify(
        {
            message: "Hello",
            user: user,
        }));
}

function logout(req, res) {
    let user = getUser(req, res);
    if (!user) {
        error(req, res, "You should be logged in", 400);
        return;
    }
    deleteSession(user);
    deleteCookie(req, res, "You have successfully logged out.");
    // we will use this code in another project
    //deleteCookieAndRedirectToHello(req, res);
}

function deleteCookie(req, res, message) {
    res.writeHead(200, {
        'Content-Type': 'application/json',
        'Set-Cookie': [
            `sess_id=; Path=/; Secure; HttpOnly expires: ${new Date(1)}`,
        ],
    });
    res.end(JSON.stringify(
        {
            message: message,
            success: true
        }));
}

function deleteCookieAndRedirectToHello(req, res) {
    // 307 does not change HTTP HEADER to method - GET
    // res.writeHead(307, {
    res.writeHead(301, {
        'Content-Type': 'application/json',
        'Set-Cookie': [
            `sess_id=; Path=/; Secure; HttpOnly expires: ${new Date(1)}`,
        ],
        'Location': '/hello',
    });
    res.end();
}


function createUser(req, res) {
    let userData = req.parsedBody;

    let existingUser = users.find(function (user) {
        return user.username === userData.username;
    });

    if (existingUser) {
        return error(req, res, "User already exists!", 400);
    }

    users.push(
        {
            email: userData.email,
            username: userData.username,
            password: userData.password

        }
    );

    res.writeHead(200, {
        'Content-Type': 'application/json',
    });
    res.end(JSON.stringify(
        {
            message: "You have successfully signed up",
            success: true
        }));

    console.log(users);

}

function deleteUser(req, res) {
    //We get current user because we can delete only our self
    //and we should be logged in.
    let user = getUser(req, res);
    if (!user) {
        return error(req, res, "You should be logged in", 400);
    }
    deleteSessionAndUser(user);
    deleteCookie(req, res, "user has been successfully deleted.");
}

function startProcess(req, res) {
    if (getURL(req).startsWith('/hello')) {
        hello(req, res);
    } else if (getURL(req).startsWith('/api/homepage/')) {
        homepage(req, res);
    } else if (getURL(req).startsWith('/api/login/')) {
        login(req, res);
    } else if (getURL(req).startsWith('/api/logout/')) {
        logout(req, res);
    } else if (getURL(req).startsWith('/api/signup/')) {
        createUser(req, res);
    } else if (getURL(req).startsWith('/api/delete/')) {
        deleteUser(req, res);
    } else {
        notFound(req, res);
    }
}
