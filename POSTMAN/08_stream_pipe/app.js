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

    var fileStream = fs.createReadStream('./utf-8-example.txt'); //  "UTF-8" - PROBLEM will be
    res.writeHead(200, {"Content-Type": "text/html"});


    const chunks = [];
    fileStream.on("data", (chunk) => {
        // https://stackoverflow.com/questions/70921128/how-to-get-the-size-of-data-in-a-node-js-stream
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

    // pipe inside when he finish end event he call end on stream.
    // fileStream.pipe(res);
    // //TEST WITHOUT - END
    // https://stackoverflow.com/questions/35651834/res-end-is-never-sent-after-streaming-a-file-to-client+?fbclid=IwAR2GMbhl6-MkqQ7E-Z2n7QXxyZ3eEitZ-GThPxtOF1Rga5WvOM5-jURKPSI
    // https://stackoverflow.com/questions/27509711/node-http-res-end
    // fileStream.on("end", () => {
    //     console.log('FINISHED to read FILE:' + new Date());
    //     res.end();
    // });

}).listen(3000);
