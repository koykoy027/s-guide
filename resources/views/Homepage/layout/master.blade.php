<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <title>
        S-GUIDE @yield('title')
    </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('index/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('index/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('index/assets/css/templatemo-seo-dream.css') }}">
    <link rel="stylesheet" href="{{ asset('index/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('index/assets/css/owl.css') }}">

    <!--
TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/#top') }}" class="logo">
                            <h4>
                                <img src="{{ asset('images/SG 2.png') }}" alt="" /> - GUIDE
                            </h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('/#top') }}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">Features</a></li>
                            <li class="scroll-to-section"><a href="#about">About Us</a></li>
                            <li class="scroll-to-section"><a href="#services">Services</a></li>
                            {{-- <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li> --}}
                            <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                            <li class="scroll-to-section">
                                <div class="main-blue-button">
                                    <a href="{{ url('online-portal') }}">Online Portal</a>
                                </div>
                            </li>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2023 S-GUIDE., Ltd. All Rights Reserved.

                        <br>Web Designed by S-GUIDE
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('index/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('index/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('index/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('index/assets/js/animation.js') }}"></script>
    <script src="{{ asset('index/assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('index/assets/js/custom.js') }}"></script>



</body>

</html>
