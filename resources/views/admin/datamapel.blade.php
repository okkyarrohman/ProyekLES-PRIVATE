@extends('layouts.admin')
@section('admin')
<div class="pagetitle">
    <h1>Data Mapel</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pendataan</li>
            <li class="breadcrumb-item active">Data Mapel</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
    Tambah Mapel
</button>

<div class="table" style="padding-top:20px;">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mapel</th>
                <th scope="col">Jenjang Pendidikan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($mapels as $mapel)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $mapel->name_mapel }}</td>
                <td>{{ $mapel->educational_level }}</td>
                <td>
                    <a href="" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#edit{{ $mapel->id }}">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="/admin-deletemapel/{{ $mapel->id }}" class="btn btn-danger" >
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@foreach ($mapels as $mapel)
<div class="modal fade" id="edit{{ $mapel->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Mata Pelajaran Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Tambah Data Form -->
            <div class="modal-body">
                <form method="POST" action="{{ route('mapel.update') }} ">
                    @csrf
                    <input type="hidden" name="id" value="{{ $mapel->id }}" />
                    <div class="row mb-3">
                        <label for="name_mapel" class="col-sm-4 col-form-label">Mata Pelajaran</label>
                        <div class="col-sm-15">
                            <input type="text"class="form-control" id="name_mapel" placeholder="Masukkan Nama Mata Pelajaran"
                                name="name_mapel" value="{{ $mapel->name_mapel }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="educational_level" class="col-sm-4 col-form-label">Jenjang Pendidikan</label>
                        <div class="col-sm-15">
                            <input type="text" class="form-control" id="educational_level"
                                placeholder="Masukkan Jenjang Pendidikan" name="educational_level" value="{{ $mapel->educational_level }}">
                        </div>
                    </div>
            </div><!-- Button Submit -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form><!-- End Horizontal Form -->
        </div>
    </div>
</div>
@endforeach

<!-- Modal Tambah Data-->
<div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Mata Pelajaran Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Tambah Data Form -->
            <div class="modal-body">
                <form method="POST" action="{{ Route('mapel.create') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="name_mapel" class="col-sm-4 col-form-label">Mata Pelajaran</label>
                        <div class="col-sm-15">
                            <input type="text"class="form-control" id="name_mapel" placeholder="Masukkan Nama Mata Pelajaran"
                                name="name_mapel">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="educational_level" class="col-sm-4 col-form-label">Jenjang Pendidikan</label>
                        <div class="col-sm-15">
                            <input type="text" class="form-control" id="educational_level"
                                placeholder="Masukkan Jenjang Pendidikan" name="educational_level">
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

@endsection
