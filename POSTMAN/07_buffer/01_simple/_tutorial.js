var http = require('http');
var fs = require('fs');


// cd E:\xampp\htdocs\html5.local\angie\POSTMAN\06_file_server\001_simple_server
// nodemon app_buffer.js
// http://localhost:3000/
http.createServer(async function(req, res) {
    if (req.url === '/favicon.ico') {
        res.end();
        return;
    }
    console.log('request URI:', req.url);

    res.writeHead(200, {"Content-Type": "text/html"});

    res.write("<p style='color:red'>RED HTML</p>");
    res.write("EXAMPLE SIMPLE TEXT");


    const buffer = Buffer.from("<p style='color:blue'>Hello from Buffer HTML</p>", 'utf8');
    res.write(buffer);

    //emulate  fs.readFile
    let arrOfChunks = [
        Buffer.from("<p style='color:deeppink'>Hello from Buffer HTML CHUNK1</p>"),
        Buffer.from("<p style='color:deeppink'>Hello from Buffer HTML CHUNK2</p>"),
        Buffer.from("<p style='color:deeppink'>Hello from Buffer HTML CHUNK3</p>"),
    ];
    arrOfChunks.forEach((chunkBuffer) => {
       res.write(chunkBuffer);
    });

    // example 3
    // fs.readFile: You have to include 'utf8' after the filename as an additional parameter,
    // otherwise it will just return a buffer|BUFFER object with DATA INSIDE.
    var data = fs.readFileSync('example.txt');
    console.log('DATA:', data);
    res.write(data);


    // https://stackoverflow.com/questions/9168737/read-a-text-file-using-node-js
    // https://stackoverflow.com/questions/10058814/get-data-from-fs-readfile
    // https://nodejs.org/en/learn/manipulating-files/reading-files-with-nodejs
    await fs.readFile('example.txt', (err, data2) => {
        console.log('DATA2:', data2);
        res.write("<br />");
        res.write(data2);
        console.log('END');
        res.end();
    });

    //WILL NOT WORK - NEXT LESSON AWAIT - readFILE
    // we need to WRAP WITH PROMISE: https://www.puruvj.dev/blog/fs-promises
    // https://stackoverflow.com/questions/46867517/how-to-read-file-with-async-await-properly
    // https://www.geeksforgeeks.org/node-js-fs-readfile-method/
    // console.log('END');
    // res.end();
}).listen(3000);
