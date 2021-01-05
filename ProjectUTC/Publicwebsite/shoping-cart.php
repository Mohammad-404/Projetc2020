<?php
	session_start();
	include("include/db.php");


	if (!$_SESSION['cust_id'] || !$_SESSION['cust_name']) {
		header("location: login.php");
	}


	/*******Here Code Inser Cart IN MYSQL START********/
	
	$Subtotal=0;
	if (isset($_SESSION['cart'])) {
	if (isset($_POST['sub'])) {

		$cust_id  	= $_SESSION['cust_id'];
		$date 		= date('Y-m-d H:i:s');
		$quer_insert   	= "insert into orders(order_date,cust_id)
		 values('$date','$cust_id')";
		$results 		= mysqli_query($conn,$quer_insert);
		$last_id 		= mysqli_insert_id($conn);	
	
	foreach ($_SESSION['cart'] as $k => $v) {

		$query 	= "select * from products where pro_id=$k";
		$result = mysqli_query($conn,$query);
		$row 	= mysqli_fetch_assoc($result);
		$total=$row['pro_price']*$v;


		$pro_id   = $k;
		$quantity = $v;
		$quer_insert   	= "insert into order_details(order_id,pro_id,qty,total)
		 values('$last_id','$pro_id','$quantity','$total')";
		 $result_insert = mysqli_query($conn,$quer_insert);
		 $row_insert = mysqli_fetch_assoc($result_insert);
	}
	 	 unset($_SESSION['cart']);
		 header("location: thank.php");
}


}
/*******END INSERT**********/



?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Shoping Cart</title>
<?php
	include("include/header.php");
?>
<div class="container py-5">
<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
<a href="index-2.html" class="stext-109 cl8 hov-cl1 trans-04">
Home
<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
</a>
<span class="stext-109 cl4">
Shoping Cart
</span>
</div>
</div>

<form method="post" action="" class="bg0 p-t-75 p-b-85">
<div class="container">
<div class="row">
<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
<div class="m-l-25 m-r--38 m-lr-0-xl">
<div class="wrap-table-shopping-cart">
<table class="table-shopping-cart">
<tr class="table_head">
<th class="column-1">Product</th>
<th class="column-2">Name Product</th>
<th class="column-3">Price</th>
<th class="column-4">Quantity</th>
<th class="column-5">Total</th>
<th class="column-6">Delete</th>
</tr>
<?php
$Subtotal = 0;
if(isset($_SESSION['cart'])){

foreach ($_SESSION['cart'] as $k => $v) {

$query 	= "select * from products where pro_id='$k'";
$result = mysqli_query($conn,$query);
$row 	= mysqli_fetch_assoc($result);

echo"
<tr class='table_row'>
<td class='column-1'>
<div class='how-itemcart1'>
<img src ='../uploadimages/{$row['pro_image']}' width='100' hight='140'/>
</div>
</td>
<td class='column-2'> {$row['pro_name']}</td>
<td class='column-3'> {$row['pro_price']}</td>
<td class='column-4'>

$v

</td>";

echo"<td class='column-5 text-success'> $";
echo $total=$row['pro_price']*$v;
$Subtotal+=$total;
echo "</td>


<td>
<a href='delete_carts.php?id=$k' class='btn btn-danger'>Delete</a>
</td>

</tr>";


	}
}


?>
</table>
</div>
</div>
</div>

<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
<h4 class="mtext-109 cl2 p-b-30">
Cart Totals
</h4>
<div class="flex-w flex-t bor12 p-b-13">
<div class="size-208">
<span class="stext-110 cl2">
Subtotal:
</span>
</div>
<div class="size-209">
<span class="mtext-110 cl2">
<?php
 	echo "$".$Subtotal;
 ?>
</span>
</div>
</div>
<button name="sub" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
Proceed to Checkout
</button>
</div>
</div>
</div>
</div>
</form>

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