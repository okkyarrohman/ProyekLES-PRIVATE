<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LES PRIVATE</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin.css') }}">


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
                <a class="nav-link collapsed" href="/admin-dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Pendataan</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/admin-datatentor">
                            <i class="bi bi-circle"></i><span>Data Tentor</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-datamurid">
                            <i class="bi bi-circle"></i><span>Data Murid</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-datamapel">
                            <i class="bi bi-circle"></i><span>Data Mapel</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-badges.html">
                            <i class="bi bi-circle"></i><span>Data Jadwal Bimbel</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Pendataan Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#keuangan-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Keuangan</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="keuangan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>Gaji Tutor</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Data Transaksi Pemesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Data Transaksi Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Paket Bimbel</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Keuangan Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tugas-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Tugas</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tugas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>Tugas</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Materi</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tugas Nav -->

            <br>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#akun-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Account</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="akun-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/profile') }}" class="nav-link collapsed">
                                    <i class bi bi-card-list></i>
                                    Profile
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
                        @endif
                    </li>
                </ul>
            </li><!-- End Akun Nav -->

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        @yield('admin')


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

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
        </script>



</body>

</html>
