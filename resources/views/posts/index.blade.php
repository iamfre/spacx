@extends('layouts.app')

@section('title', 'Статьи')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-1">Статьи</h1>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-12">
                @foreach($posts as $post)
                    @include("posts.partials.item", ["post" => $post])
                @endforeach
            </div>

            <div class="flex justify-around mb-5">
                {{ $posts->links() }}
            </div>
        </div>
    </main>
@endsection

@section('footer')
    @include('partials.footer')
@endsection