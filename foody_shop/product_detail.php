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
    require './includes/modal_login.php'
?>

<section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img rounded-0 img-fluid" id="product-detail" src="https://source.unsplash.com/600x600/?Heavy Duty Paper Wallet">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="card-img img-fluid" src="https://source.unsplash.com/600x600/?Enormous Rubber Knife" alt="Product Image 1">
                                        </div>
                                        <div class="col-4">
                                            <img class="card-img img-fluid" src="https://source.unsplash.com/600x600/?Heavy Duty Paper Computer" alt="Product Image 2">
                                        </div>
                                        <div class="col-4">
                                            <img class="card-img img-fluid" src="https://source.unsplash.com/600x600/?Rustic Marble Knife" alt="Product Image 3">
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="card-img img-fluid" src="https://source.unsplash.com/600x600/?Heavy Duty Copper Plate" alt="Product Image 4">
                                        </div>
                                        <div class="col-4">
                                            <img class="card-img img-fluid" src="https://source.unsplash.com/600x600/?Incredible Wooden Computer" alt="Product Image 5">
                                        </div>
                                        <div class="col-4">
                                            <img class="card-img img-fluid" src="https://source.unsplash.com/600x600/?Heavy Duty Bronze Coat" alt="Product Image 6">
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                                <!--Third slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="card-img img-fluid" src="https://source.unsplash.com/600x600/?Aerodynamic Wool Coat" alt="Product Image 7">
                                        </div>
                                        <div class="col-4">
                                            <img class="card-img img-fluid" src="https://source.unsplash.com/600x600/?Fantastic Concrete Bag" alt="Product Image 8">
                                        </div>
                                        <div class="col-4">
                                            <img class="card-img img-fluid" src="https://source.unsplash.com/600x600/?Fantastic Aluminum Coat" alt="Product Image 9">
                                        </div>
                                    </div>
                                </div>
                                <!--/.Third slide-->
                            <!--First slide-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">A Darkling Plain</h1>
                            <p class="h3 py-2" id="price">100.99$</p>
                            

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>By:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted">
                                        <strong>
                                            <a class="text-decoration-none" href="/shops/2">
                                                LoL
                                            </a>
                                        </strong>
                                    </p>
                                </li>
                            </ul>

                            <h6>Description:</h6>
                            <p>Hurrah for anarchy! This is the happiest moment of my life.</p>
                            <h6>Categories:</h6>
                            <div class="pb-3">
                                <a class="badge bg-warning" style="text-decoration:none; color:#fff;" href="#">Misses</a>
                            </div>
                                <form action="/cart_items" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="76kU8m3UzaRjDcW6Y8HrUVFW2IWLrAT9OfEaDWE4TR09AuXT-i42cEMSwzj8JUTPeoGFbSzrbebBmqW3D5eBGg" autocomplete="off" />
                                    <div class="row">
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item">
                                                <label class="form-label" for="cart_item_product_stock">Choose size and color</label>
                                                </li>
                                                    <select class="form-select" name="cart_item[product_stock]" id="cart_item_product_stock"><option value="" label=" "></option>
                                                        <option value="178">taupe: Size 9</option>
                                                        <option value="179">gray: Size 35</option>
                                                        <option value="180">amber: Size 8</option>
                                                    </select>
                                            </ul>
                                        </div>
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item text-right">
                                                    Quantity
                                                </li>
                                                <li class="list-inline-item"><span class="btn btn-warning" id="btn-minus">-</span></li>
                                                <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                                <li class="list-inline-item"><span class="btn btn-warning" id="btn-plus">+</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                        </div>
                                        <div class="col d-grid">
                                            <input type="hidden" name="product_id" id="product_id" value="74" autocomplete="off" />
                                            <input type="hidden" name="product_quantity" id="product_quantity" value="1" autocomplete="off" />
                                            <input type="hidden" name="shop_id" id="shop_id" value="2" autocomplete="off" />
                                            <input type="submit" name="commit" value="Add to cart" class="btn btn-warning btn-lg" data-disable-with="Added to cart" />
                                        </div>
                                    </div>
                                </form>                        
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    require './includes/footer.php';
?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>