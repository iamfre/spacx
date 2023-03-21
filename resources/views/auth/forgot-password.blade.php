@extends('layouts.app')

@section('title', 'Забыл пароль')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Забыл пароль</h1>

            @if(session('status'))
                <div class="my-4">
                    <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
                        <p>{{ session('status') }}</p>
                    </div>
                </div>
            @endif

            <form action="{{ route('password.email') }}" method="post">
                @csrf
                <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="block">
                            <label for="fieldEmail" class="text-gray-700 font-bold">Email</label>
                            <input id="fieldEmail" name="email" type="email" value="" class="mt-1 block w-full rounded-md border-gray-300 @error('email') border-red-600 @enderror shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com">
                            @error('email')
                            <span class="text-xs italic text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="block">
                            <button type="submit" class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Сбросить
                            </button>
                            <a href="{{ route('login') }}" class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                                Вспомнил пароль
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