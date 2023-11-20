<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Purrfect Adopt</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/61cc44f0a1.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF7D4;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="leading-normal tracking-normal text-white-400 m-6 bg-cover bg-fixed" style="background: url('{{ asset('/img/background.jpg') }}'); background-size: cover; background-position: center;">

<div class="h-full flex flex-col justify-between">
    <!--Nav-->
    <div class="w-full container mx-auto">
        <div class="w-full flex items-center justify-between">
            <a class="flex items-center text-white-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
            href="{{ route('welcome') }}">
                <x-application-logo class="block h-8 pr-2 w-auto fill-current" />
                <span class="text-yellow-400 font-semibold text-lg md:text-xl">HealthyCore</span>
            </a>
            <div class="flex w-1/2 justify-end content-center">
                <a href="{{ route('login') }}"
                class="inline-block text-white no-underline bg-yellow-400 hover:bg-yellow-500 hover:text-white text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out rounded-full">
                    LOGIN <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </a>
            </div>
        </div>
    </div>

    <!--Main-->
    <div class="container mx-auto flex flex-wrap md:flex-nowrap items-center">
        <div class="container ">
            <div class="row justify-center">
                <div class="col-lg-7 text-center">
                    <h1 class="text-white text-4xl animated zoom-in">Welcome to<strong class="text-dark"> Healthy & Core</strong></h1>
                    <p class="text-white mb-4 animated zoom-in">HealtyCore adalah sebuah solusi perangkat lunak yang digunakan di  rumah sakit untuk mengotomatisasi dan menyederhanakan proses pendaftaran pasien.</p>
                    <a href="#explore" class="btn btn-light rounded-full py-3 px-5 animated zoom-in border border-yellow-500">Daftar Antrian</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
