<html>
	<head>
		<?php include('link.php');?>
	</head>
	<body>
	<?php include('header.php');?>
	<!-----------coding start here -------------------->
	    <div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
		     <div class="col-sm-3"></div>
				<div class="col-sm-6">
				<br/>
				<br/>
		     <form  action="changepasswordcode.php?flag=2" method="post" id="drop">
			    <br/>
				 <h1 style="color:red; text-align:center;"><b>Check one time password</b></h1>
				 <hr/>
				 <center>
				 <div class="form-group">
				 <input type="text" name="otp" placeholder="enter Current opt number" class="form-control" required style="width:70%;"/>
				 </div>
				 </center>
				 <br/><br/>
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
	<!-----------end here ------------------------------>
	<?php include('footer.php');?>
	</body>
</html>