<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_gambar extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "galeri";

    protected $fillable = [
        'id_wisata',
        'nama_gambar'
    ];
}
