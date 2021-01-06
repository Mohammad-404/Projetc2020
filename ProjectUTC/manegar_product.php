<?php 
include('include/db.php');

   if(isset($_POST['submit']))
    { 
        $product_image      = $_FILES['pro_image']['name'];
        $tmp_name           = $_FILES['pro_image']['tmp_name'];

        $product_image1     = $_FILES['prod_image1']['name'];
        $tmp_name1          = $_FILES['prod_image1']['tmp_name'];
        
        $product_image2     = $_FILES['prod_image2']['name'];
        $tmp_name2          = $_FILES['prod_image2']['tmp_name'];
        
        $path                = 'uploadimages/';
        $path1               = 'uploadimages/';
        $path2               = 'uploadimages/';

        move_uploaded_file($tmp_name,$path.$product_image);
        move_uploaded_file($tmp_name1,$path1.$product_image1);
        move_uploaded_file($tmp_name2,$path2.$product_image2);

        $name           = $_POST['pro_name'];
        $cat_name       = $_POST['cat'];
        $Description    = $_POST['pro_desc'];
        $pro_price      = $_POST['pro_price'];
        $pro_qty        = $_POST['pro_qty'];

        $des_price      = $_POST['des_price'];
        $net_crabs      = $_POST['net_crabs'];
        $calories       = $_POST['calories'];
        $good_fat       = $_POST['good_fat'];
        $trans_fat      = $_POST['trans_fat'];
        $potassium      = $_POST['potassium'];
        $added_suger    = $_POST['added_suger'];
        $fibres         = $_POST['fibres'];
        $protein        = $_POST['protein'];
        $calcium        = $_POST['calcium'];
        $irons          = $_POST['irons'];
        $vitamin        = $_POST['vitamin'];

         $query_select = "select cat_id from cetegory where cat_name ='$cat_name'";
         $result       =  mysqli_query($conn,$query_select);
         $row          =  mysqli_fetch_assoc($result);
         $cat          =  $row['cat_id']; 

         
   $query = "insert into products(pro_name,pro_desc,pro_price,qty,pro_image,pro_image1,pro_image2,
    des_price,net_crabs,calories,good_fat,trans_fat,potassium,added_suger,fibres,protein,calcium,
    irons,vitamin,cat_id)
        values('$name','$Description','$pro_price','$pro_qty','$product_image','$product_image1','$product_image2',
        '$des_price','$net_crabs','$calories','$good_fat','$trans_fat','$potassium','$added_suger','$fibres', 
        '$protein','$calcium','$irons','$vitamin','$cat')";

        mysqli_query($conn,$query);
    //die;
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
                        <div class="card-header">product Maneger</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create product</h3>
                            </div>
                            <hr>
                                        <form action="" method="post" enctype="multipart/form-data" >
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Product Name </label>
                                             <input name="pro_name"  type="text" class="form-control">
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Product Description</label>
                                                <input name="pro_desc"    type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Product Price</label>
                                                <input name="pro_price"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Description Price</label>
                                                <input name="des_price"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Product qty</label>
                                                <input name="pro_qty"  type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Net Crabs</label>
                                                <input name="net_crabs"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Calories</label>
                                                <input name="calories"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Good fat</label>
                                                <input name="good_fat"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Trans Fat</label>
                                                <input name="trans_fat"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Potassium</label>
                                                <input name="potassium"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Added Suger</label>
                                                <input name="added_suger"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Fibres</label>
                                                <input name="fibres"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Protein</label>
                                                <input name="protein"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Calcium</label>
                                                <input name="calcium"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Irons</label>
                                                <input name="irons"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Vitamin A</label>
                                                <input name="vitamin"   type="text" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                               <div class="form-group">
                                                <label for="cc-number" class="control-labelmb-1">Category
                                                </label>
                                              
                                                <select name="cat">

                                                <?php
                                                    $query = "select * from cetegory";
                                                    $result = mysqli_query($conn,$query);
                                                    while($row = mysqli_fetch_assoc($result)){
                                                    echo "<option> ".$row['cat_name']." </option>";
                                                    }
                                                ?>
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Product image</label>
                                                <input name="pro_image"  type="file" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Product image</label>
                                                <input name="prod_image1"  type="file" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Product image</label>
                                                <input name="prod_image2"  type="file" class="form-control cc-name valid">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>


                                            <div>
                                                <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fas fa-save"></i>&nbsp;
                                                    <span id="payment-button-amount">Save</span>
                                                </button>
                                            </div>
                                        </form>
                                  <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Description Price</th>


                                <th>Net Crabs</th>
                                <th>Calories</th>
                                <th>Good Fat</th>
                                <th>Trans Fat</th>
                                <th>Potassium</th>
                                <th>Added Suger</th>
                                
                                <th>Fibres</th>
                                <th>Protein</th>
                                <th>Calcium</th>
                                <th>Irons</th>
                                <th>Vitamin</th>

                                <th>Image</th>
                                <th>Image1</th>
                                <th>Image2</th>
                                <th>cat_ID</th>
                                <th>cat_Name</th>
                                <th>qty</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php

                                 $query = "
                                 select products.pro_id,products.pro_name,products.pro_desc,
                                 products.pro_price,products.pro_image,products.pro_image1,products.pro_image2,products.qty,products.des_price,products.net_crabs,
                                 products.calories,
                                 products.good_fat,products.trans_fat,products.potassium,products.added_suger,
                                 products.fibres,products.protein,products.calcium,products.irons,products.vitamin,cetegory.cat_id,
                                 cetegory.cat_name  from products inner join cetegory ON products.cat_id=cetegory.cat_id";
                                  

                                 $result = mysqli_query($conn,$query);
                                 while($row = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>{$row['pro_id']}</td>";
                                echo "<td>{$row['pro_name']}</td>";
                                echo "<td>{$row['pro_desc']}</td>";
                                echo "<td>{$row['pro_price']}</td>";
                                echo "<td>{$row['des_price']}</td>";

                                echo "<td>{$row['net_crabs']}</td>";
                                echo "<td>{$row['calories']}</td>";
                                echo "<td>{$row['good_fat']}</td>";
                                echo "<td>{$row['trans_fat']}</td>";
                                echo "<td>{$row['potassium']}</td>";
                                echo "<td>{$row['added_suger']}</td>";
                                echo "<td>{$row['fibres']}</td>";
                                echo "<td>{$row['protein']}</td>";

                                echo "<td>{$row['calcium']}</td>";
                                echo "<td>{$row['irons']}</td>";
                                echo "<td>{$row['vitamin']}</td>";

                                
                                echo "<td><img src='uploadimages/{$row['pro_image']}' width='100' height='140'></td>";
                                echo "<td><img src='uploadimages/{$row['pro_image1']}' width='100' height='140'></td>";
                                echo "<td><img src='uploadimages/{$row['pro_image2']}' width='100' height='140'></td>";
                                echo "<td>{$row['cat_id']}</td>";
                                echo "<td>{$row['cat_name']}</td>";
                                echo "<td>{$row['qty']}</td>";
                                echo "<td><a href='update_products.php?id={$row['pro_id']}' class='btn btn-primary'>Edit</a></td>";

                                echo "<td><a href='delete_products.php?id={$row['pro_id']}' class='btn btn-danger'>Delete</a></td>";
                                echo "</tr>";
                            }

                          ?>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
    </div>

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
