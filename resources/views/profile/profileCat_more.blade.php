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

        .img-object {
            height: 300px; /* Ubah sesuai tinggi yang diinginkan */
            width: 300px; /* Ubah sesuai lebar yang diinginkan */
            object-fit: cover;
            object-position: center;
            border-radius: 10px;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.header');
<div>
    <div class="hover:grow mt-14">
    <a href="{{ route('profile.mypet') }}" class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-9">
        <i class="fa-solid fa-arrow-left"></i>
    </a>
</div>
    <div class="container mx-auto flex flex-wrap md:flex-nowrap mt-10">
    <div id="love-container">
    <a href="{{ route('toggleLove', $kucing->id) }}">
        <button id="toggleButton">
            <i id="heartIcon" class="{{ $kucing->save ? 'fa-solid' : 'fa-regular' }} fa-heart fa-2xl" style="color: #ff0505;"></i>
        </button>
    </a>
</div>
    <div class="w-full xl:w-4/8 py-7 mt-7">
        <img class="w-3/4 h-auto mx-auto img-object" src="{{ asset($kucing->foto) }}">
    </div>
    <div class="flex flex-col xl:w-3/4 mt-20 text-left">
        <h1 class="text-6xl mb-8 text-black">{{ $kucing->nama }}</h1>
        <h3 class="">PET Description</h3>
        <ul class="list-disc ml-6 mt-2">
            <li>Type  : Cat</li>
            <li>Sex   : {{ $kucing->gender ? 'Male' : 'Female' }}</li>
            <li>Breed : {{ $kucing->ras }}</li>
            <li>Age   : {{ $kucing->age }} Years</li>
            <li>Color : {{ $kucing->warna }}</li>
            <li>Weight: {{ $kucing->berat_badan }} Kg</li>
            <li>Height: {{ $kucing->tinggi_badan}} Cm</li>
        </ul>
        <div class="mb-20">
            <p class="block capitalize text-2xl text-yellow-700 mt-4">details</p>
            <div class="flex mt-1">
                <div class="box border rounded p-1 w-1 h-21 bg-yellow-400"></div>
                <div class="box border rounded p-2 w-3/4 ml-3 bg-yellow-400">
                    <h5 class="">{{ $kucing->description}} </h5>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    @include('components.footer');
    <script>
  var isCondition1 = true;
  
  function toggleHeart() {
    var heartIcon = document.getElementById('heartIcon');
    
    if (isCondition1) {
      heartIcon.classList.remove('fa-regular');
      heartIcon.classList.add('fa-solid');
      isCondition1 = false;
    } else {
      heartIcon.classList.remove('fa-solid');
      heartIcon.classList.add('fa-regular');
      isCondition1 = true;
    }
  }
  function toggleHeart() {
        var heartIcon = document.getElementById('heartIcon');

        if (heartIcon.classList.contains('fa-regular')) {
            heartIcon.classList.remove('fa-regular');
            heartIcon.classList.add('fa-solid');
        } else {
            heartIcon.classList.remove('fa-solid');
            heartIcon.classList.add('fa-regular');
        }
    }
</script>
</body>
</html>