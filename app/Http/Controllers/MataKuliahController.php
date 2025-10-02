<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\Dosen;

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
        return view('mata_kuliah.add', compact('dosens'));
    }

     public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:mata_kuliahs,kode',
            'nama' => 'required',
            'dosen_id' => 'required|exists:dosens,id',
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('mata-kuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        $dosens = Dosen::all();
        return view('mata_kuliah.edit', compact('mataKuliah', 'dosens'));
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
