<?php 
include('include/db.php');
if (isset($_POST['sub'])) {
    $c_n   = $_POST["c_n"];
    $c_p   = $_POST["c_p"];
    $c_e   = $_POST["c_e"];
    $c_m   = $_POST["c_m"];
    $c_a   = $_POST["c_a"];

    $query = "
        update customer set 
               cust_name     = '$c_n',
               cust_email    = '$c_p',
               cust_password = '$c_e',
               cust_mobile   = '$c_m',
               cust_address  = '$c_a'

        where cust_id = {$_GET['id']};
    ";
    mysqli_query($conn,$query);
    header("location:manager_customer.php");
}

    $query_select_c = "select * from customer where {$_GET['id']}";
    $result         = mysqli_query($conn,$query_select_c);   
    $row            = mysqli_fetch_assoc($result);
include('include/header_admin.php');
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Update Customer Maneger</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Update Customer</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Customer Name </label>
                                                <input name="c_n" type="text" class="form-control"
                                                value="<?php echo $row['cust_name'] ?>">
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Customer Password</label>
                                                <input name="c_p" type="Password" class="form-control cc-name valid"
                                                value="<?php echo $row['cust_password'] ?>">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Customer Email</label>
                                                <input name="c_e" type="email" class="form-control cc-name valid"
                                                value="<?php echo $row['cust_email'] ?>">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Customer Mobile</label>
                                                <input name="c_m" type="number" class="form-control cc-number identified visa"
                                                value="<?php echo $row['cust_mobile'] ?>">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Customer Address</label>
                                                <input name="c_a" type="text" class="form-control cc-number identified visa"
                                                value="<?php echo $row['cust_address'] ?>">    
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="sub">
                                                    <i class="fas fa-save"></i>&nbsp;
                                                    <span id="payment-button-amount">Save</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>




    <?php include('include/footer_admin.php');?>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
