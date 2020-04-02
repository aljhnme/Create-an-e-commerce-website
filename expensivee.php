
<?php
include 'mysqli.php';
?> 
<!DOCTYPE html>
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
	
	<div id="page" class="theia-exception">
     
     <?php
      include 'hedar.php';
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
	                <h1>Expensive products</h1>
	            </div>
	        </div>
	        <img src="img/bg_cat_shoes.jpg" class="img-fluid" alt="">
	    </div>
	    <!-- /top_banner -->
	    <div id="stick_here"></div>
	    <div class="toolbox elemento_stick">
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
	                    <a href="#0"><i class="ti-view-grid"></i></a>
	                    <a href="listing-row-1-sidebar-left.html"><i class="ti-view-list"></i></a>
	                </li>
	                <li>
	                    <a href="#0" class="open_filters">
	                        <i class="ti-filter"></i><span>Filters</span>
	                    </a>
	                </li>
	            </ul>
	        </div>
	    </div>
	    <!-- /toolbox -->
	    <div class="container margin_30">
	        <div class="row">
	            <aside class="col-lg-3" id="sidebar_fixed">
	            <form>
	                <div class="filter_col">
	                    <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
	                    <div class="filter_type version_2">
	                        <h4><a href="#filter_1" data-toggle="collapse" class="opened">Categories</a></h4>
	                        <div class="collapse show" id="filter_1">
	                            <ul>
	                                <li>
	                                    <label class="container_check">laptop <small>12</small>
	                                        <input 
	                                        onclick="onlyOne(this)" value="laptop" name="val" type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Phones <small>24</small>
	                                        <input 
	                                        onclick="onlyOne(this)" value="Phones" type="checkbox"
	                                        name="val">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Running <small>23</small>
	                                        <input onclick="onlyOne(this)" value="technology" name="val" type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Clothes <small>11</small>
	                                        <input onclick="onlyOne(this)" value="Clothes" name="val" type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                 <li>
	                                  <label class="container_check">shoes 
	                                  	<small>11</small>
	                                        <input onclick="onlyOne(this)" value="shoes" name="val" type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                 <li>
	                                  <label class="container_check">Accessories 
	                                  	<small>11</small>
	                                        <input onclick="onlyOne(this)" value="Accessories" name="val" type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="filter_type version_2">
	                        <h4><a href="#filter_4" data-toggle="collapse" class="closed">Price</a></h4>
	                        <div class="collapse" id="filter_4">
	                            <ul>
	                                <li>
	                                    <label class="container_check">$1 — $50<small>11</small>
	                                        <input onclick="onlyOnee(this)" type="checkbox"name="price" value="50">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">$1 — $100<small>08</small>
	                                        <input onclick="onlyOnee(this)" type="checkbox"name="price"
	                                        value="100">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">$1 — $200<small>05</small>
	                                        <input onclick="onlyOnee(this)" type="checkbox"name="price" value="200">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">$1 — $300<small>18</small>
	                                        <input onclick="onlyOnee(this)" type="checkbox" name="price" 
	                                        value="300">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                 <li>
	                                    <label class="container_check">$++ $300<small>18</small>
	                                        <input onclick="onlyOnee(this)" type="checkbox" name="price" 
	                                        value="301">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="buttons">
	                        <a href="#0" id="filter" class="btn_1">Filter</a> <a href="#0" class="btn_1 gray">Reset</a>
	                    </div>
	                </div>
	            </form>
	            </aside>
	            <?php
                  $query='
                   SELECT * FROM market
                  ';
                  $stm=$connect->prepare($query);
                  $stm->execute();
                  $fetchm=$stm->fetchAll();
	            ?>
	         <div id="add_n" class="col-lg-9">
	            	<?php
	            	foreach ($fetchm as $row)
	            	{
	            	?>
	         <div  class="row row_item">
	           <div id="str" class="col-sm-4">
	                     <figure>
	                    <span class="ribbon off">
	                     <?php echo $row['k']; ?></span>
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
	                    </div>
	                    <div class="col-sm-8">
	                        <div class="rating">
	                        	<?php 
                                if ($row['star_m'] == 1) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].' reviews</em>';
                                }

                                if ($row['star_m'] == 2) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].'reviews</em>';
                                }

                                if ($row['star_m'] == 3) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].'reviews</em>';
                                }

                                if ($row['star_m'] == 4) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star"></i><em>'.$row['star_m'].' reviews</em>';
                                }
                                if ($row['star_m'] == 5) 
                                {
                                	echo '
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	<i class="icon-star voted"></i>
	                        	</i><em>'.$row['star_m'].' reviews</em>';
                                }
	              
	                        	?>
	                        </div>
	                        <a href="product-detail-1.html">
	                            <h3><?php echo $row['title_m']; ?></h3>
	                        </a>
	                        <p><?php echo $row['text_m']  ?></p>
	                        <div class="price_box">
	                            <span class="new_price">$
	                             <?php echo $row['money_m']; ?></span>
	                        </div>
	                        <ul>
	                            
                       <form  method="post" action="Purchase.php">
					   <input id="add" type="hidden" name="markt_id"  value="<?php echo $row['market_id'] ?>">
					   <?php 
                          if ($row['imge_m'] != "") 
                          {
					     ?>
                         <input type="submit" class="btn-primary" value="Add to Cart" >
					     <?php
                           }
					     ?>
	                   </form>

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
								?><span>Add to favorites</span></a></li>

	                       <li><a href="#0" class="btn_1 gray tooltip-1" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
	                        </ul>
	                    </div>
	                </div>
	                <?php
	                 }
	                ?>
	            </div>
	             
	        </div>
	         
	    </div>
	    
	</main>
	</div>	
	<div id="toTop"></div>
	<script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/sticky_sidebar.min.js"></script>
	<script src="js/specific_listing.js"></script>
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
    
    $(document).ready(function(){
    $(document).on('click','#filter',function(){   
           
          var data=[];
          var price=[];
          $("input[name='val']:checked").each(function(){
            data.push(this.value);
          });
           $("input[name='price']:checked").each(function(){
            price.push(this.value);
          });
           if (price == "") 
           {
             var price="no_price";
           }
          var html_null='<div class="container"><div class="row" id="appSummary"><div class="col text-center"><h1><img src="no_se.png" style="width:35%;"/></h1><p class="lead">Please select one option</p></div></div></div>';

          if (data == "") 
          {
                $("#add_n").html(html_null);
          }else{
          var html='<div class="container"><div class="row" id="appSummary"><div class="col text-center"><h1><img src="no_p.png" /></h1><p class="lead">There are no products. Try searching for something else</p></div></div></div>';
          $.ajax({
             url:"fetch_m_new.php",
             data:{data:data,price:price},
             type:'post',
             success:function(data)
             {
             	$("#add_n").empty();
                $("#add_n").html(data);
                if (data == "") 
                {
                   $("#add_n").html(html);
                }


             }
          }); 
          }
       });  
    });
    function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('val')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
       })
       }    

     function onlyOnee(checkbox) {
    var checkboxes = document.getElementsByName('price')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
       })
       }       

     
</script>	

</body>
</html>