<?php include 'mysqli.php'; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title></title>
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
        <?php  
           include 'navigation_bar.php'; 
           include 'functions.php';
	     ?>
        <main>
            <div class="top_banner">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                    <div class="container">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Category</a></li>
                                <li>Page active</li>
                            </ul>
                        </div>
                        <h1>Cheap products</h1>
                    </div>
                </div>
                <img src="Project_Pictures/cheap_products.jpg" class="img-fluid" alt="">
            </div>
            <!-- /top_banner -->
            <div id="stick_here"></div>
            <!-- /toolbox -->
            <?php
            $query='SELECT * FROM market where money_m <= 100';
               $stmmo=$connect->prepare($query);
               $stmmo->execute();
               $fetchm=$stmmo->fetchall();
            ?>
             <div class="container margin_30">
                <div class="row small-gutters">
                 <?php
                  foreach ($fetchm as $row) 
                  {
                   $Product_Picture=strtok($row['imge_m'],':');
                  ?>
                    <div class="col-6 col-md-4 col-xl-3">
                        <?php include 'CView_Product.php'; ?>
                    </div>
                    <?php
                  }
                  if ($stmmo->rowcount() == 0) 
                    {
                	 echo '<div class="container"><div class="row" id="appSummary"><div class="col text-center"><h1><img src="Project_Pictures/no_p.png" style="width:35%;"/></h1><p class="lead">There are no files saved</p></div></div></div>';
                    }
				?>
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