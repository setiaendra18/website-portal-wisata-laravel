<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_event extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "event";

    protected $fillable = [
        'nama_event',
        'tanggal_mulai',
        'tanggal_selesai',
        'keterangan',
        'id_wisata',
    ];
}
