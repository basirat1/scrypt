<?php
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
                                    <h3 class="title">Create New Item</h3>
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

                <!-- create-item-area -->
                <div class="create-item-area">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div id="previewAsset" style="display:none;" class="col-xl-3 col-lg-4 col-md-6">
                                <aside class="create-item-sidebar">
                                    <h4 class="title">Preview item</h4>
                                    <div class="top-collection-item mb-0">
                                        <div class="collection-item-top">
                                            <ul>
                                                <li class="avatar"><a href="author-profile.php" class="thumb"><img id="channelAvatar" src="" alt="Owner profile picture"></a>By <a href="author-profile.php" class="name" id="channel">Jonson</a></li>
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
                                            <a href="market-single.php"><img id="assetThumbnail" src="" alt=""></a>
                                        </div>
                                        <div class="collection-item-content">
                                            <h5 class="title"><a id="assetTitle" href="market-single.php"></a> <span class="price">0 ETH</span></h5>
                                        </div>
                                        <div class="collection-item-bottom">
                                            <ul>
                                                <div><img src="assets/img/icons/ShorEase_view_icon.png" style="width:22px;margin-right:7px;" alt="View icon"><a href="#" id="viewCount" style='outline: medium none; color: #BAB6B4; font-size: 14px; font-weight: 600;'>0</a></div>
                                                <li class="wishlist"><a href="#" id="likeCount">0</a></li>
                                                <div><img src="assets/img/icons/ShorEase-comment-icon.png" style="width:22px;margin-right:7px;" alt="Comment icon"><a href="#" id="commentCount" style='outline: medium none; color: #BAB6B4; font-size: 14px; font-weight: 600;'>0</a></div>
                                            </ul>
                                            <div style="width:100%;justify-content:center;text-align:center;">
                                                <li class="bid" style="margin-top:13px;"><a href="market-single.php" class="btn">place a bid</a></li>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>

                            <div class="col-xl-9 col-lg-8">
                                <div class="method-wrap">
                                    <h4 class="title">Select content resource</h4>
                                    <ul class="method-list">
                                        <li onclick="changedContentResource('youtube')"><a id="youtube" style="color:white;" class="active"><i class="flaticon-youtube"></i> YouTube (MP4)</a></li>
                                        <li onclick="changedContentResource('instagram')"><a id="instagram" style="color:white;"><i class="flaticon-instagram"></i> Instagram (MP4 or Image)</a></li>
                                        <li onclick="changedContentResource('tiktok')"><a id="tiktok" style="color:white;"><i class="flaticon-tiktok"></i> TikTok (MP4)</a></li>
                                        <li onclick="changedContentResource('onlyfans')"><a id="onlyfans" style="color:white;"><i class="flaticon-add-user"></i> OnlyFans (MP4 or Image)</a></li>
                                    </ul>
                                </div>
                                <form id="asset_info" method="POST" action="proc/save-asset-form" class="create-item-form">
                                    <div class="form-grp">
                                        <label for="resourceLink">Link</label>
                                        <input id="resourceLink" type="text" placeholder="A Link to your YouTube video" onchange="linkChanged(this)">
                                        <div id="errorCont" style="display:none;" class="alert alert-danger" role="alert">
                                            Oops, this is not a valid YouTube Link. (https://YouTube.com/watch?v=xxx)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="size">Price</label>
                                                <input id="nftPrice" name="askPrice" type="number" placeholder="Enter price for one item (ETH)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-grp">
                                                <label for="royalties">Royalties</label>
                                                <input id="royalties" name="royalties" type="number" placeholder="(10%)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="method-wrap">
                                    <h4 class="title">Select NFT status</h4>
                                    <ul class="method-list">
                                        <li onclick="changedStatus('fixedPrice')"><a id="fixedPrice" style="color:white;" class="active"><i class="flaticon-tag"></i> Fixed Price</a></li>
                                        <li onclick="changedStatus('openOffers')"><a id="openOffers" style="color:white;"><i class="flaticon-add-user"></i> Open For Offers</a></li>
                                        <li onclick="changedStatus('notSale')"><a id="notSale" style="color:white;"><i class="flaticon-timer"></i> Not For Sale</a></li>
                                    </ul>
                                </div>

                                    <!-- Data voor het Formulier -->
                                    <input type="hidden" id="assetLinkF" name="assetLink" value="">
                                    <input type="hidden" id="assetTitleF" name="assetTitle" value="">
                                    <input type="hidden" id="assetThumbnailF" name="assetThumbnail" value="">
                                    <input type="hidden" id="channelF" name="channel" value="">
                                    <input type="hidden" id="descriptionF" name="description" value="">
                                    <input type="hidden" id="publishedAtF" name="publishedAt" value="">
                                    <input type="hidden" id="viewCountF" name="viewCount" value="">
                                    <input type="hidden" id="likeCountF" name="likeCount" value="">
                                    <input type="hidden" id="commentCountF" name="commentCount" value="">
                                    <input type="hidden" id="channelAvatarF" name="channelAvatar" value="">
                                    <input type="hidden" id="channelDescriptionF" name="channelDescription" value="">
                                    <input type="hidden" id="channelStartDateF" name="channelStartDate" value="">
                                    <input type="hidden" id="channelSubscriberCountF" name="channelSubscriberCount" value="">
                                    <input type="hidden" id="channelVideoCountF" name="channelVideoCount" value="">
                                    <input type="hidden" id="channelViewCountF" name="channelViewCount" value="">
                                    <input type="hidden" id="changedStatus" name="changedStatus" value="fixedPrice">
                                    <input type="hidden" id="nftFileMetadataPath" name="nftMetadataPath" value="">
                                    <input type="hidden" id="nftId" name="nftId" value="">
                                    <input type="hidden" id="wallet" name="wallet" value="">
                                    <input type="hidden" id="channelViewCountF" name="channelViewCount" value="">
                                    <input type="hidden" id="nftContractAddress" name="nftContractAddress" value="">
                                    <input type="hidden" id="contentResource" name="contentResource" value="youtube">

                                    <button id="createToBlockchain" type="button" class="btn">Create Item and upload on ETH blockchain</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- create-item-area-end -->

            </main>
            <!-- main-area-end -->
            <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
        <script src="https://unpkg.com/moralis@0.0.184/dist/moralis.js"></script>
            <script src="assets/js/custom/abi.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/custom/create-form.js"></script>
<script src="assets/js/custom/create-blockchain.js"></script>
<?php
    require 'root/footer.php';
?>