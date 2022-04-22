<?php 
session_start();
include('connection.php');
$flag=$_REQUEST['flag'];

switch($flag)
{
case 1:
   $number=$_POST['number'];
   //echo $number;
    $email=$_POST['email'];
    //echo $email;
	$message=rand(100000,999999);;
	//echo $message."<br/>";
	$date=date('Y-m-d');
	date_default_timezone_set('asia/kolkata');
	$time=date('h:i:sa');
	$datetime=$date." ".$time;
	$username="PNPStudent";
	$password="pnp@student";
	$senderid="PNPVTP";
	$to="$number";
	$msg=urlencode($message);
	$routeit=205;
	$api="http://sendsms.sandeshwala.com/API/WebSMS/Http/v1.0a/index.php?username=$username&password=$password&sender=$senderid&to=$to&message=$msg&reqid=1&format={json|text}&route_id=$routeit&sendondate=07-12-2017T12:44:04";

if(file_get_contents($api))
{
   $select="select * from user where mobile='$number' OR email='$email'";	
  $qe1=mysqli_query($con,$select) or die('fetch error');	
  $row=mysqli_fetch_array($qe1,MYSQLI_BOTH);
  if($row['email']=="$email" OR $row['mobile']=="$number")
  { 
 // if(!$message==null)		
	//{
	     
		 $insert="update user set OTP='$message' where mobile='$number' || email='$email'";
		 $query=mysqli_query($con,$insert) or die('query error ');
		 if($query)
		 {
			 $_SESSION['number']="$number";
	         $_SESSION['email']="$email";
			 header('location:passwordOtp.php');
		 }
		 else{
			 echo "not successfull";
		 }
	}
	else
	{
		echo "sms not send";
	}
  }
  else
  {
	  echo "data not exist";
  }
  break;
  
case 2:
    $newotp=$_POST['otp'];
	echo $otp."<br/>";
	$number=$_SESSION['number'];
	$email=$_SESSION['email'];
	$select="select * from user where email='$email' OR mobile='$number'";
	$query=mysqli_query($con,$select) or die('select query error');
	$row=mysqli_fetch_array($query,MYSQLI_BOTH);
	$oldotp=$row['OTP'];
	//echo $otp."<br/>";
	if($oldotp==$newotp)
	{
		echo "<script>alert('Congratulation ! your password matched successfully');
		     window.location.href='newpassword.php';
			 </script>";
	}
	else
	{
		echo "<script>alert('Sorry ! Otp not match , please insert write OTP number');
		     window.location.href='passwordOtp.php';
			 </script>";
	}
break;  

case 3:
   $mob=$_SESSION['number'];
   $email=$_SESSION['email'];
   $newpass=$_POST['newpass'];
   //echo $newpass."<br/>";
   $conpass=$_POST['conpass'];
   //echo $conpass."<br/>";
   if($newpass==$conpass)
   {
	   $up="update userlogin set password='$conpass' where email='$email' OR mobile='$mob'";
	   $query=mysqli_query($con,$up) or die('query error');
	   if($query)
	   {
		   header('location:UserLoginCode.php');
	   }
	   else
	   {
		   echo "<h1>query faillled</h1>";
	   }
   }
   else
   {
	   echo "<script>alert('Sorry ! new and confirm password does not matched');
	         window.location.href='newpassword.php';
			 </script>";
   }
break;
}  
?>