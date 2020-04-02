
<?php  include 'mysqli.php'; ?>
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
    <link href="css/listing.css" rel="stylesheet">

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

	<main>
		<div class="container margin_30">
		    <div class="top_banner version_2">
		        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0)">
		            <div class="container">
		                <div class="d-flex justify-content-center">
		                    <h1>Saved products</h1>
		                </div>
		            </div>
		        </div>
		        <img src="img/bg_cat_shoes.jpg" class="img-fluid" alt="">
		    </div>
		    <!-- /top_banner -->
		    <div id="stick_here"></div>
		    <div class="toolbox elemento_stick version_2">
		        <div class="container">
		            <ul class="clearfix">
		                <li>
		                    <div class="sort_select">
		                        <select name="sort" id="sort">
		                            <option value="popularity" selected="selected">Sort by popularity</option>
		                            <option value="rating">Sort by average rating</option>
		                            <option value="date">Sort by newness</option>
		                            <option value="price">Sort by price: low to high</option>
		                            <option value="price-desc">Sort by price: high to
		                        </select>
		                    </div>
		                </li>
		                
		                <li>
		                    <a data-toggle="collapse" href="#filters" role="button" aria-expanded="false" aria-controls="filters">
		                        <i class="ti-filter"></i><span>Filters</span>
		                    </a>
		                </li>
		            </ul>
		            <div class="collapse" id="filters">
		                <div class="row small-gutters filters_listing_1">
		                    <div class="col-lg-3 col-md-6 col-sm-6">
		                        <div class="dropdown">
		                            <a href="#" data-toggle="dropdown" class="drop">Categories</a>
		                            <div class="dropdown-menu">
		                                <div class="filter_type">
		                                    <ul>
		                                        <li>
		                                            <label class="container_check">Men <small>12</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">Women <small>24</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">Running <small>23</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">Training <small>11</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                    </ul>
		                                    <a href="#0" class="apply_filter">Apply</a>
		                                </div>
		                            </div>
		                        </div>
		                        <!-- /dropdown -->
		                    </div>
		                    <div class="col-lg-3 col-md-6 col-sm-6">
		                        <div class="dropdown">
		                            <a href="#" data-toggle="dropdown" class="drop">Color</a>
		                            <div class="dropdown-menu">
		                                <div class="filter_type">
		                                    <ul>
		                                        <li>
		                                            <label class="container_check">Blue <small>06</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">Red <small>12</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">Orange <small>17</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">Black <small>43</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                    </ul>
		                                    <a href="#0" class="apply_filter">Apply</a>
		                                </div>
		                            </div>
		                        </div>
		                        <!-- /dropdown -->
		                    </div>
		                    <div class="col-lg-3 col-md-6 col-sm-6">
		                        <div class="dropdown">
		                            <a href="#" data-toggle="dropdown" class="drop">Brand</a>
		                            <div class="dropdown-menu">
		                                <div class="filter_type">
		                                    <ul>
		                                        <li>
		                                            <label class="container_check">Adidas <small>11</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">Nike <small>08</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">Vans <small>05</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">Puma <small>18</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                    </ul>
		                                    <a href="#0" class="apply_filter">Apply</a>
		                                </div>
		                            </div>
		                        </div>
		                        <!-- /dropdown -->
		                    </div>
		                    <div class="col-lg-3 col-md-6 col-sm-6">
		                        <div class="dropdown">
		                            <a href="#" data-toggle="dropdown" class="drop">Price</a>
		                            <div class="dropdown-menu">
		                                <div class="filter_type">
		                                    <ul>
		                                        <li>
		                                            <label class="container_check">$0 — $50<small>11</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">$50 — $100<small>08</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">$100 — $150<small>05</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                        <li>
		                                            <label class="container_check">$150 — $200<small>18</small>
		                                                <input type="checkbox">
		                                                <span class="checkmark"></span>
		                                            </label>
		                                        </li>
		                                    </ul>
		                                    <a href="#0" class="apply_filter">Apply</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <?php
              $query="
                SELECT * FROM saved_products
                inner join market ON 
                saved_products.markt_id_s=market.market_id
                where user_id_s='".$_SESSION['user_id']."'
              ";
              $stm=$connect->prepare($query);
              $stm->execute();
              $fetchall=$stm->fetchAll();
             
		    ?>

			<div class="row small-gutters">
				<?php
                 foreach ($fetchall as $row) 
                 {
				?>
				<div class="col-6 col-md-4 col-xl-3">
					<div class="grid_item">
						<figure>
						 <form  method="post" action="Purchase.php">
					         <input id="add" type="hidden" name="markt_id"  value="<?php echo $row['market_id'] ?>">
						  <a>
					    	<input type="image"  class="img-fluid lazy" src="<?php  echo $row['imge_m'] ?>"  alt="">
                         </a>
	                   </form>
						</figure>
						<a href="product-detail-1.html">
							<h3><?php echo $row['title_m']; ?></h3>
						</a>
						<div class="price_box">
							<span class="new_price">$<?php 
							echo$row['money_m']; ?></span>
						</div>
					</div>
				</div>
				<?php
				
                  }
                if ($stm->rowcount() == 0) 
                {
                	echo '<div class="container"><div class="row" id="appSummary"><div class="col text-center"><h1><img src="no_p.png" style="width:35%;"/></h1><p class="lead">There are no files saved</p></div></div></div>';
                }
				?>

				<!-- /col -->				
			</div>
		</div>
	</main>
	</div>	
	<div id="toTop"></div>
	<script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/sticky_sidebar.min.js"></script>
	<script src="js/specific_listing.js"></script>
		
</body>
</html>