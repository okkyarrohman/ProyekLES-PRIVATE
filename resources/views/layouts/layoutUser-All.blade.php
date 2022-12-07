<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>LES PRIVATE</title>

    <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="{{ asset('css/css-user/bootstrap.min.css') }}">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link rel="stylesheet" href="{{ asset('css/css-user/custom.css') }}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/user-dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="/user-materi">Materi</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Lihat Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li>
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
                    </li>
                </ul>
                </li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="jumbotron feature">
        <div class="container">
            <h1><span class="glyphicon glyphicon-equalizer"></span> LES PRIVATE.COM</h1>
            <p>Tempat untuk belajar materi sesuai ujian nasional pada tahun ini, dan terpecaya untuk lulus</p>
        </div>
    </div>

    @yield('materi')



    <!-- jQuery -->
    <script src="{{ asset('js/js-user/jquery-1.11.3.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/js-user/bootstrap.min.js') }}"></script>

    <!-- IE10 viewport bug workaround -->
    <script src="{{ asset('js/js-user/ie10-viewport-bug-workaround.js') }}"></script>

    <!-- Placeholder Images -->

    <script src="{{ asset('js/js-user/holder.min.js') }}"></script>

</body>

</html>
