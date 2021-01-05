<?php
	include("include/db.php");
	session_start();

	$id = $_GET['id'];
	if (isset($_SESSION['cart'])) {
	if (isset($id)) {
		unset($_SESSION['cart'][$id]);
		header("location: shoping-cart.php");
	}
}





?>