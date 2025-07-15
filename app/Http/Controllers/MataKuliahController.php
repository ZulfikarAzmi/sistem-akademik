<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\Dosen;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::with('dosen')->get();
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
}
