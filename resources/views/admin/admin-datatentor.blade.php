@extends('layouts.admin')
@section('admin')

<div class="pagetitle">
    <h1>Data Tentor</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pendataan</li>
            <li class="breadcrumb-item active">Data Tentor</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
    Tambah Tentor
</button>

<!-- Modal Tambah Data-->
<div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Tentor Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Tambah Data Form -->
            <div class="modal-body">
                <form method="POST" action="{{ Route('tentor.create') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text"class="form-control" id="name" placeholder="Masukkan Nama"
                                name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email"
                                placeholder="Masukkan email" name="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password"
                                placeholder="Masukkan Password" name="password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-sm-2 col-form-label">No. Telp</label>
                        <div class="col-sm-10">
                            <input type="tel" min="16" max="50" class="form-control" id="mobile" placeholder="Masukkan No. Telp"
                                name="mobile">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gender"
                                placeholder="Masukkan Jenis Kelamin" name="gender">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="birthday" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="birthday"
                                placeholder="Masukkan Tanggal Lahir" name="birthday">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="address" class="form-control" rows="3" placeholder="Masukkan Alamat Saat Ini" name="address" ></textarea>
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
@foreach ($tentors as $tentor)
<div class="modal fade" id="edit{{ $tentor->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Tentor Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Tambah Data Form -->
            <div class="modal-body">
                <form method="POST" action="{{ route('tentor.update') }} ">
                    @csrf
                    
                    <input type="hidden" name="id" value="{{ $tentor->id }}" />
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text"class="form-control" id="name" placeholder="Masukkan Nama"
                                name="name" value="{{ $tentor->name }}"">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email"
                                placeholder="Masukkan email" name="email" value="{{ $tentor->email }}"">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password"
                                placeholder="Masukkan Password" name="password" value="{{ $tentor->password }}"">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobile" class="col-sm-2 col-form-label">No. Telp</label>
                        <div class="col-sm-10">
                            <input type="tel" min="16" max="50" class="form-control" id="mobile" placeholder="Masukkan No. Telp"
                                name="mobile" value="{{ $tentor->mobile }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gender"
                                placeholder="Masukkan Jenis Kelamin" name="gender" value="{{ $tentor->gender }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="birthday" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="birthday"
                                placeholder="Masukkan Tanggal Lahir" name="birthday" value="{{ $tentor->birthday }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="address" class="form-control" rows="3" placeholder="Masukkan Alamat Saat Ini" name="address" >{{ $tentor->address }}</textarea>
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


<div class="table" style="padding-top:20px;">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($tentors as $tentor)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $tentor->name }}</td>
                <td>{{ $tentor->email }}</td>
                <td>{{ $tentor->mobile }}</td>
                <td>{{ $tentor->gender }}</td>
                <td>{{ $tentor->birthday }}</td>
                <td>{{ $tentor->address }}</td>
                <td>
                    <a href="" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#edit{{ $tentor->id }}">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="/admin-deletetentor/{{ $tentor->id }}" class="btn btn-danger" >
                        <i class="bi bi-trash"></i>
                    </a>
                    {{-- <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus">
                        <i class="bi bi-trash"></i> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection