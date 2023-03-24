<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $formFields = $request->only(['email', 'password']);

        if (\auth('admin')->attempt($formFields)) {
            return redirect()->route('admin.posts.index')->withSuccess("Успешная авторизация");
        }

        return redirect()->route('admin.login')->withErrors([
            'formError' => 'Неверный email или пароль'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->withSuccess("Вы вышли из аккаунта");
    }
}
