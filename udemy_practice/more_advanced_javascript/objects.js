// Object literal notation
const job = {
    title: 'Developer',
    location: 'New York',
    salary: 50000
};

// Built-in blue print or built-in class/constructor function
console.log(new Date().toISOString());

// creating another object for a second job
const job2 = {
    title: 'cook',
    location: 'Munich',
    salary: 35000
};

// Our own blue-print/class to create multiple objects with different property values and methods if needed.

class Job {
    constructor(jobTitle, place, salary) {
        this.title = jobTitle;
        this.location = place;
        this.salary = salary;
    }

    describe() {
        console.log(`I'm a ${this.title}, I work in ${this.location} and I earn ${this.salary}.`);
    }
}

const developer = new Job('Developer', 'New York', '50000');
const cook = new Job('cook', 'Munich', '35000');
console.log(developer);
developer.describe();
cook.describe();

