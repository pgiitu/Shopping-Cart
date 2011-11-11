-- phpMyAdmin SQL Dump
-- version 3.2.2.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2010 at 07:06 PM
-- Server version: 5.1.37
-- PHP Version: 5.2.10-2ubuntu6.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat`) VALUES
('electronics'),
('computers'),
('toys'),
('sports'),
('books');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `id` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `rating` int(11) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `description`, `id`, `category`, `price`, `rating`, `thumbnail`, `image`) VALUES
('The Settlers of Catan', '', '12103', 'toys', 2000, 56, 't3.1.jpg', 't3.2.jpg'),
('Dominion', '', '12104', 'toys', 1000, 69, 't4.1.jpg', 't4.2.jpg'),
('Ty Beanie Baby Max & Ruby Set', '', '12105', 'toys', 1200, 4, 't5.1.jpg', 't5.2.jpg'),
('T90 Premier Team- 2009-white/charcoal/blue-(SC1442-104)', '', '11101', 'sports', 1000, 4, 's1.1.jpg', 's1.2.jpg'),
('Mikasa FT5 Goal Master Soccer Ball (Size 5)', '', '11102', 'sports', 1200, 6, 's2.1.jpg', 's2.2.jpg'),
('Bananagrams', '', '12101', 'toys', 500, 7, 't1.1.jpg', 't1.2.jpg'),
('HP TouchSmart 600-1050 23-Inch Black Desktop PC (Windows 7 Home Premium)', '', '13109', 'computers', 50000, 23, 'c9.1.jpg', 'c9.2.jpg'),
('LEGO Minotaurus Game (3841)', '', '12102', 'toys', 1100, 1, 't2.1.jpg', 't2.2.jpg'),
('Barbie Superstar Doll', '', '12106', 'toys', 800, 23, 't6.1.jpg', 't6.2.jpg'),
('Apple iMac MB953LL/A 27-Inch Desktop', '', '13108', 'computers', 80000, 1, 'c8.1.jpg', 'c8.2.jpg'),
('Hot Wheels Color Shifters Blaster', '', '12107', 'toys', 600, 4, 't7.1.jpg', 't7.2.jpg'),
('Qwirkle Board Game', '', '12108', 'toys', 900, 1, 't8.1.jpg', 't8.2.jpg'),
('Pandemic', '', '12109', 'toys', 1500, 0, 't9.1.jpg', 't9.2.jpg'),
('Cisco-Linksys WRT54GL Wireless-G Broadband Router (Compatible with Linux)', '', '13107', 'computers', 2000, 1, 'c7.1.jpg', 'c7.2.jpg'),
(' Franklin Skull Roller Hockey Goalie Mask', '', '11103', 'sports', 3000, 0, 's3.1.jpg', 's3.2.jpg'),
('Mission Grommet Goalie Leg Pads - Junior 2010', '', '11104', 'sports', 5000, 0, 's4.1.jpg', 's4.2.jpg'),
('Easton SX70 Reflex Softball Bat', '', '11105', 'sports', 2000, 28, 's5.1.jpg', 's5.2.jpg'),
('Mizuno Prospect Series GPP1001 Youth Baseball Glove ', '', '11106', 'sports', 3000, 0, 's6.1.jpg', 's6.2.jpg'),
('Gilbert Six Nations Flag Rugby Ball', '', '11107', 'sports', 2000, 3, 's7.1.jpg', 's7.2.jpg'),
('adidas Rugby Helmet', '', '11108', 'sports', 1500, 19, 's8.1.jpg', 's8.2.jpg'),
('CHIEFTAIN SHOULDER PROTECTOR', '', '11109', 'sports', 3200, 57, 's9.1.jpg', 's9.2.jpg'),
('Brother MFC-8860DN Flatbed Laser All-in-One Printer with Duplex ', 'laser printer ', '13105', 'computers', 20000, 4, 'c5.1.jpg', 'c5.2.jpg'),
('Tachikara Recreational Indoor/Outdoor Volleyball', '', '11110', 'sports', 1100, 2, 's10.1.jpg', 's10.2.jpg'),
('Sony HDR-FX7 3-CMOS Sensor HDV High-Definition Handycam Camcorder with 20x Optical Zoom', '', '10101', 'electronics', 10000, 0, 'e1.1.jpg', 'e1.2.jpg'),
('BlackBerry Bold 9700 Phone (AT&T)', '', '10102', 'electronics', 7000, 60, 'e2.1.jpg', 'e2.2.jpg'),
('Apple MacBook Pro MB985LL/A 15.4-Inch Laptop', 'apple laptop macbook', '13104', 'computers', 75000, 10, 'c4.1.jpg', 'c4.2.jpg'),
(' Product Details Motorola DROID A855 Android Phone (Verizon Wireless)', '', '10103', 'electronics', 30000, 55, 'e3.1.jpg', 'e3.2.jpg'),
('Sony HDR-FX1000 High Definition MiniDV Handycam Camcorder + Willoughby''s Professional Photographers Package', '', '10104', 'electronics', 100000, 30, 'e4.1.jpg', 'e4.2.jpg'),
('Hoover Tempo Widepath Upright Vacuum, Bagged, U5140-900', '', '10105', 'electronics', 5000, 70, 'e5.1.jpg', 'e5.2.jpg'),
('Haier RRTG18PABW 18-Cu-Ft Top Mount Refrigerator, White', '', '10106', 'electronics', 15000, 22, 'e6.1.jpg', 'e6.2.jpg'),
('Sharp R-230KK 800-Watt 4/5-Cubic-Foot Compact Microwave, Black', '', '10107', 'electronics', 6500, 9, 'e7.1.jpg', 'e7.2.jpg'),
('Dell Inspiron iM1012-1243CRD Mini 1012 10.1-Inch Netbook with Digital TV (Cherry Red)', 'dell laptop', '13102', 'computers', 45000, 5, 'c2.1.jpg', 'c2.2.jpg'),
(' Cuisinart DLC-10S Pro Classic 7-Cup Food Processor', '', '10108', 'electronics', 5100, 11, 'e8.1.jpg', 'e8.2.jpg'),
('Frigidaire FAH086S1T Through-the-Wall 8,000 BTU Room Air conditioner', '', '10109', 'electronics', 21000, 9, 'e9.1.jpg', 'e9.2.jpg'),
('Bissell 7700 Big Green Complete Home-Cleaning System', '', '10110', 'electronics', 12000, 17, 'e10.1.jpg', 'e10.2.jpg'),
('Velocity Micro ProMagix HD315 Black Desktop PC (Windows 7 Ultimate)', 'gaming desktop', '13110', 'computers', 100000, 10, 'c10.1.jpg', 'c10.2.jpg'),
('Creative Labs Sound Blaster World of Warcraft Wireless Headset', 'headphones', '13106', 'computers', 1500, 7, 'c6.1.jpg', 'c6.2.jpg'),
('Apple MacBook Air MC234LL/A 13.3-Inch Laptop', 'apple macbook', '13103', 'computers', 70000, 9, 'c3.1.jpg', 'c3.2.jpg'),
('Sony VAIO VPC-W121AX/P 10.1-Inch Pink Netbook - Up to 7 Hours of Battery Life (Windows 7 Starter)', 'sony laptop', '13101', 'computers', 40000, 2, 'c1.1.jpg', 'c1.2.jpg'),
('And Then There Were None by Agatha Christie', 'When ten people arrive on private Indian Island off England''s southwest coast, lured to a mansion by invitations from a mysterious host, terror mounts as one guest after another is murdered, in a classic whodunit that is an elaboration of ...', '15102', 'books', 900, 0, 'c5.2.jpeg', 'c5.2.jpeg'),
('Harry Potter and the Sorcerer''s Stone by J. K. Rowling', 'Harry Potter has never played a sport while flying on a broomstick. He''s never worn a cloak of invisibility, befriended a giant, or helped hatch a drag	\r\non. All Harry knows is a miserable life with the Dursleys, his horrible aunt and ...', '15101', 'books', 700, 10, 'c5.1.jpeg', 'c5.1.jpeg'),
('The Lord of the Rings by J.R.R. Tolkien', 'JRR Tolkien (1892-1973), beloved throughout the world as the creator of The Hobbit, The Lord of the Rings, and The Silmarillion, was a professor of Anglo-Saxon at Oxford, a fellow of Pembroke College, and a fellow of Merton College ...', '15103', 'books', 1000, 5, 'c5.3.jpeg', 'c5.3.jpeg'),
('Harry Potter and the Half-Blood Prince by J. K. Rowling', '''""Harry Potter and the Half-Blood Prince" takes up the story of Harry Potter''s sixth year at Hogwarts School of Witchcraft and Wizardry at this point in the ...', '15104', 'books', 800, 0, 'c5.4.jpeg', 'c5.4.jpeg'),
(' The Da Vinci Code by Dan Brown ', 'EARLY ACCLAIM FOR THE DA VINCI CODE "Dan Brown has to be one of the best,\r\nsmartest, and most accomplished writers in the country. THE DA VINCI CODE is\r\nmany ...', '15105', 'books', 900, 6, 'c5.5.jpeg', 'c5.5.jpeg'),
('The Alchemist by Paulo Coelho', 'A fable about following ur dream.....\r\nNow, the following is sure to grow with the release of this stunning edition featuring\r\n35 illustrations from renowned artist Moebius.', '15106', 'books', 600, 3, 'c5.6.jpeg', 'c5.6.jpeg'),
('The Mark of Zorro by Johnston McCulley', 'Set in Mexican California during the 1820s, the story follows the career of Don Diego Vega, by all appearances an effete and foppish aristocrat. But Vegas timorous reputation is nothing more than a mask to conceal his alter ego: a California Robin Hood known as Zorro, whose swift blade strikes down those who exploit the poor and oppressed.', '15107', 'books', 750, 5, 'c5.7.jpeg', 'c5.7.jpeg'),
('Network security secrets & solutions?', 'Bill Loesch, CTO, Guard ID Systems"This book is current, comprehensive, thoughtful, backed by experience, and appropriately free of vendor-bias-prized ...', '15108', 'books', 600, 4, 'c5.8.jpeg', 'c5.8.jpeg'),
('Web hacking: attacks and defense?', 'This book is a virtual battle plan that will help you identify and eliminate threats that could take your Web site off line.', '15109', 'books', 800, 3, 'c5.9.jpeg', 'c5.9.jpeg'),
('Hacking For Dummies?', 'This guide shows you how, explains common attacks, tells you what to look for, and gives you the tools to safeguard your sensitive business information', '151010', 'books', 700, 4, 'c5.10.jpeg', 'c5.10.jpeg');
