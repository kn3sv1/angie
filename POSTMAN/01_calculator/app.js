var http = require('http');
var url = require('url');

// https://stackoverflow.com/questions/9011524/regex-to-check-whether-a-string-contains-only-numbers
// In link we found solution for JS regex.
function checkIfDigitWithSign(val) {
    // var reg = new RegExp('^-?\\+?[0-9]+$');
    // console.log(reg.test("++77777"));

    // [0-9]+ = digit sequence is unlimited from 0 - 9
    // -? = optional - sign. Only once
    // \+? = optional + sign. Only once
    let reg = new RegExp('^-?\\+?[0-9]+$');
    return reg.test(val);
}

http.createServer( function (req, res) {
    //WE DONT USE HERE BECAUSE WE CANNOT SENT TWICE THIS COMMAND. WE USE ONLY ONCE res.writehead().
    //res.writeHead(200, {'Content-Type': 'application/json'});
    //Use the url module to turn the querystring into an object:
    var q = url.parse(req.url, true).query;

    // Test Case 6.3 from OneNote.
    if (!q.num1 || !q.num2) {
        //res.statusCode = 400; // This works but I also need content type so I just use another command bellow:
        res.writeHead(422, {'Content-Type': 'application/json'});
        const responseData = JSON.stringify({error: "num1 or num2 is not provided"});
        res.end(responseData);
        return;
    }

    // Test Case 6.4 from OneNote.
    if (!checkIfDigitWithSign(q.num1) || !checkIfDigitWithSign(q.num2)) {
        //res.statusCode = 400; // This works but I also need content type so I just use another command bellow:
        res.writeHead(422, {'Content-Type': 'application/json'});
        const responseData = JSON.stringify({error: "num1 or num2 is not of type integer"});
        res.end(responseData);
        return;
    }

    //First negative test case 6.2 from OneNote.
    let correctNum1 = parseInt(q.num1) >= -1000 && parseInt(q.num1) <= +1000;
    let correctNum2 = parseInt(q.num2) >= -1000 && parseInt(q.num2) <= +1000;
    if (!correctNum1 || !correctNum2) {
        //res.statusCode = 400; // This works but I also need content type so I just use another command bellow:
        res.writeHead(400, {'Content-Type': 'application/json'});
        const responseData = JSON.stringify({error: "num1 or num2 not in valid range"});
        res.end(responseData); // End of response and not allowed to write another end to response.
        // Very important to return so we dont write to res object bellow of this if block.
        return; // So function exits here and nothing bellow this will be executed.
    }


    // Positive test case last block
    let result = {
        num1: parseInt(q.num1),
        num2: parseInt(q.num2),
        total: parseInt(q.num1) + parseInt(q.num2)
    };

    console.log(q.num1, q.num2);

    res.writeHead(200, {'Content-Type': 'application/json'});
    const responseData = JSON.stringify(result);
    res.end(responseData);


}).listen(5000);