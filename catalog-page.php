<?php
include "includes/header.php";
head("Home");
session_start();
if (!isset($_SESSION['uid'])) {
    navbar("", "active");
} else {
    navbaruser("", "active");
}
?>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Go and Get Yourself a Dress</h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-9 col-lg-12">
                            <div class="products">
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                                src="assets/img/dresses/catGirl.webp"></a>
                                            </div>
                                            <div class="product-name"><a href="#">Cat Dress</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star-half-empty.svg"><img
                                                            src="assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>₹120</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                                src="assets/img/dresses/nurseGirl.webp"></a>
                                            </div>
                                            <div class="product-name"><a href="#">Nurse Dress</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star-half-empty.svg"><img
                                                            src="assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>₹120</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                                src="assets/img/dresses/engineerGirl.webp"></a>
                                            </div>
                                            <div class="product-name"><a href="#">Worker Dress</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star-half-empty.svg"><img
                                                            src="assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>₹120</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                                src="assets/img/dresses/pirateGirl.webp"></a>
                                            </div>
                                            <div class="product-name"><a href="#">Pirate Dress</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star-half-empty.svg"><img
                                                            src="assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>₹120</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                                src="assets/img/dresses/fireGirl.webp"></a>
                                            </div>
                                            <div class="product-name"><a href="#">Fire Fighter Dress</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star-half-empty.svg"><img
                                                            src="assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>₹120</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                                src="assets/img/dresses/waifuGirl.webp"></a>
                                            </div>
                                            <div class="product-name"><a href="#">Waifu Dress</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star-half-empty.svg"><img
                                                            src="assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>₹120</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                                src="assets/img/dresses/robinGirl.webp"></a>
                                            </div>
                                            <div class="product-name"><a href="#">Robin Hood Dress</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star-half-empty.svg"><img
                                                            src="assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>₹120</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                                src="assets/img/dresses/spiderGirl.webp"></a>
                                            </div>
                                            <div class="product-name"><a href="#">SpiderWoman Dress</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star-half-empty.svg"><img
                                                            src="assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>₹120</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                                src="assets/img/dresses/policeGirl.webp"></a><a
                                                        href="#"></a></div>
                                            <div class="product-name"><a href="#">Police Dress</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star.svg"><img
                                                            src="assets/img/star-half-empty.svg"><img
                                                            src="assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>₹120</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
include "includes/footer.php";
