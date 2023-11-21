<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HealthyCore | Home</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.rawgit.com/mattbryson/TouchSwipe-Jquery-Plugin/v1.6.18/dist/jquery.touchSwipe.min.js"></script>

    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

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

        h2 {
          font-size: 42px; 
            font-weight: bold; 
        }

         body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      color: #fff;
      text-align: center;
      padding: 10px;
    }

    .article-container {
      display: flex;
      justify-content: space-between;
      margin: 20px;
    }

    .article {
      width: 30%;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin: 10px;
      padding: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .article:hover {
      transform: scale(1.05);
    }

    .article img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .slide-box {
      display: flex;
      justify-content: space-between;
    }

    .arrow {
      font-size: 24px;
      cursor: pointer;
      margin: auto 10px;
    }

    .read-more-btn {
      display: inline-block;
      padding: 10px 20px;
      text-decoration: none;
      background-color: #3498db;
      color: #fff;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .read-more-btn:hover {
      background-color: #2980b9;
    }
    

    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.header')

<!--body-->
<section>
<div class="bg-utama relative w-full h-screen flex flex-col items-center justify-center mx-auto">
    <!--Main-->
    <div class="konten-ditengah text-center">
        <div>
            <h1 class="text-white text-4xl animated zoom-in">Welcome to <strong class="text-dark">Healthy & Core</strong></h1><br>
            <p class="text-white mb-4 animated zoom-in">HealthyCore adalah sebuah solusi perangkat lunak yang digunakan <br>di rumah sakit untuk mengotomatisasi dan menyederhanakan proses <br>pendaftaran pasien.</p><br>
            <a href="#explore" class="btn btn-light rounded-full py-3 px-5 animated zoom-in border border-yellow-500">Daftar Antrian</a>
        </div>        
    </div>
</div>
</section>


<!-- <div class="mt-16 w-full text-gray-700 md:text-center text-5xl font-semibold pt-20">
    New way of finding your dream cat</div>
</div>
<div class="w-full text-gray-700 md:text-center text-5xl text-base/6 py-4">
    Bring the best experiences to find your dream cat</div>
</div>

<div class="container w-1/2 mx-auto px-4">
  <form action="{{ route('cat.search') }}" method="GET">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
    <div class="relative">
      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
      </div>
      <input type="search" name="race" id="default-search" class="w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" placeholder="Find the cat race you want" required>
      <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
    </div>
  </form>
</div>
<br> <br> -->

<!--card-->
<!-- <section>
  <div
    class="mx-auto max-w-[1340px] px-4 py-10 sm:px-6 sm:py-20 lg:me-0 lg:pe-0 lg:ps-8"
  >
    <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
      <h2 class="max-w-xl text-3xl font-bold tracking-tight sm:text-4xl">
        Cats
      </h2>

      <div class="mt-8 flex gap-4 lg:mt-0">
        <button
          class="prev-button rounded-full border border-yellow-400 p-3 text-amber-600 hover:bg-amber-600 hover:text-white"
        >
          <span class="sr-only">Previous Slide</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-5 w-5 rtl:rotate-180"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M15.75 19.5L8.25 12l7.5-7.5"
            />
          </svg>
        </button>

        <button
          class="next-button rounded-full border border-yellow-400 p-3 text-amber-600 hover:bg-amber-600 hover:text-white"
        >
          <span class="sr-only">Next Slide</span>
          <svg
            class="h-5 w-5 rtl:rotate-180"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9 5l7 7-7 7"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            />
          </svg>
        </button>
      </div>
    </div>

    <div class="-mx-4 mt-8 lg:col-span-2 lg:mx-0">
      <div class="swiper-container !overflow-hidden">
        <div class="swiper-wrapper">

        @foreach ($cats as $cat)
           <div class="swiper-slide mx-4">
            <blockquote
              class="flex h-full flex-col rounded-lg bg-white p-4 w-[300px]"
            >
              <div>
              <a href="#">
                <img class="rounded-t-lg w-full h-[200px]" src="{{ $cat->foto }}" alt="" />
            </a>
                <div class="mt-4">
                <a href="#">
            <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $cat->nama }}</h1>
        </a>
        <p class="font-normal text-gray-700">Race     : {{ $cat->ras }}</p>
        <p class="font-normal text-gray-700">Gender   : @if ($cat->gender == '0')
            {{ 'Male' }}
        @else
            {{ 'Female' }}
        @endif</p>
        <p class="font-normal text-gray-700">Weight   : {{ $cat->berat_badan }} kg</p>
        <p class="font-normal text-gray-700">Height   : {{ $cat->tinggi_badan }} cm</p> <br>
        <a href="#" class="inline-flex px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300">
            More info
        </a>
                </div>
              </div>

            </blockquote>
          </div>
        @endforeach

        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- card-->

<!-- choose us-->
 <!-- <div id="features" class="relative w-full px-0 py-10 md:py-16 lg:py-24 xl:py-20 xl:px-0">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
            <h2
                class="max-w-2xl px-5 mt-0 text-3xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl">
              Why Choose Us?</h2>
            <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-5 lg:mt-5">

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-start w-full h-full p-20 mr-5 rounded-lg"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453a7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625a11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692a1.54 1.54 0 0 1 1.044-1.262a62.456 62.456 0 0 1 2.887-.87z"/>
                            <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        <h1 class="relative mt-2 text-lg text-center font-bold">Trustworthy Distributor</h1>
                        <p class="relative mt-2 text-base text-center text-gray-600">We have collaborated with trusted distributors. We carefully examine all distributors to ensure that they are responsible.</p>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-start w-full h-full p-20 mr-5 rounded-lg"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453a7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625a11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692a1.54 1.54 0 0 1 1.044-1.262a62.456 62.456 0 0 1 2.887-.87z"/>
                            <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        <h1 class="relative mt-2 text-lg text-center font-bold">Transparency at Its Core</h1>
                        <p class="relative mt-2 text-base text-center text-gray-600">Each cat's profile provides comprehensive information, including breed, health history, gender and others.</p>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-start w-full h-full p-20 mr-5 rounded-lg"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453a7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625a11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692a1.54 1.54 0 0 1 1.044-1.262a62.456 62.456 0 0 1 2.887-.87z"/>
                            <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        <h1 class="relative mt-2 text-lg text-center font-bold">Seamless Communication</h1>
                        <p class="relative mt-2 text-base text-center text-gray-600">We facilitate easy interaction between buyers and distributors through a chat feature.</p>
                    </div>
                </div>
            </div>  
        </div>
    </div> -->
<!-- choose us-->

<!-- artikel-->
<section>
<div class="max-w-screen-xl px-4 mx-auto sm:px-6 sm:py-12 lg:px-8">
    <header class="text-center mb-8">
        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
            Our Articles
        </h2>
        <h3>Artikel ini isi konten terkait wabah virus berbahaya dan harus dihindari</h3>
    </header>

    <div class="article-container">
    <div class="slide-box">
      <div class="arrow" onclick="slideLeft()">&#9665;</div>
    </div>

    <div class="article">
    <a href="/article/{{ $contents->find(1)->id }}" class="relative block group">
            <img
              src="{{ $contents->find(1)->galery }}"
              alt=""
              class="object-cover h-60 w-full transition duration-500 group-hover:opacity-90"
            />
          </a>
      <br>
      <h2 style="font-size: 23px; font-weight: bold;">{{ $contents->find(1)->judul }}</h2>
      <br>
      <p class="text-black">{{ Str::limit($contents->find(1)->isi, 100)}}</p>
       <br>

       <a href="/article/{{ $contents->find(3)->id }}" class="read-more-btn"> Read More</a>
    </div>

    <div class="article">
    <a href="/article/{{ $contents->find(2)->id }}" class="relative block group">
            <img
              src="{{ $contents->find(2)->galery }}"
              alt=""
              class="object-cover h-60 w-full transition duration-500 group-hover:opacity-90"
            />
          </a>
      <br>
      <h2 style="font-size: 23px; font-weight: bold;">{{ $contents->find(2)->judul }}</h2>
      <br>
      <p class="text-black">{{ Str::limit($contents->find(2)->isi, 100)}}</p>
       <br>

       <a href="/article/{{ $contents->find(3)->id }}" class="read-more-btn"> Read More</a>
    </div>

    <div class="article">
    <a href="/article/{{ $contents->find(3)->id }}" class="relative block group">
            <img
              src="{{ $contents->find(3)->galery }}"
              alt=""
              class="object-cover h-60 w-full transition duration-500 group-hover:opacity-90"
            />
          </a>
      <br>
      <h2 style="font-size: 23px; font-weight: bold;">{{ $contents->find(3)->judul }}</h2>
      <br>
      <p class="text-black">{{ Str::limit($contents->find(3)->isi, 100)}}</p>
       <br>

       <a href="/article/{{ $contents->find(3)->id }}" class="read-more-btn"> Read More</a>
    </div>

    
    <div class="slide-box">
      <div class="arrow" onclick="slideRight()">&#9655;</div>
    </div>
  </div>

  </section>
<!-- artikel-->

<!-- about us-->
<div id="features" class="relative w-full px-0 py-10 md:py-16 lg:py-24 xl:py-20 xl:px-0 bg-brown-light">
    <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
        <div class="flex flex-col lg:flex-row">
            <!-- Right Section (2/3 of the page) -->
            <div class="w-full lg:w-2/3 p-4">
                <h2 class="max-w-2xl mt-0 text-3xl font-black leading-tight text-gray-900 sm:mt-0 sm:text-4xl">
                    About Us
                </h2>
                <p class="mt-4 text-base text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu leo felis. Curabitur volutpat eros ut nulla bibendum varius. Cras elementum, elit in vehicula feugiat, ex orci vestibulum elit, non semper enim turpis ut purus. Sed sit amet justo id justo pharetra gravida. Fusce tincidunt, elit ac posuere auctor, ligula elit fermentum enim, id pulvinar ex urna at libero. Nulla facilisi. In hac habitasse platea dictumst.
                </p>
                <p class="mt-4 text-base text-gray-600">
                    Duis vel ultricies magna. Morbi fringilla odio ac bibendum rhoncus. Sed ut finibus eros. In hac habitasse platea dictumst. Sed vitae neque augue. Nullam nec gravida mauris. Praesent et luctus libero. Integer in bibendum sem. Nulla facilisi.
                </p>
            </div>

            <!-- Left Section (1/3 of the page) -->
            <div class="w-full lg:w-1/3"><br>
                <div class="w-full max-w-md mx-auto mb-4 lg:mb-0">
                    <!-- Your image or content for the left section -->
                    <!-- Example: -->
                    <img src="/img/background.jpg" alt="About Us Image" class="w-full ">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- choose us-->


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 4,
      spaceBetween: 90,
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
<!--slider cards-->

@include('components.footer')

</body>
</html>
