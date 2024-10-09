@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="d-flex align-items item-center justify-content-between mb-5">
        <h2>Daftar Produk</h2>
        <a href="{{ route('cashier.index') }}" class="btn btn-primary">Back</a>
    </div>

    <form action="{{ route('cashier.update', $users->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="">Nama</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $users->name) }}">
        </div>

        <div class="mb-3">
            <label for="">Username</label>
            <input class="form-control" type="text" name="username" id="username" value="{{ old('username', $users->username) }}">

        
        </div>

        <div class="mb-3">
            <label for="">Password</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>

        <button type="submit" class="btn btn-primary">
            simpan
        </button>
    </form>
</div>
@endsection