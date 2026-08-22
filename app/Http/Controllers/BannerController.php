<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        return response()->json(Banner::orderBy('created_at', 'desc')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|file|max:5120' // multiple files can be uploaded one by one
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ext = strtolower($file->getClientOriginalExtension());
            if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'])) {
                return response()->json(['message' => 'Format file banner tidak diizinkan.'], 422);
            }
            $filename = \Illuminate\Support\Str::random(40) . '.' . $ext;
            $path = $file->storeAs('banners', $filename, 'public');
            
            $banner = Banner::create([
                'gambar' => url('storage/' . $path)
            ]);
            return response()->json($banner, 201);
        }

        return response()->json(['message' => 'No file uploaded'], 400);
    }

    public function destroy(string $id)
    {
        $banner = Banner::findOrFail($id);
        
        // Optional: delete file from storage
        $path = str_replace(url('storage/'), '', $banner->gambar);
        Storage::disk('public')->delete($path);
        
        $banner->delete();
        
        return response()->json(null, 204);
    }
}
