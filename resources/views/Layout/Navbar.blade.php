<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('assets/icons/logo.ico') }}">
    <title>Boikot Sampah</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <section>
        {{-- Section Navbar dropdown--}}
        <div x-data="{ open: false }">
            <div class="fixed top-0 left-0 right-0 z-50 sm:hidden flex items-center justify-between px-5 bg-transparent">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-20 p-3">
                <button @click="open = !open" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-green-700 dark:focus:ring-green-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            
    
            <div x-show="open" @click.outside="open = false" class="fixed top-20 w-auto mx-auto ml-auto left-0 right-0 z-50  rounded-b-2xl  shadow-lg text-left">
                <nav id="navbar" class="flex-col ml-auto px-5 py-3 transition-all duration-300 bg-white bg-opacity-90 rounded-xl">
                    <ul class="flex flex-col ml-auto text-left space-y-3 mb-4 mx-auto">
                        <li>
                            <a href="/" class="hover:text-green-500">Beranda</a>
                        </li>
                        <li>
                            <a href="{{ route('layanan') }}" class="hover:text-green-500">Layanan</a>
                        </li>
                        <li>
                            <a href="{{ route('beli') }}" class="hover:text-green-500">Marketplace</a>
                        </li>
                        <li>
                            <a href="{{ route('kontak') }}" class="hover:text-green-500">Kontak Kami</a>
                        </li>
    
                    </ul>
                    <div class="flex flex-col space-y-4 items-center">
                        @auth
                            <div class="text-gray-700">{{ Auth::user()->name }}</div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="inline-block rounded-full px-4 py-2 bg-green-700 text-white">Logout</button>
                            </form>
                        @else
                            <a class="inline-block rounded-full px-10 py-2 bg-green-700 text-white " href="/login">Login</a>
                            <a class="inline-block rounded-full px-10 py-2 border-2 border-green-500" href="/register">Daftar</a>
                        @endauth
                    </div>
                </nav>
            </div>
        </div>
        
        <nav id="navbar2"
            class="flex items-center justify-between px-5 fixed top-0 w-screen transition-all duration-300 z-50 rounded-xl max-sm:hidden">
            <div>
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-20 p-3 p">
            </div>
            <ul class="flex flex-row space-x-8 align-middle">
                <li>
                    <a href="/" class=" hover:text-green-500">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('layanan') }}" class=" hover:text-green-500">Layanan</a>
                </li>
                <li>
                    <a href="{{ route('beli') }}" class=" hover:text-green-500">Marketplace</a>
                </li>
                <li>
                    <a href="{{ route('kontak') }}" class=" hover:text-green-500">Kontak Kami</a>
                </li>

            </ul>
            <div class="flex space-x-4 items-center text-center">
                @auth
                    <div class="text-gray-700">{{ Auth::user()->name }}</div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="inline-block rounded-full px-4 py-2 bg-green-700 text-white">Logout</button>
                    </form>
                @else
                    <a class="inline-block rounded-full px-4 py-2 bg-green-700 text-white" href="/login">Login</a>
                    <a class="inline-block rounded-full px-4 py-2 border-2 border-green-500" href="/register">Daftar</a>
                @endauth
            </div>
        </nav>
    </section>
    <main>
        @yield('content')
    </main>
    <footer class="bg-green-500">
        <blockquote class="text-center text-lg p-4 font-mono font-extralight text-gray-100">©Atong Geong | 2024
        </blockquote>
    </footer>
    @vite(['resources/js/app.js'])
</body>

</html>