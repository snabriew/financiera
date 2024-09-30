<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Autenticación exitosa
        return redirect()->intended('dashboard');
    }

    // Autenticación fallida
    return back()->withErrors([
        'username' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
    ]);
}
}
