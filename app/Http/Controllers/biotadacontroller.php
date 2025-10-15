<?php
namespace App\Http\Controllers;

use App\Models\Biotadas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BiotadaController extends Controller
{
    public function index()
    {
        $biotadas = Biotada::all();
        return view('biotada.index', compact('biotadas'));
    }

    public function create()
    {
        return view('biotada.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'         => 'required|string|max:255',
            'tgl_lahir'    => 'required|date',
            'jk'           => 'required|in:L,P',
            'agama'        => 'required|string',
            'alamat'       => 'required|string',
            'tinggi_badan' => 'required|integer',
            'berat_badan'  => 'required|integer',
            'foto'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only([
            'nama', 'tgl_lahir', 'jk', 'agama', 'alamat', 'tinggi_badan', 'berat_badan',
        ]);

        if ($request->hasFile('foto')) {
            $file     = $request->file('foto');
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/biotada_fotos'), $filename);
            $data['foto'] = $filename;
        }

        Biotada::create($data);

        return redirect()->route('biotada.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(Biotada $biotada)
    {
        return view('biotada.show', compact('biotada'));
    }

    public function edit(Biotada $biotada)
    {
        return view('biotada.edit', compact('biotada'));
    }

    public function update(Request $request, Biotada $biotada)
    {
        $request->validate([
            'nama'         => 'required|string|max:255',
            'tgl_lahir'    => 'required|date',
            'jk'           => 'required|in:L,P',
            'agama'        => 'required|string',
            'alamat'       => 'required|string',
            'tinggi_badan' => 'required|integer',
            'berat_badan'  => 'required|integer',
            'foto'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only([
            'nama', 'tgl_lahir', 'jk', 'agama', 'alamat', 'tinggi_badan', 'berat_badan',
        ]);

        if ($request->hasFile('foto')) {
            // hapus file lama kalau ada
            if ($biotada->foto && file_exists(public_path('uploads/biotada_fotos/' . $biotada->foto))) {
                unlink(public_path('uploads/biotada_fotos/' . $biotada->foto));
            }
            $file     = $request->file('foto');
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/biotada_fotos'), $filename);
            $data['foto'] = $filename;
        }

        $biotada->update($data);

        return redirect()->route('biotada.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(Biotada $biotada)
    {
        // hapus foto jika ada
        if ($biotada->foto && file_exists(public_path('uploads/biotada_fotos/' . $biotada->foto))) {
            unlink(public_path('uploads/biotada_fotos/' . $biotada->foto));
        }
        $biotada->delete();

        return redirect()->route('biotada.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}
