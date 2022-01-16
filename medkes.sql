-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2022 pada 12.37
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medkes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
('ADM-001', 'admin', 'admin', '$2y$10$nqJMf17vKrFo42KybeV9h.922JYrHrwNFBEm1uZndgYFbyPVDmoym'),
('ADM-002', 'Test', 'testadmin', '$2y$10$BEBD5KUEHmK7gjV/W4D6AusEiuhBm0FwfcMXHNy1vegJHEEqHIYMW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apoteker`
--

CREATE TABLE `apoteker` (
  `id_admin_apotek` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `apoteker`
--

INSERT INTO `apoteker` (`id_admin_apotek`, `nama_admin`, `username`, `password`) VALUES
('ADMP-001', 'apotek', 'apotek', '$2y$10$QWJvESrhVYgqY8U0DJ1cqua7WGXcix/Idhgc5N6Y1jJlnMIAwBZjG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_resep`
--

CREATE TABLE `detail_resep` (
  `id_detail_resep` int(10) UNSIGNED NOT NULL,
  `cara_pakai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dosis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_record` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_obat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_resep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_resep`
--

INSERT INTO `detail_resep` (`id_detail_resep`, `cara_pakai`, `dosis`, `no_record`, `id_obat`, `id_resep`, `id_konsultasi`, `id_pasien`) VALUES
(1, 'Sehabis Makan', '3 x 1', '134412', 'OBT-002', 'RSP-001', 'KST-002', 'PSN-001'),
(2, 'Sehabis Makan', '1 x 1', '1344122', 'OBT-003', 'RSP-001', 'KST-002', 'PSN-001'),
(3, 'Sehabis Makan', '3 x 1', '134412', 'OBT-001', 'RSP-003', 'KST-006', 'PSN-003'),
(4, 'Sehabis Makan', '3 x 1', '1344122', 'OBT-002', 'RSP-003', 'KST-006', 'PSN-003'),
(5, 'Di oles', '1 Oles', '131324234', 'OBT-002', 'RSP-004', 'KST-007', 'PSN-004'),
(6, 'Di oles', '012', '3242343543', 'OBT-002', 'RSP-005', 'KST-011', 'PSN-007'),
(7, 'Di oles', '012', '3242343543', 'OBT-001', 'RSP-005', 'KST-011', 'PSN-007');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokter` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengalaman_kerja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `status` enum('Aktif','Tidak aktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `email`, `username`, `password`, `alamat`, `no_telp`, `STR`, `keahlian`, `foto`, `pengalaman_kerja`, `harga`, `status`) VALUES
('DR-001', 'Dr Elmuru', 'elmuru@mail.com', 'elmuru', '$2y$10$3BE/ncxbG9M.QlbUilSLkuQ4eKtprdCPJjlmLp/v1/fp3tlvfxj56', NULL, '081233127318', '2121423', 'Spesialis Mata', 'example.jpg', '13 Tahun pengalaman', 70000, 'Aktif'),
('DR-002', 'Hanif', NULL, 'hanif', '$2y$10$rrTv0G0S17sV8dj3zYVdgOnlxeEb8dLjk7TVMfis6.R/pJqDkXQMS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak aktif'),
('DR-003', 'Rizal', NULL, 'rizal', '$2y$10$uGE4vzEHtIdSo4o2jSDjbuCHNVWCwiHQiC3Vm/H4/JNb9fEUtgDDO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Aktif'),
('DR-004', 'Testing', 'tesdokter@gmail.com', 'testdokter', '$2y$10$aeV0udwteoQoQHOp7jaHF.VwozfrR8Zp8VyrOL4M43Mynze33m9OS', NULL, '0812342134', '123333435', 'Spesialis Jantung', '01.jpg', '12 Tahun Pengalaman Kerja', NULL, 'Aktif'),
('DR-005', 'Test Dokter 2', NULL, 'testdokter2', '$2y$10$SMIVjdFORPrUHUJaG.99.eJPmPB/VJLhPWbtFwbADwzhsavNO/1/O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_berakhir` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal`, `jam_mulai`, `jam_berakhir`, `id_dokter`) VALUES
('JDW-001', '2022-01-03', '09:45', '16:45', 'DR-001'),
('JDW-002', '2022-02-03', '08:45', '16:45', 'DR-001'),
('JDW-003', '2022-03-03', '09:45', '16:45', 'DR-001'),
('JDW-004', '2022-04-03', '09:45', '16:45', 'DR-001'),
('JDW-005', '2022-05-03', '12:45', '16:45', 'DR-001'),
('JDW-006', '2022-06-03', '09:45', '16:45', 'DR-001'),
('JDW-007', '2022-07-03', '16:45', '20:45', 'DR-001'),
('JDW-008', '2022-08-03', '16:45', '20:45', 'DR-001'),
('JDW-009', '2022-09-03', '09:45', '16:45', 'DR-001'),
('JDW-010', '2022-01-04', '10:45', '16:45', 'DR-002'),
('JDW-011', '2022-01-15', '09:45', '16:45', 'DR-003'),
('JDW-012', '2022-01-14', '09:45', '16:45', 'DR-003'),
('JDW-013', '2022-01-20', '11:45', '16:45', 'DR-004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_obat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`) VALUES
('OBT-001', 'Malveius Obat Mata'),
('OBT-002', 'Etriksin Obat Kulit'),
('OBT-003', 'Nobieus Obat Hidung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasien` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon_rumah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tgl_buat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `email`, `username`, `password`, `jenis_kelamin`, `alamat`, `no_ktp`, `foto`, `no_hp`, `no_telepon_rumah`, `tgl_lahir`, `tgl_buat`) VALUES
('PSN-001', 'stephen', 'stephen@mail.com', 'stephen', '$2y$10$kXamKnIGSc/x8IAse5rYnuwAvl54oC.8e.XG.yy33/4fWGGvk2NBi', 'Laki-laki', 'Komplek PBB 01', '32146893456712395', 'user-3.jpg', '08132212988', '-', '2000-06-21', '2022-01-03'),
('PSN-002', 'charles', 'charles@mail.com', 'charles', '$2y$10$9.fr76DsvdXE8iPZB1ITgeiPllzYLlyoBbU417T.KdhQMx0bNHde2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-03'),
('PSN-003', 'carlos', 'carlos@gmail.com', 'carlos', '$2y$10$zQmIUzXLhYi5S/P7//v.juPdLikmrav2z1Cuot18aPvPiZ5ghm9i2', 'Laki-laki', 'Komplek Pbb 1', '1234567890123456', 'Screenshot_(166).jpg', '081322127897', '-', '2000-02-25', '2022-01-03'),
('PSN-004', 'yuda', 'yuda@gmail.com', 'yuda', '$2y$10$Q0GDBWG5uQ0wklE4tpn9C.AK3y1lxu4PKoCqTxsWkFQAy/xW.y0my', 'Laki-laki', 'boyolali\r\n', '123123124134324', 'pentagramimage.png', '082118324234', '0938204234234', '2000-06-14', '2022-01-03'),
('PSN-005', 'supeno', 'supeno@gmail.com', 'supeno', '$2y$10$ejLgzdaYXwbcU8S/ymfJ4uCL./GSFGumYbCgLoT0c.tv.avdf3T/y', 'Laki-laki', 'tegal rejo, rt 02/01\r\nkuwiran', '324234242342', 'ktp.JPG', '082118638580', '082118638580', '2000-10-26', '2022-01-03'),
('PSN-006', 'muhidin', 'muhidin@mail.com', 'muhidin', '$2y$10$9gpMxCnW807gt4o6SajUwupJK53gyqZ4Jz5YTKRBELQiSWU.8uPDK', 'Laki-laki', 'tegal rejo, rt 02/01\r\nkuwiran', '4234234234', 'foto_alvin.png', '082118638580', '-', '2000-03-01', '2022-01-03'),
('PSN-007', 'hadi', 'hadi@gmail.com', 'hadi', '$2y$10$8ba8XRRkcvtK2nydDWgqkO5QMxjiw261Wdt0zl9m3QNKBHeLz5gdq', 'Laki-laki', 'hgfjhsdgfjhs', '264876458345', 'sacai3_1.png', '234624234234', '18834624234', '2021-07-14', '2022-01-03'),
('PSN-008', 'sayoko', 'sayoko@gmail.com', 'sayoko', '$2y$10$EYj9iAh8CjUmVMjk3gYYW.mjPHMrCaDJ6/olMrNoXATm3yKdKso6q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-03'),
('PSN-009', 'dimasd', 'dimas@gmail.com', 'dimas', '$2y$10$lxuZ68Vz/lTan2kXB5xx5OwQnJWifa6mTs5UyQegAgLrdyzbujsIG', 'Laki-laki', 'tegal rejo, rt 02/01\r\nkuwiran', '1234567890123456', 'Haga_Ibnu_Hakim_2_3_Form_dan_BA_Revisi-2.png', '082118638580', '-', '2021-08-03', '2022-01-03'),
('PSN-010', 'Rizal', 'syahrizalhanif@gmail.com', 'rizal', '$2y$10$FjSmdFOTDOr/PbEvhIy0tePptAjFkuoaesC7qmVQ0wmb00tyvAqbu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-03'),
('PSN-011', 'Syahrizal Hanif', 'rzlco20@gmail.com', 'rzlco', '$2y$10$R9Xh.bdeuGOgX7pxnxreeeAQMGSVT5ghmrBpNxWrD8vxcd4340UDu', 'Laki-laki', 'Perum Griya Pertiwi Indah B6 Widorosari RT.4 RW.7 Pucangan Kartasura', '1234567891012131', '1.jpg', '08123834718', '-', '2000-03-14', '2022-01-13'),
('PSN-012', 'Testing', 'test@mail.com', 'testing', '$2y$10$XmFr4Oyca9KuQ60i.twWdOLAF8dFsWK9cgLBOgLBGPCjJpxqNrAxW', 'Laki-laki', 'ABCDFDFDFDFDFW', '1234567891012131', '5.jpg', '0812321412412', '-', '1999-04-20', '2022-01-15'),
('PSN-013', 'Test Pasienn', 'test@mail.comm', 'testpasien', '$2y$10$JYJ9RHKB4bMSeh6fYT7YPOVYNG56AurT46Mx/raYwH70Jl68GdBke', 'Laki-laki', 'ABCD', '1234567891012131', '3.jpg', '08123834718', '-', '2000-04-20', '2022-01-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `foto_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_bayar` enum('Terbayar','Belum dibayar') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum dibayar',
  `tgl_pembayaran` date DEFAULT NULL,
  `tgl_validasi` date DEFAULT NULL,
  `jam_validasi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_admin` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `kode_bayar`, `nominal`, `foto_pembayaran`, `status_bayar`, `tgl_pembayaran`, `tgl_validasi`, `jam_validasi`, `id_admin`, `id_konsultasi`) VALUES
('PMB-001', '888875312849', 70000, 'download.jpg', 'Terbayar', NULL, NULL, '11:52', 'ADM-001', 'KST-002'),
('PMB-002', '888843280579', 70000, 'download1.jpg', 'Terbayar', NULL, NULL, '02:31', 'ADM-001', 'KST-003'),
('PMB-003', '888830829571', 70000, 'Screenshot_(166).jpg', 'Terbayar', NULL, NULL, '02:00', 'ADM-001', 'KST-004'),
('PMB-004', '888898465702', 70000, 'Screenshot_(166)1.jpg', 'Terbayar', NULL, NULL, '04:48', 'ADM-001', 'KST-005'),
('PMB-005', '888809876352', 70000, 'Screenshot_(166)2.jpg', 'Terbayar', NULL, NULL, '04:51', 'ADM-001', 'KST-006'),
('PMB-006', '888856321498', 70000, 'pentagramimage.png', 'Terbayar', NULL, NULL, '03:24', 'ADM-001', 'KST-007'),
('PMB-007', '888829178643', 70000, 'sacai3_1.png', 'Terbayar', NULL, NULL, NULL, NULL, 'KST-008'),
('PMB-008', '888849360257', 70000, 'pentagramimage1.png', 'Terbayar', NULL, NULL, '03:26', 'ADM-001', 'KST-009'),
('PMB-009', '888805891276', 70000, NULL, 'Belum dibayar', NULL, NULL, NULL, NULL, 'KST-010'),
('PMB-010', '888813658274', 70000, 'sacai3_11.png', 'Terbayar', NULL, NULL, '08:11', 'ADM-001', 'KST-011'),
('PMB-011', '888841028653', 70000, 'H.png', 'Terbayar', NULL, NULL, '10:23', 'ADM-001', 'KST-012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_konsultasi`
--

CREATE TABLE `pendaftaran_konsultasi` (
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_keluhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Menunggu','Disetujui','Ubah jadwal','Dibatalkan','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu',
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaran_konsultasi`
--

INSERT INTO `pendaftaran_konsultasi` (`id_konsultasi`, `tanggal`, `jam`, `keluhan`, `foto_keluhan`, `meet`, `status`, `id_pasien`, `id_dokter`) VALUES
('KST-002', '2021-07-18', '13:00', 'Sakit kulit bawah mata', '1_41.jpg', 'https://meet.google.com/', 'Selesai', 'PSN-001', 'DR-001'),
('KST-003', '2021-07-21', '13:45', 'Cape', 'Screenshot_2020-11-10_092332.jpg', 'https://meet.google.com/', 'Disetujui', 'PSN-001', 'DR-001'),
('KST-004', '2021-07-24', '09:45', 'Sakit telinga', 'download.jpg', 'https://meet.google.com/', 'Selesai', 'PSN-001', 'DR-001'),
('KST-005', '2021-07-28', '11:00', 'Ada jerawat', 'Screenshot_(166).jpg', 'https://meet.google.com/', 'Dibatalkan', 'PSN-003', 'DR-001'),
('KST-006', '2021-07-31', '13:00', 'Sakit jerawat', 'Screenshot_(166)1.jpg', 'https://meet.google.com/', 'Selesai', 'PSN-003', 'DR-001'),
('KST-007', '2021-07-29', '11:00', 'jerawat', 'pentagramimage.png', '', 'Selesai', 'PSN-004', 'DR-001'),
('KST-008', '2021-07-31', '11:00', 'jerawat', 'pentagramimage1.png', 'https://meet.google.com/bbt-tunv-bnx', 'Menunggu', 'PSN-004', 'DR-001'),
('KST-009', '2021-07-29', '11:00', 'jerawat', 'pentagramimage2.png', 'https://www.youtube.com/watch?v=NbvW5yPuA8k', 'Ubah jadwal', 'PSN-004', 'DR-001'),
('KST-010', '2021-07-28', '11:00', 'jerawat', 'foto_jerawat.jpg', 'https://meet.google.com/vvg-oobq-mcy', 'Menunggu', 'PSN-006', 'DR-001'),
('KST-011', '2021-07-31', '11:00', 'jerawat', 'sacai3_1.png', 'https://www.youtube.com/watch?v=NbvW5yPuA8k', 'Selesai', 'PSN-007', 'DR-001'),
('KST-012', '2021-08-30', '16:45', 'jerawat', 'Ha.png', 'google.meet', 'Dibatalkan', 'PSN-009', 'DR-001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `no_record` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekam_medis` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_pemeriksaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`no_record`, `no_rekam_medis`, `tanggal`, `jam`, `diagnosa`, `foto_pemeriksaan`, `id_dokter`, `id_pasien`, `id_konsultasi`) VALUES
('RC-001', 124411241, '2021-07-23', '12:00', 'Sakit bagian mata menyebabkan bengkak, hindari panas matahari', 'Presentasi_Sederhana_Tebal_Oranye_Tua_dan_Putih.png', 'DR-001', 'PSN-001', 'KST-002'),
('RC-002', NULL, NULL, NULL, NULL, NULL, 'DR-001', 'PSN-001', 'KST-004'),
('RC-003', 1134125173, '2021-07-26', '12:00', 'Konsultasi Selesai', 'Screenshot_(166).jpg', 'DR-001', 'PSN-003', 'KST-006'),
('RC-004', 123213132, '2021-07-27', '12:00', 'Kurang menjaga kebersihan wajah', 'foto_jerawat.jpg', 'DR-001', 'PSN-004', 'KST-007'),
('RC-005', 2147483647, '2021-07-31', '12:00', 'sdfsdf', 'sacai3_1.png', 'DR-001', 'PSN-007', 'KST-011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reschedule`
--

CREATE TABLE `reschedule` (
  `id_reschedule` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_reschedule` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_reschedule` date NOT NULL,
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reschedule`
--

INSERT INTO `reschedule` (`id_reschedule`, `jam_reschedule`, `tgl_reschedule`, `id_konsultasi`) VALUES
('RSC-001', '13:45', '2021-07-21', 'KST-003'),
('RSC-002', '09:45', '2021-07-24', 'KST-004'),
('RSC-003', '09:45', '2021-07-28', 'KST-005'),
('RSC-004', '09:45', '0000-00-00', 'KST-009');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id_resep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_centang` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_centang` date DEFAULT NULL,
  `validasi_pasien` enum('Ditebus','Belum ditebus') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum ditebus',
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_admin_apotek` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id_resep`, `jam_centang`, `tgl_centang`, `validasi_pasien`, `id_konsultasi`, `id_admin_apotek`) VALUES
('RSP-001', '09:58:42', '2021-07-25', 'Ditebus', 'KST-002', 'ADMP-001'),
('RSP-002', NULL, NULL, 'Belum ditebus', 'KST-004', NULL),
('RSP-003', NULL, NULL, 'Ditebus', 'KST-006', 'ADMP-001'),
('RSP-004', NULL, NULL, 'Ditebus', 'KST-007', NULL),
('RSP-005', NULL, NULL, 'Ditebus', 'KST-011', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `apoteker`
--
ALTER TABLE `apoteker`
  ADD PRIMARY KEY (`id_admin_apotek`);

--
-- Indeks untuk tabel `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD PRIMARY KEY (`id_detail_resep`),
  ADD KEY `detail_resep_id_obat_foreign` (`id_obat`),
  ADD KEY `detail_resep_id_resep_foreign` (`id_resep`),
  ADD KEY `detail_resep_id_konsultasi_foreign` (`id_konsultasi`),
  ADD KEY `detail_pasien_id_pasien_foreign` (`id_pasien`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `jadwal_id_dokter_foreign` (`id_dokter`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayaran_id_admin_foreign` (`id_admin`),
  ADD KEY `pembayaran_id_konsultasi_foreign` (`id_konsultasi`);

--
-- Indeks untuk tabel `pendaftaran_konsultasi`
--
ALTER TABLE `pendaftaran_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `pendaftaran_konsultasi_id_pasien_foreign` (`id_pasien`),
  ADD KEY `pendaftaran_konsultasi_id_dokter_foreign` (`id_dokter`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`no_record`),
  ADD KEY `rekam_medis_id_dokter_foreign` (`id_dokter`),
  ADD KEY `rekam_medis_id_pasien_foreign` (`id_pasien`),
  ADD KEY `rekam_medis_id_konsultasi_foreign` (`id_konsultasi`);

--
-- Indeks untuk tabel `reschedule`
--
ALTER TABLE `reschedule`
  ADD PRIMARY KEY (`id_reschedule`),
  ADD KEY `reschedule_id_konsultasi_foreign` (`id_konsultasi`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `resep_id_admin_apotek_foreign` (`id_admin_apotek`),
  ADD KEY `resep_id_konsultasi_kosnsultasi_foreign` (`id_konsultasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_resep`
--
ALTER TABLE `detail_resep`
  MODIFY `id_detail_resep` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD CONSTRAINT `detail_pasien_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_resep_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `pendaftaran_konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_resep_id_obat_foreign` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_resep_id_resep_foreign` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `pendaftaran_konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendaftaran_konsultasi`
--
ALTER TABLE `pendaftaran_konsultasi`
  ADD CONSTRAINT `pendaftaran_konsultasi_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_konsultasi_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `pendaftaran_konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reschedule`
--
ALTER TABLE `reschedule`
  ADD CONSTRAINT `reschedule_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `pendaftaran_konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_id_admin_apotek_foreign` FOREIGN KEY (`id_admin_apotek`) REFERENCES `apoteker` (`id_admin_apotek`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_id_konsultasi_kosnsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `pendaftaran_konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
