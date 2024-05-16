@extends('Layout.Navbar')
@section('content')
    <!-- Konten deskripsi produk -->
    <section class="h-screen overflow-hidden">
        <div class="mx-4 md:mx-28 h-full flex justify-center items-center">
            <div>
                <div class="text-3xl font-bold mb-10 md:mb-14">
                    <h1>Deskripsi Produk</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="col-span-1 md:col-span-1">
                        <div id="carousel" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{ asset('assets/images/buang-sampah.jpg') }}" alt="Produk" class="h-auto w-full object-contain cursor-pointer hover:opacity-80">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 md:col-span-2 grid grid-cols-1 gap-6">
                        <div class="overflow-hidden rounded-lg shadow-md h-full">
                            <div class="p-4 bg-white h-full">
                                <h3 class="text-xl font-semibold mb-2">Kertas</h3>
                                <p class="text-gray-500 mb-2 md:mb-4">Deskripsi produk disini...</p>
                                <p class="text-gray-500">Harga: Rp. xxx</p>
                                <p class="text-gray-500">Kota: Kota xxx</p>
                                <!-- Tombol WhatsApp -->
                                <a href="https://wa.me/nomor-tujuan" target="_blank" class="mt-8 md:mt-24 inline-block bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">Hubungi Penjual</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
