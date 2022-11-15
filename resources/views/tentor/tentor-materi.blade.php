@extends('layouts.layoutTentor')
@section('tentor')
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Materi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->



    <div class="card">
        <div class="card-body">
            <h5 class="card-title" style="text-align: center">Tambah Materi Tiap Kelas</h5>
            <!-- Bordered Tabs Button -->
            <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tabKelas10"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Kelas 10</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tabKelas11"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Kelas 11</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tabKelas12"
                        type="button" role="tab" aria-controls="contact" aria-selected="false">Kelas</button>
                </li>
            </ul>

            <!--Tabs Content  -->
            <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                <!-- Tab Content Kelas 10 -->
                <div class="tab-pane fade show active" id="tabKelas10" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-9" style="text-align: center">
                                <h3>Kelas 10</h3>
                            </div>
                            <div class="col-4">
                                <img src="/img/car2.jpg" alt="image" width="300px" height="200px">
                            </div>
                            <div class="col-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eum adipisci
                                non iure. Facere delectus quisquam, vitae alias quos exercitationem illum mollitia veniam!
                                Et labore animi ullam similique, earum enim impedit modi accusantium nam inventore at
                                corporis eos quas exercitationem blanditiis asperiores omnis eius accusamus in? Vel,
                                voluptas aut quisquam facilis cumque rem fuga maxime natus et. Illum quod nam deleniti
                                ducimus laudantium soluta est. Fugiat aliquam pariatur vitae et aut debitis, iusto maiores
                                sed! Dolore blanditiis exercitationem, cumque aliquid reprehenderit facere earum totam
                                similique sint voluptates neque molestias asperiores dolor aut dolorum eveniet voluptatum
                                ipsam quia, possimus, numquam qui!
                                <div class="button">
                                    <!-- Button trigger Add Materi Kelas 10-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kelas10">
                                        Tambah Materi Kelas 10
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Materi Kelas 10-->
                    <div class="modal fade" id="kelas10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Materi kelas 10
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="Mapel">
                                                <span>Pilih Mata Pelajaran</span>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="mapel">
                                                    <option selected>Mata Pelajaran</option>
                                                    <option value="1">Bahasa Inggris</option>
                                                    <option value="2">Matematika</option>
                                                    <option value="3">Bahasa Indonesia</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="bab">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">BAB
                                                        Materi</label>
                                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                                        placeholder="masukkan nama bab" name="bab">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="doc">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Pilih Dokumen</label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="doc">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="caption">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Penjelasan
                                                        dari
                                                        materi
                                                    </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="caption"></textarea>
                                                </div>
                                            </div>
                                            <div class="tugas">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Penugasan
                                                    </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tugas"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END Tambah Materi Kelas 10 -->
                </div>

                <!-- Tab Content Kelas 11 -->
                <div class="tab-pane fade" id="tabKelas11" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- Button trigger Add Materi Kelas 11-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kelas11">
                        Tambah Materi Kelas 11
                    </button>

                    <!-- Add Materi Kelas 11-->
                    <div class="modal fade" id="kelas11" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Materi kelas 11
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="Mapel">
                                                <span>Pilih Mata Pelajaran</span>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="mapel">
                                                    <option selected>Mata Pelajaran</option>
                                                    <option value="1">Bahasa Inggris</option>
                                                    <option value="2">Matematika</option>
                                                    <option value="3">Bahasa Indonesia</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="bab">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">BAB
                                                        Materi</label>
                                                    <input type="email" class="form-control"
                                                        id="exampleFormControlInput1" placeholder="masukkan nama bab"
                                                        name="bab">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="doc">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Pilih Dokumen</label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="doc">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="caption">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Penjelasan
                                                        dari
                                                        materi
                                                    </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="caption"></textarea>
                                                </div>
                                            </div>
                                            <div class="tugas">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Penugasan
                                                    </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tugas"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END Tambah Materi Kelas 11 -->
                </div>

                <!-- Tab Content Kelas 12 -->
                <div class="tab-pane fade" id="tabKelas12" role="tabpanel" aria-labelledby="contact-tab">

                    <!-- Button trigger Add Materi Kelas 12-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kelas12">
                        Tambah Materi Kelas 12
                    </button>

                    <!-- Add Materi Kelas 12-->
                    <div class="modal fade" id="kelas12" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Materi kelas 12
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="Mapel">
                                                <span>Pilih Mata Pelajaran</span>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="mapel">
                                                    <option selected>Mata Pelajaran</option>
                                                    <option value="1">Bahasa Inggris</option>
                                                    <option value="2">Matematika</option>
                                                    <option value="3">Bahasa Indonesia</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="bab">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">BAB
                                                        Materi</label>
                                                    <input type="email" class="form-control"
                                                        id="exampleFormControlInput1" placeholder="masukkan nama bab"
                                                        name="bab">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="doc">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Pilih Dokumen</label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="doc">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="caption">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Penjelasan
                                                        dari
                                                        materi
                                                    </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="caption"></textarea>
                                                </div>
                                            </div>
                                            <div class="tugas">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Penugasan
                                                    </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tugas"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END Tambah Materi Kelas 12 -->
                </div>
            </div><!-- End Tab Content-->
        @endsection
