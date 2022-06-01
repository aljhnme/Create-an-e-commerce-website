 
<?php include 'mysqli.php'; 
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.custom.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="css/product_page.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
		
	<?php include 'hedar.php'; ?>
	<?php
	if ($_SESSION['user_id'] == "") 
      {
       header('location:account.html');
      }
      ?>
    <?php
         $query='
            SELECT * FROM market
            where market_id="'.$_POST['markt_id'].'"
            ';
          $stm=$connect->prepare($query);
          $stm->execute();
          $fetchall=$stm->fetchAll();
     ?>
	<main class="bg_gray">
	    <div class="container margin_30">
	        <div class="page_header">
	            <div class="breadcrumbs">
	                <ul>
	                    <li><a href="#">Home</a></li>
	                    <li><a href="#">Category</a></li>
	                    <li>Page active</li>
	                </ul>
	            </div>
	            <?php
                foreach ($fetchall as $row) 
                {
	            ?>
	            <h1><?php echo $row['title_m'];  ?></h1>
	        </div>
	        <!-- /page_header -->
	        <div class="row justify-content-center">
	            <div class="col-lg-8">
	                <div class="owl-carousel owl-theme prod_pics magnific-gallery">
	                	<?php
	                	if ($row['imge_m1'] != "") 
	                	{
                         echo 
                         '
                         <div class="item">
	                      <a href="'.$row['imge_m1'].'"title="Photo title" data-effect="mfp-zoom-in">
	                        	<img src="'.$row['imge_m1'].'" alt=""></a>
	                    </div>
                         ';
                         }
	                	?>
	                    <!-- /item -->
	                    <?php

	                    if ($row['imge_m'] != "")
	                     {
	                    echo'
	                    <div class="item">
	                        <a href="'.$row['imge_m'].'" title="Photo title" data-effect="mfp-zoom-in"><img src="'.$row['imge_m'].'"data-src="'.$row['imge_m'].'" alt="" class="owl-lazy"></a>
	                    </div>
	                        ';
	                    }
	                    ?>
	                    <!-- /item -->
	                </div>
	                <!-- /carousel -->
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	    
	    <div class="bg_white">
	        <div class="container margin_60_35">
	            <div class="row justify-content-between">
	                <div class="col-lg-6">
	                    <div class="prod_info version_2">
	                        <span class="rating">
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
	                        </span>
	                        <p><small>SKU: MTKRY-001</small><br>
                              <?php echo $row['text_m'];  ?>
	                        </p>
	                    </div>
	                </div>
	                <div class="col-lg-5">
	                    <div class="prod_options version_2">
	                        <div class="row">
	                            <label class="col-xl-7 col-lg-5  col-md-6 col-6 pt-0"><strong>Color</strong></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6 colors">
	                                <ul>
	                                    <li><a href="#0" class="color color_1 active"></a></li>
	                                    <li><a href="#0" class="color color_2"></a></li>
	                                    <li><a href="#0" class="color color_3"></a></li>
	                                    <li><a href="#0" class="color color_4"></a></li>
	                                </ul>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <label class="col-xl-7 col-lg-5 col-md-6 col-6"><strong>Size</strong> - Size Guide <a href="#0" data-toggle="modal" data-target="#size-modal"><i class="ti-help-alt"></i></a></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
	                                <div class="custom-select-form">
	                                    <select class="wide">
	                                        <option value="" selected="">Small (S)</option>
	                                        <option value="">M</option>
	                                        <option value=" ">L</option>
	                                        <option value=" ">XL</option>
	                                    </select>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <label class="col-xl-7 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
	                                <div class="numbers-row">
	                                    <input type="text" value="1" id="money" class="qty2" name="quantity_1">
	                                    <div class="inc button_inc">+</div>
	                                    <div class="dec button_inc">-</div>
	                                </div>
	                            </div>.00
	                        </div>
	                        <div class="row mt-3">
	                            <div class="col-lg-7 col-md-6">
	                                <div class="price_main"><span class="new_price">$<?php echo $row['money_m'] ?></span><span class="percentage">
	                                	<?php echo $row['k']; ?></span> <span class="old_price"></span></div>
	                            </div>
	                            <div class="col-lg-5 col-md-6">
	                                <div class="btn_add_to_cart">
	                                	<a href="#0" id="<?php echo $row['user_id'];  ?>" class="btn_1">
	                                Add to Cart</a></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <?php
                  }
	            ?>
	            <!--/row -->
	        </div>
	    </div>
	    <div class="bg_white">
	        <div class="container margin_60_35">
	            <div class="main_title">
	                <h2>Related</h2>
	                <span>Products</span>
	                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
	           </div>
	           <div class="owl-carousel owl-theme products_carousel">
                   <?php
                    $querym='
                     SELECT * From market
                     where Producer_m="'.$row['Producer_m'].'"
                    ';
                    $stam=$connect->prepare($querym);
                    $stam->execute();
                    $fetchm=$stam->fetchAll();
                    foreach ($fetchm as $rowm) 
                    {
                   ?>
	                <div class="item">
	                    <div class="grid_item">
	                    	<?php
                               if ($rowm['new'] == "new") 
                               {
	                           echo '<span class="ribbon new">New</span>';
                               }
	                    	?>
	                        <figure>
	                        <form  method="post" action="Purchase.php">
					        <input id="add" type="hidden" name="markt_id"  value="<?php echo $rowm['market_id'] ?>">
						    <a>
						   <input type="image"  class="img-fluid lazy" src="<?php  echo $rowm['imge_m'] ?>"  alt="">
					     </a>
	                   </form>
	                        </figure>
	                        <div class="rating">
	                        <?php 
                                if ($rowm['star_m'] == 1) 
                                {
                                echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].' reviews</em>
	                        	';
                                }

                                if ($rowm['star_m'] == 2) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].'reviews</em>';
                                }

                                if ($rowm['star_m'] == 3) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].'reviews</em>';
                                }

                                if ($rowm['star_m'] == 4) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].' reviews</em>';
                                }
                                if ($rowm['star_m'] == 5) 
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
	                            <h3><?php echo$rowm['title_m']; ?></h3>
	                        </a>
	                        <div class="price_box">
	                            <span class="new_price">$
	                            	<?php echo$rowm['money_m']; ?>
	                            </span>
	                        </div>
	                        <ul>
	                        <?php
                             $query="
                                SELECT * FROM saved_products
                                where markt_id_s = '".$rowm['market_id']."'
                             ";
                             $stm=$connect->prepare($query);
                             $stm->execute();
                             $rowc=$stm->rowcount();
							?>
							<li><a id="<?php echo $rowm['market_id'];?>" href="#0" class="tooltip-1 save 
								s<?php echo $rowm['market_id']; ?>" data-toggle="tooltip" data-placement="left" title="
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
								?>
	                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
	                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
	                        </ul>
	                    </div>
	                </div>
	                <?php
                      }
	                ?>
	            </div>
	        </div>
	    </div>
	</main>
	</div>	
	<div id="toTop"></div><!-- Back to top button -->

	<div class="top_panel">
	    <div class="container header_panel">
	        <a href="#0" class="btn_close_top_panel"><i class="ti-close"></i></a>
	        <label>1 product added to cart</label>
	    </div>
	    <!-- /header_panel -->
	    <?php
            foreach ($fetchall as $row) 
            {
	    ?>
	    <div class="item">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-7">
	                    <div class="item_panel">
	                        <figure>
	                            <img src="<?php echo $row['imge_m'];  ?>" data-src="<?php echo $row['imge_m'];?>" class="lazy" alt="">
	                        </figure>
	                        <h4><?php echo $row['title_m']; ?></h4>
	                        <div class="price_panel"><span class="new_price">$<?php  echo $row['money_m']; ?></span><span class="percentage">
	                        	<?php echo $row['k']; ?>
	                        </span> <span class="old_price">$160.00</span></div>
	                    </div>
	                </div>
	                <div class="col-md-5 btn_panel">
	                   <a href="#good" class="btn_1 cart" user-id="<?php echo $row['market_id'] ?>" id="<?php echo $row['user_id'];  ?>">Checkout</a>
	                </div>
	                <h4 style="color:red;" id="small_text"></h4>
	            </div>
	        </div>
	    </div>
	    <?php
          }
	   ?>
	        </div>
	    </div>
	</div>
	

		<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="size-modal" id="size-modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Size guide</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  	<i class="ti-close"></i>
				</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, et velit propriae invenire mea, ad nam alia intellegat. Aperiam mediocrem rationibus nec te. Tation persecuti accommodare pro te. Vis et augue legere, vel labitur habemus ocurreret ex.</p>
					<div class="table-responsive">
                                <table class="table table-striped table-sm sizes">
                                    <tbody><tr>
                                        <th scope="row">US Sizes</th>
                                        <td>6</td>
                                        <td>6,5</td>
                                        <td>7</td>
                                        <td>7,5</td>
                                        <td>8</td>
                                        <td>8,5</td>
                                        <td>9</td>
                                        <td>9,5</td>
                                        <td>10</td>
                                        <td>10,5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Euro Sizes</th>
                                        <td>39</td>
                                        <td>39</td>
                                        <td>40</td>
                                        <td>40-41</td>
                                        <td>41</td>
                                        <td>41-42</td>
                                        <td>42</td>
                                        <td>42-43</td>
                                        <td>43</td>
                                        <td>43-44</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">UK Sizes</th>
                                        <td>5,5</td>
                                        <td>6</td>
                                        <td>6,5</td>
                                        <td>7</td>
                                        <td>7,5</td>
                                        <td>8</td>
                                        <td>8,5</td>
                                        <td>9</td>
                                        <td>9,5</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Inches</th>
                                        <td>9.25"</td>
                                        <td>9.5"</td>
                                        <td>9.625"</td>
                                        <td>9.75"</td>
                                        <td>9.9375"</td>
                                        <td>10.125"</td>
                                        <td>10.25"</td>
                                        <td>10.5"</td>
                                        <td>10.625"</td>
                                        <td>10.75"</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CM</th>
                                        <td>23,5</td>
                                        <td>24,1</td>
                                        <td>24,4</td>
                                        <td>24,8</td>
                                        <td>25,4</td>
                                        <td>25,7</td>
                                        <td>26</td>
                                        <td>26,7</td>
                                        <td>27</td>
                                        <td>27,3</td>
                                    </tr>
                                </tbody></table>
                            </div>
					<!-- /table -->
				</div>
			</div>
		</div>
	</div>
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
          $(document).ready(function(){
          $(document).on('click','.cart',function(){

          	  var user_id=$(this).attr('id');
              var money=$("#money").val();
              var market_id=$(this).attr('user-id');
              var action='cart';

             $.ajax({
                 url:"action1.php",
                 type:"post",
                 data:{money:money,user_id:user_id,market_id:market_id,action:action},
                 success:function(data)
                 {
                   $("#small_text").html("He will receive a notification regarding the purchase of the product");
                 }
              });
            });
          });
     $(document).on('click','.save',function(){
            
         var market_id=$(this).attr('id');
         var action="save_m";

        $.ajax({
         url:'action1.php',
         type:'post',
         data:{market_id:market_id,action:action},
         success: function(data)
         {
          $(".s"+market_id).html("");
          $(".s"+market_id).html("<i class='ti-save-alt'></i>");
         }
     });
    });
    </script>
</body>
</html>
