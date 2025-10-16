@extends('layouts.app')

@section('content')
<style>
    /* Tombol ungu lembut */
    .btn-purple {
        background-color: #6f42c1 !important; /* Ungu utama */
        color: #fff !important;
        border: none;
    }
    .btn-purple:hover {
        background-color: #5a32a3 !important; /* Ungu lebih gelap */
    }

    /* Warna header tabel */
    thead {
        background-color: #f8f5ff;
    }

    /* Efek card */
    .bg-white {
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="text-center mb-4">
    <h1 class="fw-bold text-dark">Daftar Mata Kuliah</h1>
    <p class="text-muted">Kelola data mata kuliah yang tersedia</p>
</div>

<div class="bg-white rounded-3 shadow p-4">
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('matakuliah.create') }}" class="btn btn-purple rounded-pill">Tambah Mata Kuliah</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead>
                <tr style="background-color: #6f42c1; color: white;">
                    <th>ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mks as $mk)
                    <tr>
                        <td>{{ $mk->id }}</td>
                        <td>{{ $mk->nama_mk }}</td>
                        <td>{{ $mk->sks }}</td>
                        <td>
                            <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm rounded-pill">Edit</a>

                            <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm rounded-pill btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
document.querySelectorAll('.btn-delete').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const form = this.closest('form');
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data mata kuliah akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#6f42c1',
            cancelButtonColor: '#888',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) form.submit();
        });
    });
});
</script>
@endsection
