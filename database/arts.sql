-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 09:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arts`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_contactus` (IN `Name` VARCHAR(200), IN `Email` VARCHAR(200), IN `MESSAGE` VARCHAR(500))   BEGIN
insert into contact_us(Name, Email, MESSAGE)
VALUES (Name, Email, MESSAGE);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', '312dc6ec7c900fb9017bf43c6b1f81bb', '2017-01-24 16:21:18', '01-10-2024 04:22:29 PM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(9, 'Arts and Stationary', 'Includes items like art supplies, stationery, files, and similar products.', '2024-10-01 16:05:34', '09-10-2024 01:21:51 AM'),
(10, 'Gift Articles', 'Sweet words for your sweet ones!', '2024-10-02 10:04:57', '09-10-2024 01:24:08 AM'),
(13, 'Handbags and Wallet', 'Want some portable storage for your infinite money? We got you!', '2024-10-02 10:36:15', '09-10-2024 01:24:47 AM');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Id`, `Name`, `Email`, `Message`) VALUES
(1, 'Saba', 'saba@gmail.com', ''),
(2, 'Saba', 'saba@gmail.com', ''),
(3, 'Ayesha', 'ayesha@gmail.com', ''),
(4, 'sara', 'sara@gmail.com', 'dgfvc '),
(5, 'sara', 'sara@gmail.com', 'dgfvc '),
(6, 'ali', 'ali@gmail.com', 'vaghv');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'employee', '312dc6ec7c900fb9017bf43c6b1f81bb', '2017-01-24 16:21:18', '01-10-2024 04:22:29 PM');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(1, 1, '3', 1, '2017-03-07 19:32:57', 'COD', NULL),
(3, 1, '4', 1, '2017-03-10 19:43:04', 'Debit / Credit card', 'Delivered'),
(4, 1, '17', 1, '2017-03-08 16:14:17', 'COD', 'in Process'),
(5, 1, '3', 1, '2017-03-08 19:21:38', 'COD', NULL),
(6, 1, '4', 1, '2017-03-08 19:21:38', 'COD', NULL),
(7, 4, '24', 1, '2022-05-31 07:24:39', 'COD', 'Delivered'),
(8, 6, '21', 1, '2024-10-01 11:05:11', 'COD', 'in Process');

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(1, 3, 'in Process', 'Order has been Shipped.', '2017-03-10 19:36:45'),
(2, 1, 'Delivered', 'Order Has been delivered', '2017-03-10 19:37:31'),
(3, 3, 'Delivered', 'Product delivered successfully', '2017-03-10 19:43:04'),
(4, 4, 'in Process', 'Product ready for Shipping', '2017-03-10 19:50:36'),
(5, 7, 'Delivered', 'hj', '2022-05-31 07:30:36'),
(6, 8, 'in Process', 'idk', '2024-10-01 11:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `productreviews`
--

INSERT INTO `productreviews` (`id`, `productId`, `quality`, `price`, `value`, `name`, `summary`, `review`, `reviewDate`) VALUES
(2, 3, 4, 5, 5, 'Anuj Kumar', 'BEST PRODUCT FOR ME :)', 'BEST PRODUCT FOR ME :)', '2017-02-26 20:43:57'),
(3, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:52:46'),
(4, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(79, 9, 26, 'Acrylic Paint Set', 'pak paints', 650, 500, '&nbsp;A set of vibrant acrylic paints suitable for artists of all levels.<br>', 'Acrylic Paint Set.webp', 'Acrylic Paint Set.webp', 'Acrylic Paint Set.webp', 50, 'In Stock', '2024-10-02 09:50:42', NULL),
(80, 9, 26, 'Watercolor Paint Palette', 'pak paints', 300, 650, '<br>', 'Watercolor Paint Palette.jpg', 'Watercolor Paint Palette.jpg', 'Watercolor Paint Palette.jpg', 20, 'In Stock', '2024-10-02 09:53:46', NULL),
(81, 9, 25, 'Sketchbook (A4 Size)', 'pak paper', 600, 800, 'High-quality paper sketchbook ideal for drawing and sketching.<br>', 'Sketchbook (A4 Size).jpg', 'Sketchbook (A4 Size).jpg', 'Sketchbook (A4 Size).jpg', 50, 'Out of Stock', '2024-10-02 09:55:08', NULL),
(82, 9, 25, 'Graphite Pencils (Set of 12)', 'pak stationary', 200, 300, 'A set of pencils ranging from soft to hard leads, perfect for sketching.<br>', 'Graphite Pencils (Set of 12).jpg', 'Graphite Pencils (Set of 12).jpg', 'Graphite Pencils (Set of 12).jpg', 50, 'In Stock', '2024-10-02 09:59:04', NULL),
(83, 9, 25, 'Calligraphy Pen Set', 'pak stationary', 900, 1000, '&nbsp;A set of pens designed for calligraphy and elegant writing.<br>', 'Calligraphy Pen Set.png', 'Calligraphy Pen Set.png', 'Calligraphy Pen Set.png', 50, 'In Stock', '2024-10-02 10:00:11', NULL),
(84, 9, 26, 'Canvas Panels (Pack of 5)', 'pak paints', 900, 1200, '&nbsp;Pre-primed canvas panels for painting.<br>', 'Canvas Panels (Pack of 5).jpg', 'Canvas Panels (Pack of 5).jpg', 'Canvas Panels (Pack of 5).jpg', 200, 'In Stock', '2024-10-02 10:01:17', NULL),
(85, 9, 26, 'Paint Brushes (Set of 10)', 'pak paints', 650, 800, 'A collection of different-sized brushes for fine art painting.<br>', 'Paint Brushes (Set of 10).jpg', 'Paint Brushes (Set of 10).jpg', 'Paint Brushes (Set of 10).jpg', 50, 'In Stock', '2024-10-02 10:02:05', NULL),
(86, 9, 25, 'Gel Pens (Pack of 20)', 'pak stationary', 300, 500, 'A colorful set of gel pens for writing and drawing.<br>', 'Gel Pens (Pack of 20).jpg', 'Gel Pens (Pack of 20).jpg', 'Gel Pens (Pack of 20).jpg', 50, 'In Stock', '2024-10-02 10:02:51', NULL),
(87, 10, 27, 'Glitter Name Mug', 'pak cups', 1300, 1500, 'A shimmering mug with a glitter finish, customized with a name in bold, elegant fonts, perfect for adding sparkle to your daily coffee or tea.<br>', 'Glitter Name Mug.jpg', 'Glitter Name Mug.jpg', 'Glitter Name Mug.jpg', 50, 'In Stock', '2024-10-02 10:13:57', NULL),
(88, 10, 27, 'Handwritten Style Name Mug', 'pak cups', 900, 1200, 'A sleek, personalized mug featuring a name in a stylish handwritten font, giving a personal and cozy feel.<br>', 'Handwritten Style Name Mug.jpg', '', '', 50, 'In Stock', '2024-10-02 10:15:47', NULL),
(89, 10, 27, 'Metallic Finish Name Mug', 'pak cups', 1000, 1200, 'This mug has a shiny, metallic finish with a custom name etched in gold or silver, making it a sophisticated gift option.<br>', 'Metallic Finish Name Mug.webp', 'Metallic Finish Name Mug.webp', 'Metallic Finish Name Mug.webp', 50, 'Out of Stock', '2024-10-02 10:18:42', NULL),
(90, 10, 27, 'Collage Photo Mug', 'pak cups', 900, 1200, 'A creative mug featuring a collage of your favorite photos, perfect for capturing multiple memories in one place.<br>', 'Two-Tone Custom Name Mug.jpg', 'Two-Tone Custom Name Mug.jpg', 'Two-Tone Custom Name Mug.jpg', 50, 'In Stock', '2024-10-02 10:19:40', NULL),
(91, 10, 28, 'Artisan Cheese & Crackers Basket', 'pak baskets', 900, 1000, '<div style=\"text-align: center;\">A gourmet selection of artisan cheeses paired with crunchy crackers, <b><i>perfect f</i></b>or a classy snack or entertaining guests.</div>', 'Artisan Cheese.jpg', 'Artisan Cheese.jpg', 'Artisan Cheese.jpg', 50, 'Out of Stock', '2024-10-02 10:24:06', NULL),
(92, 10, 28, 'Fresh Fruit & Nut Basket', 'pak baskets', 900, 1200, 'A healthy and delicious combination of seasonal fresh fruits and a variety of roasted nuts, great for gifting to health-conscious individuals.<br>', 'Fresh Fruit & Nut Basket.jpg', 'Fresh Fruit & Nut Basket.jpg', 'Fresh Fruit & Nut Basket.jpg', 200, 'Out of Stock', '2024-10-02 10:24:59', NULL),
(93, 10, 28, 'Assorted Truffle Basket', 'pak baskets', 650, 800, 'A premium assortment of hand-crafted chocolate truffles in a variety of flavors, offering a melt-in-your-mouth experience.<br>', 'Assorted Truffle Basket.webp', 'Assorted Truffle Basket.webp', 'Assorted Truffle Basket.webp', 100, 'In Stock', '2024-10-02 10:26:36', NULL),
(94, 10, 28, 'Dark Chocolate Delight Basket', 'pak baskets', 900, 1200, 'A basket filled with rich and decadent dark chocolates, including bars, truffles, and other chocolatey treats, perfect for dark chocolate enthusiasts.<br>', 'Deluxe Charcuterie Basket.jpg', 'Deluxe Charcuterie Basket.jpg', 'Deluxe Charcuterie Basket.jpg', 100, 'In Stock', '2024-10-02 10:27:55', NULL),
(95, 13, 33, 'Leather Classic Tote', 'pak bags', 850, 1000, '<li>A spacious and durable leather tote, perfect for carrying daily essentials with a touch of elegance, featuring an interior pocket for added convenience.</li><li></li>', 'Leather Classic Tote.jpg', 'Leather Classic Tote.jpg', 'Leather Classic Tote.jpg', 100, 'Out of Stock', '2024-10-04 10:46:29', NULL),
(96, 13, 33, 'Canvas Shopper Tote', 'pak bags', 900, 1200, 'Lightweight and eco-friendly, this canvas tote is ideal for casual outings or shopping, featuring sturdy handles and a minimalist design.<br>', 'toe.jpg', 'toe.jpg', 'toe.jpg', 100, 'In Stock', '2024-10-04 10:47:08', NULL),
(97, 13, 33, 'Nylon Travel Crossbody', 'pak bags', 600, 800, 'A lightweight and water-resistant crossbody, ideal for travel, with multiple pockets to securely store valuables.<br>', 'Nylon Travel Crossbody.webp', 'Nylon Travel Crossbody.webp', 'Nylon Travel Crossbody.webp', 100, 'In Stock', '2024-10-04 10:47:52', NULL),
(98, 13, 33, 'Convertible Crossbody Clutch', 'pak bags', 900, 1000, 'A versatile bag that can be worn as a crossbody or converted into a clutch, making it suitable for both day and night use.<br>', 'Convertible Crossbody Clutch.jpg', 'Convertible Crossbody Clutch.jpg', 'Convertible Crossbody Clutch.jpg', 50, 'Out of Stock', '2024-10-04 10:48:46', NULL),
(99, 13, 33, 'Mini Crossbody Saddle Bag', 'pak bags', 600, 800, 'A trendy mini bag with a rounded saddle shape, ideal for carrying small essentials with style, featuring an adjustable strap for comfort.<br>', 'Mini Crossbody Saddle Bag.webp', 'Mini Crossbody Saddle Bag.webp', 'Mini Crossbody Saddle Bag.webp', 100, 'In Stock', '2024-10-04 10:49:23', NULL),
(100, 13, 34, 'Classic Leather Bifold Wallet', 'pak wallet', 900, 1200, 'A timeless leather wallet featuring multiple card slots and a cash compartment, designed for everyday use with a slim profile.<br>', 'Classic Leather Bifold Wallet.jpg', 'Classic Leather Bifold Wallet.jpg', 'Classic Leather Bifold Wallet.jpg', 100, 'In Stock', '2024-10-04 10:50:17', NULL),
(101, 13, 34, 'RFID-Blocking Bifold Wallet', 'pak wallet', 300, 500, 'A modern bifold wallet with RFID-blocking technology to protect your cards from electronic theft, without compromising style.<br>', 'RFID-Blocking Bifold Wallet.jpg', 'RFID-Blocking Bifold Wallet.jpg', 'RFID-Blocking Bifold Wallet.jpg', 50, 'In Stock', '2024-10-04 10:51:06', NULL),
(102, 13, 34, 'Slim Bifold Cardholder', 'pak wallet', 300, 500, 'A minimalist bifold wallet designed for those who prefer to carry just a few cards and cash, ideal for front-pocket storage.<br>', 'Slim Bifold Cardholder.jpg', 'Slim Bifold Cardholder.jpg', 'Slim Bifold Cardholder.jpg', 100, 'In Stock', '2024-10-04 10:51:55', NULL),
(103, 13, 34, 'Wristlet Zip-Around Wallet', 'pak wallet', 800, 1000, 'A compact wallet with an attached wrist strap, allowing it to be carried as a small clutch for quick errands or nights out.<br>', 'Wristlet Zip-Around Wallet.webp', 'Wristlet Zip-Around Wallet.webp', 'Wristlet Zip-Around Wallet.webp', 100, 'In Stock', '2024-10-04 10:52:37', NULL),
(104, 13, 34, 'Quilted Zip-Around Wallet', 'pak wallet', 650, 800, '<br>', 'Quilted Zip-Around Wallet.webp', 'Quilted Zip-Around Wallet.webp', 'Quilted Zip-Around Wallet.webp', 50, 'In Stock', '2024-10-04 10:53:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(13, 7, 'Lipsticks', '2022-05-26 10:56:06', NULL),
(14, 7, 'Eye Shadow', '2022-05-26 11:00:59', NULL),
(15, 7, 'Eye liner', '2022-05-26 11:01:23', NULL),
(16, 7, 'Maskara', '2022-05-26 11:01:56', NULL),
(17, 7, 'Blush on ', '2022-05-26 11:02:15', NULL),
(18, 7, 'Foundation', '2022-05-26 11:02:30', NULL),
(19, 7, 'Face Powder', '2022-05-26 11:02:46', NULL),
(25, 9, 'Stationary', '2024-10-02 09:33:42', NULL),
(26, 9, 'arts ', '2024-10-02 09:34:42', NULL),
(27, 10, 'Custom Name Mugs', '2024-10-02 10:05:14', NULL),
(28, 10, 'Gift Baskets', '2024-10-02 10:05:34', NULL),
(29, 11, ' bags', '2024-10-02 10:28:47', NULL),
(30, 11, ' wallets', '2024-10-02 10:28:56', NULL),
(31, 12, ' bags', '2024-10-02 10:35:37', NULL),
(32, 12, ' wallets', '2024-10-02 10:35:41', NULL),
(33, 13, ' bags', '2024-10-02 10:36:31', NULL),
(34, 13, ' wallets', '2024-10-02 10:36:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(24, 'hafsasaleem125@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-31 07:23:34', NULL, 1),
(25, 'hafsasaleem125@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-02 05:39:07', NULL, 1),
(26, 'rayyantahir009@gmail.com', 0x3a3a3100000000000000000000000000, '2024-10-01 11:03:50', NULL, 1),
(27, 'sameerk722004@gmail.com', 0x3a3a3100000000000000000000000000, '2024-10-10 16:14:16', NULL, 0),
(28, 'admin@email.com', 0x3a3a3100000000000000000000000000, '2024-10-10 16:14:41', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext DEFAULT NULL,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext DEFAULT NULL,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(2, 'Amit ', 'amit@gmail.com', 8285703355, '5c428d8875d2948607f3e3fe134d71b4', '', '', '', 0, '', '', '', 0, '2017-03-15 17:21:22', ''),
(3, 'hg', 'hgfhgf@gmass.com', 1121312312, '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 0, '', '', '', 0, '2018-04-29 09:30:32', ''),
(4, 'hafsa', 'hafsasaleem125@gmail.com', 317258831, '77bb31f12c6398dff63ed95dbaa6927a', 'cgvhbj', 'dnty,ufix', 'xf,ux', 0, 'drm,urufgu,', 'rut,xftu', 'xfti.xfi', 9685, '2022-05-31 07:22:59', NULL),
(5, 'hafsa', 'hafsa125@gmail.com', 317258831, '77bb31f12c6398dff63ed95dbaa6927a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-13 04:31:21', NULL),
(6, 'rayyan', 'rayyantahir009@gmail.com', 3161623488, '312dc6ec7c900fb9017bf43c6b1f81bb', 'sdf', 'sdf', 'sdf', 123, 'sdas', 'asd', 'asd21', 123, '2024-10-01 11:03:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(12, 'hafsa', 'saleem', 'hafsa951@gmail.com', '1234', '9448121558', '123456789', 'sdcjns,djc'),
(15, 'hemu', 'ajhgdg', 'puneethreddy951@gmail.com', '346778', '536487276', ',mdnbca', 'asdmhmhvbv'),
(19, 'abhishek', 'bs', 'abhishekbs@gmail.com', 'asdcsdcc', '9871236534', 'bangalore', 'hassan'),
(21, 'prajval', 'mcta', 'prajvalmcta@gmail.com', '1234545662', '202-555-01', 'bangalore', 'kumbalagodu'),
(22, 'puneeth', 'v', 'hemu@gmail.com', '1234534', '9877654334', 'snhdgvajfehyfygv', 'asdjbhfkeur'),
(23, 'abc', 'bca', 'abc@gmail.com', '1234', '9876543234', 'Bangalore', 'Kumbalagodu'),
(24, 'newuser', 'user', 'newuser@gmail.com', '1234', '9535688928', 'Bangalore', 'Kumbalagodu');

--
-- Triggers `user_info`
--
DELIMITER $$
CREATE TRIGGER `after_user_info_insert` AFTER INSERT ON `user_info` FOR EACH ROW BEGIN 
INSERT INTO user_info_backup VALUES(new.user_id,new.first_name,new.last_name,new.email,new.password,new.mobile,new.address1,new.address2);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(1, 1, 0, '2017-02-27 18:53:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
