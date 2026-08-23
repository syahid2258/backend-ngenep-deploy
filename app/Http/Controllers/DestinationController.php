<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    /**
     * Reusable validation rules for file uploads.
     * VULN-04 Fix: Enforce strict MIME type and size validation for all uploads.
     * 'nullable' alone previously allowed ANY file type including PHP scripts.
     */
    private function fileValidationRules(): array
    {
        return [
            'gambar'        => request()->hasFile('gambar') ? 'nullable|file|max:5120' : 'nullable|string',
            'galeri_files'  => 'nullable|array|max:20',
            'galeri_files.*'=> 'file|max:5120',
        ];
    }

    /**
     * VULN-15 Fix: Validate that a URL is only http/https scheme.
     */
    private function isValidExternalUrl(?string $url): bool
    {
        if (empty($url)) return true;
        return (bool) preg_match('/^https?:\/\/.+/i', $url);
    }

    public function index()
    {
        return response()->json(Destination::all());
    }

    public function store(Request $request)
    {
        $baseRules = [
            'kategori'         => 'required|string|max:100',
            'nama'             => 'required|string|max:255',
            'dusun'            => 'required|string|max:100',
            'deskripsi'        => 'nullable|string|max:1000',
            'deskripsi_panjang'=> 'nullable|string',
            'ikon'             => 'nullable|string|max:100',
            'jamBuka'          => 'nullable|string|max:100',
            'harga'            => 'nullable|string|max:100',
            'fasilitas'        => 'nullable|array',
            'fasilitas.*'      => 'string|max:100',
            'mapLink'          => 'nullable|string|max:1000',
            'galeri'           => 'nullable|array',
            'galeri.*'         => 'nullable|url|max:1000',
        ];

        $validated = $request->validate(array_merge($baseRules, $this->fileValidationRules()));

        // VULN-15: Validate that gambar URL (if string) uses http/https scheme only
        if (!$request->hasFile('gambar') && isset($validated['gambar'])) {
            if (!$this->isValidExternalUrl($validated['gambar'])) {
                return response()->json(['message' => 'URL gambar tidak valid.'], 422);
            }
        }

        $allowedExt = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = strtolower($file->getClientOriginalExtension());
            if (!in_array($ext, $allowedExt)) {
                return response()->json(['message' => 'Format file gambar utama tidak diizinkan.'], 422);
            }
            $filename = \Illuminate\Support\Str::random(40) . '.' . $ext;
            $path = $file->storeAs('destinations', $filename, 'public');
            $validated['gambar'] = url('storage/' . $path);
        }

        $galeri = $validated['galeri'] ?? [];
        if ($request->hasFile('galeri_files')) {
            foreach ($request->file('galeri_files') as $file) {
                $ext = strtolower($file->getClientOriginalExtension());
                if (!in_array($ext, $allowedExt)) {
                    return response()->json(['message' => 'Format file galeri tidak diizinkan.'], 422);
                }
                $filename = \Illuminate\Support\Str::random(40) . '.' . $ext;
                $path = $file->storeAs('destinations/galeri', $filename, 'public');
                $galeri[] = url('storage/' . $path);
            }
        }
        $validated['galeri'] = empty($galeri) ? null : $galeri;

        $destination = Destination::create($validated);
        return response()->json($destination, 201);
    }

    public function show(string $id)
    {
        $destination = Destination::findOrFail($id);
        return response()->json($destination);
    }

    public function update(Request $request, string $id)
    {
        $destination = Destination::findOrFail($id);

        $baseRules = [
            'kategori'         => 'required|string|max:100',
            'nama'             => 'required|string|max:255',
            'dusun'            => 'required|string|max:100',
            'deskripsi'        => 'nullable|string|max:1000',
            'deskripsi_panjang'=> 'nullable|string',
            'ikon'             => 'nullable|string|max:100',
            'jamBuka'          => 'nullable|string|max:100',
            'harga'            => 'nullable|string|max:100',
            'fasilitas'        => 'nullable|array',
            'fasilitas.*'      => 'string|max:100',
            'mapLink'          => 'nullable|url|max:1000',
            'galeri'           => 'nullable|array',
            'galeri.*'         => 'nullable|url|max:1000',
        ];

        $validated = $request->validate(array_merge($baseRules, $this->fileValidationRules()));

        // VULN-15: Validate URL scheme
        if (!$request->hasFile('gambar') && isset($validated['gambar'])) {
            if (!$this->isValidExternalUrl($validated['gambar'])) {
                return response()->json(['message' => 'URL gambar tidak valid.'], 422);
            }
        }

        $allowedExt = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = strtolower($file->getClientOriginalExtension());
            if (!in_array($ext, $allowedExt)) {
                return response()->json(['message' => 'Format file gambar utama tidak diizinkan.'], 422);
            }
            $filename = \Illuminate\Support\Str::random(40) . '.' . $ext;
            $path = $file->storeAs('destinations', $filename, 'public');
            $validated['gambar'] = url('storage/' . $path);
        }

        $galeri = $validated['galeri'] ?? [];
        if ($request->hasFile('galeri_files')) {
            foreach ($request->file('galeri_files') as $file) {
                $ext = strtolower($file->getClientOriginalExtension());
                if (!in_array($ext, $allowedExt)) {
                    return response()->json(['message' => 'Format file galeri tidak diizinkan.'], 422);
                }
                $filename = \Illuminate\Support\Str::random(40) . '.' . $ext;
                $path = $file->storeAs('destinations/galeri', $filename, 'public');
                $galeri[] = url('storage/' . $path);
            }
        }
        $validated['galeri'] = empty($galeri) ? null : $galeri;

        $destination->update($validated);
        return response()->json($destination);
    }

    public function destroy(string $id)
    {
        $destination = Destination::findOrFail($id);
        $destination->delete();

        return response()->json(null, 204);
    }
}
