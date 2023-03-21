@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8 space-y-2">
            <h1 class="text-black text-3xl font-bold mb-4">Личный кабинет</h1>
            @if(session('success'))
                <div class="my-4">
                    <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                </div>
            @endif
            <div class="space-y-2">
                <div class="space-y-2 pb-4 border-b">
                    <p class="text-xl">Мои профиль</p>

                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Имя</div>
                        <div class="flex-1 border px-4 py-2">{{ auth()->user()->name }}</div>
                    </div>
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Email</div>
                        <div class="flex-1 border px-4 py-2">{{ auth()->user()->email }}</div>
                    </div>
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Телефон</div>
                        <div class="flex-1 border px-4 py-2">{{ auth()->user()->phone ? phone(auth()->user()->phone) : 'не указан'}}</div>
                    </div>
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Активность</div>
                        <div class="flex-1 border px-4 py-2">Да</div>
                    </div>
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Подписан на рассылку</div>
                        <div class="flex-1 border px-4 py-2">Нет</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection