var http = require('http');
var url = require('url');

// https://frontendguruji.com/blog/how-to-parse-post-request-in-node-js-without-expressjs-body-parser/

http.createServer( function (req, res) {
    const chunks = [];
    req.on("data", (chunk) => {
        chunks.push(chunk);
    });
    req.on("end", () => {
        console.log("all parts/chunks have arrived");
        // Buffer is used to handle the binary streams of data. Binary/hexadecimal array of chunks.
        const data = Buffer.concat(chunks);
        console.log("Data: ", data);

        // We can convert it to string to get a readable format.
        const stringData = data.toString();
        console.log("stringData: ", stringData);


        const parsedData = new URLSearchParams(stringData);
        const dataObj = {};
        for (var pair of parsedData.entries()) {
            dataObj[pair[0]] = pair[1];
        }
        console.log("DataObj: ", dataObj);

        res.writeHead(200, {'Content-Type': 'application/json'});
        res.end(JSON.stringify(
            {
            message: "ChUNKS are loged in console",
            stringData: stringData,
        }));
    });

}).listen(5000);