<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Harmic - Organic Food HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/webApp/assets/images/favicon.ico" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="/webApp/assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="/webApp/assets/css/vendor/Pe-icon-7-stroke.css" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="/webApp/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="/webApp/assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="/webApp/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="/webApp/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="/webApp/assets/css/plugins/magnific-popup.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="/webApp/assets/css/style.css">

</head>

<body>

    <div class="main-wrapper">

        @include('header')

        @yield('content')

        @include('footer')

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="/webApp/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="/webApp/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="/webApp/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="/webApp/assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="/webApp/assets/js/vendor/jquery.waypoints.js"></script>

    <!--Plugins JS-->
    <script src="/webApp/assets/js/plugins/wow.min.js"></script>
    <script src="/webApp/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="/webApp/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="/webApp/assets/js/plugins/jquery.nice-select.js"></script>
    <script src="/webApp/assets/js/plugins/parallax.min.js"></script>
    <script src="/webApp/assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!--Main JS (Common Activation Codes)-->
    <script src="/webApp/assets/js/main.js"></script>

</body>

</html>