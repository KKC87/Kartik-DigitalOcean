<!DOCTYPE html>
<html>
<head>
	<script>
			function run() {
    document.getElementById("resultColorValue").innerHTML = document.getElementById("Color").value;}
	</script>


</head>
<body>

<p>Choose your Color:</p>
<select id="Color" onchange="run()">  <!--Call run() function-->
     <option value=""></option>
     <option value="red">Red</option>
     <option value="green">Green</option>
     <option value="blue">Blue</option>
     <option value="yellow">Yellow</option>     
</select>

<p>Your color is: </p><p id="resultColorValue"></p>

<!-- <form action="#" method="post">
<select name="this.value">
<option value="Red">Red</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Yellow">Yellow</option>
</select>    
</form>
<?php
$selected_val = $_POST['this.value'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value 
?> -->
</body>
</html