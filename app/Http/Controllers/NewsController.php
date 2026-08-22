<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * VULN-04 Fix: Strict MIME type + size validation.
     * Previously 'gambar' => 'nullable' allowed any file to be uploaded.
     */
    private function baseRules(): array
    {
        return [
            'kategori'          => 'required|string|max:100',
            'tanggal'           => 'nullable|date',
            'penulis'           => 'nullable|string|max:100',
            'judul'             => 'required|string|max:255',
            'deskripsi_singkat' => 'nullable|string|max:500',
            'gambar'            => request()->hasFile('gambar') ? 'nullable|file|max:5120' : 'nullable|string',
            'konten'            => 'nullable|string',
        ];
    }

    public function index()
    {
        return response()->json(News::orderBy('created_at', 'desc')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->baseRules());

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = strtolower($file->getClientOriginalExtension());
            if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'])) {
                return response()->json(['message' => 'Format file gambar tidak diizinkan.'], 422);
            }
            $filename = \Illuminate\Support\Str::random(40) . '.' . $ext;
            $path = $file->storeAs('news', $filename, 'public');
            $validated['gambar'] = url('storage/' . $path);
        }

        $news = News::create($validated);
        return response()->json($news, 201);
    }

    public function show(string $id)
    {
        $news = News::findOrFail($id);
        return response()->json($news);
    }

    public function update(Request $request, string $id)
    {
        $news = News::findOrFail($id);

        $validated = $request->validate($this->baseRules());

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = strtolower($file->getClientOriginalExtension());
            if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'])) {
                return response()->json(['message' => 'Format file gambar tidak diizinkan.'], 422);
            }
            $filename = \Illuminate\Support\Str::random(40) . '.' . $ext;
            $path = $file->storeAs('news', $filename, 'public');
            $validated['gambar'] = url('storage/' . $path);
        }

        $news->update($validated);
        return response()->json($news);
    }

    public function destroy(string $id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return response()->json(null, 204);
    }
}
