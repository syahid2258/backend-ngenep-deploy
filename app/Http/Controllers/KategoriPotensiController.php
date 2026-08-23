<?php

namespace App\Http\Controllers;

use App\Models\KategoriPotensi;
use Illuminate\Http\Request;

class KategoriPotensiController extends Controller
{
    public function index()
    {
        $kategori = KategoriPotensi::all();
        return response()->json($kategori);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255'
        ]);

        $kategori = KategoriPotensi::create([
            'nama' => $request->nama,
            'icon' => $request->icon ?? 'Camera'
        ]);

        return response()->json(['message' => 'Kategori berhasil ditambahkan', 'data' => $kategori], 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255'
        ]);

        $kategori = KategoriPotensi::findOrFail($id);
        $kategori->update([
            'nama' => $request->nama,
            'icon' => $request->icon ?? 'Camera'
        ]);

        return response()->json(['message' => 'Kategori berhasil diupdate', 'data' => $kategori]);
    }

    public function destroy($id)
    {
        $kategori = KategoriPotensi::findOrFail($id);
        $kategori->delete();

        return response()->json(['message' => 'Kategori berhasil dihapus']);
    }
}
