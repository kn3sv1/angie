const fs = require('fs/promises');

// Synchronous way
//
// function readFile() {
//     let fileData;
//     fileData = fs.readFileSync('data.txt');
//
// //  console.log(fileData);
//     console.log(fileData.toString());
//     console.log('Hi there');
// }
//
// readFile();

// Asynchronous way

   function readFile() {
       let fileData;
       //using a callback (without requiring the promises of the fs package - require('fs/promises'))
//     fs.readFile('data.txt', function (error, fileData) {
//        if (error) {
//           //....
//        }
//         console.log('File parsing done!');
//         console.log(fileData.toString());
//         //start another async task that sends the data to a database
//     });

    fs.readFile('data.txt')
      .then(function (fileData) {
        console.log('File parsing done!');
        console.log(fileData.toString());
      })
      .then(function () {})
      .catch(function (error) {
          console.log(error);
      })

       console.log('Hi there');
   }

readFile();
