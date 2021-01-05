<?php
	 include('include/db.php');

	echo $query = "delete from admin where admin_id = {$_GET['id']}";
	mysqli_query($conn,$query);
	
	header('location: admin_manegar.php');