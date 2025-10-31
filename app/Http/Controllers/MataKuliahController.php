<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\Dosen;
use App\Models\Prodi;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::with('dosen')->paginate(10);
        return view('mata_kuliah.index', compact('mataKuliahs'));
    }

     public function create()
    {
        $dosens = Dosen::all();
        $prodis = Prodi::all();
        return view('mata_kuliah.add', compact('dosens', 'prodis'));
    }

     public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:10',
            'nama' => 'required|string|max:255',
            'prodi_id' => 'required|exists:prodis,id',
            'dosen_id' => 'nullable|exists:dosens,id',
            'sks' => 'required|integer',
            'semester' => 'required|integer',
            'tipe' => 'required|in:wajib,pilihan',
        ]);

        MataKuliah::create($validated);

        return redirect()->route('mata-kuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        $dosens = Dosen::all();
        $prodis = Prodi::all();
        return view('mata_kuliah.edit', compact('mataKuliah', 'dosens', 'prodis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|unique:mata_kuliahs,kode,' . $id,
            'nama' => 'required',
            'dosen_id' => 'required|exists:dosens,id',
        ]);

        $mataKuliah = MataKuliah::findOrFail($id);
        $mataKuliah->update($request->all());

        return redirect()->route('mata-kuliah.index')->with('success', 'Mata kuliah berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        $mataKuliah->delete();

        return redirect()->route('mata-kuliah.index')->with('success', 'Mata kuliah berhasil dihapus!');
    }
}
