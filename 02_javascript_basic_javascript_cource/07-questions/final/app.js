//using selectors inside the element

//https://www.w3schools.com/jsref/met_document_queryselectorall.asp
const questions = document.querySelectorAll(".question");

questions.forEach(function (question) {
  const btn = question.querySelector(".question-btn");
  // console.log(btn);

  btn.addEventListener("click", function () {
    // console.log(question);

    questions.forEach(function (item) {
      //except current question that i clicked
      if (item !== question) {
        item.classList.remove("show-text");
      }
    });

    // https://www.w3schools.com/howto/howto_js_toggle_class.asp
    question.classList.toggle("show-text");
  });
});

// traversing the dom
// const btns = document.querySelectorAll(".question-btn");

// btns.forEach(function (btn) {
//   btn.addEventListener("click", function (e) {
//     const question = e.currentTarget.parentElement.parentElement;

//     question.classList.toggle("show-text");
//   });
// });
