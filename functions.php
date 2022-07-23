<?php 
  function ch_ofADDF($connect , $Product_ID,$t_h_icon,$type_in)
  { 
     $data=array(':user_id' => $_SESSION['user_id'] , ':Product_ID' => $Product_ID);
   
     $query="SELECT * From saved_products where user_id_s=:user_id AND Product_ID_s=:Product_ID";
     $stm=$connect->prepare($query);
     $stm->execute($data);
     $rocount=$stm->rowCount();

    if ($rocount == 0) 
       { 
         return $t_h_icon;
       }else{
        if ($type_in == "FINPC") 
           {
         ?>
          <a class="tooltip-1 added" data-toggle="tooltip" data-placement="left" title="added to favourites">
             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20" height="20" viewBox="0 0 256 256" xml:space="preserve">
              <g transform="translate(128 128) scale(0.87 0.87)" style="">
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(-144.89999999999998 -144.90000000000003) scale(3.22 3.22)" >
               <path d="M 45 2.024 C 45 2.024 45 2.024 45 2.024 c -1.398 0 -2.649 0.778 -3.268 2.031 L 29.959 27.911 c -0.099 0.2 -0.29 0.338 -0.51 0.37 L 3.122 32.107 c -1.383 0.201 -2.509 1.151 -2.941 2.48 c -0.432 1.329 -0.079 2.76 0.922 3.736 l 19.049 18.569 c 0.16 0.156 0.233 0.38 0.195 0.599 L 15.85 83.71 c -0.236 1.377 0.319 2.743 1.449 3.564 c 1.129 0.821 2.6 0.927 3.839 0.279 l 23.547 -12.381 c 0.098 -0.051 0.206 -0.077 0.314 -0.077 C 51.721 53.905 50.301 28.878 45 2.024 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,200,80); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
               <path d="M 45 2.024 C 45 2.024 45 2.024 45 2.024 c 1.398 0 2.649 0.778 3.268 2.031 l 11.773 23.856 c 0.099 0.2 0.29 0.338 0.51 0.37 l 26.326 3.826 c 1.383 0.201 2.509 1.151 2.941 2.48 c 0.432 1.329 0.079 2.76 -0.922 3.736 L 69.847 56.892 c -0.16 0.156 -0.233 0.38 -0.195 0.599 L 74.15 83.71 c 0.236 1.377 -0.319 2.743 -1.449 3.564 c -1.129 0.821 -2.6 0.927 -3.839 0.279 L 45.315 75.172 c -0.098 -0.051 -0.206 -0.077 -0.314 -0.077 C 37.08 54.593 38.849 29.395 45 2.024 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,220,100); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
          </g>
       </g>
     </svg>
    </a>
     <?php
        }else{
          return 'added to favourites';
        }
      }
    }

  function chADD_Cart($connect,$Product_ID,$t_text,$type_in)
   {
      $query='SELECT * FROM `purchase` WHERE user_id_p = :user_id 
              AND Product_ID = :id_product';

        $stm=$connect->prepare($query);
        $stm->execute([':user_id' => $_SESSION['user_id'], 
                       ':id_product' => $Product_ID]);
        $ch_cTHISp=$stm->rowCount();  

        if ($ch_cTHISp == 0) 
            {   
              echo $t_text;
            }else{ 
              if ($type_in == "ADDPC") 
                 {
                  $w_bAdd_cart='<a><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 600.77 600.77" style="enable-background:new 0 0 486.77 486.77;" xml:space="preserve"><g id="XMLID_753_"><path id="XMLID_756_" d="M482.482,175.267c-3.43-4.96-9.055-7.939-15.083-7.939h-45.714c4.887-14.165,3.873-29.893-3.29-43.606c-7.731-14.824-21.517-25.186-37.6-28.577V55.411c0-14.347-5.61-28.893-17.217-39.962C353.628,5.934,340.208,0,325.384,0c-35.327,0-7.368,0-34.085,0c-14.821,0-28.244,5.934-38.195,15.448c-10.663,10.165-17.215,24.189-17.215,39.962v39.733c-16.083,3.392-29.868,13.753-37.601,28.577c-7.163,13.714-8.176,29.441-3.287,43.606h-45.454l-41.245-45.817c-4.628-5.141-11.211-8.082-18.136-8.082l-64.688-0.008c-13.477,0-24.402,10.926-24.402,24.402c0,13.477,10.925,24.396,24.402,24.396h53.819l33.275,36.983l70.512,183.346c2.718,7.075,9.507,11.733,17.081,11.733h194.012c7.58,0,14.371-4.658,17.081-11.733l73.205-190.343C486.643,186.57,485.89,180.241,482.482,175.267z M237.141,144.003c2.013-3.834,5.942-6.219,10.253-6.219h0.014h32.311V55.411c0-6.385,5.197-11.568,11.565-11.568h0.016h34.085h0.015c6.371,0,11.568,5.183,11.568,11.568v82.372h32.309h0.016c4.31,0,8.24,2.385,10.252,6.219c1.996,3.834,1.712,8.421-0.776,11.971l-60.926,87.348c-2.171,3.098-5.721,4.944-9.491,4.944h-0.009h-0.008c-3.77,0-7.319-1.846-9.49-4.944l-60.925-87.348 C235.431,152.424,235.145,147.837,237.141,144.003z"/><path id="XMLID_755_" d="M228.577,413.565c-20.219,0-36.603,16.383-36.603,36.602c0,20.211,16.384,36.604,36.603,36.604c20.21,0,36.596-16.393,36.596-36.604C265.172,429.948,248.787,413.565,228.577,413.565z"/><path id="XMLID_754_" d="M363.081,413.565c-20.212,0-36.603,16.383-36.603,36.602c0,20.211,16.391,36.604,36.603,36.604c20.217,0,36.594-16.393,36.594-36.604C399.675,429.948,383.298,413.565,363.081,413.565z"/></svg></a>';
                 }else{
                   $w_bAdd_cart='change price';
                 }    
                 return $w_bAdd_cart;         
             }                      
     }
 
    function ribbon_new_DUP($date_p)
    {      
     $data_c = date('Y-m-d',strtotime($date_p. ' + 2 days'));
     if (date('Y-m-d') <= $data_c) 
      {
       ?>
       <span class="ribbon new">new</span>
       <?php
      }
   }

   function fetchRating($r_star)
     {
       $start=1;
       while($start <= 5) 
       {           
        if($r_star < $start)
          {
           ?>
            <i class="icon-star"></i>
           <?php
          }else{
           ?>
            <i class="icon-star voted"></i>
          <?php
          }
         $start++;
       }
     }

     function View_the_relevant_data($connect,$c_titleM)
     {
       $query='SELECT * FROM market where title_m != "'.$c_titleM.'"';

        $stm=$connect->prepare($query);
        $stm->execute();
        $fetch_RP=$stm->FetchAll();

        foreach ($fetch_RP as $row) 
        {
           $Product_Picture=strtok($row['imge_m'],':');

           $text_o=explode(" ",$c_titleM);

           $text_m=explode(" ",$row['title_m']);

           $diff_string=array_diff($text_o,$text_m);

           $val_str_new=str_replace($diff_string,'',$c_titleM);

            //Gives a number half the number of words in the string
           $count_num_string=str_word_count($c_titleM)/2;
      
           if (str_word_count($val_str_new) >= $count_num_string) 
              {
          ?>
          <div class="item">
            <?php include 'CView_Product.php'; ?>              
          </div>
        <?php
           }
          }   
         }    
       ?>

