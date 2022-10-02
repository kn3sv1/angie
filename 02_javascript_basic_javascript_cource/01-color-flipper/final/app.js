
//https://www.w3schools.com/css/css_colors_rgb.asp
const colors = ["green", "red", "rgb(133,122,200)", "#f15025"];
const btn = document.getElementById("btn");
const color = document.querySelector(".color");

const photos = [
    "../../photos/Angie.png",
  "../../photos/Elena.png",
  "../../photos/George.png",
  "../../photos/Katerina.png",
];
const img = document.getElementById("photo");

btn.addEventListener("click", function () {
  const randomNumber = getRandomNumber();
  // console.log(randomNumber);

  //randomly get value from array colors
  document.body.style.backgroundColor = colors[randomNumber];
  color.textContent = colors[randomNumber];


  img.src = photos[randomNumber];
});

function getRandomNumber() {
  //colors.length - now = 4
  //from 0.00 to 0.99 randomly
  const number = Math.random();

  console.log(number, number * colors.length, Math.floor(number * colors.length));
  //math.floor = make round number
  return Math.floor(number * colors.length);
}
