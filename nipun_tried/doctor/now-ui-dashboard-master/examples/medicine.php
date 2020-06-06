<?php
session_start();
    if (isset($_SESSION['dc']))
    {
    	$name=$_SESSION['dc'];
        //echo "your name is :". $_SESSION['nm'] ;
    }
    else{

        echo "Session is not set";
        echo "<script> location.href='/themes/main page/index.html';</script>";
    }

 ?>
<html>  
<body>  
   <form action="" method="post" enctype="multipart/form-data">  
   <div style="width:200px;border-radius:6px;margin:0px auto">  
<table border="1">  
   <tr>  
      <td colspan="2">Select Technolgy:</td>  
   </tr>  
   <tr>  
      <td>Acetaminophen</td>  
      <td><input type="checkbox" name="techno[]" value="Acetaminophen"></td>  
   </tr>  
   <tr>  
      <td>Adderall</td>  
      <td><input type="checkbox" name="techno[]" value="Adderall"></td>  
   </tr>  
   <tr>  
      <td>Alprazolam</td>  
      <td><input type="checkbox" name="techno[]" value="Alprazolam"></td>  
   </tr>  
   <tr>  
      <td>Amitriptyline</td>  
      <td><input type="checkbox" name="techno[]" value="Amitriptyline"></td>  
   </tr>  
   <tr>
   <tr>  
      <td>Amlodipine</td>  
      <td><input type="checkbox" name="techno[]" value="Amlodipine"></td>  
   </tr>  
   <tr>  
      <td>Amoxicillin</td>  
      <td><input type="checkbox" name="techno[]" value="Amoxicillin"></td>  
   </tr>  
   <tr>  
      <td>Ativan</td>  
      <td><input type="checkbox" name="techno[]" value="Ativan"></td>  
   </tr>  
   <tr>  
      <td>Atorvastatin</td>  
      <td><input type="checkbox" name="techno[]" value="Atorvastatin"></td>  
   </tr>  
   <tr>  
   <tr>  
      <td>Azithromycin</td>  
      <td><input type="checkbox" name="techno[]" value="Azithromycin"></td>  
   </tr>  
   <tr>  
      <td>Ciprofloxacin</td>  
      <td><input type="checkbox" name="techno[]" value="Ciprofloxacin"></td>  
   </tr>  
   <tr>  
      <td>Citalopram</td>  
      <td><input type="checkbox" name="techno[]" value="Citalopram"></td>  
   </tr>  
   <tr>  
      <td>Clindamycin</td>  
      <td><input type="checkbox" name="techno[]" value="Clindamycin"></td>  
   </tr>  
   <tr>  
   <tr>  
      <td>Clonazepam</td>  
      <td><input type="checkbox" name="techno[]" value="Clonazepam"></td>  
   </tr>  
   <tr>  
      <td>Codeine</td>  
      <td><input type="checkbox" name="techno[]" value="Codeine"></td>  
   </tr>  
   <tr>  
      <td>Cyclobenzaprine</td>  
      <td><input type="checkbox" name="techno[]" value="Cyclobenzaprine"></td>  
   </tr>  
   <tr>  
      <td>Cymbalta</td>  
      <td><input type="checkbox" name="techno[]" value="Cymbalta"></td>  
   </tr>  
   <tr>  
   <tr>  
      <td>Doxycycline</td>  
      <td><input type="checkbox" name="techno[]" value="Doxycycline"></td>  
   </tr>  
   <tr>  
      <td>Gabapentin</td>  
      <td><input type="checkbox" name="techno[]" value="Gabapentin"></td>  
   </tr>  
   <tr>  
      <td>Java</td>  
      <td><input type="checkbox" name="techno[]" value="Java"></td>  
   </tr>  
   <tr>  
      <td>Hydrochlorothiazide</td>  
      <td><input type="checkbox" name="techno[]" value="Hydrochlorothiazide"></td>  
   </tr>  
   <tr>  
   <tr>  
      <td>Ibuprofen</td>  
      <td><input type="checkbox" name="techno[]" value="Ibuprofen"></td>  
   </tr>  
   <tr>  
      <td>Lexapro</td>  
      <td><input type="checkbox" name="techno[]" value="Lexapro"></td>  
   </tr>  
   <tr>  
      <td>Lisinopril</td>  
      <td><input type="checkbox" name="techno[]" value="Lisinopril"></td>  
   </tr>  
   <tr>  
      <td>Loratadine</td>  
      <td><input type="checkbox" name="techno[]" value="Loratadine"></td>  
   </tr>  
   <tr>  
   <tr>  
      <td>Lorazepam</td>  
      <td><input type="checkbox" name="techno[]" value="Lorazepam"></td>  
   </tr>  
   <tr>  
      <td>Losartan</td>  
      <td><input type="checkbox" name="techno[]" value="Losartan"></td>  
   </tr>  
   <tr>  
      <td>Lyrica</td>  
      <td><input type="checkbox" name="techno[]" value="Lyrica"></td>  
   </tr>  
   <tr>  
      <td>Meloxicam</td>  
      <td><input type="checkbox" name="techno[]" value="Meloxicam"></td>  
   </tr>  
   <tr>  
   <tr>  
      <td>Metformin</td>  
      <td><input type="checkbox" name="techno[]" value="Metformin"></td>  
   </tr>  
   <tr>  
      <td>Metoprolol</td>  
      <td><input type="checkbox" name="techno[]" value="Metoprolol"></td>  
   </tr>  
   <tr>  
      <td>Naproxen</td>  
      <td><input type="checkbox" name="techno[]" value="Naproxen"></td>  
   </tr>  
   <tr>  
      <td>Omeprazole</td>  
      <td><input type="checkbox" name="techno[]" value="Omeprazole"></td>  
   </tr>  
   <tr>  
   <tr>  
      <td>Oxycodone</td>  
      <td><input type="checkbox" name="techno[]" value="Oxycodone"></td>  
   </tr>  
   <tr>  
      <td>Pantoprazole</td>  
      <td><input type="checkbox" name="techno[]" value="Pantoprazole"></td>  
   </tr>  
   <tr>  
      <td>Prednisone</td>  
      <td><input type="checkbox" name="techno[]" value="Prednisone"></td>  
   </tr>  
   <tr>  
      <td>Tramadol</td>  
      <td><input type="checkbox" name="techno[]" value="Tramadol"></td>  
   </tr>  
   <tr>  
   <tr>  
      <td>Trazodone</td>  
      <td><input type="checkbox" name="techno[]" value="Trazodone"></td>  
   </tr>  
   <tr>  
      <td>Viagra</td>  
      <td><input type="checkbox" name="techno[]" value="Viagra"></td>  
   </tr>  
   <tr>  
      <td>Wellbutrin</td>  
      <td><input type="checkbox" name="techno[]" value="Wellbutrin"></td>  
   </tr>  
   <tr>  
      <td>Xanax</td>  
      <td><input type="checkbox" name="techno[]" value="Xanax"></td>  
   </tr>  
   <tr>    
      <td colspan="5" cellspan="10px" align="center"><input type="submit" value="submit" name="sub"></td>  
   </tr>

</table>  
</div>  
</form>  
<?php  
if(isset($_POST['sub']))  
{  
$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word  
$db_name="testiwt";//database name  
$tbl_name="medicine"; //table name 
$name=$_SESSION['dc']; 
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$checkbox1=$_POST['techno'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($con,"insert into medicine(technology,email) values ('$chk','$name')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>'; 
      echo "<script> location.href='dashboard.php';</script>";

   }  
else  
   {  
   	echo "Error:" . $in_ch . "<br>" . mysqli_error($con);
   	echo "ERROR: Could not able to execute $in_ch. ". mysqli_error($in_ch);

      //echo'<script>alert("Failed To Insert")</script>'; 
   }  
}  
?>  
</body>  
</html>  