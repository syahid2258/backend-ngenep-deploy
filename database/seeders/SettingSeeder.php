<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultSettings = [
            'nama_desa' => 'Desa Ngenep',
            'deskripsi' => 'Website resmi Desa Ngenep. Portal informasi dan integrasi potensi wisata, kuliner, serta UMKM lokal untuk kemajuan masyarakat.',
            'alamat' => 'Kantor Kepala Desa Ngenep, Malang, Jawa Timur',
            'telepon' => '(0341) 1234567',
            'email' => 'admin@desangenep.go.id',
            'logo' => '/logo.svg' // default logo
        ];

        foreach ($defaultSettings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}
