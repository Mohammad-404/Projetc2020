
<?php
	session_start();
	include("include/db.php");

	if (!isset($_GET['id'])) {
		$errors = "Error";
	}else{
		$id = $_GET['id'];
	}

	if (isset($_POST['sub'])) {
		$_SESSION['cart'][$id] = $_POST['num_prodect'];
		header("location: shoping-cart.php");
	}


	if (!isset($_GET['id'])){
		header("location: product.php");
	}

?>

<!DOCTYPE html>

<html lang="en">

<head>
<title>Product Detail</title>
<?php
	include("include/header.php");
?>
<div class="container py-5">
<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
Home
<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
</a>

<?php
	if (!isset($_GET['id'])) {
		$error="error";
	}else{
	 $query = "
		select products.pro_id,products.pro_name,cetegory.cat_id,
        cetegory.cat_name  from products inner join cetegory
        ON products.cat_id=cetegory.cat_id where pro_id = {$_GET['id']}";
                                 
	$result   = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($result);
	echo "<span class='stext-109 cl4'>".$row['cat_name']."</span>";


	echo"		
		<i class='fa fa-angle-right m-l-9 m-r-10 m-t-3' aria-hidden='true'></i>
	";


	echo"			
		<span class='stext-109 cl4'>
		".$row['pro_name']."
		</span>
		</div>
		</div>
	";	
}
?>


<section class="sec-product-detail bg0 p-t-65 p-b-60">

<div class="container">
<div class="row">
<!--------------------------------------------------->
<?php
	include("include/db.php");
	if (!isset($_GET['id'])) {
	echo"
		<div class='alert alert-warning' role='alert'>
		  No Item Here !! 
		</div>
	";		
	}else{
	$query  = "select * from products where pro_id = {$_GET['id']}";
	$result = mysqli_query($conn,$query);
	$row 	= mysqli_fetch_assoc($result);

	echo"
		<div class='col-md-6 col-lg-7 p-b-30'>
		<div class='p-l-25 p-r-30 p-lr-0-lg'>
		<div class='wrap-slick3 flex-sb flex-w'>
		<div class='wrap-slick3-dots'></div>
		<div class='wrap-slick3-arrows flex-sb-m flex-w'></div>
		<div class='slick3 gallery-lb'>
	";
	if($row['pro_image1'] != ""){
		echo"
			<div class='item-slick3' data-thumb='../uploadimages/".$row['pro_image']."'>
			<div class='wrap-pic-w pos-relative'>
			 <img alt=IMG-BANNER src='../uploadimages/".$row['pro_image']."'>
			<a class='flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04' 
			href='../uploadimages/".$row['pro_image']."'>
			<i class='fa fa-expand'></i>
			</a>
			</div>
			</div>";
		}
		if ($row['pro_image1'] != "") {
			echo"
			<div class='item-slick3' data-thumb='../uploadimages/".$row['pro_image1']."'>
			<div class='wrap-pic-w pos-relative'>
			<img src='../uploadimages/".$row['pro_image1']."'>
			<a class='flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04' href='../uploadimages/".$row['pro_image1']."'>
			<i class='fa fa-expand'></i>
			</a>
			</div>
			</div>
			";
		}
		if($row['pro_image2'] != "") {
			echo"
			<div class='item-slick3' data-thumb='../uploadimages/".$row['pro_image2']."'>
			<div class='wrap-pic-w pos-relative'>
			<img src=../uploadimages/".$row['pro_image2'].">
			<a class='flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04' 
			href='../uploadimages/".$row['pro_image2']."'>
			<i class='fa fa-expand'></i>
			</a>
			</div>
			</div>
			";
		}	
		echo"
			</div>
			</div>
			</div>
			</div>
		";



	echo
	"	
	<div class='col-md-6 col-lg-5 p-b-30'>
	<div class='p-r-50 p-t-5 p-lr-0-lg'>
	<h4 class='mtext-105 cl2 js-name-detail p-b-14'>
	".$row['pro_name']."
	</h4>
	";	 
	echo
	"		
	<span class='mtext-106 cl2'>
	$".$row['pro_price']."
	</span>
	";	
	echo
	"
	<p class='stext-102 cl3 p-t-23'>
	".$row['pro_desc']."
	</p>
	";
	echo"
	<div class='p-t-33'>
	<div class='flex-w flex-r-m p-b-10'>
	";
	
	// echo"
	// 	<div class='size-203 flex-c-m respon6'>
	// 	  Size
	// 	</div>
	// 	<div class='size-204 respon6-next'>
	// 	<div class='rs1-select2 bor8 bg0'>
	// 	<select class='js-select2' name='time'>
	// 	<option>Choose an option</option>
	// 	<option>Size ".$row['']."</option>
	// 	</select>
	// 	<div class='dropDownSelect2'></div>
	// 	</div>
	// 	</div>
	//	</div>
	// ";

	// echo"
	// 	<div class='flex-w flex-r-m p-b-10'>
	// 	<div class='size-203 flex-c-m respon6'>
	// 	Color
	// 	</div>
	// 	<div class='size-204 respon6-next'>
	// 	<div class='rs1-select2 bor8 bg0'>
	// 	<select class='js-select2' name='time'>
	// 	<option>Choose an option</option>
	// 	<option>".$row['']."</option>
	// 	</select>
	// 	<div class='dropDownSelect2'></div>
	// 	</div>
	// 	</div>
	// 	</div>
	// ";

	echo "<form action='' method='post'>";
	echo"
	<div class='flex-w flex-r-m p-b-10'>
	<div class='size-204 flex-w flex-m respon6-next'>
	<div class='wrap-num-product flex-w m-r-20 m-tb-10'>
	<div class='btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m'>
	<i class='fs-16 zmdi zmdi-minus'></i>
	</div>
	<input class='mtext-104 cl3 txt-center num-product' type='number' name='num_prodect' value='1'>
	<div class='btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m'>
	<i class='fs-16 zmdi zmdi-plus'></i>
	</div>
	</div>
	<button name='sub' class='flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail'>
	Add to cart
	</button>
	</div>
	</div>
	</div>
		<div class='flex-w flex-m p-l-100 p-t-40 respon7'>
		<div class='flex-m bor9 p-r-10 m-r-11'>
		<a href='#' class='fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100' data-tooltip='Add to Wishlist'>
		<i class='zmdi zmdi-favorite'></i>
		</a>
		</div>
		<a href='#' class='fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100' data-tooltip='Facebook'>
		<i class='fa fa-facebook'></i>
		</a>
		<a href='#' class='fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100' data-tooltip='Twitter'>
		<i class='fa fa-twitter'></i>
		</a>
		<a href='#' class='fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100' data-tooltip='Google Plus'>
		<i class='fa fa-google-plus'></i>
		</a>
		</div>



	";

}
?>
</form>


</div>
</div>
</div>


</div>
</div>
</div>
</div>
</section>

<?php
	include("include/footer.php");
?>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>
<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/slick/slick.min.js"></script>
<script src="js/slick-custom.js"></script>

<script src="vendor/parallax100/parallax100.js"></script>
<script>
        $('.parallax100').parallax100();
	</script>

<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>

<script src="vendor/isotope/isotope.pkgd.min.js"></script>

<script src="vendor/sweetalert/sweetalert.min.js"></script>
<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>

<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script>
      function hideImg() { 
        document.getElementById("HideImg").style.display = "none"; 
       } 	
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/cozastore/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 07:27:22 GMT -->
</html>