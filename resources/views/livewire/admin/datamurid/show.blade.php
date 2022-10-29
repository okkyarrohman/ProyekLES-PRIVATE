<style>
    .card-header {
        font-size: 30px;
    }

    .tambah-siswa {
        text-emphasis: none;
    }
</style>
<div>
    @include('livewire.admin.datamurid.add')
    <br>
    <section>
        <div class="container">
            <div class="row">
                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 style="text-align: center">Data Semua Murid</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Hanphone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($show as $murid)
                                    <tr>
                                        <td>{{ $murid->id }}</td>
                                        <td>{{ $murid->name }}</td>
                                        <td>{{ $murid->email }}</td>
                                        <td>{{ $murid->phone }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="tambah-siswa">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addModal">
                                Tambah Data Siswa
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
