<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DusunMap;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MapController extends Controller
{
    /**
     * VULN-04 / VULN-08 Fix: Added strict file validation and input validation
     * on both store and update methods.
     */
    private function fileRules(): array
    {
        return [
            'gambar' => 'required|file|max:5120',
        ];
    }

    public function index()
    {
        return response()->json(DusunMap::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'   => 'required|string|max:255',
            'gambar' => 'required|file|max:5120',
        ]);

        $file = $request->file('gambar');
        $ext = strtolower($file->getClientOriginalExtension());
        if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'])) {
            return response()->json(['message' => 'Format file peta tidak diizinkan.'], 422);
        }

        $dusun_id = Str::slug($request->nama);

        // Prevent duplicate dusun_id
        $count = DusunMap::where('dusun_id', 'LIKE', "{$dusun_id}%")->count();
        if ($count > 0) {
            $dusun_id = "{$dusun_id}-{$count}";
        }

        $filename = \Illuminate\Support\Str::random(40) . '.' . $ext;
        $path = $file->storeAs('maps', $filename, 'public');

        $map = DusunMap::create([
            'dusun_id' => $dusun_id,
            'nama'     => $request->nama,
            'gambar'   => url('storage/' . $path),
        ]);

        return response()->json($map, 201);
    }

    public function update(Request $request, $id)
    {
        $map = DusunMap::findOrFail($id);

        // VULN-08 Fix: update() method previously had NO validation at all
        $request->validate([
            'nama'   => 'nullable|string|max:255',
            'gambar' => request()->hasFile('gambar') ? 'nullable|file|max:5120' : 'nullable|string',
        ]);

        if ($request->has('nama') && !empty($request->nama)) {
            $map->nama     = $request->nama;
            $map->dusun_id = Str::slug($request->nama);
        }

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = strtolower($file->getClientOriginalExtension());
            if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'])) {
                return response()->json(['message' => 'Format file peta tidak diizinkan.'], 422);
            }

            // Delete old file from storage
            if ($map->gambar) {
                $oldPath = str_replace(url('storage/'), '', $map->gambar);
                Storage::disk('public')->delete($oldPath);
            }
            $filename = \Illuminate\Support\Str::random(40) . '.' . $ext;
            $path = $file->storeAs('maps', $filename, 'public');
            $map->gambar = url('storage/' . $path);
        }

        $map->save();
        return response()->json($map);
    }

    public function destroy($id)
    {
        $map = DusunMap::findOrFail($id);

        if ($map->gambar) {
            $path = str_replace(url('storage/'), '', $map->gambar);
            Storage::disk('public')->delete($path);
        }

        $map->delete();

        return response()->json(null, 204);
    }
}
