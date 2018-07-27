-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 09:36 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytaska`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id_activity` int(222) NOT NULL,
  `id_taska` int(222) NOT NULL,
  `name_activity` varchar(222) NOT NULL,
  `date_activity` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id_activity`, `id_taska`, `name_activity`, `date_activity`) VALUES
(1, 35, 'Sport Day', '20 February 2017'),
(2, 35, 'Convocation Day', '12 April 2017'),
(3, 35, 'Visit Dominoz Factory', '4 Mei 2017'),
(4, 35, 'Visit Museum', '24 Jun 2017'),
(7, 35, 'Garden', '22 September 2017'),
(8, 92, 'memasak', '22 ogos 2017'),
(9, 50, 'Lawatan muzium', '11 September 2017');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id_announcement` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `id_taska` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id_announcement`, `name`, `id_taska`) VALUES
(3, 'Congratulation tu Shaha! Today is her day. Let celebrate her graduation in a big way.', 35),
(4, 'Please join us at kindergarten at 10 July 2017 2.p.m. to celebrate Alisha Birthday.', 50),
(5, 'Parent should pay the fee monthly at least 5 hb per month.', 35),
(8, 'parent need to pay fee before 7 th  every month\r\n', 92),
(15, 'lawatan ke dominoz pizzapada minggu hadapan bermula pada jam 8.30 pagi', 35);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

CREATE TABLE `attendance_records` (
  `id` int(11) NOT NULL,
  `id_taska` int(11) NOT NULL,
  `nama_pelajar` varchar(222) NOT NULL,
  `attendance_status` varchar(222) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`id`, `id_taska`, `nama_pelajar`, `attendance_status`, `dates`) VALUES
(1, 50, 'azri', 'absent', '2017-12-13'),
(2, 35, 'ad', 'absent', '2017-12-08'),
(3, 35, 'asd', 'absent', '2017-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `bapa`
--

CREATE TABLE `bapa` (
  `id_parent` int(88) NOT NULL,
  `id_bapa` int(88) NOT NULL,
  `ic_bapa` varchar(55) NOT NULL,
  `nama_bapa` varchar(88) NOT NULL,
  `umur_bapa` int(55) NOT NULL,
  `alamat_bapa` varchar(99) NOT NULL,
  `pekerjaan_bapa` varchar(88) NOT NULL,
  `phone_bapa` varchar(88) NOT NULL,
  `email_bapa` varchar(88) NOT NULL,
  `alamat_p_bapa` varchar(88) NOT NULL,
  `gaji_bapa` varchar(88) NOT NULL,
  `ic_ibu` varchar(55) NOT NULL,
  `nama_ibu` varchar(55) NOT NULL,
  `email_ibu` varchar(55) NOT NULL,
  `alamat_ibu` varchar(55) NOT NULL,
  `phone_ibu` varchar(55) NOT NULL,
  `pekerjaan_ibu` varchar(55) NOT NULL,
  `umur_ibu` varchar(55) NOT NULL,
  `alamat_p_ibu` varchar(55) NOT NULL,
  `gaji_ibu` varchar(55) NOT NULL,
  `nama_taska` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bapa`
--

INSERT INTO `bapa` (`id_parent`, `id_bapa`, `ic_bapa`, `nama_bapa`, `umur_bapa`, `alamat_bapa`, `pekerjaan_bapa`, `phone_bapa`, `email_bapa`, `alamat_p_bapa`, `gaji_bapa`, `ic_ibu`, `nama_ibu`, `email_ibu`, `alamat_ibu`, `phone_ibu`, `pekerjaan_ibu`, `umur_ibu`, `alamat_p_ibu`, `gaji_ibu`, `nama_taska`) VALUES
(1, 36, '950226123123', 'Yusfarhan', 22, 'kelantan', 'Ceo', '0199273377', 'yus@gmail.com', 'MyTaska Sdn. Bhd.', '2', '95022603568777', 'Hanna ', 'yus@gmail.com', 'kelantan', '0199115270', 'programmer', '20', 'Mytaska Sdn Bhd.', '312', ''),
(5, 39, '95022603659', 'yusfarhan', 22, 'kota bharu kelantan', '', '60199933966', 'yus@gmail.com', 'kuala lumpur', '7777', '93939493929', 'Siti', 'siti@gmail.com', 'kota bharu kelantan', '21093902', 'tiada', '22', 'kula lumpur', '2888', ''),
(6, 45, '39048593459', 'GDWYG', 37, 'GHFSHJEFHJG', 'adAWDAW', '34323423', 'yus@gmail.com', 'AWD WA DAW DAW ', '2323', '232323', 'awdaw', 'yus@gmail.com', 'GHFSHJEFHJG', '2432324234', 'SEFSEFSEF', '22', 'ESSEFSEF', '3433', ''),
(8, 47, '950226035676', 'add', 22, 'wdaad', 'sef', '60199933966', 'awdawd', 'sef', '', '95022603568777', 'drg', 'dgdr', 'wdaad', '4345', 'drg', '3', 'dgrgdr', '345', ''),
(9, 48, '934295890', 'sdfsf', 33, 'efsef', 'dfggd', '60199933966', 'efesf', 'sef', '234', '3245345345', 'fesse', 'SEFSEFSEF', 'efsef', '3252352', 'sfe', '23', 'sefewsf', '234', ''),
(10, 49, '9340959345094390', 'yus', 22, 'hdsjshbjsdbfhsbfhj', 'rewsffw', '32423423', 'yus@gmail.sd', 'fsesfsefs', '23423424', '32423424', 'wdsfse', 'yfsef@w.wesd', 'hdsjshbjsdbfhsbfhj', '2321312', 'sfefsefs', '22', 'sefsefse', '3424234', ''),
(11, 50, '456456456', 'drgdr', 34, 'rdgdr gdr gdr g', 'sfsefsef', '60199933966', 'yus@gmail.sd', 'fsefsefsef', '234234', '324523423423', 'wefsesf', 'sefsef', 'rdgdr gdr gdr g', '324423', 'esfsef', '33', 'fsesf', '3234', ''),
(12, 53, '9502260356877', 'farhan', 22, 'kelantan', 'php developer', '60199933966', 'farhan@gmail.com', 'cyberjaya', '4000', '960322034545', 'siti', 'siti@gmail.com', 'kelantan', '602932932', 'surirumah', '21', 'rumah', '2000', ''),
(13, 54, '95039349394', 'ahmad', 22, 'kelantan', 'guru', '60199933966', 'farhan@gmail.com', 'sekolah', '', '93949349', 'siti', 'siti@gmail.com', 'kelantan', '232', 'surirumah', '21', 'rumah', '2323', ''),
(14, 93, '923923940923', 'ali bin abu', 89, 'sjkadfhjsgbfhjk gshjr fgsehjk', 'hjkehfjdkashejfk', '923492304890', 'ukjhhfesujkhf', 'asefesrf', '', '324234', 'fsef', 'sefsef', 'sjkadfhjsgbfhjk gshjr fgsehjk', '23423423', 'adwdaw', '23', 'asefewfs', '214234', ''),
(15, 97, 'adawd', 'adw', 21, 'adwa', 'awdawd', '213123', 'dadaw', 'dawwd', '1312', '1312', 'awd', 'wadwd', 'adwa', '123123', 'dwada', '12', 'wdad', '1231', ''),
(16, 101, '4567', 'ahmad', 27, 'no 9', '', '60183964088', 'abc@gail', '', '', '1234', 'nur', 'asd@gba', 'no 9', '6018677465', '', '25', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bayaran`
--

CREATE TABLE `bayaran` (
  `id_bayar` int(11) NOT NULL,
  `id` int(222) NOT NULL,
  `id_bapa` int(99) NOT NULL,
  `nama_bapa` varchar(222) NOT NULL,
  `phone_bapa` varchar(99) NOT NULL,
  `email_bapa` varchar(222) NOT NULL,
  `jumlah_bayaran` varchar(99) NOT NULL,
  `kaedah_bayaran` varchar(99) NOT NULL DEFAULT 'Paypal',
  `akaun_bank` varchar(99) NOT NULL,
  `no_rujukan` varchar(99) NOT NULL,
  `t_bayaran` varchar(222) NOT NULL,
  `salinan_resit1` varchar(99) NOT NULL,
  `salinan_resit2` varchar(99) NOT NULL,
  `salinan_resit3` varchar(99) NOT NULL,
  `status` varchar(99) NOT NULL,
  `id_taska` int(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayaran`
--

INSERT INTO `bayaran` (`id_bayar`, `id`, `id_bapa`, `nama_bapa`, `phone_bapa`, `email_bapa`, `jumlah_bayaran`, `kaedah_bayaran`, `akaun_bank`, `no_rujukan`, `t_bayaran`, `salinan_resit1`, `salinan_resit2`, `salinan_resit3`, `status`, `id_taska`) VALUES
(81, 0, 39, 'yusfarhan', '60199933966', '', '121', 'Cash Deposit Machine', 'MALAYAN BANKING BERHAD  (5660201000030)', 'reww1111', 'Wednesday 20 December 2017', 'screenshot.png', '', '', 'Verified', 35),
(105, 0, 39, 'YUS FARHAN', 'Fee Kindergarten', 'parent@mytaska.com', '300.00', 'Paypal', '', '60N27208431713530', '2017-12-26T06:10:57Z', '', '', '', '', 35),
(106, 0, 39, 'YUS FARHAN', 'Fee Kindergarten', 'parent@mytaska.com', '450.00', 'Paypal', '', '6MA67093T1954331C', '2017-12-26T06:12:47Z', '', '', '', 'Verified', 35),
(107, 0, 39, 'yusfarhan', 'Fee Kindergarten', 'parent@mytaska.com', '300.00', 'Paypal', '', '6A9084918G193502C', '2017-12-26T06:19:56Z', '', '', '', 'Verified', 35),
(108, 0, 93, 'ali bin abu', 'Fee Kindergarten', 'parent@mytaska.com', '150.00', 'Paypal', '', '6JR15122GC339491F', '2017-12-26T06:22:39Z', '', '', '', 'Verified', 35),
(109, 0, 101, 'ahmad', '601083964088', '', '20', 'Bayaran Melalui Kaunter Bank', 'MALAYAN BANKING BERHAD  (5660201000030)', 's3s22w2ses2', 'Wednesday 27 December 2017', 'Picture1.png', '', '', 'In Processing', 35),
(110, 0, 101, 'ahmad', '60183964088', '', '22', 'Cheque Deposit Machine', 'MALAYAN BANKING BERHAD  (5660201000030)', 'wad21s2', 'Wednesday 27 December 2017', 'Picture1.png', '', '', 'In Processing', 35),
(111, 0, 101, 'ahmad', 'Fee Kindergarten', 'parent@mytaska.com', '150.00', 'Paypal', '', '5JE510345U5175359', '2017-12-27T04:02:53Z', '', '', '', 'Verified', 35),
(112, 0, 54, 'ahmad', 'Fee Kindergarten', 'parent@mytaska.com', '150.00', 'Paypal', '', '1KG2472430640011S', '2017-12-27T07:19:46Z', '', '', '', 'Verified', 50),
(113, 0, 54, 'ahmad', 'Fee Kindergarten', 'parent@mytaska.com', '450.00', 'Paypal', '', '8A3953006P7922055', '2017-12-27T07:22:18Z', '', '', '', 'Verified', 50),
(114, 0, 54, 'ahmad', '60199933966', '', '12', 'Cheque Deposit Machine', 'MALAYAN BANKING BERHAD  (5660201000030)', 'h54e', 'Wednesday 27 December 2017', '4679.jpg', '', '', 'Verified', 50);

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(222) NOT NULL,
  `id_staf` int(222) NOT NULL,
  `id_taska` int(222) NOT NULL,
  `nama_staf` varchar(222) NOT NULL,
  `sebab_cuti` varchar(222) NOT NULL,
  `jenis_cuti` varchar(222) NOT NULL,
  `no_of_days` varchar(222) NOT NULL,
  `start_date` varchar(222) NOT NULL,
  `end_date` varchar(222) NOT NULL,
  `status` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_staf`, `id_taska`, `nama_staf`, `sebab_cuti`, `jenis_cuti`, `no_of_days`, `start_date`, `end_date`, `status`) VALUES
(1, 1, 35, 'siti', 'anak sakit', 'cuti sakit', '1', '10/12/2017', '10/12/2017', 'Pending'),
(2, 2, 35, 'ahmad', 'anak sakit', 'cuti tanpa gaji', '8', '10/12/2017', '19/12/2017', 'Reject'),
(3, 1, 35, 'Siti', 'sakit', 'cuti sakit', '2', '10/12/2017', '10/12/2017', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(55) NOT NULL,
  `tarikh_kemaskini` date NOT NULL,
  `nama_kelas` varchar(55) NOT NULL,
  `nama_guru` varchar(55) NOT NULL,
  `nama_ppm` varchar(55) NOT NULL,
  `sesi` varchar(55) NOT NULL,
  `tahun` year(4) NOT NULL,
  `integrasi` varchar(55) NOT NULL,
  `kapasiti` int(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `tahun_mula_operasi` year(4) NOT NULL,
  `lokasi_kelas` varchar(55) NOT NULL,
  `catatan` varchar(55) NOT NULL,
  `id_taska` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `tarikh_kemaskini`, `nama_kelas`, `nama_guru`, `nama_ppm`, `sesi`, `tahun`, `integrasi`, `kapasiti`, `status`, `tahun_mula_operasi`, `lokasi_kelas`, `catatan`, `id_taska`) VALUES
(46, '0000-00-00', 'asd', 'ASdasd', 'asd', 'asdasd', 0000, '', 222, '', 2002, '', 'ADawd', 50),
(47, '0000-00-00', 'hebat', 'aminah', 'eq', 'Petang', 0000, 'Tidak', 22, '', 0000, '', 'qwe', 35),
(49, '0000-00-00', 'ads', 'zdzsd', '', 'Pagi', 0000, 'Ya', 22, '', 0000, '', 'zwdwd', 35);

-- --------------------------------------------------------

--
-- Table structure for table `kewangan`
--

CREATE TABLE `kewangan` (
  `id_kewangan` int(222) NOT NULL,
  `tarikh` varchar(222) NOT NULL,
  `nama` varchar(222) NOT NULL,
  `reference` varchar(222) NOT NULL,
  `duit_keluar` varchar(222) NOT NULL,
  `image` varchar(222) NOT NULL,
  `id_taska` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kewangan`
--

INSERT INTO `kewangan` (`id_kewangan`, `tarikh`, `nama`, `reference`, `duit_keluar`, `image`, `id_taska`) VALUES
(2, '9 nov 2017', 'beli tv', 'ad211321', '20', 'upload/CARI TANAMAN YANG CEPAT TUMBUH.jpeg', 0),
(3, '10 nov 2017', 'spary racun', 'ka233223', '200', 'upload/delivery-img2.jpg', 0),
(5, '10 nov 2017', 'beli sabun', 'j21k3123', '10', 'upload/delivery-img2.jpg', 0),
(12, '', '', '', '', 'user.jpg', 0),
(13, '', '', '', '', 'user.jpg', 0),
(14, '', '', '', '', 'user.png', 0),
(15, 'Wednesday 20 December 2017', 'biasa jeeeee', 'k555', '1000', 'thumbs-up.png', 35),
(16, 'Wednesday 20 December 2017', 'bli susu bayi', 's222', '40', 'screenshot.png', 35);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id_material` int(11) NOT NULL,
  `id` int(222) NOT NULL,
  `name_material` varchar(222) NOT NULL,
  `detail` varchar(222) NOT NULL,
  `advantage` varchar(222) NOT NULL,
  `picture` varchar(222) NOT NULL,
  `link` varchar(222) NOT NULL,
  `id_taska` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id_material`, `id`, `name_material`, `detail`, `advantage`, `picture`, `link`, `id_taska`) VALUES
(12, 50, 'CARI TANAMAN YANG CEPAT TUMBUH', 'Kanak-kanak mudah hilang minat sekiranya apa yang mereka lakukan tidak menunjukkan sebarang tindakbalas. Jadi sebaiknya ibu bapa membelikan mereka tanaman yang cepat tumbuh dan tidak mengambil tempoh yang lama untuk membes', 'Mereka juga akan lebih menghargai usaha sendiri dan dapat memupuk sifat murni seperti sayang akan alam sekitar.', 'upload/CARI TANAMAN YANG CEPAT TUMBUH.jpeg', 'https://siraplimau.com/5-sebab-aktiviti-berkebun-bagus-untuk-kanak-kanak/', 35),
(13, 36, 'PILIH TANAMAN YANG BERGUNA', 'Cuba tanam tumbuhan yang boleh dimakan atau dimanfaatkan. Kanak-kanak akan menjadi lebih seronok sekiranya mereka mendapat hasil daripada tanaman tersebut. Lebih-lebih lagi mereka yang tanam sendiri.  Ibu bapa digalakkan m', 'Kanak-kanak selalunya tidak suka makan sayur, mungkin selepas mereka menanam sayur sendiri, mereka akan lebih berminat untuk makan sayur tersebut.', 'upload/Brother-and-Sister-Gardening-copy-1024x683.jpg', 'https://siraplimau.com/5-sebab-aktiviti-berkebun-bagus-untuk-kanak-kanak/', 50),
(14, 36, 'IKAT BENANG', 'Kanak-kanak akan melalui tali-tali tersebut serta mengelak daripada terkena tali-tali itu.  Konon-konon macam nak lepaskan diri dari laser yang berbahaya', 'Mereka akan berfikir cara untuk mengatasinya.', 'upload/mainan-diy-murah-menarik-03.jpg', 'https://siraplimau.com/10-mainan-diy-anak-menarik-murah-rm10/', 35),
(15, 36, 'Permainan Jenis â€œShape Sorting â€œ', 'Ada banyak jenis permainan untuk â€œShape Sorting â€œ.\r\nAntara yang sesuai untuk bayi berusia 6 bulan sehingga 2 tahun ialah\r\nBRILLIANT BASICS BABYâ€™S FIRST BLOCKS.', 'Kelebihan Blok jenis ini ialah boleh main lebih lama dan tak bosan dengan satu aktiviti sahaja. Selain boleh rangsang otak dalam mengenal pasti shapes, benda ni jugak boleh enhance kreativiti anak dalam construct castle da', 'upload/permainanbayi9.jpg', '', 35),
(16, 0, 'bermain', 'bermain adalah bagus untuk kesihartan.. luang masa bersam anak semasa cuti ', 'masa lapang anak2 terisis semasa cuti', 'upload/delivery-img2.jpg', '', 92);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(222) NOT NULL,
  `id_taska` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `details` varchar(222) NOT NULL,
  `dates` varchar(222) NOT NULL,
  `pictures` varchar(222) NOT NULL,
  `link` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `id_taska`, `title`, `details`, `dates`, `pictures`, `link`) VALUES
(3, 35, 'Sexually Abused Students Along With Another Man, MP Birla School Staff Allegedly Tells Police', 'KOLKATA:  A non-teaching staff member of a prominent Kolkata school, the MP Birla Foundation, arrested last night for sexual abuse of a kindergarten student in September, has said that he and another non-teaching staff mem', '27 December 2017', 'upload/mp-birla-accused-650_650x400_61512485653.jpg', 'https://www.ndtv.com/kolkata-news/sexually-abused-students-along-with-another-man-mp-birla-school-staff-allegedly-tells-police-1783995'),
(5, 35, ' Chinese Teacher Used Needles To \'Discipline\' Children: Police', 'BEIJING, CHINA:  A Beijing kindergarten teacher used sewing needles to punish children for not sleeping, police said, but other abuse claims have been rejected by an investigation into a scandal that sparked national outra', '22 September 2017', 'upload/beijing-kindergarten-afp_650x400_41511935815.jpg', 'https://www.ndtv.com/world-news/chinese-teacher-used-needles-to-discipline-children-police-1781304'),
(6, 35, 'Need A Kindergarten Spot In Mongolia? Play The Lottery', 'ULAANBAATAR, MONGOLIA:  Mongolia\'s baby boom is pushing its schools to breaking point, with desperate parents facing the stark choice of relying on a lottery system or paying for pricey private classes in capital Ulaanbaat', '22 September 2017', 'upload/mongolia-kids-afp_650x400_71506605533.jpg', 'https://www.ndtv.com/world-news/need-a-kindergarten-spot-in-mongolia-play-the-lottery-1756462'),
(7, 50, 'Kindergarten teacher in Kajang arrested for abusing student ', 'PETALING JAYA: A kindergarten teacher was arrested for abusing her four-year-old student in class.\r\n\r\nThe teacher, 19, had allegedly slapped her student on both sides of her face on Tuesday (Oct 31) until she bled from her', '11 september 2017', 'upload/child abuse crime.jpg', ' https://www.thestar.com.my/news/nation/2017/11/03/kindergarten-teacher-in-kajang-arrested-for-abusing-student/#wc0rtfhCAzt5SRS0.99'),
(8, 50, 'China child abuse claims: kindergarten company reveals more complaints', 'The major company whose kindergarten in Beijing is under investigation over child abuse allegations, has said it is aware of more complaints by parents at some of its schools elsewhere in China.\r\n\r\nThe comments from compan', '11 september 2017', 'upload/4679.jpg', 'https://www.theguardian.com/world/2017/nov/30/china-child-abuse-claims-kindergarten-company-ryb-education-more-complaints');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(6) NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `createdtime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `id_pelajar` int(11) NOT NULL,
  `id_bapa` int(88) NOT NULL,
  `id` int(222) NOT NULL,
  `nama_pelajar` varchar(50) NOT NULL,
  `tarikh_lahir` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `umur` int(50) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `no_sijil` varchar(50) NOT NULL,
  `tempat_taska_sebelum` varchar(50) NOT NULL,
  `darah_anak` varchar(50) NOT NULL,
  `alahan` varchar(50) NOT NULL,
  `penyakit_lain` varchar(50) NOT NULL,
  `id_taska` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`id_pelajar`, `id_bapa`, `id`, `nama_pelajar`, `tarikh_lahir`, `tempat_lahir`, `umur`, `jantina`, `agama`, `no_sijil`, `tempat_taska_sebelum`, `darah_anak`, `alahan`, `penyakit_lain`, `id_taska`) VALUES
(43, 39, 0, 'amir', 'Thursday 07 December 2017', 'wadad', 3, 'Lelaki', 'wadwad', 'sad323', 'tiada', '', 'tiada', 'tiada', '35'),
(44, 39, 0, 'amira', 'Thursday 14 December 2017', 'asd', 2, 'Perempuan', 'dasd', 'ss2232', 'tiada', '', 'tiada', 'tiada', '35'),
(45, 54, 0, 'azri', 'Wednesday 27 December 2017', 'selangor', 1, 'Lelaki', 'islam', 's2ss', 'tiada', '', 'tiada', 'tiada', '50');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id_progress` int(11) NOT NULL,
  `id_pelajar` int(222) NOT NULL,
  `nama` varchar(222) NOT NULL,
  `capai` varchar(222) NOT NULL,
  `tarikh` varchar(222) NOT NULL,
  `catatan` varchar(222) NOT NULL,
  `total` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id_progress`, `id_pelajar`, `nama`, `capai`, `tarikh`, `catatan`, `total`) VALUES
(1, 43, 'Melambai “bye-bye”', 'ok', '2/2/2016', 'tiada', 1),
(3, 43, 'Menghasilkan bunyi da-da atau ma-ma', 'ok', '11/22/2017', 'tiada', 1),
(4, 43, 'Menghasilkan 2-3 perkataan selain ma-ma atau da-da', 'ok', '11/22/2017', 'tiada', 1),
(5, 43, 'Bercakap dalam bahasa yang tidak difahami oleh orang lain (jabbering atau berleter)', 'ok', '10/2/2017', 'tiada', 1),
(6, 43, 'Mengikut arahan mudah (ayat 2-3 patah perkataan) diikuti dengan pergerakan badan', 'ok', '10/2/2017', 'tiada', 1),
(7, 43, 'Memberikan permainan atas arahan', 'remove', '10/2/2017', 'tiada', 0),
(9, 43, 'Meneroka pelbagai tekstur objek.', 'ok', '10/2/2017', 'tiada', 1),
(10, 43, 'Membeza pelbagai jenis rasa makanan', 'ok', '10/2/2017', 'tiada', 1),
(11, 43, 'Suka sesetengah makanan pejal', 'remove', '10/2/2017', 'tiada', 0),
(12, 43, 'Menunjukkan reaksi pada bunyi dan muzik yang didengar', 'remove', '10/2/2017', 'tiada', 0),
(13, 43, 'Membezakan pelbagai bunyi di dalam persekitaran.', 'ok', '10/2/2017', 'tiada', 1),
(14, 43, 'Boleh mencari barang yang disembunyikan.', 'remove', '10/2/2017', 'tiada', 0),
(15, 43, 'Meneliti sesuatu objek dengan tangan atau mata.', 'ok', '10/2/2017', 'tiada', 1),
(16, 43, 'Menunjukkan minat kepada objek yang berwarna terang. ', 'ok', '10/2/2017', 'tiada', 1),
(17, 43, 'Berjalan apabila sebelah tangan dipegang', 'remove', '10/2/2017', 'tiada', 0),
(18, 43, 'Mengutip benda dengan menggunakan ibu jari dan jari telunjuk', 'remove', '10/2/2017', 'tiada', 0),
(19, 43, 'Memegang barang dan meneliti barang tersebut dengan tangan atau mata', 'ok', '10/2/2017', 'tiada', 1),
(20, 43, 'Minum menggunakan cawan apabila disuap', 'ok', '10/2/2017', 'tiada', 1),
(21, 43, 'Melepaskan objek', 'ok', '10/2/2017', 'tiada', 1),
(22, 43, 'Membina dua blok', 'remove', '10/2/2017', 'tiada', 0),
(23, 43, 'Menghasilkan bunyi dengan sengaja (seperti mengetuk atau membunyikan loceng)', 'ok', '10/2/2017', 'tiada', 1),
(24, 43, 'Menggerak badan seperti mengangguk apabila mendengar lagu kanak-kanak (nursery rhymes).', 'ok', '10/2/2017', 'tiada', 1),
(25, 43, 'Menyelesaikan masalah secara kreatif (creative problem solving). Contoh: menarik kain untuk untuk mendapat mainan.', 'ok', '10/2/2017', 'tiada', 1),
(26, 43, 'Mengenali pelbagai saiz, warna dan bentuk sesuatu objek dalam persekitaran.', 'remove', '10/2/2017', 'tiada', 0),
(27, 43, 'Memahami konsep kedalaman (depth perception) dengan menunjukkan rasa takut jatuh dari tempat tinggi.', 'ok', '10/2/2017', 'tiada', 1),
(28, 43, 'Meneliti objek dan menjatuhkan objek ke lantai berulang kali.', 'ok', '10/2/2017', 'tiada', 1),
(29, 43, 'Cuba memadan bentuk dengan acuan.', 'ok', '10/2/2017', 'tiada', 1),
(30, 43, 'Menggunakan objek untuk aktiviti yang bersesuaian.', 'ok', '10/2/2017', 'tiada', 1),
(31, 43, 'Memahami simbol seperti sudu untuk makan, botol untuk menyimpan susu.', 'ok', '10/2/2017', 'tiada', 1),
(32, 43, 'Mencari barang yang disembunyikan dipelbagai tempat.', 'ok', '10/2/2017', 'tiada', 1),
(33, 43, 'Makan sendiri dengan menggunakan tangan', 'ok', '10/2/2017', 'tiada', 1),
(34, 43, 'Menunjukkan kasih sayang', 'ok', '10/2/2017', 'tiada', 1),
(35, 43, 'Suka apabila diperhatikan (mengulang sesuatu yang diberi perhatian)', 'remove', '10/2/2017', 'tiada', 0),
(36, 44, 'Melambai “bye-bye”', 'ok', '22/1/2017', 'tiada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `id_staf` int(11) NOT NULL,
  `nama_staf` varchar(98) NOT NULL,
  `no_ic_staf` varchar(88) NOT NULL,
  `jantina` varchar(88) NOT NULL,
  `kaum` varchar(88) NOT NULL,
  `alamat` varchar(88) NOT NULL,
  `no_telefon` int(88) NOT NULL,
  `tarikh_mula_berkhidmat` varchar(222) NOT NULL,
  `tarikh_mula_berkhidmat_sekolah_semasa` date NOT NULL,
  `kategori_staf` varchar(88) NOT NULL,
  `pencapaian_akademik_tertinggi` varchar(88) NOT NULL,
  `kelayakan_ikhtisas` varchar(88) NOT NULL,
  `gaji` int(33) NOT NULL,
  `cuti` varchar(22) NOT NULL,
  `id_taska` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`id_staf`, `nama_staf`, `no_ic_staf`, `jantina`, `kaum`, `alamat`, `no_telefon`, `tarikh_mula_berkhidmat`, `tarikh_mula_berkhidmat_sekolah_semasa`, `kategori_staf`, `pencapaian_akademik_tertinggi`, `kelayakan_ikhtisas`, `gaji`, `cuti`, `id_taska`) VALUES
(1, 'Siti', '950384930485', 'perempuan', 'melayu', 'kb kelantan', 199273777, '2017-10-20', '2017-10-19', 'Pengelola', 'PHD', 'tidak', 2000, '7', 35),
(2, 'ahmad', '3829429374829', '', '', '', 2147483647, '2017-12-21', '0000-00-00', 'Guru', 'PHD', '', 2323, '4', 35),
(10, 'jfsdkfj', '493530', '', '', '', 2147483647, 'Thursday 07 December 2017', '0000-00-00', 'Pengelola', 'SPM', '', 43535, '', 50);

-- --------------------------------------------------------

--
-- Table structure for table `taskauser`
--

CREATE TABLE `taskauser` (
  `id_taska` int(222) NOT NULL,
  `nama_taska` varchar(222) NOT NULL,
  `no_pendaftaran` varchar(222) NOT NULL,
  `alamat_organisasi` varchar(222) NOT NULL,
  `telefon_organisasi` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `nama_pemilik` varchar(222) NOT NULL,
  `ic_pemilik` varchar(222) NOT NULL,
  `telefon_pemilik` varchar(222) NOT NULL,
  `sms` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taskauser`
--

INSERT INTO `taskauser` (`id_taska`, `nama_taska`, `no_pendaftaran`, `alamat_organisasi`, `telefon_organisasi`, `email`, `nama_pemilik`, `ic_pemilik`, `telefon_pemilik`, `sms`) VALUES
(35, 'Taska Ceria Cerdas', '', '', '60199933966', '', '', '', '', ''),
(50, 'Tadika Cemerlang', '', '', '', 'cemerlang@gmail.com', '', '', '', ''),
(92, 'Tadika Aulad', 'SKS2323', 'kuala lumpur', '0199933773', 'aulad@gmail.com', 'yusfarhan', '94039393939', '0192929292', 'YES'),
(95, 'taska ABS', 'ks2k323', 'kuala lumpur', '019191919', 'abs@gmail.com', 'Puan Ainon', '8328492323', '032492340234', 'YES'),
(96, 'pasti malaysia', 'aks21323', 'kelantan', '0982138123', 'pastimalaysia@dsa.sdd', 'puan rabia', '823828328382', '829238423984', 'YES'),
(98, 'Tadika Hada', 'sdh2121', 'No 27, Jalan BS 11/11, Taman Bukit Serdang \r\nSeri Kembangan, Selangor 43300 \r\nMalaysia', '034444545422', 'hada@gmail.com', 'hada ismail', '793848534895', '019921391283', 'YES'),
(99, 'bnsadhfn', 'hjasbvgdhaj', 'ahwdjgvbhj', '782138712', 'dhjgvbahjwgd', 'wdghjabvhjd', '8123812', '72137812', 'YES'),
(100, 'hana taska', 'sakd23234', 'johor bharu', '0393493', 'hana@gmail.com', 'hana delisha', '829329392912', '0198282882', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id_task` int(11) NOT NULL,
  `task` varchar(99) NOT NULL,
  `status` varchar(99) NOT NULL,
  `manager` varchar(9) NOT NULL,
  `progress` varchar(99) NOT NULL,
  `colour` varchar(9) NOT NULL,
  `id_taska` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id_task`, `task`, `status`, `manager`, `progress`, `colour`, `id_taska`) VALUES
(11, 'Hari Graduation', 'PENDING', 'Siti', '80', 'green', 35),
(13, 'Hari Sukan', 'Pending', 'Yusfarhan', '40', 'blue', 50),
(15, 'memanah', 'ok', 'fadilll', '90', 'green', 0),
(16, 'lawantan domnioz', 'pending', 'siti rabi', '77', 'red', 92),
(17, 'Hari Sukan', 'Pending', 'Shila Ham', '60', 'red', 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_bapa` int(88) NOT NULL,
  `id_pelajar` int(88) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(33) NOT NULL,
  `id_taska` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_bapa`, `id_pelajar`, `username`, `email`, `password`, `role`, `id_taska`) VALUES
(35, 0, 0, 'adminceria', 'admin@gmail.com', '123456', 'admin', '35'),
(39, 0, 0, 'parentceria', '', '123456', '', '35'),
(50, 0, 0, 'admincemerlang', 'cemerlang@gmail.com', '123456', 'admin', '50'),
(52, 0, 0, 'teacher', '', '123456', 'teacher', '35'),
(54, 0, 0, 'parentcemerlang', '', '123456', '', '50'),
(92, 0, 0, 'aulad', 'aulad@gmail.com', '123456', 'admin', '92'),
(93, 0, 0, 'ali', '', '123456', '', '35'),
(95, 0, 0, 'abs', 'abs@gmail.com', '123456', 'admin', '95'),
(96, 0, 0, 'zaza', 'pastimalaysia@dsa.sdd', '123456', 'admin', '96'),
(97, 0, 0, 'aliaa', '', '1234qwer', '', '96'),
(98, 0, 0, 'tadikahada', 'hada@gmail.com', '123456', 'admin', '98'),
(99, 0, 0, 'asdasd', 'dhjgvbahjwgd', '123456', 'admin', '99'),
(100, 0, 0, 'hana', 'hana@gmail.com', '123456', 'admin', '100'),
(101, 0, 0, 'hash', '', '123456', '', '35');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `link` varchar(500) NOT NULL,
  `id_taska` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `name`, `link`, `id_taska`) VALUES
(2, 'Deria Rasa', ' <iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F1545760109010938%2Fvideos%2F1934315326822079%2F&show_text=1&width=560\" width=\"450\" height=\"408\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 35),
(5, 'Bermain Bubble', ' <iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F1545760109010938%2Fvideos%2F1933461586907453%2F&show_text=1&width=560\" width=\"450\" height=\"408\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 35),
(8, 'Melompat dlm bulatan', '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F1545760109010938%2Fvideos%2F1939035919683353%2F&show_text=1&width=560\" width=\"450\" height=\"408\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 35),
(10, 'Melompat', '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F1545760109010938%2Fvideos%2F1909743562612589%2F&show_text=1&width=560\" width=\"450\" height=\"408\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 35),
(11, 'Berlari', '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F1545760109010938%2Fvideos%2F1921475501439395%2F&show_text=1&width=560\" width=\"450\" height=\"409\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 35),
(13, 'Birthday', '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Frozita.jaafar.7%2Fvideos%2F1432166183495532%2F&show_text=0&width=264\" width=\"264\" height=\"476\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 92),
(14, 'Birthday', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D153004301937710%26set%3Da.102716816966459.1073741827.100016844224473%26type%3D3&width=500\" width=\"450\" height=\"408\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>', 92),
(15, 'Cristmas', '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FTadikaCemerlang%2Fvideos%2F1120900724707156%2F&show_text=1&width=560\" width=\"450\" height=\"407\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 50),
(17, 'makan1', '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FTadikaCemerlang%2Fvideos%2F1116565748473987%2F&show_text=1&width=560\" width=\"450\" height=\"408\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 50),
(18, 'Menyanyi', '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FTadikaCemerlang%2Fvideos%2F994438457353384%2F&show_text=1&width=560\" width=\"450\" height=\"408\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 50),
(19, 'Hari sukan', '<iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FTadikaCemerlang%2Fvideos%2F982577498539480%2F&show_text=1&width=560\" width=\"450\" height=\"408\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id_announcement`);

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bapa`
--
ALTER TABLE `bapa`
  ADD PRIMARY KEY (`id_parent`);

--
-- Indexes for table `bayaran`
--
ALTER TABLE `bayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kewangan`
--
ALTER TABLE `kewangan`
  ADD PRIMARY KEY (`id_kewangan`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id_pelajar`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id_progress`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id_staf`);

--
-- Indexes for table `taskauser`
--
ALTER TABLE `taskauser`
  ADD PRIMARY KEY (`id_taska`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id_task`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id_activity` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id_announcement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bapa`
--
ALTER TABLE `bapa`
  MODIFY `id_parent` int(88) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bayaran`
--
ALTER TABLE `bayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kewangan`
--
ALTER TABLE `kewangan`
  MODIFY `id_kewangan` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id_pelajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id_progress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id_staf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `taskauser`
--
ALTER TABLE `taskauser`
  MODIFY `id_taska` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
