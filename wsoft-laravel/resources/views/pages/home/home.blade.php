@extends('layouts.app')

@section('title', 'Home - Wsoft Fullstack Software Solutions & Development Services')

@section('page-css')
    <!-- Home Default CSS -->
    <link rel="stylesheet" href="{{ asset('css/home-default.css') }}">
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="home-default">

        <header>
            <div class="container">
                <div class="top-bar">
                    <div class="row align-items-center">
                        <div class="col-md-6 order-md-last">
                            <div class="social-icons">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-twitter-x"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-instagram"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-linkedin"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-bar-links">
                                <a href="#">Products</a>
                                <a href="#">Careers</a>
                                <a href="#">Support</a>
                                <!-- <a href="#">Login</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg header-anim">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo_purple.svg') }}"
                            alt=""></a>
                    <!-- <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo_purple1.svg') }}" alt=""></a> -->

                    <form class="d-flex order-lg-last ms-3 align-items-center">
                        <a href="#" id="search_home">
                            <i class="srn-search"></i>
                        </a>
                        <!-- <a class="signup-btn btn btn-outline-primary text-nowrap" data-trigger="#signup" data-lenis-stop>
                                    <span class="d-none d-sm-inline-block"><span class="outer-wrap"><span data-text="Sing Up">Sing Up</span></span></span>
                                    <span class="d-block d-sm-none"><i class="bi bi-door-closed"></i></span>
                                </a> -->
                        <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </form>


                    <div class="navbar-collapse offcanvas offcanvas-start offcanvas-collapse" id="navbarCollapse">
                        <div class="offcanvas-header">
                            <a class="navbar-brand" href="{{ url('/') }}"><img
                                    src="{{ asset('images/logo_dark.svg') }}" alt=""></a>
                            <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                        {{-- import headerMenu start --}}
                        @include('components.header.headerMenu')
                        {{-- import headerMenu end --}}
                    </div>
                </div>
            </nav>
        </header>

        <div class="home-default-banner">
            <div class="container pos-rel">
                <div class="banner-abstract-shape"></div>
                <div class="matrix-vertical">
                    <img src="{{ asset('images/matrix_vertical.svg') }}" alt="">
                </div>
                <div class="rectangle-small">
                    <img src="{{ asset('images/rectangle_small.svg') }}" alt="">
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="marketing-banner">
                            <div class="title">
                                <span>For Businesses and Enterprises</span>
                                <h1 class="wow">We build powerful <strong>software solutions</strong></h1>
                                <p class="lead">Transform your business with custom software development, web
                                    applications, and digital solutions. Our expert team delivers scalable technology
                                    that drives growth and innovation.</p>
                                <div class="cta-group">
                                    <a href="javascript:" class="btn btn-primary" data-trigger="#signup"><span
                                            class="outer-wrap"><span data-text="Get Started">Get
                                                Started</span></span></a>
                                    <a href="{{ url('/about') }}" class="btn btn-secondary"><span class="outer-wrap"><span
                                                data-text="Learn More">Learn
                                                More</span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-img">
                            <img src="{{ asset('images/home-default-banner-img.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <b class="screen-overlay"></b>
        <!--  Signup Form Start -->
        <article class="mobile-offcanvas offcanvas-right" id="signup">
            <button class="btn-close"> <i class="bi bi-x"></i> </button>
            <div class="popup-wrapper" data-lenis-prevent>

                <div class="content">
                    <h3>Create an account</h3>
                    <div class="social-login-btn">
                        <a href="javascript:" class="gm">
                            <i class="bi bi-google"></i> With Google
                        </a>
                        <a href="javascript:" class="fb">
                            <i class="bi bi-facebook"></i> With Facebook
                        </a>
                    </div>

                    <div class="or-text">
                        <span>Or Signup with your email</span>
                    </div>
                </div>

                <div class="form-wrap">
                    <div class="">
                        <div class="mb-4">
                            <input type="text" class="form-control bordered bottom-only"
                                placeholder="Mobile Number or Email">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control bordered bottom-only" placeholder="Full Name">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control bordered bottom-only" placeholder="Username">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control bordered bottom-only" placeholder="Password">
                        </div>
                        <div class="mb-4 info-form">
                            <small>By signing up, you agree to our <a href="javscript:">Terms</a> , <a
                                    href="javscript:">Data Policy</a> and <a href="javscript:">Cookies
                                    Policy</a>.</small>
                        </div>
                        <div class="d-grid">
                            <button type="button" class="btn btn-outline-primary btn-sm"><span class="outer-wrap"><span
                                        data-text="Singup">Singup</span></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <!--  Signup Form Start -->
    </div>
    <!-- Page Header End -->


    <!-- Page Content Start -->
    <main id="body-content">

        <!-- Logo Carousel -->
        <section class="section-spacing logo-carousel">
            <div class="container">
                <div class="owl-carousel owl-theme top-right-arrow" id="client-home-default">
                    <div class="item">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client5.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client6.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Logo Carousel -->

        <!-- Why Chose Us? -->
        <section class="section-spacing home-ideas-wrap">
            <div class="container pos-rel">
                <div class="square-top">
                    <img src="{{ asset('images/square_large.svg') }}" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="section-title text-start mb-0">
                            <span>Why Choose Us?</span>
                            <h2 class="wow">Transform Your Business <strong>With Expert Solutions</strong></h2>
                            <ul class="list-unstyled icons-listing theme-primary check">
                                <li>Custom software development</li>
                                <li>Scalable web applications</li>
                                <li>Enterprise-grade solutions</li>
                            </ul>

                            <a href="{{ url('/services') }}" class="btn btn-default btn-rounded mt-3"><span
                                    class="outer-wrap"><span data-text="View All Services">View All
                                        Services</span></span></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="icon-style-top">
                            <div class="icon">
                                <i class="srn-icon-design-creativity"></i>
                            </div>
                            <div class="text">
                                <h6>Web Development</h6>
                                <p>We create responsive and dynamic websites using modern frameworks and technologies.
                                </p>
                                <div class="arrow-icon">
                                    <a href="{{ url('/services') }}"><i class="srn-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 spacer-30 d-none d-md-block d-lg-block d-xl-none d-sm-none"></div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="icon-style-top">
                            <div class="icon">
                                <i class="srn-icon-digital-marketing"></i>
                            </div>
                            <div class="text">
                                <h6>Mobile Apps</h6>
                                <p>Native and cross-platform mobile applications that deliver exceptional user
                                    experiences.</p>
                                <div class="arrow-icon">
                                    <a href="{{ url('/services') }}"><i class="srn-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="icon-style-top">
                            <div class="icon">
                                <i class="srn-icon-technology-innovation"></i>
                            </div>
                            <div class="text">
                                <h6>Custom Software</h6>
                                <p>Tailored software solutions designed to meet your specific business requirements and
                                    goals.</p>
                                <div class="arrow-icon">
                                    <a href="{{ url('/services') }}"><i class="srn-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <p class="text-center wow pulse" data-wow-delay="0.5s">Ready to Get Started? <strong
                                class="txt-primary">Free Consultation Available - Let's Discuss Your Project</strong>
                            Requirements Today. </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- Why Chose Us? -->

        <!-- Products successfully launced -->
        <section class="section-spacing bg-light-blue section-padding home-default-video pb-0">
            <div class="container">
                <div class="row pos-rel">
                    <div class="col-lg-5 mb-0">
                        <div class="section-title text-start">
                            <span>Our Development Approach</span>
                            <h2 class="wow">Excellence through <strong>proven methodology.</strong></h2>
                            <p>We deliver high-quality software solutions using industry best practices and cutting-edge
                                technologies. Our experienced team ensures every project meets the highest standards of
                                performance and reliability.</p>
                        </div>
                        <div class="mb-3">
                            <!-- Progress Bar Start -->
                            <div class="progress-wrap">
                                <h6>Projects delivered on time</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="95">
                                        <span>95%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wrap">
                                <h6>Client satisfaction rate</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="98">
                                        <span>98%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Progressbar -->
                        </div>
                        <a href="{{ url('/about') }}" class="btn btn-secondary"><span class="outer-wrap"><span
                                    data-text="Learn More">Learn More</span></span></a>
                    </div>
                    <div class="col-lg-7 mt-5 mt-lg-0">
                        <div class="video-padding">
                            <div class="section-title text-start">
                                <span>Our Success Story</span>
                                <h2 class="wow">Software solutions successfully <strong>delivered to satisfied
                                        clients</strong></h2>
                            </div>
                        </div>
                        <div class="video-bg-off wow fadeInUp">
                            <img src="{{ asset('images/video_bg_off.png') }}" alt="">
                            <div class="video-play-btn">
                                <a class="popup-video" href="https://player.vimeo.com/video/7449107" target="_blank"
                                    role="button">
                                    <i class="bi bi-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Products successfully launced -->

        <!-- Planning on Developing a Product -->
        <section class="section-spacing">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-7 wow slideInLeft">
                        <img src="{{ asset('images/tabbing_img.png') }}" alt="">
                    </div>
                    <div class="col-lg-6 col-xl-5 col-sm-12">
                        <div class="section-title text-start mb-4">
                            <span>Ready to Build Your Software Solution</span>
                            <h2 class="wow">Essential Features that your <strong>Project Requires</strong></h2>
                            <p>We specialize in creating robust, scalable software solutions tailored to your business
                                needs. Our comprehensive development approach ensures your project is delivered with
                                cutting-edge technology and industry best practices.</p>
                        </div>

                        <ul class="list-unstyled icons-listing theme-primary mb-4 w-half check">
                            <li>API Development</li>
                            <li>Database Design</li>
                            <li>Cloud Integration</li>
                            <li>Technical Support</li>
                        </ul>

                        <a href="{{ url('/services') }}" class="btn btn-secondary"><span class="outer-wrap"><span
                                    data-text="View All Services">View All Services</span></span></a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Planning on Developing a Product -->

        <!-- Our Stats -->
        <section class="txt-white section-padding pattern_abstract_bg pos-rel">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 mb-0">
                        <div class="section-title text-start light">
                            <span>About Wsoft</span>
                            <h2 class="wow">We Deliver Quality Solutions To <strong>Scale Your Business</strong>
                            </h2>
                            <p>With years of experience in software development, we've helped businesses transform their
                                operations through innovative technology solutions. Our expert team is committed to
                                delivering excellence in every project we undertake.
                            </p>
                        </div>
                        <div class="hstack gap-4 mb-5 home-stats">
                            <div class="tick-icon-big">
                                <div class="icon-space">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="text-space fun-fact">
                                    <h2><span class="timer" data-to="98" data-speed="2000">98</span>%</h2>
                                    <div>Client satisfaction</div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tick-icon-big">
                                <div class="icon-space">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="text-space fun-fact">
                                    <h2><span class="timer" data-to="150" data-speed="2000">150</span>+</h2>
                                    <div>Projects completed</div>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/about') }}" class="btn btn-outline-light"><span class="outer-wrap"><span
                                    data-text="Learn More">Learn More</span></span></a>
                    </div>
                    <div class="stats-img-abstract">
                        &nbsp;
                    </div>
                    <div class="stats-img wow slideInRight">
                        <img src="{{ asset('images/stats_img.png') }}" class="" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Stats -->

        <!-- Our Case Studies -->
        <section class="section-spacing bg-light-blue section-padding home-case-study">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-5 mb-0">
                        <div class="section-title text-start">
                            <span>Our Portfolio</span>
                            <h2 class="mb-0 wow">Software solutions we build and <strong>clients we serve</strong></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 ms-auto mb-4 mb-lg-0">
                        <div class="section-text">
                            Explore our diverse portfolio of successful software projects. From enterprise applications
                            to custom web solutions, we've delivered innovative technology solutions across various
                            industries and business sectors.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="portfolio-gallery-item">
                            <div class="item-img">
                                <div class="portfolio-img-gallery">
                                    <a href="{{ asset('images/portfolio/portfolio_img_1.jpg') }}"
                                        class="portfolio-img-gallery" title="E-commerce Platform">
                                        <img src="{{ asset('images/portfolio/portfolio_img_1.jpg') }}" class="rounded"
                                            alt="">
                                    </a>
                                    <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                </div>

                                <a href="{{ url('/portfolio') }}" class="arrow"><i class="srn-arrow-right"></i></a>
                            </div>
                            <div class="item-content">
                                <h6><a href="{{ url('/portfolio') }}">E-commerce Platform</a></h6>
                                <div class="sub-head">Web Development & E-commerce</div>
                                <p>Custom-built online marketplace with advanced features including payment integration
                                    and inventory management system</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="portfolio-gallery-item">
                            <div class="item-img">
                                <div class="portfolio-img-gallery">
                                    <a href="{{ asset('images/portfolio/portfolio_img_2.jpg') }}"
                                        class="portfolio-img-gallery" title="Mobile Banking App">
                                        <img src="{{ asset('images/portfolio/portfolio_img_2.jpg') }}" class="rounded"
                                            alt="">
                                    </a>
                                    <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                </div>

                                <a href="{{ url('/portfolio') }}" class="arrow"><i class="srn-arrow-right"></i></a>
                            </div>
                            <div class="item-content">
                                <h6><a href="{{ url('/portfolio') }}">Mobile Banking App</a></h6>
                                <div class="sub-head">Mobile App Development</div>
                                <p>Secure and user-friendly mobile banking application with biometric authentication and
                                    real-time transaction processing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mx-auto">
                        <div class="portfolio-gallery-item">
                            <div class="item-img">
                                <div class="portfolio-img-gallery">
                                    <a href="{{ asset('images/portfolio/portfolio_img_3.jpg') }}"
                                        class="portfolio-img-gallery" title="Enterprise Management System">
                                        <img src="{{ asset('images/portfolio/portfolio_img_3.jpg') }}" class="rounded"
                                            alt="">
                                    </a>
                                    <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                </div>

                                <a href="{{ url('/portfolio') }}" class="arrow"><i class="srn-arrow-right"></i></a>
                            </div>
                            <div class="item-content">
                                <h6><a href="{{ url('/portfolio') }}">Enterprise Management System</a></h6>
                                <div class="sub-head">Custom Software Development</div>
                                <p>Comprehensive business management solution with CRM, inventory tracking, and
                                    automated reporting capabilities</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Case Studies -->

        <!-- Get Your Answers -->
        <section class="section-spacing">
            <div class="container pos-rel">
                <div class="row align-items-center">
                    <div class="col-xl-7 mx-auto col-lg-8 mb-0">
                        <div class="home-default-faqs-counter-wrap">
                            <div class="text-center">
                                <img src="{{ asset('images/home-default-faqs.png') }}" alt="">
                            </div>
                            <div class="home-default-faqs-counter">
                                <div class="hstack gap-3">
                                    <div class="counter-text fun-fact">
                                        <h2>
                                            <span class="timer" data-to="150" data-speed="2000">150</span><sub>+</sub>
                                        </h2>
                                        <div class="text">
                                            Projects completed successfully
                                        </div>
                                    </div>
                                    <div class="vr"></div>
                                    <div class="counter-text fun-fact">
                                        <h2>
                                            <span class="timer" data-to="98" data-speed="2000">98</span><sub>%</sub>
                                        </h2>
                                        <div class="text">
                                            Client satisfaction rate
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mx-auto col-xl-5 col-lg-8 mt-5 mt-xl-0">
                        <div class="section-title text-start">
                            <span>Frequently Asked Questions</span>
                            <h2 class="wow">Everything you need to <strong>know about our services</strong></h2>
                            <p>Get answers to common questions about our software development process, project
                                timelines, and support services. We're here to help you understand how we can best serve
                                your business needs.</p>
                        </div>
                        <div class="theme-accordian">
                            <div class="accordion accordion-flush theme-accordian" id="accordionFlushExampleSimple">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-gap-collapseOne" aria-expanded="false"
                                            aria-controls="flush-gap-collapseOne">
                                            What types of software solutions do you develop?
                                        </button>
                                    </h2>
                                    <div id="flush-gap-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-gap-headingOne"
                                        data-bs-parent="#accordionFlushExampleSimple">
                                        <div class="accordion-body">
                                            We develop custom web applications, mobile apps, enterprise software,
                                            e-commerce platforms, and API integrations using modern technologies and
                                            frameworks.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-gap-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-gap-collapseTwo">
                                            How long does a typical project take?
                                        </button>
                                    </h2>
                                    <div id="flush-gap-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingTwo"
                                        data-bs-parent="#accordionFlushExampleSimple">
                                        <div class="accordion-body">
                                            Project timelines vary based on complexity and requirements. Simple projects
                                            take 2-4 weeks, while complex enterprise solutions may require 3-6 months or
                                            more.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-gap-collapseThree"
                                            aria-expanded="false" aria-controls="flush-gap-collapseThree">
                                            Do you provide ongoing support and maintenance?
                                        </button>
                                    </h2>
                                    <div id="flush-gap-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingThree"
                                        data-bs-parent="#accordionFlushExampleSimple">
                                        <div class="accordion-body">
                                            Yes, we offer comprehensive support and maintenance services including bug
                                            fixes, security updates, feature enhancements, and technical support.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-gap-collapseFour"
                                            aria-expanded="false" aria-controls="flush-gap-collapseFour">
                                            What technologies do you work with?
                                        </button>
                                    </h2>
                                    <div id="flush-gap-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingFour"
                                        data-bs-parent="#accordionFlushExampleSimple">
                                        <div class="accordion-body">
                                            We work with modern technologies including React, Node.js, Python, PHP,
                                            Laravel, MySQL, MongoDB, AWS, and various mobile development frameworks.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Get Your Answers -->

        <!-- Pricing Plan 4 Columnn -->
        <section class="bg-light-blue section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-xl-5 mx-auto text-center">
                        <div class="section-title text-center">
                            <span>Our Service Packages for Every Budget</span>
                            <h2 class="wow">Flexible Solutions <strong>Tailored to your needs</strong></h2>
                            <p>Choose from our range of software development packages designed to meet different project
                                requirements and budgets. From simple websites to complex enterprise solutions, we have
                                the right package for you.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="pricing-wrap alternate-version wow pulse" data-wow-delay="0.1s">
                            <div class="pricing-saving-wrap">
                                <span class="pricing-saving">
                                    Best Value
                                </span>
                            </div>
                            <div class="plan-name">
                                Basic Package
                            </div>
                            <h2 class="plan-price">
                                <sup>$</sup> 500
                            </h2>
                            <p class="pricing-info">
                                Perfect for small businesses and simple web solutions.
                            </p>
                            <hr class="divider-default">
                            <ul class="list-unstyled icons-listing theme-primary tick mb-0">
                                <li>Simple website</li>
                                <li>Mobile responsive</li>
                            </ul>
                            <ul class="list-unstyled icons-listing theme-primary tick not-included">
                                <li>Database integration</li>
                                <li>Custom features</li>
                                <li>Advanced security</li>
                            </ul>

                            <div class="text-center">
                                <a href="{{ url('/pricing') }}" class="text-uppercase btn btn-default"><span
                                        class="outer-wrap"><span data-text="Get Started">Get Started</span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="pricing-wrap popular-plan alternate-version wow pulse" data-wow-delay="0.2s">
                            <div class="pricing-saving-wrap">
                                <span class="pricing-saving">
                                    Most Popular
                                </span>
                                <span class="pricing-saving popular-saving">
                                    Popular
                                </span>
                            </div>
                            <div class="plan-name">
                                Standard Package
                            </div>
                            <h2 class="plan-price">
                                <sup>$</sup> 1,500
                            </h2>
                            <p class="pricing-info">
                                Ideal for growing businesses with dynamic requirements.
                            </p>
                            <hr class="divider-default">
                            <ul class="list-unstyled icons-listing theme-white txt-light tick mb-0">
                                <li>Dynamic website</li>
                                <li>Database integration</li>
                                <li>Basic admin panel</li>
                            </ul>
                            <ul class="list-unstyled icons-listing theme-white txt-light tick not-included">
                                <li>Mobile app</li>
                                <li>Advanced features</li>
                            </ul>

                            <div class="text-center">
                                <a href="{{ url('/pricing') }}" class="text-uppercase btn btn-outline-light"><span
                                        class="outer-wrap"><span data-text="Get Started">Get Started</span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 spacer-30 d-none d-md-block d-lg-block d-xl-none d-sm-none"></div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="pricing-wrap alternate-version wow pulse" data-wow-delay="0.3s">
                            <div class="pricing-saving-wrap">
                                <span class="pricing-saving">
                                    Great Deal
                                </span>
                            </div>
                            <div class="plan-name">
                                Professional Package
                            </div>
                            <h2 class="plan-price">
                                <sup>$</sup> 3,500
                            </h2>
                            <p class="pricing-info">
                                Complete solution for established businesses.
                            </p>
                            <hr class="divider-default">
                            <ul class="list-unstyled icons-listing theme-primary tick">
                                <li>Full web application</li>
                                <li>Advanced admin panel</li>
                                <li>API integration</li>
                                <li>Security features</li>
                                <li>Mobile responsive</li>
                            </ul>

                            <div class="text-center">
                                <a href="{{ url('/pricing') }}" class="text-uppercase btn btn-default"><span
                                        class="outer-wrap"><span data-text="Get Started">Get Started</span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="pricing-wrap alternate-version wow pulse" data-wow-delay="0.4s">
                            <div class="pricing-saving-wrap">
                                <span class="pricing-saving">
                                    Enterprise
                                </span>
                            </div>
                            <div class="plan-name">
                                Enterprise Package
                            </div>
                            <h2 class="plan-price">
                                <sup>$</sup> 7,500
                            </h2>
                            <p class="pricing-info">
                                Comprehensive solution for large organizations.
                            </p>
                            <hr class="divider-default">
                            <ul class="list-unstyled icons-listing theme-primary tick">
                                <li>Custom software solution</li>
                                <li>Mobile applications</li>
                                <li>Advanced integrations</li>
                                <li>Cloud deployment</li>
                                <li>Ongoing support</li>
                            </ul>

                            <div class="text-center">
                                <a href="{{ url('/pricing') }}" class="text-uppercase btn btn-default"><span
                                        class="outer-wrap"><span data-text="Contact Us">Contact Us</span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Plan 4 Columnn -->

        <!-- Real User Reviews -->
        <section class="section-spacing">
            <div class="container">
                <div class="home-default-testimonials">

                    <div class="row">
                        <div class="col-md-7 col-lg-5 col-xxl-5 text-start">
                            <div class="section-title light pos-rel">
                                <div class="svg-wrap wow fadeInDown">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M437 75a254 254 0 0 0-362 0 254 254 0 0 0-39 312L1 492a15 15 0 0 0 19 19l105-35a255 255 0 0 0 387-220c0-68-27-133-75-181zM256 482c-43 0-84-12-121-35a15 15 0 0 0-12-2l-84 28 28-84c1-4 1-9-2-12A225 225 0 0 1 256 30a226 226 0 0 1 0 452z" />
                                        <path
                                            d="M346 161h-40c-19 0-35 16-35 35v40c0 19 16 35 35 35h43c-7 29-32 50-63 50a15 15 0 0 0 0 30c52 0 95-43 95-95v-60c0-19-16-35-35-35zm-45 75v-40c0-3 2-5 5-5h40c3 0 5 2 5 5v45h-45c-3 0-5-2-5-5zm-95-75h-40c-19 0-35 16-35 35v40c0 19 16 35 35 35h43c-7 29-32 50-63 50a15 15 0 0 0 0 30c52 0 95-43 95-95v-60c0-19-16-35-35-35zm-45 75v-40c0-3 2-5 5-5h40c3 0 5 2 5 5v45h-45c-3 0-5-2-5-5z" />
                                    </svg>
                                </div>
                                <span>Client Testimonials</span>
                                <h2 class="wow">What our satisfied clients <strong>say about our work</strong></h2>
                            </div>
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme top-right-arrow" id="home-default-testimonials">
                        <!-- Items Slider -->
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary">
                                <h6>Outstanding software development service
                                    that transformed our business</h6>
                                <p>Wsoft delivered exactly what we needed - a robust e-commerce platform that has
                                    significantly improved our online sales. Their technical expertise and attention to
                                    detail were exceptional throughout the entire development process.</p>
                                <div class="testimonial-box">
                                    <div class="thumb-img">
                                        <img src="{{ asset('images/thumb_1.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">John Anderson</h6>
                                        <div class="post">CEO, TechVenture Solutions</div>
                                        <div class="rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Items Slider -->

                        <!-- Items Slider -->
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary">
                                <h6>Professional team with excellent
                                    project management skills</h6>
                                <p>The mobile app they developed for us exceeded our expectations. The user interface is
                                    intuitive and the performance is flawless. Wsoft's team was responsive and delivered
                                    the project on time and within budget.</p>
                                <div class="testimonial-box">
                                    <div class="thumb-img">
                                        <img src="{{ asset('images/thumb_2.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Maria Rodriguez</h6>
                                        <div class="post">Operations Manager, Digital Health</div>
                                        <div class="rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Items Slider -->

                        <!-- Items Slider -->
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary">
                                <h6>Reliable partner for all our
                                    software development needs</h6>
                                <p>We've worked with Wsoft on multiple projects and they consistently deliver
                                    high-quality solutions. Their custom CRM system has streamlined our operations and
                                    improved our customer service significantly.</p>
                                <div class="testimonial-box">
                                    <div class="thumb-img">
                                        <img src="{{ asset('images/thumb_3.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Sarah Thompson</h6>
                                        <div class="post">Director, GlobalTrade Corp</div>
                                        <div class="rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Items Slider -->

                        <!-- Items Slider -->
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary">
                                <h6>Innovative solutions with cutting-edge
                                    technology implementation</h6>
                                <p>The web application Wsoft built for our company has revolutionized how we manage our
                                    inventory and sales. Their expertise in modern technologies and commitment to
                                    excellence is truly impressive.</p>
                                <div class="testimonial-box">
                                    <div class="thumb-img">
                                        <img src="{{ asset('images/thumb_4.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Michael Chen</h6>
                                        <div class="post">CTO, InnovateTech Ltd</div>
                                        <div class="rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Items Slider -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Real User Reviews -->

        <!-- Need Help With Our Services -->
        <section class="faqs-bg section-spacing home-default-abstract pt-5">
            <div class="container pos-rel">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="home-services-imgs">
                            <img src="{{ asset('images/home-default-img-1.png') }}" alt="">
                            <img src="{{ asset('images/home-default-img-2.png') }}" class="off-pattern" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 text-start">
                        <div class="section-title">
                            <span>Ready to Start Your Project</span>
                            <h2 class="wow">Looking for custom software solutions <strong>or want to discuss your
                                    project?</strong></h2>
                            <p>Let's transform your business with innovative software solutions. Our expert team is
                                ready to understand your requirements and deliver technology that drives growth and
                                efficiency for your organization.</p>
                        </div>
                        <div class="btn-set wow fadeInUp">
                            <a href="javascript:" class="btn btn-primary" data-trigger="#signup"><span
                                    class="outer-wrap"><span data-text="Get Free Quote">Get Free
                                        Quote</span></span></a>
                            <a href="{{ url('/contact') }}" class="btn btn-secondary"><span class="outer-wrap"><span
                                        data-text="Contact Us">Contact Us</span></span></a>
                        </div>
                    </div>
                </div>
                <div class="img-abstract">
                    &nbsp;
                </div>
            </div>
        </section>
        <!-- Need Help With Our Services -->

    </main>
    <!-- Page Content End -->

    <!-- Page Footer Start -->
    <div class="footer-wrap home-default">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="logo-footer">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo_light1.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="subscribe-form">
                        <div class="head">Subscribe to Our Newsletter</div>
                        <div class="input-wrap">
                            <input type="text" name="subscribe" placeholder="Enter your email address"
                                class="form-control bordered bottom-only">
                            <button type="submit" class="btn btn-primary"><span class="outer-wrap"><span
                                        data-text="Subscribe">Subscribe</span></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xxl-5 col-lg-5">
                        <div class="row">
                            <div class="col-xxl-6 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="widget-title">About Wsoft</h4>
                                    <p class="footer-text">
                                        We specialize in creating innovative software solutions that transform
                                        businesses. From custom web applications to mobile apps, we deliver technology
                                        that drives growth and success.
                                    </p>
                                    <div class="social-icons">
                                        <ul class="list-unstyled">
                                            <li><a href="javascript:"><i class="bi bi-facebook"></i></a></li>
                                            <li><a href="javascript:"><i class="bi bi-twitter-x"></i></a></li>
                                            <li><a href="javascript:"><i class="bi bi-instagram"></i></a></li>
                                            <li><a href="javascript:"><i class="bi bi-linkedin"></i></a></li>
                                            <li><a href="javascript:"><i class="bi bi-youtube"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="footer-widget-contact d-none">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div><i class="bi bi-geo-alt"></i></div>
                                                <div>Wsoft Technologies, 123 Business Center, Colombo 03, Sri Lanka
                                                </div>
                                            </li>
                                            <li>
                                                <div><i class="bi bi-phone"></i></div>
                                                <div><a href="tel:+94112345678">(+94) 11 234 5678</a></div>
                                            </li>
                                            <li>
                                                <div><i class="bi bi-envelope"></i></div>
                                                <div><a href="mailto:info@wsoft.lk">info@wsoft.lk</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-5 col-sm-6 ms-auto">
                                <div class="footer-widget">
                                    <h4 class="widget-title">Company</h4>
                                    <ul class="list-unstyled icons-listing mb-0 widget-listing">
                                        <li><a href="javascript:">About Us</a></li>
                                        <li><a href="javascript:">Contact Us</a></li>
                                        <li><a href="javascript:">Portfolio</a></li>
                                        <li><a href="javascript:">Our Team</a></li>
                                        <li><a href="javascript:">Careers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-7 col-lg-7 mr-top-footer">
                        <div class="row">

                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="footer-widget">
                                    <h4 class="widget-title">Support</h4>
                                    <ul class="list-unstyled icons-listing mb-0 widget-listing">
                                        <li><a href="javascript:">Getting Started</a></li>
                                        <li><a href="javascript:">Technical Support</a></li>
                                        <li><a href="javascript:">Documentation</a></li>
                                        <li><a href="javascript:">Project Status</a></li>
                                        <li><a href="javascript:">Report Issues</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="footer-widget">
                                    <h4 class="widget-title">Services</h4>
                                    <ul class="list-unstyled icons-listing mb-0 widget-listing">
                                        <li><a href="javascript:">Web Development</a></li>
                                        <li><a href="javascript:">Mobile Apps</a></li>
                                        <li><a href="javascript:">Custom Software</a></li>
                                        <li><a href="javascript:">API Development</a></li>
                                        <li><a href="javascript:">Maintenance</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 ol-12">
                                <div class="footer-widget">
                                    <h4 class="widget-title">Contact Us</h4>

                                    <div class="footer-widget-contact">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div><i class="bi bi-geo-alt"></i></div>
                                                <div>123 Software Park, Tech City, Colombo 03, Sri Lanka</div>
                                            </li>
                                            <li>
                                                <div><i class="bi bi-phone"></i></div>
                                                <div><a href="tel:+94112345678">(+94) 11 234 5678</a></div>
                                            </li>
                                            <li>
                                                <div><i class="bi bi-envelope"></i></div>
                                                <div><a href="mailto:info@wsoft.lk">info@wsoft.lk</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tiny-footer">
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-0">
                            Copyright &copy; <span id="yearText"></span> <strong>Wsoft</strong> Software Solutions.
                            All rights reserved.
                        </div>
                        <div class="col-md-6">
                            <div class="tiny-footer-links">
                                <ul class="list-unstyled list-inline">
                                    <li>
                                        <a href="#">Terms of Service</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Page Footer End -->

    <!-- Back to Top Start -->
    <a id="back-to-top" href="javascript:" class="back-to-top"><i class="bi bi-chevron-up"></i></a>
    <!-- Back to Top End -->

    <!-- Search Popup Start -->
    <div class="overlay overlay-hugeinc">
        <form class="form-inline mt-2 mt-md-0">
            <div class="form-inner">
                <div class="form-inner-div hstack">
                    <i class="srn-search"></i>

                    <div class="w-100">
                        <input class="form-control form-light" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <a href="#" class="overlay-close link-oragne"><i class="bi bi-x"></i></a>
                </div>
            </div>
        </form>
    </div>
    <!-- Search Popup End -->
@endsection
