-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 05:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(6) NOT NULL,
  `nama_laptop` varchar(255) DEFAULT NULL,
  `processor` varchar(125) DEFAULT NULL,
  `ram` varchar(125) DEFAULT NULL,
  `igp` varchar(125) DEFAULT NULL,
  `gpu` varchar(125) DEFAULT NULL,
  `monitor` varchar(125) DEFAULT NULL,
  `kapasitas_baterai` varchar(125) DEFAULT NULL,
  `daya_charger` varchar(125) DEFAULT NULL,
  `storage` varchar(125) DEFAULT NULL,
  `bobot` varchar(125) DEFAULT NULL,
  `bluetooth` varchar(125) DEFAULT NULL,
  `OS` varchar(125) DEFAULT NULL,
  `IO` varchar(125) DEFAULT NULL,
  `harga` int(12) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_laptop`, `processor`, `ram`, `igp`, `gpu`, `monitor`, `kapasitas_baterai`, `daya_charger`, `storage`, `bobot`, `bluetooth`, `OS`, `IO`, `harga`, `stok`) VALUES
('BR001', 'ASUS ROG Zephyrus G14 GA401', 'AMD Ryzen 9 4900HS(4.3GHz, 8 core, 16 threads)', 'RAM 16GB - 3200(2 x 8 GB,up to 24GB)', 'AMD Radeon Graphics(shared)', 'Nvidia RTX 2060 Max-Q design - 6 GB ( TDP = 65W)', '14 inch 1440P 100%SRGB', '76 Whrs', '180W', 'SSD M.2 NVME PCIe 512 GB', '1,6 Kg', 'Bluetooth 5.0', 'Windows 10 Home', '4x USB 3.2 gen 1, 3x Type C 3.2 gen 2, HDMI, Audio combo jack 3.5MM', 14799000, 8),
('BR002', 'ASUS ROG GL552VX', 'i7-6700HQ(3,5GHz, 4 core, 8 threads)', 'RAM 8GB - 2133 (up to 64 GB)', 'Intel HD graphics 530(shared)', 'GTX 960M - 4GB (TDP = 65 W)', '15.6 inch 1080P 93%SRGB', '48 Whrs', '120W', 'HDD 1 Tb', '2,6 Kg', 'Bluetooth 4.0', 'Windows 10 Home', '2x usb 3.2 gen 1, 1x usb 2.0, 1x Type C 3.2 gen 1, HDMI, Micro SD card reader, LAN, Audio jack 3.5 MM', 14100000, 0),
('BR003', 'ASUS ROG GL553VE', 'i7-7700HQ(3.8GHz, 4 core, 8 Threads)', 'RAM 8GB - 2133 (1 x 8 GB,up to 16 GB)\n', 'Intel HD graphics 630(shared)?', 'Nvidia GTX 1050TI - 4GB(TDP = 64W)', '15.6 inch 1080P 45%NTSC', '48 Whrs', '120W', 'HDD 1 Tb', '2,5 Kg', 'Bluetooth 4.0', 'Windows 10 Home', '1x usb 2.0, 2x usb 3.0, 1 Type C, LAN, HDMI, Audio combo jack 3.5 MM', 19000000, 0),
('BR004', 'ASUS ROG G551VW', 'i7-6700HQ(3,5GHz, 4 core, 8 threads)', 'RAM 8GB - 2133 (1 x 8 GB, up to 16 GB)\n', 'Intel HD graphics 530(shared)?', '?GTX 960 - 4GB (TDP = 65 W)', '15.6 inch 2160P 45%NTSC', '56 Whrs', '120W', 'HDD 1 Tb', '2,7 Kg', 'Bluetooth 5.0', 'Windows 10 Home', '3x usb 3.0, audio combo jack 3.5MM, Mini display port, HDMI, LAN', 6999999, 6),
('BR005', 'ASUS ROG Strix Scar 17 (2022) G733ZX-I98RC6T-O', 'i9-12900H(5.0GHz, 14 core, 20 Threads)', 'RAM 32GB-4800(2 x 16 GB, upgradable)', '0', 'Nvidia RTX 3070 TI - 8 GB( TDP = 115W)', '17.3 inch 1440P 100% DCI-P3', '90 Whrs', '280W', 'SSD M.2 NVME PCIe 1 Tb', '2,8 Kg', 'Bluetooth 5.2', 'Windows 11', '2x usb 3.2 gen 2, 1x Thunderbolt 4, 1x Type C, HDMI, LAN, Charging port, Audio combo jack 3.5 MM', 73598850, 17),
('BR006', 'ASUS ROG Zephyrus Duo 15 SE GX551QM', 'AMD Ryzen 7-5800H(4.4GHz, 8 core, 16 Threads)', '16GB-3200(2 x 8 GB, up to 24 GB)', 'AMD Radeon graphics (shared)', 'Nvidia RTX 3060 - 6GB(TDP = 130W)', '15.6 inch 1080P 100%SRGB', '90 Whrs', '280W', 'SSD M.2 NVME PCIe 1 Tb\n', '?2,78 Kg', 'Bluetooth 5.2', 'Windows 10 Home', '3x usb 3.2 gen 2, 1x Type C 3.2 gen 2, HDMI, LAN, Micro SD card reader, Charging port, Audio combo jack 3.5 MM', 50999000, 10),
('BR007', 'ASUS ROG Strix G15 (2022) G513RC-R735B6P-O', 'AMD Ryzen 7 6800H(4.7GHz, 8 core, 16 Threads)', 'RAM 8GB-4800(1 x 8 GB, upgradable)', '0', 'Nvida RTX 3050 - 4GB(TDP = 95W)', '15.6 inch 1080P 66%SRGB', '56 Whrs', '200W', 'SSD M.2 NVME PCIe 512 GB', '2,3 Kg', 'Bluetooth 5.2', 'Windows 10 Home', '2x usb 3.2 gen 1, 2x Type C 3.2 gen 2, HDMI, LAN, Charging port, Audio combo jack 3.5 MM', 17689000, 46),
('BR008', 'ASUS Vivobook Pro 16X OLED', 'i7-11370H(4.8GHz, 4 core, 8 Threads)', 'RAM 16GB-3200(2x 8 GB, onboard)', 'Intel Iris XE graphics(shared)', 'Nvidia RTX 3050 - 4GB(TDP = 50W)', '15.6 inch 2400P 100%DCI-P3', '96 Whrs', '120W', 'SSD M.2 NVME PCIe 1 TB', '1.95 Kg', 'Bluetooth 5.2', 'Windows 11', '2x usb 2.0, 1x usb 3.1 gen 1, HDMI, Thunderbolt 4, Micro SD card reader, audio combo jack 3.5 MM, Charging port', 19999000, 39),
('BR009', 'ASUS ZenBook 13 OLED', 'AMD Ryzen 7 6800U (4.7GHz, 8 core, 16 threads)\n', 'RAM 16GB-6400(2 x 8 GB, onboard)\n', 'AMD Radeon 680M(shared)', '0', '13.3 inch 1080P 100%DCI-P3', '67 Whrs', '65W', 'SSD M.2 NVME PCIe 1 TB', '1 Kg', 'Bluetooth 5.2', 'Windows 11', '3x Type C 3.2 gen 2, Audio combo jack 3.5 MM', 11889999, 18),
('BR010', 'ASUS TUF Gaming FX505DY', 'AMD Ryzen 5 3550H (3.7GHz, 4 core, 8 Threads)', 'RAM 8GB-2400(up to 32 GB)', 'AMD Radeon vega 8 (shared)', 'Radeon RX 560X - 4 GB( TDP = 65W)', '15.6 inch 1080P 45% NTSC', '48 Whrs', '120W', 'HDD 1 TB', '2.2 Kg', 'Bluetooth 4.2', 'Windows 10 Home', '1x usb 2.0, 2x usb 3.1 gen 1, LAN, HDMI, audio combo jack 3.5 MM, charging port', 9999000, 30),
('BR011', 'ASUS VivoBook 14 A412FA', 'intel Pentium Gold N 5405U(2.3GHz, 2 core, 4 thread)', 'RAM 4GB-2400 (up to 12 GB )\n', 'Intel UHD graphics 610(shared)', '0', '14 inch 1080P 45% NTSC', '38 Whrs', '45W', 'SSD M.2 256 GB', '1.4 Kg', 'Bluetooth 4.2', 'Windows 10 Home', '2x usb 3.0, usb type C 3.1, HDMI, audio combo jack 3.5MM, charging port, micro SD card reader', 4750000, 2),
('BR012', 'ASUS M415-DAO', 'Athlon gold 3150u(3.3GHz, 2 core, 4 threads)', 'RAM 4GB-2400 (up to 12 GB )\n', 'AMD radeon RX Vega 3(shared)', '0', '14 inch 1080P 45% NTSC', '37 Whrs', '45W', 'SSD M.2 NVME PCIe 256 GB', '1.6 Kg', 'Bluetooth 4.2', 'Windows 11', '2x usb 2.0, 1x usb 3.2 gen 1, 1x type C 3.2 gen 1, HDMI, Charging port, Audio combo jack 3.5 MM', 5329000, 43),
('BR013', 'ASUS Expertbook B1 B1400', 'i5-1135G7(4.2GHz, 4 core, 8 threads)\n', 'RAM 8GB-3200(up to 24 GB)\n', 'Intel Iris XE graphics(shared)', 'Nvidia MX 330 - 2 GB( TDP = 10W)', '14 inch 1080P 45% NTSC', '42 Whrs', '65W', 'HDD 1 TB', '1.45 Kg', 'Bluetooth 5.1\n', 'Windows 10 Pro', '1x usb 2.0, 2x usb 3.2 gen 2, 1x Thunderbolt 4, LAN, HDMI, VGA, micro SD card reader, audio combo jack 3.5 MM', 11000000, 9),
('BR014', 'ASUS ZenBook 14 UM431DA', 'AMD Ryzen 7 3700U(4.0GHz, 4 core , 8 Threads)\n', 'RAM 8GB-2400(2 x 4 GB. Onboard)\n', 'AMD Radeon vega 8 (shared)\n', '0', '14 inch 1080P 100% SRGB\n', '47 Whrs\n', '45W', 'SSD M.2 NVME PCIe 512 GB', '1.4 Kg', 'Bluetooth 5.0', 'Windows 10 Home', '1x usb 2.0,1x usb 3.0,1x type C 3.1 gen 1, Micro SD card reader, HDMI, Charging port, Audio combo jack 3.5 MM', 11999000, 38),
('BR015', 'DELL XPS 13', 'i7-1065G7(3.9GHz, 4 core, 8 Thread)', 'RAM 16GB-3733(2 x 8 GB, onboard)', 'Intel Iris plus graphics(shared)', '0', '13.3 inch 2400P 90% DCI-P3', '51 Whrs', '45W', 'SSD M.2 NVME PCIe 512 GB', '1.31 Kg', 'Bluetooth 5.0', 'Windows 10 Pro', '1x usb 3.0, 2x Thunderbolt 3, Micro SD card reader, Audio combo jack 3.5 MM, HDMI, VGA port, LAN', 11999000, 29),
('BR016', 'DELL XPS 15', 'i5-12500H(4.5GHz, 12 core, 16 Threads)\n', 'RAM 16GB-4800(2 x 8 GB)', '0', 'Nvidia RTX 3050 - 4GB(TDP = 40W)\n', '15.6 inch 1200P 100% DCI-P3', '86 Whrs', '130W', 'SSD M.2 NVME PCIe 512 GB', '1.92 Kg', 'Bluetooth 5.2', 'Windows 10 Home', '1x Type C, 2x Thunderbolt 4, audio combo jack 3.5 MM, Micro SD card reader', 25399000, 2),
('BR017', 'DELL Inspiron 14 5410', 'i5-11300H(4.4GHz, 4 core, 8 Threads)', 'RAM 8GB-3200(2 x 4GB, up to 16 GB)', 'Intel Iris XE graphics(shared)', '0', '14 inch 1080P 45%NTSC', '41 Whrs', '65W', 'SSD M.2 NVME PCIe 512 GB', '1.65 Kg', 'Bluetooth 5.1', 'Windows 11', '2x usb 3.2, 1x Type C 3.2, HDMI, Micro SD slot, charging port, Audio combo jack 3.5 MM', 14000000, 1),
('BR018', 'DELL Alienware M15 R6', 'i7-11800H(4.6GHz, 8 core, 16 Threads)', 'RAM 32GB-3200(2 x 16 GB, up to 64 GB)', 'Intel UHD graphics(shared)', 'Nvidia RTX 3060 - 6 GB( TDP = 130 W)', '15.6 inch 1440P 100%SRGB', '86 Whrs', '240W', 'SSD M.2 NVME PCIe 1 TB', '2.5 Kg', 'Bluetooth 5.2', 'Windows 10 Home', '3x usb 3.2 gen 1, 1x Thunderbolt 4, HDMI, LAN, Audio combo jack 3.5 MM, Charging port', 41099000, 26),
('BR019', 'DELL Latitude 3410', 'i5-10210U(4.2 GHz, 4 core, 8 threads)', 'RAM 8GB-2400(2 x 4 GB)', 'Intel UHD graphics (shared)', '0', '14 inch 1080P 45%NTSC', '40 Whrs', '65W', 'SSD M.2 256 GB\n', '2.5 Kg', 'Bluetooth 5.2', 'Windows 10 Home', '1x usb 2.0, 1x type C 3.2 gen 1, 2x usb 3.2 gen 1, HDMI, LAN, Micro SD card reader, audio combo jack 3.5MM', 5849100, 17),
('BR020', 'DELL Latitude 7390 2-In-1', 'i7-8650U(4.2GHz, 4 core, 8 threads)', 'RAM 8GB-2133(up to 16 GB)', 'Intel UHD graphics 620(shared)', '', '14 inch 1080P 93%SRGB', '60 Whrs', '65W', 'SSD M.2 256 GB\n', '1.6 Kg', 'Bluetooth 4.2', 'Windows 10 Pro', '2x usb 3.1, 2x Thunderbolt 3, HDMI, Smart card reader, micro SD card reader, audio combo jack 3.5MM', 8299000, 3),
('BR021', 'DELL Vostro 13 5310', 'i5-11300H(4.4GHz, 4 core, 8 Threads)', 'RAM 8GB-4267(2 x 4 GB, onboard)', 'Intel Iris XE graphics(shared)?', 'Nvidia MX 450 - 2 GB( TDP = 25W)', '13.3 inch 1200P 100%SRGB', '54 Whrs', '65W', 'SSD M.2 512 GB', '1.26 Kg', 'Bluetooth 5.1', 'Windows 11', '1x usb 3.2 gen 1, 2x Thunderbolt 4, HDMI, Audio combo jack 3.5MM', 13499000, 3),
('BR022', 'Acer Swift 3X', 'i5-1135G7(4.2GHz, 4 core, 8 threads)\n', 'RAM 8GB-4267(2 x 4 GB, onboard)', 'Intel Iris XE graphics(shared)?', '?Intel Iris XE max Graphics - 4GB(TDP = 25W)', '14 inch 1440P 100%SRGB', '57 Whrs', '65W', 'SSD M.2 512 GB', '1.34 Kg', 'Bluetooth 5.1', 'Windows 10 Home', '2x usb 3.2 gen 1, 1x Thunderbolt 4, HDMI, Audio combo jack 3,5 MM, charging port', 10899000, 3),
('BR023', 'Acer Nitro 5', 'i7-12700H(4.7GHz, 14 core, 20 Threads)', 'RAM 16GB-4800(up to 32 GB)', 'Intel Iris XE graphics(shared)', 'Nvidia RTX 3060 - 6 GB(TDP = 140W)', '15.6 inch 1440P 100%SRGB', '57 Whrs', '230W', 'SSD M.2 512 GB', '2.38 Kg', 'Bluetooth 5.2', 'Windows 11', '1x usb 3.2gen 1, 2x usb 3.2 gen 2, 1x Thunderbolt 4, LAN, Audio combo jack 3.5 MM, Charging port,HDMI', 23899000, 34),
('BR024', 'Acer Swift X', 'AMD ryzen 5 5600U(4.2GHz, 6 core, 12 threads)', 'RAM 16GB-4266(2 x 8 GB, onboard)', '0', 'Nvidia RTX 3050 - 4GB( TDP = 40 W)', '14 inch 1440P 100%SRGB', '57 Whrs', '65W', 'SSD M.2 512 GB', '1.4 Kg', 'Bluetooth 5.2', 'Windows 10 Home', '2x usb 3.2 gen 1, 1x Type C 3.2 gen 2, HDMI, Audio combo jack 3.5 MM, Charging port', 11249000, 37),
('BR025', 'Acer Aspire V5', 'i3-2375M(1.5GHz, 2 Core, 4 thread)', 'RAM 2 GB-1333MHz (up to 6 GB)', 'Intel HD 3000 (shared)', '0', '14 inch 768P 100%SRGB', '29 Whrs', '65W', 'HDD 512 GB', '2.3 Kg', 'Bluetooth 4.0', 'Windows 8', '1x USB 3.0, 2x USB 2.0, HDMI, Charging port', 4650000, 23),
('BR026', 'Acer Swift 1 SF114-34', 'Intel Pentium Silver N6000(3.3GHz, 4 core, 4 threads)\n', 'RAM 4GB- 2933 (onboard)\n', 'Intel UHD (shared)\n', '0', '14 inch 768P 47%NTSC', '48 Whrs', '45W', 'SSD M.2 NVME PCIe 512 GB', '1.3 Kg', 'Bluetooth 5.1', 'Windows 10 Home', '2x usb 3.2, 1x Type C, HDMI, Charging port, Audio combo jack 3.5 MM', 6295000, 21),
('BR027', 'Lenovo IdeaPad D330', 'intel celeron N4000 (2.6GHz, 2 core, 2 Threads)', 'RAM 4GB-2133(onboard)\n', 'Intel UHD graphics 600(shared)', '0', '10.1 inch 1200P 45%NTSC', '39 Whrs', '45W', 'SSD 128 GB\n', '1.1 Kg', 'Bluetooth 5.1', 'Windows 10 Pro', '2x usb 2.0, type C 3.1 gen 2. micro SD card reader, audio combo jack 3.5 MM', 5300000, 1),
('BR028', 'Lenovo ThinkPad T470s', 'i7-8565U(4.6 GHz, 4 core, 8 Threads)', 'RAM 16GB-2400(2 x 8 GB, onboard)', 'Intel UHD graphics 620(shared)', '0', '14 inch 1080P 100% Adobe RGB', '57 Whrs', '65W', 'SSD M.2 NVME PCIe 512 GB', '1.33 Kg', 'Bluetooth 5.0', 'Windows 10 Pro', '2x usb 3.1 gen 1, 1x Thunderbolt 3, 1x Type C (power delivery&display port), smart card reader, LAN, HDMI, audio combo jack 3', 6750000, 28),
('BR029', 'Lenovo IdeaPad Slim 5', 'I7-1260P(4,7GHz, 12 core, 16 Threads)', 'RAM 16GB-4800(2 x 8 GB, onboard)', 'Intel Iris XE graphics', 'RTX 2050 - 4 GB(TDP = 35 W)', '14 inch 1440P 100%SRGB', '57 Whrs', '100W', 'SSD M.2 NVME PCIe 1 TB', '1.42 Kg', 'Bluetooth 5.1', 'Windows 11', '2x USB 3.2 gen 1, 2x type c 3,2 gen 1, HDMI, Micro SD card reader,Audio combo jack 3.5 MM', 8400000, 14),
('BR030', 'Lenovo Yoga Slim 7', 'i5-1035G7(3.6GHz, 4 core, 8 Threads)', 'RAM 8GB-3200(2 x 4GB, onboard)', 'Intel UHD graphics(shared)', 'Nvidia MX350 - 2GB( TDP = 25W)', '14 inch 1440P 100%SRGB', '60 Whrs', '95W', 'SSD M.2 NVME PCIe 512 GB', '1.44 Kg', 'Bluetooth 5.1', 'Windows 10 Home', '2x usb 3.2 gen 1, 1x type C thunderbolt 3 USB 3.2 gen 2, micro SD card reader, HDMI, audio combo jack 3.5 MM, charging port', 9000000, 25),
('BR031', 'Lenovo IdeaPad Flex 3 11', 'intel celeron N4020 (2.8 GHz, 2 core, 2 threads)', 'RAM 4GB-2600 (onboard)', 'intel UHD graphics 620 (shared)', '0', '11.6 inch 768P 45%NTSC', '36 Whrs', '65W', 'SSD 256 GB', '1.4 Kg', 'Bluetooth 5.0', 'Windows 10 Home', '2x usb 3.1, Micro SD card reader, Charging port, HDMI, Audio combo jack 3.5 MM', 5000000, 7),
('BR032', 'Lenovo IdeaPad C340', 'i7-8565U(4.6 GHz, 4 core, 8 Threads)', 'RAM 16GB-2400(onboard)', 'Intel UHD graphics 620 (shared)', 'Nvidia MX 230 - 2 GB( TDP = 10W)', '14 inch 1080P 45%NTSC', '45 Whrs', '65W', 'SSD M.2 NVME PCIe 1 TB', '1.6 Kg', 'Bluetooth 5.0', 'Windows 10 Home', '2x usb 3,1 gen 1, 1x Type c 3.1 gen 1, HDMI, Charging port, Micro SD card reader, Audio combo jack 3.5 MM', 11650000, 41),
('BR033', 'Lenovo Yoga 9i', 'i7-1280P(4.8GHz, 14 core, 20 Threads)', 'RAM 16GB-5200(2 x 8 GB, onboard)', 'Intel Iris XE graphics(shared)', '0', '14 inch 2400P 100% DCI-P3', '75 Whrs', '100W', 'SSD M.2 NVME PCIe 1 TB', '1.42 Kg', 'Bluetooth 5.1', 'Windows 11', '1x usb 3.2 gen 2, 2x Thunderbolt 4, 1x Type C 3.2 gen 2, Audio combo jack 3.5 MM', 27000000, 28),
('BR034', 'Lenovo Legion Slim 7', 'AMD Ryzen 7 5800H(4.4GHz, 8 core, 16 threads)', 'RAM 32GB-3200(2 x 16 GB, onboard)', 'AMD Radeon Graphics(shared)', 'Nvidia RTX 3060 - 6 GB( TDP = 100 W)', '15.6 inch 1440P 100%SRGB', '71 Whrs', '230W', 'SSD M.2 NVME PCIe 1 TB', '1.92 Kg', 'Bluetooth 5.2', 'Windows 11', '2x usb 3.2 gen 2, 2x Type C 3.2 Gen 2, Charging port, Micro SD card Reader, Audio combo jack 3.5 MM', 24300000, 31),
('BR035', 'Lenovo Legion 7', 'AMD Ryzen 9 5900X(4.6GHz, 8 core, 16 Threads)', 'RAM 32GB-3200(2 x 16 GB, up to 64 GB)', '0', 'Nvidia RTX 3080 - 16GB( TDP = 165 W)', '15.6 inch 1600P 100%SRGB', '80 Whrs', '300W', 'SSD M.2 NVME PCIe 2 TB', '2.5 Kg', 'Bluetooth 5.1', 'Windows 10 Home', '3x usb 3.2 gen 1, 2x Type C 3.2 gen 2, 1x Type C 3.2 gen 1,LAN, HDMI, Audio combo jack 3.5 MM', 34000000, 26),
('BR036', 'Lenovo Legion 7I', 'i9-12900HX(5.0GHz, 16 core, 24 Threads)', 'RAM 32GB-4800(2 x 16 GB)', 'Intel UHD graphics (shared)', 'Nvidia RTX 3080 TI - 16 GB ( TDP = 175 W)', '15.6 inch 1600P 98%SRGB', '100 Whrs', '300W', 'SSD M.2 NVME PCIe 2 TB', '2.55 Kg', 'Bluetooth 5.1', 'Windows 11', '2x usb 3.2gen 1, 2x Type C 3.2 gen 1, 2x Thunderbolt 4, LAN, HDMI, Audio combo jack 3.5 MM, charging port', 66000000, 27);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_Penjualan` int(5) NOT NULL,
  `id_barang` varchar(6) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `namapembeli` varchar(32) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(32) DEFAULT NULL,
  `kodepos` varchar(5) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_Penjualan`, `id_barang`, `jumlah`, `namapembeli`, `alamat`, `kota`, `kodepos`, `telp`, `email`) VALUES
(1, 'BR009', 6, 'Coba', 'Jl. 727', 'Namek', '0823', '12345', 'tomay@gmail.com'),
(2, 'BR002', 5, 'Elmer', 'Alo', 'Tangerang', '08080', '123', 'elmer@gmail.com'),
(3, 'BR001', 18, 'cibazi', 'Jl. Digidau', 'Ramaiyana', '27272', '0819', 'ahmad@gmail.com'),
(4, 'BR002', 1, 'Test', 'Jl. Tegal', 'Namek', '27272', '085314467886', 'test@gmamil.ocom'),
(5, 'BR002', 10, 'Tomay', 'Namek', 'Bekasi', '1234', '09999', 'tomaytomay@gmail.com'),
(6, 'BR001', 5, 'Test', 'Jl. Digidau', 'Camellia', '27272', '0819', 'bryan@example.com'),
(7, 'BR001', 10, 'Ricardus', 'Alo', 'Tangerang', '100', '0819', 'test@gmamil.ocom'),
(8, 'BR001', 10, 'Tomay Tomay', 'Jl. Tegal', 'Bekasi', '27272', '0819', 'bryan@example.com'),
(9, 'BR002', 25, 'j', 'k', 'k', 'lk', '908', 'jhk@gmail.com'),
(10, 'BR001', 10, 'Test', 'Jl. Digidau', 'Camellia', '27272', '121', 'bryan.elmer@student.pradita.ac.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_Penjualan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_Penjualan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
