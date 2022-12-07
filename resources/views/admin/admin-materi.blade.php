@extends('layouts.admin')
@section('admin')
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
    <hr>
    <br>
    <!-- End Page Title -->

    <!-- Tambah Materi kelas 10 -->
    <div class="materi-10">
        <div class="materi-grup">
            <h4>Materi Ujian Nasional</h4>
            <div class="materi-btn">
                <div class="ipa">
                    <button class="btn btn-primary">
                        <a href="/admin-materi-ipa">
                            <i class="bi bi-alarm">
                                <br>
                                <span>Materi IPA</span>
                            </i>
                        </a>
                    </button>
                </div>
                <div class="ips">
                    <button class="btn btn-primary">
                        <a href="#">
                            <i class="bi bi-calendar-date">
                                <br>
                                <span>Materi IPS</span>
                            </i>
                        </a>
                    </button>
                </div>
                <div class="bin">
                    <button class="btn btn-primary">
                        <a href="">
                            <i class="bi bi-layout-sidebar-inset-reverse">
                                <br>
                                <span>Materi BIN</span>
                            </i>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <br>
@endsection
