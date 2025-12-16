<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function showProfile()
    {
        return view('siswa.profile', [
            'user' => auth()->user()
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        if ($request->hasFile('profile')) {
            if ($user->file) {
                Storage::disk('public')->delete($user->file->path);
                $user->file()->delete();
            }

            $path = $request->file('profile')->store('profiles', 'public');

            $user->file()->create([
                'filename'  => basename($path),
                'path'      => $path,
                'mime_type' => $request->file('profile')->getMimeType(),
                'size'      => $request->file('profile')->getSize(),
            ]);
        }

        return back()->with('success', 'Profil berhasil diperbarui');
    }

    public function deletePhoto()
    {
        $user = auth()->user();

        if ($user->file) {
            Storage::disk('public')->delete($user->file->path);
            $user->file()->delete();
        }

        return back()->with('success', 'Foto profil dihapus');
    }
}
