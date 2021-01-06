<?php
    include("include/db.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile User</title>
<style>
	body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263)
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    font-size: 14px
}

.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
    font-weight: 600
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}

</style>
<?php
	include('include/header.php');
	include("../include/class.php");
	$x       = new Admin();
	$id      = $_GET['id'];
	
    if (isset($_POST['sub'])) {
    $cust_name          = $_POST["name"];
    $cust_email         = $_POST["email"];
    $cust_password      = $_POST["password"];
    $cust_mobile        = $_POST["phone"];
    $cust_address       = $_POST["address"];

    $query = "
        update customer set 
               cust_name     = '$cust_name',
               cust_email    = '$cust_email',
               cust_password = '$cust_password',
               cust_mobile   = '$cust_mobile',
               cust_address  = '$cust_address'

        where cust_id = {$_GET['id']};
    ";
    mysqli_query($conn,$query);
    
}

    $result  = $x->viewcustomer($id);
	$row	 = $result->fetch_assoc();

?>

<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
<h2 class="ltext-105 cl0 txt-center">
Profile User
</h2>
</section>


<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">

                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600">
                                <?php 

                                	echo $row['cust_name'];
                                ?>
                                	
                                </h6>
                                 <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                <form action="" method="post">
                                    <div class="col-lg-12 col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <input type="text" name="email" value="<?php echo $row['cust_email'];?>" 
                                        class="text-muted f-w-400">
                                    </div>
                                    <div class="col-lg-12 col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <input type="text" name="phone" value="<?php echo $row['cust_mobile'];?>" 
                                        class="text-muted f-w-400">
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6">
                                        <p class="m-b-10 f-w-600">Password</p>
                                        <input type="text" name="password" value="<?php echo $row['cust_password'];?>" class="text-muted f-w-400">
                                    </div>
                                    <div class="col-lg-12 col-sm-6">
                                        <p class="m-b-10 f-w-600">Address</p>
                                        <input type="text" name="address" value="<?php echo $row['cust_address'];?>" class="text-muted f-w-400">
                                    </div>


                              	  <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>

                                    <div class="col-lg-12 col-sm-6">
                                        <p class="m-b-10 f-w-600">Name</p>
                                        <input type="text" name="name" value="<?php echo $row['cust_name'];?>" class="text-muted f-w-400">
                                    </div>

                                    <div class="col-lg-12 col-sm-6">
                                        <br>
                                        <input type="submit" name="sub" value="Update"  class="btn btn-warning">
                                    </div>                                    
                                </form>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
	include('include/footer.php');
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