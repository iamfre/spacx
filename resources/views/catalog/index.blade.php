@extends('layouts.app')

@section('title', 'Статьи')
@include('partials.header')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-1 mb-2">
        @each('partials.posts.item', $ships, 'ship')
    </div>
    <div class="flex justify-around mb-5">
        {{ $ships->links() }}
    </div>

@endsection