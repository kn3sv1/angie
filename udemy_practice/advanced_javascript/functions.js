//functions and default parameters

function greetUser(someName) {
    console.log('Hi' + ' ' + someName + '!');
}

greetUser();

//outputs:
//Hi undefined!

function greetUser(greetingPrefix, userName = 'user') {
    console.log(greetingPrefix + ' ' + userName + '!');
}

greetUser('Hi', 'Max');
greetUser('Hello');

//outputs:
//Hi Max!
//Hello user!

//Rest parameters and the spread operator

function sumUp() {
    
}

