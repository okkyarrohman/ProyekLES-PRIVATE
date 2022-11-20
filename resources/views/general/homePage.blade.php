<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Les Private</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('bt-template/css/bootstrap-grid.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('bt-template/css/style.css') }}">
    <!-- responsive-->
    <link rel="stylesheet" href="{{ asset('bt-template/css/responsive.css') }}">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="bt-template/images/loading.gif" alt="" /></div>
    </div>
    <!-- end loader -->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a class="active" href="index.html">Home</a>
        <div class="login">
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

    </div>
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head-top">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.html">LES PRIVATE</a>
                        </div>
                    </div>
                    <div class="col" style="text-align: right">
                        <ul>
                            <li>
                                <button class="openbtn" onclick="openNav()"><img src="bt-template/images/menu_btn.png">
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- start slider section -->
    <div id="top_section" class=" banner_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive"
                                                            src="bt-template/images/top_img2.png" alt="#" />
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Belajar Edukatif<br> Mudah sekali untuk dipahami.</h1>
                                                    <p>Banyak Macam persoalan yang bisa dipecahkan disini
                                                    </p>
                                                    <a class="read_more" href="Javascript:void(0)">Read More </a><a
                                                        class="read_more" href="Javascript:void(0)">Get A Quote </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive"
                                                            src="bt-template/images/top_img1.png" alt="#" />
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Sharing Session <br> Dengan siswa siswa lainnya</h1>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered
                                                    </p>
                                                    <a class="read_more" href="Javascript:void(0)">Read More </a><a
                                                        class="read_more" href="Javascript:void(0)">Get A Quote </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive"
                                                            src="bt-template/images/top_img3.png" alt="#" />
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Latihan Soal <br> Banyak sekali jawaban yang bisa didapatkan
                                                    </h1>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered
                                                    </p>
                                                    <a class="read_more" href="Javascript:void(0)">Read More </a><a
                                                        class="read_more" href="Javascript:void(0)">Get A Quote </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->
    <!-- wallet -->
    <div class="wallet">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="bt-template/images/wa1.svg" alt="#" /></i>
                        <h3>FITUR PERTAMA</h3>
                        <p>It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="bt-template/images/wa2.svg" alt="#" /></i>
                        <h3>FITUR KEDUA</h3>
                        <p>It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="bt-template/images/wa3.svg" alt="#" /></i>
                        <h3>FITUR KETIGA </h3>
                        <p>It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="bt-template/images/wa4.svg" alt="#" /></i>
                        <h3>FITUR</h3>
                        <p>It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wallet -->
    <!-- testimonial -->
    <div class="testimonial">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="border_testi">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="titlepage text_align_center">
                                    <h2>Testimonial</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row d_flex">
                            <div class="col-md-10 offset-md-1">
                                <div id="testimo" class="carousel slide our_testimonial" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#testimo" data-slide-to="0" class="active"></li>
                                        <li data-target="#testimo" data-slide-to="1"></li>
                                        <li data-target="#testimo" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="bt-template/images/clint.jpg"
                                                                        alt="#" /></i>
                                                                <h3>MorGan Den</h3>
                                                                <span>Bitcoin</span>
                                                                <img src="bt-template/images/icon.png"
                                                                    alt="#" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>more-or-less normal distribution of letters, as
                                                                    opposed to using 'Content here, content here',
                                                                    making it look like readable English. Many desktop
                                                                    publishing packages and webmore-or-less normal
                                                                    distribution of letters, as opposed to using
                                                                    'Content here, content here', making it look like
                                                                    readable English. Many desktop publishing packages
                                                                    and webmore-or-less normal distribution of</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="bt-template/images/clint.jpg"
                                                                        alt="#" /></i>
                                                                <h3>MorGan Den</h3>
                                                                <span>Bitcoin</span>
                                                                <img src="bt-template/images/icon.png"
                                                                    alt="#" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>more-or-less normal distribution of letters, as
                                                                    opposed to using 'Content here, content here',
                                                                    making it look like readable English. Many desktop
                                                                    publishing packages and webmore-or-less normal
                                                                    distribution of letters, as opposed to using
                                                                    'Content here, content here', making it look like
                                                                    readable English. Many desktop publishing packages
                                                                    and webmore-or-less normal distribution of</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="bt-template/images/clint.jpg"
                                                                        alt="#" /></i>
                                                                <h3>MorGan Den</h3>
                                                                <span>Bitcoin</span>
                                                                <img src="bt-template/images/icon.png"
                                                                    alt="#" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>more-or-less normal distribution of letters, as
                                                                    opposed to using 'Content here, content here',
                                                                    making it look like readable English. Many desktop
                                                                    publishing packages and webmore-or-less normal
                                                                    distribution of letters, as opposed to using
                                                                    'Content here, content here', making it look like
                                                                    readable English. Many desktop publishing packages
                                                                    and webmore-or-less normal distribution of</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#testimo" role="button"
                                        data-slide="prev">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#testimo" role="button"
                                        data-slide="next">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonial -->
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="logo_bottom" href="index.html">LES PRIVATE</a>
                    </div>
                    <div class="col-md-3 col-sm-6" ">
                <div class="Informa conta ">
                <h3>Contact Us</h3>
                    <ul>
                        <li> <a href="Javascript:void(0) "> <i class="fa fa-map-marker " aria-hidden="true "></i> Location
                        </a>
                        </li>
                        <li> <a href="Javascript:void(0) "><i class="fa fa-phone " aria-hidden="true "></i> Call +01 1234567890
                        </a>
                        </li>
                        <li> <a href="Javascript:void(0) "> <i class="fa fa-envelope " aria-hidden="true "></i> demo@gmail.com
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 "">
                        <div class="Informa helpful">
                            <h3>Useful Link</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" ">
                <div class="Informa ">
                    <h3>Offices</h3>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6 ">
                  <div class="Informa ">
                     <h3>Newsletter</h3>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_center ">
               <div class="container ">
                  <div class="row ">
                     <div class="col-md-12 ">
                        <p>© 2022 All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
            <script src="{{ asset('bt-template/js/jquery.min.js') }}"></script>
            <script src="{{ asset('bt-template/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('bt-template/js/jquery-3.0.0.min.js') }}"></script>
            <script src="{{ asset('bt-template/js/custom.js') }}"></script>



   </body>
</html>
