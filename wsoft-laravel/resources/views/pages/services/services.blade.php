@extends('layouts.app')

@section('title', 'Services - Wsoft Fullstack Software Solutions & Development Services')



@section('content')

    <!-- Page Header Start -->
    <div class="bg-primary header-bg">
        <header>
            <div class="container">
                <div class="top-bar">
                    <div class="row">
                        <div class="col-md-6 order-md-last">
                            <div class="language-links">
                                <a href="#">Eng</a>
                                <a href="#">FR</a>
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
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('images/logo_light.svg') }}"
                            alt=""></a>

                    <form class="d-flex order-lg-last ms-3 align-items-center">
                        <a href="#" id="search_home">
                            <i class="srn-search"></i>
                        </a>
                        <!-- <a class="signup-btn btn btn-outline-light text-nowrap" data-trigger="#signup">
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
                            <a class="navbar-brand" href="index.php"><img src="{{ asset('images/logo_dark.svg') }}"
                                    alt=""></a>
                            <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                        {{-- import headerMenu Start --}}
                        @include('components.header.headerMenu')
                        {{-- import headerMenu End --}}
                    </div>
                </div>
            </nav>
        </header>

        <b class="screen-overlay"></b>
        <!--  Signup Form Start -->
        {{-- <article class="mobile-offcanvas offcanvas-right" id="signup">
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
        </article> --}}
        <!--  Signup Form Start -->

        <!--  Page Breadcrumbs Start -->
        <section class="breadcrumbs-page">
            <div class="container">
                <h1>Our Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:"><i class="bi-house"></i></a></li>
                        <!-- <li class="breadcrumb-item">Pages</li> -->
                        <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!--  Page Breadcrumbs End -->
    </div>
    <!-- Page Header End -->

    <!-- Page Content Start -->
    <main id="body-content" class="bg-white">
        <!-- Our services Content -->

        <!-- Process Management -->
        <section class="section-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-7 col-lg-9 col-md-12 mx-auto text-center">
                        <div class="section-title text-center">
                            <span>Development Process</span>
                            <h2 class="wow">Streamlined solutions for your <strong>Software Development
                                    needs</strong></h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-lg-last">
                        <div class="nav nav-pills tabbing-content" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" href="javascript:" role="tab"
                                aria-controls="v-pills-home" aria-selected="true">

                                <h6><i class="srn-check-circle"></i> Custom Web Application Development</h6>
                                <p>Build scalable and secure web applications tailored to your business requirements
                                    using modern frameworks and technologies.</p>
                            </a>
                            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" href="javascript:" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">
                                <h6><i class="srn-check-circle"></i> Mobile App Development & Deployment</h6>
                                <p>Create native and cross-platform mobile applications with seamless user experience
                                    and robust performance across all devices.</p>
                            </a>
                            <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" href="javascript:" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false">
                                <h6><i class="srn-check-circle"></i> Enterprise Software Solutions & Integration</h6>
                                <p>Develop comprehensive enterprise systems with API integrations, database management,
                                    and workflow automation capabilities.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tab-content order-md-first" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <img src="{{ asset('images/tabbing_img.png') }}" alt="">
                                <p class="txt-dark text-center">Latest projects delivered from <strong
                                        class="txt-secondary">2023</strong> to <strong class="txt-secondary">2025</strong>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <img src="{{ asset('images/tabbing_img.png') }}" alt="">
                                <p class="txt-dark text-center">Mobile solutions delivered from <strong
                                        class="txt-secondary">2023</strong> to <strong class="txt-secondary">2025</strong>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <img src="{{ asset('images/tabbing_img.png') }}" alt="">
                                <p class="txt-dark text-center">Enterprise projects completed from <strong
                                        class="txt-secondary">2023</strong> to <strong class="txt-secondary">2025</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Process Management -->


        <!-- Our Stats -->
        {{-- <section class="txt-white section-padding pattern_abstract_bg pos-rel section-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 mb-0">
                        <div class="section-title text-start light">
                            <span>About Wsoft</span>
                            <h2 class="wow">We Partner With You To <strong>Transform Your Business</strong></h2>
                            <p>Our experienced team of software developers and engineers work closely with clients to
                                deliver innovative technology solutions. We specialize in creating custom software that
                                drives growth and operational efficiency.
                            </p>
                        </div>
                        <div class="hstack gap-4 mb-5 home-stats">
                            <div class="tick-icon-big light-txt">
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
                            <div class="tick-icon-big light-txt">
                                <div class="icon-space">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="text-space fun-fact">
                                    <h2><span class="timer" data-to="25" data-speed="2000">25</span>+</h2>
                                    <div>Projects delivered</div>
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
                        <a href="about-us.html" class="btn btn-outline-light"><span class="outer-wrap"><span
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
        </section> --}}
        <!-- Our Stats -->

        <!-- Services Section -->
        <section class="our-service-pattern section-padding pt-0">
            <div class="container">
                <div class="row pos-rel">
                    <div class="col-xl-6 col-lg-10 mx-auto">
                        <div class="section-title text-center">
                            <span>Our Services</span>
                            <h2 class="wow">Explore our comprehensive <strong>Software Development
                                    solutions</strong></h2>
                            <p>We offer a full range of software development services designed to meet your business
                                needs. From custom web applications to mobile apps and enterprise solutions, our expert
                                team delivers quality technology solutions.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-0">
                        <div class="icon-style-top-icon">
                            <div class="icon">
                                <i class="srn-icon-digital-analytics-monitor"></i>
                            </div>
                            <div class="text">
                                <h6>Web Development</h6>
                                <p>Custom responsive websites and web applications built with modern frameworks and
                                    technologies.</p>
                            </div>
                            <div class="arrow-read-more">
                                <a href="service-single.html">read more <i class="srn-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-0">
                        <div class="icon-style-top-icon">
                            <div class="icon">
                                <i class="srn-icon-digital-marketing"></i>
                            </div>
                            <div class="text">
                                <h6>Mobile App Development</h6>
                                <p>Native and cross-platform mobile applications for iOS and Android with exceptional
                                    user experience.</p>
                            </div>
                            <div class="arrow-read-more">
                                <a href="service-single.html">read more <i class="srn-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-0">
                        <div class="icon-style-top-icon">
                            <div class="icon">
                                <i class="srn-icon-email-maketing"></i>
                            </div>
                            <div class="text">
                                <h6>Custom Software</h6>
                                <p>Tailored software solutions designed specifically for your business requirements and
                                    workflows.</p>
                            </div>
                            <div class="arrow-read-more">
                                <a href="service-single.html">read more <i class="srn-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-0">
                        <div class="icon-style-top-icon">
                            <div class="icon">
                                <i class="srn-icon-marketing-automation"></i>
                            </div>
                            <div class="text">
                                <h6>API Development</h6>
                                <p>Robust APIs and integrations to connect your systems and enable seamless data
                                    exchange.</p>
                            </div>
                            <div class="arrow-read-more">
                                <a href="service-single.html">read more <i class="srn-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-0">
                        <div class="icon-style-top-icon">
                            <div class="icon">
                                <i class="srn-icon-social-media-management"></i>
                            </div>
                            <div class="text">
                                <h6>Database Design</h6>
                                <p>Efficient database architecture and management solutions for optimal performance and
                                    scalability.</p>
                            </div>
                            <div class="arrow-read-more">
                                <a href="service-single.html">read more <i class="srn-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-0">
                        <div class="icon-style-top-icon">
                            <div class="icon">
                                <i class="srn-icon-keyword-research-second"></i>
                            </div>
                            <div class="text">
                                <h6>Technical Support</h6>
                                <p>Ongoing maintenance, updates, and technical support to keep your software running
                                    smoothly.</p>
                            </div>
                            <div class="arrow-read-more">
                                <a href="service-single.html">read more <i class="srn-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section -->


        <!-- How It Works -->
        <section class="section-spacing pt-0">
            <div class="how-it-works-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="how-it-works wow pulse" data-wow-delay="0.1s">
                                <div class="count">01</div>
                                <div class="content">
                                    <h6>Analysis & Planning</h6>
                                    <p>We analyze your requirements and create a comprehensive development plan tailored
                                        to your business objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="how-it-works wow pulse" data-wow-delay="0.2s">
                                <div class="count">02</div>
                                <div class="content">
                                    <h6>Design & Development</h6>
                                    <p>Our expert team designs and develops your software using cutting-edge
                                        technologies and best practices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mx-auto">
                            <div class="how-it-works wow pulse" data-wow-delay="0.3s">
                                <div class="count">03</div>
                                <div class="content">
                                    <h6>Testing & Deployment</h6>
                                    <p>Thorough testing ensures quality, followed by seamless deployment and ongoing
                                        support for your solution.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partner-text arrow-read-more text-center fun-fact">
                        <p>Over <span><small class="timer" data-to="150" data-speed="2000">150</small>+
                                Projects</span> delivered successfully</p>
                        <a href="contact.html" class="btn-link-secondary">Start Your Project <i
                                class="srn-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- How It Works -->


        <!-- Our Case Studies -->
        <section class="section-spacing bg-light-blue section-padding home-case-study">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-5 mb-0">
                        <div class="section-title text-start">
                            <span>Our Portfolio</span>
                            <h2 class="mb-0 wow">Software solutions we deliver and <strong>clients we serve</strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 ms-auto mb-4 mb-lg-0">
                        <div>
                            Explore our diverse portfolio of successful software projects across various industries.
                            From e-commerce platforms to enterprise management systems, we've delivered innovative
                            technology solutions that drive business growth.
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

                                <a href="portfolio-single.html" class="arrow"><i class="srn-arrow-right"></i></a>
                            </div>
                            <div class="item-content">
                                <h6><a href="portfolio-single.html">E-commerce Platform</a></h6>
                                <div class="sub-head">Web Development & E-commerce</div>
                                <p>Custom online marketplace with advanced features including payment integration and
                                    inventory management system</p>
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

                                <a href="portfolio-single.html" class="arrow"><i class="srn-arrow-right"></i></a>
                            </div>
                            <div class="item-content">
                                <h6><a href="portfolio-single.html">Mobile Banking App</a></h6>
                                <div class="sub-head">Mobile App Development</div>
                                <p>Secure banking application with biometric authentication and real-time transaction
                                    processing capabilities</p>
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

                                <a href="portfolio-single.html" class="arrow"><i class="srn-arrow-right"></i></a>
                            </div>
                            <div class="item-content">
                                <h6><a href="portfolio-single.html">Enterprise Management System</a></h6>
                                <div class="sub-head">Custom Software Development</div>
                                <p>Comprehensive business management solution with CRM, inventory tracking, and
                                    automated reporting features</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Case Studies -->

        <!-- Pricing Plan 3 Columnn -->
        {{-- <section class="pricing-bg section-spacing section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-5 mx-auto text-center">
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
                    <div class="col-xl-9 col-lg-11 mx-auto">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pricing-wrap wow pulse" data-wow-delay="0.1s">
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
                                    <ul class="list-unstyled icons-listing theme-secondary tick">
                                        <li>Simple website</li>
                                        <li>Mobile responsive</li>
                                        <li>Basic SEO setup</li>
                                    </ul>

                                    <div class="text-center">
                                        <a href="our-pricing.html" class="text-uppercase btn btn-default"><span
                                                class="outer-wrap"><span data-text="Get Started">Get
                                                    Started</span></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing-wrap popular-plan wow pulse" data-wow-delay="0.2s">
                                    <div class="pricing-saving-wrap">
                                        <span class="pricing-saving popular-saving">
                                            Most Popular
                                        </span>
                                        <span class="pricing-saving">
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
                                    <ul class="list-unstyled icons-listing theme-light txt-light tick">
                                        <li>Dynamic website</li>
                                        <li>Database integration</li>
                                        <li>Basic admin panel</li>
                                        <li>Payment gateway</li>
                                    </ul>

                                    <div class="text-center">
                                        <a href="our-pricing.html" class="text-uppercase btn btn-outline-light"><span
                                                class="outer-wrap"><span data-text="Get Started">Get
                                                    Started</span></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing-wrap wow pulse" data-wow-delay="0.3s">
                                    <div class="pricing-saving-wrap">
                                        <span class="pricing-saving">
                                            Enterprise
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
                                    <ul class="list-unstyled icons-listing theme-secondary tick">
                                        <li>Full web application</li>
                                        <li>Advanced admin panel</li>
                                        <li>API integration</li>
                                        <li>Security features</li>
                                        <li>Mobile responsive</li>
                                    </ul>

                                    <div class="text-center">
                                        <a href="our-pricing.html" class="text-uppercase btn btn-default"><span
                                                class="outer-wrap"><span data-text="Get Started">Get
                                                    Started</span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Pricing Plan 3 Columnn -->

        <!-- Get Your Answers -->
        <section class="faqs-bg section-spacing">
            <div class="container pos-rel">
                <div class="row align-items-center">
                    <div class="col-lg-5 pos-rel offset-lg-2 offset-md-4 col-md-8 mb-0">
                        <img src="{{ asset('images/img-faqs.png') }}" class="faqs-imgs" alt="">
                        <div class="section-title text-start">
                            <span>Frequently Asked Questions</span>
                            <h2 class="wow">Everything you need to <strong>know about our services</strong></h2>
                            <p>Get answers to common questions about our software development process, project
                                timelines, and support services to help you make informed decisions.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 pos-rel offset-lg-0 offset-md-4 col-md-8">
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
                <div class="img-abstract">
                    &nbsp;
                </div>

                <div class="our-faqs-cta">
                    <div class="content">
                        <h3>Ready to transform your business with custom software solutions? Let us help you build your
                            next project</h3>
                        <div class="btn-set">
                            <a href="javascript:" class="btn btn-secondary" data-trigger="#"><span
                                    class="outer-wrap"><span data-text="Get A Free Quote">Get A Free
                                        Quote</span></span></a>
                            <a href="{{ url('contact') }}" class="btn btn-default"><span class="outer-wrap"><span
                                        data-text="Contact Us">Contact Us</span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Get Your Answers -->

        <!-- Real User Reviews -->
        {{-- <section class="section-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-5 mx-auto text-center">
                        <div class="section-title text-center">
                            <span>Client Testimonials</span>
                            <h2 class="wow">What our satisfied clients <strong>say about our work</strong></h2>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel owl-theme" id="testimonials-slider-shadow">
                    <div class="item">
                        <div class="testimonial-shadow">
                            <div class="thumb-img">
                                <img src="{{ asset('images/thumb_1.jpg') }}" alt="">
                            </div>
                            <h6 class="name">John Anderson</h6>
                            <div class="post">CEO, TechVenture Solutions</div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <hr class="divider-default">
                            <h2>Outstanding software development service
                                that transformed our business</h2>
                            <p>Wsoft delivered exactly what we needed - a robust e-commerce platform that has
                                significantly improved our online sales. Their technical expertise was exceptional.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-shadow">
                            <div class="thumb-img">
                                <img src="{{ asset('images/thumb_2.jpg') }}" alt="">
                            </div>
                            <h6 class="name">Maria Rodriguez</h6>
                            <div class="post">Operations Manager, Digital Health</div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <hr class="divider-default">
                            <h2>Professional team with excellent
                                project management skills</h2>
                            <p>The mobile app they developed for us exceeded our expectations. The user interface is
                                intuitive and the performance is flawless. Delivered on time and within budget.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-shadow">
                            <div class="thumb-img">
                                <img src="{{ asset('images/thumb_3.jpg') }}" alt="">
                            </div>
                            <h6 class="name">Sarah Thompson</h6>
                            <div class="post">Director, GlobalTrade Corp</div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <hr class="divider-default">
                            <h2>Reliable partner for all our
                                software development needs</h2>
                            <p>We've worked with Wsoft on multiple projects and they consistently deliver high-quality
                                solutions. Their custom CRM system has streamlined our operations significantly.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-shadow">
                            <div class="thumb-img">
                                <img src="{{ asset('images/thumb_4.jpg') }}" alt="">
                            </div>
                            <h6 class="name">Michael Chen</h6>
                            <div class="post">CTO, InnovateTech Ltd</div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <hr class="divider-default">
                            <h2>Innovative solutions with cutting-edge
                                technology implementation</h2>
                            <p>The web application Wsoft built for our company has revolutionized how we manage our
                                inventory and sales. Their expertise in modern technologies is impressive.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-shadow">
                            <div class="thumb-img">
                                <img src="{{ asset('images/thumb_5.jpg') }}" alt="">
                            </div>
                            <h6 class="name">David Wilson</h6>
                            <div class="post">Founder, StartupHub</div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <hr class="divider-default">
                            <h2>Excellent communication and
                                timely project delivery</h2>
                            <p>Wsoft's team understood our vision perfectly and delivered a custom software solution
                                that exceeded our expectations. Their support throughout the process was outstanding.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-shadow">
                            <div class="thumb-img">
                                <img src="{{ asset('images/thumb_6.jpg') }}" alt="">
                            </div>
                            <h6 class="name">Lisa Park</h6>
                            <div class="post">Director, FinanceFlow Systems</div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <hr class="divider-default">
                            <h2>Quality software solutions with
                                exceptional ongoing support</h2>
                            <p>The enterprise system they developed has transformed our business operations. Wsoft
                                continues to provide excellent maintenance and support services even after project
                                completion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Real User Reviews -->

        <!-- Our services Content -->
    </main>
    <!-- Page Content End -->

    <!-- Page Footer Start -->
    {{-- import footer --}}
    @include('components.footer.footer')
    <!-- Page Footer Start -->

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
