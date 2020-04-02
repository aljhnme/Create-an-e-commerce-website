<?php

session_start();
include 'mysqli.php';

    $name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $extensions_arr = array("jpg","jpeg","png","gif");

        if( in_array($imageFileType,$extensions_arr) ){
            
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            }
      
    $name = $_FILES['file1']['name'];
        $target_dir1 = "upload/";
        $target_file1 = $target_dir1 . basename($_FILES["file1"]["name"]);

        $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

        $extensions_arr1 = array("jpg","jpeg","png","gif");

        if( in_array($imageFileType1,$extensions_arr1) ){
            
            $image_base641 = base64_encode(file_get_contents($_FILES['file1']['tmp_name']) );
            $image1 = 'data:image/'.$imageFileType1.';base64,'.$image_base641;

            }
       
       if ($image1 == "") 
       { 
         $file ='images.png';
         $src=base64_encode(file_get_contents($file));
         $image1='data:'.mime_content_type($file).';base64,'.$src;
       }
       if ($image == "") 
       { 
         $file ='images.png';
         $src=base64_encode(file_get_contents($file));
         $image='data:'.mime_content_type($file).';base64,'.$src; 
       }

        $query='
          INSERT INTO market(text_m,title_m,imge_m, user_id,star_m,money_m,Producer_m,k,imge_m1,new) 
           VALUES ("'.$_POST['text_m'].'","'.$_POST['title_m'].'","'.$image.'","'.$_SESSION['user_id'].'","'.$_POST['star'].'","'.$_POST['mony'].'","'.$_POST['Producer'].'","'.$_POST['k'].'","'.$image1.'","new")';

        $stm=$connect->prepare($query);
        if ($stm->execute()) 
        {
        }

         move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$name);
         move_uploaded_file($_FILES['file1']['tmp_name'],'upload/'.$name);
 
?>