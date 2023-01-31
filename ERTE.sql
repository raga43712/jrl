-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 28 Nov 2022 pada 05.56
-- Versi server: 10.5.17-MariaDB-cll-lve
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1719870_ertee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pokja` int(11) DEFAULT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `nama_berita` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_pokja`, `slug_berita`, `nama_berita`, `keterangan`, `jenis_berita`, `status_berita`, `gambar`, `tanggal_post`, `tanggal`) VALUES
(13, 641, 81, 'pelatihan-pembuatan-bunga-dari-kain-perca', 'Pelatihan Pembuatan Bunga Dari Kain Perca', '<p style=\"text-align: justify;\">Negara Indonesia memiliki potensi berupa industri kreatif, salah satunya produk kerajian di Indonesia memiliki potensi besar untuk berkembang. Pembicaraan tentang produk hiasan dapat ditemukan diberbagai tempat disekitar kita. Bahan baku dari produk ini dapat berasal dari bahan baku baru ataupun bahan baku bekas (limbah). Pengertian limbah adalah sisa suatu usaha atau kegiatan. Industri Garment menghasilkan limbah berupa kain perca. Limbah ini dapat memiliki nilai ekonomis dengan cara membuatnya menjadi bunga-bunga cantik lalu dirangkai menjadi karangan bunga (buket) atau menjadi bros berbentuk bunga. Berdasarkan pengamatan sementara diketahui bahwa ibu-ibu PKK Desa Uma Beringin, Unter Iwes, Sumbawa Besar belum pernah melakukan kegiatan kerajinan tangan berbahan dasar kain perca untuk membuat berbagai aplikasi atau hiasan. Tujuan pengabdian kepada masyarakat untuk memberikan pelatihan keterampilan pembuatan produk dengan menggunakan bahan baku limbah kain perca menjadi produk bernilai ekonomis dan memberikan pengetahuan bagaimana menentukan harga jual produk. Kegiatan yang dilakukan bersama warga ibu-ibu PKK oleh ibu PKK, peserta antusias mempelajari dan memperhatikan serta mengikuti pelatihan dan praktek pembuatan karangan bunga (buket) dan bros bunga kecil yang diberikan. Peserta menyadari bahwa hasil yang diperoleh dari kreatifitas, inovasi dari pemanfaatan limbah kain perca yang dapat diubah bentuknya menjadi karya karangan bunga (buket) dan bros bunga unik dan berkualitas serta bernilai jual.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', 'Berita', 'Publish', 'pelatihan-pembuatan-bunga-dari-kain-perca.jpg', '2020-11-07 07:42:43', '2021-06-19 08:28:35'),
(15, 641, 82, 'gotong-royong-persiapan-bbgrn', 'Gotong Royong Persiapan BBGRN', '<p>Peringatan puncak Bulan Bakti Gotong Royong Masyarakat (BBGRM) XVI yang dipadukan dengan Hari Kesatuan Gerak (HKG) PKK Uma Beringin Tahun 2019,&nbsp; diselenggarakan Selasa (5/11/2019). Kegiatan tersebut, dilaksanakan sebagai upaya untuk meningkatkan budaya gotong royong dalam nilai-nilai kehidupan bermasyarakat.</p>\r\n<p>Dalam kesempatan ini, Ibu Ketua TP PKK Desa Uma Beringin dan Forkopimda juga memberikan penghargaan dan bantuan kepada 39 orang. Pencanangan BBGRM XVI Dan HKG PKK Ke-47 yang ditandai dengan pemukulan kentongan oleh Bupati dan diikuti Forkopimda, serta pelepasan balon oleh Ketua TP PKK Desa Uma Beringin.&nbsp;</p>', 'Berita', 'Publish', 'gotong-royong-persiapan-bbgrn.jpg', '2020-11-07 08:10:49', '2021-06-19 08:28:15'),
(16, 641, 86, 'lomba-posyandu-unter-iwes', 'Lomba Posyandu Unter Iwes ', '<p style=\"text-align: justify;\">osyandu merupakan salah satu bentuk upaya kesehatan &nbsp;bersumber daya masarakat, dari masarakat, oleh masarakat, &nbsp;untuk masyarakat dalam menyelenggarakan pembangunan kesehatan , guna memberdayakan masarakat dan memudahkan dalam memperoleh pelayanan kesehatan agar mencapai masarakat yang sehat.</p>\r\n<p style=\"text-align: justify;\">Seluruh kader dan desa antusiasnya sangat tinggi untuk meningkatkan kesehatan masarakatnya. Hal ini dibuktikan oleh keaktifan kader dalam membina posyandu di desa tersebut.</p>\r\n<p style=\"text-align: justify;\">Dengan diadakannnya lomba Posyandu ini dapat meningkatkan kepedulian seluruh lapisan masyarakat di kecamatan&nbsp; masing-masing sehingga keberadaan posyandu akan meningkat kinerjanya serta meningkat cakupan pelayanan yang diberikan kepada masyarakat sehingga tercapai tujuan akhirnya untuk meningkatkan pemberdayaan masyarakat dalam rangka nenurunkan AKI dan AKB.</p>\r\n<p style=\"text-align: justify;\">Penjurian untuk Posyandu yang mengikuti lomba ini dimulai bulan Februari 2018 dengan berkunjung langsung ke Posyandu sesuai dengan jadwal yang telah ditentukan hingga bulan April 2018. Kemudian dari penilaian tersebut, tim juri akan menentukan siapa yang menjadi Posyandu terbaik dalam pelaksanaan Lomba Posyandu Tahun 2018 ini.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', 'Berita', 'Publish', 'lomba-posyandu-unter-iwes.jpg', '2020-11-07 08:17:36', '2021-06-19 08:55:33'),
(19, 641, 75, 'pelatihan-penulisan-surat-menyurat', 'Pelatihan Penulisan Surat-menyurat', '<p style=\"text-align: justify;\"><strong>Kegiatan</strong> berlangsung dengan sangat antusias dari masyarakat.&nbsp;Kegiatan berlangsung dengan sangat antusias dari masyarakat.&nbsp;Kegiatan berlangsung dengan sangat antusias dari masyarakat.&nbsp;Kegiatan berlangsung dengan sangat antusias dari masyarakat.&nbsp;Kegiatan berlangsung dengan sangat antusias dari masyarakat.&nbsp;</p>', 'Berita', 'Publish', 'pelatihan-penulisan-surat-menyurat.jpg', '2020-11-10 15:34:44', '2021-06-19 08:27:28'),
(20, 641, 81, 'menuju-ekonomi-take-off-melalui-pengembangan-umkm', 'Menuju Ekonomi Take Off Melalui Pengembangan UMKM', '<p>mengaktualisasi segala program yang bersifat pengembangan industri rt guna mempercepat kesejahteraan</p>', 'Berita', 'Publish', 'menuju-ekonomi-take-off-melalui-pengembangan-umkm.jpg', '2020-11-10 15:49:46', '2021-06-19 08:24:10'),
(88310, 641, 74, 'gdc-developer7', 'GDC Developer7', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt consectetur massa, quis porta nibh ullamcorper nec. Suspendisse at ex erat. Etiam fermentum massa eu nulla consequat, eleifend ullamcorper risus venenatis. Integer ac ante et ex molestie ultrices vitae a leo. Etiam venenatis nisl et orci sagittis ornare. Pellentesque vel interdum nibh. Quisque tempus non ligula ac mattis. Proin lacinia massa ac mi convallis, et luctus eros aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla dapibus erat nec venenatis pharetra. Aliquam consectetur, erat quis faucibus venenatis, nulla leo semper leo, at eleifend sem ligula et diam. Mauris gravida ultrices ligula, vitae sagittis ante cursus et. Proin nisi ante, cursus id dapibus a, ultricies ut lorem. Fusce tincidunt molestie eros in auctor. Sed dictum libero ornare, tincidunt orci et, hendrerit diam. Nullam ultricies sed ligula a rhoncus. Nam at dictum dui, in congue elit. Maecenas quis lacus et nunc mattis tincidunt sed ornare massa. Aenean dignissim vitae mi a cursus. Phasellus purus enim, tempor nec feugiat vitae, auctor eu odio. In sed lacus in nunc tempor fermentum. Morbi egestas massa vitae nisl porttitor sodales et sit amet tortor.</p>\r\n<p style=\"text-align: justify;\">Sed elementum mauris sit amet justo varius, vel eleifend est mollis. Duis tincidunt risus maximus pretium consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam tempus, lorem ut malesuada pharetra, leo purus bibendum purus, vitae ultricies dui mi id turpis. Donec dignissim ac ante non mattis. Sed at mollis felis. Mauris eu leo sem. Aliquam aliquam volutpat odio vel feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla elit eros, lacinia ut tincidunt in, imperdiet ac quam. Sed pulvinar sem quam, eu molestie tortor consectetur ut. Ut consectetur pulvinar arcu et facilisis. Cras erat arcu, mollis imperdiet justo eget, ullamcorper tempus nunc. Vivamus aliquam metus eget elementum semper. Ut rhoncus vel leo id commodo. Quisque egestas, lorem eu aliquam hendrerit, eros tellus sodales felis, quis scelerisque orci urna in orci.</p>\r\n<p style=\"text-align: justify;\">Nullam dictum cursus varius. Phasellus eget lectus pulvinar, iaculis nisl ut, auctor nunc. Fusce egestas, felis id convallis pharetra, nulla nisl rutrum mauris, eu rhoncus sapien ipsum ultricies mi. Proin in posuere tortor. Nullam posuere nisi sed urna porttitor placerat. Donec sit amet vulputate dui. Integer finibus turpis nulla, ac consectetur sapien bibendum ut. Curabitur ipsum nulla, luctus id vehicula a, venenatis at nulla. Sed turpis orci, pretium in velit eget, semper elementum massa. Praesent et lectus aliquam, pretium tellus vel, eleifend velit. Mauris vel urna at massa euismod convallis. Fusce nunc magna, vestibulum sed dignissim at, viverra molestie neque.</p>\r\n<p style=\"text-align: justify;\">Thank you</p>\r\n<p style=\"text-align: justify;\">asd</p>\r\n<p style=\"text-align: justify;\">sa</p>\r\n<p style=\"text-align: justify;\">d</p>\r\n<p style=\"text-align: justify;\">as</p>\r\n<p style=\"text-align: justify;\">d</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', 'Berita', 'Publish', 'gdc-developer.png', '2021-05-19 20:33:44', '2021-06-19 08:24:01'),
(88311, 641, 79, 'rekapitulasi-data', 'Rekapitulasi Data ', '<div>\r\n<p style=\"text-align: justify;\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<p style=\"text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>', 'Berita', 'Publish', 'lorem-ipsum.jpg', '2021-06-10 00:04:27', '2021-11-12 15:54:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kas`
--

CREATE TABLE `data_kas` (
  `id_periode` int(11) NOT NULL,
  `id_pokja` int(11) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kas`
--

INSERT INTO `data_kas` (`id_periode`, `id_pokja`, `nomor`, `keterangan`, `image`, `tanggal`, `jumlah`, `jenis`) VALUES
(13851, 74, '20210609001', 'Dana anggaran 2021', '', '2021-06-09', '41245000', 'masuk'),
(13851, 74, '20210620001', 'Dana hibah desa', '', '2021-06-20', '500000', 'masuk'),
(13851, 74, '20210621001', 'Dana Hibah Provinsi', '', '2021-06-21', '750000', 'masuk'),
(13851, 86, '20210625002', 'Beli obat', '202106250021.jpg', '2021-06-25', '665000', 'keluar'),
(13852, 74, '20210625006', 'Anggaran tahun 2020', '', '2021-06-25', '4500000', 'masuk'),
(13852, 75, '20210625007', 'asd', '20210625007.png', '2021-06-25', '1', 'keluar'),
(13852, 75, '20210625008', 'asddasdasdasdasd', '20210625008.jpg', '2021-06-25', '111111', 'keluar'),
(13851, 75, '20210626001', 'Biaya sewa gedung pertemuan', '20210626001.jpg', '2021-06-26', '3500000', 'keluar'),
(13851, 86, '20210626002', 'Belanja keperluan alat tulis', '20210626002.jpg', '2021-06-26', '245000', 'keluar'),
(13851, 81, '20210626003', 'Konsumsi Panitia dan Peserta', '20210626003.jpg', '2021-06-26', '5000000', 'keluar'),
(13851, 74, '20210628001', '55555', '', '2021-06-28', '55555', 'masuk'),
(13851, 75, '20210628002', 'Berkas-berkas', '20210628002.jpg', '2021-06-28', '45000', 'keluar'),
(13851, 75, '20210628003', 'Alat tulis, pulpen dan lain-lain', '20210628003.jpg', '2021-06-29', '79000', 'keluar'),
(13851, 79, '20210628004', 'Belanja pokja I dan dll', '20210628004.png', '2021-06-28', '345000', 'keluar'),
(13851, 81, '20210628005', 'Belanja pkoja II', '20210628005.png', '2021-06-28', '93800', 'keluar'),
(13851, 82, '20210628006', 'belanja pokja III tiga, beli alat medis', '20210628006.png', '2021-06-28', '750000', 'keluar'),
(13851, 86, '20210628007', 'Keperluan posyandu,', '20210628007.png', '2021-06-28', '760500', 'keluar'),
(13851, 86, '20210628008', 'Alat suntik, dan vaksin', '20210628008.png', '2021-06-28', '1500000', 'keluar'),
(13851, 74, '20220218001', 'uang kas bulan februari 2022', '', '2022-02-18', '2000000', 'masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(12) NOT NULL,
  `nomor` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `nomor`, `name`, `image`, `description`) VALUES
(9320, 10, 'Suntik Balita', 'GALERI60c7f210878a6.jpg', 'Kegiatan Posyandu'),
(9322, 24, 'Bu ibu rapat dewan', 'GALERI60c7f230ba427.jpg', 'Sekretaris PKK'),
(9327, 27, 'Gegiatan Pemilihan RT ', 'GALERI61a49de3b4395.jpg', 'Pemilihan RT/RW 003/005 Kayu Jati V'),
(9328, 32, 'Kantor Sekertariat RT 03 dan RW 05 Rawamangun', 'GALERI62076586bef59.jpg', 'Kantor Sekertariat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_user`
--

CREATE TABLE `jenis_user` (
  `id_jenis` int(6) NOT NULL,
  `nama_jenis` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_user`
--

INSERT INTO `jenis_user` (`id_jenis`, `nama_jenis`) VALUES
(232, 'admin_pkk'),
(233, 'sekret_pokja'),
(234, 'kades');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `slide_setting` varchar(20) NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tentang` varchar(500) DEFAULT NULL,
  `periode` int(11) NOT NULL,
  `welcome_say` text NOT NULL,
  `deskripsi_say` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(400) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `foto_sambutan` varchar(255) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `slide_setting`, `namaweb`, `tagline`, `tentang`, `periode`, `welcome_say`, `deskripsi_say`, `email`, `alamat`, `telepon`, `hp`, `logo`, `icon`, `foto_sambutan`, `background`, `facebook`, `twitter`, `instagram`, `google_map`, `id_user`, `tanggal`) VALUES
(1, 'Fade', 'e-administration', 'RT.003/RW.005 Kayu Jati, Rawamangun Jakarta Timur', 'SISTEM INFORMASI ADMINISTRASI KEPENDUDUKAN RT.003/RW.005 Kayu Jati, Rawamangun Jakarta Timur', 13851, 'Selamat Datang di RT 003 / RW 005', '<blockquote>\r\n<p style=\"text-align: justify;\">Salam Sejahtera Bagi Seluruh,</p>\r\n<p style=\"text-align: justify;\">Warga RT.003/RW.005 Kayu Jati, Rawamangun</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Puji syukur kita panjatkan kehadirat Tuhan yang maha esa,&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n</blockquote>\r\n<p style=\"text-align: justify;\"><strong><br />Salam,<br /></strong><strong>Ketua RT <br />Kornelis Hadun</strong></p>', 'cornelishadun@gmai.com', 'Kayu Jati, Rawamangun Jakarta Timur', '0812-8686-6965', '0812-8686-6965', 'main-logo.png', 'icon_resmi.png', 'sambutan_background.jpg', 'background.jpg', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.2759001970862!2d106.88687997436818!3d-6.190675769213658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5cbba706987%3A0xfac58f41b63482f5!2sKantor%20sekretariat%20RW05!5e0!3m2!1sen!2sid!4v1644647249905!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 641, '2022-02-18 12:31:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `periode_ke` int(11) NOT NULL,
  `pelaksanaan_umum` text NOT NULL,
  `hambatan` text NOT NULL,
  `pemecahan_masalah` text NOT NULL,
  `kesimpulan` text NOT NULL,
  `saran` text NOT NULL,
  `penutup` text NOT NULL,
  `nama_ttd` text NOT NULL,
  `tanggal_ttd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `periode_ke`, `pelaksanaan_umum`, `hambatan`, `pemecahan_masalah`, `kesimpulan`, `saran`, `penutup`, `nama_ttd`, `tanggal_ttd`) VALUES
(9, 10, 'Dalam rangka menetapkan mekanisme gerakan PKK telah terbentuk kelompok kelompok PKK RW, PKK RT, dan Kelompok Dasawisma namun masih perlu diadakan pembinaan lebih lanjut, terutama dalam pengisian buku-buku catatan kelompok dan lainnya. Dengan adanya kelompok-kelompok tersebut memudahkan gerakan PKK dekat dengan masyarakat seperti pembinaan pada keluarga melalui kelompok Dasawisma. Adapun jumlah kelompok yang terbentuk adalah 30 kelompok Dasawisma, 17 kelompok PKK RT, dan 8 kelompok PKK RW.', 'Masih terdapat pengurus TP-PKK dan Kader yang belum mengetahui fungsi dan tugasnya namun pelaksanaan kegiatan PKK berjalan lancar sebagaimana yang diharapkan \r\nMasih banyak kader yang belum sepenuhnya memahami 10 program pokok PKK sehingga kegiatan PKK di masing-masing kelompok belum maksimal.\r\nKurangnya sarana dan prasarana serta dana untuk mendukung program kerja yang telah direncanakanan.\r\nMasih banyak kader yang merangkap tugas sebagai pengurus PKK maupun kader.\r\nKeterlambatan dana menyebabkan pelaksanaan kegiatan program yang direncanakan juga ikut terlambat.', 'Perlu pembinaan dan pelatihan secara terus menerus dan berkelanjutan terhadap kader-kader PKK Perlu diadakan peningkatan sarana dan prasarana serta dana yang memadai untuk menunjang 10 program pokok PKK Dana diharapkan agar dapat disalurkan pada awal Tahun agar pelaksanaan kegiatan program yang direncanakan dapat terlaksana tepat waktu.', 'Dari uraian diatas, pelaksanaan kegiatan TP-PKK Desa Uma Beringin Kecamatan Unter Iwes masih terdapat hambatan serta kendala yang dihadapi. Berkat kerjasama yang baik dari semua pihak yang membantu terutama dari Pengurus TP-PKK sendiri, instansi terkait maupun masyarakat untuk menunjang 10 program pokok PKK dalam berbagai kegiatan untuk dapat menjadi lebih baik ke depannya yang walaupun belum sepenuhnya merata keseluruh masyarakat.', 'Dengan memperhatikan pelaksanaan kegiatan Tim Penggerak PKK Desa Uma Beringin masih perlu penambahan frekuensi bimbingan dan binaan dari TP-PKK Kecamatan dari TP-PKK Kabupaten agar Desa Uma Beringin dapat lebih maju menuju Desa-Desa yang diharapkan.', 'Demikian Laporan Tahunan Tim Penggerak PKK Desa Uma Beringin ini dibuat sebagai pertanggung jawaban kami. Semoga Allah membalas semua kerja keras kita. Akhirnya kepada Allah SWT kita berserah diri semoga selalu dalam perlindungan-NYA untuk mengabdi kepada-NYA, bangsa dan negara. Aamiiin.', 'Ny. Nurmaningsih Suraiman (default)', '1997-01-01'),
(385, 13851, 'Dalam rangka menetapkan mekanisme gerakan PKK telah terbentuk kelompok kelompok PKK RW, PKK RT, dan Kelompok Dasawisma namun masih perlu diadakan pembinaan lebih lanjut, terutama dalam pengisian buku-buku catatan kelompok dan lainnya. Dengan adanya kelompok-kelompok tersebut memudahkan gerakan PKK dekat dengan masyarakat seperti pembinaan pada keluarga melalui kelompok Dasawisma. Adapun jumlah kelompok yang terbentuk adalah 30 kelompok Dasawisma, 17 kelompok PKK RT, dan 8 kelompok PKK RW.', 'Masih terdapat pengurus TP-PKK dan Kader yang belum mengetahui fungsi dan tugasnya namun pelaksanaan kegiatan PKK berjalan lancar sebagaimana yang diharapkan \r\nMasih banyak kader yang belum sepenuhnya memahami 10 program pokok PKK sehingga kegiatan PKK di masing-masing kelompok belum maksimal.\r\nKurangnya sarana dan prasarana serta dana untuk mendukung program kerja yang telah direncanakanan.\r\nMasih banyak kader yang merangkap tugas sebagai pengurus PKK maupun kader.\r\nKeterlambatan dana menyebabkan pelaksanaan kegiatan program yang direncanakan juga ikut terlambat.', 'Perlu pembinaan dan pelatihan secara terus menerus dan berkelanjutan terhadap kader-kader PKK Perlu diadakan peningkatan sarana dan prasarana serta dana yang memadai untuk menunjang 10 program pokok PKK Dana diharapkan agar dapat disalurkan pada awal Tahun agar pelaksanaan kegiatan program yang direncanakan dapat terlaksana tepat waktu.', 'Dari uraian diatas, pelaksanaan kegiatan TP-PKK Desa Uma Beringin Kecamatan Unter Iwes masih terdapat hambatan serta kendala yang dihadapi. Berkat kerjasama yang baik dari semua pihak yang membantu terutama dari Pengurus TP-PKK sendiri, instansi terkait maupun masyarakat untuk menunjang 10 program pokok PKK dalam berbagai kegiatan untuk dapat menjadi lebih baik ke depannya yang walaupun belum sepenuhnya merata keseluruh masyarakat.', 'Dengan memperhatikan pelaksanaan kegiatan Tim Penggerak PKK Desa Uma Beringin masih perlu penambahan frekuensi bimbingan dan binaan dari TP-PKK Kecamatan dari TP-PKK Kabupaten agar Desa Uma Beringin dapat lebih maju menuju Desa-Desa yang diharapkan.', 'Demikian Laporan Tahunan Tim Penggerak PKK Desa Uma Beringin ini dibuat sebagai pertanggung jawaban kami. Semoga Allah membalas semua kerja keras kita. Akhirnya kepada Allah SWT kita berserah diri semoga selalu dalam perlindungan-NYA untuk mengabdi kepada-NYA, bangsa dan negara. Aamiiin.', 'Ny. Nurmaningsih Suraiman', '2021-06-27'),
(387, 13852, 'Dalam rangka menetapkan mekanisme gerakan PKK telah terbentuk kelompok kelompok PKK RW, PKK RT, dan Kelompok Dasawisma namun masih perlu diadakan pembinaan lebih lanjut, terutama dalam pengisian buku-buku catatan kelompok dan lainnya. Dengan adanya kelompok-kelompok tersebut memudahkan gerakan PKK dekat dengan masyarakat seperti pembinaan pada keluarga melalui kelompok Dasawisma. Adapun jumlah kelompok yang terbentuk adalah 30 kelompok Dasawisma, 17 kelompok PKK RT, dan 8 kelompok PKK RW.', 'Masih terdapat pengurus TP-PKK dan Kader yang belum mengetahui fungsi dan tugasnya namun pelaksanaan kegiatan PKK berjalan lancar sebagaimana yang diharapkan \r\nMasih banyak kader yang belum sepenuhnya memahami 10 program pokok PKK sehingga kegiatan PKK di masing-masing kelompok belum maksimal.\r\nKurangnya sarana dan prasarana serta dana untuk mendukung program kerja yang telah direncanakanan.\r\nMasih banyak kader yang merangkap tugas sebagai pengurus PKK maupun kader.\r\nKeterlambatan dana menyebabkan pelaksanaan kegiatan program yang direncanakan juga ikut terlambat.', 'Perlu pembinaan dan pelatihan secara terus menerus dan berkelanjutan terhadap kader-kader PKK Perlu diadakan peningkatan sarana dan prasarana serta dana yang memadai untuk menunjang 10 program pokok PKK Dana diharapkan agar dapat disalurkan pada awal Tahun agar pelaksanaan kegiatan program yang direncanakan dapat terlaksana tepat waktu.', 'Dari uraian diatas, pelaksanaan kegiatan TP-PKK Desa Uma Beringin Kecamatan Unter Iwes masih terdapat hambatan serta kendala yang dihadapi. Berkat kerjasama yang baik dari semua pihak yang membantu terutama dari Pengurus TP-PKK sendiri, instansi terkait maupun masyarakat untuk menunjang 10 program pokok PKK dalam berbagai kegiatan untuk dapat menjadi lebih baik ke depannya yang walaupun belum sepenuhnya merata keseluruh masyarakat.', 'Dengan memperhatikan pelaksanaan kegiatan Tim Penggerak PKK Desa Uma Beringin masih perlu penambahan frekuensi bimbingan dan binaan dari TP-PKK Kecamatan dari TP-PKK Kabupaten agar Desa Uma Beringin dapat lebih maju menuju Desa-Desa yang diharapkan.', 'Demikian Laporan Tahunan Tim Penggerak PKK Desa Uma Beringin ini dibuat sebagai pertanggung jawaban kami. Semoga Allah membalas semua kerja keras kita. Akhirnya kepada Allah SWT kita berserah diri semoga selalu dalam perlindungan-NYA untuk mengabdi kepada-NYA, bangsa dan negara. Aamiiin.', 'Ny. Nurmaningsih Suraiman', '1997-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masukan`
--

CREATE TABLE `masukan` (
  `masukan_id` int(12) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masukan`
--

INSERT INTO `masukan` (`masukan_id`, `status`, `tanggal`, `nama_lengkap`, `email`, `keperluan`, `description`) VALUES
(523, 0, '2022-01-26 14:19:22', 'gvd', 'gvd@gmail.com', 'lampu mati', 'perbaiki segera'),
(524, 0, '2022-02-12 06:12:43', 'ISTRI AGAM', 'Tamanbuaranindah4@gmail.com', 'SUAMI KAWIN LAGI', 'PAK RT KOK DI IJININ AGAM KAWIN LAGI???'),
(525, 0, '2022-02-18 13:28:10', 'pak rw', 'kornelis@gmail.com', 'selokan tersumbat', 'tolong segera benahi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_gcm`
--

CREATE TABLE `m_gcm` (
  `NO_SR` int(11) NOT NULL,
  `PARAMETER` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CODE` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DESCRIPTION` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FLAG_ACTIVE` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CHARVALUE` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_gcm`
--

INSERT INTO `m_gcm` (`NO_SR`, `PARAMETER`, `CODE`, `DESCRIPTION`, `FLAG_ACTIVE`, `CHARVALUE`) VALUES
(33, 'GRP_USR', 'superadmin', 'Super Administrator', 'Y', NULL),
(120, 'FLAG_AKTIF', 'Y', 'Ya', 'Y', NULL),
(121, 'FLAG_AKTIF', 'N', 'No', 'Y', NULL),
(141, 'GRP_USR', 'GM', 'Ketua RT', 'Y', NULL),
(142, 'GRP_USR', 'MGR', 'Wakil RT', 'Y', NULL),
(171, 'CITY', 'TGN', 'Tangerang', 'Y', NULL),
(172, 'SEX', 'L', 'Pria', 'Y', NULL),
(173, 'SEX', 'P', 'Wanita', 'Y', NULL),
(216, 'STATUS_KARYAWAN', 'PRMN', 'Permanen', 'Y', NULL),
(217, 'STATUS_KARYAWAN', 'CNTRCT', 'Kontrak', 'Y', NULL),
(218, 'STATUS_KARYAWAN', 'MGNG', 'Magang', 'Y', NULL),
(235, 'GRP_USR', 'OP', 'Sekretaris RT', 'Y', NULL),
(236, 'GRP_USR', 'SPV', 'Bendahara', 'Y', NULL),
(238, 'CD_TITLE', 'PPM', 'PPIC Manager', 'Y', NULL),
(239, 'CD_TITLE', 'PDM', 'Production Manager', 'Y', NULL),
(240, 'CD_TITLE', 'PUM', 'Purchasing Manager', 'Y', NULL),
(241, 'CD_TITLE', 'QAM', 'QA & QC Manager', 'Y', NULL),
(242, 'CD_TITLE', 'IEM', 'IE Manager', 'Y', NULL),
(243, 'CD_TITLE', 'RDM', 'R&D Manager', 'Y', NULL),
(244, 'CD_TITLE', 'GAC', 'GA Chief', 'Y', NULL),
(245, 'CD_TITLE', 'ITH', 'IT Head', 'Y', NULL),
(246, 'CD_TITLE', 'OPR', 'Operator', 'Y', NULL),
(247, 'CD_TITLE', 'SPS', 'SPV Sample', 'Y', NULL),
(248, 'CD_SALARY', 'SLS', 'SPV Line Sewing', 'Y', NULL),
(249, 'CD_TITLE', 'MSP', 'Mechanic SPV', 'Y', NULL),
(250, 'CD_TITLE', 'QCS', 'QC  SPV', 'Y', NULL),
(251, 'CD_TITLE', 'FNS', 'Finishing SPV', 'Y', NULL),
(252, 'CD_UNIT', 'BOX', 'Box', 'Y', NULL),
(253, 'CD_UNIT', 'PCS', 'Pcs', 'Y', NULL),
(254, 'CD_TYPE', 'TYP001', 'Bohlam', 'Y', NULL),
(255, 'CD_TYPE', 'TYP002', 'Detik', 'Y', NULL),
(256, 'CD_TYPE', 'TYP003', 'Roti', 'Y', NULL),
(257, 'CD_RELIGION', 'ISLAM', 'Islam', 'Y', NULL),
(258, 'CD_RELIGION', 'KRISKAT', 'Kristen Katolik', 'Y', NULL),
(259, 'CD_RELIGION', 'KRISPRO', 'Kristen Protestan', 'Y', NULL),
(260, 'CD_RELIGION', 'HINDU', 'Hindu', 'Y', NULL),
(261, 'CD_RELIGION', 'BUDHA', 'Budha', 'Y', NULL),
(262, 'CD_JOB', 'SWASTA', 'Karyawan Swasta', 'Y', NULL),
(263, 'CD_JOB', 'NEGERI', 'Karyawan Negeri', 'Y', NULL),
(264, 'CD_JOB', 'ABRI', 'ABRI', 'Y', NULL),
(265, 'CD_JOB', 'STUDENT', 'Pelajar', 'Y', NULL),
(266, 'CD_JOB', 'WRS', 'Wiraswasta', 'Y', NULL),
(267, 'CD_JOB', 'FREELANCE', 'Freelance', 'Y', NULL),
(268, 'CD_MARRIED', 'MARD', 'Menikah', 'Y', NULL),
(269, 'CD_MARRIED', 'UNMD', 'Lajang', 'Y', NULL),
(270, 'CD_MARRIED', 'DIVC', 'Cerai', 'Y', NULL),
(271, 'GRP_USR', 'WRG', 'Warga RT', 'Y', NULL),
(272, 'CD_KK', 'KK01', 'Kepala Keluarga', 'Y', NULL),
(273, 'CD_KK', 'KK02', 'Istri', 'Y', NULL),
(274, 'CD_KK', 'KK03', 'Anak ke 1', 'Y', NULL),
(275, 'CD_KK', 'KK04', 'Anak ke 2', 'Y', NULL),
(276, 'CD_JOB', 'IRT', 'Ibu Rumah Tangga', 'Y', NULL),
(277, 'KAS', 'KS01', 'Iuran Bulanan', 'Y', NULL),
(278, 'KAS', 'KS02', 'Iuran Sampah', 'Y', NULL),
(279, 'KAS', 'KS03', 'Iuran Keamanan', 'Y', NULL),
(280, 'CD_EDU', 'SD', 'SD', 'Y', NULL),
(281, 'CD_EDU', 'SMP', 'SMP', 'Y', NULL),
(282, 'CD_EDU', 'SMA', 'SMA', 'Y', NULL),
(283, 'CD_EDU', 'D3', 'Diploma', 'Y', NULL),
(284, 'CD_EDU', 'S1', 'Sarjana', 'Y', NULL),
(285, 'CD_JOB', 'JBL', 'Belum Bekerja', 'Y', NULL),
(286, 'KAS', 'KS04', 'Other', 'Y', NULL),
(288, 'CD_LUNAS', 'LNS', 'Lunas', 'Y', NULL),
(289, 'STATUS_REQ', 'OPN', 'Open', 'Y', NULL),
(290, 'STATUS_REQ', 'CLS', 'Close', 'Y', NULL),
(291, 'STATUS_REQ', 'AP', 'Approved', 'Y', NULL),
(292, 'STATUS_REQ', 'REJ', 'Rejected', 'Y', NULL),
(293, 'CD_DOC', 'DOC01', 'Surat Pengantar', 'Y', NULL),
(294, 'GRP_USR', '88', 'Anggota Jumantik', 'Y', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_penduduk`
--

CREATE TABLE `m_penduduk` (
  `CD_RESIDENT` int(5) NOT NULL,
  `FULL_NAME` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NO_KTP` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATE_BIRTH` date NOT NULL,
  `PLACE_BIRTH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SEX` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RELIGION` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ALAMAT` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CD_EDU` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CD_TITLE` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TELP` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JOB` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STATUS` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NO_KK` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RELATIONSHIP` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATE_JOIN` date DEFAULT NULL,
  `DATE_DIED` date DEFAULT NULL,
  `REASON_DIED` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATE_MUTATION` date DEFAULT NULL,
  `REASON_MUTATION` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FATHER_NAME` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MOTHER_NAME` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_warga` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_penduduk`
--

INSERT INTO `m_penduduk` (`CD_RESIDENT`, `FULL_NAME`, `NO_KTP`, `DATE_BIRTH`, `PLACE_BIRTH`, `SEX`, `RELIGION`, `ALAMAT`, `CD_EDU`, `CD_TITLE`, `TELP`, `JOB`, `STATUS`, `NO_KK`, `RELATIONSHIP`, `DATE_JOIN`, `DATE_DIED`, `REASON_DIED`, `DATE_MUTATION`, `REASON_MUTATION`, `FATHER_NAME`, `MOTHER_NAME`, `kategori_warga`) VALUES
(1, 'Dewita Nuryana', '3175027101690002', '1969-03-10', 'Medan', 'P', 'ISLAM', 'JL.Kayu Jati V No.4', 'D3', NULL, NULL, 'SWASTA', '', '3275110106070203', 'UNMD', NULL, NULL, NULL, NULL, NULL, 'Bambang Pamungkas', 'Ika Mardina', ''),
(2, 'Sapta Riswandy', '3175021409750002', '1991-10-22', 'Jakarta', 'L', 'ISLAM', 'JL.Kayu Jati V No.4', 'D3', NULL, NULL, 'SWASTA', '', '3275110106070203', 'UNMD', NULL, NULL, NULL, NULL, NULL, 'Mahathir Muhamad', 'Mimin', ''),
(3, 'Ris Satyawan.s', '3175021307660006', '1966-12-07', 'Medan', 'L', 'ISLAM', 'JL.Kayu Jati V No.4', 'D3', NULL, NULL, 'SWASTA', '', '3175021001096177', 'MARD', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(4, 'Peny Setianawati Rahayu', '3175024205750007', '1998-05-30', 'Bogor', 'P', 'ISLAM', 'JL.Kayu Jati V No.4', 'D3', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(5, 'Saleha H.Harahap', '3175024101460002', '1946-01-01', 'Medan', 'P', 'ISLAM', 'JL.kayu Jati V No.4', 'SMP', NULL, NULL, 'IRT', '', '3175020901091093', 'DIVC', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(6, 'Atala Nurdesperina Siregar', '3175026107070003', '2007-02-10', 'Jakarta', 'P', 'ISLAM', 'JL.Kayu Jati V No.4', 'SD', NULL, NULL, 'JBL', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(7, 'Ozdan Nurjasminiera Siregar', '3175025612090005', '2009-12-12', 'Bogor', 'P', 'ISLAM', 'JL.Kayu Jati V No.4', 'SD', NULL, NULL, 'JBL', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(8, 'Sugianto', '3175021012740014', '1974-10-12', 'Ponorogo', 'L', 'ISLAM', 'JL.Kayu Jati v/10', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(9, 'Dia Sofiati', '3175023107090005', '1976-03-06', 'Jakarta', 'P', 'ISLAM', 'JL.Kayu Jati V/10', 'SMP', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(10, 'Agam Abdillah Najmudin', '3175021011410001', '2009-03-07', 'Jakarta', 'L', 'ISLAM', 'JL.Kayu Jati V/10', 'SD', NULL, NULL, 'JBL', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(11, 'Eva Idayanti', '3175024104730004', '1973-01-04', 'Jakarta', 'P', 'ISLAM', 'JL.Rawamangun II Tengah', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'DIVC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(12, 'Putri Zahawa Ramadayanti', '3175025610040003', '2004-12-10', 'Jakarta', 'P', 'ISLAM', 'JL.Rawamangun II Tengah', 'SMA', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(13, 'Rio Faro Siagian', '3175020403800002', '1980-04-03', 'Bogor', 'L', 'KRISPRO', 'JL.Rawamangun II Tengah', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(14, 'Eva Juliana', '3172045501620011', '1982-12-01', 'Medan', 'P', 'KRISPRO', 'JL.Rawamangun II Tengah', 'SMA', NULL, NULL, 'IRT', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(15, 'Mastiur Manurung', '3175024512530003', '1953-05-12', 'Tapanuli', 'P', 'KRISPRO', 'JL.Rawamangun II Tengah', 'SMA', NULL, NULL, 'IRT', '', NULL, 'DIVC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(16, 'Ngadino ', '3175022411660002', '1966-02-11', 'Purworejo', 'L', 'KRISKAT', 'JL.Rawamangun II Tengah', 'D3', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(17, 'Theresia Rini Supriati', '3175024603760008', '1976-06-03', 'Jakarta', 'P', 'KRISKAT', 'JL.Rawamangun II Tengah', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(18, 'Elisabeth Eka Andrearini', '3175024307970007', '1997-03-07', 'Jakarta', 'P', 'KRISKAT', 'JL.Rawamangun II Tengah', 'SD', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(19, 'Chaceli Linova Andreriani', '3175024511090002', '2009-05-11', 'Jakarta', 'P', 'KRISKAT', 'JL.Rawamangun II Tengah', 'SD', NULL, NULL, 'JBL', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(20, 'Kastono', '3175021007700004', '1970-10-07', 'Jepara', 'L', 'ISLAM', 'JL.Kayu Jati V No.11 B', 'SD', NULL, NULL, 'FREELANCE', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(21, 'Enyka Haryati', '3175024106720001', '1972-01-06', 'Jakarta', 'P', 'ISLAM', 'JL.Kayu Jati V No.11 B', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(22, 'Eka Supria Tiningsih', '3175026504001002', '2000-02-05', 'Jakarta', 'P', 'ISLAM', 'JL.Kayu Jati V No.11 B', 'SMA', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(23, 'Hendrikus P.Gunde', '3175020303870011', '1987-03-03', 'Peri', 'L', 'KRISKAT', 'JL.Kayu Jati V No 24A', 'SMA', NULL, NULL, 'WRS', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(24, 'Avelina Hadua', '3175104402730005', '1973-06-02', 'Jaong', 'P', 'KRISKAT', 'JL.Kayu Jati V No.24 A', 'D3', NULL, NULL, 'SWASTA', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(25, 'Bernadeta Irma', '3175025602830016', '1968-12-02', 'Lolang', 'P', 'KRISKAT', 'JL.Kayu Jati V No.24 A', 'D3', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(26, 'Gudula Juita', '63150469099601', '1995-02-09', 'Deket', 'P', 'KRISKAT', 'JL.Kayu Jati V nO.24 A', 'SMA', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(27, 'Maria Metua Dewi', '3175024600971003', '1996-06-19', 'Manggari', 'P', 'KRISKAT', 'JL.Kayu Jati V No.24 A', 'SMA', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(28, 'A.Herman', '317502170752008', '1952-12-07', 'Tasykmalay', 'L', 'ISLAM', 'JL.Kayu Jati V No.24 F', 'SMA', NULL, NULL, 'WRS', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(29, 'Markinah', '3175025604580002', '1959-12-05', 'Kuningan', 'P', 'ISLAM', 'JL.Kayu Jati V No.24 F', 'SMA', NULL, NULL, 'IRT', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(30, 'Sumardi Boenawi', '3175021510650002', '1995-12-10', 'Manggari', 'L', 'KRISKAT', 'JL.Kayu Jati V No.24 A', 'D3', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(31, 'Daria Mima', '317502490466005', '1996-09-14', 'Flores', 'P', 'KRISKAT', 'JL,Kayu Jati V No.24 A\r\n', 'SMA', NULL, NULL, 'IRT', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(32, 'Kornelis Hadun ', '31750215106500002', '1995-11-06', 'Manggari', 'L', 'KRISKAT', 'JL.Kayu Jati V No.24 A', 'D3', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(33, 'Ricardus P.Poma Hadun', '3175020764970004', '1996-09-04', 'Jakarta', 'L', 'KRISKAT', 'JL.Kayu Jati V No.24 A', 'SMA', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(34, 'Octaviana M.Wela Hadun', '3175024910000004', '2000-09-10', 'Jakarta', 'P', 'KRISKAT', 'JL.Kayu Jati V No.24 A', 'SMA', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(35, 'Rofinus Agi', '531011100590003', '1990-10-05', 'Sambi', 'L', 'KRISKAT', 'JL.Kayu Jati V No.24 A', 'SMA', NULL, NULL, 'FREELANCE', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(36, 'Ignasius Dandur Hagul', '531901026500002', '1994-12-01', 'Labuan Baj', 'L', 'KRISKAT', 'Jl.Kayu Jati V No.24 A', 'SMA', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(37, 'Pieter Pasarribu', '3175022010440002', '1944-02-01', 'Tapanuli', 'L', 'KRISPRO', 'Rawamangun II Tengah', 'SMA', NULL, NULL, 'NEGERI', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(38, 'Julonggo Pane', '3175020412720004', '1996-10-14', 'Tarnagodan', 'P', 'KRISPRO', 'Rawamangun II Tengah', 'SMA', NULL, NULL, 'IRT', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(39, 'Charles Pasarribu', '31750204127200004', '1972-04-12', 'Jakarta', 'L', 'KRISPRO', 'Rawamangun II Tengah', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(40, 'Vina Triana Dewihadi', '3175024106720011', '1972-01-06', 'Jakarta', 'P', 'ISLAM', 'JL.Kayu Jati V', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(41, 'Oviana Ajeng C.Silalahi', '3175026810020012', '2002-02-10', 'Jogja', 'P', 'KRISPRO', 'JL.Kayu Jati V', 'SD', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(42, 'Vera Novera', '3175025211670013', '1967-12-11', 'Sumedang', 'P', 'ISLAM', 'JL.Kayu Jati V', 'D3', NULL, NULL, 'SWASTA', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(43, 'S.Sima Tupang', '3175026410540002', '1964-04-10', 'Sumut', 'P', 'KRISPRO', 'JL.Kayu Jati V No.7.Rawamangun II Tengah', 'SMA', NULL, NULL, 'IRT', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(44, 'Tiur Maidah', '3175027010740003', '1974-03-10', 'Jakarta', 'P', 'KRISPRO', 'JL.Kayu Jati V No.7.Rawamangun II Teangah', 'D3', NULL, NULL, 'SWASTA', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(45, 'Helen Trisnawati', '31750235208770005', '1977-12-08', 'Jakarta', 'P', 'KRISPRO', 'JL.Kayu Jati V No.7.Rawamangun II Tengah', 'D3', NULL, NULL, '', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(46, 'Siri Diana', '3175024104760004', '1976-01-14', 'Jakarta', 'P', 'KRISPRO', 'JL.Kayu Jati V No.7.Rawamangun II Tengah', 'D3', NULL, NULL, 'SWASTA', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(47, 'Ade Suherman', '3175020704450001', '1973-07-04', 'Purwakarta', 'L', 'ISLAM', 'JL.Rawamangun II Tengah No.11 A', 'SMP', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(48, 'Tuti', '317502500552003', '1952-10-05', 'Plered', 'P', 'ISLAM', 'JL.Rawamangun II Tengah No.11 A', 'SMP', NULL, NULL, 'IRT', '', NULL, 'MARD', NULL, '1994-10-12', 'Sakit', NULL, NULL, NULL, NULL, ''),
(49, 'Sanusi', '31750207044500001', '1945-07-04', 'Purwakarta', 'L', 'ISLAM', 'JL.Rawamangu II Tengah No.11 A', 'SMP', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, '1995-08-10', 'Sakit Jantung', NULL, NULL, NULL, NULL, ''),
(50, 'Agus Sutisna', '3175021506740009', '1074-12-08', 'Jakarta', 'L', 'ISLAM', 'Rawamangun II Tengah', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(51, 'Yati Rosita', '3175021508740009', '1982-11-06', 'Cirebon', 'P', 'ISLAM', 'Rawamangun II Tengah', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(52, 'Ezar Hafis Sutisna', '3175021409050003', '2005-12-09', 'Jakarta', 'L', 'ISLAM', 'Rawamangun II Tengah', 'SD', NULL, NULL, 'JBL', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(53, 'Rosikin ', '3175020205761001', '1976-02-05', 'Ciamis', 'L', 'ISLAM', 'JL.Kayu Jati No.11 A', 'SMP', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(54, 'Ezar Hafis Sutisna', '31750214090050003', '2005-12-09', 'Jakarta', 'L', 'ISLAM', 'Rawamangun II Tengah', 'SD', NULL, NULL, 'JBL', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(55, 'Lilis Sulastri', '3175020205760010', '1979-05-11', 'Jakarta', 'P', 'ISLAM', 'JL.Kayu Jati V No.11 A', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(56, 'Putri Rahmi Putri', '3175026302060002', '2006-02-02', 'Jakarta', 'P', 'ISLAM', 'JL.Kayu Jati V No.24 A', 'SD', NULL, NULL, 'JBL', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(57, 'Farhan Fathi Khairullah', '31752026302060002', '2008-11-02', 'Jakarta', 'L', 'ISLAM', 'JL.Kayu Jati V No.24 A', 'SD', NULL, NULL, 'JBL', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(58, 'Ade Sopiandi', '3175020510650003', '1965-05-10', 'Sukabumi', 'L', 'ISLAM', 'JL.Kayu Jati V No.11 A', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(59, 'Nyai Sumiati', '3175025209700004', '1970-12-09', 'Jakarta', 'P', 'ISLAM', 'JL.Kayu Jati V No 11 A', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(60, 'Syifa Marlin Pamungkas', '3175025603060005', '1998-12-03', 'Jakarta', 'P', 'ISLAM', 'JL.Kayu Jati V No.11 A', 'SD', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(61, 'Alhanda Septiani S', '3175024509041001', '2004-05-09', 'Jakarta', 'P', 'ISLAM', 'JL.Kayu Jati V No.11 A', 'SD', NULL, NULL, 'JBL', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(62, 'Sumhar M.Siagian.ST', '3216061803730013', '1973-12-03', 'Banua Huta', 'L', 'KRISPRO', 'JL.Kayu Jati V No.8 ', 'D3', NULL, NULL, 'WRS', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(63, 'Erisa Mrlinda S.SP', '1316066506730013', '1973-12-16', 'Pasar Baru', 'P', 'KRISPRO', 'JL.Kayu Jati V No.8', 'D3', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(64, 'David Harris G.Siagian', '1316061805080016', '2008-12-06', 'Bekasi', 'L', 'KRISPRO', 'JL.Kayu Jati V No.8', 'SD', NULL, NULL, 'STUDENT', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(65, 'Wasti Silaen', '3175024109410002', '1976-02-09', 'Parsoburan', 'L', 'KRISPRO', 'JL.Kayu Jati No.25', 'SMA', NULL, NULL, 'IRT', '', NULL, 'DIVC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(66, 'Nengsi Dame Uli', '3175026903760001', '1976-04-06', 'Jakarta', 'P', 'KRISPRO', 'JL.Kayu Jati V No.25', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(67, 'Syaifudin Batubara', '317502260640001', '1946-02-01', 'Badiri', 'L', 'ISLAM', 'JL.Kayu Jati V No.21/A', 'D3', NULL, NULL, 'NEGERI', '', '3175020901091104', 'MARD', NULL, '2021-02-11', 'Sakit Jantung', NULL, NULL, 'M.Daktar Batu-Bara', 'Zubaidah Lubis', ''),
(68, 'Umar', '3175021508701002', '1970-12-08', 'Bangkalan', 'L', 'ISLAM', 'JL.Kayu Jati V ', 'SD', NULL, NULL, 'WRS', '', '3175020103111009', 'MARD', NULL, NULL, NULL, NULL, NULL, 'Wardi Bin Bulimah', 'Sulimah', ''),
(69, 'Mathus Widjaja', '3175020403640003', '1954-04-03', 'Jakarta', 'L', 'ISLAM', 'Rawamangun II Tengah', 'SMA', NULL, NULL, 'SWASTA', '', '3175020901091087', 'MARD', NULL, NULL, NULL, NULL, NULL, 'Johan Arifin', 'Eva Idayanti', ''),
(70, 'Motor Silaban', '3175021002470002', '1947-10-02', 'Tapanuli', 'L', 'KRISPRO', 'Rawamangun II Tengah', 'SMA', NULL, NULL, 'NEGERI', '', '3175020901091090', 'MARD', NULL, NULL, NULL, NULL, NULL, 'C.Silaban', 'Rosmaida Manurung', ''),
(71, 'Ilham', '3175021502830008', '1983-12-02', 'Jakarta', 'L', 'ISLAM', 'Rawamangun II Tengah', 'D3', NULL, NULL, 'SWASTA', '', '31750209001109111', 'MARD', NULL, NULL, NULL, NULL, NULL, 'Djalin', 'Mintati', ''),
(72, 'Ardizal', '3175021203600011', '1960-12-03', 'Bukit Ting', 'L', 'ISLAM', 'JL.Kayu Jati No.19', 'SMA', NULL, NULL, 'WRS', '', '3175021201090250', 'MARD', NULL, NULL, NULL, NULL, NULL, 'Alinas', 'Yuliana', ''),
(73, 'Riki Haryanto', '3175022112780006', '1979-02-12', 'Jakarta', 'L', 'ISLAM', 'JL.Rawamangun II Tengah', 'SMA', NULL, NULL, 'SWASTA', '', '3175020901091114', 'MARD', NULL, NULL, NULL, NULL, NULL, 'Djaldin', 'Djanjir', ''),
(74, 'Wilson M', '3175021608660001', '1966-12-08', 'Jakarta', 'L', 'KRISPRO', 'JL.Kayu Jati No.20', 'SMA', NULL, NULL, 'SWASTA', '', '31750210010988118', 'MARD', NULL, NULL, NULL, NULL, NULL, 'P.Parpaung', 'retisyti', ''),
(75, 'Panji Baskoro Bangun', '3174051702760006', '1975-12-02', 'Jakarta', 'L', 'ISLAM', 'JL.Kayu Jati V', 'D3', NULL, NULL, 'FREELANCE', '', '3174052101196507', 'MARD', NULL, NULL, NULL, NULL, NULL, 'H Tjptono', 'Sri Rauayu', ''),
(76, 'Oktavianus Magang', '61051603109200001', '1992-03-10', 'Kappas', 'L', 'KRISPRO', 'JL Kayu Jati V', 'SMP', NULL, NULL, 'WRS', '', '3185021210160030', 'MARD', NULL, NULL, NULL, NULL, NULL, 'Himrot', 'Agustina Jala', ''),
(77, 'Juninta Simanunjak', '31750246068230005', '1983-06-06', 'Pasar Baru', 'L', 'KRISPRO', 'JL.Kayu Jati No.8', 'D3', NULL, NULL, 'SWASTA', '', '3175023108101007', 'UNMD', NULL, NULL, NULL, NULL, NULL, 'B.Simanintak', '', ''),
(78, 'Kusni V.Sianipar', '317502306810012', '1981-03-06', 'Lumban Bal', 'L', 'KRISPRO', 'JL.Kayu Jati No.25', 'SMP', NULL, NULL, 'WRS', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(79, 'Liha Crishtina Sianturi', '127105748700001', '1987-10-07', 'Medan', 'P', 'KRISKAT', 'JL.Kayu Jati V', 'D3', NULL, NULL, 'STUDENT', '', '3175022502111021', 'UNMD', NULL, NULL, NULL, NULL, NULL, 'Hermolen Sianturin', '', ''),
(80, 'Gino Fernando', '3175020602910005', '1951-05-02', 'Padang', 'L', 'ISLAM', 'JL.Kayu Jati No.8', 'SMA', NULL, NULL, 'SWASTA', '', '3175002503100073', 'UNMD', NULL, NULL, NULL, NULL, NULL, 'Asril Ilias', '', ''),
(81, 'Arnold Firmansyah', '317502250380024', '1980-02-01', 'Jakarta', 'L', 'ISLAM', 'JL.Rawamangun II Tengah No.10', 'SMA', NULL, NULL, 'SWASTA', '', '3175022207100065', 'MARD', NULL, NULL, NULL, NULL, NULL, 'Rustem Effendi', 'Hami Yundar', ''),
(82, 'Rozikin', '3175020905761001', '1976-09-07', 'Pemalang', 'L', 'ISLAM', 'JL.Kayu Jati V', 'SMA', NULL, NULL, 'WRS', '', '31750227101101017', 'MARD', NULL, NULL, NULL, NULL, NULL, 'Roli', 'Umamah', ''),
(83, 'Zukri Hamdi', '3175021707680011', '1968-12-07', 'Bukit Ting', 'L', 'ISLAM', 'JL.Kayu Jati No.8', 'SMA', NULL, NULL, 'SWASTA', '', '3175021201095027', 'MARD', NULL, NULL, NULL, NULL, NULL, 'Amirudin', 'Winarsih', ''),
(84, 'Edo Silalahi', '3175022210900004', '1990-02-10', 'Medan', 'L', 'KRISPRO', 'JL.Kayu Jati V', 'SMA', NULL, NULL, 'SWASTA', '', '31750219021100029', 'UNMD', NULL, NULL, NULL, NULL, NULL, 'Monang Silalahi', '', ''),
(85, 'Abner Magang', '3173010804820014', '1982-08-04', 'Kappas', 'L', 'KRISPRO', 'JL.Kayu Jati V', 'SMA', NULL, NULL, 'SWASTA', '', '3175023006210015', 'MARD', NULL, NULL, NULL, NULL, NULL, 'Himrot Magang Amoe', 'Agustina Magang Jala', ''),
(86, 'Tigor P.Butar Butar', '3175022301770001', '1977-11-30', 'Balige', 'L', 'KRISPRO', 'JL.Kayu Jati V', 'SMA', NULL, NULL, 'WRS', '', '3175020901096578', 'MARD', NULL, NULL, NULL, NULL, NULL, 'U.H.Butar Butar', 'Putri Imelda', ''),
(87, 'Fenansius Gandu', '3175022506831003', '1983-02-05', 'Flores', 'L', 'KRISKAT', 'JL.Kayu Jati V', 'D3', NULL, NULL, 'SWASTA', '', '3175022407121027', 'UNMD', NULL, NULL, NULL, NULL, NULL, 'Kanisius Sulung', 'Sofia Emina', ''),
(88, 'Yosep T.Yasmin', '5310326205850325', '1983-02-04', 'Paka', 'P', 'KRISKAT', 'JL.Kayu Jati V', 'D3', NULL, NULL, 'SWASTA', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(89, 'Yohanes Gantur', '3175022000381003', '1999-02-03', 'Flores', 'L', 'KRISKAT', 'JL.Kayu Jati V', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(90, 'Jhon Arianto Neolaka', '3175021111861004', '1986-11-11', 'Teas', 'L', 'KRISPRO', 'JL.Kayu Jati', 'SMP', NULL, NULL, 'WRS', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(91, 'Zainal Arifin', '317503101680062', '1968-10-11', 'Jakarta', 'L', 'ISLAM', 'JL.Kayu Jati V No.24', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(92, 'Benisius Jefri', '31750202308910001', '1991-12-12', 'Gencor', 'L', 'KRISKAT', 'JL.Kayu Kayu Jati No.24 A', 'D3', NULL, NULL, 'WRS', '', NULL, 'UNMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(93, 'Imanuel Punuf', '311601140483007', '1983-12-04', 'Tts Soe', 'L', 'KRISPRO', 'JL.Kayu Jati V', 'SD', NULL, NULL, 'FREELANCE', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(94, 'Lasmi', '3276512671287002', '1987-12-12', 'Jakarta', 'P', 'KRISPRO', 'JL.Kayu Jati V', 'SD', NULL, NULL, 'IRT', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(95, 'Hanra Marlina', '3175026812720010', '1972-12-12', 'P.Siantar', 'P', 'KRISPRO', 'JL.Kayu Jati V', 'D3', NULL, NULL, 'SWASTA', '', NULL, 'DIVC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(96, 'Nosu Tondang', '317502131078006', '1978-12-10', 'Jakarta', 'L', 'KRISPRO', 'JL.Kayu Jati No.12', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(97, 'Yanter Silaban', '3175021310756007', '1987-11-10', 'Jakarta', 'L', 'KRISPRO', 'JL.Kayu Jati V No.8', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(98, 'Rony Samosir', '317502080060006', '2014-12-11', 'Jakarta', 'P', 'KRISPRO', 'JL.Kayu Jati V No.12', 'SD', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(99, 'Yulman', '3175020500740015', '1974-05-07', 'Jakarta', 'L', 'ISLAM', 'JL.Rawamangun II Tengah', 'SMA', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(100, 'Romadu Malu', '38109081900008', '1989-05-12', 'Padang Sid', 'L', 'KRISKAT', 'JL.Kayu Jati V No.12', 'D3', NULL, NULL, 'SWASTA', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(101, 'Danang', '17110110061', '2013-03-12', 'Jakarta', 'L', 'KRISKAT', 'Jakarta', 'SMA', NULL, NULL, 'SWASTA', 'UNMD', NULL, NULL, '2022-02-12', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(102, 'syaifudin batubara', '3175022608460001', '1946-02-08', 'badiri', 'L', 'ISLAM', 'Jln kayu jati No7 21', 'D3', NULL, NULL, 'FREELANCE', '', NULL, 'MARD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(103, 'Untung Surapati', '6256512762', '2022-02-01', 'Jakarta', 'L', 'ISLAM', 'Jakarta', 'S1', NULL, NULL, 'SWASTA', 'MARD', NULL, NULL, '2022-02-19', NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_treeacc`
--

CREATE TABLE `m_treeacc` (
  `ID_TREE` int(11) NOT NULL,
  `GROUP_USER` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CHILD` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PARENT` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PUBLIC_CODE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DESCRIPTION` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FLAG_ACTIVE` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `URL` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ICON` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_treeacc`
--

INSERT INTO `m_treeacc` (`ID_TREE`, `GROUP_USER`, `CHILD`, `PARENT`, `PUBLIC_CODE`, `DESCRIPTION`, `FLAG_ACTIVE`, `URL`, `ICON`) VALUES
(471, 'superadmin', 'PRT0001', 'P', 'PRT0001', 'Master Data', 'Y', '#', 'fas fa-database'),
(472, 'superadmin', 'PRT0001', 'PRT0001', 'PRT000102', 'Data Menu', 'Y', 'master/menu', 'far fa-circle'),
(473, 'superadmin', 'PRT0001', 'PRT0001', 'PRT000101', 'Data User', 'Y', 'admin/user', 'far fa-circle'),
(474, 'superadmin', 'PRT0001', 'PRT0001', 'PRT000103', 'Data Parameter', 'N', 'master/parameter', 'far fa-circle'),
(475, 'superadmin', 'PRT0001', 'PRT0001', 'PRT000104', 'Data Grup', 'N', 'master/group', 'far fa-circle'),
(477, 'superadmin', 'PRT0001', 'PRT0001', 'PRT000107', 'Data Penduduk', 'Y', 'master/penduduk', 'far fa-circle'),
(927, 'superadmin', 'PRT0001', 'PRT0001', 'PRT000111', 'Data Kartu Keluarga', 'Y', 'master/KartuKeluarga', 'far fa-circle'),
(933, 'superadmin', 'PRT0010', 'P', 'PRT0010', 'Kas', 'N', '#', 'fas fa-book'),
(934, 'superadmin', 'PRT0010', 'PRT0010', 'PRT001001', 'Kas Masuk', 'Y', 'kas/inputkas', 'far fa-circle'),
(935, 'superadmin', 'PRT0011', 'P', 'PRT0011', 'Berkas', 'Y', '#', 'fas fa-sticky-note'),
(936, 'superadmin', 'PRT0011', 'PRT0011', 'PRT001101', 'Request Berkas', 'Y', 'file/Request', 'far fa-circle'),
(937, 'superadmin', 'PRT0011', 'PRT0011', 'PRT001102', 'Riwayat Berkas', 'Y', 'file/Riwayat', 'far fa-circle'),
(938, 'superadmin', 'PRT0011', 'PRT0011', 'PRT001103', 'Approval Berkas', 'Y', 'file/Approval', 'far fa-circle'),
(940, 'superadmin', 'PRT0010', 'PRT0010', 'PRT001002', 'Permintaan', 'Y', 'kas/RequestKas', 'far fa-circle'),
(942, 'superadmin', 'PRT0010', 'PRT0010', 'PRT001004', 'Approval Kas', 'Y', 'kas/ApprovalKas', 'far fa-circle'),
(943, 'superadmin', 'PRT0010', 'PRT0010', 'PRT001005', 'Kas Keluar', 'Y', 'kas/Outputkas', 'far fa-circle'),
(946, 'superadmin', 'PRT0012', 'PRT0012', 'PRT001201', 'Buat Acara', 'Y', 'acara/event', 'far fa-circle'),
(947, 'superadmin', 'PRT0013', 'P', 'PRT0013', 'Penduduk', 'Y', '#', 'fas fa-address-book'),
(948, 'superadmin', 'PRT0013', 'PRT0013', 'PRT001301', 'Pendatang', 'Y', 'penduduk/pendatang', 'far fa-circle'),
(949, 'superadmin', 'PRT0013', 'PRT0013', 'PRT001302', 'Meninggal', 'Y', 'penduduk/Meninggal', 'far fa-circle'),
(950, 'superadmin', 'PRT0013', 'PRT0013', 'PRT001303', 'Mutasi', 'Y', 'penduduk/Mutasi', 'far fa-circle'),
(951, 'superadmin', 'PRT0013', 'PRT0013', 'PRT001304', 'Melahirkan', 'Y', 'penduduk/melahirkan', 'far fa-circle'),
(952, 'superadmin', 'PRT000112', 'PRT0001', 'PRT000112', 'Data Kas', 'N', 'master/MasterKas', 'far fa-circle'),
(984, 'superadmin', 'PRT0002', 'P', 'PRT0002', 'Web', 'Y', '#', 'fas fa-globe-americas'),
(985, 'superadmin', 'PRT0002', 'PRT0002', 'PRT000201', 'Pengurus', 'Y', 'admin/struktur', 'far fa-circle'),
(986, 'superadmin', 'PRT0002', 'PRT0002', 'PRT000202', 'Galeri', 'Y', 'admin/galeri', 'far fa-circle'),
(987, 'superadmin', 'PRT0002', 'PRT0002', 'PRT000203', 'Quotes', 'Y', 'admin/quotes', 'far fa-circle'),
(988, 'superadmin', 'PRT0002', 'PRT0002', 'PRT000204', 'Sliders', 'Y', 'admin/sliders', 'far fa-circle'),
(989, 'superadmin', 'PRT0002', 'PRT0002', 'PRT000205', 'Masukkan', 'Y', 'admin/masukan', 'far fa-circle'),
(991, 'superadmin', 'PRT0002', 'PRT0002', 'PRT000207', 'Konfigurasi', 'Y', 'admin/konfig', 'far fa-circle'),
(992, 'superadmin', 'PRT0003', 'P', 'PRT0003', 'Main', 'Y', '#', 'fas fa-magnet'),
(993, 'superadmin', 'PRT0003', 'PRT0003', 'PRT000301', 'Berita', 'Y', 'admin/berita', 'far fa-circle'),
(994, 'superadmin', 'PRT0003', 'PRT0003', 'PRT000302', 'Program Kerja', 'N', 'admin/proker', 'far fa-circle'),
(995, 'superadmin', 'PRT0003', 'PRT0003', 'PRT000303', 'Keuangan', 'Y', 'admin/keuangan', 'far fa-circle'),
(996, 'superadmin', 'PRT0003', 'PRT0003', 'PRT000304', 'Surat', 'Y', 'admin/surat', 'far fa-circle'),
(997, 'superadmin', 'PRT0003', 'PRT0003', 'PRT000305', 'Laporan', 'Y', 'admin/laporan', 'far fa-circle'),
(1099, 'WRG', 'PRT0001', 'P', 'PRT0001', 'Master Data', 'N', '#', 'fas fa-database'),
(1100, 'WRG', 'PRT0001', 'PRT0001', 'PRT000102', 'Data Menu', 'Y', 'master/menu', 'far fa-circle'),
(1101, 'WRG', 'PRT0001', 'PRT0001', 'PRT000101', 'Data User', 'Y', 'admin/user', 'far fa-circle'),
(1102, 'WRG', 'PRT0001', 'PRT0001', 'PRT000103', 'Data Parameter', 'Y', 'master/parameter', 'far fa-circle'),
(1103, 'WRG', 'PRT0001', 'PRT0001', 'PRT000104', 'Data Grup', 'Y', 'master/group', 'far fa-circle'),
(1104, 'WRG', 'PRT0001', 'PRT0001', 'PRT000107', 'Data Penduduk', 'Y', 'master/penduduk', 'far fa-circle'),
(1105, 'WRG', 'PRT0001', 'PRT0001', 'PRT000111', 'Data Kartu Keluarga', 'Y', 'master/KartuKeluarga', 'far fa-circle'),
(1106, 'WRG', 'PRT0010', 'P', 'PRT0010', 'Kas', 'N', '#', 'fas fa-book'),
(1107, 'WRG', 'PRT0010', 'PRT0010', 'PRT001001', 'Kas Masuk', 'Y', 'kas/inputkas', 'far fa-circle'),
(1108, 'WRG', 'PRT0011', 'P', 'PRT0011', 'Berkas', 'Y', '#', 'fas fa-sticky-note'),
(1109, 'WRG', 'PRT0011', 'PRT0011', 'PRT001101', 'Request Berkas', 'Y', 'file/Request', 'far fa-circle'),
(1110, 'WRG', 'PRT0011', 'PRT0011', 'PRT001102', 'Riwayat Berkas', 'Y', 'file/Riwayat', 'far fa-circle'),
(1111, 'WRG', 'PRT0011', 'PRT0011', 'PRT001103', 'Approval Berkas', 'N', 'file/Approval', 'far fa-circle'),
(1112, 'WRG', 'PRT0010', 'PRT0010', 'PRT001002', 'Permintaan', 'Y', 'kas/RequestKas', 'far fa-circle'),
(1114, 'WRG', 'PRT0010', 'PRT0010', 'PRT001005', 'Kas Keluar', 'Y', 'kas/Outputkas', 'far fa-circle'),
(1116, 'WRG', 'PRT0012', 'PRT0012', 'PRT001201', 'Buat Acara', 'Y', 'acara/event', 'far fa-circle'),
(1117, 'WRG', 'PRT0013', 'P', 'PRT0013', 'Penduduk', 'N', '#', 'fas fa-address-book'),
(1118, 'WRG', 'PRT0013', 'PRT0013', 'PRT001301', 'Pendatang', 'Y', 'penduduk/pendatang', 'far fa-circle'),
(1119, 'WRG', 'PRT0013', 'PRT0013', 'PRT001302', 'Meninggal', 'Y', 'penduduk/Meninggal', 'far fa-circle'),
(1120, 'WRG', 'PRT0013', 'PRT0013', 'PRT001303', 'Mutasi', 'Y', 'penduduk/Mutasi', 'far fa-circle'),
(1121, 'WRG', 'PRT0013', 'PRT0013', 'PRT001304', 'Melahirkan', 'Y', 'penduduk/melahirkan', 'far fa-circle'),
(1122, 'WRG', 'PRT000112', 'PRT0001', 'PRT000112', 'Data Kas', 'N', 'master/MasterKas', 'far fa-circle'),
(1123, 'WRG', 'PRT0002', 'P', 'PRT0002', 'Web', 'N', '#', 'fas fa-globe-americas'),
(1124, 'WRG', 'PRT0002', 'PRT0002', 'PRT000201', 'Pengurus', 'Y', 'admin/struktur', 'far fa-circle'),
(1125, 'WRG', 'PRT0002', 'PRT0002', 'PRT000202', 'Galeri', 'Y', 'admin/galeri', 'far fa-circle'),
(1126, 'WRG', 'PRT0002', 'PRT0002', 'PRT000203', 'Quotes', 'Y', 'admin/quotes', 'far fa-circle'),
(1127, 'WRG', 'PRT0002', 'PRT0002', 'PRT000204', 'Sliders', 'Y', 'admin/sliders', 'far fa-circle'),
(1128, 'WRG', 'PRT0002', 'PRT0002', 'PRT000205', 'Pesan', 'Y', 'admin/masukan', 'far fa-circle'),
(1129, 'WRG', 'PRT0002', 'PRT0002', 'PRT000207', 'Konfigurasi', 'Y', 'admin/konfig', 'far fa-circle'),
(1130, 'WRG', 'PRT0003', 'P', 'PRT0003', 'Main', 'N', '#', 'fas fa-magnet'),
(1131, 'WRG', 'PRT0003', 'PRT0003', 'PRT000301', 'Berita', 'Y', 'admin/berita', 'far fa-circle'),
(1132, 'WRG', 'PRT0003', 'PRT0003', 'PRT000302', 'Program Kerja', 'Y', 'admin/proker', 'far fa-circle'),
(1133, 'WRG', 'PRT0003', 'PRT0003', 'PRT000303', 'Keuangan', 'N', 'admin/keuangan', 'far fa-circle'),
(1134, 'WRG', 'PRT0003', 'PRT0003', 'PRT000304', 'Surat', 'Y', 'admin/surat', 'far fa-circle'),
(1135, 'WRG', 'PRT0003', 'PRT0003', 'PRT000305', 'Laporan', 'Y', 'admin/laporan', 'far fa-circle'),
(1162, 'GM', 'PRT0001', 'P', 'PRT0001', 'Master Data', 'Y', '#', 'fas fa-database'),
(1163, 'GM', 'PRT0001', 'PRT0001', 'PRT000102', 'Data Menu', 'Y', 'master/menu', 'far fa-circle'),
(1164, 'GM', 'PRT0001', 'PRT0001', 'PRT000101', 'Data User', 'Y', 'admin/user', 'far fa-circle'),
(1165, 'GM', 'PRT0001', 'PRT0001', 'PRT000103', 'Data Parameter', 'Y', 'master/parameter', 'far fa-circle'),
(1166, 'GM', 'PRT0001', 'PRT0001', 'PRT000104', 'Data Grup', 'Y', 'master/group', 'far fa-circle'),
(1167, 'GM', 'PRT0001', 'PRT0001', 'PRT000107', 'Data Penduduk', 'Y', 'master/penduduk', 'far fa-circle'),
(1168, 'GM', 'PRT0001', 'PRT0001', 'PRT000111', 'Data Kartu Keluarga', 'Y', 'master/KartuKeluarga', 'far fa-circle'),
(1169, 'GM', 'PRT0010', 'P', 'PRT0010', 'Kas', 'N', '#', 'fas fa-book'),
(1170, 'GM', 'PRT0010', 'PRT0010', 'PRT001001', 'Kas Masuk', 'Y', 'kas/inputkas', 'far fa-circle'),
(1171, 'GM', 'PRT0011', 'P', 'PRT0011', 'Berkas', 'Y', '#', 'fas fa-sticky-note'),
(1172, 'GM', 'PRT0011', 'PRT0011', 'PRT001101', 'Request Berkas', 'N', 'file/Request', 'far fa-circle'),
(1173, 'GM', 'PRT0011', 'PRT0011', 'PRT001102', 'Riwayat Berkas', 'N', 'file/Riwayat', 'far fa-circle'),
(1174, 'GM', 'PRT0011', 'PRT0011', 'PRT001103', 'Approval Berkas', 'Y', 'file/Approval', 'far fa-circle'),
(1175, 'GM', 'PRT0010', 'PRT0010', 'PRT001002', 'Permintaan', 'Y', 'kas/RequestKas', 'far fa-circle'),
(1176, 'GM', 'PRT0010', 'PRT0010', 'PRT001004', 'Approval Kas', 'Y', 'kas/ApprovalKas', 'far fa-circle'),
(1177, 'GM', 'PRT0010', 'PRT0010', 'PRT001005', 'Kas Keluar', 'Y', 'kas/Outputkas', 'far fa-circle'),
(1179, 'GM', 'PRT0012', 'PRT0012', 'PRT001201', 'Buat Acara', 'Y', 'acara/event', 'far fa-circle'),
(1180, 'GM', 'PRT0013', 'P', 'PRT0013', 'Penduduk', 'Y', '#', 'fas fa-address-book'),
(1181, 'GM', 'PRT0013', 'PRT0013', 'PRT001301', 'Pendatang', 'Y', 'penduduk/pendatang', 'far fa-circle'),
(1182, 'GM', 'PRT0013', 'PRT0013', 'PRT001302', 'Meninggal', 'Y', 'penduduk/Meninggal', 'far fa-circle'),
(1183, 'GM', 'PRT0013', 'PRT0013', 'PRT001303', 'Mutasi', 'Y', 'penduduk/Mutasi', 'far fa-circle'),
(1184, 'GM', 'PRT0013', 'PRT0013', 'PRT001304', 'Melahirkan', 'Y', 'penduduk/melahirkan', 'far fa-circle'),
(1185, 'GM', 'PRT000112', 'PRT0001', 'PRT000112', 'Data Kas', 'N', 'master/MasterKas', 'far fa-circle'),
(1186, 'GM', 'PRT0002', 'P', 'PRT0002', 'Web', 'Y', '#', 'fas fa-globe-americas'),
(1187, 'GM', 'PRT0002', 'PRT0002', 'PRT000201', 'Pengurus', 'Y', 'admin/struktur', 'far fa-circle'),
(1188, 'GM', 'PRT0002', 'PRT0002', 'PRT000202', 'Galeri', 'Y', 'admin/galeri', 'far fa-circle'),
(1189, 'GM', 'PRT0002', 'PRT0002', 'PRT000203', 'Quotes', 'Y', 'admin/quotes', 'far fa-circle'),
(1190, 'GM', 'PRT0002', 'PRT0002', 'PRT000204', 'Sliders', 'Y', 'admin/sliders', 'far fa-circle'),
(1191, 'GM', 'PRT0002', 'PRT0002', 'PRT000205', 'Pesan', 'Y', 'admin/masukan', 'far fa-circle'),
(1192, 'GM', 'PRT0002', 'PRT0002', 'PRT000207', 'Konfigurasi', 'Y', 'admin/konfig', 'far fa-circle'),
(1193, 'GM', 'PRT0003', 'P', 'PRT0003', 'Main', 'Y', '#', 'fas fa-magnet'),
(1194, 'GM', 'PRT0003', 'PRT0003', 'PRT000301', 'Berita', 'Y', 'admin/berita', 'far fa-circle'),
(1195, 'GM', 'PRT0003', 'PRT0003', 'PRT000302', 'Program Kerja', 'Y', 'admin/proker', 'far fa-circle'),
(1196, 'GM', 'PRT0003', 'PRT0003', 'PRT000303', 'Keuangan', 'Y', 'admin/keuangan', 'far fa-circle'),
(1197, 'GM', 'PRT0003', 'PRT0003', 'PRT000304', 'Surat', 'Y', 'admin/surat', 'far fa-circle'),
(1198, 'GM', 'PRT0003', 'PRT0003', 'PRT000305', 'Laporan', 'Y', 'admin/laporan', 'far fa-circle'),
(1225, 'MGR', 'PRT0001', 'P', 'PRT0001', 'Master Data', 'N', '#', 'fas fa-database'),
(1226, 'MGR', 'PRT0001', 'PRT0001', 'PRT000102', 'Data Menu', 'Y', 'master/menu', 'far fa-circle'),
(1227, 'MGR', 'PRT0001', 'PRT0001', 'PRT000101', 'Data User', 'Y', 'admin/user', 'far fa-circle'),
(1228, 'MGR', 'PRT0001', 'PRT0001', 'PRT000103', 'Data Parameter', 'Y', 'master/parameter', 'far fa-circle'),
(1229, 'MGR', 'PRT0001', 'PRT0001', 'PRT000104', 'Data Grup', 'Y', 'master/group', 'far fa-circle'),
(1230, 'MGR', 'PRT0001', 'PRT0001', 'PRT000107', 'Data Penduduk', 'Y', 'master/penduduk', 'far fa-circle'),
(1231, 'MGR', 'PRT0001', 'PRT0001', 'PRT000111', 'Data Kartu Keluarga', 'Y', 'master/KartuKeluarga', 'far fa-circle'),
(1232, 'MGR', 'PRT0010', 'P', 'PRT0010', 'Kas', 'N', '#', 'fas fa-book'),
(1233, 'MGR', 'PRT0010', 'PRT0010', 'PRT001001', 'Kas Masuk', 'Y', 'kas/inputkas', 'far fa-circle'),
(1234, 'MGR', 'PRT0011', 'P', 'PRT0011', 'Berkas', 'Y', '#', 'fas fa-sticky-note'),
(1235, 'MGR', 'PRT0011', 'PRT0011', 'PRT001101', 'Request Berkas', 'Y', 'file/Request', 'far fa-circle'),
(1236, 'MGR', 'PRT0011', 'PRT0011', 'PRT001102', 'Riwayat Berkas', 'N', 'file/Riwayat', 'far fa-circle'),
(1237, 'MGR', 'PRT0011', 'PRT0011', 'PRT001103', 'Approval Berkas', 'Y', 'file/Approval', 'far fa-circle'),
(1238, 'MGR', 'PRT0010', 'PRT0010', 'PRT001002', 'Permintaan', 'Y', 'kas/RequestKas', 'far fa-circle'),
(1239, 'MGR', 'PRT0010', 'PRT0010', 'PRT001004', 'Approval Kas', 'Y', 'kas/ApprovalKas', 'far fa-circle'),
(1240, 'MGR', 'PRT0010', 'PRT0010', 'PRT001005', 'Kas Keluar', 'Y', 'kas/Outputkas', 'far fa-circle'),
(1241, 'MGR', 'PRT0012', 'PRT0012', 'PRT001201', 'Buat Acara', 'Y', 'acara/event', 'far fa-circle'),
(1242, 'MGR', 'PRT0013', 'P', 'PRT0013', 'Penduduk', 'Y', '#', 'fas fa-address-book'),
(1243, 'MGR', 'PRT0013', 'PRT0013', 'PRT001301', 'Pendatang', 'Y', 'penduduk/pendatang', 'far fa-circle'),
(1244, 'MGR', 'PRT0013', 'PRT0013', 'PRT001302', 'Meninggal', 'Y', 'penduduk/Meninggal', 'far fa-circle'),
(1245, 'MGR', 'PRT0013', 'PRT0013', 'PRT001303', 'Mutasi', 'Y', 'penduduk/Mutasi', 'far fa-circle'),
(1246, 'MGR', 'PRT0013', 'PRT0013', 'PRT001304', 'Melahirkan', 'Y', 'penduduk/melahirkan', 'far fa-circle'),
(1247, 'MGR', 'PRT000112', 'PRT0001', 'PRT000112', 'Data Kas', 'N', 'master/MasterKas', 'far fa-circle'),
(1248, 'MGR', 'PRT0002', 'P', 'PRT0002', 'Web', 'Y', '#', 'fas fa-globe-americas'),
(1249, 'MGR', 'PRT0002', 'PRT0002', 'PRT000201', 'Pengurus', 'Y', 'admin/struktur', 'far fa-circle'),
(1250, 'MGR', 'PRT0002', 'PRT0002', 'PRT000202', 'Galeri', 'Y', 'admin/galeri', 'far fa-circle'),
(1251, 'MGR', 'PRT0002', 'PRT0002', 'PRT000203', 'Quotes', 'Y', 'admin/quotes', 'far fa-circle'),
(1252, 'MGR', 'PRT0002', 'PRT0002', 'PRT000204', 'Sliders', 'Y', 'admin/sliders', 'far fa-circle'),
(1253, 'MGR', 'PRT0002', 'PRT0002', 'PRT000205', 'Pesan', 'Y', 'admin/masukan', 'far fa-circle'),
(1254, 'MGR', 'PRT0002', 'PRT0002', 'PRT000207', 'Konfigurasi', 'Y', 'admin/konfig', 'far fa-circle'),
(1255, 'MGR', 'PRT0003', 'P', 'PRT0003', 'Main', 'Y', '#', 'fas fa-magnet'),
(1256, 'MGR', 'PRT0003', 'PRT0003', 'PRT000301', 'Berita', 'Y', 'admin/berita', 'far fa-circle'),
(1257, 'MGR', 'PRT0003', 'PRT0003', 'PRT000302', 'Program Kerja', 'Y', 'admin/proker', 'far fa-circle'),
(1258, 'MGR', 'PRT0003', 'PRT0003', 'PRT000303', 'Keuangan', 'Y', 'admin/keuangan', 'far fa-circle'),
(1259, 'MGR', 'PRT0003', 'PRT0003', 'PRT000304', 'Surat', 'Y', 'admin/surat', 'far fa-circle'),
(1260, 'MGR', 'PRT0003', 'PRT0003', 'PRT000305', 'Laporan', 'Y', 'admin/laporan', 'far fa-circle'),
(1288, 'SPV', 'PRT0001', 'P', 'PRT0001', 'Master Data', 'N', '#', 'fas fa-database'),
(1289, 'SPV', 'PRT0001', 'PRT0001', 'PRT000102', 'Data Menu', 'Y', 'master/menu', 'far fa-circle'),
(1290, 'SPV', 'PRT0001', 'PRT0001', 'PRT000101', 'Data User', 'Y', 'admin/user', 'far fa-circle'),
(1291, 'SPV', 'PRT0001', 'PRT0001', 'PRT000103', 'Data Parameter', 'Y', 'master/parameter', 'far fa-circle'),
(1292, 'SPV', 'PRT0001', 'PRT0001', 'PRT000104', 'Data Grup', 'Y', 'master/group', 'far fa-circle'),
(1293, 'SPV', 'PRT0001', 'PRT0001', 'PRT000107', 'Data Penduduk', 'Y', 'master/penduduk', 'far fa-circle'),
(1294, 'SPV', 'PRT0001', 'PRT0001', 'PRT000111', 'Data Kartu Keluarga', 'Y', 'master/KartuKeluarga', 'far fa-circle'),
(1295, 'SPV', 'PRT0010', 'P', 'PRT0010', 'Kas', 'N', '#', 'fas fa-book'),
(1296, 'SPV', 'PRT0010', 'PRT0010', 'PRT001001', 'Kas Masuk', 'Y', 'kas/inputkas', 'far fa-circle'),
(1297, 'SPV', 'PRT0011', 'P', 'PRT0011', 'Berkas', 'N', '#', 'fas fa-sticky-note'),
(1298, 'SPV', 'PRT0011', 'PRT0011', 'PRT001101', 'Request Berkas', 'Y', 'file/Request', 'far fa-circle'),
(1299, 'SPV', 'PRT0011', 'PRT0011', 'PRT001102', 'Riwayat Berkas', 'Y', 'file/Riwayat', 'far fa-circle'),
(1300, 'SPV', 'PRT0011', 'PRT0011', 'PRT001103', 'Approval Berkas', 'Y', 'file/Approval', 'far fa-circle'),
(1301, 'SPV', 'PRT0010', 'PRT0010', 'PRT001002', 'Permintaan', 'Y', 'kas/RequestKas', 'far fa-circle'),
(1302, 'SPV', 'PRT0010', 'PRT0010', 'PRT001004', 'Approval Kas', 'Y', 'kas/ApprovalKas', 'far fa-circle'),
(1303, 'SPV', 'PRT0010', 'PRT0010', 'PRT001005', 'Kas Keluar', 'Y', 'kas/Outputkas', 'far fa-circle'),
(1304, 'SPV', 'PRT0012', 'PRT0012', 'PRT001201', 'Buat Acara', 'Y', 'acara/event', 'far fa-circle'),
(1305, 'SPV', 'PRT0013', 'P', 'PRT0013', 'Penduduk', 'N', '#', 'fas fa-address-book'),
(1306, 'SPV', 'PRT0013', 'PRT0013', 'PRT001301', 'Pendatang', 'Y', 'penduduk/pendatang', 'far fa-circle'),
(1307, 'SPV', 'PRT0013', 'PRT0013', 'PRT001302', 'Meninggal', 'Y', 'penduduk/Meninggal', 'far fa-circle'),
(1308, 'SPV', 'PRT0013', 'PRT0013', 'PRT001303', 'Mutasi', 'Y', 'penduduk/Mutasi', 'far fa-circle'),
(1309, 'SPV', 'PRT0013', 'PRT0013', 'PRT001304', 'Melahirkan', 'Y', 'penduduk/melahirkan', 'far fa-circle'),
(1310, 'SPV', 'PRT000112', 'PRT0001', 'PRT000112', 'Data Kas', 'N', 'master/MasterKas', 'far fa-circle'),
(1311, 'SPV', 'PRT0002', 'P', 'PRT0002', 'Web', 'N', '#', 'fas fa-globe-americas'),
(1312, 'SPV', 'PRT0002', 'PRT0002', 'PRT000201', 'Pengurus', 'Y', 'admin/struktur', 'far fa-circle'),
(1313, 'SPV', 'PRT0002', 'PRT0002', 'PRT000202', 'Galeri', 'Y', 'admin/galeri', 'far fa-circle'),
(1314, 'SPV', 'PRT0002', 'PRT0002', 'PRT000203', 'Quotes', 'Y', 'admin/quotes', 'far fa-circle'),
(1315, 'SPV', 'PRT0002', 'PRT0002', 'PRT000204', 'Sliders', 'Y', 'admin/sliders', 'far fa-circle'),
(1316, 'SPV', 'PRT0002', 'PRT0002', 'PRT000205', 'Masukkan', 'Y', 'admin/masukan', 'far fa-circle'),
(1317, 'SPV', 'PRT0002', 'PRT0002', 'PRT000207', 'Konfigurasi', 'Y', 'admin/konfig', 'far fa-circle'),
(1318, 'SPV', 'PRT0003', 'P', 'PRT0003', 'Main', 'Y', '#', 'fas fa-magnet'),
(1319, 'SPV', 'PRT0003', 'PRT0003', 'PRT000301', 'Berita', 'Y', 'admin/berita', 'far fa-circle'),
(1320, 'SPV', 'PRT0003', 'PRT0003', 'PRT000302', 'Program Kerja', 'N', 'admin/proker', 'far fa-circle'),
(1321, 'SPV', 'PRT0003', 'PRT0003', 'PRT000303', 'Keuangan', 'Y', 'admin/keuangan', 'far fa-circle'),
(1322, 'SPV', 'PRT0003', 'PRT0003', 'PRT000304', 'Surat', 'Y', 'admin/surat', 'far fa-circle'),
(1323, 'SPV', 'PRT0003', 'PRT0003', 'PRT000305', 'Laporan', 'Y', 'admin/laporan', 'far fa-circle');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(11) NOT NULL,
  `nama_periode` int(11) NOT NULL,
  `ket` enum('aktif','tidak') NOT NULL DEFAULT 'tidak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periode`
--

INSERT INTO `periode` (`id_periode`, `nama_periode`, `ket`) VALUES
(13843, 2017, 'tidak'),
(13846, 2011, 'tidak'),
(13847, 2016, 'tidak'),
(13848, 2019, 'tidak'),
(13849, 2018, 'tidak'),
(13851, 2021, 'aktif'),
(13852, 2020, 'tidak'),
(13853, 2015, 'tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pokja`
--

CREATE TABLE `pokja` (
  `id_pokja` int(11) NOT NULL,
  `slug_pokja` varchar(255) NOT NULL,
  `nama_pokja` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pokja`
--

INSERT INTO `pokja` (`id_pokja`, `slug_pokja`, `nama_pokja`, `keterangan`, `urutan`) VALUES
(74, 'umum', 'Umum', 'Kegiatan yang bersifat umum PKK desa uma beringin\r\n', 1),
(75, 'sekretariat', 'Sekretariat', 'Kegiatan yang bersangkutan dengan kesekretariatan PKK desa uma beringin', 2),
(79, 'pokja-i', 'Pokja I', 'Kegiatan pokja I', 4),
(81, 'pokja-ii', 'Pokja II', 'Kegiatan pokja II', 5),
(82, 'pokja-iii', 'Pokja III', 'Kegiatan pokja III', 10),
(86, 'pokja-iv', 'Pokja IV', 'Kegiatan pokja IV', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `id_proker` int(11) NOT NULL,
  `id_proker_utama` int(11) NOT NULL,
  `nama_proker` varchar(255) NOT NULL,
  `keterangan_proker` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`id_proker`, `id_proker_utama`, `nama_proker`, `keterangan_proker`, `status`, `tanggal_post`) VALUES
(3820, 42726, 'Melaksanakan pengadministrasian surat keluar dan surat masuk', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3821, 42726, 'Menerima surat-surat masuk dan mengagendakan surat masuk dan keluar', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3822, 42726, 'Mengajukan surat masuk dan surat keluar untuk didisposisikan dan ditandatangani ketua', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3823, 42726, 'Menyalurkan surat masuk ke pokja-pokja sesuai disposisi', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3824, 42727, 'Melaksanakan pemeliharaan ruang sekretariat', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3825, 42727, 'Memelihara inventaris kantor/sekretariat', 'Melaksanakan penggantian papan data kegiatan PKK', 'Terlaksana', '0000-00-00 00:00:00'),
(3826, 42727, 'Ongkos Kantor', '- Melaksanakan pembelian ATK\r\n- Melaksanakan rapat-rapat rutin (Rapat Rutin PKK Desa Uma Beringin tanggal 9 tiap bulan, Rapat koordinasi dengan instansi terkait, Rapat dengan PKK Kecamatan Unter Iwes)', 'Terlaksana', '0000-00-00 00:00:00'),
(3827, 42728, 'Pemantapan kelembagaan dan fungsi Tim Penggerak PKK serta kader lainnya', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3828, 42729, 'Melaksanakan penyusunan rencana program kerja', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3829, 42729, 'Menganalisa data dan menyusun program kerja', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3830, 42729, 'Mengikuti rapat musyawarah rencana pembangunan desa.', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3831, 42730, 'Melaksanakan pembinaan/ pelatihan dasawisma 3 dusun', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3832, 42730, 'Melaksanakan pembinaan/ pelatihan posyandu 3 dusun', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3833, 42731, 'Mengikuti lomba Qosidah Rebana Tingkat Kecamatan Unter Iwes dalam rangka STQ tingkat kecamatan Unter Iwes 2018 di Dusun Pungka', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3834, 42731, 'Menghadiri kegiatan kunjungan kerja Menteri Kominfo di Taman Kerato', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3835, 42731, 'Menghadiri pelaksanaan kegiatan BBGRM di Taman Kerato', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3836, 42732, 'Melaksanakan pengajian rutin tiap bulan pada tanggal 15', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3837, 42733, 'Melaksanakan gotong royong/ kerja bakti setiap hari minggu secara situasional', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3838, 42733, 'Melaksanakan kelompok arisan di pengajian dan dasawisma', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3839, 42733, 'Melaksanakan kelompok jempitan pengajian dan dasawisma', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3840, 42734, 'Melaksanakan pelatihan membuat baju adat Sumbawa', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3841, 42735, 'Melaksanakan pertemuan rutin KOPWAN setiap bulannya pada tanggal 7', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3842, 42736, 'Melaksanakan sosialisasi dan praktek menu B2SA', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3843, 42736, 'Melaksanakan sosialisasi hatinya PKK', '- Juara II Lomba membuat pangan dari bahan-bahan lokal dalam rangka ulang tahun kecamatan unter iwes', 'Terlaksana', '0000-00-00 00:00:00'),
(3844, 42737, 'Melestarikan busana khas daerah', '- Juara I Lomba pawai budaya dalam Festival Olat Ojong dalam rangka Ulang Tahun Kecamatan Unter Iwes ', 'Terlaksana', '0000-00-00 00:00:00'),
(3845, 42738, 'Melaksanakan kegiatan posyandu tiap bulannya', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3846, 42738, 'Melaksanakan pelatihan pengisian buku dasawisma', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3847, 42739, 'Melaksanakan lingkungan bersih dan sehat melalui penyuluhan tentang kebersihan lingkungan agar terhindar dari penyakit diare, ISPA, DBD, dan malaria', '', 'Terlaksana', '0000-00-00 00:00:00'),
(3848, 42741, 'Seminar Nasional 56', 'Belajar dari seminar nasional', 'Terlaksana', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker_utama`
--

CREATE TABLE `proker_utama` (
  `id_proker_utama` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `id_pokja` int(11) NOT NULL,
  `nama_proker_utama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proker_utama`
--

INSERT INTO `proker_utama` (`id_proker_utama`, `id_periode`, `id_pokja`, `nama_proker_utama`, `keterangan`) VALUES
(42726, 13851, 75, 'Urusan Tata Usaha 4', 'Tentang tata usaha PKK desa'),
(42727, 13851, 75, 'Urusan Rumah Tangga', 'Tentang urusan rumah tangga per dasa wisma'),
(42728, 13851, 75, 'Urusan Pengorganisasian', 'Tentang organisasi yang ada di dalam PKK Desa Uma Beringin'),
(42729, 13851, 75, 'Urusan Perencanaan', ''),
(42730, 13851, 75, 'Urusan Pembinaan', ''),
(42731, 13851, 75, 'Urusan Kehumasan', ''),
(42732, 13851, 79, 'Penghayatan dan Pengamalan Pancasila', 'Penghayatan pancasila kepada kehidupan sehari-hari masyarakat'),
(42733, 13851, 79, 'Gotong Royong ', ''),
(42734, 13851, 81, 'Pendidikan dan Keterampilan', ''),
(42735, 13851, 81, 'Pengembangan Kehidupan Berkoperasi', ''),
(42736, 13851, 82, 'Pangan', ''),
(42737, 13851, 82, 'Sandang', ''),
(42738, 13851, 86, 'Kesehatan', ''),
(42739, 13851, 86, 'Kelestarian Lingkungan Hidup', ''),
(42740, 13852, 75, 'Coba tahun 2020', 'asdasda'),
(42741, 13852, 81, 'Program dari pokja II', 'sabvmsdf afkjnskjn ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quote`
--

CREATE TABLE `quote` (
  `quote_id` int(12) NOT NULL,
  `nomor` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `quote`
--

INSERT INTO `quote` (`quote_id`, `nomor`, `name`, `jabatan`, `image`, `description`) VALUES
(9326, 1, 'Irfan Mubarok', 'Mahasiswa', 'QUOTE60c82652dbd0a.jpg', 'Saya sangat senang sekali dengan semua ini. Rasanya saya sepertia dasdsadsad sda'),
(9330, 2, 'Ramadhan', 'Mahasiswa Peneliti', 'QUOTE60c8317a80197.jpg', 'Saya adalah mahasiswa Saya adalah mahasiswa Saya adalah mahasiswa Saya adalah ma'),
(9331, 3, 'Handrianus Saldu', 'Wakil Ketua II', 'QUOTE620771a1a09f7.jpg', 'Trimakasih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(12) NOT NULL,
  `nomor` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`slider_id`, `nomor`, `name`, `image`, `description`) VALUES
(933, 1, 'Kantor Sekertariat Rt.03 Rw.05 Kayu Jati V, Rawamangun ', 'SLIDE620765e7e16a5.jpg', 'Kantor Sekertariat Rt.03 Rw.05 Kayu Jati V, Rawamangun '),
(934, 2, 'Bazar Murah', 'SLIDE60c62e2a7814d.jpg', 'Kegiatan Tahunan Kecamatan Rawamangun'),
(935, 3, 'Kegiatan Keterampilan Pokja II', 'SLIDE60c62e484dcbd.jpg', 'Kerajinan membuat sarung tissue dari kain flanel'),
(936, 4, 'Lomba Senam Antar Kecamatan', 'SLIDE60c62e9a39a55.jpg', 'Lomba Senam Antar Kecamatan'),
(937, 5, 'Bersih itu Sehat', 'SLIDE6207677f3dc07.jpg', 'Area lingkungan rt.03 rw.05 Kayu jati V, Rawamangun'),
(938, 6, 'Rapat Kepengurusan Baru ', 'default.jpg', 'Rapat Kepengurusan Baru '),
(939, 7, 'Lukisan Mural', 'SLIDE620766f529195.jpg', 'Karya Karang Taruna Rt.03 Rw.05 Kayu jati V, Rawamangun'),
(940, 8, 'Sosialisasi Program Pemberdayaan Wanita', 'SLIDE60c62f7693b6b.jpg', 'Pra-Pelatihan Wirausaha Pekerja Migran Indonesia (PMI) Purna - Tahun 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `struktur_id` int(12) NOT NULL,
  `nomor` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`struktur_id`, `nomor`, `name`, `image`, `description`) VALUES
(2957, 1, 'Kornelis Hadun', 'PENGURUS61fa5fdb505fc.jpg', 'GM'),
(2964, 2, 'Eva Idayanti', 'PENGURUS62074224d60e2.jpg', 'OP'),
(2965, 3, 'Vina Triana Dewihadi', 'PENGURUS6207427b61848.jpg', 'SPV');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_periode` int(11) NOT NULL,
  `id_pokja` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_periode`, `id_pokja`, `id_surat`, `nomor`, `keterangan`, `image`, `tanggal`, `jenis`) VALUES
(13852, 82, 551, '004/PKJ-3/TP.PKK/VI/2021', 'Surat pendaftaran', 'SURAT60d69c4b73bc7.pdf', '2021-06-24', 'keluar'),
(13852, 81, 552, '009/PKJ-1/TP.PKK/VI/2021', 'Surat jalan delegasi ke lomba provinsi', 'SURAT60d6a62babc28.doc', '2021-06-21', 'keluar'),
(13852, 79, 554, '034/VC/TP.PKK/I/2021', 'Surat kedatangan ibu walikota', 'SURAT60d6b565024dc.png', '2021-06-28', 'masuk'),
(13852, 86, 556, '00715s27917', 'sd sd sd sd sd s s', 'SURAT60d6b71b2ee7a.jpg', '2021-06-26', 'masuk'),
(13852, 75, 557, '031/VC/TP.PKK/III/2025', 'Authorize', 'SURAT60d6b87883d12.pdf', '2021-06-26', 'masuk'),
(13851, 82, 558, '111/PKJ3/TP.PKK/III/2021', 'Surat Perizinan Menggunakan Kantor Desa', 'SURAT60d6c419e47bb.jpg', '2021-06-26', 'masuk'),
(13851, 79, 559, '008/PKJ-I/TP.PKK/III/2021', 'Undangan Acara Lomba PKK Kelurahan', 'SURAT60d6c1107a352.jpg', '2021-06-28', 'keluar'),
(13851, 75, 560, '002/PKK/TP-PKK/V/2021', 'Surat Keputusan Naik Jabatan', 'SURAT60d6c1b018f66.jpg', '2021-06-25', 'keluar'),
(13851, 82, 561, '048/PKJ3/TP.PKK/III/2021c', 'Surat Peminjaman Ruangan Rapat', 'SURAT60d6c45172206.jpg', '2021-06-26', 'masuk'),
(13851, 75, 563, '035/SRT/TP.PKK/III/2025', 'Sertifikat Kegiatan', 'SURAT60d6c4a9834d5.jpg', '2021-06-26', 'keluar'),
(13851, 86, 565, '034/PKJIV/TP.PKK/IX/2021', 'Surat delegasi', 'SURAT60d91331c0e6b.jpg', '2021-06-28', 'keluar'),
(13851, 75, 566, '054/TP.PKK/III/2025', 'Surat Keputusan Umum', 'SURAT60d9134c325bb.jpg', '2021-06-28', 'keluar'),
(13851, 75, 0, '001/SKRT/TP-PKK/II/2022', 'Surat Undangan Rapat', 'SURAT62119987aa7db.pdf', '2022-02-20', 'keluar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_request_file`
--

CREATE TABLE `t_request_file` (
  `REQUEST_ID` int(5) NOT NULL,
  `CD_RESIDENT` int(5) NOT NULL,
  `CD_RT` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TUJUAN` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `STATUS` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOTE` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATE_CREATED` date NOT NULL,
  `USER_CREATED` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FLAG_SUBMIT` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `DATE_APPROVAL` date DEFAULT NULL,
  `USER_APPROVAL` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_request_file`
--

INSERT INTO `t_request_file` (`REQUEST_ID`, `CD_RESIDENT`, `CD_RT`, `TUJUAN`, `STATUS`, `NOTE`, `DATE_CREATED`, `USER_CREATED`, `FLAG_SUBMIT`, `DATE_APPROVAL`, `USER_APPROVAL`) VALUES
(1, 68, '', 'DOC01', 'A', 'Nikahan', '2022-01-08', 'superadmin', 'Y', '2022-01-08', 'sugia'),
(2, 1, '', 'DOC01', 'A', 'SKCK', '2022-01-08', 'dewita', 'Y', '2022-02-15', 'superadmin'),
(3, 1, '', 'DOC01', 'A', 'perpanjang ktp', '2022-01-26', 'superadmin', 'Y', '2022-01-26', 'superadmin'),
(4, 10, '', 'DOC01', 'A', 'SURAT KETERANGAN KAWIN SIRI', '2022-02-12', 'superadmin', 'Y', '2022-02-12', 'superadmin'),
(5, 1, '', 'DOC01', 'A', 'mau kawin lagi pak rt', '2022-02-14', 'superadmin', 'Y', '2022-02-14', 'superadmin'),
(6, 50, '', 'DOC01', 'A', 'SKTM ', '2022-02-14', 'superadmin', 'Y', '2022-02-14', 'superadmin'),
(7, 2, '', 'DOC01', 'A', 'Mengurus KJP', '2022-02-18', 'superadmin', 'Y', '2022-02-20', 'superadmin'),
(8, 1, '', 'DOC01', 'O', 'keterangan ahliwaris', '2022-02-20', 'superadmin', 'Y', NULL, NULL),
(9, 103, '', 'DOC01', 'A', 'Surat Pengantar KUA', '2022-02-20', 'superadmin', 'Y', '2022-02-20', 'superadmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`) VALUES
(641, 'Superadministrator', 'superadmin@g.com', 'superadmin', '12345', 'superadmin'),
(655, 'Sapta Riswandy', 'sapta98@gmail.com', 'sapta', '123456', 'WRG'),
(656, 'Kornelis Hadun ', 'kornelis@gmail.com', 'kornelis', 'hadun', 'GM'),
(657, 'Eva Idayanti', 'eva@gmail.com', 'eva', 'idayanti', 'OP'),
(658, 'Dewita Nuryana', 'dewita@gmail.com', 'dewita', 'nuryana', 'OP'),
(659, 'Vina Triana Dewihadi', 'vinatriana@gmail.com', 'vina', '123456', 'SPV');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD UNIQUE KEY `slug_berita` (`slug_berita`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pokja` (`id_pokja`) USING BTREE;

--
-- Indeks untuk tabel `data_kas`
--
ALTER TABLE `data_kas`
  ADD PRIMARY KEY (`nomor`),
  ADD KEY `id_periode` (`id_periode`),
  ADD KEY `id_pokja` (`id_pokja`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Indeks untuk tabel `jenis_user`
--
ALTER TABLE `jenis_user`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`),
  ADD KEY `periode` (`periode`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`masukan_id`);

--
-- Indeks untuk tabel `m_gcm`
--
ALTER TABLE `m_gcm`
  ADD PRIMARY KEY (`NO_SR`);

--
-- Indeks untuk tabel `m_penduduk`
--
ALTER TABLE `m_penduduk`
  ADD PRIMARY KEY (`CD_RESIDENT`);

--
-- Indeks untuk tabel `m_treeacc`
--
ALTER TABLE `m_treeacc`
  ADD PRIMARY KEY (`ID_TREE`);

--
-- Indeks untuk tabel `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indeks untuk tabel `pokja`
--
ALTER TABLE `pokja`
  ADD PRIMARY KEY (`id_pokja`);

--
-- Indeks untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id_proker`);

--
-- Indeks untuk tabel `proker_utama`
--
ALTER TABLE `proker_utama`
  ADD PRIMARY KEY (`id_proker_utama`);

--
-- Indeks untuk tabel `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indeks untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`struktur_id`);

--
-- Indeks untuk tabel `t_request_file`
--
ALTER TABLE `t_request_file`
  ADD PRIMARY KEY (`REQUEST_ID`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masukan`
--
ALTER TABLE `masukan`
  MODIFY `masukan_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=526;

--
-- AUTO_INCREMENT untuk tabel `m_gcm`
--
ALTER TABLE `m_gcm`
  MODIFY `NO_SR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT untuk tabel `m_penduduk`
--
ALTER TABLE `m_penduduk`
  MODIFY `CD_RESIDENT` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `m_treeacc`
--
ALTER TABLE `m_treeacc`
  MODIFY `ID_TREE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1324;

--
-- AUTO_INCREMENT untuk tabel `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13854;

--
-- AUTO_INCREMENT untuk tabel `pokja`
--
ALTER TABLE `pokja`
  MODIFY `id_pokja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `proker`
--
ALTER TABLE `proker`
  MODIFY `id_proker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3849;

--
-- AUTO_INCREMENT untuk tabel `proker_utama`
--
ALTER TABLE `proker_utama`
  MODIFY `id_proker_utama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42742;

--
-- AUTO_INCREMENT untuk tabel `quote`
--
ALTER TABLE `quote`
  MODIFY `quote_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9332;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=941;

--
-- AUTO_INCREMENT untuk tabel `struktur`
--
ALTER TABLE `struktur`
  MODIFY `struktur_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2966;

--
-- AUTO_INCREMENT untuk tabel `t_request_file`
--
ALTER TABLE `t_request_file`
  MODIFY `REQUEST_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=660;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
