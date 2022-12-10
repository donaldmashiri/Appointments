<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-9 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-danger py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Your Appointments</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th scope="col">ref no:</th>
                                <th scope="col">Title</th>
                                <th scope="col">Types Of Appointment</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
<?php

$sql = "SELECT * FROM appointments WHERE farmer_id = '{$_SESSION['farmer_id']}' ORDER BY farmer_id DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $app_id = $row["app_id"];
        $farmer_id = $row["farmer_id"];
        $title = $row["title"];
        $type = $row["type"];
        $message = $row["message"];
        $date = $row["date"];
        $status = $row["status"];


        ?>
                            <tr>
                                <th scope="row">AP0<?php echo $app_id ?></th>
                                <td><?php echo $title ?></td>
                                <td><?php echo $type ?></td>
                                <td><?php echo $message ?></td>
                                <td><?php echo $date ?></td>
                                <td class="text-info font-weight-bold"><?php echo $status ?></td>
                            </tr>
                           <?php
    }
}else{
    echo "<p class='alert alert-danger'>No appointment have been made</p>";
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