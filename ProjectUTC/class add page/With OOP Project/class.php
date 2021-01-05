<?php
	include("include/db.php");
	class Admin{

		function CreateAdmin($conn,$admin_img,$Email,$Password,$fullname){
			$query = "insert into admin(admin_email,admin_password,admin_fullname,admin_image)
                  values('$Email','$Password','$fullname','$admin_img')";           
            $conn->query($query);
		}

		function ReadAdmin($conn){
			$query  = "select * from admin";
			$result = $conn->query($query);
			return $result;
		}


		function UpdateAdmin($conn,$name_image,$Email,$Password,$fullname,$id){

	        $query 	        = "update admin set   admin_email 	 = '$Email',
	                							  admin_password = '$Password',
	                							  admin_fullname = '$fullname',
	                                              admin_image    = '$name_image'
	                		  where admin_id = '$id' ";
	        if ($conn->query($query)) {
	        	header("location:admin_manegar.php");
	        }else{
	        	echo "Faild";
	        }

		}

		function ViewUpdateAdmin($conn,$id){
			$query  = "select * from admin where '$id' ";
			$result = $conn->query($query);
			return $result;
		}

		function DeleteAdmin($conn,$id){
			$query 	= "delete from admin where admin_id = '$id' ";
			$conn->query($query);
		}


	}










?>