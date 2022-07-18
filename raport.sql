-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2022 pada 20.58
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raport`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_rombel`
--

CREATE TABLE `anggota_rombel` (
  `id_anggota_rombel` int(11) NOT NULL,
  `id_ta` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `c_academik` text DEFAULT NULL,
  `id_pkl` int(11) DEFAULT NULL,
  `id_absensi` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `ijin` int(11) DEFAULT NULL,
  `alpa` int(11) DEFAULT NULL,
  `pramuka` varchar(255) DEFAULT NULL,
  `karya_ilmiah` varchar(255) DEFAULT NULL,
  `baca_alquran` varchar(255) DEFAULT NULL,
  `integritas` text DEFAULT NULL,
  `religius` text DEFAULT NULL,
  `nasionalis` text DEFAULT NULL,
  `mandiri` text DEFAULT NULL,
  `gotong_royong` text DEFAULT NULL,
  `catatan_karakter` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota_rombel`
--

INSERT INTO `anggota_rombel` (`id_anggota_rombel`, `id_ta`, `id_kelas`, `id_siswa`, `c_academik`, `id_pkl`, `id_absensi`, `sakit`, `ijin`, `alpa`, `pramuka`, `karya_ilmiah`, `baca_alquran`, `integritas`, `religius`, `nasionalis`, `mandiri`, `gotong_royong`, `catatan_karakter`) VALUES
(28, NULL, 4, 7, 'Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengikuti kegiatan ekstrakurikuler yang ditekuninya dengan sangat baik', 2, NULL, 0, 0, 0, 'Baik', 'Baik', NULL, 'Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih. Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima k', 'Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih. Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima k', 'Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih. Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima k', 'Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih. Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima k', 'Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih. Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima k', 'Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengikuti kegiatan ekstrakurikuler yang ditekuninya dengan sangat baik Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengik Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengikuti kegiatan ekstrakurikuler yang ditekuninya dengan sangat baik'),
(29, NULL, 4, 43, 'Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengikuti kegiatan ekstrakurikuler yang ditekuninya dengan sangat baik', 1, NULL, 11, 4, 14, 'Baik', 'Baik', NULL, 'Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengikuti kegiatan ekstrakurikuler yang ditekuninya dengan sangat baik Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengik', 'Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih. Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih. Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih.', 'Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih. Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih.', 'Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih. Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih.', 'Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih. Saya dengan ini bermaksud untuk mengundurkan diri sebagai karyawan PT. Kanindo Makmur Jaya karena Hamil tidak mampu bekerja. Surat pengunduran ini saya buat sesuai dengan prosedur hubungan industrial tanpa andanya motivasi negatif. Saya sangat berterima kasih kepada perusahaan yang telah menerima saya bekerja. Saya juga memohon maaf pada perusahaan serta teman-teman sejawat bila ada kesalahan yang saya baik disengaja maupun tidak.  Demikian surat pengunduran diri ini saya buat. Atas perhatian serta pemahamannya saya ucapkan terima kasih.', 'Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengikuti kegiatan ekstrakurikuler yang ditekuninya dengan sangat baik Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengikuti kegiatan ekstrakurikuler yang ditekuninya dengan sangat baik Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengikuti kegiatan ekstrakurikuler yang ditekuninya dengan sangat baik Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengikuti kegiatan ekstrakurikuler yang ditekuninya dengan sangat baik Ananda menunjukkan perkembangan karakter yang baik pada pembelajaran semester ini. Serta mengikuti kegiatan ekstrakurikuler yang ditekuninya dengan sangat baik'),
(30, NULL, 21, 122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, 21, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, 21, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, 21, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, 4, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, 4, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `eskul`
--

CREATE TABLE `eskul` (
  `id_eskul` int(11) NOT NULL,
  `eskul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `eskul`
--

INSERT INTO `eskul` (`id_eskul`, `eskul`) VALUES
(1, 'Kegiatan Kepramukaan'),
(2, 'Kegiatan Karya Ilmiah'),
(3, 'Seni Baca Al-Qur\'an');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keahlian`
--

CREATE TABLE `keahlian` (
  `id_keahlian` int(11) NOT NULL,
  `k_keahlian` varchar(4) NOT NULL,
  `bid_keahlian` varchar(50) NOT NULL,
  `prog_keahlian` varchar(50) NOT NULL,
  `komp_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keahlian`
--

INSERT INTO `keahlian` (`id_keahlian`, `k_keahlian`, `bid_keahlian`, `prog_keahlian`, `komp_keahlian`) VALUES
(1, '108', 'Bisnis dan Managemen', 'Bisnis dan Pemasaran', 'Bisnis Daring dan Pemasaran'),
(2, '110', 'Bisnis dan Managemen', 'Managemen Perkantoran', 'Otomatisasi dan Tata Kelola Perkantoran'),
(3, '041', 'Teknologi dan Rekayasa', 'Teknik Otomotif', 'Teknik dan Bisnis Sepeda Motor'),
(4, '066', 'Teknologi Informasi dan Komunikasi', 'Teknik Komputer dan Informatika', 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL,
  `kode_kelas` varchar(25) DEFAULT NULL,
  `id_keahlian` int(11) DEFAULT NULL,
  `id_ptk` int(11) DEFAULT NULL,
  `id_ta` int(11) DEFAULT NULL,
  `pass_word` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kode_kelas`, `id_keahlian`, `id_ptk`, `id_ta`, `pass_word`) VALUES
(4, 'X', 'X-TKJ', 4, 32, 1, 'W123456'),
(8, 'X', 'XI-TKJ', 4, 30, 1, 'W123456'),
(13, 'X', 'XII-TKJ', 4, 11, 2, 'W123456'),
(21, 'X', 'X-BDP', 1, 31, 1, 'W123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `leger`
--

CREATE TABLE `leger` (
  `id_leger` int(11) NOT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `id_rombel` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_academik` int(11) DEFAULT NULL,
  `id_c_academik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `k_mapel` varchar(11) NOT NULL,
  `mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `k_mapel`, `mapel`) VALUES
(1, 'A1', 'Pendidikan Agama dan Budi Pekerti'),
(2, 'A2', 'Pendidikan Pancasila dan Kewarganegaraan'),
(3, 'A3', 'Bahasa Indonesia'),
(4, 'A4', 'Matematika'),
(5, 'A5', 'Sejarah Indonesia'),
(6, 'A6', 'Bahasa Inggris dan Bahasa Asing Lainnya*)'),
(7, 'B1', 'Seni Budaya'),
(8, 'B2', 'Pendidikan Jasmani Olahraga dan Kesehatan'),
(9, 'B3', 'Bahasa Jawa'),
(10, 'C1', 'Simulasi dan Komunikasi Digital'),
(17, 'C2', 'PKK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapelkelas`
--

CREATE TABLE `mapelkelas` (
  `id_mapelkelas` int(11) NOT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_ptk` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapelkelas`
--

INSERT INTO `mapelkelas` (`id_mapelkelas`, `id_mapel`, `id_ptk`, `id_kelas`, `id_siswa`) VALUES
(12, 9, 6, 4, 43),
(13, 2, 17, 4, 7),
(27, 1, 13, 4, 43),
(28, 9, 6, 8, 7),
(29, 9, 6, 13, 43),
(30, 9, 6, 21, 7),
(31, 10, 23, 21, NULL),
(32, 7, 23, 13, NULL),
(33, 17, 23, 13, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `n_absensi`
--

CREATE TABLE `n_absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `alpa` int(2) DEFAULT NULL,
  `ijin` int(2) DEFAULT NULL,
  `sakit` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `n_c_academik`
--

CREATE TABLE `n_c_academik` (
  `id_c_academik` int(11) NOT NULL,
  `id_anggota_rombel` int(11) DEFAULT NULL,
  `id_rombel` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `c_academik` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `n_eskul`
--

CREATE TABLE `n_eskul` (
  `id_n_eskul` int(11) NOT NULL,
  `id_anggota_rombel` int(11) DEFAULT NULL,
  `id_eskul` int(11) DEFAULT NULL,
  `ket_eskul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `n_eskul`
--

INSERT INTO `n_eskul` (`id_n_eskul`, `id_anggota_rombel`, `id_eskul`, `ket_eskul`) VALUES
(1, 25, 1, ''),
(2, 26, 1, ''),
(3, 28, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `n_pkl`
--

CREATE TABLE `n_pkl` (
  `id_pkl` int(11) NOT NULL,
  `nama_dudi` varchar(255) NOT NULL,
  `temp_dudi` varchar(255) NOT NULL,
  `lama_pkl` varchar(100) NOT NULL,
  `ket_pkl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `n_pkl`
--

INSERT INTO `n_pkl` (`id_pkl`, `nama_dudi`, `temp_dudi`, `lama_pkl`, `ket_pkl`) VALUES
(1, 'AWE Computer', 'Mantingan', '3 (Bualan)', 'Baik'),
(2, 'Surya Computer', 'Jl Ganesa', '3 Bulan', 'Baik'),
(3, 'Surya Computer', 'Jl Ganesa', '3 Bulan', 'Cukup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ptk`
--

CREATE TABLE `ptk` (
  `id_ptk` int(11) NOT NULL,
  `niy` varchar(10) DEFAULT NULL,
  `nuptk` varchar(16) DEFAULT NULL,
  `nama_ptk` varchar(100) DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL,
  `t_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `foto_ptk` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ptk`
--

INSERT INTO `ptk` (`id_ptk`, `niy`, `nuptk`, `nama_ptk`, `jk`, `t_lahir`, `tgl_lahir`, `alamat`, `telp`, `email`, `foto_ptk`, `password`) VALUES
(3, '20050004', '9845760662200002', 'Robet Isnandar', 'L', 'Jepara', '1982-05-13', 'Buaran RT. 4/3 Mayong Jepara', '', 'laifcity@gmail.com', 'DPP_11.JPG', '123'),
(5, '20050005', '1441755656200003', 'Arif Jauhari', 'L', 'Jepara', '1977-07-07', 'Singorojo', '', 'smkterpaduhadziqiyyah@gmail.com', '20050005.jpg', '123'),
(6, '20200010', '1234567812345678', 'Bekti Adi Kurniawan', 'L', 'Jepara', '1988-08-20', 'Buaran', '081000000000', 'johnklenyer@gmail.com', '1650487407_8fec28bdd8207ad2adc9.jpg', '123456'),
(7, '20200011', '0237770671130013', 'Durrotun Nafisah', 'P', 'Jepara', '1999-12-12', 'Kalipucang Wetan', '', 'nafis.dr91@gmail.com', 'avatar.png', '123456'),
(8, '20200012', '', 'Iin Susanti', 'P', 'Jepara', '2028-02-02', 'Nalumsari', '', 'iintavan931@gmail.com', 'avatar.png', '123456'),
(9, '20200013', '', 'Iis Pantiana Tungga Dewi', 'P', 'Jepara', '0000-00-00', 'Nalumsari', '', 'iis.pantiana@yahoo.com', 'avatar.png', '123456'),
(10, '20200014', '', 'Khofiya Nida', 'P', 'Jepara', '0000-00-00', 'Nalumsari', '', 'every.early23@gmail.com', 'avatar.png', '123456'),
(11, '20200015', '', 'Khoirin Nafida', 'P', 'Jepara', '0000-00-00', 'Nalumsari', '', 'rinafida@gmail.com', 'avatar.png', '123456'),
(12, '20200016', '-', 'Miftahul Faizah', 'P', 'Jepara', '1985-12-12', 'Pelang', '', 'miftafaizah15@gmail.com', 'avatar.png', '123456'),
(13, '20200017', '', 'Mintarsih', 'P', 'Jepara', '0000-00-00', 'Nalumsari', '', 'wawanajwa77@yahoo.co.id', 'avatar.png', '123456'),
(14, '20200018', '', 'Misbahul Munir', 'L', 'Jepara', '0000-00-00', 'Gemiring Lor', '', 'munir.penggung@gmail.com', 'avatar.png', '123456'),
(15, '20200019', '', 'Nailis Sa\'adah', 'P', 'Jepara', '0000-00-00', 'Gemiring Kidul', '', 'naylisaaaaa@gmail.com', 'avatar.png', '123456'),
(16, '20200020', '', 'Niko Dwi Saputra', 'L', 'Jepara', '0000-00-00', 'Ngetuk', '', 'niko.dsaputra92@gmail.com', 'avatar.png', '123456'),
(17, '20200021', '0237770671130013', 'Rifqi Hidayat', 'L', 'Jepara', '1992-12-12', 'Kalipucang Wetan', '', 'rifqikers@gmail.com', 'avatar.png', '123456'),
(18, '20200023', '', 'Rodiansyah', 'P', 'Jepara', '0000-00-00', 'Gemiring Kidul', '', 'zubairhilmi85@gmail.com', 'avatar.png', '123456'),
(19, '20200024', '', 'Uslikha Aprisha Utami', 'P', 'Kudus', '0000-00-00', 'Buaran', '', 'aprisha87@gmail.com', 'avatar.png', '123456'),
(20, '20200025', '', 'Zaimuddin', 'L', 'Jepara', '0000-00-00', 'Gemiring Kidul', '', 'zaim.din69@gmail.com', 'avatar.png', '123456'),
(21, '20200026', '', 'Zulfan Ade Setiawan', 'L', 'Kudus', '0000-00-00', 'Padurenan', '', 'jopan18@gmail.com', 'avatar.png', '123456'),
(22, '20200027', '', 'Lailatul Choiriyah', 'P', '', '0000-00-00', '', '', '', 'avatar.png', '123456'),
(23, '20200028', '', 'Syafii', 'L', '', '0000-00-00', '', '', '', 'avatar.png', '123456'),
(24, '20200029', '1234567812345678', 'Naimatul Mufidah', 'P', 'Demak', '1999-12-19', 'Demak', '', 'smkterpaduhadziqiyyah@gmail.com', '1650530491_d569f64839d93eba634e.jpg', '123456'),
(25, '20200030', '', 'Nala Khutmiatul Abidah', 'P', '', '0000-00-00', '', '', '', 'avatar.png', '123456'),
(26, '20200031', '', 'Muthli\'atus Saadah', 'P', '', '0000-00-00', '', '', '', 'avatar.png', '123456'),
(27, '20200032', '', 'Effira Iftihatul Hidayah', 'P', '', '0000-00-00', '', '', '', 'avatar.png', '10052022'),
(28, '20200033', '', 'Bukhori', 'L', '', '0000-00-00', '', '', '', 'avatar.png', '10052022'),
(29, '20200034', '', 'Angki Setiawan', 'L', '', '0000-00-00', '', '', '', 'avatar.png', '10052022'),
(30, '20200035', '', 'Khoirul Falah', 'L', '', '0000-00-00', '', '', '', 'avatar.png', '10052022'),
(31, '20200036', '', 'Abdul Ghofur', 'L', '', '0000-00-00', '', '', '', 'avatar.png', '07052022'),
(32, '20200037', '', 'Agus Wantoro', 'L', '', '0000-00-00', '', '', '', 'avatar.png', '10052022'),
(33, '20200038', '', 'Abdullah Harno', 'L', 'Jepara', '1999-12-12', 'Jatisari', '', 'laifcity@gmail.com', '1650487380_2e1134158f9b91d0b8e5.jpg', '10052022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rombel`
--

CREATE TABLE `rombel` (
  `id_rombel` int(11) NOT NULL,
  `tahun_angkatan` int(4) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_ptk` int(11) DEFAULT NULL,
  `id_keahlian` int(11) DEFAULT NULL,
  `pass_word` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rombel`
--

INSERT INTO `rombel` (`id_rombel`, `tahun_angkatan`, `id_kelas`, `id_ptk`, `id_keahlian`, `pass_word`) VALUES
(19, 2021, 1, 27, 1, 'W123456'),
(20, 2021, 2, 28, 2, 'W123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rombel_mapel`
--

CREATE TABLE `rombel_mapel` (
  `id_rombelmapel` int(11) NOT NULL,
  `id_mapelkelas` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `pengetahuan` decimal(2,0) DEFAULT NULL,
  `ketrampilan` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rombel_mapel`
--

INSERT INTO `rombel_mapel` (`id_rombelmapel`, `id_mapelkelas`, `id_siswa`, `pengetahuan`, `ketrampilan`) VALUES
(1, 12, 7, '99', '99'),
(2, 12, 43, '85', '95'),
(20, 31, 32, NULL, NULL),
(21, 31, 30, NULL, NULL),
(22, 31, 31, NULL, NULL),
(23, 31, 122, NULL, NULL),
(24, 30, 32, NULL, NULL),
(25, 12, 14, '99', '99'),
(26, 12, 33, '80', '80');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `nis` int(10) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `t_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `st_keluarga` varchar(50) DEFAULT NULL,
  `anak_ke` int(5) DEFAULT NULL,
  `alm_siswa` varchar(100) DEFAULT NULL,
  `tlp_siswa` int(15) DEFAULT NULL,
  `skl_asal` varchar(100) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_keahlian` int(11) DEFAULT NULL,
  `dt_tgl` date DEFAULT NULL,
  `nm_ayah` varchar(100) DEFAULT NULL,
  `nm_ibu` varchar(100) DEFAULT NULL,
  `alm_ortu` varchar(100) DEFAULT NULL,
  `tlp_ortu` int(15) DEFAULT NULL,
  `pek_ayah` varchar(100) DEFAULT NULL,
  `pek_ibu` varchar(100) DEFAULT NULL,
  `nm_wali` varchar(100) DEFAULT NULL,
  `alm_wali` varchar(100) DEFAULT NULL,
  `tlp_wali` int(15) DEFAULT NULL,
  `pek_wali` varchar(100) DEFAULT NULL,
  `foto_siswa` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `nis`, `nisn`, `t_lahir`, `tgl_lahir`, `jk`, `agama`, `st_keluarga`, `anak_ke`, `alm_siswa`, `tlp_siswa`, `skl_asal`, `id_kelas`, `id_keahlian`, `dt_tgl`, `nm_ayah`, `nm_ibu`, `alm_ortu`, `tlp_ortu`, `pek_ayah`, `pek_ibu`, `nm_wali`, `alm_wali`, `tlp_wali`, `pek_wali`, `foto_siswa`, `password`) VALUES
(7, 'Erika Fitriyani', 0, '0066804910', 'Kudus', '2006-05-06', '2', 'Islam', 'Anak Kandung', 1, 'Buaran', 0, 'SMP Terpadu Hadziqiyyah', 4, 4, '2021-07-15', '', '', '', 0, '', '', '', '', 0, '', 'avatar.png', '123456'),
(14, 'Bunga Citra Lestari', 0, '0055097295', '', '2005-11-21', '2', 'Islam', '', 0, '', 0, '', 4, 4, '0000-00-00', '', '', '', 0, '', '', '', '', 0, '', 'avatar.png', NULL),
(30, 'Rika Amelia', 0, '0053434396', '', '2005-02-16', '2', 'Islam', '', 0, '', 0, '', 21, 1, '0000-00-00', '', '', '', 0, '', '', '', '', 0, '', 'avatar.png', NULL),
(31, 'Riris Maharani', 0, '0062649926', '', '2006-02-22', '2', 'Islam', '', 0, '', 0, '', 21, 1, '0000-00-00', '', '', '', 0, '', '', '', '', 0, '', 'avatar.png', NULL),
(32, 'Sahnata Tristia Anggraini', 0, '0052150243', '', '2005-08-17', '2', 'Islam', '', 0, '', 0, '', 21, 1, '0000-00-00', '', '', '', 0, '', '', '', '', 0, '', 'avatar.png', NULL),
(33, 'Siti Khotimah', 0, '0063142648', '', '2006-04-18', '2', 'Islam', '', 0, '', 0, '', 4, 4, '0000-00-00', '', '', '', 0, '', '', '', '', 0, '', 'avatar.png', NULL),
(43, 'Ahmad Zabidin', 2019001000, '0061069878', '', '2006-01-23', '1', 'Islam', '', 0, '', 0, '', 4, 4, '0000-00-00', '', '', '', 0, '', '', '', '', 0, '', 'avatar.png', NULL),
(122, 'sabil', 1000, '', 'Kudus', '1999-12-12', '1', NULL, NULL, NULL, 'Buaran', NULL, 'SMP Terpadu Hadziqiyyah', 21, 1, '2022-12-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1654094050_fe0128544341e8b51369.png', 'S123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` varchar(30) DEFAULT NULL,
  `smt` varchar(11) DEFAULT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`, `smt`, `status`) VALUES
(1, '2021/2022', 'Ganjil', 0),
(2, '2021/2022', 'Genap', 0),
(6, '2022/2023', 'Ganjil', 1),
(7, '2022/2023', 'Genap', 0),
(9, '2023/2024', 'Ganjil', 0),
(10, '2023/2024', 'Genap', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gurumapel`
--

CREATE TABLE `tbl_gurumapel` (
  `id_gurumapel` int(11) NOT NULL,
  `id_ptk` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gurumapel`
--

INSERT INTO `tbl_gurumapel` (`id_gurumapel`, `id_ptk`, `id_mapel`) VALUES
(1, 6, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_leger`
--

CREATE TABLE `tbl_leger` (
  `id_leger` int(11) NOT NULL,
  `id_ta` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `c_academik` varchar(255) DEFAULT NULL,
  `id_pkl` int(11) DEFAULT NULL,
  `id_eskul` int(11) DEFAULT NULL,
  `id_absensi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_leger`
--

INSERT INTO `tbl_leger` (`id_leger`, `id_ta`, `id_kelas`, `id_siswa`, `c_academik`, `id_pkl`, `id_eskul`, `id_absensi`) VALUES
(25, 1, 4, 43, '1', NULL, NULL, NULL),
(26, 1, 21, 122, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ta`
--

CREATE TABLE `tbl_ta` (
  `id_ta` int(11) NOT NULL,
  `tahun_angkatan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ta`
--

INSERT INTO `tbl_ta` (`id_ta`, `tahun_angkatan`) VALUES
(1, '2021'),
(2, '2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `namauser` varchar(255) DEFAULT NULL,
  `id_ptk` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `namauser`, `id_ptk`, `username`, `password`, `foto_user`) VALUES
(1, 'Robet Isnandar', 3, 'admin', '123456', '20050004.png'),
(18, 'Zufan', 21, 'kurikulum', 'A123456', 'avatar.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(4) NOT NULL,
  `foto_users` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `id_siswa`, `username`, `password`, `level`, `foto_users`, `created_at`, `updated_at`) VALUES
(1, 105, 'siswa1', 'siswa1', 4, 'avatar.png', NULL, NULL),
(2, 3, 'siswa2', 'siswa2', 4, 'avatar.png', NULL, NULL),
(3, 5, 'siswa3', 'siswa3', 4, 'avatar.png', '2021-09-09 17:46:28', '2021-09-09 17:46:28'),
(5, 3, 'siswa', 'siswa', 4, NULL, NULL, NULL),
(6, 105, '12345678', '12345678', 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali`
--

CREATE TABLE `wali` (
  `id_wali` int(11) NOT NULL,
  `id_walikelas` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wali`
--

INSERT INTO `wali` (`id_wali`, `id_walikelas`, `username`, `password`, `level`) VALUES
(2, 1, 'walikelas', 'tes', 2),
(3, 5, 'guru', 'tes', 2),
(6, 6, 'gurusmkhk123', 'tes', 2),
(8, 2, 'walismkhk123', 'tes', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `walikelas`
--

CREATE TABLE `walikelas` (
  `id_walikelas` int(11) NOT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `id_ptk` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `walikelas`
--

INSERT INTO `walikelas` (`id_walikelas`, `id_tahun`, `id_ptk`, `id_kelas`) VALUES
(1, 1, 7, 1),
(2, 1, 10, 10),
(3, 1, 16, 3),
(4, 1, 24, 13);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota_rombel`
--
ALTER TABLE `anggota_rombel`
  ADD PRIMARY KEY (`id_anggota_rombel`);

--
-- Indeks untuk tabel `eskul`
--
ALTER TABLE `eskul`
  ADD PRIMARY KEY (`id_eskul`);

--
-- Indeks untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `leger`
--
ALTER TABLE `leger`
  ADD PRIMARY KEY (`id_leger`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `mapelkelas`
--
ALTER TABLE `mapelkelas`
  ADD PRIMARY KEY (`id_mapelkelas`);

--
-- Indeks untuk tabel `n_absensi`
--
ALTER TABLE `n_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `n_c_academik`
--
ALTER TABLE `n_c_academik`
  ADD PRIMARY KEY (`id_c_academik`);

--
-- Indeks untuk tabel `n_eskul`
--
ALTER TABLE `n_eskul`
  ADD PRIMARY KEY (`id_n_eskul`);

--
-- Indeks untuk tabel `n_pkl`
--
ALTER TABLE `n_pkl`
  ADD PRIMARY KEY (`id_pkl`);

--
-- Indeks untuk tabel `ptk`
--
ALTER TABLE `ptk`
  ADD PRIMARY KEY (`id_ptk`);

--
-- Indeks untuk tabel `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`id_rombel`);

--
-- Indeks untuk tabel `rombel_mapel`
--
ALTER TABLE `rombel_mapel`
  ADD PRIMARY KEY (`id_rombelmapel`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`) USING BTREE;

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `tbl_gurumapel`
--
ALTER TABLE `tbl_gurumapel`
  ADD PRIMARY KEY (`id_gurumapel`);

--
-- Indeks untuk tabel `tbl_leger`
--
ALTER TABLE `tbl_leger`
  ADD PRIMARY KEY (`id_leger`);

--
-- Indeks untuk tabel `tbl_ta`
--
ALTER TABLE `tbl_ta`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- Indeks untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id_walikelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota_rombel`
--
ALTER TABLE `anggota_rombel`
  MODIFY `id_anggota_rombel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `eskul`
--
ALTER TABLE `eskul`
  MODIFY `id_eskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `leger`
--
ALTER TABLE `leger`
  MODIFY `id_leger` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `mapelkelas`
--
ALTER TABLE `mapelkelas`
  MODIFY `id_mapelkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `n_absensi`
--
ALTER TABLE `n_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `n_c_academik`
--
ALTER TABLE `n_c_academik`
  MODIFY `id_c_academik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `n_eskul`
--
ALTER TABLE `n_eskul`
  MODIFY `id_n_eskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `n_pkl`
--
ALTER TABLE `n_pkl`
  MODIFY `id_pkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ptk`
--
ALTER TABLE `ptk`
  MODIFY `id_ptk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `rombel`
--
ALTER TABLE `rombel`
  MODIFY `id_rombel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `rombel_mapel`
--
ALTER TABLE `rombel_mapel`
  MODIFY `id_rombelmapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_gurumapel`
--
ALTER TABLE `tbl_gurumapel`
  MODIFY `id_gurumapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_leger`
--
ALTER TABLE `tbl_leger`
  MODIFY `id_leger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_ta`
--
ALTER TABLE `tbl_ta`
  MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `wali`
--
ALTER TABLE `wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id_walikelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
