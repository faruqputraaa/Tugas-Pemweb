@extends('Layout.Navbar')
@section('content')
<section>
    <div class="bg-gradient-to-r from-white to-green-600 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h1 class="text-3xl font-extrabold text-green-700 text-center">Apakah Anda Punya Pertanyaan?</h1>
                <h2 class="mt-2 text-center text-sm text-green-700">Jika kamu punya masalah mengenai Boikot Sampah, silahkan isi form di bawah ini. Kami akan berusaha membalas dalam 1X24 jam</h2>
            </div>
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
                    @error('subject')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="message" class="block font-bold">Pesan:</label>
                    <textarea id="message" name="message" placeholder="Masukan Pesan..." required class="w-full px-3 py-2 rounded border border-gray-300 focus:border-green-500 focus:outline-none"></textarea>
                    @error('message')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center">
                    <input type="submit" id="submit" name="submit" value="Kirim" class="bg-green-500 text-white px-6 py-3 rounded-full shadow-xl cursor-pointer transition-colors duration-300 hover:bg-blue-700">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
