<?php
session_start();
if (isset($_SESSION['dc']))
    {
      $a = $_SESSION['dc'];
      echo $a;
      $b = $_GET['del'];
        //echo "your name is :". $_SESSION['nm'] ;
    }

    else{

        echo "Session is not set";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style type="text/css">
    #button
    {
      background-color: tomato;
    }
  </style>
	
	<title>priscription</title>
	<style type="text/css">
		#med
		{
			width: 300px;
			height: 100px;
		}
	</style>
</head>
<body>
	<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="./dashboard.html" class="simple-text logo-mini">
          NP
        </a>
        <a href="./dashboard.html" class="simple-text logo-normal">
          Doctor Dashboard
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p><?php echo $a?></p>
            </a>
          </li>
          
          <li class="active">
            <a href="appointments.php">
              <i class="now-ui-icons education_atom"></i>
              <p>My appointments</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- <div class="card-header">
                <h4 class="card-title"> Simple Table</h4> -->
              </div>
<br>
<br>
<br>
<br>
<form align=center method="POST">
	doctorname:  <input type="text" name="doctorname" value="<?php echo $a ?>" required>
	<br>
	<br>
	patientname:  <input type="text" name="patientname" value="<?php echo $b ?>" required>
	<br>
	<br>
	Medicines:  <input type="text" id="med" name="medicines" required="">
	<br>
	<br>
	<input type="submit" id="button" class="btn" name="submit" value="submit">
</form>

<?php
if(isset($_POST["submit"]))
{
	$dname=$_POST['doctorname'];
	$patientname=$_POST['patientname'];
	$med=$_POST['medicines'];

	$con = new mysqli("localhost","root","","testiwt");
	if(!$con){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
	}
	$sql = "INSERT INTO priscription VALUES('$dname','$patientname','$med')"; 

	if(mysqli_query($con, $sql))
	{ 
		echo "sucessfully deleted";
		echo "<script> location.href='appointments.php'; </script>";
	
    // header("Location:product-list.php");
	}  
	else
	{ 
    	echo "ERROR: Could not able to execute $sql. ". mysqli_error($link); 
	}
mysqli_close($con); 
}
?>
</body>
</html>