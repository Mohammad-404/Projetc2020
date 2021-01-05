<?php
	 include('class.php');

	$x = new Admin();
	$id = $_GET['id'];
	$x->DeleteAdmin($conn,$id);
	
	header('location: admin_manegar.php');