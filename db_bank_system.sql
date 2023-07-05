-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 01:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bank_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `op_accounts`
--

CREATE TABLE `op_accounts` (
  `txn_key` int(11) NOT NULL,
  `user_key` int(10) DEFAULT NULL,
  `amount` int(10) NOT NULL DEFAULT 0,
  `txn_type` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `op_accounts`
--

INSERT INTO `op_accounts` (`txn_key`, `user_key`, `amount`, `txn_type`, `created_at`, `status`) VALUES
(1, 2, 300, 'dr', '2023-07-06 02:37:55', 1),
(2, 2, 300, 'dr', '2023-07-06 02:43:10', 1),
(3, 2, 300, 'cr', '2023-07-06 02:57:18', 1),
(4, 2, 300, 'cr', '2023-07-06 02:57:25', 1),
(5, 2, 1000, 'cr', '2023-07-06 03:48:01', 1),
(6, 2, 1, 'dr', '2023-07-06 03:49:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `op_card_details`
--

CREATE TABLE `op_card_details` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `card_type` int(10) DEFAULT NULL,
  `c_logo` varchar(255) DEFAULT NULL,
  `c_name` text DEFAULT NULL,
  `about` text DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `whats_no` varchar(20) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `website_url` text DEFAULT NULL,
  `pdf1` text DEFAULT NULL,
  `pdf2` text DEFAULT NULL,
  `social_link` text DEFAULT NULL,
  `paytm_no` varchar(255) DEFAULT NULL,
  `paytm_qr` text DEFAULT NULL,
  `googlepay_no` varchar(255) DEFAULT NULL,
  `googlepay_qr` text DEFAULT NULL,
  `phoneopay_no` varchar(255) DEFAULT NULL,
  `phonepay_qr` text DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ac_holder_name` varchar(255) DEFAULT NULL,
  `bank_ac_no` varchar(255) DEFAULT NULL,
  `bank_ifsc_code` varchar(255) DEFAULT NULL,
  `all_products` text DEFAULT NULL,
  `gallery_img` text DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `op_card_details`
--

INSERT INTO `op_card_details` (`id`, `userid`, `card_type`, `c_logo`, `c_name`, `about`, `first_name`, `designation`, `mobile_no`, `whats_no`, `email_id`, `address`, `website_url`, `pdf1`, `pdf2`, `social_link`, `paytm_no`, `paytm_qr`, `googlepay_no`, `googlepay_qr`, `phoneopay_no`, `phonepay_qr`, `bank_name`, `ac_holder_name`, `bank_ac_no`, `bank_ifsc_code`, `all_products`, `gallery_img`, `created_at`) VALUES
(1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-13'),
(2, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-13'),
(3, 2, 1, NULL, NULL, 'sdf sdfsd sdfsd', 'sdfsd', 'jhsdkjkjh', NULL, '6235148596', NULL, 'argora , jharkhand\r\nargora , jharkhand\r\nargora , jharkhand', 'https://www.youtube.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-13'),
(4, 2, 1, '/assets/c_logo/1677216514.png', 'Brightcode', 'sdfsdfsdf', 'sdfsdf', 'jhsdkjkjh', '08457132654', '6235148596', 'ankit@gmail.com', 'argora , jharkhand\r\nargora , jharkhand\r\nargora , jharkhand', 'https://www.youtube.com/', '/assets/pdf1/1677216514.pdf', '/assets/pdf2/1677216514.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-13'),
(5, 2, 1, NULL, 'Brightcode', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-13'),
(6, 2, 1, '/assets/c_logo/1677218041.png', 'Brightcode', 'sdfsadf', 'sd', 'jhsdkjkjh', '08457132654', '6235148596', 'ankit@gmail.com', 'argora , jharkhand\r\nargora , jharkhand\r\nargora , jharkhand', 'https://www.youtube.com/', '/assets/pdf1/1677218041.pdf', '/assets/pdf2/1677218041.pdf', '[{\"d_fb\":\"https:\\/\\/www.youtube.com\\/\",\"d_twitter\":\"https:\\/\\/www.youtube.com\\/\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"https:\\/\\/www.youtube.com\\/\",\"d_pinterest\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid1\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid2\":\"https:\\/\\/www.youtube.com\\/\"},{\"d_fb\":\"https:\\/\\/www.youtube.com\\/\",\"d_twitter\":\"\",\"d_instagram\":\"\",\"d_linkedin\":\"\",\"d_youtube\":\"\",\"d_pinterest\":\"\",\"d_yt_vid1\":\"\",\"d_yt_vid2\":\"\"},{\"d_fb\":\"https:\\/\\/www.youtube.com\\/\",\"d_twitter\":\"https:\\/\\/www.youtube.com\\/\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"https:\\/\\/www.youtube.com\\/\",\"d_pinterest\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid1\":\"\",\"d_yt_vid2\":\"\"},{\"d_fb\":\"\",\"d_twitter\":\"\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"https:\\/\\/www.youtube.com\\/\",\"d_pinterest\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid1\":\"\",\"d_yt_vid2\":\"\"},{\"d_fb\":\"\",\"d_twitter\":\"\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"\",\"d_pinterest\":\"\",\"d_yt_vid1\":\"\",\"d_yt_vid2\":\"\"}]', '85623514@upi', '/assets/paytm_qr/1677223640.jpg', '85623514@upi', '/assets/googlepay_qr/1677223640.jpg', '85623514@upi', '/assets/phonepay_qr/1677223640.jpg', 'BOI', 'ankit', '362514748596', 'aadaas1563652', '[{\"prod_img\":\"\\/assets\\/pro_img\\/1677232063.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"sdsadsa\"},{\"prod_img\":\"\\/assets\\/pro_img\\/16772320631.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"asddsasd\"},{\"prod_img\":\"\\/assets\\/pro_img\\/16772320632.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"asdsadasd\"}]', NULL, '2023-02-13'),
(7, 2, 1, '/assets/c_logo/1677230636.png', 'Brightcode', 'We at “Oflep Card” have had the pleasure of associating with many esteemed organization and have endeavored to provide our best services in attaining complete client satisfaction. We have been able to establish ourselves as industry leaders in turnkey LPG Reticulation systems (Installation as well as complete services backup) & City Gas Distribution work, across many verticals. We have been able to establish ourselves as industry leaders in turnkey LPG Reticulation systems (Installation as well as complete services backup) & City Gas Distribution work, across many verticals.', 'Ankit kumar', 'Trainner', '08457132654', '6235148596', 'ankit@gmail.com', 'argora , jharkhand', 'https://www.youtube.com/', '/assets/pdf1/1677230636.pdf', '/assets/pdf2/1677230636.pdf', '[{\"d_fb\":\"https:\\/\\/www.youtube.com\\/\",\"d_twitter\":\"https:\\/\\/www.youtube.com\\/\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"https:\\/\\/www.youtube.com\\/\",\"d_pinterest\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid1\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid2\":\"https:\\/\\/www.youtube.com\\/\"},{\"d_fb\":\"https:\\/\\/www.youtube.com\\/\",\"d_twitter\":\"https:\\/\\/www.youtube.com\\/\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"https:\\/\\/www.youtube.com\\/\",\"d_pinterest\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid1\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid2\":\"https:\\/\\/www.youtube.com\\/\"}]', '85623514@upi', '/assets/paytm_qr/16772306941.png', '85623514@upi', '/assets/googlepay_qr/1677230694.png', '85623514@upi', '/assets/phonepay_qr/1677230694.png', 'BOI', 'ankit', '362514748596', 'aadaas1563652', '[{\"prod_img\":\"\\/assets\\/pro_img\\/1677232063.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"sdsadsa\"},{\"prod_img\":\"\\/assets\\/pro_img\\/16772320631.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"asddsasd\"},{\"prod_img\":\"\\/assets\\/pro_img\\/16772320632.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"asdsadasd\"}]', '[\"\\/assets\\/pro_img\\/1677233786.png\",\"\\/assets\\/pro_img\\/16772337861.png\",\"\\/assets\\/pro_img\\/16772337862.png\",\"\\/assets\\/pro_img\\/1677233786.jpg\",\"\\/assets\\/pro_img\\/16772337861.jpg\",\"\\/assets\\/pro_img\\/16772337862.jpg\"]', '2023-02-13'),
(8, 2, 1, NULL, 'Brightcode', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-13'),
(9, 2, 1, '/assets/c_logo/1677316267.png', 'Brightcode', 'In the winter of 2011, while serving as working members at ADX, Portland’s Makerspace, Zach and Josh met and became friends, sharing a love of art, punk, and burritos. With the help of their friends at ADX, they formed Band, a diverse, draw-it-by-hand, make-it-from-scratch, do-it-together creative studio, in a room they built above the shop’s kitchen.', 'sdfsdf', 'jhsdkjkjh', '08457132654', '6235148596', 'ankit@gmail.com', 'argora , jharkhand\r\nargora , jharkhand\r\nargora , jharkhand', 'https://www.youtube.com/', '/assets/pdf1/1677316267.pdf', '/assets/pdf2/1677316267.pdf', '[{\"d_fb\":\"https:\\/\\/www.youtube.com\\/\",\"d_twitter\":\"https:\\/\\/www.youtube.com\\/\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"https:\\/\\/www.youtube.com\\/\",\"d_pinterest\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid1\":\"https:\\/\\/youtu.be\\/es4x5R-rV9s\",\"d_yt_vid2\":\"https:\\/\\/youtu.be\\/es4x5R-rV9s\"},{\"d_fb\":\"https:\\/\\/www.youtube.com\\/\",\"d_twitter\":\"https:\\/\\/www.youtube.com\\/\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"https:\\/\\/www.youtube.com\\/\",\"d_pinterest\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid1\":\"https:\\/\\/youtu.be\\/es4x5R-rV9s\",\"d_yt_vid2\":\"https:\\/\\/youtu.be\\/es4x5R-rV9s\"}]', '85623514@upi', '/assets/paytm_qr/16773163811.png', '85623514@upi', '/assets/googlepay_qr/1677316381.png', '85623514@upi', '/assets/phonepay_qr/1677316381.png', 'BOI', 'ankit', '362514748596', 'aadaas1563652', '[{\"prod_img\":\"\\/assets\\/pro_img\\/1677316540.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"In the winter of 2011, while serving as working members at ADX, Portland\\u2019s Makerspace, Zach and Josh met and became friends, sharing a love of art, punk, and burritos. With the help of their friends at ADX, \"},{\"prod_img\":\"\\/assets\\/pro_img\\/16773165401.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"900\",\"pro_desp\":\"In the winter of 2011, while serving as working members at ADX, Portland\\u2019s Makerspace, Zach and Josh met and became friends, sharing a love of art, punk, and burritos. With the help of their friends at ADX, \"},{\"prod_img\":\"\\/assets\\/pro_img\\/1677316540.png\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"900\",\"pro_desp\":\"In the winter of 2011, while serving as working members at ADX, Portland\\u2019s Makerspace, Zach and Josh met and became friends, sharing a love of art, punk, and burritos. With the help of their friends at ADX, \"},{\"prod_img\":\"\\/assets\\/pro_img\\/16773165402.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"950\",\"pro_desp\":\"In the winter of 2011, while serving as working members at ADX, Portland\\u2019s Makerspace, Zach and Josh met and became friends, sharing a love of art, punk, and burritos. With the help of their friends at ADX, \"},{\"prod_img\":\"\\/assets\\/pro_img\\/16773165403.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"900\",\"pro_desp\":\"In the winter of 2011, while serving as working members at ADX, Portland\\u2019s Makerspace, Zach and Josh met and became friends, sharing a love of art, punk, and burritos. With the help of their friends at ADX, \"},{\"prod_img\":\"\\/assets\\/pro_img\\/16773165404.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"600\",\"pro_desp\":\"In the winter of 2011, while serving as working members at ADX, Portland\\u2019s Makerspace, Zach and Josh met and became friends, sharing a love of art, punk, and burritos. With the help of their friends at ADX, \"}]', '[\"\\/assets\\/gellary_img\\/1677316567.jpg\",\"\\/assets\\/gellary_img\\/16773165671.jpg\",\"\\/assets\\/gellary_img\\/16773165672.jpg\"]', '0000-00-00'),
(10, 2, 2, '/assets/c_logo/1677320506.png', 'Brightcode', 'sdfsdfsdf', 'sdfsdf', 'Trainner', '08457132654', '6235148596', 'ankit@gmail.com', 'argora , jharkhand\r\nargora , jharkhand\r\nargora , jharkhand', 'https://www.youtube.com/', '/assets/pdf1/1677320507.pdf', '/assets/pdf2/1677320507.pdf', '[{\"d_fb\":\"https:\\/\\/www.youtube.com\\/\",\"d_twitter\":\"https:\\/\\/www.youtube.com\\/\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"https:\\/\\/www.youtube.com\\/\",\"d_pinterest\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid1\":\"https:\\/\\/www.youtube.com\\/watch?v=rOBh9JQgqV8\",\"d_yt_vid2\":\"https:\\/\\/www.youtube.com\\/watch?v=rOBh9JQgqV8\"},{\"d_fb\":\"https:\\/\\/www.youtube.com\\/\",\"d_twitter\":\"https:\\/\\/www.youtube.com\\/\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"https:\\/\\/www.youtube.com\\/\",\"d_pinterest\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid1\":\"https:\\/\\/www.youtube.com\\/watch?v=rOBh9JQgqV8\",\"d_yt_vid2\":\"https:\\/\\/www.youtube.com\\/watch?v=rOBh9JQgqV8\"}]', '85623514@upi', '/assets/paytm_qr/16773205751.png', '85623514@upi', '/assets/googlepay_qr/1677320575.png', '85623514@upi', '/assets/phonepay_qr/1677320575.png', 'BOI', 'ankit', '362514748596', 'aadaas1563652', '[{\"prod_img\":\"\\/assets\\/pro_img\\/1677320601.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"sdasdas\"},{\"prod_img\":\"\\/assets\\/pro_img\\/16773206011.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"asdasdasd\"}]', '[\"\\/assets\\/gellary_img\\/1677320650.jpg\",\"\\/assets\\/gellary_img\\/16773206501.jpg\",\"\\/assets\\/gellary_img\\/16773206502.jpg\"]', '0000-00-00'),
(11, 2, 1, NULL, 'brightcode', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'sdfsdf', 'jhsdkjkjh', '08457132654', '6235148596', 'ankit@gmail.com', 'argora , jharkhand', 'https://www.youtube.com/', '/assets/pdf1/1677327777.pdf', '/assets/pdf2/1677327778.pdf', '[{\"d_fb\":\"https:\\/\\/www.youtube.com\\/\",\"d_twitter\":\"https:\\/\\/www.youtube.com\\/\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"https:\\/\\/www.youtube.com\\/\",\"d_pinterest\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid1\":\"https:\\/\\/www.youtube.com\\/watch?v=rOBh9JQgqV8\",\"d_yt_vid2\":\"https:\\/\\/www.youtube.com\\/watch?v=rOBh9JQgqV8\"}]', '85623514@upi', '/assets/paytm_qr/16773278191.png', '85623514@upi', '/assets/googlepay_qr/1677327819.png', '85623514@upi', '/assets/phonepay_qr/1677327819.png', 'BOI', 'ankit', '362514748596', 'aadaas1563652', '[{\"prod_img\":\"\\/assets\\/pro_img\\/1677327877.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"},{\"prod_img\":\"\\/assets\\/pro_img\\/16773278771.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"},{\"prod_img\":\"\\/assets\\/pro_img\\/1677327877.png\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"}]', '[\"\\/assets\\/gellary_img\\/1677327918.jpg\",\"\\/assets\\/gellary_img\\/16773279181.jpg\",\"\\/assets\\/gellary_img\\/16773279182.jpg\"]', '0000-00-00'),
(12, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(13, 2, 2, '/assets/c_logo/1677330834.png', 'brightcode', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'sdfsd', 'Office Staff', '08457132654', '6235148596', 'ankit@gmail.com', 'argora , jharkhand\r\nargora , jharkhand\r\nargora , jharkhand', 'https://www.youtube.com/', '/assets/pdf1/1677330834.pdf', '/assets/pdf2/1677330834.pdf', '[{\"d_fb\":\"https:\\/\\/www.youtube.com\\/\",\"d_twitter\":\"https:\\/\\/www.youtube.com\\/\",\"d_instagram\":\"https:\\/\\/www.youtube.com\\/\",\"d_linkedin\":\"https:\\/\\/www.youtube.com\\/\",\"d_youtube\":\"https:\\/\\/www.youtube.com\\/\",\"d_pinterest\":\"https:\\/\\/www.youtube.com\\/\",\"d_yt_vid1\":\"https:\\/\\/www.youtube.com\\/watch?v=rOBh9JQgqV8\",\"d_yt_vid2\":\"https:\\/\\/www.youtube.com\\/watch?v=rOBh9JQgqV8\"}]', '85623514@upi', '/assets/paytm_qr/16773308711.png', '85623514@upi', '/assets/googlepay_qr/1677330871.png', '85623514@upi', '/assets/phonepay_qr/1677330871.png', 'BOI', 'ankit', '362514748596', 'aadaas1563652', '[{\"prod_img\":\"\\/assets\\/pro_img\\/1677330885.jpg\",\"pro_name\":\"oil\",\"price\":\"1000\",\"discount\":\"100\",\"pro_desp\":\"sdas\"}]', '[\"\\/assets\\/gellary_img\\/1677330893.jpg\"]', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `op_sidebar`
--

CREATE TABLE `op_sidebar` (
  `id` int(11) NOT NULL,
  `activate_menu` varchar(255) NOT NULL,
  `activate_not` varchar(255) NOT NULL,
  `base_url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `op_sidebar`
--

INSERT INTO `op_sidebar` (`id`, `activate_menu`, `activate_not`, `base_url`, `icon`, `name`, `parent`, `position`, `role_id`, `status`) VALUES
(1, 'home', '{\"0\":\"\"}', 'home', '<i class=\"nav-icon fa fa-files\" aria-hidden=\"true\"></i>', 'Dashboard', 0, 1, '\"\"admin\"\"', 1),
(2, 'home', '{\"0\":\"\"}', 'home', '<i class=\"nav-icon fa fa-plus\" aria-hidden=\"true\"></i>', 'All Pages', 0, 2, '\"\"admin\"\"', 1),
(3, 'Adminpages/all_cards', '{\"0\":\"\"}', 'Adminpages/all_cards', '<i class=\"nav-icon fa fa-file\" aria-hidden=\"true\"></i>', 'All Cards', 2, 3, '\"admin\"', 1);

-- --------------------------------------------------------

--
-- Table structure for table `op_users`
--

CREATE TABLE `op_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vp` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `salt` varchar(20) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `op_users`
--

INSERT INTO `op_users` (`id`, `username`, `mobile`, `name`, `email`, `password`, `vp`, `role`, `salt`, `otp`, `token`, `status`, `created_on`, `updated_on`) VALUES
(1, 'admin', '7894656165', 'Admin', 'admin@gmail.com', '885c3750c88ed58008bbda294adf0a98', '12345', 'admin', 'MOPWgKdeZyU2kAL9', '177bd7fb7190e231f45d60a985bae5c5', '', 1, '2020-01-07 17:05:51', '2023-02-24 18:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `op_users_details`
--

CREATE TABLE `op_users_details` (
  `user_key` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `last_accesskey` varchar(255) DEFAULT NULL,
  `user_type` tinyint(1) DEFAULT NULL COMMENT '(1)user or (2)admin',
  `created_at` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `op_users_details`
--

INSERT INTO `op_users_details` (`user_key`, `email`, `password`, `last_accesskey`, `user_type`, `created_at`, `status`) VALUES
(1, 'shivamkrcv@gmail.com', '12345', 'l72r10HiGEMIR49OTerUf6VEXXQ8QINpXhlT', 2, '2023-07-04 13:19:24', 1),
(2, 'shivam@gmail.com', '12345', 'caBY6dDtoaFB9axPkK7tOkHsJ47odONN7oA6', 1, '2023-07-05 10:45:07', 1),
(3, 'ankit@gmail.com', '12345', 'F53XQG4qNyBWlXtSmHhW0dPLlhBKcBs4XL69', 1, '2023-07-05 10:46:54', 1),
(4, 'shivam66@gmail.com', '12345', 'F53XQG4qNyBWlXtSmHhW0dPLlhBKcBs4XL65', 1, '2023-07-05 10:46:54', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `op_accounts`
--
ALTER TABLE `op_accounts`
  ADD PRIMARY KEY (`txn_key`);

--
-- Indexes for table `op_card_details`
--
ALTER TABLE `op_card_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `op_sidebar`
--
ALTER TABLE `op_sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `op_users`
--
ALTER TABLE `op_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `op_users_details`
--
ALTER TABLE `op_users_details`
  ADD PRIMARY KEY (`user_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `op_accounts`
--
ALTER TABLE `op_accounts`
  MODIFY `txn_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `op_card_details`
--
ALTER TABLE `op_card_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `op_sidebar`
--
ALTER TABLE `op_sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `op_users`
--
ALTER TABLE `op_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `op_users_details`
--
ALTER TABLE `op_users_details`
  MODIFY `user_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
