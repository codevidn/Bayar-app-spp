<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [
        'bulan_dibayar',
        'tahun_bayar',
        'id_siswa',
        'tgl_bayar',
    ];
}
