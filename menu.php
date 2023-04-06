
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
        <title>Grill Valey | Menu</title>

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
                                    <li class="about-p"><span>Menu</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- grid-list start -->
        <section class="products section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="all-filter">
                            <div class="categories-page-filter">
                                <h4 class="filter-title">Categories</h4>
                                <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Categories </span><i class="fa fa-angle-down"></i></a>
                                <ul class="all-option collapse" id="category-filter">
                                <li class="grid-list-option" style="cursor: pointer;">
                                        <a href="menu.php" ><label for="Variety">All cat
                                            </a>
                                    </li>
                                    <?php

                                        $categories_stat = "SELECT * FROM `category`";
                                        $category_query = mysqli_query($connection, $categories_stat) or die ('Error in cat'. mysqli_error());

                                        while($result = mysqli_fetch_array($category_query)){


                                    ?>
                                    <li class="grid-list-option" style="cursor: pointer;">
                                        <a href="menu.php?category_id=<?php echo $result['id'] ?>" ><label for="Variety"><?php echo $result['name']; ?>
                                            </a>
                                    </li>
                                    <?php 
                                        }
                                        ?>
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        
                        <div class="grid-list-area">
                            <!-- <div class="grid-list-select border-bottom pb-3">
                                <h4>Menu</h4>
                                <input type="text" class="form-control w-200" placeholder="Search ...">
                                <ul class="grid-list-selector">
                                    <li>
                                        <select>
                                            <option>Featured</option>
                                            <option>Best selling</option>
                                            <option>Alphabetically,A-Z</option>
                                            <option>Alphabetically,Z-A</option>
                                            <option>Price, low to high</option>
                                            <option>Price, high to low</option>
                                            <option>Date new to old</option>
                                            <option>Date old to new</option>
                                        </select>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="list-product">
                                <?php
                                if(isset($_GET['category_id'])){
                                    $products_stat = "SELECT * FROM `products` where `category_id` = ".$_GET['category_id']." ";
                                    $products_query = mysqli_query($connection, $products_stat) or die ('Error in cat'. mysqli_error());
    
                                    while($result = mysqli_fetch_array($products_query)){
    
    
                                    ?>
                                    <div class="list-items">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a>
                                                    <img class="w-100 h-250" src="images/<?php echo $result['image'] ?>" alt="pro-img1">
                                                    <!-- <img class="w-100 h-250 additional-image" src="assets/image/Grill_Valley/Home/Menu/Variety Platters/1.jpg" alt="additional image"> -->
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product_details.php"><?php echo $result['name'] ?></a></h3>
                                            <!-- <p class="list-description"><?php echo $result['description'] ?></p> -->
                                            
                                            <div class="pro-price">
                                                <span class="new-price"><?php echo $result['price'] ?> LE </span>
                                            </div>
                                            <div class="pro-icn">
    
                                                <!-- <a data-bs-toggle="modal" data-bs-target="#quickView" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a> -->
                                                <a href="product_details.php?id=<?php echo $result['id'] ?>"  class="w-c-q-icn" ><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                
                                }else{
                                    
                                    $products_stat = "SELECT * FROM `products`";
                                    $products_query = mysqli_query($connection, $products_stat) or die ('Error in cat'. mysqli_error());
                                    
                                    while($result = mysqli_fetch_array($products_query)){
    
    
                                    ?>
                                    <div class="list-items">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a>
                                                    <img class="w-100 h-250" src="images/<?php echo $result['image'] ?>" alt="pro-img1">
                                                    <!-- <img class="w-100 h-250 additional-image" src="assets/image/Grill_Valley/Home/Menu/Variety Platters/1.jpg" alt="additional image"> -->
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="product_details.php"><?php echo $result['name'] ?></a></h3>
                                            <!-- <p class="list-description"><?php echo $result['description'] ?></p> -->
                                            
                                            <div class="pro-price">
                                                <span class="new-price"><?php echo $result['price'] ?> LE </span>
                                            </div>
                                            <div class="pro-icn">
    
                                                <!-- <a data-bs-toggle="modal" data-bs-target="#quickView" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a> -->
                                                <a href="product_details.php?id=<?php echo $result['id'] ?>"  class="w-c-q-icn" ><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                }
                                    ?>
                                
                            

                                <!-- <div class="list-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product_details.php">
                                                <img class="w-100 h-250" src="assets/image/Grill_Valley/Home/Menu/Soups/1.jpg" alt="pro-img1">
                                                <img class="w-100 h-250 additional-image" src="assets/image/Grill_Valley/Home/Menu/Soups/1.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-20%</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product_details.php">Pigeons With Vermicelli Soup
                                        </a></h3>
                                        <p class="list-description">Lorem Ipsum is simply dummy text of the. Lorem Ipsum has industry'sever since the 1500s, when an unknown printer took a galley of type and</p>
                                        
                                        <div class="pro-price">
                                            <span class="new-price">15 LE
                                            </span>
                                            <span class="old-price"><del>25 LE</del></span>
                                        </div>
                                        <div class="pro-icn">

                                            <a data-bs-toggle="modal" data-bs-target="#quickView" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="product_details.php"  class="w-c-q-icn" ><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product_details.php">
                                                <img class="w-100 h-250" src="assets/image/Grill_Valley/Home/Menu/Main Platters/1.jpg" alt="pro-img1">
                                                <img class="w-100 h-250 additional-image" src="assets/image/Grill_Valley/Home/Menu/Main Platters/1.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product_details.php">Stuffed Pigeon with Grits
                                        </a></h3>
                                        <p class="list-description">Lorem Ipsum is simply dummy text of the. Lorem Ipsum has industry'sever since the 1500s, when an unknown printer took a galley of type and</p>
                                        
                                        <div class="pro-price">
                                            <span class="new-price">72 LE
                                            </span>
                                        </div>
                                        <div class="pro-icn">

                                            <a data-bs-toggle="modal" data-bs-target="#quickView" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="product_details.php"  class="w-c-q-icn" ><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product_details.php">
                                                <img class="w-100 h-250" src="assets/image/Grill_Valley/Home/Menu/Grilled Chicken/1.jpg" alt="pro-img1">
                                                <img class="w-100 h-250 additional-image" src="assets/image/Grill_Valley/Home/Menu/Grilled Chicken/1.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-12%</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product_details.php">Stuffed Chicken
                                        </a></h3>
                                        <p class="list-description">Lorem Ipsum is simply dummy text of the. Lorem Ipsum has industry'sever since the 1500s, when an unknown printer took a galley of type and</p>
                                        
                                        <div class="pro-price">
                                            <span class="new-price">92 LE
                                            </span>
                                        </div>
                                        <div class="pro-icn">

                                            <a data-bs-toggle="modal" data-bs-target="#quickView" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="product_details.php"  class="w-c-q-icn" ><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product_details.php">
                                                <img class="w-100 h-250" src="assets/image/Grill_Valley/Home/Menu/Meat Corner/1.jpg" alt="pro-img1">
                                                <img class="w-100 h-250 additional-image" src="assets/image/Grill_Valley/Home/Menu/Meat Corner/1.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product_details.php">Meat Kebab
                                        </a></h3>
                                        <p class="list-description">Lorem Ipsum is simply dummy text of the. Lorem Ipsum has industry'sever since the 1500s, when an unknown printer took a galley of type and</p>
                                        
                                        <div class="pro-price">
                                            <span class="new-price">220 LE
                                            </span>
                                        </div>
                                        <div class="pro-icn">

                                            <a data-bs-toggle="modal" data-bs-target="#quickView" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="product_details.php"  class="w-c-q-icn" ><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product_details.php">
                                                <img class="w-100 h-250" src="assets/image/Grill_Valley/Home/Menu/Variety Platters/2.jpg" alt="pro-img1">
                                                <img class="w-100 h-250 additional-image" src="assets/image/Grill_Valley/Home/Menu/Variety Platters/2.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-10%</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product_details.php">Basmati Rice With Khalta And Nuts
                                        </a></h3>
                                        <p class="list-description">Lorem Ipsum is simply dummy text of the. Lorem Ipsum has industry'sever since the 1500s, when an unknown printer took a galley of type and</p>
                                        
                                        <div class="pro-price">
                                            <span class="new-price">55 LE
                                            </span>
                                        </div>
                                        <div class="pro-icn">

                                            <a data-bs-toggle="modal" data-bs-target="#quickView" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="product_details.php"  class="w-c-q-icn" ><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product_details.php">
                                                <img class="w-100 h-250" src="assets/image/Grill_Valley/Home/Menu/Soups/2.jpg" alt="pro-img1">
                                                <img class="w-100 h-250 additional-image" src="assets/image/Grill_Valley/Home/Menu/Soups/2.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="product_details.php">Orzo Soup
                                        </a></h3>
                                        <p class="list-description">Lorem Ipsum is simply dummy text of the. Lorem Ipsum has industry'sever since the 1500s, when an unknown printer took a galley of type and</p>
                                        
                                        <div class="pro-price">
                                            <span class="new-price">14 LE
                                            </span>
                                        </div>
                                        <div class="pro-icn">

                                            <a data-bs-toggle="modal" data-bs-target="#quickView" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="product_details.php"  class="w-c-q-icn" ><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-all-page">
                    <span class="page-title">Showing 1 - 17 of 17 result</span>
                    <div class="page-number">
                        <a href="grid-list.html" class="active">1</a>
                        <a href="grid-list-2.html">2</a>
                        <a href="grid-list-3.html">3</a>
                        <a href="grid-list-4.html">4</a>
                        <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- grid-list start -->
        <!-- quick veiw start -->
        <section class="quick-view">
            <div class="modal fade" id="quickView" tabindex="-1" aria-labelledby="quickView" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="quickView">Product quickview</h5>
                            <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="quick-veiw-area row align-items-center">
                            <div class="quick-image">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="assets/image-1">
                                        <a href="javascript:void(0)" class="long-img w-100">
                                            <img src="assets/image/Grill_Valley/Home/Menu/Meat Corner/1.jpg" class="w-100" alt="assets/image">
                                        </a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="quick-caption">
                                <h4>Meat Kebab
                                </h4>
                                <div class="quick-price">
                                    <span class="new-price">220 LE</span>
                                    <span class="old-price"><del>250 LE</del></span>
                                </div>
                                
                                <div class="pro-description">
                                    <p>Hanging out at Grill Valley with friends and loved ones has always been one of the best experiences ever, with delicious food, friendly service and some nice ambience. You always feel happy and comfortable!
                                    </p>
                                </div>
                                
                                <div class="plus-minus">
                                    <span>
                                        <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                        <input type="text" name="name" value="1">
                                        <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <form action="">

                                            <button type="submit" class="btn btn-style1">
                                                <span>
                                                    <i class="fa fa-shopping-bag"></i> 
                                                    Add to cart
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <form action="">

                                            <button type="submit" class="btn btn-style1">
                                                <span>
                                                    <i class="fa fa-sign-in-alt"></i> 
                                                    View details
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quick veiw end -->
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

<!-- Mirrored from spacingtech.com/html/vegist-final/vegist/grid-list-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Sep 2021 09:13:56 GMT -->
</html>