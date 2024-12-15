
//Core packages of node.js
var http = require('http');
// var url = require('url');

const { convertChunksToObject } = require('../convertChunksToObject');

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

function getURL(req) {
    // /api/weather or /api/weather/ will work

    // IF "/api/weather/" I will remove '/' and add '/'
    // IF "/api/weather" I will remove NOTHING and add '/'
    return req.url.replace(/\/+$/, '') + '/';
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

function apiWeather() {

}

function startProcess(req, res) {
    if (getURL(req).startsWith('/static')) {
        fileServer(req, res);
    } else if (getURL(req).startsWith('/api/weather/')) {
        apiWeather(req, res);
    } else {
        notFound(req, res);
    }
}
