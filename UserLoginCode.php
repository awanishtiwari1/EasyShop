<html>
 <head>
 <?php include('link.php');?>
 <script>
$(document).ready(function(){
	$('#showpassword').click(function(){
		if($(this).prop("type")==true)
		{
			$('#password').attr('type','text');
		}
		else{
			$('#password').attr('type','password');
		}
	});
});
</script>
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
		     <form  action="usercode.php?flag=2" method="post" id="drop">
			    <br/>
				 <h1 style="color:red; text-align:center;"><b>Login</b></h1>
				 <hr/>
				 <center>
				 <div class="form-group">
				 <input type="email" name="email" placeholder="email Id" class="form-control" required style="width:70%;"/>
				 </div>
				 </center>
				 <center>
				 <div class="form-group">
				 <input type="password" id="password" name="password" placeholder="password" class="form-control" required style="width:70%;" />
				 
				 <input type="checkbox" name="check" id="showpassword" style="margin-left:20px;" /> Show Password
				 </div>
				 
				 </center>
				 <center>
				 <div class="form-group">
				 <input type="submit" value="submit" class="form-control btn-primary" style="width:30%; font-weight:bold;"/>
			     </div>
				 <a href="changepassword.php" class="text-primary">forget password</a>
				 </center>
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