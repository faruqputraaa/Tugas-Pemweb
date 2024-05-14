@extends('Layout.Navbar')
@section('content')
<div class="bg-cover bg-center" style="background-image: url({{asset('assets/images/bg.png')}})">
    <section class="text-center space-y-5 md:space-y-10 h-screen flex flex-col justify-center">
        <h1 class=" text-3xl lg:text-6xl font-bold">
            Manfaatkan <span class="text-green-600">Sampahmu</span> <br>
            Dengan <span class="text-green-600">Sebaik-baiknya</span>
        </h1>        
        <div class="w-3/4  md:w-1/3  mx-auto flex flex-col">
            <input class="w-full px-6 py-3 rounded-full shadow-xl text-sm" type="search" placeholder="Cari barang yang kamu mau disini...">
            <div class="mt-8 w-full">
                <a class=" justify-self-center rounded-full px-6 py-3 bg-green-500 text-white shadow-xl text-sm" href="/register">Cari Sampah</a>
            </div>
        </div>                
    </section>    
    <section class="text-center">
        <h1 class="text-3xl font-bold text-center">Mengapa Boikot Sampah?</h1>
        <section class="flex flex-col sm:flex-row items-center justify-center px-8 py-16 bg-white w-5/6 mx-auto m-11 rounded-3xl shadow-2xl ">
            <div class="w-full col-end-1 sm:w-1/2 relative mb-6 md:mb-0">
                <div class="border-2 border-green-500 border-solid w-1/2 mx-auto absolute inset-0 transform rotate-12"></div>
                <img class="h-40 mx-auto rounded-lg shadow-lg relative z-10" src="{{ asset('assets/images/buang-sampah.jpg') }}" alt="">
            </div>
            <div class="w-full md:w-1/2">
                <h1 class="text-3xl font-bold text-gray-800 mb-8">Pengelolaan Sampah Yang Mudah</h1>
                <p class="text-lg text-gray-500">Kami membantu Anda memanfaatkan sampah dengan mudah.</p>
            </div>
        </section>
        <section class="flex flex-col sm:flex-row items-center justify-center px-8 py-16 bg-white w-5/6 mx-auto m-11 rounded-3xl shadow-2xl">
            <div class="w-full md:w-1/2 relative mb-6 sm:mb-0 sm:order-last">
                <div class="border-2 border-green-500 border-solid w-1/2 mx-auto absolute inset-0 transform -rotate-12"></div>
                <img class="h-40 mx-auto rounded-lg shadow-lg relative z-10" src="{{ asset('assets/images/buang-sampah.jpg') }}" alt="">
            </div>
            <div class="w-full sm:w-1/2 md:text-start space-y-4 grid justify-items-stretch md:order-first">
                <h1 class="text-4xl font-bold text-gray-800 mb-8">Dukungan UMKM Gratis</h1>
                <p class="text-lg text-gray-500">Jual Beli sampah untuk kreatifitas!<br> Bekerja sama dengan UMKM untuk menghasilkan barang-barang unik dari sampah.</p>
                <a class="lg:justify-self-start sm:justify-self-center inline-block rounded-full px-8 py-3 bg-green-500 text-white shadow-xl shadow-green-300" href="/register">Beli Sampah</a>
            </div>
        </section>        
        <section class="flex flex-col sm:flex-row items-center justify-center px-8 py-16 bg-white w-5/6 mx-auto m-11 rounded-3xl shadow-2xl h-1/3">
            <div class="w-full md:w-1/2 relative mb-6 md:mb-0">
                <div class="border-2 border-green-500 border-solid w-1/2 mx-auto absolute inset-0 transform rotate-12"></div>
                <img class="h-40 mx-auto rounded-lg shadow-lg relative z-10" src="{{ asset('assets/images/buang-sampah.jpg') }}" alt="">
            </div>
            <div class="w-full md:w-1/2">
                <h1 class="text-4xl font-bold text-gray-800 mb-8">Edukasi untuk masa depan bersih</h1>
                <p class="text-lg text-gray-500">Informasi penting mengenai sampah dan daur ulang. Mari ciptakan lingkungan yang bersih di masa depan.</p>
            </div>
        </section>
    </section>
    <section class="flex flex-col justify-center items-center">
        <h1 class="text-2xl font-bold text-center">YANG BERSAMA KAMI</h1>
        <div class="m-4 mt-8 mb-16 flex flex-row sm:flex-row justify-center space-x-8 md:space-x-4">
            <div class="w-1/4 md:w-auto rounded-3xl shadow-2xl bg-white p-4 md:p-8 flex flex-col items-center">
                <img class="h-20 md:h-32 rounded-lg" src="{{ asset('assets/images/call-center-agent.png') }}" alt="">
                <p class="text-center font-bold">Total Pengguna</p>
            </div>    
            <div class="w-1/4 md:w-auto rounded-3xl shadow-2xl bg-green-500 p-4 md:p-8 flex flex-col items-center">
                <img class="h-20 md:h-32 rounded-lg" src="{{ asset('assets/images/trade.png') }}" alt="">
                <p class="text-center font-bold text-white">Jumlah Transaksi</p>
            </div>
            <div class="w-1/4 md:w-auto rounded-3xl shadow-2xl bg-white p-4 md:p-8 flex flex-col items-center">
                <img class="h-20 md:h-32 rounded-lg" src="{{ asset('assets/images/viewers.png') }}" alt="">
                <p class="text-center font-bold">Pengunjung</p>
            </div>
        </div>
    </section>          
</div>            
@endsection
