<?php
 session_start();
 	$name = $_POST['username'];
	$passwd = $_POST['pass'];
	$_SESSION['dc'] = $name;
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
		$sql = "select   *  from doctor where mail='".$uname."' AND password= '".$psw."' limit 1";

		$result=mysqli_query($conn,$sql);
		
			if(mysqli_num_rows($result)==1)
				{
					// $_SESSION['uname']=$uname;
					echo "sucess";
				
					echo "<script> location.href='/themes/doctor/now-ui-dashboard-master/examples/dashboard.php'; </script>";
				}
	
			else {
				echo "You have Entered Incorrect data";
				}
	

  }

 ?>