<?php 
session_start();
 include('connection.php');
   $lg=$_SESSION['userlogin'];
  
   //echo $lg;
   $date=date('d/m/y');
   date_default_timezone_set('asia/kolkata');
   $time=date('h:i:sa');
   
   $datetime=$date." ".$time;
   
   if($lg)
   {
	   $up="update userlogin set login_status='false',datetime='$datetime' where email='$lg'";
	   $query=mysqli_query($con,$up) or die('query error');
	   if($query)
	   {
		  session_destroy();
         header('location:index.php');		  
	   }
	   else
	   {
		echo "logout faiiled";   
	   }
   }
   else
   {
	  echo "data not exist";   
   }
   
?>