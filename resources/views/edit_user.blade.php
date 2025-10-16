@extends('layouts.app')

@section('content')
<div class="col-lg-6 mx-auto">
    <div class="card p-4">
        <h4 class="text-center text-dark mb-4">Edit Data Mahasiswa</h4>
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label fw-semibold text-dark">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $user->nama) }}" required class="form-control">
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label fw-semibold text-dark">NIM</label>
                <input type="text" name="nim" id="nim" value="{{ old('nim', $user->nim) }}" required class="form-control">
            </div>

            <div class="mb-3">
                <label for="kelas_id" class="form-label fw-semibold text-dark">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-select" required>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ old('kelas_id', $user->kelas_id) == $kelasItem->id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-purple px-4 rounded-pill me-2">Simpan</button>

<style>
.btn-purple {
    background-color: #6f42c1 !important;  /* Ungu utama elegan */
    color: #fff !important;
    border: none;
    transition: 0.2s ease-in-out;
}

.btn-purple:hover {
    background-color: #5a32a3 !important; /* Ungu sedikit lebih gelap */
}
</style>

                <a href="{{ route('user.index') }}" class="btn btn-secondary rounded-pill px-4">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection