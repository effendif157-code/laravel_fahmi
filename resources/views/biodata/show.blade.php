@extends('layouts.app')

@section('content')
    <h1>Detail Biotada</h1>
    <a href="{{ route('biotada.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <table class="table table-bordered">
        <tr><th>Nama</th><td>{{ $biotada->nama }}</td></tr>
        <tr><th>Tanggal Lahir</th><td>{{ $biotada->tgl_lahir }}</td></tr>
        <tr><th>Jenis Kelamin</th><td>{{ $biotada->jk }}</td></tr>
        <tr><th>Agama</th><td>{{ $biotada->agama }}</td></tr>
        <tr><th>Alamat</th><td>{{ $biotada->alamat }}</td></tr>
        <tr><th>Tinggi Badan</th><td>{{ $biotada->tinggi_badan }}</td></tr>
        <tr><th>Berat Badan</th><td>{{ $biotada->berat_badan }}</td></tr>
        <tr><th>Foto</th><td>
            @if ($biotada->foto)
                <img src="{{ asset('uploads/biotada_fotos/' . $biotada->foto) }}" width="200" />
            @else
                (tidak ada foto)
            @endif
        </td></tr>
    </table>
@endsection
