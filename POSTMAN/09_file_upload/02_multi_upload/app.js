var http = require('http');
var formidable = require('formidable');
var fs = require('fs');

http.createServer(function (req, res) {
    if (req.url == '/fileupload') {
        var form = new formidable.IncomingForm();
        form.parse(req, function (err, fields, files) {
            console.log('fields:', fields);
            console.log('files:', files);

            // Safe Property Access in JavaScript - not needed here in this example
            // but we use anyway to see how it works.
            console.log('firstname:', fields?.firstname[0]);
            console.log('lastname:', fields?.lastname[0]);

            // To see property
            // console.log(files);
            // I added - [0] when I saw that array exists inside property.

            // we go through array of files
            //we use fs.copyFileSync because we want to send multiple files. If two or more files
            // its big problem with callback - callbacks execute randomly in order and we need to handle res.end()
            // res.end() should be called after all uploads.
            // Safe Property Access in JavaScript - if we don't submit file we need this to check if this
            // property exists.
            if (files?.filetoupload) {
                for (const file of files.filetoupload) {
                    console.log("filepath:", file.filepath);

                    var oldpath = file.filepath;
                    console.log('oldpath:', oldpath);
                    var newpath = __dirname + '\\uploaded\\' + 'upload_' + file.originalFilename;
                    try {
                        fs.copyFileSync(oldpath, newpath);
                        res.write('File uploaded:' + 'upload_' + file.originalFilename);
                        res.write("\n");
                    } catch(err) {
                        throw err;
                    }
                }
            }
            //we should have only once with index 0 - files.filetoupload[0]
            res.end('END');

            // old code - for the first file

            // var oldpath = files.filetoupload[0].filepath;
            // console.log('oldpath:', oldpath);
            // var newpath = __dirname + '\\uploaded\\' + 'upload_' + files.filetoupload[0].originalFilename;
            // try {
            //     fs.copyFileSync(oldpath, newpath);
            //     res.write('File uploaded and COPIED!');
            //     res.end();
            // } catch(err) {
            //     throw err;
            // }
        });
    } else {
        res.writeHead(200, {'Content-Type': 'text/html'});
        res.write('<form action="fileupload" method="post" enctype="multipart/form-data">');
        res.write('<input type="text" name="firstname"><br>');
        res.write('<input type="text" name="lastname"><br>');
        res.write('<input type="file" name="filetoupload"><br>');
        // we added second input field to send two files the same time.
        res.write('<input type="file" name="filetoupload"><br>');
        res.write('<input type="submit">');
        res.write('</form>');

        return res.end();
}
}).listen(8080);