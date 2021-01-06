<?php
 session_start();
 if(!$_SESSION['admin_id'] || !$_SESSION['admin_fullname'] || !$_SESSION['admin_email'] || !$_SESSION['admin_image']){
     header("location: ../projectUTC/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="0">
     -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <style type="text/css">
        .imgnive{
            width: 120px;
            height: 60px;
        }
        .logolarge{

            width: 160px;
            height: 70px;
            border-radius: 100px 0px 100px 0px;   
        }


    </style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="images/icon/logo1.jpg" class="imgnive" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
							</a>
						</li>
						<li>
                            <a href="admin_manegar.php">
                                <i class="fas fa-chart-bar"></i>Admin Manegar
                            </a>
                        </li>
                        <li>
                            <a href="manegar_category.php">
                                <i class="fas fa-chart-bar"></i>Manege Category
                            </a>
                        </li>

                        <li>
                            <a href="manegar_product.php">
                                <i class="fas fa-chart-bar"></i>Manege Product
                            </a>
                        </li>
                        <li>
                            <a href="manager_customer.php">
                                <i class="fas fa-chart-bar"></i>Manege Customer
                            </a>
                        </li>

                        <li>
                            <a href="orders.php">
                                <i class="fas fa-chart-bar"></i>Orders
                            </a>
                        </li>


                        <li>
                            <a href="slider.php">
                                <i class="fas fa-chart-bar"></i>Slider
                            </a>
                        </li>


                        <li>
                            <a href="contact.php">
                                <i class="fas fa-chart-bar"></i>Contact
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo1.jpg" class="logolarge" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard Admin
							</a>
						</li>
						<li>
                            <a href="admin_manegar.php">
                                <i class="fas fa-chart-bar"></i>Admin Manegar
                            </a>
                        </li>
                        <li>
                            <a href="manegar_category.php">
                                <i class="fas fa-chart-bar"></i>Manege Category
                            </a>
                        </li>

                        <li>
                            <a href="manegar_product.php">
                                <i class="fas fa-chart-bar"></i>Manege Product
                            </a>
                        </li>
                        <li>
                            <a href="manager_customer.php">
                                <i class="fas fa-chart-bar"></i>Manege Customer
                            </a>
                        </li>
                        <li>
                            <a href="orders.php">
                                <i class="fas fa-chart-bar"></i>Orders
                            </a>
                        </li>

                        <li>
                            <a href="slider.php">
                                <i class="fas fa-chart-bar"></i>Slider
                            </a>
                        </li>
                        
                        <li>
                            <a href="contact.php">
                                <i class="fas fa-chart-bar"></i>Contact
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="post">
                                
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
											<?php
											echo "
												<img src='../ProjectUTC/uploadimages/".$_SESSION['admin_image']."' alt='Not Found Imgae' />
											";
											?>
										</div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">
											<?php 
											echo $_SESSION['admin_fullname'];
											?>
											</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
												<?php
													echo "
													<img src='../ProjectUTC/uploadimages/".$_SESSION['admin_image']."' alt='Not Found Imgae' />
													";
												?>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">
														<?php 
															echo $_SESSION['admin_fullname'];
														?>
														</a>
                                                    </h5>
                                                    <span class="email">
													<?php 
														echo $_SESSION['admin_email'];
													?>													
													</span>
                                                </div>
                                            </div>
                  
                                            <div class="account-dropdown__footer">
                                                <a href="include/logout.php">
                                                   <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->