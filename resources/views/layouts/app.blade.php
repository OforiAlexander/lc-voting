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

    {{-- livewire --}}
    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray text-sm bg-gray-background">
    <header class="flex md:flex-row flex-col justify-between items-center px-8 py-4">
        <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>

        <div class="flex items-center mt-2 md:mt-0">
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
                            class="font-semibold text-gray hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
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
    <main class="container mx-auto flex flex-col md:flex-row max-w-custom">
        <div class="w-70 md:mr-5 mx-auto md:mx-0">
            <div id="new_styles" class="bg-white md:sticky top-8 border-2 border-blue rounded-xl mt-16">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">Add an idea</h3>
                    <p class="text-xs mt-4">
                        @auth
                            Let us know what you would like and we'll take a look</p>
                    @else
                        Please login to create an idea
                    @endauth
                </div>

                {{-- make a auth showing the form is the user is logined in --}}
                @auth()
                    <livewire:create-idea />
                @else
                    <div class="my-6 text-center">
                        <a href="{{ route('login') }}"
                            class="inline-block w-1/2 h-11 text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                            <span class="ml-1 text-white">
                                Login
                            </span>
                        </a>

                        <a href="{{ route('register') }}"
                            class="inline-block mt-4 w-1/2 h-11 text-sm bg-gray-200 font--semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                Sign Up
                            
                        </a>
                    </div>
                @endauth
            </div>
        </div>
        <div class="w-full px-2 md:px-0 md:w-175">
            <nav class="hidden md:flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering
                            (6)</a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In
                            Progress (1)</a>
                    </li>
                </ul>
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented
                            (10)</a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed
                            (55)</a>
                    </li>
                </ul>
            </nav>

            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>

    {{-- livewire --}}
    @livewireScripts
</body>

</html>
