// set inital value to zero
let count = 0;
// select value and buttons
const value = document.querySelector("#value");
const btns = document.querySelectorAll(".btn");


const numbers = [1,20,50];
numbers.forEach(function (num) {
  console.log(num);
});


// foreach ($btns as $btn) {
//   doAngieOperation($btn);
// }

//btn = current button from all three btns
btns.forEach(function (btn) {
  //when you click call function doAngieOperation and pass click event
  btn.addEventListener("click", doAngieOperation);
  //btn.addEventListener("mouseover", doAngieOperation);
});

//e = event
// https://www.w3schools.com/jsref/event_currenttarget.asp
function doAngieOperation(e) {
  //styles = ["btn", "decrease"];
  const styles = e.currentTarget.classList;

  if (styles.contains("roma")) {
    console.log("you clicked on element with class roma");
  }



  if (styles.contains("decrease")) {
    //count = count - 1;
    count--;
  } else if (styles.contains("increase")) {
    count++;
  } else if (styles.contains("reset")) {
    count = 0;
  } else if (styles.contains("increase2")) {
    count = count + 2;
  }

  if (count > 0) {
    value.style.color = "green";
  }
  if (count < 0) {
    value.style.color = "red";
  }
  if (count === 0) {
    value.style.color = "#222";
  }
  value.textContent = count;
}