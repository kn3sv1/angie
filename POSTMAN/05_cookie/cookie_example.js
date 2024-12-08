
const cookie = require("cookie");

//const cookies = cookie.parse(null);

// These bellow are working examples. Before fatal error.
const cookies = cookie.parse("");
//const cookies = cookie.parse("angie=123");
console.log(cookies);

if (!cookies.sess_id) {
    console.log("empty");
}

// E:\xampp\htdocs\html5.local\angie\POSTMAN\05_cookie>node cookie_example.js

