<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-danger py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Your Orders</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-bordered table-sm">
                            <thead class="bg-secondary text-white">
                            <tr>
                                <th scope="col">Order#:</th>
                                <th scope="col">Product_id</th>
                                <th scope="col">Product Details</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Amount Paid ($)</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Order Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $sql = "SELECT * FROM orders JOIN products ON products.product_id = orders.product_id
                                JOIN farmers ON farmers.farmer_id = orders.farmer_id WHERE orders.farmer_id = {$_SESSION['farmer_id']} ";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {

                                    $order_id = $row["order_id"];
                                    $farmer_id = $row["farmer_id"];
                                    $product_id = $row["product_id"];
                                    $product_name = $row["product_name"];
                                    $product_type = $row["product_type"];
                                    $product_description = $row["product_description"];
                                    $price = $row["price"];
                                    $quantity = $row["quantity"];
                                    $amount = $row["amount"];
                                    $status = $row["status"];
                                    $date = $row["date"];

                                    ?>
                                    <tr>
                                        <th scope="row">Order00<?php echo $order_id ?></th>
                                        <td>PDT00<?php echo $product_id ?></td>
                                        <td>
                                            <ul class="list-group font-weight-bold list-group-horizontal-sm">
                                                <li class="list-group-item"><?php echo $product_name ?></li>
                                                <li class="list-group-item">(<?php echo $product_type ?>)</li>
                                                <li class="list-group-item">$<?php echo $price ?></li>
                                            </ul>
                                            <ul class="list-group font-weight-bold">
                                                <li class="list-group-item"><?php echo $product_description ?></li>
                                            </ul>
                                        </td>
                                        <td><?php echo $quantity ?></td>
                                        <td>$<?php echo $amount ?></td>
                                        <td><?php echo $date ?></td>
                                        <td class="text-success font-weight-bold"><?php echo $status ?></td>
                                    </tr>
                                    <?php
                                }
                            }else{
                                echo "<p class='alert alert-danger'>You Have No Orders</p>";
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include_once ('../includes/footer.php'); ?>