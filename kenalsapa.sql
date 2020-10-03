-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 05:08 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kenalsapa`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `keywords` text,
  `status_berita` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `judul_gambar` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `judul_gambar`, `gambar`, `tanggal_update`) VALUES
(5, 4, 'adad', 'ic_2.png', '2020-02-22 13:28:15'),
(6, 11, 'ADIDAS DISTRICT LX2 ALL 40MMIDR', 'adidas2.jpg', '2020-03-04 07:32:01'),
(7, 11, 'ADIDAS DISTRICT LX2 ALL 40MMIDR', 'adidas3.jpg', '2020-03-04 07:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id_header_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `rekening_pembayaran` varchar(255) DEFAULT NULL,
  `rekening_pelanggan` varchar(255) DEFAULT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `tanggal_bayar` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_header_transaksi`, `kode_transaksi`, `id_pelanggan`, `nama_pelanggan`, `email`, `telepon`, `alamat`, `id_user`, `tanggal_transaksi`, `jumlah_transaksi`, `status_bayar`, `jumlah_bayar`, `rekening_pembayaran`, `rekening_pelanggan`, `bukti_bayar`, `id_rekening`, `tanggal_bayar`, `nama_bank`, `tanggal_post`, `tanggal_update`) VALUES
(1, '28022020XGTQN5', 1, 'Farizi', 'farizifathan27@gmail.com', '0895603534565', 'GGWP', 0, '2020-02-28 00:00:00', 338000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-28 22:56:33', '2020-02-28 21:56:33'),
(2, '28022020SGZ18Q', 1, 'Farizi', 'farizifathan27@gmail.com', '0895603534565', 'GGWP', 0, '2020-02-28 00:00:00', 399000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-28 23:02:55', '2020-02-28 22:02:55'),
(3, '28022020QATHSO', 1, 'Farizi', 'farizifathan27@gmail.com', '0895603534565', 'GGWP', 0, '2020-02-28 00:00:00', 1200000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-28 23:16:17', '2020-02-28 22:16:17'),
(4, '29022020JBFLNU', 1, 'Farizi', 'farizifathan27@gmail.com', '0895603534565', 'GGWP', 0, '2020-02-29 00:00:00', 1198000, 'Konfirmasi', 1198000, '1204910421', 'Dwi alastas', '2.png', 1, '01-03-2020', 'BCA', '2020-02-29 14:37:33', '2020-03-01 12:10:25'),
(5, '01032020FJHRUV', 1, 'Farizi', 'farizifathan27@gmail.com', '0895603534565', 'GGWP', 0, '2020-03-01 00:00:00', 799000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-01 13:18:46', '2020-03-01 12:18:46'),
(6, '010320208CF2WI', 1, 'Farizi', 'farizifathan27@gmail.com', '0895603534565', 'GGWP', 0, '2020-03-01 00:00:00', 0, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-01 13:19:40', '2020-03-01 12:19:40'),
(7, '01032020SKAXA7', 1, 'Farizi Fathan Pane', 'farizifathan27@gmail.com', '0895603534565', 'Osaka\r\n', 0, '2020-03-01 00:00:00', 669000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-01 13:22:39', '2020-03-01 12:22:39'),
(8, '01032020TD5AUG', 1, 'Farizi', 'farizifathan27@gmail.com', '0895603534565', 'GGWP', 0, '2020-03-01 00:00:00', 1196000, 'Konfirmasi', 1196000, '1204910421', 'Dwi alastas', 'banner4.jpg', 1, '05-03-2020', 'BRI', '2020-03-01 13:28:56', '2020-03-05 15:28:49'),
(9, '020320208BXYBF', 5, 'Rifat Hasbi Manurung', 'rifathasbi199@gmail.com', '1204810841', 'wafjwa', 0, '2020-03-02 00:00:00', 1300000, 'Konfirmasi', 1300000, '1204910421', 'RIFAT HASBI MANURUNG', '1.png', 2, '02-03-2020', 'BCA', '2020-03-02 03:29:24', '2020-03-02 02:30:32'),
(10, '05032020XQ87VA', 3, 'Farizi Fathan ', 'farizifathanpane@yahoo.co.id', '0895603534565', '11', 0, '2020-03-05 00:00:00', 4349000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-05 11:24:09', '2020-03-05 10:24:09'),
(11, '05032020RLJ72M', 1, 'Farizi', 'farizifathan27@gmail.com', '0895603534565', 'Medan Polonia', 0, '2020-03-05 00:00:00', 1749000, 'Konfirmasi', 1749000, '1204910421', 'Dwi alastas', '6106047622957.jpg', 2, '05-03-2020', 'BCA', '2020-03-05 16:30:24', '2020-03-07 06:33:19'),
(12, '06032020RN0ZMW', 7, 'user123', 'user123@gmail.com', '01294912812', 'Medan Amplas jalan sitirezo \r\n', 0, '2020-03-06 00:00:00', 4349000, 'Konfirmasi', 4349000, '012948180', 'user123', 'transaksipayment1.png', 2, '06-03-2020', 'Mandiri', '2020-03-06 08:04:47', '2020-03-06 07:05:22'),
(13, '06032020I3DUTC', 8, 'user1234', 'user1234@gmail.com', '01294018240', 'Medan Ampas  jalan sitirezo\r\n', 0, '2020-03-06 00:00:00', 2889000, 'Konfirmasi', 2889000, '0240194019', 'user1234', 'login1.png', 1, '06-03-2020', 'Mandiri', '2020-03-06 08:10:44', '2020-03-06 07:11:08'),
(14, '11032020PODJSF', 1, 'Farizi', 'farizifathan27@gmail.com', '0895603534565', 'Medan Polonia\r\n', 0, '2020-03-11 00:00:00', 14077000, 'Konfirmasi', 14077000, '1204910421', 'RIFAT HASBI MANURUNG', '61060476229571.jpg', 2, '11-03-2020', 'BCA', '2020-03-11 04:53:29', '2020-03-11 03:58:31'),
(15, '110320206STMS2', 1, 'Farizi', 'farizifathan27@gmail.com', '0895603534565', 'GGWP', 0, '2020-03-11 00:00:00', 0, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-11 04:53:51', '2020-03-11 03:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `slug_kategori`, `nama_kategori`, `urutan`, `tanggal_update`) VALUES
(16, 'adidas', 'Adidas', 1, '2020-03-04 07:24:58'),
(17, 'casio', 'Casio', 2, '2020-03-04 08:52:47'),
(18, 'citizen', 'Citizen', 3, '2020-03-05 07:35:24'),
(19, 'fitbit', 'Fitbit', 4, '2020-03-05 08:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `keywords` text,
  `metatext` text,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `rekening_pembayaran` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `tagline`, `email`, `website`, `keywords`, `metatext`, `telepon`, `alamat`, `facebook`, `instagram`, `deskripsi`, `logo`, `icon`, `rekening_pembayaran`, `tanggal_update`) VALUES
(1, 'Eccomerce Kenalsapa', 'Spesial Jam tangan', 'farizifathan27@gmail.com', 'FARIZIFATHANPANE.COM', 'Jamtangan', 'leh', '0895603534565', 'Perumahan Johor Grand City -Kec Medan Johor  Sumatera Utara', 'https://facebook.com/farizifathan', 'https://instagram.com/farizifathan', 'Kenalsapa Eccomerce', 'logo_kenalsapa2.png', 'icon.jpg', '02104120284201', '2020-03-09 08:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_user`, `status_pelanggan`, `nama_pelanggan`, `email`, `password`, `telepon`, `alamat`, `tanggal_daftar`, `tanggal_update`) VALUES
(1, 0, 'Pending', 'Farizi', 'farizifathan27@gmail.com', 'ab076fb0b28b60f975fc883cc1330050fd82bb2b', '0895603534565', 'GGWP', '2020-02-28 21:54:30', '2020-02-29 17:07:52'),
(2, 0, 'Pending', 'Rifat Hasbi', 'rifathasbi99@gmail.com', 'ccee9f20490362b30649a4a366edbd62bd9e2322', '0895161221', 'wqq\r\n', '2020-02-29 14:22:44', '2020-02-29 13:22:44'),
(3, 0, 'Pending', 'Farizi Fathan ', 'farizifathanpane@yahoo.co.id', 'ccee9f20490362b30649a4a366edbd62bd9e2322', '0895603534565', '11', '2020-02-29 14:25:02', '2020-02-29 13:25:02'),
(4, 0, 'Pending', 'Farizi Fathan Pane', 'farezaramadhan28@gmail.com', 'ccee9f20490362b30649a4a366edbd62bd9e2322', '089124112421', 'woakdokaw\r\n', '2020-03-01 15:45:44', '2020-03-01 14:45:44'),
(5, 0, 'Pending', 'Rifat Hasbi Manurung', 'rifathasbi199@gmail.com', 'ccee9f20490362b30649a4a366edbd62bd9e2322', '1204810841', 'wafjwa', '2020-03-02 03:22:29', '2020-03-02 02:22:29'),
(6, 0, 'Pending', 'user', 'user@gmail.com', 'ccee9f20490362b30649a4a366edbd62bd9e2322', '0896702312', 'Medan Amplas ,', '2020-03-06 08:02:40', '2020-03-06 07:02:40'),
(7, 0, 'Pending', 'user123', 'user123@gmail.com', 'ccee9f20490362b30649a4a366edbd62bd9e2322', '01294912812', 'Medan Amplas\r\n', '2020-03-06 08:03:55', '2020-03-06 07:03:55'),
(8, 0, 'Pending', 'user1234', 'user1234@gmail.com', 'ccee9f20490362b30649a4a366edbd62bd9e2322', '01294018240', 'Medan Ampas \r\n', '2020-03-06 08:09:57', '2020-03-06 07:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `keywords` text,
  `harga` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `berat` float DEFAULT NULL,
  `ukuran` varchar(255) DEFAULT NULL,
  `status_produk` varchar(20) NOT NULL,
  `tanggal_post` datetime DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori`, `kode_produk`, `nama_produk`, `slug_produk`, `keterangan`, `deskripsi`, `keywords`, `harga`, `stok`, `gambar`, `berat`, `ukuran`, `status_produk`, `tanggal_post`, `tanggal_update`) VALUES
(20, 8, 17, 'CA04', 'CASIO A159WGEA-1DF', 'casio-a159wgea-1df-ca04', '<p>Diameter : 36,8 mm ,</p>\r\n\r\n<p>Thickness : 33,2 mm ,</p>\r\n\r\n<p>Quarty Battery ,</p>\r\n\r\n<p>Water Resistant 3 ATM ,</p>\r\n\r\n<p>Stainless Steel ,</p>\r\n\r\n<p>Day and Date Display</p>\r\n', 'Treat yourself to an accessory that’s ultimate in good looks and functionality—the CASIO Watch. Constructed by master craftsmen, this wristwatch is unique in style, performance, and function, making it the definition of affordable luxury. \r\n\r\nMixing it up', '#jamtangan#casio', 979000, 8, 'casio4.jpg', 70, '20mm', 'Publish', NULL, '2020-03-05 07:18:01'),
(23, 8, 16, 'AD06', 'DISTRICT_M1 ALL SILVER 40MM', 'district_m1-all-silver-40mm-ad06', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Case Width&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 40mm</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Case Thickness&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 8mm</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Movement&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"3\">: Japanese quartz movement&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Function</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"3\">: Hours, Minutes, Seconds</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Case</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"5\">: Stainless steel, with hardened mineral crystal</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Water Rating</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: 50 Meter / 5 ATM</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Watch Strap</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"3\">: Genuine leather Strap</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Strap Width</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 20mm</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Taking a direct approach to telling time, DISTRICT L1 delivers a focused, yet iconic, analog watch for daily\r\nwear. Featuring a classic, round silhouette and a simple three-hand movement, DISTRICT L1 is\r\nBauhaus-inspired and infused with adidas DNA for a ', '#jamtangan#adidas', 1500000, 10, 'adidas12.jpg', 70, '20mm', 'Publish', NULL, '2020-03-05 07:28:51'),
(24, 8, 16, 'CA07', 'ARCHIVE_SP1 WHITE 38.5MM', 'archive_sp1-white-385mm-ca07', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Case Width&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 38.5mm</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Case Thickness&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 10mm</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Movement&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: Custom module</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Function</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"5\">: Dual Time / Stopwatch / Calendar / Light</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Case</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"7\">: Polycarbonate w/silicone overmold, and hardened mineral crystal</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Water Rating</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: 50 Meter / 5 ATM</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Watch Strap</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: Silicone</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Strap Width</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 24mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'A bold & colorful version of ARCHIVE SP1 made with polycarbonate and soft silicone, creates a fashionable digital watch with a classic streetwear mindset. ARCHIVE SP1 honors color hues of the adidas palette.', '#jamtangan#adidas', 1200000, 21, 'adidas13.jpg', 70, '20mm', 'Publish', NULL, '2020-03-05 07:31:56'),
(26, 8, 18, 'CI02', 'AW1211-12A', 'aw1211-12a-ci02', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td>Case</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: Stainless Steel</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Case Size</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 42mm&nbsp;&nbsp;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Maximum run time from full charge</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"3\">: Approximately 8 months</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Movement</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: Eco-Drive</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Signal Reception&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"5\">: Without Radio Reception Without Radio Reception</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Strap</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: Calf Leather Strap</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thickness</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 9mm&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Water Resistant</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 5 Atm</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Glass</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: Crystal Glass&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '\r\n    Date Display\r\n    Eco-Drive (recharged by any light source, no need to change battery)\r\n    Insufficient Charge Warning Function\r\n    Overcharge Prevention Function', '#jamtangan#citizen', 2600000, 2, 'citizen2.jpg', 70, '20mm', 'Publish', NULL, '2020-03-05 07:39:56'),
(28, 8, 18, 'CI04', 'BM7411-16A', 'bm7411-16a-ci04', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Case</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: Stainless Steel</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Case Size</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 42mm&nbsp;&nbsp;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Movement</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: Eco-Drive</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Signal Reception&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"5\">: Without Radio Reception Without Radio Reception</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Strap</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: Calf Leather Strap</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thickness</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 9.5mm&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Water Resistant</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 10 Atm</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Glass</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: Crystal Glass</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', ' Date Display\r\n    Eco-Drive (recharged by any light source, no need to change battery)\r\n    Insufficient Charge Warning Function\r\n    Overcharge Prevention Function', '#jamtangan#citizen', 3199000, 12, 'citizen.jpg', 70, '20mm', 'Publish', NULL, '2020-03-05 07:44:31'),
(30, 8, 18, 'CI06', 'BE9173-07X', 'be9173-07x-ci06', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\">Band Type</td>\r\n			<td>: Strap</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Case Material&nbsp;</td>\r\n			<td colspan=\"2\">: Stainless Steel</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Dial Shape</td>\r\n			<td>: Round</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Dial Colour&nbsp;</td>\r\n			<td>: Brown</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Case Colour</td>\r\n			<td>: Gold</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Buckle Type</td>\r\n			<td>: Buckle</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Band Material</td>\r\n			<td>: Leather</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Technology</td>\r\n			<td>: Quartz</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Water Resistance</td>\r\n			<td>: WR50</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">Glass Type</td>\r\n			<td>: Mineral</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Calibre&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 1045</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Case Size</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 39mm</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Features</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 3 Hands</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'A testament to its durability, this Quartz powered watch has been meticulously crafted from resilient stainless steel and features an extensive 3-year battery life. Holding timeless appeal, it is the epitome of stylish masculinity with stark black dial an', '#jamtangan#citizen', 2299000, 2, 'citizen5.jpg', 70, '20mm', 'Publish', NULL, '2020-03-05 07:51:33'),
(32, 8, 16, 'AD02', 'PROCESS_SP1 CLEAR BLUE 38MM', 'process_sp1-clear-blue-38mm-ad02', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Case Width&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 38mm</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Case Thickness&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 9mm</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Movement&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"3\">: Japanese quartz movement&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Function</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"3\">: Hours, Minutes, Seconds</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Case</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"7\">: Polycarbonate case, with single curve hardened mineral crystal</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Water Rating</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td colspan=\"2\">: 50 Meter / 5 ATM</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Watch Strap</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: Silicone</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Strap Width</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>: 20mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'PROCESS SP1 utilizes unexpected materials to create an array of purified colors born from iconic adidas\r\nheritage. With a classic design enhanced by tactile details, PROCESS SP1 emotes a forward-leaning attitude\r\nthat remains rooted for daily flair.', '#jamtangan#adidas', 1150000, 21, 'adidas8.jpg', 70, '20mm', 'Publish', NULL, '2020-03-05 07:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_rekening` varchar(20) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `nomor_rekening`, `nama_pemilik`, `gambar`, `tanggal_post`) VALUES
(1, 'BCA', '0129118927162', 'Farizi Fathan', NULL, '2020-02-29 18:00:07'),
(2, 'BRI', '0129421942198', 'Rifat Hasbi', NULL, '2020-02-29 18:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_pelanggan`, `kode_transaksi`, `id_produk`, `harga`, `jumlah`, `total_harga`, `tanggal_transaksi`, `tanggal_update`) VALUES
(1, 0, 1, '28022020XGTQN5', 6, 169000, 2, 338000, '2020-02-28 00:00:00', '2020-02-28 21:56:33'),
(2, 0, 1, '28022020SGZ18Q', 10, 399000, 1, 399000, '2020-02-28 00:00:00', '2020-02-28 22:02:55'),
(3, 0, 1, '28022020QATHSO', 9, 400000, 3, 1200000, '2020-02-28 00:00:00', '2020-02-28 22:16:17'),
(4, 0, 1, '29022020JBFLNU', 10, 399000, 2, 798000, '2020-02-29 00:00:00', '2020-02-29 13:37:33'),
(5, 0, 1, '29022020JBFLNU', 9, 400000, 1, 400000, '2020-02-29 00:00:00', '2020-02-29 13:37:33'),
(6, 0, 1, '01032020FJHRUV', 10, 399000, 1, 399000, '2020-03-01 00:00:00', '2020-03-01 12:18:46'),
(7, 0, 1, '01032020FJHRUV', 9, 400000, 1, 400000, '2020-03-01 00:00:00', '2020-03-01 12:18:46'),
(8, 0, 1, '01032020SKAXA7', 6, 169000, 1, 169000, '2020-03-01 00:00:00', '2020-03-01 12:22:39'),
(9, 0, 1, '01032020SKAXA7', 8, 500000, 1, 500000, '2020-03-01 00:00:00', '2020-03-01 12:22:39'),
(10, 0, 1, '01032020TD5AUG', 7, 299000, 4, 1196000, '2020-03-01 00:00:00', '2020-03-01 12:28:57'),
(11, 0, 5, '020320208BXYBF', 9, 400000, 2, 800000, '2020-03-02 00:00:00', '2020-03-02 02:29:24'),
(12, 0, 5, '020320208BXYBF', 8, 500000, 1, 500000, '2020-03-02 00:00:00', '2020-03-02 02:29:24'),
(13, 0, 3, '05032020XQ87VA', 32, 1150000, 1, 1150000, '2020-03-05 00:00:00', '2020-03-05 10:24:09'),
(14, 0, 3, '05032020XQ87VA', 28, 3199000, 1, 3199000, '2020-03-05 00:00:00', '2020-03-05 10:24:09'),
(15, 0, 1, '05032020RLJ72M', 22, 599000, 1, 599000, '2020-03-05 00:00:00', '2020-03-05 15:30:24'),
(16, 0, 1, '05032020RLJ72M', 32, 1150000, 1, 1150000, '2020-03-05 00:00:00', '2020-03-05 15:30:24'),
(17, 0, 7, '06032020RN0ZMW', 32, 1150000, 1, 1150000, '2020-03-06 00:00:00', '2020-03-06 07:04:47'),
(18, 0, 7, '06032020RN0ZMW', 28, 3199000, 1, 3199000, '2020-03-06 00:00:00', '2020-03-06 07:04:47'),
(19, 0, 8, '06032020I3DUTC', 34, 1739000, 1, 1739000, '2020-03-06 00:00:00', '2020-03-06 07:10:44'),
(20, 0, 8, '06032020I3DUTC', 32, 1150000, 1, 1150000, '2020-03-06 00:00:00', '2020-03-06 07:10:44'),
(21, 0, 1, '11032020PODJSF', 32, 1150000, 2, 2300000, '2020-03-11 00:00:00', '2020-03-11 03:53:29'),
(22, 0, 1, '11032020PODJSF', 30, 2299000, 1, 2299000, '2020-03-11 00:00:00', '2020-03-11 03:53:29'),
(23, 0, 1, '11032020PODJSF', 28, 3199000, 1, 3199000, '2020-03-11 00:00:00', '2020-03-11 03:53:29'),
(24, 0, 1, '11032020PODJSF', 26, 2600000, 1, 2600000, '2020-03-11 00:00:00', '2020-03-11 03:53:29'),
(25, 0, 1, '11032020PODJSF', 24, 1200000, 1, 1200000, '2020-03-11 00:00:00', '2020-03-11 03:53:29'),
(26, 0, 1, '11032020PODJSF', 23, 1500000, 1, 1500000, '2020-03-11 00:00:00', '2020-03-11 03:53:29'),
(27, 0, 1, '11032020PODJSF', 20, 979000, 1, 979000, '2020-03-11 00:00:00', '2020-03-11 03:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_updat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal_updat`) VALUES
(8, 'Farizi Fathan Pane', 'farizifathan27@gmail.com', 'farizifathan', 'ccee9f20490362b30649a4a366edbd62bd9e2322', 'Admin', '2020-02-21 09:03:07'),
(10, 'Rifat hasbi', 'rifathasbi99@gmail.com', 'rifathasbi12', 'ccee9f20490362b30649a4a366edbd62bd9e2322', 'Admin', '2020-02-22 09:03:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD UNIQUE KEY `nomor_rekening` (`nomor_rekening`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
