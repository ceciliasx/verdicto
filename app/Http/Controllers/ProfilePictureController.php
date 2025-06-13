<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilePictureController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:2048',
        ]);

        /** @var User $user */
        $user = Auth::user();

        if ($user->photo_path) {
            Storage::disk('public')->delete($user->photo_path);
        }

        $path = $request->file('photo')->store('profile-pictures', 'public');

        $user->photo_path = $path;
        $user->save();

        return redirect()->back()->with('status', 'Foto profil berhasil diperbarui!');
    }

    public function destroyProfilePicture(Request $request)
    {
        $user = $request->user();

        if ($user->photo_path) {
            Storage::disk('public')->delete($user->photo_path); // hapus file fisik
            $user->photo_path = null; // hapus di database
            $user->save();
        }

        return redirect()->back()->with('status', 'Foto profil berhasil dihapus.');
    }
}
