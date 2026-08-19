<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DusunMap extends Model
{
    use HasFactory;

    protected $fillable = ['dusun_id', 'nama', 'gambar'];
}
