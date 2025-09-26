<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;  
use App\Models\Prodi; // Ensure you have the Prodi model imported

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::with('prodi')->paginate(10); 

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = Prodi::all();
        return view('mahasiswa.add', compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'email' => 'required|email|unique:mahasiswas,email',
        'no_hp' => 'nullable',
        'jenis_kelamin' => 'required|in:L,P',
        'tanggal_lahir' => 'required|date',
        'alamat' => 'nullable',
        'prodi_id' => 'required|exists:prodis,id',
        'tipe' => 'required|in:reguler,transfer',
        'tahun_masuk' => 'required|digits:4',
    ]);

    // Konversi tipe ke kode angka
    $tipe_kode = $request->tipe === 'reguler' ? '01' : '02';

    // Hitung nomor urut mahasiswa dengan kombinasi tertentu
    $jumlah = Mahasiswa::where('prodi_id', $request->prodi_id)
        ->where('tipe', $request->tipe)
        ->where('tahun_masuk', $request->tahun_masuk)
        ->count() + 1;

    // Format NIM: thnMasuk(2digit) + prodi(2digit) + tipe(2digit) + urut(3digit)
    $nim = substr($request->tahun_masuk, 2, 2)
        . str_pad($request->prodi_id, 2, '0', STR_PAD_LEFT)
        . $tipe_kode
        . str_pad($jumlah, 3, '0', STR_PAD_LEFT);

    // Simpan data mahasiswa
    Mahasiswa::create([
        'nim' => $nim,
        'nama' => $request->nama,
        'email' => $request->email,
        'no_hp' => $request->no_hp,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tanggal_lahir' => $request->tanggal_lahir,
        'alamat' => $request->alamat,
        'prodi_id' => $request->prodi_id,
        'tipe' => $request->tipe,
        'tahun_masuk' => $request->tahun_masuk,
    ]);

    return redirect('/dashboard/mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan');
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
        $prodis = Prodi::all();

        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa', 'prodis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string|unique:mahasiswas,nim,' . $id,
            'email' => 'required|email|unique:mahasiswas,email,' . $id,
        ]);


        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         try {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil dihapus');
            
        } catch (\Exception $e) {
        return redirect()->route('mahasiswa.index')
            ->with('error', 'Gagal menghapus mahasiswa: ' . $e->getMessage());
        }
    }
}
