<!DOCTYPE html>
<html lang="en">

<?php
//dohvatanje i obrada json fajla -> lakse je nego asinhrono dohvatanje pomocu JS

$jsonString = $string = file_get_contents("items.json");
$obj = json_decode ($jsonString, true);

?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Ploče svih vrsta, Behaton, Teraco, Livene">
    <meta name="keywords" content="Teraco, brušene, Behaton, ploče, Livene, Kulir">
    <meta name="author" content="John Doe">
    <title>LI-KOM PLUS</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">




    <!-- Vendor CSS (Icon Font) -->


    <link rel="stylesheet" href="assets/css/vendor/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.min.css">


    <!-- Plugins CSS (All Plugins Files) -->


    <link rel="stylesheet" href="assets/css/plugins/splitting.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer-theme-default.min.css">


    <!-- Main Style CSS -->

    <link rel="stylesheet" href="assets/css/style.css" />



    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">  -->


</head>

<body>
    <!-- Header Section Start -->
    <div class="header section">

        <!-- Header Top Start -->
        <div class="header-top bg-secondary">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top Link/Search Start -->
                    <div class="col-lg-8 col-md-12">
                        <ul class="header-top-links">
                            <li><i class="fa fa-phone"></i><a href="tel:+3818525278"> +381 8525 278</a></li>
                            <li><i class="fa fa-phone"></i><a href="tel:+381638047342"> +381 63 804 7342</a></li>
                            <li><i class="fa fa-clock-o"></i> <span>Ponedeljak - Nedelja 8:00 - 16:00</span> </li>
                        </ul>
                    </div>
                    <!-- Header Top Link/Search End -->
                    <!-- Header Top Action Bar Start -->
                    <div class="col-lg-4 col-md-12 text-md-end">
                        <form class="header-top-action" action="#">
                            <input class="action-search" type="text" placeholder="Pretraga">
                            <button class="action-btn" type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Header Top Action Bar End -->
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Bottom Start -->
        <div class="header-bottom section header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Logo Start -->
                    <div class="col-lg-3 col-6">
                        <div class="header-logo">
                            <a class="naslov" href="index.php">Li-kom plus</a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="col-lg-9 col-6">
                        <!-- Main Menu Start -->
                        <div class="main-menu d-none d-lg-flex">
                            <ul>
                              <li><a href="index.php">Početna</a></li>
                              <!-- <li><a href="index.php">Projekti</a></li>
                              <li><a href="index.php">O nama</a></li> -->
                              <li><a href="contact.php">Kontakt</a></li>
                            </ul>
                        </div>
                        <!-- Main Menu End -->

                        <!-- Main Menu Riht Side Start -->
                        <div class="main-menu-right-side d-flex d-lg-none">

                            <!-- Header Search Start -->
                            <div class="header-search mr-4">
                                <a class="header-search-icon" href="#"><i class="fa fa-search"></i></a>
                            </div>
                            <!-- Header Search End -->

                            <span style="width: 50px;"></span>

                            <!-- Mobile Menu Bar Start -->
                            <div class="mobile-menu-bar-wrapper">
                                <a href="#" class="mobile-menu-bar"><i class="fa fa-bars"></i></a>
                            </div>
                            <!-- Mobile Menu Bar End -->

                        </div>
                        <!-- Main Menu Riht Side End -->

                    </div>
                    <!-- Header Menu End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-wrapper">
            <div class="body-overlay"></div>
            <!-- Mobile Menu Inner Start -->
            <div class="mobile-menu-inner">

                <!-- Button Close Start -->
                <div class="btn-close-bar">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li><a href="index.php">Početna</a></li>
                            <!-- <li><a href="index.php">Projekti</a></li>
                            <li><a href="index.php">O nama</a></li> -->
                            <li><a href="contact.php">Kontakt</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- mobile menu end -->

                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto">
                    <!-- Contact Link Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789 123</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                    </ul>
                    <!-- Contact Link End -->

                    <!-- Social Widget Start
                    <div class="widget-social">
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    < Social Widget End -->
                </div>
                <!-- Contact Links/Social Links End -->

            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

        <!-- Offcanvas Search Start -->
        <div class="offcanvas-search">
            <!-- Offcanvas Search Inner Start -->
            <div class="offcanvas-search-inner">
                <!-- Button Close Start -->
                <div class="btn-close-bar">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Search Form Start -->
                <form class="offcanvas-search-form" action="#">
                    <input type="text" placeholder="Pretraga">
                </form>
                <!-- Offcanvas Search Form End -->

            </div>
            <!-- Offcanvas Search Inner End -->

        </div>
        <!-- Offcanvas Search End -->

    </div>
    <!-- Header Section End -->

    <!-- Hero/Intro Slider Start -->
    <!-- <div class="section">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="assets/images/slider/slide-1.jpg" alt="" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content">
                            <span class="sub-title">Best Construction Company</span>
                            <h2 class="title"> Construction at <br /> Your Best </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedlo eiusmod tempor incididunt ut labore et dolore.</p>
                            <a href="contact.html" class="btn btn-hover-secondary btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="assets/images/slider/slide-2.jpg" alt="" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content">
                            <span class="sub-title">Best Construction Company</span>
                            <h2 class="title"> Build Your <br /> Dream Home </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedlo eiusmod tempor incididunt ut labore et dolore.</p>
                            <a href="contact.html" class="btn btn-primary btn-hover-light">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>

            <div class="home-slider-prev swiper-button-prev main-slider-nav"><i class="fa fa-angle-left"></i></div>
            <div class="home-slider-next swiper-button-next main-slider-nav"><i class="fa fa-angle-right"></i></div>
        </div>
    </div> -->
    <!-- Hero/Intro Slider End -->

    <!-- Project Masonry Section Start -->
    <div class="section section-padding bg-secondary">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12 section-title mb-0" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title text-white">Naša ponuda</h2>
                    <span></span>
                    <p class="sub-title text-white">Ponuda je raspoređena po sledećim kategorijama</p>
                </div>
                <!-- Section Title End -->

                <!-- Tab Start -->
                <div class="col-12 mb-4 text-center mt-7 mb-10 pb-2" data-aos="fade-up" data-aos-delay="400">
                    <div class="project-tab mb-n1">
                        <button data-filter="*" class="is-checked project-filter">Sve kategorije</button>
                        <?php
                        if(count($obj) > 0){
                          foreach ($obj as $o) {
                            echo("<button data-filter='.cat-".$o['categoryId']."' class='project-filter'>".$o['categoryName']."</button>");
                          }
                        }
                        ?>
                    </div>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mesonry-list mb-n8">
                <div class="resizer col"></div>
                <?php
                if(count($obj) > 0){
                  foreach ($obj as $o) {
                        for($i = 0; $i< count($o['items']); $i++){
                          if($o['items'][$i]['show']){
                            echo("<div class='col cat-".$o['categoryId']." mb-8'> <div class='single-project' data-aos='fade-up' data-aos-delay='300'> <div class='col cat-".$o['categoryName']." mb-8'> <div class='single-project' data-aos='fade-up' data-aos-delay='300'> <div class='project-image'> <a class='project-overlay' href='#'> <img src='".$o['items'][$i]['image']."' alt='Project Image'> </a> </div> <div class='project-content'> <h4 class='title'> <a href='#'>".$o['categoryName']."</a> </h4> </div> </div> </div> </div> </div>");
                          }
                        }
                      }
                    }
                ?>
              </div>
            </div>
    </div>
    <!-- Project Masonry Section End -->



    <footer class="section footer-section bg-secondary">
        <!-- Footer Top Start -->
        <div class="footer-top">
            <div class="container">
                <div class="row mb-n10">
                    <div class="col-12 col-sm-12 col-lg-4 col-xl-4 mb-12">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a class="naslov" href="index.php">Li-kom plus</a>
                            </div>
                            <br>
                            <br>
                            <ul class="widget-address">
                                <li><i class="fa fa-map-o"></i><span>Bulevar Revolucije 268 a, Grocka, Beograd</span></li>
                                <li><i class="fa fa-phone"></i><a href="tel:+3818525278"> +381 8525 278</a></li>
                                <li><i class="fa fa-phone"></i><a href="tel:+381638047342"> +381 63 804 7342</a></li>
                            </ul>
                            <!-- Contact Address End -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-3 col-xl-3 mb-12">
                        <div class="single-footer-widget aos-init aos-animate">
                            <h2 class="widget-title">Brzi linkovi</h2>
                            <ul class="widget-list pt-6">
                              <li><a href="index.php">Početna</a></li>
                              <!-- <li><a href="index.php">Projekti</a></li>
                              <li><a href="index.php">O nama</a></li> -->
                              <li><a href="contact.php">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-5 col-xl-5 mb-12">
                        <div class="single-footer-widget">
                          <div class="single-footer-widget">
                              <h2 class="widget-title">Ostanite u toku</h2>
                              <div class="widget-body pt-5">
                                  <p class="desc-content mb-0">Unesite svoj email i ostanite u toku sa najnovijim dešavanjima.</p>

                                  <!-- Newsletter Form Start -->
                                  <div class="newsletter-form-wrap pt-4">
                                      <form id="mc-form" method="post" action="#" class="mc-form">
                                          <input type="email" id="mc-email" class="form-control email-box" placeholder="email@example.com" name="EMAIL">
                                          <button id="mc-submit" class="newsletter-btn" type="submit"><i class="fa fa-envelope"></i></button>
                                      </form>
                                      <!-- mailchimp-alerts Start -->
                                      <div class="mailchimp-alerts text-centre">
                                          <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                          <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                          <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                                      </div>
                                      <!-- mailchimp-alerts end -->
                                  </div>
                                  <!-- Newsletter Form End -->

                                  <!-- Soclial Link Start -->
                                  <div class="widget-social justify-content-start mt-6">
                                      <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                                  </div>
                                  <!-- Social Link End -->
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="container">
            <div class="row align-items-center footer-bottom">
                <div class="col-12 text-center">
                    <div class="copyright-content">
                        <p class="mb-0">© 2021 Made by <strong> D2S2 </strong></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fa fa-long-arrow-up"></i>
        <i class="arrow-bottom fa fa-long-arrow-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendors JS -->


    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>


    <!-- Plugins JS -->

    <script src="assets/js/plugins/splitting.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/masonry.min.js"></script>
    <script src="assets/js/plugins/odometer.min.js"></script>


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <!-- <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>   -->



    <!--Main JS-->
    <script src="assets/js/main.js"></script>
</body>

</html>
