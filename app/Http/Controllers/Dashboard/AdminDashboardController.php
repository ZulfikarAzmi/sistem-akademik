<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\MataKuliah;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $jumlahMahasiswa = Mahasiswa::count();
        $jumlahDosen = Dosen::count();
        $jumlahProdi = Prodi::count();
        $jumlahMataKuliah = MataKuliah::count();

        return view('dashboard.admin', compact(
            'jumlahMahasiswa',
            'jumlahDosen',
            'jumlahProdi',
            'jumlahMataKuliah'
        ));
    }
}
