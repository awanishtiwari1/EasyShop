<html>
<head>
<?php include('link.php');?>
</head>
<body>
<?php 
include('header.php');
//session_start();
$lg=$_SESSION['userlogin'];
//echo $lg;
include('connection.php');
$select="select * from  user where email='$lg'";
$query=mysqli_query($con,$select) or die('error');
while($row=mysqli_fetch_array($query,MYSQLI_BOTH))
{
    $name=$row['username'];
	$mobile=$row['mobile'];
	$email=$row['email'];
	$pass=$row['password'];
}
?>
 
 
<h1 class="text-success" style="padding-left:30px;">Select a delivery address</h1>
<p class="text-center">Enter the name and address you'd like your order to be delivered to. Please indicate also whether your invoice address is the same as the delivery address entered. When finished, click the "Continue" button.  Or, if you're sending items to more than one address, click the "Add another address" button to enter additional addresses.</p>
 <hr/>
 <div class="col-sm-1"></div>
 <form action="usercode.php?flag=3" method="post" class="form-group">
      <div class="col-sm-6">
       <div class="form-group">
	    <label>user Name</label>
		<input type="text" name="name" value="<?php echo $name;?>"class="form-control"/>
		</div>
		<div class="form-group">
	    <label>Mobile Number</label>
	    <input type="text" name="mobile"value="<?php echo $mobile;?>"class="form-control"/>
		</div>
		<div class="form-group">
	    <label>Email address</label>
	    <input type="text" name="email" value="<?php echo $email;?>"class="form-control"/>
		</div>
		<div class="form-group">
	    <label>User Password</label>
	    <input type="text" name="password"value="<?php echo $pass;?>"class="form-control"/>
		</div>
		<div class="form-group">
	    <label>Pincode: </label>
	    <input type="text" name="pincode" class="form-control"/>
		</div>
		<div class="form-group">
	    <label>Flat / House No. / Floor / Building: </label>
	    <input type="text" name="houseno" class="form-control"/>
		</div>
		<div class="form-group">
	    <label>Colony / Street / Locality: </label>
	    <input type="text" name="colony" class="form-control"/>
		</div>
		<div class="form-group">
	    <label>Landmark: (optional)</label>
	    <input type="text" name="landmark" class="form-control"/>
		</div>
		<div class="form-group">
	    <label>Town/City: </label>
	    <input type="text" name="city" class="form-control"/>
		</div>
		<div class="form-group">
	    <label>state: </label>
	    <input type="text" name="state" class="form-control"/>
		</div>
		<div class="form-group">
	    <label>click here for submit</label>
	    <input type="submit" value="continue"class="btn btn-danger form-control"/>
		</div>
		</div>
 </form>
</body>
</html>
