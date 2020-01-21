-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 25, 2019 at 08:03 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiverr_client`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `property_type` varchar(45) NOT NULL DEFAULT '',
  `property_type_id` int(11) NOT NULL DEFAULT '0',
  `credit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `input` decimal(10,2) NOT NULL DEFAULT '0.00',
  `installments` varchar(45) NOT NULL DEFAULT '',
  `administrator` varchar(45) NOT NULL,
  `administrator_img_url` varchar(200) NOT NULL,
  `administrator_img_name` varchar(45) NOT NULL,
  `situation` varchar(45) NOT NULL DEFAULT '',
  `note` varchar(200) DEFAULT NULL,
  `interested` varchar(45) NOT NULL DEFAULT ' I''m interested',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`ID`, `property_type`, `property_type_id`, `credit`, `input`, `installments`, `administrator`, `administrator_img_url`, `administrator_img_name`, `situation`, `note`, `interested`) VALUES
(3, '$property_type', 2, '90000.00', '38000.00', '40 x 2.157,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(4, '$property_type', 1, '55000.00', '22000.00', '5 X 461+194 X 350,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(5, '$property_type', 1, '63000.00', '28000.00', '179 X 397,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(6, '$property_type', 1, '90000.00', '34000.00', '186 X670,00', 'Itaú                                         ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232123543751/200/21235423042018.jpg', '21235423042018.jpg', 'Disponível', '', ' Estou interessado'),
(7, '$property_type', 1, '90000.00', '33000.00', '183 x 680,00', 'Itaú                                         ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232123543751/200/21235423042018.jpg', '21235423042018.jpg', 'Disponível', '', ' Estou interessado'),
(8, '$property_type', 1, '90000.00', '32000.00', '159 X 697,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(9, '$property_type', 1, '104000.00', '41000.00', '117 x 868,00', 'Itaú                                         ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232123543751/200/21235423042018.jpg', '21235423042018.jpg', 'Disponível', '', ' Estou interessado'),
(10, '$property_type', 1, '105000.00', '47000.00', '124 X785,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(11, '$property_type', 1, '118000.00', '45900.00', '193 X750,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(12, '$property_type', 1, '126000.00', '42000.00', '160 X 992,00', 'Itaú                                         ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232123543751/200/21235423042018.jpg', '21235423042018.jpg', 'Disponível', '', ' Estou interessado'),
(13, '$property_type', 1, '130000.00', '52000.00', '144 X 990,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(14, '$property_type', 1, '136000.00', '44000.00', '141 x 1.120,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(15, '$property_type', 1, '156000.00', '57900.00', '124 x 1.356,00', 'Bradesco                                     ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/20180423212327285/200/21232723042018.jpg', '21232723042018.jpg', 'Disponível', '', ' Estou interessado'),
(16, '$property_type', 1, '163000.00', '65000.00', '146 x 1.127,00', 'Santander Consórcios                         ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201806041905164054/200/19051604062018.jpg', '19051604062018.jpg', 'Disponível', '', ' Estou interessado'),
(17, '$property_type', 1, '187000.00', '76000.00', '189 X 1.300,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(18, '$property_type', 1, '211000.00', '85000.00', '144 X1.660,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(19, '$property_type', 1, '235000.00', '98000.00', '142 X 2.445,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(20, '$property_type', 1, '285000.00', '125000.00', '138 x 1.943,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(21, '$property_type', 1, '301000.00', '118000.00', '152 x 2.360,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(22, '$property_type', 1, '306000.00', '109900.00', '182 X 1.930,00', 'Bradesco                                     ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/20180423212327285/200/21232723042018.jpg', '21232723042018.jpg', 'Disponível', '', ' Estou interessado'),
(23, '$property_type', 1, '314000.00', '114000.00', '188 X 1.980,00', 'Bradesco                                     ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/20180423212327285/200/21232723042018.jpg', '21232723042018.jpg', 'Disponível', '', ' Estou interessado'),
(24, '$property_type', 1, '343000.00', '123000.00', '180 X 2.199,00', 'Bradesco                                     ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/20180423212327285/200/21232723042018.jpg', '21232723042018.jpg', 'Disponível', '', ' Estou interessado'),
(25, '$property_type', 1, '397000.00', '145000.00', '134 x 3.480,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(26, '$property_type', 1, '411000.00', '153000.00', '139 x 2.710,00', 'Itaú                                         ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232123543751/200/21235423042018.jpg', '21235423042018.jpg', 'Disponível', '', ' Estou interessado'),
(27, '$property_type', 1, '494000.00', '195000.00', '117 x 4.154,00', 'Rodobéns                                     ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232127554161/200/21275523042018.jpg', '21275523042018.jpg', 'Disponível', '', ' Estou interessado'),
(28, '$property_type', 1, '500000.00', '187000.00', '133 x 4.265,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(29, '$property_type', 1, '509000.00', '195000.00', '185 x 3.210,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(30, '$property_type', 1, '528000.00', '192000.00', '140 x 4.470,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(31, '$property_type', 1, '556000.00', '305000.00', '84 x 3.170,00', 'Itaú                                         ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232123543751/200/21235423042018.jpg', '21235423042018.jpg', 'Disponível', '', ' Estou interessado'),
(32, '$property_type', 1, '560000.00', '212000.00', '162 x 3.3390,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(33, '$property_type', 1, '606000.00', '223000.00', '139 x 4.450,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(34, '$property_type', 1, '684000.00', '255000.00', '140 x 4.900+36 x 500,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(35, '$property_type', 1, '693000.00', '255000.00', '149 x 5.140,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(36, '$property_type', 1, '710000.00', '265000.00', '139 x 5.235,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado'),
(37, '$property_type', 1, '745000.00', '279000.00', '92 x 6.990,00', 'Bradesco                                     ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/20180423212327285/200/21232723042018.jpg', '21232723042018.jpg', 'Disponível', '', ' Estou interessado'),
(38, '$property_type', 1, '800000.00', '450000.00', '75 x 7.096,00', 'Rodobéns                                     ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232127554161/200/21275523042018.jpg', '21275523042018.jpg', 'Disponível', 'Cota com Deságio 490.000,00 pagos', ' Estou interessado'),
(39, '$property_type', 1, '1000000.00', '366000.00', '139 x 7.940,00', 'Porto Seguro                                 ', 'https://www.cartadecreditocontemplada.com.br/img/posts/postagens/201804232124041365/200/21240423042018.jpg', '21240423042018.jpg', 'Disponível', '', ' Estou interessado');

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

DROP TABLE IF EXISTS `property_type`;
CREATE TABLE IF NOT EXISTS `property_type` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`ID`, `type`) VALUES
(1, 'imoveis'),
(2, 'veiculos');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
