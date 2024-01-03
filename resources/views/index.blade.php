<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUBES WEB</title>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.header')
    <main class="bg-gradient-to-b min-h-screen flex flex-col justify-center items-center pt-12">
        @yield('content')
    </main>
    @yield('js')
</body>

</html>
