let paragraphElement = document.querySelector('p');
let counter = 0;
function changeParagraphText (event) {
    counter++;
    paragraphElement.textContent = 'Clicked! Times: ' + counter;
    console.log('Paragraph clicked! Times: ' + counter);
    // let paragraph = event.target;
    // paragraph.innerText = 'Changed! Times:' + counter;
    // console.log('Paragraph Changed! Times: ' + counter);
    //console.log(event);
}

paragraphElement.addEventListener('click', changeParagraphText);

let inputElement = document.querySelector('input');

function retrieveUserInput(event) {
    //let enteredText = inputElement.value;
    let enteredText = event.target.value;
    //let enteredText = event.data; => This is different!
    console.log(enteredText);
    //console.log(event);
}

inputElement.addEventListener('input', retrieveUserInput);