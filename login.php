<?php
   include("config.php");
   session_start();
      
      $myusername = $_GET['uname'];
      $mypassword = $_GET['pas']; 
      
      $sql = "SELECT name FROM register WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['user'] = $myusername;
         header("location: lhome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
?>