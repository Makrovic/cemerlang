-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 10:44 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(8, 'Margono', 'Wonosobo 27-7-1968', 'Pungangan Jurang rt1 rw2 Mojotengah', 'Paket CV', 'Menjadi Kepala Desa Pungangan', 'ss8', NULL, NULL);

-- --------------------------------------------------------

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
-- Dumping data for table `studi_bandings`
--

INSERT INTO `studi_bandings` (`id`, `foto`, `judul`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'observasi1', 'Observasi UNNES 8 Januari 2018', 'observasi', NULL, NULL),
(2, 'observasi2', 'Observasi UNSIQ 20 Maret 2018', 'observasi', NULL, NULL),
(3, 'observasi3', 'Observasi UNSIQ 5 April 2018', 'observasi', NULL, NULL),
(4, 'observasi4', 'Observasi UNSIQ 10 April 2018', 'observasi', NULL, NULL),
(5, 'observasi5', 'Observasi UNNES 20 Oktober 2018', 'observasi', NULL, NULL),
(6, 'observasi6', 'Observasi UNTIDAR Magelang 17 November 2018', 'observasi', NULL, NULL),
(7, 'studibanding1', 'Studi Banding DPD - FTPKN (Sumsel) Oktober 2021', 'studibanding', NULL, NULL);

-- --------------------------------------------------------

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `status`, `keterangan`, `testimoni`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Adin', 'alumni', 'Lulusan Paket C PKBM CEMERLANG', 'Akibat salah pergaulan saya terjebak pada lingkungan yang tidak baik, saya DO dari sekolah formal, dan melanjutkan di Paket C (setara SMA) . Saya mengucapkan terima kasih pada PKBM CEMERLANG. Benar benar memiliki rasa tanggung jawab dalam pembinaan peserta didiknya. Saya ditempatkan kerja di PT Tirta Investama (AQUA). Saya merekomendasikan kepada teman dan saudara, untuk belajar di PKBM CEMERLANG. Selain mendapatkan ijazah, saya dan rekan-rekan tidak menganggur lagi.', 'testi-adin', NULL, NULL),
(2, 'Mardiati', 'alumni', 'Lulusan Paket B PKBM CEMERLANG', 'Tidak menyangka mengikuti pembelajaran di PKBM CEMERLANG begitu menyenangkan. Tutor sangat peduli pada kami, adanya layanan konseling , dharma wisata, dan di luar jam akademik kesetaraan kami dibimbing keterampilan untuk bekal kerja atau berwirausaha.PKBM CEMERLANG benar-benar mengerti apa yang kami butuhkan.', 'testi-mardiati', NULL, NULL),
(3, 'Afifah', 'alumni', 'Lulusan Keterampilan PKBM CEMERLANG', 'Setelah mengikuti keterampilan di PKBM CEMERLANG saya dibina untuk berwirausaha. Alhamdulilah usaha sukses, saya membuka 2 toko pusat oleh-oleh di Jl. Raya Kertek - Wonosobo.', 'testi-afifah', NULL, NULL);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
