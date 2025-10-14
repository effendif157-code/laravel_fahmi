@extends('layouts.app')

@section('content')
    <h1>Data Biotada</h1>
    <a href="{{ route('biotada.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tgl Lahir</th>
                <th>JK</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Tinggi</th>
                <th>Berat</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($biotadas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                    <td>{{ $item->jk }}</td>
                    <td>{{ $item->agama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->tinggi_badan }}</td>
                    <td>{{ $item->berat_badan }}</td>
                    <td>
                        @if ($item->foto)
                            <img src="{{ asset('uploads/biotada_fotos/' . $item->foto) }}" width="80" />
                        @else
                            (no foto)
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('biotada.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('biotada.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('biotada.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                              onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
