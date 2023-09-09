const userName = 'Angie ';
console.log(userName);


// E:\xampp\htdocs\html5.local\angie\udemy_practice\node_js>node app.js
// Angie
// E:
// cd E:\xampp\htdocs\html5.local\angie\udemy_practice\node_js

const http = require('http');

function handleRequest(request, response) {
    response.statusCode = 200;
    response.end('<h1>Hello World from 4000!</h1>');
}

const server = http.createServer(handleRequest);

server.listen(4000);
