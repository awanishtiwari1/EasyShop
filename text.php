 <?php
      $query="select * from product order by product_Id desc limit 0,20";
      $res=mysqli_query($con,$query) or die("query error");	   

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
   
     <img src="image/<?php  echo $row['image1'];  ?>" style="height:250px;width:100%; " class="img-responsive" />
	 <br/>
	 <h3 class="text-primary"><?php  echo $row['1'];  ?></h3>
	 <h4><?php  echo $row['price'];  ?> <i class="fa fa-rupee"></i>	 </h4>
   <a href="viewproduct.php?productid=<?php echo $row['0'];   ?>" class="btn btn-success">View Full Details</a>
    <br/>
	<br/>
	<form  class="form-inline"  action="code.php?flag=1"  method="post" enctype="multipart/form-data">
	
	<input type="hidden" name="proid"  value="<?php  echo $row['0'];  ?>" />
    <div class="form-group">
    <label class="text-warning">Qty</label>
	 <select name="Qty"  class="form-control" >
	 <option>1</option>  <option>2</option><option>3</option> <option>4</option>
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