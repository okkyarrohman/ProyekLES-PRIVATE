@extends('layouts.admin')
@section('admin')
    <div class="pagetitle">
        <h1>Data Murid</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pendataan</li>
                <li class="breadcrumb-item active">Data Murid</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Button trigger modal-->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
        Tambah Murid
    </button>

    <!-- Modal Tambah Data-->
    <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Murid</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Tambah Data Form -->
                <div class="modal-body">
                    <form method="POST" action="{{ route('murid_create') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputText" placeholder="Masukkan Nama"
                                    name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail"
                                    placeholder="Masukkan No Telephone" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword"
                                    placeholder="Masukkan Asal Sekolah" name="password">
                            </div>
                        </div>
                </div><!-- Button Submit -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form><!-- End Horizontal Form -->
            </div>
        </div>
    </div>

    <!-- Edit Murid Form -->
    @foreach ($murids as $murid)
        <div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Murid</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Edit Data FORM-->

                    <div class="modal-body">
                        <form method="POST" action="{{ route('user.update') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $murid->id }}" />
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Masukkan Nama"
                                        name="name" value="{{ $murid->name }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail"
                                        placeholder="Masukkan Email" name="email" value{{ $murid->email }}>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword"
                                        placeholder="Masukkan Asal Sekolah" name="password"
                                        value="{{ $murid->password }}">
                                </div>
                            </div>
                    </div><!-- Button Submit -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    @endforeach
    <!-- End eDIT Form -->



    <!-- ISI TABEL -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($murids as $datamurid)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $datamurid->name }}</td>
                    <td>{{ $datamurid->email }}</td>
                    <td>{{ $datamurid->password }}</td>
                    <td>
                        <a href="/admin-editmurid/{{ $datamurid->id }}" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#edit">
                            <i class="bi bi-people"></i>
                        </a>
                        <a href="/admin-deletemurid/{{ $datamurid->id }}" class="btn btn-danger">
                            <i class="bi bi-file-excel"></i>
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <!-- End Table with hoverable rows -->
@endsection
