@extends('Layout.Navbar')
@section('content')
    <form class="mx-2 md:mx-44">
        <div class=" mt-28 flex flex-col mx-6">
            <h1 class="text-xl font-bold">Masukkan Informasi Sampah Disini</h1>
            <p class="font-sm">Masukkan informasi detail mengenai sampah yang akan anda jual</p>
            <input type="text" class="border-2 border-gray-400 rounded-md h-32 w-2/3 p-8">
            <small>supporting item</small>
        </div>
        <div class="mx-6 mt-12">
            <h1 class="text-xl font-bold">Pilih Jenis Sampah</h1>
            <p class="font-sm">Pilih Jenis Sampah/Barang bekas yang akan kamu jual</p>
        </div>
        <div class="flex flex-col w-full justify-center mx-auto">
            <div class="grid grid-cols-2 gap-2 md:grid-cols-4 w-full justify-center">
                <div class="border border-black rounded-lg bg-white flex flex-col mx-4 my-4">
                    <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/kertas.png') }}">
                    <div class="h-1/2 w-full text-center">
                        <h1 class="font-bold">Kertas</h1>
                    </div>
                </div>
                <div class="border border-black rounded-lg bg-white flex flex-col mx-4 my-4">
                    <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/plastik.png') }}">
                    <div class="h-1/2 w-full text-center">
                        <h1 class="font-bold">Plastik</h1>
                    </div>
                </div>
                <div class="border border-black rounded-lg bg-white flex flex-col mx-4 my-4">
                    <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/logam.png') }}">
                    <div class="h-1/2 w-full text-center">
                        <h1 class="font-bold">Logam</h1>
                    </div>
                </div>
                <div class="border border-black rounded-lg bg-white flex flex-col mx-4 my-4">
                    <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/kaca.png') }}">
                    <div class="h-1/2 w-full text-center">
                        <h1 class="font-bold">Kaca</h1>
                    </div>
                </div>
                <div class="border border-black rounded-lg bg-white flex flex-col mx-4 my-4">
                    <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/tekstil.png') }}">
                    <div class="h-1/2 w-full text-center px-5">
                        <h1 class="font-bold">Tekstil</h1>
                    </div>
                </div>
                <div class="border border-black rounded-lg bg-white flex flex-col mx-4 my-4">
                    <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/elektronik.png') }}">
                    <div class="h-1/2 w-full text-center px-5">
                        <h1 class="font-bold">Elektronik</h1>
                    </div>
                </div>
                <div class="border border-black rounded-lg bg-white flex flex-col mx-4 my-4">
                    <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/karet.png') }}">
                    <div class="h-1/2 w-full text-center px-5">
                        <h1 class="font-bold">Karet</h1>
                    </div>
                </div>
                <div class="border border-black rounded-lg bg-white flex flex-col mx-4 my-4">
                    <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/sampah-lain.png') }}">
                    <div class="h-1/2 w-full text-center">
                        <h1 class="font-bold">Jenis Sampah Lainya</h1>
                    </div>
                </div>
            </div>

                <div class="flex flex-row w-full mb-10">
                    <div class="w-1/2 flex flex-col justify-start px-6">
                        <div>
                            <div class="space-y-4">
                                <h1 class="text-2xl font-bold">Judul</h1>
                                <p class="text-sm">Masukkan Juduk dari Sampah atau barang bekas
                                    yang akan di jual dengan singkat dan jelas
                                </p>
                                <div class="relative">
                                    <input type="text" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                                    <label
                                        class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Judul</label>
                                </div>
                                <small>supporting item</small>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <h1 class="text-2xl font-bold">Foto</h1>
                            <p class="text-sm">Masukkan Juduk dari Sampah atau barang bekas
                                yang akan di jual dengan singkat dan jelas
                            </p>
                            <label for="gambar"
                                class="cursor-pointer bg-gray-300 hover:bg-gray-700 hover:text-white hover:fill-white py-8 px-4 rounded-lg inline-flex items-center flex-col border border-black">
                                <x-bx-camera class="w-12"/>
                            </svg>
                                <p class="text-xs ">Maksimal 4 foto sampah</p>
                                <input id="gambar" type="file" name="gambar" class="hidden" accept="image/*">
                            </label>
                        </div>
                        <div class="space-y-4 mt-10">
                            <h1 class="text-2xl font-bold">Berat</h1>
                            <p class="text-sm">Masukkan Juduk dari Sampah atau barang bekas
                                yang akan di jual dengan singkat dan jelas <br>(dalam kg)
                            </p>
                            <div class="relative">
                                <input type="text" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                                <label
                                    class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Judul</label>
                                <label
                                    class="absolute bottom-4   bg-transparent right-4 text-xl text-black font-bold px-1">KG</label>
                            </div>
                            <small>supporting item</small>
                        </div>
                        <div class="space-y-4">
                            <h1 class="text-2xl font-bold">Alamat</h1>
                            <p class="text-sm">Masukkan alamat lengkap anda sehingga
                                pembeli tahu dimana anda berada
                            </p>
                        </div>
                        <div class="space-y-4">
                            <h1 class="text-xl font-bold">Nomor HP</h1>
                            <div class="relative">
                                <input type="text" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                                <label
                                    class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Nomor
                                    HP</label>
                            </div>
                            <small>supporting item</small>
                        </div>
                        <div class="space-y-4">
                            <h1 class="text-xl font-bold">Kota & Kecamatan</h1>
                            <div class="relative">
                                <input type="text" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                                <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Kota
                                    & Kecamatan</label>
                            </div>
                            <small>supporting item</small>
                        </div>
                        <button class=" inline-block rounded-full py-3 w-3/5 font-bold bg-white text-green-500 border-green-500 text-3xl mt-20 ml-auto shadow-sm shadow-black"
                        href="/jual-sampah">Batal</button>
                    </div>
                    <div class="w-1/2 flex flex-col px-6">
                        <div class="space-y-4">
                            <h1 class="text-2xl font-bold">Deskripsi</h1>
                            <p class="text-sm">
                                Masukkan Deskripsi dari sampah yang akan di jual dengan jelas dan rinci
                            </p>
                            <div class="relative">
                                <input type="text"
                                    class="border-2 text-clip border-gray-400 rounded-md h-32 w-full p-4">
                                <label
                                    class="absolute bottom-28 bg-white left-3 text-xs text-black font-semibold px-1 pb-2">Deskripsi</label>
                            </div>
                            <small>supporting item</small>
                        </div>
                        <div class="space-y-4 mt-44 pt-1">
                            <h1 class="text-2xl font-bold">Harga</h1>
                            <p class="text-sm">Masukkan Juduk dari Sampah atau barang bekas
                                yang akan di jual dengan singkat dan jelas <br>(dalam Rp)
                            </p>
                            <div class="relative">
                                <input type="text" class="border-2 border-gray-400 rounded-md h-14 w-full p-4">
                                <label
                                    class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Harga</label>
                                <label
                                    class="absolute bottom-4   bg-transparent right-4 text-xl text-black font-bold px-1">Rp</label>
                            </div>
                            <small>supporting item</small>
                        </div>
                        <div class="space-y-4 mt-16 pt-2">
                            <h1 class="text-xl font-bold">Alamat Lengkap</h1>
                            <div class="relative">
                                <input type="text"
                                    class="border-2 text-clip border-gray-400 rounded-md h-44 w-full p-4">
                                <label
                                    class="absolute bottom-40 bg-white left-3 text-xs text-black font-semibold px-1 pb-2">Alamat
                                    Lengkap</label>
                            </div>
                            <small>supporting item</small>
                        </div>
                        <button class=" inline-block rounded-full py-3 w-full font-bold bg-green-500 text-white text-3xl mt-20 shadow-sm shadow-black"
                            href="/jual-sampah">Jual</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
