<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <meta charset="utf-8" />
</head>
<body>
<h1>Enter data</h1>
<form name="registerForm" action="send_in_ass.php">
    <label>Name</label></br>
    <input type="text" name="userName" /></br></br>
    <label>Age</label></br>
    <input type="text" name="userAge" /></br></br>
    <button type="submit" id="submit">Send</button>
</form>
<div id="demo"></div>
<script type="text/javascript">

    document.getElementById("submit").addEventListener("click", function (event) {
        //prevent browser to send form, so this function can send - browser dont send I will do this
        event.preventDefault();
        // get form data
        let registerForm = document.forms["registerForm"];
        let userName = registerForm.elements["userName"].value;
        let userAge = registerForm.elements["userAge"].value;
        //browser please stop at this point where I wrote word debugger
        //debugger;
        // serialize data to json
        let user = JSON.stringify({userName: userName, userAge: userAge});
        let request = new XMLHttpRequest();
        //send a request to the address "user.php"
        request.open("POST", "user.php", true);
        request.setRequestHeader("Content-Type", "application/json");
        request.setRequestHeader("angie", "I am stupid!!!");
        //when you "LOAD" answer from server call this function
        request.addEventListener("load", function () {
            //console.log(request.response);
            //parse response server. Convert/parse string to object
            let receivedUser = JSON.parse(request.response);
            //console.log('response',receivedUser);

            //debugger;
            let resp = receivedUser.userName + "-" + receivedUser.userAge;
            //console.log(resp);   //see server response

            document.getElementById("demo").innerHTML = "my own innerHTML " + resp;
        });
        //actually send to server
        request.send(user);
    });
</script>
</body>
<html>