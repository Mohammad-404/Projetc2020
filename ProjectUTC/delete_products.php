<?php
	include("include/db.php");
	$query = "delete from products where pro_id = {$_GET['id']}";
	mysqli_query($conn,$query);
	header("location:manegar_product.php");

