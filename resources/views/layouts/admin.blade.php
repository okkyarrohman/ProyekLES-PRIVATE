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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


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
                    <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i
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
                    <i class="bi bi-menu-button-wide"></i><span>Jadwal</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="keuangan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>Jadwal Tentor</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Jadwal Siswa</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin-materi">
                            <i class="bi bi-circle"></i><span>Tambah Materi</span>
                        </a>
                    </li>
                    <li>
                        <!--
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Data Transaksi Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Paket Bimbel</span>
                        </a>
                    </li>
                -->
                </ul>
            </li><!-- End Keuangan Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tugas-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Lain Lain</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tugas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>Pemesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Gaji Tentor</span>
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
    <body>
        @yield('admin')
    </body>

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Template Main JS File -->
        <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
        </script>
        @if (Session::has('materi_added'))
            <script>
                swal("Thanks!", "{!! session::get('materi_added') !!}", "success", {
                    button: "Close",
                })
            </script>
        @endif <!-- Materi Ditambahkan -->

        @if (Session::has('murid_updated'))
            <script>
                swal("Thanks!", "{!! session::get('murid_updated') !!}", "success", {
                    button: "Close",
                })
            </script>
        @endif <!-- data murid Ditambahkan -->

        @if (Session::has('murid_deleted'))
            <script>
                swal("Thanks!", "{!! session::get('murid_deleted') !!}", "success", {
                    button: "Close",
                })
            </script>
        @endif
        <!-- Notif Data Murid Dihapus-->

        @if (Session::has('murid_ditambah'))
            <script>
                swal("Thanks!", "{!! session::get('murid_ditambah') !!}", "success", {
                    button: "Close",
                })
            </script>
        @endif <!-- Notif Data Murid Ditambahkan-->

        @if (Session::has('tentor_created'))
        <script>
            swal("Thanks!", "{!! session::get('tentor_created') !!}", "success", {
                button: "Close",
            })
        </script>
        @endif <!-- Notif Data Tentor Ditambahkan-->

        @if (Session::has('tentor_deleted'))
        <script>
            swal("Thanks!", "{!! session::get('tentor_deleted') !!}", "success", {
                button: "Close",
            })
        </script>
        @endif
        <!-- Notif Data Tentor Dihapus-->

        @if (Session::has('tentor_updated'))
        <script>
            swal("Thanks!", "{!! session::get('tentor_updated') !!}", "success", {
                button: "Close",
            })
        </script>
        @endif
        <!-- Notif Data Tentor Diedit-->

        
        @if (Session::has('mapel_created'))
        <script>
            swal("Thanks!", "{!! session::get('mapel_created') !!}", "success", {
                button: "Close",
            })
        </script>
        @endif <!-- Notif Data Tentor Ditambahkan-->

        @if (Session::has('mapel_deleted'))
        <script>
            swal("Thanks!", "{!! session::get('mapel_deleted') !!}", "success", {
                button: "Close",
            })
        </script>
        @endif
        <!-- Notif Data Tentor Dihapus-->

        @if (Session::has('mapel_updated'))
        <script>
            swal("Thanks!", "{!! session::get('mapel_updated') !!}", "success", {
                button: "Close",
            })
        </script>
        @endif
        <!-- Notif Data Tentor Diedit-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" crossorigin="anonymous"></script>
</body>

</html>
