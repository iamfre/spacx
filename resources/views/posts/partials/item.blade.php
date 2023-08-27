<div class="px-4 py-4 max-w-xl">
    <div class="bg-white border border-gray-100 rounded overflow-hidden shadow-lg hover:shadow-2xl" >
        <div class="">
            <a href="{{ route('posts.show', $post->id) }}">
                <img class="hover:opacity-90 object-cover" src="{{ asset("storage/post/$post->image") }}" alt="{{ $post->title }}">
            </a>
        </div>

        <div class="px-4 py-2 mt-1 bg-white">
            <h2 class="font-bold text-xl text-gray-800">{{ Str::of($post->title)->limit(25) }}</h2>
            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-2">
                {!! Str::of($post->description)->limit(120) !!}
            </p>
        </div>
    </div>
</div>