<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:dosens,nip',
            'nama' => 'required',
            'email' => 'required|email|unique:dosens,email',
            'no_hp' => 'nullable',
        ]);

        Dosen::create($request->all());

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan');
    }
}
