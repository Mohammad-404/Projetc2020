<?php
	include("../include/db.php");
	include('../include/class.php');
	session_start();
	$x 	= new Admin();


	//save in session

	if (isset($_POST['name_product_index'])) {
		$_SESSION['pro_name'] = $_POST['search_product'];
	    $name_product = $_SESSION['pro_name'];//$_POST['search_product'];
	    $x->SearchAllProduct($name_product);  
		header("location:Product_Search.php"); 
	}
	
	?>


	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>Home</title>
	<?php
		include("include/header.php");
	?>

<section class="section-slide">
<div class="wrap-slick1">
<div class="slick1">
<!-- START SLIDER--->	
<?php
	$printer = $x->ReadSlider();
	while ($row_slider = $printer->fetch_assoc()) {
		echo"
			<div class='item-slick1 editimageslider' 
			style='background-image: url(../uploadimages/{$row_slider['image']});'>
			<div class='container h-full'>
			<div class='flex-col-l-m h-full p-t-100 p-b-30 respon5'>
			<div class='layer-slick1 animated visible-false' data-appear='fadeInDown' data-delay='0'>
			<span class='ltext-101 cl2 respon2'>
				{$row_slider['textone']}
			</span>
			</div>
			<div class='layer-slick1 animated visible-false' data-appear='fadeInUp' data-delay='800'>
			<h2 class='ltext-201 cl2 p-t-19 p-b-43 respon1'>
				{$row_slider['texttow']}
			</h2>
			</div>
			</div>
			</div>
			</div>
		";
	}
?>
<!-- END SLIDER --->


</div>
</div>
</section>

<?php
	include("include/db.php");
	$query    = "select * from cetegory";
	$result   = mysqli_query($conn,$query);
	
	echo"
	<div class='sec-banner bg0 p-t-80 p-b-50'>
	<div class='container'>
	<div class='row'>
	";

	while($row = mysqli_fetch_assoc($result)){		
		echo"	
		<div class='col-md-6 col-xl-4 p-b-30 m-lr-auto'>
		<div class='block1 wrap-pic-w'>";

		echo "<img class='imgedit' alt=IMG-BANNER src=../uploadimages/".$row['cat_image'].">";
	
		echo "<a href='product.php?id={$row['cat_id']}' class='block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3'>";
		echo "<div class='block1-txt-child1 flex-col-l'>";	
		echo"		
		<span class='block1-name ltext-102 trans-04 p-b-8'>
			".$row['cat_name']."
		</span>";
		echo"<span class='block1-info stext-102 trans-04'>".$row['cat_desc']."</span>";
		echo "</div>";
		echo"	
		<div class='block1-txt-child2 p-b-4 trans-05'>
		<div class='block1-link stext-101 cl0 trans-09'>
		Shop Now
		</div>
		</div>";

		echo "</a>";
		echo"
		</div>
		</div>
		";
	}

	echo"

		</div>
		</div>
		</div>
	";

?>

<section class="bg0 p-t-23 p-b-140">
<div class="container">
<div class="p-b-10">
<h3 class="ltext-103 cl5">
Menu Overview
</h3>
</div>
<div class="flex-w flex-sb-m p-b-52">
<div class="flex-w flex-l-m filter-tope-group m-tb-10">
<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
All Desserts / Products
</button>
</div>
<div class="flex-w flex-c-m m-tb-10">
<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
Search
</div>
</div>

<!-----------Search------------>
<div class="dis-none panel-search w-full p-t-10 p-b-15">
<form action="Product_Search.php" method="post">
<div class="bor8 dis-flex p-l-15">
<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search_product" placeholder="Search">
<button name="name_product_index" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
<i class="zmdi zmdi-search"></i>
</button>
</div>
</form>
</div>
</div>

<?php
	$printer = $x->ViewAllProduct();
	echo"
		<div class='row isotope-grid'>

	";
	while($row = $printer->fetch_assoc()){
		echo "
			<div class='col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women'>
			<div class='block2'>
			<div class='block2-pic hov-img0'>
			<img class='imagesstyle' src='../uploadimages/{$row['pro_image']}' alt='IMG-PRODUCT'>		
			<a href='product-detail.php?id={$row['pro_id']}' class='block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04'>
			Shop View
			</a>
			</div>
			<div class='block2-txt flex-w flex-t p-t-14'>
			<div class='block2-txt-child1 flex-col-l'>
			<div class='stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6'>
			{$row['pro_name']}
			</div>
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
?>
<!-----ID------>
<!-- <div class="flex-c-m flex-w w-full p-t-45">
<span  class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
Load More
</span>
</div> -->
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