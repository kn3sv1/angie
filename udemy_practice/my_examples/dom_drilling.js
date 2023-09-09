console.dir(document.body);

let header = document.body.children[0];

//Or document.body.firstElementChild;

console.dir(header);

console.dir(header.parentElement);

console.dir(header.nextElementSibling);

header = document.getElementById('header');

console.log(header);

let paragraph2 = document.querySelector('.paragraph');

console.dir(paragraph2);

paragraph2.textContent = 'This was changed! ';