
<?php
include 'mysqli.php';
session_start();
if ($_SESSION['user_id'] == "") 
{
   header('Location:account.PHP');
}
?>
<header class="version_1">
	<div class="main_nav Sticky">
		<div class="container">
			<div class="row small-gutters">
				<div class="col-xl-3 col-lg-3 col-md-3">
					<nav class="categories">
						<ul class="clearfix">
							<li><span>
								<a href="#">
									<span class="hamburger hamburger--spin">
									<span class="hamburger-box">
									<span class="hamburger-inner"></span>
									</span>
									</span>
									Categories
								   </a>
									</span>
									<div id="menu">
									<ul>
									 <li><span><a href="#0">Collections</a></span>
									 <ul>
                                     <li><a href="save_p.php">Saved products</a></li>
								     <li><a href="expensive.php">
								     	The most expensive products
								     </a></li>
									
									
								 </ul>
									 </li>
									 <li><span><a href="#">Men</a></span>
												<ul>
													
									                <li><a href="Cheap.php">Cheaper products</a></li>
													<li><a href="logout.php">Logout</a></li>
												</ul>
											</li>
			
											<li><span><a href="#">Boys</a></span>
												<ul>
													<li><a href="index.php">Homepage</a></li>
													<li><a href="mymarket.php">Your products</a></li>
													<li><a href=""></a></li>
												</ul>
										    </ul>
									   </div>
								   </li>
							   </ul>
						  </nav>
					</div>
					<div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
						<div class="custom-search-input">
							<input type="text" placeholder="Search over 10.000 products">
							<button type="submit"><i class="header-icon_search_custom"></i></button>
						</div>
					</div>
					<div class="col-xl-3 col-lg-2 col-md-3">
						<ul class="top_tools">
							<li>

	   <div class="dropdown dropdown-cart">
		<a href="cart.html" class="cart_bt">
	    <strong><?php echo count_into($connect,$_SESSION['user_id'])  ?></strong></a>
		<div class="dropdown-menu">
   <?php
      $query='
         SELECT * FROM purchase
         inner join market ON 
         purchase.market_id=market.market_id
         where user_id_r = "'.$_SESSION['user_id'].'";
      ';
      $stm=$connect->prepare($query);
      $stm->execute();
      $fetch_user=$stm->fetchAll();
      $rowm=$stm->rowCount();
      foreach ($fetch_user as $row) 
      {
   ?>
			<ul>
				<li>
					<a href="#0">
						 <figure><img src="<?php echo $row['imge_m']  ?>" data-src="<?php echo $row['imge_m']  ?>" alt="" width="50" height="50" class="lazy"></figure>
						 <strong>
						 	<span>Obtained a disservice</span>
						 	$<?php echo $row['money_m']; ?>
						</strong>
					</a>
					<a href="#0" class="action"><i class="ti-trash"></i></a>
				 </li>
			   </ul>
			    <?php
                  }
	            ?>
			  <div class="total_drop">
			   <?php
                if($rowm  == 0) 
                 {
	            ?>
				<div class="clearfix">
					<strong><h6 style="color:red;">There are no sales</h6></strong>
					<span>$</span>
				</div>
				 <?php
                   }
			      ?>
			      <?php

                   function count_into($connect,$user)
                   {
                        $query='
                         SELECT * FROM purchase
                         where user_id_r = "'.$user.'"
                           ';
                         $stm=$connect->prepare($query);
                         $stm->execute();
                         $rowito_p=$stm->rowCount();
                         return $rowito_p;
                   }

			      ?>
			    <form action="php.php" method="post">
				<a href="cart.php" class="btn_1 outline">View Cart</a>
                </form>
			 </div>
		  </div>
		 </div>

								<!-- /dropdown-cart-->
							</li>
							<li>
								<a href="#0" class="wishlist"><span>Wishlist</span></a>
							</li>
							<li>
								<div class="dropdown dropdown-access">
									<a href="account.html" class="access_link"><span>Account</span></a>
									<div class="dropdown-menu">
										<a href="account.php" class="btn_1">Sign In or Sign Up</a>
										<ul>
											<li>
											<a href="Logout.php"><i class="ti-truck"></i>log out</a>
											</li>
											<li>
												<a href="leave-review.php"><i class="ti-package"></i>Publish a product</a>
											</li>
											<li>
												<a href="#0"><i class="ti-user"></i>My Profile</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
							</li>
							<li>
								<a href="#menu" class="btn_cat_mob">
									<div class="hamburger hamburger--spin" id="hamburger">
										<div class="hamburger-box">
											<div class="hamburger-inner"></div>
										</div>
									</div>
									Categories
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<div class="search_mob_wp">
				<input type="text" class="form-control" placeholder="Search over 10.000 products">
				<input type="submit" class="btn_1 full-width" value="Search">
			</div>
			<!-- /search_mobile -->
		</div>
		<!-- /main_nav -->
	</header>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script>
		$(document).ready(function(){
           $(document).on('click',".cart_bt",function(){
               var action ="delete_into";
               $.ajax({
                  url:"action1.php",
                  type:"post",
                  data:{action:action},
                  success:function(data)
                  {
                    $(".cart_bt").html('');
                  }
               });
           });
		});
	</script>