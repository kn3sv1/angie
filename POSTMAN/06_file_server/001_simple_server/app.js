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
    // Benefits of using regex is to check any name of file with extension .css
    // In that way any css file that is requested and we might have in our public folder will be included.
    } else if(req.url.match("\.css$")){
    // Bellow we check for specific file name or names in the req.url.
    //} else if(req.url === "/angie.css"){
    //} else if(["/angie.css", "/angie5.css"].includes(req.url)) {
        // E:\xampp\htdocs\html5.local\angie\POSTMAN\06_file_server\001_simple_server public /angie.css
        console.log(__dirname, 'public', req.url);
        var cssPath = path.join(__dirname, 'public', req.url);
        //  "UTF-8" - this argument only provided for text files.
        var fileStream = fs.createReadStream(cssPath, "UTF-8");
        res.writeHead(200, {"Content-Type": "text/css"});
        //write to response object our stream file that we read from disc.
        fileStream.pipe(res);

    } else if(req.url.match("\.js$")){
        var jsPath = path.join(__dirname, 'public', req.url);
        // var fileStream = fs.createReadStream(jsPath, "UTF-8");
        // res.writeHead(200, {"Content-Type": "application/javascript"});
        // // https://www.geeksforgeeks.org/what-is-piping-in-node-js/
        // fileStream.pipe(res);

        // https://medium.com/@ketanpradhan/reading-a-large-files-in-nodejs-39284ef797f4
        // https://www.boardinfinity.com/blog/how-to-read-a-file-in-node-js/
        // https://www.geeksforgeeks.org/what-is-chunk-in-node-js/
        // https://m-mdy-m.medium.com/buffers-in-node-js-c285f5416fdb
        // https://www.geeksforgeeks.org/node-js-response-write-method/
        // https://webcluesinfo.medium.com/buffer-objects-handling-binary-data-in-node-js-1e742475b96f

        var fileStream = fs.createReadStream(jsPath); //  "UTF-8" - PROBLEM will be
        res.writeHead(200, {"Content-Type": "application/javascript"});
        const chunks = [];
        fileStream.on("data", (chunk) => {
            // Received 65536 bytes of data.
            // 65536/1024 = 64kb (kilobytes)
            console.log(`Received ${chunk.length} bytes of data.`);
            chunks.push(chunk);
        });
        fileStream.on("end", () => {
            console.log('FINISHED to read FILE:' + new Date());
            // // version 1
            // chunks.forEach((chunk) => {
            //     console.log('CHUNK is:', chunk);
            //     res.write(chunk);
            // });

            // version 2
            const buff = Buffer.concat(chunks);
            res.write(buff);
            res.end();
        });

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
        //res.end("No Page Found");

        res.write("No Page Found");
        res.end();
    }

}).listen(3000);
