<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    /**
     * Get all settings and current admin info
     */
    public function index(Request $request)
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        $user = $request->user();

        return response()->json([
            'settings' => $settings,
            'user' => $user ? [
                'name' => $user->name,
                'email' => $user->email,
            ] : null,
        ]);
    }

    /**
     * Get public settings for the frontend (no auth required)
     */
    public function publicIndex()
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        return response()->json(['settings' => $settings]);
    }

    /**
     * Update settings and admin info
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'nama_desa' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string|max:1000',
            'alamat'    => 'nullable|string|max:500',
            'telepon'   => 'nullable|string|max:50',
            'email'     => 'nullable|email|max:255',
            'logo'      => request()->hasFile('logo') ? 'nullable|file|max:2048' : 'nullable|string',
            
            // Admin updates
            'username'  => 'nullable|string|max:255|unique:users,name,' . optional($request->user())->id,
            'password'  => 'nullable|string|min:8',
        ]);

        // Process logo upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $ext = strtolower($file->getClientOriginalExtension());
            if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'])) {
                return response()->json(['message' => 'Format file logo tidak diizinkan.'], 422);
            }
            $filename = \Illuminate\Support\Str::random(40) . '.' . $ext;
            $path = $file->storeAs('settings', $filename, 'public');
            
            Setting::updateOrCreate(
                ['key' => 'logo'],
                ['value' => url('storage/' . $path)]
            );
        }

        // Process basic text settings
        $keys = ['nama_desa', 'deskripsi', 'alamat', 'telepon', 'email'];
        foreach ($keys as $key) {
            if (isset($validated[$key])) {
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $validated[$key]]
                );
            }
        }

        // Process admin user update
        $user = $request->user();
        if ($user) {
            $userUpdate = [];
            if (!empty($validated['username'])) {
                $userUpdate['name'] = $validated['username'];
            }
            if (!empty($validated['password'])) {
                $userUpdate['password'] = Hash::make($validated['password']);
            }
            if (!empty($userUpdate)) {
                $user->update($userUpdate);
            }
        }

        return response()->json([
            'message' => 'Pengaturan berhasil disimpan.',
            'settings' => Setting::all()->pluck('value', 'key')->toArray()
        ]);
    }
}
