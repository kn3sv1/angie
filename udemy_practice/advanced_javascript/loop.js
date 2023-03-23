const myName = 'Angie';

if (myName === 'Angie') {
    console.log('Hello!');
}

let isLoggedIn = true;

if (isLoggedIn === true) {
    console.log('User is logged in!');
}
//LOOPS:

//For loop:

for (let i = 0; i < 10; i++) {
    console.log(i);
}

//For of loop:

const users = ['Max', 'Anna', 'Joel'];

for (const user of users) {
    console.log(user);
}

//For in loop:

const loggedInUser = {
    name: 'Max',
    age: 32,
    isAdmin: true
}

for (const propertyName in loggedInUser) {
    //the individual property names in the object
    console.log(propertyName);
    //the key - value pairs of each property name in the object
    console.log(loggedInUser[propertyName]);
}

//The while loop:

let isFinished = false;

//while loop works until its true. Confirm() returns true or false depending what you choose from pop-up ok or cancel.
// while (false) - will stop WHILE WORK!!!!
// "isFinished = true" => "!isFinished = false" => "while (false)" - WILL STOP
while (!isFinished) {
    isFinished = confirm('Do you want to quit?');
    console.log('YOU CHOOSED:', isFinished);
}

console.log('Done!');
