<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

     protected $fillable = [
        'nim',
        'nama',
        'prodi_id',
        'tipe',
        'tahun_masuk',
        'email',
        'no_hp',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);  
    }



}
