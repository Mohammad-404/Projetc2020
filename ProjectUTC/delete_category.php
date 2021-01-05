<?php
	include('include/class.php');
	$x = new Admin();
	$id = $_GET['id'];
	$x->DeleteCategory($id);
	header("location:manegar_category.php");
?>