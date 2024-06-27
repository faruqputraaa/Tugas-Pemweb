@extends('Layout.Navbar')
@section('content')
    <section class="w-2/3 flex flex-col justify-center mx-auto h-screen">
        <img class="w-2/3 justify-center mx-auto mb-10" src="{{ asset('assets/images/logo-2.png') }}">
        <h1 class="text-4xl font-bold justify-center mx-auto">Manfaatkan Sampahmu dengan <span
                class="text-green-500">sebaik-baiknya</span></h1>
        <p class="mt-6 text-justify">Fitur layanan "Boikot Sampah" bertujuan untuk menghubungkan individu yang ingin
            menjual atau mendaur ulang sampah dengan pembeli atau pengguna yang tertarik
            untuk memanfaatkannya. Visi kami adalah menciptakan ekosistem yang berkelanjutan
            di mana sampah dianggap sebagai sumber daya yang berharga, bukan sebagai limbah.
            Melalui platform ini, kami berupaya mengurangi jumlah sampah yang masuk ke tempat
            pembuangan akhir dengan memfalitisasi transaksi antara penjual dan pembeli.</p>
    </section>

    <section class="flex flex-col w-full px-4 md:px-12 justify-center mx-auto mb-20">
        <h1 class="text-4xl font-bold text-center p-10 mb-10 mt-10 lg:mt-0">Jenis Sampah Apa Saja Yang Bisa Dijual?</h1>

        <div id="product-grid" class="grid grid-cols-2 grid-row md:grid-cols-4 gap-6">
            <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300">
                <img src="{{ asset('assets/images/kertas.png') }}" alt="Kertas" class="h-32 sm:h-40 md:h-48 w-full object-cover">
                <div class="p-2 bg-white">
                    <h3 class="text-center text-base sm:text-lg font-semibold mb-1">Kertas</h3>
                    <ul class="list-disc px-5">
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Kertas bekas,Kertas Koran,Kertas bekas, Kertas Majalah dan kertas kardus
                        </li>
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Kertas Kemasan atau kotak tertentu dari bahan kardus
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300">
                <img src="{{ asset('assets/images/plastik.png') }}" alt="plastik" class="h-32 sm:h-40 md:h-48 w-full object-cover">
                <div class="p-2 bg-white">
                    <h3 class="text-center text-base sm:text-lg font-semibold mb-1">Plastik</h3>
                    <ul class="list-disc px-5">
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Botol Plastik seperti PET & HDPE
                        </li>
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Kemasan Plastik dan sejenisnya
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300">
                <img src="{{ asset('assets/images/logam.png') }}" alt="logam" class="h-32 sm:h-40 md:h-48 w-full object-cover">
                <div class="p-2 bg-white">
                    <h3 class="text-center text-base sm:text-lg font-semibold mb-1">Logam</h3>
                    <ul class="list-disc px-5">
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Kaleng Alumunium
                        </li>
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Potongan Besi/Baja ringan
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300">
                <img src="{{ asset('assets/images/kaca.png') }}" alt="kaca" class="h-32 sm:h-40 md:h-48 w-full object-cover">
                <div class="p-2 bg-white">
                    <h3 class="text-center text-base sm:text-lg font-semibold mb-1">Kaca</h3>
                    <ul class="list-disc px-5">
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Botol Kaca
                        </li>
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Wadah Kaca
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300">
                <img src="{{ asset('assets/images/tekstil.png') }}" alt="tekstil" class="h-32 sm:h-40 md:h-48 w-full object-cover">
                <div class="p-2 bg-white">
                    <h3 class="text-center text-base sm:text-lg font-semibold mb-1">Kaca</h3>
                    <ul class="list-disc px-5">
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Pakaian bekas  yang masih bisa di gunakan
                        </li>
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            kain bekas
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300">
                <img src="{{ asset('assets/images/elektronik.png') }}" alt="elektronik" class="h-32 sm:h-40 md:h-48 w-full object-cover">
                <div class="p-2 bg-white">
                    <h3 class="text-center text-base sm:text-lg font-semibold mb-1">Elektronik</h3>
                    <ul class="list-disc px-5">
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Produk elektronik,HP,Sound dan sebagainya
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300">
                <img src="{{ asset('assets/images/karet.png') }}" alt="karet" class="h-32 sm:h-40 md:h-48 w-full object-cover">
                <div class="p-2 bg-white">
                    <h3 class="text-center text-base sm:text-lg font-semibold mb-1">Karet</h3>
                    <ul class="list-disc px-5">
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Ban karet
                        </li>
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Produk yang berbahan dasar karet
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overflow-hidden rounded-lg shadow-md group-hover:shadow-xl transition duration-300">
                <img src="{{ asset('assets/images/sampah-lain.png') }}" alt="Kertas" class="h-32 sm:h-40 md:h-48 w-full object-cover">
                <div class="p-2 bg-white">
                    <h3 class="text-center text-base sm:text-lg font-semibold mb-1">Jenis Sampah Lainnya</h3>
                    <ul class="list-disc px-5">
                        <li class="text-gray-500 text-xs sm:text-sm mb-1">
                            Jenis Sampah lain yang dapat di daur ulang
                        </li>
                    </ul>
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
                    src="{{ asset('assets/images/layanan-1.jpg') }}" alt="">
            </div>
            <div class="md:w-1/2 text-center md:text-left space-y-4 grid justify-items-stretch">
                <p class="text-lg text-gray-500">Pemilahan Sampah bukan hanya mengurangi Volume Sampah Akan tetapi juga menciptakan lingkungan yang bersih dan sehat. Dengan pemilahan yang baik kita dapat menambah nilai sampah yang dapat di daur ulang, mengurangi dampak negatif sampah pada lingkungan
                    dan meningkatkan kesehatan manusia</p>
                <a class="justify-self-center md:justify-self-start inline-block rounded-full px-8 py-3 bg-green-500 text-white  shadow-xl shadow-green-300"
                    href="https://www.nestle.co.id/kisah/cara-pengolahan-sampah-yang-baik-dan-benar">Mulai Pelajari Caranya</a>
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
                    src="{{ asset('assets/images/layanan-3.jpeg') }}" alt="">
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