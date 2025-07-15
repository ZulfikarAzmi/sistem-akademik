<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MataKuliah;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Prodi;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahMahasiswa = Mahasiswa::count();
        $jumlahDosen = Dosen::count();
        $jumlahProdi = Prodi::count();
        $jumlahMataKuliah = MataKuliah::count();

        return view('dashboard', compact(
            'jumlahMahasiswa',
            'jumlahDosen',
            'jumlahProdi',
            'jumlahMataKuliah'
        ));
    }
}
