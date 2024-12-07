var http = require('http');
var url = require('url');
const { convertChunksToObject } = require('./convertChunksToObject');

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
];
function validCity(newCity) {
    return !weatherCities.find((allCities) => allCities.city === newCity.city);
}

function sendErrorMessage(res, errorText) {
    res.writeHead(400, {'Content-Type': 'application/json'});
    res.end(JSON.stringify(
        {
            message: errorText,
        }));
}

function startProcess(req, res) {
    if (req.method === 'POST') {
        let q = url.parse(req.url, true).query;
        if (q.clean) {
            weatherCities = [];
            res.writeHead(200, {'Content-Type': 'application/json'});
            res.end(JSON.stringify(
                {
                    message: "Cities are cleared",
                }));
            return;
        }
        if (validCity(req.parsedBody)) {
            weatherCities.push(req.parsedBody);

            res.writeHead(200, {'Content-Type': 'application/json'});
            res.end(JSON.stringify(
                {
                    cityCreatedIndex: weatherCities.length - 1,
                    cityCreated: req.parsedBody.city,
                }));
            return;
        } else {
            sendErrorMessage(res, "City already exists");
            return;
        }
    }
    if (req.method === 'PATCH') {
        // 1 step get city
        // 2 step update object
        let q = url.parse(req.url, true).query;
        if (!q.city?.trim()) {
            sendErrorMessage(res, "City not provided");
            return;
        }
        let cityFoundIndex = weatherCities.findIndex(function (weather) { return weather.city.toLowerCase() === q.city.toLowerCase(); });
        console.log(`cityFoundIndex = ${cityFoundIndex}`);
        if (cityFoundIndex === -1) {
            sendErrorMessage(res, "City not found");
            return;
        }
        // here we always have city
        weatherCities[cityFoundIndex] = req.parsedBody;


    }

     // My test case is all in this function
    res.writeHead(200, {'Content-Type': 'application/json'});
    res.end(JSON.stringify(
        {
            // message: "ChUNKS are logged in console",
            // parsedBody: req.parsedBody,
            weatherCities: weatherCities,
        }));
}
