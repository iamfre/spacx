@extends('layouts.app')

@section('title', $ship->name)

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">{{ $ship->name }}</h1>

            <div class="space-y-4">
                <img src="{{ asset("storage/catalog/$ship->image") }}" alt="{{ $ship->name }}" title="{{ $ship->name }}" class="w-96">

                @foreach ($ship->detail as $key => $value)
                    <p><span class="font-bold">{{ $key }}:</span> {{ $value }}</p>
                @endforeach

                <p class="text-grey-darker text-base">
                    <span class="font-bold">цена:</span>
                    <span class="inline-block">{{ $ship->price }} $</span>
                    @if($ship->old_price)
                        <span class="inline-block line-through pl-6 text-gray-400">{{ $ship->old_price}} $</span>
                    @endif
                </p>
            </div>
        </div>
    </main>
@endsection