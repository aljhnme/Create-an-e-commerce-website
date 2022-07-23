<!DOCTYPE html>
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
    <?php
     include 'navigation_bar.php'; 
    ?>
    <div id="page" class="theia-exception">
        <main>
            <div class="container margin_30">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="top_banner">
                            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                                <div class="container pl-lg-5">
                                    <div class="breadcrumbs">
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Category</a></li>
                                            <li>Page active</li>
                                        </ul>
                                    </div>
                                    <h1>Custom Search or Search Filter</h1>
                                </div>
                            </div>
                            <img src="Project_Pictures\SH_CImg.jpg" class="img-fluid" alt="">
                        </div>
                        <!-- /top_banner -->
                        <div id="stick_here"></div>
                        <div class="toolbox elemento_stick add_bottom_30">
                            <div class="container">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#0" class="open_filters">
                                            <i class="ti-filter"></i><span>Filters</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /toolbox -->
                        <div class="row small-gutters" id="C_S">
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /col -->
                    <aside class="col-lg-3" id="sidebar_fixed">
                        <div class="filter_col">
                            <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
                            <div class="filter_type version_2">
                                <h4><a href="#filter_1" data-toggle="collapse" class="opened">Product rating</a></h4>
                                <div class="collapse show" id="filter_1">
                                    <ul>
                                        <li>
                                            <label class="container_check">5<small>12</small>
                                                <input type="checkbox" name="ratingP" value="5">
                                                <span class="checkmark"></span>
                                                <div class="rating">
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">4<small>24</small>
                                                <input type="checkbox" name="ratingP" value="4">
                                                <span class="checkmark"></span>
                                                <div class="rating">
                                                    <i class="icon-star "></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">3<small>23</small>
                                                <input type="checkbox" name="ratingP" value="3">
                                                <span class="checkmark"></span>
                                                <div class="rating">
                                                    <i class="icon-star "></i>
                                                    <i class="icon-star "></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">2 <small>11</small>
                                                <input type="checkbox" name="ratingP" value="2">
                                                <span class="checkmark"></span>
                                                <div class="rating">
                                                    <i class="icon-star "></i>
                                                    <i class="icon-star "></i>
                                                    <i class="icon-star "></i>
                                                    <i class="icon-star voted"></i>
                                                    <i class="icon-star voted"></i>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">1<small>11</small>
                                                <input type="checkbox" name="ratingP" value="1">
                                                <span class="checkmark"></span>
                                                <div class="rating">
                                                    <i class="icon-star "></i>
                                                    <i class="icon-star "></i>
                                                    <i class="icon-star "></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star voted"></i>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /filter_type -->
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_2" data-toggle="collapse" class="opened">Enter a custom search word</a></h4>
                                <div class="collapse show" id="filter_2">
                                    <ul>
                                        <input type="text" placeholder="enter anything" id="other">
                                    </ul>
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_3" data-toggle="collapse" class="closed">Product Type</a></h4>
                                <div class="collapse" id="filter_3">
                                    <ul>
                                        <li>
                                            <label class="container_check">laptop<small>11</small>
                                                <input type="checkbox" name="type_P" value="laptop">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Phones<small>08</small>
                                                <input type="checkbox" name="type_P" value="Phones">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">technology<small>05</small>
                                                <input type="checkbox" name="type_P" value="technology">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Clothes<small>18</small>
                                                <input type="checkbox" name="type_P" value="Clothes">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">shoes<small>18</small>
                                                <input type="checkbox" name="type_P" value="shoes">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Accessories<small>18</small>
                                                <input type="checkbox" name="type_P" value="Accessories">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">Other than tha<small>18</small>
                                                <input type="checkbox" name="type_P" value="Other than tha">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="filter_type version_2">
                                <h4><a href="#filter_4" data-toggle="collapse" class="closed">Price</a></h4>
                                <div class="collapse" id="filter_4">
                                    <ul>
                                        <li>
                                            <label class="container_check">$0 — $3<small>11</small>
                                                <input type="checkbox" name="price_P" value="0-3">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">$3 — $6<small>08</small>
                                                <input type="checkbox" name="price_P" value="3-6">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">$100 — $150<small>05</small>
                                                <input type="checkbox" name="price_P" value="100-150">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">$150 — $200<small>18</small>
                                                <input type="checkbox" name="price_P" value="150-200">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_check">> $6<small>18</small>
                                                <input type="checkbox" name="price_P" value=">6">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /filter_type -->
                            <div class="buttons">
                                <div class="spinner-border text-muted" style="display:none;"></div>
                                <a href="#0" class="btn_1 Filter">Filter</a>
                            </div>
                        </div>
                    </aside>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
        <!-- /main -->
        <!--/footer-->
    </div>
    <!-- page -->
    <div id="toTop"></div><!-- Back to top button -->
    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    <!-- SPECIFIC SCRIPTS -->
    <script src="js/sticky_sidebar.min.js"></script>
    <script src="js/specific_listing.js"></script>
</body>
<?php include 'jquery.php'; ?>
</html>