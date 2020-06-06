<?php
session_start();
if (isset($_SESSION['dc']))
    {
      $a = $_SESSION['dc'];
      echo $a;
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
	
</head>
<body>
  <body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="./dashboard.php" class="simple-text logo-mini">
          NP
        </a>
        <a href="./dashboard.php" class="simple-text logo-normal">
          Doctor Dashboard
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
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
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>



	
<!-- <table class="table table-hover"> -->
  <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                  <!-- <th>SR No.</th> -->
                  <!-- <th>Specialization &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> -->
                  <!-- <th>Doctor name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> -->
                  <th>Patient name </th>
                  <!-- <th>Fees &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> -->
                  <th>Time </th>
                  <th class="test-right">Date </th>
                </thead>
                <tbody>
                  
                
                  <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                <?php
                	$dname= $_SESSION['dc'];

                  // echo "".$dname;	
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "testiwt";
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  // Check connection
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  } 

                  	$qu="SELECT * FROM doctor WHERE mail = '$dname'";
                    $dmail = mysqli_query($conn,$qu);
                    if (mysqli_query($conn,$qu)){

                    	while($row=mysqli_fetch_array($dmail)){

                    	$nm = $row['name'];		
                   $sql="SELECT * FROM `appointement` WHERE doctorname = '$nm' ";
                    $res =  mysqli_query($conn,$sql);
                    // $str=1;
                    if (mysqli_num_rows($res)>0) 
                    {
                        while ($row = mysqli_fetch_array($res)){
                    ?> 
                <tr>
                    <!-- <td><?php echo $row['specialization']; ?></td> -->	
                    <!-- <td><?php echo $row['doctorname']; ?></td> -->
                    <td><?php echo $row['patientname']; ?></td>
                    <!-- <td><?php echo $row['fees']; ?></td> -->
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                        <td>
                            <a href="d_delete.php?del=<?php echo $row['patientname'];?>"><button class="btn" id="button">DELETE</button></a>
                        </td>
                        <td>
                            <a href="priscription.php?del=<?php echo $row['patientname'];?>"><button class="btn" id="button">priscription</button></a>
                        </td>
                </tr>
                
                <?php
				}
				}                
                }
                }
                ?>
                </tbody>
              </table>
                </div>
              </div>
            </div>
          </div>
</body>
</html>