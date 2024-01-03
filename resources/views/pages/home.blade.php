@extends('index')

@section('content')
    <div class="flex flex-col lg:flex-row items-center justify-center min-h-screen text-white">
        <form method="POST" action="{{ route('login') }}">
        <div class="lg:w-1/2 p-8 bg-gradient-to-b-greenish rounded-lg">
                @csrf
                <h1 class="text-2xl font-semibold mb-4 text-gray-200">Login</h1>
                @if (session('error'))
                    <p class="text-center mb-4 text-sm" style="color: red">Pastikan NIP dan PIC benar</p>
                @endif
                <input class="mb-4 w-full p-3 text-sm rounded-md bg-gray-100 @error('nip') border-red-500 @enderror text-black" type="text" placeholder="NIP" name="nip">
                <input class="mb-4 w-full p-3 text-sm rounded-md bg-gray-100 @error('pic') border-red-500 @enderror text-black" type="password" placeholder="PIC" name="pic">
                <button class="bg-greenish-100 hover:bg-greenish-200 text-white py-2 w-full rounded-full uppercase transition duration-300">Login</button>
            </form>
        </div>
    </div>
@endsection
