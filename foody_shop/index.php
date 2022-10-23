<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/home.css">
</head>
<body>
<?php
    require './includes/header.php';
    require './includes/navbar.php';
?>

<div id="template-mo-zay-hero-carousel" class="carousel carousel-dark slide mb-5" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 d-flex align-items-center">
                        <a href="#"><img class="img-fluid rounded" src="./public/img/slider1.jpg" /></a>
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center" style="height: 300px;">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-warning"><strong>Hopify</strong> eCommerce</h1>
                            <h3 class="h2">Tiny and Perfect eCommerce</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 d-flex align-items-center">
                        <a href="#"><img class="img-fluid rounded" src="./public/img/slider2.jpg" /></a>
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center" style="height: 300px";>
                        <div class="text-align-left">
                            <h1 class="h1 text-warning">Proident occaecat</h1>
                            <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                            <p>
                                You are permitted to use this Zay CSS template for your commercial websites. 
                                You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 d-flex align-items-center">
                        <a href="#"><img class="img-fluid rounded" src="./public/img/slider3.jpg" /></a>
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center" style="height: 300px;">
                        <div class="text-align-left">
                            <h1 class="h1 text-warning">Repr in voluptate</h1>
                            <h3 class="h2">Ullamco laboris nisi ut </h3>
                            <p>
                                We bring you 100% free CSS templates for your websites. 
                                If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require './includes/modal_login.php'
?>
<!-- blog member -->
<div class="container mb-5">
    <div class="row text-center">
        <div class="h3 text-warning mb-5">BEST SELLER OF THE MONTH</div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="text-center">
                <a href="#"><img alt="Rails logo" width="200" src="./public/img/product1.jpeg" class="rounded-circle mb-3 mt-3" /></a>
                <p class="text-dark">Bánh tráng cuốn</p>
                <a class="btn btn-outline-warning" href="#">Go to shop</a>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="text-center">
                <a href="#"><img alt="Rails logo" width="200" src="./public/img/product2.jpeg" class="rounded-circle mb-3 mt-3" /></a>
                <p class="text-dark">Trà sữa Vũ Tiến</p>
                <a class="btn btn-outline-warning" href="#">Go to shop</a>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="text-center">
                <a href="#"><img alt="Rails logo" width="200" src="./public/img/product3.jpeg" class="rounded-circle mb-3 mt-3" /></a>
                <p class="text-dark">Chả giò mix rau củ</p>
                <a class="btn btn-outline-warning" href="#">Go to shop</a>
            </div>
        </div>
    </div>
</div>

<?php
    require './products.php';
?>

<nav class="mb-5">
    <ul class="pagination pagination-lg justify-content-center">
        <li class="page-item">
            <a rel="prev" class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" data-remote="true" href="#">&lsaquo; Prev</a>
        </li>

        <li class="page-item active">
            <a rel="prev" class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" data-remote="true" href="#">1</a>
        </li>

        <li class="page-item">
            <a data-remote="true" class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark">2</a>
        </li>
        <li class="page-item">
            <a data-remote="true" class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark">3</a>
        </li>
        <li class="page-item">
            <a data-remote="true" class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark">4</a>
        </li>
        <li class="page-item">
            <a rel="next" class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" data-remote="true" href="#">Next &rsaquo;</a>
        </li>
    </ul>
  </nav>

<?php
    require './includes/footer.php';
?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>