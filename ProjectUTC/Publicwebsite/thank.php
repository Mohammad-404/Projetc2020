<?php
	session_start();
	include("include/db.php");


	if (!$_SESSION['cust_id'] || !$_SESSION['cust_name']) {
		header("location: login.php");
	}



?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Shoping Cart</title>

<?php
	include("include/header.php");
?>
<div class="container py-5 d-flex justify-content-center">
<div class="row editwidth">
<div class="bread-crumb col-12 flex-w py-5">
<!---------------------------------------------------------------------->
<?php
	$query  = "SELECT * FROM orders ORDER BY order_id DESC LIMIT 1";
	
	$result = mysqli_query($conn,$query);
	$row 	= mysqli_fetch_assoc($result);
	if (isset($row['order_id'])) {
		echo"
	<div class='d-flex justify-content-center alert alert-success editwidth' role='alert'>
	  Thank You, 
	  Your ID is : <strong style=color:blue;text-wight:bold;> ( ".$row['order_id']." ) </strong>
	</div>
	";
	}else{
		echo "
			<div class='d-flex justify-content-center alert alert-success editwidth' role='alert'>
			  No Order
			</div>
		";
	}
	
?>
</div>
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

<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>

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
	function myFunction(){
		var blus = document.getElementById("+");
		var minas = document.getElementById("-");
		var results = document.getElementById("valueess");

		blus += results;
		minas -= results;
	}


</script>



</body>

<!-- Mirrored from preview.colorlib.com/theme/cozastore/shoping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 07:27:18 GMT -->
</html>