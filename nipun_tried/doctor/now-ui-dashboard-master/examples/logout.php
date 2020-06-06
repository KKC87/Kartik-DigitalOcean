 <?php
 	session_start();
 	unset($_SESSION['nm']);
 	echo "cleaned";
 		session_destroy();
 		echo "<script> location.href='/themes/main page/index.html';</script>";
 ?>x