@extends('layouts.admin')
@section('admin')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="beranda">
        <h4>Beranda</h4>
        <hr>
        <div class="btn-icon-beranda">
            <div class="btn-grup-beranda">
                <div class="btn-1">
                    <button class="btn btn-primary">
                        <i class="bi bi-calendar3"></i>
                        <br>
                        <span>Dashboard</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <br>





    <div class="data-master">
        <h4>Data Master</h4>
        <hr>
        <div class="btn-icon-data-master">
            <div class="btn-grup-data-master">
                <div class="btn-1">
                    <button class="btn btn-primary">
                        <a href="/admin-datamurid">
                            <i class="bi bi-people"></i>
                            <br>
                            <span>Data Murid</span>
                        </a>
                    </button>
                </div>
                <div class="btn-1">
                    <button class="btn btn-primary">
                        <a href="/admin-datatentor">
                            <i class="bi bi-person"></i>
                            <br>
                            <span>Data Tentor</span>
                        </a>
                    </button>
                </div>
                <div class="btn-1">
                    <button class="btn btn-primary">
                        <i class="bi bi-layout-text-window-reverse"></i>
                        <br>
                        <span>Data Jadwal</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <br>


    <div class="jadwal">
        <h4>Jadwal</h4>
        <hr>
        <div class="btn-icon-jadwal">
            <div class="btn-grup-jadwal">
                <div class="btn-1">
                    <button class="btn btn-primary">
                        <i class="bi bi-layout-text-sidebar"></i>
                        <br>
                        <span>Jadwal Tentor</span>
                    </button>
                </div>
                <div class="btn-1">
                    <button class="btn btn-primary">
                        <i class="bi bi-layout-text-sidebar-reverse"></i>
                        <br>
                        <span>Jadwal Siswa</span>
                    </button>
                </div>
                <div class="btn-1">
                    <a href="#">
                        <button class="btn btn-primary">
                            <a href="/admin-materi">
                                <i class="bi bi-layout-text-window"></i>
                                <br>
                                <span>Tambah Materi</span>
                            </a>
                    </a>
                    </button>
                </div>
            </div>
        </div>
        <br>

        <div class="lainnya">
            <h4>Lain-Lain</h4>
            <hr>
            <div class="btn-icon-lainnya">
                <div class="btn-grup-lainnya">
                    <div class="btn-1">
                        <button class="btn btn-primary">
                            <i class="bi bi-currency-dollar"></i>
                            <br>
                            <span>Pemesanan</span>
                        </button>
                    </div>
                    <div class="btn-1">
                        <button class="btn btn-primary">
                            <i class="bi bi-currency-exchange"></i>
                            <br>
                            <span>Pembayaran</span>
                        </button>
                    </div>
                    <div class="btn-1">
                        <button class="btn btn-primary">
                            <i class="bi bi-credit-card"></i>
                            <br>
                            <span>Gaji Tentor</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
