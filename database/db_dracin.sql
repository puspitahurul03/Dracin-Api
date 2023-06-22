-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 03:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dracin`
--

-- --------------------------------------------------------

--
-- Table structure for table `drachin`
--

CREATE TABLE `drachin` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `episode` varchar(5) NOT NULL,
  `tayang` varchar(100) NOT NULL,
  `produser` varchar(100) NOT NULL,
  `sinopsis` varchar(1000) NOT NULL,
  `gambar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drachin`
--

INSERT INTO `drachin` (`id`, `judul`, `genre`, `cast`, `episode`, `tayang`, `produser`, `sinopsis`, `gambar`) VALUES
(1, 'Put Your Head on My Shoulder', 'Comedy Romance', 'Lin Yi, Xing Fei, Tang Xiaotian,Zhou Junwei,Zheng Ying Chen', '24', 'WeTV,Netflix', 'Fang Fang', 'Put Your Head on My Shoulder bercerita tentang kisah cinta antara dua mahasiswa bernama Prapai (Kaimuk Nilawan) dan Phupa (New Thitipoom). Prapai baru saja memulai magang dan harus pindah ke rumah baru milik anak dari sahabat ibunya. Namun, tanpa sepengetahuan ibunya, rumah tersebut ternyata masih berpenghuni.', 'put.jpg'),
(2, 'Perfect Mismatch', 'Romance', 'Luo Zeng,Rain Lu,Lin Yan Rou,Ye Hao Ran,Dayuan Zhang ', '24', 'Viu', 'Shen Wen Shuai', 'Shi Hua Hua fokus mengambil jurusan pengobatan khas tiongkok. Di sisi lain, ia juga memiliki ketertarikan lebih dengan martial art. Suatu hari Shi Hua Hua tidak sengaja melukai Zhou Zhi Fei, karena hal inilah Shi Hua Hua harus merawat CEO dingin tersebut hingga mereka jatuh hati.', 'perfect.jpg'),
(3, 'Love O2O', 'Comedy Romance', 'Yang yang,Zheng Shuang,Bai yu,Mao Xiaotong', '30', 'Netflix,Vidio', 'Zhang Yibai', 'kisah cinta dari seorang gamer wanita bernama Bei Weiwei (Zheng Shuang). Kesukaannya dalam game membuatnya memiliki impian yang besar untuk menjadi seorang pembuat game online. Keahlian Weiwei dalam game membuat Xiao Nai (Yang Yang) menjadi tertarik dengan wanita itu.', 'love.jpg'),
(4, 'The Forbidden Flower', 'Age Gap, Cultural, Family, Melodrama, Romance', 'Rouhan Xu,Jerry Yan, Ma Si Chao, Huang Yi', '24', 'WeTV', 'Zhang Na', 'Mengisahkan romansa antara pria dewasa dengan gadis muda. Fokus utama pada tokoh He Ran, gadis muda yang berbakat melukis. Ia terpikat dengan pria dewasa bernama Xiao Han setelah tak sengaja bertemu di salon kecantikan.Bermula dari sinilah, He Ran mencoba memikat hati Xiao Han. Ia pun mendekati Xiao Han dan tak mempedulikan jarak usia jauh yang mana keduanya tampak lebih cocok jadi paman dan keponakan.', 'for.jpeg'),
(5, 'Meet Yourself', 'Drama Romance', 'Crystal Liu,Li Xian,Wu Qian,Hu Bingqing', '40', 'Viki', 'Ding Zi', 'Meet Yourself mengisahkan seorang wanita bernama Xu Hong Dou (Crystal Liu) yang bekerja di industri perhotelan. Ia menghabiskan sebagian umurnya untuk bekerja di tempat tersebut. Xu Hong Dou menjalani pekerjaannya baik-baik saja, hingga suatu hari teman baik Dou meninggal dunia.', 'mit.jpg'),
(6, 'Love is Sweet', 'Comedy Romance', 'Luo Yunxi,Bai lu,Riley Wang,Gao Hanyu', '36', 'iQIYI', 'Yang Bei,Wang Jing Jing', 'Drama Love Is Sweet mengisahkan tentang Jiang Jun, seorang gadis yang alergi terhadap air mata dan memiliki gelar ganda di bidang ekonomi dan psikologi. Dia tidak terkendali dan idealis karena latar belakang keluarganya yang superior.', 'lope.jpg'),
(7, 'Once We Got Married', 'Comedy Romance', 'Wang Ziqi,Wang Yuwen,lan Yi,Zhong Lili', '24', 'iQIYI,WeTV', 'Li Er Yun, Huang Xing, Liu Zhi Min, Duan Cui Han', 'Once We Got Married mengisahkan kehidupan Gu Xi Xi (Wang Yu Wen), seorang wanita umur 24 yang bekerja sebagai perancang busana pemula dan memiliki mimpi besar untuk memiliki label sendiri. Dia merupakan tipe perempuan yang cerdas nan mandiri. Xi Xi memiliki ibu kandung yang suportif dan penyayang.Sementara itu, Yin Si Chen (Wang Zi Qi), merupakan seorang pendiri sekaligus CEO dari Why Mall, retailer online fashion terbesar.', 'once.jpg'),
(8, 'Unforgettable Love', 'Romance', 'Miles Wei,Hu Yixuan,Sun Sincheng,Sheng Hui Zi', '24', 'iQIYI,Vidio', 'Tang Fan', 'Sinopsis Unforgettable Love berfokus pada kisah CEO bernama He Qiao Yan (Wei Zhe Ming)Ia dikenal sebagai pengusaha mudah sukses yang berhasil mengembangkan bisnis teknologi dengan nama Heshi Group.Di balik kesuksesannya sebagai pengusaha, ia dirumorkan menikah diam-diam dan memiliki anak.Namun, He Qiao Yan tidak pernah menampik rumor tersebut. Ia justru menampilkan anak laki-laki bernama He Wei Fei (Lennon Sun) atau Xiao Bao ke publik.', 'unfor.jpg'),
(9, 'The Untamed', 'Fantasy', 'Xiao Zhan,Wang Yibo,Wang Zhoucheng,Zheng Fanxing,Xuan Lu,Meng Ziyi', '50', 'weTV', 'Sun Huaizhong,Wang Xin', 'The Untamed mengisahkan kejadian 16 tahun lalu saat Wei Wuxian (Xiao Zhan) bersama dua saudaranya yang masih remaja, Jiang Cheng (Marius Wang) dan Jiang Yan Li (Lulu Xuan), mengunjungi Klan Gusu Lan untuk menerima pelatihan. Di sana, ia bertemu Lan Wangji (Wang Yibo) yang memiliki karakter bertolak belakang darinya.', 'untamed.jpg'),
(10, 'Till The End of The Moon', 'Romance,Fantasy', 'Luo Yunxi,Bai Lu,Chen Duling,Sun Zhenni,Dang Wei,Wang Yifei', '40', 'Netflix', 'Wang Yirong ,Zhou Jing, Xin Weimin', 'Drama TILL THE END OF THE MOON ini mengambil latar belakang era ketika iblis berkuasa, mereka adalah tuan dari para pembudidaya dan orang-orang tercela. Sehingga, para tetua kultivator menganggap perlu untuk mengirim seseorang kembali ke masa lalu.Hal ini untuk menentukan asal usul raja iblis dan untuk mencegah kebangkitannya. Dan Li Su Su menerima misi tersebut. Dia bertekad untuk menghancurkan Tantai Jin, yang di masa depan akan membantai banyak orang. Tapi sebagai saksi kehidupan masa lalu, sebuah kisah tak terduga muncul, yang memperumit pencariannya.', 'till.jpg'),
(19, 'asklsklaks', 'slaslamsams', 'a,mams,am', '90', 'iQIYI', 'Manusia', 'Malin seorang anak yang tidak mau mengakui ibunya', 'asd.jpg'),
(20, 'Hantu jembatan ancol', 'Horror', 'Hantu', '10', 'indosiar', 'Manusia', 'disini ada setan', 'perfect.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drachin`
--
ALTER TABLE `drachin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drachin`
--
ALTER TABLE `drachin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
