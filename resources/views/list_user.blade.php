@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Daftar User</h1>

    @include('components.user-table', ['users' => $users])
</div>
@endsection