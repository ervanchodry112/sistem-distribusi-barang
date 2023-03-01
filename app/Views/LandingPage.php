<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Guild Store</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/assets/img/icon.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="/assets/css/animate.css">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="/assets/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="/assets/css/LineIcons.css">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="/assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="/assets/css/stylelp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->
    <!--

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand d-flex align-items-center" href="/">
                                <img height="50" class="me-2" src="/assets/img/icon.png" alt="Logo">
                                <h5 class="text-white ms-2">GuildStore</h5>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <?php
                            if (!logged_in()) {
                            ?>
                                <div class="navbar-btn d-none d-sm-inline-block">
                                    <a class="main-btn" data-scroll-nav="0" href="<?= base_url('login') ?>">Login</a>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="navbar-btn d-none d-sm-inline-block">
                                    <a class="main-btn" data-scroll-nav="0" href="<?= base_url('admin') ?>">Panel</a>
                                </div>
                            <?php
                            }
                            ?>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(/assets/img/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Sistem Distribusi Minimarket</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Memastikan Ketersediaan Barang di Toko Anda</h2>
                            <!-- <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p> -->
                            <!-- <a href="#" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Get Started</a> -->
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img src="/assets/img/header-hero.png" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Guild Store <span>Solusi persediaan barang toko anda</span></h3>
                        </div> <!-- section title -->
                        <p class="text">Guild Store merupakan sistem yang dirancang untuk dapat membantu pemilik
                            toko atau minimarket untuk melengkapi persediaan barangnya. Anda tidak perlu lagi memikirkan
                            persediaan barang yang akan habis, karena Guild Store akan menyediakannya kepada anda
                        </p>
                        <!-- <a href="#" class="main-btn">Try it Free</a> -->
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="/assets/img/about1.svg" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="/assets/img/about-shape-1.svg" alt="shape">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Mudah dan Cepat, <span> Hadir untuk membantu persediaan toko anda!</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="/assets/img/services-shape.svg" alt="shape">
                            <img class="shape-1" src="/assets/img/services-shape-1.svg" alt="shape">
                            <i class="lni-baloon"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title">Mudah</h4>
                            <p class="text">Proses pemesanan dapat dilakukan kapan dan dimana saja melalui perangkat digital anda!</p>
                            <!-- <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a> -->
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="/assets/img/services-shape.svg" alt="shape">
                            <img class="shape-1" src="/assets/img/services-shape-2.svg" alt="shape">
                            <i class="bi bi-fast-forward"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title">Cepat</h4>
                            <p class="text">Seluruh proses dilakukan secara cepat dan efisien demi memastikan kepuasan anda!</p>
                            <!-- <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a> -->
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="/assets/img/services-shape.svg" alt="shape">
                            <img class="shape-1" src="/assets/img/services-shape-3.svg" alt="shape">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title">Aman</h4>
                            <p class="text">Seluruh proses dilakukan dengan memperhatikan keamanan barang agar dapat diterima dalam keadaan sempurna.</p>
                            <!-- <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a> -->
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== TEAM PART START ======-->
    <!-- TODO: Menggangti Foto dengan foto kelompok -->
    <section id="team" class="team-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-30">
                        <div class="line m-auto"></div>
                        <h3 class="title"><span>Meet Our </span>Team Members</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="/assets/img/ervan.jpg" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="https://www.facebook.com/ervan.chodry/" target="blank"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#" target="blank"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="https://instagram.com/ervan_chodry" target="blank"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/ervan-chodry" target="blank"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Ervan Chodry</a></h5>
                            <p class="text">2017051001</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="/assets/img/arib.jpg" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="https://www.facebook.com/arib.yusronh"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="https://instagram.com/aribyusronh"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/arib-yusron-hamdani"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Arib Yusron H.</a></h5>
                            <p class="text">2017051078</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="/assets/img/irvandra.jpg" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Irvandra Dwidya Agsatra</a></h5>
                            <p class="text">2017051055</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="/assets/img/tambat.jpg" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Tambat Ramdani</a></h5>
                            <p class="text">1717051034</p>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title"><span>Users</span> Testimonial</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-active wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">

                            <div class="author-content media-body">
                                <h6 class="holder-name">Jenny Deo</h6>
                                <p class="text">CEO, SpaceX</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">

                            <div class="author-content media-body">
                                <h6 class="holder-name">Marjin Otte</h6>
                                <p class="text">UX Specialist, Yoast</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">

                            <div class="author-content media-body">
                                <h6 class="holder-name">David Smith</h6>
                                <p class="text">CTO, Alphabet</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">

                            <div class="author-content media-body">
                                <h6 class="holder-name">Fajar Siddiq</h6>
                                <p class="text">COO, MakerFlix</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title">Subscribe Our Newsletter <span>get reguler updates</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form mt-50">
                            <form action="#">
                                <input type="text" placeholder="Enter eamil">
                                <button class="main-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img width="50px" src="/assets/img/icon.png" alt="logo">
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Link</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Road Map</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Resources</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Page</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Contact Us</h4>
                            </div>
                            <ul class="contact">
                                <li>+809272561823</li>
                                <li>info@gmail.com</li>
                                <li>www.yourweb.com</li>
                                <li>123 Stree New York City , United <br> States Of America 750.</li>
                            </ul>
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!--====== Plugins js ======-->
    <script src="/assets/js/plugins.js"></script>

    <!--====== Slick js ======-->
    <script src="/assets/js/slick.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="/assets/js/ajax-contact.js"></script>

    <!--====== Counter Up js ======-->
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/scrolling-nav.js"></script>

    <!--====== wow js ======-->
    <script src="/assets/js/wow.min.js"></script>

    <!--====== Particles js ======-->
    <script src="/assets/js/particles.min.js"></script>

    <!--====== Main js ======-->
    <script src="/assets/js/mainlp.js"></script>

</body>

</html>