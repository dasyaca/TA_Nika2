-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 01:27 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikaannisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE IF NOT EXISTS `calon` (
  `id_calon` int(11) NOT NULL,
  `no_urut` int(25) NOT NULL,
  `nama_calon` varchar(255) NOT NULL,
  `nama_wakil_calon` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id_calon`, `no_urut`, `nama_calon`, `nama_wakil_calon`, `foto`) VALUES
(1, 1, 'Syamsuar', 'Edy Natar Nasution', '1.jpg'),
(2, 2, 'Lukman Edi', 'Hardianto', '2.jpg'),
(3, 3, 'Firdaus', 'Rusli Effendi', '3.jpg'),
(4, 4, 'Arsyadjuliandi Rachman', 'Suyatno', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `id_pesan` int(11) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id_pesan`, `no_telp`, `pesan`, `status`, `date`) VALUES
(0, '082387071660', 'halo', 'Received', '2018-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kec` int(11) NOT NULL,
  `nama_kec` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kec`) VALUES
(1, 'Bukit Raya'),
(2, 'Lima Puluh'),
(3, 'Marpoyan Damai'),
(4, 'Payung Sekaki'),
(5, 'Pekanbaru Kota'),
(6, 'Rumbai'),
(7, 'Rumbai Pesisir'),
(8, 'Sail'),
(9, 'Senapelan'),
(10, ' Sukajadi'),
(11, 'Tampan'),
(12, 'Tenayan Raya'),
(13, ''),
(14, ''),
(15, '');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id_kel` int(11) NOT NULL,
  `nama_kel` varchar(255) NOT NULL,
  `id_kec` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kel`, `nama_kel`, `id_kec`) VALUES
(1, 'Tangkerang Labuai', 1),
(2, 'Dirgantara', 1),
(3, 'Simpang Tiga', 1),
(4, 'Tebingtinggi', 1),
(5, 'Tangkerang Selatan', 1),
(6, 'Tangkerang Utara', 1),
(7, 'Rintis ', 2),
(8, 'Sekip', 2),
(9, 'Tanjung Rhu', 2),
(10, 'Pesisir', 2),
(11, 'Maharatu', 3),
(12, 'Sidomulyo Timur ', 3),
(13, 'Wonorejo', 3),
(14, 'Tangkerang Barat ', 3),
(15, 'Tangkerang Tengah ', 3),
(16, 'Air Hitam', 4),
(17, 'Labuh Baru Barat ', 4),
(18, 'Labuh Baru Timur', 4),
(19, 'Tampan ', 4),
(20, 'Suka Ramai', 5),
(21, 'Suma Hilang', 5),
(22, 'Kota Tinggi', 5),
(23, 'Kota Baru', 5),
(24, 'Tanah Datar', 5),
(25, 'Simpang Empat', 5),
(26, 'Sri Meranti ', 6),
(27, 'Palas', 6),
(28, 'Rumbai Bukit ', 6),
(29, 'Umban Sari ', 6),
(30, 'Muara Fajar', 6),
(31, 'Limbungan ', 7),
(32, 'Limbungan Baru ', 7),
(33, 'Lembah Sari ', 7),
(34, 'Lembah Damai ', 7),
(35, 'Meranti Pandak ', 7),
(36, 'Tebing Tinggi Okura ', 7),
(37, 'Cinta Raja ', 8),
(38, 'Suka Maju ', 8),
(39, 'Suka Mulia (Sukamulya) ', 8),
(40, 'Sago', 9),
(41, 'Kampung Dalam', 9),
(42, 'Kampung Bandar ', 9),
(43, 'Kampung Baru ', 9),
(44, 'Padang Terubuk ', 9),
(45, 'Padang Bulan', 9),
(46, 'Sukajadi', 10),
(47, 'Harjosari', 10),
(48, 'Kedungsari', 10),
(49, 'Kampung Melayu', 10),
(50, 'Jadirejo ', 10),
(51, 'Pulau Karam', 10),
(52, 'Kampung Tengah', 10),
(53, 'Delima', 11),
(54, 'Tuah Karya', 11),
(55, 'Simpang Baru', 11),
(56, 'Sidomulyo Barat', 11),
(57, 'Rejosari', 12),
(58, 'Sail ', 12),
(59, 'Kulim', 12),
(60, 'Tangkerang Timur', 12);

-- --------------------------------------------------------

--
-- Table structure for table `no_telp`
--

CREATE TABLE IF NOT EXISTS `no_telp` (
  `id_notelp` int(11) NOT NULL,
  `id_tps` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `no_telp`
--

INSERT INTO `no_telp` (`id_notelp`, `id_tps`, `no_telp`) VALUES
(1, 1, '+6282387071660'),
(2, 2, '+6285390864555');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `id_pesan` int(11) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `total_suara`
--

CREATE TABLE IF NOT EXISTS `total_suara` (
  `id_total` int(11) NOT NULL,
  `id_tps` int(11) NOT NULL,
  `id_kec` int(11) NOT NULL,
  `id_kel` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `tidak_sah` int(11) NOT NULL,
  `dpt` int(11) NOT NULL,
  `id_notelp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tps`
--

CREATE TABLE IF NOT EXISTS `tps` (
  `id_tps` int(11) NOT NULL,
  `nama_tps` varchar(255) NOT NULL,
  `id_kel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=841 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tps`
--

INSERT INTO `tps` (`id_tps`, `nama_tps`, `id_kel`) VALUES
(1, 'TPS 001', 1),
(2, 'TPS 002', 1),
(3, 'TPS 003', 1),
(4, 'TPS 004', 1),
(5, 'TPS 005', 1),
(6, 'TPS 006', 1),
(7, 'TPS 007', 1),
(8, 'TPS 008', 1),
(9, 'TPS 009', 1),
(10, 'TPS 010', 1),
(11, 'TPS 011', 1),
(12, 'TPS 012', 1),
(13, 'TPS 013', 1),
(14, 'TPS 014', 1),
(15, 'TPS 001', 2),
(16, 'TPS 002', 2),
(17, 'TPS 003', 2),
(18, 'TPS 004', 2),
(19, 'TPS 005', 2),
(20, 'TPS 006', 2),
(21, 'TPS 007', 2),
(22, 'TPS 008', 2),
(23, 'TPS 009', 2),
(24, 'TPS 010', 2),
(25, 'TPS 011', 2),
(26, 'TPS 012', 2),
(27, 'TPS 013', 2),
(28, 'TPS 014', 2),
(29, 'TPS 001', 3),
(30, 'TPS 002', 3),
(31, 'TPS 003', 3),
(32, 'TPS 004', 3),
(33, 'TPS 005', 3),
(34, 'TPS 006', 3),
(35, 'TPS 007', 3),
(36, 'TPS 008', 3),
(37, 'TPS 009', 3),
(38, 'TPS 010', 3),
(39, 'TPS 011', 3),
(40, 'TPS 012', 3),
(41, 'TPS 013', 3),
(42, 'TPS 014', 3),
(43, 'TPS 001', 4),
(44, 'TPS 002', 4),
(45, 'TPS 003', 4),
(46, 'TPS 004', 4),
(47, 'TPS 005', 4),
(48, 'TPS 006', 4),
(49, 'TPS 007', 4),
(50, 'TPS 008', 4),
(51, 'TPS 009', 4),
(52, 'TPS 010', 4),
(53, 'TPS 011', 4),
(54, 'TPS 012', 4),
(55, 'TPS 013', 4),
(56, 'TPS 014', 4),
(57, 'TPS 001', 5),
(58, 'TPS 002', 5),
(59, 'TPS 003', 5),
(60, 'TPS 004', 5),
(61, 'TPS 005', 5),
(62, 'TPS 006', 5),
(63, 'TPS 007', 5),
(64, 'TPS 008', 5),
(65, 'TPS 009', 5),
(66, 'TPS 010', 5),
(67, 'TPS 011', 5),
(68, 'TPS 012', 5),
(69, 'TPS 013', 5),
(70, 'TPS 014', 5),
(71, 'TPS 001', 6),
(72, 'TPS 002', 6),
(73, 'TPS 003', 6),
(74, 'TPS 004', 6),
(75, 'TPS 005', 6),
(76, 'TPS 006', 6),
(77, 'TPS 007', 6),
(78, 'TPS 008', 6),
(79, 'TPS 009', 6),
(80, 'TPS 010', 6),
(81, 'TPS 011', 6),
(82, 'TPS 012', 6),
(83, 'TPS 013', 6),
(84, 'TPS 014', 6),
(85, 'TPS 001', 7),
(86, 'TPS 002', 7),
(87, 'TPS 003', 7),
(88, 'TPS 004', 7),
(89, 'TPS 005', 7),
(90, 'TPS 006', 7),
(91, 'TPS 007', 7),
(92, 'TPS 008', 7),
(93, 'TPS 009', 7),
(94, 'TPS 010', 7),
(95, 'TPS 011', 7),
(96, 'TPS 012', 7),
(97, 'TPS 013', 7),
(98, 'TPS 014', 7),
(99, 'TPS 001', 8),
(100, 'TPS 002', 8),
(101, 'TPS 003', 8),
(102, 'TPS 004', 8),
(103, 'TPS 005', 8),
(104, 'TPS 006', 8),
(105, 'TPS 007', 8),
(106, 'TPS 008', 8),
(107, 'TPS 009', 8),
(108, 'TPS 010', 8),
(109, 'TPS 011', 8),
(110, 'TPS 012', 8),
(111, 'TPS 013', 8),
(112, 'TPS 014', 8),
(113, 'TPS 001', 9),
(114, 'TPS 002', 9),
(115, 'TPS 003', 9),
(116, 'TPS 004', 9),
(117, 'TPS 005', 9),
(118, 'TPS 006', 9),
(119, 'TPS 007', 9),
(120, 'TPS 008', 9),
(121, 'TPS 009', 9),
(122, 'TPS 010', 9),
(123, 'TPS 011', 9),
(124, 'TPS 012', 9),
(125, 'TPS 013', 9),
(126, 'TPS 014', 9),
(127, 'TPS 001', 10),
(128, 'TPS 002', 10),
(129, 'TPS 003', 10),
(130, 'TPS 004', 10),
(131, 'TPS 005', 10),
(132, 'TPS 006', 10),
(133, 'TPS 007', 10),
(134, 'TPS 008', 10),
(135, 'TPS 009', 10),
(136, 'TPS 010', 10),
(137, 'TPS 011', 10),
(138, 'TPS 012', 10),
(139, 'TPS 013', 10),
(140, 'TPS 014', 10),
(141, 'TPS 001', 11),
(142, 'TPS 002', 11),
(143, 'TPS 003', 11),
(144, 'TPS 004', 11),
(145, 'TPS 005', 11),
(146, 'TPS 006', 11),
(147, 'TPS 007', 11),
(148, 'TPS 008', 11),
(149, 'TPS 009', 11),
(150, 'TPS 010', 11),
(151, 'TPS 011', 11),
(152, 'TPS 012', 11),
(153, 'TPS 013', 11),
(154, 'TPS 014', 11),
(155, 'TPS 001', 12),
(156, 'TPS 002', 12),
(157, 'TPS 003', 12),
(158, 'TPS 004', 12),
(159, 'TPS 005', 12),
(160, 'TPS 006', 12),
(161, 'TPS 007', 12),
(162, 'TPS 008', 12),
(163, 'TPS 009', 12),
(164, 'TPS 010', 12),
(165, 'TPS 011', 12),
(166, 'TPS 012', 12),
(167, 'TPS 013', 12),
(168, 'TPS 014', 12),
(169, 'TPS 001', 13),
(170, 'TPS 002', 13),
(171, 'TPS 003', 13),
(172, 'TPS 004', 13),
(173, 'TPS 005', 13),
(174, 'TPS 006', 13),
(175, 'TPS 007', 13),
(176, 'TPS 008', 13),
(177, 'TPS 009', 13),
(178, 'TPS 010', 13),
(179, 'TPS 011', 13),
(180, 'TPS 012', 13),
(181, 'TPS 013', 13),
(182, 'TPS 014', 13),
(183, 'TPS 001', 14),
(184, 'TPS 002', 14),
(185, 'TPS 003', 14),
(186, 'TPS 004', 14),
(187, 'TPS 005', 14),
(188, 'TPS 006', 14),
(189, 'TPS 007', 14),
(190, 'TPS 008', 14),
(191, 'TPS 009', 14),
(192, 'TPS 010', 14),
(193, 'TPS 011', 14),
(194, 'TPS 012', 14),
(195, 'TPS 013', 14),
(196, 'TPS 014', 14),
(197, 'TPS 001', 15),
(198, 'TPS 002', 15),
(199, 'TPS 003', 15),
(200, 'TPS 004', 15),
(201, 'TPS 005', 15),
(202, 'TPS 006', 15),
(203, 'TPS 007', 15),
(204, 'TPS 008', 15),
(205, 'TPS 009', 15),
(206, 'TPS 010', 15),
(207, 'TPS 011', 15),
(208, 'TPS 012', 15),
(209, 'TPS 013', 15),
(210, 'TPS 014', 15),
(211, 'TPS 001', 16),
(212, 'TPS 002', 16),
(213, 'TPS 003', 16),
(214, 'TPS 004', 16),
(215, 'TPS 005', 16),
(216, 'TPS 006', 16),
(217, 'TPS 007', 16),
(218, 'TPS 008', 16),
(219, 'TPS 009', 16),
(220, 'TPS 010', 16),
(221, 'TPS 011', 16),
(222, 'TPS 012', 16),
(223, 'TPS 013', 16),
(224, 'TPS 014', 16),
(225, 'TPS 001', 17),
(226, 'TPS 002', 17),
(227, 'TPS 003', 17),
(228, 'TPS 004', 17),
(229, 'TPS 005', 17),
(230, 'TPS 006', 17),
(231, 'TPS 007', 17),
(232, 'TPS 008', 17),
(233, 'TPS 009', 17),
(234, 'TPS 010', 17),
(235, 'TPS 011', 17),
(236, 'TPS 012', 17),
(237, 'TPS 013', 17),
(238, 'TPS 014', 17),
(239, 'TPS 001', 18),
(240, 'TPS 002', 18),
(241, 'TPS 003', 18),
(242, 'TPS 004', 18),
(243, 'TPS 005', 18),
(244, 'TPS 006', 18),
(245, 'TPS 007', 18),
(246, 'TPS 008', 18),
(247, 'TPS 009', 18),
(248, 'TPS 010', 18),
(249, 'TPS 011', 18),
(250, 'TPS 012', 18),
(251, 'TPS 013', 18),
(252, 'TPS 014', 18),
(253, 'TPS 001', 19),
(254, 'TPS 002', 19),
(255, 'TPS 003', 19),
(256, 'TPS 004', 19),
(257, 'TPS 005', 19),
(258, 'TPS 006', 19),
(259, 'TPS 007', 19),
(260, 'TPS 008', 19),
(261, 'TPS 009', 19),
(262, 'TPS 010', 19),
(263, 'TPS 011', 19),
(264, 'TPS 012', 19),
(265, 'TPS 013', 19),
(266, 'TPS 014', 19),
(267, 'TPS 001', 20),
(268, 'TPS 002', 20),
(269, 'TPS 003', 20),
(270, 'TPS 004', 20),
(271, 'TPS 005', 20),
(272, 'TPS 006', 20),
(273, 'TPS 007', 20),
(274, 'TPS 008', 20),
(275, 'TPS 009', 20),
(276, 'TPS 010', 20),
(277, 'TPS 011', 20),
(278, 'TPS 012', 20),
(279, 'TPS 013', 20),
(280, 'TPS 014', 20),
(281, 'TPS 001', 21),
(282, 'TPS 002', 21),
(283, 'TPS 003', 21),
(284, 'TPS 004', 21),
(285, 'TPS 005', 21),
(286, 'TPS 006', 21),
(287, 'TPS 007', 21),
(288, 'TPS 008', 21),
(289, 'TPS 009', 21),
(290, 'TPS 010', 21),
(291, 'TPS 011', 21),
(292, 'TPS 012', 21),
(293, 'TPS 013', 21),
(294, 'TPS 014', 21),
(295, 'TPS 001', 22),
(296, 'TPS 002', 22),
(297, 'TPS 003', 22),
(298, 'TPS 004', 22),
(299, 'TPS 005', 22),
(300, 'TPS 006', 22),
(301, 'TPS 007', 22),
(302, 'TPS 008', 22),
(303, 'TPS 009', 22),
(304, 'TPS 010', 22),
(305, 'TPS 011', 22),
(306, 'TPS 012', 22),
(307, 'TPS 013', 22),
(308, 'TPS 014', 22),
(309, 'TPS 001', 23),
(310, 'TPS 002', 23),
(311, 'TPS 003', 23),
(312, 'TPS 004', 23),
(313, 'TPS 005', 23),
(314, 'TPS 006', 23),
(315, 'TPS 007', 23),
(316, 'TPS 008', 23),
(317, 'TPS 009', 23),
(318, 'TPS 010', 23),
(319, 'TPS 011', 23),
(320, 'TPS 012', 23),
(321, 'TPS 013', 23),
(322, 'TPS 014', 23),
(323, 'TPS 001', 24),
(324, 'TPS 002', 24),
(325, 'TPS 003', 24),
(326, 'TPS 004', 24),
(327, 'TPS 005', 24),
(328, 'TPS 006', 24),
(329, 'TPS 007', 24),
(330, 'TPS 008', 24),
(331, 'TPS 009', 24),
(332, 'TPS 010', 24),
(333, 'TPS 011', 24),
(334, 'TPS 012', 24),
(335, 'TPS 013', 24),
(336, 'TPS 014', 24),
(337, 'TPS 001', 25),
(338, 'TPS 002', 25),
(339, 'TPS 003', 25),
(340, 'TPS 004', 25),
(341, 'TPS 005', 25),
(342, 'TPS 006', 25),
(343, 'TPS 007', 25),
(344, 'TPS 008', 25),
(345, 'TPS 009', 25),
(346, 'TPS 010', 25),
(347, 'TPS 011', 25),
(348, 'TPS 012', 25),
(349, 'TPS 013', 25),
(350, 'TPS 014', 25),
(351, 'TPS 001', 26),
(352, 'TPS 002', 26),
(353, 'TPS 003', 26),
(354, 'TPS 004', 26),
(355, 'TPS 005', 26),
(356, 'TPS 006', 26),
(357, 'TPS 007', 26),
(358, 'TPS 008', 26),
(359, 'TPS 009', 26),
(360, 'TPS 010', 26),
(361, 'TPS 011', 26),
(362, 'TPS 012', 26),
(363, 'TPS 013', 26),
(364, 'TPS 014', 26),
(365, 'TPS 001', 27),
(366, 'TPS 002', 27),
(367, 'TPS 003', 27),
(368, 'TPS 004', 27),
(369, 'TPS 005', 27),
(370, 'TPS 006', 27),
(371, 'TPS 007', 27),
(372, 'TPS 008', 27),
(373, 'TPS 009', 27),
(374, 'TPS 010', 27),
(375, 'TPS 011', 27),
(376, 'TPS 012', 27),
(377, 'TPS 013', 27),
(378, 'TPS 014', 27),
(379, 'TPS 001', 28),
(380, 'TPS 002', 28),
(381, 'TPS 003', 28),
(382, 'TPS 004', 28),
(383, 'TPS 005', 28),
(384, 'TPS 006', 28),
(385, 'TPS 007', 28),
(386, 'TPS 008', 28),
(387, 'TPS 009', 28),
(388, 'TPS 010', 28),
(389, 'TPS 011', 28),
(390, 'TPS 012', 28),
(391, 'TPS 013', 28),
(392, 'TPS 014', 28),
(393, 'TPS 001', 29),
(394, 'TPS 002', 29),
(395, 'TPS 003', 29),
(396, 'TPS 004', 29),
(397, 'TPS 005', 29),
(398, 'TPS 006', 29),
(399, 'TPS 007', 29),
(400, 'TPS 008', 29),
(401, 'TPS 009', 29),
(402, 'TPS 010', 29),
(403, 'TPS 011', 29),
(404, 'TPS 012', 29),
(405, 'TPS 013', 29),
(406, 'TPS 014', 29),
(407, 'TPS 001', 30),
(408, 'TPS 002', 30),
(409, 'TPS 003', 30),
(410, 'TPS 004', 30),
(411, 'TPS 005', 30),
(412, 'TPS 006', 30),
(413, 'TPS 007', 30),
(414, 'TPS 008', 30),
(415, 'TPS 009', 30),
(416, 'TPS 010', 30),
(417, 'TPS 011', 30),
(418, 'TPS 012', 30),
(419, 'TPS 013', 30),
(420, 'TPS 014', 30),
(421, 'TPS 001', 31),
(422, 'TPS 002', 31),
(423, 'TPS 003', 31),
(424, 'TPS 004', 31),
(425, 'TPS 005', 31),
(426, 'TPS 006', 31),
(427, 'TPS 007', 31),
(428, 'TPS 008', 31),
(429, 'TPS 009', 31),
(430, 'TPS 010', 31),
(431, 'TPS 011', 31),
(432, 'TPS 012', 31),
(433, 'TPS 013', 31),
(434, 'TPS 014', 31),
(435, 'TPS 001', 32),
(436, 'TPS 002', 32),
(437, 'TPS 003', 32),
(438, 'TPS 004', 32),
(439, 'TPS 005', 32),
(440, 'TPS 006', 32),
(441, 'TPS 007', 32),
(442, 'TPS 008', 32),
(443, 'TPS 009', 32),
(444, 'TPS 010', 32),
(445, 'TPS 011', 32),
(446, 'TPS 012', 32),
(447, 'TPS 013', 32),
(448, 'TPS 014', 32),
(449, 'TPS 001', 33),
(450, 'TPS 002', 33),
(451, 'TPS 003', 33),
(452, 'TPS 004', 33),
(453, 'TPS 005', 33),
(454, 'TPS 006', 33),
(455, 'TPS 007', 33),
(456, 'TPS 008', 33),
(457, 'TPS 009', 33),
(458, 'TPS 010', 33),
(459, 'TPS 011', 33),
(460, 'TPS 012', 33),
(461, 'TPS 013', 33),
(462, 'TPS 014', 33),
(463, 'TPS 001', 34),
(464, 'TPS 002', 34),
(465, 'TPS 003', 34),
(466, 'TPS 004', 34),
(467, 'TPS 005', 34),
(468, 'TPS 006', 34),
(469, 'TPS 007', 34),
(470, 'TPS 008', 34),
(471, 'TPS 009', 34),
(472, 'TPS 010', 34),
(473, 'TPS 011', 34),
(474, 'TPS 012', 34),
(475, 'TPS 013', 34),
(476, 'TPS 014', 34),
(477, 'TPS 001', 35),
(478, 'TPS 002', 35),
(479, 'TPS 003', 35),
(480, 'TPS 004', 35),
(481, 'TPS 005', 35),
(482, 'TPS 006', 35),
(483, 'TPS 007', 35),
(484, 'TPS 008', 35),
(485, 'TPS 009', 35),
(486, 'TPS 010', 35),
(487, 'TPS 011', 35),
(488, 'TPS 012', 35),
(489, 'TPS 013', 35),
(490, 'TPS 014', 35),
(491, 'TPS 001', 36),
(492, 'TPS 002', 36),
(493, 'TPS 003', 36),
(494, 'TPS 004', 36),
(495, 'TPS 005', 36),
(496, 'TPS 006', 36),
(497, 'TPS 007', 36),
(498, 'TPS 008', 36),
(499, 'TPS 009', 36),
(500, 'TPS 010', 36),
(501, 'TPS 011', 36),
(502, 'TPS 012', 36),
(503, 'TPS 013', 36),
(504, 'TPS 014', 36),
(505, 'TPS 001', 37),
(506, 'TPS 002', 37),
(507, 'TPS 003', 37),
(508, 'TPS 004', 37),
(509, 'TPS 005', 37),
(510, 'TPS 006', 37),
(511, 'TPS 007', 37),
(512, 'TPS 008', 37),
(513, 'TPS 009', 37),
(514, 'TPS 010', 37),
(515, 'TPS 011', 37),
(516, 'TPS 012', 37),
(517, 'TPS 013', 37),
(518, 'TPS 014', 37),
(519, 'TPS 001', 38),
(520, 'TPS 002', 38),
(521, 'TPS 003', 38),
(522, 'TPS 004', 38),
(523, 'TPS 005', 38),
(524, 'TPS 006', 38),
(525, 'TPS 007', 38),
(526, 'TPS 008', 38),
(527, 'TPS 009', 38),
(528, 'TPS 010', 38),
(529, 'TPS 011', 38),
(530, 'TPS 012', 38),
(531, 'TPS 013', 38),
(532, 'TPS 014', 38),
(533, 'TPS 001', 39),
(534, 'TPS 002', 39),
(535, 'TPS 003', 39),
(536, 'TPS 004', 39),
(537, 'TPS 005', 39),
(538, 'TPS 006', 39),
(539, 'TPS 007', 39),
(540, 'TPS 008', 39),
(541, 'TPS 009', 39),
(542, 'TPS 010', 39),
(543, 'TPS 011', 39),
(544, 'TPS 012', 39),
(545, 'TPS 013', 39),
(546, 'TPS 014', 39),
(547, 'TPS 001', 40),
(548, 'TPS 002', 40),
(549, 'TPS 003', 40),
(550, 'TPS 004', 40),
(551, 'TPS 005', 40),
(552, 'TPS 006', 40),
(553, 'TPS 007', 40),
(554, 'TPS 008', 40),
(555, 'TPS 009', 40),
(556, 'TPS 010', 40),
(557, 'TPS 011', 40),
(558, 'TPS 012', 40),
(559, 'TPS 013', 40),
(560, 'TPS 014', 40),
(561, 'TPS 001', 41),
(562, 'TPS 002', 41),
(563, 'TPS 003', 41),
(564, 'TPS 004', 41),
(565, 'TPS 005', 41),
(566, 'TPS 006', 41),
(567, 'TPS 007', 41),
(568, 'TPS 008', 41),
(569, 'TPS 009', 41),
(570, 'TPS 010', 41),
(571, 'TPS 011', 41),
(572, 'TPS 012', 41),
(573, 'TPS 013', 41),
(574, 'TPS 014', 41),
(575, 'TPS 001', 42),
(576, 'TPS 002', 42),
(577, 'TPS 003', 42),
(578, 'TPS 004', 42),
(579, 'TPS 005', 42),
(580, 'TPS 006', 42),
(581, 'TPS 007', 42),
(582, 'TPS 008', 42),
(583, 'TPS 009', 42),
(584, 'TPS 010', 42),
(585, 'TPS 011', 42),
(586, 'TPS 012', 42),
(587, 'TPS 013', 42),
(588, 'TPS 014', 42),
(589, 'TPS 001', 43),
(590, 'TPS 002', 43),
(591, 'TPS 003', 43),
(592, 'TPS 004', 43),
(593, 'TPS 005', 43),
(594, 'TPS 006', 43),
(595, 'TPS 007', 43),
(596, 'TPS 008', 43),
(597, 'TPS 009', 43),
(598, 'TPS 010', 43),
(599, 'TPS 011', 43),
(600, 'TPS 012', 43),
(601, 'TPS 013', 43),
(602, 'TPS 014', 43),
(603, 'TPS 001', 44),
(604, 'TPS 002', 44),
(605, 'TPS 003', 44),
(606, 'TPS 004', 44),
(607, 'TPS 005', 44),
(608, 'TPS 006', 44),
(609, 'TPS 007', 44),
(610, 'TPS 008', 44),
(611, 'TPS 009', 44),
(612, 'TPS 010', 44),
(613, 'TPS 011', 44),
(614, 'TPS 012', 44),
(615, 'TPS 013', 44),
(616, 'TPS 014', 44),
(617, 'TPS 001', 45),
(618, 'TPS 002', 45),
(619, 'TPS 003', 45),
(620, 'TPS 004', 45),
(621, 'TPS 005', 45),
(622, 'TPS 006', 45),
(623, 'TPS 007', 45),
(624, 'TPS 008', 45),
(625, 'TPS 009', 45),
(626, 'TPS 010', 45),
(627, 'TPS 011', 45),
(628, 'TPS 012', 45),
(629, 'TPS 013', 45),
(630, 'TPS 014', 45),
(631, 'TPS 001', 46),
(632, 'TPS 002', 46),
(633, 'TPS 003', 46),
(634, 'TPS 004', 46),
(635, 'TPS 005', 46),
(636, 'TPS 006', 46),
(637, 'TPS 007', 46),
(638, 'TPS 008', 46),
(639, 'TPS 009', 46),
(640, 'TPS 010', 46),
(641, 'TPS 011', 46),
(642, 'TPS 012', 46),
(643, 'TPS 013', 46),
(644, 'TPS 014', 46),
(645, 'TPS 001', 47),
(646, 'TPS 002', 47),
(647, 'TPS 003', 47),
(648, 'TPS 004', 47),
(649, 'TPS 005', 47),
(650, 'TPS 006', 47),
(651, 'TPS 007', 47),
(652, 'TPS 008', 47),
(653, 'TPS 009', 47),
(654, 'TPS 010', 47),
(655, 'TPS 011', 47),
(656, 'TPS 012', 47),
(657, 'TPS 013', 47),
(658, 'TPS 014', 47),
(659, 'TPS 001', 48),
(660, 'TPS 002', 48),
(661, 'TPS 003', 48),
(662, 'TPS 004', 48),
(663, 'TPS 005', 48),
(664, 'TPS 006', 48),
(665, 'TPS 007', 48),
(666, 'TPS 008', 48),
(667, 'TPS 009', 48),
(668, 'TPS 010', 48),
(669, 'TPS 011', 48),
(670, 'TPS 012', 48),
(671, 'TPS 013', 48),
(672, 'TPS 014', 48),
(673, 'TPS 001', 49),
(674, 'TPS 002', 49),
(675, 'TPS 003', 49),
(676, 'TPS 004', 49),
(677, 'TPS 005', 49),
(678, 'TPS 006', 49),
(679, 'TPS 007', 49),
(680, 'TPS 008', 49),
(681, 'TPS 009', 49),
(682, 'TPS 010', 49),
(683, 'TPS 011', 49),
(684, 'TPS 012', 49),
(685, 'TPS 013', 49),
(686, 'TPS 014', 49),
(687, 'TPS 001', 50),
(688, 'TPS 002', 50),
(689, 'TPS 003', 50),
(690, 'TPS 004', 50),
(691, 'TPS 005', 50),
(692, 'TPS 006', 50),
(693, 'TPS 007', 50),
(694, 'TPS 008', 50),
(695, 'TPS 009', 50),
(696, 'TPS 010', 50),
(697, 'TPS 011', 50),
(698, 'TPS 012', 50),
(699, 'TPS 013', 50),
(700, 'TPS 014', 50),
(701, 'TPS 001', 51),
(702, 'TPS 002', 51),
(703, 'TPS 003', 51),
(704, 'TPS 004', 51),
(705, 'TPS 005', 51),
(706, 'TPS 006', 51),
(707, 'TPS 007', 51),
(708, 'TPS 008', 51),
(709, 'TPS 009', 51),
(710, 'TPS 010', 51),
(711, 'TPS 011', 51),
(712, 'TPS 012', 51),
(713, 'TPS 013', 51),
(714, 'TPS 014', 51),
(715, 'TPS 001', 52),
(716, 'TPS 002', 52),
(717, 'TPS 003', 52),
(718, 'TPS 004', 52),
(719, 'TPS 005', 52),
(720, 'TPS 006', 52),
(721, 'TPS 007', 52),
(722, 'TPS 008', 52),
(723, 'TPS 009', 52),
(724, 'TPS 010', 52),
(725, 'TPS 011', 52),
(726, 'TPS 012', 52),
(727, 'TPS 013', 52),
(728, 'TPS 014', 52),
(729, 'TPS 001', 53),
(730, 'TPS 002', 53),
(731, 'TPS 003', 53),
(732, 'TPS 004', 53),
(733, 'TPS 005', 53),
(734, 'TPS 006', 53),
(735, 'TPS 007', 53),
(736, 'TPS 008', 53),
(737, 'TPS 009', 53),
(738, 'TPS 010', 53),
(739, 'TPS 011', 53),
(740, 'TPS 012', 53),
(741, 'TPS 013', 53),
(742, 'TPS 014', 53),
(743, 'TPS 001', 54),
(744, 'TPS 002', 54),
(745, 'TPS 003', 54),
(746, 'TPS 004', 54),
(747, 'TPS 005', 54),
(748, 'TPS 006', 54),
(749, 'TPS 007', 54),
(750, 'TPS 008', 54),
(751, 'TPS 009', 54),
(752, 'TPS 010', 54),
(753, 'TPS 011', 54),
(754, 'TPS 012', 54),
(755, 'TPS 013', 54),
(756, 'TPS 014', 54),
(757, 'TPS 001', 55),
(758, 'TPS 002', 55),
(759, 'TPS 003', 55),
(760, 'TPS 004', 55),
(761, 'TPS 005', 55),
(762, 'TPS 006', 55),
(763, 'TPS 007', 55),
(764, 'TPS 008', 55),
(765, 'TPS 009', 55),
(766, 'TPS 010', 55),
(767, 'TPS 011', 55),
(768, 'TPS 012', 55),
(769, 'TPS 013', 55),
(770, 'TPS 014', 55),
(771, 'TPS 001', 56),
(772, 'TPS 002', 56),
(773, 'TPS 003', 56),
(774, 'TPS 004', 56),
(775, 'TPS 005', 56),
(776, 'TPS 006', 56),
(777, 'TPS 007', 56),
(778, 'TPS 008', 56),
(779, 'TPS 009', 56),
(780, 'TPS 010', 56),
(781, 'TPS 011', 56),
(782, 'TPS 012', 56),
(783, 'TPS 013', 56),
(784, 'TPS 014', 56),
(785, 'TPS 001', 57),
(786, 'TPS 002', 57),
(787, 'TPS 003', 57),
(788, 'TPS 004', 57),
(789, 'TPS 005', 57),
(790, 'TPS 006', 57),
(791, 'TPS 007', 57),
(792, 'TPS 008', 57),
(793, 'TPS 009', 57),
(794, 'TPS 010', 57),
(795, 'TPS 011', 57),
(796, 'TPS 012', 57),
(797, 'TPS 013', 57),
(798, 'TPS 014', 57),
(799, 'TPS 001', 58),
(800, 'TPS 002', 58),
(801, 'TPS 003', 58),
(802, 'TPS 004', 58),
(803, 'TPS 005', 58),
(804, 'TPS 006', 58),
(805, 'TPS 007', 58),
(806, 'TPS 008', 58),
(807, 'TPS 009', 58),
(808, 'TPS 010', 58),
(809, 'TPS 011', 58),
(810, 'TPS 012', 58),
(811, 'TPS 013', 58),
(812, 'TPS 014', 58),
(813, 'TPS 001', 59),
(814, 'TPS 002', 59),
(815, 'TPS 003', 59),
(816, 'TPS 004', 59),
(817, 'TPS 005', 59),
(818, 'TPS 006', 59),
(819, 'TPS 007', 59),
(820, 'TPS 008', 59),
(821, 'TPS 009', 59),
(822, 'TPS 010', 59),
(823, 'TPS 011', 59),
(824, 'TPS 012', 59),
(825, 'TPS 013', 59),
(826, 'TPS 014', 59),
(827, 'TPS 001', 60),
(828, 'TPS 002', 60),
(829, 'TPS 003', 60),
(830, 'TPS 004', 60),
(831, 'TPS 005', 60),
(832, 'TPS 006', 60),
(833, 'TPS 007', 60),
(834, 'TPS 008', 60),
(835, 'TPS 009', 60),
(836, 'TPS 010', 60),
(837, 'TPS 011', 60),
(838, 'TPS 012', 60),
(839, 'TPS 013', 60),
(840, 'TPS 014', 60);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_admin`, `username`, `password`) VALUES
(1, 'admin1', 'admin1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kel`);

--
-- Indexes for table `no_telp`
--
ALTER TABLE `no_telp`
  ADD PRIMARY KEY (`id_notelp`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `total_suara`
--
ALTER TABLE `total_suara`
  ADD PRIMARY KEY (`id_total`);

--
-- Indexes for table `tps`
--
ALTER TABLE `tps`
  ADD PRIMARY KEY (`id_tps`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kec` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `no_telp`
--
ALTER TABLE `no_telp`
  MODIFY `id_notelp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `total_suara`
--
ALTER TABLE `total_suara`
  MODIFY `id_total` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tps`
--
ALTER TABLE `tps`
  MODIFY `id_tps` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=841;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
