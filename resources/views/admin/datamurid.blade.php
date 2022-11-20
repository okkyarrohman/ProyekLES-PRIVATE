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

    @if (Session::has('murid_created'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('murid_created') }}
        </div>
    @endif <!-- Notif Data Murid Ditambahkan-->

    @if (Session::has('murid_deleted'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('murid_deleted') }}
        </div>
    @endif
    <!-- Notif Data Murid Dihapus-->


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Tambah Murid
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Murid</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Horizontal Form -->
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
                            <label for="inputEmail3" class="col-sm-2 col-form-label">No Telephone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputEmail"
                                    placeholder="Masukkan No Telephone" name="phone">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Asal sekolah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword"
                                    placeholder="Masukkan Asal Sekolah" name="sekolah">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Masukkan Umur"
                                    name="umur">
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



    <!-- Table with hoverable rows -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Phone</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">Umur</th>
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
                    <td>{{ $datamurid->phone }}</td>
                    <td>{{ $datamurid->sekolah }}</td>
                    <td>{{ $datamurid->umur }}</td>
                    <td>
                        <a href="#" class="btn btn-primary">
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
