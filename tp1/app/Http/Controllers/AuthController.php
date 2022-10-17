<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //

    public function loginForm()
    {
        return view('auth.login')->with('title', 'Login');
    }

    public function login(Request $request){
        $credentials =[
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            return redirect()
            ->route('admin')
            ->with('success', 'Sesión iniciada con éxito. ¡Bienvenido/a de vuelta!');
        }

        return back()->with('error', 'Las credenciales ingresadas no son válidas');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
        ->route('home')
        ->with('success', 'Sesión cerrada con éxito. ¡Hasta pronto!');
    }
}


