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
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/berita.css') }}">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('css/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('login-regist/css/style.css') }}" rel="stylesheet">



    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

    @yield('index-admin')



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

    <script>
        function onSuccess(googleUser) {
            console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
        }

        function onFailure(error) {
            console.log(error);
        }

        function renderButton() {
            gapi.signin2.render('my-signin2', {
                'scope': 'profile email',
                'width': 240,
                'height': 50,
                'longtitle': true,
                'theme': 'dark',
                'onsuccess': onSuccess,
                'onfailure': onFailure
            });
        }
    </script>
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

</body>

</html>
