<?php
	 include('include/class.php');

	$x = new Admin();
	$id = $_GET['id'];
	$x->DeleteAdmin($id);
	
	header('location: admin_manegar.php');