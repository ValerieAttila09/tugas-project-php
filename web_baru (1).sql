-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2025 at 04:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id`, `judul`, `isi`, `kategori`, `publisher`, `gambar`, `tanggal`) VALUES
(2, 'The Future of Web Development', '<h3>The Future of Web Development</h3>\r\n<h4>Pendahuluan</h4>\r\n<p>Perkembangan web bergerak sangat cepat, didorong oleh kebutuhan pengguna yang terus berubah dan inovasi infrastruktur. Artikel ini membahas tren teknis dan praktik terbaik yang akan membentuk cara kita membangun aplikasi web dalam beberapa tahun ke depan.</p>\r\n<h4>Tren Teknologi Utama</h4>\r\n<p><strong>Progressive Web Apps (PWA)</strong> mengaburkan batas antara aplikasi web dan native dengan kemampuan offline, instalasi ringan, dan notifikasi yang efisien. PWA menjadi pilihan untuk pengalaman pengguna yang konsisten di berbagai perangkat.</p>\r\n<p><strong>Serverless dan Function as a Service</strong> menyederhanakan operasi dengan menghilangkan kebutuhan provisioning server, sehingga tim dapat fokus pada logika bisnis dan pengiriman fitur lebih cepat.</p>\r\n<p><strong>Edge Computing</strong> mengurangi latensi dengan memindahkan proses yang sensitif terhadap waktu ke tepi jaringan; cocok untuk aplikasi real-time dan pengalaman interaktif.</p>\r\n<p><strong>Jamstack dan Arsitektur Terkomposisi</strong> mendorong pemisahan antara presentasi, data, dan logika sehingga meningkatkan performa dan keamanan melalui pre-rendering dan API-driven content.</p>\r\n<p><strong>Integrasi AI</strong> muncul di seluruh stack: dari rekomendasi konten dan optimasi gambar di sisi klien, hingga automasi pipeline developer di sisi server.</p>\r\n<h4>Dampak pada Frontend dan Backend</h4>\r\n<p>Frontend akan semakin fokus pada performa, aksesibilitas, dan pengalaman mikro-interaksi, sedangkan backend perlu mendukung pola event-driven, API-first, dan observability tinggi untuk menjaga keandalan sistem terdistribusi.</p>\r\n<h4:Praktik untuk Dipelajari</h4>\r\n<p>Kuasai service workers, caching strategy, arsitektur serverless, observability (logging, tracing, metrics), serta dasar-dasar machine learning untuk fitur personalisasi.</p>\r\n<h4>Kesimpulan</h4>\r\n<p>Masa depan web menuntut pengembang untuk mampu menggabungkan performa, pengalaman pengguna, dan arsitektur terdistribusi. Investasi pembelajaran pada PWA, serverless, edge, dan observability akan memberi keunggulan kompetitif.</p>', 'Teknologi', 'Tech Writer', 'future-web.jpg', '2025-10-15 02:30:00'),
(3, 'Building Scalable Applications', '<h3>Building Scalable Applications</h3>\r\n<h4>Pendahuluan</h4>\r\n<p>Skalabilitas berarti mempertahankan performa dan keandalan saat beban tumbuh, bukan sekadar menangani jumlah pengguna besar. Panduan ini menyajikan prinsip arsitektural dan teknik praktis untuk membangun aplikasi yang dapat diskalakan seiring pertumbuhan bisnis.</p>\r\n<h4>Prinsip Arsitektur</h4>\r\n<p>Desain domain-driven, loose coupling, dan high cohesion membantu meminimalkan dampak peningkatan beban. Layanan harus dirancang agar mudah di-scale independen sesuai kebutuhan fungsional mereka.</p>\r\n<h4>Pola dan Teknik</h4>\r\n<p><strong>Microservices</strong> memungkinkan skalabilitas fungsional dengan bounded contexts. <strong>CQRS</strong> memisahkan jalur baca dan tulis ketika beban baca jauh lebih tinggi. <strong>Caching</strong> (Redis, CDN) serta backpressure dan rate limiting membantu menjaga stabilitas saat lonjakan trafik.</p>\r\n<h4>Optimasi Database</h4>\r\n<p>Indexing yang tepat, denormalisasi terukur untuk operasi baca berat, connection pooling, serta penggunaan read replicas atau sharding ketika data dan trafik bertambah besar adalah kunci untuk menjaga latensi rendah.</p>\r\n<h4>Cloud dan Operasional</h4>\r\n<p>Autoscaling berbasis metrik relevan (mis. latency, queue length), managed services untuk mengurangi overhead operasional, serta strategi deployment seperti blue/green atau canary membantu pengubahan dengan resiko rendah.</p>\r\n<h4>Panduan Praktis</h4>\r\n<p>Lakukan load testing realistis, pantau sistem dengan metrik terstruktur dan distributed tracing, serta siapkan runbook untuk recovery dari kegagalan kritikal.</p>\r\n<h4>Kesimpulan</h4>\r\n<p>Skalabilitas adalah perpaduan desain, optimasi data, dan praktik operasional. Membuat keputusan yang tepat di setiap lapisan sistem memastikan aplikasi tumbuh tanpa mengorbankan stabilitas atau biaya yang tidak terkendali.</p>', 'Teknologi', 'Dev Expert', 'scalable-apps.jpg', '2025-10-10 07:15:00'),
(4, 'Mastering Database Design', '<h3>Mastering Database Design</h3>\r\n<h4>Pendahuluan</h4>\r\n<p>Desain basis data yang baik adalah fondasi untuk performa, konsistensi, dan kemudahan pemeliharaan aplikasi. Panduan ini membahas prinsip desain, indexing, dan strategi skalabilitas yang sering diterapkan di lingkungan produksi.</p>\r\n<h4>Prinsip Desain Dasar</h4>\r\n<p>Normalisasi mengurangi redundansi dan menjaga integritas data; denormalisasi dapat diterapkan secara selektif untuk meningkatkan performa baca dengan memahami trade-off pada operasi tulis.</p>\r\n<h4>Indexing dan Optimasi Query</h4>\r\n<p>Gunakan indeks pada kolom yang sering dipakai pada WHERE, JOIN, dan ORDER BY. Hindari indeks berlebih yang memperlambat operasi tulis; analisa query plan untuk menemukan bottleneck dan refactor query kompleks bila perlu.</p>\r\n<h4>Skalabilitas Data</h4>\r\n<p>Partitioning membantu mengelola tabel besar; read replicas mengurangi beban baca; sharding diperlukan saat dataset melebihi kapasitas single node—pemilihan shard key harus mempertimbangkan pola akses data.</p>\r\n<h4>Integritas dan Transaksi</h4>\r\n<p>Pilih level isolasi transaksi sesuai kebutuhan konsistensi. Gunakan foreign key dan constraint bila perlu untuk mencegah inkonsistensi, serta rencanakan strategi backup dan restore yang terujikan.</p>\r\n<h4>Tips Praktis</h4>\r\n<p>Tentukan tipe data yang realistis, hindari VARCHAR yang berlebihan, jalankan migrasi skema melalui tooling yang terotomasi, dan uji proses restore secara berkala.</p>\r\n<h4>Kesimpulan</h4>\r\n<p>Desain basis data yang matang menyeimbangkan integritas, performa, dan skalabilitas. Perencanaan dan pengujian yang baik memastikan basis data menjadi pondasi yang kuat bagi aplikasi jangka panjang.</p>', 'Teknologi', 'Data Specialist', 'database-design.jpg', '2025-10-05 04:45:00'),
(5, 'Mobile First Design Principles', '<h3>Mobile First Design Principles</h3>\r\n<h4>Pendahuluan</h4>\r\n<p>Mobile-first adalah pendekatan desain yang memprioritaskan pengalaman pengguna seluler sejak awal proses desain. Pendekatan ini menghasilkan antarmuka yang lebih fokus, cepat, dan mudah digunakan pada berbagai perangkat.</p>\r\n<h4>Prinsip Utama</h4>\r\n<p>Prioritaskan konten; tampilkan elemen paling penting di area layar pertama. Rancang interaksi berbasis sentuhan dengan ukuran target yang cukup besar dan jarak antar elemen yang memadai.</p>\r\n<h4>Teknik Implementasi</h4>\r\n<p>Gunakan responsive grid yang dimulai dari ukuran kecil ke besar, design tokens untuk konsistensi tipografi dan spacing, serta optimasi sumber daya (gambar, script) untuk mempercepat waktu muat pada jaringan seluler.</p>\r\n<h4>Navigasi dan UX</h4>\r\n<p>Pertimbangkan navigasi bawah untuk kemudahan jangkauan ibu jari, minimalkan jumlah field pada formulir, gunakan input type yang sesuai, dan sediakan validasi inline untuk mengurangi kesalahan pengguna.</p>\r\n<h4:Contoh Praktis</h4>\r\n<p>Progressive disclosure membantu menjaga antarmuka tetap bersih dengan menampilkan detail hanya saat diperlukan. Pola offline-first dan sinkronisasi latar belakang meningkatkan pengalaman pada jaringan yang tidak stabil.</p>\r\n<h4>Kesimpulan</h4>\r\n<p>Mobile-first mendorong pembuatan produk yang lebih fokus dan usable pada semua perangkat. Mengadopsi prinsip ini meningkatkan konversi, retensi, dan kepuasan pengguna secara keseluruhan.</p>', 'Teknologi', 'UX Designer', 'mobile-design.jpg', '2025-09-28 09:20:00'),
(6, 'Cybersecurity Best Practices', '<h3>Cybersecurity Best Practices</h3>\r\n<h4>Pendahuluan</h4>\r\n<p>Keamanan adalah bagian tak terpisahkan dari pengembangan perangkat lunak modern. Pendekatan proaktif terhadap keamanan melindungi data pengguna, menjaga reputasi produk, dan mengurangi risiko finansial akibat pelanggaran.</p>\r\n<h4:Praktik Keamanan Kunci</h4>\r\n<p>Secure coding: lakukan validasi input dan sanitasi output untuk mencegah SQL injection dan XSS. Gunakan prinsip least privilege untuk otorisasi dan standarisasi autentikasi dengan OAuth2/OpenID Connect bila memungkinkan.</p>\r\n<p>Enkripsi: wajibkan TLS untuk komunikasi dan enkripsi data sensitif di storage. Kelola kunci dengan layanan manajemen kunci yang aman.</p>\r\n<h4>Infrastruktur dan Operasional</h4>\r\n<p>Lakukan patch management rutin, vulnerability scanning, dan audit konfigurasi. Terapkan network segmentation, WAF, dan prinsip zero trust untuk mengurangi permukaan serangan.</p>\r\n<h4>Deteksi dan Respons</h4>\r\n<p>Siapkan monitoring untuk deteksi intrusi, logging terpusat, dan alerting real-time. Miliki incident response plan dan latih tim melalui tabletop exercises untuk memastikan kesiapan operasional.</p>\r\n<h4>Pelajaran dari Kasus</h4>\r\n<p>Banyak kebocoran data berawal dari konfigurasi default, kredensial lemah, atau kurangnya enkripsi. Audit sederhana dan hardening konfigurasi sering kali mencegah insiden besar.</p>\r\n<h4>Kesimpulan</h4>\r\n<p>Keamanan harus dirancang sejak awal (security by design) dan diterapkan di seluruh lifecycle aplikasi. Investasi pada automasi keamanan, monitoring, dan kesiapan respons mengurangi risiko jangka panjang dan meningkatkan kepercayaan pengguna.</p>', 'Teknologi', 'Security Analyst', 'cybersecurity.jpg', '2025-09-20 06:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `email_pengirim` varchar(100) DEFAULT NULL,
  `rating` tinyint(4) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `komentar` text DEFAULT NULL,
  `tanggal_feedback` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_feedback`
--

INSERT INTO `tb_feedback` (`id_feedback`, `id_user`, `id_produk`, `nama_pengirim`, `email_pengirim`, `rating`, `komentar`, `tanggal_feedback`) VALUES
(1, 2, 3, 'Andi Pratama', 'andi@example.com', 5, 'Produk sangat bagus dan sesuai deskripsi!', '2025-10-26 20:04:57'),
(2, 2, 7, 'Siti Nurhaliza', 'siti@example.com', 4, 'Kualitas oke, pengiriman cepat.', '2025-10-26 20:04:57'),
(3, 2, 12, 'Budi Santoso', 'budi@example.com', 3, 'Lumayan, tapi ada cacat kecil di bagian samping.', '2025-10-26 20:04:57'),
(4, 2, 5, 'Rina Oktaviani', 'rina@example.com', 5, 'Anak saya suka sekali mainan ini!', '2025-10-26 20:04:57'),
(5, 2, 9, 'Dewi Lestari', 'dewi@example.com', 2, 'Kurang sesuai ekspektasi, bahan agak tipis.', '2025-10-26 20:04:57'),
(6, 2, 15, 'Fajar Nugroho', 'fajar@example.com', 4, 'Mouse responsif, cocok untuk kerja.', '2025-10-26 20:04:57'),
(7, 2, 1, 'Lina Marlina', 'lina@example.com', 5, 'Meja kerja sangat nyaman dan kokoh.', '2025-10-26 20:04:57'),
(8, 2, 6, 'Yoga Prasetya', 'yoga@example.com', 3, 'Tasnya bagus tapi resleting agak seret.', '2025-10-26 20:04:57'),
(9, 2, 10, 'Tari Ayu', 'tari@example.com', 4, 'Buku catatan elegan dan praktis.', '2025-10-26 20:04:57'),
(10, 2, 2, 'Dani Ramadhan', 'dani@example.com', 5, 'Jaketnya hangat dan stylish!', '2025-10-26 20:04:57'),
(11, 2, 8, 'Nina Kartika', 'nina@example.com', 4, 'Desain hoodie keren, bahan nyaman.', '2025-10-26 20:04:57'),
(12, 2, 11, 'Rizky Hidayat', 'rizky@example.com', 5, 'Puzzle-nya menantang dan menyenangkan.', '2025-10-26 20:04:57'),
(13, 2, 14, 'Yuni Astuti', 'yuni@example.com', 3, 'Jeans bagus tapi ukuran agak kecil.', '2025-10-26 20:04:57'),
(14, 2, 13, 'Agus Salim', 'agus@example.com', 4, 'Kursi ergonomis, cocok untuk kerja lama.', '2025-10-26 20:04:57'),
(15, 2, 4, 'Mega Putri', 'mega@example.com', 5, 'Alat gambar lengkap dan berkualitas.', '2025-10-26 20:04:57'),
(16, 2, 16, 'Dian Permata', 'dian@example.com', 2, 'Pena warna cepat habis tintanya.', '2025-10-26 20:04:57'),
(17, 2, 17, 'Tono Wijaya', 'tono@example.com', 5, 'Robot edukatif sangat menarik untuk anak.', '2025-10-26 20:04:57'),
(18, 2, 18, 'Vina Melati', 'vina@example.com', 4, 'Pengikat kabel sangat membantu.', '2025-10-26 20:04:57'),
(19, 2, 19, 'Rama Aditya', 'rama@example.com', 5, 'Rak kayu minimalis dan elegan.', '2025-10-26 20:04:57'),
(20, 2, 20, 'Citra Dewi', 'citra@example.com', 3, 'Mantel hujan oke, tapi agak berat.', '2025-10-26 20:04:57'),
(21, 2, 21, 'Hendra Saputra', 'hendra@example.com', 4, 'Power bank tahan lama dan cepat isi.', '2025-10-26 20:04:57'),
(22, 2, 22, 'Laila Hasanah', 'laila@example.com', 5, 'Sticky note lucu dan berguna.', '2025-10-26 20:04:57'),
(23, 2, 23, 'Bayu Kurniawan', 'bayu@example.com', 4, 'Tanah liat warna-warni, anak senang.', '2025-10-26 20:04:57'),
(24, 2, 24, 'Fitriani', 'fitri@example.com', 3, 'Label koper lucu tapi mudah lepas.', '2025-10-26 20:04:57'),
(25, 2, 25, 'Zaki Firmansyah', 'zaki@example.com', 5, 'Kursi meditasi sangat nyaman.', '2025-10-26 20:04:57'),
(26, 2, 3, 'Rosa Amelia', 'rosa@example.com', 4, 'Tablet grafis sangat presisi.', '2025-10-26 20:04:57'),
(27, 2, 7, 'Gilang Mahendra', 'gilang@example.com', 5, 'Speaker mini dengan suara jernih.', '2025-10-26 20:04:57'),
(28, 2, 12, 'Selvi Nuraini', 'selvi@example.com', 2, 'Ada goresan di bagian depan.', '2025-10-26 20:04:57'),
(29, 2, 5, 'Taufik Hidayat', 'taufik@example.com', 4, 'Mainan balap seru dan awet.', '2025-10-26 20:04:57'),
(30, 2, 9, 'Maya Sari', 'maya@example.com', 3, 'Desain bagus tapi warna cepat pudar.', '2025-10-26 20:04:57'),
(31, 2, 15, 'Reza Fahmi', 'reza@example.com', 5, 'Mouse sangat nyaman digunakan.', '2025-10-26 20:04:57'),
(32, 2, 1, 'Sari Utami', 'sari@example.com', 4, 'Meja kokoh dan mudah dirakit.', '2025-10-26 20:04:57'),
(33, 2, 6, 'Ilham Pratama', 'ilham@example.com', 3, 'Tas multifungsi tapi kurang besar.', '2025-10-26 20:04:57'),
(34, 2, 10, 'Putri Ayu', 'putri@example.com', 5, 'Buku catatan sangat elegan.', '2025-10-26 20:04:57'),
(35, 2, 2, 'Rendy Saputra', 'rendy@example.com', 4, 'Jaket tahan air dan ringan.', '2025-10-26 20:04:57'),
(36, 2, 8, 'Dewi Anggraini', 'dewiang@example.com', 5, 'Hoodie nyaman dan hangat.', '2025-10-26 20:04:57'),
(37, 2, 11, 'Fikri Maulana', 'fikri@example.com', 4, 'Puzzle bagus untuk keluarga.', '2025-10-26 20:04:57'),
(38, 2, 14, 'Nadia Rahma', 'nadia@example.com', 3, 'Jeans bagus tapi agak sempit.', '2025-10-26 20:04:57'),
(39, 2, 13, 'Rian Febrianto', 'rian@example.com', 5, 'Kursi sangat ergonomis.', '2025-10-26 20:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `kuantitas` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_user`, `nama_produk`, `deskripsi`, `gambar`, `kategori`, `harga`, `kuantitas`) VALUES
(1, 2, 'SmartDesk Profesional', 'Meja kerja pintar dengan pengaturan tinggi otomatis.', 'desk.jpg', 'Furniture', 239, 10),
(2, 2, 'Aurora Jacket', 'Jaket tahan air dengan lapisan termal.', 'jacket.jpg', 'Clothes', 51, 30),
(3, 2, 'NeoPad X7', 'Tablet grafis dengan layar 4K dan stylus presisi tinggi.', 'tablet.jpg', 'Technology', 253, 5),
(4, 2, 'SketchMaster 3000', 'Set alat gambar profesional untuk seniman.', 'art-tools.jpg', 'Stationery', 12, 40),
(5, 2, 'RoboRacer Z', 'Mainan mobil balap dengan remote control.', 'car-toys.jpg', 'Toys', 20, 15),
(6, 2, 'EcoBag Organizer', 'Tas multifungsi ramah lingkungan.', 'eco-bag.jpg', 'Others', 7, 30),
(7, 2, 'Luna Lamp', 'Lampu tidur dengan sensor gerak dan cahaya lembut.', 'sleep-lamp.jpg', 'Furniture', 11, 20),
(8, 2, 'Pixel Hoodie', 'Hoodie dengan desain pixel art dan bahan katun premium.', 'hoodie.jpg', 'Clothes', 27, 18),
(9, 2, 'SoundCore Mini', 'Speaker Bluetooth portabel dengan bass kuat.', 'speaker.jpg', 'Technology', 39, 12),
(10, 2, 'NotePro A5', 'Buku catatan hardcover dengan kertas ivory.', 'notes.jpg', 'Stationery', 5, 50),
(11, 2, 'Puzzle Galaxy', 'Puzzle 1000 keping bertema galaksi.', 'puzzle.jpg', 'Toys', 6, 22),
(12, 2, 'FlexiCase', 'Case HP fleksibel dengan pelindung sudut.', 'phone-case.jpg', 'Others', 5, 35),
(13, 2, 'ErgoChair Lite', 'Kursi ergonomis dengan sandaran punggung.', 'ergo-chair.jpg', 'Furniture', 87, 8),
(14, 2, 'Denim Classic', 'Celana jeans klasik dengan potongan slim fit.', 'jeans.jpg', 'Clothes', 20, 20),
(15, 2, 'AirMouse Pro', 'Mouse nirkabel dengan sensor optik presisi.', 'mouse.jpg', 'Technology', 17, 25),
(16, 2, 'ColorPen Set', 'Set pena warna untuk ilustrasi dan sketsa.', 'pens.jpg', 'Stationery', 7, 45),
(17, 2, 'Build-a-Bot', 'Kit robotik edukatif untuk anak-anak.', 'robotics-kit.jpg', 'Toys', 30, 10),
(18, 2, 'CableWrap', 'Pengikat kabel magnetik untuk meja kerja.', 'wire-wrapper.jpg', 'Others', 2, 60),
(19, 2, 'WoodCraft Shelf', 'Rak kayu minimalis untuk dekorasi rumah.', 'wooden-shelf.jpg', 'Furniture', 38, 14),
(20, 2, 'RainShield Coat', 'Mantel hujan dengan bahan anti air dan ringan.', 'mantle.jpg', 'Clothes', 34, 16),
(21, 2, 'PowerBank Ultra', 'Power bank 20000mAh dengan fast charging.', 'power-bank.jpg', 'Technology', 23, 20),
(22, 2, 'StickyNote Cube', 'Kotak memo warna-warni untuk catatan harian.', 'memo.jpg', 'Stationery', 3, 70),
(23, 2, 'MagicClay', 'Another day, another clay.', 'clay.jpg', 'Toys', 4, 40),
(24, 2, 'TravelTag Set', 'Set label koper dengan desain lucu.', 'suitcase.jpg', 'Others', 3, 25),
(25, 2, 'ZenChair', 'Kursi meditasi lipat dengan bantalan empuk.', 'meditation-chair.jpg', 'Furniture', 59, 6),
(33, 2, 'IPhone 16 Pro Case', 'Very good IPhone 16 Pro Case', 'iphone-case.jpg', 'Furniture', 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `level` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `pass`, `level`) VALUES
(1, 'Sahbanta Mulia Sembiring', 'sahbanta_sembiring', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Valerie Attila Al-fath', 'ggwp123', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD CONSTRAINT `tb_feedback_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_feedback_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
