@extends('Layout.Navbar')
@section('content')
<form class="mx-4 md:mx-44" action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mt-28 flex flex-col mx-6">
        <h1 class="text-xl font-bold">Masukkan Informasi Sampah Disini</h1>
        <p class="text-sm">Masukkan informasi detail mengenai sampah yang akan anda jual</p>
        <input type="textarea" name="description" class="border-2 border-gray-400 rounded-md h-32 w-full md:w-2/3 p-8">
        <small>supporting item</small>
    </div>
    <div class="mx-6 mt-12">
        <h1 class="text-xl font-bold">Pilih Jenis Sampah</h1>
        <p class="text-sm">Pilih Jenis Sampah/Barang bekas yang akan kamu jual</p>
    </div>
    <div class="flex flex-col w-full justify-center">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mr-6 md:mr-0">
        @foreach ($datas as $data)
        <div class="h-36 w-full md:w-64 rounded-lg bg-white flex flex-col mx-4 my-4 border-2 cursor-pointer"
            data-name="{{ $data['name'] }}">
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
                    <p class="text-sm">Masukkan Judul dari Sampah atau barang bekas
                        yang akan di jual dengan singkat dan jelas
                    </p>
                    <div class="relative">
                        <input type="text" name="title" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Judul</label>
                    </div>
                    <small>supporting item</small>
                </div>
                <div class="space-y-4">
                    <h1 class="text-2xl font-bold">Foto</h1>
                    <p class="text-sm">Masukkan foto dari Sampah atau barang bekas
                        yang akan di jual dengan singkat dan jelas
                    </p>
                    <label for="gambar"
                        class="cursor-pointer bg-gray-300 hover:bg-gray-700 hover:text-white hover:fill-white py-8 px-4 rounded-lg inline-flex items-center flex-col border border-black">
                        <x-bx-camera class="w-12" />
                        <p class="text-xs">Maksimal 4 foto sampah</p>
                        <input id="gambar" type="file" name="image" class="hidden" accept="image/*">
                    </label>
                </div>
                <div class="space-y-4 mt-10">
                    <h1 class="text-2xl font-bold">Berat</h1>
                    <p class="text-sm">Masukkan berat dari Sampah atau barang bekas yang akan dijual <br>(dalam kg)</p>
                    <div class="relative">
                        <input type="text" name="weight" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Berat</label>
                        <label class="absolute bottom-4 bg-transparent right-4 text-xl text-black font-bold px-1">KG</label>
                    </div>
                    <small>supporting item</small>
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
                    <small>supporting item</small>
                </div>
                <div class="space-y-4">
                    <h1 class="text-xl font-bold">Kota & Kecamatan</h1>
                    <div class="relative">
                        <input type="text" name="city" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Kota</label>
                    </div>
                    <div class="relative">
                        <input type="text" name="district" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Kecamatan</label>
                    </div>
                    <small>supporting item</small>
                </div>
                <button class="inline-block rounded-full py-3 w-4/5 mx-auto font-bold bg-white text-green-500 border-green-500 text-3xl mt-20 ml-auto shadow-sm shadow-black max-md:hidden" href="/jual-sampah">Batal</button>
            </div>
            <div class="md:w-1/2 flex flex-col px-6">
                <div class="space-y-4">
                    <h1 class="text-2xl font-bold">Deskripsi</h1>
                    <p class="text-sm">
                        Masukkan Deskripsi dari sampah yang akan di jual dengan jelas dan rinci
                    </p>
                    <div class="relative">
                        <input type="text" name="description" class="border-2 text-clip border-gray-400 rounded-md h-32 w-full p-4">
                        <label class="absolute bottom-28 bg-white left-3 text-xs text-black font-semibold px-1 pb-2">Deskripsi</label>
                    </div>
                    <small>supporting item</small>
                </div>
                <div class="space-y-4 mt-52 pt-2">
                    <h1 class="text-2xl font-bold">Harga</h1>
                    <p class="text-sm">Masukkan harga dari Sampah atau barang bekas yang akan dijual <br>(dalam Rp)</p>
                    <div class="relative">
                        <input type="text" name="price" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Harga</label>
                        <label class="absolute bottom-4 bg-transparent right-4 text-xl text-black font-bold px-1">Rp</label>
                    </div>
                    <small>supporting item</small>
                </div>
                <div class="space-y-4 mt-20 pt-2">
                    <h1 class="text-xl font-bold">Alamat Lengkap</h1>
                    <div class="relative">
                        <input type="text" name="full_address" class="border-2 text-clip border-gray-400 rounded-md h-44 w-full p-4">
                        <label class="absolute bottom-40 bg-white left-3 text-xs text-black font-semibold px-1 pb-2">Alamat Lengkap</label>
                    </div>
                    <small>supporting item</small>
                </div>
                <div class="flex flex-row space-x-3">
                    <button class="inline-block rounded-full py-3 w-full font-bold bg-white text-green-500 text-3xl mt-20 shadow-sm shadow-black md:hidden" href="/jual-sampah">Batal</button>
                    <button type="submit" class="inline-block rounded-full py-3 w-full font-bold bg-green-500 text-white text-3xl mt-20 shadow-sm shadow-black">Jual</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const divs = document.querySelectorAll('div[data-name]');
    divs.forEach(div => {
        div.addEventListener('click', function() {
            divs.forEach(d => d.classList.remove('border-green-500'));
            this.classList.add('border-green-500');
            
            // Set the value of the hidden input field named 'type'
            const itemType = this.getAttribute('data-name');
            document.querySelector('input[name="type"]').value = itemType;
        });
    });
});
</script>


@endsection
