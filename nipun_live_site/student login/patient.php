<?php
$name = $_POST['name'];
$add = $_POST['address'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$email = $_POST['mail'];
$passwd = $_POST['password'];
$repasswd = $_POST['re_password'];

$con = new mysqli("localhost","root","","testiwt");

// Make sure we connected successfully   
if(! $con)
{
    die('Connection Failed'.mysql_error()); 
}

$sql = "INSERT INTO patient VALUES ('$name','$add','$city','$gender','$email','$passwd','$repasswd')"; 

if (mysqli_query($con, $sql)) {
	if ($passwd==$repasswd) {
	
    echo "New record created successfully";
    echo "<script> location.href='/themes/patient/material-dashboard-master/examples/index.html'; </script>";
	}
else{
	echo "check password and confirm password";
	}
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>