

<html>
	<head><?php include('link.php');?></head>
	<body>
	<?php include('header.php');?>
	  <?php 
		//session_start();
		$lg=$_SESSION['userlogin'];
		 include('connection.php');
		 $select="select * from cart where UserId='$lg' and Status='false'";
		 $q=mysqli_query($con,$select) or die("query error");
		?>
	<?php include('navbar.php');?>
		<div class="container-fluid">
		<br/>
		<div class="col-sm-12">
		<div class="col-sm-8">
		  <div class="panel panel-primary">
			<div class="panel-heading"></div>
			<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-hover">
				<tr>
					<th>image</th>
					<th>product name</th>
					<th>price</th>
					<th>Quantity</th>
				
				</tr>
			<?php 
                  $totalcount=0;			   
                while($row=mysqli_fetch_array($q,MYSQLI_BOTH))
 { 
	 $cartid=$row['CartId'];
	 //echo  $cartid."<br/>";
	 $userid=$row['UserId'];
	 //echo  $userid."<br/>";
	 $productId=$row['productId'];
	 //echo $productId."<br/>";
	 $qty=$row['Quantity'];

			  
			   $sel="select * from product where product_Id='$productId'";
			   $query1=mysqli_query($con,$sel)or die(" product query error");
			   while($row=mysqli_fetch_array($query1,MYSQLI_BOTH))
			   {
				   $totalcount=$totalcount+$row['price'];
				
			?>	
				<tr>
					
					<td><img src="image/<?php echo $row['image1'];?>" style="height:100px; width:250px;"/></td>
		
					<td><?php echo $row['productName'];?></td>
					<td><?php echo $row['price'];?></td>
					<td><?php echo $qty;?></td>
					<td></td>
					<td><a href="checkoutdelete.php?id=<?php echo $productId; ?>" style="color:red;"><b>delete</b></a></td>
				</tr>
			<?php			
			   }
			   
			?>

 <?php 
 }
 
 ?>		

			</table>
			
			</div>
			</div>
			</div>
			</div>
		<div class="col-sm-4">
		   <div class="panel panel-primary">
			<div class="panel-heading">
	           <p><i class="fa fa-check text-danger"> </i> Part of your order qualifies for FREE Delivery.</p>
			</div>
			<div class="panel-body">
			   <h1 class="text-success">Totals:&nbsp; <i class="fa fa-rupee"></i> &nbsp;&nbsp;<span style="font-size:25px;color:red;"><?php  echo   $totalcount; ?>.00</span></h1> 
			  
			</div>
			<div class="panel-footer">
			<p class="text-center">
			<a href="cartshow.php?checkout=success" class="btn btn-danger">Chechout Countinue</a>
			</p>
			</div>
		</div>
		</div>	
		</div>
        <div class="col-sm-12">
		
		
<?php

if(isset($_REQUEST['checkout']))

{
?>

<html>
<body>
<?php 
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
 <hr/>
 
<h1 class="text-success" style="padding-left:30px;">Select a delivery address</h1>
<p class="text-center">Enter the name and address you'd like your order to be delivered to. Please indicate also whether your invoice address is the same as the delivery address entered. When finished, click the "Continue" button.  Or, if you're sending items to more than one address, click the "Add another address" button to enter additional addresses.</p>
 <hr/>
 <div class="col-sm-12">
<!-------<form action="usercode.php?flag=3" method="post" class="form-group">--------->
<form action="payment.php" method="post" class="form-group">
      <div class="col-sm-6">
       <div class="form-group">
	   <label>total Amount</label>
		<input type="text" name="amount" value="<?php echo $totalcount;?>"class="form-control"/>
		</div>
		<div>
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
	    <label>Product Information</label>
	    <input type="text" name="pinfo"class="form-control"/>
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
	    <label>Town/City: </label>
	    <input type="text" name="city" class="form-control"/>
		</div>
		<div class="form-group">
	    <label>state: </label>
	    <input type="text" name="state" class="form-control"/>
		</div>
		<div class="form-group">
	    <label>click here for submit</label>
	    <input type="submit" value="Process To Payment" class="btn btn-danger form-control"/>
		</div>
		</div>
 </form>
</div>


<?php

}

?>
		
		</div>
		
		</div>
		<?php 
		include('footer.php');
		?>
	</body>
</html>

