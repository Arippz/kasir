@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="d-flex align-items item-center justify-content-between mb-5">
        <h2>Daftar Produk</h2>
        <a href="{{ url('/kasir') }}" class="btn btn-primary">Back</a>
    </div>

    <form action="{{ route('cashier.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Nama</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>

        <div class="mb-3">
            <label for="">Username</label>
            <input class="form-control" type="text" name="username" id="username">
        </div>

        <div class="mb-3">
            <label for="">Password</label>
            <input class="form-control" type="text" name="password" id="password">
        </div>

        <button type="submit" class="btn btn-primary">
            simpan
        </button>
    </form>
</div>
@endsection