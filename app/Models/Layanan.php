<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanans';

    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'gambar',
        'rute',
        'jam_operasional',
        'status',
        'url_pemesanan',
    ];
}
