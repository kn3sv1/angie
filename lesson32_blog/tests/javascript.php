<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        function angie() {
            document.getElementById("demo").innerHTML = "<span style='color:red'>Hello JavaScript!</span>";
        }
        function changeStyle() {
            document.getElementById("demo").style.fontSize='35px';
        }
    </script>
</head>
<body>

<h2>What Can JavaScript Do?</h2>

<p id="demo">JavaScript can change HTML content.</p>

<button type="button" onclick='angie()'>Click Me!</button>
<button type="button" onclick="changeStyle()">Click to change STYLE CSS!</button>
</body>
</html>
