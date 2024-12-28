var http = require('http');
var fs = require('fs');


// cd E:\xampp\htdocs\html5.local\angie\POSTMAN\08_stream_pipe
// nodemon ./app.js
// http://localhost:3000/
http.createServer(async function(req, res) {
    if (req.url === '/favicon.ico') {
        res.end('no icon');
        return;
    }
    res.writeHead(200, {"Content-Type": "text/html; charset=utf8"});

    res.end();

}).listen(3000);
