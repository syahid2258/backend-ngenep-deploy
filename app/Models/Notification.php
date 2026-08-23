<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'pesan', 'is_penting', 'tanggal'
    ];

    protected $casts = [
        'is_penting' => 'boolean',
        'tanggal' => 'datetime',
    ];
}
