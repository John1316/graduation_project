
<?php 
    require_once('functions/connection.php');
    include('functions/authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>Grill Valey | Register</title>

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
        <div class="about-back section-tb-padding" data-bgimg="assets/image/Grill_Valley/About/Banner2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="index.php">Home</a></li>
                                <li class="about-p"><span>Register</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- login start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                
                <div class="col">
                    <div class="register-area">
                        <div class="register-box">
                            <h1>Create account</h1>
                            <p>Please register below account detail</p>

                            <?php if(isset($register_message)) { ?>

                                <div class="alert alert-success" role="alert">
                                <?php echo $register_message; ?>
                                </div>
                            <?php  } ?>
                            <?php if(isset($user_already_existed)) { ?>

                                <div class="alert alert-danger" role="alert">
                                <?php echo $user_already_existed; ?>
                                </div>
                            <?php  } ?>

                            <form  method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-control-validation">

                                            <input type="text" id="name" name="name" placeholder="Full Name">
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-control-validation">

                                            <input type="text" id="username" name="username" placeholder="Username">
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-control-validation">

                                            <input type="email" id="email" name="email" placeholder="Email">
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-control-validation">

                                            <input type="number" id="phone" name="phone" placeholder="Phone">
                                            <small></small>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group form-control-validation">

                                            <input type="password" id="password" name="password" placeholder="Password">
                                            <small></small>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6">
                                        <div class="form-group form-control-validation">

                                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                                            <small></small>
                                        </div>
                                    </div> -->
                                    <div class="col-12 ">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-5 ">

                                                <button type="submit" name="register" class="btn btn-style1 w-100">
                                                    <span>
                
                                                        Create
                                                    </span>
                
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
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
        <script>
            
            function openSearch() {
                document.getElementById("search-overlay").style.display = "block";
            }
    
            function closeSearch() {
                document.getElementById("search-overlay").style.display = "none";
            }
            
            $(document).ready(function() {
                $("input[type='number']").attr("min","1")
            });
        </script>

    </body>

<!-- Mirrored from spacingtech.com/html/vegist-final/vegist/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Sep 2021 09:12:48 GMT -->
</html>