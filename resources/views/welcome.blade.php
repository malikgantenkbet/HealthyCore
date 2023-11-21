<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Healthy Core</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/61cc44f0a1.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF7D4;
        }
        .bg-utama{
         background-image: url('/img/background.jpg');
         background-size: auto;
         background-position: center;
         text-align: center;
         height: 100%;
         width: 100%;
         display: table;
         vertical-align: middle;
         }
         h1,p{color: white;}
         .konten-ditengah {
         display: table-cell;
         vertical-align: middle;
         }
         .bg-brown{
            background-color: #775949;
    }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>



<body class="bg-utama">

<div class="h-full flex flex-col justify-between">
    <!--Nav-->
    <div class="w-full container mx-auto"><br>
        <div class="w-full flex items-center justify-between">
            <a class="flex items-center text-white-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
            href="{{ route('welcome') }}">
                <x-application-logo class="block h-8 pr-2 w-auto fill-current" />
                <span class="text-white font-semibold text-lg md:text-xl"></span>
            </a>
            <div class="flex w-1/2 justify-end content-center">
                <a href="{{ route('login') }}"
                class="btn btn-light text-white rounded-full py-3 px-5 animated zoom-in border border-yellow-500">
                    Masuk <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </a>
            </div>
        </div>
    </div>
    <br><br><br>
    <!--Main-->
    <div class="konten-ditengah text center">
        <div class="">
            <div class="">
                <h1 class="text-white text-4xl animated zoom-in">Welcome to<strong class="text-dark"> Healthy & Core</strong></h1><br>
                <p class="text-white mb-4 animated zoom-in"><br>HealtyCore adalah sebuah solusi perangkat lunak yang <br>digunakan di  rumah sakit untuk mengotomatisasi dan menyederhanakan <br>proses pendaftaran pasien.</p><br><br>
                <a href="#explore" class="btn btn-light text-white rounded-full py-3 px-5 animated zoom-in border border-yellow-500">Daftar Antrian</a>
            </div>        
        </div>
    </div>
</div>
</body>
</html>
