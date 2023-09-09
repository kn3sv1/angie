// Node.js program to demonstrate the
// fs.readFileSync() method

// Include fs module
const fs = require('fs');


//--------------------------------part1

// Calling the readFileSync() method
// to read 'input.txt' file
// php like code - synchronous code - data will be available directly after callback function
const data = fs.readFileSync('./data/angie.txt', { encoding: 'utf8', flag: 'r' });
// this line will be blocked - paused by node.js until readFileSync will finish to read all file
// Display the file data
console.log(data); //console data from file
console.log("Hello world part1"); // console log Hello world only after printing Angie from file



//-------------------part2 example - asynchronous code

const angieCallback = function(err, data3){

    // Display the file content
    console.log("HERE exists: data3",err, data3);

    // if you need to work with data from file put code here in callback
    // not bellow fs.readFile because you will not have data from file

    //this is called callback hell because its difficult to write code - callback inside callback
};

// result will be received in callback function - asynchronous code

// function readFile says I will read file and when I finish I will call your function that you passed 3rd argument = angieCallback
fs.readFile('./data/angie.txt', { encoding: 'utf8', flag: 'r' }, angieCallback);
// here this line will be executed by node.js without waiting for fs.readFile
// Display the file data
// this line will be executed before fs.readFile finish or even start to work
//but if we didnt read file how we can give data
console.log("Hello world part2"); // print before reading file

// node file_sync.js