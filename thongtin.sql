-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 05, 2024 lúc 11:01 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `testlaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `national` varchar(55) NOT NULL,
  `position` varchar(55) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`id`, `name`, `age`, `national`, `position`, `salary`) VALUES
(3, 'Đỗ Quốc Khánh', 23, 'Việt Nam', 'IT', 5000),
(4, 'Chu Văn Hoàng', 23, 'Việt Nam', 'Nhà văn', 2000),
(5, 'Ninh Duy Đăng', 24, 'Việt Nam', 'Tiền đạo bóng đá', 3000),
(6, 'Nguyễn Bá Nam', 30, 'Campuchia', 'Freelancer', 5000),
(7, 'Chu Thị Hoa', 28, 'Việt Nam', 'Y tá', 1000),
(8, 'Nguyễn Thị Lan', 23, 'Việt Nam', 'Tự do', 1000),
(9, 'Phan Văn Hoàng', 23, 'Việt Nam', 'Shipper', 1000),
(10, 'Nguyễn Quỳnh Anh', 23, 'Việt Nam', 'Tự do', 2000),
(11, 'Nguyễn Văn Bá', 34, 'Việt Nam ', 'Bác Sĩ', 3000),
(12, 'Trịnh Đình Khang', 45, 'Việt Nam', 'Giáo viên', 3000),
(13, 'Chu Thị Hiên', 27, 'Việt Nam', 'Telesale', 3000),
(14, 'Ngô Thị Mỹ Linh', 23, 'Việt Nam', 'Tự do', 2000),
(15, 'Nguyễn Đức Hoàng', 23, 'Việt Nam', 'IT', 2000),
(16, 'Nguyễn Thị Linh', 23, 'Việt Nam', 'Tự do', 2000),
(19, 'Trần Vân Lâm', 23, 'Việt Nam', 'Tiền đạo', 5000),
(20, 'Đỗ Quốc Khánh', 23, 'Việt Nam', 'Tiền đạo', 1000),
(21, 'Đỗ Quốc Khánh', 34, 'Việt Nam', 'Tiền đạo', 1000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
