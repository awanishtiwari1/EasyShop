  <?php 
error_reporting(0);
session_start();
$userid=$_SESSION['userlogin'];
 include('connection.php');
   $count="select count(cartid) from cart where UserId='$userid' and status='false'";
   $query=mysqli_query($con,$count) or die('error query');
   while($row=mysqli_fetch_array($query,MYSQL_BOTH))
   {
	   $count1=$row['0'];
	   //echo $count1;
   }
?>

<script src="js/jquery-2.1.0.min.js"></script>
<script>
$(document).ready(function(){
	$('#showpassword').click(function(){
		if($('.password').attr("type")=="password")
		{
			$('.password').attr('type','text');
		}
		else{
			$('.password').attr('type','password');
		}
	});
	
});
</script>
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-12 a">
	    <div class="col-sm-1"></div>
		<div class="col-sm-10">
		<ul class="nav nav-tabs">
		  <li><a href="index.php" class="fa fa-home"> Home&nbsp;</a></li>
		  
		  <li><a href="contact.php" class="fa fa-mobile"> Help & contact &nbsp;</a></li>
		 
		  <li><a href="#" class="fa fa-map-marker"> Track My Order &nbsp;</a></li>
		  
		  <li><a href="aboutUs.php" class="fa fa-map-marker b3"> Mysites &nbsp;</a></li>
		  
		  <li><a href="payment.php" class="fa fa-map-marker b4"> payment &nbsp;</a></li>
		  <?php  
              $e=$_SESSION['userlogin'];
			 //echo $e;
			 if($e==null)
			 {
		  ?>
		  <li><a href="userLoginlogout.php" class="fa fa-power-off b4" style="color:red; display:none;"> <b> LogOut</b> &nbsp;</a></li>
		 <?php   
			 }
			 else
			 {
		   ?>
		    <li><a href="userLoginlogout.php" class="fa fa-power-off b4" style="color:red; display:block;"> <b> LogOut</b> &nbsp;</a></li>
		   <?php  
			 }
		   ?>
		  <li class="pull-right">
		     <a href="UserLoginCode.php" class="fa fa-user">SignIn</a>
		  <!---
			 
			 
		  </li>
<!------model open here----------------------------->		  
<li  class="pull-right litext">
<a class="text-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registration</a>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="font-size:50px; color:red; font-weight:bold;">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"><h1 style="color:red;">Create Account.<small>New to easyshop.in?</h1></small></h4>
      </div>
	  
	  <div class="col-sm-1"></div>
	  <div class="col-sm-10">      
	  
      <div class="modal-body">
        <form id="formdata" action="usercode.php?flag=1" method="post">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name</label>
            <input type="text" class="form-control" placeholder="User name" name="name"required />
          </div>
          <div class="form-group form-inline">
            <label for="message-text" class="control-label">we'll send you a text verification</label><br/>
             <select class="form-control form-inline" name="code">
			    <option class="selected">IN +91</option>
				<option>Iceland +354</option>
				<option>Indonesia +62</option>
				<option>Iraq +98</option>
				<option>Japan +81</option>
				<option>Kuwait +965</option>
				<option>Libaria +231</option>
			 </select>
             <input type="number" class="form-control form-inline" placeholder="mobile number" name="mobile" required />
          </div>
		   <div class="form-group">
            <label for="message-text" class="control-label">Email</label>
             <input type="email" class="form-control" placeholder="email address" name="email" required />
          </div>
		  <div class="form-group">
            <label for="message-text" class="control-label">Password</label>
             <input type="password" class="form-control password" placeholder="create a password(6+charecters)" name="password" required />
			 <input type="checkbox" id="showpassword"/><span>show password</span>
          </div>
		  <input type="submit" name="submit" value="submit" class="form-control btn-primary">
        </form>
		</div>
		<div class="col-sm-1"></div>
      </div>
      <div class="modal-footer">
	     
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div> 
			 
			 </li>
<!------model close here------------------------------------>			 
		  </ul>
		</div>
	<div class="col-sm-1"></div>
	 <div class="col-sm-12">
    <div class="col-sm-3 ax1" style="padding:0px; margin:0px;">
	   <img src="image/logo4.jpg" style="width:90%;"/>
	</div>
    <div class="col-sm-8 ax2">
	  <form class="form from-group"   action="productshow.php"  >
	   <div class="form-group form-inline in">
	    <input type="search" placeholder="search for product,Brand more" name="search" class="form-control"/>
	     <button class="btn btn-primary btnsearch"><span class="fa fa-search"> </span>  search</button> 
      <?php 
	  if($count1==0)
	  {
	  ?>		 
	     <a href="cartshow.php" class="btn btn-primary btnsearch" disabled><span class="fa fa-shopping-cart"> </span>  cart <span class="badge"><?php echo $count1;  ?></span></a>  
	<?php  
	  }
	  else
	  {
      ?>
       <a href="cartshow.php" class="btn btn-primary btnsearch" ><span class="fa fa-shopping-cart"> </span>  cart <span class="badge"><?php echo $count1;  ?></span></a>  
	  <?php  }?>
	  <?php 
	  $sel22="select * from user where  email='$userid'";
	  $qq1=mysqli_query($con,$sel22) or die('query error');
	  $row12=mysqli_fetch_array($qq1,MYSQLI_BOTH);
         if($userid==null)
		 {
	  ?>
       <marquee  style="color:white; display:none;"><b>Most Welcome -</b><?php  echo  $row12[1];?></marquee>
       <?php   
		 }
		 else
		 {
	   ?>	
	   <marquee    style="color:white; display:block;"><b>Most Welcome -</b><?php  echo  $row12[1];?></marquee>
     <?php  
		 }
	 ?>	   
	   </div>	
	   </form>
	</div>
    </div>
	 </div>
  </div>
</div> 
 
<!---slider start------------------------------------------------------------>



<!--------end slider here------------------------------------------------------>
