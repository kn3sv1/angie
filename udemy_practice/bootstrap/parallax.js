const imageElement = document.getElementById('main-image');

// Built - in function from the parallax package used to activate the parallax affect. The new keyword is used
// to create an object based on an object blue print
new simpleParallax(imageElement, {
    scale: 1.6,
    delay: 0.1,

});