-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 24 mai 2022 à 08:44
-- Version du serveur : 8.0.29
-- Version de PHP : 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autocompletion`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img` varchar(500) NOT NULL,
  `year` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `year`) VALUES
(1, 'iPhone 12', 'https://smartmania.cz/wp-content/uploads/2020/10/iPhone-12b-800x800.jpg', '2020'),
(2, 'iPhone 11', 'https://mobilecity-live.s3.ap-southeast-2.amazonaws.com/wp-content/uploads/2021/03/01010547/R01-1-2-600x627.jpg', '2019'),
(3, 'iPhone 11 Pro', 'https://s2.qwant.com/thumbr/0x380/f/3/0973b6282bf5aa44780651cf522dc7860a81bf721ebc64455f9e10cd789a35/tl1100317102@2x.jpg?u=https%3A%2F%2Fwww.topachat.com%2Fboutique%2Fimg%2Ftl%2Ftl1100%2Ftl11003171%2Ftl1100317102%402x.jpg&q=0&b=1&p=0&a=0', '2019'),
(4, 'AirPods Pro', 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MWP22?wid=1144&hei=1144&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1572990352299', '2019'),
(5, 'iPad Air M1', 'https://www.m1.com.sg/-/media/Images/Personal/Promotions/iPad-Air/ipadair_rosegold.jpg', '2022'),
(6, 'iPod (Fisrt version)', 'http://assets.rollingstone.com/assets/2014/gallery/24-inventions-that-changed-music-20140317/ipod-2001-0263736/130226/_original/1035x1626-ipod-1800-1394937359.jpg', '2001'),
(7, 'Apple TV 4K (v2)', 'https://stadt-bremerhaven.de/wp-content/uploads/2021/04/Apple-TV-4K-2021-720x540.jpg', '2021'),
(8, 'iPhone 8+ (Product RED)', 'https://applecover.com.ua/wp-content/uploads/2018/04/8plus-red.jpg', '2018'),
(9, 'Apple Watch SE', 'https://smartwatchchart.com/wp-content/uploads/2020/09/Apple-Watch-SE-GPS-40mm.jpg', '2020'),
(10, 'Mac Mini M1', 'https://techsviewer.com/wp-content/uploads/2020/11/Mac-Mini-with-M1-Chip.jpg', '2020'),
(11, 'MacBook Air M1', 'https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/11/Macbook-air.jpg', '2020'),
(12, 'AirTag', 'https://i.blogs.es/cfdcc1/apple-airtag/450_1000.jpg', '2021'),
(13, 'AirPods Max', 'https://exotique.com.mt/wp-content/uploads/2020/12/Apple-AirPods-Max-Silver.jpg', '2020'),
(14, 'iPhone 6S +', 'https://i5.walmartimages.com/asr/6a0eb6b4-2363-45a1-9e25-37ef8a944f5e_1.901711b5e190d9af3362f860ab9a10cb.jpeg', '2015'),
(15, 'iPhone X', 'https://1.bp.blogspot.com/-u-Pnvh3EUMA/XwLyP-3RJOI/AAAAAAAADhc/18Od3rAbXrIQ0GJ5TaaGT_WnY1LvgGDeACNcBGAsYHQ/s1600/Spesifikasi%2Bdan%2BHarga%2BiPhone%2BX%2BTerbaru%2B2020.jpg', '2017'),
(16, 'iPhone 13 Pro Max', 'https://phonesstorekenya.com/wp-content/uploads/2021/09/Apple-iPhone-13-Pro-Max-768x768.jpg', '2021'),
(17, 'iPhone 13 Pro', 'https://www.apple.com/newsroom/images/product/iphone/standard/Apple_iPhone-13-Pro_iPhone-13-Pro-Max_09142021_inline.jpg.large_2x.jpg', '2021'),
(18, 'iPhone 12 Mini', 'https://www.resetdigitale.it/118536-thickbox_default/smartphone-apple-iphone-12-mini-64gb-nero.jpg', '2020'),
(19, 'Mac Studio M1', 'https://images.frandroid.com/wp-content/uploads/2022/03/apple-event-march-8-40-39-screenshot.png', '2022'),
(20, 'iMac M1', 'http://www.thedailyrag.co.uk/wp-content/uploads/2021/05/nmprofetimg-1085.png', '2021');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
