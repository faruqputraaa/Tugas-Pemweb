@extends('Layout.Navbar')
@section('content')
    <!-- Konten deskripsi produk -->
    <section class="overflow-hidden">
        <div class="mx-44 md:mx-4 flex justify-center items-center py-10">
            <div>
                <div class="text-3xl font-bold mb-10 md:mb-14 text-center">
                    <h1>Deskripsi Produk</h1>
                </div>
                <form class="mx-4 md:mx-44" action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mx-6 mt-12">
                        <h1 class="text-xl font-bold">Pilih Jenis Sampah</h1>
                        <p class="text-sm">Pilih Jenis Sampah/Barang bekas yang akan kamu jual</p>
                    </div>
                    <div class="flex flex-col w-full justify-center">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mr-6 md:mr-0">
                            @foreach ($datas as $data)
                                <div class="h-36 w-full md:w-64 rounded-lg bg-white flex flex-col mx-4 my-4 border-2 cursor-pointer" data-name="{{ $data['name'] }}">
                                    <img class="h-3/4 w-full rounded-t-lg" src="{{ asset($data['image']) }}">
                                    <div class="h-1/4 w-full text-center">
                                        <h1 class="font-bold">{{ $data['name'] }}</h1>
                                    </div>
                                </div>
                            @endforeach
                            <input type="hidden" name="type" value="">
                        </div>
                        <div class="flex flex-col md:flex-row w-full mb-10">
                            <div class="md:w-1/2 flex flex-col justify-start px-6 mt-3">
                                <div class="space-y-4">
                                    <h1 class="text-2xl font-bold">Judul</h1>
                                    <p class="text-sm">Masukkan Judul dari Sampah atau barang bekas yang akan di jual dengan singkat dan jelas</p>
                                    <div class="relative">
                                        <input type="text" name="title" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Judul</label>
                                    </div>
                                    {!! $errors->first('title', '<small class="text-red-500 text-sm">:message</small>') !!}
                                    {!! $errors->has('title') ? '' : '<small>supporting item</small>' !!}
                                </div>
                                <div class="flex flex-col">
                                <div class="space-y-4">
                                    <h1 class="text-2xl font-bold">Foto</h1>
                                    <p class="text-sm">Masukkan foto dari Sampah atau barang bekas yang akan di jual dengan singkat dan jelas</p>
                                    <label for="gambar" class="cursor-pointer bg-gray-300 hover:bg-gray-700 hover:text-white hover:fill-white py-8 px-4 rounded-lg inline-flex items-center flex-col border border-black">
                                        <x-bx-camera class="w-10 mx-10"/>
                                        <span id="fileName" class="text-sm">Pilih file</span>
                                        <input id="gambar" type="file" name="image" class="hidden" accept="image/*">
                                        <img id="previewImage" class="hidden mt-2 rounded-md shadow-md justify-self-end" />
                                    </label>

                                </div>
                                    {!! $errors->first('image', '<small class="text-red-500 text-sm">:message</small>') !!}
                                    {!! $errors->has('image') ? '' : '<small>supporting item</small>' !!}
                                </div>
                                    <div class="space-y-4 mt-10">
                                    <h1 class="text-2xl font-bold">Berat</h1>
                                    <p class="text-sm">Masukkan berat dari Sampah atau barang bekas yang akan dijual <br>(dalam kg)</p>
                                    <div class="relative">
                                        <input type="text" name="weight" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Berat</label>
                                    </div>
                                    {!! $errors->first('weight', '<small class="text-red-500 text-sm">:message</small>') !!}
                                    {!! $errors->has('weight') ? '' : '<small>supporting item</small>' !!}
                                </div>
                                <div class="space-y-4">
                                    <h1 class="text-2xl font-bold">Alamat</h1>
                                    <p class="text-sm">Masukkan alamat lengkap anda sehingga pembeli tahu dimana anda berada</p>
                                </div>
                                <div class="space-y-4">
                                    <h1 class="text-xl font-bold">Nomor HP</h1>
                                    <div class="relative">
                                        <input type="text" name="phone_number" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Nomor HP</label>
                                    </div>
                                    {!! $errors->first('phone_number', '<small class="text-red-500 text-sm">:message</small>') !!}
                                    {!! $errors->has('phone_number') ? '' : '<small>supporting item</small>' !!}
                                </div>
                                <div class="space-y-4">
                                    <h1 class="text-xl font-bold">Kota & Kecamatan</h1>
                                    <div class="relative">
                                        <input type="text" name="city" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Kota</label>
                                    </div>
                                    {!! $errors->first('city', '<small class="text-red-500 text-sm">:message</small>') !!}
                                    {!! $errors->has('city') ? '' : '<small>supporting item</small>' !!}
                                    <div class="relative">
                                        <input type="text" name="district" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Kecamatan</label>
                                    </div>
                                    {!! $errors->first('district', '<small class="text-red-500 text-sm">:message</small>') !!}
                                    {!! $errors->has('district') ? '' : '<small>supporting item</small>' !!}
                                </div>
                                <button class="inline-block rounded-full py-3 w-4/5 mx-auto font-bold bg-white text-green-500 border-green-500 text-3xl mt-20 ml-auto shadow-sm shadow-black max-md:hidden" href="/jual-sampah">Batal</button>
                            </div>
                            <div class="md:w-1/2 flex flex-col px-6">
                                <div class="space-y-4">
                                    <h1 class="text-2xl font-bold">Deskripsi</h1>
                                    <p class="text-sm">Masukkan Deskripsi dari sampah yang akan di jual dengan jelas dan rinci</p>
                                    <div class="relative">
                                        <input type="text" name="description" class="border-2 text-clip border-gray-400 rounded-md h-32 w-full p-4">
                                        <label class="absolute bottom-28 bg-white left-3 text-xs text-black font-semibold px-1 pb-2">Deskripsi</label>
                                    </div>
                                    {!! $errors->first('description', '<small class="text-red-500 text-sm">:message</small>') !!}
                                    {!! $errors->has('description') ? '' : '<small>supporting item</small>' !!}
                                </div>
                                <div class="space-y-4 mt-52 pt-2">
                                    <h1 class="text-2xl font-bold">Harga</h1>
                                    <p class="text-sm">Masukkan harga dari Sampah atau barang bekas yang akan dijual <br>(dalam Rp)</p>
                                    <div class="relative">
                                        <input type="text" name="price" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Harga</label>
                                        <label class="absolute bottom-4 bg-transparent right-4 text-xl text-black font-bold px-1">Rp</label>
                                    </div>
                                    {!! $errors->first('price', '<small class="text-red-500 text-sm">:message</small>') !!}
                                    {!! $errors->has('price') ? '' : '<small>supporting item</small>' !!}
                                </div>
                                <div class="space-y-4 mt-20 pt-2">
                                    <h1 class="text-xl font-bold">Alamat Lengkap</h1>
                                    <div class="relative">
                                        <input type="text" name="full_address" class="border-2 text-clip border-gray-400 rounded-md h-44 w-full p-4">
                                        <label class="absolute bottom-40 bg-white left-3 text-xs text-black font-semibold px-1 pb-2">Alamat Lengkap</label>
                                    </div>
                                    {!! $errors->first('full_address', '<small class="text-red-500 text-sm">:message</small>') !!}
                                    {!! $errors->has('full_address') ? '' : '<small>supporting item</small>' !!}
                                </div>
                                <div class="flex flex-row space-x-3">
                                    <button class="inline-block rounded-full py-3 w-full font-bold bg-white text-green-500 text-3xl mt-20 shadow-sm shadow-black md:hidden" href="/jual-sampah">Batal</button>
                                    <button type="submit" class="inline-block rounded-full py-3 w-full font-bold bg-green-500 text-white text-3xl mt-20 shadow-sm shadow-black">Jual</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="errorModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
        <div class="relative top-1/4 mx-auto p-5 border w-96 h-1/2 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Error</h3>
                <div class="mt-2 py-3 px-7 text-center">
                    <p class="text-sm text-gray-500" id="errorMessage"></p>
                </div>
                <div class="items-center px-4 py-3">
                    <button id="closeModal" class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk menangani modal -->
    <script>
                const inputGambar = document.getElementById('gambar');
    const previewImage = document.getElementById('previewImage');
    const uploadStatus = document.getElementById('uploadStatus');
    const labelFile = document.querySelector('.cursor-pointer');

    inputGambar.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                previewImage.src = reader.result;
                previewImage.classList.remove('hidden');
                uploadStatus.classList.remove('hidden');
                labelFile.innerHTML = file.name; // Mengubah isi label dengan nama file
            }
            reader.readAsDataURL(file);
        } else {
            previewImage.classList.add('hidden');
            uploadStatus.classList.add('hidden');
            labelFile.innerHTML = "Pilih file"; // Kembalikan isi label ke default jika tidak ada file dipilih
        }
    });

        document.addEventListener('DOMContentLoaded', function () {
            @if ($errors->any())
                let errors = @json($errors->all());
                let errorMessage = errors.join('<br>');
                let errorModal = document.getElementById('errorModal');
                let errorMessageElement = document.getElementById('errorMessage');
                errorMessageElement.innerHTML = errorMessage;
                errorModal.classList.remove('hidden');
                errorModal.classList.add('flex');

                let closeModal = document.getElementById('closeModal');
                closeModal.addEventListener('click', function() {
                    errorModal.classList.add('hidden');
                    errorModal.classList.remove('flex');
                });
            @endif
        });
        
        document.querySelectorAll('.h-36').forEach(item => {
            item.addEventListener('click', event => {
                document.querySelector('input[name="type"]').value = item.dataset.name;
                document.querySelectorAll('.h-36').forEach(div => div.classList.remove('border-green-500'));
                item.classList.add('border-green-500');
            });
        });




    </script>
@endsection
