@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Buat Pengguna Baru</h1>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama">
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NPM</label>
                    <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NPM">
                </div>

                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select id="kelas" name="kelas_id" class="form-select">
                        @foreach($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection