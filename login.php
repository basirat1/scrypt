<?php
    require 'root/header.php';
?>
<script src="assets/js/custom/wallet-connect.js"></script>
            <!-- main-area -->
            <main style="padding-top:80px;">
                <!-- welcome-area -->
                <section class="login-welcome-area">
                    <div class="container">
                        <div class="row"  style="justify-content:center;">
                            <div class="col-md-6">
                                <div class="another-way-signup">
                                    <h4 class="title">Connect your wallet.</h4>
                                    <p>If you don't have a wallet yet, you can select a provider and create one now.</p>
                                    <ul class="another-way-list">
                                        <li><a id="metamask_connect" onclick="metamaskCon()" style="color:white;"><img src="assets/img/icons/signup_icon01.png" alt="">MetaMask <span>Popular</span></a></li>
                                        <li><a href="#"><img src="assets/img/icons/signup_icon02.png" alt="">Coinbase Wallet</a></li>
                                        <li><a href="#"><img src="assets/img/icons/signup_icon03.png" alt="">Wallet Connect</a></li>
                                        <li><a href="#"><img src="assets/img/icons/signup_icon04.png" alt="">Fortmatic</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- welcome-area-end -->
            </main>
            <!-- main-area-end -->


<?php
    require 'root/footer.php';
?>