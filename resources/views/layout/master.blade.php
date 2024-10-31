<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('custom.bootstrap5')
</head>
<body>
    <div class="container-fluid">
        {{-- baris1 logo --}}
        @include('layout.logo')

        {{-- baris2 header/navbar --}}
        @include('layout.header')

        {{-- baris3 konten --}}
        @yield('kontenberita')

    </div>
    
</body>
</html>