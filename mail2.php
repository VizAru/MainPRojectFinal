<?php
   include("config.php");
   session_start();
   
      // username and password sent from form 
      
      $to = $_GET['to'];
      $sub = $_GET['sub']; 
      $msg = $_GET['bdy'];
	  $name = $_SESSION['user'];
	  
	   $sql = "INSERT INTO ".$to."( mail, subject, body) VALUES( '$name','$sub','$msg')";
	   if(mysqli_query($db,$sql))
{
	 header("location: compmsg.html");
}

?>