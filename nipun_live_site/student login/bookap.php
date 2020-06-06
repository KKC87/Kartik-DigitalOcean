<?php
    session_start();
    if (isset($_SESSION['nm']))
    {
        //echo "your name is :". $_SESSION['nm'] ;
    }

    else
    {

        echo "Session is not set";
    }

    if (isset($_POST['submit']))
    {
        $spec = $_POST['specialization'];
        $dname = $_POST['doctor'];
        $fee = $_POST['Fees'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $pname = $_SESSION['nm'];

        $con = new mysqli("localhost","root","","testiwt");

        if(! $con)
        {
            die('Connection Failed'.mysql_error()); 
        }
        $sql = "INSERT INTO appointement VALUES ('$spec','$dname','$pname',$fee,'$date','$time')"; 
        if (mysqli_query($con, $sql))
        {
    
            echo "New record created successfully";
            echo "<script> location.href='/project/main_dashboard/web/index.html'; </script>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style type="text/css">
    label 
    {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
    }

    input
    ,label{
    margin: .4rem 0;
    }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <!-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css"> -->

    <!-- Main css -->
   <!--  <script>
    function getdoctor(val) {
    $.ajax({
    type: "POST",
    url: "get_doctor.php",
    data:'specilizationid='+val,
    success: function(data){
        $("#doctor").html(data);
    }
    });
}
    </script>
 -->
 <script type="text/javascript">
     function run(a)
     {
        self.location='bookap.php?cat=' + a ;
       // document.getElementById("nipun").value = a ;
        // document.write("hello");

         // a = document.getElementById("nipun");

        // document.write("hello"+a);
        // var b = a.value;
        // alter("you have selected :" + b);
     }

 </script>

     
</head>
<body>

     <?php
        @$cat=$_GET['cat'];
        // echo $cat;
    ?>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <!-- id="signup-form" -->
                    <form method="POST"  class="signup-form" align="center">
                        <h2 class="form-title">Book Appointment</h2>
                        <div class="form-group">
                           Doctor Specialization:</n> 
                           <!-- class="form-input" -->
                           <select name="specialization"  id="nipun" onchange="run(this.value);">
                            <!-- <p id="nipun"></p> -->
                               <?php

                                    $conn = new mysqli("localhost","root","","testiwt") or die("database not found");
                                    $sql="SELECT specialization FROM doctor";
                                    $res =  mysqli_query($conn,$sql);
                                    if (mysqli_num_rows($res)>0) 
                                    {
                                        while ($row = mysqli_fetch_array($res))
                                    {

                                        if($cat == $row['specialization'])
                                        {
                                            ?>
                                             <option value="<?php echo $cat?>" selected><?php echo $cat?></option>
                                        <?php
                                       }
                                       else
                                       {

                                ?> 
                    <option value="<?php echo $row['specialization']?>">
                        <?php echo $row['specialization']?></option>
                     <?php
                        }
                        }
                    }
                        ?>
                           </select>
                        </div>
                        <div class="form-group">
                            <br>
                            <br>
                           Doctor Name:
                           <select class="form-input" name="doctor" id="dname">
                               
                               <?php

                                    $conn = new mysqli("localhost","root","","testiwt") or die("database not found");
    
                                    $sql="SELECT * FROM doctor WHERE specialization ='$cat'";
                                    $res =  mysqli_query($conn,$sql);
                                    if (mysqli_num_rows($res)>0) 
                                    {
                                        while ($row = mysqli_fetch_array($res))
                                    {

                                        $fee = $row['fees'];
                                ?> 
                    <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                    <?php
                        }
                        }
                        ?>
                        </select>
                        </div>
                         <div class="form-group">
                            <br>
                            <br>
                           Consultancy Fees <input type="text" class="form-input" name="Fees" placeholder="Fees" value="<?php echo $fee ?>"/>
                        </div>
                         <div class="form-group">
                            <br>
                            <br>
                            Date of contact <input type="date" id="start" name="date" value="2018-07-22" min="2018-01-01" max="2020-12-31">
                        </div>
                        <br>
                        <br>
                        <!-- <label for="appt">Choose a time for your meeting:</label> -->
                        <div class="form-group">
                         Time: <input type="time" id="appt" 
                         name="time" min="09:00" max="20:00" required>
                        <!-- <small>Hospital hours are 9am to 6pm</small>     -->
                         </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Book Appointment"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>