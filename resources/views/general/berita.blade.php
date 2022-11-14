@extends('layouts.layoutGeneral')
@section('general')
    <div class="pagetitle">
        <h1>Berita</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="col-12">
        <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/car1.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/car2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/car3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div> <!-- End Carousel -->

    <!-- Artikel-->

    <div class="container-artikel-satu">
        <div class="row">
            <div class="col-12">
                <h2>Judul Artikel 1</h2>
            </div>
            <div class="main-artikel">
                <div class="img">
                    <div class="gambar">
                        <img src="img/ar1.jpg" width="300px" height="200px">
                    </div>
                </div>
                <div class="img-caption">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi incidunt perferendis illum veniam,
                        alias dolorem doloremque quibusdam distinctio repellat, mollitia ut! Reprehenderit fugiat nobis
                        possimus iste voluptates sed explicabo commodi consectetur illo? Similique officiis pariatur aut,
                        repudiandae modi vero sunt magni incidunt delectus accusantium eius soluta aliquam tempora sequi
                        doloribus, unde corporis explicabo quam minima non distinctio odio. Ratione enim necessitatibus
                        iusto nisi debitis possimus nemo amet suscipit dolore corrupti modi dolorem obcaecati consectetur
                        dolor deleniti, nihil nulla aliquid, accusantium animi rem unde ipsum. Consequatur a mollitia
                        placeat saepe iusto sequi autem, explicabo blanditiis consectetur exercitationem porro, inventore
                        possimus id optio nemo sapiente non, doloribus ut! Libero accusamus nam veritatis tenetur, qui
                        distinctio doloremque quibusdam saepe quo! Ut id incidunt, praesentium aperiam omnis beatae
                        consequatur?</p>
                    <a href="#" type="button" class="btn btn-info text-bg-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Artikel satu-->
    <hr>
    <div class="container-artikel-due">
        <div class="row">
            <div class="col-9">
                <h2>Judul Artikel 2</h2>
            </div>
            <div class="main-artikel">
                <div class="img">
                    <div class="gambar">
                        <img src="img/ar1.jpg" width="300px" height="200px">
                    </div>
                </div>
                <div class="img-caption">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quasi est sapiente doloribus
                        laboriosam molestiae architecto earum itaque ratione? Similique amet a non nihil enim ratione harum
                        recusandae facilis laudantium reprehenderit libero, delectus et culpa? Autem sunt tempore eum
                        reiciendis facilis? Debitis sunt doloremque laborum magni, vero laudantium quam blanditiis!
                    </p>
                    <a href="#" type="button" class="btn btn-info text-bg-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Artikel dua-->
    <hr>
    <div class="container-artikel-tiga">
        <div class="row">
            <div class="col-9">
                <h2>Judul Artikel 3</h2>
            </div>
            <div class="main-artikel">
                <div class="img">
                    <div class="gambar">
                        <img src="img/ar1.jpg" width="300px" height="200px">
                    </div>
                </div>
                <div class="img-caption">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ratione esse quos recusandae iusto
                        iste repellat nulla saepe libero in, minus deserunt magni aliquid harum consectetur optio, pariatur
                        dolor debitis odio ducimus dolore vel delectus! In enim unde, facere quo accusantium, corporis
                        velit, repellat cumque ipsa veniam neque ex? Laudantium inventore error quam veritatis corporis
                        commodi dolores sapiente. Suscipit asperiores beatae aliquam soluta, laudantium necessitatibus
                        cumque doloribus exercitationem iusto earum vel nihil distinctio, rerum iste.</p>
                    <a href="#" type="button" class="btn btn-info text-bg-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Artikel tiga-->
@endsection
