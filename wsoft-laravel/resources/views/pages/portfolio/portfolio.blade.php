@extends('layouts.app')

@section('title', 'Portfolio - Wsoft Fullstack Software Solutions & Development Services')

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
                <h1>Portfolio</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:"><i class="bi-house"></i></a></li>
                        <!-- <li class="breadcrumb-item">Pages</li> -->
                        <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!--  Page Breadcrumbs End -->
    </div>
    <!-- Page Header End -->

    <!-- Page Content Start -->
    <main id="body-content" class="bg-white">
        <!-- Portfolio 2 Column -->
        <section class="section-spacing pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-9 col-md-12 mx-auto text-center">
                        <div class="section-title text-center">
                            <span>Our Latest Projects</span>
                            <h2 class="wow">Our Portfolio <strong>Showcases Our Expertise</strong></h2>
                            <p>Explore our diverse collection of successful software projects across various industries.
                                From web applications to mobile apps and enterprise solutions, we deliver innovative
                                technology solutions that drive business growth.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul id="portfolio-flters" class="list-unstyled">
                            <li data-filter="*" class="filter-active"><a href="javascript:">All</a></li>
                            <li data-filter=".design"><a href="javascript:">Web Design</a></li>
                            <li data-filter=".development"><a href="javascript:">Development</a></li>
                            <li data-filter=".ideas"><a href="javascript:">Mobile Apps</a></li>
                            <li data-filter=".technology"><a href="javascript:">Enterprise</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="isotope-gallery row">
                            <div class="gallery-item col-lg-6 col-md-5 col-12 design">
                                <div class="portfolio-gallery-item">
                                    <div class="item-img">
                                        <div class="portfolio-img-gallery">
                                            <a href="assets/images/portfolio/portfolio_img_1.jpg"
                                                class="portfolio-img-gallery" title="E-commerce Platform">
                                                <img src="{{ asset('images/portfolio/portfolio_img_1.jpg')}}" class="rounded"
                                                    alt="">
                                            </a>
                                            <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                        </div>

                                        <a href="portfolio-single.html" class="arrow"><i
                                                class="srn-arrow-right"></i></a>
                                    </div>
                                    <div class="item-content">
                                        <h6><a href="portfolio-single.html">E-commerce Platform</a></h6>
                                        <div class="sub-head">Web Development & E-commerce</div>
                                        <p>Custom online marketplace with advanced features including payment
                                            integration and inventory management system</p>

                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item col-lg-6 col-md-5 col-12 development">
                                <div class="portfolio-gallery-item">
                                    <div class="item-img">
                                        <div class="portfolio-img-gallery">
                                            <a href="assets/images/portfolio/portfolio_img_2.jpg"
                                                class="portfolio-img-gallery" title="Business Management System">
                                                <img src="{{ asset('images/portfolio/portfolio_img_2.jpg')}}" class="rounded"
                                                    alt="">
                                            </a>
                                            <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                        </div>

                                        <a href="portfolio-single.html" class="arrow"><i
                                                class="srn-arrow-right"></i></a>
                                    </div>
                                    <div class="item-content">
                                        <h6><a href="portfolio-single.html">Business Management System</a></h6>
                                        <div class="sub-head">Custom Software Development</div>
                                        <p>Comprehensive business management solution with CRM, inventory tracking, and
                                            automated reporting capabilities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item col-lg-6 col-md-5 col-12 ideas">
                                <div class="portfolio-gallery-item">
                                    <div class="item-img">
                                        <div class="portfolio-img-gallery">
                                            <a href="assets/images/portfolio/portfolio_img_3.jpg"
                                                class="portfolio-img-gallery" title="Mobile Banking App">
                                                <img src="{{ asset('images/portfolio/portfolio_img_3.jpg')}}" class="rounded"
                                                    alt="">
                                            </a>
                                            <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                        </div>

                                        <a href="portfolio-single.html" class="arrow"><i
                                                class="srn-arrow-right"></i></a>
                                    </div>
                                    <div class="item-content">
                                        <h6><a href="portfolio-single.html">Mobile Banking App</a></h6>
                                        <div class="sub-head">Mobile App Development</div>
                                        <p>Secure banking application with biometric authentication and real-time
                                            transaction processing capabilities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item col-lg-6 col-md-5 col-12 design">
                                <div class="portfolio-gallery-item">
                                    <div class="item-img">
                                        <div class="portfolio-img-gallery">
                                            <a href="assets/images/portfolio/portfolio_img_4.jpg"
                                                class="portfolio-img-gallery" title="Restaurant Management Portal">
                                                <img src="{{ asset('images/portfolio/portfolio_img_4.jpg')}}" class="rounded"
                                                    alt="">
                                            </a>
                                            <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                        </div>

                                        <a href="portfolio-single.html" class="arrow"><i
                                                class="srn-arrow-right"></i></a>
                                    </div>
                                    <div class="item-content">
                                        <h6><a href="portfolio-single.html">Restaurant Management Portal</a></h6>
                                        <div class="sub-head">Web Application Development</div>
                                        <p>Complete restaurant management system with online ordering, table
                                            reservations, and staff management features</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item col-lg-6 col-md-5 col-12 development">
                                <div class="portfolio-gallery-item">
                                    <div class="item-img">
                                        <div class="portfolio-img-gallery">
                                            <a href="assets/images/portfolio/portfolio_img_5.jpg"
                                                class="portfolio-img-gallery" title="Healthcare Management System">
                                                <img src="{{ asset('images/portfolio/portfolio_img_5.jpg')}}" class="rounded"
                                                    alt="">
                                            </a>
                                            <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                        </div>

                                        <a href="portfolio-single.html" class="arrow"><i
                                                class="srn-arrow-right"></i></a>
                                    </div>
                                    <div class="item-content">
                                        <h6><a href="portfolio-single.html">Healthcare Management System</a></h6>
                                        <div class="sub-head">Custom Software Development</div>
                                        <p>Digital healthcare platform with patient records, appointment scheduling, and
                                            telemedicine capabilities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item col-lg-6 col-md-5 col-12 technology">
                                <div class="portfolio-gallery-item">
                                    <div class="item-img">
                                        <div class="portfolio-img-gallery">
                                            <a href="assets/images/portfolio/portfolio_img_6.jpg"
                                                class="portfolio-img-gallery" title="Enterprise Resource Planning">
                                                <img src="{{ asset('images/portfolio/portfolio_img_6.jpg')}}" class="rounded"
                                                    alt="">
                                            </a>
                                            <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                        </div>

                                        <a href="portfolio-single.html" class="arrow"><i
                                                class="srn-arrow-right"></i></a>
                                    </div>
                                    <div class="item-content">
                                        <h6><a href="portfolio-single.html">Enterprise Resource Planning</a></h6>
                                        <div class="sub-head">Enterprise Software Solution</div>
                                        <p>Comprehensive ERP system integrating finance, HR, inventory, and operations
                                            management modules</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item col-lg-6 col-md-5 col-12 development">
                                <div class="portfolio-gallery-item">
                                    <div class="item-img">
                                        <div class="portfolio-img-gallery">
                                            <a href="assets/images/portfolio/portfolio_img_7.jpg"
                                                class="portfolio-img-gallery" title="Learning Management System">
                                                <img src="{{ asset('images/portfolio/portfolio_img_7.jpg')}}" class="rounded"
                                                    alt="">
                                            </a>
                                            <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                        </div>

                                        <a href="portfolio-single.html" class="arrow"><i
                                                class="srn-arrow-right"></i></a>
                                    </div>
                                    <div class="item-content">
                                        <h6><a href="portfolio-single.html">Learning Management System</a></h6>
                                        <div class="sub-head">Educational Platform Development</div>
                                        <p>Interactive e-learning platform with course management, student tracking, and
                                            assessment tools</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item col-lg-6 col-md-5 col-12 design">
                                <div class="portfolio-gallery-item">
                                    <div class="item-img">
                                        <div class="portfolio-img-gallery">
                                            <a href="assets/images/portfolio/portfolio_img_8.jpg"
                                                class="portfolio-img-gallery" title="Real Estate Portal">
                                                <img src="{{ asset('images/portfolio/portfolio_img_8.jpg')}}" class="rounded"
                                                    alt="">
                                            </a>
                                            <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                        </div>

                                        <a href="portfolio-single.html" class="arrow"><i
                                                class="srn-arrow-right"></i></a>
                                    </div>
                                    <div class="item-content">
                                        <h6><a href="portfolio-single.html">Real Estate Portal</a></h6>
                                        <div class="sub-head">Web Platform Development</div>
                                        <p>Modern real estate platform with property listings, virtual tours, and
                                            mortgage calculator features</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Portfolio 2 Column -->
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
