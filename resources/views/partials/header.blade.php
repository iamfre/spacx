<header class="bg-white">
    <div class="border-b">
        <div class="container mx-auto block overflow-hidden px-4 sm:px-6 sm:flex sm:justify-between sm:items-center py-4 space-y-4 sm:space-y-0">
            <div class="flex justify-center">
                <a href="{{ route('home') }}" class="inline-block sm:inline hover:opacity-75">
                    <img src="{{ asset("storage/logo.png") }}" width="222" height="30" alt="SPACE X">
                </a>
            </div>
            <div>
                @auth()
                    <nav class="flex justify-center sm:justify-end items-center space-x-8 text-sm">
                        <a class="text-black hover:text-orange" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="inline-block font-bold">{{ 'userName' }}</span>
                        </a>
                        <a class="text-gray-500 hover:text-orange" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            Выйти
                        </a>
                    </nav>
                @endauth

                @guest()
                    <ul class="flex justify-center sm:justify-end items-center space-x-8 text-sm">
                        <li>
                            <a class="text-gray-500 hover:text-orange" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4"
                                     fill="currentColor" viewBox="0 0 26 26" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Регистрация
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-500 hover:text-orange" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4"
                                     viewBox="0 0 22 22" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Войти
                            </a>
                        </li>
                    </ul>
                @endguest
            </div>
        </div>
    </div>
    <div class="border-b">
        <div class="container mx-auto overflow-hidden px-4 sm:px-6">
            <section class="bg-white py-4">
                <ul class="list-inside bullet-list-item flex flex-wrap justify-between -mx-5 -my-2">
                    <li class="px-5 py-2"><a class="text-orange cursor-default" href="#">Главная</a></li>
                    <li class="px-5 py-2"><a class="text-gray-600 hover:text-orange" href="#">Статьи</a></li>
                    <li class="px-5 py-2"><a class="text-gray-600 hover:text-orange" href="#">Каталог</a></li>
                    <li class="px-5 py-2"><a class="text-gray-600 hover:text-orange" href="#">Контакты</a></li>
                </ul>
            </section>
        </div>
    </div>
</header>