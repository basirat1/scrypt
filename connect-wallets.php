<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>NFTMAK - NFT Marketplace Template</title>
        <meta name="description" content="">
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
                    <li class="active"><a href="index.php"><i class="fi-sr-apps-delete"></i></a></li>
                    <li><a href="nft-live-bidding.php"><i class="fi-sr-book-alt"></i></a></li>
                    <li><a href="collections.php"><i class="fi-sr-butterfly"></i></a></li>
                    <li><a href="create-item.php"><i class="fi-sr-camping"></i></a></li>
                    <li><a href="category.php"><i class="fi-sr-crown"></i></a></li>
                    <li><a href="author-profile.php"><i class="fi-sr-settings"></i></a></li>
                    <li><a href="#" id="btnFullscreen"><i class="fi-sr-tool-marquee"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- sidebar-end -->

        <!-- Offcanvas-area -->
        <div class="offcanvas-wrapper">
            <div class="menu-trigger"><i class="fi-sr-angle-small-left"></i></div>
            <div class="menu-close"><i class="fi-sr-angle-small-right"></i></div>
            <div class="offcanvas-inner scroll">
                <div class="author-profile text-center mb-30">
                    <div class="author-img">
                        <img src="assets/img/others/author_img.png" alt="">
                    </div>
                    <div class="author-content">
                        <h4 class="title">Author Profile</h4>
                        <p>Super Author</p>
                        <a href="#" class="btn">checkout</a>
                    </div>
                </div>
                <div class="sidebar-slider text-center mb-25">
                    <div class="sidebar-active">
                        <div class="sidebar-img">
                            <a href="#"><img src="assets/img/others/sidebar_img01.png" alt=""></a>
                        </div>
                        <div class="sidebar-img">
                            <a href="#"><img src="assets/img/others/sidebar_img02.png" alt=""></a>
                        </div>
                        <div class="sidebar-img">
                            <a href="#"><img src="assets/img/others/sidebar_img03.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="overview">
                    <div class="overview-title">
                        <h4 class="title">Overview</h4>
                    </div>
                    <div class="overview-item-wrap">
                        <div class="overview-item">
                            <div class="overview-icon">
                                <i class="fi-sr-box-alt"></i>
                            </div>
                            <div class="overview-content">
                                <h4 class="title">Open project</h4>
                                <span>820</span>
                            </div>
                            <a href="#"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                        <div class="overview-item">
                            <div class="overview-icon">
                                <i class="fi-sr-mountains"></i>
                            </div>
                            <div class="overview-content">
                                <h4 class="title">Successful Completed</h4>
                                <span>546</span>
                            </div>
                            <a href="#"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                        <div class="overview-item">
                            <div class="overview-icon">
                                <i class=" fi-sr-hourglass-end"></i>
                            </div>
                            <div class="overview-content">
                                <h4 class="title">trending</h4>
                                <span>32</span>
                            </div>
                            <a href="#"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- Offcanvas-area-end -->

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
                                        <div class="logo"><a href="index.php"><img src="assets/img/logo/naftmak.svg" alt=""></a></div>
                                        <div class="header-form">
                                            <form action="#">
                                                <button><i class="flaticon-search"></i></button>
                                                <input type="text" placeholder="Search Artwork">
                                            </form>
                                        </div>
                                        <div class="navbar-wrap main-menu d-none d-lg-flex">
                                            <ul class="navigation">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="nft-marketplace.php">Explore</a></li>
                                                <li><a href="collections.php">Collection</a></li>
                                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                                    <ul class="submenu">
                                                        <li><a href="activity.php">Activity</a></li>
                                                        <li><a href="category.php">Category</a></li>
                                                        <li><a href="ranking.php">Ranking</a></li>
                                                        <li><a href="creators.php">Creators</a></li>
                                                        <li><a href="market-single.php">Market Single</a></li>
                                                        <li><a href="nft-live-bidding.php">Live Bidding</a></li>
                                                        <li><a href="create-item.php">Create Item</a></li>
                                                        <li><a href="author-profile.php">Author Profile</a></li>
                                                        <li><a href="login-register.php">Login & Register</a></li>
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
                                                <li class="header-btn"><a href="connect-wallets.php" class="btn">Wallet Connect</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <!-- Mobile Menu  -->
                                <div class="mobile-menu">
                                    <nav class="menu-box">
                                        <div class="close-btn"><i class="fas fa-times"></i></div>
                                        <div class="nav-logo"><a href="index.php"><img src="assets/img/logo/logo.png" alt="" title=""></a>
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

            <!-- main-area -->
            <main>

                <!-- breadcrumb-area -->
                <section class="breadcrumb-area breadcrumb-bg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <div class="breadcrumb-content text-center">
                                    <h3 class="title">Connect Wallets</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- breadcrumb-area-end -->

                <!-- category-area -->
                <div class="category-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <ul class="category-list">
                                    <li class="active"><a href="index.php"><img src="assets/img/icons/cat_001.png" alt=""> All</a></li>
                                    <li><a href="nft-marketplace.php"><img src="assets/img/icons/cat_01.png" alt=""> Games</a></li>
                                    <li><a href="nft-marketplace.php"><img src="assets/img/icons/cat_02.png" alt=""> Art</a></li>
                                    <li><a href="nft-marketplace.php"><img src="assets/img/icons/cat_03.png" alt=""> Trading Cards</a></li>
                                    <li><a href="nft-marketplace.php"><img src="assets/img/icons/cat_04.png" alt=""> Music</a></li>
                                    <li><a href="nft-marketplace.php"><img src="assets/img/icons/cat_05.png" alt=""> Domain Names</a></li>
                                    <li><a href="nft-marketplace.php"><img src="assets/img/icons/cat_06.png" alt=""> Memes</a></li>
                                    <li><a href="nft-marketplace.php"><img src="assets/img/icons/cat_07.png" alt=""> Collectibles</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- category-area-end -->

                <!-- sell-nfts-area -->
                <section class="sell-nfts-inner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title mb-45">
                                    <h2 class="title">Connect Your Wallet <img src="assets/img/icons/title_icon01.png" alt="">
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="sell-nfts-item">
                                    <img src="assets/img/icons/nfts_01.png" alt="" class="icon">
                                    <span class="step-count">go step 1</span>
                                    <h5 class="title">Create And Sell</h5>
                                    <p>Wallet that is functional for NFT purcasin You have Coinbase account at this point.Lorem ipsum dolor nsectetur.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="sell-nfts-item">
                                    <img src="assets/img/icons/nfts_02.png" alt="" class="icon">
                                    <span class="step-count">go step 2</span>
                                    <h5 class="title">Create Collection</h5>
                                    <p>Wallet that is functional for NFT purcasin You have Coinbase account at this point.Lorem ipsum dolor nsectetur.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="sell-nfts-item">
                                    <img src="assets/img/icons/nfts_03.png" alt="" class="icon">
                                    <span class="step-count">go step 3</span>
                                    <h5 class="title">Add Your NFTs</h5>
                                    <p>Wallet that is functional for NFT purcasin You have Coinbase account at this point.Lorem ipsum dolor nsectetur.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="sell-nfts-item">
                                    <img src="assets/img/icons/nfts_04.png" alt="" class="icon">
                                    <span class="step-count">go step 4</span>
                                    <h5 class="title">List Them For Sale</h5>
                                    <p>Wallet that is functional for NFT purcasin You have Coinbase account at this point.Lorem ipsum dolor nsectetur.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="sell-nfts-item">
                                    <img src="assets/img/icons/nfts_05.png" alt="" class="icon">
                                    <span class="step-count">go step 5</span>
                                    <h5 class="title">List Them For Sale</h5>
                                    <p>Wallet that is functional for NFT purcasin You have Coinbase account at this point.Lorem ipsum dolor nsectetur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- sell-nfts-area-end -->

            </main>
            <!-- main-area-end -->


            <!-- footer-area -->
            <footer>
                <div class="footer-top-wrap">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-9">
                                <div class="footer-widget">
                                    <div class="footer-logo mb-25">
                                        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus veritatis sequi doloribus
                                        fuga.</p>
                                    <ul class="footer-social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Useful Links</h4>
                                    <ul class="fw-links">
                                        <li><a href="nft-marketplace.php">All NFTs</a></li>
                                        <li><a href="login-register.php">How It Works</a></li>
                                        <li><a href="create-item.php">Create</a></li>
                                        <li><a href="nft-marketplace.php">Explore</a></li>
                                        <li><a href="login-register.php">Privacy & Terms</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Community</h4>
                                    <ul class="fw-links">
                                        <li><a href="login-register.php">Help Center</a></li>
                                        <li><a href="login-register.php">Partners</a></li>
                                        <li><a href="login-register.php">Suggestions</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="login-register.php">Newsletter</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Subscribe Us</h4>
                                    <form action="#" class="newsletter-form">
                                        <input type="email" placeholder="info@youmail.com">
                                        <button type="submit"><i class="flaticon-small-rocket-ship-silhouette"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-wrap">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="copyright-text">
                                    <p>All rights reserved © 2022 by <a href="#">ThemeBeyond</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="copyright-link-list">
                                    <li><a href="login-register.php">Privacy Policy</a></li>
                                    <li><a href="login-register.php">Terms And Condition</a></li>
                                    <li><a href="login-register.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer-area-end -->

        </div>
        <!-- main-content-end -->



		<!-- JS here -->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>