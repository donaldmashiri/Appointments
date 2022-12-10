<?php include_once ('../includes/header.php');

if (isset($_GET['delete'])) {

    $delete = $_GET['delete'];

    $query = "DELETE FROM products WHERE product_id = $delete ";

    $delete_query = mysqli_query($conn, $query);
    if (!$delete_query) {
        die("Query failed" . mysqli_error($conn));
    }
}



?>

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
                        <h6 class="m-0 font-weight-bold text-white">All Products</h6>


                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope='col'>PDT-No: </th>
                                <th scope='col'>Type Of Product: </th>
                                <th scope='col'>Product Name: </th>
                                <th scope='col'>Product Description: </th>
                                <th scope='col'>Price ($): </th>
                                <th scope='col'>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

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

                                    <tr>
                                        <td>FM00<?php echo $product_id ?></td>
                                        <td><?php echo $product_type ?></td>
                                        <td><?php echo $product_name ?></td>
                                        <td><?php echo $product_description ?></td>
                                        <td>$<?php echo $price ?>.00</td>
                                        <td>
                                            <a href="edit.php?edit=<?php echo $product_id ?>" class="btn btn-info btn-sm">edit</a>
                                            <a href="products.php?delete=<?php echo $product_id ?>" class="btn btn-danger btn-sm">delete</a>
                                        </td>
                                    </tr>

                                    <?php
                                }
                            } else {
                                echo "<p class='alert alert-info'>No Products</p>";
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