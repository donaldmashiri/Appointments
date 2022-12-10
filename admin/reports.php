<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Reports</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="card text-dark bg-danger mb-3" style="max-width: 18rem;">
                                                    <div class="card-header font-weight-bolder">Farmers</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-white">
                                                            <?php
                                                            $query = "SELECT count(*) FROM farmers";
                                                            $result = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_array($result);
                                                            echo $total_savings = $row[0];
                                                            ?> Farmers
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2">
                                                <div class="card text-dark bg-danger mb-3" style="max-width: 18rem;">
                                                    <div class="card-header font-weight-bolder">Products</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-white">
                                                            <?php
                                                            $query = "SELECT count(*) FROM products";
                                                            $result = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_array($result);
                                                            echo $total_savings = $row[0];
                                                            ?> Products
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2">
                                                <div class="card text-dark bg-danger mb-3" style="max-width: 18rem;">
                                                    <div class="card-header font-weight-bolder">Orders</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-white">
                                                            <?php
                                                            $query = "SELECT count(*) FROM orders";
                                                            $result = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_array($result);
                                                            echo $total_savings = $row[0];
                                                            ?> Orders
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2">
                                                <div class="card text-dark bg-danger mb-3" style="max-width: 18rem;">
                                                    <div class="card-header font-weight-bolder">Feedbacks</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-white">
                                                            <?php
                                                            $query = "SELECT count(*) FROM feedbacks";
                                                            $result = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_array($result);
                                                            echo $total_savings = $row[0];
                                                            ?> Feedbacks
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2">
                                                <div class="card text-dark bg-danger mb-3" style="max-width: 18rem;">
                                                    <div class="card-header font-weight-bolder">Chats</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-white">
                                                            <?php
                                                            $query = "SELECT count(*) FROM communication";
                                                            $result = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_array($result);
                                                            echo $total_savings = $row[0];
                                                            ?> Chats
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col mr-2">
                                                <div class="card text-dark bg-danger mb-3" style="max-width: 18rem;">
                                                    <div class="card-header font-weight-bolder">Appointments</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title text-white">
                                                            <?php
                                                            $query = "SELECT count(*) FROM appointments";
                                                            $result = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_array($result);
                                                            echo $total_savings = $row[0];
                                                            ?> Appointments
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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