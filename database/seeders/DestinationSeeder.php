<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // ================= 1. DUSUN NGENEP KRAJAN =================
            [
                "id" => 1,
                "kategori" => 'umkm',
                "nama" => 'Batik Krajan DW',
                "dusun" => 'Dusun Ngenep Krajan',
                "deskripsi" => 'Galeri batik dengan produk paten motif Kuwung ikon buah kates/pepaya[cite: 1].',
                "deskripsi_panjang" => 'Batik Krajan DW mengangkat ikon Desa Ngenep yaitu buah kates/pepaya[cite: 1]. Logo paten milik galeri batik Ibu Dewi ini dirancang membentuk Motif Kuwung dan menjadi produk resmi khas Desa Ngenep[cite: 1]. Menjual batik tulis dan batik cap[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1604973104381-870c92f10343?fm=jpg&q=80&w=600',
                "ikon" => "store",
                "jamBuka" => '08:00 - 16:00 WIB',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Galeri Batik', 'Area Parkir'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 2,
                "kategori" => 'umkm',
                "nama" => 'Batik Eunona',
                "dusun" => 'Dusun Ngenep Krajan',
                "deskripsi" => 'Salah satu potensi unggulan pengrajin batik yang ada di wilayah Krajan[cite: 1].',
                "deskripsi_panjang" => 'Batik Eunona merupakan salah satu potensi unggulan dusun di bidang kerajinan membatik, melengkapi kekayaan budaya dan produk tekstil lokal di Dusun Ngenep Krajan[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => '08:00 - 16:00 WIB',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Galeri Batik', 'Area Parkir'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 3,
                "kategori" => 'umkm',
                "nama" => 'Budi Fiber',
                "dusun" => 'Dusun Ngenep Krajan',
                "deskripsi" => 'Kerajinan properti, pot bunga, dan pilar dekorasi berskala ekspor[cite: 1].',
                "deskripsi_panjang" => 'Usaha properti dan dekorasi milik perorangan yang berdiri sejak 2006[cite: 1]. Memproduksi vas, pilar, dan pot bunga dekorasi[cite: 1]. Jangkauan pengirimannya sudah sampai luar pulau seperti Kalimantan dan Sulawesi[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1558603668-6570496b66f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => '08:00 - 16:00 WIB',
                "harga" => 'Sesuai Pesanan',
                "fasilitas" => ['Workshop', 'Pemesanan Custom'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 4,
                "kategori" => 'umkm',
                "nama" => 'Pabrik Tahu Ngenep Utara',
                "dusun" => 'Dusun Ngenep Krajan',
                "deskripsi" => 'Pabrik tahu milik Bapak Samuji dengan produksi mencapai 400 kg per hari[cite: 1].',
                "deskripsi_panjang" => 'Berdiri sejak 2008, pabrik tahu ini memproduksi 4 kwintal atau 400 kg per hari[cite: 1]. Pabrik beroperasi tanpa menyisakan limbah, karena air sisa pengolahan dijual untuk susu kedelai dan ampasnya untuk pakan ternak[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1596662951482-0c4ba74a6df6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => '06:00 - 11:00 WIB',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Pembelian Langsung', 'Area Produksi'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 5,
                "kategori" => 'umkm',
                "nama" => 'Anyaman Al-Walid',
                "dusun" => 'Dusun Ngenep Krajan',
                "deskripsi" => 'Pusat kerajinan anyaman sintetis yang berada di area Ngenep Utara[cite: 1].',
                "deskripsi_panjang" => 'Anyaman Al-Walid adalah salah satu potensi kerajinan unggulan di Dusun Ngenep Krajan yang memproduksi barang-barang berbahan dasar anyaman sintetis bernilai jual tinggi[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1516962215378-7fa2e137ae93?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => '08:00 - 16:00 WIB',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Galeri Produk', 'Pemesanan Custom'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 6,
                "kategori" => 'wisata',
                "nama" => 'Sumber Umbulan Ngenep Krajan',
                "dusun" => 'Dusun Ngenep Krajan',
                "deskripsi" => 'Wisata mata air bersejarah yang dikelilingi situs bebatuan peninggalan zaman dahulu[cite: 1].',
                "deskripsi_panjang" => 'Dikenal juga dengan Sumber Umbulan Lowoksari[cite: 1]. Terdapat sisa-sisa situs peninggalan zaman dahulu berupa tatanan batu[cite: 1]. Tempat ini memiliki kegiatan rutin seperti Grebek Suro yang diisi dengan pertunjukan gamelan[cite: 1].',
                "gambar" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6mBWdQb6m7kokPNIkeTrCypdRwuMBlW5Nx_KVgTlJ1PxwR-Muw1aQbz0f&s=10',
                "ikon" => "camera",
                "jamBuka" => '24 Jam (Izin Kepala Dusun untuk Camping)',
                "harga" => 'Gratis',
                "fasilitas" => ['Mata Air', 'Area Camping', 'Situs Bersejarah'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 7,
                "kategori" => 'wisata',
                "nama" => 'Sumber Umbulan Ngenep Utara',
                "dusun" => 'Dusun Ngenep Krajan',
                "deskripsi" => 'Mata air sakral untuk wisata edukasi dan wisata religi warga setempat[cite: 1].',
                "deskripsi_panjang" => 'Mata air ini dianggap sakral dan sering digunakan untuk Tradisi Doa Bersama di Bulan Suro[cite: 1]. Berada di perbatasan Desa Ngenep dan Desa Langlang, tempat ini diarahkan sebagai wisata edukasi yang dirawat oleh relawan[cite: 1].',
                "gambar" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6mBWdQb6m7kokPNIkeTrCypdRwuMBlW5Nx_KVgTlJ1PxwR-Muw1aQbz0f&s=10',
                "ikon" => "camera",
                "jamBuka" => '07:00 - 17:00 WIB',
                "harga" => 'Gratis',
                "fasilitas" => ['Mata Air', 'Musholla', 'Area Edukasi'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],

            // ================= 2. DUSUN LOWOKSARI =================
            [
                "id" => 8,
                "kategori" => 'umkm',
                "nama" => 'Bursa Mebel Pak Adiyono',
                "dusun" => 'Dusun Lowoksari',
                "deskripsi" => 'Produksi mebel springbed dan kursi dengan kualitas ekspor hingga luar pulau[cite: 1].',
                "deskripsi_panjang" => 'Usaha mebel Bapak Adiyono telah berdiri sejak tahun 1985[cite: 1]. Mampu memproduksi rata-rata 7 unit per bulan, produk usaha ini telah diekspor hingga menjangkau Pulau Bali dan Kalimantan[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1550989460-0adf9ea622e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => '08:00 - 16:00 WIB',
                "harga" => 'Mulai Rp 2.000.000',
                "fasilitas" => ['Workshop', 'Pemesanan Custom'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 9,
                "kategori" => 'wisata',
                "nama" => 'Wisata DAM Cokro',
                "dusun" => 'Dusun Lowoksari',
                "deskripsi" => 'Wisata pemandian umum yang dikelola Karang Taruna RW 5 dengan tiket masuk seikhlasnya[cite: 1].',
                "deskripsi_panjang" => 'DAM Cokro buka setiap hari dengan penghalang air dipasang pada pukul 10.00-15.00 WIB[cite: 1]. Pemasukan dari stand UMKM sekitar kawasan ini disalurkan untuk keperluan kas dusun, kas karang taruna, TPQ, dan santunan janda[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1544198365-f5d60b6d8190?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "camera",
                "jamBuka" => '08:00 - 17:00 WIB',
                "harga" => 'Seikhlasnya',
                "fasilitas" => ['Pemandian Umum', 'Stand UMKM', 'Parkir'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],

            // ================= 3. DUSUN KUBUNG =================
            [
                "id" => 10,
                "kategori" => 'kuliner',
                "nama" => 'Keripik Samiler Ibu Sumaiyah & Pak Radun',
                "dusun" => 'Dusun Kubung',
                "deskripsi" => 'Usaha keripik hasil olahan singkong mentah yang laris di kalangan masyarakat[cite: 1].',
                "deskripsi_panjang" => 'Berdiri sejak tahun 2004, usaha ini menjual hasil olahan keripik singkong yang dijual mentah per kilo[cite: 1]. Tempat ini beroperasi mulai dari sehabis subuh hingga pagi hari[cite: 1].',
                "gambar" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQVex0JDoq_Auyipa9OunjureOJDqA9vygfpoilpuaFrVoGe8k1djtabBu&s=10',
                "ikon" => "utensils",
                "jamBuka" => '05:00 - 10:00 WIB',
                "harga" => 'Bervariasi (Per Kilo)',
                "fasilitas" => ['Pembelian Langsung'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 11,
                "kategori" => 'kuliner',
                "nama" => 'Keripik Puli dari Nasi Ibu Pipit',
                "dusun" => 'Dusun Kubung',
                "deskripsi" => 'Usaha keripik olahan berbahan dasar nasi yang dikeringkan[cite: 1].',
                "deskripsi_panjang" => 'Sama halnya dengan kerupuk tradisional lainnya di Desa Ngenep, keripik puli milik Ibu Pipit di Dusun Kubung ini diolah menggunakan bahan dasar nasi yang dikeringkan menjadi camilan gurih[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "utensils",
                "jamBuka" => '07:00 - 15:00 WIB',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Pembelian Langsung'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 12,
                "kategori" => 'umkm',
                "nama" => 'Mebel Suryo Bapak Didi Purwanto',
                "dusun" => 'Dusun Kubung',
                "deskripsi" => 'Pusat produksi mebel dipan, kursi, dan meja berkualitas tinggi[cite: 1].',
                "deskripsi_panjang" => 'Usaha pribadi milik Bapak Didi Purwanto yang memproduksi mebel seperti dipan ranjang, kursi, dan meja[cite: 1]. Produk hasil karyanya sudah sering diekspor sampai ke luar wilayah dusun[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1606240724602-5b21f896eae8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => '08:00 - 16:00 WIB',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Workshop', 'Pemesanan Custom'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 13,
                "kategori" => 'umkm',
                "nama" => 'Sektor Pertanian Dusun Kubung',
                "dusun" => 'Dusun Kubung',
                "deskripsi" => 'Potensi unggulan masyarakat dusun di bidang agraris[cite: 1].',
                "deskripsi_panjang" => 'Pertanian merupakan salah satu potensi ekonomi dan mata pencaharian utama warga Dusun Kubung dalam menyokong ketahanan pangan desa[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1600917016506-556622b74303?fm=jpg&q=80&w=600',
                "ikon" => "store",
                "jamBuka" => '06:00 - 17:00 WIB',
                "harga" => '-',
                "fasilitas" => ['Lahan Pertanian'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],

            // ================= 4. DUSUN MOJOSARI =================
            [
                "id" => 14,
                "kategori" => 'umkm',
                "nama" => 'Perkebunan Tebu Mojosari',
                "dusun" => 'Dusun Mojosari',
                "deskripsi" => 'Lahan budidaya tanaman tebu yang mendominasi sebagian besar lahan dusun[cite: 1].',
                "deskripsi_panjang" => 'Perkebunan tebu menjadi potensi unggulan di Dusun Mojosari[cite: 1]. Banyak lahan masyarakat yang digunakan sebagai media budidaya tebu dan sangat mudah dijumpai di pinggir jalan[cite: 1].',
                "gambar" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4dJ2MYGusf9jcejZ0FvuZmlRX9r4Si_7eAsbjUAZJwksnfvupNCYOCRA&s=10',
                "ikon" => "store",
                "jamBuka" => '06:00 - 16:00 WIB',
                "harga" => '-',
                "fasilitas" => ['Lahan Perkebunan'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 15,
                "kategori" => 'wisata',
                "nama" => 'Wisata Religi Sumber Nyolo',
                "dusun" => 'Dusun Mojosari',
                "deskripsi" => 'Sumber air wisata yang dikelilingi mitos bisa membuat awet muda dan Ngalap Berkah[cite: 1].',
                "deskripsi_panjang" => 'Dikelola sebagai tempat wisata religi sejak tahun 2009[cite: 1]. Selain menjadi kolam pemandian dan tempat Ngalap Berkah, terdapat tradisi adat yang dilakukan oleh warga sekitar pada Malam Satu Suro di lokasi ini[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1505051508008-923feaf90180?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "camera",
                "jamBuka" => '08:00 - 17:00 WIB',
                "harga" => 'Gratis',
                "fasilitas" => ['Kolam Air', 'Area Ritual'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 16,
                "kategori" => 'kuliner',
                "nama" => 'Sentra UMKM Kue Basah & Kering',
                "dusun" => 'Dusun Mojosari',
                "deskripsi" => 'Potensi kuliner desa yang berfokus pada produksi aneka kue tradisional dan modern[cite: 1].',
                "deskripsi_panjang" => 'Dusun Mojosari terkenal aktif dengan UMKM bidang pembuatan kue, baik jenis kue basah maupun kering, untuk melayani kebutuhan harian dan acara khusus warga[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1555126634-323283e090fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "utensils",
                "jamBuka" => '08:00 - 15:00 WIB',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Pemesanan Langsung'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 17,
                "kategori" => 'kuliner',
                "nama" => 'Catering Mojosari',
                "dusun" => 'Dusun Mojosari',
                "deskripsi" => 'Layanan pemesanan makanan partai besar untuk berbagai acara[cite: 1].',
                "deskripsi_panjang" => 'Melengkapi produksi kuenya, Dusun Mojosari juga memiliki layanan usaha catering makanan yang aktif beroperasi untuk memenuhi kebutuhan berbagai hajatan dan kegiatan sosial[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1626844131082-256783844137?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "utensils",
                "jamBuka" => 'Sesuai Pesanan',
                "harga" => 'Sesuai Porsi/Paket',
                "fasilitas" => ['Layanan Pesan Antar'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],

            // ================= 5. DUSUN BABA'AN =================
            [
                "id" => 18,
                "kategori" => 'kuliner',
                "nama" => 'Kerupuk Singkong & Tepung Pak Budi',
                "dusun" => 'Dusun Babaan',
                "deskripsi" => 'Pengolahan dan distribusi kerupuk singkong dan tepung tapioka sejak 2015[cite: 1].',
                "deskripsi_panjang" => 'Usaha milik Pak Budi ini mengolah kerupuk berbahan singkong dari tahap adonan hingga matang[cite: 1]. Pak Budi juga berperan sebagai distributor kerupuk tepung tapioka ke banyak tempat[cite: 1].',
                "gambar" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQVex0JDoq_Auyipa9OunjureOJDqA9vygfpoilpuaFrVoGe8k1djtabBu&s=10',
                "ikon" => "utensils",
                "jamBuka" => '08:00 - 16:00 WIB',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Pemesanan Grosir/Eceran'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 19,
                "kategori" => 'umkm',
                "nama" => 'Budidaya Jamur Tiram',
                "dusun" => 'Dusun Babaan',
                "deskripsi" => 'Budidaya jamur tiram memanfaatkan media kayu dan ruang tertutup[cite: 1].',
                "deskripsi_panjang" => 'Dikelola oleh Pak Tawab (sejak 2016) dan keluarga Pak Sumantri (sejak 2012)[cite: 1]. Ada yang memelihara bibit lanjutan dan ada pula yang memproduksi dari bibit awal hingga jamur siap olah untuk disalurkan ke tengkulak[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1558603668-6570496b66f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => '08:00 - 15:00 WIB',
                "harga" => 'Harga Tengkulak/Eceran',
                "fasilitas" => ['Rumah Produksi/Kumbung'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 20,
                "kategori" => 'kuliner',
                "nama" => 'Susu Sapi Perah Pak Arifin',
                "dusun" => 'Dusun Babaan',
                "deskripsi" => 'Peternakan sapi perah yang menyalurkan susu murni kualitas terbaik ke koperasi[cite: 1].',
                "deskripsi_panjang" => 'Usaha Pak Muhammad Arifin yang sudah berlangsung sejak tahun 2001[cite: 1]. Pak Arifin tergabung dalam Komunitas Sapi Perah Langgeng Mulyo dan menyalurkan puluhan liter susu setiap harinya ke koperasi (Unit Pengolahan Susu)[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1559525839-b184a4d698c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "utensils",
                "jamBuka" => 'Pagi dan Sore',
                "harga" => 'Rp 7.000 / Liter (Harga Koperasi)',
                "fasilitas" => ['Kandang Sapi'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 21,
                "kategori" => 'umkm',
                "nama" => 'Miniatur Sound Horeg',
                "dusun" => 'Dusun Babaan',
                "deskripsi" => 'Industri kreatif pembuatan replika sound horeg milik Pak Roni dan Pak Riyadi[cite: 1].',
                "deskripsi_panjang" => 'Lahir dari inisiatif warga terhadap budaya sound system lokal[cite: 1]. Usaha miniatur rakitan ini pernah menerima pesanan dari luar daerah dan bahkan mendapat sponsorship dari PT Djarum[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1516962215378-7fa2e137ae93?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => 'Sesuai Pesanan',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Pemesanan Custom'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 22,
                "kategori" => 'umkm',
                "nama" => 'Pijat Tunanetra Bapak Dodik',
                "dusun" => 'Dusun Babaan',
                "deskripsi" => 'Praktik pijat bersertifikat resmi oleh Bapak Dodik Yulianto[cite: 1].',
                "deskripsi_panjang" => 'Dimulai sejak 2014, usaha jasa pijat ini sekarang menetap di Dusun Babaan[cite: 1]. Walaupun memiliki keterbatasan fisik, Bapak Dodik telah menempuh kursus sehingga praktiknya saat ini berstatus resmi/bersertifikat[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => '08:00 - Selesai',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Ruang Praktik'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 23,
                "kategori" => 'wisata',
                "nama" => 'Sumber Kiteran',
                "dusun" => 'Dusun Babaan',
                "deskripsi" => 'Mata air sakral untuk kegiatan religi dan Tradisi Bantengan malam Satu Suro[cite: 1].',
                "deskripsi_panjang" => 'Sumber air ini tertutup untuk wisata umum dan berlokasi di dalam Perumahan Bumi Perkasa[cite: 1]. Lokasi ini dijaga sebagai tempat sakral untuk memfasilitasi Tradisi Bantengan warga setempat[cite: 1].',
                "gambar" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6mBWdQb6m7kokPNIkeTrCypdRwuMBlW5Nx_KVgTlJ1PxwR-Muw1aQbz0f&s=10',
                "ikon" => "camera",
                "jamBuka" => 'Khusus',
                "harga" => 'Gratis',
                "fasilitas" => ['Mata Air Tertutup'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 24,
                "kategori" => 'umkm',
                "nama" => 'Pertanian & Perkebunan Babaan',
                "dusun" => 'Dusun Babaan',
                "deskripsi" => 'Lahan luas berisi tanaman padi dan aneka sayur-mayur unggulan[cite: 1].',
                "deskripsi_panjang" => 'Selain menanam komoditas seperti cabai, tomat, dan sawi, area perkebunan (seperti milik Pak Sukirno) juga difungsikan sebagai media praktik bagi mahasiswa dari berbagai universitas[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1600917016506-556622b74303?fm=jpg&q=80&w=600',
                "ikon" => "store",
                "jamBuka" => '06:00 - 17:00 WIB',
                "harga" => '-',
                "fasilitas" => ['Lahan Praktik', 'Area Sawah'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],

            // ================= 6. DUSUN GENITRI =================
            [
                "id" => 25,
                "kategori" => 'kuliner',
                "nama" => 'Keripik Tempe SIOM',
                "dusun" => 'Dusun Genitri',
                "deskripsi" => 'UMKM keripik tempe tepung, rempeyek, dan kerupuk menjes milik Ibu Nur Aini[cite: 1].',
                "deskripsi_panjang" => 'Berdiri sejak 2018, usaha ini memproduksi sendiri bahan tempenya[cite: 1]. Produk dijual Rp 55.000/kg dengan omset bulanan sekitar 1,5 juta rupiah dan status NIB yang sudah halal[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "utensils",
                "jamBuka" => '08:00 - 16:00 WIB',
                "harga" => 'Rp 55.000 / Kg',
                "fasilitas" => ['Pre-Order', 'Pembelian Langsung'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 26,
                "kategori" => 'kuliner',
                "nama" => 'Kue Tradisional Ibu Yuli',
                "dusun" => 'Dusun Genitri',
                "deskripsi" => 'Produksi donat, brownies, nastar, dan aneka kue basah/kering dengan NIB Halal[cite: 1].',
                "deskripsi_panjang" => 'Ibu Fitri Yulianingsih mengelola usaha ini di Genitri sejak 2015[cite: 1]. Memproduksi sus, pastel, roti sobek, hingga nasi tumpeng dengan harga relatif terjangkau Rp 2.500/pcs dan omset mencapai 15 juta per bulan[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1555126634-323283e090fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "utensils",
                "jamBuka" => 'Sesuai Pesanan',
                "harga" => 'Mulai Rp 2.500 / Pcs',
                "fasilitas" => ['Pre-Order'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 27,
                "kategori" => 'umkm',
                "nama" => 'Sektor Pertanian Genitri',
                "dusun" => 'Dusun Genitri',
                "deskripsi" => 'Lahan agraria penopang ekonomi mayoritas warga yang bekerja sebagai buruh tani[cite: 1].',
                "deskripsi_panjang" => 'Sektor pertanian terus dikembangkan dan dikelola secara mandiri oleh masyarakat sekitar, menjadikan pertanian sebagai roda perputaran ekonomi lokal di Dusun Genitri[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1600917016506-556622b74303?fm=jpg&q=80&w=600',
                "ikon" => "store",
                "jamBuka" => '06:00 - 17:00 WIB',
                "harga" => '-',
                "fasilitas" => ['Lahan Sawah'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],

            // ================= 7. DUSUN CURAH KEMBANG =================
            [
                "id" => 28,
                "kategori" => 'umkm',
                "nama" => 'Perkebunan Tebu Curah Kembang',
                "dusun" => 'Dusun Curah Kembang',
                "deskripsi" => 'Perkebunan tebu mandiri yang merupakan potensi unggulan di Curah Kembang[cite: 1].',
                "deskripsi_panjang" => 'Mayoritas masyarakatnya bermata pencaharian sebagai petani tebu dan padi[cite: 1]. Uniknya, sistem pengambilan tebu di area ini tidak diserahkan ke Pemerintah Desa, melainkan langsung disalurkan ke mitra masing-masing petani[cite: 1].',
                "gambar" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4dJ2MYGusf9jcejZ0FvuZmlRX9r4Si_7eAsbjUAZJwksnfvupNCYOCRA&s=10',
                "ikon" => "store",
                "jamBuka" => '06:00 - 16:00 WIB',
                "harga" => '-',
                "fasilitas" => ['Lahan Tebu'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 29,
                "kategori" => 'umkm',
                "nama" => 'PAUD Oma Among',
                "dusun" => 'Dusun Curah Kembang',
                "deskripsi" => 'Satu-satunya instansi pendidikan usia dini resmi yang berada di Dusun Curah Kembang[cite: 1].',
                "deskripsi_panjang" => 'Diampu oleh Ibu Ulung, Pendidikan Anak Usia Dini "Oma Among" ini terbuka untuk masyarakat umum[cite: 1]. Bahkan siswa dari luar Dusun Curah Kembang juga banyak yang bersekolah di tempat ini[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => '07:00 - 11:00 WIB',
                "harga" => '-',
                "fasilitas" => ['Gedung Sekolah', 'Area Bermain Anak'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],

            // ================= 8. DUSUN TUMPANGREJO =================
            [
                "id" => 30,
                "kategori" => 'wisata',
                "nama" => 'Perkebunan Jeruk',
                "dusun" => 'Dusun Tumpangrejo',
                "deskripsi" => 'Kebun komoditas jeruk yang dimiliki hampir oleh seluruh keluarga di dusun[cite: 1].',
                "deskripsi_panjang" => 'Buah jeruk merupakan produk khas di dusun ini[cite: 1]. Setiap lahan jeruk bisa dipanen sebanyak 3 kali dalam satu musim, dan batang pohon jeruknya memiliki usia produksi yang sangat panjang, yakni mencapai 10 tahun[cite: 1].',
                "gambar" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4dJ2MYGusf9jcejZ0FvuZmlRX9r4Si_7eAsbjUAZJwksnfvupNCYOCRA&s=10',
                "ikon" => "camera",
                "jamBuka" => '07:00 - 16:00 WIB',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Wisata Petik Jeruk'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 31,
                "kategori" => 'umkm',
                "nama" => 'Perkebunan Kopi dan Sayur-Mayur',
                "dusun" => 'Dusun Tumpangrejo',
                "deskripsi" => 'Lahan hasil bumi andalan warga dengan produk khas berupa kopi lokal[cite: 1].',
                "deskripsi_panjang" => 'Selain kebun jeruk, komoditas unggulan masyarakat Dusun Tumpangrejo adalah panen kopi dan beraneka ragam sayur-mayur untuk memenuhi pasokan pangan desa dan daerah sekitarnya[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1559525839-b184a4d698c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => '06:00 - 16:00 WIB',
                "harga" => 'Bervariasi',
                "fasilitas" => ['Lahan Tani'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 32,
                "kategori" => 'umkm',
                "nama" => 'Peternakan Sapi dan Kambing',
                "dusun" => 'Dusun Tumpangrejo',
                "deskripsi" => 'Potensi hewan ternak berskala rumahan milik masyarakat[cite: 1].',
                "deskripsi_panjang" => 'Pekerjaan merawat ternak sapi dan kambing menjadi mata pencaharian tambahan sekaligus potensi unggulan yang diolah mandiri oleh para petani di Dusun Tumpangrejo[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1558603668-6570496b66f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "store",
                "jamBuka" => 'Setiap Hari',
                "harga" => '-',
                "fasilitas" => ['Area Kandang'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ],
            [
                "id" => 33,
                "kategori" => 'wisata',
                "nama" => 'Kesenian Bantengan dan Rebana',
                "dusun" => 'Dusun Tumpangrejo',
                "deskripsi" => 'Seni pertunjukan budaya lokal yang aktif dilestarikan sebagai kegiatan rutin[cite: 1].',
                "deskripsi_panjang" => 'Masyarakat Dusun Tumpangrejo sangat menjaga kelestarian kebudayaan asli mereka melalui penyelenggaraan kegiatan kesenian rutinan yang memadukan atraksi Bantengan dan iringan musik spiritual Rebana[cite: 1].',
                "gambar" => 'https://images.unsplash.com/photo-1523987355523-c7b5b0dd90a7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                "ikon" => "camera",
                "jamBuka" => 'Sesuai Jadwal Kegiatan',
                "harga" => 'Gratis / Partisipasi',
                "fasilitas" => ['Area Pertunjukan'],
                "mapLink" => 'https://maps.google.com',
                "galeri" => []
            ]
        ];

        foreach ($data as $item) {
            $item['ikon'] = strtolower($item['ikon']);
            Destination::create($item);
        }

        // Auto-generate padding items (akan aktif hanya jika data dusun tertentu kurang dari 6)
        $dusunNames = [
            'Dusun Ngenep Krajan', 'Dusun Lowoksari', 'Dusun Kubung', 
            'Dusun Mojosari', 'Dusun Babaan', 'Dusun Genitri', 
            'Dusun Curah Kembang', 'Dusun Tumpangrejo'
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