var http = require('http');
var fs = require('fs');
var path = require('path');

http.createServer(function(req, res) {
    if(req.url === "/"){
        fs.readFile("./public/index.html", "UTF-8", function(err, html){
            res.writeHead(200, {"Content-Type": "text/html"});
            res.end(html);
        });
    } else if(req.url.match("api/weather/limassol$")){
        res.writeHead(200, {'Content-Type': 'application/json'});
        res.end(JSON.stringify({
            city: "Limassol",
            photo: "limassol.jpg",
            temperature: 17,
            humidity: 86,
            wind_speed: 6,
            air_quality: "fair",
            icon: "sun",
        }));
    } else if(req.url.match("\.css$")){
        // E:\xampp\htdocs\html5.local\angie\POSTMAN\06_file_server\001_simple_server public /angie.css
        console.log(__dirname, 'public', req.url);
        var cssPath = path.join(__dirname, 'public', req.url);
        //  "UTF-8" - this argument only provided for text files.
        var fileStream = fs.createReadStream(cssPath, "UTF-8");
        res.writeHead(200, {"Content-Type": "text/css"});
        //write to response object our stram file that we read from disc.
        fileStream.pipe(res);

    } else if(req.url.match("\.js$")){
        var jsPath = path.join(__dirname, 'public', req.url);
        var fileStream = fs.createReadStream(jsPath, "UTF-8");
        res.writeHead(200, {"Content-Type": "application/javascript"});
        fileStream.pipe(res);
    } else if(req.url.match("\.png$")){
        var imagePath = path.join(__dirname, 'public', req.url);
        // here we don't have this argument "UTF-8". We read as binary.
        var fileStream = fs.createReadStream(imagePath);
        res.writeHead(200, {"Content-Type": "image/png"});
        fileStream.pipe(res);
    } else if(req.url.match("\.jpg$")){
        var imagePath = path.join(__dirname, 'public', req.url);
        var fileStream = fs.createReadStream(imagePath);
        res.writeHead(200, {"Content-Type": "image/jpg"});
        fileStream.pipe(res);
    } else if(req.url.match("\.jpeg$")){
        var imagePath = path.join(__dirname, 'public', req.url);
        var fileStream = fs.createReadStream(imagePath);
        res.writeHead(200, {"Content-Type": "image/jpeg"});
        fileStream.pipe(res);
    } else {
        res.writeHead(404, {"Content-Type": "text/html"});
        res.end("No Page Found");
    }

}).listen(3000);
