<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contents')->insert([
            'judul' => 'Penyakit Flu',
            'penulis' => 'Aberforth',
            'status' => True,
            'isi' => "Influenza adalah penyakit pernapasan akut yang disebabkan oleh virus influenza. Virus ini tergolong dalam keluarga Orthomyxoviridae dan terdiri dari tiga jenis utama: A, B, dan C. Penyakit ini menyebar melalui udara dan dapat dengan mudah menular dari satu individu ke individu lainnya.
            
            \nPenyebab:
            \nVirus influenza adalah penyebab utama penyakit flu. Virus ini dapat bermutasi dengan cepat, sehingga menyebabkan terjadinya flu musiman yang berbeda setiap tahunnya. Serangan virus influenza terutama mempengaruhi saluran pernapasan atas, termasuk hidung, tenggorokan, dan paru-paru.
            
            \nGejala umum penyakit influenza melibatkan demam, batuk, pilek, sakit tenggorokan, nyeri otot, kelelahan, dan mungkin disertai dengan sakit kepala. Beberapa individu, terutama yang memiliki sistem kekebalan tubuh yang lemah, dapat mengalami komplikasi serius, seperti pneumonia..
            
            \nPenyebaran:
            \nFlu menyebar melalui percikan kecil yang dilepaskan ke udara saat seseorang yang terinfeksi batuk, bersin, atau berbicara. Virus dapat menempel pada benda-benda di sekitar, dan individu dapat tertular melalui kontak dengan benda-benda tersebut atau melalui kontak langsung dengan individu yang terinfeksi.
            
            \nPencegahan:
            \nLangkah-langkah pencegahan yang efektif melibatkan vaksinasi tahunan, terutama bagi kelompok rentan seperti anak-anak, orang tua, dan individu dengan kondisi medis yang mendasarinya. Selain itu, praktik kebersihan yang baik, seperti mencuci tangan secara teratur dan menggunakan masker, dapat membantu mengurangi risiko penyebaran virus.
            
            \nPengobatan:
            \nPengobatan influenza umumnya melibatkan perawatan simtomatik untuk meredakan gejala, seperti penggunaan antipiretik untuk menurunkan demam dan obat pereda nyeri. Pada beberapa kasus, terutama yang melibatkan komplikasi serius, perawatan medis lebih intens mungkin diperlukanWhen you observe the signs of cat fever, the next step is to seek veterinary care. The veterinarian will conduct an examination and provide appropriate treatment for your cat based on its specific needs and health condition. Typically, when a cat has a fever, the veterinarian will administer medication to reduce the fever, often in the form of liquid medication.",
            'galery' => '/img/articelFlu.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        
        DB::table('contents')->insert([
            'judul' => 'Diare penyakit yang menular',
            'penulis' => 'Sarah Thompson',
            'status' => True,
            'isi' => "Introduction: 
            \nPenyakit diare adalah salah satu masalah kesehatan global yang mempengaruhi jutaan orang setiap tahunnya. Diare ditandai oleh seringnya buang air besar dalam bentuk feses cair, dan dapat disebabkan oleh berbagai faktor, termasuk infeksi, virus, atau kondisi medis tertentu. Artikel ini akan membahas aspek-aspek ilmiah yang terkait dengan penyakit diare, mulai dari penyebab, gejala, hingga upaya pencegahan dan pengobatan.
            
            \nPenyebab Penyakit Diare
            a. Infeksi Bakteri dan Virus:
            Penyebab utama diare adalah infeksi bakteri dan virus. Organisme seperti Escherichia coli (E. coli), Salmonella, dan Norovirus dapat menyebabkan gangguan pada saluran pencernaan, memicu diare.
            
            b. Kondisi Medis:
            Penyakit tertentu seperti sindrom iritasi usus besar (IBS), penyakit radang usus, dan intoleransi makanan tertentu juga dapat menjadi pemicu diare.
            
            \nGejala
            Gejala diare mencakup buang air besar cair yang sering, perut kram, demam, dan dehidrasi. Dehidrasi dapat menjadi komplikasi serius dan memerlukan perhatian medis segera.
            \nPencegahan
            a. Kebersihan dan Sanitasi:
            Cuci tangan dengan sabun setelah menggunakan toilet dan sebelum makan adalah langkah penting dalam mencegah penyebaran penyakit diare.
            
            b. Imunisasi:
            Vaksinasi dapat memberikan perlindungan terhadap beberapa jenis infeksi yang dapat menyebabkan diare.",
            'galery' => '/img/articelDiare.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        
        DB::table('contents')->insert([
            'judul' => 'Penyakit Demam: Tinjauan Ilmiah tentang Gejala, Penyebab, dan Pengobatan',
            'penulis' => 'Bobby Stuart',
            'status' => True,
            'isi' => "Pick your moment.
            \nPenyakit demam merupakan suatu kondisi kesehatan yang sering dihadapi oleh manusia. Artikel ini bertujuan untuk memberikan pemahaman ilmiah yang lebih dalam mengenai penyakit demam, termasuk gejala, penyebab, serta metode pengobatan yang umumnya digunakan.
            \nDemam adalah respons fisiologis tubuh terhadap berbagai penyakit dan kondisi. Hal ini sering kali disertai dengan peningkatan suhu tubuh, gejala malaise, dan peningkatan denyut jantung. Meskipun demam umumnya merupakan indikasi bahwa tubuh sedang melawan infeksi atau gangguan lainnya, pemahaman mendalam tentang penyakit ini sangat penting untuk penanganan yang tepat.
            
            \nDemam dapat disertai oleh sejumlah gejala, termasuk peningkatan suhu tubuh, kelelahan, kehilangan nafsu makan, dan nyeri otot. Suhu tubuh yang diukur di atas batas normal (37.5°C atau 99.5°F) dapat dianggap sebagai demam.
            \nPenyakit demam dapat disebabkan oleh berbagai faktor, termasuk infeksi bakteri, virus, parasit, atau bahkan kondisi medis tertentu seperti kanker. Sistem kekebalan tubuh yang merespons terhadap patogen atau bahan asing dapat memicu reaksi demam sebagai upaya melawan invasi tersebut.
            
            \nDiagnosis dan pemerikasaan:
            \nPemeriksaan fisik dan anamnesis oleh tenaga medis merupakan langkah awal dalam mendiagnosis penyakit demam. Pemeriksaan lebih lanjut seperti tes darah, tes urine, atau pencitraan medis mungkin diperlukan untuk menentukan penyebab demam dan merencanakan pengobatan yang sesuai.
            
            \nPengobatan dan Tindakan Pencegahan:
            
            \nWatch out for fleas while grooming:
            \nPengobatan demam tergantung pada penyebabnya. Penggunaan antipiretik seperti parasetamol dapat membantu menurunkan suhu tubuh dan meredakan gejala. Penting untuk mengidentifikasi penyebab demam dan mengobati kondisi yang mendasarinya.

            Tindakan pencegahan melibatkan upaya menjaga kebersihan diri, vaksinasi, dan menghindari kontak dengan individu yang mungkin terinfeksi. Pendidikan kesehatan mengenai tanda dan gejala demam juga dapat membantu masyarakat mengambil langkah-langkah pencegahan yang tepat.",
            'galery' => '/img/articelDemam.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        
        DB::table('contents')->insert([
            'judul' => 'Penyakit HIV (Human Immunodeficiency Virus)',
            'penulis' => 'Gabrielle LaFrank',
            'status' => True,
            'isi' => "Penyakit HIV (Human Immunodeficiency Virus) merupakan suatu kondisi yang menyerang sistem kekebalan tubuh manusia. Virus ini menyebabkan kerusakan pada sel-sel sistem kekebalan, yang pada akhirnya dapat mengakibatkan AIDS (Acquired Immunodeficiency Syndrome). Artikel ini membahas asal-usul, mekanisme penyebaran, gejala, diagnosis, serta upaya pencegahan dan pengobatan terkini terkait penyakit HIV.
            \nPenyakit HIV adalah masalah kesehatan global yang signifikan. Virus ini pertama kali diidentifikasi pada awal 1980-an, dan sejak saat itu telah menjadi epidemi global. HIV menyebar melalui kontak dengan cairan tubuh tertentu, terutama darah, cairan vagina, cairan penis, dan air susu ibu.
                
            \nHIV berasal dari keluarga retrovirus dan terdiri dari dua jenis utama: HIV-1 dan HIV-2. HIV-1 merupakan jenis yang paling umum dan dominan secara global. Penelitian menunjukkan bahwa virus ini berasal dari primata di Afrika, dan penularan dari hewan ke manusia (zoonosis) kemungkinan terjadi melalui kontak langsung dengan darah primata yang terinfeksi.
            
            \nPenyakit HIV menyebar melalui berbagai cara, termasuk hubungan seksual tanpa pengaman, penggunaan jarum suntik bersama-sama, dan dari ibu ke anak selama persalinan atau menyusui. Virus dapat memasuki tubuh melalui luka terbuka atau selaput lendir.
            
            \nInfeksi awal HIV mungkin tidak menunjukkan gejala yang jelas. Namun, seiring berjalannya waktu, virus dapat merusak sistem kekebalan, menyebabkan gejala seperti demam, nyeri otot, dan pembengkakan kelenjar getah bening. Penyakit HIV berkembang menjadi AIDS ketika sistem kekebalan tubuh sangat lemah, membuat individu rentan terhadap infeksi oportunistik dan penyakit lainnya.
            
            \nPenting untuk mendeteksi infeksi HIV sejak dini. Tes HIV dapat dilakukan dengan mendeteksi antibodi atau antigen HIV dalam darah. Perkembangan teknologi telah memungkinkan pengembangan tes cepat dan akurat.
            
            \nPencegahan HIV melibatkan pendidikan, promosi perilaku seksual yang aman, penggunaan kondom, dan penggunaan jarum suntik bersih. Selain itu, terdapat program pencegahan penularan dari ibu ke anak selama kehamilan, persalinan, dan menyusui.
            
            \nMeskipun belum ada vaksin untuk mencegah HIV, pengobatan antiretroviral (ARV) dapat mengontrol perkembangan virus. Terapi ARV dapat membantu memperlambat kerusakan sistem kekebalan dan meningkatkan harapan hidup individu yang hidup dengan HIV.
            
            \nPenyakit HIV tetap menjadi tantangan global yang memerlukan upaya kolaboratif dalam pendidikan, pencegahan, dan pengobatan. Melalui pemahaman mendalam tentang aspek-aspek penyakit ini, kita dapat meminimalkan dampaknya dan meningkatkan kualitas hidup individu yang terkena HIV.",
            'galery' => '/img/articelHIV.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        
        DB::table('contents')->insert([
            'judul' => 'CORONA PENYAKIT BERBAHAYA',
            'penulis' => 'Azalea Yumiko',
            'status' => True,
            'isi' => "Penyakit Corona, yang secara resmi dikenal sebagai COVID-19, telah menjadi pandemi global yang mempengaruhi berbagai aspek kehidupan manusia. Artikel ilmiah ini bertujuan untuk menguraikan karakteristik virus penyebabnya, penularan, dan pendekatan pengelolaan yang dapat diambil untuk memitigasi dampaknya.
            
            \nPendahuluan:
            Sejak identifikasinya pertama kali di Kota Wuhan, Provinsi Hubei, Tiongkok pada akhir tahun 2019, COVID-19 telah menyebar dengan cepat dan menyebabkan tantangan serius bagi sistem kesehatan dunia. Virus penyebabnya, yaitu Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV-2), memiliki sejumlah karakteristik yang memengaruhi penularan dan dampak klinis pada manusia.
            \nKarakteristik Virus SARS-CoV-2:
            SARS-CoV-2 termasuk dalam keluarga virus Coronaviridae dan memiliki struktur genom RNA. Spike protein pada permukaan virus berperan dalam penempelan pada sel manusia melalui reseptor ACE2. Pemahaman mendalam terhadap struktur dan fungsionalitas virus ini merupakan langkah kritis dalam pengembangan strategi pencegahan dan pengobatan.
            
            \nPenularan dan Perjalanan Penyakit:
            Penularan utama COVID-19 terjadi melalui droplet pernapasan yang dihasilkan saat batuk atau bersin oleh individu yang terinfeksi. Virus dapat menempel pada permukaan dan bertahan untuk jangka waktu tertentu. Perjalanan penyakit dapat bervariasi dari tanpa gejala hingga gejala berat, termasuk pneumonia dan gangguan pernapasan yang mengancam jiwa.
            \n Tindakan Pencegahan dan Pengelolaan:
            Pencegahan penularan melibatkan praktik-praktik higienis, seperti mencuci tangan secara teratur, menggunakan masker, dan menjaga jarak fisik. Pengelolaan individu yang terinfeksi mencakup isolasi, perawatan suportif, dan terapi khusus dalam kasus-kasus yang lebih serius. Vaksinasi massal juga menjadi kunci dalam mengendalikan penyebaran virus ini.
            \nDampak Sosial dan Ekonomi:
            Selain dampak kesehatan, COVID-19 juga memberikan dampak signifikan terhadap aspek sosial dan ekonomi. Pembatasan pergerakan, penutupan bisnis, dan perubahan dalam pola konsumsi telah menyebabkan tantangan besar bagi masyarakat global.",
            'galery' => '/img/articelCorona.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('contents')->insert([
            'judul' => 'Tuberkulosis (TBC) - Penyakit Menular yang Terkendali',
            'penulis' => 'Regina Sienra',
            'status' => True,
            'isi' => "Tuberkulosis (TBC) merupakan penyakit menular yang disebabkan oleh bakteri Mycobacterium tuberculosis. Meskipun telah ada perbaikan signifikan dalam pencegahan dan pengobatan, TBC tetap menjadi masalah kesehatan global yang signifikan. Artikel ini akan membahas aspek-aspek penting terkait penyakit TBC, termasuk etiologi, epidemiologi, manifestasi klinis, metode diagnostik, dan upaya pengendalian. 
            \nPenyebab utama TBC adalah Mycobacterium tuberculosis, bakteri aerobik obligat yang memiliki dinding sel yang tebal. Bakteri ini dapat bertahan dalam kondisi yang sulit, seperti di dalam makrofag paru-paru manusia, yang menjadi tempat utama infeksi.
            Penyebaran TBC terkait erat dengan faktor-faktor sosial ekonomi dan kondisi lingkungan. Negara-negara dengan akses terbatas terhadap pelayanan kesehatan, kepadatan penduduk tinggi, dan tingkat kemiskinan yang signifikan memiliki risiko lebih tinggi terhadap penyebaran TBC. Selain itu, resistensi obat terhadap bakteri TBC juga menjadi masalah serius.”
            
            \nTBC dapat menyerang berbagai organ tubuh, tetapi paru-paru adalah tempat paling umum infeksi. Gejala klinis utama TBC paru meliputi batuk yang berlangsung lebih dari tiga minggu, demam, berat badan menurun, dan keringat malam. Selain itu, TBC ekstraparu dapat menyebabkan gejala pada organ lain, seperti tulang, ginjal, dan otak.
            
            \nDiagnosa TBC melibatkan serangkaian tes, termasuk pemeriksaan dahak mikroskopis untuk mendeteksi bakteri, uji kulit (Mantoux test), dan pemeriksaan gambaran radiologi. Pengembangan metode diagnostik yang lebih cepat dan akurat terus menjadi fokus penelitian untuk mempercepat identifikasi kasus TBC.",
            'galery' => '/img/articelTbc.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

    }
}