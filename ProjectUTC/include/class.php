<?php
	include("dboop.php");

	class Admin extends connectionDB{

		function CreateAdmin($admin_img,$Email,$Password,$fullname){
			$query = "insert into admin(admin_email,admin_password,admin_fullname,admin_image)
                  values('$Email','$Password','$fullname','$admin_img')";           
            $conn=$this->con();
            $conn->query($query);
		}

		function ReadAdmin(){
			$query  = "select * from admin";
			$conn = $this->con();
			$result = $conn->query($query);
			return $result;
		}


		function UpdateAdmin($name_image,$Email,$Password,$fullname,$id){

	        $query 	        = "update admin set   admin_email 	 = '$Email',
	                							  admin_password = '$Password',
	                							  admin_fullname = '$fullname',
	                                              admin_image    = '$name_image'
	                		  where admin_id = '$id' ";
	        $conn = $this->con();        		  
	        if ($conn->query($query)) {
	        	header("location:admin_manegar.php");
	        }else{
	        	echo "Faild";
	        }

		}

		function ViewUpdateAdmin($id){
			$query  = "select * from admin where admin_id = '$id' ";
			$conn 	= $this->con();
			$result = $conn->query($query);
			return $result;
		}

		function DeleteAdmin($id){
			$query 	= "delete from admin where admin_id = '$id' ";
			$conn 	= $this->con(); 
			$conn->query($query);
		}

		/******END FUNCTION ADMIN MANEGAR******/

		function CreateCategory($name_cat,$description_cat,$name_image){
	        $query = "insert into cetegory(cat_name,cat_desc,cat_image)
	                  values('$name_cat','$description_cat','$name_image')";
	        $conn = $this->con();
	        $conn->query($query);
		}
		function ViewCategory(){
			$query 	= "select * from cetegory";
			$conn 	= $this->con();
			$result = $conn->query($query);
			return $result;
		}
		function DeleteCategory($id){
			$query = "delete from cetegory where cat_id = '$id' ";
			$conn = $this->con();
			$conn->query($query);
			return $result; 
		}
		function EditCategory($id,$name_cat,$description_cat,$name_image){
			$query = "update cetegory set cat_name   = '$name_cat',
                                  		  cat_desc 	 = '$description_cat',
                                 		  cat_image	 = '$name_image'
                where cat_id = '$id'
        ";
        $conn = $this->con();
        $conn-> query($query);
		}
		function ViewEditCategory($id){
		    $query 		= "select * from cetegory where cat_id = '$id' ";
		    $conn 	 	= $this->con();
		    $result 	= $conn->query($query);
		    return $result;  
		}
		/******END FUNCTION CATEGORY MANEGAR******/

		function AddSlider($text1,$text2,$image1){
			$query 	= "INSERT INTO slider(textone,texttow,image) 
					  VALUES('$text1','$text2','$image1')";
			$conn 	= $this->con();
			$conn->query($query);
		}
		function ReadSlider(){
			$query 	= "SELECT * FROM slider";
			$conn 	= $this->con();
			$result = $conn->query($query);
			return $result;  
		}
		function EditSlider($id,$text1,$text2,$image1){
			$query	= "UPDATE slider SET textone = '$text1',
										 texttow = '$text2',
										 image   = '$image1'
					   WHERE id_slider = '$id'				 
			";
			$conn 	= $this->con();
			$conn->query($query);	 
		}
		function ViewEditSlider($id){
			$query  = "SELECT * FROM slider WHERE id_slider = '$id' ";
			$conn   = $this->con();
			$result = $conn->query($query);
			return $result;
		}
		function DeleteSlider($id){
			$query  = "DELETE FROM slider WHERE id_slider = '$id' ";
			$conn = $this->con();
			$conn->query($query);
		}
		/******END FUNCTION SLIDER MANEGAR******/

		function ViewAllProduct(){
			$query	= "SELECT * FROM products ORDER BY pro_id DESC LIMIT 20";
			$conn 	= $this->con();
			$result	= $conn->query($query);
			return $result;
		}

		/******END FUNCTION VIEW ALL PRDUCT IN PUBLIC PAGE******/
		function SearchAllProduct($name_product){
			$query	= "SELECT * FROM products WHERE pro_name LIKE '%$name_product%' ORDER BY pro_id DESC LIMIT 50";
			$conn 	= $this->con();
			$result	= $conn->query($query);
			return $result;
		}

		function contact($email,$message){
			$query  = "insert into contactus(email , msg) values('$email','$message')";
			$conn   = $this->con();
			$result = $conn->query($query);
		}

		function viewContact(){
			$query  = "select * from contactus";
			$conn   = $this->con();
			$result = $conn->query($query);
			return $result;
		}

		function deletecontact($id){
			$query  = "delete from contactus where id = $id ";
			$conn   = $this->con();
			$result = $conn->query($query);
			return $result;
		}

		function viewcustomer($id){
			$query  = "select * from customer where cust_id = '$id' ";
			$conn   = $this->con();
			$result = $conn->query($query);
			return $result;
		}

		function updateprofileuser($id,$name,$email,$phone,$address,$password){
				$query = "update customer set 
										  cust_name   		= '$name',
                                  		  cust_email 	 	= '$email',
                                 		  cust_mobile	 	= '$phone',
                                 		  cust_address		= '$address',
                                 		  cust_password		= '$password'
                where cat_id = '$id'
	            ";
				$conn   = $this->con();
				$result = $conn->query($query);
		}

		
		
		
	}










?>