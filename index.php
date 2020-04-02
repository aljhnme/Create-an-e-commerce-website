
<?php 
include 'mysqli.php';
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
    <link href="css/home_1.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	
<div id="page">
		
<?php include 'hedar.php';  ?>
	<main>
		<div id="carousel-home">
			<div class="owl-carousel owl-theme">
				<div class="owl-slide cover" style="background-image: url(img/slides/slide_home_2.jpg);">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-end">
								<div class="col-lg-6 static">
									<div class="slide-text text-right white">
										<h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Max 720 Sage Low</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Available products are priced at $ 200 or more
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="expensive.php" role="button">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
				<div class="owl-slide cover" style="background-image: url(img/slides/slide_home_1.jpg);">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-6 static">
									<div class="slide-text white">
										<h2 class="owl-slide-animated owl-slide-title">Attack Air<br>VaporMax Flyknit 3</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Available products are priced at $ 200 or less
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="Cheap.php" role="button">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="icon_drag_mobile"></div>
		</div>
		<!--/carousel-->

		<ul id="banners_grid" class="clearfix">
			<li>
				<a href="#0" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="img/banner_1.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Men's Collection</h3>
						<div><span class="btn_1">Shop Now</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="img/banner_2.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Womens's Collection</h3>
						<div><span class="btn_1">Shop Now</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="img/banner_3.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Kids's Collection</h3>
						<div><span class="btn_1">Shop Now</span></div>
					</div>
				</a>
			</li>
		</ul>
       <?php
         $query='
            SELECT * FROM `market`
         ';
          $stm=$connect->prepare($query);
          $stm->execute();
          $fetchall=$stm->fetchAll();
       ?>
		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Top Selling</h2>
				<span>Products</span>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
			</div>
			<div class="row small-gutters">
				<?php
                foreach ($fetchall as $row) 
                 {
                 
				?>
				<div class="col-6 col-md-4 col-xl-3">
					<div class="grid_item">
						<?php
						if ($row['new'] == "new") 
						{
						 echo '<span class="ribbon hot">New</span>';
						}
						?>
						<figure>
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

						<div class="rating">
						<?php

                         if ($row['star_m'] == 1) 
                             {
                        	  echo '
							<i class="icon-star voted">
							</i>';
                             }

                          if ($row['star_m'] == 2) 
                             {
                        	  echo '
							<i class="icon-star voted">
							</i>
							<i class="icon-star voted">
							</i>
							';
                             }  

                             if ($row['star_m'] == 3) 
                             {
                        	  echo '
							<i class="icon-star voted">
							</i>
							<i class="icon-star voted">
							</i>
							<i class="icon-star voted">
							</i>
							';
                             }  
                             if ($row['star_m'] == 4) 
                             {
                        	  echo '
							<i class="icon-star voted">
							</i>
							<i class="icon-star voted">
							</i>
							<i class="icon-star voted">
							</i>
							<i class="icon-star voted">
							</i>
							';
                             } 
                             if ($row['star_m'] == 5) 
                             {
                        	  echo '
							<i class="icon-star voted">
							</i>
							<i class="icon-star voted">
							</i>
							<i class="icon-star voted">
							</i>
							<i class="icon-star voted">
							</i>
							';
                             }     
						  ?>
						</div>
						<a href="product-detail-1.html">
							<h3><?php echo $row['title_m']; ?></h3>
						</a>
						<div class="price_box">
							<span class="new_price">$<?php echo $row['money_m']; ?></span>
						</div>
						<ul> 
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
								?>
							  <span >Add to favorites</span></a></li>
							
							<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
						</ul>
					</div>
				</div>
				<?php
                  }
				?>
			</div>
		</div>


		<div class="featured lazy" data-bg="url(img/featured_home.jpg)">
			<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				<div class="container margin_60">
					<div class="row justify-content-center justify-content-md-start">
						<div class="col-lg-6 wow" data-wow-offset="150">
							<h3>Most rated products<br>999</h3>
							<p>Rating 4 and above</p>
							<div class="feat_text_block">
							 <div class="price_box">
							  <i class="icon-star voted">
							  </i>
							  <i class="icon-star voted">
							  </i>
							  <i class="icon-star voted">
							  </i>
							  <i class="icon-star voted">
							  </i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php

         $query='
         SELECT * FROM market 
           ';
          $stm=$connect->prepare($query);
          $stm->execute();
          $fetchm=$stm->fetchAll();
		?>
		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Featured</h2>
				<span>Products</span>
				<p>Top rated products</p>
			</div>
			<div class="owl-carousel owl-theme products_carousel">
				<?php
                 foreach ($fetchm as $row) 
                 {
                 	if ($row['star_m'] >= 4) 
                 	{
                 		
				?>
				<div class="item">
					<div class="grid_item">
						<?php
						if ($row['new'] == "new") 
						{
						 echo '<span class="ribbon new">New</span>';
					    }
						?>
						<figure>
					  <form  method="post" action="Purchase.php">
					   <input id="add" type="hidden" name="markt_id"  value="<?php echo $row['market_id'] ?>">
						 <a>
						<input type="image"  class="img-fluid lazy" src="<?php  echo $row['imge_m'] ?>"  alt="">
					     </a>
	                   </form>
							
						</figure>
						<div class="rating">
							<?php  
                              if ($row['star_m'] == 4)
                              {
                               echo 
                                '<i class="icon-star voted"></i>
							     <i class="icon-star voted"></i>
							     <i class="icon-star voted"></i>
							     <i class="icon-star voted"></i>
							     <i class="icon-star"></i>
                                ';
                              }

                              if ($row['star_m'] == 5)
                              {
                               echo 
                                '<i class="icon-star voted"></i>
							     <i class="icon-star voted"></i>
							     <i class="icon-star voted"></i>
							     <i class="icon-star voted"></i>
							     <i class="icon-star voted"></i>
                                ';
                              }
							?>
							
						</div>
						<a href="product-detail-1.html">
							<h3><?php echo $row['title_m'];  ?></h3>
						</a>
						<div class="price_box">
							<span class="new_price">
								$<?php echo $row["money_m"] ?></span>
						</div>
						<ul>
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
								?></span></a></li>
							<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
							<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
						</ul>
					</div>
				</div>
				<?php
                   }

                   }
				?>
			</div>
		</div>

		<div class="bg_gray">
			<div class="container margin_30">
				<div id="brands" class="owl-carousel owl-theme">
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_1.png" alt="" class="owl-lazy"></a>
					</div>
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_2.png" alt="" class="owl-lazy"></a>
					</div><!-- /item -->
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_3.png" alt="" class="owl-lazy"></a>
					</div><!-- /item -->
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_4.png" alt="" class="owl-lazy"></a>
					</div><!-- /item -->
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_5.png" alt="" class="owl-lazy"></a>
					</div><!-- /item -->
					<div class="item">
						<a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_6.png" alt="" class="owl-lazy"></a>
					</div><!-- /item --> 
				</div><!-- /carousel -->
			</div><!-- /container -->
		</div>
	</main>

	</div>
	<div id="toTop"></div><!-- Back to top button -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/carousel-home.min.js"></script>
	<script type="text/javascript">
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