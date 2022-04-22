<?php
session_start();
include('connection.php');	

$flag=$_REQUEST['flag'];
switch($flag)
{
case 1:
 if(isset($_POST['submit']))
 {		 
       $name=$_POST['name'];
		//echo $name;
		$code=$_POST['code'];
		//echo $code;
		$mobile=$_POST['mobile'];
		//echo $mobile;
		$mobileno=$mobile;
		$email=$_POST['email'];
		//echo $email;
		$password=$_POST['password'];
		//echo $password;
       $date=date("d/m/y");
       date_default_timezone_set("asia/kolkata");
        $time=date("h:i:sa");	
		$datetime=$date."".$time;
	if(empty($name))
	{
		echo "<script>alert('please valid enter name');
		window.location.href='index.php';
		</script>";
	}		
	else if(empty($email))
	{
		echo "<script>alert('please enter valid email id name');
			window.location.href='index.php';
		</script>";
	
	}
	else if(empty($mobileno))
	{
		echo "<script>alert('please ! enter valid mobile number');
			window.location.href='index.php';
		</script>";
	}
	else if(strlen($mobileno)!=10)
	{
		echo "<script>alert('please ! 10 charectors only');
			window.location.href='index.php';
		</script>";
	}
	else if(strlen($password)<6)
	{
		echo "<script>alert('minimum password 6 charectors');
			window.location.href='index.php';
		</script>";
	}
	else
	{
$insert="insert into user(username,mobile,email,password,datetime,code) values('$name','$mobileno','$email','$password','$datetime','$code')";		
 
 $query=mysqli_query($con,$insert)or die('query failled');
 if($query)
 {
	   $ins="insert into userlogin(email,password,mobile) values('$email','$password','$mobileno')";
	   $que=mysqli_query($con,$ins) or die('query error line 24');
	 echo "<script>alert('data inserted successsfully');
	       window.location.href='UserLoginCode.php';
		   </script>";
 }
 else
 {
	 echo "<script>
	       alert('unsuccessfully');
		   </script>";
 }
	}
 }	
break;	

case 2:
     $email=$_POST['email'];
	 $password=$_POST['password'];
	 $date=date("d/m/y");
       date_default_timezone_set("asia/kolkata");
        $time=date("h:i:sa");	
		$datetime=$date." ".$time;
	 $sel="select * from userlogin where email='$email' or password='$password'";
	 $qu=mysqli_query($con,$sel) or die("fetch query error");
	 $row=mysqli_fetch_array($qu,MYSQL_BOTH);
		$count=$row['login_count'];
		$count=$count+1;
		if($row)
		{
           if($row['email']==$email)
		   {
			   if($row['password']==$password)
			   {
				   $update="update userlogin set login_count=$count,login_status='true',datetime='$datetime' where email='$email'";
				   $query=mysqli_query($con,$update) or die('update query failled');
				   if($query)
				   {
					   $_SESSION['userlogin']="$email";
					    header('location:index.php');
					        
				   }
				   else
				   {
					   echo "login failled";
				   }
			   }
			   else
			   {
				 echo "password not match";   
			   }
		   }
		   else
		   {
			   echo "email not match";
		   }
		}
		else
		{
			echo "data not exit here";
		}
break;

case 3:
     $lg=$_SESSION['userlogin'];
     $total=$_POST['total'];
     $name=$_POST['name'];
	 $mobile=$_POST['mobile'];
	 $email=$_POST['email'];
	 $info=$_POST['info'];
	 $pincode=$_POST['pincode'];
	 $houseno=$_POST['houseno'];
	 $colony=$_POST['colony'];
	 $city=$_POST['city'];
	 $state=$_POST['state'];
	 $address= $pincode.",". $houseno.",". $colony.",".$city.",". $state;
	 $date=date('Y-m-d');
	 date_default_timezone_set('asia/kolkata');
	 $time=date("h:i:sa");
	 $datetime= $date." ".$time;
     $insert="insert into orders(username,userId,info,DeliveryCharge,Tax,TotalAmount,DeliveryAddress,date,time) values('$name','$email','$info','50','5%',' $total',' $address',' $date','$time')";
	 
	 $query=mysqli_query($con, $insert) or die('query error');
	 if($query)
	 {
		 $orderid=mysqli_insert_id($con);
		 $sel="select * from cart where UserId='$lg'";
		 $query=mysqli_query($con,$sel) or die('fetch query error');
		 while($row=mysqli_fetch_array($query,MYSQL_BOTH))
		 {
			 $productId=$row['productId'];
			 $qty=$row['Quantity'];
		
		$insert2="insert into orderproducts(OrderId,ProductId,Quantity,date,time) values('$orderid','$productId','$qty','$date','$time')";
			 $q=mysqli_query($con,$insert2) or die('query error');
			 if($q)
			 {
				 header('location:cartshow.php');
			 }
			 else
			 {
				echo "not successsfully"; 
			 }
		 }			 
	 }
	 else
	 {
		 
	 }
break;
     
case 4:
     $name=$_POST['name'];
	 $email=$_POST['email'];
	 $number=$_POST['number'];
	 $description=$_POST['description'];
	 $date=date('Y-m-d');
	 date_default_timezone_set('asia/kolkata');
	 $time=date('h:i:sa');
	 $datetime=$date."  ".$time;
	 $message="your email send successsfully"."<br/>"."your Email address $email"."<br/>"."your mobile number $number";
	 $from="spgour8741@gmail.com";
    //echo $message;
	$insert="insert into contact(name,email,mobile,description,datetime) values('$name','$email','$number','$description','$datetime')";
	$query=mysqli_query($con,$insert) or die('query error.... ');
	if($query)
	{
	 /*	$headers="a=MIME-Version:1.0"."\r\n";
		$headers="Content-type:text/html;charset:UTF-8"."\r\n";
				if(mail($email,$message,$message,$from))
				{
					echo "<script>alert('email send successsfully');
						 window.location.href='contact.php';
						 </script>";
				}
				else
				{
				 echo "<script>
				          alert('not send successsfully');
				       </script>";
				}
				*/
				echo "<script>alert('email send successsfully');
						 window.location.href='contact.php';
						 </script>";
		
	}
	else
	{
		echo "failled";
	}
break;



case 5:
     $email=$_POST['email'];
	 $password=$_POST['password'];
	 $date=date("d/m/y");
       date_default_timezone_set("asia/kolkata");
        $time=date("h:i:sa");	
		$datetime=$date." ".$time;
	 $sel="select * from userlogin where email='$email' or password='$password'";
	 $qu=mysqli_query($con,$sel) or die("fetch query error");
	 $row=mysqli_fetch_array($qu,MYSQL_BOTH);
		$count=$row['login_count'];
		$count=$count+1;
		if($row)
		{
           if($row['email']==$email)
		   {
			   if($row['password']==$password)
			   {
				   $update="update userlogin set login_count=$count,login_status='true',datetime='$datetime' where email='$email'";
				   $query=mysqli_query($con,$update) or die('update query failled');
				   if($query)
				   {
					   $_SESSION['userlogin']="$email";
					    header('location:profile.php');
					        
				   }
				   else
				   {
					   echo "login failled";
				   }
			   }
			   else
			   {
				 echo "password not match";   
			   }
		   }
		   else
		   {
			   echo "email not match";
		   }
		}
		else
		{
			echo "data not exit here";
		}
break;

case 6:
      $id=$_POST['id'];
	  //echo $id;
	    //$name=$_POST['name'];
		//echo $name;
		$email=$_POST['email'];
		//echo $email;
		$number=$_POST['number'];
		//echo $number;
		$password=$_POST['password'];
		//echo $password;
	$up="update userlogin set  email='$email' ,password='$password',mobile='$number' where id='$id'";	
	$q=mysqli_query($con,$up) or die('error');
	if($q)
	{
		header('location:profile.php');
	}
	else
	{
		echo "<script>alert('not update data');
		     window.location.href='profile.php';
		     </script>";
	}
break;
}
		
?>











