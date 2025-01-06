

// E:\xampp\htdocs\html5.local\angie\POSTMAN\10_es6_async_await\01_arrow>npm run example3

let printElement = (val) => console.log('VALUE:', val);
// https://www.w3schools.com/jsref/jsref_foreach.asp

[1,45,78,90,0].forEach(printElement);

// es6 function
let printElementIndex = (val, index) => console.log(`VALUE: ${val} with INDEX: ${index}`);
[166,77,99].forEach(printElementIndex);

// anonymous function
let printElementIndex_OLD_STYLE = function(val, index)  {
    console.log(`VALUE: ${val} with INDEX: ${index}`);
};

[100,200,300].forEach(printElementIndex_OLD_STYLE);


let roma = {
    name: "Roma",
    age: 39,
    citizenship: ['CY', 'UA'],
    // here we use NOOT ES6 we need "THIS" who belong to parent - ROMA object
    printCitizenship() {
        console.log(`${this.name} EVERYTHING IS OK`);
        // anonymous function
        this.citizenship.forEach(function(val) {
            //THIS ANONYMOUS FUNCTION HAS OWN THIS
            console.log(`${this.name} citizenship: ${val}`);
        });
    },
    printCitizenship_BEFORE_ES6() {
        console.log(`${this.name} EVERYTHING IS OK`);
        // anonymous function
        let thisMy = this; // create SCOPE VARIABLE
        let g = 123;
        this.citizenship.forEach(function(val) { //overrides/HIDE only "this" variable t its OWN
            //THIS ANONYMOUS FUNCTION HAS OWN THIS
            console.log(`${thisMy.name} | ${this.name} citizenship: ${val} g: ${g}`);
        });
    },
    // here we use NOT ES6 we need "THIS" who belong to parent - ROMA object
    printCitizenship_ES6() {
        // ES6 does not have OWN - THIS
        this.citizenship.forEach((val) => {
            //THIS will be from PARENT OBJECT
            console.log(`${this.name} citizenship: ${val}`);
        });
    },
};

roma.printCitizenship();
roma.printCitizenship_BEFORE_ES6();
roma.printCitizenship_ES6();





// TODAY FASHION IS - to separate data  and FUNCTION = FUNCTIONAL PROGRAMMING
// method PROGRAMMERS DO NOT ADD HERE
let angie = {
    name: "Angie Neo",
    age: 39,
    citizenship: ['CY', 'UA'],
};
// method PROGRAMMERS DO NOT ADD HERE
let george = {
    name: "George Neo",
    age: 38,
    citizenship: ['CY', 'DE'],
};

// SPREAD OBJECT in FUNCTION ARGUMENT - to ESCAPE - "this" at all. Not to have "this" word at all.
// We separate method and data not to have "this".
let printCitizenship = ({name, age, citizenship}) => {
    citizenship.forEach((val) => console.log(`${name} ${age} citizenship: ${val}`));
};

printCitizenship(angie);
printCitizenship(george);