@extends('Layout.Navbar')
@section('content')
<div class="bg-cover bg-center" style="background-image: url({{asset('assets/images/bgregister.png')}})">
    <section class="pb-16 w-full flex flex-row justify-center pt-24 ">
        <form class="flex flex-col justify-center md:w-1/2 mx-auto " action="{{ route('register_proses') }}" method="POST">
            @csrf
            <h1 class="text-3xl text-center font-bold">Selamat Datang di Boikot Sampah!🫳🫴✊</h1>
            <div class=" m-4 flex flex-col space-y-8 p-10">
                <div class="flex flex-col">
                    <label class="text-2xl mb-4 text-left font-bold">Nama Lengkap</label>
                    <div class="relative">
                        <input type="text" class="border-2 border-gray-400 rounded-md h-14 w-full p-4" name="name">
                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Nama</label>
                    </div>
                    @error('name')
                    <small>{{ $message }}</small>
                    @enderror
                    <small class="ml-4">supporting text</small>
                </div>
                <div class="flex flex-col">
                    <label class="text-2xl mb-4 text-left font-bold">Password</label>
                    <div class="relative">
                        <input type="password" class="border-2 border-gray-400 rounded-md h-14 w-full p-4" name="password">
                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Password</label>
                    </div>
                    @error('password')
                    <small>{{ $message }}</small>
                    @enderror
                    <small class="ml-4">Gunakan minimal 8 karakter dengan kombinasi huruf dan angka</small>
                </div>
                <div class="flex flex-col">
                    <label class="text-2xl mb-4 text-left font-bold">Email</label>
                    <div class="relative">
                        <input type="text" class="border-2 border-gray-400 rounded-md h-14 w-full p-4" name="email">
                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">Email</label>
                    </div>
                    @error('email')
                    <small>{{ $message }}</small>
                    @enderror
                    <small class="ml-4">supporting text</small>
                </div>
                <div class="flex flex-col">
                    <label class="text-2xl mb-4 text-left font-bold">No HP/WhatsApp</label>
                    <div class="relative">
                        <input type="text" class="border-2 border-gray-400 rounded-md h-14 w-full p-4" name="nohp">
                        <label class="absolute bottom-12 bg-white left-3 text-xs text-black font-semibold px-1">No HP/WhatsApp</label>
                    </div>
                        @error('nohp')
                        <small>{{ $message }}</small>
                        @enderror
                        <small>supporting text</small>
                </div>
                <div class="flex flex-col space-y-2">
                    <button type="submit" class="bg-green-600 text-white h-14 text-xl font-sans font-semibold rounded-lg">Daftar</button>
                    <label class="text-xl mb-3 text-center font-sans ">Sudah punya akun? <a class="underline text-green-500 border-green-500 border-b-0" href="/login">Masuk Sekarang</a></label>
                </div>        
            </div>
        </form>
    </section>
</div>
@endsection