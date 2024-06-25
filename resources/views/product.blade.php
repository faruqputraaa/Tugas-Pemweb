@extends('Layout.Navbar')
@section('content')
    <!-- Konten deskripsi produk -->
    <section class="overflow-hidden">
        <div class="mx-4 md:mx-28 flex justify-center items-center py-10">
            <div>
                <div class="text-3xl font-bold mb-10 md:mb-14">
                    <h1>Deskripsi Produk</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="col-span-1 md:col-span-1">
                        <div id="carousel" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->title }}" class="h-auto w-full object-contain cursor-pointer hover:opacity-80">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 md:col-span-2 grid grid-cols-1 gap-6">
                        <div class="overflow-hidden rounded-lg shadow-md h-full">
                            <div class="p-4 bg-white h-full">
                                <h3 class="text-xl font-semibold mb-2">{{ $product->title }}</h3>
                                <p class="text-gray-500 mb-2 md:mb-4">{{ $product->description }}</p>
                                <p class="text-gray-500">Harga: Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                                <p class="text-gray-500">ID Produk: {{ $id }}</p>
                                <!-- Tombol WhatsApp -->
                                <a href="https://wa.me/62{{ $product->phone_number }}" target="_blank" class="mt-8 md:mt-24 inline-block bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">Hubungi Penjual</a>
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
                                    <img src="{{ asset($item->image_path) }}" alt="{{ $item->title }}" class="h-32 w-full object-cover">
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
