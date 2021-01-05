<?php
	include('include/class.php');
	$x = new Admin();
	$id = $_GET['id'];
	$x->DeleteSlider($id);
	header("location:slider.php");
?>