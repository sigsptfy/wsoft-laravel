<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mannatstudio.com/html/Wsoft/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 13:51:44 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>

    <meta name="author" content="Mannat Studio">
    <meta name="description"
        content="Wsoft is a Responsive HTML5 Template for SaaS, cryptocurrency, app and tech companies, as well as for digital studios.">
    <meta name="keywords"
        content="Wsoft, themeforest template, app, app landing page, App Showcase, cryptocurrency, digital studio, saas, saas landing, saas theme, software, software company website, software startup, startup, startup landing page, startup wordpress, technology">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&amp;display=swap"
        rel="stylesheet">
    <!-- Plugin Style CSSS -->
    <link rel="stylesheet" href="{{ asset('css/theme-plugins.min.css') }}">
    <!-- Main Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Page Specific CSS -->
    @yield('page-css')

</head>

<body>

    <!-- Page loader Start -->
    <div id="pageloader">
        <div class="loader-item">
            <img src="{{ asset('images/tail-spin.svg') }}" width="80" alt="">
        </div>
    </div>
    <!-- Page loader End -->

    <!-- Main Start -->
    @yield('content')
    <!-- Main End -->

    <!-- Jquery Library JS -->
    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('js/jquery-min.js') }}"></script>
    <!-- Theme Plugin -->
    <script src="{{ asset('js/theme-plugins.min.js') }}"></script>
    <!-- Theme Custom -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"64224fc8786846928480d180dfc466bd","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from mannatstudio.com/html/Wsoft/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 13:53:45 GMT -->

</html>
