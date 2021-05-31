CREATE TABLE `sanpham` (
  `Ma_SanPham` int(6) NOT NULL AUTO_INCREMENT,
  `TenSanPham` varchar(255) NOT NULL,
  `DonGia` decimal(10,3) NOT NULL,
  `HinhAnh` varchar(100) DEFAULT NULL,
  `TrangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `sanpham` (`Ma_SanPham`, `TenSanPham`, `DonGia`, `HinhAnh`, `TrangThai`) 
VALUES ('ABCDE0', 'clean code', '499.000', 'cleancode.jpg', '1'), 
('ABCDE1', 'Ngôn ngữ lập trình C', '349.000', 'Cprogramlanguage.png', '1')