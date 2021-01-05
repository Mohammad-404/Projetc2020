<?php 
include('include/db.php');

if (isset($_POST['sub'])) {
    $c_n   = $_POST["c_n"];
    $c_p   = $_POST["c_p"];
    $c_e   = $_POST["c_e"];
    $c_m   = $_POST["c_m"];
    $c_a   = $_POST["c_a"];
    $query = "insert into customer(cust_name,cust_email,cust_password,cust_mobile,cust_address)
             values('$c_n','$c_p','$c_e','$c_m','$c_a')";
    mysqli_query($conn,$query);
    echo '<meta http-equiv="refresh" content="0">';

}

if (isset($_POST['buttonse'])) {
    $inbox  = $_POST['searches'];
    $query  = "select * from customer where cust_id = '$inbox'";
    $result = mysqli_query($conn,$query);
    while ($row    = mysqli_fetch_assoc($result)){
        $id_search      = $row['cust_id'];
        $name_search    = $row['cust_name'];
        $email_search   = $row['cust_email'];
        $mobile_search  = $row['cust_mobile'];
        $address_search = $row['cust_address'];
    }
}

include('include/header_admin.php');

?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Customer Maneger</div>
      
                                    <!-- Search form -->
                                     
                                        <form action="" method="post">
                                          <div class="input-group mb-3">
                                          <input name="searches" type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                          <div class="input-group-append">
                                            <button name="buttonse" class="btn btn-outline-secondary" type="submit">Search</button>
                                          </div>
                                        </div>
                                    
                                    <!-- End Form -->
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Create Customer</h3>
                                        </div>
                                        <hr>
                                        <!--<form action="" method="post">--->
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Customer Name </label>
                                                <input name="c_n" type="text" class="form-control">
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Customer Password</label>
                                                <input name="c_p" type="Password" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Customer Email</label>
                                                <input name="c_e" type="email" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Customer Mobile</label>
                                                <input name="c_m" type="number" class="form-control cc-number identified visa">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Customer Address</label>
                                                <input name="c_a" type="text" class="form-control cc-number identified visa">    
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
                     <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th class="d-flex justify-content-center" rowspan="5">Result Search</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             if (isset($id_search)){
                                                    echo"<td>$id_search</td>";
                                                    echo"<td>$name_search</td>";
                                                    echo"<td>$email_search</td>";
                                                    echo"<td>$mobile_search</td>";
                                                    echo"<td>$address_search</td>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>


                                    <br><br>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query_select  = "select * from customer";
                                                $result_select = mysqli_query($conn , $query_select);
                                                while ($row=mysqli_fetch_assoc($result_select)) {
                                                    echo"<tr>";
                                                        echo "<td>{$row['cust_id']}</td>";
                                                        echo"<td>";
                                                            echo $row['cust_name'];
                                                        echo"</td>";
                                                        echo"<td>";
                                                            echo $row['cust_email'];
                                                        echo"</td>";
                                                        echo"<td>";
                                                            echo $row['cust_password'];
                                                        echo"</td>";
                                                        echo"<td>";
                                                            echo $row['cust_mobile'];
                                                        echo"</td>";
                                                        echo"<td>";
                                                            echo $row['cust_address'];
                                                        echo"</td>";
                                                        echo"<td> 
                                                           <a href='edit_customer.php?id={$row['cust_id']}'class='btn btn-primary'>Edit</a>
                                                         </td>";
                                                        echo"<td> 
                                                           <a href='delete_customer.php?id={$row['cust_id']}'class='btn btn-danger'>Delete</a>
                                                         </td>";
                                                    echo"</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
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
