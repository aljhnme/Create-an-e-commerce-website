<?php 
 include 'mysqli.php';
 session_start();
 include 'functions.php';

 $prices=$_POST['prices'];
 
 $SearchOFGuide=strpos($prices,',>');
  
 if ($SearchOFGuide !== false) 
   {
     $prices=str_replace(',>'," money_m >",$prices);
   }

  //Selected prices
   $PriceInQuery=substr(str_replace(array(','),' money_m BETWEEN ',$prices),2);
   $And='';

   if ($PriceInQuery != "") 
   {
     $And=" AND ";
   }
  

  //Product type value
  $typeP=$_POST['typeP'];

  $TypeInQuery='';
  if ($typeP != "") 
   {
     $TypeInQuery=$And."Producer_m IN($typeP)";
     $And=" AND ";
   }


  //Product rating stars
  $rating=$_POST['rating'];
  $RatingInQuery='';
  if ($rating != "") 
   {
     $RatingInQuery=$And."star_m IN($rating)";
     $And=" AND ";
   }

  //Anything Custom Search
    $other=preg_replace('/[^a-zA-Z0-9_ -]/s','',$_POST['other']);
    $otherInQuery='';
  if ($other != "") 
   {
     $otherInQuery=$And."title_m LIKE '%$other%';";
   }

   $tables=$PriceInQuery.$TypeInQuery.$RatingInQuery.$otherInQuery;

   if ($tables != "") 
   {
      $query="SELECT * FROM market where $tables";
  
       $stm=$connect->prepare($query);
       $stm->execute();
       $fetch_user=$stm->fetchAll();
       foreach ($fetch_user as $row) 
       {
        $Product_Picture=strtok($row['imge_m'],':');
        ?>
         <div class="col-6 col-md-4">
          <?php include 'CView_Product.php'; ?>
         </div>
        <?php
       }
   }
?>
