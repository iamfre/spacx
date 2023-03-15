<header class="bg-white">
    <div class="border-b">
        <div class="container mx-auto block overflow-hidden px-4 sm:px-6 sm:flex sm:justify-between sm:items-center py-1 space-y-4 sm:space-y-0">
            <div class="flex justify-center">
                <a href="{{ route('home') }}" class="inline-block sm:inline hover:opacity-75">
                    <img src="{{ asset("storage/logo/logo.png") }}" width="100" height=auto alt="SPACX">
                </a>
            </div>
            <div class="flex justify-center sm:justify-end items-center space-x-8 text-sm">
                @auth()
                    @include('partials.auth')
                @endauth
                @guest()
                    @include('partials.guest')
                @endguest
            </div>
        </div>
    </div>
    @include('partials.nav')
</header>