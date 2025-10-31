@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">Detail Pelanggan</h2>
 <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
    <div class="card p-4">
        <div class="mb-3">
            <strong>Nama:</strong>
            <p>{{ $pelanggan->nama }}</p>
        </div>

        <div class="mb-3">
            <strong>Alamat:</strong>
            <p>{{ $pelanggan->alamat }}</p>
        </div>

        <div class="mb-3">
            <strong>No HP:</strong>
            <p>{{ $pelanggan->no_hp }}</p>
        </div>

        <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning">Edit</a>
    </div>
</div>
@endsection