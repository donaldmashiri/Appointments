<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-info py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Edit Product</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <?php
                        $id = $_GET['edit'];

        $sql = "SELECT * FROM products WHERE product_id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $product_id = $row["product_id"];
        $product_type = $row["product_type"];
        $product_name = $row["product_name"];
        $product_description = $row["product_description"];
        $price = $row["price"];


                        if(isset($_POST['submit'])){

                            $product_id = $conn -> real_escape_string($_POST['product_id']);
                            $product_name = $conn -> real_escape_string($_POST['product_name']);
                            $product_type = $conn -> real_escape_string($_POST['product_type']);
                            $product_description = $conn -> real_escape_string($_POST['product_description']);
                            $price = $conn -> real_escape_string($_POST['price']);

                            $query = "UPDATE products SET ";
                            $query .= "product_name  = '{$product_name}', ";
                            $query .= "product_type  = '{$product_type}', ";
                            $query .= "product_description  = '{$product_description}', ";
                            $query .= "price  = {$price} ";
                            $query .= "WHERE product_id = $product_id ";

                            $update_query = mysqli_query($conn, $query);
                            if (!$update_query) {
                                die("Query failed" . mysqli_error($conn));
                            }
                            header("Location: products.php");
                        }
                        ?>


                        <form action="" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
                            <div class="form-group">
                                <label for="type">Product Type</label>
                                <select name="product_type" class="form-control" id="type">
                                    <option value="<?php echo $product_type ?>"><?php echo $product_type ?></option>
                                    <option value="hens">Hens</option>
                                    <option value="hen food">Hen Food</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Product Name</label>
                                <input type="text" name="product_name" value="<?php echo $product_name ?>" class="form-control" id="title" placeholder="Enter Product Name: " required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description of Product</label>
                                <textarea class="form-control" name="product_description" rows="3"><?php echo $product_description ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Product Price</label>
                                <input type="number" name="price" value="<?php echo $price?>" class="form-control" id="title" placeholder="Enter Product Price: " required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-info">Update</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include_once ('../includes/footer.php'); ?>