<!DOCTYPE html>
<html>
<body>
<style type="text/css">
img {
	border: 5px dashed red;
}
</style>
<h2>HTML Image</h2>
<img src="my_cat1.jpg" height="100">
<img src="my_cat1.jpg" height="100">
<script type="text/javascript">
var inputs =  document.querySelectorAll('img');

for(i=0; i<inputs.length; i++){
  inputs[i].addEventListener('click', function() {
    this.style.borderWidth = "50px";
    console.log('Hello from Cat number:' + i);
  });
}
</script>

</body>
</html>
