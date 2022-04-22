<?php   

include("connection.php");
    
?>
<div class="menu-container navbar-justified">
        <div class="menu">
		    
            <ul>
                           <li><a href="index.php">Home</a></li>
						   
						   <?php
						   
						   
	                            $selcat="select * from categary order by categaryId desc";
	                            $querycat=mysqli_query($con,$selcat) or die("query error");
								
								while($rowcat=mysqli_fetch_array($querycat,MYSQLI_BOTH))
								{
                                   $cid=$rowcat['categaryId'];
									$cname=$rowcat[1]; 
									//echo $cname;	 
				$selsubcat="select * from subcategary where categaryId='$cid'";
                $querysubcat=mysqli_query($con,$selsubcat) or die("sub category error");
								 $rowsubcat=mysqli_fetch_array($querysubcat,MYSQLI_BOTH);
                                ?>
	                           <?php
							     if($rowsubcat==null)
								 {
							   ?>		

                                          <li role="presentation" >
										  <a href="productshow.php?cid=<?php echo $cid;  ?>">
										  <?php 
										  echo  $cname; 
										  ?> 
										  </a>
										  
										  </li>
						            <?php
								 }
								 else
								 { 
								  ?>   
							   
                             <li>
									  <a>
                                          <?php
										  
										  echo $cname;
										  
										  ?> <span class="caret"></span>
                                       </a>
                                           <ul>
                                                 
												 <?php
												
                                $querysubcat1=mysqli_query($con,$selsubcat) or die("sub category error");
								           while($rowsubcat1=mysqli_fetch_array($querysubcat1,MYSQLI_BOTH))
										   {
											   
											   $sid=$rowsubcat1['subcategary_id'];
											   $sname=$rowsubcat1['SubCategaryName'];
												 ?>
						                    
                <li role="presentation" >
					<a href="productshow.php?cid=<?php  echo $cid;  ?>&sid=<?php  echo  $sid; ?>">
					<?php
					
					echo $sname;
					
					?>
					
					</a>
					
					</li>
						 			 <?php		
										   } 
									          ?>
                                              </ul>
                                            </li>
								 <?php 
								 } 
								 }
								 ?>
</ul>
    </div>
    </div>
  
 <script src="js/megamenu.js"></script> 
