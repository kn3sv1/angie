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


function sendErrorMessage(res, errorText) {
    res.writeHead(400, {'Content-Type': 'application/json'});
    res.end(JSON.stringify(
        {
            message: errorText,
        }));
}

function notAuthenticated(req, res) {
    res.writeHead(401, {'Content-Type': 'application/json'});
    res.end(JSON.stringify(
        {
            message: "Not authenticated",
        }));
}

function notFound(req, res) {
    res.writeHead(404, {'Content-Type': 'application/json'});
    res.end(JSON.stringify(
        {
            message: "Route not found",
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

function getUser(req, res) {
    let sess_id = getSessionId(req, res);
    let session = sessions.find( function (session) {
        return session.sess_id === sess_id;
    });

    return users.find( function (user) {
        return user.username === session.username;
    });
}

// We install library
// https://www.npmjs.com/package/cookie

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
        res.writeHead(401, {'Content-Type': 'application/json'});
        res.end(JSON.stringify(
            {
                error: "You are not authenticated.",
                success: false
            }));
        return;
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

}

function createUser(req, res) {

}

function deleteUser(req, res) {

}

function startProcess(req, res) {
    if (getURL(req).startsWith('/api/homepage/')) {
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
