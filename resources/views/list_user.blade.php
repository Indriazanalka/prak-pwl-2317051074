@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold text-white mb-2">Daftar Mahasiswa</h1>
    <p class="text-light opacity-75">Kelola data mahasiswa dengan mudah dan cepat</p>
</div>

<div class="card p-4">
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('user.create') }}" class="btn btn-primary rounded-pill">Tambah Mahasiswa</a>
    </div>
    @include('components.user-table', ['users' => $users])
</div>
@endsection