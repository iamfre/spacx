@extends('layouts.app')

@section('title', $post->title)

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="m-auto px-4 py-8 max-w-xl">
            <div class="bg-white shadow-2xl">
                <div>
                    <img src="{{ asset("storage/post/$post->image") }}" alt="{{ $post->title }}"
                         title="{{ $post->title }}">
                </div>
                <div class="px-4 py-2 mt-2 bg-white">
                    <h2 class="font-bold text-2xl text-gray-800">{{ $post->title }}</h2>
                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        {!! $post->text !!}
                    </p>
                </div>
            </div>

            <div>
                <section class="rounded-b-lg mt-4">
                    <form method="POST" action="">
                        @csrf

                        <textarea name="text"
                                  class="w-full p-4 mb-4 rounded-md text-xl border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('text') border-red-500 @enderror"
                                  placeholder="Ваш комментарий..." spellcheck="false"></textarea>

                        @error('text')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <button type="submit"
                                class="font-bold py-2 px-4 w-full bg-orange bg-opacity-95 text-lg text-white shadow-md rounded-lg focus:outline-none focus:bg-opacity-100 hover:bg-opacity-75">
                            Написать
                        </button>
                    </form>

                    <div id="task-comments" class="pt-4">
                        <div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                            <div class="flex flex-row justify-center mr-2">
                                <h3 class="text-blue-700 font-semibold text-lg text-center md:text-left ">
                                    User Name</h3>
                            </div>

                            <p style="width: 90%"
                               class="text-gray-600 text-lg text-center md:text-left ">Text msg</p>
                        </div>
                        <div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                            <div class="flex flex-row justify-center mr-2">
                                <h3 class="text-blue-700 font-semibold text-lg text-center md:text-left ">
                                    Name User</h3>
                            </div>

                            <p style="width: 90%"
                               class="text-gray-600 text-lg text-center md:text-left ">Message text</p>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </main>
@endsection