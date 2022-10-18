<!doctype html>
<html class="no-js" lang="en">
    <head>
        <base href="http://localhost/shorease/">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ShorEase - NFT Marketplace</title>
        <meta name="description" content="First marketplace to buy Youtube and Instagram content from your Hero's">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/uicons-solid-rounded.css">
        <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar-logo mb-25">
                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <div class="sidebar-icon">
                <ul>
                    <li class="active"><a href="index.php"><i class="fi-sr-home"></i></a></li>
                    <li><a href="explore.php"><i class="fi-sr-layers"></i></a></li>
                    <li><a href="create.php"><i class="fi-sr-plus-small"></i></a></li>
                    <hr>
                    <li><a href="author-profile.php"><i class="fi-sr-settings"></i></a></li>
                    <li><a href="#" id="btnFullscreen"><i class="fi-sr-tool-marquee"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- sidebar-end -->

        <!-- main-content -->
        <div class="main-content">
            <!-- header-area -->
            <header>
                <div class="menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                                <div class="menu-wrap">
                                    <nav class="menu-nav">
                                        <div class="logo"><a href="index.php"><img src="assets/img/logo/ShorEase-logo.png" alt="ShorEase logo"></a></div>
                                        <div class="navbar-wrap main-menu d-none d-lg-flex">
                                            <ul class="navigation">
                                                <li class="active"><a href="index.php">Home</a></li>
                                                <li class="menu-item-has-children"><a href="explore.php">Explore</a>
                                                    <ul class="submenu">
                                                        <li><a href="category/YouTube">Youtube</a></li>
                                                        <li><a href="category/Instagram">Instagram</a></li>
                                                        <li><a href="category/OnlyFans">OnlyFans</a></li>
                                                        <li><a href="category/TikTok">TikTok</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                                    <ul class="submenu">
                                                        <li><a href="activity.php">Activity</a></li>
                                                        <li><a href="category.php">Category</a></li>
                                                        <li><a href="ranking.php">Ranking</a></li>
                                                        <li><a href="creators.php">Creators</a></li>
                                                        <li><a href="market-single.php">Market Single</a></li>
                                                        <li><a href="nft-live-bidding.php">Live Bidding</a></li>
                                                        <li><a href="create.php">Create Item</a></li>
                                                        <li><a href="author-profile.php">Author Profile</a></li>
                                                        <li><a href="login.php">Login & Register</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.php">Our Blog</a></li>
                                                        <li><a href="blog-details.php">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="header-action d-none d-md-block">
                                            <ul>
                                                <li class="header-btn"><a href="login.php" class="btn" id="wallet">Wallet Connect</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <!-- Mobile Menu  -->
                                <div class="mobile-menu">
                                    <nav class="menu-box">
                                        <div class="close-btn"><i class="fas fa-times"></i></div>
                                        <div class="nav-logo"><a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                        </div>
                                        <div class="menu-outer">
                                            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                        </div>
                                        <div class="social-links">
                                            <ul class="clearfix">
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <div class="menu-backdrop"></div>
                                <!-- End Mobile Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header-area-end -->