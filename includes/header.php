        <!-- top notificationbar start -->
        <section class="top-6">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col">
                        <ul class="top-home">
                            <!-- offer text start -->
                            <li class="top-home-li t-content">
                                <p class="t-offer"><i class="fa fa-mobile mr-2" aria-hidden="true"></i><a href="tel:123587" class="text-white">123587</a> <i class="fa fa-envelope mr-2" aria-hidden="true"></i> <a class="text-white" href="mailto:template@template.com">template@template.com</a></p>
                                
                            </li>
                            <!-- offer text start -->
                            <li class="top-home-li">
                                <ul class="top-dropdown">
                                    <li class="top-dropdown-li notification-title"><a href="index.php">Home</a></li>
                                    <li class="top-dropdown-li notification-title"><a href="menu.php">Menu</a></li>
                                    
                                    
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- top notificationbar start -->
        <header class="header-area">
            <div class="header-main-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="header-main p-0">
                                <div class="header-element right-block-box">
                                    <ul class="shop-element justify-content-start">

                                        <li class="side-wrap user-wrap">
                                            <div class="acc-desk">
                                                <div class="user-icon">
                                                    <a class="user-icon-desk">
                                                        <span class="background"><i class="icon-user"></i></span>
                                                    </a>
                                                </div>
                                                <div class="user-info">
                                                    <?php if(!isset($_SESSION['email'])) { ?>
                                                    <span class="acc-title">Account</span>
                                                    <div class="account-login">
                                                        <a href="register.php">Register</a>
                                                        <a href="login.php">Log in</a>
                                                    </div>
                                                    <?php } else { ?>
                                                        <span class="acc-title"><?php echo $_SESSION['name']; ?></span>
                                                    <div class="account-login">
                                                        <a href="logout.php">Logout</a>
                                                    </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                            <div class="acc-mob">
                                                <a href="#" class="user-icon">
                                                    <span><i class="icon-user"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- logo start -->
                                <div class="header-element logo text-center">
                                    <a href="index.php">
                                        <!-- <img src="assets/image/Grill_Valley/Home/Logo/Logo.png" alt="logo-image" class=""> -->
                                        Template
                                    </a>
                                </div>
                                <!-- logo end -->
                                
                                <!-- header icon start -->
                                <div class="header-element right-block-box">
                                    <ul class="shop-element">
                                        
                                        
                                        
                                        
                                        <li id="menuSideBar" class="side-wrap wishlist-wrap">
                                            <a href="javascript:void(0)" class="header-wishlist">
                                                <span class="wishlist-icon"><i class="fa fa-bars"></i>
                                                </span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!-- header icon end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="mini-cart">
                <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
                <div class="cart-item-title">
                    <p>
                        <span class="cart-count-desc">There are</span>
                        <span class="cart-count-item bigcounter">3</span>
                        <span class="cart-count-desc">Products</span>
                    </p>
                </div>
                <ul class="cart-item-loop">
                    <li class="cart-item">
                        <div class="cart-img">
                            <a>
                                <img src="assets/image/Grill_Valley/Home/Menu/Variety Platters/1.jpg" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product_details.php">Mombar
                            </a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">140 LE </span>
                                </div>
                                <div class="plus-minus mt-0">
                                    <span>
                                        <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                        <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                    </span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.php"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="cart-img">
                            <a>
                                <img src="assets/image/Grill_Valley/Home/Menu/Soups/1.jpg" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product_details.php">
                                Pigeons With Vermicelli Soup</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">15 LE
                                    </span>
                                </div>
                                <div class="plus-minus mt-0">
                                    <span>
                                        <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                        <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                    </span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.php"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="cart-img">
                            <a>
                                <img src="assets/image/Grill_Valley/Home/Menu/Meat Corner/1.jpg" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product_details.php">
                                Meat Kebab</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">220 LE</span>
                                </div>
                                <div class="plus-minus mt-0">
                                    <span>
                                        <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                        <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                    </span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.php"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                </ul>
                <ul class="subtotal-title-area">
                    <li class="subtotal-info">
                        <div class="subtotal-titles">
                            <h6>Sub total:</h6>
                            <span class="subtotal-price">375 LE</span>
                        </div>
                    </li>
                    <li class="mini-cart-btns">
                        <div class="cart-btns">
                            <a href="cart.php" class="btn btn-style1"><span>View cart</span></a>
                            <a href="checkout.php" class="btn btn-style1"><span>Checkout</span></a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- mobile search start -->
            <div class="modal fade" id="search-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="search-content">
                                            <div class="search-engine">
                                                <input type="text" name="search" placeholder="Search Product.">
                                                <button class="search-btn" type="button"><i class="ion-ios-search-strong"></i></button>
                                            </div>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile search end -->
        </header>
        <!-- Offcanvas - Menu -->
        <div class="sideMenu p-5" data-animation="slide-left">
            <button type="button " class="close bg-white px-0">
                <i class="fa fa-times fa-2x" aria-hidden="true"></i>
            </button>
    
            <ul class="list-unstyled">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>
    
            
        </div>
        <!-- minicart start -->