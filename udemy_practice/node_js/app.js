const userName = 'Angie ';
console.log(userName);


// E:\xampp\htdocs\html5.local\angie\udemy_practice\node_js>node app.js
// Angie
// E:
// cd E:\xampp\htdocs\html5.local\angie\udemy_practice\node_js

const http = require('http');

function handleRequest(request, response) {
    if (request.url === '/currenttime') {
        response.statusCode = 200;
        response.end('<h1>' + new Date().toISOString() + '</h1>');
    } else if (request.url === '/') {
        response.end('<h1>Hello World!</h1>');
    }
}
//
// const server = http.createServer(handleRequest);
//
// server.listen(3000);

//Creating a server with the ExpressJS package we installed with npm (node package manager)

//this is a core nodeJS package that is installed into nodeJS - the file system package
const fs = require('fs');

const path = require('path');

const express = require('express');

const app = express();

//this is a request handler that executes for all incoming requests and through express method (urlencoded)
//translates the text that we sent through post method into a javaScript object.

app.use(express.urlencoded({extended: false}));

app.get('/currenttime', function (req, res) {
    res.send('<h1>' + new Date().toISOString() + '</h1>');
}); //localhost:3000/currenttime

app.get('/', function (req, res) {
    res.send('<form action="/store-user" method="post"><label for="">Your name: </label><input type="text" name="username"><button>Submit</button></form>');
}); //localhost:3000/

app.post('/store-user', function (req, res) {
    const userName = req.body.username;
    console.log(userName);

    const filePath = path.join(__dirname, 'data', 'users.json');

    const fileData = fs.readFileSync(filePath);

    const existingUsers = JSON.parse(fileData);

    existingUsers.push(userName);

    fs.writeFileSync(filePath, JSON.stringify(existingUsers));

    res.send('<h1>Username stored!</h1>');
});

app.get('/users', function (req, res) {
    const filePath = path.join(__dirname, 'data', 'users.json');

    const fileData = fs.readFileSync(filePath);
    const existingUsers = JSON.parse(fileData);

    let responseData = '<ul>';

    for (const user of existingUsers) {
        responseData += '<li>' + user + '</li>'
    }

    responseData += '</ul>';

    res.send(responseData);
});

app.listen(3000);

