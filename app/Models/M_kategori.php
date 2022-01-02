<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_kategori extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "kategori_wisata";

    protected $fillable = [
        'nama_kategori'
    ];
}
