@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
    <h1 class="fw-bold text-dark">Daftar Mahasiswa</h1>
    <p class="text-muted">Kelola data mahasiswa dengan mudah dan cepat</p>
</div>

<div class="bg-white rounded-3 shadow p-4">
    <div class="d-flex justify-content-between mb-3">
       <a href="{{ route('user.create') }}" class="btn rounded-pill text-white" style="background-color: #6f42c1;">Tambah Mahasiswa</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <<thead>
    <tr style="background-color: #6f42c1; color: white;">
        <th>ID</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
</thead>    
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->nim }}</td>
                        <td>{{ $user->nama_kelas }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm rounded-pill">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline delete-form">
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
            title: 'Hapus data ini?',
            text: "Data mahasiswa akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: 'rgba(255, 102, 0, 1)',
            cancelButtonColor: '#631062ff',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) form.submit();
        });
    });
});
</script>
@endsection