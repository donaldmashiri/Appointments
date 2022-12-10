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
                                    <h6 class="m-0 font-weight-bold text-white">All Farmers</h6>

                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table table-sm">
                                        <thead>
                                        <tr>
                                            <th scope='col'>FM-No: </th>
                                            <th scope='col'>First Name: </th>
                                            <th scope='col'>Last Name: </th>
                                            <th scope='col'>Email: </th>
                                            <th scope='col'>Address: </th>
                                            <th scope='col'>Phone Number: </th>
                                        </tr>
                                        </thead>
                                        <tbody>

<?php
$sql = "SELECT * FROM farmers ORDER BY farmer_id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $farmer_id = $row["farmer_id"];
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $email = $row["email"];
        $address = $row["address"];
        $phonenumber = $row["phonenumber"];
     ?>

        <tr>
            <td>FM00<?php echo $farmer_id ?></td>
            <td><?php echo $first_name ?></td>
            <td><?php echo $last_name ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $address ?></td>
            <td><?php echo $phonenumber ?></td>
        </tr>

            <?php
    }
} else {
    echo "<p class='alert alert-info'>No Farmers</p>";
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