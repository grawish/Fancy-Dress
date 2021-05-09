<?php
include "includes/header.php";
head("Home");
navbar("active");
?>

    <main class="page landing-page">
        <section class="clean-block clean-hero" style="color: rgba(9, 162, 255, 0.85);background: url(assets/img/pexels-marta-wave-6437761.jpg) center / cover no-repeat;">
            <div class="text">
                <h2>Online Fancy Dress Booking System</h2>
                <p><br>After the pandemic situation is over, parents are horrified in shopping or renting fancy dresses for their children for school dramas. Drama companies are also being terrified to shop outside. So, everybody is moving towards an online solution. This is where we come in, we sell fancy dresses online for dramas and schools.<br></p><a href="catalog-page.php" class="btn btn-outline-light btn-lg" type="button">Rent/Shop Now</a><a href="registration.php" class="btn btn-light ml-lg-3 ml-md-3 btn-lg" type="button">Register Now</a>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Our Happy Customers</h2>
                    <p>Over several years we have made so many happy customers.</p>
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/tech/image (1).jpg"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/tech/image (2).jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/tech/image (3).jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/tech/image (4).jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/tech/image (5).jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/tech/image (6).jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next" style="color: rgb(81,79,79);"><span class="carousel-control-next-icon" style="color: rgb(184,7,7);"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                        <li data-target="#carousel-1" data-slide-to="3"></li>
                        <li data-target="#carousel-1" data-slide-to="4"></li>
                        <li data-target="#carousel-1" data-slide-to="5"></li>
                        <li data-target="#carousel-1" data-slide-to="6"></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">About Us</h2>
                    <p><br>This project is web based enterprise software (website), which provides solutions to the Fancy Dress Shopping and Renting for Schools, Dramas, Hobbyists, etcetera. This web app also provides home delivery service and online payment method.<br>After the pandemic situation is over, parents are horrified in shopping or renting fancy dresses for their children for school dramas. Drama companies are also being terrified to shop outside. So, everybody is moving towards an online solution. This is where we come in, we sell fancy dresses online for dramas and schools.<br></p>
                </div>
            </div>
        </section>
    </main>
<?php
include "includes/footer.php";
