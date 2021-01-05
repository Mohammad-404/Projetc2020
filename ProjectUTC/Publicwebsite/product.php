<?php
	include("../include/db.php");
	session_start();

	if (!isset($_GET['id'])){
		header("location: index.php");
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Products</title>
<?php
	include("include/header.php");
?>
<!------------------------------------------->
<div class="bg0 m-t-23 p-b-140 py-5">
<div class="container">
<div class="flex-w flex-sb-m p-b-52">
<div class="flex-w flex-l-m filter-tope-group m-tb-10">
<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
All Products
</button>
</div>
</div>



<?php
	include("include/db.php");
	// echo"
	// 	<div class='alert alert-warning' role='alert'>
	// 	  No Item Here !
	// 	  <a href='index.php'> Go Home Page </a> 
	// 	</div>
	// ";		
	// }else{
	$query = "select * from products where cat_id = {$_GET['id']}";
	$result = mysqli_query($conn,$query);

	echo "<div class='row isotope-grid'>";

	while($row = mysqli_fetch_assoc($result)){
		echo "<div class='col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women'>
			  <div class='block2'>
			  <div class='block2-pic hov-img0'>";
		echo "<img class='imgeditproduct' alt=IMG-BANNER src=../uploadimages/".$row['pro_image'].">";
		echo "<a href='product-detail.php?id=".$row['pro_id']."'
		class='block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04'>
		Quick View
		</a>";		
		echo"</div>";
		echo"
		<div class='block2-txt flex-w flex-t p-t-14'>
		<div class='block2-txt-child1 flex-col-l'>
		<a href='product-detail.php?id=".$row['pro_id']."' class='stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6'>
		".$row['pro_name']."
		</a>";
		echo"
		<span class='stext-105 cl3'>
		$".$row['pro_price']."
		</span>
		</div>
		";
		echo"
		<div class='block2-txt-child2 flex-r p-t-3'>
		<a href='#' class='btn-addwish-b2 dis-block pos-relative js-addwish-b2'>
		<img class='icon-heart1 dis-block trans-04' src='images/icons/icon-heart-01.png' alt='ICON'>
		<img class='icon-heart2 dis-block trans-04 ab-t-l' src='images/icons/icon-heart-02.png' alt='ICON'>
		</a>
		</div>		
		</div>
		</div>
		</div>
		";
}
	echo "</div>";

?>
<!-- 
<div class="flex-c-m flex-w w-full p-t-45">
<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
Load More
</a>
</div> -->
</div>
</div>

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
</body>

<!-- Mirrored from preview.colorlib.com/theme/cozastore/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 07:27:17 GMT -->
</html>