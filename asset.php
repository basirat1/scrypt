<?php

//require '../root/connection.php';

$servername = "localhost";
$username = "root";
$password = "";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
  $conn = new PDO("mysql:host=$servername;dbname=shorease", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Please contact the makers of this website with is error: " . $e->getMessage();
}

$id = base64_decode($_GET['asset']);

 if ( !is_numeric($id) ) {
    header('Location:index');
}

$getProject = $conn->prepare("SELECT * FROM asset WHERE id =".$id);
$getProject->execute();
$count = $getProject->rowCount();
$project = $getProject->fetchAll();

if ($count == 0) 
{
    header('Location:index');
}

$getProjectsOther = $conn->prepare("SELECT * FROM asset ORDER BY RAND() LIMIT 6");
$getProjectsOther->execute();
$projectsOther = $getProjectsOther->fetchAll(\PDO::FETCH_ASSOC);

    require 'root/header.php';
?>

            <!-- main-area -->
            <main style="padding-top: 150px;">

                <!-- breadcrumb-area -->
                <div class="breadcrumb-area market-single-breadcrumb-area">
                    <div class="breadcrumb-bg"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="market-single-breadcrumb">
                                    <div class="home-back-btn"><a href="index.php">go back to home</a></div>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Asset</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb-area-end -->

                <!-- market-single-area -->
                <?php foreach($project as $asset){ ?>
                <section class="market-single-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="market-single-img">
                                    <img src="<?php echo $asset['assetThumbnail']; ?>" style="width:100%;" alt="<?php echo $asset['assetTitle']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="market-single-top">
                                    <div class="market-single-title-wrap">
                                        <h2 class="title"><?php echo $asset['assetTitle']; ?></h2>
                                        <ul class="market-details-meta">
                                            <li>Owned by <a href="#">B14484</a></li>
                                            <li class="wishlist">6 favorites</li>
                                        </ul>
                                    </div>
                                    <div class="market-single-action">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                            <li><a href="#"><i class="fi-sr-menu-dots"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="market-single-creator">
                                            <div class="thumb"><img src="assets/img/others/mp_avatar01.png" alt=""></div>
                                            <div class="info">
                                                <h5 class="title"><a href="author-profile.php">David Michels</a></h5>
                                                <span>Creator</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="market-single-content">
                                    <p><?php echo nl2br($asset['description']); ?></p>
                                </div>
                                <div class="highest-bid-wrap">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <h5 class="title">Highest bid</h5>
                                            <div class="highest-bid-avatar">
                                                <div class="thumb"><img src="assets/img/others/heighest_avatar.png" alt=""></div>
                                                <div class="content">
                                                    <h5 class="title"><a href="author-profile.php">Tomas lindahl</a></h5>
                                                    <span>3.005wETH</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                            <h5 class="title">Auction has ended</h5>
                                            <div class="bid-countdown-wrap">
                                                <div class="coming-time" data-countdown="2022/05/16"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="place-bid-btn" onclick="buyItem()">Buy direct</a>
                            </div>
                            <div class="col-lg-6">
                                <div class="activity-table-responsive">
                                    <table class="table activity-table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="title">Description</th>
                                                <th scope="col">Floor Price</th>
                                                <th scope="col">Owners</th>
                                                <th scope="col" class="time">Assets</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="author">
                                                    <img src="assets/img/others/mp_activity_author01.png" alt=""> <a href="nft-marketplace.php">Trading Pet</a>
                                                </th>
                                                <td>+5486%</td>
                                                <td>-965%</td>
                                                <td>2,356 ETH</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="author">
                                                    <img src="assets/img/others/mp_activity_author02.png" alt=""> <a href="nft-marketplace.php">Trading Craft</a>
                                                </th>
                                                <td>+5486%</td>
                                                <td>-965%</td>
                                                <td>2,356 ETH</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="author">
                                                    <img src="assets/img/others/mp_activity_author03.png" alt=""> <a href="nft-marketplace.php">Trading Cards</a>
                                                </th>
                                                <td>+5486%</td>
                                                <td>-965%</td>
                                                <td>2,356 ETH</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bid-history-wrap">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="bid-tab" data-bs-toggle="tab" data-bs-target="#bid" type="button"
                                                role="tab" aria-controls="bid" aria-selected="true">Bid History</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button"
                                                role="tab" aria-controls="info" aria-selected="false">Info</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="provenance-tab" data-bs-toggle="tab" data-bs-target="#provenance" type="button" role="tab" aria-controls="provenance" aria-selected="false">Provenance</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="bid" role="tabpanel" aria-labelledby="bid-tab">
                                            <div class="bid-history-overflow scroll">
                                                <ul class="bid-history-list">
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="author-profile.php">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar02.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="author-profile.php">David Michels</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar03.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="author-profile.php">Jonny Dev</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar04.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="author-profile.php">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar05.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="author-profile.php">Tomas Komai</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar06.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="author-profile.php">Tomas Harne</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="author-profile.php">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                                            <div class="bid-history-overflow scroll">
                                                <ul class="bid-history-list">
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar02.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar03.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar04.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar05.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar06.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar02.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="provenance" role="tabpanel" aria-labelledby="provenance-tab">
                                            <div class="bid-history-overflow scroll">
                                                <ul class="bid-history-list">
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar02.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar03.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar04.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar05.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar06.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="bid-history-item">
                                                            <div class="highest-bid-avatar">
                                                                <div class="thumb"><img src="assets/img/others/heighest_avatar.png" alt=""></div>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Tomas lindahl</a></h5>
                                                                    <span>Bid listed</span>
                                                                </div>
                                                            </div>
                                                            <div class="bid-history-info">
                                                                <span>8 hours ago</span>
                                                                <h6 class="title">25 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- market-single-area-end -->
                <input id="nftId" type="hidden" value="<?php echo $asset['nftId']; ?>";>
                <input id="askingPrice" type="hidden" value="<?php echo $asset['askPrice']; ?>";>
                <?php } ?>

                <div id="manualPay-containter" class="container" style="display:none;background-color:rgb(39, 49, 56);width:46vw;position:sticky;z-index:100;left:50%;transform: translate(-50%, 0);border-radius:10px;position: fixed; top:25vh;padding:30px;">
            <h3 style="line-height: 1;">Donation panel</h3>
            <p>Donate to your favorite NFT drop and give them some marketing budget.</p>
            <div class="alert alert-primary" role="alert" style="padding:20px;">
                Ethereum (ETH): <b></b>
            </div>
            <div class="alert alert-primary" role="alert" style="padding:20px;">
                Solana (SOL):</b>
            </div>
            <button class="btn default" type="button" style='padding:10px;width:75px;border-radius: 4px;color:white;font-size: 14px;' onclick="closeModal()"><strong><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</strong></button>
        </div>

<script>
    // Manual container visible
    function manualPay() {
        $("#manualPay-containter").fadeIn(500);
        $("#backgroundFade").fadeIn(500);
    }

    // Close de container
    function closeModal() {
        $("#backgroundFade").fadeOut(500);
        $("#manualPay-containter").fadeOut(500);
    }
</script>

                <!-- top-collection-area -->
                <section class="top-collection-area live-auctions-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title mb-40">
                                    <h2 class="title">Live Auctions <img src="assets/img/icons/title_icon01.png" alt=""></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row top-collection-active">
                            <div class="col-xl-3">
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
                                        <h5 class="title"><a href="market-single.php">Pie Collection</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="market-single.php" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="#">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
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
                            <div class="col-xl-3">
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
                                        <a href="market-single.php"><img src="assets/img/others/top_collection03.jpg" alt=""></a>
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
                            <div class="col-xl-3">
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
                                        <a href="market-single.php"><img src="assets/img/others/top_collection04.jpg" alt=""></a>
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
                            <div class="col-xl-3">
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
                                        <h5 class="title"><a href="market-single.php">Drop Collection</a> <span class="price">5.4 ETH</span></h5>
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
                </section>
                <!-- top-collection-area-end -->

            </main>
            <!-- main-area-end -->
            <!-- main-area-end -->
            <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
            <script src="https://unpkg.com/moralis@0.0.184/dist/moralis.js"></script>
            <script src="assets/js/custom/abi.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/custom/trade-asset.js"></script>
<?php
    require 'root/footer.php';
?>