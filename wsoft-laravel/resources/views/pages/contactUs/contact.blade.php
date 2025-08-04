@extends('layouts.app')

@section('title', 'Contact - Wsoft Fullstack Software Solutions & Development Services')

@section('page-js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("contactusForm");

            if (!form) return;

            const actionUrl = form.getAttribute("action");
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

            $("#contactusForm").validate({
                rules: {
                    First_Name: "required",
                    Last_Name: "required",
                    Email_Address: {
                        required: true,
                        email: true
                    },
                    Phone_Number: "required",
                    Your_Message: "required"
                },
                messages: {
                    First_Name: "Please enter your First Name",
                    Last_Name: "Please enter your Last Name",
                    Email_Address: "Please enter a valid Email",
                    Phone_Number: "Please enter your Phone Number",
                    Your_Message: "Please enter your Message"
                },
                submitHandler: function() {
                    const formData = {
                        _token: csrfToken,
                        First_Name: $("#First_Name").val(),
                        Last_Name: $("#Last_Name").val(),
                        Email_Address: $("#Email_Address").val(),
                        Phone_Number: $("#Phone_Number").val(),
                        Your_Message: $("#Your_Message").val(),
                        Combo_Box: $("select[name='Combo_Box']").val() 
                    };

                    $.ajax({
                        type: "POST",
                        url: actionUrl,
                        data: formData,
                        dataType: "json",
                        success: function(response) {
                            $('#sucessmessage').empty();

                            if (response.status === "success") {
                                $('#sucessmessage').html(
                                    "<div class='alert alert-success'>Message sent successfully!</div>"
                                    );
                                form.reset();
                            } else {
                                const msg = response.message ||
                                    "Sorry, something went wrong. Please try again.";
                                $('#sucessmessage').html(
                                    "<div class='alert alert-danger'>" + msg + "</div>");
                            }
                        },
                        error: function() {
                            $('#sucessmessage').html(
                                "<div class='alert alert-danger'>Server error. Please try again later.</div>"
                                );
                        }
                    });

                    return false;
                }
            });
        });
    </script>
@endsection

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
                <h1>Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:"><i class="bi-house"></i></a></li>
                        {{-- <li class="breadcrumb-item">About</li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!--  Page Breadcrumbs End -->
    </div>
    <!-- Page Header End -->

    <!-- Page Content Start -->
    <main id="body-content" class="bg-white">
        <!-- Contact Form -->
        <section class="section-spacing pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-9 col-md-12 mx-auto text-center">
                        <div class="section-title text-center">
                            <span>Contact Wsoft</span>
                            <h2 class="wow">Ready to start your project? <strong>Let's Connect!</strong></h2>
                            <p>Get in touch with our expert team to discuss your software development needs. We're here to
                                help transform your ideas into powerful digital solutions.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-12 mx-auto">
                        <div id="sucessmessage"> </div>
                        <form action="{{ route('contact.submit') }}" method="post" id="contactusForm"
                            novalidate="novalidate">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6 mb-0">
                                    <input type="text" data-rule-required="true"
                                        data-msg-required="Please enter your First Name" class="form-control"
                                        name="First_Name" id="First_Name" placeholder="First Name*">
                                </div>
                                <div class="col-md-6 mb-0">
                                    <input type="text" data-rule-required="true"
                                        data-msg-required="Please enter your Last Name" class="form-control"
                                        name="Last_Name" id="Last_Name" placeholder="Last Name*">
                                </div>
                                <div class="col-md-6 mb-0">
                                    <input type="email" data-rule-required="true"
                                        data-msg-required="Please enter your Email" class="form-control"
                                        id="Email_Address" name="Email_Address" placeholder="Email Address*" required>
                                </div>
                                <div class="col-md-6 mb-0">
                                    <input type="text" data-rule-required="true"
                                        data-msg-required="Please enter your Number" class="form-control"
                                        id="Phone_Number" name="Phone_Number" placeholder="Phone Number*">
                                </div>
                                <div class="col-md-12 mb-0">
                                    <select class="theme-combo" name="Combo_Box">
                                        <option value="">I'm interested in ...</option>
                                        <option value="">Web Development</option>
                                        <option value="">Mobile App Development</option>
                                        <option value="">Custom Software Solutions</option>
                                        <option value="">E-commerce Development</option>
                                        <option value="">API Integration</option>
                                        <option value="">Maintenance & Support</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-0">
                                    <textarea name="Your_Message" id="Your_Message" name="Your_Message" rows="10" data-rule-required="true"
                                        data-msg-required="Please enter your Message" class="form-control"
                                        placeholder="Tell us about your project requirements"></textarea>
                                </div>
                                <div class="col-md-12 d-grid gap-2">
                                    <button type="submit" class="btn btn-secondary btn-block"><span
                                            class="outer-wrap"><span data-text="Send Message">Send
                                                Message</span></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- Contact Form -->

        <!-- Map Section -->
        {{-- <section>
            <div class="container contact-details-wrap">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-details wow fadeInUp" data-wow-delay="0.1s">
                            <div class="icon-style-border-bottom">
                                <div class="icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="text">
                                    <h6>Our Location</h6>
                                    <p>123 Software Park, Tech City, Colombo 03, Sri Lanka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-details wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-style-border-bottom">
                                <div class="icon">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <div class="text">
                                    <h6>Call Us</h6>
                                    <p>
                                        (+94) 11 234 5678<br>
                                        (+94) 77 123 4567
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mx-auto">
                        <div class="contact-details mt-4 mt-lg-0 mt-0 mt-sm-0 mt-md-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="icon-style-border-bottom">
                                <div class="icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="text">
                                    <h6>Email Us</h6>
                                    <p>
                                        <a href="mailto:info@wsoft.lk">info@wsoft.lk</a><br>
                                        <a href="mailto:support@wsoft.lk">support@wsoft.lk</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-frame">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
            </div>
        </section> --}}
        <!-- Map Section -->
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
