<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-symlink', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        return 'Symlink berhasil dibuat! Gambar sekarang bisa diakses.';
    } catch (\Exception $e) {
        return 'Gagal membuat symlink: ' . $e->getMessage();
    }
});
