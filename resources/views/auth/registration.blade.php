@extends('layouts.app')

@section('title', 'Регистрация')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Регистрация</h1>

            {{--            <div class="my-4">--}}
            {{--                <div class="px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">--}}
            {{--                    <p>Поле email обязательно для заполнения</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="my-4">--}}
            {{--                <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">--}}
            {{--                    <p>Вы успешно зарегистрированы</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <form action="{{ route('registration') }}" method="post">
                @csrf
                <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="block">
                            <label for="fieldName" class="text-gray-700 font-bold">Имя</label>
                            <input id="fieldName" name="name" type="text"
                                   class="mt-1 block w-full rounded-md border-gray-300 @error('name') border-red-600 @enderror shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   value="{{ old('name') }}" placeholder="Илон Маск">
                            @error('name')
                            <span class="text-xs italic text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="block">
                            <label for="fieldEmail" class="text-gray-700 font-bold">Email</label>
                            <input id="fieldEmail" name="email" type="email"
                                   class="mt-1 block w-full rounded-md border-gray-300 @error('email') border-red-600 @enderror shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   value="{{ old('email') }}" placeholder="mask@example.com">
                            @error('email')
                            <span class="text-xs italic text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="block">
                            <label for="fieldPhone" class="text-gray-700 font-bold">Телефон</label>
                            <input id="fieldPhone" name="phone" type="text"
                                   class="mt-1 block w-full rounded-md border-gray-300 @error('phone') border-red-600 @enderror shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   value="{{ old('phone') }}" placeholder="89070803050">
                            @error('phone')
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
                        <div class="block">
                            <button type="submit"
                                    class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Регистрация
                            </button>
                            <a href="{{ route('login') }}"
                               class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                                У меня уже есть аккаунт
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