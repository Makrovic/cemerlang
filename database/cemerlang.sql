-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 09:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cemerlang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Makrovic', 'adminone', '$2y$10$yoO5Pw8qX3mVeW6i.ogB2u/NCrGlcEOhr7K18qEjMJmveOvrmozCu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alumni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `nama`, `ttl`, `alamat`, `alumni`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Urip Hidayat', 'Wonosobo 17-6-1989', 'Bomerto rt1 rw1 Wonosobo', 'Paket C', 'Bekerja di PT PANASONIC GOBEL Jl. Raya Margonda No.147 Depok Jakarta', 'ss1', NULL, NULL),
(2, 'Musafakul Afsor', 'Wonosobo 3-6-1989', 'Bumiroso rt8 rw4 Watumalang Wonosobo', 'Paket B', 'Berwirausaha Produksi Tahu dan Tempe (Kapasitas Produksi Perhari 1 Kwintal Kedelai)', 'ss2', NULL, NULL),
(3, 'Aini Lutfiana', 'Wonosobo 7-9-1986', 'Krasak rt4 rw4 Mojotengah', 'Paket C', 'Melakjutkan kuliah di UNSIQ  dan bekerja sebagai Pendidik PAUD', 'ss3', NULL, NULL),
(4, 'Narso', 'Banyumas 24-12-1980', 'Kalianget rt2 rw10 Wonosobo', 'Paket B', 'Bekerja di PLN Wonosobo', 'ss4', NULL, NULL),
(5, 'Nimatul Mufid', 'Kendal 25-6-1988', 'Munggang Bawah rt1 rw1 Mojotengah', 'Paket C', 'Melanjutkan kuliah di UNSIQ dan bekerja sebagai Pengajar di Ponpes', 'ss5', NULL, NULL),
(6, 'Matori', 'Temanggung 23-9-1979', 'Kalianget rt2 rw10 Wonosobo', 'Paket B', 'Bekerja di PLN Wonosobo', 'ss6', NULL, NULL),
(7, 'Farid Aryadi', 'Wonosobo 5-12-1990', 'Sumbersari rt2 rw5 Kejajar', 'Paket C', 'Bekerja di Kantor Kecamatan Kejajar', 'ss7', NULL, NULL),
(8, 'Margono', 'Wonosobo 27-7-1968', 'Pungangan Jurang rt1 rw2 Mojotengah', 'Paket C', 'Menjadi Kepala Desa Pungangan', 'ss8', NULL, NULL),
(9, 'Tambah', 'Wonosobo 31-12-1973', 'Krakal Santren rt1 rw2 Kertek Wonosobo', 'Paket C', 'Bekerja di PLN Wonosobo', 'ss9', NULL, NULL),
(10, 'Kolbi', 'Wonosobo 5-8-1971', 'Wonobungkah rt4 rw7 Wonosobo', 'Paket C', 'Bekerja di PLN Wonosobo', 'ss10', NULL, NULL),
(11, 'Irfan', 'Wonosobo 19-1-1984', 'Kalilawang rt6 rw3 Garung Wonosobo', 'Paket C', 'Bekerja di Kantor Kec. Garung', 'ss11', NULL, NULL),
(12, 'Hafid Fahrudin', 'Wonosobo 3-1-1989', 'Kejajar rt1 rww7 Wonosobo', 'Paket C', 'Bekerja di Kantor Kec. Kejajar', 'ss12', NULL, NULL),
(13, 'Mukhawanah', 'Wonosobo 7-6-1978', 'Tieng rt1 rw4 Kejajar Wonosobo', 'Paket C', 'Bekerja sebagai Pendidik TK', 'ss13', NULL, NULL),
(14, 'Emiliana', 'Wonosobo 26-8-1994', 'Perum Binamarga Kalierang Wonosobo', 'Paket C', 'Melanjutkan kuliah di UGM', 'ss14', NULL, NULL),
(15, 'Marzdiyati', 'Wonosobo 14-3-1993', 'Pesindon rt3 rw3 Mojotengah Wonosobo', 'Paket C', 'Melanjutkan kuliah di Akademi Perawat', 'ss15', NULL, NULL),
(16, 'Eva Zulaikha', 'Wonosobo 13-1-1990', 'Jl. Raya Dieng km17 Kejajar Wonosobo', 'Paket C', 'Melanjutkan kuliah di UIN dan bekerja sebagai pendidik PAUD', 'ss16', NULL, NULL),
(17, 'Luluk Zubaedah', 'Wonosobo 3-6-1990', 'Candirejo rt6 rw2 Mojotengah Wonosobo', 'Paket C', 'Melanjutkan kuliah di Akademi Perawat', 'ss17', NULL, NULL),
(18, 'Zulmi Suryaputra', 'Wonosobo 3-11-1993', 'Jl. Raya Dieng km3 Mojotengah Wonosobo', 'Paket C', 'Melanjutkan kuliah di UNSIQ', 'ss18', NULL, NULL),
(19, 'Nisro', 'Wonosobo 23-7-1984', 'Bugel Rt 3 Rw 5 Keseneng Wonosobo', 'Paket C ', 'Bekerja di Kantor Kecamatan Mojotengah', 'ss19', NULL, NULL),
(20, 'Agus Prasetyo', 'Purbalingga 6-8-1993', 'Jawar Rt 1 Rw 1 Mojotengah Wonosobo', 'Paket C ', 'Melanjutkan Kuliah di Univ. Sains Al-Qur’an', 'ss20', NULL, NULL),
(21, 'Khuyaimah', 'Wonosobo 19-1-1980', 'Kaliwiro Rt 1 Rw 1 Wonosobo', 'Paket C ', 'Melanjutkan ke Univ. Sains Al-Qur’an dan bekerja sebagai Pendidik PAUD', 'ss21', NULL, NULL),
(22, 'Suparman', 'Wonosobo 6-1-1981', 'Mlipak Rt 2 Rw 5 Wonosobo', 'Paket C', 'Bekerja di Kantor PLN Wonosobo', 'ss22', NULL, NULL),
(23, 'Purwanti', 'Boyolali 16-6-1980', 'Kebrengan Rt 2 Rw 1 Mojotengah Wonosobo', 'Kursus / Keterampilan Tata Boga', 'Berwirausaha Produksi Aneka Keripik Olahan dari Singkong', 'ss23', NULL, NULL),
(24, 'Asiyah', 'Wonosobo 23-3-1990', 'Kebrengan Rt 3 Rw 2 Mojotengah Wonosobo', 'Kursus / Keterampilan Handycraft', 'Berwirausaha Produksi Aneka Jilbab Sulpit dan Aksesoris', 'ss24', NULL, NULL),
(25, 'Sri Wiranti', 'Temanggung 11-10-1965', 'Pandansari Rt 1 Rw 3 Mojotengah Wonosobo', 'Kursus / Keterampilan Tata Busana', 'Berwirausaha membuka Konveksi di Mudal Mojotengah', 'ss25', NULL, NULL),
(26, 'Turinah', 'Wonosobo 8-6-1985', 'Janggrungan Rt 3 Rw 3 Kalibeber Wonosobo', 'Kursus / Keterampilan Bordir', 'Membuka Usaha Bordir dan Sablon', 'ss26', NULL, NULL),
(27, 'Purwani', 'Wonosobo 31-7-1992', 'Pungangan Gunung Rt 1 Rw 3 Wonosobo', 'Kursus / Keterampilan Menjahit', 'Membuka Usaha Jahitan', 'ss27', NULL, NULL),
(28, 'Asih Subekti', 'Wonosobo, 12-9-1978', 'Pandansari Rt 3 Rw 3 Wonosobo', 'Kursus / Keterampilan tata Kecantikan', 'Membuka Usaha Salon', 'ss28', NULL, NULL),
(29, 'Toha Zainul Fuad', 'Wonosobo 28-8-1978', 'Wonosari rt3 rtw9 Kejajar Wonosobo', 'Kursus / Keterampilan Bordir', 'Mumbukan Konveksi dan Jasa Bordir', 'ss29', NULL, NULL),
(30, 'Arifudin', 'Wonosobo 23-3-1987', 'Central rt2 rw10 Wonosobo', 'Kursus / Keterampilan Tata Kecantikan', 'Membuka Salon dan Perawatan Kecantikan', 'ss30', NULL, NULL),
(31, 'Lestari', 'Wonosobo 13-3-1976', 'Mutiara Persada rt5 rw5 Wonosobo', 'Kursus / Keterampilan Tata Busana', 'Membuka Konveksi dan Kursus Menjahit', 'ss31', NULL, NULL),
(32, 'Rosanah', 'Wonosobo 14-7-1984', 'Kreo rt1 rw3 Wonosobo', 'Kursus / Keterampilan Tata Boga', 'Berwirausaha Produksi Carica dan Aneka Oleh-oleh', 'ss32', NULL, NULL),
(33, 'Suyanti', 'Wonosobo 1-11-1990', 'Tungangan Jurang rt2 rw2 Wonosobo', 'Kursus / Keterampilan Handycraft', 'Berwirausaha Produksi Aneka Aksesoris dan Membuka Usaha Jahitan', 'ss33', NULL, NULL),
(34, 'Surahmadi', 'Wonosobo 24-9-1987', 'Sambek rt1 rw6 Wonosobo', 'Kursus / Keterampilan Tata Boga', 'Membuka Rumah Makan dan Kedai Mie Ongklok', 'ss34', NULL, NULL),
(35, 'Repin', 'Banjarnegara 2-5-1984', 'Dieng Kulon rt1 rw2 Dieng Wonosobo', 'Kursus / Keterampilan Teknisi HP', 'Membuka Counter dan Service Handphone', 'ss35', NULL, NULL),
(36, 'Akhfan Khasani', 'Wonosobo 2-1-1992', 'Jambean rt3 rw3 Kalibeber Wonosobo', 'Kursus / Keterampilan Bordir', 'Membuka Usaha Bordir dan Sablon', 'ss36', NULL, NULL),
(37, 'Dwi Musyarofah', 'Wonosobo 18-5-1994', 'Mekarsari rt3 rw5 Garung Wonosobo', 'Kursus / Keterampilan Tata Boga', 'Membuka Depot Ronde', 'ss37', NULL, NULL),
(38, 'Tohar Aji Prasetyo', 'Wonosobo 22-7-1988', 'Tracap rt4 rw2 Kaliwiro Wonosobo', 'Kursus / Keterampilan Desain Grafis', 'Membuka Percetakan dan Digital Printing', 'ss38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `kode_transaksi`, `kode_produk`, `nama_produk`, `jumlah`, `subtotal`) VALUES
(1, 'tr220118101', 'pmin220101', 'Carica Cup Mini 125gr isi 3 cup', 1, 20000),
(2, 'tr220118101', 'pmin220103', 'Carica Cup Mini 125gr isi 12 cup', 1, 80000),
(4, 'tr220118102', 'p220103', 'Carica Cup Mini 125gr isi 12 cup', 20, 1600000),
(7, 'tr220119143', 'pc220102', 'Carica Cup Mini 125gr isi 6 cup', 3, 120000),
(8, 'tr220120114', 'pc220101', 'Carica Cup Mini 125gr isi 3 cup', 2, 40000),
(9, 'tr220120114', 'pc220102', 'Carica Cup Mini 125gr isi 6 cup', 1, 40000),
(10, 'tr220125095', 'pc220101', 'Carica Cup Mini 125gr isi 3 cup', 2, 40000),
(11, 'tr220125095', 'pc220103', 'Carica Cup Mini 125gr isi 12 cup', 1, 60000),
(12, 'tr220126146', 'pc220101', 'Carica Cup Mini 125gr isi 3 cup', 3, 60000),
(13, 'tr220126146', 'pc220103', 'Carica Cup Mini 125gr isi 12 cup', 1, 60000),
(14, 'tr220126147', 'pc220101', 'Carica Cup Mini 125gr isi 3 cup', 3, 60000),
(15, 'tr220126147', 'pc220103', 'Carica Cup Mini 125gr isi 12 cup', 1, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kotas`
--

CREATE TABLE `kotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kotas`
--

INSERT INTO `kotas` (`id`, `province_id`, `province_name`, `city_id`, `city_type`, `city_name`, `created_at`, `updated_at`) VALUES
(1, '1', 'Bali', '17', 'Kabupaten', 'Badung', NULL, NULL),
(2, '1', 'Bali', '32', 'Kabupaten', 'Bangli', NULL, NULL),
(3, '1', 'Bali', '94', 'Kabupaten', 'Buleleng', NULL, NULL),
(4, '1', 'Bali', '114', 'Kota', 'Denpasar', NULL, NULL),
(5, '1', 'Bali', '128', 'Kabupaten', 'Gianyar', NULL, NULL),
(6, '1', 'Bali', '161', 'Kabupaten', 'Jembrana', NULL, NULL),
(7, '1', 'Bali', '170', 'Kabupaten', 'Karangasem', NULL, NULL),
(8, '1', 'Bali', '197', 'Kabupaten', 'Klungkung', NULL, NULL),
(9, '1', 'Bali', '447', 'Kabupaten', 'Tabanan', NULL, NULL),
(10, '2', 'Bangka Belitung', '27', 'Kabupaten', 'Bangka', NULL, NULL),
(11, '2', 'Bangka Belitung', '28', 'Kabupaten', 'Bangka Barat', NULL, NULL),
(12, '2', 'Bangka Belitung', '29', 'Kabupaten', 'Bangka Selatan', NULL, NULL),
(13, '2', 'Bangka Belitung', '30', 'Kabupaten', 'Bangka Tengah', NULL, NULL),
(14, '2', 'Bangka Belitung', '56', 'Kabupaten', 'Belitung', NULL, NULL),
(15, '2', 'Bangka Belitung', '57', 'Kabupaten', 'Belitung Timur', NULL, NULL),
(16, '2', 'Bangka Belitung', '334', 'Kota', 'Pangkal Pinang', NULL, NULL),
(17, '3', 'Banten', '106', 'Kota', 'Cilegon', NULL, NULL),
(18, '3', 'Banten', '232', 'Kabupaten', 'Lebak', NULL, NULL),
(19, '3', 'Banten', '331', 'Kabupaten', 'Pandeglang', NULL, NULL),
(20, '3', 'Banten', '402', 'Kabupaten', 'Serang', NULL, NULL),
(21, '3', 'Banten', '403', 'Kota', 'Serang', NULL, NULL),
(22, '3', 'Banten', '455', 'Kabupaten', 'Tangerang', NULL, NULL),
(23, '3', 'Banten', '456', 'Kota', 'Tangerang', NULL, NULL),
(24, '3', 'Banten', '457', 'Kota', 'Tangerang Selatan', NULL, NULL),
(25, '4', 'Bengkulu', '62', 'Kota', 'Bengkulu', NULL, NULL),
(26, '4', 'Bengkulu', '63', 'Kabupaten', 'Bengkulu Selatan', NULL, NULL),
(27, '4', 'Bengkulu', '64', 'Kabupaten', 'Bengkulu Tengah', NULL, NULL),
(28, '4', 'Bengkulu', '65', 'Kabupaten', 'Bengkulu Utara', NULL, NULL),
(29, '4', 'Bengkulu', '175', 'Kabupaten', 'Kaur', NULL, NULL),
(30, '4', 'Bengkulu', '183', 'Kabupaten', 'Kepahiang', NULL, NULL),
(31, '4', 'Bengkulu', '233', 'Kabupaten', 'Lebong', NULL, NULL),
(32, '4', 'Bengkulu', '294', 'Kabupaten', 'Muko Muko', NULL, NULL),
(33, '4', 'Bengkulu', '379', 'Kabupaten', 'Rejang Lebong', NULL, NULL),
(34, '4', 'Bengkulu', '397', 'Kabupaten', 'Seluma', NULL, NULL),
(35, '5', 'DI Yogyakarta', '39', 'Kabupaten', 'Bantul', NULL, NULL),
(36, '5', 'DI Yogyakarta', '135', 'Kabupaten', 'Gunung Kidul', NULL, NULL),
(37, '5', 'DI Yogyakarta', '210', 'Kabupaten', 'Kulon Progo', NULL, NULL),
(38, '5', 'DI Yogyakarta', '419', 'Kabupaten', 'Sleman', NULL, NULL),
(39, '5', 'DI Yogyakarta', '501', 'Kota', 'Yogyakarta', NULL, NULL),
(40, '6', 'DKI Jakarta', '151', 'Kota', 'Jakarta Barat', NULL, NULL),
(41, '6', 'DKI Jakarta', '152', 'Kota', 'Jakarta Pusat', NULL, NULL),
(42, '6', 'DKI Jakarta', '153', 'Kota', 'Jakarta Selatan', NULL, NULL),
(43, '6', 'DKI Jakarta', '154', 'Kota', 'Jakarta Timur', NULL, NULL),
(44, '6', 'DKI Jakarta', '155', 'Kota', 'Jakarta Utara', NULL, NULL),
(45, '6', 'DKI Jakarta', '189', 'Kabupaten', 'Kepulauan Seribu', NULL, NULL),
(46, '7', 'Gorontalo', '77', 'Kabupaten', 'Boalemo', NULL, NULL),
(47, '7', 'Gorontalo', '88', 'Kabupaten', 'Bone Bolango', NULL, NULL),
(48, '7', 'Gorontalo', '129', 'Kabupaten', 'Gorontalo', NULL, NULL),
(49, '7', 'Gorontalo', '130', 'Kota', 'Gorontalo', NULL, NULL),
(50, '7', 'Gorontalo', '131', 'Kabupaten', 'Gorontalo Utara', NULL, NULL),
(51, '7', 'Gorontalo', '361', 'Kabupaten', 'Pohuwato', NULL, NULL),
(52, '8', 'Jambi', '50', 'Kabupaten', 'Batang Hari', NULL, NULL),
(53, '8', 'Jambi', '97', 'Kabupaten', 'Bungo', NULL, NULL),
(54, '8', 'Jambi', '156', 'Kota', 'Jambi', NULL, NULL),
(55, '8', 'Jambi', '194', 'Kabupaten', 'Kerinci', NULL, NULL),
(56, '8', 'Jambi', '280', 'Kabupaten', 'Merangin', NULL, NULL),
(57, '8', 'Jambi', '293', 'Kabupaten', 'Muaro Jambi', NULL, NULL),
(58, '8', 'Jambi', '393', 'Kabupaten', 'Sarolangun', NULL, NULL),
(59, '8', 'Jambi', '442', 'Kota', 'Sungaipenuh', NULL, NULL),
(60, '8', 'Jambi', '460', 'Kabupaten', 'Tanjung Jabung Barat', NULL, NULL),
(61, '8', 'Jambi', '461', 'Kabupaten', 'Tanjung Jabung Timur', NULL, NULL),
(62, '8', 'Jambi', '471', 'Kabupaten', 'Tebo', NULL, NULL),
(63, '9', 'Jawa Barat', '22', 'Kabupaten', 'Bandung', NULL, NULL),
(64, '9', 'Jawa Barat', '23', 'Kota', 'Bandung', NULL, NULL),
(65, '9', 'Jawa Barat', '24', 'Kabupaten', 'Bandung Barat', NULL, NULL),
(66, '9', 'Jawa Barat', '34', 'Kota', 'Banjar', NULL, NULL),
(67, '9', 'Jawa Barat', '54', 'Kabupaten', 'Bekasi', NULL, NULL),
(68, '9', 'Jawa Barat', '55', 'Kota', 'Bekasi', NULL, NULL),
(69, '9', 'Jawa Barat', '78', 'Kabupaten', 'Bogor', NULL, NULL),
(70, '9', 'Jawa Barat', '79', 'Kota', 'Bogor', NULL, NULL),
(71, '9', 'Jawa Barat', '103', 'Kabupaten', 'Ciamis', NULL, NULL),
(72, '9', 'Jawa Barat', '104', 'Kabupaten', 'Cianjur', NULL, NULL),
(73, '9', 'Jawa Barat', '107', 'Kota', 'Cimahi', NULL, NULL),
(74, '9', 'Jawa Barat', '108', 'Kabupaten', 'Cirebon', NULL, NULL),
(75, '9', 'Jawa Barat', '109', 'Kota', 'Cirebon', NULL, NULL),
(76, '9', 'Jawa Barat', '115', 'Kota', 'Depok', NULL, NULL),
(77, '9', 'Jawa Barat', '126', 'Kabupaten', 'Garut', NULL, NULL),
(78, '9', 'Jawa Barat', '149', 'Kabupaten', 'Indramayu', NULL, NULL),
(79, '9', 'Jawa Barat', '171', 'Kabupaten', 'Karawang', NULL, NULL),
(80, '9', 'Jawa Barat', '211', 'Kabupaten', 'Kuningan', NULL, NULL),
(81, '9', 'Jawa Barat', '252', 'Kabupaten', 'Majalengka', NULL, NULL),
(82, '9', 'Jawa Barat', '332', 'Kabupaten', 'Pangandaran', NULL, NULL),
(83, '9', 'Jawa Barat', '376', 'Kabupaten', 'Purwakarta', NULL, NULL),
(84, '9', 'Jawa Barat', '428', 'Kabupaten', 'Subang', NULL, NULL),
(85, '9', 'Jawa Barat', '430', 'Kabupaten', 'Sukabumi', NULL, NULL),
(86, '9', 'Jawa Barat', '431', 'Kota', 'Sukabumi', NULL, NULL),
(87, '9', 'Jawa Barat', '440', 'Kabupaten', 'Sumedang', NULL, NULL),
(88, '9', 'Jawa Barat', '468', 'Kabupaten', 'Tasikmalaya', NULL, NULL),
(89, '9', 'Jawa Barat', '469', 'Kota', 'Tasikmalaya', NULL, NULL),
(90, '10', 'Jawa Tengah', '37', 'Kabupaten', 'Banjarnegara', NULL, NULL),
(91, '10', 'Jawa Tengah', '41', 'Kabupaten', 'Banyumas', NULL, NULL),
(92, '10', 'Jawa Tengah', '49', 'Kabupaten', 'Batang', NULL, NULL),
(93, '10', 'Jawa Tengah', '76', 'Kabupaten', 'Blora', NULL, NULL),
(94, '10', 'Jawa Tengah', '91', 'Kabupaten', 'Boyolali', NULL, NULL),
(95, '10', 'Jawa Tengah', '92', 'Kabupaten', 'Brebes', NULL, NULL),
(96, '10', 'Jawa Tengah', '105', 'Kabupaten', 'Cilacap', NULL, NULL),
(97, '10', 'Jawa Tengah', '113', 'Kabupaten', 'Demak', NULL, NULL),
(98, '10', 'Jawa Tengah', '134', 'Kabupaten', 'Grobogan', NULL, NULL),
(99, '10', 'Jawa Tengah', '163', 'Kabupaten', 'Jepara', NULL, NULL),
(100, '10', 'Jawa Tengah', '169', 'Kabupaten', 'Karanganyar', NULL, NULL),
(101, '10', 'Jawa Tengah', '177', 'Kabupaten', 'Kebumen', NULL, NULL),
(102, '10', 'Jawa Tengah', '181', 'Kabupaten', 'Kendal', NULL, NULL),
(103, '10', 'Jawa Tengah', '196', 'Kabupaten', 'Klaten', NULL, NULL),
(104, '10', 'Jawa Tengah', '209', 'Kabupaten', 'Kudus', NULL, NULL),
(105, '10', 'Jawa Tengah', '249', 'Kabupaten', 'Magelang', NULL, NULL),
(106, '10', 'Jawa Tengah', '250', 'Kota', 'Magelang', NULL, NULL),
(107, '10', 'Jawa Tengah', '344', 'Kabupaten', 'Pati', NULL, NULL),
(108, '10', 'Jawa Tengah', '348', 'Kabupaten', 'Pekalongan', NULL, NULL),
(109, '10', 'Jawa Tengah', '349', 'Kota', 'Pekalongan', NULL, NULL),
(110, '10', 'Jawa Tengah', '352', 'Kabupaten', 'Pemalang', NULL, NULL),
(111, '10', 'Jawa Tengah', '375', 'Kabupaten', 'Purbalingga', NULL, NULL),
(112, '10', 'Jawa Tengah', '377', 'Kabupaten', 'Purworejo', NULL, NULL),
(113, '10', 'Jawa Tengah', '380', 'Kabupaten', 'Rembang', NULL, NULL),
(114, '10', 'Jawa Tengah', '386', 'Kota', 'Salatiga', NULL, NULL),
(115, '10', 'Jawa Tengah', '398', 'Kabupaten', 'Semarang', NULL, NULL),
(116, '10', 'Jawa Tengah', '399', 'Kota', 'Semarang', NULL, NULL),
(117, '10', 'Jawa Tengah', '427', 'Kabupaten', 'Sragen', NULL, NULL),
(118, '10', 'Jawa Tengah', '433', 'Kabupaten', 'Sukoharjo', NULL, NULL),
(119, '10', 'Jawa Tengah', '445', 'Kota', 'Surakarta (Solo)', NULL, NULL),
(120, '10', 'Jawa Tengah', '472', 'Kabupaten', 'Tegal', NULL, NULL),
(121, '10', 'Jawa Tengah', '473', 'Kota', 'Tegal', NULL, NULL),
(122, '10', 'Jawa Tengah', '476', 'Kabupaten', 'Temanggung', NULL, NULL),
(123, '10', 'Jawa Tengah', '497', 'Kabupaten', 'Wonogiri', NULL, NULL),
(124, '10', 'Jawa Tengah', '498', 'Kabupaten', 'Wonosobo', NULL, NULL),
(125, '11', 'Jawa Timur', '31', 'Kabupaten', 'Bangkalan', NULL, NULL),
(126, '11', 'Jawa Timur', '42', 'Kabupaten', 'Banyuwangi', NULL, NULL),
(127, '11', 'Jawa Timur', '51', 'Kota', 'Batu', NULL, NULL),
(128, '11', 'Jawa Timur', '74', 'Kabupaten', 'Blitar', NULL, NULL),
(129, '11', 'Jawa Timur', '75', 'Kota', 'Blitar', NULL, NULL),
(130, '11', 'Jawa Timur', '80', 'Kabupaten', 'Bojonegoro', NULL, NULL),
(131, '11', 'Jawa Timur', '86', 'Kabupaten', 'Bondowoso', NULL, NULL),
(132, '11', 'Jawa Timur', '133', 'Kabupaten', 'Gresik', NULL, NULL),
(133, '11', 'Jawa Timur', '160', 'Kabupaten', 'Jember', NULL, NULL),
(134, '11', 'Jawa Timur', '164', 'Kabupaten', 'Jombang', NULL, NULL),
(135, '11', 'Jawa Timur', '178', 'Kabupaten', 'Kediri', NULL, NULL),
(136, '11', 'Jawa Timur', '179', 'Kota', 'Kediri', NULL, NULL),
(137, '11', 'Jawa Timur', '222', 'Kabupaten', 'Lamongan', NULL, NULL),
(138, '11', 'Jawa Timur', '243', 'Kabupaten', 'Lumajang', NULL, NULL),
(139, '11', 'Jawa Timur', '247', 'Kabupaten', 'Madiun', NULL, NULL),
(140, '11', 'Jawa Timur', '248', 'Kota', 'Madiun', NULL, NULL),
(141, '11', 'Jawa Timur', '251', 'Kabupaten', 'Magetan', NULL, NULL),
(142, '11', 'Jawa Timur', '255', 'Kabupaten', 'Malang', NULL, NULL),
(143, '11', 'Jawa Timur', '256', 'Kota', 'Malang', NULL, NULL),
(144, '11', 'Jawa Timur', '289', 'Kabupaten', 'Mojokerto', NULL, NULL),
(145, '11', 'Jawa Timur', '290', 'Kota', 'Mojokerto', NULL, NULL),
(146, '11', 'Jawa Timur', '305', 'Kabupaten', 'Nganjuk', NULL, NULL),
(147, '11', 'Jawa Timur', '306', 'Kabupaten', 'Ngawi', NULL, NULL),
(148, '11', 'Jawa Timur', '317', 'Kabupaten', 'Pacitan', NULL, NULL),
(149, '11', 'Jawa Timur', '330', 'Kabupaten', 'Pamekasan', NULL, NULL),
(150, '11', 'Jawa Timur', '342', 'Kabupaten', 'Pasuruan', NULL, NULL),
(151, '11', 'Jawa Timur', '343', 'Kota', 'Pasuruan', NULL, NULL),
(152, '11', 'Jawa Timur', '363', 'Kabupaten', 'Ponorogo', NULL, NULL),
(153, '11', 'Jawa Timur', '369', 'Kabupaten', 'Probolinggo', NULL, NULL),
(154, '11', 'Jawa Timur', '370', 'Kota', 'Probolinggo', NULL, NULL),
(155, '11', 'Jawa Timur', '390', 'Kabupaten', 'Sampang', NULL, NULL),
(156, '11', 'Jawa Timur', '409', 'Kabupaten', 'Sidoarjo', NULL, NULL),
(157, '11', 'Jawa Timur', '418', 'Kabupaten', 'Situbondo', NULL, NULL),
(158, '11', 'Jawa Timur', '441', 'Kabupaten', 'Sumenep', NULL, NULL),
(159, '11', 'Jawa Timur', '444', 'Kota', 'Surabaya', NULL, NULL),
(160, '11', 'Jawa Timur', '487', 'Kabupaten', 'Trenggalek', NULL, NULL),
(161, '11', 'Jawa Timur', '489', 'Kabupaten', 'Tuban', NULL, NULL),
(162, '11', 'Jawa Timur', '492', 'Kabupaten', 'Tulungagung', NULL, NULL),
(163, '12', 'Kalimantan Barat', '61', 'Kabupaten', 'Bengkayang', NULL, NULL),
(164, '12', 'Kalimantan Barat', '168', 'Kabupaten', 'Kapuas Hulu', NULL, NULL),
(165, '12', 'Kalimantan Barat', '176', 'Kabupaten', 'Kayong Utara', NULL, NULL),
(166, '12', 'Kalimantan Barat', '195', 'Kabupaten', 'Ketapang', NULL, NULL),
(167, '12', 'Kalimantan Barat', '208', 'Kabupaten', 'Kubu Raya', NULL, NULL),
(168, '12', 'Kalimantan Barat', '228', 'Kabupaten', 'Landak', NULL, NULL),
(169, '12', 'Kalimantan Barat', '279', 'Kabupaten', 'Melawi', NULL, NULL),
(170, '12', 'Kalimantan Barat', '364', 'Kabupaten', 'Pontianak', NULL, NULL),
(171, '12', 'Kalimantan Barat', '365', 'Kota', 'Pontianak', NULL, NULL),
(172, '12', 'Kalimantan Barat', '388', 'Kabupaten', 'Sambas', NULL, NULL),
(173, '12', 'Kalimantan Barat', '391', 'Kabupaten', 'Sanggau', NULL, NULL),
(174, '12', 'Kalimantan Barat', '395', 'Kabupaten', 'Sekadau', NULL, NULL),
(175, '12', 'Kalimantan Barat', '415', 'Kota', 'Singkawang', NULL, NULL),
(176, '12', 'Kalimantan Barat', '417', 'Kabupaten', 'Sintang', NULL, NULL),
(177, '13', 'Kalimantan Selatan', '18', 'Kabupaten', 'Balangan', NULL, NULL),
(178, '13', 'Kalimantan Selatan', '33', 'Kabupaten', 'Banjar', NULL, NULL),
(179, '13', 'Kalimantan Selatan', '35', 'Kota', 'Banjarbaru', NULL, NULL),
(180, '13', 'Kalimantan Selatan', '36', 'Kota', 'Banjarmasin', NULL, NULL),
(181, '13', 'Kalimantan Selatan', '43', 'Kabupaten', 'Barito Kuala', NULL, NULL),
(182, '13', 'Kalimantan Selatan', '143', 'Kabupaten', 'Hulu Sungai Selatan', NULL, NULL),
(183, '13', 'Kalimantan Selatan', '144', 'Kabupaten', 'Hulu Sungai Tengah', NULL, NULL),
(184, '13', 'Kalimantan Selatan', '145', 'Kabupaten', 'Hulu Sungai Utara', NULL, NULL),
(185, '13', 'Kalimantan Selatan', '203', 'Kabupaten', 'Kotabaru', NULL, NULL),
(186, '13', 'Kalimantan Selatan', '446', 'Kabupaten', 'Tabalong', NULL, NULL),
(187, '13', 'Kalimantan Selatan', '452', 'Kabupaten', 'Tanah Bumbu', NULL, NULL),
(188, '13', 'Kalimantan Selatan', '454', 'Kabupaten', 'Tanah Laut', NULL, NULL),
(189, '13', 'Kalimantan Selatan', '466', 'Kabupaten', 'Tapin', NULL, NULL),
(190, '14', 'Kalimantan Tengah', '44', 'Kabupaten', 'Barito Selatan', NULL, NULL),
(191, '14', 'Kalimantan Tengah', '45', 'Kabupaten', 'Barito Timur', NULL, NULL),
(192, '14', 'Kalimantan Tengah', '46', 'Kabupaten', 'Barito Utara', NULL, NULL),
(193, '14', 'Kalimantan Tengah', '136', 'Kabupaten', 'Gunung Mas', NULL, NULL),
(194, '14', 'Kalimantan Tengah', '167', 'Kabupaten', 'Kapuas', NULL, NULL),
(195, '14', 'Kalimantan Tengah', '174', 'Kabupaten', 'Katingan', NULL, NULL),
(196, '14', 'Kalimantan Tengah', '205', 'Kabupaten', 'Kotawaringin Barat', NULL, NULL),
(197, '14', 'Kalimantan Tengah', '206', 'Kabupaten', 'Kotawaringin Timur', NULL, NULL),
(198, '14', 'Kalimantan Tengah', '221', 'Kabupaten', 'Lamandau', NULL, NULL),
(199, '14', 'Kalimantan Tengah', '296', 'Kabupaten', 'Murung Raya', NULL, NULL),
(200, '14', 'Kalimantan Tengah', '326', 'Kota', 'Palangka Raya', NULL, NULL),
(201, '14', 'Kalimantan Tengah', '371', 'Kabupaten', 'Pulang Pisau', NULL, NULL),
(202, '14', 'Kalimantan Tengah', '405', 'Kabupaten', 'Seruyan', NULL, NULL),
(203, '14', 'Kalimantan Tengah', '432', 'Kabupaten', 'Sukamara', NULL, NULL),
(204, '15', 'Kalimantan Timur', '19', 'Kota', 'Balikpapan', NULL, NULL),
(205, '15', 'Kalimantan Timur', '66', 'Kabupaten', 'Berau', NULL, NULL),
(206, '15', 'Kalimantan Timur', '89', 'Kota', 'Bontang', NULL, NULL),
(207, '15', 'Kalimantan Timur', '214', 'Kabupaten', 'Kutai Barat', NULL, NULL),
(208, '15', 'Kalimantan Timur', '215', 'Kabupaten', 'Kutai Kartanegara', NULL, NULL),
(209, '15', 'Kalimantan Timur', '216', 'Kabupaten', 'Kutai Timur', NULL, NULL),
(210, '15', 'Kalimantan Timur', '341', 'Kabupaten', 'Paser', NULL, NULL),
(211, '15', 'Kalimantan Timur', '354', 'Kabupaten', 'Penajam Paser Utara', NULL, NULL),
(212, '15', 'Kalimantan Timur', '387', 'Kota', 'Samarinda', NULL, NULL),
(213, '16', 'Kalimantan Utara', '96', 'Kabupaten', 'Bulungan (Bulongan)', NULL, NULL),
(214, '16', 'Kalimantan Utara', '257', 'Kabupaten', 'Malinau', NULL, NULL),
(215, '16', 'Kalimantan Utara', '311', 'Kabupaten', 'Nunukan', NULL, NULL),
(216, '16', 'Kalimantan Utara', '450', 'Kabupaten', 'Tana Tidung', NULL, NULL),
(217, '16', 'Kalimantan Utara', '467', 'Kota', 'Tarakan', NULL, NULL),
(218, '17', 'Kepulauan Riau', '48', 'Kota', 'Batam', NULL, NULL),
(219, '17', 'Kepulauan Riau', '71', 'Kabupaten', 'Bintan', NULL, NULL),
(220, '17', 'Kepulauan Riau', '172', 'Kabupaten', 'Karimun', NULL, NULL),
(221, '17', 'Kepulauan Riau', '184', 'Kabupaten', 'Kepulauan Anambas', NULL, NULL),
(222, '17', 'Kepulauan Riau', '237', 'Kabupaten', 'Lingga', NULL, NULL),
(223, '17', 'Kepulauan Riau', '302', 'Kabupaten', 'Natuna', NULL, NULL),
(224, '17', 'Kepulauan Riau', '462', 'Kota', 'Tanjung Pinang', NULL, NULL),
(225, '18', 'Lampung', '21', 'Kota', 'Bandar Lampung', NULL, NULL),
(226, '18', 'Lampung', '223', 'Kabupaten', 'Lampung Barat', NULL, NULL),
(227, '18', 'Lampung', '224', 'Kabupaten', 'Lampung Selatan', NULL, NULL),
(228, '18', 'Lampung', '225', 'Kabupaten', 'Lampung Tengah', NULL, NULL),
(229, '18', 'Lampung', '226', 'Kabupaten', 'Lampung Timur', NULL, NULL),
(230, '18', 'Lampung', '227', 'Kabupaten', 'Lampung Utara', NULL, NULL),
(231, '18', 'Lampung', '282', 'Kabupaten', 'Mesuji', NULL, NULL),
(232, '18', 'Lampung', '283', 'Kota', 'Metro', NULL, NULL),
(233, '18', 'Lampung', '355', 'Kabupaten', 'Pesawaran', NULL, NULL),
(234, '18', 'Lampung', '356', 'Kabupaten', 'Pesisir Barat', NULL, NULL),
(235, '18', 'Lampung', '368', 'Kabupaten', 'Pringsewu', NULL, NULL),
(236, '18', 'Lampung', '458', 'Kabupaten', 'Tanggamus', NULL, NULL),
(237, '18', 'Lampung', '490', 'Kabupaten', 'Tulang Bawang', NULL, NULL),
(238, '18', 'Lampung', '491', 'Kabupaten', 'Tulang Bawang Barat', NULL, NULL),
(239, '18', 'Lampung', '496', 'Kabupaten', 'Way Kanan', NULL, NULL),
(240, '19', 'Maluku', '14', 'Kota', 'Ambon', NULL, NULL),
(241, '19', 'Maluku', '99', 'Kabupaten', 'Buru', NULL, NULL),
(242, '19', 'Maluku', '100', 'Kabupaten', 'Buru Selatan', NULL, NULL),
(243, '19', 'Maluku', '185', 'Kabupaten', 'Kepulauan Aru', NULL, NULL),
(244, '19', 'Maluku', '258', 'Kabupaten', 'Maluku Barat Daya', NULL, NULL),
(245, '19', 'Maluku', '259', 'Kabupaten', 'Maluku Tengah', NULL, NULL),
(246, '19', 'Maluku', '260', 'Kabupaten', 'Maluku Tenggara', NULL, NULL),
(247, '19', 'Maluku', '261', 'Kabupaten', 'Maluku Tenggara Barat', NULL, NULL),
(248, '19', 'Maluku', '400', 'Kabupaten', 'Seram Bagian Barat', NULL, NULL),
(249, '19', 'Maluku', '401', 'Kabupaten', 'Seram Bagian Timur', NULL, NULL),
(250, '19', 'Maluku', '488', 'Kota', 'Tual', NULL, NULL),
(251, '20', 'Maluku Utara', '138', 'Kabupaten', 'Halmahera Barat', NULL, NULL),
(252, '20', 'Maluku Utara', '139', 'Kabupaten', 'Halmahera Selatan', NULL, NULL),
(253, '20', 'Maluku Utara', '140', 'Kabupaten', 'Halmahera Tengah', NULL, NULL),
(254, '20', 'Maluku Utara', '141', 'Kabupaten', 'Halmahera Timur', NULL, NULL),
(255, '20', 'Maluku Utara', '142', 'Kabupaten', 'Halmahera Utara', NULL, NULL),
(256, '20', 'Maluku Utara', '191', 'Kabupaten', 'Kepulauan Sula', NULL, NULL),
(257, '20', 'Maluku Utara', '372', 'Kabupaten', 'Pulau Morotai', NULL, NULL),
(258, '20', 'Maluku Utara', '477', 'Kota', 'Ternate', NULL, NULL),
(259, '20', 'Maluku Utara', '478', 'Kota', 'Tidore Kepulauan', NULL, NULL),
(260, '21', 'Nanggroe Aceh Darussalam (NAD)', '1', 'Kabupaten', 'Aceh Barat', NULL, NULL),
(261, '21', 'Nanggroe Aceh Darussalam (NAD)', '2', 'Kabupaten', 'Aceh Barat Daya', NULL, NULL),
(262, '21', 'Nanggroe Aceh Darussalam (NAD)', '3', 'Kabupaten', 'Aceh Besar', NULL, NULL),
(263, '21', 'Nanggroe Aceh Darussalam (NAD)', '4', 'Kabupaten', 'Aceh Jaya', NULL, NULL),
(264, '21', 'Nanggroe Aceh Darussalam (NAD)', '5', 'Kabupaten', 'Aceh Selatan', NULL, NULL),
(265, '21', 'Nanggroe Aceh Darussalam (NAD)', '6', 'Kabupaten', 'Aceh Singkil', NULL, NULL),
(266, '21', 'Nanggroe Aceh Darussalam (NAD)', '7', 'Kabupaten', 'Aceh Tamiang', NULL, NULL),
(267, '21', 'Nanggroe Aceh Darussalam (NAD)', '8', 'Kabupaten', 'Aceh Tengah', NULL, NULL),
(268, '21', 'Nanggroe Aceh Darussalam (NAD)', '9', 'Kabupaten', 'Aceh Tenggara', NULL, NULL),
(269, '21', 'Nanggroe Aceh Darussalam (NAD)', '10', 'Kabupaten', 'Aceh Timur', NULL, NULL),
(270, '21', 'Nanggroe Aceh Darussalam (NAD)', '11', 'Kabupaten', 'Aceh Utara', NULL, NULL),
(271, '21', 'Nanggroe Aceh Darussalam (NAD)', '20', 'Kota', 'Banda Aceh', NULL, NULL),
(272, '21', 'Nanggroe Aceh Darussalam (NAD)', '59', 'Kabupaten', 'Bener Meriah', NULL, NULL),
(273, '21', 'Nanggroe Aceh Darussalam (NAD)', '72', 'Kabupaten', 'Bireuen', NULL, NULL),
(274, '21', 'Nanggroe Aceh Darussalam (NAD)', '127', 'Kabupaten', 'Gayo Lues', NULL, NULL),
(275, '21', 'Nanggroe Aceh Darussalam (NAD)', '230', 'Kota', 'Langsa', NULL, NULL),
(276, '21', 'Nanggroe Aceh Darussalam (NAD)', '235', 'Kota', 'Lhokseumawe', NULL, NULL),
(277, '21', 'Nanggroe Aceh Darussalam (NAD)', '300', 'Kabupaten', 'Nagan Raya', NULL, NULL),
(278, '21', 'Nanggroe Aceh Darussalam (NAD)', '358', 'Kabupaten', 'Pidie', NULL, NULL),
(279, '21', 'Nanggroe Aceh Darussalam (NAD)', '359', 'Kabupaten', 'Pidie Jaya', NULL, NULL),
(280, '21', 'Nanggroe Aceh Darussalam (NAD)', '384', 'Kota', 'Sabang', NULL, NULL),
(281, '21', 'Nanggroe Aceh Darussalam (NAD)', '414', 'Kabupaten', 'Simeulue', NULL, NULL),
(282, '21', 'Nanggroe Aceh Darussalam (NAD)', '429', 'Kota', 'Subulussalam', NULL, NULL),
(283, '22', 'Nusa Tenggara Barat (NTB)', '68', 'Kabupaten', 'Bima', NULL, NULL),
(284, '22', 'Nusa Tenggara Barat (NTB)', '69', 'Kota', 'Bima', NULL, NULL),
(285, '22', 'Nusa Tenggara Barat (NTB)', '118', 'Kabupaten', 'Dompu', NULL, NULL),
(286, '22', 'Nusa Tenggara Barat (NTB)', '238', 'Kabupaten', 'Lombok Barat', NULL, NULL),
(287, '22', 'Nusa Tenggara Barat (NTB)', '239', 'Kabupaten', 'Lombok Tengah', NULL, NULL),
(288, '22', 'Nusa Tenggara Barat (NTB)', '240', 'Kabupaten', 'Lombok Timur', NULL, NULL),
(289, '22', 'Nusa Tenggara Barat (NTB)', '241', 'Kabupaten', 'Lombok Utara', NULL, NULL),
(290, '22', 'Nusa Tenggara Barat (NTB)', '276', 'Kota', 'Mataram', NULL, NULL),
(291, '22', 'Nusa Tenggara Barat (NTB)', '438', 'Kabupaten', 'Sumbawa', NULL, NULL),
(292, '22', 'Nusa Tenggara Barat (NTB)', '439', 'Kabupaten', 'Sumbawa Barat', NULL, NULL),
(293, '23', 'Nusa Tenggara Timur (NTT)', '13', 'Kabupaten', 'Alor', NULL, NULL),
(294, '23', 'Nusa Tenggara Timur (NTT)', '58', 'Kabupaten', 'Belu', NULL, NULL),
(295, '23', 'Nusa Tenggara Timur (NTT)', '122', 'Kabupaten', 'Ende', NULL, NULL),
(296, '23', 'Nusa Tenggara Timur (NTT)', '125', 'Kabupaten', 'Flores Timur', NULL, NULL),
(297, '23', 'Nusa Tenggara Timur (NTT)', '212', 'Kabupaten', 'Kupang', NULL, NULL),
(298, '23', 'Nusa Tenggara Timur (NTT)', '213', 'Kota', 'Kupang', NULL, NULL),
(299, '23', 'Nusa Tenggara Timur (NTT)', '234', 'Kabupaten', 'Lembata', NULL, NULL),
(300, '23', 'Nusa Tenggara Timur (NTT)', '269', 'Kabupaten', 'Manggarai', NULL, NULL),
(301, '23', 'Nusa Tenggara Timur (NTT)', '270', 'Kabupaten', 'Manggarai Barat', NULL, NULL),
(302, '23', 'Nusa Tenggara Timur (NTT)', '271', 'Kabupaten', 'Manggarai Timur', NULL, NULL),
(303, '23', 'Nusa Tenggara Timur (NTT)', '301', 'Kabupaten', 'Nagekeo', NULL, NULL),
(304, '23', 'Nusa Tenggara Timur (NTT)', '304', 'Kabupaten', 'Ngada', NULL, NULL),
(305, '23', 'Nusa Tenggara Timur (NTT)', '383', 'Kabupaten', 'Rote Ndao', NULL, NULL),
(306, '23', 'Nusa Tenggara Timur (NTT)', '385', 'Kabupaten', 'Sabu Raijua', NULL, NULL),
(307, '23', 'Nusa Tenggara Timur (NTT)', '412', 'Kabupaten', 'Sikka', NULL, NULL),
(308, '23', 'Nusa Tenggara Timur (NTT)', '434', 'Kabupaten', 'Sumba Barat', NULL, NULL),
(309, '23', 'Nusa Tenggara Timur (NTT)', '435', 'Kabupaten', 'Sumba Barat Daya', NULL, NULL),
(310, '23', 'Nusa Tenggara Timur (NTT)', '436', 'Kabupaten', 'Sumba Tengah', NULL, NULL),
(311, '23', 'Nusa Tenggara Timur (NTT)', '437', 'Kabupaten', 'Sumba Timur', NULL, NULL),
(312, '23', 'Nusa Tenggara Timur (NTT)', '479', 'Kabupaten', 'Timor Tengah Selatan', NULL, NULL),
(313, '23', 'Nusa Tenggara Timur (NTT)', '480', 'Kabupaten', 'Timor Tengah Utara', NULL, NULL),
(314, '24', 'Papua', '16', 'Kabupaten', 'Asmat', NULL, NULL),
(315, '24', 'Papua', '67', 'Kabupaten', 'Biak Numfor', NULL, NULL),
(316, '24', 'Papua', '90', 'Kabupaten', 'Boven Digoel', NULL, NULL),
(317, '24', 'Papua', '111', 'Kabupaten', 'Deiyai (Deliyai)', NULL, NULL),
(318, '24', 'Papua', '117', 'Kabupaten', 'Dogiyai', NULL, NULL),
(319, '24', 'Papua', '150', 'Kabupaten', 'Intan Jaya', NULL, NULL),
(320, '24', 'Papua', '157', 'Kabupaten', 'Jayapura', NULL, NULL),
(321, '24', 'Papua', '158', 'Kota', 'Jayapura', NULL, NULL),
(322, '24', 'Papua', '159', 'Kabupaten', 'Jayawijaya', NULL, NULL),
(323, '24', 'Papua', '180', 'Kabupaten', 'Keerom', NULL, NULL),
(324, '24', 'Papua', '193', 'Kabupaten', 'Kepulauan Yapen (Yapen Waropen)', NULL, NULL),
(325, '24', 'Papua', '231', 'Kabupaten', 'Lanny Jaya', NULL, NULL),
(326, '24', 'Papua', '263', 'Kabupaten', 'Mamberamo Raya', NULL, NULL),
(327, '24', 'Papua', '264', 'Kabupaten', 'Mamberamo Tengah', NULL, NULL),
(328, '24', 'Papua', '274', 'Kabupaten', 'Mappi', NULL, NULL),
(329, '24', 'Papua', '281', 'Kabupaten', 'Merauke', NULL, NULL),
(330, '24', 'Papua', '284', 'Kabupaten', 'Mimika', NULL, NULL),
(331, '24', 'Papua', '299', 'Kabupaten', 'Nabire', NULL, NULL),
(332, '24', 'Papua', '303', 'Kabupaten', 'Nduga', NULL, NULL),
(333, '24', 'Papua', '335', 'Kabupaten', 'Paniai', NULL, NULL),
(334, '24', 'Papua', '347', 'Kabupaten', 'Pegunungan Bintang', NULL, NULL),
(335, '24', 'Papua', '373', 'Kabupaten', 'Puncak', NULL, NULL),
(336, '24', 'Papua', '374', 'Kabupaten', 'Puncak Jaya', NULL, NULL),
(337, '24', 'Papua', '392', 'Kabupaten', 'Sarmi', NULL, NULL),
(338, '24', 'Papua', '443', 'Kabupaten', 'Supiori', NULL, NULL),
(339, '24', 'Papua', '484', 'Kabupaten', 'Tolikara', NULL, NULL),
(340, '24', 'Papua', '495', 'Kabupaten', 'Waropen', NULL, NULL),
(341, '24', 'Papua', '499', 'Kabupaten', 'Yahukimo', NULL, NULL),
(342, '24', 'Papua', '500', 'Kabupaten', 'Yalimo', NULL, NULL),
(343, '25', 'Papua Barat', '124', 'Kabupaten', 'Fakfak', NULL, NULL),
(344, '25', 'Papua Barat', '165', 'Kabupaten', 'Kaimana', NULL, NULL),
(345, '25', 'Papua Barat', '272', 'Kabupaten', 'Manokwari', NULL, NULL),
(346, '25', 'Papua Barat', '273', 'Kabupaten', 'Manokwari Selatan', NULL, NULL),
(347, '25', 'Papua Barat', '277', 'Kabupaten', 'Maybrat', NULL, NULL),
(348, '25', 'Papua Barat', '346', 'Kabupaten', 'Pegunungan Arfak', NULL, NULL),
(349, '25', 'Papua Barat', '378', 'Kabupaten', 'Raja Ampat', NULL, NULL),
(350, '25', 'Papua Barat', '424', 'Kabupaten', 'Sorong', NULL, NULL),
(351, '25', 'Papua Barat', '425', 'Kota', 'Sorong', NULL, NULL),
(352, '25', 'Papua Barat', '426', 'Kabupaten', 'Sorong Selatan', NULL, NULL),
(353, '25', 'Papua Barat', '449', 'Kabupaten', 'Tambrauw', NULL, NULL),
(354, '25', 'Papua Barat', '474', 'Kabupaten', 'Teluk Bintuni', NULL, NULL),
(355, '25', 'Papua Barat', '475', 'Kabupaten', 'Teluk Wondama', NULL, NULL),
(356, '26', 'Riau', '60', 'Kabupaten', 'Bengkalis', NULL, NULL),
(357, '26', 'Riau', '120', 'Kota', 'Dumai', NULL, NULL),
(358, '26', 'Riau', '147', 'Kabupaten', 'Indragiri Hilir', NULL, NULL),
(359, '26', 'Riau', '148', 'Kabupaten', 'Indragiri Hulu', NULL, NULL),
(360, '26', 'Riau', '166', 'Kabupaten', 'Kampar', NULL, NULL),
(361, '26', 'Riau', '187', 'Kabupaten', 'Kepulauan Meranti', NULL, NULL),
(362, '26', 'Riau', '207', 'Kabupaten', 'Kuantan Singingi', NULL, NULL),
(363, '26', 'Riau', '350', 'Kota', 'Pekanbaru', NULL, NULL),
(364, '26', 'Riau', '351', 'Kabupaten', 'Pelalawan', NULL, NULL),
(365, '26', 'Riau', '381', 'Kabupaten', 'Rokan Hilir', NULL, NULL),
(366, '26', 'Riau', '382', 'Kabupaten', 'Rokan Hulu', NULL, NULL),
(367, '26', 'Riau', '406', 'Kabupaten', 'Siak', NULL, NULL),
(368, '27', 'Sulawesi Barat', '253', 'Kabupaten', 'Majene', NULL, NULL),
(369, '27', 'Sulawesi Barat', '262', 'Kabupaten', 'Mamasa', NULL, NULL),
(370, '27', 'Sulawesi Barat', '265', 'Kabupaten', 'Mamuju', NULL, NULL),
(371, '27', 'Sulawesi Barat', '266', 'Kabupaten', 'Mamuju Utara', NULL, NULL),
(372, '27', 'Sulawesi Barat', '362', 'Kabupaten', 'Polewali Mandar', NULL, NULL),
(373, '28', 'Sulawesi Selatan', '38', 'Kabupaten', 'Bantaeng', NULL, NULL),
(374, '28', 'Sulawesi Selatan', '47', 'Kabupaten', 'Barru', NULL, NULL),
(375, '28', 'Sulawesi Selatan', '87', 'Kabupaten', 'Bone', NULL, NULL),
(376, '28', 'Sulawesi Selatan', '95', 'Kabupaten', 'Bulukumba', NULL, NULL),
(377, '28', 'Sulawesi Selatan', '123', 'Kabupaten', 'Enrekang', NULL, NULL),
(378, '28', 'Sulawesi Selatan', '132', 'Kabupaten', 'Gowa', NULL, NULL),
(379, '28', 'Sulawesi Selatan', '162', 'Kabupaten', 'Jeneponto', NULL, NULL),
(380, '28', 'Sulawesi Selatan', '244', 'Kabupaten', 'Luwu', NULL, NULL),
(381, '28', 'Sulawesi Selatan', '245', 'Kabupaten', 'Luwu Timur', NULL, NULL),
(382, '28', 'Sulawesi Selatan', '246', 'Kabupaten', 'Luwu Utara', NULL, NULL),
(383, '28', 'Sulawesi Selatan', '254', 'Kota', 'Makassar', NULL, NULL),
(384, '28', 'Sulawesi Selatan', '275', 'Kabupaten', 'Maros', NULL, NULL),
(385, '28', 'Sulawesi Selatan', '328', 'Kota', 'Palopo', NULL, NULL),
(386, '28', 'Sulawesi Selatan', '333', 'Kabupaten', 'Pangkajene Kepulauan', NULL, NULL),
(387, '28', 'Sulawesi Selatan', '336', 'Kota', 'Parepare', NULL, NULL),
(388, '28', 'Sulawesi Selatan', '360', 'Kabupaten', 'Pinrang', NULL, NULL),
(389, '28', 'Sulawesi Selatan', '396', 'Kabupaten', 'Selayar (Kepulauan Selayar)', NULL, NULL),
(390, '28', 'Sulawesi Selatan', '408', 'Kabupaten', 'Sidenreng Rappang/Rapang', NULL, NULL),
(391, '28', 'Sulawesi Selatan', '416', 'Kabupaten', 'Sinjai', NULL, NULL),
(392, '28', 'Sulawesi Selatan', '423', 'Kabupaten', 'Soppeng', NULL, NULL),
(393, '28', 'Sulawesi Selatan', '448', 'Kabupaten', 'Takalar', NULL, NULL),
(394, '28', 'Sulawesi Selatan', '451', 'Kabupaten', 'Tana Toraja', NULL, NULL),
(395, '28', 'Sulawesi Selatan', '486', 'Kabupaten', 'Toraja Utara', NULL, NULL),
(396, '28', 'Sulawesi Selatan', '493', 'Kabupaten', 'Wajo', NULL, NULL),
(397, '29', 'Sulawesi Tengah', '25', 'Kabupaten', 'Banggai', NULL, NULL),
(398, '29', 'Sulawesi Tengah', '26', 'Kabupaten', 'Banggai Kepulauan', NULL, NULL),
(399, '29', 'Sulawesi Tengah', '98', 'Kabupaten', 'Buol', NULL, NULL),
(400, '29', 'Sulawesi Tengah', '119', 'Kabupaten', 'Donggala', NULL, NULL),
(401, '29', 'Sulawesi Tengah', '291', 'Kabupaten', 'Morowali', NULL, NULL),
(402, '29', 'Sulawesi Tengah', '329', 'Kota', 'Palu', NULL, NULL),
(403, '29', 'Sulawesi Tengah', '338', 'Kabupaten', 'Parigi Moutong', NULL, NULL),
(404, '29', 'Sulawesi Tengah', '366', 'Kabupaten', 'Poso', NULL, NULL),
(405, '29', 'Sulawesi Tengah', '410', 'Kabupaten', 'Sigi', NULL, NULL),
(406, '29', 'Sulawesi Tengah', '482', 'Kabupaten', 'Tojo Una-Una', NULL, NULL),
(407, '29', 'Sulawesi Tengah', '483', 'Kabupaten', 'Toli-Toli', NULL, NULL),
(408, '30', 'Sulawesi Tenggara', '53', 'Kota', 'Bau-Bau', NULL, NULL),
(409, '30', 'Sulawesi Tenggara', '85', 'Kabupaten', 'Bombana', NULL, NULL),
(410, '30', 'Sulawesi Tenggara', '101', 'Kabupaten', 'Buton', NULL, NULL),
(411, '30', 'Sulawesi Tenggara', '102', 'Kabupaten', 'Buton Utara', NULL, NULL),
(412, '30', 'Sulawesi Tenggara', '182', 'Kota', 'Kendari', NULL, NULL),
(413, '30', 'Sulawesi Tenggara', '198', 'Kabupaten', 'Kolaka', NULL, NULL),
(414, '30', 'Sulawesi Tenggara', '199', 'Kabupaten', 'Kolaka Utara', NULL, NULL),
(415, '30', 'Sulawesi Tenggara', '200', 'Kabupaten', 'Konawe', NULL, NULL),
(416, '30', 'Sulawesi Tenggara', '201', 'Kabupaten', 'Konawe Selatan', NULL, NULL),
(417, '30', 'Sulawesi Tenggara', '202', 'Kabupaten', 'Konawe Utara', NULL, NULL),
(418, '30', 'Sulawesi Tenggara', '295', 'Kabupaten', 'Muna', NULL, NULL),
(419, '30', 'Sulawesi Tenggara', '494', 'Kabupaten', 'Wakatobi', NULL, NULL),
(420, '31', 'Sulawesi Utara', '73', 'Kota', 'Bitung', NULL, NULL),
(421, '31', 'Sulawesi Utara', '81', 'Kabupaten', 'Bolaang Mongondow (Bolmong)', NULL, NULL),
(422, '31', 'Sulawesi Utara', '82', 'Kabupaten', 'Bolaang Mongondow Selatan', NULL, NULL),
(423, '31', 'Sulawesi Utara', '83', 'Kabupaten', 'Bolaang Mongondow Timur', NULL, NULL),
(424, '31', 'Sulawesi Utara', '84', 'Kabupaten', 'Bolaang Mongondow Utara', NULL, NULL),
(425, '31', 'Sulawesi Utara', '188', 'Kabupaten', 'Kepulauan Sangihe', NULL, NULL),
(426, '31', 'Sulawesi Utara', '190', 'Kabupaten', 'Kepulauan Siau Tagulandang Biaro (Sitaro)', NULL, NULL),
(427, '31', 'Sulawesi Utara', '192', 'Kabupaten', 'Kepulauan Talaud', NULL, NULL),
(428, '31', 'Sulawesi Utara', '204', 'Kota', 'Kotamobagu', NULL, NULL),
(429, '31', 'Sulawesi Utara', '267', 'Kota', 'Manado', NULL, NULL),
(430, '31', 'Sulawesi Utara', '285', 'Kabupaten', 'Minahasa', NULL, NULL),
(431, '31', 'Sulawesi Utara', '286', 'Kabupaten', 'Minahasa Selatan', NULL, NULL),
(432, '31', 'Sulawesi Utara', '287', 'Kabupaten', 'Minahasa Tenggara', NULL, NULL),
(433, '31', 'Sulawesi Utara', '288', 'Kabupaten', 'Minahasa Utara', NULL, NULL),
(434, '31', 'Sulawesi Utara', '485', 'Kota', 'Tomohon', NULL, NULL),
(435, '32', 'Sumatera Barat', '12', 'Kabupaten', 'Agam', NULL, NULL),
(436, '32', 'Sumatera Barat', '93', 'Kota', 'Bukittinggi', NULL, NULL),
(437, '32', 'Sumatera Barat', '116', 'Kabupaten', 'Dharmasraya', NULL, NULL),
(438, '32', 'Sumatera Barat', '186', 'Kabupaten', 'Kepulauan Mentawai', NULL, NULL),
(439, '32', 'Sumatera Barat', '236', 'Kabupaten', 'Lima Puluh Koto/Kota', NULL, NULL),
(440, '32', 'Sumatera Barat', '318', 'Kota', 'Padang', NULL, NULL),
(441, '32', 'Sumatera Barat', '321', 'Kota', 'Padang Panjang', NULL, NULL),
(442, '32', 'Sumatera Barat', '322', 'Kabupaten', 'Padang Pariaman', NULL, NULL),
(443, '32', 'Sumatera Barat', '337', 'Kota', 'Pariaman', NULL, NULL),
(444, '32', 'Sumatera Barat', '339', 'Kabupaten', 'Pasaman', NULL, NULL),
(445, '32', 'Sumatera Barat', '340', 'Kabupaten', 'Pasaman Barat', NULL, NULL),
(446, '32', 'Sumatera Barat', '345', 'Kota', 'Payakumbuh', NULL, NULL),
(447, '32', 'Sumatera Barat', '357', 'Kabupaten', 'Pesisir Selatan', NULL, NULL),
(448, '32', 'Sumatera Barat', '394', 'Kota', 'Sawah Lunto', NULL, NULL),
(449, '32', 'Sumatera Barat', '411', 'Kabupaten', 'Sijunjung (Sawah Lunto Sijunjung)', NULL, NULL),
(450, '32', 'Sumatera Barat', '420', 'Kabupaten', 'Solok', NULL, NULL),
(451, '32', 'Sumatera Barat', '421', 'Kota', 'Solok', NULL, NULL),
(452, '32', 'Sumatera Barat', '422', 'Kabupaten', 'Solok Selatan', NULL, NULL),
(453, '32', 'Sumatera Barat', '453', 'Kabupaten', 'Tanah Datar', NULL, NULL),
(454, '33', 'Sumatera Selatan', '40', 'Kabupaten', 'Banyuasin', NULL, NULL),
(455, '33', 'Sumatera Selatan', '121', 'Kabupaten', 'Empat Lawang', NULL, NULL),
(456, '33', 'Sumatera Selatan', '220', 'Kabupaten', 'Lahat', NULL, NULL),
(457, '33', 'Sumatera Selatan', '242', 'Kota', 'Lubuk Linggau', NULL, NULL),
(458, '33', 'Sumatera Selatan', '292', 'Kabupaten', 'Muara Enim', NULL, NULL),
(459, '33', 'Sumatera Selatan', '297', 'Kabupaten', 'Musi Banyuasin', NULL, NULL),
(460, '33', 'Sumatera Selatan', '298', 'Kabupaten', 'Musi Rawas', NULL, NULL),
(461, '33', 'Sumatera Selatan', '312', 'Kabupaten', 'Ogan Ilir', NULL, NULL),
(462, '33', 'Sumatera Selatan', '313', 'Kabupaten', 'Ogan Komering Ilir', NULL, NULL),
(463, '33', 'Sumatera Selatan', '314', 'Kabupaten', 'Ogan Komering Ulu', NULL, NULL),
(464, '33', 'Sumatera Selatan', '315', 'Kabupaten', 'Ogan Komering Ulu Selatan', NULL, NULL),
(465, '33', 'Sumatera Selatan', '316', 'Kabupaten', 'Ogan Komering Ulu Timur', NULL, NULL),
(466, '33', 'Sumatera Selatan', '324', 'Kota', 'Pagar Alam', NULL, NULL),
(467, '33', 'Sumatera Selatan', '327', 'Kota', 'Palembang', NULL, NULL),
(468, '33', 'Sumatera Selatan', '367', 'Kota', 'Prabumulih', NULL, NULL),
(469, '34', 'Sumatera Utara', '15', 'Kabupaten', 'Asahan', NULL, NULL),
(470, '34', 'Sumatera Utara', '52', 'Kabupaten', 'Batu Bara', NULL, NULL),
(471, '34', 'Sumatera Utara', '70', 'Kota', 'Binjai', NULL, NULL),
(472, '34', 'Sumatera Utara', '110', 'Kabupaten', 'Dairi', NULL, NULL),
(473, '34', 'Sumatera Utara', '112', 'Kabupaten', 'Deli Serdang', NULL, NULL),
(474, '34', 'Sumatera Utara', '137', 'Kota', 'Gunungsitoli', NULL, NULL),
(475, '34', 'Sumatera Utara', '146', 'Kabupaten', 'Humbang Hasundutan', NULL, NULL),
(476, '34', 'Sumatera Utara', '173', 'Kabupaten', 'Karo', NULL, NULL),
(477, '34', 'Sumatera Utara', '217', 'Kabupaten', 'Labuhan Batu', NULL, NULL),
(478, '34', 'Sumatera Utara', '218', 'Kabupaten', 'Labuhan Batu Selatan', NULL, NULL),
(479, '34', 'Sumatera Utara', '219', 'Kabupaten', 'Labuhan Batu Utara', NULL, NULL),
(480, '34', 'Sumatera Utara', '229', 'Kabupaten', 'Langkat', NULL, NULL),
(481, '34', 'Sumatera Utara', '268', 'Kabupaten', 'Mandailing Natal', NULL, NULL),
(482, '34', 'Sumatera Utara', '278', 'Kota', 'Medan', NULL, NULL),
(483, '34', 'Sumatera Utara', '307', 'Kabupaten', 'Nias', NULL, NULL),
(484, '34', 'Sumatera Utara', '308', 'Kabupaten', 'Nias Barat', NULL, NULL),
(485, '34', 'Sumatera Utara', '309', 'Kabupaten', 'Nias Selatan', NULL, NULL),
(486, '34', 'Sumatera Utara', '310', 'Kabupaten', 'Nias Utara', NULL, NULL),
(487, '34', 'Sumatera Utara', '319', 'Kabupaten', 'Padang Lawas', NULL, NULL),
(488, '34', 'Sumatera Utara', '320', 'Kabupaten', 'Padang Lawas Utara', NULL, NULL),
(489, '34', 'Sumatera Utara', '323', 'Kota', 'Padang Sidempuan', NULL, NULL),
(490, '34', 'Sumatera Utara', '325', 'Kabupaten', 'Pakpak Bharat', NULL, NULL),
(491, '34', 'Sumatera Utara', '353', 'Kota', 'Pematang Siantar', NULL, NULL),
(492, '34', 'Sumatera Utara', '389', 'Kabupaten', 'Samosir', NULL, NULL),
(493, '34', 'Sumatera Utara', '404', 'Kabupaten', 'Serdang Bedagai', NULL, NULL),
(494, '34', 'Sumatera Utara', '407', 'Kota', 'Sibolga', NULL, NULL),
(495, '34', 'Sumatera Utara', '413', 'Kabupaten', 'Simalungun', NULL, NULL),
(496, '34', 'Sumatera Utara', '459', 'Kota', 'Tanjung Balai', NULL, NULL),
(497, '34', 'Sumatera Utara', '463', 'Kabupaten', 'Tapanuli Selatan', NULL, NULL),
(498, '34', 'Sumatera Utara', '464', 'Kabupaten', 'Tapanuli Tengah', NULL, NULL),
(499, '34', 'Sumatera Utara', '465', 'Kabupaten', 'Tapanuli Utara', NULL, NULL),
(500, '34', 'Sumatera Utara', '470', 'Kota', 'Tebing Tinggi', NULL, NULL),
(501, '34', 'Sumatera Utara', '481', 'Kabupaten', 'Toba Samosir', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `legalitas`
--

CREATE TABLE `legalitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `legalitas`
--

INSERT INTO `legalitas` (`id`, `foto`, `keterangan`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'legalitas1', 'SK Izin Operasional', 'pkbm', NULL, NULL),
(2, 'legalitas2', 'Akta Notaris Pendirian', 'pkbm', NULL, NULL),
(3, 'legalitas3', 'Ket Domisili Lembaga', 'pkbm', NULL, NULL),
(4, 'legalitas4', 'NPWP', 'pkbm', NULL, NULL),
(5, 'legalitas5', 'Rekening', 'pkbm', NULL, NULL),
(6, 'legalitas6', 'NPSN', 'pkbm', NULL, NULL),
(7, 'legalitas7', 'SHM No.209', 'pkbm', NULL, NULL),
(8, 'legalitas8', 'SHM No.210', 'pkbm', NULL, NULL),
(9, 'legalitas9', 'Akreditasi', 'pkbm', NULL, NULL),
(10, 'legalitas1', 'Tanda Daftar Perusahaan (TDP) No. 11.29.05.10.15924', 'pt', NULL, NULL),
(11, 'legalitas2', 'Tanda Daftar Industri (TDI) No. 5003/14/XI/2015', 'pt', NULL, NULL),
(12, 'legalitas3', 'Izin Usaha Industri (IUI) No. 503/01/IUI/III/2016', 'pt', NULL, NULL),
(13, 'legalitas4', 'Majelis Ulama Indonesia (MUI Halal) No. 15190037200419, No. 15100072970421', 'pt', NULL, NULL),
(14, 'legalitas5', 'Halal Assurance System Lembaga Pengkajian Pangan, Obat-obatan dan Kosmetika Majelis Ulama Indonesia (HAS LPPOM - MUI) No. HAS1B2096/042019/CMR', 'pt', NULL, NULL),
(15, 'legalitas6', 'Izin Edar Badan pengawas Obat dan Makanan (BPOM) RI No. MD 217711001553', 'pt', NULL, NULL),
(16, 'legalitas7', 'Surat Pernyataan Pengelolaan Lingkungan Hidup (SPPL) No. 660/827/SPPL/2018', 'pt', NULL, NULL),
(17, 'legalitas8', 'GSI Barcode ISO 9001:2015 Manajemen Mutu No. CEO-SIA/07/2016/322', 'pt', NULL, NULL),
(18, 'legalitas9', 'Nutrition Fact PT SIG (Saraswanti Indo Genetech) No. SIG.LHP.X.2019.09141710', 'pt', NULL, NULL),
(19, 'legalitas10', 'Good Manufacturing Practice (GMP) No. 0024/LSIPB/GMP/2018', 'pt', NULL, NULL),
(20, 'legalitas11', 'One Village One Product (OVOP) No. 780 Th 2016-2018', 'pt', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_12_105429_create_testimonis_table', 1),
(6, '2021_12_12_113908_create_alumnis_table', 1),
(7, '2021_12_12_114203_create_legalitas_table', 1),
(8, '2021_12_29_022055_create_produks_table', 1),
(9, '2021_12_30_064033_create_studibandings_table', 1),
(10, '2021_12_31_010915_create_admins_table', 1),
(11, '2022_01_06_042338_create_kotas_table', 1),
(14, '2022_01_08_080253_create_orders_table', 2),
(16, '2022_01_08_080310_create_carts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `buyer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `ekspedisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tgl_pembayaran` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `kode_transaksi`, `tgl_transaksi`, `buyer`, `nohp`, `alamat`, `kota`, `total_produk`, `berat`, `subtotal`, `ongkir`, `total`, `ekspedisi`, `estimasi`, `catatan`, `status`, `tgl_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 'tr220118101', '2022-01-18 10:14:07', 'Falisa', '6289344225125', 'Jambusari rt.01 rw.07 Kertek Wonosobo - Kertek - 56371', 'Kabupaten Wonosobo, Jawa Tengah', 2, 1875, 100000, 16000, 116000, 'JNE CTC', '3-6 hari', 'belakang apotek hidayat', '3', NULL, '2022-01-18 03:14:07', '2022-01-20 06:10:51'),
(3, 'tr220118102', '2022-01-18 10:44:30', 'Isal D', '6289648712563', 'Mulosari - Kertek - 55281', 'Kabupaten Wonosobo, Jawa Tengah', 20, 1500, 1600000, 16000, 1616000, 'JNE CTC', '3-6 hari', NULL, '3', NULL, '2022-01-18 03:44:30', '2022-01-27 08:30:21'),
(6, 'tr220119143', '2022-01-19 02:23:10', 'Marco', '6289648712563', 'kjhkjhkjhkj - Imogiri - 55321', 'Kabupaten Kulon Progo, DI Yogyakarta', 3, 2250, 120000, 52000, 172000, 'JNE YES', '1-1 hari', NULL, '2', NULL, '2022-01-19 07:23:10', '2022-01-20 06:10:13'),
(7, 'tr220120114', '2022-01-20 11:31:11', 'Fay Salma', '6289648712563', 'Toko Yumna Jl. Mandiraja Banyumas - Susukan - 53475', 'Kabupaten Banjarnegara, Jawa Tengah', 3, 1500, 80000, 32000, 112000, 'JNE OKE', '3-6 hari', NULL, '0', NULL, '2022-01-20 04:31:11', '2022-01-20 04:31:11'),
(8, 'tr220125095', '2022-01-25 09:27:24', 'Isal', '6282147366776', 'Jl. Nangka No. 11 Ngringin Condongcatur Depok Sleman Yogyakarta - Depok - 55283', 'Kabupaten Sleman, DI Yogyakarta', 3, 3000, 100000, 36000, 136000, 'JNE OKE', '2-3 hari', NULL, '3', NULL, '2022-01-25 02:27:24', '2022-01-27 08:30:43'),
(9, 'tr220126146', '2022-01-26 02:05:57', 'Slamet', '62+6282147366776', 'Jl. Nangka No. 11 Ngringin Condongcatur Depok Sleman Yogyakarta - Depok - 55283', 'Kabupaten Sleman, DI Yogyakarta', 4, 3375, 120000, 84000, 204000, 'JNE YES', '1-1 hari', NULL, '0', NULL, '2022-01-26 07:05:57', '2022-01-26 07:05:57'),
(10, 'tr220126147', '2022-01-26 02:08:19', 'Lo', '6289648712563', 'alamat lengkap - Susukan - 56371', 'Kabupaten Pandeglang, Banten', 4, 3375, 120000, 116000, 236000, 'JNE REG', '2-3 hari', 'catat', '0', NULL, '2022-01-26 07:08:19', '2022-01-26 07:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `kode_produk`, `nama`, `harga`, `kategori`, `stok`, `berat`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'pmin220101', 'Carica Cup Mini 125gr isi 3 cup', 20000, 'minuman', 200, 375, 'Berat per Cup : 125gr\r\nBobot Tuntas : 65gr\r\nKomposisi : carica, gula, air\r\nDaya Tahan : 6 bulan', 'pc220101', NULL, '2022-01-27 07:58:17'),
(2, 'pmin220102', 'Carica Cup Mini 125gr isi 6 cup', 40000, 'minuman', 200, 750, 'Berat per Cup : 125gr\r\nBobot Tuntas : 65gr\r\nKomposisi : carica, gula, air\r\nDaya Tahan : 6 bulan', 'pc220102', NULL, '2022-01-27 07:55:36'),
(3, 'pmin220103', 'Carica Cup Mini 125gr isi 12 cup', 60000, 'minuman', 200, 1500, 'Berat per Cup : 125gr\r\nBobot Tuntas : 65gr\r\nKomposisi : carica, gula, air\r\nDaya Tahan : 6 bulan', 'pc220103', NULL, '2022-01-27 07:55:07'),
(4, 'pmin220104', 'Carica Cup Jumbo 250gr isi 6 cup', 60000, 'minuman', 200, 1500, 'Berat per Cup : 250gr\r\nBobot Tuntas : 130gr\r\nKomposisi : carica, gula, air\r\nDaya Tahan : 6 bulan', 'pc220104', NULL, '2022-01-27 07:55:49'),
(5, 'pmin220105', 'Carica Cup Jumbo 250gr isi 12 cup', 120000, 'minuman', 200, 3000, 'Berat per Cup : 250gr\r\nBobot Tuntas : 130gr\r\nKomposisi : carica, gula, air\r\nDaya Tahan : 6 bulan', 'pc220105', NULL, '2022-01-27 07:55:58'),
(17, 'psna220106', 'Keripik Kedelai Kucai', 25000, 'snack', 100, 100, 'KERIPIK KEDELAI KUCAI diolah sepenuh hati perasaan perempuan, diproduksi dari bahan Kedelai organik lokal premium hasil kekayaan alam Pegunungan Dieng Wonosobo.\r\nKERIPIK KEDELAI KUCAI, camilan sehat, berkualitas & kaya manfaat. Antioksidan, Isoflavone & Organosulfur yang terkandung dalam KERIPIK KEDELAI KUCAI bermanfaat meningkatkan kesehatan, mengurangi resiko penyakit jantung, mencegah kanker, mencegah osteoporosis, mengatasi gejala menopause, meredakan stres , menurunkan kolesterol, menurunkan tekanan darah & menjaga berat badan seimbang. \r\n\r\nKomposisi : Kedelai Organik Lokal Premium, Kucai, Bawang Putih, Garam,\r\nMinyak Nabati, Tepung Singkong (Mokaf), Kunyit', 'pS220106', '2022-01-27 07:35:38', '2022-01-27 08:07:17'),
(18, 'psna220107', 'Keripik Pisang Cokelat', 25000, 'snack', 100, 100, 'KERIPIK PISANG COKELAT diolah sepenuh hati perasaan perempuan, diproduksi dari bahan Pisang Organik lokal premium hasil kekayaan alam Pegunungan Dieng Wonosobo.\r\nKERIPIK PISANG COKELAT, camilan sehat, berkualitas & kaya manfaat. sumber karbohidrat, Vitamin A dan Kalsium yang terkandung dalam PISANG COKELAT bermanfaat meningkatkan kekebalan tubuh, memperlancar metabolisme, mengatasi anemis, menurunkan berat badan & menyehatkan tulang paduan cokelat bermanfaat mencegah penyakit jantung, meredakan stres, menurunkan kolesterol & tekanan darah\r\n\r\nKomposisi : Pisang Organik Lokal Premium, Coklat Premium, Gula', 'psna220107', '2022-01-27 07:45:21', '2022-01-27 07:45:21'),
(19, 'psna220108', 'Kedelai Goreng Empuk', 25000, 'snack', 100, 100, 'KEDELAI GEPUK diolah sepenuh hati perasaan perempuan, diproduksi dari bahan Kedelai organik lokal premium hasil kekayaan alam Pegunungan Dieng Wonosobo.\r\nKEDELAI GEPUK, camilan sehat, berkualitas & kaya manfaat. Antioksidan, Isoflavone & Organosulfur yang terkandung dalam KEDELAI GEPUK bermanfaat meningkatkan kesehatan, mengurangi resiko penyakit jantung, mencegah kanker, mencegah osteoporosis, mengatasi gejala menopause, meredakan stres , menurunkan kolesterol,menurunkan tekanan darah & menjaga berat badan seimbang.\r\n\r\nKomposisi : Kedelai Organik Lokal Premium, Bawang Putih, Garam, Minyak Nabati', 'psna220108', '2022-01-27 07:46:59', '2022-01-27 07:46:59'),
(20, 'psna220109', 'Opak Pedas Gula Aren', 25000, 'snack', 100, 100, 'OPAK PEDAS GULA AREN diolah sepenuh hati perasaan perempuan, diproduksi dari bahan Pisang Organik lokal premium hasil kekayaan alam Pegunungan Dieng Wonosobo.\r\nOPAK PEDAS GULA AREN, camilan sehat, berkualitas & kaya manfaat. Antioksidan & Karbohidrat yang terkandung dalam OPAK PEDAS GULA AREN bermanfaat meningkatkan energi, mengurangi reumatik, mengurangi resiko penyakit jantung,  mencegah kanker, mencegah osteoporosis, mengatasi gejala menopause, meredakan stress, menurunkan kolesterol, menurunkan tekanan darah, meningkatkan fungsi otak & saraf.\r\n\r\nKomposisi : Singkong Organik Lokal Premium, Cabai, Gula Aren, Garam', 'psna220109', '2022-01-27 07:48:25', '2022-01-27 07:48:25'),
(21, 'psna220110', 'Keripik Jamur Benik', 25000, 'snack', 100, 100, 'JAMUR BENIK diolah sepenuh hati perasaan perempuan, diproduksi dari bahan Jamur Benik Organik lokal premium hasil kekayaan alam Pegunungan Dieng Wonosobo.\r\nJAMUR BENIK, camilan sehat, berkualitas & kaya manfaat. Antioksidan & Vitamin B yang terkandung dalam JAMUR BENIK bermanfaat meningkatkan energi, mengurangi resiko penyakit jantung, mencegah kanker, mencegah osteoporosis, mengatasi gejala menopause, meredakan stress, menurunkan kolesterol, menurunkan tekanan darah & menjaga berat badan seimbang.\r\n\r\nKomposisi : Jamur Benik Organik Lokal Premium, Tepung Singkong (mokaf),\r\nBawang Putih Organik, Garam', 'psna220110', '2022-01-27 07:50:04', '2022-01-27 07:50:04'),
(22, 'pcr220111', 'Dummy', 2000, 'craft', 2000, 100, 'yahaha', 'pcr220111', '2022-01-27 08:27:00', '2022-01-27 08:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `studi_bandings`
--

CREATE TABLE `studi_bandings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` enum('observasi','studibanding') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'observasi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studi_bandings`
--

INSERT INTO `studi_bandings` (`id`, `foto`, `judul`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'observasi1', 'Observasi UNNES 8 Januari 2018', 'observasi', NULL, NULL),
(2, 'observasi2', 'Observasi UNSIQ 20 Maret 2018', 'observasi', NULL, NULL),
(3, 'observasi3', 'Observasi UNSIQ 5 April 2018', 'observasi', NULL, NULL),
(4, 'observasi4', 'Observasi UNSIQ 10 April 2018', 'observasi', NULL, NULL),
(5, 'observasi5', 'Observasi UNY 20 Oktober 2018', 'observasi', NULL, NULL),
(6, 'observasi6', 'Observasi UNTIDAR Magelang 17 November 2018', 'observasi', NULL, NULL),
(7, 'studibanding1', 'Studi Banding DPD - FTPKN (Sumsel) Oktober 2021', 'studibanding', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimoni` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `status`, `keterangan`, `testimoni`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Adin', 'alumni', 'Lulusan Paket C PKBM CEMERLANG', 'Akibat salah pergaulan saya terjebak pada lingkungan yang tidak baik, saya DO dari sekolah formal, dan melanjutkan di Paket C (setara SMA) . Saya mengucapkan terima kasih pada PKBM CEMERLANG. Benar benar memiliki rasa tanggung jawab dalam pembinaan peserta didiknya. Saya ditempatkan kerja di PT Tirta Investama (AQUA). Saya merekomendasikan kepada teman dan saudara, untuk belajar di PKBM CEMERLANG. Selain mendapatkan ijazah, saya dan rekan-rekan tidak menganggur lagi.', 'testi-adin', NULL, NULL),
(2, 'Mardiati', 'alumni', 'Lulusan Paket B PKBM CEMERLANG', 'Tidak menyangka mengikuti pembelajaran di PKBM CEMERLANG begitu menyenangkan. Tutor sangat peduli pada kami, adanya layanan konseling , dharma wisata, dan di luar jam akademik kesetaraan kami dibimbing keterampilan untuk bekal kerja atau berwirausaha.PKBM CEMERLANG benar-benar mengerti apa yang kami butuhkan.', 'testi-mardiati', NULL, NULL),
(3, 'Afifah', 'alumni', 'Lulusan Keterampilan PKBM CEMERLANG', 'Setelah mengikuti keterampilan di PKBM CEMERLANG saya dibina untuk berwirausaha. Alhamdulilah usaha sukses, saya membuka 2 toko pusat oleh-oleh di Jl. Raya Kertek - Wonosobo.', 'testi-afifah', NULL, NULL),
(4, 'Drs. Abdulah, MPd.', 'pemerintah', 'Pemerintah Kabupaten Wonosobo', 'PKBM CEMERLANG selain turut mendukung penjaminan mutu pendidikan non formal juga mampu memperkuat peran kelembagaan dan fungsi layanan non formal yang dilaksanakan secara efisien, akuntabel dan produktif sehingga jaringan kemitraan dan kemandirian PKBM semakin kuat.', 'testi-drsabdulah', NULL, NULL),
(5, 'Lily Ariani, SE', 'ptk', 'PTK PKBM Cemerlang', 'Saya mengikuti perjuangan Bu Anna dalam mengelola PKBM dari nol. Saya membantu beliau sudah 5 tahun sejak PKBM CEMERLANG merintis di tahun 2010. \r\nBu Anna berjuang keras membentuk sistem, hingga di akhir tahun 2011 mulai dilaksanakannya manajemen baru.Dengan kontrak kerja yang jelas, saya dan rekan – rekan semakin mantap penuh waktu di PKBM CEMERLANG, karena pengelola benar-benar bertanggung jawab dan kesejahteraan kami terjamin. Belajar dari kiprah beliau, selain bekerja juga perasaan puas lahir batin karena dapat membantu masyarakat di jalur pendidikan nonformal.\r\nPKBM selain mensejaterakan masyarakat juga mampu mensejahterakan PTK yang terlibat. Honorarium mencapai 3,5 juta sesuai prestasi kerja', 'testi-lily', NULL, NULL),
(6, 'Eva Febriani', 'lembaga lain', 'Pengelola PKBM Kuranji Kalsel', 'PKBM CEMERLANG tidak pelit berbagi ilmu manajemen, strategi BINTANG CEMERLANG yang diberikan,saya terapkan di lembaga, hasilnya sungguh luar biasa! Mengubah manajemen lembaga menjadi baik dan peningkatan minat belajar masyarakat.', 'testi-eva', NULL, NULL),
(7, 'Sri', 'publik', 'Penduduk Setempat', 'Berdirinya PKBM di lingkungan kami, turut mengurangi pengangguran. Ibu – ibu yang menganggur dilatih berbagai keterampilan pada akhirnya dapat berwirausaha mandiri dari keterampilan tersebut. \r\nKegiatan sangat bermanfaat dan banyak melibatkan warga, terimakasih PKBM CEMERLANG.', 'testi-sri', NULL, NULL),
(8, 'Dian Chandra', 'mitra', 'Perishable IDM Jr Manager', 'Saya sangat mengapresiasi Produk PKBM CEMERLANG, selain berkualitas juga menggunakan sistem manajemen yang baik sehingga mampu mengikuti permintaan pasar modern dan mampu menembus pangsa pasar nasional.', 'testi-dian', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legalitas`
--
ALTER TABLE `legalitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_kode_transaksi_unique` (`kode_transaksi`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produks_kode_produk_unique` (`kode_produk`);

--
-- Indexes for table `studi_bandings`
--
ALTER TABLE `studi_bandings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT for table `legalitas`
--
ALTER TABLE `legalitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `studi_bandings`
--
ALTER TABLE `studi_bandings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
