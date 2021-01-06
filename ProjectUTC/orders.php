<?php
    include('include/db.php');

    include('include/header_admin.php');
?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Orders Maneger</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Orders Maneger</h3>
                                        </div>
                                        <hr>
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
                                                <th>Order ID</th>
                                                <th>Customer ID</th>
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Quentity</th>
                                                <th>Total</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
            <?php
                $query_select  = "select * from orders,order_details where 
                orders.order_id = order_details.order_id";
                //NOTE NEW QUERY SAME AS :select * from orders inner join order_details on orders.order_id = order_details.order_id;

                $result_select = mysqli_query($conn , $query_select);
                 while ($row=mysqli_fetch_assoc($result_select)) {
                echo"<tr>";
                echo "<td>{$row['order_id']}</td>";
                echo"<td>";
                echo $row['cust_id'];
                echo"</td>";
                echo"<td>";
                echo $row['pro_id'];
                echo"</td>";
                echo"<td>";
                echo $row['pro_name'];
                echo"</td>";
                echo"<td>";
                echo $row['qty'];
                echo"</td>";
                echo"<td>";
                echo "$".$row['total'];
                echo"</td>";
                echo"<td> 
                        <a href='delete_order.php?id={$row['order_details_id']}'class='btn btn-danger'>Done</a>
                    </td>";
                echo"</tr>";
                }
            ?>
                        </tbody>
                        </table>
                        <br><br><br>
                        <table class="table table-borderless table-data3">
                        <thead>
                        <tr>
                        <th>Order ID</th>
                        <th>Quntities</th>
                        <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query_select  = "
                                SELECT order_id,SUM(total) AS AllTotal,SUM(qty) AS AllQty from order_details GROUP BY order_id
                                ";
                                //NOTE : COUNT ,MIN, MAX, ORDER BY ,DESC ,ASC GROUP BY, SUM

                                $result_select = mysqli_query($conn , $query_select);
                                while($row=mysqli_fetch_assoc($result_select)){   
                                echo"<tr>";
                                echo "<td>{$row['order_id']}</td>";
                                
                                echo "<td>";
                                echo $row['AllQty'];
                                echo"</td>";

                                echo "<td>";
                                echo $row['AllTotal'];
                                echo"</td>";

                               
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
