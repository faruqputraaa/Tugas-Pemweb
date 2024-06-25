@extends('Layout.Navbar')

@section('content')
<div class="my-28">
    <section class="text-center space-y-5 mx-4 md:mx-20">
        <!-- Form pencarian -->
        <form class="w-full max-w-xl md:max-w-7xl mx-auto">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-black">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-2 md:p-4 pl-10 md:pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Cari sampah yang kamu perlukan..." required />
            </div>
        </form>
        <!-- Gambar header -->
        <div class="mt-12">
            <img class="mx-auto max-h-72 rounded-t-lg" src="{{ asset('assets/images/MarketPlace.png') }}" alt="Gambar">
        </div>
    </section>
    <!-- Kategori -->
    <section class="my-6 md:my-12 mx-4 md:mx-28">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <span class="text-lg mb-4 md:mb-0 md:mr-4 font-bold">Sort by Kategori</span>
            <!-- Dropdown for mobile view -->
            <div class="relative md:hidden w-full md:w-auto">
                <button id="dropdownButton" class="text-gray-700 bg-white border border-gray-300 rounded-lg px-4 py-2.5 flex justify-between items-center w-full text-left">
                    Pilihan Kategori
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="dropdownMenu" class="hidden absolute z-10 w-full bg-white divide-y divide-gray-100 rounded-lg shadow">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownButton">
                        <li><a href="" class="block px-4 py-2">Kertas</a></li>
                        <li><a href="" class="block px-4 py-2">Logam</a></li>
                        <li><a href="" class="block px-4 py-2">Kaca</a></li>
                        <li><a href="" class="block px-4 py-2">Elektronik</a></li>
                        <li><a href="" class="block px-4 py-2">Karet</a></li>
                        <li><a href="" class="block px-4 py-2">Lainnya</a></li>
                    </ul>
                </div>
            </div>
            <!-- Horizontal menu for larger screens -->
            <div class="hidden md:flex justify-between items-center">
                <div class="flex flex-wrap justify-start space-x-4 md:space-x-7 items-center">
                    <a href="" class="text-gray-700">Kertas</a>
                    <a href="" class="text-gray-700">Logam</a>
                    <a href="" class="text-gray-700">Kaca</a>
                    <a href="" class="text-gray-700">Elektronik</a>
                    <a href="" class="text-gray-700">Karet</a>
                    <a href="" class="text-gray-700">Lainnya</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Produk -->
    <section class="mx-4 md:mx-28 mt-4">
        <div class="md:text-3xl font-bold mb-4 md:mb-14">
            <h1>Pilihan Untukmu</h1>
        </div>
        <div id="product-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Looping items -->
            @foreach ($items as $item)
            <a href="{{ route('product', ['id' => $item->id]) }}" class="group">
                <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300">
                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" class="h-32 sm:h-40 md:h-48 w-full object-cover">
                    <div class="p-2 bg-white">
                        <h3 class="text-base sm:text-lg font-semibold mb-1">{{ $item->title }}</h3>
                        <p class="text-gray-500 text-xs sm:text-sm mb-1">Rp.{{ $item->price }}</p>
                        <p class="text-gray-500 text-xs sm:text-sm">{{ $item->city }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <button id="load-more" class="float-right text-black py-2 px-4 rounded mt-4">Tampilkan Lainnya</button>
    </section>
</div>
@endsection
