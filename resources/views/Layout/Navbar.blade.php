<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('assets/icons/logo.ico')}}">
    <title>Boikot Sampah</title>
</head>
<body>
    <section>
        {{-- Section Navbar --}}
        <nav id="navbar" class="flex items-center justify-between px-5 fixed top-0 w-screen transition-all duration-300 z-50 rounded-xl">
            <div>
                <!-- Ganti dengan logo Anda -->
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-20 p-3 p">
            </div>
            <ul class="flex flex-row space-x-8 align-middle">
                <li>
                    <a href="/" class=" hover:text-green-500">Beranda</a> 
                </li>
                <li>
                    <a href="/layanan" class=" hover:text-green-500">Layanan</a> 
                </li>
                <li>
                    <a href="/beli" class=" hover:text-green-500">Marketplace</a> 
                </li>
                <li>
                    <a href="#" class=" hover:text-green-500">Tentang Kami</a> 
                </li>
            </ul>
            <div class="flex space-x-4 items-center">
                @auth
                <div class="text-gray-700">{{ Auth::user()->name }}</div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="inline-block rounded-full px-4 py-2 bg-green-700 text-white">Logout</button>
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
        <blockquote class="text-center text-lg p-4 font-mono font-extralight text-gray-100">©Atong Geong | 2024</blockquote>
    </footer>
    @vite(["resources/js/app.js"])
</body>
</html>