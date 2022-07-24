<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        function loadDoc(filename) {
            if (filename === 'ajax_roma.php') {
                document.getElementById("demo").innerHTML = '<img src="loading_roma.gif" />';
            } else {
                document.getElementById("demo").innerHTML = '<img src="loading.gif" />';
            }

            //create new object. This class exist in browser, we didnt create it
            const xhttp = new XMLHttpRequest();
            //xhttp.onload - this is javascript callback. When we download html/text from ajax_angie.php
            //this function will be called
            xhttp.onload = function() {
                //this.responseText - we assign response - html/text to <div id="demo">
                document.getElementById("demo").innerHTML = this.responseText;
            }
            //xhttp.open("GET", "ajax_angie.php", true);
            xhttp.open("GET", filename, true);
            xhttp.send();
        }
    </script>
</head>
<body>

<div>
    <h2>Let AJAX change this text</h2>
    <button type="button" onclick="loadDoc('ajax_angie.php')">Load Angie</button>
    <br /><br />
    <button type="button" onclick="loadDoc('ajax_roma.php')">Load Roma</button>
</div>
<br /><br /><br />
<div id="demo"></div>
</body>
</html>
