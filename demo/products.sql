
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- ---------------------------
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Laptop Core i5', 'Laptop01', 600.00, 'product-images/med3.jpg'),
(2, 'Laptop Bag', 'Bag01', 50.00, 'product-images/med1.jpg'),
(3, 'iPhone X', 'iphone01', 700.00, 'product-images/med2.jpg'),
(4, 'Laptop Bag', 'Bag01', 50.00, 'product-images/med3.jpg'),
(5, 'Laptop Bag', 'Bag01', 50.00, 'product-images/med4.jpg'),
(6, 'Laptop Bag', 'Bag01', 50.00, 'product-images/med5.jpg'),
(7, 'Laptop Bag', 'Bag01', 50.00, 'product-images/med6.jpg'),
(8, 'Laptop Bag', 'Bag01', 50.00, 'product-images/med7.jpg');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
