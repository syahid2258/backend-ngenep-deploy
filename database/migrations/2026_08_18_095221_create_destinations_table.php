<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('kategori'); // wisata, kuliner, umkm
            $table->string('nama');
            $table->string('dusun');
            $table->text('deskripsi')->nullable();
            $table->longText('deskripsi_panjang')->nullable();
            $table->string('gambar')->nullable();
            $table->string('ikon')->nullable();
            $table->string('jamBuka')->nullable();
            $table->string('harga')->nullable();
            $table->text('fasilitas')->nullable();
            $table->string('mapLink')->nullable();
            $table->text('galeri')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
