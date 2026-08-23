<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        // Get all notifications sorted by latest first
        $notifications = Notification::orderBy('tanggal', 'desc')->get();
        return response()->json($notifications);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'pesan' => 'required|string',
            'is_penting' => 'boolean',
            'tanggal' => 'date',
        ]);

        $notification = Notification::create([
            'judul' => $request->judul,
            'pesan' => $request->pesan,
            'is_penting' => $request->is_penting ?? false,
            'tanggal' => $request->tanggal ?? now(),
        ]);

        return response()->json($notification, 201);
    }

    public function update(Request $request, $id)
    {
        $notification = Notification::findOrFail($id);
        
        $request->validate([
            'judul' => 'sometimes|required|string|max:255',
            'pesan' => 'sometimes|required|string',
            'is_penting' => 'boolean',
            'tanggal' => 'date',
        ]);

        $notification->update($request->all());

        return response()->json($notification);
    }

    public function destroy($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return response()->json(null, 204);
    }
}
