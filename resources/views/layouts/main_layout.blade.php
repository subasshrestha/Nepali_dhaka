<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Nepali Dhaka</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>


    <!--[if lt IE 9]>
    <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="/" class="site-logo">
                        {{--                        <img src="img/logo.png" alt="">--}}
                        <span class="h4 text-black-50">Nepali Dhaka</span>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form">
                        <input type="text" placeholder="Search on Nepali Dhaka ....">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a href="#">Sign</a> In or <a href="#">Create Account</a>
                        </div>
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                <span>0</span>
                            </div>
                            <a href="/cart">Shopping Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/category">Category</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
<!-- Header section end -->

@yield('content')

<!-- Footer section -->
<section class="footer-section">
    <div class="container">
        @yield('footer')
        
        <div class="footer-logo text-center">
{{--            <a href="index.html"><img src="./img/logo-light.png" alt=""></a>--}}
            <span class="h4 text-white font-weight-bold">Nepali Dhaka</span>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>About</h2>
                    <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                    <img src="img/cards.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Questions</h2>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Track Orders</a></li>
                        <li><a href="">Returns</a></li>
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Shipping</a></li>
                        <li><a href="">Blog</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Partners</a></li>
                        <li><a href="">Bloggers</a></li>
                        <li><a href="">Support</a></li>
                        <li><a href="">Terms of Use</a></li>
                        <li><a href="">Press</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Questions</h2>
                    <div class="fw-latest-post-widget">
                        <div class="lp-item">
                            <div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
                            <div class="lp-content">
                                <h6>what shoes to wear</h6>
                                <span>Oct 21, 2018</span>
                                <a href="#" class="readmore">Read More</a>
                            </div>
                        </div>
                        <div class="lp-item">
                            <div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
                            <div class="lp-content">
                                <h6>trends this year</h6>
                                <span>Oct 21, 2018</span>
                                <a href="#" class="readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h2>Questions</h2>
                    <div class="con-info">
                        <span>C.</span>
                        <p>Your Company Ltd </p>
                    </div>
                    <div class="con-info">
                        <span>B.</span>
                        <p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
                    </div>
                    <div class="con-info">
                        <span>T.</span>
                        <p>+53 345 7953 32453</p>
                    </div>
                    <div class="con-info">
                        <span>E.</span>
                        <p>office@youremail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">
            <div class="social-links">
                <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                <a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
                <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
            </div>

            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

        </div>
    </div>
</section>
<!-- Footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
