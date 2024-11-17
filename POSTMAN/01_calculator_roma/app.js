var http = require('http');
var url = require('url');

// https://www.w3schools.com/nodejs/nodejs_http.asp

// http://localhost:8080/?num1=4&num2=40

http.createServer(function (req, res) {
    //res.writeHead(200, {'Content-Type': 'text/html'});
    res.writeHead(200, {'Content-Type': 'application/json'});
    var q = url.parse(req.url, true).query;
    //var txt = q.num1 + " " + q.num2;


    //res.write(req.url + ' txt: ' + txt);
    //res.end();

    let calc = {
        num1: parseInt(q.num1),
        num2: parseInt(q.num2),
        total: parseInt(q.num1) + parseInt(q.num2),
    };
    const jsonContent = JSON.stringify(calc);
    res.end(jsonContent);

}).listen(8080);