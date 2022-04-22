<html>
 <head>
 <?php include('link.php');?>
 </head>
 <body>
 <?php 
 include('header.php');
 ?>
	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
		     <div class="col-sm-3"></div>
				<div class="col-sm-6">
				<br/>
				<br/>
		     <form  action="changepasswordcode.php?flag=3" method="post" id="drop">
			    <br/>
				 <h1 style="color:red; text-align:center;"><b>Change Password</b></h1>
				 <hr/>
				 <center>
				 <div class="form-group">
				 <label>New password</label>
				 <input type="text" name="newpass" placeholder="enter Mobile number" class="form-control" required style="width:70%;"/>
				 </div>
				 </center>
				 <center>
				 <div class="form-group">
				 <label>Confirm password</label>
				 <input type="text" name="conpass" placeholder="Enter Email id" class="form-control" required style="width:70%;"/>
				 </div>
				 </center>
				 <center>
				 <div class="form-group">
				 <input type="submit" value="Next Step" class="form-control btn-success" style="width:30%; font-weight:bold;"/>
			     </div>
				 </center>
				 <br/>
				 
			 </form>
			 </div>
			  <div class="col-sm-3"></div>
			
		</div>
		</div> 
			<br/>
			<br/>
			<br/>
	</div>
	<?php  
	include('footer.php');
	?>
 </body>
</html>