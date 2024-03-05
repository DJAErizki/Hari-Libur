<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>harilibur</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="style/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="style/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="style/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="style/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="style/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="style/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="style/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="./classes.html">Classes</a></li>
                <li><a href="./services.html">Services</a></li>
                <li><a href="./team.html">Our Team</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./about-us.html">About us</a></li>
                        <li><a href="./class-timetable.html">Classes timetable</a></li>
                        <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                        <li><a href="./team.html">Our team</a></li>
                        <li><a href="./gallery.html">Gallery</a></li>
                        <li><a href="./blog.html">Our blogs</a></li>
                        <li><a href="./404.html">404</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    {{-- gog --}}
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="{{ route("welcome") }}">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="./class-details.html">Program</a></li>
                            <li class="active"><a href="coach.html">Coach</a></li>
                            <li><a href="#">Gear</a></li>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->
    {{-- RWRWRWRWR --}}
    <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Tim Kami</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="style/img/hero/gymbro-removebg-preview.png">
                            <div class="ts_text">
                                <h4>Najmuzahir Munawar</h4>
                                <span>Gym Trainer</span>
                                <h5>
                                    <a href="profnaz.html">view</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="style/img/hero/gymbro-removebg-preview.png">
                            <div class="ts_text">
                                <h4>Roffi Nurfadillah</h4>
                                <span>Gym Trainer</span>
                                <h5>
                                    <a href="profil_roffi">view</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="style/img/hero/gymbro-removebg-preview.png">
                            <div class="ts_text">
                                <h4>Deez Nut</h4>
                                <span>Gym Trainer</span>
                                <h5>
                                    <a href="profil_dz">view</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="style/img/hero/gymbro-removebg-preview.png">
                            <div class="ts_text">
                                <h4>Fajar Zulfiansyah</h4>
                                <span>Gym Trainer</span>

                                <h5>
                                    <a href="profil_fajar">view</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="style/img/hero/gymbro-removebg-preview.png">
                            <div class="ts_text">
                                <h4>Joe Mama</h4>
                                <span>Gym Trainer</span>
                                <h5>
                                    <a href="profil_joe">view</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="style/img/hero/gymbro-removebg-preview.png">
                            <div class="ts_text">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                                <h5>
                                    <a href="profil_atar">view</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>harilibur23@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch
    <!-- Get In Touch Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="style/js/jquery-3.3.1.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    <script src="style/js/jquery.magnific-popup.min.js"></script>
    <script src="style/js/masonry.pkgd.min.js"></script>
    <script src="style/js/jquery.barfiller.js"></script>
    <script src="style/js/jquery.slicknav.js"></script>
    <script src="style/js/owl.carousel.min.js"></script>
    <script src="style/js/main.js"></script>



</body>

</html>
