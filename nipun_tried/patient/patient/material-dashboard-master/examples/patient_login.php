<?php
 session_start();
	$name = $_POST['username'];
	$passwd = $_POST['pass'];
	$_SESSION['nm'] = $name;
	$_SESSION['ps'] = $passwd;



$host = "localhost";
	$dbUsername = "root";
	$dbPassword="";
	$dbname="testiwt";
	//create connection
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname) ;
		if (mysqli_connect_error()){
		die('connect Error('.mysqli_errno().')'.mysqli_connect_error());
		}
	
	if(isset($_POST['username'])){
		$uname=mysqli_real_escape_string($conn,$_POST['username']);
		$psw = mysqli_real_escape_string($conn,$_POST['pass']);
		$sql = "select   
		*  from patient where email='".$uname."' AND passwd= '".$psw."' limit 1";

		$result=mysqli_query($conn,$sql);
		
			if(mysqli_num_rows($result)==1)
				{
					// $_SESSION['uname']=$uname;
					echo "sucess";
				
					echo "<script> location.href='/themes/patient/material-dashboard-master/examples/dashboard.html'; </script>";
				}
	
			else {
				echo "You have Entered Incorrect data";
				}
  }

 ?>