<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori', 'nama', 'dusun', 'deskripsi', 'deskripsi_panjang',
        'gambar', 'ikon', 'jamBuka', 'harga', 'fasilitas', 'mapLink', 'galeri'
    ];

    protected $casts = [
        'fasilitas' => 'array',
        'galeri' => 'array',
    ];
}
