<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi; // Ensure you have the Prodi model imported

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = Prodi::all();
        return view('.prodi.index', compact('prodis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('.prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Prodi::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $prodi = Prodi::findOrFail($id);
        $prodi->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('prodi.index')
            ->with('success', 'Prodi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();

        return redirect()->route('prodi.index')
            ->with('success', 'Prodi berhasil dihapus');
            
        } catch (\Exception $e) {
        return redirect()->route('prodi.index')
            ->with('error', 'Gagal menghapus prodi: ' . $e->getMessage());
        }
    }
}
