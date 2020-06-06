<?php
	session_start();
    if (isset($_SESSION['pa']))
    {
    	$cat=$_SESSION['pa'];
        //echo "your name is :". $_SESSION['nm'] ;
    }
    else{

        echo "Session is not set";
        echo "<script> location.href='/themes/main page/index.html';</script>";
    }
	$con = new mysqli("localhost","root","","testiwt");
$id=$_GET['del'];  
if(!$con){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
  
$sql = "DELETE FROM appointement WHERE doctorname='$id' AND patientname='$cat'";

	if(mysqli_query($con, $sql))
	{ 
		echo "sucessfully deleted";
		echo "<script> location.href='dashboard.php'; </script>";
	
    // header("Location:product-list.php");
	}  
	else
	{ 
    	echo "ERROR: Could not able to execute $sql. ". mysqli_error($con); 
	}
mysqli_close($con); 
?>