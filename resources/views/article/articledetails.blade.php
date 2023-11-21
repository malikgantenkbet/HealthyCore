<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Purrfect Adopt | {{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61cc44f0a1.js" crossorigin="anonymous"></script>
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF7D4;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        article {
            max-width: 800px;
            margin: 2em auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .article-image {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .article-title {
            font-size: 42px; 
            font-weight: bold; 
        }

        h1 {
            color: #333;
        }

        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .author-info {
            display: flex;
            align-items: center;
            margin-top: 30px;
            font-style: italic;
        }

        .author-image {
            border-radius: 50%;
            margin-right: 15px;
        }

        .author-name {
            font-weight: bold;
        }

        .date {
            color: #888;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            text-decoration: none;
            color: #333;
            margin-right: 15px;
            font-size: 20px;
        }

        .social-icons i {
            vertical-align: middle;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.header');

    <article>
        
        <img class="article-image" src="{{ asset('img/articelCorona.png') }}" alt="Gambar Artikel">
        <h1 class="article-title">{{ $article->judul }}</h1>
        <br>
        <p>{!! $article->isi !!}</p>

        <!-- Tambahkan konten artikel sesuai kebutuhan -->

        

        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
    </article>

<br>
@include('components.footer');

</body>
</html>
