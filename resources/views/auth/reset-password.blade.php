@extends('layouts.app')

@section('title', 'Создание нового пароля')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Создание нового пароля</h1>

            <form action="{{ route('password.update') }}" method="post">
                @csrf
                <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="block">
                            <label for="fieldEmail" class="text-gray-700 font-bold">Email</label>
                            <input readonly id="fieldEmail" name="email" type="email"
                                   class="mt-1 block w-full rounded-md border-gray-300 @error('email') border-red-600 @enderror shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   value="{{ app('request')->input('email') }}" placeholder="">
                            @error('email')
                            <span class="text-xs italic text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="block">
                            <label for="fieldPassword" class="text-gray-700 font-bold">Пароль</label>
                            <input id="fieldPassword" name="password" type="password"
                                   class="mt-1 block w-full rounded-md border-gray-300 @error('password') border-red-600 @enderror shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   placeholder="******">
                            @error('password')
                            <span class="text-xs italic text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="block">
                            <label for="fieldPasswordConfirmation" class="text-gray-700 font-bold">Подтверждение
                                пароля</label>
                            <input id="fieldPasswordConfirmation" name="password_confirmation" type="password"
                                   class="mt-1 block w-full rounded-md border-gray-300 @error('password') border-red-600 @enderror shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   placeholder="******">
                        </div>

                        <input type="hidden" value="{{ $token }}" name="token">

                        <div class="block">
                            <button type="submit"
                                    class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Сохранить
                            </button>
                            <a href="{{ route('login') }}"
                               class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                                Я вспомнил пароль
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection

@section('footer')
    @include('partials.footer')
@endsection