@extends('layouts.app')

@section('title', 'Our Team - Wsoft Fullstack Software Solutions & Development Services')

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
                <h1>Our Team</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:"><i class="bi-house"></i></a></li>
                        <li class="breadcrumb-item">About</li>
                        <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!--  Page Breadcrumbs End -->
    </div>
    <!-- Page Header End -->

    <!-- Page Content Start -->
    <main id="body-content">
        <!-- Our Team Card -->
        <section class="section-spacing pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-6 mx-auto text-center">
                        <div class="section-title text-center">
                            <span>Meet Our Team</span>
                            <h2 class="wow">Our Expert Developers Always Ready <strong>To Build Your
                                    Solutions</strong></h2>
                            <p>Our talented team of software developers, engineers, and designers brings years of
                                experience and expertise to every project. We're passionate about creating innovative
                                technology solutions that drive business success.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xl-4 col-lg-6">
                        <div class="team-wrap">
                            <div class="img">
                                <a href="team-single.html">
                                    <img src="{{ asset('images/team/team_img_1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h6><a href="team-single.html">Arjuna Perera</a></h6>
                                <div class="post">
                                    Lead Software Developer
                                </div>
                                <ul class="list-unstyled social-icons">
                                    <li><a href="javascript:"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-twitter-x"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-instagram"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-linkedin"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                                <div class="arrow-read-more">
                                    <a href="team-single.html">view profile <i class="srn-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 col-lg-6">
                        <div class="team-wrap">
                            <div class="img">
                                <a href="team-single.html">
                                    <img src="{{ asset('images/team/team_img_2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h6><a href="team-single.html">Nimali Silva</a></h6>
                                <div class="post">
                                    UI/UX Designer
                                </div>
                                <ul class="list-unstyled social-icons">
                                    <li><a href="javascript:"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-twitter-x"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-instagram"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-linkedin"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                                <div class="arrow-read-more">
                                    <a href="team-single.html">view profile <i class="srn-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 col-lg-6">
                        <div class="team-wrap">
                            <div class="img">
                                <a href="team-single.html">
                                    <img src="{{ asset('images/team/team_img_3.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h6><a href="team-single.html">Kasun Fernando</a></h6>
                                <div class="post">
                                    Mobile App Developer
                                </div>
                                <ul class="list-unstyled social-icons">
                                    <li><a href="javascript:"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-twitter-x"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-instagram"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-linkedin"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                                <div class="arrow-read-more">
                                    <a href="team-single.html">view profile <i class="srn-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 col-lg-6">
                        <div class="team-wrap">
                            <div class="img">
                                <a href="team-single.html">
                                    <img src="{{ asset('images/team/team_img_4.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h6><a href="team-single.html">Tharindi Jayasinghe</a></h6>
                                <div class="post">
                                    Project Manager
                                </div>
                                <ul class="list-unstyled social-icons">
                                    <li><a href="javascript:"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-twitter-x"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-instagram"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-linkedin"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                                <div class="arrow-read-more">
                                    <a href="team-single.html">view profile <i class="srn-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 col-lg-6">
                        <div class="team-wrap">
                            <div class="img">
                                <a href="team-single.html">
                                    <img src="{{ asset('images/team/team_img_5.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h6><a href="team-single.html">Dilshan Bandara</a></h6>
                                <div class="post">
                                    Backend Developer
                                </div>
                                <ul class="list-unstyled social-icons">
                                    <li><a href="javascript:"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-twitter-x"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-instagram"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-linkedin"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                                <div class="arrow-read-more">
                                    <a href="team-single.html">view profile <i class="srn-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 col-lg-6">
                        <div class="team-wrap">
                            <div class="img">
                                <a href="team-single.html">
                                    <img src="{{ asset('images/team/team_img_6.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h6><a href="team-single.html">Chamari Wijesinghe</a></h6>
                                <div class="post">
                                    Quality Assurance Engineer
                                </div>
                                <ul class="list-unstyled social-icons">
                                    <li><a href="javascript:"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-twitter-x"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-instagram"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-linkedin"></i></a></li>
                                    <li><a href="javascript:"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                                <div class="arrow-read-more">
                                    <a href="team-single.html">view profile <i class="srn-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Our Team Card -->
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
