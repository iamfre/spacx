@extends('layouts.app')

@section('title', 'Контакты')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-4">
            <h1 class="text-black text-3xl font-bold mb-4">Контакты</h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-4">
                <div class="space-y-2 pb-4">
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Адрес</div>
                        <div class="flex-1 border px-4 py-2">г. Москва, ул. Известная 5</div>
                    </div>
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Email</div>
                        <div class="flex-1 border px-4 py-2"><a href="mailto:spac@x.com" class="hover:text-orange">spac@x.com</a>
                        </div>
                    </div>
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Телефон</div>
                        <div class="flex-1 border px-4 py-2"><a href="tel:+71824121602" class="hover:text-orange">+7 (182) 412-16-02</a></div>
                    </div>
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">График работы</div>
                        <div class="flex-1 border px-4 py-2"> 8:00 - 17:00 (Пн-Пт)</div>
                    </div>
                </div>
                <div>
                    <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab81705ae5ab08368eb8587f3a401adf09e2e2d0c4ab48dfdad2b2443a86dbcb1&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('footer')
    @include('partials.footer')
@endsection