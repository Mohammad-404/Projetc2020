<?php
	include("include/db.php");
	$query  = "DELETE FROM order_details WHERE order_details_id = {$_GET['id']}";

	if(mysqli_query($conn,$query)){
		header("location:orders.php");
	}
?>