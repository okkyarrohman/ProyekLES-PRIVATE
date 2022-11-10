<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TESTED</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('css/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-datatables/style.css') }}" rel="stylesheet">



    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">LES PRIVATE</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->




            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="/berita">
                    <i class="bi bi-grid"></i>
                    <span>Berita</span>
                </a>
            </li><!-- End Dashboard Nav -->


            <li class="nav-heading">Account</li>
            <div
                class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link collapsed">
                                <i class bi bi-card-list></i>
                                <span>Dashboard</span>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link collapsed">
                                <i class bi bi-box-arrow-in-right></i>
                                <span>Login</span>
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"class="nav-link collapsed">
                                    <i class bi bi-card-list></i>
                                    <span>Register</span>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">



        @yield('index-admin')

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('/js/apexcharts/apexcharts.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/js/chart.js/chart.min.js') }}"></script>
        <script src="{{ asset('/js/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('/js/quill/quill.min.js') }}"></script>
        <script src="{{ asset('/js/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('/js/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>



</body>

</html>
