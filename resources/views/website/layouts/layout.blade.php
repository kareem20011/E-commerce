<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset( 'website/images/favicon.png' ) }}">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="{{ asset( 'website/css/material-design-iconic-font.min.css' ) }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset( 'website/css/font-awesome.min.css' ) }}">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="{{ asset( 'website/css/fontawesome-stars.css' ) }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset( 'website/css/meanmenu.css' ) }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset( 'website/css/owl.carousel.min.css' ) }}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{ asset( 'website/css/slick.css' ) }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset( 'website/css/animate.css' ) }}">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="{{ asset( 'website/css/jquery-ui.min.css' ) }}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{ asset( 'website/css/venobox.css' ) }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset( 'website/css/nice-select.css' ) }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset( 'website/css/magnific-popup.css' ) }}">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="{{ asset( 'website/css/bootstrap.min.css' ) }}">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset( 'website/css/helper.css' ) }}">
    <!-- Main Style CSS -->
    <!-- <link href="{{ asset('/website/style.css')}}" rel="stylesheet"> -->
    <link href="{{ asset( 'website/style.css' ) }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="website/style.css"> -->
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset( 'website/css/responsive.css' ) }}">
    <!-- Modernizr js -->
    <script src="{{ asset( 'website/js/vendor/modernizr-2.8.3.min.js' ) }}"></script>
</head>


<body>



    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">

        <header class="li-header-4">

            @include('website.Layouts.topNav')

            @include('website.Layouts.middleNav')

            @include('website.Layouts.bottomNav')

        </header>


        @yield('website.content')


        <footer class="footer">

            @include('website.Layouts.topFooter')

            @include('website.Layouts.middleFooter')

        </footer>

    </div>
    <!-- Body Wrapper End Here -->



    <!-- jQuery-V1.12.4 -->
    <script src="{{ asset( 'website/js/vendor/jquery-1.12.4.min.js' ) }}"></script>
    <!-- Popper js -->
    <script src="{{ asset( 'website/js/vendor/popper.min.js' ) }}"></script>
    <!-- Bootstrap V4.1.3 Fremwork js -->
    <script src="{{ asset( 'website/js/bootstrap.min.js' ) }}"></script>
    <!-- Ajax Mail js -->
    <script src="{{ asset( 'website/js/ajax-mail.js' ) }}"></script>
    <!-- Meanmenu js -->
    <script src="{{ asset( 'website/js/jquery.meanmenu.min.js' ) }}"></script>
    <!-- Wow.min js -->
    <script src="{{ asset( 'website/js/wow.min.js' ) }}"></script>
    <!-- Slick Carousel js -->
    <script src="{{ asset( 'website/js/slick.min.js' ) }}"></script>
    <!-- Owl Carousel-2 js -->
    <script src="{{ asset( 'website/js/owl.carousel.min.js' ) }}"></script>
    <!-- Magnific popup js -->
    <script src="{{ asset( 'website/js/jquery.magnific-popup.min.js' ) }}"></script>
    <!-- Isotope js -->
    <script src="{{ asset( 'website/js/isotope.pkgd.min.js' ) }}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset( 'website/js/imagesloaded.pkgd.min.js' ) }}"></script>
    <!-- Mixitup js -->
    <script src="{{ asset( 'website/js/jquery.mixitup.min.js' ) }}"></script>
    <!-- Countdown -->
    <script src="{{ asset( 'website/js/jquery.countdown.min.js' ) }}"></script>
    <!-- Counterup -->
    <script src="{{ asset( 'website/js/jquery.counterup.min.js' ) }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset( 'website/js/waypoints.min.js' ) }}"></script>
    <!-- Barrating -->
    <script src="{{ asset( 'website/js/jquery.barrating.min.js' ) }}"></script>
    <!-- Jquery-ui -->
    <script src="{{ asset( 'website/js/jquery-ui.min.js' ) }}"></script>
    <!-- Venobox -->
    <script src="{{ asset( 'website/js/venobox.min.js' ) }}"></script>
    <!-- Nice Select js -->
    <script src="{{ asset( 'website/js/jquery.nice-select.min.js' ) }}"></script>
    <!-- ScrollUp js -->
    <script src="{{ asset( 'website/js/scrollUp.min.js' ) }}"></script>
    <!-- Main/Activator js -->
    <script src="{{ asset( 'website/js/main.js' ) }}"></script>
</body>

</html>
