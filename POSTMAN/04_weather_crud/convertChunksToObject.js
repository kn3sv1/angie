// https://frontendguruji.com/blog/how-to-parse-post-request-in-node-js-without-expressjs-body-parser/

function convertChunksToObject(req, chunks) {
    // Buffer is used to handle the binary streams of data. Binary/hexadecimal array of chunks.
    const data = Buffer.concat(chunks);
    //console.log("Data: ", data);

    // We can convert it to string to get a readable format.
    const stringData = data.toString();
    // console.log("stringData: ", stringData);
    if (!stringData) {
        return {};
    }

    let contentType = req.headers['content-type'];
    if (contentType === 'application/json') {
        return  JSON.parse(stringData);
    }

    // THIS BELOW ONLY FOR FORM

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

module.exports = {
    convertChunksToObject: convertChunksToObject,
};
