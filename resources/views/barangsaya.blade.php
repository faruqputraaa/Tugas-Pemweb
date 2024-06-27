@extends('Layout.Navbar')

@section('content')
<div class="bg-gradient-to-r from-white to-green-600 min-h-screen pb-20">
    <section class="text-center py-20 space-y-5 mx-4 md:mx-20">
        <h1 class="text-2xl font-bold mb-5">Items Anda</h1>
        
        @if($items->isEmpty())
            <p class="text-gray-500 flex justify-center">Tidak ada item yang tersedia saat ini.</p>
        @else
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                @foreach ($items as $item)
                <div class="group relative">
                    <a href="{{ route('product', ['id' => $item->id]) }}" class="block">
                        <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300 h-64 sm:h-72 md:h-80">
                            <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" class="h-32 sm:h-40 md:h-48 w-full object-cover">
                            <div class="px-2 bg-white h-32 flex flex-col justify-start">
    <div class="flex flex-col mt-2">
        <table class="min-w-full divide-y divide-gray-200">
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Harga:</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-semibold text-gray-700">Rp.{{ $item->price }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">Berat:</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-semibold text-gray-700">{{ $item->weight }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="px-4 py-2 text-xl font-semibold text-center text-gray-900">{{ $item->title }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


                            </div>

                    </a>
                    <div class="absolute top-2 right-2 flex space-x-2">
                        <form action="{{ route('hapusbarang', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="openDeleteModal('{{ $item->id }}')" class="bg-red-500 text-white px-2 py-1 hover:bg-red-400 rounded">Hapus</button>
                        </form>
                        <button type="button" onclick="openUpdateModal('{{ $item->id }}')" class="bg-blue-500 text-white px-2 py-1 hover:bg-blue-400 rounded">Update</button>
                    </div>
                </div>

                <!-- Delete Modal -->
                <div id="delete-modal-{{ $item->id }}" class="fixed top-0 left-0 flex items-center justify-center w-full h-full bg-black bg-opacity-50 z-50 hidden">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <p class="mb-4">Anda yakin ingin menghapus item ini?</p>
                        <form action="{{ route('hapusbarang', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Hapus</button>
                            <button type="button" onclick="closeModal('delete-modal-{{ $item->id }}')" class="bg-gray-200 text-gray-800 px-4 py-2 rounded ml-2 hover:bg-gray-300">Batal</button>
                        </form>
                    </div>
                </div>

                <!-- Update Modal -->
                <div id="update-modal-{{ $item->id }}" class="fixed top-0 left-0 flex items-center justify-center w-full h-full bg-black bg-opacity-50 z-50 hidden">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-bold mb-4">Perbarui Sampah</h3>
                        <form action="{{ route('updatebarang', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                                <input type="text" name="title" id="title" value="{{ $item->title }}" class="mt-1 p-2 border rounded w-full">
                            </div>
                            <div class="mb-4">
                                <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                                <input type="text" name="price" id="price" value="{{ $item->price }}" class="mt-1 p-2 border rounded w-full">
                            </div>
                            <div class="mb-4">
                                <label for="weight" class="block text-sm font-medium text-gray-700">Berat</label>
                                <input type="weight" name="weight" id="city" value="{{ $item->weight }}" class="mt-1 p-2 border rounded w-full">
                            </div>
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">Foto</label>
                                <input type="file" name="image" id="image" class="mt-1 p-2 border rounded w-full">
                            </div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-400">Update</button>
                            <button type="button" onclick="closeModal('update-modal-{{ $item->id }}')" class="bg-gray-200 text-gray-800 px-4 py-2 rounded ml-2 hover:bg-gray-300">Batal</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </section>
</div>

<script>
    function openDeleteModal(id) {  
        document.getElementById('delete-modal-' + id).classList.remove('hidden');
    }

    function openUpdateModal(id) {
        document.getElementById('update-modal-' + id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }
</script>

@endsection
