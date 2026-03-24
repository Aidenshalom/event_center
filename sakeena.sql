-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 26, 2023 at 12:26 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sakeena`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `additionalinformation` varchar(500) NOT NULL,
  `dateadded` varchar(250) NOT NULL,
  `active` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `date`, `additionalinformation`, `dateadded`, `active`) VALUES
(1, 'aiden aiden', 'lilaiden247@gmail.com', '09088888889', '2023/12/16', 'service', '2023-12-09 23:37:32', 0),
(2, 'muhammed ogunajo', 'olamilekanmuhammed68@gmail.com', '08020781427', '2023/12/17', '', '2023-12-09 23:47:21', 0),
(3, 'john doe', 'johndoe@gmail.com', '08163247890', '2023/12/18', 'None', '2023-12-10 11:09:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `answer` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `date`) VALUES
(1, 'HOW DO I RESERVE A SPACE FOR AN EVENT', 'Follow these steps, send an email or call to confirm availability of your preferred date, ask for a tour if required, fill our space usage form and invoice is raised. Once the minimum payment is made, your date is booked', '2023-12-10 15:48:14'),
(2, 'HOW CAN I CHECK TO SEE IF A DATE IS AVAILABLE', 'Give us a call at 08124937309 or fill the online booking form. You may also send an email to tashiita3009@gmail.com', '2023-12-07 13:37:39'),
(3, 'WHEN CAN WE TOUR THE FACILITY', 'We are happy to give you to a physical tour of our facility at your earliest convenience. You may also request for a virtual tour. Kindly schedule an appointment from Monday till Friday between 10am-6pm for a visit. However, If we know what works for you, we are flexible', '2023-12-09 00:55:56'),
(9, 'WHERE CAN I FIND PRICING INFORMATION', 'Give us a call at 08124937309 or fill the online booking form. You may also send an email to tashiita3009@gmail.com', '2023-12-10 15:49:08'),
(10, 'DO I NEED TO HAVE ALL MY EVENT DETAILS DETERMINED AT THE TIME OF BOOKING? WHAT WILL HAPPEN AFTER I RESERVE THE SPACE', 'We do need to know basic information like your event date, type of event and estimated guests, and approximate start and end time to enable us to generate a quote. The Center Manager will be available by phone or email to answer any questions throughout your planning process', '2023-12-10 15:49:45'),
(11, 'I DON’T WANT TO SERVE ANY ALCOHOL AT MY EVENT, IS THAT A POSSIBILITY', 'Of course! We work with our customer’s preference', '2023-12-10 15:50:32'),
(12, 'WHAT IS YOUR CANCELLATION POLICY', 'Please see a copy of our cancellation policy to learn more', '2023-12-10 15:51:04'),
(13, 'HOW MANY GUESTS CAN THE SAKEENA CLASSY HALLS ACCOMMODATE', 'Depending on your event, we can seat up to 450 guests in a seperate banquet setting and 900 for a total seating arrangement for both halls. We can conveniently host events from small to a large number of guests remember we have an open floor plan', '2023-12-10 15:51:55'),
(14, 'DO YOU HAVE PARKING', 'YES! We have a spacious parking lot behind our venue that serves our guest adequately', '2023-12-10 15:52:35'),
(15, 'ARE THERE HOTELS NEARBY', 'Yes, there are several hotel options nearby. Please contact us for more information on your needs. We will link you to hotels where we have a relationship directly for specific details and rates', '2023-12-10 15:53:07'),
(16, 'DO YOU HAVE ADEQUATE RESTROOM FACILITIES', 'Yes, we have spacious and highly comfortable modern restrooms for both male and female attached to the Event space', '2023-12-10 15:53:31'),
(17, 'WHO IS MY MAIN CONTACT AND HOW MUCH WILL BE THEY BE AVAILABLE DURING MY PLANNING', 'Our Center Manager is there every step of the way! You are welcome to call or email us throughout your planning. We will also hold the Vendor Planning Meeting to coordinate details with you and your vendors. Our Center Manager is on-site the day of the event from beginning to the end', '2023-12-10 15:53:58'),
(18, 'CAN WE CHOOSE OUR OWN CATERER', 'We have an open vendor policy and will also be happy to recommend any of our preferred caterers that can accommodate a wide range of taste preferences and budgets', '2023-12-10 15:54:21'),
(19, 'ARE THERE ANY ADDITIONAL CATERING RELATED FEES THAT I SHOULD BE AWARE OF', 'Not directly, but all vendors including caterers are required to pay a refundable cautionary fee. This will be discussed during the Vendors Planning meeting', '2023-12-10 15:54:49'),
(20, 'DO YOU HAVE AN OUTDOOR SPACE', 'If an additional space for an event is required, we may consider the parking lot within the venue for this purpose. Kindly discuss such needs with our Center Manager to know what is possible', '2023-12-10 15:55:21'),
(21, 'WHAT SAFETY PRECAUTIONS DO YOU HAVE IN PLACE AT THE VENUE', 'We are safety conscious and are compliant with the Lagos state fire service Certification. We have multiple exits, fire extinguishers in the relevant places, and an assembly point. In addition to a standard first aid box we have also up our health and safety standards in view of the Covid-19 pandemic for our overall safety and that of our clients and their guests', '2023-12-10 15:55:48'),
(22, 'WHAT ARE THE SEVERAL WAYS WE CAN REACH YOU AT SAKEENA CLASSY HALLS', 'We are always at work, Check out our contact page, Call us, Write to us, Follow us, Visit us', '2023-12-10 15:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` varchar(250) NOT NULL,
  `active` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `date`, `active`) VALUES
(4, 'muhammed ogunajo', 'olamilekanmuhammed68@gmail.com', 'good', 'holla holla', '2023-12-21 15:14:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `date`) VALUES
(5, 'images/img1.jpg', '2023-12-06'),
(6, 'images/img2.jpg', '2023-12-06'),
(17, 'images/img3.jpg', '2023-12-10'),
(18, 'images/img4.jpg', '2023-12-10'),
(19, 'images/slider1.jpg', '2023-12-10'),
(20, 'images/slider5.jpg', '2023-12-10'),
(21, 'images/slider2.jpg', '2023-12-10'),
(22, 'images/slider3.jpg', '2023-12-10'),
(26, 'images/slider4.jpg', '2023-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `date`) VALUES
(4, 'olamilekan13052002@gmail.com', '2023-12-12 11:01:30'),
(3, 'lilaiden247@gmail.com', '2023-12-12 10:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstline` varchar(250) NOT NULL,
  `secondline` varchar(250) NOT NULL,
  `thirdline` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `firstline`, `secondline`, `thirdline`, `date`) VALUES
(1, 'Welcome to Sakeena classy halls', 'Multi-Purpose Event Center', 'For Events And Celebrations Of Any Scale', '2023-12-07 22:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'sakeenaclassyhall@gmail.com', 'Goodnews2024'),
(6, 'lilaiden247@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
