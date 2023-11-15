const person = {age: 32};

function getAdultYears(p) {
    p.age -= 18;
    return p.age;
}

console.log(getAdultYears(person));
console.log(person);

//output:

//14
//{age: 14}

//This is incorrect because the value of the original property of person object should stay the same (32)
//only the value of the property of the object used in the function should change. The reason for this is because objects
//are reference values - what's stored in person is only the address of that object so (p) of getAdultYears is the address
//of that object so p.age tells javascript to look up the object for that address and give the age property of that object,
//but when I change the age property by - 18 I don't just change it inside the function but also above because it's the same
//object stored in memory and one address.

//A solution for the problem above would be not to overwrite the value (p.age -= 18) but to return the result of the existing
//value - 18

const person = {age: 32};

function getAdultYears(p) {
    return p.age - 18;
}

console.log(getAdultYears(person));
console.log(person);

//output:

//14
//{age: 32}
