<html>
 <head>
 <?php
   error_reporting(0);
    session_start();
	include('connection.php');
	$lg=$_SESSION['userlogin'];
	//echo $lg;
 ?>
 
 <?php include('link.php');?>
 </head>
 <body>
 <?php 
 include('header.php');
 ?>
	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
		  <div class="jumbotron"> 
		       <h1 class="text-danger text-center">Congratulations for Enter profile </h1>
			   </div>	
		     <div class="col-sm-2"></div>
				<div class="col-sm-8">
				<br/>
			
				<?php  
				$select="select * from user where email='$lg'";
					$q=mysqli_query($con,$select) or die('error');
					$row=mysqli_fetch_array($q,MYSQL_BOTH);
		         ?>
		<div class="col-sm-6">
		 <p> Your Name</p>
		</div>
		<div class="col-sm-6">
		 <p> <?php echo $row['1']; ?></p>
		</div>
			<br/>
			<br/>
			
	     <div class="col-sm-6">
		<p>Mobile Number</p>
		</div>
		<div class="col-sm-6">
		 <p><?php echo $row['2']; ?></p>
		</div>	
    	<br/>		
    	<br/>		
		 <div class="col-sm-6">
		<p>Your Email Id</p>
		</div>
		<div class="col-sm-6">
		 <p><?php echo $row['3']; ?></p>
		</div>
	<br/>		
	<br/>		
		 <div class="col-sm-6">
		<p>Password</p>
		</div>
		<div class="col-sm-6">
		 <p><?php echo $row['3']; ?></p>
		</div>		   
		<br/>	   
			   </div>
			  <div class="col-sm-2"></div>
		</div>
		</div> 
			<br/>
			<br/>
			
	</div>
	<?php  
	include('footer.php');
	?>
 </body>
</html>