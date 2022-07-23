<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Products</title>
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
    <?php  
   include 'mysqli.php';
   include 'functions.php';
   include 'navigation_bar.php'; 
   ?>
    <div id="page">
        <main>
            <div class="header-video">
                <div id="hero_video">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-6">
                                    <div class="slide-text white">
                                        <h3>Shop or sell products while you are at home</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
            </div>
            <!-- /header-video -->
            <div class="feat">
                <div class="container">
                    <ul>
                        <li>
                            <div class="box">
                                <i class="ti-gift"></i>
                                <div class="justify-content-center">
                                    <h3>Free Shipping</h3>
                                    <p>For all oders over $99</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <i class="ti-wallet"></i>
                                <div class="justify-content-center">
                                    <h3>Secure Payment</h3>
                                    <p>100% secure payment</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <i class="ti-headphone-alt"></i>
                                <div class="justify-content-center">
                                    <h3>24/7 Support</h3>
                                    <p>Online top support</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /container -->
            <?php
              $query='SELECT * FROM market';

              $stm=$connect->prepare($query);
              $stm->execute();
              $fetchm=$stm->fetchAll();
             ?>
            <!-- /bg_gray -->
            <hr class="mb-0">
            <div class="container margin_60_35">
                <div class="main_title mb-4">
                    <h2>New Arrival</h2>
                    <span>Products</span>
                    <p>Preview the products you like and enjoy</p>
                </div>
                <div class="isotope_filter">
                    <ul>
                        <li><a href="#0" id="all" data-filter="*">All</a></li>
                        <li><a href="#0" id="popular" data-filter=".popular">Popular</a></li>
                        <li><a href="#0" id="sale" data-filter=".sale">Sale</a></li>
                    </ul>
                </div>
                <div class="isotope-wrapper">
                    <div class="row small-gutters">
                        <?php 
                         foreach ($fetchm as $row) {  
                         $Product_Picture=strtok($row['imge_m'],':');
                        ?>
                        <div class="col-6 col-md-4 col-xl-3 isotope-item sale">
                            <?php include 'CView_Product.php'; ?>
                            <!-- /grid_item -->
                        </div>
                        <?php 
                            }
                          ?>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /isotope-wrapper -->
            </div>
            <!-- /container -->
            <div class="featured lazy" data-bg="url(img/featured__home.jpg)">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container margin_60">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-6 wow" data-wow-offset="150">
                                <h3>
                                    <div class="rating">
                                        <i class="icon-star voted"></i>
                                        <i class="icon-star voted"></i>
                                        <i class="icon-star voted"></i>
                                        <i class="icon-star voted"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                </h3>
                                <p>Marketing top rated products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /featured -->
            <div class="bg_gray">
                <div class="container margin_30">
                    <div id="brands" class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="#0"><img src="img/brands/placeholder_brands.png" data-src="img/brands/logo_1.png" alt="" class="owl-lazy"></a>
                        </div><!-- /item -->
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
            <!-- /container -->
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
                   $Product_Picture=strtok($row['imge_m'],':');

                  if ($row['star_m'] >= 4) 
                    {
                    ?>
                    <div class="item">
                      <?php include 'CView_Product.php'; ?>
                    </div>
                    <?php
                    }
                  }
                 ?>
                </div>
            </div>
        </main>
    </div>
    <!-- page -->
    <div id="toTop"></div><!-- Back to top button -->
    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
    <!-- SPECIFIC SCRIPTS -->
    <script src="js/modernizr.js"></script>
    <script src="js/video_header.min.js"></script>
    <?php include 'jquery.php'; ?>
    <script>
    // Video Header
    HeaderVideo.init({
        container: $('.header-video'),
        header: $('.header-video--media'),
        videoTrigger: $("#video-trigger"),
        autoPlayVideo: true
    });
    </script>
    <script src="js/isotope.min.js"></script>
    <script>
    // Isotope filter
    $(window).on('load', function() {
        var $container = $('.isotope-wrapper');
        $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
    });

    $('.isotope_filter').on('click', 'a', 'change', function() {
        var selector = $(this).attr('data-filter');
        $('.isotope-wrapper').isotope({ filter: selector });
    });

    HeaderVideo.init({
        container: $('.header-video'),
        header: $('.header-video--media'),
        videoTrigger: $("#video-trigger"),
        autoPlayVideo: true
    });
    </script>
</body>

</html>