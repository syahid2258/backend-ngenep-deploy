<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPotensi extends Model
{
    use HasFactory;

    protected $table = 'kategori_potensi';

    protected $fillable = [
        'nama',
        'icon', // Optional, e.g. for lucide-react icon name like 'Camera', 'Utensils'
    ];
}
