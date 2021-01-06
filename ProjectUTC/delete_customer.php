<?php
	include("include/db.php");
	 $id = $_GET['id'];
	$query = "delete from customer where cust_id = '$id' ";
	mysqli_query($conn,$query);
	header('location:manager_customer.php');

