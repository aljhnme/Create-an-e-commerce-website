<?php
include 'mysqli.php';
session_start();

if ($_POST['action'] == 'login') 
{ 
  if (!empty($_POST['email'])) 
  {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        {
            $query='SELECT * FROM user_infr WHERE email = :email';
            
               $stm=$connect->prepare($query);
               $stm->execute([':email' => $_POST['email']]);
               $rowCHemail=$stm->rowCount();
               $row=$stm->fetch(PDO::FETCH_ASSOC);
               if ($rowCHemail > 0) 
                  { 
                   if (!empty($_POST['password'])) 
                      {
                      if (password_verify($_POST['password'],$row['password'])) 
                          { 
                             $_SESSION['user_id']=$row['user_id'];
                             if ($_POST['Ch_Remember'] == "true") 
                             {
                               setcookie('remember_user',$row['user_id'],time() + (60*60*24*30), "/");
                             }
                             echo "success_l";
                          }else{
                             echo '<div class="alert alert-warning" role="alert">wrong password</div>';
                          }
                     }else{
                        echo '<div class="alert alert-warning" role="alert">Please add a password</div>';
                     }
                }else{
                  echo '<div class="alert alert-warning" role="alert">The email address does not belong to any account</div>';
                }
           }else{
            echo '<div class="alert alert-danger" role="alert">Please add a valid email</div>';
           }
      }else{
       echo '<div class="alert alert-warning" role="alert">Please add an email</div>';
    }
 }

//code register
if ($_POST['action'] == "register") 
{ 
  
 $arr_stalert=array();

 if ($_POST['email'] != "") 
    {
         if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
            {
              $arr_stalert['email_alert'] = '<div class="alert alert-danger" role="alert">Please add a valid email</div>';
            }
    }else{
        $arr_stalert['email_alert'] = '<div class="alert alert-warning" role="alert">Please add an email</div>';
    }

     $query='SELECT * FROM user_infr WHERE email = :email';

       $stm = $connect->prepare($query);
       $stm->execute([':email' => $_POST['email']]);
       $rowemail = $stm->rowCount();
      
       if ($rowemail > 0) 
          {
            $arr_stalert['email_alert'] = '<div sclass="alert alert-danger" role="alert">This email is already registered</div>';
          } 

   if (empty($_POST['password_r'])) 
       {
            $arr_stalert['password_alert'] = '<div class="alert alert-warning" role="alert">Please fill in the password field</div>';
       } 

   if (strlen($_POST['password_r']) < 6) 
      {
           $arr_stalert['password_alert'] = '<div class="alert alert-warning" role="alert">Please add 6 numbers or more</div>';
      } 

   if ($_POST['namel'] == "" || $_POST['namef'] == "")
      {
        $arr_stalert['fullname_alert'] = '<div class="alert alert-warning" role="alert">Please enter your full name</div>';
      }

   if (is_numeric($_POST['namef']) || is_numeric($_POST['namel'])) 
      {
        $arr_stalert['fullname_alert'] = '<div class="alert alert-danger" role="alert">It is not possible to add numbers only in the name field<div>';
      }
    
   if (!empty($_POST['telephone'])) 
      {               
       if (!is_numeric($_POST['telephone'])) 
          {               
           $arr_stalert['telephone_alert'] ='<div class="alert alert-warning" role="alert">Please add a valid phone number</div';
          } 
      }

   if (!empty($_POST['Postal_Code'])) 
      {
        if (!is_numeric($_POST['Postal_Code'])) 
           {
            $arr_stalert['Postal_alert'] ='<div class="alert alert-warning" role="alert">Please add a valid Postal Code</div';
           }
      }

      if (empty($arr_stalert)) {
         
           $queryin='INSERT INTO user_infr(email,password,name_l,name_f,adress,city,Country,
                            postal_code,telephone)VALUES(:email,:password,:namel,:namef,:address,:city,:Country,:Postal_Code,:telephone)';

            $stmin=$connect->prepare($queryin);
            $email=preg_replace('/[!#%^&*)(><-]/s','',$_POST['email']);
            $stmin->bindParam(':email',$email,PDO::PARAM_STR);

            $password=password_hash($_POST['password_r'],PASSWORD_DEFAULT);
            $stmin->bindParam(':password',$password,PDO::PARAM_STR);
            
            $namel=preg_replace('/[@!#%^&*)(><-]/s','',$_POST['namel']);
            $stmin->bindParam(':namel',$namel,PDO::PARAM_STR);

            $namef=preg_replace('/[@!#%^&*)(><-]/s','',$_POST['namef']);
            $stmin->bindParam(':namef',$namef,PDO::PARAM_STR);

            $address=preg_replace('/[@!#%^&*)(><-]/s','',$_POST['address']);
            $stmin->bindParam(':address',$address,PDO::PARAM_STR);

            $city=preg_replace('/[@!#%^&*)(><-]/s','',$_POST['city']);
            $stmin->bindParam(':city',$city,PDO::PARAM_STR);

            $stmin->bindParam(':Country',$_POST['country'],PDO::PARAM_STR);

            $Postal_Code=preg_replace('/[@!#%^&*)(><-]/s','',$_POST['Postal_Code']);
            $stmin->bindParam(':Postal_Code',$Postal_Code,PDO::PARAM_INT);

            $telephone=preg_replace('/[@!#%^&*)(><-]/s','',$_POST['telephone']);
            $stmin->bindParam(':telephone',$telephone,PDO::PARAM_INT);

          if ($stmin->execute()) 
             {
               $arr_stalert['success_alert'] = '<div class="alert alert-success" role="alert">successfully registered</div>';
             }
         }
         
       echo json_encode($arr_stalert);
   }
    
if ($_POST['action'] == 'add_card')
 { 
   $data=array(':user_id'    => $_SESSION['user_id'], 
                ':user_id_FP' => $_POST['user_id_FP'], 
                ':id_product' => $_POST['id_product'],
                ':price_pN'   => $_POST['price_pN']);

    $queryp="SELECT * FROM `purchase` where Product_ID = :id_product";

      $stm=$connect->prepare($queryp);
      $stm->execute([':id_product' => $_POST['id_product']]);
      $ch_pINc=$stm->rowCount();

      if ($ch_pINc > 0) 
      {
        $query='UPDATE `purchase` SET `money_m_p`=:price_pN WHERE `Product_ID`=:id_product';
        unset($data[':user_id'],$data[':user_id_FP']);

      }else{
         $query='INSERT INTO `purchase` (user_id_p,user_id_r,Product_ID,money_m_p) 
                VALUES(:user_id,:user_id_FP,:id_product,:price_pN)';
      }

    $stm=$connect->prepare($query);
     if ($stm->execute($data))
        {
          
        }
       echo $ch_pINc;
  }

 if ($_POST['action'] == 'remove_pOFC')
 {
    $queryp = 'DELETE FROM purchase WHERE Purchase_id = :ID_pOFC';
    $stm = $connect->prepare($queryp);
    $stm->execute([':ID_pOFC' => $_POST['ID_pOFC']]);
 }

 if ($_POST['action'] == 'delete_into') 
 {
  $queryd='DELETE FROM purchase WHERE user_id_r = :user_id';

   $stm=$connect->prepare($queryd);
   $stm->execute([':user_id' => $_SESSION['user_id']]);
 }

 if ($_POST['action'] == 'addToFAVorites') 
 { 

    $data=array(':user_id' => $_SESSION['user_id'] , ':Product_ID' => $_POST['Product_ID']);
   
    $query="SELECT * From saved_products where user_id_s=:user_id AND Product_ID_s=:Product_ID";
    $stm=$connect->prepare($query);
    $stm->execute($data);
    $rocount=$stm->rowCount();

    if ($rocount == 0) 
       {
         $queryd='INSERT INTO saved_products(user_id_s,Product_ID_s) VALUES (:user_id,:Product_ID)';
         $stm=$connect->prepare($queryd);
         $stm->execute($data);
       }
}

if ($_POST['action'] == 'updataSubtotalCart') 
{
   $paQueryUp ="case".$_POST['paQueryUp']." end";

   $query="UPDATE purchase SET money_m_p = ($paQueryUp) where user_id_p = :user_id";

   $stm=$connect->prepare($query);
   $stm->execute([':user_id' => $_SESSION['user_id']]);
}

if ($_POST['action'] == "fetch_product_Search") 
{  
   $text_to=trim($_POST['text_to']);

   $query="SELECT * FROM `market` where title_m LIKE '%$text_to%'";
   
   $stm=$connect->prepare($query);
   $stm->execute();
    
   $fetch_pr=$stm->fetchAll();
?>
<div class="user-dashboard-info-box bg-white p-4 shadow-sm">
    <table class="table manage-candidates-top mb-0">
        <?php
 foreach ($fetch_pr as $row) 
  {  
   $Product_Picture=strtok($row['imge_m'],':');
  ?>
        <tr class="candidates-list">
            <td class="title">
                <div class="thumb">
                    <img style="width:80px;" class="img-fluid" src="upload/<?php echo $Product_Picture;?>" alt="">
                </div>
                <div class="candidate-list-details">
                    <div class="candidate-list-info">
                        <div class="candidate-list-title">
                            <a href="product_detail.php?Product_ID=<?php echo$row['Product_ID'];?>">
                                <?php echo $row['title_m'];?></a>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <?php echo $row['money_m']?>
                </ul>
            </td>
        </tr>
    <?php
      }
     ?>
    </table>
</div>
<?php
  }
  if ($_POST['action'] == "fetchNcart") 
  {  
    $getNEXtV="";
    $data=array();
    if (isset($_POST['Purchase_id'])) 
     {
        $getNEXtV="Purchase_id > '".$_POST['Purchase_id']."' AND ";
     }

    $query='SELECT * FROM purchase inner join market ON purchase.Product_ID=market.Product_ID 
            where '.$getNEXtV.' user_id_r=:user_id';

       $stm=$connect->prepare($query);
       $stm->execute([':user_id' => $_SESSION['user_id']]);
       $fetch_user=$stm->fetchAll();
       $data['CNC']=$count_NPC=$stm->rowCount();
       $PsCart='';
       foreach ($fetch_user as $row) 
       {
        $Product_Picture=strtok($row['imge_m'],':');
        $PsCart.='<ul class="'.$row['Purchase_id'].'">
                    <li>
                      <a href="#0">
                       <figure>
                       <img src="upload/'.$Product_Picture.'" data-src="upload/'.$Product_Picture.'" alt="" width="50" height="50" class="lazy">
                      </figure>
                      <strong><span>'.$row['title_m'].'</span>$'.$row['money_m_p'].'</strong>
                     </a>
                     <a href="#0" onclick="remove_p_of_cart('.$row['Purchase_id'].')" class="action"><i class="ti-trash"></i></a>
                  </li>
                <input type="hidden" class="Purchase_id" value="'.$row['Purchase_id'].'">
               </ul>
              ';

       }
       $data['pCart']=$PsCart;
       echo json_encode($data);
      }
   ?>