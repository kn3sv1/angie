var http = require('http');
var url = require('url');

// https://frontendguruji.com/blog/how-to-parse-post-request-in-node-js-without-expressjs-body-parser/

function convertChunksToObject(chunks) {
    // Buffer is used to handle the binary streams of data. Binary/hexadecimal array of chunks.
    const data = Buffer.concat(chunks);
    //console.log("Data: ", data);

    // We can convert it to string to get a readable format.
    const stringData = data.toString();
    //console.log("stringData: ", stringData);

    // stringData:  name=Angie&surname=Neophytou we convert "URLSearchParams"
    // URLSearchParams - google what it is.
    const parsedData = new URLSearchParams(stringData);

    //console.log("parsedData: ", parsedData);
    // https://stackoverflow.com/questions/8648892/how-to-convert-url-parameters-to-a-javascript-object
    // Convert URLSearchParams object to our own plain object
    //Copy key and value from "URLSearchParams" to "dataObj"
    const dataObj = {};
    for (var pair of parsedData.entries()) {
        let key = pair[0];
        dataObj[key] = pair[1];
    }
    //console.log("DataObj: ", dataObj);

    // let f = { name: 'Angie', surname : 'Neophytou' };
    // for (var p of Object.entries(f)) {
    //     console.log("p: ", p);
    // }
    //  // Result of work:
    // // p:  [ 'name', 'Angie' ]
    // // p:  [ 'surname', 'Neophytou' ]


    return dataObj;
}

http.createServer(function(req, res) {
    const chunks = [];
    req.on("data", (chunk) => {
        chunks.push(chunk);
    });
    req.on("end", () => {
        //console.log("all parts/chunks have arrived");
        let dataObj = convertChunksToObject(chunks);
        startProcess(req, res, dataObj)
    });
}).listen(5000);

let weatherCities = [
    {
        city: "Limassol",
        temperature: 17,
        humidity: 86,
        wind_speed: 6,
        air_quality: "fair",
        icon: "sun",
    },
    {
        city: "Paphos",
        temperature: 20,
        humidity: 80,
        wind_speed: 11,
        air_quality: "moderate",
        icon: "sun with clouds",
    },
    {
        city: "Larnaka",
        temperature: 15,
        humidity: 84,
        wind_speed: 4,
        air_quality: "moderate",
        icon: "sun",
    },
    {
        city: "Nicosia",
        temperature: 14,
        humidity: 84,
        wind_speed: 12,
        air_quality: "fair",
        icon: "sun with clouds",
    },

];

function getURL(req) {
    // /api/weather or /api/weather/ will work

    // IF "/api/weather/" I will remove '/' and add '/'
    // IF "/api/weather" I will remove NOTHING and add '/'
    return req.url.replace(/\/+$/, '') + '/';
}

function startProcess(req, res, dataObj) {
    //if (getURL(req) !== '/api/weather/') {
    if (!getURL(req).startsWith('/api/weather/')) {
        res.writeHead(404, {'Content-Type': 'application/json'});
        res.end(JSON.stringify(
            {
                message: "API path does not match",
                dataObj: dataObj,
            }));
        return;
    }
    let result = weatherCities;
    var q = url.parse(req.url, true).query;
    //console.log("q: ", q.city);
    if (q.city) {
        // https://www.w3schools.com/js/js_arrow_function.asp
        // result = weatherCities.find((weather) => weather.city === q.city);

        // callback function
        // https://www.w3schools.com/jsreF/jsref_find.asp
        result = weatherCities.find(function (weather) { return weather.city.toLowerCase() === q.city.toLowerCase(); });
    }

    // My test case is all in this function
    res.writeHead(200, {'Content-Type': 'application/json'});
    res.end(JSON.stringify(
        {
            message: "ChUNKS are logged in console",
            dataObj: dataObj,
            result: result,
        }));
}
