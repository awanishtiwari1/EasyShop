-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2017 at 05:27 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_shopping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `CartId` int(200) NOT NULL AUTO_INCREMENT,
  `UserId` varchar(200) NOT NULL,
  `productId` int(200) NOT NULL,
  `Quantity` int(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL,
  PRIMARY KEY (`CartId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartId`, `UserId`, `productId`, `Quantity`, `Date`, `Status`) VALUES
(6, 'sandeep@gmail.com', 5, 1, '14/12/17 11:10:05am', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `categary`
--

CREATE TABLE IF NOT EXISTS `categary` (
  `categaryId` int(250) NOT NULL AUTO_INCREMENT,
  `CategaryName` varchar(256) NOT NULL,
  `datetime` varchar(200) NOT NULL,
  PRIMARY KEY (`categaryId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `categary`
--

INSERT INTO `categary` (`categaryId`, `CategaryName`, `datetime`) VALUES
(26, 'health and beauty', '30/11/17 12:55:44pm'),
(25, 'kids and Clild', '30/11/17 12:55:30pm'),
(24, 'Women', '30/11/17 12:55:15pm'),
(23, 'Men', '30/11/17 12:55:07pm'),
(21, 'mobile', '30/11/17 12:54:52pm'),
(22, 'laptop', '30/11/17 12:55:01pm'),
(20, 'electonics', '30/11/17 12:54:30pm'),
(30, 'ram', '14/12/17 10:40:26am');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `description`, `datetime`) VALUES
(2, 'sandy', 's@gmail.con', '1234567890', '\r\nHellow My name is sandy', '2017-12-14  12:34:52am'),
(3, 'ajay kumar', 'ajay@gmail.com', '7007452087', 'hi! ajay bro', '2017-12-14  12:35:36am');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `login_status` varchar(50) NOT NULL,
  `login_count` varchar(50) NOT NULL,
  `logoutdatetime` varchar(50) NOT NULL,
  `login_datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `login_status`, `login_count`, `logoutdatetime`, `login_datetime`) VALUES
(1, 'spgour@gmail.com', '12345', 'true', '139', '17/12/17 01:07:30pm', '17/12/17 01:11:05pm'),
(2, 'sp@gmail.com', '123', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `datetime` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `image`, `description`, `datetime`) VALUES
(1, 'slid1.jpg', '<div><br></div><h1><span style="font-weight: bold; font-style: italic; color: rgb(255, 0, 0);"><br>image1</span></h1>', '2017-12-11  12:34:52am'),
(2, 'slid2.jpg', '<h1><span style="font-weight: bold; font-style: italic; color: rgb(255, 255, 0);">image2</span></h1>', '2017-12-11  12:35:28am'),
(3, 'slid3.jpg', '<h1><span style="font-weight: bold; font-style: italic; color: rgb(255, 0, 255);">image3</span></h1>', '2017-12-11  12:36:05am'),
(4, 'slid3.jpg', '<h1><span style="font-weight: bold; font-style: italic; color: rgb(255, 0, 255);">image3</span></h1>', '2017-12-11  12:36:06am'),
(5, 'slid4.jpg', '<h1><span style="font-weight: bold; font-style: italic; color: rgb(103, 78, 167);">image4</span></h1>', '2017-12-11  12:37:01am'),
(6, 'slid5.jpg', '<h1><span style="font-weight: bold; font-style: italic; color: rgb(32, 18, 77);">image5</span></h1>', '2017-12-11  12:37:32am'),
(7, 'mobile1.jpg', 'geggggggg', '2017-12-11  01:42:22am');

-- --------------------------------------------------------

--
-- Table structure for table `orderproducts`
--

CREATE TABLE IF NOT EXISTS `orderproducts` (
  `OrderProductId` int(200) NOT NULL AUTO_INCREMENT,
  `OrderId` int(200) NOT NULL,
  `ProductId` int(200) NOT NULL,
  `Quantity` int(200) NOT NULL,
  `date` varchar(22) NOT NULL,
  `time` varchar(33) NOT NULL,
  PRIMARY KEY (`OrderProductId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orderproducts`
--

INSERT INTO `orderproducts` (`OrderProductId`, `OrderId`, `ProductId`, `Quantity`, `date`, `time`) VALUES
(2, 2, 8, 1, '2017-12-15', '02:40:48pm'),
(3, 3, 8, 1, '2017-12-15', '02:43:35pm');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `userId` varchar(200) NOT NULL,
  `info` text NOT NULL,
  `transaction` varchar(50) NOT NULL,
  `DeliveryCharge` int(200) NOT NULL,
  `Tax` int(200) NOT NULL,
  `TotalAmount` int(200) NOT NULL,
  `DeliveryAddress` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`OrderId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderId`, `username`, `userId`, `info`, `transaction`, `DeliveryCharge`, `Tax`, `TotalAmount`, `DeliveryAddress`, `date`, `time`) VALUES
(2, 'vishal', 'vishal@gmail.com', 'laptop', 'D65B3CFDAB', 50, 5, 28900, ' 123,22,kushi,kushi,utter pradesh', ' 2017-12-15', '02:40:48pm'),
(3, 'vishal', 'vishal@gmail.com', 'laptop', '07AC537326', 50, 5, 28900, ' 22,66,77,lko,up', ' 2017-12-15', '02:43:35pm');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_Id` int(200) NOT NULL AUTO_INCREMENT,
  `productName` varchar(200) NOT NULL,
  `productTagLine` varchar(200) NOT NULL,
  `categary` varchar(200) NOT NULL,
  `subCategary` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `discount` int(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `stock` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  PRIMARY KEY (`product_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_Id`, `productName`, `productTagLine`, `categary`, `subCategary`, `brand`, `unit`, `price`, `discount`, `image1`, `image2`, `image3`, `Description`, `stock`, `date`) VALUES
(1, 'sumsung head phones', 'kfxgvshflhs', '21', '40', 'sjdfksjdhf', '095680949578', 485769387, 48563, 'blackberry_dtek50_thumb_640x480.jpg', 'e8470b53d4350fa98b82123dd22e1340.jpg', 'honor_5x_small640_ndtv_640x480.jpg', 'hfgshlfhdsl<div>dlkfjslke</div>', 'true', '11/12/17  01:20:24am'),
(2, 'bags', 'best backside bags', '20', '39', 'junia', '250gram', 540, 10, 'bag (1).jpg', 'bag (3).jpg', 'bag (2).jpg', '<h3><span style="font-weight: bold; font-style: italic; color: rgb(255, 0, 0);"><span style="font-family: &quot;trebuchet ms&quot;, sans-serif;"><br></span><span style="font-family: &quot;trebuchet ms&quot;, sans-serif;">this bags is the best of other bags</span></span></h3>', 'true', '13/12/17  11:05:59am'),
(3, 'mobiles', 'phones', '21', '40', 'mobile', '0986876', 5550, 10, 'honor_5x_small640_ndtv_640x480.jpg', 'lenovo-k8-plus-pa8c0020in-original-imaexgyv94adazze.jpeg', 'lg_v20_upperfront_ndtv_thumb_640x480.jpg', '<span style="font-style: italic; font-weight: bold;">model sumsung neo A4</span><div><span style="font-style: italic; font-weight: bold;">2 GB RAM internal storage 32 GB</span></div><div><span style="font-style: italic; font-weight: bold;">rear camera 13 px and front 20px</span></div>', 'true', '13/12/17  11:11:10am'),
(4, 'head phones', 'not effect my ear', '22', '44', 'sony', '20', 250, 5, 'airphone (2).jpg', 'airphone (2).png', 'airphone (3).jpg', '20 gram&nbsp;<div>sweet sound no effect our ear</div>', 'true', '13/12/17  11:14:12am'),
(5, 'airphome', 'audio listening', '21', '41', 'sony', '30', 1000, 10, 'airphone (5).jpg', 'airphone (6).jpg', 'airphone (7).jpg', 'sony ear phone this is safe my ear&nbsp;<div>no effect my ear</div><div>sweet sound</div>', 'true', '13/12/17  11:16:44am'),
(6, 'head phones', 'head phones', '21', '40', 'nokia', '50', 1450, 20, 'airphone (22).jpg', 'head2.jpg', 'head1.jpg', 'nokia model ggg34 ear phones', 'true', '13/12/17  11:18:59am'),
(7, 'frock', 'lahenga', '24', '51', 'dde', '34', 890, 0, 'Lahenga (3).jpg', 'Lahenga (4).jpg', 'Lahenga (5).jpg', 'banarashi lahenga and chunari<div>best clothes of india</div>', 'true', '13/12/17  11:20:56am'),
(8, 'laptop', 'laptop', '22', '44', 'laptop dell', '2200 kg', 28900, 1, 'lap1.jpeg', 'lap2.jpeg', 'lap6.jpeg', 'dell laptop&nbsp;<div>model dell votro 5550</div><div>ram 4 gb and 1 tb hard disk</div>', 'true', '13/12/17  11:23:10am'),
(9, 'laptop', 'laptop best', '22', '44', 'dell', '0.0000', 12000, 54321, 'lap1.jpeg', 'lap2.jpeg', 'lap3.jpeg', '<h1><span style="font-family: georgia, serif; color: rgb(255, 0, 0);">dell Vostro</span></h1><h3><span style="font-family: georgia, serif; color: rgb(255, 0, 0);">Modal 3000 Series</span></h3><div><span style="color: rgb(255, 0, 0); font-family: georgia, serif;">4 GB RAM Internal&nbsp;</span></div><div><span style="color: rgb(255, 0, 0); font-family: georgia, serif;">32 GB RAM Hard Disk</span></div><div><span style="color: rgb(255, 0, 0); font-family: georgia, serif;">8 MP rear&nbsp; front Camera</span></div><div><span style="color: rgb(255, 0, 0); font-family: georgia, serif;">13 MP Front Camera&nbsp;</span></div><div><span style="font-family: georgia, serif; color: rgb(255, 0, 0);"><br></span></div><div><span style="font-family: georgia, serif; color: rgb(255, 0, 0);"><br></span></div>', 'true', '14/12/17  09:30:47pm'),
(10, 'airphone', 'sweet voice', '21', '41', 'nokia', '0.00000', 53000, 12, 'lap6.jpeg', 'lap7.jpeg', 'beelink-p2-original-imaeertysxmtb2hz.jpeg', '<h3><span style="font-family: verdana, sans-serif; color: rgb(255, 0, 0);">Nokia 54A6E</span></h3><div><span style="font-family: verdana, sans-serif; color: rgb(255, 0, 0);"><br></span></div><div><span style="color: rgb(0, 0, 0); font-family: verdana, sans-serif; font-style: italic;">4 GB RAM&nbsp;</span></div><div><span style="color: rgb(0, 0, 0); font-family: verdana, sans-serif; font-style: italic;">32 GB RAM External&nbsp;</span></div><div><span style="color: rgb(0, 0, 0); font-family: verdana, sans-serif; font-style: italic;">13 MP Camera Front</span></div><div><span style="color: rgb(0, 0, 0); font-family: verdana, sans-serif; font-style: italic;">20 MP Camera Rear</span></div>', 'true', '14/12/17  09:36:30pm'),
(11, 'sumsung neo A43', 'sumsung best Mobile phones ', '21', '40', 'sumsung', '140', 98000, 12, 'micromax_canvas_infinity_thumb_640x480.jpg', 'mi-redmi-note-4-na-200x200-imaeqdxgrdhxgkcx.jpeg', 'mobile3.jpg', '<h4><span style="color: rgb(116, 27, 71);">Lifeâ€™s precious moments need to be documented. What better way to record every move of yours than on this sleek Vivo Y53 smartphone. It is lightweight and easily fits your pocket. Capture your daily life using its impressive camera, it has enough memory to store all your moments.</span></h4><div><span style="white-space:pre">			</span></div><div><span style="white-space:pre">			</span>waranty -out of one year</div><div><span style="white-space:pre">			</span>usual delivery 3 days or five days</div><div><span style="white-space:pre">			</span>highLights :</div><div><span style="white-space:pre">			</span>2 GB RAM&nbsp; and&nbsp; 32 GB internal</div><div><span style="white-space:pre">			</span>5 MP Camera front camera and 13 MP rear camera removal battery</div><div><span style="white-space:pre">			</span>2.2 quod core processors</div><div><span style="white-space:pre">			</span>double sim card one is naino and second is micro sim</div>', 'true', '14/12/17  10:04:55pm');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `registration`
--


-- --------------------------------------------------------

--
-- Table structure for table `subcategary`
--

CREATE TABLE IF NOT EXISTS `subcategary` (
  `subcategary_id` int(250) NOT NULL AUTO_INCREMENT,
  `categaryId` int(250) NOT NULL,
  `SubCategaryName` varchar(256) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  PRIMARY KEY (`subcategary_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `subcategary`
--

INSERT INTO `subcategary` (`subcategary_id`, `categaryId`, `SubCategaryName`, `datetime`) VALUES
(49, 26, 'vicco_turmaric', '30/11/17 01:01:33pm'),
(47, 26, 'fail lovely', '30/11/17 01:01:10pm'),
(48, 26, 'bonds', '30/11/17 01:01:16pm'),
(45, 23, 'paints', '30/11/17 01:00:39pm'),
(46, 23, 't_shirt', '30/11/17 01:00:46pm'),
(44, 22, 'laptop & accesssories', '30/11/17 01:00:28pm'),
(42, 21, 'charger', '30/11/17 01:00:02pm'),
(43, 22, 'laptop', '30/11/17 01:00:16pm'),
(41, 21, 'airphone', '30/11/17 12:59:51pm'),
(38, 20, 'men', '30/11/17 12:56:33pm'),
(39, 20, 'Kids & cloths', '30/11/17 12:57:28pm'),
(40, 21, 'mobile & accessories', '30/11/17 12:58:53pm'),
(37, 20, 'laptop &accessories', '30/11/17 12:56:21pm'),
(36, 20, 'mobile & accessories', '30/11/17 12:56:04pm'),
(50, 24, 'shoes', '30/11/17 01:01:43pm'),
(51, 24, 'lahenga', '30/11/17 01:01:52pm'),
(52, 24, 't_shirt', '30/11/17 01:02:01pm'),
(53, 25, 'underwrear', '30/11/17 01:02:14pm'),
(54, 25, 'paints', '30/11/17 01:02:23pm'),
(55, 27, 'hhhhhhhhhhhhhhhhhhhh', '01/12/17 04:15:57pm'),
(56, 28, 'kkgjkdhgkdhrfk', '06/12/17 01:58:22pm'),
(58, 30, 'mnfja', '14/12/17 10:40:45am');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `datetime` varchar(200) NOT NULL,
  `code` varchar(50) NOT NULL,
  `OTP` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `mobile`, `email`, `password`, `datetime`, `code`, `OTP`) VALUES
(30, 'vishal', '1234567890', 'vishal@gmail.com', '12345678', '14/12/1712:06:15pm', 'IN +91', 746353),
(29, 'sandeep', '9260936018', 'sandeep@gmail.com', '1234567', '10/12/1705:20:18pm', 'IN +91', 746353);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `login_count` varchar(200) NOT NULL,
  `login_status` varchar(30) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `email`, `password`, `mobile`, `login_count`, `login_status`, `datetime`) VALUES
(29, 'vishal@gmail.com', 'sandy123', '1234567890', '17', 'true', '19/12/17 10:48:00am'),
(28, 'sandeep@gmail.com', 'sandeep123', '9260936018', '8', 'true', '19/12/17 10:47:41am');
