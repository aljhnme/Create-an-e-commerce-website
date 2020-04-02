<?php

session_start();
session_destroy();
session_unset();

if ($_SESSION['user_id'] == "")
{
	header('location:account.PHP');
}

?>