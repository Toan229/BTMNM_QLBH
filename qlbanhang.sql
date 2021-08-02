-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 02, 2021 lúc 06:27 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `magio` varchar(25) NOT NULL,
  `masp` varchar(25) NOT NULL,
  `sl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`magio`, `masp`, `sl`) VALUES
('gh1', 'a', 1),
('gh1', 'a1', 1),
('gh10', 'a1', 1),
('gh2', 'c', 2),
('gh2', 'phone1', 1),
('gh4', 'hp1', 3),
('gh4', 'tv1', 2),
('gh5', 'a', 1),
('gh7', 'mouse1', 1),
('gh8', 'a', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahd` varchar(25) NOT NULL,
  `masp` varchar(25) NOT NULL,
  `slmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`mahd`, `masp`, `slmua`) VALUES
('hd1', 'a', 1),
('hd10', 'phone2', 1),
('hd2', 'a1', 2),
('hd3', 'mouse1', 5),
('hd4', 'phone1', 1),
('hd5', 'phone2', 1),
('hd6', 'b', 1),
('hd7', 'b1', 1),
('hd8', 'tv1', 2),
('hd9', 'hp1', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `madm` varchar(10) NOT NULL,
  `tendm` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`madm`, `tendm`) VALUES
('dmuc1', 'Android'),
('dmuc10', 'TV'),
('dmuc2', 'IOS'),
('dmuc3', 'Windows'),
('dmuc4', 'MAC'),
('dmuc5', 'Other'),
('dmuc6', 'Headphone'),
('dmuc7', 'Keyboard'),
('dmuc8', 'Mouse'),
('dmuc9', 'Ram');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `magio` varchar(25) NOT NULL,
  `makhach` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`magio`, `makhach`) VALUES
('gh1', 'kh1'),
('gh10', 'kh10'),
('gh2', 'kh2'),
('gh3', 'kh3'),
('gh4', 'kh4'),
('gh5', 'kh5'),
('gh6', 'kh6'),
('gh7', 'kh7'),
('gh8', 'kh8'),
('gh9', 'kh9');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(25) NOT NULL,
  `makhach` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makhach`) VALUES
('hd1', 'kh1'),
('hd10', 'kh10'),
('hd2', 'kh2'),
('hd3', 'kh3'),
('hd4', 'kh4'),
('hd5', 'kh5'),
('hd6', 'kh6'),
('hd7', 'kh7'),
('hd8', 'kh8'),
('hd9', 'kh9');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makhach` varchar(25) NOT NULL,
  `tenkhach` tinytext NOT NULL,
  `diachi` tinytext NOT NULL,
  `sdt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makhach`, `tenkhach`, `diachi`, `sdt`) VALUES
('kh1', 'Phạm Cảnh Toàn', 'Hà Nội', '0123456789'),
('kh10', 'Nguyễn Thị Hương', 'Vĩnh Phúc', '12345'),
('kh2', 'Lê Văn Thắng', 'Hà Nội', '012356789'),
('kh3', 'Nguyễn Văn Tuấn', 'Hà Nam', '12345'),
('kh4', 'Nguyễn Thị Lan Anh', 'Phú Thọ', '12345'),
('kh5', 'Phạm Ngọc Toán', 'Vĩnh Phúc', '12345'),
('kh6', 'Hà Anh Tuấn', 'Hà Giang', '12345'),
('kh7', 'Lại Tuấn Anh', 'Bắc Giang', '12345'),
('kh8', 'Lê Tuấn Anh', 'Vĩnh Phúc', '1223445'),
('kh9', 'Nguyễn Thị Lệ', 'Hà Nội', '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` varchar(25) NOT NULL,
  `tennv` text NOT NULL,
  `chucvu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `tennv`, `chucvu`) VALUES
('nv1', 'Phạm Thị Hòa', 'Nhân viên bán hàng'),
('nv2', 'Lê Văn Minh', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(25) NOT NULL,
  `tensp` tinytext NOT NULL,
  `image` text NOT NULL,
  `sl` int(11) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `mota` text NOT NULL,
  `madm` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `image`, `sl`, `gia`, `mota`, `madm`) VALUES
('a', 'Xiaomi Mi 11 Lite 5G', 'IMG-6108094e480126.68204423.jpg', 24, '8450000', 'Dung lượng RAM	8 GB Bộ nhớ trong 128 GB', 'dmuc1'),
('a1', 'Oppo Reno5', 'IMG-61080a07c4b2a2.68201046.jpg', 24, '8690000', 'Dung lượng RAM	8 GB, Bộ nhớ trong128 GB ,Pin	4310mAh (Typ), Sạc siêu nhanh', 'dmuc1'),
('b', 'Realme Pro', 'IMG-6108029d5c37f0.77197523.jpeg', 16, '5500000', 'Ram 8GB, memory 128GB', 'dmuc1'),
('b1', 'Samsung Galaxy A52', 'IMG-6108099e75b857.11139360.jpg', 12, '9290000', 'Dung lượng RAM	8 GB ,Bộ nhớ trong 128 GB ,Pin	Li-Po 4500 mAh', 'dmuc1'),
('c', 'Iphone 12', 'IMG-6108089e979e10.55570311.jpg', 25, '18800000', 'Ram 4GB, memory 64GB, operating system ios14', 'dmuc2'),
('hp1', 'Tai nghe SoundMax', 'IMG-61080b87d82392.73295589.jpg', 24, '660000', 'Khả năng bluetooth 4.1, tương thích tốt với nhiều thiết bị', 'dmuc1'),
('mouse1', 'Chuột không dây Logitech M221', 'IMG-61080d0fe74098.27760224.jpg', 12, '259000', 'Độ phân giải 1000 dpi', 'dmuc8'),
('phone1', 'Realme 7', 'IMG-61080d83d3ac41.21070488.jpg', 35, '5090000', 'Chipset	MediaTek Helio G95 Cortex-A76,Dung lượng RAM 8 GB, Bộ nhớ trong 128 GB', 'dmuc1'),
('phone2', 'Vsmart Live 4', 'IMG-61080dcc90f6f0.26070886.jpg', 23, '3290000', ' Kích thước màn hình 6.5 inches, Chipset	Snapdragon 675 8 nhân, Dung lượng RAM 6 GB. Bộ nhớ trong 64 GB', 'dmuc1'),
('tv1', 'Smart Tivi Samsung Crystal UHD 4K ', 'IMG-61080a7896f277.96945249.jpg', 12, '10900000', 'Kích thước 43\' , Độ phân giải 4K ', 'dmuc10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Bảng tài khoản nhân viên và người dùng';

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `password`, `type`) VALUES
('quantri', '123', 1),
('toan', '202cb962ac59075b964b07152d234b70', 0),
('toan1', '202cb962ac59075b964b07152d234b70', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`magio`,`masp`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`mahd`,`masp`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`madm`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`magio`),
  ADD KEY `makhach` (`makhach`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `makhach` (`makhach`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makhach`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `madm` (`madm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`username`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`magio`) REFERENCES `giohang` (`magio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietgiohang_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`makhach`) REFERENCES `khachhang` (`makhach`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`makhach`) REFERENCES `khachhang` (`makhach`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`madm`) REFERENCES `danhmucsanpham` (`madm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
