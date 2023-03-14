@extends('layouts.app')

@section('title', 'Контакты')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-4">
            <h1 class="text-black text-3xl font-bold mb-4">Контакты</h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-6">
                <address>
                    <p class="font-bold not-italic mb-1">Адрес</p>
                    <p class="mx-2">г. Москва, ул. Известная 5</p>
                    <p class="font-bold not-italic mt-3 mb-1">График работы</p>
                    <p class="mx-2">Пн-Пт</p>
                    <p class="mx-2">8:00 - 17:00</p>
                    <div>
                        <p class="font-bold not-italic mt-3 mb-1">Телефон</p>
                        <a href="tel:89825385756" class="hover:text-orange mx-2">+7 (182) 412-16-02</a>
                    </div>
                    <div>
                        <p class="font-bold not-italic mt-3 mb-1">Email</p>
                        <a href="mailto:legat@yandex.ru" class="hover:text-orange mx-2">space@x.com</a>
                    </div>
                </address>
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