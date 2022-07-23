<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>List of products you put in the shopping cart</title>
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
    <link href="css/cart.css" rel="stylesheet">
    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
    <?php 
      include 'mysqli.php';
      include 'navigation_bar.php'; 

      $query='SELECT * FROM purchase inner join market ON purchase.Product_ID=market.Product_ID
              left join user_infr ON user_infr.user_id=purchase.user_id_p
              where user_id_p = :user_id';

            $stm=$connect->prepare($query);
            $stm->execute([':user_id' => $_SESSION['user_id']]);
            $rowm=$stm->rowCount();
            $fetchallCart=$stm->fetchAll();
    ?>
    <div id="page">
        <?php
        if ($rowm > 0) 
        {
       ?>
        <main class="bg_gray toHIdeTHIS">
            <div class="container margin_30">
                <div class="page_header">
                    <h1>Cart page</h1>
                </div>
                <!-- /page_header -->
                <table class="table table-striped cart-list">
                    <thead>
                        <tr>
                            <th>
                                Product
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Quantity
                            </th>
                            <th>
                                Subtotal
                            </th>
                            <th>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="toCountCHild">
                        <?php 
                      foreach ($fetchallCart as $row) 
                        {
                      ?>
                        <tr class="<?php echo $row['Purchase_id'];?>">
                            <td>
                                <div class="thumb_cart">
                                    <?php
                                      $Product_Picture=strtok($row['imge_m'],':');
                                    ?>
                                    <img src="upload/<?php echo$Product_Picture;?>" class="lazy" alt="Image">
                                </div>
                                <span class="item_cart">
                                    <?php echo $row['title_m'];?></span>
                            </td>
                            <td>
                                <strong>$<?php echo $row['money_m']?></strong>
                            </td>
                            <td>
                                <div class="numbers-row">
                                    <input type="text" value="1" id="<?php echo$row['Product_ID'];?>" class="qty2" name="change_price">
                                    <div class="inc button_inc">+</div>
                                    <div class="dec button_inc">-</div>
                                </div>
                            </td>
                            <td>
                                <strong>$<?php echo $row['money_m_p'];?></strong>
                            </td>
                            <td class="options">
                                <a onclick="remove_p_of_cart(<?php echo $row['Purchase_id'];?>)" href="#"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        <?php 
                         }
                        ?>
                    </tbody>
                </table>
                <div class="row add_top_30 flex-sm-row-reverse cart_actions">
                    <div class="col-sm-4 text-right">
                        <button type="button" id="updata_chP" class="btn_1 gray">Update Cart</button>
                    </div>
                </div>
                <!-- /cart_actions -->
            </div>
        </main>
        <?php
         }else{
        ?>
        <br>
        <img src="Project_Pictures/no_p.png" style="display:block;margin-left:auto;margin-right:auto;width:30%;">
        <h2 style="text-align: center;margin-top:1%;color:red;">
            There is nothing in the cart
        </h2>
        <?php
          }
        ?>
    </div>
    </div>
    <div id="toTop"></div>
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    <?php include 'jquery.php'; ?>
</body>

</html>