<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

<?php
$approve = $_GET['approve'];
$decline = $_GET['decline'];

if (isset($_GET['approve'])) {

    $app = $_GET['approve'];
    $status = "approved";

    $query = "UPDATE appointments SET ";
    $query .= "status  = '{$status}' ";
    $query .= "WHERE app_id = $app ";

    $update_query = mysqli_query($conn, $query);
    if (!$update_query) {
        die("Query failed" . mysqli_error($conn));
    }
}

if (isset($_GET['decline'])) {

    $app = $_GET['decline'];
    $status = "declined";

    $query = "UPDATE appointments SET ";
    $query .= "status  = '{$status}' ";
    $query .= "WHERE app_id = $app ";

    $update_query = mysqli_query($conn, $query);
    if (!$update_query) {
        die("Query failed" . mysqli_error($conn));
    }
}

?>


    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-9">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                            class="card-header bg-danger py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Appointments</h6>

                    </div>
                    <!-- Card Body -->

                    <div class="card-body">
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM  appointments
        JOIN farmers ON appointments.farmer_id = farmers.farmer_id ORDER BY app_id DESC";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $app_id = $row["app_id"];
                                    $farmer_id = $row["farmer_id"];
                                    $first_name = $row["first_name"];
                                    $last_name = $row["last_name"];
                                    $title = $row["title"];
                                    $type = $row["type"];
                                    $message = $row["message"];
                                    $date = $row["date"];
                                    $status = $row["status"];
                                    ?>

                                    <div class="col-md-4 mt-2">
                                        <div class="card">
                                            <div class="card-header font-weight-bold">RefNo:00<?php echo $app_id; ?></div>
                                            <div class="card-body">
                                                <div class="mb-2 ng-binding">
                                                    <span class="font-weight-bold text-dark">Name(s) :</span> <?php echo $first_name .' '. $last_name ; ?>
                                                </div>
                                                <div class="mb-2 ng-binding">
                                                    <span class="font-weight-bold text-dark">Title :</span> <?php echo $title; ?>
                                                </div>
                                                <div class="mb-2 ng-binding">
                                                    <span class="font-weight-bold text-dark">Type :</span> <?php echo $type; ?>
                                                </div>
                                                <div class="mb-2 ng-binding bg-light">
                                                    <span class="font-weight-bold text-dark">Message :</span> <?php echo $description; ?>
                                                </div>
                                                <small class="text-muted text-info">Date: <?php echo $date; ?></small>
                                                <br>
                                                <div class="mb-2 ng-binding bg-light">
                                                    <p class="font-weight-bolder">
                                                        <?php
                                                        if ($status === "declined") {
                                                            echo "<p class='text-danger'> Status : $status </p>";
                                                        }elseif($status === "approved") {
                                                            echo "<p class='text-success'> Status : $status </p>";
                                                        }
                                                        else {
                                                            echo "<p class='text-info'> Status : $status </p>";
                                                        }
                                                        ?>
                                                    </p>
                                                </div>
                                                <div class="mb-2 ng-binding bg-light">
                                                    <a href="appointments.php?approve=<?php echo $app_id ?>" class="btn btn-success">Approve</a>
                                                    <a href="appointments.php?decline=<?php echo $app_id ?>" class="btn btn-danger">Decline</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }} ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
<?php include_once ('../includes/footer.php'); ?>