@extends('layouts.admin')
@section('admin')
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Materi Ujian Nasional IPA</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <hr>
    <br>
    <!-- End Page Title -->
    <!-- IPA -->
    <!-- Button trigger Tambah Materi -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Tambah Materi
    </button>

    <!-- Modal Tambah Materi -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Materi IPA</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ipa.create') }}" method="POST" enctype="multipart/form-data"
                        class="dropzone dz-clickable" id="image-upload">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">BAB</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputText" placeholder="Masukkan BAB"
                                    name="bab">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Materi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputText" placeholder="Masukkan Materi"
                                    name="materi">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="inputText" placeholder="Masukkan Deskripsi" name="deskripsi">
                                </textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload File Materi</label>
                            <input type="file" name="foto" class="form-control" value="foto" id="formFile">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Tabel Hasil Materi-->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Bab</th>
                <th scope="col">Materi</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">File</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($materi as $ipa)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $ipa->bab }}</td>
                    <td>{{ $ipa->materi }}</td>
                    <td>{{ $ipa->deskripsi }}</td>
                    <td>
                        <img src="{{ asset('files/' . $ipa->foto) }}" width="40px">
                    </td>
                    <td>
                        <a href="/admin-materi-ipa/{{ $ipa->foto }}" class="btn btn-primary">
                            <i class="bi bi-download"></i>
                        </a>
                        <a href="/admin-materi-ipa/{{ $ipa->id }}" class="btn btn-danger">
                            <i class="bi bi-dash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
