<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>rubel.blog</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets/frontend-assets/')}}/css/vendor.css">
    <link rel="stylesheet" href="{{asset('assets/frontend-assets/')}}/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- script
    ================================================== -->
    <script src="{{asset('assets/frontend-assets/')}}/js/modernizr.js"></script>
    <script defer src="{{asset('assets/frontend-assets/')}}/js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/frontend-assets/')}}/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/frontend-assets/')}}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/frontend-assets/')}}/favicon-16x16.png">
    <link rel="manifest" href="{{asset('assets/frontend-assets/')}}/site.webmanifest">

    <style type="text/css" media="screen">
        .s-styles {
            padding-bottom: var(--vspace-4);
        }
        .s-styles > .row {
            max-width: var(--width-max);
        }
        .s-styles .intro h1 {
            margin-top: 0;
        }
    </style>

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader"> 
    	<div id="loader"></div>
    </div>


    <!-- header
    ================================================== -->
    @include('frontend.includes.header')
    <!-- end s-header -->

    @yield('home-page')
    @yield('about-page')
    @yield('contact-page')

    <!-- footer
    ================================================== -->
    @include('frontend.includes.footer')
    <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="{{asset('assets/frontend-assets/')}}/js/jquery-3.5.0.min.js"></script>
    <script src="{{asset('assets/frontend-assets/')}}/js/plugins.js"></script>
    <script src="{{asset('assets/frontend-assets/')}}/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>