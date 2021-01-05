<?php
	session_start();
	unset($_SESSION['cust_id'],$_SESSION['cust_name'],$_SESSION['cart']);
	header("location: shoping-cart.php");

?>
