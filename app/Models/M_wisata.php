<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_wisata extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "wisata";

    protected $fillable = [
        'nama_wisata',
        'harga_tiket',
        'alamat',
        'kontak_pengelola',
        'fasilitas',
        'deskripsi',
        'gmaps',
        'id_kategori',
        'id_galeri',
    ];
}
