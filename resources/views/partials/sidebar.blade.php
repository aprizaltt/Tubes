<div id="profile"
    class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-full transition-all ease-in-out md:static md:transform-none md:transition-none flex flex-col justify-center items-center gap-4 bg-gradient-to-b-greenish rounded-lg shadow-lg p-6 w-1/3 h-full">
    <img class="rounded-full w-1/2" src="{{ asset('assets/img/profile.jpg') }}" alt="profile image">
    <div class="w-full">
        <p class="cursor-default px-4 py-2 mb-4 rounded-md text-white border border-solid border-white">
            {{ session('nama') }}
        </p>
        <p class="cursor-default px-4 py-2 rounded-md text-white border border-solid border-white">
            {{ session('fakultas') }}
        </p>
    </div>
    <a href="{{ route('logout') }}" class="bg-redish-100 bg-redish-100:hover py-2 w-full text-center rounded-full mx-auto text-white">Log
        Out</a>
</div>
