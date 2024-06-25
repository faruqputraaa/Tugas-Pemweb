@extends('Layout.Navbar')
@section('content')
<section>
    <div class="bg-gradient-to-r from-green-600 to-white h-screen">
        <h1 class="text-3xl font-bold text-green-700 text-center mt-20">Apakah Anda Punya Pertanyaan?</h1>
        <h2 class="text-sm text-green-700 text-center mb-20">Jika kamu punya masalah mengenai Boikot Sampah. Silahkan isi form di bawah ini. Kami akan berusaha membalas 1X24 jam</h2>
        <div class="max-h-full">
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-6 text-center">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('contact.send') }}" method="POST" class="contact-form max-w-md mx-auto bg-white p-8 rounded-lg shadow-xl max-sm:m-4">
              @csrf
                <div class="mb-4">
                    <label for="subject" class="block font-bold">Subjek:</label>
                    <input type="text" id="subject" name="subject" placeholder="Masukan Subjek..." required class="w-full px-3 py-2 rounded border border-gray-300 focus:border-green-500 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label for="message" class="block font-bold">Pesan:</label>
                    <textarea id="message" name="message" placeholder="Masukan Pesan..." required class="w-full px-3 py-2 rounded border border-gray-300 focus:border-green-500 focus:outline-none"></textarea>
                </div>
                <div class="text-center">
                    <input type="submit" id="submit" name="submit" value="Kirim" class="bg-green-500 text-white px-6 py-3 rounded-full shadow-xl cursor-pointer transition-colors duration-300 hover:bg-blue-700">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
