@extends('layouts.app')

@section('content')
    <h1>Edit Biotada</h1>
    <form action="{{ route('biotada.update', $biotada->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $biotada->nama) }}" required>
        </div>

        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ old('tgl_lahir', $biotada->tgl_lahir) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label><br>
            <input type="radio" name="jk" value="L" {{ old('jk', $biotada->jk) == 'L' ? 'checked' : '' }}> Laki‑laki
            <input type="radio" name="jk" value="P" {{ old('jk', $biotada->jk) == 'P' ? 'checked' : '' }}> Perempuan
        </div>

        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select name="agama" class="form-control" required>
                <option value="">-- Pilih Agama --</option>
                <option value="Islam" {{ old('agama', $biotada->agama) == 'Islam' ? 'selected' : '' }}>Islam</option>
                <option value="Kristen" {{ old('agama', $biotada->agama) == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                <option value="Katolik" {{ old('agama', $biotada->agama) == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                <option value="Hindu" {{ old('agama', $biotada->agama) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                <option value="Budha" {{ old('agama', $biotada->agama) == 'Budha' ? 'selected' : '' }}>Budha</option>
                <option value="Konghucu" {{ old('agama', $biotada->agama) == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required>{{ old('alamat', $biotada->alamat) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="tinggi_badan" class="form-label">Tinggi Badan (cm)</label>
            <input type="number" name="tinggi_badan" class="form-control" value="{{ old('tinggi_badan', $biotada->tinggi_badan) }}" required>
        </div>

        <div class="mb-3">
            <label for="berat_badan" class="form-label">Berat Badan (kg)</label>
            <input type="number" name="berat_badan" class="form-control" value="{{ old('berat_badan', $biotada->berat_badan) }}" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control">
            @if ($biotada->foto)
                <br>
                <img src="{{ asset('uploads/biotada_fotos/' . $biotada->foto) }}" width="120" />
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('biotada.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
