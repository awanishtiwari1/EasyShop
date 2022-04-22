<?php 
session_start();
$lg=$_SESSION['userlogin'];

include('connection.php');

if(isset($_SESSION['userlogin'])==null)
{


echo "<script>alert('sorry ! please Registration and then login');
       window.location.href='index.php';
      </script>";
}
else
{
$productid=$_REQUEST['flag'];
//echo "flag values".$productid."<br/>";
$proid=$_POST['proid'];
//echo "product id".$proid."<br/>";
//$name=$_POST['name'];
//echo $name;
$Qty=$_POST['Qty'];
//echo "qty number".$Qty."<br/>";
$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time=date("h:i:sa");
$datetime=$date." ".$time;
$insert="insert into cart(UserId,productId,Quantity,Date,Status) values('$lg','$proid','$Qty','$datetime','false')";	

$query=mysqli_query($con,$insert) or die("query error");
if($query)
{
	  header('location:index.php');
	      
}
else
{
	echo "<script>alert('add to cart failled successfully');
	      window.location.href='index.php';
		  </script>";
}
}

?>

