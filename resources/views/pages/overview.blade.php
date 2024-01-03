@extends('index')

@section('content')
    <div class="flex justify-center gap-6 w-full p-12">
        @include('partials.sidebar')
        <div class="bg-gradient-to-b-greenish rounded-lg flex justify-center items-center flex-col gap-4 p-8 w-full">
            <div class="bg-gray-100 p-2 rounded-xl w-full">
                <a href="{{ route('form') }}">
                    <div class="flex items-center gap-2 bg-white rounded-xl p-2 lg:p-4">
                        <img src="{{ asset('assets/img/record-svgrepo-com.svg') }}" alt="newspaper-regular">
                        <h2 class="text-lg font-medium text-gray-800">Isi Kegiatan</h2>
                    </div>
                </a>
            </div>
            <div class="bg-gray-100 p-2 rounded-xl w-full">
                <a href="{{ route('detail') }}">
                    <div class="flex items-center gap-2 bg-white rounded-xl p-2 lg:p-4">
                        <img class="w-16" src="{{ asset('assets/img/eye-password-eye-password-svgrepo-com.svg') }}"
                            alt="newspaper-regular">
                        <h2 class="text-lg font-medium text-gray-800">Lihat Kegiatan</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
