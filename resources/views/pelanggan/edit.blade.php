@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
    <h2 class="mb-3">Edit Pelanggan</h2>

    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $pelanggan->nama }}" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $pelanggan->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $pelanggan->no_hp }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

	