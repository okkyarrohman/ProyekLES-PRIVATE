@extends('layouts.layoutTentor')
@section('tentor')
    <div class="pagetitle">
        <h1>Daftar Data Murid</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pendataan</li>
                <li class="breadcrumb-item active">Data Murid</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <!-- Table with hoverable rows -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Phone</th>
                <th scope="col">Asal Sekolah</th>
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

                </tr>
            @endforeach

        </tbody>
    </table>
    <!-- End Table with hoverable rows -->
@endsection
