-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 09:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `womenshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `sno` int(11) NOT NULL,
  `pid` varchar(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pprice` int(11) NOT NULL,
  `actualprice` int(11) NOT NULL,
  `pdesc` longtext NOT NULL,
  `pcategory` varchar(200) NOT NULL,
  `psubcategory` varchar(200) NOT NULL,
  `pimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`sno`, `pid`, `pname`, `pprice`, `actualprice`, `pdesc`, `pcategory`, `psubcategory`, `pimage`) VALUES
(4, '1', 'AVAASA SET', 1799, 1999, 'Round-Neck A-Line Dress', 'Gowns and Dresses', 'Casual', 'g1.jpg'),
(5, '2', 'FUSION', 1399, 1699, 'Printed A-Line Double Layered Dress', 'Gowns and Dresses', 'Casual', 'g2.jpg'),
(6, '3', 'SVRNAA', 1799, 1999, 'Printed A-line Dress with Tassels', 'Gowns and Dresses', 'Casual', 'g3.jpg'),
(7, '4', 'SIDYAL', 1500, 1692, 'Floral Embroidered Pleated Gown', 'Gowns and Dresses', 'Casual', '-473Wx593H-466030160-wine-MODEL.jpg'),
(8, '5', 'AKS', 1600, 1800, 'Micro Print Fit & Flare Dress', 'Gowns and Dresses', 'Casual', 'g5.jpg'),
(10, '6', 'AARKE RITU KUMAR', 1600, 1740, 'Printed A-line Dress', 'Gowns and Dresses', 'Casual', 'g6.jpg'),
(11, '7', 'AARKE RITU KUMAR', 1300, 1470, 'Embroidered Halter-Neck Fit & Flare Dress', 'Gowns and Dresses', 'Casual', 'g7.jpg'),
(12, '8', 'FUSION', 1500, 1699, 'Floral Print Fit & Flare Dress', 'Gowns and Dresses', 'Casual', 'g8.jpg'),
(13, '9', 'FUSION', 1500, 1699, 'Tribal Print A-Line Dress with Tie-Up Neck', 'Gowns and Dresses', 'Casual', 'g9.jpg'),
(14, '10', 'FUSION', 1500, 1699, 'Floral Print Fit & Flare Dress', 'Gowns and Dresses', 'Casual', 'g10.jpg'),
(15, '11', 'AVAASA SET', 1500, 1679, 'Motif Print Flared Dress with Shrug', 'Gowns and Dresses', 'Casual', 'g11.jpg'),
(16, '12', 'SAUBHAGYA', 1500, 1600, 'Embellished Round-Neck Fit and Flare Dress', 'Gowns and Dresses', 'Casual', 'g12.jpg'),
(18, '13', 'MADHURAM TEXTILES', 1799, 1999, 'Embellished Gown with Jacket', 'Gowns and Dresses', 'Casual', 'g12 (1).jpg'),
(19, '14', 'FASHOR', 1450, 1600, 'Floral Print Fit & Flare Dress', 'Gowns and Dresses', 'Casual', 'g13.jpg'),
(20, '15', 'ESTELA', 1650, 1700, 'Embellished Round-Neck Gown Dress', 'Gowns and Dresses', 'Casual', 'g14.jpg'),
(21, '16', 'KVS FAB', 1400, 1533, 'Solid A-line Dress', 'Gowns and Dresses', 'Casual', 'g15.jpg'),
(22, '17', 'AKS', 2300, 2500, 'Chevrons Print Tiered Dress', 'Gowns and Dresses', 'Casual', 'g17.jpg'),
(23, '18', 'AKS COUTURE', 1500, 1750, 'Embellished Gown Dress', 'Gowns and Dresses', 'Casual', 'g18.jpg'),
(24, '19', 'AKS', 1800, 2000, 'Floral Fit & Flare Maxi Dress', 'Gowns and Dresses', 'Casual', 'g19 (1).jpg'),
(25, '20', 'MADHURAM TEXTILES', 1500, 1680, 'Embellished Round-Neck Tiered Dress', 'Gowns and Dresses', 'Casual', 'g20.jpg'),
(27, '21', 'KARATCART', 2545, 3500, 'Gold-Plated Multi-Piece Set', 'Fashion Jewellery', 'Indian Wear', 'g21 (1).jpg'),
(28, '22', 'MATUSHRI ART', 3200, 3999, 'Gold-Plated Necklace & Earrings with Maang TikaSet', 'Fashion Jewellery', 'Indian Wear', 'g22.jpg'),
(30, '23', 'KARATCART', 275, 500, 'Beads Embellished Kanakti Earrings', 'Fashion Jewellery', 'Indian Wear', 'g24.jpg'),
(31, '24', 'BEVOGUE', 4500, 5000, 'BV3640NK Gold-Toned Pearl Drop Jewellery Set', 'Fashion Jewellery', 'Indian Wear', 'g25.jpg'),
(34, '25', 'ZAVERI PEARLS', 1580, 2459, 'Kundan-Studded Necklace Set', 'Fashion Jewellery', 'Indian Wear', 'j27.jpg'),
(37, '26', 'SOHI', 1251, 2000, 'Gold-Plated Stone-Studded Necklace & Earrings Set', 'Fashion Jewellery', 'Indian Wear', 'j30.jpg'),
(38, '27', 'DIVA WALK', 900, 2499, 'Gold Pleated Earrings', 'Fashion Jewellery', 'Indian Wear', 'j27 (1).jpg'),
(39, '28', 'KORD STORE', 800, 5500, 'Stone Studded Jewellery Set', 'Fashion Jewellery', 'Indian Wear', 'j28.jpg'),
(40, '29', 'SARAF RS JEWELLERY', 1039, 3550, 'Stone-Studded Gold-Plated Drop Earrings', 'Fashion Jewellery', 'Indian Wear', 'j29 (1).jpg'),
(41, '30', 'I JEWELS', 1050, 2999, 'Gold-Plated Kundan-Studded Dangler Earrings', 'Fashion Jewellery', 'Indian Wear', 'j30 (1).jpg'),
(42, '31', 'SHINING DIVA', 850, 1500, '13708B Pack of 2 Stone-Studded Partially-Open Bangles', 'Fashion Jewellery', 'Indian Wear', 'j31 (1).jpg'),
(43, '32', 'BEVOGUE', 1250, 5850, 'BV3722NK Gold-Plated Stone-Studded Necklace & Earrings Set', 'Fashion Jewellery', 'Indian Wear', 'j32.jpg'),
(44, '33', 'PRIYAASI', 550, 2950, 'Rose Gold-Plated Stone-Studded Necklace & Earings Set', 'Fashion Jewellery', 'Indian Wear', 'j33.jpg'),
(45, '34', 'BEVOGUE', 1495, 5460, 'BV3619NK Gold-Plated Kundan-Studded Necklace & Earrings Jewellery Set with Maang Tikka', 'Fashion Jewellery', 'Indian Wear', 'j34.jpg'),
(46, '35', 'THE PARI', 354, 850, 'Set of 2 American Diamond-Studded Bangles', 'Fashion Jewellery', 'Indian Wear', 'j35.jpg'),
(47, '36', 'OOMPH', 288, 1922, 'NSSK79_AJR2 Pearls Multi Layered Necklace', 'Fashion Jewellery', 'Indian Wear', 'j36.jpg'),
(48, '37', 'MATUSHRI ART', 1500, 3999, 'Kundan-Studded Multi-Piece Jewellery Set', 'Fashion Jewellery', 'Indian Wear', 'j37.jpg'),
(49, '38', 'SHINING DIVA', 590, 1995, '13192ER Oxidized Stone-Studded Chandbali Earrings', 'Fashion Jewellery', 'Indian Wear', 'j38.jpg'),
(51, '39', 'THE PARI', 727, 2500, 'Set of 2 Slip-On Bangles', 'Fashion Jewellery', 'Indian Wear', 'j39.jpg'),
(52, '40', 'PRIYAASI', 641, 2300, 'Set of 2 Stone Studded Bangles', 'Fashion Jewellery', 'Indian Wear', 'J40.jpg'),
(53, '41', 'SILVERFLY', 590, 999, 'High-Rise Stretch Pants', 'Bottom Wear', 'Jeans For Women', 'b1.jpg'),
(55, '42', 'DNMX', 639, 799, 'Mid-Rise Skinny Fit Jeans', 'Bottom Wear', 'Jeans For Women', 'b2.jpg'),
(56, '43', 'KOTTY', 420, 1999, 'High-Rise Straight Fit Trousers', 'Bottom Wear', 'Jeans For Women', 'b3.jpg'),
(57, '44', 'DOLCE CRUDO', 960, 2300, 'High-Rise Skinny Jeans', 'Bottom Wear', 'Jeans For Women', 'b4.jpg'),
(58, '45', 'BROADSTAR', 1500, 2999, 'Straight Fit Cargo Pants', 'Bottom Wear', 'Jeans For Women', 'b5.jpg'),
(59, '46', 'VISIT WEAR', 480, 1999, 'High-Rise Straight Trousers', 'Bottom Wear', 'Jeans For Women', 'b6.jpg'),
(60, '47', 'BROADSTAR', 1200, 2999, 'Relaxed Fit Cargo Pants', 'Bottom Wear', 'Jeans For Women', 'b7.jpg'),
(61, '48', 'LEE COOPER', 1561, 2199, 'Heavily Washed Distressed Bootcut Jeans', 'Bottom Wear', 'Jeans For Women', 'b8.jpg'),
(62, '49', 'LEE COOPER', 1774, 2499, 'Heavily Washed Loose Fit Jeans', 'Bottom Wear', 'Jeans For Women', 'b9.jpg'),
(63, '50', 'BUDA JEANS CO', 1469, 2099, 'Straight Fit Trousers with Insert Pockets', 'Bottom Wear', 'Jeans For Women', 'b100.jpg'),
(64, '51', 'MISS PLAYERS', 799, 999, 'High-Rise Denim Shorts with Whiskers', 'Bottom Wear', 'Shorts For Women', 'b11.jpg'),
(65, '52', 'RIO GIRLS', 450, 599, 'Printed Shorts with Ruffles', 'Bottom Wear', 'Shorts For Women', 'b12.jpg'),
(66, '53', 'ADDYVERO', 550, 799, 'A-Line Skirt with Ruffled Detail', 'Bottom Wear', 'Jeans For Women', 'b13.jpg'),
(67, '54', 'LEE COOPER', 899, 999, 'Denim Skirt with Ruffles', 'Bottom Wear', 'Shorts For Women', 'b14 (1).jpg'),
(68, '55', 'ADDYVERO', 899, 1299, 'Flared Skirt with Elasticated Waist', 'Bottom Wear', 'Shorts For Women', 'b15.jpg'),
(69, '56', 'POINT COVE', 350, 649, 'Sunburst Printed Flared Skirt', 'Bottom Wear', 'Shorts For Women', 'b16.jpg'),
(70, '57', 'KIDDOPANTI', 599, 799, 'Butterfly Print Flared Skirt', 'Bottom Wear', 'Shorts For Women', 'b17.jpg'),
(71, '58', 'MAX', 296, 350, 'Floral Print Cotton Shorts with Drawstring Waist', 'Bottom Wear', 'Shorts For Women', 'b18.jpg'),
(72, '59', 'LEE COOPER', 1079, 1199, 'Shorts with Tie-Up Waist', 'Bottom Wear', 'Shorts For Women', 'b19.jpg'),
(73, '60', 'GAP KIDS', 1499, 1199, 'High-Rise Shorts With Utility Pockets', 'Bottom Wear', 'Shorts For Women', 'b20.jpg'),
(75, '61', 'SHOETOPIA', 900, 1999, 'Peep-Toe Slingback Chunky Heeled Sandals', 'Foot Wear', 'Heeled Sandals', 'h1.jpg'),
(76, '62', 'STEPPINGS', 1500, 2099, 'Reptilian Pattern Block-Heeled Platforms', 'Foot Wear', 'Heeled Sandals', 'h2.jpg'),
(77, '63', 'STEPPINGS', 950, 2199, 'Embellished Slim Heeled Sandals with Ankle Loop', 'Foot Wear', 'Heeled Sandals', 'h3.jpg'),
(78, '64', 'SNEAK-A-PEEK', 713, 2299, 'Chunky Heeled Sandals with Metal Accent', 'Foot Wear', 'Heeled Sandals', 'h4.jpg'),
(79, '65', 'JM LOOKS', 1017, 1995, 'Cone Heeled Sandals with Bow Accent', 'Foot Wear', 'Heeled Sandals', 'h5.jpg'),
(80, '66', 'MFT COUTURE', 741, 1599, 'Strappy Chunky Heeled Sandals with Buckle Closure', 'Foot Wear', 'Heeled Sandals', 'h6.jpg'),
(81, '67', 'ALDO', 11699, 1399, 'Embellished Stilettos with Ankle Strap', 'Foot Wear', 'Heeled Sandals', 'h7.jpg'),
(82, '68', 'EVERQUPID', 999, 1799, 'Stilettos with Gladiator Straps', 'Foot Wear', 'Heeled Sandals', 'h8.jpg'),
(83, '69', 'SNEAK-A-PEEK', 1035, 2299, 'Strappy Chunky Heeled Sandals', 'Foot Wear', 'Heeled Sandals', 'h9.jpg'),
(84, '70', 'MFT COUTURE', 1035, 2299, 'Strappy Square-Toe Stilettos', 'Foot Wear', 'Heeled Sandals', 'h10.jpg'),
(85, '71', 'MARC LOIRE', 1599, 2690, 'Platform Heels with Ankle-Strap', 'Foot Wear', 'Heeled Sandals', 'h11.jpg'),
(86, '72', 'MODA-X', 2969, 3999, 'Embellished Heeled Sandals with Synthetic Upper', 'Foot Wear', 'Heeled Sandals', 'h12.jpg'),
(87, '73', 'EVERQUPID', 1999, 2999, 'Open-Toe Ankle-Strap Stilettos', 'Foot Wear', 'Heeled Sandals', 'h13.jpg'),
(88, '74', 'SHOETOPIA', 1299, 1999, 'Embellished Almond-Toe Pumps', 'Foot Wear', 'Heeled Sandals', 'h14.jpg'),
(89, '75', 'FIVE BY INC.5', 1599, 2799, 'Open-Toe Platform Heels', 'Foot Wear', 'Heeled Sandals', 'h15.jpg'),
(90, '76', 'SHOETOPIA', 990, 1995, 'Pumps with Bow Accent', 'Foot Wear', 'Heeled Sandals', 'h16.jpg'),
(91, '77', 'FABBHUE', 1599, 3799, 'Embellished Bow-Strap Spool Heels', 'Foot Wear', 'Heeled Sandals', 'h17.jpg'),
(92, '78', 'FIVE BY INC.5', 1002, 2150, 'Ruched Double-Strap Chunky Heeled Sandals', 'Foot Wear', 'Heeled Sandals', 'h18.jpg'),
(93, '79', 'SNEAK-A-PEEK', 1150, 2299, 'Strappy Open-Toe Chunky Heeled Sandals', 'Foot Wear', 'Heeled Sandals', 'h19.jpg'),
(95, '80', 'CALL IT SPRING', 2599, 3500, 'Colourblock Pointed -Toe Stilettos', 'Foot Wear', 'Heeled Sandals', 'h20.jpg'),
(96, '81', 'ARBUNORE', 1518, 3299, 'Low-Top Lace-Up Shoes', 'Foot Wear', 'Casual Shoes', 's1.jpg'),
(97, '82', 'ADORLY', 950, 1799, 'Textured Lace-Up Casual Shoes', 'Foot Wear', 'Casual Shoes', 's2.jpg'),
(98, '83', 'ARBUNORE', 899, 1499, 'Textured Slip-On Shoes', 'Foot Wear', 'Casual Shoes', 's3.jpg'),
(99, '84', 'EL PASO', 1550, 3550, 'Panelled Lace-Up Casual Shoes', 'Foot Wear', 'Casual Shoes', 's4.jpg'),
(100, '85', 'SKECHERS', 999, 1499, 'Ultra Flex Prime-STE Lace-Up Shoes', 'Foot Wear', 'Casual Shoes', 's5.jpg'),
(101, '86', 'CALL IT SPRING', 4500, 5999, 'Lace-Up Heeled Casual Shoes', 'Foot Wear', 'Casual Shoes', 's6.jpg'),
(102, '87', 'EL PASO', 2599, 3749, 'Panelled Lace-Up Casual Shoes', 'Foot Wear', 'Casual Shoes', 's7.jpg'),
(103, '88', 'GINGER BY LIFESTYLE', 2124, 2499, 'Lace-Up Casual Shoes with Synthetic Upper', 'Foot Wear', 'Casual Shoes', 's8.jpg'),
(104, '89', 'CREATTOES', 1999, 2999, 'Textured Lace-Up Causal Shoes', 'Foot Wear', 'Casual Shoes', 's9.jpg'),
(105, '90', 'GINGER BY LIFESTYLE', 1614, 1899, 'Round-Toe Lace-Up Casual Shoes', 'Foot Wear', 'Casual Shoes', 's10.jpg'),
(106, '91', 'CARLTON LONDON', 711, 1395, 'A3059-A7 Uv Protected Oversized Sunglasses', 'Accessories', 'Sunglasses', 'go1.jpg'),
(107, '92', 'TED SMITH', 999, 2890, 'TS-50639-C6 UV-Protected Cat-Eye Sunglasses', 'Accessories', 'Sunglasses', 'g2 (1).jpg'),
(108, '93', 'MOSCHINO', 7553, 8500, '2054141ED549K UV-Protected Rectangular Sunglasses', 'Accessories', 'Sunglasses', 'g3 (1).jpg'),
(109, '94', 'FLOYD', 580, 1999, 'Sunglass with UV Protection Lens', 'Accessories', 'Sunglasses', 'g4.jpg'),
(110, '95', 'VOGUE HAIR ACCESSORIES', 3569, 5490, '0VO4175SB280/1353 Square UV-Protected Full-Rim Sunglasses', 'Accessories', 'Sunglasses', 'g5 (1).jpg'),
(111, '96', 'LENSKART BLU', 919, 3500, 'LB E13533 Full-Rim Computer Glasses', 'Accessories', 'Sunglasses', 'g6 (1).jpg'),
(112, '97', 'TED SMITH', 703, 2990, 'TS-50838-C2 UV-Protected Square Sunglasses', 'Accessories', 'Sunglasses', 'g7 (1).jpg'),
(113, '98', 'TED SMITH', 722, 3090, 'TS-2281-GRN UV-Protected Wayfarer Sunglasses', 'Accessories', 'Sunglasses', 'g8 (1).jpg'),
(114, '99', 'GUESS', 3746, 9990, 'GF0355 5828T UV-Protected Round Sunglasses', 'Accessories', 'Sunglasses', 'g9 (1).jpg'),
(116, '100', 'BARRELS AND OIL', 587, 2300, 'B2031 Full-Rim UV-Protected Rectangular Sunglasses', 'Accessories', 'Sunglasses', 'g100.jpg'),
(117, '101', 'LENSKART BLU', 719, 3500, 'LB E13527 Rectangular Full-Rim Frames', 'Accessories', 'Sunglasses', 'g101.jpg'),
(118, '102', 'WKND', 574, 2800, 'W2260 UV-Protected Circular Sunglasses', 'Accessories', 'Sunglasses', 'g102.jpg'),
(119, '103', 'TED SMITH', 1318, 2690, 'TS-2401-GLD-PINK UV-Protected Oversized Sunglasses', 'Accessories', 'Sunglasses', 'g103 (1).jpg'),
(120, '104', 'TED SMITH', 636, 2890, 'TS-50683-C5 UV-Protected Rimless Cat-Eye Sunglasses', 'Accessories', 'Sunglasses', 'g104.jpg'),
(121, '105', 'TED SMITH', 742, 3090, 'TS-9212-PINK UV-Protected Full-Rim Sunglasses', 'Accessories', 'Sunglasses', 'g105.jpg'),
(122, '106', 'FLOYD', 580, 1999, 'Sunglass with UV Protection Lens', 'Accessories', 'Sunglasses', 'g106.jpg'),
(123, '107', 'BARRELS AND OIL', 587, 2300, 'B2031 Full-Rim UV-Protected Rectangular Sunglasses', 'Accessories', 'Sunglasses', 'g107.jpg'),
(124, '108', 'TED SMITH', 680, 3090, 'TS-2085-GLD UV-Protected Sunglasses', 'Accessories', 'Sunglasses', 'g108.jpg'),
(126, '109', 'TED SMITH', 665, 2500, 'TS-2607-SIL Full-Rim UV-Protected Aviators', 'Accessories', 'Sunglasses', 'g109.jpg'),
(127, '110', 'FLOYD', 750, 2499, 'Circular Woman Sunglasses', 'Accessories', 'Sunglasses', 'g110.jpg'),
(129, '111', 'MARK & KEITH', 1100, 4999, 'Set of 4 Textured Handbag with Pouches', 'Accessories', 'Women Bags', 'b1 (1).jpg'),
(130, '112', 'ANNA CLAIRE', 810, 2249, 'Textured Shoulder Bag with Detachable Strap', 'Accessories', 'Women Bags', 'b2 (1).jpg'),
(131, '113', 'DIVA DALE', 899, 1699, 'Quilted Sling Bag with Chain Strap', 'Accessories', 'Women Bags', 'b3 (1).jpg'),
(133, '114', 'SWISNI', 2250, 4999, 'Embellished Clutch with Detachable Chain Strap', 'Accessories', 'Women Bags', 'b4 (1).jpg'),
(134, '115', 'SWISNI', 1575, 4499, 'Stone & Pearl Beaded Clutch', 'Accessories', 'Women Bags', 'b5 (1).jpg'),
(135, '116', 'LINO PERROS', 1528, 4495, 'Floral Print Shoulder Bag', 'Accessories', 'Women Bags', 'b6 (1).jpg'),
(136, '117', 'MIRAGGIO', 1889, 3499, 'Solid Shoulder Bag', 'Accessories', 'Women Bags', 'b7 (1).jpg'),
(137, '118', 'LAFILLE', 1592, 2199, 'Textured Handbag with Detachable Strap', 'Accessories', 'Women Bags', 'b8 (1).jpg'),
(138, '119', 'BFT PRIME', 999, 1999, 'Printed Sling Bag', 'Accessories', 'Women Bags', 'b9 (1).jpg'),
(139, '120', 'STYLI', 612, 1749, 'Crossbody Handbag with Chain Strap', 'Accessories', 'Women Bags', 'b10 (2).jpg'),
(140, '121', 'ARMANI EXCHANGE', 12749, 14999, 'Hobo Bag with Scarf Adorned Metal Chain', 'Accessories', 'Women Bags', 'b12 (1).jpg'),
(141, '122', 'DIVA DALE', 899, 1699, 'Quilted Sling Bag', 'Accessories', 'Women Bags', 'b12 (2).jpg'),
(142, '123', 'BAGGIT', 1140, 2500, 'Tote Bag with Detachable Strap', 'Accessories', 'Women Bags', 'b13 (1).jpg'),
(143, '124', 'FIG', 799, 999, 'Embellished Envelope Clutch with Chain Strap', 'Accessories', 'Women Bags', 'b14 (2).jpg'),
(144, '125', 'KENDALL + KYLIE', 2599, 3999, 'Printed Shoulder Bag with Adjustable Strap', 'Accessories', 'Women Bags', 'b15 (1).jpg'),
(145, '126', 'HAUTE SAUCE', 1998, 3843, 'Shoulder Bag with Detachable Strap', 'Accessories', 'Women Bags', 'b16 (1).jpg'),
(146, '127', 'LAVIE', 1436, 3590, 'Colourblock Sling Bag with Adjustable Strap', 'Accessories', 'Women Bags', 'b17 (1).jpg'),
(147, '128', 'WOMEN MARKS', 1599, 2999, 'Handbag with Pouch Set', 'Accessories', 'Women Bags', 'b18 (1).jpg'),
(148, '129', 'LAFILLE', 2599, 3899, 'Messenger Bag with Flap Closure', 'Accessories', 'Women Bags', 'b19 (1).jpg'),
(150, '130', 'ZOUK', 1332, 3248, 'Floral Print Round Sling Bag', 'Accessories', 'Women Bags', 'b20 (1).jpg'),
(151, '131', 'PANNKH', 340, 999, 'Novelty Top', 'Western Wear', 'Tops', 't1.jpg'),
(152, '132', 'KIBO', 860, 1999, 'Micro Print V-neck Top', 'Western Wear', 'Tops', 't2.jpg'),
(153, '133', 'TIOR', 735, 1499, 'Floral Print Square-Neck Peplum Top', 'Western Wear', 'Tops', 't3.jpg'),
(154, '134', 'KIBO', 999, 1799, 'Floral Print Smocked Top', 'Western Wear', 'Tops', 't4.jpg'),
(155, '135', 'ZNX CLOTHING', 580, 1499, 'Floral Print Wrap Top', 'Western Wear', 'Tops', 't5 (1).jpg'),
(156, '136', 'MWB', 600, 1399, 'Corset Style Square-Neck Top', 'Western Wear', 'Tops', 't5 (2).jpg'),
(157, '137', 'WEDANI', 299, 1599, 'Sleeveless High-Neck Tank Top', 'Western Wear', 'Tops', 't7.jpg'),
(158, '138', 'WEDANI', 349, 1699, 'Camouflage Print Round-Neck Top', 'Western Wear', 'Tops', 't8.jpg'),
(159, '139', 'TEAMSPIRIT', 288, 599, 'Typographic Print Round-Neck Top', 'Western Wear', 'Tops', 't9 (1).jpg'),
(160, '140', 'POPWINGS', 494, 1299, 'Floral Print Square-Neck Crop Top', 'Western Wear', 'Tops', 't10.jpg'),
(162, '141', 'MABISH BY SONAL JAIN', 770, 1999, 'Wrap Top with Tie-Up & Cuff Sleeves', 'Western Wear', 'Tops', 't11.jpg'),
(163, '142', 'RUE COLLECTION', 559, 1299, 'Full-Sleeve Peplum Top', 'Western Wear', 'Tops', 't12 (1).jpg'),
(164, '143', 'KETCH', 585, 949, 'Round-Neck Lantern Sleeve Top', 'Western Wear', 'Tops', 't13.jpg'),
(165, '144', 'TEAMSPIRIT', 539, 599, 'Slim Fit Round-Neck Crop Top', 'Western Wear', 'Tops', 't14.jpg'),
(166, '145', 'DRAAX FASHIONS', 850, 1798, 'V-neck Top with Tie-Up', 'Western Wear', 'Tops', 't15.jpg'),
(167, '146', 'GUFRINA', 600, 1499, 'Tie & Dye Tailored Fit Tunic', 'Western Wear', 'Tops', 't16.jpg'),
(168, '147', 'STYLI', 849, 989, 'Checked Round-Neck Crop Top', 'Western Wear', 'Tops', 't17.jpg'),
(169, '148', 'FYRE ROSE', 1169, 1299, 'Striped Slim Fit Crop Top', 'Western Wear', 'Tops', 't18.jpg'),
(170, '149', 'VERO MODA', 1959, 2799, 'Geometric Print Slim Fit Wrap Top', 'Western Wear', 'Tops', 't19.jpg'),
(171, '150', 'DREAM BEAUTY FASHION', 845, 1499, 'Houndstooth Print Fitted Top', 'Western Wear', 'Tops', 't20.jpg'),
(172, '151', 'READIPRINT FASHIONS', 3140, 8050, ' READIPRINT FASHIONS Embellished Semi-Stitched Anarkali Dress Material', 'Ethenic Wear', 'Occasion', 'd1.jpg'),
(173, '152', 'READIPRINT FASHIONS', 2244, 5100, 'Embellished Semi-Stitched Straight Dress Material', 'Ethenic Wear', 'Occasion', 'd2.jpg'),
(174, '153', 'FASHION BASKET', 1599, 4699, 'Embellished Semi-Stitched Anarkali Dress Material', 'Ethenic Wear', 'Occasion', 'd3.jpg'),
(175, '154', 'MISS ETHNIK', 2861, 6813, 'Embroidered Semi-Stitched Dress Material with Dupatta', 'Ethenic Wear', 'Occasion', 'd4.jpg'),
(177, '155', 'WARTHY ENT', 2406, 3699, 'Semi-stitched Anarkali Dress Material', 'Ethenic Wear', 'Occasion', 'd5.jpg'),
(178, '156', 'TAVAS', 1121, 2199, 'Embroidered Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd6.jpg'),
(179, '157', 'READIPRINT FASHIONS', 2588, 5750, 'Floral Embellished 3-Piece Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd7.jpg'),
(180, '158', 'SHUBHKALA', 3330, 9000, 'Embellished Semi-stitched Anarkali Dress Material', 'Ethenic Wear', 'Occasion', 'd8.jpg'),
(181, '159', 'BIBA', 4299, 5783, 'Embroidered 3-Piece Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd9.jpg'),
(182, '160', 'GRIVA DESIGNER', 2080, 3999, 'Embroidered Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd10.jpg'),
(183, '161', 'ETHNIC YARD', 3550, 4699, 'Embellished 3-Piece Semi-Stitched Dress Material', 'Ethenic Wear', 'Occasion', 'd11.jpg'),
(184, '162', 'ZEELPIN', 2040, 5799, 'Embellished Semi-Stitched A-line Dress Material', 'Ethenic Wear', 'Occasion', 'd12.jpg'),
(185, '163', 'SHUBHKALA', 3330, 9000, 'Embellished Semi-stitched Anarkali Dress Material', 'Ethenic Wear', 'Occasion', 'd13.jpg'),
(186, '164', 'SHUBHKALA', 4330, 8500, 'Embellished Semi-stitched Anarkali Dress Material', 'Ethenic Wear', 'Occasion', 'd14.jpg'),
(187, '165', 'READIPRINT FASHIONS', 4150, 7500, 'Embellished Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd15.jpg'),
(188, '166', 'AFSANA', 3499, 5499, 'Embellished 3-Piece Semi-Stitched Dress Material', 'Ethenic Wear', 'Occasion', 'd16.jpg'),
(189, '167', 'AFSANA', 1849, 2699, 'Embellished Semi-stitched Dress Material', 'Ethenic Wear', 'Occasion', 'd17.jpg'),
(190, '168', 'SALWAR STUDIO', 999, 1575, '3-Piece Floral Print Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd18.jpg'),
(191, '169', 'SAFAA', 2621, 3549, 'Woven Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd19.jpg'),
(192, '170', 'MANVAA', 1226, 3065, 'Embellished & Embroidered 3-Piece Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd20.jpg'),
(193, '171', 'AFSANA', 1147, 2699, 'Embellished Semi-Stitched Straight Dress Material', 'Ethenic Wear', 'Occasion', 'd21.jpg'),
(194, '172', 'MIMI DESIGN', 2599, 4949, 'Embellished 3-Piece Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd22.jpg'),
(195, '173', 'MANVAA', 1199, 2748, 'Embroidered 3-Piece Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd23.jpg'),
(196, '174', 'AFSANA', 2449, 5697, 'Embellished Semi-Stitched Anarkali Dress Material', 'Ethenic Wear', 'Occasion', 'd24.jpg'),
(197, '175', 'JATRIQQ', 2200, 4999, 'Embellished Semi-Stitched Dress Material', 'Ethenic Wear', 'Occasion', 'd25.jpg'),
(198, '176', 'SOCH', 4398, 5999, 'Embellished Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd26 (1).jpg'),
(199, '177', 'TAVAS', 1198, 2445, '3-Piece Embellished Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd27 (1).jpg'),
(200, '178', 'GRIVA DESIGNER', 1000, 2999, '3-Piece Printed Unstitched Dress Material', 'Ethenic Wear', 'Occasion', 'd28.jpg'),
(201, '179', 'FASHION BASKET', 1499, 3999, 'Embellished Semi-Stitched Anarkali Dress Material', 'Ethenic Wear', 'Occasion', 'd29.jpg'),
(203, '180', 'SHUBHKALA', 3330, 7000, 'Embellished Semi-stitched Anarkali Dress Material', 'Ethenic Wear', 'Occasion', 'd30.jpg'),
(204, '181', 'SIDYAL', 960, 1899, 'Tie & Dye T-Shirt & Pyjamas Set', 'Night Wear', 'Night Suits For Women', 'n1.jpg'),
(205, '182', 'DEAIM', 820, 1550, 'Tie & Dye Print T-Shirt & Shorts Set', 'Night Wear', 'Night Suits For Women', 'n2.jpg'),
(206, '183', 'DEAIM', 900, 1599, 'Printed T-Shirt & Pyjamas Set', 'Night Wear', 'Night Suits For Women', 'n3.jpg'),
(207, '184', 'ZEYO', 1499, 2500, 'Typographic Print T-Shirt & Pyjamas Set', 'Night Wear', 'Night Suits For Women', 'n4.jpg'),
(208, '185', 'ZEYO', 999, 2699, 'Striped Shirt & Pyjamas Set', 'Night Wear', 'Night Suits For Women', 'n5 (1).jpg'),
(209, '186', 'DEAIM', 680, 1599, 'Cartoon Print T-Shirt & Shorts Set', 'Night Wear', 'Night Suits For Women', 'n6.jpg'),
(210, '187', 'MARKS & SPENCER', 1350, 2399, 'Stripes Loungewear Set', 'Night Wear', 'Night Suits For Women', 'n7.jpg'),
(211, '188', 'SECRET WISH', 669, 999, 'Geometric Print Kaftan Nighty', 'Night Wear', 'Night Suits For Women', 'n8.jpg'),
(212, '189', 'MARKS & SPENCER', 1500, 1999, 'Printed Loungewear Set', 'Night Wear', 'Night Suits For Women', 'n9.jpg'),
(213, '190', 'BETTER THINK', 580, 1799, 'Typographic Print T-Shirt & Pyjamas Set580', 'Night Wear', 'Night Suits For Women', 'n10.jpg'),
(214, '191', 'SIDYAL', 860, 1599, 'Tie & Dye T-Shirt & Shorts Set', 'Night Wear', 'Night Suits For Women', 'n11.jpg'),
(215, '192', 'FLOCCULENT', 1100, 1599, 'Printed T-Shirt & Pyjamas Set', 'Night Wear', 'Night Suits For Women', 'n12.jpg'),
(216, '193', 'FIG', 939, 1049, 'Cartoon Print T-shirt & Pyjama Set', 'Night Wear', 'Night Suits For Women', 'n13 (1).jpg'),
(217, '194', 'ZEYO', 2599, 2499, 'Duck Print T-Shirt & Pyjamas Set', 'Night Wear', 'Night Suits For Women', 'n14.jpg'),
(218, '195', 'MARKS & SPENCER', 1624, 2499, 'Floral Print T-Shirt & Pyjamas Set', 'Night Wear', 'Night Suits For Women', 'n15 (1).jpg'),
(219, '196', 'STYLI', 889, 999, 'Round-Neck T-Shirt & Pyjamas Set', 'Night Wear', 'Night Suits For Women', 'n16.jpg'),
(220, '197', 'SWEET DREAMS', 1359, 1599, 'Polka-dot Print T-Shirt & Pyjamas Set', 'Night Wear', 'Night Suits For Women', 'n17.jpg'),
(222, '198', 'DZZO', 950, 1799, 'Typographic Print T-Shirt with Capris', 'Night Wear', 'Night Suits For Women', 'n19.jpg'),
(223, '199', 'HUNKEMOLLER', 1647, 2599, 'Nutty Shorts & T-Shirt Set', 'Night Wear', 'Night Suits For Women', 'n19 (1).jpg'),
(224, '200', 'ETHNIC CURRY', 1250, 1599, 'Striped Shirt & Pyjamas Set', 'Night Wear', 'Night Suits For Women', 'n20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `name`, `email`, `password`) VALUES
(2, 'simran', 'simran@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sno` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `Uid` int(11) NOT NULL,
  `pdis` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `gtotal` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sno`, `pid`, `pname`, `pprice`, `pimage`, `Uid`, `pdis`, `qty`, `gtotal`) VALUES
(62, 112, 'ANNA CLAIRE', 810, 'b2 (1).jpg', 2, 'Textured Shoulder Bag with Detachable Strap', 1, 810),
(63, 156, 'TAVAS', 1121, 'd6.jpg', 2, 'Embroidered Unstitched Dress Material', 1, 1121),
(64, 161, 'ETHNIC YARD', 3550, 'd11.jpg', 2, 'Embellished 3-Piece Semi-Stitched Dress Material', 1, 3550);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `sno` int(200) NOT NULL,
  `Fname` varchar(11) NOT NULL,
  `Lname` varchar(11) NOT NULL,
  `Country` varchar(11) NOT NULL,
  `Street` varchar(11) NOT NULL,
  `Appartment` varchar(11) NOT NULL,
  `Town` varchar(11) NOT NULL,
  `Zip` int(11) NOT NULL,
  `Phone` int(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`sno`, `Fname`, `Lname`, `Country`, `Street`, `Appartment`, `Town`, `Zip`, `Phone`, `Email`, `Uid`) VALUES
(1, 'maninder', 'singh', 'patiala', 'patiala', 'solitaire i', 'patiala', 147001, 1234567890, 'man@gmail.com', 2),
(2, 'maninder', 'singh', 'patiala', 'patiala', 'solitaire i', 'patiala', 147001, 1234567890, 'man@gmail.com', 2),
(3, 'maninder', 'singh', 'patiala', 'patiala', 'solitaire i', 'patiala', 147001, 1234567890, 'man@gmail.com', 2),
(4, '', '', '', '', '', '', 0, 0, '', 2),
(5, 'maninder', 'singh', 'patiala', 'patiala', 'solitaire i', 'patiala', 147001, 1234567890, 'man@gmail.com', 2),
(6, 'simran', 'singh', 'patiala', 'patiala', 'solitaire i', 'patiala', 147001, 1234567890, 'simranjeet17111999@gmail.com', 1),
(7, 'SIMRAM', 'dHIMAN', 'PATIALA', '12', '12', 'PATIALA', 147001, 123456789, 'SIMRAM@GMAIL.COM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `subject`, `message`) VALUES
(1, 'simran', 'simran@gmail.com', 'testing', 'testing'),
(2, 'Prabhi', 'prabhi@gmail.com', 'testing', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `sno` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `gtotal` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`sno`, `pid`, `uid`, `gtotal`) VALUES
(1, 160, 2, 11356),
(2, 0, 2, 11356),
(3, 0, 2, 11356),
(4, 0, 2, 11356),
(5, 134, 1, 999),
(6, 29, 2, 2078);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `sno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `message` longtext NOT NULL,
  `rimg` varchar(200) NOT NULL DEFAULT 'user.png',
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`sno`, `name`, `message`, `rimg`, `pid`) VALUES
(17, 'maninder', 'nice product\r\n', 'user.png', 204),
(18, 'simran', 'Good quality...Soo happy with this product.', 'user.png', 116),
(19, 'simran', 'Good quality...Soo happy with this product.', 'user.png', 116),
(20, 'simran', 'Product is very nice', 'user.png', 209),
(21, 'simran', 'Product is very nice', 'user.png', 209);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `sno` int(200) NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`sno`, `Email`) VALUES
(1, 'simran@gmail.com'),
(2, 'vinay@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `Name`, `Email`, `Password`) VALUES
(1, 'simran', 'simran@gmail.com', '123'),
(2, 'Mandy', 'mandy@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `sno` int(200) NOT NULL,
  `pid` int(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pprice` int(200) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `Uid` int(200) NOT NULL,
  `pdis` longtext NOT NULL,
  `qty` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`sno`, `pid`, `pname`, `pprice`, `pimage`, `Uid`, `pdis`, `qty`) VALUES
(35, 62, 'LEE COOPER', 1774, 'b9.jpg', 2, 'Heavily Washed Loose Fit Jeans', 1),
(36, 223, 'HUNKEMOLLER', 1647, 'n19 (1).jpg', 2, 'Nutty Shorts & T-Shirt Set', 1),
(37, 78, 'SNEAK-A-PEEK', 713, 'h4.jpg', 2, 'Chunky Heeled Sandals with Metal Accent', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
