<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


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

            if (Auth::user()->admin == true) {
                return redirect()
                ->intended('admin')
                ->with('success', 'Sesión iniciada con éxito.');
            }
            return redirect()
            ->intended('home')
            ->with('success', 'Sesión iniciada con éxito.');

        }

        return back()->with('error', 'Las credenciales ingresadas no son válidas')->withInput($request->only('email'));
    }

    public function registerForm()
    {
        return view('auth.register')->with('title', 'Registro');
    }

    public function register(Request $request)
    {

        $request->validate(User::VALIDATE_RULES, User::VALIDATE_MESSAGES);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $credentials =[
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect()->intended('home')->with('success', 'Usuario creado con éxito.');
        }
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


