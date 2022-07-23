<?php
 include 'mysqli.php';
 session_start();
  
 $arr_alert=array();

 if (!isset($_POST['checkbox_y'])) 
    {
      $arr_alert['succes_In'] = '<div class="alert alert-danger" role="alert"> 
                                     Please agree to the terms
                                   </div>';
    }

 if (trim($_POST['title_m']) == "") 
    {
      $arr_alert['alert_titleM'] = '<div class="alert alert-warning" role="alert"> 
                                     Please enter a product name
                                   </div>';
    }

 if ($_POST['Producer'] == "Choose the type of product") 
    {
      $arr_alert['alert_seP'] = '<div class="alert alert-warning" role="alert"> 
                                   Please select a product type
                                 </div>';
    }

 if ($_FILES['fileupload']['name'][0] == "") 
    {
      $arr_alert['al_fe_img'] = '<div class="alert alert-danger" role="alert"> 
                                   Please add at least one photo
                                </div>';
    }


 if (empty($arr_alert)) 
   {
 
      $comma_n='';
      $string_name_img='';
      foreach($_FILES['fileupload']['name'] as $name => $value) 
       {
          $type_Cfile=strtolower(pathinfo($_FILES['fileupload']['name'][$name],PATHINFO_EXTENSION));
          $array_type = array('png','jpg','jpeg');

      if (in_array($type_Cfile,$array_type)) 
        {
          $new_nameImg=rand().'.'.$type_Cfile;
          $path_cIMG=$_FILES['fileupload']['tmp_name'][$name];
          $targetPath = "upload/".$new_nameImg;  
          move_uploaded_file($path_cIMG,$targetPath);
        
          $string_name_img.=":".$new_nameImg;
        }
      }

       $names_images=substr($string_name_img,1);

       $query='INSERT INTO market(text_m,title_m,imge_m,user_id,star_m,money_m,Producer_m,k,date_u_p) 
               VALUES (:text_m,:title_m,:names_images,:user_id,:rating_input,:mony,:Producer,:discount,:data_u_p)';
         
      
        $stm=$connect->prepare($query);

        $data = array(':text_m'       => preg_replace('/["!@#%^&*)(><-]/s','',$_POST['text_m']),
                      ':title_m'      => preg_replace('/["!@#%^&*)(><-]/s','',$_POST['title_m']),
                      ':names_images' => $names_images,
                      ':user_id'      => $_SESSION['user_id'],
                      ':rating_input' => $_POST['rating-input'],
                      ':mony'         => preg_replace('/["!@#%^&*)(><-]/s','',$_POST['mony']),
                      ':Producer'     => $_POST['Producer'],
                      ':discount'     => $_POST['discount'],
                      ':data_u_p'     => date('Y-m-d'));

        if ($stm->execute($data)) 
         {
            $arr_alert['succes_In']='<div class="alert alert-success" role="alert"> 
                                       Your product has been uploaded successfully
                                    </div>';
         }
   }
   echo json_encode($arr_alert);
 
?>