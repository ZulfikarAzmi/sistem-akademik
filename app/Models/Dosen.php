<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Dosen extends Model
{
    protected $fillable = ['nip', 'nama', 'email', 'no_hp'];

    public function mataKuliah()
    {
        return $this->hasMany(MataKuliah::class);
    }
}
