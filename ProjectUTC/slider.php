<?php
    include('include/class.php');

    $x = new Admin();

    if (isset($_POST['sub'])) {
        $text1              = $_POST['text1_slider'];
        $text2              = $_POST['text2_slider'];
        $image1             = $_FILES['image_slider']['name'];
        $tmp_image          = $_FILES['image_slider']['tmp_name'];
        $path               = "uploadimages/";
        move_uploaded_file($tmp_image,$path.$image1);

        $x->AddSlider($text1,$text2,$image1);
        echo '<meta http-equiv="refresh" content="0">';
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
                                    <div class="card-header">Add Slider</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Slider Manegar</h3>
                                        </div>
                                        <hr>
                                        <form action="slider.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">TEXT 1 </label>
                                                <input name="text1_slider" type="text" class="form-control">
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">TEXT 2</label>
                                                <input name="text2_slider" type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">IMAGE</label>
                                                <input name="image_slider" type="file" class="form-control cc-number identified visa">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block"
                                                    name="sub">
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
                                                <th>ID</th>
                                                <th>TEXT 1</th>
                                                <th>TEXT 2</th>
                                                <th>IMAGE</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                
                                                $printer = $x->ReadSlider();



                                                while ($row = $printer->fetch_assoc()) {
                                                    echo"<tr>";
                                                        echo "<td>{$row['id_slider']}</td>";
                                                        echo"<td>";
                                                            echo $row['textone'];
                                                        echo"</td>";
                                                        echo"<td>";
                                                            echo $row['texttow'];
                                                        echo"</td>";
                                                        echo"<td>";
                                                            echo "<img src=uploadimages/".$row['image']." width=100px height=100px>";
                                                        echo"</td>";

                                                        echo"<td> 
                                                           <a href='edit_slider.php?id={$row['id_slider']}'class='btn btn-primary'>Edit</a>
                                                         </td>";

                                                        echo"<td> 
                                                           <a href='delete_slider.php?id={$row['id_slider']}'class='btn btn-danger'>Delete</a>
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
