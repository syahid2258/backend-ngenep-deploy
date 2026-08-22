<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DusunMap;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maps = [
            [
                'dusun_id' => 'semua',
                'nama' => 'Semua Dusun',
                'gambar' => '/peta/semua.png', 
            ],
            [
                'dusun_id' => 'babaan', // Disesuaikan dari babakan
                'nama' => 'Dusun Babaan', // Disesuaikan dari Dusun Babakan
                'gambar' => '/peta/dusun babakan.png', 
            ],
            [
                'dusun_id' => 'curah_kembang', // Disesuaikan dari curahkembang
                'nama' => 'Dusun Curah Kembang', // Disesuaikan (diberi spasi)
                'gambar' => '/peta/dusun curahkembang.png',
            ],
            [
                'dusun_id' => 'genitri',
                'nama' => 'Dusun Genitri',
                'gambar' => '/peta/dusun genitri.png',
            ],
            [
                'dusun_id' => 'lowoksari',
                'nama' => 'Dusun Lowoksari',
                'gambar' => '/peta/dusun lowoksari.png',
            ],
            [
                'dusun_id' => 'mojosari',
                'nama' => 'Dusun Mojosari',
                'gambar' => '/peta/dusun mojosari.png',
            ],
            [
                'dusun_id' => 'ngenep_krajan', // Disesuaikan dari ngenep
                'nama' => 'Dusun Ngenep Krajan', // Disesuaikan dari Dusun Ngenep
                'gambar' => '/peta/dusun ngenep.png',
            ],
            [
                'dusun_id' => 'tumpangrejo',
                'nama' => 'Dusun Tumpangrejo',
                'gambar' => '/peta/dusun tumpangrejo.png',
            ],
            [
                'dusun_id' => 'kubung',
                'nama' => 'Dusun Kubung',
                'gambar' => '/peta/kubung.png',
            ]
        ];

        foreach ($maps as $map) {
            DusunMap::updateOrCreate(['dusun_id' => $map['dusun_id']], $map);
        }
    }
}