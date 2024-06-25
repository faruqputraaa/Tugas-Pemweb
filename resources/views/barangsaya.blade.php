@extends('Layout.Navbar')

@section('content')
<div class="bg-gradient-to-r from-white to-green-600 h-screen">
    <section class="text-center py-20 space-y-5 mx-4 md:mx-20">
        <h1 class="text-2xl font-bold mb-5">Items Anda</h1>
        
        @if($items->isEmpty())
            <p class="text-gray-500 flex justify-center">Tidak ada item yang tersedia saat ini.</p>
        @else
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                @foreach ($items as $item)
                <div class="group relative">
                    <a href="{{ route('product', ['id' => $item->id]) }}" class="block">
                        <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300">
                            <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" class="h-32 sm:h-40 md:h-48 w-full object-cover">
                            <div class="p-2 bg-white">
                                <h3 class="text-base sm:text-lg font-semibold mb-1">{{ $item->title }}</h3>
                                <p class="text-gray-500 text-xs sm:text-sm mb-1">Rp.{{ $item->price }}</p>
                                <p class="text-gray-500 text-xs sm:text-sm">{{ $item->city }}</p>
                            </div>
                        </div>
                    </a>
                    <form action="{{ route('hapusbarang', $item->id) }}" method="POST" class="absolute top-2 right-2">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="openModal('{{ $item->id }}')" class="bg-red-500 text-white px-2 py-1 hover:bg-red-400 rounded">Hapus</button>
                    </form>
                </div>
                <!-- Modal -->
                <div id="modal-{{ $item->id }}" class="fixed top-0 left-0 flex items-center justify-center w-full h-full bg-black bg-opacity-50 z-50 hidden">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <p class="mb-4">Anda yakin ingin menghapus item ini?</p>
                        <form action="{{ route('hapusbarang', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Hapus</button>
                            <button type="button" onclick="closeModal('{{ $item->id }}')" class="bg-gray-200 text-gray-800 px-4 py-2 rounded ml-2 hover:bg-gray-300">Batal</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </section>
</div>

<script>
    function openModal(id) {
        document.getElementById('modal-' + id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById('modal-' + id).classList.add('hidden');
    }
</script>

@endsection
