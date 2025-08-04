@extends('layouts.app')

@section('title', 'About Us - Wsoft Fullstack Software Solutions & Development Services')

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
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo_light.svg') }}"
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

        <!--  Page Breadcrumbs Start -->
        <section class="breadcrumbs-page">
            <div class="container">
                <h1>About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:"><i class="bi-house"></i></a></li>
                        <li class="breadcrumb-item">About</li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!--  Page Breadcrumbs End -->
    </div>
    <!-- Page Header End -->

    <!-- Page Content Start -->
    <main id="body-content">
        <!-- About Us -->
        <section class="section-spacing pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-0">
                        <div class="img-gradient">
                            <img src="{{ asset('images/about_us_img.jpg') }}" alt="">
                        </div>
                        <div class="years-started wow fadeInUp">
                            <div class="years">
                                5<sup>+</sup>
                                <span>Years</span>
                            </div>
                            <div class="content fun-fact">
                                <h1>
                                    <span class="timer" data-to="2020" data-speed="2000">2020</span>
                                    <span>Delivering Solutions Since</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="section-title text-start">
                            <span>What We Offer</span>
                            <h2 class="wow">Discover comprehensive <strong>Software Solutions in one place</strong>
                            </h2>
                            <p>We specialize in creating innovative software solutions that transform businesses. From
                                custom web applications to mobile apps and enterprise systems, our expert team delivers
                                technology that drives growth, efficiency, and success for your organization.
                            </p>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-8 col-sm-7 mb-0">
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
                            <div class="col-md-4 col-sm-5">
                                <ul class="list-unstyled icons-listing theme-dark mb-0 check">
                                    <li>API Development</li>
                                    <li>Custom Software</li>
                                    <li>Mobile Apps</li>
                                    <li>Technical Support</li>
                                </ul>
                            </div>
                        </div>
                        <p class="mt-4">Ready to Get Started? <strong>Free Consultation Available - Let's Discuss
                                Your Project</strong> Requirements Today. </p>
                        <a href="{{ url('contact') }}" class="btn btn-default"><span class="outer-wrap"><span
                                    data-text="Contact Us">Contact Us</span></span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-spacing p-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 col-sm-12 mx-auto">
                        <div class="portfolio-slider-wrap-outer">
                            <div class="square-top">
                                <img src="{{ asset('images/square_large.svg') }}" alt="">
                            </div>
                            <div class="portfolio-slider-wrap mt-0">
                                <div class="owl-carousel owl-theme" id="portfolio-slider-single">
                                    <div class="item">
                                        <img src="{{ asset('images/portfolio/slider_single_2.jpg') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/portfolio/slider_single_1.jpg') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/portfolio/slider_single_3.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-spacing pattern-white-bg section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 col-sm-12 mx-auto">
                        <div class="about-video-intro">
                            <div class="section-title text-center light">
                                <span>Our Success Story</span>
                                <h2 class="wow">Software solutions successfully <strong>delivered to <u>satisfied
                                            clients</u></strong></h2>
                            </div>
                            <div class="play-btn wow fadeInUp">
                                <a class="popup-video" href="https://player.vimeo.com/video/7449107" target="_blank"
                                    role="button">
                                    <i class="srn-play"></i>
                                </a>
                                Watch Our Story
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-xl-8 col-sm-12 mx-auto intro-stats">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="icon-statistics light wow pulse" data-wow-delay="0.1s">
                                    <i class="bi bi-arrow-up-circle"></i>
                                    <div class="text-space fun-fact">
                                        <h3><span class="timer" data-to="98" data-speed="2000">98</span>%</h3>
                                        <div>Client Satisfaction</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="icon-statistics light wow pulse" data-wow-delay="0.2s">
                                    <i class="bi bi-arrow-up-circle"></i>
                                    <div class="text-space fun-fact">
                                        <h3><span class="timer" data-to="150" data-speed="2000">150</span>+</h3>
                                        <div>Projects Completed</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 mx-auto">
                                <div class="icon-statistics light wow pulse" data-wow-delay="0.3s">
                                    <i class="bi bi-arrow-up-circle"></i>
                                    <div class="text-space fun-fact">
                                        <h3><span class="timer" data-to="5" data-speed="2000">5</span>+</h3>
                                        <div>Years Experience</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us -->

        <!-- Why Choose Us -->
        <section class="section-spacing bg-light-blue about-why-choose section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-6 mb-0">
                        <div class="section-title text-start">
                            <span>Why Choose Wsoft</span>
                            <h2 class="wow">We build our solutions and <strong>our expertise on core
                                    principles</strong></h2>
                            <p>Our commitment to excellence drives everything we do. From innovative technology
                                solutions to exceptional client service, we deliver software that transforms businesses
                                and creates lasting value for our partners.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xl-3">
                        <div class="tick-icon-bordered">
                            <div class="icon-space">
                                <i class="bi bi-check2"></i>
                            </div>
                            <div class="text-space">
                                <h6>Quality Development</h6>
                                <p>We use industry best practices and modern technologies to ensure every software
                                    solution meets the highest standards of performance and reliability.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xl-3">
                        <div class="tick-icon-bordered">
                            <div class="icon-space">
                                <i class="bi bi-check2"></i>
                            </div>
                            <div class="text-space">
                                <h6>Expert Team</h6>
                                <p>Our skilled developers and engineers bring years of experience across various
                                    technologies and industries to deliver exceptional results.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xl-3">
                        <div class="tick-icon-bordered">
                            <div class="icon-space">
                                <i class="bi bi-check2"></i>
                            </div>
                            <div class="text-space">
                                <h6>24/7 Support</h6>
                                <p>We provide comprehensive technical support and maintenance services to ensure your
                                    software continues to perform optimally after deployment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xl-3">
                        <div class="tick-icon-bordered">
                            <div class="icon-space">
                                <i class="bi bi-check2"></i>
                            </div>
                            <div class="text-space">
                                <h6>Scalable Solutions</h6>
                                <p>Our software solutions are designed to grow with your business, ensuring long-term
                                    value and adaptability to changing requirements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xl-3">
                        <div class="tick-icon-bordered">
                            <div class="icon-space">
                                <i class="bi bi-check2"></i>
                            </div>
                            <div class="text-space">
                                <h6>Security First</h6>
                                <p>We implement robust security measures and follow industry standards to protect your
                                    data and ensure your applications are secure from threats.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xl-3">
                        <div class="tick-icon-bordered">
                            <div class="icon-space">
                                <i class="bi bi-check2"></i>
                            </div>
                            <div class="text-space">
                                <h6>Innovation Focus</h6>
                                <p>We stay current with emerging technologies and continuously explore new approaches to
                                    deliver cutting-edge solutions for our clients.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Why Choose Us -->

        <!-- Call to action -->
        <section class="section-spacing">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6 mb-0">
                        <div class="section-title text-start mb-0">
                            <span>Ready to Start</span>
                            <h2 class="wow">Ready to transform your business? Experience <strong>innovative software
                                    solutions</strong>
                            </h2>
                            <p>Let us help you build the technology foundation your business needs to thrive. Our expert
                                team is ready to discuss your project requirements and deliver solutions that drive
                                growth and efficiency.</p>
                            <div class="arrow-read-more">
                                <a href="#">Get Free Quote <i class="srn-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 offset-lg-1 mt-5 mt-lg-0">
                        <div class="border-style-accordian secondary">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            What types of software do you develop?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            We develop custom web applications, mobile apps, enterprise software,
                                            e-commerce platforms, and API integrations using modern technologies and
                                            frameworks.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            How long does development take?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Project timelines vary based on complexity. Simple projects take 2-4 weeks,
                                            while complex enterprise solutions may require 3-6 months or more.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Do you provide ongoing support?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Yes, we offer comprehensive support and maintenance services including bug
                                            fixes, security updates, feature enhancements, and technical support.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action -->

        <!-- Real User Reviews -->
        <section class="section-spacing bg-light-blue">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 mb-0 p-0">
                        <div class="faqs-side-img">
                            <img src="{{ asset('images/testimonials_img.jpg') }}" class="d-lg-none d-block"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="testimonial-single-wrap wow slideInUp">
                            <div class="owl-carousel owl-theme" id="testimonials-slider-leftimg">
                                <div class="item">
                                    <div class="testimonial-single">
                                        <h6>Outstanding software development service
                                            that transformed our business</h6>
                                        <p>Wsoft delivered exactly what we needed - a robust e-commerce platform that
                                            has significantly improved our online sales. Their technical expertise and
                                            attention to detail were exceptional throughout the entire development
                                            process.</p>
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

                                <div class="item">
                                    <div class="testimonial-single">
                                        <h6>Professional team with excellent
                                            project management skills</h6>
                                        <p>The mobile app they developed for us exceeded our expectations. The user
                                            interface is intuitive and the performance is flawless. Wsoft's team was
                                            responsive and delivered the project on time and within budget.</p>
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

                                <div class="item">
                                    <div class="testimonial-single">
                                        <h6>Reliable partner for all our
                                            software development needs</h6>
                                        <p>We've worked with Wsoft on multiple projects and they consistently deliver
                                            high-quality solutions. Their custom CRM system has streamlined our
                                            operations and improved our customer service significantly.</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Real User Reviews -->

        <!-- Our Partners -->
        <section class="section-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-6 mx-auto text-center">
                        <div class="section-title text-center">
                            <span>Trusted by leading brands</span>
                            <h2 class="wow">Our clients trust us to <strong>deliver exceptional software
                                    solutions</strong>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-6 mb-0">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-6 mb-0">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-6 mb-0">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-6 mb-0">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-6 mb-0">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client5.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-sm-6 col-6 mb-0">
                        <div class="img-partner">
                            <img src="{{ asset('images/partner/img-client6.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-5 col-md-9 mx-auto">
                        <div class="partner-text arrow-read-more fun-fact">
                            <p>Over <span><small class="timer" data-to="150" data-speed="2000">150</small>+
                                    Projects</span> delivered successfully worldwide</p>
                            <a href="contact.html" class="btn-link-secondary">Start Your Project <i
                                    class="srn-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Partners -->

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
