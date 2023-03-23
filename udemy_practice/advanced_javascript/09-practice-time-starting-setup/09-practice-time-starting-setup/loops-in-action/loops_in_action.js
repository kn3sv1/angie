// First Example: Sum numbers

const calculateSumButtonElement = document.querySelector('#calculator button');

function calculateSum() {
    const userNumberInputElement = document.getElementById('user-number');
    const enteredNumber = userNumberInputElement.value;

    let sumUpToNumber = 0;

    let i = 0;
    for (; i <= enteredNumber; i++) {
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
    firstName: 'Angie',
    lastName: 'Neophytou',
    age: '39'
}

const displayUserDataButtonElement = document.querySelector('#user-data button');

function displayUserData() {
    const outputDataElement = document.getElementById('output-user-data');

    outputDataElement.innerHTML = '';

    for (const key in dummyUserData) {
        const newUserDataListItemElement = document.createElement('li');
        const outputText = key.toUpperCase() + ':' + dummyUserData[key];
        newUserDataListItemElement.textContent = outputText;
        outputDataElement.append(newUserDataListItemElement);
    }
}

displayUserDataButtonElement.addEventListener('click', displayUserData);

