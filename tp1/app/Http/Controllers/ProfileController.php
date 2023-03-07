<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            'title' => 'Perfil - Organically',
            'user' => Auth::user(), 
        ]);
    }
    public function edit()
    {
        return view('profile.edit', [
            'title' => 'Editar Perfil - Organically',
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password ? bcrypt($request->password) : $user->password;
        $user->save();
        return redirect()->route('profile')->with('success', 'Perfil actualizado correctamente');
    }
}
