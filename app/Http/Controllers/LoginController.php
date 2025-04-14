<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function LoginInicial()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login redireciona para dashboard
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // Login falhou — volta com mensagem
        return back()->withErrors([
            'email' => 'As credenciais estão incorretas.',
        ])->withInput();
    }
}


