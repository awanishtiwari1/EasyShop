<?php 
session_start();
$lg=$_SESSION['userlogin'];
include('connection.php');
$up="update cart set Status='true' where UserId='$lg'";
$query=mysqli_query($con,$up) or die('query error');
if($query)
{
	echo "<script>
	      alert('checkout successfully');
		  window.location.href='cartshow.php?checkout=success';
		  </script>";
}
else
{
echo "<script>
	      alert('checkout failled');
		  window.location.href='cartshow.php';
		  </script>";	
}
?>