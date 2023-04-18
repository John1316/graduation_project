<?php 
    require_once('functions/connection.php');
    include('functions/details.php')

?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>Grill Valey | Meat Kebab</title>

        <!-- favicon -->
        <link rel="shortcut icon" type="assets/image/favicon" href="assets/image/Grill_Valley/Home/Logo/Logo.png">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!-- simple-line icon -->
        <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
        <!-- font-awesome icon -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
        <!-- ion icon -->
        <link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <!-- owl slider -->
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">

        <!-- swiper -->
        <link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
        <!-- animation -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- style -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style6.css">
        <link rel="stylesheet" type="text/css" href="assets/css/responsive6.css">
        <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    </head>
    <body>
    <?php include('includes/header.php') ?>

    <!-- breadcrumb start -->
    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" data-bgimglayer="assets/image/Grill_Valley/About/Banner2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="index.php">Home</a></li>
                                <li class="about-p"><span><?php echo $result_details['name'] ?>
                                </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <?php if(isset($success_reserve)) { ?>

<div class="alert alert-success" role="alert">
<?php echo $success_reserve; ?>
</div>
<?php  } ?>
        <!-- product info start -->
        <section class="section-tb-padding pro-page">
            <div class="container">
                <div class="row">
                    <div class="row pro-image">
                        <div class="col-lg-5 col-md-6 col-12 col-xs-12 larg-image">
                            <img src="images/<?php echo $result_details['image'] ?>" class="w-100" alt="">
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 col-xs-12 pro-info">
                            <h4><?php echo $result_details['name'] ?>
                            </h4>
                            
                            <div class="pro-availabale">
                                <span class="available">Availability:</span>
                                <span class="pro-instock">In stock</span>
                            </div>
                            <div class="pro-price">
                                <span class="new-price"><?php echo $result_details['price'] ?> LE</span>
                                <?php if($result_details['old_price'] != null || $result_details['old_price'] > 0) { ?>
                                <span class="old-price"><del><?php echo $result_details['old_price'] ?> LE</del></span>
                                
                                <div class="Pro-lable">
                                    <span class="p-discount">
                                        <?php echo (($result_details['price'] / $result_details['old_price']) * 100) - 100 ?> %

                                    </span>
                                </div>
                                <?php } ?>
                            </div>
                            <span class="pro-details">Hurry up! only <span class="pro-number">7</span> products left in stock!</span>
                            <p>Hanging out at Grill Valley with friends and loved ones has always been one of the best experiences ever, with delicious food, friendly service and some nice ambience. You always feel happy and comfortable!
                            </p>
                            <form method="post">

                                <!-- <div class="pro-qty">
                                    <span class="qty">Quantity:</span>
                                    <div class="plus-minus mt-0">
                                        <span>
                                            <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                            <input type="text" name="name" value="1">
                                            <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                        </span>
                                    </div>
                                </div> -->
                                <input type="password" name="visa" class="form-control" placeholder="visa" />
                                <div class="pro-btn">
                                <!-- <a href="wishlist.html" class="btn btn-style1"><i class="fa fa-heart"></i></a> -->
                                <?php if(isset($_SESSION['user_id'])) { ?>
                                <button type="submit" name="submit_reservation" class="btn btn-style1 addToCartIcon">
                                    <span>
                                        <i class="fa fa-shopping-bag"></i> Reserve
                                    </span>
                                </button>
                                <?php }else{ ?>
                                    <a href="login.php"  class="btn btn-style1 addToCartIcon">
                                    <span>
                                        <i class="fa fa-shopping-bag"></i> Reserve
                                    </span>
                                    </a>
                                    <?php } ?>
                            </form>
                            </div>
                            <!-- <div class="share">
                                <span class="share-lable">Share:</span>
                                <ul class="share-icn">
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div> 
                            <div class="pay-img">
                                <a href="checkout-1.html">
                                    <img src="assets/image/pay-image.jpg" class="img-fluid" alt="pay-image">
                                </a>
                            </div> -->
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!-- product info end -->
        <!-- product page tab start -->
        <section class="section-b-padding pro-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="mb-3">Description</h3>
                        <p>Hanging out at Grill Valley with friends and loved ones has always been one of the best experiences ever, with delicious food, friendly service and some nice ambience. You always feel happy and comfortable!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- product page tab end -->
        <!-- releted product start -->
        <section class="section-b-padding pro-releted">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Related Products</h2>
                        </div>
                        <div class="home6-tab swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                    $products_stat = "SELECT * FROM `products` WHERE `status`=1 AND `category_id`=".$result_details['category_id']." AND `id` != ".$result_details['id']." ";
                                    $products_query = mysqli_query($connection, $products_stat) or die ('Error in cat'. mysqli_error());
                                    
                                    while($result = mysqli_fetch_array($products_query)){
    
    
                                    ?>
                                <div class="swiper-slide">
                                    <div class="tab-product">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="product-style-6.html">
                                                    <img src="images/<?php 
                                            echo $result['image']
                                            ?>" alt="pro-img1" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-caption">
                                            <h3><a href="product_details.php?id=<?php 
                                            echo $result['id']
                                            ?>"><?php 
                                            echo $result['name']
                                            ?>
                                            </a></h3>
                                            
                                            <div class="pro-price">
                                                <span class="new-price"><?php 
                                            echo $result['price']
                                            ?> LE
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- releted product end -->
 
        <?php include('includes/footer.php') ?>


        <!-- jquery -->
        <script src="assets/js/modernizr-2.8.3.min.js"></script>
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <!-- bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- popper -->
        <script src="assets/js/popper.min.js"></script>
        <!-- fontawesome -->
        <script src="assets/js/fontawesome.min.js"></script>
        <!-- owl carousal -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- slick -->
        <script src="assets/js/wow.min.js"></script>
        <!-- swiper -->
        <script src="assets/js/swiper.min.js"></script>
        <!-- custom -->
        <script src="assets/js/custom.js"></script>
    </body>

<!-- Mirrored from spacingtech.com/html/vegist-final/vegist/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Sep 2021 09:13:29 GMT -->
</html>