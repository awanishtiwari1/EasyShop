<?php 
session_start();
$lg=$_SESSION['userlogin'];
include('connection.php');
$id=$_REQUEST['id'];
$delete="delete from cart where UserId='$lg' AND productId=$id";
$query=mysqli_query($con,$delete) or die('query error');
if($query)
{
	header('location:cartshow.php');
}
else
{
echo "<script>
	      alert('checkout failled');
		  window.location.href='cartshow.php';
		  </script>";	
}
?>