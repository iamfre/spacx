<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('profile');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->intended(route('profile'));
        }

        $formFields = $request->only(['email', 'password']);

        if (Auth::attempt($formFields)) {
            return redirect()->route('profile')->withSuccess("Успешная авторизация");
        }

        return redirect()->route('login')->withErrors([
            'formError' => 'Неверный email или пароль'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->withSuccess("Вы вышли из аккаунта");
    }

    public function showRegisterForm()
    {
        return view('auth.registration');
    }

    public function register(RegisterRequest $request)
    {
        if (Auth::check()) {
            return redirect()->route('profile');
        }

        $validateFields = $request->validated();

        $user = User::create($validateFields);

        Auth::login($user);

        return redirect()->route('profile')->withSuccess("Вы успешно зарегистрировались");
    }

    public function forgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function forgotPasswordProcess(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
}
