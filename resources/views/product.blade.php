@extends('Layout.Navbar')
@section('content')
    <!-- Konten deskripsi produk -->
    <section class="overflow-hidden my-24">
        <div class="mx-4 md:mx-28 flex justify-center items-center py-10">
            <div>
                <div class="text-3xl font-bold mb-10 md:mb-14 text-center">
                    <h1>Deskripsi Produk</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="col-span-1 md:col-span-3">
                        <div class="overflow-hidden rounded-lg shadow-md h-full bg-white flex flex-col md:flex-row">
                            <div class="md:w-1/2 flex items-center justify-center">
                                <div id="carousel" class="owl-carousel owl-theme h-full w-full">
                                    <div class="item h-full w-full p-5">
                                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->title }}" class="h-96 w-full object-cover cursor-pointer hover:opacity-80">
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 bg-white h-full flex flex-col justify-between md:w-1/2">
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">{{ $product->title }}</h3>
                                    <p class="text-gray-500 mb-2 md:mb-4">Deskripsi: <br>{{ $product->description }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-500">Harga: Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                                    <p class="text-gray-500">Alamat: {{ $product->full_address }}</p>
                                    <!-- Tombol WhatsApp -->
                                    <a href="https://wa.me/62{{ $product->phone_number }}" target="_blank" class="mt-8 md:mt-24 inline-block bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">Hubungi Penjual</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10">
                    <h2 class="text-2xl font-bold mb-4">Produk Lainnya</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach ($items as $item)
                            <div class="overflow-hidden rounded-lg shadow-md">
                                <a href="{{ route('product', ['id' => $item->id]) }}">
                                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" class="h-32 w-full object-cover">
                                    <div class="p-2 bg-white">
                                        <h3 class="text-base font-semibold mb-1">{{ $item->title }}</h3>
                                        <p class="text-gray-500 text-sm">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
