<div class="bg-white w-full border border-gray-100 rounded overflow-hidden shadow-lg hover:shadow-2xl">
    <a class="block w-full" href="{{ route('catalog.show', $ship->id) }}"><img class="w-full h-full hover:opacity-90 object-cover" src="{{ asset("storage/catalog/$ship->image") }}" alt="{{ $ship->name }}"></a>
    <div class="px-6 py-4">
        <div class="text-black font-bold text-xl mb-2"><a class="hover:text-orange" href="{{ route('catalog.show', $ship->id) }}">{{ $ship->name }}</a></div>
        <p class="text-grey-darker text-base">
            <span class="inline-block">{{ $ship->price }} $</span>
            @if($ship->old_price)
                <span class="inline-block line-through pl-6 text-gray-400">{{ $ship->old_price}} $</span>
            @endif
        </p>
    </div>
</div>