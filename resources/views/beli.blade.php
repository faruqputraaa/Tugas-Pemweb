@extends('Layout.Navbar')
@section('content')
<div>
    <section class="text-center mt-28 space-y-5">
        <form class="max-w-7xl mx-auto">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-black">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Cari sampah yang kamu perlukan..." required />
            </div>
        </form>
    </section>
    <section class="mt-12 space-y-5 space-x-28 ">
        <div>
            <img class="mx-auto max-h-72 rounded-t-lg" src="{{ asset('assets/images/MarketPlace.png') }}" alt="Gambar">
        </div>
        
    </section>    
    <section class="my-12 mx-4 md:mx-28">
        <div class="flex justify-between items-center flex-col md:flex-row">
            <span class="text-lg flex md:flex-initial order-first">Pilihan Kategori</span>
            <div class="flex flex-wrap md:flex-nowrap md:space-x-7 items-center">
                <span class="flex-none order-last"><a href="">Kertas</a></span>
                <span class="flex-none order-last"><a href="">Logam</a></span>
                <span class="flex-none order-last"><a href="">Kaca</a></span>
                <span class="flex-none order-last"><a href="">Elektronik</a></span>
                <span class="flex-none order-last"><a href="">Karet</a></span>
                <span class="flex-none order-last"><a href="">Lainnya</a></span>
            </div>
        </div>
    </section>    
    <section class="mx-28 mb-20">
        <div class="text-3xl font-bold mb-14">
            <h1>Pilihan Untukmu</h1>
        </div>
        <div class="flex flex-col w-full m-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                @for ($i = 0; $i < 8; $i++)
                <a href="{{ route('product') }}" class="group">
                    <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300">
                        <img src="{{ asset('assets/images/buang-sampah.jpg') }}" alt="Kertas" class="h-32 w-full object-cover">
                        <div class="p-2 bg-white">
                            <h3 class="text-base font-semibold mb-1">Kertas</h3>
                            <p class="text-gray-500 text-xs mb-1">Rp.$</p>
                            <p class="text-gray-500 text-xs">Kota</p>
                        </div>
                    </div>
                </a>                
                @endfor
            </div>
        </div>
        
        
    </section>
    
</div>
@endsection