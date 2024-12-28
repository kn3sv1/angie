var http = require('http');
var fs = require('fs');


// cd E:\xampp\htdocs\html5.local\angie\POSTMAN\07_buffer\01_simple
// nodemon ./app.js
// http://localhost:3000/
http.createServer(async function(req, res) {
    if (req.url === '/favicon.ico') {
        res.end('no icon');
        return;
    }
    // res.writeHead(200, {"Content-Type": "text/html"});
    // check in console WHAT BROWSER use by default:
    // document.characterSet

    // HOW TO SAY TO BROWSER WHAT WE ARE SENDING
    // https://stackoverflow.com/questions/43148464/how-do-browsers-determine-the-encoding-used
    // option 1 - is preferred way
    res.writeHead(200, {"Content-Type": "text/html; charset=utf8"});
    // option 2
    //res.write('<head><meta charset="UTF-8"></head>');
    res.write('Hello');
    res.write(' world');

    res.write('<p style="color: blue">Hello from Angie<p/>');


    const buffer = Buffer.from("<p style='color:blue'>Hello from Buffer Roma Сатановский</p>", 'utf8');
    res.write(buffer);

    var Iconv = require('iconv').Iconv;
    var iconv = new Iconv('cp1251', 'utf8');

    // not supported
    //var data = fs.readFileSync('./windows-1251_example.txt', { encoding: 'cp1251' });
    // we read as BINARY
    var data = fs.readFileSync('./windows-1251_example.txt');
    //and  we CONVERT from 'cp1251' to 'utf-8'
    const decoded = iconv.convert(data).toString();
    //console.log(decoded);
    res.write(decoded);


    // 3) ASYNC
    // fs.readFile('utf-8-example.txt', 'utf8', (err, dataCallback) => {
    //     res.write(dataCallback);
    //     //so we move here after we finish to read.
    //     res.end();
    // });

    // will not wait for fs.readFile('utf-8-example.txt' callback.
    // res.end();

    // https://stackoverflow.com/questions/46867517/how-to-read-file-with-async-await-properly
    //const dataFromFile = await fs.promises.readFile('./utf-8-example.txt', 'utf8');
    const dataFromFile = await fs.promises.readFile('./utf-8-example.txt');
    // console.log(dataFromFile);
    console.dir(dataFromFile);
    res.write(dataFromFile);

    // 4) ASYNC WRAPPER
    async function readFile(path) {
        return new Promise((resolve, reject) => {
            fs.readFile(path, 'utf8', function (err, data) {
                if (err) {
                    reject(err);
                }
                resolve(data);
            });
        });
    }
    const dataFromFile3 = await readFile("./utf-8-example.txt");
    res.write(dataFromFile3);

    res.end();

}).listen(3000);
