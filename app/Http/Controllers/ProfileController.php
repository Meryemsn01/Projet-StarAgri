<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Récupère l'utilisateur actuellement authentifié

        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        // Mettez à jour les informations du profil ici
        // (par exemple, $user->update($request->all());)
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
