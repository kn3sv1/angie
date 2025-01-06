
let i = 0;
// setInterval calls function every 2 seconds
// let myInterval  = setInterval(function () {
//     console.log(i++);
//     if (i > 5) {
//         clearInterval(myInterval);
//     }
// }, 2000);

let myInterval  = setInterval(() => {
    console.log(i++);
    if (i > 5) {
        clearInterval(myInterval);
    }
}, 2000);