<?php
include("connection.php");

if(!isset($_REQUEST['search']))
{		
             if(!isset($_REQUEST['cid']))
             {
                   if(!isset($_REQUEST['sid']))
                        {
                                   header('location:index.php');	
                         }
              }
}
	        if(isset($_REQUEST['search']))
			{
				$proname=$_REQUEST['search'];
				
				$query="select * from product where productname like '%$proname%'";
				
			}
			else if(isset($_REQUEST['cid']) && isset($_REQUEST['sid']))
			{
				$cid=$_REQUEST['cid'];
				$sid=$_REQUEST['sid'];
				
				$query="select * from product where categary='$cid' and subCategary='$sid'";
				
				
			}
       
        $res=mysqli_query($con,$query) or die("query error");	   

?>

<html>
<head>
<?php
include("link.php");
?>
</head>
<body>
<?php
include("header.php");
include("navbar.php");
include("slider.php");
echo "<br/>";
?>
<div class="container-fluid">
<div class="row">
<?php

while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
{
?>
<div class="col-sm-3">
   <br/>
   <div class="productview">
     <img src="image/<?php  echo $row['image1'];  ?>" style="height:250px;width:100%; " class="img-responsive"/>
	 <br/>
	 <h3 class="text-primary"><?php  echo $row['1'];  ?></h3>
	 <h4 color="red"><?php  echo $row['price'];  ?> <i class="fa fa-rupee"></i>	 </h4>
   <a href="viewproduct.php?productid=<?php echo $row['product_Id'];   ?>" class="btn btn-success">View Full Details</a>
    <br/>
	<br/>
	<form  class="form-inline"  action="code.php?flag=1"  method="post" enctype="multipart/form-data">
	<input type="hidden" name="proid" value="<?php  echo $row['product_Id'];?>" />
    <div class="form-group">
    <label class="text-danger">Qty</label>
	 <select name="Qty"  class="form-control" >
	 <option selected >1</option>  <option>2</option><option>3</option> <option>4</option>
	  <option>5</option> <option>6</option> <option>7</option>
	   <option>8</option> <option>9</option> <option>10</option>
	 </select>
	
      </div>
	  
	  <?php
	    
		if($row['stock']==true)
        {	  
	  ?>
	   
	   <button type="submit" class="btn btn-success">Add To Cart</button>
	  
	  <?php 
	     
		}
	   else
	   {
	  ?>
	   <button type="submit" disabled class="btn btn-danger">out of stock</button>
	<?php
	   }
	?>
	</form>
     </div>

</div>
<?php 

}

 ?>

</div>
</div>
<?php  

include("footer.php");

?>
</body>
</html>