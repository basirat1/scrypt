<?php
    $page = 'category';
    require 'root/header.php';
?>

            <!-- main-area -->
            <main>

                <!-- breadcrumb-area -->
                <section class="breadcrumb-area breadcrumb-bg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <div class="breadcrumb-content text-center">
                                    <h3 class="title"><?php echo $_GET['category']; ?></h3>
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
                                    <li><a href="nft-marketplace.php"><?php echo $_GET['category']; ?> content that is linked to the blockchain</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- category-area-end -->

                <!-- browse-category-area -->
                <div class="browse-category-area pt-80 pb-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <aside class="browse-category-sidebar">
                                    <div class="section-title mb-25">
                                        <h2 class="title">Status <img src="assets/img/icons/title_icon01.png" alt=""></h2>
                                    </div>
                                    <div class="widget category-widget">
                                        <div class="widget-inner">
                                            <ul class="sidebar-tags">
                                                <li><a href="#">Buy Now</a></li>
                                                <li><a href="#">On Auction</a></li>
                                                <li><a href="#">New</a></li>
                                                <li><a href="#">Has Offers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget category-widget">
                                        <h4 class="category-widget-title">Price</h4>
                                        <div class="widget-inner">
                                            <form action="#" class="sidebar-price-filter">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Us Dollar">
                                                    <span class="dollar">$</span>
                                                </div>
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Min">
                                                    <span class="to">to</span>
                                                    <input type="text" placeholder="Max">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="widget category-widget">
                                        <h4 class="category-widget-title">On sale in</h4>
                                        <div class="widget-inner">
                                            <form action="#" class="on-sale">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">ETH</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">WETH</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-xl-9 col-lg-8">
                                <div class="row justify-content-center">
                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                        <div class="top-collection-item">
                                            <div class="collection-item-top">
                                                <ul>
                                                    <li class="avatar"><a href="author-profile.php" class="thumb"><img src="assets/img/others/top_col_avatar.png" alt=""></a>By <a href="author-profile.php" class="name">Jonson</a></li>
                                                    <li class="info-dots dropdown">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="nft-marketplace.php">Artwork</a></li>
                                                            <li><a href="nft-marketplace.php">Action</a></li>
                                                            <li><a href="nft-marketplace.php">Author Action</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="collection-item-thumb">
                                                <a href="market-single.php"><img src="assets/img/others/top_collection01.jpg" alt=""></a>
                                            </div>
                                            <div class="collection-item-content">
                                                <h5 class="title"><a href="market-single.php">NFT Collection</a> <span class="price">5.4 ETH</span></h5>
                                            </div>
                                            <div class="collection-item-bottom">
                                                <ul>
                                                    <li class="bid"><a href="market-single.php" class="btn">place a bid</a></li>
                                                    <li class="wishlist"><a href="#">59</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                        <div class="top-collection-item">
                                            <div class="collection-item-top">
                                                <ul>
                                                    <li class="avatar"><a href="author-profile.php" class="thumb"><img src="assets/img/others/top_col_avatar.png" alt=""></a>By <a href="author-profile.php" class="name">Jonson</a></li>
                                                    <li class="info-dots dropdown">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="nft-marketplace.php">Artwork</a></li>
                                                            <li><a href="nft-marketplace.php">Action</a></li>
                                                            <li><a href="nft-marketplace.php">Author Action</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="collection-item-thumb">
                                                <a href="market-single.php"><img src="assets/img/others/top_collection05.jpg" alt=""></a>
                                            </div>
                                            <div class="collection-item-content">
                                                <h5 class="title"><a href="market-single.php">Peo Collection</a> <span class="price">5.4 ETH</span></h5>
                                            </div>
                                            <div class="collection-item-bottom">
                                                <ul>
                                                    <li class="bid"><a href="market-single.php" class="btn">place a bid</a></li>
                                                    <li class="wishlist"><a href="#">59</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                        <div class="top-collection-item">
                                            <div class="collection-item-top">
                                                <ul>
                                                    <li class="avatar"><a href="author-profile.php" class="thumb"><img src="assets/img/others/top_col_avatar.png"
                                                    alt=""></a>By <a href="author-profile.php" class="name">Jonson</a></li>
                                                    <li class="info-dots dropdown">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="nft-marketplace.php">Artwork</a></li>
                                                            <li><a href="nft-marketplace.php">Action</a></li>
                                                            <li><a href="nft-marketplace.php">Author Action</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="collection-item-thumb">
                                                <a href="market-single.php"><img src="assets/img/others/top_collection06.jpg" alt=""></a>
                                            </div>
                                            <div class="collection-item-content">
                                                <h5 class="title"><a href="market-single.php">Craft Collection</a> <span class="price">5.4 ETH</span></h5>
                                            </div>
                                            <div class="collection-item-bottom">
                                                <ul>
                                                    <li class="bid"><a href="market-single.php" class="btn">place a bid</a></li>
                                                    <li class="wishlist"><a href="#">59</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                        <div class="top-collection-item">
                                            <div class="collection-item-top">
                                                <ul>
                                                    <li class="avatar"><a href="author-profile.php" class="thumb"><img src="assets/img/others/top_col_avatar.png" alt=""></a>By <a href="author-profile.php" class="name">Jonson</a></li>
                                                    <li class="info-dots dropdown">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="nft-marketplace.php">Artwork</a></li>
                                                            <li><a href="nft-marketplace.php">Action</a></li>
                                                            <li><a href="nft-marketplace.php">Author Action</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="collection-item-thumb">
                                                <a href="market-single.php"><img src="assets/img/others/top_collection07.jpg" alt=""></a>
                                            </div>
                                            <div class="collection-item-content">
                                                <h5 class="title"><a href="market-single.php">Action Collection</a> <span class="price">5.4 ETH</span></h5>
                                            </div>
                                            <div class="collection-item-bottom">
                                                <ul>
                                                    <li class="bid"><a href="market-single.php" class="btn">place a bid</a></li>
                                                    <li class="wishlist"><a href="#">59</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                        <div class="top-collection-item">
                                            <div class="collection-item-top">
                                                <ul>
                                                    <li class="avatar"><a href="author-profile.php" class="thumb"><img src="assets/img/others/top_col_avatar.png" alt=""></a>By <a href="author-profile.php" class="name">Jonson</a></li>
                                                    <li class="info-dots dropdown">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="nft-marketplace.php">Artwork</a></li>
                                                            <li><a href="nft-marketplace.php">Action</a></li>
                                                            <li><a href="nft-marketplace.php">Author Action</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="collection-item-thumb">
                                                <a href="market-single.php"><img src="assets/img/others/top_collection08.jpg" alt=""></a>
                                            </div>
                                            <div class="collection-item-content">
                                                <h5 class="title"><a href="market-single.php">NFT Collection</a> <span class="price">5.4 ETH</span></h5>
                                            </div>
                                            <div class="collection-item-bottom">
                                                <ul>
                                                    <li class="bid"><a href="market-single.php" class="btn">place a bid</a></li>
                                                    <li class="wishlist"><a href="#">59</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                        <div class="top-collection-item">
                                            <div class="collection-item-top">
                                                <ul>
                                                    <li class="avatar"><a href="author-profile.php" class="thumb"><img src="assets/img/others/top_col_avatar.png" alt=""></a>By <a href="author-profile.php" class="name">Jonson</a></li>
                                                    <li class="info-dots dropdown">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="nft-marketplace.php">Artwork</a></li>
                                                            <li><a href="nft-marketplace.php">Action</a></li>
                                                            <li><a href="nft-marketplace.php">Author Action</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="collection-item-thumb">
                                                <a href="market-single.php"><img src="assets/img/others/top_collection09.jpg" alt=""></a>
                                            </div>
                                            <div class="collection-item-content">
                                                <h5 class="title"><a href="market-single.php">NFT Collection</a> <span class="price">5.4 ETH</span></h5>
                                            </div>
                                            <div class="collection-item-bottom">
                                                <ul>
                                                    <li class="bid"><a href="market-single.php" class="btn">place a bid</a></li>
                                                    <li class="wishlist"><a href="#">59</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                        <div class="top-collection-item">
                                            <div class="collection-item-top">
                                                <ul>
                                                    <li class="avatar"><a href="author-profile.php" class="thumb"><img src="assets/img/others/top_col_avatar.png" alt=""></a>By <a href="author-profile.php" class="name">Jonson</a></li>
                                                    <li class="info-dots dropdown">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="nft-marketplace.php">Artwork</a></li>
                                                            <li><a href="nft-marketplace.php">Action</a></li>
                                                            <li><a href="nft-marketplace.php">Author Action</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="collection-item-thumb">
                                                <a href="market-single.php"><img src="assets/img/others/top_collection10.jpg" alt=""></a>
                                            </div>
                                            <div class="collection-item-content">
                                                <h5 class="title"><a href="market-single.php">NFT Collection</a> <span class="price">5.4 ETH</span></h5>
                                            </div>
                                            <div class="collection-item-bottom">
                                                <ul>
                                                    <li class="bid"><a href="market-single.php" class="btn">place a bid</a></li>
                                                    <li class="wishlist"><a href="#">59</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                        <div class="top-collection-item">
                                            <div class="collection-item-top">
                                                <ul>
                                                    <li class="avatar"><a href="author-profile.php" class="thumb"><img src="assets/img/others/top_col_avatar.png" alt=""></a>By <a href="author-profile.php" class="name">Jonson</a></li>
                                                    <li class="info-dots dropdown">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="nft-marketplace.php">Artwork</a></li>
                                                            <li><a href="nft-marketplace.php">Action</a></li>
                                                            <li><a href="nft-marketplace.php">Author Action</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="collection-item-thumb">
                                                <a href="market-single.php"><img src="assets/img/others/top_collection11.jpg" alt=""></a>
                                            </div>
                                            <div class="collection-item-content">
                                                <h5 class="title"><a href="market-single.php">Dark Collection</a> <span class="price">5.4 ETH</span></h5>
                                            </div>
                                            <div class="collection-item-bottom">
                                                <ul>
                                                    <li class="bid"><a href="market-single.php" class="btn">place a bid</a></li>
                                                    <li class="wishlist"><a href="#">59</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                        <div class="top-collection-item">
                                            <div class="collection-item-top">
                                                <ul>
                                                    <li class="avatar"><a href="author-profile.php" class="thumb"><img src="assets/img/others/top_col_avatar.png" alt=""></a>By <a href="author-profile.php" class="name">Jonson</a></li>
                                                    <li class="info-dots dropdown">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="nft-marketplace.php">Artwork</a></li>
                                                            <li><a href="nft-marketplace.php">Action</a></li>
                                                            <li><a href="nft-marketplace.php">Author Action</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="collection-item-thumb">
                                                <a href="market-single.php"><img src="assets/img/others/top_collection02.jpg" alt=""></a>
                                            </div>
                                            <div class="collection-item-content">
                                                <h5 class="title"><a href="market-single.php">Artwork Collection</a> <span class="price">5.4 ETH</span></h5>
                                            </div>
                                            <div class="collection-item-bottom">
                                                <ul>
                                                    <li class="bid"><a href="market-single.php" class="btn">place a bid</a></li>
                                                    <li class="wishlist"><a href="#">59</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- browse-category-area-end -->

                <!-- week-features-area -->
                <section class="inner-week-features-area">
                    <div class="container">
                        <div class="row mb-35">
                            <div class="col-md-7 col-sm-8">
                                <div class="section-title">
                                    <h2 class="title">Features of the week <img src="assets/img/icons/title_icon02.png" alt=""></h2>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-4">
                                <div class="section-button text-end">
                                    <a href="#" class="btn filter-btn"><i class="fi-sr-filter"></i> Explore More</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-5">
                                <div class="week-features-item">
                                    <div class="features-item-top">
                                        <div class="features-avatar">
                                            <div class="features-avatar-thumb">
                                                <a href="#"><img src="assets/img/others/features_avatar.png" alt=""></a>
                                            </div>
                                            <div class="features-avatar-info">
                                                <h5 class="title"><a href="#">Random Abstract</a></h5>
                                                <span>Created by <a href="#">Peolu</a></span>
                                            </div>
                                        </div>
                                        <div class="features-item-wishlist">
                                            <a href="#">100</a>
                                        </div>
                                    </div>
                                    <ul class="features-img-wrap">
                                        <li class="grid-item"><img src="assets/img/others/features_img01.png" alt=""></li>
                                        <li class="grid-item"><img src="assets/img/others/features_img02.png" alt=""></li>
                                        <li class="grid-item"><img src="assets/img/others/features_img03.png" alt=""></li>
                                        <li class="grid-item"><img src="assets/img/others/features_img04.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="week-features-item">
                                    <div class="features-item-top">
                                        <div class="features-avatar">
                                            <div class="features-avatar-thumb">
                                                <a href="#"><img src="assets/img/others/features_avatar02.png" alt=""></a>
                                            </div>
                                            <div class="features-avatar-info">
                                                <h5 class="title"><a href="#">Deploy Abstract</a></h5>
                                                <span>Created by <a href="#">Darkleo</a></span>
                                            </div>
                                        </div>
                                        <div class="features-item-wishlist">
                                            <a href="#">300</a>
                                        </div>
                                    </div>
                                    <ul class="features-img-wrap">
                                        <li class="grid-item"><img src="assets/img/others/s_features_img01.png" alt=""></li>
                                        <li class="grid-item"><img src="assets/img/others/features_img02.png" alt=""></li>
                                        <li class="grid-item"><img src="assets/img/others/s_features_img03.png" alt=""></li>
                                        <li class="grid-item"><img src="assets/img/others/s_features_img04.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="week-features-item">
                                    <div class="features-item-top">
                                        <div class="features-avatar">
                                            <div class="features-avatar-thumb">
                                                <a href="#"><img src="assets/img/others/features_avatar03.png" alt=""></a>
                                            </div>
                                            <div class="features-avatar-info">
                                                <h5 class="title"><a href="#">Colorful Abstract</a></h5>
                                                <span>Created by <a href="#">Jonson</a></span>
                                            </div>
                                        </div>
                                        <div class="features-item-wishlist">
                                            <a href="#">190</a>
                                        </div>
                                    </div>
                                    <ul class="features-img-wrap">
                                        <li class="grid-item"><img src="assets/img/others/t_features_img01.png" alt=""></li>
                                        <li class="grid-item"><img src="assets/img/others/features_img02.png" alt=""></li>
                                        <li class="grid-item"><img src="assets/img/others/features_img03.png" alt=""></li>
                                        <li class="grid-item"><img src="assets/img/others/t_features_img04.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- week-features-area-end -->

            </main>
            <!-- main-area-end -->


            <?php
    require 'root/footer.php';
?>