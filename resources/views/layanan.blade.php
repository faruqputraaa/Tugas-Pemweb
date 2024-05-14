@extends('Layout.Navbar')
@section('content')
    <section class="w-2/3 flex flex-col justify-center mx-auto mt-24">
        <img class="w-2/3 justify-center mx-auto mb-20" src="{{ asset('assets/images/logo-2.png') }}">
        <h1 class="text-4xl font-bold justify-center mx-auto">Manfaatkan Sampahmu dengan <span
                class="text-green-500">sebaik-baiknya</span></h1>
        <p class="mt-6 text-justify">Fitur layanan "Boikot Sampah" bertujuan untuk menghubungkan individu yang ingin
            menjual atau mendaur ulang sampah dengan pembeli atau pengguna yang tertarik
            untuk memanfaatkannya. Visi kami adalah menciptakan ekosistem yang berkelanjutan
            di mana sampah dianggap sebagai sumber daya yang berharga, bukan sebagai limbah.
            Melalui platform ini, kami berupaya mengurangi jumlah sampah yang masuk ke tempat
            pembuangan akhir dengan memfalitisasi transaksi antara penjual dan pembeli.</p>
    </section>

    <section class="flex flex-col w-full md:p-20 justify-center mx-auto mb-20">
        <h1 class="text-4xl font-bold text-center p-10 mb-10 mt-10 lg:mt-0">Jenis Sampah Apa Saja Yang Bisa Dijual?</h1>

        <div class="flex flex-wrap justify-center ">
            <div class="h-64 w-60  rounded-lg bg-white flex flex-col mx-2 my-8 md:my-4 shadow-2xl ">
                <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/buang-sampah.jpg') }}">
                <div class="h-1/2 w-full text-center">
                    <h1 class="font-bold">Plastik</h1>
                    <p class="text-sm">Rp. 1000</p>
                </div>
            </div>
            <div class="h-64 w-60  rounded-lg bg-white flex flex-col mx-2 my-8 md:my-4 shadow-2xl">
                <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/buang-sampah.jpg') }}">
                <div class="h-1/2 w-full text-center">
                    <h1 class="font-bold">Plastik</h1>
                    <p class="text-sm">Rp. 1000</p>
                </div>
            </div>
            <div class="h-64 w-60  rounded-lg bg-white flex flex-col mx-2 my-8 md:my-4 shadow-2xl">
                <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/buang-sampah.jpg') }}">
                <div class="h-1/2 w-full text-center">
                    <h1 class="font-bold">Plastik</h1>
                    <p class="text-sm">Rp. 1000</p>
                </div>
            </div>
            <div class="h-64 w-60  rounded-lg bg-white flex flex-col mx-2 my-8 md:my-4 shadow-2xl">
                <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/buang-sampah.jpg') }}">
                <div class="h-1/2 w-full text-center">
                    <h1 class="font-bold">Plastik</h1>
                    <p class="text-sm">Rp. 1000</p>
                </div>
            </div>
            <div class="h-64 w-60  rounded-lg bg-white flex flex-col mx-2 my-8 md:my-4 shadow-2xl">
                <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/buang-sampah.jpg') }}">
                <div class="h-1/2 w-full text-center px-5">
                    <h1 class="font-bold">Tekstil</h1>
                    <ul class="list-disc text-left px-5 text-sm space-y-1">
                        <li>Pakaian bekas yang masih bisa digunakkan</li>
                        <li>kain bekas</li>
                    </ul>
                </div>
            </div>
            <div class="h-64 w-60  rounded-lg bg-white flex flex-col mx-2 my-8 md:my-4 shadow-2xl">
                <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/buang-sampah.jpg') }}">
                <div class="h-1/2 w-full text-center px-5">
                    <h1 class="font-bold">Elektronik</h1>
                    <ul class="list-disc text-left px-5 text-sm space-y-1">
                        <li>Produk Elektronik, Hp, Sound dan sebagainya</li>
                    </ul>
                </div>
            </div>
            <div class="h-64 w-60  rounded-lg bg-white flex flex-col mx-2 my-8 md:my-4 shadow-2xl">
                <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/buang-sampah.jpg') }}">
                <div class="h-1/2 w-full text-center px-5">
                    <h1 class="font-bold">Karet</h1>
                    <ul class="list-disc text-left px-5 text-sm space-y-1">
                        <li>Ban Karet</li>
                        <li>Produk yang berbahan dasar karet</li>
                    </ul>
                </div>
            </div>
            <div class="h-64 w-60 rounded-lg bg-white flex flex-col mx-2 my-8 md:my-4 shadow-xl">
                <img class="h-1/2 w-full rounded-t-lg" src="{{ asset('assets/images/buang-sampah.jpg') }}">
                <div class="h-1/2 w-full text-center">
                    <h1 class="font-bold">Jenis Sampah Lainya</h1>
                    <p class="text-sm">Rp. 1000</p>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <h1 class="text-4xl font-bold text-center mb-10">Pelajari Cara Pemilahan sampah disini</h1>
        <section class="flex flex-col md:flex-row items-center justify-center px-8 py-16 md:w-3/4 mx-auto m-11">
            <div class="md:w-1/2 relative m-5 md:m-0">
                <div class="border-2 border-green-500 border-solid w-1/2 mx-auto absolute inset-0 transform rotate-12">
                </div>
                <img class="h-40 mx-auto rounded-lg shadow-lg relative z-10"
                    src="{{ asset('assets/images/buang-sampah.jpg') }}" alt="">
            </div>
            <div class="md:w-1/2 text-center md:text-left space-y-4 grid justify-items-stretch">
                <p class="text-lg text-gray-500">Pemilahan Sampah bukan hanya mengurangi Volume Sampah Akan tetapi juga menciptakan lingkungan yang bersih dan sehat. Dengan pemilahan yang baik kita dapat menambah nilai sampah yang dapat di daur ulang, mengurangi dampak negatif sampah pada lingkungan
                    dan meningkatkan kesehatan manusia</p>
                <a class="justify-self-center md:justify-self-start inline-block rounded-full px-8 py-3 bg-green-500 text-white  shadow-xl shadow-green-300"
                    href="/register">Mulai Pelajari Caranya</a>
            </div>
        </section>

        <section class="flex flex-col-reverse md:flex-row items-center justify-center px-8 py-16 md:w-3/4 mx-auto m-11">
            <div class="md:w-1/2 text-center space-y-4 grid justify-items-stretch">
                <h1 class="text-4xl font-bold text-gray-800 mb-8">Ubah Sampah jadi Rupiah!</h1>
                <p class="text-lg text-gray-500">Kita bisa memanfaatkan sampah untuk menjadi uang. <br>Mari bergabung dan
                    mulai
                    beraksi sekarang!</p>
                <a class="justify-self-center md:justify-self-end inline-block rounded-full px-8 py-3 bg-green-500 text-white md:mr-10 shadow-xl shadow-green-300"
                    href="/jual">Jual Sampah</a>
            </div>
            <div class="md:w-1/2 relative m-5 md:m-0">
                <div class="border-2 border-green-500 border-solid w-1/2 mx-auto absolute inset-0 transform -rotate-12">
                </div>
                <img class="h-40 mx-auto rounded-lg shadow-lg relative z-10"
                    src="{{ asset('assets/images/buang-sampah.jpg') }}"alt="">
            </div>
        </section>

        <section class="flex flex-col md:flex-row items-center justify-center px-8 py-16 md:w-3/4 mx-auto m-11">
            <div class="md:w-1/2 relative m-5 md:m-0">
                <div class="border-2 border-green-500 border-solid w-1/2 mx-auto absolute inset-0 transform rotate-12">
                </div>
                <img class="h-40 mx-auto rounded-lg shadow-lg relative z-10"
                    src="{{ asset('assets/images/buang-sampah.jpg') }}" alt="">
            </div>
            <div class="md:w-1/2 text-center space-y-4 grid justify-items-stretch">
                <h1 class="text-4xl font-bold text-gray-800 mb-8">Dukungan UMKM Gratis </h1>
                <p class="text-lg text-gray-500">Kita bisa memanfaatkan sampah untuk menjadi uang. <br>Mari bergabung dan
                    mulai
                    beraksi sekarang!</p>
                <a class="justify-self-center md:justify-self-start inline-block rounded-full px-8 py-3 bg-green-500 text-white md:ml-8 lg:ml-12 shadow-xl shadow-green-300"
                    href="/register">Beli Sampah</a>
            </div>
        </section>
    </section>
@endsection