@extends('layouts.app')

@section('title', 'Главная страница')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8 pt-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-6">
                @each('partials.ships.item', $ships, 'ship')
            </div>
        </div>
    </main>
@endsection

@section('footer')
    @include('partials.footer')
@endsection