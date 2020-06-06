<?php
$spec = $_POST['Specialization'];
$name = $_POST['name'];
$add = $_POST['address'];
$fee = $_POST['Fees'];
$mob = $_POST['mobile'];
$email = $_POST['mail'];
$passwd = $_POST['password'];
$repasswd = $_POST['re_password'];

$con = new mysqli("localhost","root","","testiwt");

// Make sure we connected successfully   
if(! $con)
{
    die('Connection Failed'.mysql_error()); 
}

$sql = "INSERT INTO doctor VALUES ('$spec','$name','$add',$fee,$mob,'$email','$passwd','$repasswd')"; 

if (mysqli_query($con, $sql)) {
	if ($passwd==$repasswd) {
	
    echo "New record created successfully";
    echo "<script> location.href='/project/main_dashboard/web/index.html'; </script>";
	}
else{
	echo "check password and confirm password";
	}
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>