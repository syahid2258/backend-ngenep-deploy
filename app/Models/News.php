<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori', 'tanggal', 'penulis', 'judul', 'deskripsi_singkat',
        'gambar', 'konten'
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}
