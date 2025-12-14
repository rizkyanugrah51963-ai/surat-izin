<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
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
            'name'     => 'required|string|max:255',
            'profile'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gallery.*'=> 'nullable|image|max:2048',
        ]);

        $user->update(['name' => $request->name]);

        // FOTO PROFIL
        if ($request->hasFile('profile')) {
            if ($user->file) {
                Storage::disk('public')->delete($user->file->path);
                $user->file()->delete();
            }

            $path = $request->file('profile')->store('profiles', 'public');

            $user->file()->create([
                'filename' => basename($path),
                'path'     => $path,
                'mime_type'=> $request->file('profile')->getMimeType(),
                'size'     => $request->file('profile')->getSize(),
            ]);
        }

        // GALLERY (MULTI FILE)
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $path = $file->store('gallery', 'public');

                $user->files()->create([
                    'filename' => basename($path),
                    'path'     => $path,
                    'mime_type'=> $file->getMimeType(),
                    'size'     => $file->getSize(),
                ]);
            }
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
