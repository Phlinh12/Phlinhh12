-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 04:01 PM
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
-- Database: `22a4040181`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doi_tac`
--

CREATE TABLE `tbl_doi_tac` (
  `giang_vien_id` int(11) NOT NULL,
  `khoa_id` int(11) NOT NULL,
  `ho_va_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `que_quan` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `so_truong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_doi_tac`
--

INSERT INTO `tbl_doi_tac` (`giang_vien_id`, `khoa_id`, `ho_va_ten`, `gioi_tinh`, `que_quan`, `so_truong`, `ghi_chu`) VALUES
(8, 3, 'trần văn long', 'nam', 'vĩnh phúc', 'affsg', NULL),
(9, 4, 'nguyễn hoàng anh', 'nam', 'ninh bình', 'SgH', NULL),
(10, 5, 'lê thị thanh nga', 'nữ', 'hà nội', 'fdgss', NULL),
(11, 6, 'Nguyễn phương linh', 'nữ', 'hà nội', 'sdga', NULL),
(12, 7, 'deg', 'sfass', 'hà nội', 'fdgss', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khoa`
--

CREATE TABLE `tbl_khoa` (
  `khoa_id` int(11) NOT NULL,
  `ten_khoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_khoa`
--

INSERT INTO `tbl_khoa` (`khoa_id`, `ten_khoa`) VALUES
(3, 'Khoa Ngân hàng'),
(4, 'Khoa Tài chính'),
(5, 'Khoa Công nghệ thông tin và Kinh tế số'),
(6, 'Quản trị kinh doanh'),
(7, 'Khoa Kinh tế');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_doi_tac`
--
ALTER TABLE `tbl_doi_tac`
  ADD PRIMARY KEY (`giang_vien_id`),
  ADD KEY `khoa_id` (`khoa_id`);

--
-- Indexes for table `tbl_khoa`
--
ALTER TABLE `tbl_khoa`
  ADD PRIMARY KEY (`khoa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_doi_tac`
--
ALTER TABLE `tbl_doi_tac`
  MODIFY `giang_vien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_khoa`
--
ALTER TABLE `tbl_khoa`
  MODIFY `khoa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_doi_tac`
--
ALTER TABLE `tbl_doi_tac`
  ADD CONSTRAINT `tbl_doi_tac_ibfk_1` FOREIGN KEY (`khoa_id`) REFERENCES `tbl_khoa` (`khoa_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
