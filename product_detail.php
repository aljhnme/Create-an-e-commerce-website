<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
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
    <?php 
     include 'mysqli.php';
     include 'functions.php';

     $query='SELECT * FROM market where Product_ID = "'.$_GET['Product_ID'].'"';

     $stm=$connect->prepare($query);
     $stm->execute();
     $row=$stm->fetch(PDO::FETCH_ASSOC);
     $rowV_P=$stm->rowCount();
     if ($rowV_P == 0) 
      {
       header('location:index.php');
      }

     $arr_IMGp=explode(":",$row['imge_m']);
     $prod_images='';

     for ($i=0; $i < count($arr_IMGp); $i++) 
         { 
           $prod_images.='<div style="background-image: url(upload/'.$arr_IMGp[$i].');" class="item-box"></div>';
         }
       ?>
    <input type="hidden" class="user_id_FP<?php echo$row['Product_ID'];?>" value="<?php echo $row['user_id'];?>">
    <?php include 'navigation_bar.php'; ?>
    <div id="page">
        <main>
            <div class="container margin_30">
                <div class="row">
                    <div class="col-md-6">
                        <div class="all">
                            <div class="slider">
                                <div class="owl-carousel owl-theme main">
                                    <?php  echo $prod_images; ?>
                                </div>
                                <div class="left nonl"><i class="ti-angle-left"></i></div>
                                <div class="right"><i class="ti-angle-right"></i></div>
                            </div>
                            <div class="slider-two">
                                <div class="owl-carousel owl-theme thumbs">
                                    <?php  echo $prod_images; ?>
                                </div>
                                <div class="left-t nonl-t"></div>
                                <div class="right-t"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- /page_header -->
                        <div class="prod_info">
                            <h1 class="title_m">
                                <?php echo $row['title_m'];?>
                            </h1>
                            <span class="rating">
                                <?php echo fetchRating($row['star_m'])?>
                                <em>
                                 <?php echo $row['star_m'];?> reviews</em></span>
                             <p>
                                <?php echo $row['text_m'];?>
                             </p>
                            <div class="prod_options">
                                <div class="row">
                                    <label class="col-xl-5 col-lg-5  col-md-6 col-6 pt-0"><strong>Color</strong></label>
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-6 colors">
                                        <ul>
                                            <li><a href="#0" class="color color_1 active"></a></li>
                                            <li><a href="#0" class="color color_2"></a></li>
                                            <li><a href="#0" class="color color_3"></a></li>
                                            <li><a href="#0" class="color color_4"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>Size</strong> - Size Guide <a href="#0" data-toggle="modal" data-target="#size-modal"><i class="ti-help-alt"></i></a></label>
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                        <div class="custom-select-form">
                                            <select class="wide">
                                                <option value="" selected>Small (S)</option>
                                                <option value="">M</option>
                                                <option value=" ">L</option>
                                                <option value=" ">XL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
                                    <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                        <div class="numbers-row">
                                         <input type="text" value="1" id="quantity_1" class="qty2 quantity_1<?php echo $row['Product_ID'];?>" name="quantity_1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="price_main">
                                        <span class="new_price P_P">$
                                         <?php echo $row['money_m']?></span>
                                        <span class="percentage">
                                         <?php echo$row['k']?>%</span>
                                        <!--<span class="old_price">$160.00</span>-->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div id="<?php echo $row['Product_ID'];?>" class="btn_add_to_cart">
                                        <a href="#0" class="btn_1 btn_addC">
                                         <?php echo chADD_Cart($connect,$row['Product_ID'],'Add to Cart','');?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /prod_info -->
                        <div class="product_actions">
                            <ul>
                                <li>
                                    <a href="#" id="<?php echo $row['Product_ID'];?>"  class="add_to_favorites"><a class="tooltip-1" data-toggle="tooltip" data-placement="left" title="added to favourites"><?php echo ch_ofADDF($connect,$row['Product_ID'],'add to favourites','');?></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-control-shuffle"></i><span>Add to Compare</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /product_actions -->
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
            <div class="container margin_60_35">
                <div class="main_title">
                    <h2>Related</h2>
                    <span>Products</span>
                </div>
                <div class="owl-carousel owl-theme products_carousel">
                    <?php View_the_relevant_data($connect,$row['title_m']);?>
                </div>
           </div>
        </main>
    </div>
    <!-- page -->
    <div id="toTop"></div><!-- Back to top button -->
    <div class="top_panel">
        <div class="container header_panel">
            <a href="#0" class="btn_close_top_panel"><i class="ti-close"></i></a>
            <label>product added to cart</label>
        </div>
        <!-- /header_panel -->
        <div class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="item_panel">
                            <figure>
                                <img class="lazy img_pc" alt="">
                            </figure>
                            <h4 class="title_p"></h4>
                            <div class="price_panel">
                                <span class="new_price price_pc"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 btn_panel">
                        <a href="cart.php" class="btn_1 outline">View cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/carousel_with_thumbs.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
     $(".thumbs").children().addClass("item");
    </script>
    <?php include 'jquery.php';?>
 </body>
</html>