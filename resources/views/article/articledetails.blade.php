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
        
        <img class="article-image" src="" alt="Gambar Artikel">
        <h1 class="article-title">Corona: Penyakit Berbahaya yang Mengejutkan Dunia</h1>
        <br>
        <p>
        Pada akhir tahun 2019, dunia dikejutkan oleh munculnya penyakit misterius yang kemudian dikenal sebagai COVID-19 atau lebih umum dikenal dengan istilah "corona." Penyakit ini bukan hanya menjadi ancaman kesehatan global, tetapi juga memicu transformasi dalam paradigma perawatan kesehatan dan kesadaran masyarakat terhadap kesehatan.

1. Perkembangan Gejala dan Penularan

Corona, yang disebabkan oleh virus SARS-CoV-2, memiliki gejala mulai dari ringan hingga parah. Dari demam yang mendalam hingga gangguan pernapasan serius, penyakit ini telah menunjukkan berbagai manifestasi yang membuatnya sulit untuk didiagnosis secara cepat. Penularannya yang sangat mudah dan cepat menyebabkan lonjakan kasus di seluruh dunia, memicu kekhawatiran global dan mendesak perluasan upaya pencegahan.

2. Tantangan dalam Penanganan

Penanganan corona membawa tantangan besar bagi sistem kesehatan di seluruh dunia. Keterbatasan peralatan medis, pengetahuan yang terus berkembang tentang virus, dan adanya varian baru menambah kompleksitas upaya penanganan. Kecepatan penyebaran yang tinggi dan dampaknya yang merata di berbagai lapisan masyarakat menunjukkan perlunya kerjasama global dalam penanganan pandemi ini.

3. Vaksinasi sebagai Harapan

Meskipun menghadapi tantangan, upaya untuk mengatasi corona telah memunculkan harapan baru melalui pengembangan dan distribusi vaksin. Vaksin COVID-19 menjadi tonggak penting dalam memerangi penyakit ini dan membangun kekebalan kelompok yang luas. Namun, pertanyaan etika, aksesibilitas global, dan perubahan virus terus menjadi aspek kritis dalam perjalanan vaksinasi.

4. Transformasi Sosial dan Perubahan Paradigma

Corona tidak hanya merubah cara kita melihat kesehatan fisik, tetapi juga memberikan dampak besar terhadap aspek sosial dan psikologis masyarakat. Kerja jarak jauh, pembatasan sosial, dan perubahan perilaku harian adalah sebagian dari adaptasi yang diperlukan untuk bertahan dari ancaman penyakit ini.

Kesimpulan

Dengan memahami kompleksitas corona, kita dapat lebih siap menghadapi tantangan masa depan. Sinergi antara inovasi medis, dukungan masyarakat, dan kebijakan global menjadi kunci untuk mengatasi penyakit berbahaya ini dan membangun fondasi yang lebih kokoh untuk perawatan kesehatan di masa mendatang.
        </p>

        <!-- Tambahkan konten artikel sesuai kebutuhan -->

        <div class="author-info">
            <div>
                <p class="author-name">Nama Penulis</p>
                <p class="date">Tanggal Publikasi: -</p>
            </div>
        </div>

        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
    </article>

<br>
@include('components.footer');

</body>
</html>
