<div class="grid_item">
    <?php echo ribbon_new_DUP($row['date_u_p']) ?>
    <figure>
        <a href="product_detail.php?Product_ID=<?php echo$row['Product_ID'];?>">
            <img class="img-fluid lazy" src="upload/<?php echo $Product_Picture ?>">
        </a>
    </figure>
    <div class="rating">
    <?php echo fetchRating($row['star_m']);?>
    </div>
    <a href="product_detail.php?Product_ID=<?php echo$row['Product_ID'];?>">
        <h3>
            <?php echo $row['title_m'];?>
        </h3>
    </a>
    <div class="price_box">
        <span class="new_price">$<?php echo $row['money_m'];?></span>
         <!--<span class="old_price">$155.00</span>-->
    </div>
    <ul>
       <li class="yes_ADDF<?php echo$row['Product_ID']?>">
         <?php echo ch_ofADDF($connect,$row['Product_ID'],'<a id="'.$row['Product_ID'].'" class="add_to_favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>','FINPC');?>
       </li>
       <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
       <li id="addedC<?php echo $row['Product_ID'];?>">
          <?php echo chADD_Cart($connect,$row['Product_ID'],'<a data-m_click="Fixed" class="btn_add_to_cart" id="'.$row["Product_ID"].'"><i class="ti-shopping-cart"></i></a>','ADDPC');?>
       </li>
    </ul>
     <input type="hidden" class="user_id_FP<?php echo $row["Product_ID"];?>"   value="<?php echo $row['user_id'];?>">
     <input type="hidden" class="quantity_1<?php echo $row["Product_ID"];?>"   value="<?php echo $row['money_m'];?>">
</div>
