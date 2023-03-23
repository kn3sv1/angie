/*
 console.log(window);
console.log(document);*/

//This now will not work now that we added a new paragraph before the one with the link inside.
// document.body.children[1].children[0].href = 'https://google.com';

let anchorElement = document.getElementById('external-link');
anchorElement.href = 'https://google.com';

anchorElement = document.querySelector('p a');
anchorElement.href = 'https://academind.com';

//ADD AN ELEMENT
//1. Create the new element

let newAnchorElement = document.createElement('a');
newAnchorElement.href = 'https://google.com';
newAnchorElement.textContent = 'This leads to Google!';

//2. Get access to the parent element that should hold the new element

let firstParagraph = document.querySelector('p');

//3. Insert the new element into the parent element content

firstParagraph.append(newAnchorElement);

//REMOVE ELEMENTS
//1. Select the element that should be removed

let firstElement = document.querySelector('h1');

//2. Remove it!

firstElement.remove();
// firstElement.parentElement.removeChild(firstElement); //for older browsers - long way

//MOVE ELEMENTS - this will move the first paragraph at the end of the body element

firstParagraph.parentElement.append(firstParagraph);

// innerHTML

console.log(firstParagraph.innerHTML);
console.log(firstParagraph.textContent);
