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
                        class="card-header bg-danger py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Add Product</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <?php
                        if(isset($_POST['submit'])){

                            $product_name = $conn -> real_escape_string($_POST['product_name']);
                            $product_type = $conn -> real_escape_string($_POST['product_type']);
                            $product_description = $conn -> real_escape_string($_POST['product_description']);
                            $price = $conn -> real_escape_string($_POST['price']);

                            $sql = "INSERT INTO products (product_type, product_name, product_description, price)
                            VALUES ('{$product_type}', '{$product_name}','{$product_description}', {$price})";

                            if ($conn->query($sql) === TRUE) {

                                echo "<h4 class='alert alert-success'>Product Was successfully added</h4>";

                            }else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        }
                        ?>


                        <form action="" method="post">
                            <div class="form-group">
                                <label for="type">Product Type</label>
                                <select name="product_type" class="form-control" id="type">
                                    <option value="">Select Type Of Product</option>
                                    <option value="hens">Hens</option>
                                    <option value="hen food">Hen Food</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Product Name</label>
                                <input type="text" name="product_name" class="form-control" minlength="3" id="title" placeholder="Enter Product Name: " required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description of Product</label>
                                <textarea class="form-control" name="product_description" rows="3" minlength="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Product Price</label>
                                <input type="number" name="price" class="form-control" id="title" placeholder="Enter Product Price: " min="1" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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