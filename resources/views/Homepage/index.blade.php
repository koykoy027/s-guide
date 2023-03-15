@extends('Homepage.layout.master')
@section('content')
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    {{-- <div class="col-lg-4 col-sm-4">
                                        <div class="info-stat">
                                            <h6>System Status:</h6>
                                            <h4>Ready Work</h4>
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="info-stat">
                                            <h6></h6>
                                            <h4></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="info-stat">
                                            <h6></h6>
                                            <h4></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h2>You're in Good Hands with S-Guide</h2>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="main-green-button scroll-to-section">
                                            <a href="{{ url('register') }}">Register</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('index/assets/images/banner-right-image.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="0s">
                                    <div class="first-number number">
                                        <h6>01</h6>
                                    </div>
                                    <div class="icon"></div>
                                    <h4>Reach Out</h4>
                                    <div class="line-dec"></div>
                                    <p>This HTML5 template is based on Bootstrap 5 CSS. You are free to customize
                                        anything.</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="0.2s">
                                    <div class="second-number number">
                                        <h6>02</h6>
                                    </div>
                                    <div class="icon"></div>
                                    <h4>Develop a Strategy</h4>
                                    <div class="line-dec"></div>
                                    <p>Lorem ipsum dolor sit ameter consectetur adipiscing li elit sed do eiusmod.</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="0.4s">
                                    <div class="third-number number">
                                        <h6>03</h6>
                                    </div>
                                    <div class="icon"></div>
                                    <h4>Implementation</h4>
                                    <div class="line-dec"></div>
                                    <p>If this template is useful for your website, please consider to <a rel="nofollow"
                                            href="https://www.paypal.me/templatemo" target="_blank">support us</a> a little.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="features-item second-feature last-features-item wow fadeInUp"
                                    data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="fourth-number number">
                                        <h6>04</h6>
                                    </div>
                                    <div class="icon"></div>
                                    <h4>Analyze the result</h4>
                                    <div class="line-dec"></div>
                                    <p>Below circular progress bar animation supports those CSS values 10, 20, 30, till
                                        100.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="skills-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                    <div class="progress" data-percentage="80">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                80%<br>
                                                <span>HTML/CSS/JS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="progress" data-percentage="60">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                60%<br>
                                                <span>Wordpress</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <div class="progress" data-percentage="90">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                90%<br>
                                                <span>Marketing</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="skill-item last-skill-item wow fadeIn" data-wow-duration="1s"
                                    data-wow-delay="0.6s">
                                    <div class="progress" data-percentage="70">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                70%<br>
                                                <span>Photoshop</span>
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
    </div> --}}

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ asset('index/assets/images/about-left-image.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>Top <em>marketing</em> agency &amp; consult your website <span>with us</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <div class="about-item">
                                <h4>750+</h4>
                                <h6>projects finished</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="about-item">
                                <h4>340+</h4>
                                <h6>happy clients</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="about-item">
                                <h4>128+</h4>
                                <h6>awards</h6>
                            </div>
                        </div>
                    </div>
                    <p><a rel="nofollow" href="https://templatemo.com/tm-563-seo-dream" target="_parent"></a>
                        School Guidance Management system is a software application designed to assist schools
                        in managing and providing guidance services to students. It allows school counselors to
                        track and monitor student progress, as well as create and manage student profiles and
                        case files.</p>
                    <div class="main-green-button"><a href="#">Discover company</a></div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="our-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6>Our Services</h6>
                        <h2>Discover What We Do &amp; <span>Offer</span> To Our <em>Clients</em></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="icon">
                                    <img src="{{ asset('index/assets/images/service-icon-01.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="right-content">
                                    <h4>Similar Websites</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium
                                        dormque laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="icon">
                                    <img src="{{ asset('index/assets/images/service-icon-02.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="right-content">
                                    <h4>Website Trends</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium
                                        dormque laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="icon">
                                    <img src="{{ asset('index/assets/images/service-icon-03.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="right-content">
                                    <h4>Traffic Analysis</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium
                                        dormque laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="icon">
                                    <img src="{{ asset('index/assets/images/service-icon-03.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="right-content">
                                    <h4>Optimizing Keywords</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium
                                        dormque laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="icon">
                                    <img src="{{ asset('index/assets/images/service-icon-01.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="right-content">
                                    <h4>Page Optimizations</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium
                                        dormque laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="icon">
                                    <img src="{{ asset('index/assets/images/service-icon-02.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="right-content">
                                    <h4>Deep URL Analysis</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium
                                        dormque laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>Our Portofolio</h6>
                        <h2>Discover Our Recent <em>Projects</em> And <span>Showcases</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        <div class="item">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{ asset('index/assets/images/portfolio-01.jpg') }}" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 101</h4>
                                            </a>
                                            <span>Marketing</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{ asset('index/assets/images/portfolio-04.jpg') }}" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 102</h4>
                                            </a>
                                            <span>Branding</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{ asset('index/assets/images/portfolio-02.jpg') }}" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 103</h4>
                                            </a>
                                            <span>Consulting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{ asset('index/assets/images/portfolio-05.jpg') }}" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 104</h4>
                                            </a>
                                            <span>Artwork</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{ asset('index/assets/images/portfolio-03.jpg') }}" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 105</h4>
                                            </a>
                                            <span>Branding</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{ asset('index/assets/images/portfolio-06.jpg') }}" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 106</h4>
                                            </a>
                                            <span>Artwork</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{ asset('index/assets/images/portfolio-04.jpg') }}" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 107</h4>
                                            </a>
                                            <span>Creative</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{ asset('index/assets/images/portfolio-01.jpg') }}" alt="">
                                    <div class="hover-content">
                                        <div class="inner-content">
                                            <a href="#">
                                                <h4>Awesome Project 108</h4>
                                            </a>
                                            <span>Consulting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="contact" class="contact-us section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="section-heading">
                                    <h6>Contact Us</h6>
                                    <h2>Fill Out The Form Below To <span>Get</span> In <em>Touch</em> With Us
                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="name" name="name" id="name" placeholder="Name"
                                                autocomplete="on" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="surname" name="surname" id="surname" placeholder="Surname"
                                                autocomplete="on" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                                placeholder="Your Email" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input type="subject" name="subject" id="subject" placeholder="Subject"
                                                autocomplete="on">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button ">Send
                                                Message
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="contact-info">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('index/assets/images/contact-icon-01.png') }}"
                                                    alt="email icon">
                                            </div>
                                            <a href="#">info@company.com</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('index/assets/images/contact-icon-02.png') }}"
                                                    alt="phone">
                                            </div>
                                            <a href="#">+001-002-0034</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('index/assets/images/contact-icon-03.png') }}"
                                                    alt="location">
                                            </div>
                                            <a href="#">26th Street, Digital Villa</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
