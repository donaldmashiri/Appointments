<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-10">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Make Order</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM products ORDER BY product_id DESC";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $product_id = $row["product_id"];
                                    $product_type = $row["product_type"];
                                    $product_name = $row["product_name"];
                                    $product_description = $row["product_description"];
                                    $price = $row["price"];
                                    ?>
                            <div class="col-md-3">
                                <ul class="list-group">
                                    <li class="list-group-item active" aria-current="true"> <strong>Product# :</strong> 00<?php echo $product_id ?>  </li>
                                    <li class="list-group-item"><strong>Product Name :</strong> <?php echo $product_name ?>  </li>
                                    <li class="list-group-item"><strong>Type Name :</strong> <?php echo $product_type ?> </li>
                                    <li class="list-group-item"><?php echo $product_description ?> </li>
                                    <li class="list-group-item"><strong>$<?php echo $price ?> </strong></li>
                                    <form action="pay.php" method="post">
                                    <li class="list-group-item">
                                        <label for="">Quantity :</label>
                                        <input type="number" name="quantity" min="1" max="10" required>
                                    </li>
                                        <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
                                        <input type="hidden" name="price" value="<?php echo $price ?>">
                                        <li class="list-group-item"><button type="submit" class="btn btn-danger btn-block">Pay</button></li>
                                    </form>

                                </ul>
                            </div>
                             <?php
                                    }
                                } else {
                                    echo "<p class='alert alert-info'>No Products</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include_once ('../includes/footer.php'); ?>