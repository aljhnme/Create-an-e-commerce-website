<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Products added to favorites</title>
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
    <?PHP 
     include 'navigation_bar.php';
     include 'functions.php';
     include 'mysqli.php';
     
     $query="SELECT * FROM saved_products inner join market ON 
             saved_products.Product_ID_s=market.Product_ID where user_id_s=:user_id";

     $stm=$connect->prepare($query);
     $stm->execute([':user_id' => $_SESSION['user_id']]);
     $fetch_pr=$stm->fetchAll();
    ?>
    <div id="page">
        <main>
            <div class="top_banner">
             <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
              <div class="container">
                <h1>Your Favorite Products</h1>
              </div>
             </div>
             <img src="img/bg_cat_shoes.jpg" class="img-fluid" alt="">
            </div>
            <!-- /top_banner -->
            <div id="stick_here"></div>
            <!-- /toolbox -->
            <div class="container margin_30">
                 <div class="row small-gutters">
                 <?php 
                 foreach ($fetch_pr as $row) 
                  {
                  	$Product_Picture=strtok($row['imge_m'],':');
                       ?>
                       <div class="col-6 col-md-4 col-xl-3">
                         <?php include 'CView_Product.php';?>
                       </div>
                    <?php
                   }
                 ?>
                </div>
            </div>
        </main>
    </div>
    <div id="toTop"></div>
    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    <!-- SPECIFIC SCRIPTS -->
    <script src="js/sticky_sidebar.min.js"></script>
    <script src="js/specific_listing.js"></script>
    <?PHP include 'jquery.php'; ?>
</body>

</html>