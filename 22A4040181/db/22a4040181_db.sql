-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 04:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `22a4040181_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phong_ban`
--

CREATE TABLE `tbl_phong_ban` (
  `phong_ban_id` int(11) NOT NULL,
  `ten_phong_ban` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_phong_ban`
--

INSERT INTO `tbl_phong_ban` (`phong_ban_id`, `ten_phong_ban`) VALUES
(1, 'Phòng Đào tạo'),
(2, 'Phòng Quản trị thiết bị'),
(3, 'Phòng Thanh tra và quản lý chất lượng'),
(4, 'Phòng Tài chính Kế toán');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tai_lieu_noi_bo`
--

CREATE TABLE `tbl_tai_lieu_noi_bo` (
  `tai_lieu_noi_bo_id` int(11) NOT NULL,
  `phong_ban_id` int(11) NOT NULL,
  `ten_tai_lieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_ban_hanh` timestamp NOT NULL DEFAULT current_timestamp(),
  `link_tai_ve` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tai_lieu_noi_bo`
--

INSERT INTO `tbl_tai_lieu_noi_bo` (`tai_lieu_noi_bo_id`, `phong_ban_id`, `ten_tai_lieu`, `ngay_ban_hanh`, `link_tai_ve`, `ghi_chu`) VALUES
(1, 2, 'HTTTQL', '2021-10-11 02:34:54', 'https://dantri.com.vn/suc-khoe/chuyen-vuot-cua-tu-', NULL),
(2, 3, 'LTW', '2021-10-05 01:34:54', 'https://dantri.com.vn/the-gioi/chia-khoa-de-cham-d', NULL),
(3, 1, 'TCDN', '2021-10-07 02:38:01', 'https://dantri.com.vn/suc-khoe/cac-thuoc-khang-vir', NULL),
(4, 4, 'CSDL', '2021-09-08 02:38:01', 'https://vnexpress.net/17-quan-huyen-du-dieu-kien-k', NULL),
(5, 1, 'CSLT', '2021-09-24 19:39:41', 'https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-kh', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_phong_ban`
--
ALTER TABLE `tbl_phong_ban`
  ADD PRIMARY KEY (`phong_ban_id`);

--
-- Indexes for table `tbl_tai_lieu_noi_bo`
--
ALTER TABLE `tbl_tai_lieu_noi_bo`
  ADD PRIMARY KEY (`tai_lieu_noi_bo_id`),
  ADD KEY `phong_ban_id` (`phong_ban_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_phong_ban`
--
ALTER TABLE `tbl_phong_ban`
  MODIFY `phong_ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tai_lieu_noi_bo`
--
ALTER TABLE `tbl_tai_lieu_noi_bo`
  MODIFY `tai_lieu_noi_bo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_tai_lieu_noi_bo`
--
ALTER TABLE `tbl_tai_lieu_noi_bo`
  ADD CONSTRAINT `tbl_tai_lieu_noi_bo_ibfk_1` FOREIGN KEY (`phong_ban_id`) REFERENCES `tbl_phong_ban` (`phong_ban_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
