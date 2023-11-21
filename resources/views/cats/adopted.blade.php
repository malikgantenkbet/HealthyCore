<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/61cc44f0a1.js https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    


    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF7D4;
            margin: 0;
            padding: 0;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Menetapkan tinggi elemen ke 100% tinggi viewport */
            padding: 20px 0; /* Perpendek jarak bagian atas dan bawah */
        }
        
        .image-row {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 0px; /* Perpendek jarak antara baris */
            gap: 5px; /* Perpendek jarak antara elemen-elemen child */
        }
        
        .image-box {
            position: relative;
            width: 200px;
            height: 200px;
            margin: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            text-align: center;
        }
        
        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .image-box .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
        }
        
        .image-box:hover .overlay {
            opacity: 1;
        }
        
        .image-box .overlay-content {
            color: #fff;
            text-align: center;
        }
        
        .image-box .overlay-content a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        
        .image-box .overlay-content a:hover {
            text-decoration: underline;
        }

        .center{
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            color: #C07F00;
        }
        .bg-brown{
            background-color: #775949;
        }
    </style>
    <title>HealthyCore | Form</title>
</head>

<body>
@include('components.header');

<!--body-->
<div class="w-full text-gray-700 md:text-center text-5xl font-semibold pt-20">
    Daftar Antrian
</div>
<div class="w-full text-gray-700 md:text-center text-5xl text-base/6 py-4">
    Form untuk daftar antrian pasien rumah sakit.
</div>

<div class="container w-1/2 mx-auto px-4">
    <form action="{{ route('contents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <label for="nama" class="mb-2 text-sm font-medium text-gray-900 sr-only">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
                    placeholder="Nama" required>
            </div>

            <div>
                <label for="alamat" class="mb-2 text-sm font-medium text-gray-900 sr-only">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
                    placeholder="Alamat" required>
            </div>

            <div>
                <label for="jenis_kelamin" class="mb-2 text-sm font-medium text-gray-900 sr-only">Jenis Kelamin</label>
                <div class="relative inline-block w-full text-gray-700">
                    <select id="jenis_kelamin" name="jenis_kelamin" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500">
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="telepon" class="mb-2 text-sm font-medium text-gray-900 sr-only">Telepon</label>
                <input type="text" id="telepon" name="telepon" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
                    placeholder="Telepon" required>
            </div>

            <div>
                <label for="keluhan" class="mt-4 mb-2 text-sm font-medium text-gray-900 sr-only">Keluhan</label>
                <textarea id="keluhan" name="keluhan" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
                    placeholder="Keluhan" required rows="6"></textarea>
            </div>
        </div>

        <button type="button" class="text-white bg-brown hover:bg-yellow-500 font-medium rounded-lg text-sm px-4 py-2 mt-4" onclick="showNomorAntrianModal()">
        Kirim
        </button>
    </form>

    @if(session('success'))
        @include('article.success-popup')
    @endif
</div>
<div class="modal-body">
  Nomor Antrian Anda: <span id="nomorAntrian"></span>
</div>

@include('components.footer')

</body>

</html>
<!-- Script JavaScript -->
<script>
  function generateRandomNumber() {
    // Fungsi untuk menghasilkan nomor antrian secara acak
    return Math.floor(Math.random() * 20) + 1;
  }

  function showNomorAntrianModal() {
    // Mendapatkan nomor antrian secara acak
    var nomorAntrian = generateRandomNumber();

    // Menampilkan nomor antrian dalam modal
    document.getElementById('nomorAntrian').innerText = nomorAntrian;

    // Memunculkan modal
    $('#nomorAntrianModal').modal('show');
  }
</script>
