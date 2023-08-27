<nav class="border-b container mx-auto overflow-hidden px-4 sm:px-6">
    <section class="bg-white py-4">
        <ul class="list-inside bullet-list-item flex flex-wrap justify-between -mx-5 -my-2">
            <li class="px-5 py-2"><a
                        class="{{ Request::is('/') ? 'text-orange cursor-default' : 'text-gray-600 hover:text-orange' }}"
                        href="{{ route('home') }}">Главная</a></li>
            <li class="px-5 py-2"><a
                        class="{{ Request::is('article') ? 'text-orange cursor-default' : 'text-gray-600 hover:text-orange' }}"
                        href="{{ route('posts.index') }}">Статьи</a></li>
            <li class="px-5 py-2"><a
                        class="{{ Request::is('catalog') ? 'text-orange cursor-default' : 'text-gray-600 hover:text-orange' }}"
                        href="{{ route('catalog.index') }}">Каталог</a></li>
            <li class="px-5 py-2"><a
                        class="{{ Request::is('contacts') ? 'text-orange cursor-default' : 'text-gray-600 hover:text-orange' }}"
                        href="{{ route('contacts') }}">Контакты</a></li>
        </ul>
    </section>
</nav>