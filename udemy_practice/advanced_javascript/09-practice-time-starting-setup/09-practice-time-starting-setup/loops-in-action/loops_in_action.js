// First Example: Sum numbers

const calculateSumButtonElement = document.querySelector('#calculator button');

function calculateSum() {
    const userNumberInputElement = document.getElementById('user-number');
    const enteredNumber = userNumberInputElement.value;

    let sumUpToNumber = 0;


    for (let i = 0; i <= enteredNumber; i++) {
        sumUpToNumber = sumUpToNumber + i;
    }

    // let i2 = 0;
    // let total = 0;
    // for (; i2 <= 5; i2++) {
    //     total = total + i2;
    // }


    // WITHOUT FOR!!!!!!!!!!!!
    // let i2 = 0;
    // let total = 0;
    //
    // total = total + i2; //0
    // i2 = 1;
    // total = total + i2; // 0 + 1 = 1
    // i2 = 2;
    // total = total + i2; // 1 + 2 = 3
    // i2 = 3;
    // total = total + i2; // 3 + 3 = 6
    // i2 = 4;
    // total = total + i2; // 6 + 4 = 10
    // i2 = 5;
    // total = total + i2; // 10 + 5 = 15

    const outputResultElement = document.getElementById('calculated-sum');
    outputResultElement.textContent = sumUpToNumber;
    outputResultElement.style.display= 'block';
}

calculateSumButtonElement.addEventListener('click', calculateSum);

// Highlight links

const highlightLinksButtonElement = document.querySelector('#highlight-links button');

function highlightLinks() {
    const anchorElements = document.querySelectorAll('#highlight-links a');

    for (const anchorElement of anchorElements) {
        anchorElement.classList.add('highlight');
    }
}

highlightLinksButtonElement.addEventListener('click', highlightLinks);

// Display user data

const dummyUserData = {
    firstName: 'Angela',
    lastName: 'Neo',
    age: '39'
}

const displayUserDataButtonElement = document.querySelector('#user-data button');

function displayUserData() {
    const outputDataElement = document.getElementById('output-user-data');

    //we assign the content to an empty value so that it doesnt append the same list of data each time
    //we click the button
    outputDataElement.innerHTML = '';

    for (const key in dummyUserData) {
        const newUserDataListItemElement = document.createElement('li');
        const outputText = key.toUpperCase() + ':' + dummyUserData[key];
        newUserDataListItemElement.textContent = outputText;
        outputDataElement.append(newUserDataListItemElement);
    }
}

displayUserDataButtonElement.addEventListener('click', displayUserData);

// Statistics / Roll the dice

const rollDiceButtonElement = document.querySelector('#statistics button');

function rollDice() {

    // Math.random returns a random number between 0 and 1 so times 6 will be between 0 and 5
    // this will return a random number between 1 and 6 by adding the 1 in the end
    return Math.floor(Math.random() * 6) + 1; // Math.floor(): 5.64 => 5
}

function deriveNumberOfDiceRolls() {
    const targetNumberInputElement = document.getElementById('user-target-number');
    const diceRollsListElement = document.getElementById('dice-rolls');

    const enteredNumber = targetNumberInputElement.value;
    diceRollsListElement.innerHTML = '';

    let hasRolledTargetNumber = false;
    let numberOfRolls = 0;

    // until hasRolledTargetNumber = false while will work
    while (!hasRolledTargetNumber) {
        const rolledNumber = rollDice();
     numberOfRolls++;
     const newRollListItemElement = document.createElement('li');
     const outputText = 'Roll ' + numberOfRolls + ': ' + rolledNumber;
     newRollListItemElement.textContent = outputText;
     diceRollsListElement.append(newRollListItemElement);
     // if (rolledNumber == enteredNumber) {
     //     hasRolledTargetNumber = true;
     // }
     // a quicker way of stating the above:
     hasRolledTargetNumber = rolledNumber == enteredNumber;
    }

    const outputTotalRollsElement = document.getElementById('output-total-rolls');
    const outputTargetNumberElement = document.getElementById('output-target-number');

    outputTargetNumberElement.textContent = enteredNumber;
    outputTotalRollsElement.textContent = numberOfRolls;
}



rollDiceButtonElement.addEventListener('click', deriveNumberOfDiceRolls);

