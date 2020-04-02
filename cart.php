
<html lang="en">
<?php include 'mysqli.php'; ?>
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
    <link href="css/cart.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	 <?php
	       $query='
            SELECT * FROM purchase
            inner join market ON 
            purchase.market_id=market.market_id
            left join user_infr ON 
            user_infr.user_id=purchase.user_id_p
            where user_id_r = "'.$_SESSION['user_id'].'";
                                 ';
            $stm=$connect->prepare($query);
            $stm->execute();
            $rowm=$stm->rowCount();
       ?>
	<div id="page">
		<?php include 'hedar.php';
		?>
		<?php
        if ($rowm > 0) 
         {
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
                                      The main price				
                                   </th>
									<th>
										
									</th>
								</tr>
							</thead>
							<tbody>
					 <?php
                        $query='
                           SELECT * FROM purchase
                           inner join market ON 
                           purchase.market_id=market.market_id
                           left join user_infr ON 
                           user_infr.user_id=purchase.user_id_p
                           where user_id_r = "'.$_SESSION['user_id'].'";
                                 ';
                         $stm=$connect->prepare($query);
                         $stm->execute();
                         $fetchall=$stm->fetchAll();

                         foreach ($fetchall as $row) 
                         {
                           ?>
					        <tr id="cart<?php echo$row['Purchase_id'];?>">
							   <td>
							 <div class="thumb_cart">
						
								<img src="<?php echo $row['imge_m'] ?>" data-src="<?php echo $row['imge_m'] ?>" class="lazy" alt="Image">
							</div>

						    <span class="item_cart">
						    <h6>He wants <strong style="color: red;"><?php echo $row['name_f'].$row['name_l'] ?></strong> to buy your product At a price -></h6>
							</span>
							</td>
							<td>
							   <strong>$<?php echo $row['money_m_p'] ?></strong>
							</td>
								<strong>$<?php echo$row['money_m'] ?></strong>
							</td>
							<td class="options">
							<a href="#">
								<i id="<?php echo $row['Purchase_id'] ?>"  class="ti-trash delete_c"></i>
							</a>
						   </td>
								</tr>
								<?php
                                  }
								?>
							</tbody>
						</table>
						<div class="row add_top_30 flex-sm-row-reverse cart_actions">
							<div class="col-sm-8">
						</div>
					</div>
					<!-- /cart_actions -->
	
		</div>
		<!-- /container -->
		
		<div class="box_cart">
			<div class="container">
			<div class="row justify-content-end">
				<div class="col-xl-4 col-lg-4 col-md-6">
			<ul>
				<li>
					<span>Subtotal</span> $240.00
				</li>
				<li>
					<span>Shipping</span> $7.00
				</li>
				<li>
					<span>Total</span> $247.00
				</li>
			</ul>
			<a href="cart-2.html" class="btn_1 full-width cart">Proceed to Checkout</a>
					</div>
				</div>
			</div>
		</div>		
	</main>
   <?php
     }else{
     	echo '  
     <img src="no_p.png" style="
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 30%;">
	<h2 style="text-align: center;margin-top:1%;color:red;">
		There are no purchases
	</h2>
	</div>';
     }
	?>
  
      
	<div id="toTop"></div><!-- Back to top button -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    	$(document).ready(function(){
            $(document).on('click',".delete_c",function(){
              
               var cart_id=$(this).attr('id');
               $("#cart"+cart_id).html('');
               var action ="delete_c";

               $.ajax({
                  url:"action1.php",
                  type:"post",
                  data:{action:action,cart_id:cart_id},
                  success:function(data)
                  {

                  }
               });
           });
    	});
     </script>
		
</body>
</html>