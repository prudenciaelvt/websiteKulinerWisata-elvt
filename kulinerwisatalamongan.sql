-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 02:39 AM
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
-- Database: `kulinerwisatalamongan`
--

-- --------------------------------------------------------

--
-- Table structure for table `display_tbl`
--

CREATE TABLE `display_tbl` (
  `judul` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `display_tbl`
--

INSERT INTO `display_tbl` (`judul`, `image_url`, `deskripsi`) VALUES
('Soto Lamongan', 'img/sotoLamongan.jpg', 'Soto Lamongan dikenal sebagai salah satu soto paling gurih karena memiliki ciri khas taburan koya udang yang tidak dimiliki oleh soto lainnya. Mungkin cita rasa inilah yang membuat Soto Lamongan disukai banyak orang di Indonesia.'),
('Wisata Bahari Lamongan', 'img/wbl.jpg', 'WBL adalah wisata bahari yang terletak di Kecamatan Paciran, Kabupaten Lamongan, Jawa Timur. WBL sangat direkomendasikan untuk wisatawan yang ingin menikmati wahana, wisata keluarga, dan pantai dalam satu kawasan dengan fasilitas yang memadai.');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_tbl`
--

CREATE TABLE `sejarah_tbl` (
  `judul` varchar(500) DEFAULT NULL,
  `image_url` varchar(500) NOT NULL,
  `image_name` varchar(500) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sejarah_tbl`
--

INSERT INTO `sejarah_tbl` (`judul`, `image_url`, `image_name`, `deskripsi`) VALUES
('Sejarah Singkat Lamongan', 'img/sejarah.jpg', 'Foto Lamongan 1946', '           Dulu Lamongan merupakan Pintu Gerbang ke Kerajaan Kahuripan,\r\n            Kerajaan Panjalu, Kerajaan Jenggala, Kerajaan Singosari atau\r\n            Kerajaan Mojopahit, berada di Ujung Galuh, Canggu dan kambang Putih\r\n            ( Tuban). Setelah itu tumbuh pelabuhan Sedayu Lawas dan Gujaratan\r\n            (Gresik), merupakan daerah amat ramai, sebagai penyambung hubungan\r\n            dengan Kerajaan luar Jawa bahkan luar Negeri.\r\n\r\n            Zaman Kerajaan Medang Kamulan di Jawa Timur, Di Lamongan berkembang\r\n            Kerajaan kecil Malawapati ( kini dusun Melawan desa Kedung Wangi\r\n            kecamatan Sambeng ) dipimpin Raja Agung Angling darma dibantu Patih\r\n            Sakti Batik Maadrim termasuk kawasan Bojonegoro kuno. Saat ini masih\r\n            tersimpan dengan baik, Sumping dan Baju Anglingdarma didusun\r\n            tersebut. Di sebelah barat berdiri Kerajaan Rajekwesi di dekat kota\r\n            Bojonegoro sekarang. Pada waktu Kerajaan Majapahit dipimpin Raja\r\n            Hayam Wuruk (1350 -1389) kawasan kanan kiri Bengawan Solo menjadi\r\n            daerah Pardikan. Merupakan daerah penyangga ekonomi Mojopahit dan\r\n            jalan menuju pelabuhan Kambang Putih. Wilayah ini disebut Daerah\r\n            Swatantra Pamotan dibawah kendali Bhre Pamotan atau Sri Baduga\r\n            Bhrameswara paman Raja Hayam Wuruk ( Petilasan desa Pamotan\r\n            kecamatan Sambeng ), sebelumnya. Di bawah kendali Bhre Wengker (\r\n            Ponorogo ). Daerah swatantra Pamotan meliputi 3 kawasan pemerintahan\r\n            Akuwu , meliputi Daerah Biluluk (Bluluk) Daerah Tenggulunan\r\n            (Tenggulun Solokuro) , dan daerah Pepadhangan (Padangan Bojonegoro).\r\n\r\n              Menurut buku Negara Kertagama telah berdiri pusat pengkaderan para\r\n              cantrik yang mondok di Wonosrama Budha Syiwa bertempat di Balwa\r\n              (desa Blawi Karangbinangun) , di Pacira ( Sendang Duwur Paciran),\r\n              di Klupang (Lopang Kembangbahu) dan di Luwansa ( desa Lawak\r\n              Ngimbang). Desa Babat kecamatan Babat ditengarahi terjadi perang\r\n              Bubat, sebab saat itu babat salah satu tempat penyeberangan\r\n              diantar 42 temapt sepanjang aliran bengawan Solo. Berita ini\r\n              terdapat dalam Prasasti Biluluk yang tersimpan di Musium Gajah\r\n              Jakarta, berupa lempengan tembaga serta 39 gurit di Lamongan yang\r\n              tersebar di Pegunungan Kendeng bagian Timur dan beberapa temapt\r\n              lainnya. Menjelang keruntuhan Mojopahit tahun 1478M, Lamongan saat\r\n              itu dibawah kekuasaaan Keerajaan Sengguruh (Singosari) bergantian\r\n              dengan Kerajaan Kertosono (Nganjuk) dikenal dengan kawasan Gunung\r\n              Kendeng Wetan diperintah oleh Demung, bertempat disekitar Candi\r\n              Budha Syiwa di Mantup. Setelah itu diperintah Rakrian Rangga\r\n              samapi 1542M ( petilasan di Mushalla KH.M.Mastoer Asnawi kranggan\r\n              kota Lamongan ). Kekuasaan Mojopahit di bawah kendali Ario Jimbun\r\n              (Ariajaya) anak Prabu Brawijaya V di Galgahwangi yang berganti\r\n              Demak Bintoro bergelar Sultan Alam Akbar Al Fatah ( Raden Patah )\r\n              1500 sampai 1518, lalu diganti anaknya, Adipati Unus 1518 sampai\r\n              1521 M , Sultan Trenggono 1521 sampai 1546 M. Dalam mengembangkan\r\n              ambisinya, sultan Trenggono mengutus Sunan Gunung Jati ( Fatahilah\r\n              ) ke wilayah barat untuk menaklukkan Banten, Jayakarta,\r\n              danCirebon. Ke timur langsung dpimpin Sultan sendiri menyerbu\r\n              Lasem, Tuban dan Surabaya sebelum menyerang Kerajaan Blambangan (\r\n              Panarukan). Pada saat menaklukkan Surabaya dan sekitarnya,\r\n              pemerintahan Rakryan Rangga Kali Segunting ( Lamong ), ditaklukkan\r\n              sendiri oleh Sultan Trenggono 1541 . Namun tahun 1542 terjadi\r\n              pertempuran hebat antara pasukan Rakkryan Kali Segunting dibantu\r\n              Kerajaan sengguruh (Singosari) dan Kerajaan Kertosono Nganjuk\r\n              dibawah pimpinan Ki Ageng Angsa dan Ki Ageng Panuluh, mampu\r\n              ditaklukkan pasukan Kesultanan Demak dipimpin Raden Abu Amin,\r\n              Panji Laras, Panji Liris. Pertempuran sengit terjadi didaerah\r\n              Bandung, Kalibumbung, Tambakboyo dan sekitarnya. Tahun 1543M,\r\n              dimulailah Pemerintahan Islam yang direstui Sunan Giri III, oleh\r\n              Sultan Trenggono ditunjuklah R.Abu Amin untuk memimpin Karanggan\r\n              Kali Segunting, yang wilayahnya diapit kali Lamong dan kali Solo.\r\n              Wilayah utara kali Solo menjadi wilayah Tuban, perdikan Drajat,\r\n              Sidayu, sedang wilayah selatan kali Lamong masih menjadi wilayah\r\n              Japanan dan Jombang. Tahun 1556 M R.Abu Amin wafat digantikan oleh\r\n              R.Hadi yang masih paman Sunan Giri III sebagai Rangga Hadi 1556\r\n              -1569M Tepat hari Kamis pahing 10 Dzulhijjah 976H atau bertepatan\r\n              26 mei 1569M, Rangga Hadi dilantik menjadi Tumenggung Lamong\r\n              bergelar Tumenggung Surajaya ( Soerodjojo) hingga tahun 1607 dan\r\n              dimakamkan di Kelurahan Tumenggungan kecamatan Lamongan dikenal\r\n              dengan Makam Mbah Lamong. Tanggal tersebut dipakai sebagai Hari\r\n              Jadi Lamongan. Setelah Indonesia Merdeka 17 Agustus 1945, daerah\r\n              Lamongan menjadi daerah garis depan melawan tentara pendudukan\r\n              Belanda, perencanaan serangan 10 Nopember Surabaya juga dilakukan\r\n              Bung Tomo dengan mengunjungi dulu Kyai Lamongan dengan pekikan\r\n              khas pembakar semangat Allahu Akbar. Lamongan yang dulunya daerah\r\n              miskin dan langganan banjir, berangsur-angsur bangkit menjadi\r\n              daerah makmur dan menjadi rujukan daerah lain dalam pengentasan\r\n              banjir. Dulu ada pameo “Wong Lamongan nek rendeng gak iso ndodok,\r\n              nek ketigo gak iso cewok” tapi kini diatasi dengan semboyan dari\r\n              Sunan Drajat, Derajate para Sunan dan Kyai “Memayu Raharjaning\r\n              Praja” yang benar benar dilakukan dengan perubahan mendasar, dalam\r\n              memsejahterahkan rakyatnya masih memegang budaya kebersamaan\r\n              saling membantu sesuai pesan kanjeng Sunan Drajat “Menehono mangan\r\n              marang wong kangluwe, menehono paying marang wong kang kudanan ,\r\n              menehono teken marang wong kang wutho, menehono busaono marang\r\n              wong kang wudho” Kabupaten Lamongan yang kini dikomandani H.Masfuk\r\n              sebagai Bupati periode ke 2 dan H.Tsalis Fahmi sebagai wakil\r\n              Bupati melejit bagaikan Sulapan dengan terobosannya yang menjadi\r\n              perbincangan Nasional. Yang menonjol selama ini menjadi Ikon\r\n              Wisata Bahari Lamongan (Lamongan Ocean Tourism Ressort), Lamongan\r\n              Integrated Sharebased, Proyek Pelabuhan Rakyat, dan Proyek\r\n              Lapangan Terbang dan Eksplorasi minyak Balong Wangi\r\n              Sarirejo,memungkinkan datangnya investasi baik dari dalam negeri\r\n              maupun investor luar negeri. Dengan tangan dinginnya PKL ditata\r\n              rapi, Kelancara jalan desa dan pengairan ditata sedemikian rupa,\r\n              termasuk memberikan Bea siswa bagi siswa dan mahasiswa berprestasi\r\n              yang ekonominya kurang beruntung, dan nantinya jika telah\r\n              menyelesaikan studynya bisa kembali dan menyumbangkan pikiran dan\r\n              kemampuannya demi kemajuan Lamongan. Kegiatan HJL kali ini juga\r\n              dumeriahkan oleh Dewan Kesenian Lamongan (DKL) parade Teater dan\r\n              Pameran Senirupa kerja sama dengan STKW Surabaya di gedung\r\n              Nusantara 3. Pemuda pemudi dan Warga sekitar bisa menikmati\r\n              sandiwara dan drama yang dipersembahkan oleh DKL bekerja sama\r\n              dengan Sanggar Wiyata Putra dan Sanggar Budaya Bapak Suprapto\r\n              Lemahputro, Gresik. Kepala Bidang Pembinaan Seni Budaya Dinas\r\n              Kebudayaan dan Pariwisata Kabupaten Lamongan Cak Zaini Adhi\r\n              Jatmiko dalam sambutannya di Gedung Wijaya Kusuma Lamongan\r\n              menyampaikan bahwa kegiatan semacam ini akan selalu diadakan dan\r\n              akan di tingkatkan lagi jika ada dukungan dari berbagai pihak,\r\n              sebab seni budaya adalah salah satu alat sosialisasi dan\r\n              pendidikan yang efektif, dengan kegiatan ini diharapkan akan\r\n              muncul tokoh tokoh seni di Lamongan khususnya, yang berpotensi dan\r\n              bertalenta.');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id_user`, `username`, `email`, `password`, `user_type`) VALUES
(9, 'elva', 'cekdata@gmail.com', 'a8f5f167f44f4964e6c998dee827110c', 'admin'),
(10, 'dea', 'deaeka@gmail.com', 'a8f5f167f44f4964e6c998dee827110c', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `wisata_tbl`
--

CREATE TABLE `wisata_tbl` (
  `Id_wisata` varchar(11) NOT NULL,
  `nama_wisata` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `harga_tiket` varchar(100) NOT NULL,
  `google_maps_url` varchar(255) NOT NULL,
  `garis_lintang` varchar(100) NOT NULL,
  `garis_bujur` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wisata_tbl`
--

INSERT INTO `wisata_tbl` (`Id_wisata`, `nama_wisata`, `deskripsi`, `lokasi`, `image_url`, `harga_tiket`, `google_maps_url`, `garis_lintang`, `garis_bujur`, `created_at`) VALUES
('W001', 'Pantai Lorena', 'Pantai Lorena diambil dari singkatan bahasa Jawa, yaitu “Lore Nanjan,” yang artinya “sebelah utara Dusun Penanjan.” Pantai ini memiliki pesisir sekitar satu kilometer dengan bentuk yang menyerupai laguna. Lokasinya sering menjadi persinggahan bagi para pengendara dari luar kota yang melewati kawasan ini atau yang akan menuju WBL maupun Maharani Zoo.\r\n\r\nWisata alam Pantai Lorena Lamongan menawarkan spot menarik dengan pasir putih yang bersih. Karang-karang yang indah dan airnya yang jernih seperti kristal siap memanjakan siapa saja yang mengunjungi pantai ini. Jarak dari pusat kota Lamongan ke Pantai Lorena sekitar 44 kilometer jika menggunakan kendaraan.\r\n\r\nNikmati liburan yang menyenangkan di Lamongan dengan menjelajahi destinasi wisata pantai terbaiknya, yaitu Pantai Lorena!', 'Jl. Raya Paciran', 'img/pantaiLorena.jpg', '5000', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4044.408792619408!2d112.3483297359544!3d-6.869486063155875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77c21403672c4d%3A0x5f39517d34c5fb1d!2sPantai%20Lorena!5e0!3m2!1sid!2sid!4v1717400338464!', '-6.8693146636502425', '112.35091974900433', '2024-06-02 09:00:25'),
('W002', 'Alun-Alun Lamongan', 'Alun-Alun Lamongan merupakan salah satu destinasi tempat wisata di kota Lamongan yang sangat populer. Area seluas 2,3 hektar ini menjadi pusat kegiatan masyarakat setempat untuk melakukan berbagai aktivitas. Di kawasan alun-alun banyak terdapat wahana permainan untuk anak-anak. Ada juga beragam spot foto estetik yang layak untuk Anda bagikan di media sosial. Fasilitas alun-alunnya juga sangat lengkap. Jika akhir pekan Anda belum menentukan hendak pergi ke mana, datang ke alun-alun adalah pilihan tepat. Di sini, anak-anak bisa bermain sepuasnya begitu juga dengan orang tua yang bisa berbelanja murah dan kulineran. Di lokasi ini juga terdapat sebuah pesawat patroli udara yang dijadikan monumen. Pesawat dengan nomor lambung P. 086 N 2255 ini biasanya digunakan masyarakat untuk berfoto–foto sebagai background. Pesawat yang sudah tidak beroperasi itu sengaja dijadikan sebagai monumen di Alun-Alun Lamongan agar menarik perhatian.', 'Jl. Lamongrejo, Tumenggungan', 'img/alonalon.jpg', '0', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.0486855508816!2d112.4156448!3d-7.1203566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77f0b2f360079f%3A0x8fd4797dc49fa630!2sTaman%20Alun-Alun%20Kota%20Lamongan!5e0!3m2!1sid!2sid!4v1717400', '-7.120143882199239', '112.41563916188117', '2024-06-02 09:00:25'),
('W003', 'Maharani Zoo dan Goa', 'Maharani Zoo dan Goa merupakan tempat wisata yang lengkap dengan sejumlah wahan edukasi ini merupakan lokasi yang cocok jadi alternatif jalan-jalan di akhir pekan. Khususnya bagi mereka yang ingin mencari tempat wisata adem bernuansa hutan. Wisata ini berada di Jalan Raya Paciran, Kecamata Paciran, Kabupaten Lamongan, Jawa Timur. Lokasinya cukup strategis karena berada tepat di muka jalan raya yang menghubungkan antara Gresik-Tuban via pantai utara Lamongan. Maharani Zoo dan Goa berada di atas tanah seluas 3,5 hektar. Di dalamnya terdapat taman satwa yang berisi beraneka macam hewan, koleksi binatang langka seperti orang utan, wallaby, jerapah, beruang madu, harimau putih hingga singa putih. Selain taman satwa, tempat ini juga dilengkapi dengan Museum dan Galery satwa yang berada dalam bangunan bergaya unik. Cocok untuk edukasi anak-anak mengenalkan mereka hewan-hewan purba. Maharani Zoo dan Goa punya sejumlah wisata unggulan, di antaranya wahana unggulan tempat wisata ini antara lain adalah Istana Bawah Laut, Gua Insectarium, Space Shuttle, Anjungan Wali Songo, Texas City, Paus Dangdut, Tembak Ikan, Rumah Kaca, serta Istana Bajak Laut.\n', 'Jl. Raya Paciran', 'img/maharanizoo.jpg', '35000', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1847021853773!2d112.3619918!3d-6.8684582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77c269574a4f6b%3A0x51f14da4d9d4dd1!2sMaharani%20Zoo%20%26%20Goa!5e0!3m2!1sid!2sid!4v1717416419525!5m2', '-6.8682359824314965 ', '112.36198476926737', '2024-06-02 09:30:10'),
('W004', 'Museum Sunan Drajat', 'Museum Sunan Dradjat adalah salah satu museum yang terkait dengan Wali Songo, para penyebar agama Islam di Pulau Jawa. Museum ini terletak di Kabupaten Lamongan, Jawa Timur. Banyak masyarakat yang ingin berziarah ke makam ini hingga saat ini. Pada awalnya, bangunan ini berfungsi sebagai tempat pendidikan atau penggemblengan para prajurit Santri Sunan Dradjat untuk Gedung Penjaga Keamanan Tanah Perdikan Dradjat. Saat ini, museum ini digunakan untuk menyimpan dan menginformasikan kepada masyarakat tentang sosok Sunan Dradjat, dengan tujuan agar masyarakat lebih mengenalnya.\r\n\r\nBeberapa koleksi yang terdapat pada Museum Sunan Dradjat antara lain:\r\n\r\nSingomengkok: Sebuah gamelan yang digunakan sebagai syiar agama Islam di daerah Paciran, Kecamatan Paciran. Gamelan ini ditabuh oleh para sahabat Sunan Drajat untuk mengiringi tembang Pangkur (Panguri Isine Qur’an) yang merupakan ciptaan Sunan Drajat. Ukiran Singo Mengkok (singa yang duduk dengan sikap siap menerkam) menghiasi gamelan ini. Kesenian ini merupakan akulturasi dari budaya Hindu/Buddha dan Islam, mengingat masyarakat sekitar adalah pemeluk agama Hindu. Nama gamelan ini, Singo Mengkok, melambangkan kearifan, kelembutan, nafsu, dan kesempurnaan manusia.\r\nBatik Drajat: Rangkaian motif dan perlambang flora dan fauna yang memiliki makna hubungan vertikal dan horizontal.\r\nDaun Lontar: Daun lontar berhuruf Jawa Baru yang berisi Surat Yusuf.', '498Q+6XM, Drajat, Kec. Paciran, Kabupaten Lamongan', 'img/museumdrajat.jpg', '2000', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0517623664223!2d112.3899264!3d-6.8844033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77e829b6581153%3A0xde672ab4e7bb2a63!2sSunan%20Drajat%20Special%20Museum!5e0!3m2!1sid!2sid!4v171741701', '-6.8841050584359005 ', '112.3897601029187', '2024-06-02 09:30:10'),
('W005', 'Masjid Namira', 'Masjid Jami\' Namira, lebih dikenal sebagai Masjid Namira, adalah sebuah masjid yang terletak di Jotosanur, Kec. Tikung, Kabupaten Lamongan. Masjid ini mengusung gaya arsitektur mewah seperti bangunan masjid di Timur Tengah. Masjid Namira memiliki daya tarik tersendiri dibandingkan masjid-masjid lain di Indonesia karena interiornya yang mewah dan terang, serta keberadaan kiswah Ka\'bah di mihrab imam. Kiswah Ka’bah di Masjid Namira Lamongan didatangkan langsung dari Masjidilharam di Arab Saudi. Bekas pelindung Ka’bah ini ditempel pada dinding mihrab imam dengan kaca tebal sebagai pelindungnya agar tidak sembarang disentuh oleh pengunjung. Masjid dengan nuansa seperti Masjidilharam ini memiliki berbagai fasilitas yang mirip dengan masjid Namirah di Arab Saudi. Masjid ini didirikan oleh sepasang pengusaha emas asal Lamongan bernama Helmy Riza dan istrinya, Eny Yuli Arifah, dan pertama kali dibuka untuk umum pada tanggal 1 Juni 2013.\r\n\r\nPada awalnya, masjid ini tidak terlalu besar, hanya menempati lahan sekitar 0,9 hektar dengan luas bangunan mencapai 1.100 meter persegi dan hanya dapat menampung 500 jamaah. Akan tetapi, lama kelamaan pengunjung masjid ini semakin banyak sehingga banyak jamaah yang tidak mendapatkan tempat parkir. Oleh sebab itu, masjid ini direnovasi hingga akhirnya selesai pada tanggal 2 Oktober 2016. Luas masjid setelah renovasi mencapai 2.750 meter persegi dengan menempati lahan sekitar 2,7 hektar dan dapat menampung 2.500 jamaah. Tak lama kemudian, selepas renovasi, masjid Namira menjadi lebih terkenal daripada sebelumnya. Hingga kini, masjid Namira tengah merencanakan pengadaan yayasan dan lembaga pendidikan bagi para pelajar dan mahasiswa.', 'Jl. Raya Mantup No.KM. 5, Sanur, Jotosanur, Kec. T', 'img/namira.jpg', '0', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.7679258058056!2d112.4087138!3d-7.152810000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77f77274d865a5%3A0xfa66dee67fbc8b00!2sMasjid%20Namira%20Lamongan!5e0!3m2!1sid!2sid!4v17174170', '-7.152554511773382 ', '112.40871916430817', '2024-06-02 09:30:10'),
('W006', 'Wisata Bahari Lamong', 'WBL, singkatan dari Wisata Bahari Lamongan, adalah destinasi yang memikat dengan keindahannya. Terletak di Kecamatan Paciran, tempat wisata ini dikelilingi oleh pantai-pantai yang mempesona, pemandangan yang luar biasa, dan fasilitas yang tak kalah menariknya dari yang sering kita lihat di televisi. Dikelola oleh PT Bumi Lamongan Sejati, WBL memiliki dua pemegang saham utama, yaitu Pemerintah Kabupaten Lamongan dan PT Bunga Wangsa Sejati. Berkat dukungan dari Pemerintah setempat, WBL mengalami perkembangan pesat. Dahulu dikenal sebagai Pantai Tanjung Kodok di jalur Pantura antara Tuban-Surabaya, kini bertransformasi menjadi WBL. Pengembangan terus dilakukan untuk menyajikan beragam pilihan wisata yang diinginkan oleh masyarakat.', 'Jl. Raya Paciran', 'img/wbl.jpg', '50000-110000', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506668.6718628593!2d112.29901845000002!3d-7.200963799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77c3505a57d187%3A0x1eb952764236c3c8!2sWisata%20Bahari%20Lamongan%20(WBL)!5e0!3m2!1sid!2', '-6.839153996397216 ', '112.35208207663356', '2024-06-02 09:30:10'),
('W007', 'Wego Lamongan', 'Wisata Wego Lamongan adalah sebuah destinasi wisata yang terletak di Kabupaten Lamongan. Tempat ini menawarkan pengalaman seru dengan berbagai atraksi air yang menyegarkan, seperti kolam renang dan waterpark. Selain itu, terdapat juga beragam wahana permainan yang cocok untuk keluarga dan anak-anak. Dikelola dengan baik, Wisata Wego menawarkan fasilitas yang lengkap dan hiburan yang menyenangkan bagi pengunjung dari berbagai kalangan.', 'Jl. Raya Waduk Gondang, Juwet, Deketagung, Kec. Su', 'img/wegoLamongan.jpg', '25000', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506668.6718628593!2d112.29901845000002!3d-7.200963799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77f5795171500b%3A0xc6a7509af91ced34!2sWego%20Lamongan!5e0!3m2!1sid!2sid!4v1717417179753', '-7.204275761467351', '112.28090046246471', '2024-06-02 09:30:10'),
('W008', 'Istana Gunung Mas 27', 'Wisata Istana Gunung Mas Lamongan merupakan destinasi populer di Kabupaten Lamongan. Tempat ini menawarkan pengalaman berlibur yang unik dengan nuansa alam pegunungan yang memukau. Pengunjung dapat menikmati panorama alam yang indah, serta menikmati berbagai wahana dan fasilitas rekreasi yang tersedia, seperti taman bermain, kolam renang, dan area piknik. Dikelola dengan baik, Wisata Istana Gunung Mas menjadi pilihan favorit bagi wisatawan yang mencari ketenangan dan keseruan di tengah keindahan alam.', 'Jl. Raya Mantup masuk gang depan, Bulu, Tugu, Kec.', 'img/gunungmas.jpg', '5000-10000', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7927884786686!2d112.35648119999999!3d-7.264407100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e781c3f76182473%3A0xaf32265cf15de8ad!2sIstana%20Gunung%20Mas%2027!5e0!3m2!1sid!2sid!4v1', '-7.264204888311902 ', '112.35647583550531', '2024-06-02 09:30:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `display_tbl`
--
ALTER TABLE `display_tbl`
  ADD PRIMARY KEY (`judul`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata_tbl`
--
ALTER TABLE `wisata_tbl`
  ADD PRIMARY KEY (`Id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
