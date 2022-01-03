<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_fasilitas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "fasilitas";

    protected $fillable = [
        'nama_fasilitas'
    ];
}
