@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">Daftar Pelanggan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">+ Tambah Pelanggan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pelanggan as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->no_hp }}</td>
                    <td>
                        <a href="{{ route('pelanggan.show', $p->id) }}" class="btn btn-warning btn-sm">Show</a> |
                        <a href="{{ route('pelanggan.edit', $p->id) }}" class="btn btn-primary btn-sm">Edit</a> |
                        <form action="{{ route('pelanggan.destroy', $p->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data pelanggan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection