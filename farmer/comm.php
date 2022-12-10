<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php');
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-11 col-lg-11">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-danger py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Communication</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        if(isset($_POST['send'])){
                                            $message = $conn -> real_escape_string($_POST['message']);

                                            $sql = "INSERT INTO feedbacks (farmer_id, description, date)
                                                     VALUES ('{$_SESSION['farmer_id']}','{$message}',now())";

                                            if ($conn->query($sql) === TRUE) {
                                                echo "<h4 class='alert alert-success'>successfully Send</h4>";
                                            }else {
                                                echo "Error: " . $sql . "<br>" . $conn->error;
                                            }
                                        }
                                        ?>
                                        <form class="form" method="post" action="">
                                            <div class="form-group">
                                                <label for="">Send Message</label>
                                                <textarea name="message" id="" class="form-control" cols="5" rows="3" minlength="3" required></textarea>
                                            </div>
                                            <button type="submit" name="send"  class="btn btn-primary float-right">send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
<!--                                <div class="card-header font-weight-bold">RefNo:00--><?php //echo $req_id; ?><!--</div>-->
                                <div class="card-body">
                                    <hr>
                                    <?php

$sql = "SELECT * FROM feedbacks WHERE farmer_id = {$_SESSION['farmer_id']}";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $comm_id = $row["req_id"];
        $farmer_id = $row["farmer_id"];
        $description = $row["description"];
        $comment = $row["comment"];
        $date = $row["date"];

        ?>
                                    <div class="border border-dark p-1">
                                    <small class="text-muted text-info">Date: <?php echo $date; ?></small>
                                    <div class="mb-2 ng-binding bg-light">
                                        <span class="font-weight-bold text-dark">Message :</span> <?php echo $description; ?>
                                    </div>
                                    <small class="text-info font-weight-bold text-capitalize">Reply: <?php echo $comment; ?></small>
                                    </div>
        <?php
    }
}else{
    echo "<p class='text'>No Messages Yet </p>";
}
        ?>

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