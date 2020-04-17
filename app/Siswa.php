<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nisn',
        'nis',
        'user_token',
        'id_kelas',
        'jk',
        'nama',
        'no_telp',
        'alamat'
    ];
}
