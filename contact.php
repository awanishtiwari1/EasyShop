<html>
<head>
<?php include('link.php');?>
</head>
<body>
<?php 
include('header.php');
//include('navbar.php');
?>
<div class="container-fluid">
  <div class="row">
     <div class="col-sm-12" style="background-image:url('image/con1.jpeg'); background-size:100% 100%; height:600px;">
	 <br/>
	 <br/>
	    <div class="col-sm-1">
		
		
		</div>
	
	    <div class="col-sm-5" style="background-color:rgba(0,0,0,0.2); box-shadow:0px 0px 20px gray">
		<br/>
		  	<h1 class="text-success text-center"><b>Help and Contacts Us</b></h1>
			<hr/>
			<form action="usercode.php?flag=4" method="post" class="form-group">
			<div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user text-danger"></i></span>
                  <input  name="name" placeholder="Enter the proper Name..." class="form-control" type="text" required  style="height:45px;"/>
            </div>
			<br/>
			<div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope text-danger"></i></span>
                  <input  name="email" placeholder="Enter the E-mail Id" class="form-control" type="email" required style="height:45px;"/>
            </div>
			<br/>
			<div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-phone text-danger"></i></span>
                  <input  type="number" name="number" placeholder="Enter the Mobile number" class="form-control" required style="height:45px;"/>
            </div>
			<br/>
			<div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-address-card-o text-danger"></i></span>
                  <textarea name="description" rows="5" cols="51" style="resize:none;"></textarea>
            </div>
			    
				<br/>
				<center>
				<input type="submit" name="submit" value="submit" class="btn btn-danger form-control" style="width:40%;"/>
				</center>
			</form>
			
		</div>
	    <div class="col-sm-6"></div>
	 </div>
  </div>
  <div class="row bg-primary">
  <h1 class="text-center">Company location.</h1>
   <iframe src="https://www.google.com/maps/place/BANSAL+INSTITUTE+OF+ENGINEERING+AND+TECHNOLOGY/@26.9423507,80.9245913,17z/data=!3m1!4b1!4m5!3m4!1s0x399957e00ca6992d:0x3e09558f651ae573!8m2!3d26.9423459!4d80.92678" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  
  </div>
</div>
<?php 
include('footer.php');
?>
</body>
</html>