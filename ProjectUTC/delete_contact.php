<?php
	include("include/class.php");


	$x = new Admin();
	
	$id = $_GET['id'];
	
	$x->deletecontact($id);

	header("location:contact.php");

