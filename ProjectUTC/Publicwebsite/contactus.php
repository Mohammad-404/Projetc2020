<?php
include("../include/class.php");

$x = new Admin();
if (isset($_POST['sub'])) {
	$email   = $_POST['email'];
	$message = $_POST['msg'];
	$result = $x->contact($email,$message);
	$error = "Successfully Sent Message";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Contact</title>

<?php
	include("include/header.php");
?>
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/hahah.jpg');">
<h2 class="ltext-105 cl0 txt-center">
Contact US
</h2>
</section>

<section class="bg0 p-t-104 p-b-116">
<div class="container">
<div class="flex-w flex-tr">
<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
<form action="" method="post">
<h4 class="mtext-105 cl2 txt-center p-b-30">
Send Us A Message
</h4>
<?php
	if (isset($error)) {
		echo"
		<div class='alert alert-primary' role='alert'>
		  ".$error."
		</div>
		";	
	}
?>
<div class="bor8 m-b-20 how-pos4-parent">
<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
</div>
<div class="bor8 m-b-30">
<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="How Can We Help?"></textarea>
</div>
<input type="Submit" value="Send" name="sub" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
</form>
</div>
<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
<div class="flex-w w-full p-b-42">
<span class="fs-18 cl5 txt-center size-211">
<span class="lnr lnr-map-marker"></span>
</span>
<div class="size-212 p-t-2">
<span class="mtext-110 cl2">
Address
</span>
<p class="stext-115 cl6 size-213 p-t-18">
AMMAN, ABDALLAH GOSHEH STREET, RA'ED KHALAF COMPLEX.
</p>
</div>
</div>
<div class="flex-w w-full p-b-42">
<span class="fs-18 cl5 txt-center size-211">
<span class="lnr lnr-phone-handset"></span>
</span>
<div class="size-212 p-t-2">
<span class="mtext-110 cl2">
Lets Talk
</span>
<p class="stext-115 cl1 size-213 p-t-18">
(+962) 79 - 8601 - 716
</p>
</div>
</div>
<div class="flex-w w-full">
<span class="fs-18 cl5 txt-center size-211">
<span class="lnr lnr-envelope"></span>
</span>
<div class="size-212 p-t-2">
<span class="mtext-110 cl2">
Sale Support
</span>
<p class="stext-115 cl1 size-213 p-t-18">
<a href="#" class="__cf_email__" data-cfemail="0f6c60617b6e6c7b4f6a776e627f636a216c6062">[sales@azkahd.com]</a>
</p>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="js/map-custom.js"></script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/cozastore/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 07:27:22 GMT -->
</html>