@extends('layouts.admin')

@section('content')

<div class="flex-centerbetween mb-4">
    <h2 class="text-dark fw-bold mb-0">Kasir</h2>
    <a href="{{ url('/create') }}" class="btn btn-primary">
        <i class="bx bx-plus"></i> Tambah Kasir
    </a>
</div>
<div class="card border-0">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Total Penjualan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $data )
                        
                    
                    <tr class="align-middle">
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->username }}</td>
                        <td>40 Penjualan</td>
                        <td>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{  route('cashier.edit', $data->id) }}" class="btn btn-warning btn-sm py-1 px-3 rounded-1 text-white">
                                    <i class="bx bx-edit"></i> Edit
                                </a>
                                <button type="button" class="btn btn-light btn-sm py-1 px-3 rounded-1">
                                    <i class="bx bx-trash"></i> Hapus
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Mulai CUT -->
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection