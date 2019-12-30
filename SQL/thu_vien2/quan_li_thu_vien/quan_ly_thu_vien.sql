-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2019 lúc 03:44 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_thu_vien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `book_number` varchar(15) NOT NULL,
  `book_name` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `categoryCode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `borroworder`
--

CREATE TABLE `borroworder` (
  `studen_name` varchar(200) DEFAULT NULL,
  `studen_number` varchar(15) NOT NULL,
  `date_order` date DEFAULT NULL,
  `date_return` date DEFAULT NULL,
  `book_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categoryCode` varchar(15) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `textDecription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`categoryCode`, `categoryName`, `textDecription`) VALUES
('adasdas', 'Ã¡ds', 'daaaaaaadÆ°qewq'),
('Ä‘asa', 'dsadasd', 'sadsada'),
('sdadsa', 'Ä‘asa', 'dsadsa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `studen_number` varchar(15) NOT NULL,
  `studen_name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `image` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_number`),
  ADD KEY `categoryCode` (`categoryCode`);

--
-- Chỉ mục cho bảng `borroworder`
--
ALTER TABLE `borroworder`
  ADD PRIMARY KEY (`studen_number`),
  ADD KEY `book_number` (`book_number`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryCode`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studen_number`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`categoryCode`) REFERENCES `categories` (`categoryCode`);

--
-- Các ràng buộc cho bảng `borroworder`
--
ALTER TABLE `borroworder`
  ADD CONSTRAINT `borroworder_ibfk_1` FOREIGN KEY (`book_number`) REFERENCES `book` (`book_number`),
  ADD CONSTRAINT `borroworder_ibfk_2` FOREIGN KEY (`studen_number`) REFERENCES `students` (`studen_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
