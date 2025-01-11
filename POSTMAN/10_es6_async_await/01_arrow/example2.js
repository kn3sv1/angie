

// E:\xampp\htdocs\html5.local\angie\POSTMAN\10_es6_async_await\01_arrow>npm run example2

//example 2.1
// setTimeout(function () {
//     console.log("hello");
// }, 2000);

//example 2.2
// setTimeout(() => {
//     console.log("hello");
// }, 2000);

//example 2.3
// let fn = () => {
//     console.log("hello");
// };
// setTimeout(fn, 2000);

function hello(name, surname) {
    console.log(`hello ${name} ${surname}`);
}

let helloNew = (name, surname) => {
    console.log(`hello ${name} ${surname}`);
};

// hello('Roma', 'Sat');
// helloNew('Angie', 'Neo');

//require without any params
setTimeout(() => helloNew('Angie', 'Neo'), 2000);

let helloNew2 = () => helloNew('Angie2', 'Neo2');
setTimeout(helloNew2, 2000);

// https://www.w3schools.com/js/js_function_closures.asp
// closure
let counterLong = (initialValue) => {
    return () => {
        //INCREASE and after RETURN
        // initialValue++ - return and after increase
        ++initialValue;
        return initialValue;
    }
};
let counterShort = (initialValue) => {
    return () => ++initialValue;
};

let c1 = counterLong(0);
console.log('LONG:', c1());
console.log('LONG:', c1());

// how many times we called function
let c2 = counterShort(0);
console.log('SHORT:', c2());
console.log('SHORT:', c2());

let printC2 = () => {
    console.log(c2());
};
setInterval(printC2, 2000);