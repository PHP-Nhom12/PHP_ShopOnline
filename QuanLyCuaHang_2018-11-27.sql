# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.38)
# Database: QuanLyCuaHang
# Generation Time: 2018-11-27 15:38:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table BannerQuangCao
# ------------------------------------------------------------

DROP TABLE IF EXISTS `BannerQuangCao`;

CREATE TABLE `BannerQuangCao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenchiendich` varchar(255) NOT NULL DEFAULT '',
  `vitri` varchar(255) NOT NULL DEFAULT '',
  `thoigianbatdau` date NOT NULL,
  `thoigianketthuc` date NOT NULL,
  `hinhanh` varchar(255) NOT NULL DEFAULT '',
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ChiTietHD
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ChiTietHD`;

CREATE TABLE `ChiTietHD` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idhoadon` int(11) NOT NULL,
  `idsanpham` varchar(11) NOT NULL DEFAULT '',
  `soluong` int(11) NOT NULL,
  `dongia` int(32) NOT NULL,
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `CHITIETHD_SANPHAM` (`idsanpham`),
  KEY `CHITIETHD_HOADON` (`idhoadon`),
  CONSTRAINT `CHITIETHD_HOADON` FOREIGN KEY (`idhoadon`) REFERENCES `HOADON` (`id`),
  CONSTRAINT `CHITIETHD_SANPHAM` FOREIGN KEY (`idsanpham`) REFERENCES `SANPHAM` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ChiTietSP
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ChiTietSP`;

CREATE TABLE `ChiTietSP` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsanpham` varchar(11) NOT NULL DEFAULT '',
  `idmausac` int(11) NOT NULL,
  `idkichthuoc` int(11) NOT NULL,
  `chatlieu` varchar(255) NOT NULL DEFAULT '',
  `gioitinh` int(11) NOT NULL,
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `CHITIETSP_SANPHAM` (`idsanpham`),
  KEY `CHITIETSP_MAUSAC` (`idmausac`),
  KEY `CHITIETSP_KICHTHUOC` (`idkichthuoc`),
  CONSTRAINT `CHITIETSP_KICHTHUOC` FOREIGN KEY (`idkichthuoc`) REFERENCES `KichThuocSP` (`id`),
  CONSTRAINT `CHITIETSP_MAUSAC` FOREIGN KEY (`idmausac`) REFERENCES `MauSacSP` (`id`),
  CONSTRAINT `CHITIETSP_SANPHAM` FOREIGN KEY (`idsanpham`) REFERENCES `SANPHAM` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table HinhAnhSP
# ------------------------------------------------------------

DROP TABLE IF EXISTS `HinhAnhSP`;

CREATE TABLE `HinhAnhSP` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsanpham` varchar(11) NOT NULL DEFAULT '',
  `duongdan` varchar(255) NOT NULL DEFAULT '',
  `lahinhchinh` bit(1) NOT NULL,
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `HINHANH_SANPHAM` (`idsanpham`),
  CONSTRAINT `HINHANH_SANPHAM` FOREIGN KEY (`idsanpham`) REFERENCES `SANPHAM` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `HinhAnhSP` WRITE;
/*!40000 ALTER TABLE `HinhAnhSP` DISABLE KEYS */;

INSERT INTO `HinhAnhSP` (`id`, `idsanpham`, `duongdan`, `lahinhchinh`, `daxoa`)
VALUES
	(1,'SP001','/assets/images/ao01.jpg',b'1',b'0'),
	(2,'SP002','/assets/images/ao02.jpg',b'1',b'0'),
	(3,'SP003','/assets/images/ao03.jpg',b'1',b'0'),
	(4,'SP004','/assets/images/ao04.jpg',b'1',b'0');

/*!40000 ALTER TABLE `HinhAnhSP` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table HOADON
# ------------------------------------------------------------

DROP TABLE IF EXISTS `HOADON`;

CREATE TABLE `HOADON` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngaylaphd` date NOT NULL,
  `idkhachhang` int(11) NOT NULL,
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `HOADON_KHACHHANG` (`idkhachhang`),
  CONSTRAINT `HOADON_KHACHHANG` FOREIGN KEY (`idkhachhang`) REFERENCES `TAIKHOAN` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table KichThuocSP
# ------------------------------------------------------------

DROP TABLE IF EXISTS `KichThuocSP`;

CREATE TABLE `KichThuocSP` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenkichthuoc` varchar(255) NOT NULL DEFAULT '',
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `KichThuocSP` WRITE;
/*!40000 ALTER TABLE `KichThuocSP` DISABLE KEYS */;

INSERT INTO `KichThuocSP` (`id`, `tenkichthuoc`, `daxoa`)
VALUES
	(1,'XS',b'0'),
	(2,'S',b'0'),
	(3,'M',b'0'),
	(4,'L',b'0'),
	(5,'XL',b'0'),
	(6,'XXL',b'0');

/*!40000 ALTER TABLE `KichThuocSP` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table LoaiSP
# ------------------------------------------------------------

DROP TABLE IF EXISTS `LoaiSP`;

CREATE TABLE `LoaiSP` (
  `idloai` int(11) NOT NULL AUTO_INCREMENT,
  `iddanhmuc` int(11) NOT NULL,
  `tenloai` varchar(255) NOT NULL DEFAULT '',
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`idloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `LoaiSP` WRITE;
/*!40000 ALTER TABLE `LoaiSP` DISABLE KEYS */;

INSERT INTO `LoaiSP` (`idloai`, `iddanhmuc`, `tenloai`, `daxoa`)
VALUES
	(1,0,'Nam',b'0'),
	(2,0,'Nữ',b'0'),
	(3,0,'Phụ kiện',b'0'),
	(4,1,'Áo Nam',b'0'),
	(5,1,'Quần Nam',b'0'),
	(6,1,'Áo Khoác Nam',b'0'),
	(7,3,'Mắt Kính',b'0'),
	(8,1,'Giày Nam',b'0'),
	(9,2,'Áo Nữ',b'0'),
	(10,2,'Quần Nữ',b'0'),
	(11,2,'Áo Khoác Nữ',b'0'),
	(12,2,'Nón Nữ',b'0'),
	(13,2,'Giày Nữ',b'0'),
	(14,1,'Nón Nam',b'0'),
	(15,3,'Vòng tay',b'0');

/*!40000 ALTER TABLE `LoaiSP` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table MauSacSP
# ------------------------------------------------------------

DROP TABLE IF EXISTS `MauSacSP`;

CREATE TABLE `MauSacSP` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenmau` varchar(255) NOT NULL DEFAULT '',
  `mamau` varchar(11) NOT NULL DEFAULT '',
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `MauSacSP` WRITE;
/*!40000 ALTER TABLE `MauSacSP` DISABLE KEYS */;

INSERT INTO `MauSacSP` (`id`, `tenmau`, `mamau`, `daxoa`)
VALUES
	(1,'white','#ffffff',b'0'),
	(2,'black','#000000',b'0');

/*!40000 ALTER TABLE `MauSacSP` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table NhaCungCap
# ------------------------------------------------------------

DROP TABLE IF EXISTS `NhaCungCap`;

CREATE TABLE `NhaCungCap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenncc` varchar(255) NOT NULL DEFAULT '',
  `quocgiancc` varchar(255) NOT NULL DEFAULT '',
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `NhaCungCap` WRITE;
/*!40000 ALTER TABLE `NhaCungCap` DISABLE KEYS */;

INSERT INTO `NhaCungCap` (`id`, `tenncc`, `quocgiancc`, `daxoa`)
VALUES
	(1,'Supreme','USA',b'0'),
	(2,'Gucci','US',b'0'),
	(3,'LV','US',b'0'),
	(4,'5THEWAY','VN',b'0'),
	(5,'BAPE','JAPAN',b'0'),
	(6,'BOBUI','VN',b'0');

/*!40000 ALTER TABLE `NhaCungCap` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table SANPHAM
# ------------------------------------------------------------

DROP TABLE IF EXISTS `SANPHAM`;

CREATE TABLE `SANPHAM` (
  `pid` varchar(11) NOT NULL DEFAULT '',
  `idnhacungcap` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL DEFAULT '',
  `loaisp` int(11) NOT NULL,
  `mota` varchar(255) NOT NULL DEFAULT '',
  `dongia` int(32) NOT NULL,
  `soluong` int(11) NOT NULL,
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `SANPHAM_LOAISP` (`loaisp`),
  KEY `SANPHAM_NHACUNGCAP` (`idnhacungcap`),
  CONSTRAINT `SANPHAM_LOAISP` FOREIGN KEY (`loaisp`) REFERENCES `LoaiSP` (`idloai`),
  CONSTRAINT `SANPHAM_NHACUNGCAP` FOREIGN KEY (`idnhacungcap`) REFERENCES `NhaCungCap` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `SANPHAM` WRITE;
/*!40000 ALTER TABLE `SANPHAM` DISABLE KEYS */;

INSERT INTO `SANPHAM` (`pid`, `idnhacungcap`, `tensanpham`, `loaisp`, `mota`, `dongia`, `soluong`, `daxoa`)
VALUES
	('SP001',1,'Long Tee Black/White',4,'100% cotton',350000,100,b'0'),
	('SP002',1,'Jean Jacket Dark Blue',5,'100% Jean',450000,100,b'0'),
	('SP003',1,'Basic Tee',6,'100% Cotton',150000,100,b'0'),
	('SP004',1,'OFFWHITE Tee',7,'100% Cotton',650000,100,b'0'),
	('SP005',2,'Tee',8,'100% Cotton',300000,100,b'0'),
	('SP006',3,'Basic Tee',4,'100% Cotton',300000,100,b'0'),
	('SP007',3,'Basic Tee',5,'100% Cotton',300000,100,b'0'),
	('SP008',3,'Basic Tee',6,'100% Cotton',300000,100,b'0'),
	('SP009',3,'Basic Tee',7,'100% Cotton',300000,100,b'0'),
	('SP010',3,'Basic Tee',8,'100% Cotton',300000,100,b'0'),
	('SP011',3,'Basic Tee',9,'100% Cotton',300000,100,b'0'),
	('SP012',3,'Basic Tee',10,'100% Cotton',300000,100,b'0'),
	('SP013',3,'Basic Tee',11,'100% Cotton',300000,100,b'0'),
	('SP014',3,'Basic Tee',12,'100% Cotton',300000,100,b'0'),
	('SP015',3,'Basic Tee',13,'100% Cotton',300000,100,b'0'),
	('SP016',3,'Basic Tee',9,'100% Cotton',300000,100,b'0'),
	('SP017',3,'Basic Tee',10,'100% Cotton',300000,100,b'0'),
	('SP018',3,'Basic Tee',11,'100% Cotton',300000,100,b'0'),
	('SP019',3,'Basic Tee',12,'100% Cotton',300000,100,b'0'),
	('SP020',3,'BASIC TEE',13,'100% COTTON',300000,100,b'0'),
	('SP021',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP022',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP023',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP024',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP025',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP026',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP027',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP028',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP029',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP030',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP031',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP032',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP033',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP034',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP035',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP036',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP037',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP038',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP039',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP040',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP041',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP042',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP043',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP044',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP045',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP046',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP047',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP048',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP049',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP050',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP051',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP052',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP053',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP054',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP055',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP056',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP057',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP058',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP059',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP060',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP061',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP062',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP063',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP064',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP065',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP066',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP067',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP068',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP069',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP070',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP071',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP072',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP073',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP074',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP075',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP076',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP077',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP078',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP079',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP080',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP081',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP082',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP083',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP084',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP085',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP086',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP087',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP088',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP089',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP090',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP091',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP092',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP093',3,'BASIC TEE',14,'100% COTTON',300000,100,b'0'),
	('SP094',3,'BASIC TEE',7,'100% COTTON',300000,100,b'0'),
	('SP095',3,'BASIC TEE',15,'100% COTTON',300000,100,b'0'),
	('SP096',3,'BASIC TEE',7,'100% COTTON',300000,100,b'0'),
	('SP097',3,'BASIC TEE',15,'100% COTTON',300000,100,b'0'),
	('SP098',3,'BASIC TEE',7,'100% COTTON',300000,100,b'0'),
	('SP099',3,'BASIC TEE',15,'100% COTTON',300000,100,b'0');

/*!40000 ALTER TABLE `SANPHAM` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table SanPhamHOT
# ------------------------------------------------------------

DROP TABLE IF EXISTS `SanPhamHOT`;

CREATE TABLE `SanPhamHOT` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsanpham` varchar(255) NOT NULL DEFAULT '',
  `thoigianbatdau` date NOT NULL,
  `thoigianketthuc` date NOT NULL,
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `SANPHAMHOT_SANPHAM` (`idsanpham`),
  CONSTRAINT `SANPHAMHOT_SANPHAM` FOREIGN KEY (`idsanpham`) REFERENCES `SANPHAM` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `SanPhamHOT` WRITE;
/*!40000 ALTER TABLE `SanPhamHOT` DISABLE KEYS */;

INSERT INTO `SanPhamHOT` (`id`, `idsanpham`, `thoigianbatdau`, `thoigianketthuc`, `daxoa`)
VALUES
	(3,'SP098','2018-10-01','2018-12-31',b'0'),
	(4,'SP012','2018-10-01','2018-12-31',b'0'),
	(5,'SP003','2018-10-01','2018-12-31',b'0'),
	(6,'SP076','2018-10-01','2018-12-31',b'0'),
	(7,'SP010','2018-10-01','2018-12-31',b'0'),
	(8,'SP014','2018-10-01','2018-12-31',b'0'),
	(9,'SP034','2018-10-01','2018-12-31',b'0'),
	(10,'SP052','2018-10-01','2018-12-31',b'0'),
	(11,'SP013','2018-10-01','2018-11-01',b'0');

/*!40000 ALTER TABLE `SanPhamHOT` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table TAIKHOAN
# ------------------------------------------------------------

DROP TABLE IF EXISTS `TAIKHOAN`;

CREATE TABLE `TAIKHOAN` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `tentaikhoan` varchar(255) NOT NULL DEFAULT '',
  `matkhau` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `diachi` varchar(255) NOT NULL DEFAULT '',
  `laquanly` bit(1) NOT NULL,
  `dakichhoat` bit(1) NOT NULL,
  `daxoa` bit(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `TAIKHOAN` WRITE;
/*!40000 ALTER TABLE `TAIKHOAN` DISABLE KEYS */;

INSERT INTO `TAIKHOAN` (`uid`, `tentaikhoan`, `matkhau`, `email`, `diachi`, `laquanly`, `dakichhoat`, `daxoa`)
VALUES
	(1,'hxutixnnn','d35ccfe87ac69d91e08190d261e1550d','ng.huutien98@gmail.com','HCM',b'1',b'1',b'0'),
	(2,'admin','e10adc3949ba59abbe56e057f20f883e','test@gmail.com','HCM',b'0',b'0',b'0');

/*!40000 ALTER TABLE `TAIKHOAN` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
