<?php
    include 'mysqli.php';
    session_start();
    
    $vehicle=$_POST['data'];
    $filter=implode(' , ', $vehicle);

    if ($_POST['price'] != 'no_price') 
    {
    	$price_v=$_POST['price'];
        $price=implode(' , ',$price_v);

    if ($price ==301) 
    {
       $Type=">";
    }
    if ($price ==50) 
    {
    	$Type="<";
    }
    if ($price ==300) 
    {
    	$Type="<";
    }
    if ($price ==200) 
    {
    	$Type="<";
    }
   }else{
      $price="20";
      $Type="";
   }
    $query='
     SELECT * FROM  market
     WHERE money_m '.$Type.'='.$price.'
     AND Producer_m ="'.$filter.'"
       ';
      $stm=$connect->prepare($query);
      $stm->execute();
      $fetchm=$stm->fetchall();
      $rowm=$stm->rowcount();
      foreach ($fetchm as $row) 
      {  
        ?>
           <div  class="row row_item">
	           <div id="str" class="col-sm-4">
	                     <figure>
	                    <span class="ribbon off">
	                     <?php echo $row['k']; ?></span>
	                    <form  method="post" action="Purchase.php">
					   <input id="add" type="hidden" name="markt_id"  value="<?php echo $row['market_id'] ?>">
					   <?php
                          if ($row['imge_m'] != "") 
                          {
					   ?>
						 <a>
						<input type="image"  class="img-fluid lazy" src="<?php  echo $row['imge_m'] ?>"  alt="">
					     </a>
					     <?php
                           }
					     ?>
	                   </form>
	                        </figure>
	                    </div>
	                    <div class="col-sm-8">
	                        <div class="rating">
	                        	<?php 
                                if ($row['star_m'] == 1) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].' reviews</em>';
                                }

                                if ($row['star_m'] == 2) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].'reviews</em>';
                                }

                                if ($row['star_m'] == 3) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].'reviews</em>';
                                }

                                if ($row['star_m'] == 4) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].' reviews</em>';
                                }
                                if ($row['star_m'] == 5) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	</i><em>'.$row['star_m'].' reviews</em>';
                                }
	              
	                        	?>
	                        </div>
	                        <a href="product-detail-1.html">
	                            <h3><?php echo $row['title_m']; ?></h3>
	                        </a>
	                        <p><?php echo $row['text_m']  ?></p>
	                        <div class="price_box">
	                            <span class="new_price">$
	                             <?php echo $row['money_m']; ?></span>
	                        </div>
	                        <ul>
	                            
                       <form  method="post" action="Purchase.php">
					   <input id="add" type="hidden" name="markt_id"  value="<?php echo $row['market_id'] ?>">
					   <?php 
                          if ($row['imge_m'] != "") 
                          {
					     ?>
                         <input type="submit" class="btn-primary" value="Add to Cart" >
					     <?php
                           }
					     ?>
	                   </form>

	                      	<?php
                             $query="
                                SELECT * FROM saved_products
                                where markt_id_s = '".$row['market_id']."'
                             ";
                             $stm=$connect->prepare($query);
                             $stm->execute();
                             $rowc=$stm->rowcount();
							?>
							<li><a id="<?php echo $row['market_id'];?>" href="#0" class="tooltip-1 save 
								s<?php echo $row['market_id']; ?>" data-toggle="tooltip" data-placement="left" title="
								<?php
								if ($rowc > 0) 
								{echo"The product has been saved";
 								}else{echo'Click to save the product';}
								?>">
								<?php
								if ($rowc > 0) 
								{
                                  echo "<i class='ti-save-alt'></i>";
 								}else{
 									echo '<i  class="ti-save"></i>';
 								}
								?><span>Add to favorites</span></a></li>

	                       <li><a href="#0" class="btn_1 gray tooltip-1" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
	               </ul>
	          </div>
	      </div>
        <?php
          }
        ?>