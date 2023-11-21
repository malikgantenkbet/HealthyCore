<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HealthyCore | Article</title>
     <!-- swiper -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

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
<body>
    @include('components.header');

<!--body-->
<!-- <div class="w-full text-gray-700 md:text-center text-5xl font-semibold pt-20">Daftar Antrian</div>
</div>
<div class="w-full text-gray-700 md:text-center text-5xl text-base/6 py-4">Form untuk daftar antrian pasien rumah sakit.</div>
</div>

<div class="container w-1/2 mx-auto px-4">
    <form action="{{ route('contents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="post-title" class="mb-2 text-sm font-medium text-gray-900 sr-only">Nama</label>
        <input type="text" id="post-title" name="judul" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
        placeholder="Nama" required>
        <label for="post-title" class="mb-2 text-sm font-medium text-gray-900 sr-only">Alamat</label>
        <input type="text" id="post-title" name="judul" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
        placeholder="Alamat" required>
        <label for="post-title" class="mb-2 text-sm font-medium text-gray-900 sr-only">Jenis Kelamin</label>
        <input type="text" id="post-title" name="judul" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
        placeholder="Jenis Kelamin" required>
        <label for="post-title" class="mb-2 text-sm font-medium text-gray-900 sr-only">Telepon</label>
        <input type="text" id="post-title" name="judul" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
        placeholder="Telepon" required>
        <label for="post-content" class="mt-4 mb-2 text-sm font-medium text-gray-900 sr-only">Keluhan</label>
        <textarea id="post-content" name="isi" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
        placeholder="Keluhan" required rows="6"></textarea>
        <button type="submit" class="text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-4 py-2 mt-4">Kirim</button>
    </form>
    @if(session('success'))
    @include('article.success-popup')
    @endif
</div> -->
<br> <br>

<div class="container mx-auto px-4 py-10">
    <!-- Top Article -->
    <div class="w-full bg-brown-200 border border-gray-300 rounded-lg shadow-lg mb-8">
        <div class="flex">
            <a href="/article/{{ $contents->first()->id }}" class="w-1/2">
                <img class="w-full h-auto rounded-l-lg" src="{{ $contents->first()->galery }}" alt="{{ $contents->first()->judul }}" />
            </a>
            <div class="w-1/2 p-5">
                <a href="/article/{{ $contents->first()->id }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $contents->first()->judul }}</h5>
                </a>
                <p class="font-normal text-gray-700">
                    {{ Str::limit($contents->first()->isi, 900) }}
                </p>
                <br>
                <a href="/article/{{ $contents->first()->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-brown-900 bg-brown-400 rounded-lg hover:bg-brown-500">
                    Read More
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Article Slider -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($contents->slice(1) as $content)
            @if ($content->status)
                <div class="max-w-xs bg-brown-200 border border-gray-300 rounded-lg shadow">
                    <a href="/article/{{ $content->id }}">
                        <img class="w-full h-[200px] md:h-[300px] rounded-t-lg object-cover" src="{{ $content->galery }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="/article/{{ $content->id }}">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $content->judul }}</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-4">
                            {{ Str::limit($content->isi, 150) }}
                        </p>
                        <div class="flex justify-end">
                            <a href="/article/{{ $content->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-brown-900 bg-brown-400 rounded-lg hover:bg-brown-500">
                                Read More
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>


<!-- card-->
</div>



<script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: {
        delay: 8000,
      },
      navigation: {
        nextEl: '.next-button',
        prevEl: '.prev-button',
      },
      breakpoints: {
        640: {
          slidesPerView: 1.5,
          centeredSlides: true,
        },
        1024: {
          centeredSlides: false,
          slidesPerView: 4.25,
        },
      },
    })
  })
</script>

<br>
@include('components.footer')

</body>
</html>
