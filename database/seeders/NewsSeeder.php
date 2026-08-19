<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            
  [
    "id" => 1,
    "kategori" => 'Pengumuman',
    "tanggal" => '12 Ags 2026',
    "penulis" => 'Admin TU',
    "judul" => 'Kerja Bakti Rutin Jelang Peringatan Hari Kemerdekaan 17 Agustus',
    "deskripsi_singkat" => 'Warga Desa Ngenep diimbau untuk berpartisipasi dalam kerja bakti massal yang akan dilaksanakan di setiap RT untuk menyambut HUT RI.',
    "gambar" => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
    "konten" => 'Menyambut Hari Kemerdekaan Republik Indonesia yang ke-81, Pemerintah Desa Ngenep mengimbau seluruh warga untuk mengadakan kerja bakti massal. Kegiatan ini difokuskan pada pembersihan gorong-gorong, pemotongan rumput liar, dan pemasangan atribut kemerdekaan seperti umbul-umbul dan bendera merah putih di sepanjang jalan utama desa.\n\nKerja bakti akan dilaksanakan pada hari Minggu mulai pukul 07.00 WIB. Setiap ketua RT diharapkan dapat mengoordinasi warganya masing-masing. Mari kita pupuk semangat gotong royong demi Desa Ngenep yang bersih, sehat, dan semarak! Warga juga diharapkan membawa peralatan kebersihan mandiri seperti cangkul, sapu lidi, maupun sabit.'
  ],
  [
    "id" => 2,
    "kategori" => 'UMKM',
    "tanggal" => '10 Ags 2026',
    "penulis" => 'Kaur Perencanaan',
    "judul" => 'Pelatihan Digital Marketing Intensif untuk Pelaku UMKM Desa',
    "deskripsi_singkat" => 'Pemerintah desa bekerja sama dengan mahasiswa KKN mengadakan pelatihan pemasaran online guna meningkatkan penjualan produk lokal di marketplace dan media sosial.',
    "gambar" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsrGy8--XZ0Q4olNmGEBvwJEGHb_vmKaqNNF1T62tUmnQVR97QlgkXeIY&s=10',
    "konten" => 'Dalam upaya meningkatkan daya saing produk lokal di era digital, Desa Ngenep mengadakan pelatihan "Digital Marketing & Branding" bagi para pelaku UMKM. Acara ini terselenggara berkat kerja sama dengan mahasiswa KKN dari Universitas Brawijaya Malang.\n\nMateri yang diajarkan sangat praktikal, meliputi cara membuat foto produk yang menarik hanya menggunakan kamera HP, pengelolaan akun media sosial bisnis (Instagram dan TikTok), serta dasar-dasar manajemen operasional berjualan di marketplace (Shopee & Tokopedia). Kepala Desa berharap kegiatan ini bisa membuka akses pasar yang lebih luas bagi keripik tempe, anyaman bambu, produk madu, dan produk khas Ngenep lainnya agar bisa dikirim ke seluruh penjuru Nusantara.'
  ],
  [
    "id" => 3,
    "kategori" => 'Pariwisata',
    "tanggal" => '05 Ags 2026',
    "penulis" => 'BUMDes Ngenep',
    "judul" => 'Peresmian Fasilitas Baru di Area Wisata Sumber Ngenep',
    "deskripsi_singkat" => 'Penambahan gazebo, sarana kamar ganti, dan area bermain anak resmi dibuka untuk wisatawan umum. Fasilitas ini dikelola penuh oleh BUMDes.',
    "gambar" => 'https://images.unsplash.com/photo-1596401057633-54a8fe8ef647?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
    "konten" => 'Kabar gembira bagi para wisatawan! Area wisata kebanggaan kita, Pemandian Alam Sumber Ngenep, kini dilengkapi dengan fasilitas baru. Pagi tadi, Bapak Kepala Desa telah meresmikan 5 unit gazebo baru dari bambu, renovasi total area kamar mandi bilas, dan satu area bermain anak (playground) yang ramah anak.\n\nPenambahan fasilitas ini merupakan respon cepat BUMDes atas masukan dari pengunjung pada saat libur Lebaran lalu, yang membutuhkan lebih banyak tempat istirahat representatif bagi rombongan keluarga. BUMDes Ngenep berkomitmen untuk terus meningkatkan pelayanan dengan konsep *eco-friendly* tanpa merusak keasrian alam sekitar sumber air.\n\nHal menariknya, meski fasilitas bertambah signifikan, harga tiket masuk tetap normal di angka Rp 5.000,- dan tidak mengalami kenaikan sedikit pun.'
  ],
  [
    "id" => 4,
    "kategori" => 'Prestasi',
    "tanggal" => '28 Jul 2026',
    "penulis" => 'Sekretaris Desa',
    "judul" => 'Desa Ngenep Masuk 10 Besar Desa Bersih Se-Kabupaten Malang',
    "deskripsi_singkat" => 'Berkat dedikasi warga mengelola bank sampah dan menjaga sanitasi lingkungan, Ngenep meraih predikat desa terbersih dan inovatif tingkat kabupaten.',
    "gambar" => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
    "konten" => 'Prestasi membanggakan kembali diraih oleh desa tercinta kita. Desa Ngenep baru saja dinobatkan sebagai salah satu dari "10 Desa Bersih & Inovatif" se-Kabupaten Malang tahun 2026.\n\nPenghargaan ini diserahkan langsung oleh Bupati Malang kepada Kepala Desa dalam acara Malam Apresiasi Lingkungan Kabupaten. Tim penilai menitikberatkan keberhasilan kita dalam menekan angka pembuangan sampah sembarangan melalui program "Bank Sampah Ngenep Mandiri" yang sudah aktif berjalan di 4 dusun.\n\nSelain itu, penghijauan area pekarangan rumah menggunakan sistem hidroponik dan tanaman hias juga menjadi poin plus. Mari kita pertahankan dan bahkan tingkatkan lagi budaya bersih dan sehat ini!'
  ],
  [
    "id" => 5,
    "kategori" => 'Kesehatan',
    "tanggal" => '20 Jul 2026',
    "penulis" => 'Kader Posyandu',
    "judul" => 'Jadwal Imunisasi dan Posyandu Balita Bulan Agustus Terpadu',
    "deskripsi_singkat" => 'Ibu-ibu balita harap mencatat jadwal Posyandu serentak yang akan membagikan vitamin A, obat cacing, dan penimbangan berat badan.',
    "gambar" => 'https://images.unsplash.com/photo-1584515933487-779824d29309?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
    "konten" => 'Diberitahukan kepada seluruh warga Desa Ngenep yang memiliki anak usia balita (0-5 Tahun). Program Posyandu Bulan Agustus ini sangat krusial karena merupakan "Bulan Vitamin A" serentak secara nasional.\n\nPelayanan "meliputi" =>\n1. Pemberian Kapsul Vitamin A (Biru untuk bayi 6-11 bulan, Merah untuk balita 1-5 tahun)\n2. Pemberian Obat Cacing tahunan\n3. Pengukuran tinggi badan & penimbangan berat badan\n4. Konsultasi gizi dengan ahli gizi Puskesmas\n\nJadwal "pelaksanaan" =>\n- Dusun "Krajan" => Senin, 3 Agustus\n- Dusun "Sumber" => Selasa, 4 Agustus\n- Dusun "Karang" => Rabu, 5 Agustus\n- Dusun "Bawah" => Kamis, 6 Agustus\n\nMohon kehadiran tepat waktu di balai dusun masing-masing membawa buku KIA (Kesehatan Ibu dan Anak).'
  ],
  [
    "id" => 6,
    "kategori" => 'Ekonomi',
    "tanggal" => '15 Jul 2026',
    "penulis" => 'BUMDes Ngenep',
    "judul" => 'Penyaluran Modal Usaha Tanpa Bunga untuk 20 UMKM Rintisan',
    "deskripsi_singkat" => 'Program bantuan modal bergulir tahap dua telah disalurkan guna mendorong pertumbuhan lapangan kerja baru di sektor kuliner dan kerajinan.',
    "gambar" => 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
    "konten" => 'Berkomitmen untuk terus menggerakkan roda ekonomi kerakyatan, BUMDes Ngenep bekerja sama dengan Dinas Koperasi mengucurkan program "Dana Usaha Bergulir Tanpa Bunga" tahap kedua.\n\nSebanyak 20 pelaku UMKM rintisan—mulai dari penjual aneka jajanan pasar, pengerajin aksesoris bambu kecil, hingga peternak ikan lele kolam terpal—menerima bantuan ini. Total dana yang disalurkan mencapai Rp 50.000.000,-.\n\nPinjaman lunak ini diharapkan dapat membantu pelaku usaha mikro dalam membeli alat produksi dan bahan baku. Pengembalian akan dilakukan dengan sistem angsuran ringan yang hasilnya akan diputar kembali untuk UMKM lainnya di tahap ketiga tahun depan.'
  ]

        ];

        foreach ($data as $item) {
            // Convert date format from '12 Ags 2026' to Y-m-d heuristically if possible, or leave as null/string
            // Since it's a date field in DB, we should parse it.
            $months = ['Jan' => '01', 'Feb' => '02', 'Mar' => '03', 'Apr' => '04', 'Mei' => '05', 'Jun' => '06', 'Jul' => '07', 'Ags' => '08', 'Sep' => '09', 'Okt' => '10', 'Nov' => '11', 'Des' => '12'];
            $dateParts = explode(' ', $item['tanggal']);
            if(count($dateParts) == 3) {
                $day = str_pad($dateParts[0], 2, '0', STR_PAD_LEFT);
                $month = $months[$dateParts[1]] ?? '01';
                $year = $dateParts[2];
                $item['tanggal'] = "$year-$month-$day";
            } else {
                $item['tanggal'] = null;
            }
            News::create($item);
        }
    }
}
