@extends('layouts.app')

@section('title', 'FAQs - Wsoft Fullstack Software Solutions & Development Services')

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
                <h1>FAQs</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:"><i class="bi-house"></i></a></li>
                        {{-- <li class="breadcrumb-item">About</li> --}}
                        <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!--  Page Breadcrumbs End -->
    </div>
    <!-- Page Header End -->

    <!-- Page Content Start -->
    <main id="body-content">

        <!-- FAQ's For Web Development -->
        <section class="section-spacing pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4 mb-0">
                        <div class="section-title mb-4">
                            <span>Categories FAQ Sections</span>
                            <h2 class="wow"><strong>Web Development</strong></h2>
                            <p>Get answers to common questions about our web development services and processes</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="theme-accordian">
                            <div class="accordion accordion-flush theme-accordian" id="web_development">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingOne-web">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#web_development_1" aria-expanded="false"
                                            aria-controls="web_development_1">
                                            What technologies do you use for web development?
                                        </button>
                                    </h2>
                                    <div id="web_development_1" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-gap-headingOne-web" data-bs-parent="#web_development">
                                        <div class="accordion-body">
                                            We use modern technologies including React, Node.js, PHP, Laravel, MySQL, and
                                            various cloud platforms to build responsive and scalable web applications.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingTwo-web">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#web_development_2"
                                            aria-expanded="false" aria-controls="web_development_2">
                                            How long does it take to build a website?
                                        </button>
                                    </h2>
                                    <div id="web_development_2" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingTwo-web" data-bs-parent="#web_development">
                                        <div class="accordion-body">
                                            Simple websites typically take 2-4 weeks, while complex web applications can
                                            take 2-6 months depending on features and requirements.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingThree-web">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#web_development_3"
                                            aria-expanded="false" aria-controls="web_development_3">
                                            Do you provide responsive design?
                                        </button>
                                    </h2>
                                    <div id="web_development_3" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingThree-web" data-bs-parent="#web_development">
                                        <div class="accordion-body">
                                            Yes, all our websites are built with responsive design to ensure optimal viewing
                                            across all devices including desktops, tablets, and mobile phones.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingFour-web">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#web_development_4"
                                            aria-expanded="false" aria-controls="web_development_4">
                                            Can you integrate third-party APIs?
                                        </button>
                                    </h2>
                                    <div id="web_development_4" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingFour-web" data-bs-parent="#web_development">
                                        <div class="accordion-body">
                                            Absolutely! We have extensive experience integrating payment gateways, social
                                            media APIs, mapping services, and various other third-party APIs.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ's For Web Development -->

        <!-- FAQ's For Mobile Apps -->
        <section class="section-spacing pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4 mb-0">
                        <div class="section-title mb-4">
                            <span>Categories FAQ Sections</span>
                            <h2 class="wow"><strong>Mobile Apps</strong></h2>
                            <p>Learn about our mobile app development process and capabilities</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="theme-accordian">
                            <div class="accordion accordion-flush theme-accordian" id="mobile_apps">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingOne-mobile">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#mobile_apps_1" aria-expanded="false"
                                            aria-controls="mobile_apps_1">
                                            Do you develop for both iOS and Android?
                                        </button>
                                    </h2>
                                    <div id="mobile_apps_1" class="accordion-collapse collapse show"
                                        data-bs-parent="#mobile_apps">
                                        <div class="accordion-body">
                                            Yes, we develop native apps for both iOS and Android platforms, as well as
                                            cross-platform solutions using React Native and Flutter.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingTwo-mobile">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#mobile_apps_2"
                                            aria-expanded="false" aria-controls="mobile_apps_2">
                                            How much does mobile app development cost?
                                        </button>
                                    </h2>
                                    <div id="mobile_apps_2" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingTwo-mobile" data-bs-parent="#mobile_apps">
                                        <div class="accordion-body">
                                            Costs vary based on complexity and features. Simple apps start from $2,000,
                                            while complex enterprise apps can range from $10,000 to $50,000+.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingThree-mobile">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#mobile_apps_3"
                                            aria-expanded="false" aria-controls="mobile_apps_3">
                                            Do you help with app store submission?
                                        </button>
                                    </h2>
                                    <div id="mobile_apps_3" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingThree-mobile" data-bs-parent="#mobile_apps">
                                        <div class="accordion-body">
                                            Yes, we assist with the complete app store submission process for both Apple App
                                            Store and Google Play Store, including all necessary documentation.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingFour-mobile">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#mobile_apps_4"
                                            aria-expanded="false" aria-controls="mobile_apps_4">
                                            Can you add features to existing apps?
                                        </button>
                                    </h2>
                                    <div id="mobile_apps_4" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingFour-mobile" data-bs-parent="#mobile_apps">
                                        <div class="accordion-body">
                                            Absolutely! We can enhance existing mobile applications by adding new features,
                                            improving performance, and updating to latest platform versions.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ's For Mobile Apps -->

        <!-- FAQ's For Support & Maintenance -->
        <section class="section-spacing pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4 mb-0">
                        <div class="section-title mb-4">
                            <span>Categories FAQ Sections</span>
                            <h2 class="wow"><strong>Support & Maintenance</strong></h2>
                            <p>Information about our ongoing support and maintenance services</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="theme-accordian">
                            <div class="accordion accordion-flush theme-accordian" id="support_maintenance">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingOne-support">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#support_maintenance_1" aria-expanded="false"
                                            aria-controls="support_maintenance_1">
                                            What kind of support do you provide?
                                        </button>
                                    </h2>
                                    <div id="support_maintenance_1" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-gap-headingOne-support"
                                        data-bs-parent="#support_maintenance">
                                        <div class="accordion-body">
                                            We provide comprehensive technical support including bug fixes, security
                                            updates, performance optimization, and feature enhancements for all our software
                                            solutions.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingTwo-support">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#support_maintenance_2"
                                            aria-expanded="false" aria-controls="support_maintenance_2">
                                            How quickly do you respond to support requests?
                                        </button>
                                    </h2>
                                    <div id="support_maintenance_2" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingTwo-support"
                                        data-bs-parent="#support_maintenance">
                                        <div class="accordion-body">
                                            We typically respond to support requests within 4-8 hours during business days.
                                            Critical issues are addressed immediately with 24/7 emergency support available.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingThree-support">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#support_maintenance_3"
                                            aria-expanded="false" aria-controls="support_maintenance_3">
                                            Do you provide training for our team?
                                        </button>
                                    </h2>
                                    <div id="support_maintenance_3" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingThree-support"
                                        data-bs-parent="#support_maintenance">
                                        <div class="accordion-body">
                                            Yes, we provide comprehensive training sessions for your team to effectively use
                                            and manage the software solutions we develop for your organization.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingFour-support">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#support_maintenance_4"
                                            aria-expanded="false" aria-controls="support_maintenance_4">
                                            Can you maintain software built by other developers?
                                        </button>
                                    </h2>
                                    <div id="support_maintenance_4" class="accordion-collapse collapse"
                                        aria-labelledby="flush-gap-headingFour-support"
                                        data-bs-parent="#support_maintenance">
                                        <div class="accordion-body">
                                            Yes, we can take over maintenance of existing software projects. We'll first
                                            conduct a thorough code review and provide recommendations for improvements.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ's For Support & Maintenance -->

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
