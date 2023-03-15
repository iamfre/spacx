<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    public function login(Request $request){
        if (Auth::check()){
            return redirect()->intended(route('home'));
        }

        $formFields = $request->only(['email', 'password']);

        if (Auth::attempt($formFields)){
            return redirect()->intended(route('home'));
        }

        return redirect()->route('login')->withErrors([
            'formError' => 'Неверный email или пароль'
        ]);
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
