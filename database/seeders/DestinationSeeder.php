<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            
  [
    "id" => 1,
    "kategori" => 'wisata',
    "nama" => 'Pemandian Alam Sumber Ngenep',
    "dusun" => 'Dusun Babakan',
    "deskripsi" => 'Mata air alami yang jernih dan menyegarkan, dikelilingi pepohonan rindang. Cocok untuk relaksasi keluarga.',
    "deskripsi_panjang" => 'Mata air alami yang jernih dan menyegarkan, dikelilingi pepohonan rindang. Tempat ini merupakan destinasi favorit keluarga untuk menghabiskan akhir pekan. Airnya yang dingin dan bersih langsung berasal dari mata air pegunungan, dipercaya membawa kesegaran tubuh dan pikiran. Area ini dikelola langsung oleh BUMDes Ngenep dengan mengedepankan kebersihan dan kelestarian alam sekitar.',
    "gambar" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6mBWdQb6m7kokPNIkeTrCypdRwuMBlW5Nx_KVgTlJ1PxwR-Muw1aQbz0f&s=10',
    "ikon" => "Camera",
    "jamBuka" => '07:00 - 17:00 WIB',
    "harga" => 'Rp 5.000 / Orang',
    "fasilitas" => ['Area Parkir Luas', 'Kamar Ganti & Bilas', 'Warung Makan Tradisional', 'Gazebo Istirahat', 'Mushola'],
    "mapLink" => 'https://maps.google.com',
    "galeri" => [
      'https://images.unsplash.com/photo-1544198365-f5d60b6d8190?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1505051508008-923feaf90180?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1437482078695-73f5ca6c96e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
    ]
  ],
  [
    "id" => 2,
    "kategori" => 'kuliner',
    "nama" => 'Sentra Keripik Tempe Krajan',
    "dusun" => 'Dusun Babakan',
    "deskripsi" => 'Pusat produksi keripik tempe renyah dengan resep turun-temurun. Tersedia berbagai varian rasa.',
    "deskripsi_panjang" => 'Pusat produksi keripik tempe renyah dengan resep turun-temurun asli Desa Ngenep. Anda bisa melihat langsung proses pembuatannya mulai dari peragian kedelai, pemotongan tipis, hingga proses penggorengan menggunakan tungku kayu yang memberikan aroma khas. Tersedia berbagai varian rasa mulai dari original, pedas manis, hingga rasa keju.',
    "gambar" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQVex0JDoq_Auyipa9OunjureOJDqA9vygfpoilpuaFrVoGe8k1djtabBu&s=10',
    "ikon" => "Utensils",
    "jamBuka" => '08:00 - 16:00 WIB',
    "harga" => 'Mulai Rp 10.000 / Bungkus',
    "fasilitas" => ['Showroom Oleh-oleh', 'Tur Proses Pembuatan', 'Area Parkir', 'Toilet'],
    "mapLink" => 'https://maps.google.com',
    "galeri" => [
      'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1585032226651-759b368d7246?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1621939514649-280e2ee25f60?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1596662951482-0c4ba74a6df6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
    ]
  ],
  [
    "id" => 3,
    "kategori" => 'umkm',
    "nama" => 'Kerajinan Anyaman Bambu',
    "dusun" => 'Dusun Babakan',
    "deskripsi" => 'Produk anyaman bambu berkualitas tinggi yang dibuat oleh tangan terampil warga lokal. Mulai dari perabotan hingga hiasan.',
    "deskripsi_panjang" => 'Produk anyaman bambu berkualitas tinggi yang dibuat oleh tangan terampil warga lokal. Kelompok pengrajin ini telah berdiri sejak puluhan tahun lalu dan memproduksi berbagai macam barang mulai dari perabotan rumah tangga, perlengkapan dapur (seperti tampah dan rinjing), hingga hiasan dinding estetis yang sudah dipasarkan hingga ke luar kota.',
    "gambar" => 'https://images.unsplash.com/photo-1558603668-6570496b66f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
    "ikon" => "Store",
    "jamBuka" => '09:00 - 15:00 WIB',
    "harga" => 'Rp 15.000 - Rp 150.000',
    "fasilitas" => ['Galeri Produk', 'Pemesanan Custom', 'Workshop Anyaman (By Request)'],
    "mapLink" => 'https://maps.google.com',
    "galeri" => [
      'https://images.unsplash.com/photo-1558603668-6570496b66f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1550989460-0adf9ea622e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1606240724602-5b21f896eae8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1516962215378-7fa2e137ae93?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
    ]
  ],
  [
    "id" => 4,
    "kategori" => 'wisata',
    "nama" => 'Agrowisata Petik Apel',
    "dusun" => 'Dusun Curahkembang',
    "deskripsi" => 'Rasakan sensasi memetik buah apel segar langsung dari pohonnya sambil menikmati udara sejuk perbukitan.',
    "deskripsi_panjang" => 'Wisata edukasi petik apel yang cocok untuk segala usia. Pengunjung tidak hanya bisa memetik dan makan sepuasnya di kebun, tapi juga belajar cara merawat pohon apel langsung dari ahlinya. Hamparan kebun apel yang hijau memberikan pemandangan yang memanjakan mata, sangat pas untuk melepas penat dari hiruk pikuk perkotaan.',
    "gambar" => 'https://images.unsplash.com/photo-1600917016506-556622b74303?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8a2VidW4lMjBhcGVsfGVufDB8fDB8fHww',
    "ikon" => "Camera",
    "jamBuka" => '08:00 - 15:00 WIB',
    "harga" => 'Rp 25.000 / Orang',
    "fasilitas" => ['Keranjang Petik', 'Pemandu Kebun', 'Area Piknik', 'Toilet Umum'],
    "mapLink" => 'https://maps.google.com',
    "galeri" => [
      'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4dJ2MYGusf9jcejZ0FvuZmlRX9r4Si_7eAsbjUAZJwksnfvupNCYOCRA&s=10',
      'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5DuOuwnOenWfv1f5krdyB8S8erhMP1hJoGtYltk6VvWGXBLeLyCeUycAG&s=10',
      'https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1610832958506-aa56368176cf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
    ]
  ],
  [
    "id" => 5,
    "kategori" => 'kuliner',
    "nama" => 'Kopi Seduh Lokal Sumber',
    "dusun" => 'Dusun Curahkembang',
    "deskripsi" => 'Nikmati seduhan kopi robusta dan arabika hasil panen petani lokal dengan aroma khas yang memikat pecinta kopi.',
    "deskripsi_panjang" => 'Berada di ketinggian yang pas, Dusun Sumber memiliki hasil panen kopi yang luar biasa. Warung Kopi Seduh Lokal menyajikan biji kopi yang di-*roasting* sendiri oleh masyarakat setempat secara tradisional. Nikmati secangkir kopi panas ditemani dengan pemandangan pegunungan dan udara dingin pedesaan, serta sajian singkong goreng hangat.',
    "gambar" => 'https://images.unsplash.com/photo-1559525839-b184a4d698c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
    "ikon" => "Utensils",
    "jamBuka" => '15:00 - 23:00 WIB',
    "harga" => 'Rp 8.000 - Rp 25.000',
    "fasilitas" => ['Wi-Fi Gratis', 'Area Semi Outdoor', 'Live Music (Sabtu Malam)', 'Toilet Bersih'],
    "mapLink" => 'https://maps.google.com',
    "galeri" => [
      'https://images.unsplash.com/photo-1559525839-b184a4d698c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1511920170033-f8396924c348?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1497935586351-b67a49e012bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1442512595331-e89e73853f31?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
    ]
  ],
  [
    "id" => 6,
    "kategori" => 'umkm',
    "nama" => 'Pusat Batik Tulis Lokal',
    "dusun" => 'Dusun Genitri',
    "deskripsi" => 'Galeri dan bengkel produksi batik tulis dengan corak khas yang menceritakan sejarah dan budaya Desa Ngenep.',
    "deskripsi_panjang" => 'Desa Ngenep bangga memiliki pengerajin batik tulis asli. Corak batik Ngenep mengambil inspirasi dari kekayaan alam sekitarnya seperti daun bambu, aliran sungai, dan kopi. Anda dapat membeli kain batik tulis otentik secara langsung, atau bahkan memesan paket wisata edukasi untuk membatik sendiri sehelai kain bersama keluarga atau rekan kerja.',
    "gambar" => 'https://images.unsplash.com/photo-1604973104381-870c92f10343?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmF0aWt8ZW58MHx8MHx8fDA%3D',
    "ikon" => "Store",
    "jamBuka" => '08:00 - 16:30 WIB',
    "harga" => 'Mulai Rp 200.000 / Lembar',
    "fasilitas" => ['Galeri Butik', 'Area Workshop Membatik', 'Konsultasi Desain', 'Ruang Tunggu Nyaman'],
    "mapLink" => 'https://maps.google.com',
    "galeri" => [
      'https://images.unsplash.com/photo-1601004890684-d8cbf643f5f2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1606760227091-3dd870d97f1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1528698827591-e19ccd7bc23d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
    ]
  ],
  [
    "id" => 7,
    "kategori" => 'wisata',
    "nama" => 'Camping Ground Hutan Pinus',
    "dusun" => 'Dusun Genitri',
    "deskripsi" => 'Area perkemahan yang asri dan sejuk di tengah hutan pinus. Lokasi sempurna untuk melihat matahari terbit.',
    "deskripsi_panjang" => 'Lari sejenak dari rutinitas dan rasakan sensasi menginap di alam terbuka. Hutan Pinus Ngenep menawarkan area perkemahan yang dikelola profesional dengan fasilitas lengkap. Keindahan sejati tempat ini terlihat pada pagi hari ketika kabut perlahan turun menyelimuti pepohonan seiring dengan terbitnya matahari. Sangat direkomendasikan untuk komunitas atau outbond perusahaan.',
    "gambar" => 'https://images.unsplash.com/photo-1566780857657-115d3fef5448?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGh1dGFuJTIwcGludXN8ZW58MHx8MHx8fDA%3D',
    "ikon" => "Camera",
    "jamBuka" => '24 Jam',
    "harga" => 'Rp 35.000 / Tenda',
    "fasilitas" => ['Sewa Tenda & Alat Camping', 'Kamar Mandi Air Bersih', 'Kayu Bakar Api Unggun', 'Warung 24 Jam', 'Pos Keamanan'],
    "mapLink" => 'https://maps.google.com',
    "galeri" => [
      'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs23xpIlYfB5bm8iVhfGlwCwJtBdzvQ-ivl7_90GdFwrfOpBl1r0wfuDc&s=10',
      'https://images.unsplash.com/photo-1523987355523-c7b5b0dd90a7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1478131143081-80f7f84ca84d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1533873984035-25970ab07461?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
    ]
  ],
  [
    "id" => 8,
    "kategori" => 'kuliner',
    "nama" => 'Warung Makan Khas Pedesaan "Bu Ti"',
    "dusun" => 'Dusun Kubung',
    "deskripsi" => 'Sajian makanan rumah tradisional yang lezat dengan sambal uleg segar dan ikan wader goreng krispi.',
    "deskripsi_panjang" => 'Warung legend yang sudah berjualan lebih dari dua dekade. Terkenal dengan olahan sayur lodeh, wader goreng, ayam kampung bumbu rempah, dan sambal terasinya yang nendang. Pengunjung akan menikmati makanan di balai bambu di tepi sawah, ditemani semilir angin yang sejuk. Sangat cocok dinikmati beramai-ramai sepulang dari tempat wisata.',
    "gambar" => 'https://images.unsplash.com/photo-1555126634-323283e090fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
    "ikon" => "Utensils",
    "jamBuka" => '09:00 - 18:00 WIB',
    "harga" => 'Mulai Rp 12.000 / Porsi',
    "fasilitas" => ['Lesehan Gazebo', 'Parkir Motor/Mobil', 'Mushola Tradisional', 'Toilet'],
    "mapLink" => 'https://maps.google.com',
    "galeri" => [
      'https://images.unsplash.com/photo-1555126634-323283e090fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1626844131082-256783844137?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
      'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOXybIUBWPgHthg9OF0DQ9CZrBvCzEYhq_poghVOzXvpfA0WiITHVPuSn0&s=10'
    ]
  ],
  [
    "id" => 9,
    "kategori" => 'umkm',
    "nama" => 'Kelompok Tani Madu Hutan',
    "dusun" => 'Dusun Kubung',
    "deskripsi" => 'Pusat budidaya lebah madu murni berkualitas tinggi. Produk madu yang terjamin keaslian dan khasiatnya.',
    "deskripsi_panjang" => 'Dikelola secara kelompok oleh masyarakat Dusun Bawah yang peduli terhadap pelestarian lebah. Madu yang dihasilkan sangat terjamin kualitasnya tanpa campuran gula maupun pengawet. Pengunjung juga bisa belajar mengenai proses panen madu dan manfaat berbagai jenis madu yang dihasilkan, seperti madu karet, madu multiflora, dan madu randu.',
    "gambar" => 'https://images.unsplash.com/photo-1780466744208-da9801cf1f8c?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    "ikon" => "Store",
    "jamBuka" => '08:00 - 16:00 WIB',
    "harga" => 'Mulai Rp 65.000 / Botol',
    "fasilitas" => ['Area Peternakan Lebah', 'Tes Cicip Madu', 'Pusat Oleh-Oleh', 'Edukasi Khasiat Madu'],
    "mapLink" => 'https://maps.google.com',
    "galeri" => [
      'https://plus.unsplash.com/premium_photo-1663957861996-8093b48a22e6?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWFkdXxlbnwwfHwwfHx8MA%3D%3D',
      'https://images.unsplash.com/photo-1665473052284-164335672208?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bWFkdSUyMG1lbnRhaHxlbnwwfHwwfHx8MA%3D%3D',
      'https://images.unsplash.com/photo-1536788567643-8c2368376526?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8bWFkdSUyMG1lbnRhaHxlbnwwfHwwfHx8MA%3D%3D',
      'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyBGC2hbqNrDkDuXHVqk9HLgg9cXfypSyB20WZUQvRihIvxVg1huWM1oKU&s=10'
    ]
  ]

        ];

        foreach ($data as $item) {
            // Format icon string properly
            $item['ikon'] = strtolower($item['ikon']);
            Destination::create($item);
        }

        // Auto-generate padding items
        $dusunNames = [
            'Dusun Babakan', 'Dusun Curahkembang', 'Dusun Genitri', 'Dusun Lowoksari',
            'Dusun Mojosari', 'Dusun Ngenep', 'Dusun Tumpangrejo', 'Dusun Kubung'
        ];
        
        $namaWisata = ['Bukit Hijau', 'Pemandian Tirta', 'Taman Bunga', 'Agrowisata', 'Area Camping', 'Goa Sejarah', 'Wisata Sawah', 'Jalur Sepeda'];
        $namaKuliner = ['Warung Pecel', 'Pusat Oleh-Oleh', 'Kopi Seduh', 'Lesehan Gurame', 'Rujak Cingur', 'Es Dawet Ayu', 'Bakso Ngenep', 'Sate Ayam Madura'];
        $namaUmkm = ['Kerajinan Bambu', 'Anyaman Rotan', 'Batik Tulis', 'Keripik Singkong', 'Pabrik Tahu', 'Budidaya Jamur', 'Produksi Gula Merah', 'Garmen Lokal'];

        foreach ($dusunNames as $dusunName) {
            $currentCount = Destination::where('dusun', $dusunName)->count();
            for ($i = $currentCount; $i < 6; $i++) {
                $kategoriIndex = $i % 3;
                $kategoriName = ['wisata', 'kuliner', 'umkm'][$kategoriIndex];
                
                $generatedName = '';
                if ($kategoriName === 'wisata') $generatedName = $namaWisata[$i % count($namaWisata)] . ' ' . $dusunName;
                else if ($kategoriName === 'kuliner') $generatedName = $namaKuliner[$i % count($namaKuliner)] . ' ' . $dusunName;
                else $generatedName = $namaUmkm[$i % count($namaUmkm)] . ' ' . $dusunName;

                $ikonArr = ['camera', 'utensils', 'store'];

                Destination::create([
                    'kategori' => $kategoriName,
                    'nama' => $generatedName,
                    'dusun' => $dusunName,
                    'deskripsi' => "$generatedName adalah salah satu potensi unggulan di bidang $kategoriName.",
                    'deskripsi_panjang' => "$generatedName merupakan salah satu daya tarik utama di $dusunName. Lokasi ini terus dikembangkan oleh warga sekitar dan pemerintah desa agar mampu meningkatkan perekonomian masyarakat.",
                    'gambar' => 'https://images.unsplash.com/photo-1596401057633-54a8fe8ef647?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                    'ikon' => $ikonArr[$kategoriIndex],
                    'jamBuka' => '08:00 - 16:00 WIB',
                    'harga' => 'Bervariasi',
                    'fasilitas' => ['Parkir', 'Toilet'],
                    'mapLink' => 'https://maps.google.com',
                    'galeri' => []
                ]);
            }
        }
    }
}
