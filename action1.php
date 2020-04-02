<?php
include 'mysqli.php';
session_start();

if ($_POST['action'] == 'login') 
{ 
	$query='
  SELECT * FROM user_infr 
  WHERE email = "'.$_POST['email'].'" 
    ';
  $stm=$connect->prepare($query);
  $stm->execute();
  $rowemail=$stm->rowCount();
  $fetchuser=$stm->fetchAll();
   if ($rowemail > 0) 
   { 
     foreach ($fetchuser as $row)
     {
         $query='
             SELECT * FROM user_infr 
             WHERE password = "'.$_POST['password'].'" 
                       ';
           $stm=$connect->prepare($query);
           $stm->execute();
           $rowemail=$stm->rowCount();
           $fetchuser=$stm->fetchAll();
           if ($rowemail > 0) 
            { 
            	$_SESSION['user_id']=$row['user_id'];
                echo "good";
            }else{
              
              echo "<h5 style='color:red;'>Password wrong</h5>";
         }
      }
    }else{
   	echo "<h5 style='color:red;'>Mail does not belong to any account</5>";
   }
}

if ($_POST['action'] == "register") 
{

if ($_POST['email'] == "") 
{
	echo "<h5 style='color:red;'>Please add an email</h5>";
}else{

$query='
  SELECT * FROM user_infr 
  WHERE email = "'.$_POST['email'].'"
';
$stm=$connect->prepare($query);
$stm->execute();
$rowemail=$stm->rowCount();
if ($rowemail > 0) 
{
	echo "<h5 style='color:red;'>This email is already registered</h5>";
}else{

     if (empty($_POST['password'])) 
     {
     	echo "<h5 style='color:red;'>Please fill in the password field</h5>";
     }else{

     	if (strlen($_POST['password']) < 6) 
     	{
     		echo "<h5 style='color:red;'>Please add 6 numbers or more</5>";
     	}else{

              if ($_POST['namel'] == "" || $_POST['namef'] == "")
              {
              	echo "<h5 style='color:red;'>Please add your name</h5>";
              }else{

              	if (is_numeric($_POST['namef']) || is_numeric($_POST['namel'])) 
              	{
              		echo "<h5 style='color:red;'>It is not possible to add numbers only in the name field<h5>";
              	}else{
                     $queryin='
                         INSERT INTO user_infr
                            (email,password,name_l,name_f,adress,city,county)
                         VALUES 
                       ("'.$_POST['email'].'","'.$_POST['password'].'","'.$_POST['namel'].'","'.$_POST['namef'].'","'.$_POST['address'].'","'.$_POST['city'].'","'.$_POST['country'].'")
                        ';

                      $stmin=$connect->prepare($queryin);

                      if ($stmin->execute()) 
                      {
                      	echo "<h5 style='color:#00cc66'>successfully registered</h5>";
                      }
              	   }
                }
             }
          }
       }
   }
}

if ($_POST['action'] == 'cart')
{
    $queryp='
      INSERT INTO purchase(user_id_p,user_id_r,market_id,money_m_p) 
      VALUES ("'.$_SESSION['user_id'].'","'.$_POST['user_id'].'",
      "'.$_POST['market_id'].'","'.$_POST['money'].'")
    ';
    $stm=$connect->prepare($queryp);
    $stm->execute();

}


if ($_POST['action'] == 'delete_c')
{
  
    $queryp='
      DELETE FROM purchase
      WHERE Purchase_id = "'.$_POST['cart_id'].'"
    ';
    $stm=$connect->prepare($queryp);
    $stm->execute();
}

if ($_POST['action'] == 'delete_into') 
{
  $queryd='
    DELETE FROM purchase
    WHERE user_id_r ="'.$_SESSION['user_id'].'"
    ';
    $stm=$connect->prepare($queryd);
    $stm->execute();
}

if ($_POST['action'] == 'save_m') 
{
 
 $query="
 SELECT * From saved_products 
 where markt_id_s = '".$_POST['market_id']."'
 ";
 $stm=$connect->prepare($query);
 $stm->execute();
 $rocount=$stm->rowCount();

if ($rocount > 0) 
{
 
}else{
 
$queryd='
  INSERT INTO saved_products(user_id_s,markt_id_s) 
   VALUES ("'.$_SESSION['user_id'].'","'.$_POST['market_id'].'") ';
    $stm=$connect->prepare($queryd);
    $stm->execute();
}
}

if ($_POST['action'] == "new_m") 
{
  $query="
  SELECT MAX(market_id) AS market_id FROM market
  where user_id ='".$_SESSION['user_id']."'
 ";
 $stm=$connect->prepare($query);
 $stm->execute();
 $fetch=$stm->fetchAll();
 foreach ($fetch as $row) 
 {
  $str= $row['market_id'];
 }
  $query="
  UPDATE market SET new='old' where market_id = '".$str."'
 ";
 $stm=$connect->prepare($query);
 $stm->execute();
}

if ($_POST['action'] == "delete_m") 
{
  $queryd='
    DELETE FROM market
    WHERE market_id ="'.$_POST['market_id'].'"
    ';
    $stm=$connect->prepare($queryd);
    $stm->execute();
}
?>