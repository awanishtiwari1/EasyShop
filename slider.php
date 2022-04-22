<script> 
  $(document).ready(function(e) {     
     $('.carousel-indicators li:nth-child(1)').addClass('active'); 
   	 $('.item:nth-child(1)').addClass('active');   
	 }); 
</script> 
<?php 
include('connection.php');
?>
<!---slider start------------------------------------------------------------>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top:.1px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
   <?php 
   $a=0;
   $sel1="select * from offers limit 0,5";
   $q1=mysqli_query($con,$sel1) or die('query errror');
   while($row=mysqli_fetch_array($q1,MYSQLI_BOTH))
   {
   ?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $a++;?>"></li>
    <?php 
   }
	?>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php 
	$sel2="select * from offers limit 0,5";
	$q2=mysqli_query($con,$sel2) or die('query errorr ...');
	while($row1=mysqli_fetch_array($q2,MYSQLI_BOTH))
	{
	?>
    <div class="item">
      <img src="image/<?php echo $row1['image'];?>" alt="img2">
      <div class="carousel-caption">
	  <?php  echo $row1['2']; ?>
      </div>
    </div>
	<?php  
	}
	?>
    
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!--------end slider here------------------------------------------------------>

