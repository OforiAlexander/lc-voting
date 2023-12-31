<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracast</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600,700,900&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-900 text-sm bg-gray-background">
    <header class="flex justify-between items-center px-8 py-4">
        <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>

        <div class="flex items-center">
            @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000?d=mp" alt="avator"
                    class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    {{-- New Main --}}
    <main class="container mx-auto flex max-w-custom">
        <div class="w-70 mr-6">Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Soluta, dolore eos numquam quidem nesciunt
            add idea form goes here Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi odio neque itaque
            maxime aut, eveniet tempore nemo officia distinctio perferendis!</div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering (87)</a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
</body>

</html>
