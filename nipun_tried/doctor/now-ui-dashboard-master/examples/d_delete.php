<?php
	
	$con = new mysqli("localhost","root","","testiwt");
$id=$_GET['del'];  
if(!$con){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
  
$sql = "DELETE FROM appointement WHERE patientname='$id' ";

	if(mysqli_query($con, $sql))
	{ 
		echo "sucessfully deleted";
		echo "<script> location.href='dashboard.php'; </script>";
	
    // header("Location:product-list.php");
	}  
	else
	{ 
    	echo "ERROR: Could not able to execute $sql. ". mysqli_error($link); 
	}
mysqli_close($con); 
?>