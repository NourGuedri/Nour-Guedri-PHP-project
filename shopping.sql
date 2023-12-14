-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2023 at 01:41 PM
-- Server version: 4.1.22
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `first_name` varchar(20) NOT NULL default '',
  `last_name` varchar(20) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `adress` varchar(30) NOT NULL default '',
  `telephone` varchar(8) NOT NULL default '',
  `mandate` varchar(30) NOT NULL default '',
  `accrediation` varchar(30) NOT NULL default '',
  `zip` varchar(4) NOT NULL default '',
  `id` int(11) NOT NULL auto_increment,
  `id_client` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`first_name`, `last_name`, `email`, `adress`, `telephone`, `mandate`, `accrediation`, `zip`, `id`, `id_client`) VALUES
('Nour Elhouda', 'Guedri', 'guedrinour545@gmail.com', 'residence horizon plus', '+2165672', 'Nabeul', 'Mrezgua', '8040', 10, 4),
('Nour Elhouda', 'Guedri', 'guedrinour545@gmail.com', 'residence horizon plus', '+2165672', 'Nabeul', 'Mrezgua', '8040', 11, 4),
('Samira', 'Ben Ahmed', 'samira@gmail.com', 'residence breeze', '72666444', 'Nabeul', 'Mrezgua', '8041', 12, 5),
('Nour Elhouda', 'Guedri', 'guedrinour545@gmail.com', 'residence horizon plus', '+2165672', 'Nabeul', 'Mrezgua', '8040', 14, 4),
('maria', 'hindi', 'maria@gmail.com', 'residence palace', '+2165273', 'Nabeul', 'hammamet', '8012', 18, 10),
('Nour Elhouda', 'Guedri', 'guedrinour545@gmail.com', 'qwerty', '+2165672', 'Nabeul', 'Mrezgua', '1234', 19, 5),
('Samira', 'Ben Ahmed', 'samira@gmail.com', 'residence breeze', '72666444', 'Nabeul', 'hammamet', '8041', 20, 5);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL auto_increment,
  `nom` varchar(20) NOT NULL default '',
  `prenom` varchar(20) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `mot_de_passe` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `email`, `mot_de_passe`) VALUES
(4, 'admin', 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL auto_increment,
  `nom` varchar(20) NOT NULL default '',
  `prenom` varchar(20) NOT NULL default '',
  `mot_de_passe` varchar(20) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `mot_de_passe`, `email`) VALUES
(4, 'Guedri', 'Nour Elhouda', '123', 'guedrinour545@gmail.com'),
(5, 'Ben Ahmed', 'Samira', '0000', 'samira@gmail.com'),
(9, 'maria', 'hindi', '123', 'guedrinour545@gmail.com'),
(10, 'maria', 'hindi', 'maria123', 'maria@gmail.com'),
(11, 'Nour Elhouda', 'Guedri', '123', 'guedrinour545@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `message` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL auto_increment,
  `address_id` int(11) NOT NULL default '0',
  `total` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `address_id` (`address_id`,`total`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `address_id`, `total`) VALUES
(35, 19, 2000),
(36, 20, 14000);

-- --------------------------------------------------------

--
-- Table structure for table `pannier`
--

CREATE TABLE IF NOT EXISTS `pannier` (
  `idpann` int(11) NOT NULL auto_increment,
  `id` int(11) NOT NULL default '0',
  `ref` int(11) NOT NULL default '0',
  `quant` int(11) NOT NULL default '0',
  `taille` varchar(20) NOT NULL default '',
  `total_prod` decimal(9,3) NOT NULL default '0.000',
  PRIMARY KEY  (`idpann`),
  KEY `id` (`id`,`ref`),
  KEY `ref` (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `pannier`
--

INSERT INTO `pannier` (`idpann`, `id`, `ref`, `quant`, `taille`, `total_prod`) VALUES
(26, 4, 84, 1, 'S', 500.000),
(27, 4, 49, 1, 'S', 150.000);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `ref` int(11) NOT NULL auto_increment,
  `description` varchar(100) NOT NULL default '',
  `marque` varchar(20) NOT NULL default '',
  `couleur` varchar(20) NOT NULL default '',
  `status` varchar(20) NOT NULL default '',
  `nom` varchar(20) NOT NULL default '',
  `prix` decimal(9,3) NOT NULL default '0.000',
  `image` varchar(60) NOT NULL default '',
  PRIMARY KEY  (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`ref`, `description`, `marque`, `couleur`, `status`, `nom`, `prix`, `image`) VALUES
(4, 'Women jacket', 'Prada', 'brown', 'sale', 'Jackets', 100.000, 'images/jacket2.jpeg'),
(6, 'Women jacket', 'Zara', 'pink', 'sale', 'Jackets', 300.000, 'images/jacket6.jpeg'),
(7, 'Women jacket', 'Prada', 'blue', 'new', 'Jackets', 367.000, 'images/jacket7.jpeg'),
(8, 'Men jacket', 'Gucci', 'black', 'sale', 'Jackets', 389.000, 'images/jacket5.jpeg'),
(9, 'Men jacket', 'Gucci', 'black and white', 'new', 'Jackets', 120.000, 'images/jacket8.jpeg'),
(11, 'Men jacket', 'Versace', 'brown', 'sale', 'Jackets', 500.000, 'images/jacket9.jpeg'),
(12, 'Men jacket', 'Versace', 'black', 'new', 'Jackets', 190.000, 'images/jacket3.jpeg'),
(13, 'Men jacket', 'Louis Vuitton', 'green', 'new', 'Jackets', 450.000, 'images/jacket1.jpeg'),
(14, 'Men jacket', 'Louis Vuitton', 'grey', 'sale', 'Jackets', 430.000, 'images/jacket4.jpeg'),
(15, 'Women bag', 'Gucci', 'brown', 'new', 'Bags', 700.000, 'images/women-bag-img.jpg'),
(16, 'Men T-shirt', 'Versace', 'grey', 'new', 'T-shirts', 70.000, 'images/greytishirt.jpeg'),
(17, 'Men T-shirt', 'Gucci', 'black', 'new', 'T-shirts', 706.000, 'images/guccitishirt.jpeg'),
(18, 'Women T-shirt', 'Gucci', 'red', 'sale', 'T-shirts', 706.000, 'images/guccitishirt1.jpeg'),
(19, 'Women T-shirt', 'Gucci', 'pink', 'sale', 'T-shirts', 500.000, 'images/guccitishirt3.jpeg'),
(20, 'Men T-shirt', 'Louis Vuitton', 'blue', 'new', 'T-shirts', 490.000, 'images/louistishirt.jpeg'),
(21, 'Men T-shirt', 'Louis Vuitton', 'grey', 'new', 'T-shirts', 300.000, 'images/louistishirt2.jpeg'),
(22, 'Men T-shirt', 'Louis Vuitton', 'white', 'sale', 'T-shirts', 306.000, 'images/louistishirt4.jpeg'),
(23, 'Men T-shirt', 'Prada', 'black', 'sale', 'T-shirts', 306.000, 'images/pradatishirt.jpeg'),
(24, 'Men T-shirt', 'Prada', 'grey', 'sale', 'T-shirts', 200.000, 'images/pradatishirt1.jpeg'),
(25, 'Men T-shirt', 'Prada', 'yellow', 'new', 'T-shirts', 256.000, 'images/pradatishirt3.jpeg'),
(26, 'Women T-shirt', 'Zara', 'red', 'new', 'T-shirts', 230.000, 'images/red t-shirt.jpeg'),
(27, 'Women T-shirt', 'Zara', 'black', 'new', 'T-shirts', 233.000, 'images/t-shirts1-img.jpg'),
(28, 'Men T-shirt', 'Zara', 'green', 'sale', 'T-shirts', 245.000, 'images/t-shirts2-img.jpg'),
(29, 'Men T-shirt', 'Versace', 'black', 'new', 'T-shirts', 134.000, 'images/Versacetishirt.jpeg'),
(30, 'Men T-shirt', 'Versace', 'yellow', 'new', 'T-shirts', 400.000, 'images/Versacetishirt4.jpeg'),
(31, 'Men T-shirt', 'Zara', 'black and grey', 'new', 'T-shirts', 400.000, 'images/zaratishirt.jpeg'),
(32, 'Women Swimwear', 'Zara', 'black and green', 'new', 'Swimwear', 70.000, 'images/zaraSwimwear1.jpeg'),
(33, 'Women Swimwear', 'Zara', ' green', 'new', 'Swimwear', 78.000, 'images/zaraSwimwear2.jpeg'),
(34, 'Women Swimwear', 'Zara', ' orange', 'sale', 'Swimwear', 60.000, 'images/zaraSwimwear3.jpeg'),
(35, 'Women Swimwear', 'Zara', ' blue', 'new', 'Swimwear', 67.000, 'images/zaraSwimwear5.jpeg'),
(36, 'Women Swimwear', 'Zara', ' black', 'new', 'Swimwear', 100.000, 'images/zaraSwimwear6.jpeg'),
(37, 'Men Swimwear', 'Versace', ' blue', 'new', 'Swimwear', 50.000, 'images/versaceSwimwear1.jpeg'),
(38, 'Women Swimwear', 'Versace', ' black', 'sale', 'Swimwear', 100.000, 'images/versaceSwimwear2.jpeg'),
(39, 'Women Swimwear', 'Versace', ' yellow', 'new', 'Swimwear', 150.000, 'images/versaceSwimwear3.jpeg'),
(40, 'Women Swimwear', 'Gucci', ' pink', 'new', 'Swimwear', 150.000, 'images/gucciSwimwear1.jpeg'),
(41, 'Women Swimwear', 'Gucci', ' blue', 'new', 'Swimwear', 150.000, 'images/gucciSwimwear2.jpeg'),
(42, 'Women Swimwear', 'Gucci', 'black', 'new', 'Swimwear', 150.000, 'images/gucciSwimwear3.jpeg'),
(43, 'Men Swimwear', 'Prada', 'yellow and blue', 'sale', 'Swimwear', 80.000, 'images/pradaSwimwear1.jpeg'),
(44, 'Women Swimwear', 'Prada', 'black and white', 'new', 'Swimwear', 200.000, 'images/pradaSwimwear2.jpeg'),
(45, 'Women Swimwear', 'Prada', 'white', 'new', 'Swimwear', 300.000, 'images/pradaSwimwear3.jpeg'),
(46, 'Women Swimwear', 'Louis Vuitton', 'black', 'new', 'Swimwear', 300.000, 'images/louisSwimwear1.jpeg'),
(47, 'Women Swimwear', 'Louis Vuitton', 'blue', 'sale', 'Swimwear', 289.000, 'images/louisSwimwear2.jpeg'),
(48, 'Women Swimwear', 'Louis Vuitton', 'white and pink', 'new', 'Swimwear', 150.000, 'images/louisSwimwear3.jpeg'),
(49, 'Women bag', 'Zara', 'black', 'new', 'Bags', 150.000, 'images/zaraBags1.jpeg'),
(50, 'Women bag', 'Zara', 'blue', 'new', 'Bags', 150.000, 'images/zaraBags2.jpeg'),
(51, 'Women bag', 'Gucci', 'black', 'new', 'Bags', 150.000, 'images/gucciBags1.jpeg'),
(52, 'Women bag', 'Gucci', 'white', 'sale', 'Bags', 100.000, 'images/gucciBags2.jpeg'),
(53, 'Women bag', 'Prada', 'black', 'sale', 'Bags', 300.000, 'images/pradaBags1.jpeg'),
(54, 'Women bag', 'Prada', 'yellow', 'new', 'Bags', 308.000, 'images/pradaBags2.jpeg'),
(55, 'Women bag', 'Prada', 'crystal', 'new', 'Bags', 700.000, 'images/pradacrystalbags.jpeg'),
(56, 'Women bag', 'Versace', 'gold', 'new', 'Bags', 700.000, 'images/versaceBags1.jpeg'),
(57, 'Women bag', 'Versace', 'black', 'new', 'Bags', 600.000, 'images/versaceBags2.jpeg'),
(58, 'Women bag', 'Versace', 'blue', 'sale', 'Bags', 605.000, 'images/versaceBags3.jpeg'),
(59, 'Women bag', 'Louis Vuitton', 'brown', 'sale', 'Bags', 605.000, 'images/louissBags1.jpeg'),
(60, 'Women bag', 'Louis Vuitton', 'red', 'new', 'Bags', 500.000, 'images/louissBags2.jpeg'),
(61, 'Men Shirt', 'Zara', 'black', 'new', 'Shirts', 80.000, 'images/zaraShirts1.jpeg'),
(62, 'child Shirt', 'Zara', 'yellow', 'new', 'Shirts', 50.000, 'images/zaraShirts2.jpeg'),
(63, 'Men Shirt', 'Zara', 'yellow', 'new', 'Shirts', 100.000, 'images/versaceShirts1.jpeg'),
(64, 'Men Shirt', 'Zara', 'blue and green', 'new', 'Shirts', 150.000, 'images/versaceShirts2.jpeg'),
(69, 'Women Skirt', 'Zara', 'blue', 'new', 'Skirts', 100.000, 'images/zaraSkirts1.jpeg'),
(70, 'Women Skirt', 'Zara', 'green', 'new', 'Skirts', 150.000, 'images/zaraSkirts2.jpeg'),
(71, 'Women Skirt', 'Zara', 'brown', 'sale', 'Skirts', 150.000, 'images/zaraSkirts3.jpeg'),
(72, 'Women Skirt', 'Prada', 'black', 'new', 'Skirts', 300.000, 'images/pradaSkirts1.jpeg'),
(73, 'Women Skirt', 'Gucci', 'pink', 'new', 'Skirts', 350.000, 'images/gucciSkirts1.jpeg'),
(74, 'Men Jean', 'Zara', 'grey', 'new', 'Jeans', 350.000, 'images/zaraJeans1.jpeg'),
(75, 'Women Jean', 'Zara', 'blue', 'new', 'Jeans', 300.000, 'images/zaraJeans2.jpeg'),
(77, 'Women Jean', 'Prada', 'blue', 'sale', 'Jeans', 200.000, 'images/pradaJeans1.jpeg'),
(78, 'Women Jean', 'Gucci', 'blue', 'sale', 'Jeans', 205.000, 'images/gucciJeans1.jpeg'),
(79, 'Men Trouser', 'Zara', 'brown', 'sale', 'Trousers', 40.000, 'images/zaraTrousers1.jpeg'),
(80, 'Men Trouser', 'Louis Vuitton', 'black', 'new', 'Trousers', 50.000, 'images/louissTrousers1.jpeg'),
(81, 'Women Top Wear', 'Zara', 'red', 'new', 'Top Wear', 70.000, 'images/zaraTop Wear1.jpeg'),
(82, 'Women Top Wear', 'Zara', 'red', 'new', 'Top Wear', 100.000, 'images/zaraTop Wear2.jpeg'),
(83, 'Women Top Wear', 'Zara', 'black', 'sale', 'Top Wear', 100.000, 'images/zaraTop Wear3.jpeg'),
(84, 'Women Party wear', 'Gucci', 'black', 'new', 'Party wear', 500.000, 'images/gucciParty wear1.jpeg'),
(85, 'Women Party wear', 'Gucci', 'red', 'new', 'Party wear', 500.000, 'images/gucciParty wear3.jpeg'),
(86, 'Women Party wear', 'Gucci', 'white', 'new', 'Party wear', 500.000, 'images/gucciParty wear2.jpeg'),
(87, 'Women Bottom Wear', 'Zara', 'white', 'new', 'Bottom Wear', 400.000, 'images/zarraBottom Wear3.jpeg'),
(88, 'Women Bottom Wear', 'Zara', 'black', 'new', 'Bottom Wear', 459.000, 'images/zaraBottom Wear2.jpeg'),
(89, 'Men Bottom Wear', 'Zara', 'black', 'sale', 'Bottom Wear', 200.000, 'images/zaraBottom Wear1.jpeg'),
(90, 'Women Indian Wear', 'Zara', 'white', 'new', 'Indian Wear', 700.000, 'images/zaraIndian Wear1.jpeg'),
(91, 'Women Indian Wear', 'Prada', 'black', 'new', 'Indian Wear', 300.000, 'images/pradaIndian Wear1.jpeg'),
(92, 'Men Indian Wear', 'Versace', 'black and gold', 'sale', 'Indian Wear', 300.000, 'images/versaceIndian Wear1.jpeg'),
(93, 'Women Sunglasses', 'Gucci', 'pink', 'new', 'Sunglasses', 500.000, 'images/gucciSunglasses1.jpeg'),
(94, 'Women Sunglasses', 'Gucci', 'geen', 'new', 'Sunglasses', 400.000, 'images/guucciSunglasses2.jpeg'),
(95, 'Women Sunglasses', 'Gucci', 'black', 'new', 'Sunglasses', 400.000, 'images/gucciSunglasses3.jpeg'),
(96, 'Women Sunglasses', 'Versace', 'black', 'new', 'Sunglasses', 400.000, 'images/versaceSunglasses1.jpeg'),
(97, 'Women Sunglasses', 'Versace', 'brown', 'sale', 'Sunglasses', 590.000, 'images/versaceSunglasses2.jpeg'),
(98, 'Women Fragrance', 'Gucci', 'pink', 'new', 'Fragrances', 590.000, 'images/gucciFragrances2.jpeg'),
(99, 'Women Fragrance', 'Gucci', 'black', 'new', 'Fragrances', 400.000, 'images/gucciFragrances1.jpeg'),
(100, 'Men Fragrance', 'Versace', 'blue', 'new', 'Fragrances', 400.000, 'images/versaceFragrances1.jpeg'),
(102, 'Women Fragrance', 'Prada', 'pink', 'sale', 'Fragrances', 589.000, 'images/pradaFragrances1.jpeg'),
(104, 'Women Wallet', 'Versace', 'black', 'new', 'Wallets', 530.000, 'images/versaceWallets1.jpeg'),
(105, 'Women Wallet', 'Gucci', 'brown', 'new', 'Wallets', 300.000, 'images/gucciWallets1.jpeg'),
(106, 'Men Wallet', 'Zara', 'brown', 'sale', 'Wallets', 300.000, 'images/zaraWallets2.jpeg'),
(107, 'Women Sweater and Cardigan', 'Zara', 'red', 'sale', 'Sweaters and Cardiga', 300.000, 'images/zaraSweatersandCardigans2.jpeg'),
(108, 'Women Sweater and Cardigan', 'Gucci', 'violet', 'new', 'Sweaters and Cardiga', 200.000, 'images/gucciSweatersandCardigans1.jpeg'),
(109, 'Women Sweater and Cardigan', 'Gucci', 'red and white', 'new', 'Sweaters and Cardiga', 120.000, 'images/gucciSweatersandCardigans2.jpeg'),
(110, 'Women Sweater and Cardigan', 'Zara', 'green', 'new', 'Sweaters and Cardiga', 340.000, 'images/zaraSweatersandCardigans1.jpeg'),
(111, 'child t-shirt', 'Gucci', 'brown and black', 'new', 'T-shirts', 56.000, 'images/t-shirts-img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL auto_increment,
  `ref` int(11) NOT NULL default '0',
  `taille` varchar(20) NOT NULL default '',
  `quantite` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `ref` (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `stock`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pannier`
--
ALTER TABLE `pannier`
  ADD CONSTRAINT `pannier_ibfk_1` FOREIGN KEY (`id`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pannier_ibfk_2` FOREIGN KEY (`ref`) REFERENCES `produit` (`ref`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`ref`) REFERENCES `produit` (`ref`) ON DELETE CASCADE ON UPDATE CASCADE;
