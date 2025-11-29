<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;   // ⬅️ WAJIB ADA

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email',
            'phone'  => 'nullable|string',
            'address'=> 'nullable|string',
            'photo'  => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $user = Auth::user();

        // UPDATE FOTO
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('profile', $filename, 'public');

            $user->photo = $filename;
        }

        // UPDATE DATA
        $user->name    = $request->name;
        $user->email   = $request->email;
        $user->phone   = $request->phone;
        $user->address = $request->address;

        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui!');
    }
}
