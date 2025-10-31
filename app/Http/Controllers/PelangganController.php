<?php
namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Menampilkan semua data pelanggan
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    // Menampilkan form tambah pelanggan
    public function create()
    {
        return view('pelanggan.create');
    }

    // Menyimpan data pelanggan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama'   => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_hp'  => 'required|string|max:15',
        ]);

        Pelanggan::create([
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'no_hp'  => $request->no_hp,
        ]);

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan');
    }

    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    // Menampilkan form edit pelanggan
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    // Mengupdate data pelanggan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'   => 'required|string|max:100',
            'alamat' => 'required|string',
            'no_hp'  => 'required|string|max:20',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update([
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'no_hp'  => $request->no_hp,
        ]);

        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil diperbarui');
    }

    // Menghapus data pelanggan
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil dihapus');
    }
}
