@extends('layouts.layoutUser-All')
@section('materi')
    <!-- Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kumpulan Materi Materi Ilmu Pengetahuan Alam
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- isi -->
    <form action="{{ route('ipa.create') }} method="POST" enctype="multipart/form-data"">
        @csrf
        @foreach ($materi as $ipa)
            <div class="isi-ipa">
                <div class="bab-ipa">
                    <h1>{{ $ipa->bab }}</h1>
                </div>
                <div class="materi-ipa">
                    <h3>{{ $ipa->materi }}</h3>
                </div>
                <div class="deskripsi-ipa">
                    <p>{{ $ipa->deskripsi }}</p>
                </div>
            </div>
            <div class="action-ipa">
                <div class="download-ipa">
                    <button class="btn btn-danger">
                        <a href="/user-materi-ipa/{{ $ipa->foto }}">
                            Download File
                        </a>
                    </button>
                </div>
            </div>
            <hr>
        @endforeach
    </form>
@endsection
