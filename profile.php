<?php 
 require_once('functions/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>Grill Valey | Profile</title>

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
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/assets/css/all.min.css">
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
                                    <li class="about-p"><span>Profile</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- order history start -->
        <section class="order-histry-area section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="order-history profile_area row justify-content-center align-items-start">
                            
                            <div class="profile-form col-md-8">
                                <?php 

                                    $orders = "SELECT reservation.id, reservation.created_at , products.name AS product_name , products.price AS product_price , reservation.status from `reservation` INNER JOIN products on reservation.product_id = products.id where user_id= ".$_SESSION['user_id']."";
                                    $orders_query = mysqli_query($connection, $orders);

                                    
                                    while($result = mysqli_fetch_array($orders_query)){
                                        if($result['status'] == 'pending'){ 
                                            $status ="<span class='badge badge-dot bg-warning me-1'>Pending</span>";
                                        }elseif($result['status'] == 'accepted'){
                                            $status ="<span class='badge bg-success me-1'>Accepeted</span>";
                                        }
                                        else{
                                            $status ="<span class='badge bg-danger me-1'>Rejected</span>";
                                        }
                                    ?>
                                    <div class="row no-gutters my-3">
                                        <div class="col-12">
                                            <div class="card card-header-profile shadow-5 bg-primary">
                                                <div class="card-body">
                                                    <div class="d-flex no-gutters justify-content-between text-white">
                                                        <p class="mb-0">Date: <?php echo $result['created_at'] ?></p>
                                                        <p class="mb-0">ID:  #<?php echo $result['id'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card shadow-5">
                                                <div class="card-body">
                                                    
                                                    <div class="d-flex no-gutters justify-content-between">
                                                        <h5 class="card-title">Name:</h5>
                                                        <p class="card-text text-danger"><?php echo $result['product_name'] ?> </p>
                                                    </div>
                                                    <div class="d-flex no-gutters justify-content-between">
                                                        <h5 class="card-title">Status:</h5>
                                                        <p class="card-text"><?php echo $status; ?> </p>
                                                    </div>
                                                    <div class="d-flex no-gutters justify-content-between">
                                                        <h5 class="card-title text-danger">Total:</h5>
                                                        <p class="card-text text-success"><?php echo $result['product_price'] ?> EGP</p>
                                                    </div>
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
        <!-- order history end -->
        <?php include('includes/footer.php') ?>


        <!-- back to top start -->
        <a href="javascript:void(0)" class="scroll" id="top">
            <span><i class="fa fa-angle-double-up"></i></span>
        </a>
        <!-- back to top end -->
        <div class="mm-fullscreen-bg"></div>
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

<!-- Mirrored from spacingtech.com/html/vegist-final/vegist/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Sep 2021 09:13:31 GMT -->
</html>