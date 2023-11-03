-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2023 pada 04.47
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`about_id`, `subjek`, `isi`, `penulis`) VALUES
(6, 'Audio Visual Sales', 'Kami Menawarkan Solusi Produksi Satu Atap untuk peralatan Audio Visual. Dimulai dari bedah konsep acara, pemilihan dan penggunaan equipment yang tepat, koordinasi setup di lapangan, sampai dengan Eksekusi Event.', '<i class=\"fa-regular fa-file-audio\"></i>'),
(8, 'Technical Event Productions', 'Kami memberikan solusi dan perlatan teknikal yang dibutuhkan untuk membuat event anda berjalan lancar dan stabil', '<i class=\"fa-solid fa-chalkboard-user\"></i>'),
(9, 'Virtual & Hybrid Event Productions', 'Menyediakan alat dan tim untuk event-event Virtual atau Hybrid', '<i class=\"fa-solid fa-tv\"></i>'),
(10, 'AV Installation & Service', 'Kami siap menyediakan tim dan akses untuk pemasangan dan service', '<i class=\"fa-solid fa-users-gear\"></i>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `acara`
--

CREATE TABLE `acara` (
  `acara_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `ket` varchar(450) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `acara`
--

INSERT INTO `acara` (`acara_id`, `foto`, `ket`, `waktu`) VALUES
(8, '2043707330_qw1.jpg', 'Malam Anugrah Desa Wisata Indonesia', '2023-10-18'),
(9, '433706321_maxindo.jpg', 'Jetlympic 2022', '2023-10-18'),
(10, '1763585010_qw3.jpg', 'Istana Berkebaya', '2023-10-18'),
(11, '330643305_qw2.jpg', 'Jasamarga & Jasaraharja', '2023-10-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `keterangan` varchar(450) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`content_id`, `foto`, `keterangan`, `waktu`) VALUES
(24, '1556891554_a5.jpg', 'C1', '2023-10-18'),
(25, '1234077691_WhatsApp Image 2022-02-26 at 1.43.10 PM.jpeg', 'c2', '2023-10-18'),
(26, '1242393121_WhatsApp Image 2022-02-26 at 4.01.28 PM.jpeg', 'c3', '2023-10-18'),
(27, '456717700_klop.jpg', 'c4', '2023-10-18'),
(28, '1327112719_IMG20200310203849.jpg', 'c5', '2023-10-18'),
(29, '2093012720_IMG20200310190541.jpg', 'c6', '2023-10-18'),
(30, '545533577_photo1644829499.jpeg', 'c7', '2023-10-18'),
(32, '377187092_IMG20200301073257_restored.jpeg', 'c8', '2023-10-18'),
(33, '2127215367_WhatsApp Image 2023-10-16 at 17.59.39 (1)_restored.jpeg', 'c9', '2023-10-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `facts`
--

CREATE TABLE `facts` (
  `fact_id` int(11) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `ket` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `facts`
--

INSERT INTO `facts` (`fact_id`, `nomor`, `ket`) VALUES
(1, '121', 'Clients'),
(2, '322', 'Projects'),
(4, '112', 'Hard Work'),
(8, '322', 'Project Completed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `komen_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `subjek` varchar(300) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`komen_id`, `nama`, `mail`, `subjek`, `pesan`) VALUES
(2, 'Rendy mulyana', 'Rendy@gmail.com', 'Mantap', 'Keren Ini Led nya, Team nya juga baik, cepat dan bagus.\r\n\r\nGokillll!!!!!!!'),
(3, 'Hafidzal Maulana', 'hafidzal@gmail.com', 'Keren Emang Maxindo', 'LED Keren, team mantap, ketika ada trouble selalu cepat diatasi\r\n\r\nMantaplah maxindo'),
(4, 'Rian Dwi Kurnia', 'Ryan@gmail.com', 'Keren', 'Maxindo Keren LED nya'),
(5, 'Maulana', 'hafidzal@gmail.com', 'P 2.9', 'Apa aja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `konten_id` int(11) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `keterangan` varchar(450) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`konten_id`, `foto`, `keterangan`, `waktu`) VALUES
(1, '979620522_maxc.jpg', 'Maxc', '2023-10-13'),
(2, '868734685_maxindo.jpg', 'Jetlympic 2022', '2023-10-13'),
(3, '686958030_prolo.jpg', 'OKe aman', '2023-10-13'),
(13, '2064307729_IMG_20231018_173837.jpg', 'sasasa', '2023-10-23'),
(14, '866605751_WhatsApp Image 2022-02-26 at 4.01.28 PM_restored.jpeg', 'ss', '2023-10-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `led`
--

CREATE TABLE `led` (
  `led_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `ket` varchar(450) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `led`
--

INSERT INTO `led` (`led_id`, `foto`, `ket`, `waktu`) VALUES
(2, '1834871222_a5.jpg', 'Acara Wedding', '2023-10-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `marketing`
--

CREATE TABLE `marketing` (
  `marketing_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `ket` varchar(450) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `marketing`
--

INSERT INTO `marketing` (`marketing_id`, `foto`, `ket`, `waktu`) VALUES
(2, '599163204_a5.jpg', 'Acara Wedding', '2023-10-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nowa`
--

CREATE TABLE `nowa` (
  `nowa_id` int(11) NOT NULL,
  `linkwa` varchar(150) NOT NULL,
  `ket` varchar(250) NOT NULL,
  `nama` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nowa`
--

INSERT INTO `nowa` (`nowa_id`, `linkwa`, `ket`, `nama`) VALUES
(2, '+628970062787', 'Marketing', 'Hafidzal'),
(3, '+628970062787', 'Marketing', 'Maulana'),
(5, '+628970062787', 'Marketing', 'Jeno Ahmad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkataan`
--

CREATE TABLE `perkataan` (
  `kata_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perkataan`
--

INSERT INTO `perkataan` (`kata_id`, `foto`, `subjek`, `isi`, `waktu`) VALUES
(1, '232391296_p2.8.jpg', 'P 2.9 Dicolor', 'Pixel Pitch              : 2.8 mmUkuran Modul      : 250×250 mmResolusi Modul     : 88×88Material                  : Alumunium CabinetMode Scanning     : 1/22Brightness              : 800 CDMassa Hidup         : 100.000 jam', '2023-10-11'),
(2, '493035911_p39-indoor.jpg', 'P 2.9 Unilumin', 'Pixel Pitch              : 3.9 mmUkuran Modul      : 250×250 mmResolusi Modul     : 64×64Material                  : Alumunium CabinetMode Scanning     : 1/16Brightness              : 1200 CDMassa Hidup         : 100.000 jam', '2023-10-11'),
(4, '137225297_p25-indoor.jpg', 'P 2.6 Indoor', 'Banyak digunakan di media Periklanan, Konser, ACARA TV, Super mall, Hiburan, Sekolah, Pemerintah, Percakapan perdagangan, Pameran komoditas, Pameran, Bioskop, Konferensi berita, Ruang rapat, Bandara, Hotel, Aula Stasiun, dan Tempat Umum lainnya.', '2023-10-17'),
(5, '610387613_LED-P39-INDOOR-1.jpg_restored.jpeg', 'P 3.9 Indoor', ' 1, Dalam ruangan tinggi dengan resolusi dan kecerahan tinggi	 2. Tinggi keseragaman kecerahan dan keseragaman warna (≥95%) 4, Super tipis dan ringan dengan bahan solid aluminium	 5, Sangat baik & sangat direkomendasi Untuk Rental', '2023-10-26'),
(6, '71590902_LED-P39-INDOOR-1.jpg_restored.jpeg', 'P 3.9 Outdoor', ' 1, Dalam ruangan tinggi dengan resolusi dan kecerahan tinggi	 2. Tinggi keseragaman kecerahan dan keseragaman warna (≥95%) 4, Super tipis dan ringan dengan bahan solid aluminium	 5, Sangat baik & sangat direkomendasi Untuk Rental', '2023-10-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `ket` varchar(450) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`team_id`, `foto`, `ket`, `waktu`) VALUES
(3, '965363480_klop.jpg', 'Aman', '2023-10-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama`, `email`, `pass`) VALUES
(1, 'Hafidzal Maulana', 'hafidzal@gmail.com', '123'),
(2, 'Admin', 'admin@gmail.com', '123'),
(4, 'Rendy mulyana', 'rendy@gmail.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `yutub`
--

CREATE TABLE `yutub` (
  `yutub_id` int(11) NOT NULL,
  `linkyt` text NOT NULL,
  `ket` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `yutub`
--

INSERT INTO `yutub` (`yutub_id`, `linkyt`, `ket`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/DERFBlxt4kc?si=x9Hse4CWeV4jFdn1\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Jetlympic 2022'),
(2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2ZSrbuRzRtI?si=S812iqQazalI9-Pb\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'OLX AUTOS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indeks untuk tabel `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`acara_id`);

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indeks untuk tabel `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`fact_id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komen_id`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`konten_id`);

--
-- Indeks untuk tabel `led`
--
ALTER TABLE `led`
  ADD PRIMARY KEY (`led_id`);

--
-- Indeks untuk tabel `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`marketing_id`);

--
-- Indeks untuk tabel `nowa`
--
ALTER TABLE `nowa`
  ADD PRIMARY KEY (`nowa_id`);

--
-- Indeks untuk tabel `perkataan`
--
ALTER TABLE `perkataan`
  ADD PRIMARY KEY (`kata_id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `yutub`
--
ALTER TABLE `yutub`
  ADD PRIMARY KEY (`yutub_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `acara`
--
ALTER TABLE `acara`
  MODIFY `acara_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `facts`
--
ALTER TABLE `facts`
  MODIFY `fact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `konten_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `led`
--
ALTER TABLE `led`
  MODIFY `led_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `marketing`
--
ALTER TABLE `marketing`
  MODIFY `marketing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `nowa`
--
ALTER TABLE `nowa`
  MODIFY `nowa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `perkataan`
--
ALTER TABLE `perkataan`
  MODIFY `kata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `yutub`
--
ALTER TABLE `yutub`
  MODIFY `yutub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
