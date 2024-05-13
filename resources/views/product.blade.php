@extends('Layout.Navbar')
@section('content')
    <!-- Konten deskripsi produk -->
    <div class="mx-28">
        <div class="text-3xl font-bold mb-14">
            <h1>Deskripsi Produk</h1>
        </div>
        <div class="flex flex-col w-full m-auto">
            <div class="grid grid-cols-1 gap-6">
                <div class="overflow-hidden rounded-lg shadow-md">
                    <img src="{{ asset('assets/images/buang-sampah.jpg') }}" alt="Kertas" class="h-64 w-full object-cover">
                    <div class="p-4 bg-white">
                        <h3 class="text-xl font-semibold mb-2">Kertas</h3>
                        <p class="text-gray-500 mb-4">Deskripsi produk disini...</p>
                        <p class="text-gray-500">Harga: Rp. xxx</p>
                        <p class="text-gray-500">Kota: Kota xxx</p>
                        <!-- Tombol WhatsApp -->
                        <a href="https://wa.me/nomor-tujuan" target="_blank" class="inline-block bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">Hubungi Penjual</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
