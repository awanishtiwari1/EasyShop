<?php include('connection.php');?>
<html>
<head>
<?php 
include('link.php');
?>
</head>
<body>
<?php 
include('header.php');
include('navbar.php');

?>
<?php 
$productid=$_REQUEST['productid'];
//echo $productid;
echo "<br/><br/>";
$sel="select * from  product where product_Id=$productid";
$query=mysqli_query($con,$sel) or die("query error");
?>
<div class="container-fluid">
  <div class="row">
   <div class="col-sm-12">
		<div class="col-sm-1"></div>
		<div class="col-sm-5">
		   <div class="panel panel-primary">
		       <div class="panel-heading">
			      <h1>full details</h1>
			   </div>
			   <div class="panel-body">
			     <?php 
				  while($row=mysqli_fetch_array($query,MYSQL_BOTH))
				   {
				 ?>
					<img src="image/<?php echo $row['image1']?>" style="height:500px; width:100%"/>
					
					<?php 
				   }
					?>
					<br/><br/>
					<center>
				     <a href="cartshow.php" class="btn btn-primary btn-lg" style="width:50%;"><i></i>Buy</a>
			        </center>
			   </div>
		   </div>
		</div>
		<div class="col-sm6">
			<!------code here--------------------------------------->
			<?php 
			  $select="select * from product where product_Id='$productid'";
			  $q123=mysqli_query($con,$select) or die('query error ...');
			  $row=mysqli_fetch_array($q123,MYSQLI_BOTH);
			?>
			<h1 class="text-danger">Price -<?php  echo $row['7'];?><i class="fa fa-rupee"></i></h1>
			<p><small class="text-danger" style="font-size:25px;">Modal -&nbsp; </small><?php echo $row['1']; ?></p>
			<p><small class="text-danger" style="font-size:25px;">Title -&nbsp; </small><?php echo $row['2']; ?></p>
			<p><small class="text-danger" style="font-size:25px;"> Brand -&nbsp; </small><?php echo $row['5']; ?></p>
			<p><small class="text-danger" style="font-size:25px;">Offers -&nbsp; </small><?php echo $row['8']; ?>% <i class="fa fa-rupee"></i></p>
			<h1 class="text-danger">Description </h1>
			<p><?php echo $row['Description']; ?></p>
		</div>
   </div>
   </div>
   <hr/>
   <?php 
   
   ?>
   <div class="row">
   <div class="con-sm-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="text-center">Similar Products items</h1>
			</div>
		</div>
   </div>
   <div class="col-sm-12">
       <?php 
	   $sel2="select * from  product where product_Id=$productid";
       $query1=mysqli_query($con,$sel2) or die("query error");
	   while($row=mysqli_fetch_array($query1,MYSQL_BOTH))
	   {
	   ?>
	     <div class="col-sm-3 hvr hvr-Bounce-In" style="box-shadow:0px 10px 20px gray; margin:40px;">
	     <img src="image/<?php echo $row['image1'];?>" style="height:200px; width:90%; float:left; margin:20px;"/>
		 <h1 class="text-danger text-center"> <b>price</b> <?php echo $row['price'];?><i class="fa fa-rupee"></i></h1>
		 </div>
	     
		 <div class="col-sm-3" style="box-shadow:0px 10px 20px gray; margin:40px;">
	     <img src="image/<?php echo $row['image2'];?>" style="height:200px; width:90%; float:left; margin:20px;"/>
		 <h1 class="text-danger text-center"> <b>price</b> <?php echo $row['price'];?><i class="fa fa-rupee"></i></h1>
		 </div>
		 <div class="col-sm-3" style="box-shadow:0px 10px 20px gray; margin:40px;">
	     <img src="image/<?php echo $row['image3'];?>" style="height:200px; width:90%; float:left; margin:20px;"/>
		 <h1 class="text-danger text-center"> <b>price</b> <?php echo $row['price'];?><i class="fa fa-rupee"></i></h1>
		 </div>
	   <?php  
	   }
	   ?>
	</div>
   </div>
   	<br/><br/>
</div>
<?php 
include('footer.php');
?>
</body>
</html>