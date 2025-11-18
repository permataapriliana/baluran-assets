-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2025 pada 10.00
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `accommodations`
--

CREATE TABLE `accommodations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `price_range_min` int(10) UNSIGNED DEFAULT NULL,
  `price_range_max` int(10) UNSIGNED DEFAULT NULL,
  `distance_km` decimal(5,2) DEFAULT NULL,
  `lat` decimal(9,6) DEFAULT NULL,
  `lng` decimal(9,6) DEFAULT NULL,
  `amenities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`amenities`)),
  `photo_path` varchar(255) DEFAULT NULL,
  `status` enum('draft','published') NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `date`, `content`, `file_path`, `image_path`, `created_at`, `updated_at`) VALUES
(6, 'Larangan Bus Memasuki Taman Nasional Baluran Melalui Pintu Batangan dan Watunumpuk', '2025-09-01', 'Dalam rangka peningkatan kualitas pelayanan wisata dan guna menjaga keamanan, kenyamanan, keselamatan dan ketertiban lalu lintas serta mengantisipasi kepadatan kendaraan pengunjung di dalam kawasan Taman Nasional Baluran, terhitung mulai tanggal 1 November 2025, kendaraan BUS dilarang memasuki kawasan Taman Nasional Baluran melalui Pintu Masuk Batangan dan Watunumpuk.\r\n\r\nBus harus diparkir di area parkir khusus yang disediakan dan diharapkan telah mempersiapkan kendaraan pengganti (roda 4 atau roda 2) untuk melanjutkan perjalanan ke dalam kawasan.\r\n\r\nKami mengucapkan terima kasih atas perhatian dan kerjasamanya. Mari bersama kita jaga kelestarian dan kenyamanan Taman Nasional Baluran.\r\n\r\nSalam Konservasi 🙏\r\nCall Center : 0853-1938-9646', NULL, 'announcements/images/6xkSsOSBbUV7UmgQ2B8TiltgOsxvKMS1a94KysAc.jpg', '2025-08-27 23:55:03', '2025-08-27 23:55:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_publish` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `konten`, `gambar`, `tanggal_publish`, `created_at`, `updated_at`) VALUES
(1, 'Pelepasliaran Merak Hijau dan Sanca Bodo di Taman Nasional Baluran', 'Bekol – 19 Februari 2017. Balai TN Baluran bersama Balai KSDA Yogyakarta melaksanakan kegiatan pelepasliaran satwa Merak Hijau (pavo muticus) dan Sanca Bodo (phyton morulus). Satwa tersebut didapat Balai KSDA Yogyakarta bekerjasama dengan Mabes Polri yang kemudian akan dilepasliarkan di wilayah Taman Nasional Baluran tepatnya di SPTN Wilayah I Bekol.Acara pelepasliaran ini dilaksanakan pukul 10.30 WIB dan turut di hadiri oleh Kepala Balai Besar Jawa Timur, Kepala Balai TN Alas Purwo serta perwakilan pihak LSM COP (Centre for Orangutan Protection) dan Mitra Wacana WRC (Women Resource Centre) Yogyakarta.Sumber Info : Balai TN Baluran', 'berita/28Ig0FrqeZqf9p9yNO2tefKrXonCJFxRoEWL2qVb.jpg', '2017-02-19', '2025-08-27 21:56:30', '2025-08-27 21:56:30'),
(2, 'Baluran Road to HKAN 2017 : Transplantasi Terumbu Karang di Pantai Pandean', 'Bekol, 22 Mei 2017. Balai Taman Nasional Baluran dalam rangka mendukung kegiatan Hari Konservasi Alam Nasional (HKAN) Tahun 2017 pada tanggal 10 Agustus mendatang, melakukan kegiatan transplantasi terumbu karang yang lokasinya dipusatkan di Pantai Pandean SPTN Wilayah I Bekol. Kegiatan ini dibuka oleh Ir. Bambang Sukendro, MM (Kepala Balai Taman Nasional Baluran) yang diikuti oleh mitra kerjasama kegiatan antara lain Fakultas Pertanian UNTAG 1945 Banyuwangi dan Karang Taruna Gema Mahardika Desa Wonorejo.Sedangkan bibit yang ditransplantasikan sebanyak 400 bibit yang disediakan oleh mitra binaan Seksi Wilayah V BBKSDA Jawa Timur antara lain UD. Segoro Utumo, UD Sea Quest, UD. Srikandi Aquarium, PT. Alam Mulia, PT Dinar Darum Lestari Perwakilan Banyuwangi dan UD. Surya Mandiri Lestari. Media Transplantasi akan ditempatkan di Takad Wedi Pantai Pandean. Untuk monitoring pertumbuhan dan pengamanannya akan dilakukan oleh Taman Nasional Baluran bersama dengan Karang Taruna Gema Mahardika Desa Wonorejo.Sumber Info : Balai Taman Nasional Baluran', 'berita/hVrpCn5Rh9j49NobJ0EecHrfYqL71m1rXOadHuk7.jpg', '2017-05-22', '2025-08-27 21:57:16', '2025-08-27 21:57:16'),
(3, 'Komitmen bersama dalam penanggulangan kebakaran hutan di Taman Nasional Baluran', 'Situbondo, 29 Agustus 2017. Semangat itu tercermin dalam Apel Konsolidasi Kesiapsiagaan Pengendalian Kebakaran Hutan di Taman Nasional Baluran. Hadir dalam apel siaga yang dilaksanakan pada hari selasa tanggal 29 Agustus 2017 adalah Kapolres Situbondo bertindak sebagai pembina apel dengan peserta antara lain : Taman Nasional Baluran, Perum Perhutani, TNI, Polri, BPBD, MPA, MMP, Saka Wana Bhakti dan Sahabat Baluran lingkup Kabupaten Situbondo. Dalam arahannya Kapolres Situbondo menyampaikan bahwa meskipun tercatat beberapa kali terjadi peristiwa kebakaran hutan terutama di wilayah hutan Taman Nasional Baluran, namun dengan soliditas dan quick respone segenap pihak, kebakaran tersebut dapat segera teratasi. “Pemberitaan media massa sepatutnya juga dilakukan secara berimbang dan mengedukasi masyarakat dalam upaya pencegahan karhutla” lanjut AKBP Sigit Dany Setiono, SH, SIK, M.Sc dalam arahannya.Dalam apel ini juga dilakukan simulasi penanggulangan kebakaran hutan oleh Brigdalkar bersama Masyarakat Peduli Api dan Masyarakat Mitra Polhut.Ucapan terima kasih disampaikan oleh Kepala Balai Taman Nasional Baluran. “Kebersamaan dan soliditas ini harus selalu kita jaga dalam penanganan kebakaran hutan” ungkap Ir. Bambang Sukendro, MM dalam sambutannya.Diakhir acara dilakukan penandatanganan kesepakatan dalam komitmen bersama penanggulangan kebakaran hutan di Taman Nasional Baluran oleh Kapolres Situbondo, Kepala Balai Taman Nasional Baluran, Kepala BPBD Situbondo, TNI, Perum Perhutani dan Jajaran Muspida Kabupaten Situbondo. (iq/baluran)', 'berita/m2PxvfhbxPUNMGzaxhIeZ1ZwJhsIuh6jpbfwT0yF.jpg', '2017-08-29', '2025-08-27 21:58:06', '2025-08-27 21:58:06'),
(4, 'Monitoring Satwa Prioritas Jenis Banteng (Bos javanicus) di Taman Nasional Baluran', 'Baluran, 11 September 2017. Bekerjasama dengan Copenhagen Zoo kegiatan monitoring Banteng menggunakan kamera trap sudah dilakukan sejak tahun 2015 oleh Taman Nasional Baluran, sebelumnya kegiatan ini mengandalkan orang sebagai pengamat sehingga keterbatasan waktu dan data yang dihasilkan belum maksimal.Pentingnya monitoring satwa ini adalah untuk mengetahui perkembangan/kondisi populasi Banteng, mengidentifikasi ruang jelajah/site pergerakan dan sebagai bahan pengambilan kebijakan dalam pengelolaan populasi satwa dan habitatnya.Tahun 2017, monitoring Banteng dilaksanakan selama 1 bulan pada 31 agustus s.d 28 September 2017 dengan menggunakan pendekatan 2 metode yaitu survey occupancy dan metode kamera trap. Survey occupancy untuk mengetahui kawasan yang digunakan ataupun yg tidak digunakan Banteng. Hasil yang didapat survey occupancy adalah index occupancy yang akan digunakan untuk menghitung kepadatan Banteng dengan dikombinasikan hasil analisis kamera trap.Pemasangan kamera trap dipilih 36 grid dengan ukuran grid 1 x 1 km2 dipilih secara acak. Untuk meningkatkan detection probability maka kelompok grid dengan index occupancy lebih tinggi dipasang kamera trap lebih banyak. Kamera yang dipasang sebanyak 40 buah dengan mode pemasangan video agar dapat merekam seluruh individu banteng di dalam kelompok. Analisis data hasil monitoring dengan metode occupancy menggunakan model occupancy yang dijalankan menggunakan software R sedangkan untuk kamera trap dianalisa dengan menggunakan persamaan Random Encounter Model (Rowcliffe, 2008). Hasil persamaan ini adalah kepadatan populasi di are studi, selanjutnya diinterpolasi dengan total area yang digunakan maka hasilnya estimasi populasi Banteng (STD/BALURAN).Sumber : Balai TN Baluran', 'berita/UyrFV7btzyfZV8uVv4pn20FrdUNikrR8HAo3LJ4S.jpg', '2017-09-11', '2025-08-27 22:00:22', '2025-08-27 22:00:22'),
(5, 'Pembinaan Populasi Satwa Liar di Taman Nasional Baluran', 'Baluran, 15 September 2017. Rutinitas&nbsp;Pengendali ekosistem hutan (PEH) Balai Taman Nasional Baluran dalam melakukan monitoring satwa liar melalui pengambilan data hasil perekaman kamera trap yang telah dipasang ditempat yang telah ditentukan merupakan bagian dalam kegiatan pembinaan populasi satwa liar di Taman Nasional Baluran.&nbsp;Pembinaan populasi satwa liar yang dilakukan di dalam kawasan Taman Nasional Baluran meliputi patroli rutin oleh Polisi hutan dan masyarakat mitra polhut, pembentukan pusat konservasi dan breeding semi alami Banteng (sanctuari Banteng) dan juga monitoring populasi beberapa satwa liar seperti (banteng, macan tutul dan ajag). Pembinaan populasi satwa liar dilakukan agar tersedia dan seimbangnya rantai makanan di dalam kawasan Taman Nasional Baluran.Monitoring populasi satwa liar melalui pemasangan kamera trap rutin dilakukan oleh Balai Taman Nasional Baluran yang dilaksanakan oleh PEH yang ada. M Iqbal selaku koordinator PEH Balai TN Baluran membenarkan bahwa kegiatan monitoring tersebut rutin dilakukan setiap tahun. Kegiatan ini dilakukan untuk memonitor keberadaan serta populasi satwa liar yang kita pantau. Sehingga hasil dari monitoring ini bisa dijadikan sebagai bahan oleh manajemen Balai Taman Nasional Baluran dalam melakukan pembinaan populasi sekaligus juga pembinaan habitatnya, lanjut M Iqbal.Tahun 2017 kegiatan yang dilakukan oleh PEH Balai TN Baluran dalam monitoring populasi satwa liar meliputi inventarisasi macan tutul, monitoring banteng, pemetaan sebaran ajag dan pemetaan sebaran jalak putih.(JKW/Blr)Sumber : Balai TN Baluran', 'berita/k2nTxU9HFuCkpEqI5xhgm4wad7J51pXHqRIxJVZP.jpg', '2017-09-15', '2025-08-27 22:01:23', '2025-08-27 22:01:23'),
(6, 'Pembentukan Kelompok dan Pelatihan Pemandu Wisata Balai TN Baluran', 'Situbondo, 21 November 2017. Ekowisata menjadi salah satu tren yang berkembang pada saat ini. Selain itu ekowisata juga menjadi sumber pendapatan masyarakat disekitar dan merupakan sumber PNBP bagi negara yang terbilang cukup besar setiap tahunnya. Oleh karena itu perlu dipastikan bahwa pengunjung melakukan perjalanan yang bertanggung jawab, membantu melindungi satwa liar yang mereka kunjungi dan memberikan kontribusi terhadap kesejahteraan masyarakat lokal. Konsep ekowisata tidak hanya menghasilkan manfaat ekonomi kepada masyarakat lokal saja, namun mendukung konservasi dan mengurangi dampak dari aktivitas wisata.Menjawab perkembangan trend tersebut, Balai Taman Nasional Baluran pada tanggal 21-22 November 2017 menyenggarakan kegiatan Pembentukan Kelompok dan Pelatihan Pemandu Wisata yang bertujuan untuk memberikan pengetahuan dan keterampilan kepada pramuwisata bagaimana melakukan memandu dan mendampingi tamu dengan konsep-konsep berbasis lingkungan.Dalam kegiatan ini diisi oleh Narasumber-Narasumber yang sangat berpengalaman di Dunia Pariwisata seperti, Agus Wiyono, Spd yang merupakan Ketua Forum Ekowisata Jawa Timur, Dra. Yoni Astuti dari Himpunan Pramuwisata Indonesia dan Dikarjanto Pemandu Wisata Senior di Taman Nasional Baluran. Adapun peserta acara dalam pelatihan ini diikuti oleh 30 calon pemandu wisata taman nasional baluran yang terdiri dari berbagai elemen seperti masyarakat desa penyangga, Karang Taruna Gema Wonorejo, Pegawai tidak tetap Taman Nasional Baluran dan Tour Guide Club Situbondo.Sumber : Balai TN Baluran', 'berita/8ebq0wpDGHYspetGT5fCnxA8lJ68wYIVOrIjIdTa.jpg', '2017-11-21', '2025-08-27 22:02:23', '2025-08-27 22:02:23'),
(7, 'Coaching DUPAK dan Simulasi Penggunaan Aplikasi e-Kinerja Lingkup BTN Baluran', 'Bogor, 22 November 2017. Balai Taman Nasional Baluran bekerjasama dengan Bagian Kepegawaian, Organisasi dan Tatalaksana menyelenggarakan Pembinaan DUPAK dan Simulasi Penggunaan Aplikasi e-Kinerja yang dilaksanakan pada tanggal 20 November 2017 bertempat di Aula Balai Taman Nasional Baluran. Kegiatan ini selain diikuti oleh seluruh pegawai dan Pejabat Struktural lingkup Balai Taman Nasional Baluran juga dihadiri oleh perwakilan dari Balai Taman Nasional Alas Purwo dan Balai Besar KSDA Jawa Timur.Dalam kegiatan ini menghadirkan Tim Narasumber dari Setditjen KSDAE yang dipimpin langsung oleh Sekditjen KSDAE Ir. Herry Subagiadi., M.Sc yang didampingi oleh Kepala Bagian Kepegawaian, Organisasi dan Tatalaksana Munarto, B.Sc.F., S.P., M.M. dan Pejabat Fungsional Analis Kepegawaian Muda Yayat Supriatna, S.IP.Tujuan diadakannya kegiatan ini adalah untuk untuk meningkatkan kualitas kinerja pejabat fungsional dan memberikan pemahaman bersama terhadap persepsi butir-butir kegiatan dalam juknis sehingga menjadi pedoman tim penilai angka kredit dalam melaksanakan kegiatan penilaian Dupak serta memberikan pemahaman terhadap penggunaan aplikasi e-Kinerja yang mulai diterapkan pada bulan Januari 2018.Dengan adanya kegiatan ini diharapkan setiap Pemangku Jabatan Fungsional PEH, Polhut dan Penyuluh dapat menyusun DUPAK sesuai dengan ketentuan yang berlaku, meningkatkan kinerja dalam melaksanakan tugas dan fungsinya dan .(Penulis : Yayat Supriatna, S.IP ; Analis Kepegawaian Muda pada Bagian Kepegawaian, Organisasi dan Tatalaksana Setditjen KSDAE)', 'berita/qwjJlP7y27S5Ro71tXT6VBKcSzXfy5q0rxkf8zpX.jpg', '2017-11-22', '2025-08-27 22:03:15', '2025-08-27 22:03:15'),
(8, 'Pelatihan Pembuatan Rumpon di Pantai Pandean TN Baluran', 'Pantai Pandean, 25 April 2018. Balai Taman Nasional Baluran mengadakan Pelatihan Pembuatan Rumpon Bagi Kelompok Masyarakat Pantai Pandean pada tanggal 24-25 April 2018. Pelatihan diadakan di Pelelangan Ikan Pandean yang diikuti 30&nbsp;orang peserta yang berasal dari Kelompok Masyarakat Pengawas Pantai Pandean, Himpunan Nelayan Seluruh Indonesia (HNSI) Rukan Nelayan Pandean, Kelompok Usaha Bersama (KUB) Nelayan Cipta Bahari, Karang Taruna Gema Mahardhika dan Kelompok Masyarakat Perengan Indah Lestari dengan narasumber dari Unit Pelaksana Teknis Pengembangan Penangkapan Ikan Probolinggo. Kegiatan ini bertujuan untuk menambah wawasan dan memberikan keterampilan kepada masyarakat dalam membuat rumpon. Selain itu sebagai sarana pendidikan konservasi dan eduwisata bagi pengunjung di Pantai Pandean serta menambah atraksi wisata di Pantai Pandean dan meningkatkan pendapatan masyarakat.Pantai Pandean merupakan kawasan di Taman Nasional Baluran yang berbatasan langsung dengan masyarakat Desa Wonorejo khususnya dusun Pandean. Wilayah Pantai Pandean menjadi salah satu wilayah yang dilakukan pengembangan untuk pengelolaan wisata bersama masyarakat dimana wilayah tersebut merupakan bagian dari Zona Tradisional di Taman Nasional Baluran.Sumber : Balai Taman Nasional Baluran', 'berita/5usxSx3F3q6cvv5I8Q7M7SYEiPTR6PkA8xqH73vC.jpg', '2018-04-25', '2025-08-27 22:04:08', '2025-08-27 22:04:08'),
(9, 'Srikandi Baru Suaka Banteng Baluran', 'Situbondo, 7 Mei 2018. Kabar gembira kembali datang dari Suaka Banteng Baluran yang ada di Seksi Pengelolaan Taman Nasional (SPTN) Wilayah I Bekol Balai Taman Nasional Baluran. Pada hari Sabtu tanggal 28 April 2018 telah lahir anak ke 4 dari pasangan Banteng Tinda dan Doni.Berdasarkan informasi dari penanggung jawab Suaka Banteng, hari perkiraan lahir (HPL) dari anakan ini memang telah diprediksi akan terjadi antara akhir April atau awal Mei dikarenakan petugas melihat dan mencatat proses perkawinan kedua indukan sehingga perkiraan HPL dapat dihitung.Proses kelahiran terjadi pada Sabtu malam pada pukul 21.00 WIB dan kemudian pada keesokan paginya dilakukan pemeriksaan pada anak Banteng berjenis kelamin Betina ini. Berdasarkan hasil pemeriksaan anak Banteng ini memiliki lebar 68 cm dan panjang 104 cm tinggi 65 cm dan berat badan 11 Kg. Kondisinya sangat sehat dengan terperatur tubuh 37C. Dengan kelahiran ini maka Banteng yang ada di Suaka Banteng Bekol bertambah menjadi 7 ekor.Sekretaris Daerah Kabupaten Situbondo diberi kehormatan untuk memberi nama pada anak Banteng ini dan diberi nama Srikandi. Dengan nama itu diharapkan anak Banateng ini dapat menjadi pejuang untuk dapat melahirkan banyak anak Banteng lainnya sehinnga populasi Banteng di Baluran dapat terus meningkat.&nbsp;Sumber : BTN Baluran', 'berita/gwpr8VtlXG3kQ2Hc2wClQ0IdtrYsK0BbzIjFJJDi.jpg', '2018-05-07', '2025-08-27 22:05:00', '2025-08-27 22:05:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `judul`, `deskripsi`, `tanggal`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'JELAJAH TN & TWA, BALURAN', 'TELAH DIBUKAPendaftaran: 12 – 15 Juni 2025Hai Conservationmate,Saatnya menjelajah “Africa van Java” dan menikmati alam liar yang memukau! 🐃🌾Pendaftaran sesi 1 resmi dibuka — jangan sampai kehabisan slot, karena kuotanya terbatas ya...📍 Taman Nasional Baluran🎒 Kuota terbatas!Share juga ke teman yang butuh petualangan asli-asli, bukan healing ke mall doang 😜', '2025-06-12', NULL, '2025-08-27 23:30:59', '2025-08-27 23:30:59'),
(2, 'MERAK (Merayakan Konservasi Alam)', 'Hai sobat Baluran, bertepatan dengan Hari Konservasi Alam Nasional di tahun 2025, yuk ikuti MERAK (Merayakan Konservasi Alam) yang akan dilaksanakan pada :- Minggu, 10 Agustus 2025- Pukul 06.00 - 10.00 WIB- CFD depan Graha BNI (Jl. Sudirman-Thamrin)Ayo segera scan QR Code untuk melakukan pendaftaran, dapatkan merchandise dan bibit pohon selama kesempatan masih ada ya 😁Salam Konservasi 🙏', '2025-08-10', NULL, '2025-08-27 23:36:55', '2025-08-27 23:36:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_images`
--

CREATE TABLE `event_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event_images`
--

INSERT INTO `event_images` (`id`, `event_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'events/yhp9XN5oZ0AKV1FmG8xmzhXHjtiZzo4R7MGrBu7y.jpg', '2025-08-27 23:30:59', '2025-08-27 23:30:59'),
(2, 1, 'events/nEZKh4HRKrsXl8b2eoyEIfEtVFgbIw3n1TJ9F72A.jpg', '2025-08-27 23:30:59', '2025-08-27 23:30:59'),
(3, 1, 'events/Fz2CKE5GEeegZKgDvoH4MCA6cJOzxiR0EbFyXoMe.jpg', '2025-08-27 23:30:59', '2025-08-27 23:30:59'),
(4, 1, 'events/9t487hvtlPOENLlyBfo3kCobvt9jNOYAvvydl9Bi.jpg', '2025-08-27 23:30:59', '2025-08-27 23:30:59'),
(5, 2, 'events/8ZSKG159TwrJ2YTfMVGXDMm72OgwoUcvSuZAjbZd.jpg', '2025-08-27 23:36:55', '2025-08-27 23:36:55'),
(6, 2, 'events/dy4kTbAXssYuwnpEhvU92Lv3T7sCThslfGMaBg24.jpg', '2025-08-27 23:36:55', '2025-08-27 23:36:55'),
(7, 2, 'events/z34FhFffUYJTplsZGlFBpegomyqKR1Q6Kr9X8xwr.jpg', '2025-08-27 23:36:55', '2025-08-27 23:36:55'),
(8, 2, 'events/IR8DOtp46zqHvG1rNbKdfT4wU1JuByxiCu9T7h8Y.jpg', '2025-08-27 23:36:55', '2025-08-27 23:36:55'),
(9, 2, 'events/HmyQI3F36kgRkIIVXpciHmiZ0vVSYg9tlA9RaJAh.jpg', '2025-08-27 23:36:55', '2025-08-27 23:36:55'),
(10, 2, 'events/t1ctSbBb7zDLoteNrqvi2R5KBpongtPbcZtgotT9.jpg', '2025-08-27 23:36:56', '2025-08-27 23:36:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Apa itu Taman Nasional Baluran?', 'Taman Nasional Baluran adalah kawasan konservasi alam yang terletak di Kabupaten Situbondo dan Banyuwangi, Jawa Timur. Kawasan ini dikenal dengan sebutan \"Africa van Java\" karena memiliki savana luas, berbagai satwa liar, hutan mangrove, hutan musim, dan pemandangan Gunung Baluran sebagai latar belakangnya.', '2025-08-27 00:47:06', '2025-08-27 00:47:06'),
(2, 'Daya tarik utama Taman Nasional Baluran?', 'Daya tarik utama Taman Nasional Baluran meliputi Savana Bekol, Pantai Bama, dan berbagai jenis satwa liar seperti banteng, rusa, merak, dan monyet ekor panjang.', '2025-08-27 00:47:06', '2025-08-27 00:47:06'),
(3, 'Kapan jam operasional Taman Nasional Baluran?', 'Taman Nasional Baluran umumnya buka setiap hari mulai pukul 07.30 WIB hingga 16.00 WIB. Jam operasional dapat berubah sewaktu-waktu tergantung kebijakan pengelola atau kondisi cuaca.', '2025-08-27 00:47:06', '2025-08-27 00:47:06'),
(4, 'Jenis kendaraan apa yang di perbolehkan masuk?', 'Kendaraan roda dua dan roda empat pribadi diizinkan masuk ke kawasan utama. Namun, untuk menjelajahi area savana dan rute tertentu, disarankan menggunakan kendaraan sewaan seperti **trooper** yang disediakan oleh pengelola untuk keamanan dan kenyamanan.', '2025-08-27 00:47:06', '2025-08-27 00:47:06'),
(5, 'Satwa apa saja yang dapat ditemui di Baluran?', 'Baluran adalah rumah bagi berbagai satwa liar, termasuk rusa timor, banteng jawa, kerbau liar, ajak (anjing hutan), dan burung merak hijau. Anda bisa menjumpai mereka saat berkunjung ke area savana.', '2025-08-27 00:47:06', '2025-08-27 00:47:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori` enum('Flora','Fauna','Kegiatan') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`id`, `judul`, `gambar`, `deskripsi`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Monyet Ekor Panjang (Macaca fascicularis)', '1756363266_monyet.jpg', 'Primata yang paling mudah ditemui di Baluran. Hidup berkelompok dan sering terlihat di sekitar area wisata, seperti pos jaga atau sumber air. Bersifat omnivora dan cukup adaptif terhadap lingkungan. Pengunjung perlu berhati-hati karena monyet ini sering mendekati manusia untuk mencari makanan.', 'Fauna', '2025-08-27 23:41:06', '2025-08-27 23:41:06'),
(2, 'Banteng Jawa (Bos javanicus)', '1756363322_banteng.jpg', 'Hewan ikonik Baluran yang menjadi simbol taman nasional ini. Banteng hidup berkelompok dan sering terlihat di padang savana Bekol.', 'Fauna', '2025-08-27 23:42:02', '2025-08-27 23:42:02'),
(3, 'Rusa Timor (Rusa timorensis)', '1756363357_rusa.jpg', 'Satwa herbivora yang sering menjadi mangsa predator. Mudah ditemui di padang rumput dan hutan musim Baluran.', 'Fauna', '2025-08-27 23:42:37', '2025-08-27 23:42:37'),
(4, 'Merak Hijau (Pavo muticus)', '1756363446_merak.jpg', 'Burung eksotis dengan ekor panjang berwarna hijau keemasan, sering terlihat di savana dan hutan terbuka', 'Fauna', '2025-08-27 23:44:06', '2025-08-27 23:44:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_items`
--

CREATE TABLE `gallery_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2025_08_27_014946_create_announcements_table', 1),
(2, '0001_01_01_000000_create_users_table', 2),
(3, '0001_01_01_000001_create_cache_table', 2),
(4, '0001_01_01_000002_create_jobs_table', 2),
(5, '2025_06_18_022904_create_categories_table', 2),
(6, '2025_06_20_010604_create_faqs_table', 2),
(7, '2025_06_23_022717_create_beritas_table', 2),
(8, '2025_06_23_073123_create_events_table', 2),
(9, '2025_08_04_073838_create_galeris_table', 2),
(10, '2025_08_12_011841_create_posts_table', 2),
(11, '2025_08_12_011852_create_post_images_table', 2),
(12, '2025_08_12_065246_create_event_images_table', 2),
(13, '2025_08_14_014526_create_accommodations_table', 2),
(14, '2025_08_27_014803_create_announcements_table', 3),
(15, '2025_08_27_014815_create_gallery_items_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_images`
--

CREATE TABLE `post_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-08-27 00:42:07', '$2y$12$XGjoVEjS8NBlpbfXF7xBmOr.2sF1JNAP/f0FPhjf8XyT22SN.zRxy', 'gbnYAAV1mb', '2025-08-27 00:42:07', '2025-08-27 00:42:07'),
(2, 'Admin Baluran', 'admin@baluran.go.id', NULL, '$2y$12$/asjulmaRA0ytjbqAhwnVeQk.6adGn/WaLonI6K6TnAuODRgq7Kb.', NULL, '2025-08-27 00:42:08', '2025-08-27 00:42:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `accommodations`
--
ALTER TABLE `accommodations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event_images`
--
ALTER TABLE `event_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_images_event_id_foreign` (`event_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery_items`
--
ALTER TABLE `gallery_items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_images_post_id_foreign` (`post_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `accommodations`
--
ALTER TABLE `accommodations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `event_images`
--
ALTER TABLE `event_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `gallery_items`
--
ALTER TABLE `gallery_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `event_images`
--
ALTER TABLE `event_images`
  ADD CONSTRAINT `event_images_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `post_images`
--
ALTER TABLE `post_images`
  ADD CONSTRAINT `post_images_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
