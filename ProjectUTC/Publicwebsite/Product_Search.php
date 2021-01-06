<?php
	include("include/db.php");
	include('../include/class.php');
	session_start();
	$x 	= new Admin();
	?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Product Search</title>
<?php 
	include("include/header.php");
?>

<div class='sec-banner bg0 p-t-80 p-b-50'>
<div class='container'>
<div class='row'>
</div></div></div>

<form action="" method="post">
<section class="bg0 p-t-23 p-b-140">
<div class="container">
<div class="p-b-10">
<h3 class="ltext-103 cl5">
Product Overview
</h3>
</div>
<div class="flex-w flex-sb-m p-b-52">
<div class="flex-w flex-l-m filter-tope-group m-tb-10">
<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
All Products
</button>
</div>

</div>
</form>
<?php
if (isset($_SESSION['pro_name'])){
  if (isset($_POST['name_product_index'])) {
	$name_product = $_POST['search_product'];

	$viewsprinter = $x->SearchAllProduct($name_product);
	echo"
		<div class='row isotope-grid'>

	";
	while($row = $viewsprinter->fetch_assoc()){
		echo "
			<div class='col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women'>
			<div class='block2'>
			<div class='block2-pic hov-img0'>
			<img class='imagesstyle' src='../uploadimages/{$row['pro_image']}' alt='IMG-PRODUCT'>		
			<a href='product-detail.php?id={$row['pro_id']}' class='block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04'>
			Quick View
			</a>
			</div>
			<div class='block2-txt flex-w flex-t p-t-14'>
			<div class='block2-txt-child1 flex-col-l'>
			<a href='product-detail.html' class='stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6'>
			{$row['pro_name']}
			</a>
			<span class='stext-105 cl3 pricesstyle'>
			$".$row['pro_price']."
			</span>
			</div>
			</div>
			</div>
			</div>
		";
	}
	echo "
		</div>

	";
	}else{
		echo"error";
	}
}else{
	die;
}
?>
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
		$('.js-addwish-b2').on('click', function(e){
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
</body>

<!-- Mirrored from preview.colorlib.com/theme/cozastore/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 07:27:09 GMT -->
</html>