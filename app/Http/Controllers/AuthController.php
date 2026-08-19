<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // VULN-03 Fix: Input validation with max length to prevent abuse
        $request->validate([
            'username' => 'required|string|max:100',
            'password' => 'required|string|max:255',
        ]);

        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();

            // Token expires in 1440 min (24h) — set in config/sanctum.php
            $token = $user->createToken('admin-token')->plainTextToken;

            // VULN-02 Note: For full security, switch to Sanctum SPA (cookie-based)
            // when HTTPS is available. For now, return token with short expiry.
            return response()->json([
                'user'  => $user,
                'token' => $token,
            ]);
        }

        // Generic error — does NOT distinguish between "user not found" vs "wrong password"
        // to prevent username enumeration
        return response()->json([
            'message' => 'Username atau password salah!'
        ], 401);
    }

    public function logout(Request $request)
    {
        // Revoke the current access token
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Berhasil logout'
        ]);
    }

    public function user(Request $request)
    {
        // Return user without sensitive fields (password is already hidden via $hidden in User model)
        return response()->json($request->user());
    }
}
