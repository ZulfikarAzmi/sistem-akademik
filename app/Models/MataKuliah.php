<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataKuliah extends Model
{
    use HasFactory;

     protected $fillable = [
        'kode',
        'nama',
        'prodi_id',
        'dosen_id',
        'sks',
        'semester',
        'tipe',
    ];


    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
