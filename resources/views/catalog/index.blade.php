@extends('layouts.app')

@section('title', 'Каталог')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Каталог</h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
                @each('partials.ships.item', $ships, 'ship')
            </div>
        </div>
        <div class="flex justify-around mb-5 mt-5">
            {{ $ships->links() }}
        </div>
    </main>
@endsection