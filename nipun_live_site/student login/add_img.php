<?php
echo "hello world";
if(isset($_POST['submit']))
{
	$image=$_POST['image'];
	$con = new mysqli("localhost","root","","practice");
	if(!$con){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
	}
	$sql = "INSERT INTO image VALUES('$image')"; 

	if(mysqli_query($con, $sql))
	{ 
		echo "sucessfully deleted";
		echo "<script> location.href='show_img.php'; </script>";
	
    // header("Location:product-list.php");
	}  
	else
	{ 
    	echo "ERROR: Could not able to execute $sql. ". mysqli_error($link); 
	}
mysqli_close($con); 
}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>image </title>
</head>
<body>
	<form method="POST">
		<input type="file" name="image" accept="image/*">
		<input type="submit" name="submit" value="submit">
		<!-- <a href="/baffat.jpg" download>harshal</a> -->
	</form>
</body>
</html>