var http = require('http');
var formidable = require('formidable');
var fs = require('fs');

http.createServer(function (req, res) {
    if (req.url == '/fileupload') {
        var form = new formidable.IncomingForm();
        form.parse(req, function (err, fields, files) {
            // To see property
            //console.log(files);
            // I added - [0] when I saw that array exists inside property.
            var oldpath = files.filetoupload[0].filepath;
            console.log('oldpath:', oldpath);
            // var newpath = 'C:\\temp2\\' + files.filetoupload[0].originalFilename;
            // // DOES NOT WORK ON DIFFERENT DISKS
            // fs.rename(oldpath, newpath, function (err) {
            //     if (err) throw err;
            //     res.write('File uploaded and moved!');
            //     res.end();
            // });
            var newpath = __dirname + '\\uploaded\\' + 'upload_' + files.filetoupload[0].originalFilename;
            // fs.copyFile - works through DIFFERENT DISKS
            fs.copyFile(oldpath, newpath, function (err) {
                if (err) throw err;
                res.write('File uploaded and COPIED!');
                res.end();
            });
        });
    } else {
        res.writeHead(200, {'Content-Type': 'text/html'});
        res.write('<form action="fileupload" method="post" enctype="multipart/form-data">');
        res.write('<input type="file" name="filetoupload"><br>');
res.write('<input type="submit">');
res.write('</form>');
return res.end();
}
}).listen(8080);