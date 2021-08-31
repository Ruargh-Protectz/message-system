<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        @include('layouts.partials.normalize');
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <div class="relative flex-rows items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 py-4 sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <img src="{{ asset('images/message-icon.png') }}" alt="logo">
                {{-- <img src="data:image/png;base64,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"/> --}}
            </div>

            <div class="flex justify-center pt-8 sm:justify-end sm:pt-0">
                <nav class="">
                    <a class="text-gray-900 dark:text-white px-8" href="{{ route('messages.index') }}">View Messages</a>
                    <a class="text-gray-900 dark:text-white px-8" href="{{ route('messages.create') }}">Send Message</a>

                    @guest
                        @if (Route::has('register'))
                            <a class="text-gray-900 dark:text-white px-8" href="{{ route('register') }}">Register</a>
                        @endif
                            <a class="text-gray-900 dark:text-white px-8" href="{{ route('login') }}">Login</a>
                    @else
                            <a class="text-gray-900 dark:text-white px-8" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit()"
                            >Logout ({{ Auth::user()->name }})</a>

                            <form id="logout-form" action={{ route('logout') }} method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                    @endguest
                </nav>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 ">
                    <div class="p-6">
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.partials.footer')
</body>

</html>
