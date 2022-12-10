<li class="nav-item ">
    <a class="nav-link collapsed " href="index.php"><i class="fas fa-fw fa-user"></i>Profile   </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="make_orders.php"><i class="fas fa-fw fa-magnet"></i>Make Orders   </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="your_orders.php"><i class="fas fa-fw fa-box-open"></i>Your Orders   </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="newRequest.php"><i class="fas fa-fw fa-address-book"></i>Make Appointment </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="request.php"><i class="fas fa-fw fa-money-bill"></i>Your appointments </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="comm.php"><i class="fas fa-fw fa-frown"></i>Communicate with Sable Chickens </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="comms.php"><i class="fas fa-fw fa-frown-open"></i>Talk with Others </a>
</li>

<li class="nav-item ">
    <a class="nav-link collapsed " href="index.php?logout"><i class="fas fa-fw fa-reply"></i>Logout </a>
</li>

<?php
if (isset($_GET['logout'])) {
    unset($_SESSION['farmer_id']);
    session_destroy();
    header("Refresh:1; ../home.php");
//    echo $_SESSION['user_id'];
}

?>