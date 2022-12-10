
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Sable Chickens</title>
    <link rel="icon" type="image/x-icon" href="img/sable.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="css/boot.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/sable.png" width="60" height="60" class="rounded-circle" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <h4 class="text-white">Supply chain integration system For Sable Chickens</h4>

        </div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" target="_blank" href="account.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" target="_blank" href="home.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" target="_blank" href="admin">Adminstration</a>
            </li>
        </ul>
    </nav>
</header>

<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="img/chic1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>We are here to help.</h1>
                        <p><a class="btn btn-lg btn-primary" href="account.php" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="img/chic1.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>You dont want insects</h1>
                        <p><a class="btn btn-lg btn-primary" href="account.php" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="img/chic1.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p><a class="btn btn-lg btn-primary" href="account.php" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
      <div class="row bg-danger m-2">
          <h3 class="text-center text-white">Order Your Product</h3>
      </div>
        <div class="row">

            <div class="col-lg-4">
                <img class="rounded" src="img/chic2.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Brahma chicken</h2>
                <h4 class="text-info">$3.00</h4>
                <p><a class="btn btn-secondary" href="account.php" role="button">View</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded" src="img/chic2.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Ayam Kampong</h2>
                <h4 class="text-info">$4.00</h4>
                <p><a class="btn btn-secondary" href="account.php" role="button">View</a></p>
            </div>
            <div class="col-lg-4">
                <img class="rounded" src="img/chic2.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Sessex chicken</h2>
                <h4 class="text-info">$3.50</h4>
                <p><a class="btn btn-secondary" href="account.php" role="button">View</a></p>
            </div>
        </div><!-- /.row -->

        <!-- FOOTER -->
        <footer class="container">
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
        </footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>
</html>
