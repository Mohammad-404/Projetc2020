
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta http-equiv="Refresh" content="70; url=index.php">
 -->
<link rel="icon" type="image/png" href="images/icons/favicon.png" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">

<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">

<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">


<style>
.imgedit{
	width:370px !important;
	height:270px !important;	
}

.imagesstyle{
	width:0 auto !important;
	height:320px !important;
}

.pricesstyle{
	color:green;
}
.imgeditproduct{
	width:0 auto !important;
	height:300px !important;
}
.iconsedit{
		font-size: 25px;
}
.logonice{
	width: 100px !important; 
	border-radius: 100px 0px 100px 0px;
}
.homenice a{
	color:green !important;
}

</style>
</head>
<body class="animsition">

<header>

<div class="container-menu-desktop">


<div class="wrap-menu-desktop">
<nav class="limiter-menu-desktop container">

<a href="#" class="logo">
<img class="logonice" src="images/icons/logo1.jpg" alt="IMG-LOGO">
</a>

<div class="menu-desktop">
<ul class="main-menu">
<li class="active-menu homenice">
<a href="index.php">Home</a>
</li>
<!-- <li class="label1" data-label1="hot">
<a href="shoping-cart.php">Features</a>
</li> -->
<li>
<a href="#">About</a>
</li>
<li>
<a href="contactus.php">Contact US</a>
</li>
</ul>
</div>

<div class="wrap-icon-header flex-w flex-r-m">

<?php
$totoshales = 0;
if(isset($_SESSION['cart'])){

foreach ($_SESSION['cart'] as $k => $v) {
		$totoshales++;
}
echo"
	<div class='icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart' data-notify='".$totoshales."'>
	<i class='zmdi zmdi-shopping-cart'></i>
	</div>
";
}else{

echo"
	<div class='icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart' data-notify='0'>
	<i class='zmdi zmdi-shopping-cart'></i>
	</div>
";

}


?>

<ul class="main-menu">
<li>
	<?php


		if (isset($_SESSION['cust_name'])) {
			echo"
				<a href='#'>
					{$_SESSION['cust_name']}
				</a>

				<ul class='sub-menu'>
				<li><a href='logout.php'>Logout</a></li>
				<li><a href='profile.php'>Setting</a></li>
				</ul>
			";
		}else{
			echo "<a href='login.php'>Login</a>";
		} 
	?>
</li>
</ul>
</div>
</nav>
</div>
</div>

<div class="wrap-header-mobile">

<div class="logo-mobile">
<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
</div>

<div class="wrap-icon-header flex-w flex-r-m m-r-15">

<?php
$totoshales = 0;
if(isset($_SESSION['cart'])){

foreach ($_SESSION['cart'] as $k => $v) {
		$totoshales++;
}
echo"
	<div class='icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart' data-notify='".$totoshales."'>
	<i class='zmdi zmdi-shopping-cart'></i>
	</div>
";
}else{

echo"
	<div class='icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart' data-notify='0'>
	<i class='zmdi zmdi-shopping-cart'></i>
	</div>
";

}
?>
</div>

<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</div>
</div>

<div class="menu-mobile">

<ul class="main-menu-m">
<li>
<a href="index.php">Home</a>
<!-- <ul class="sub-menu-m">
<li><a href="index-2.html">Homepage 1</a></li>
<li><a href="home-02.html">Homepage 2</a></li>
<li><a href="home-03.html">Homepage 3</a></li>
</ul> -->
<!-- <span class="arrow-main-menu-m">
<i class="fa fa-angle-right" aria-hidden="true"></i>
</span> -->
<!-- <li>
<a href="shoping-cart.php" class="label1 rs1" data-label1="hot">Features</a>
</li> -->
<li>
<a href="about.php">About</a>
</li>
<li>
<a href="contactus.php">Contact</a>
</li>
</ul>
</div>

<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
<div class="container-search-header">
<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
<img src="images/icons/icon-close2.png" alt="CLOSE">
</button>
<form class="wrap-search-header flex-w p-l-15">
 <button class="flex-c-m trans-04">
<i class="zmdi zmdi-search"></i>
</button>
<input class="plh3" type="text" name="search" placeholder="Search...">
</form>
</div>
</div>
</header>


<div class="wrap-header-cart js-panel-cart">
<div class="s-full js-hide-cart"></div>
<div class="header-cart flex-col-l p-l-65 p-r-25">
<div class="header-cart-title flex-w flex-sb-m p-b-8">	
<span class="mtext-103 cl2">
Your Cart
</span>
<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
<i class="zmdi zmdi-close"></i>
</div>
</div>
<?php
	echo"
		<div class='header-cart-content flex-w js-pscroll'>
		<ul class='header-cart-wrapitem w-full'>
	";
	if(isset($_SESSION['cart'])){
	foreach ($_SESSION['cart'] as $k => $v) {

	$query 	= "select * from products where pro_id='$k'";
	$result = mysqli_query($conn,$query);
	$row 	= mysqli_fetch_assoc($result);
	echo"
		<li class='header-cart-item flex-w flex-t m-b-12'>
		<div class='header-cart-item-img'>
		<img src ='../uploadimages/{$row['pro_image']}' alt='IMG'>
		</div>

		<div class='header-cart-item-txt p-t-8'>
		<a href='#' class='header-cart-item-name m-b-18 hov-cl1 trans-04'>
		{$row['pro_name']}
		</a>
		<span class='header-cart-item-info'>
		$".$row['pro_price']."
		</span>
		</li>
	";
	}
}
	echo"
	</div>
	</ul>
	<div class='w-full'>
	<div class='header-cart-buttons flex-w w-full'>
	<a href='shoping-cart.php' class='flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10'>
	View Cart
	</a>
	</div>
	</div>";
?>
</div>
</div>
</div>
