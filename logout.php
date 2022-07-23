<?php

session_start();

session_destroy();
session_unset();
unset($_COOKIE['remember_user']); 
setcookie('remember_user',null,-1, '/');
header('location:account.php');
 
?>