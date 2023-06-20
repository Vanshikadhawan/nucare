-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 06:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_admin`
--

CREATE TABLE `tab_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) DEFAULT NULL,
  `login_id` varchar(100) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `admin_image` varchar(200) DEFAULT NULL,
  `active` char(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_admin`
--

INSERT INTO `tab_admin` (`admin_id`, `admin_name`, `login_id`, `password`, `admin_image`, `active`, `creation_date`) VALUES
(1, 'VANSHIKA DHAWAN', 'vanshikadhawan99211@gmail.com', '12345678', 'images/Snapchat-778857614.jpg', '1', '2021-07-05 05:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `tab_appointment`
--

CREATE TABLE `tab_appointment` (
  `appointment_id` int(20) NOT NULL,
  `expert_id` int(20) DEFAULT NULL,
  `appointment` varchar(100) DEFAULT NULL,
  `appointment_day` datetime DEFAULT NULL,
  `available` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tab_cart`
--

CREATE TABLE `tab_cart` (
  `id` int(100) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `status` varchar(15) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_cart`
--

INSERT INTO `tab_cart` (`id`, `product_id`, `customer_id`, `quantity`, `status`, `creation_date`) VALUES
(1, '6', 'vanshikadhawan99211@gmail.com', '1', 'ordered', '2021-07-09 00:00:00'),
(2, '6', 'vanshikadhawan99211@gmail.com', '1', 'ordered', '2021-07-09 00:00:00'),
(3, '4', 'vanshikadhawan99211@gmail.com', '1', 'pending', '2021-07-09 00:00:00'),
(7, '166', '', '1', 'pending', '2021-07-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tab_category`
--

CREATE TABLE `tab_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `parent_category` int(11) DEFAULT NULL,
  `sub_category` int(11) DEFAULT NULL,
  `category_image` varchar(300) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_category`
--

INSERT INTO `tab_category` (`category_id`, `category_name`, `parent_category`, `sub_category`, `category_image`, `availability`, `creation_date`) VALUES
(1, 'Covid Essentials', NULL, NULL, 'images/covid.jpg', 1, '2021-07-01 05:15:11'),
(2, 'Personal & Home Essentials', 1, NULL, 'images/personal covid essentials.jpg', 1, '2021-07-01 05:18:48'),
(3, 'Masks , Gloves & Protective Equipment', 1, NULL, 'images/immunity boosters.png', 1, '2021-07-01 05:20:05'),
(4, 'Diabetes', NULL, NULL, 'images/diabetes.jpg', 1, '2021-07-01 05:20:28'),
(5, 'Diabetes care-Ayurveda', 4, NULL, 'images/diabetes ayurveda.jpg', 1, '2021-07-01 05:21:21'),
(6, 'Glucometers', 4, NULL, 'images/glucometers.jpg', 1, '2021-07-01 05:21:51'),
(7, 'Lancets & Test strips', 4, NULL, 'images/lancets.jpg', 1, '2021-07-01 05:22:38'),
(8, 'Classical Medicines', 4, NULL, 'images/diabetes medicines.jpg', 1, '2021-07-01 05:23:19'),
(9, 'Fitness', NULL, NULL, 'images/fitness.jpg', 1, '2021-07-01 05:25:04'),
(10, 'Vitamins & SUPPLEMENTS', 9, NULL, 'images/vitamins.jpg', 1, '2021-07-01 05:25:27'),
(11, 'Health Food and Drinks', 9, NULL, 'images/health food and drinks.jpg', 1, '2021-07-01 05:26:28'),
(12, 'Ayurvedic Supplements', 9, NULL, 'images/ayurvedic supp.jpg', 1, '2021-07-01 05:28:30'),
(13, 'Sports Supplements', 9, NULL, 'images/support supplement.jpg', 1, '2021-07-01 05:29:13'),
(14, 'Personal Care', NULL, NULL, 'images/personal care.jpg', 1, '2021-07-01 05:30:01'),
(15, 'Body Care', 14, NULL, 'images/body care.jpg', 1, '2021-07-01 05:31:20'),
(16, 'Eye Care', 14, NULL, 'images/eye care.jpg', 1, '2021-07-01 05:31:46'),
(17, 'Home Care', 14, NULL, 'images/home care.jpg', 1, '2021-07-01 05:32:20'),
(18, 'Face Care', 14, NULL, 'images/face care.jpg', 1, '2021-07-01 05:32:44'),
(19, 'Hair Care', 14, NULL, 'images/hair care.jpg', 1, '2021-07-01 05:33:11'),
(20, 'Skin Care', 14, NULL, 'images/skin care.jpg', 1, '2021-07-01 05:33:36'),
(21, 'Men Care', 14, NULL, 'images/mens care.jpg', 1, '2021-07-01 05:34:20'),
(22, 'Make Up', 14, NULL, 'images/make up.jpg', 1, '2021-07-01 05:34:49'),
(23, 'Elderly Care', 14, NULL, 'images/elderly care.jpg', 1, '2021-07-01 05:35:17'),
(24, 'Pet Care', 14, NULL, 'images/pet care.jpg', 1, '2021-07-01 05:35:48'),
(25, 'Mom & Baby', NULL, NULL, 'images/mom and baby care.jpg', 1, '2021-07-02 04:12:07'),
(26, 'Baby care', 25, NULL, 'images/baby care.jpg', 1, '2021-07-02 04:12:44'),
(27, 'Feminine Hygine', 25, NULL, 'images/feminine care.jpg', 1, '2021-07-02 04:13:32'),
(28, 'Maternity Care', 25, NULL, 'images/moms_maternity.jpg', 1, '2021-07-02 04:14:07'),
(29, 'Surgicals', NULL, NULL, 'images/surgical products.jpg', 1, '2021-07-02 04:14:40'),
(30, 'Dressing', 29, NULL, 'images/dressing.jpg', 1, '2021-07-02 04:15:08'),
(31, 'Respiratory Suppliments', 29, NULL, 'images/respiratory.jpg', 1, '2021-07-02 04:15:49'),
(32, 'Surgical Consumables', 29, NULL, 'images/consumable.jpg', 1, '2021-07-02 04:16:21'),
(33, 'Surgical Instrument', 29, NULL, 'images/surgicals-instruments-500x500.jpg', 1, '2021-07-02 04:17:13'),
(34, 'Ayurveda Products', NULL, NULL, 'images/ayurveda products.jpg', 1, '2021-07-02 04:25:38'),
(35, ' Ayurveda Top Brands', 34, NULL, 'images/ayur top brands.jpg', 1, '2021-07-02 04:26:09'),
(37, 'Ayurveda Medicines', 34, NULL, 'images/ayur med.jpg', 1, '2021-07-02 04:26:48'),
(38, 'Homeopathy', NULL, NULL, 'images/homeo category.jpg', 1, '2021-07-02 04:27:28'),
(39, 'Homeopathy Top Brands', 38, NULL, 'images/homeo top brands.jpg', 1, '2021-07-02 04:29:33'),
(40, 'Homeopathy Medicines', 38, NULL, 'images/homeo med.jpg', 1, '2021-07-02 04:30:02'),
(41, 'Homeopathy Categories', 38, NULL, 'images/homeo med.jpg', 1, '2021-07-02 04:30:44'),
(42, 'Immunity Boosters', 1, NULL, 'images/immunity boosters.png', 1, '2021-07-02 04:48:24'),
(43, 'Devices', NULL, NULL, 'images/devices.jpg', 1, '2021-07-02 03:38:01'),
(44, 'Orthopedics', 43, NULL, 'images/ortho.jpg', 1, '2021-07-02 03:38:40'),
(45, 'Breathe Easy', 43, NULL, 'images/breathing.jpg', 1, '2021-07-02 03:39:09'),
(46, 'Sugar Substitutes', 4, NULL, 'images/sugar_free_natura_pellet_500s_0_3.jpg', 1, '2021-07-02 06:18:14'),
(47, 'Measurement', 43, NULL, 'measurements.jpg', 1, '2021-07-05 06:00:29'),
(49, 'TREATMENT', NULL, NULL, 'treatment.jpg', 1, '2021-07-05 06:39:25'),
(50, 'Diabetes Care', 49, NULL, 'diabetic care.jpg', 1, '2021-07-05 06:40:47'),
(51, 'First Aid', 49, NULL, 'first aid.jpg', 1, '2021-07-05 06:42:20'),
(52, 'Pain Relief', 49, NULL, 'pain relief.jpg', 1, '2021-07-05 06:43:25'),
(53, 'Skin Treatment', 49, NULL, 'skin treatment.jpg', 1, '2021-07-05 06:44:37'),
(54, 'Usual Symptoms', 49, NULL, 'usual symp.jpg', 1, '2021-07-05 06:45:38'),
(55, 'General discomfort', 49, NULL, 'general discomfort.jpg', 1, '2021-07-05 06:46:58'),
(56, 'Cough and Cold', 49, NULL, 'cough &cold.jpg', 1, '2021-07-05 06:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `tab_company`
--

CREATE TABLE `tab_company` (
  `company_name` varchar(200) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `company_since` date DEFAULT NULL,
  `company_logo` varchar(200) DEFAULT NULL,
  `about_company` varchar(300) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_company`
--

INSERT INTO `tab_company` (`company_name`, `company_id`, `company_since`, `company_logo`, `about_company`, `availability`, `creation_date`) VALUES
('Cipla healthcare limited', 1, '1984-07-20', 'images/Cipla.jpg', 'Cipla sells active pharmaceutical ingredients to other manufacturers as well pharmaceutical and personal care products', 1, '2021-06-26 07:58:40'),
('Sun Pharmaceutical Industry.ltd', 2, '1983-05-09', 'images/sun...jpg', 'Sun Pharmaceutical Industry  is an India Multinational pharmaceutical formulation and active pharmaceutical ingredient primarly in India and United States It is largest pharma company in India\r\nand very renounced it gain popularity   famous  as 4th largest pharma company in world', 1, '2021-07-02 10:27:01'),
('Dr Reddy s laboratories', 3, '1984-06-09', 'images/dr reddy.jpg', 'DR reddy s laboratories is an INDIAN multinational Pharmaceutical company located in hyderabad , Telangana. The company was founded by KALLAM ANJI REDDY  manufactured and markets a wide range of pharmaceutical in India and oversea. The company has over 190 medication 60 active pharmaceutical ingredi', 1, '2021-07-02 10:42:02'),
('Divi Laboratories Ltd', 4, '1990-10-12', 'images/divis.jpg', 'Divi s laboratories ltd is a Indian multinational company produce active pharmaceutical ingredients.\r\nThis company manufactures  and customer synthesizes generic API intermediate and nutraceutical ingredients. DIVI S is INDIA second most valuable pharmaceutical company.', 1, '2021-07-02 10:52:16'),
('Alkem Laboratories Ltd', 5, '1973-09-08', 'images/alkem.jpg', 'Alkem laboratories ltd is a India multinational company in Mumbai, Maharashtra ,India that manufactures and sells PHARMACEUTICAL GENERICS in India and globally.', 1, '2021-07-02 10:57:37'),
('Torrent Pharmaceutical Ltd', 6, '1959-09-09', 'images/torrent.jpg', 'Torrent ltd. is a  flagship company of Torrent groups . Based in the India  city of Ahmedabad. It was  promoted by U N METHA intiallty  as Trinity Laboratories Ltd,and was later  renamed Torrent pbarmaceutical Ltd.', 1, '2021-07-02 11:06:00'),
('Glenmark Pharmaceutical Ltd', 7, '1977-07-04', 'images/glenmark.jpg', 'Glenmart Parmaceutical Ltd is a India Pharmaceutical company that founded in 1977 by GRACIAS SALDANHA as a generic drug and active pharmaceutical ingredients manufacturer. Named the company after two son. the company went public in India in 1999  and known for grandureity fifth biggest pharmaceutica', 1, '2021-07-02 11:17:16'),
('Dabur India Ltd', 8, '1884-06-08', 'images/dabour.jpg', 'Dabur India Ltd is an India multination consumer goods  comany founded by S.K BURMAN. It manufacture Ayurvedic medicines and natural consumer products It is one of the largest fast moving consumer goods company in India.', 1, '2021-07-02 11:23:14'),
('Patanjali Ayurved', 9, '2006-06-09', 'images/patanjalli.jpg', 'Patanjali ayurved is an India  multinational consumer packaged goods company based in Haridwaar,India. It iwas founded by Baba Ramdev and Acharya balkrishna It produces ayurvedic herbal medicines, food products as well as cosmetics also.', 1, '2021-07-02 11:29:44'),
('Zandu Reality Ltd', 10, '2009-10-03', 'images/zandu.jpg', 'Zandu is a international pharmaceutical company based in Mumbai,India . Company core business of manufacturing and dealing in ayurvedic and medicinal preparation', 1, '2021-07-02 11:34:28');

-- --------------------------------------------------------

--
-- Table structure for table `tab_consultation`
--

CREATE TABLE `tab_consultation` (
  `id` int(20) NOT NULL,
  `patient_id` varchar(20) DEFAULT NULL,
  `expert_id` varchar(20) DEFAULT NULL,
  `health_issue` varchar(500) DEFAULT NULL,
  `report_upload_path` varchar(200) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` time DEFAULT NULL,
  `approval` tinyint(1) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tab_customer`
--

CREATE TABLE `tab_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `login_id` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile_number` varchar(10) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_customer`
--

INSERT INTO `tab_customer` (`customer_id`, `customer_name`, `login_id`, `password`, `mobile_number`, `creation_date`, `active`) VALUES
(1, 'VANSHIKA DHAWAN', 'vanshikadhawan99211@gmail.com', 'V09saGVWRmhETzY4VkRYMmZrRU93QT09', '9779836837', '2021-07-05 05:52:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tab_customer_profile`
--

CREATE TABLE `tab_customer_profile` (
  `profile_id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `login_id` varchar(100) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address_line_1` varchar(200) DEFAULT NULL,
  `address_line_2` varchar(200) DEFAULT NULL,
  `landmark` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `mobile_number` varchar(10) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_customer_profile`
--

INSERT INTO `tab_customer_profile` (`profile_id`, `customer_name`, `login_id`, `password`, `gender`, `dob`, `address_line_1`, `address_line_2`, `landmark`, `city`, `state`, `country`, `pincode`, `mobile_number`, `image`, `creation_date`) VALUES
(1, 'Sonia Dhawan', 'sonia11@gmail.com', 'SONIA', 0, '1071-09-11', '23 GOPAL NAGAR', 'STREET NO. 2', 'MAJITHA ROAD', 'AMRITSAR', 'PUNJAB', 'INDIA', 143001, '9878624032', 'images/2G2A5951.JPG', '2021-06-27 07:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `tab_expert_advisor`
--

CREATE TABLE `tab_expert_advisor` (
  `expert_id` int(11) NOT NULL,
  `expert_name` varchar(50) DEFAULT NULL,
  `login_id` varchar(200) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_expert_advisor`
--

INSERT INTO `tab_expert_advisor` (`expert_id`, `expert_name`, `login_id`, `password`, `active`, `creation_date`) VALUES
(2, 'Sonia Dhawan', 'dhawansonia930@gmail.com', 'ajN6T0EwWXJiZkhReEhGRVA3ME5yQT09', NULL, '2021-07-07 02:49:16'),
(3, 'Bharti ', 'bhartichahal3106@gmail.com', 'NHp4VlJqVDVDdjVNcFVGeTlrd24yUT09', NULL, '2021-07-07 02:53:27'),
(4, 'Vinamerdeep', 'vinamerarora268@gmail.com', 'MkMyeExoRWlvMUJzMTBwcitkd0t3Zz09', NULL, '2021-07-07 03:01:55'),
(5, 'Twinkle Sharma', 'twinklesharma969484@gmail.com', 'dzhmMEt3YSsrMkF5TXZrbTVxRVlQdz09', NULL, '2021-07-07 03:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `tab_expert_profile`
--

CREATE TABLE `tab_expert_profile` (
  `profile_id` int(11) NOT NULL,
  `expert_name` varchar(200) DEFAULT NULL,
  `login_id` varchar(200) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `qualification` varchar(300) DEFAULT NULL,
  `specialization` varchar(200) DEFAULT NULL,
  `expert_field` varchar(200) DEFAULT NULL,
  `experience` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_expert_profile`
--

INSERT INTO `tab_expert_profile` (`profile_id`, `expert_name`, `login_id`, `gender`, `dob`, `qualification`, `specialization`, `expert_field`, `experience`, `image`, `creation_date`) VALUES
(1, 'Twinkle Sharma', 'twinklesharma969484@gmail.com', 0, '0981-10-05', 'MD Dermatology,MBBS', 'Dermatologist', 'Alopathy', '10 years', 'images/dr komal as twinkle.jpg', '2021-07-07 03:28:08'),
(2, 'Vinamerdeep', 'vinamerarora268@gmail.com', 0, '1980-06-26', 'MD Anaesthesiology', 'Pain Management Specialist', 'ALLOPATHIC', '14 years', 'images/dr jasleen as vinamer.jpg', '2021-07-07 04:25:24'),
(3, 'Bharti ', 'bhartichahal3106@gmail.com', 0, '1983-04-02', 'BHMS', 'Homeopathy doctor', 'Homeopathy', '9 years', 'images/expert1.jpg', '2021-07-07 05:02:23'),
(4, 'Sonia Dhawan', 'dhawansonia930@gmail.com', 0, '1990-10-09', 'Bachlor of Ayurveda', 'Doctor of Ayurveda', 'Ayurvedic', '5 years', 'images/expert2.jpg', '2021-07-07 05:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `tab_invoice`
--

CREATE TABLE `tab_invoice` (
  `invoice_number` varchar(300) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `order_id` int(15) DEFAULT NULL,
  `customer_id` int(15) DEFAULT NULL,
  `payment_id` int(15) DEFAULT NULL,
  `shipment_id` int(15) DEFAULT NULL,
  `invoice_amount` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tab_offer`
--

CREATE TABLE `tab_offer` (
  `offer_id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_offer`
--

INSERT INTO `tab_offer` (`offer_id`, `title`, `description`, `discount`, `start_date`, `end_date`, `image`, `active`, `creation_date`) VALUES
(4, 'Offer on monitoring devices', 'Nucare is providing a great offer on monitoring devices be healthy be updated. Health should be concern. Limited period of time this offer is available .', 25, '2021-07-06', '2021-07-18', 'images/monitoring.jpg', 1, '2021-07-02 10:48:54'),
(5, 'Nutrients and Supplement', 'Everyone want healthy muscular body .Here is special offer on whey protein and other supplement for you. Limited stocks are left till 15 july 2021.', 20, '2021-07-05', '2021-07-15', 'images/supplements.jpg', 1, '2021-07-02 11:07:30'),
(7, 'Offer on prescription medicines', 'from 15 july to 25 august 2021 the off on prescription medicines is going on  which ever medicines  buy form NUCARE  get special offer on products.', 25, '2021-07-15', '2021-08-25', 'images/prescription med.jpg', 1, '2021-07-02 11:58:24'),
(8, 'Summer sale', 'Special offer summer sale  on medicines min order rs 1200 post discount order value of  rs 1200 paytm cash(rs 75) unit  staring from 14 july 2021 ', 20, '2021-07-14', '2021-07-31', 'images/summer sale.png', 1, '2021-07-02 12:23:28'),
(10, 'Offer on herbal product', 'From 16 july 2021 to 28 july 2021  offer on herbal medicines  which has no side effects  flat offer 60% OFF start healthy life with  herbal medicines', 60, '2021-07-16', '2021-07-28', 'images/herbal pro.jpg', 1, '2021-07-02 12:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `tab_order`
--

CREATE TABLE `tab_order` (
  `id` int(100) NOT NULL,
  `customer_id` varchar(500) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `order_amount` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_order`
--

INSERT INTO `tab_order` (`id`, `customer_id`, `order_date`, `order_amount`, `status`, `creation_date`) VALUES
(1, 'vanshikadhawan99211@gmail.com', '2021-07-09', '295', 'In process', '2021-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `tab_order_item`
--

CREATE TABLE `tab_order_item` (
  `id` int(100) NOT NULL,
  `order_id` varchar(500) DEFAULT NULL,
  `product_id` varchar(500) DEFAULT NULL,
  `offer_id` varchar(500) DEFAULT NULL,
  `quantity` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_order_item`
--

INSERT INTO `tab_order_item` (`id`, `order_id`, `product_id`, `offer_id`, `quantity`, `status`, `creation_date`) VALUES
(1, '1', '6', NULL, '1', 'In process', '2021-07-09'),
(2, '1', '6', NULL, '1', 'In process', '2021-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `tab_payment`
--

CREATE TABLE `tab_payment` (
  `id` int(255) NOT NULL,
  `order_id` varchar(500) NOT NULL,
  `customer_id` varchar(500) NOT NULL,
  `payment_mode` varchar(500) NOT NULL,
  `amount` varchar(500) NOT NULL,
  `creation_date` date NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tab_pharmacist`
--

CREATE TABLE `tab_pharmacist` (
  `pharmacist_id` int(11) NOT NULL,
  `pharmacist_name` varchar(50) DEFAULT NULL,
  `login_id` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_pharmacist`
--

INSERT INTO `tab_pharmacist` (`pharmacist_id`, `pharmacist_name`, `login_id`, `password`, `active`, `creation_date`) VALUES
(1, 'VANSHIKA DHAWAN', 'vanshikadhawan99211@gmail.com', 'TGlRc3kvRHNqNEJaMWJLWjBkOUJFUT09', NULL, '2021-07-05 05:55:02'),
(2, 'Ashima', 'aashima_dwideh@yahoo.com', 'MUwrYmk1a0IzVGFRUU82bDZMdFBvUT09', NULL, '2021-07-08 07:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `tab_pharmacist_profile`
--

CREATE TABLE `tab_pharmacist_profile` (
  `profile_id` int(11) NOT NULL,
  `pharmacist_name` varchar(100) DEFAULT NULL,
  `login_id` varchar(200) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `qualification` varchar(300) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_pharmacist_profile`
--

INSERT INTO `tab_pharmacist_profile` (`profile_id`, `pharmacist_name`, `login_id`, `gender`, `dob`, `qualification`, `image`, `creation_date`) VALUES
(1, 'VANSHIKA DHAWAN', 'vanshikadhawan99211@gmail.com', 0, '1992-07-10', 'bachelor in pharmacy', 'images/pharmacist4.jpg', '2021-07-07 04:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `tab_prescription`
--

CREATE TABLE `tab_prescription` (
  `prescription_id` int(20) NOT NULL,
  `expert_id` int(20) DEFAULT NULL,
  `customer_id` int(20) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `dosage` varchar(30) DEFAULT NULL,
  `staus` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tab_product`
--

CREATE TABLE `tab_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_company` varchar(200) DEFAULT NULL,
  `parent_category` int(11) DEFAULT NULL,
  `sub_category` int(11) DEFAULT NULL,
  `product_description` varchar(2000) DEFAULT NULL,
  `manufactured_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `product_price` float(10,2) DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `user_type` varchar(200) DEFAULT NULL,
  `product_image` varchar(200) DEFAULT NULL,
  `available` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `product_size` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_product`
--

INSERT INTO `tab_product` (`product_id`, `product_name`, `product_company`, `parent_category`, `sub_category`, `product_description`, `manufactured_date`, `expiry_date`, `product_price`, `user_id`, `user_type`, `product_image`, `available`, `creation_date`, `product_size`) VALUES
(4, 'Tri-Active Instant Hand Sanatizer 500 ml', 'Piramal Healthcare Ltd.', 1, 2, 'Tri Active Sanitizer is disinfectant hand sanitizer gel  that kills 99.9% of illness -causing germs instantly leaving hand clean and bacteria-free.it provide triple protection against bacteria and germs.a', '2021-05-11', '2022-05-11', 237.50, NULL, NULL, 'images/tri_activ_instant_hand_sanitizer_500_ml_0_1.jpg', NULL, '2021-07-02 05:01:02', '500 ml'),
(6, 'Cura Home Sanatizer 500ml', 'Cura Pharmaceuticals', 1, 2, 'Cura Hand sanitizer is an alchol based handsanitizer which  is useful against disease-causing bacteria,fungus and germs. it cooling sanitizer gel which is effectively kill 99.9% of the illness causinggerms and bacteria on the skin and protects from viruses.', '2021-04-04', '2022-04-04', 250.00, NULL, NULL, 'images/cura_home_sanitizer_500_ml_0_0.jpg', NULL, '2021-07-02 05:14:05', '500 ml'),
(7, 'Dettol Instant Hand Sanatizer', 'Reckitt Benckiser India Ltd.', 1, 2, 'Dettol Hand sanitizer kills 99.9%germs instantly without water.thisleaves your hand fresh. Use anytime,anywhere.It protects you from 100 illness causing germs without the use of r', '2019-02-11', '2022-02-11', 25.00, NULL, NULL, 'images/dettol_hand_sanitizer_original_50_ml_0.jpg', NULL, '2021-07-02 05:19:33', '50 ml'),
(8, 'Dettol Antiseptic Liquid', 'Reckitt Benckiser India Ltd.', 1, 2, 'provides protection against germs which can cause infection and illness and protect against infection from cuts,scraches,and insect bites.explore ', '2020-12-20', '2023-12-20', 176.91, NULL, NULL, 'images/dettol_antiseptic_liquid_550_ml_0.jpg', NULL, '2021-07-02 05:25:47', '550 ml'),
(9, 'Fyne Hand Sanatizer', 'Cavinkare Pvt Ltd.', 1, 2, 'Introducing fyne handsanitizer which is based on W.H.O formulation with 80% v/v alcohal. it kill 99.99% disease causing germs. this no-rinse quick dry formula provides effective protection against bacteria and viruses.', '2020-07-10', '2022-07-10', 2125.00, NULL, NULL, 'images/fyne_hand_sanitizer_5_litre_0_0.jpg', NULL, '2021-07-02 05:28:02', '5 L'),
(10, 'Dettol Disinfectant Lime Fresh 200ml', 'Reckitt Benckiser India Ltd.', 1, 2, 'this product is used as a modern way to trea any kind of wounds.it disinfectant liquid that comes with refreshing fragrance disinfectant Multi-use hygiene liquid served for various  purposes at home', '2021-07-02', '2023-07-02', 98.00, NULL, NULL, 'images/dettol_disinfectant_lime_fresh_200_ml_0_1.jpg', NULL, '2021-07-02 02:10:03', '200 ml'),
(11, 'Savlon Herbal Sensitive Handwash 750ml', 'ITC India Ltd', 1, 2, 'This handwash protects from germs. Maintaining good hand hygiene is important for staying healthy. keep your family safe hand with Savlon advanced range of handwashes.', '2021-01-06', '2022-01-06', 169.00, NULL, NULL, 'images/savlon_herbal_sensitive_hand_wash_750_ml_0_1.jpg', NULL, '2021-07-02 02:14:48', '750 ml'),
(12, 'Ciphands Expert Antiseptic Hand Sanatizer gel 150 ml', 'Cipla Ltd', 1, 2, 'Ciphahand Antiseptic instant liquid hand sanitizer your hand . protect your hands 24x7 infection causing germs with the best liquid hand sanitizer.', '2019-10-05', '2021-05-05', 750.00, NULL, NULL, 'images/ciphands_expert_antiseptic_hand_sanitizer_gel_150_ml_0_0.jpg', NULL, '2021-07-02 02:17:38', '150 ml'),
(14, 'Medisales PPE kit ', 'Medisales', 1, 3, 'this is a non woven ppe kit for full body protection is made using polyester which makes it durable and ensures safety from external bodies or particles. the complete kit includes a bodysuit , face shield,face mask, shoe cover,hood cap ,hand gloves and disposalable bag to discard the kit easily when you are donr using it.', '2020-11-11', '2022-11-11', 974.35, NULL, NULL, 'images/medisales_ppe_kit_0_0.jpg', NULL, '2021-07-02 02:32:14', 'large'),
(15, 'Patanjali Honey', 'Patanjali Ayurveda Ltd', 1, 42, 'Patanjali honey has fructose,minerals,vitamins and natural nutritious element. It is a good quality anti-septic and blood refiner its regular use treats cough ,cold and fever it also help in early healing of injuries.', '2020-10-11', '2022-10-11', 315.00, NULL, NULL, 'images/patanjali_honey_1_kg_0.jpg', NULL, '2021-07-02 03:19:01', '1 kg'),
(16, 'Natures Velvet Vitamin C 100 mg Tablets 60 tablets', 'Natures Velvet Lifecare', 1, 42, 'Nature\'s velvet vitamin c is a water soluble vitamins and a powerful antioxidants. Since the body does not have the capacity to store vitamin c,It supports  immunity health several cells of the immune systemneed vitamin c to perform their tasks,especially phagocytes and t-cell.', '2020-09-05', '2023-09-05', 900.00, NULL, NULL, 'images/natures_velvet_vitamin_c_1000_mg_tablets_60_s_0.jpg', NULL, '2021-07-02 03:20:21', '100 mg'),
(17, 'Patanjali Special Chyawanprash 500 gm', 'Patanjali Ayurveda Ltd', 1, 42, 'patanjali chwanprash stimulates appetite and is good remedy for anaemia. antioxidants rich tonic keeps the heart and body healthy and young.It is highly beneficial against degenerativedisease like diabetes, arthritis,dementia,etc. it aids in the digestion of food and absorption of nutrients.', '2021-01-01', '2023-01-01', 132.30, NULL, NULL, 'images/patanjali_special_chyawanprash_500_gm_0.jpg', NULL, '2021-07-02 03:21:58', '500 gm'),
(18, 'Ashwagandha Ghan Vati 20 Capsules', 'Patanjali Ayurveda Ltd', 1, 42, 'this tablet beneficial for fatique,restiveness and general weakness. It also treats muscles deficiency, gastric problem, arthritis and others. Help to increase energy of body cells naturally.ashwag-andhs is a natural herbal tonic for increasing memory and brain power.', '2021-02-17', '2024-02-28', 90.00, NULL, NULL, 'images/ashwagandha.jpg', NULL, '2021-07-02 03:24:41', '25gm'),
(19, 'Covid-19 Immunity Booster Pack (Vitamin C +Vitamin D strips)', 'Bonjar Lifesciences Pvt Ltd.', 1, 42, 'ccovid-19 immunity booster pack keeps your immune system constantly active as having a healthy immune system constantly active an having  a healthy immune system is a top priorty these day vitamin c  is an essential nutrient that cannot be stored or many beneficial role including the normal function of the immune system, normal formation of collagen for normal skin collages for normal function  of the immune system.system,', '2020-03-20', '2022-04-20', 1058.00, NULL, NULL, 'images/covid_19_immunity_booster_pack_vitamin_c_strips_vitamin_d_strips_120s_1_0.jpg', NULL, '2021-07-02 03:27:11', '20 gm'),
(20, 'Sri Sri Tattva Tulsi tablet 60 S', 'Sriveda Pvt Ltd.', 1, 42, 'Tulsi Possesses multiple health beneficial properties and cure common illness effectively. this ayurvedic herbal ingredients for remedying various body ailment is used in the Sri Sri tattva rtulsi tablet.it aids in keeping the heart protected and provides relief from common illness like cold,cough etc. it is a effective solution for various respiratory disorder keeps you protected from general ndebility naturally', '2020-10-10', '2023-10-10', 123.50, NULL, NULL, 'images/sri_sri_tattva_tulasi_500_mg_tablet_60_s_0.jpg', NULL, '2021-07-02 03:28:54', '500 mg'),
(21, 'Kapiva Karela Jamun Juice 1 litre', 'Adret Retail Pvt. Ltd.', 4, 5, 'Kapiva kerala jamun juice cleanses bowel and heals your liver .it help in controlling the sugar level in yourbody.kerala jamun is a herbal blend of controlling blood sugar level and regulate carbohydrate metabolism . ', '2020-12-20', '2023-12-20', 240.00, NULL, NULL, 'images/kapiva_karela_jamun_juice_1_ltr_0_3.jpg', NULL, '2021-07-02 05:45:26', '1 litre'),
(22, 'Dr. Vaidya Diabex Pills 30 S', 'Herbola India Pvt Ltd', 4, 5, 'Dr Vaidya Diabex capsules is an ayurvedic formulation containing herbs that are  traditionaly acclaimed for maintaining healthy blood glucose as well as lipid  level.to get the best  result consume diabex in doctor recommended doses and make suitable dietary and lifestyle changes.', '2021-02-28', '2022-02-28', 107.20, NULL, NULL, 'images/dr_vaidyas_diabex_pills_30s_0_1.jpg', NULL, '2021-07-02 05:49:48', '30 Tablets'),
(23, 'Patanjali Juice Kerela Amla 500 ml', 'Patanjali Ayurveda Ltd', 4, 5, 'Patanjali Kerala Amla  juice contains no. of important nutrients ranging from iron,magnesiumand vitamins to potassium and vitamin C .An a excrllent source of dietary fibre, it purifies blood,hyperlipidemia,breast cancer,Inflammation,oxidative stress,iron deficiency, urinary infection etc', '2021-06-16', '2023-07-19', 75.00, NULL, NULL, 'images/patanjali_juice_karela_amla_500_ml_0.jpg', NULL, '2021-07-02 05:52:32', '500 ml'),
(24, 'Sri Sri Tattva Fenugreek oil veg capsule', 'Sriveda Pvt Ltd.', 4, 5, 'sri sri tattva ingredient fenugreek has been used for crnturies across Asia and the Mediterrabean region being an esential oil abundant in many nutrients, it oil is pressed or drilled fro seed of trigonella foenum gracecum plnts is  waxy in nature', '2020-08-20', '2025-05-15', 297.00, NULL, NULL, 'images/sri_sri_tattva_fenugreek_oil_veg_capsule_30_s_0.jpg', NULL, '2021-07-02 05:54:42', '30 Tablets'),
(25, 'Narbada Ayurveda Natural Flex Seeds', 'Narbada Ayurveda', 4, 5, 'Narbada Ayurveda is house of holistic herbs that promotes use of natural product for wellness of your body.it authentic ayurvedic product helps to cure many health problems in natural way.', '2021-03-31', '2023-08-01', 272.00, NULL, NULL, 'images/narbada_ayurveda_natural_flax_seeds_pack_of_4_x_100_gm_0_0.jpg', NULL, '2021-07-02 05:56:55', '100gm'),
(26, '4 Blud Tablet ', 'Apex Laboratories Pvt Ltd', 4, 8, '4 blud tablet is a herbal formulation for enhancing hematopoiesis for treatment anaemia, convalescence and general weakness. it enriched with the goodness of pyus malus, Boerhavia,diffusa,withania somnifera and glycyrrhiza glabra.', '2019-06-02', '2023-07-23', 308.00, NULL, NULL, 'images/4blud_tablet_30_s_0.jpg', NULL, '2021-07-02 06:02:16', '30'),
(27, 'Himalaya Herbolax Tablet', 'The Himalaya Drug Company', 4, 8, 'the natural ingredients in herbolax soften the stool and enhance intestinal motility,which relieve acute and chronic constipation efectively. herbolax is non -habit forming and does not result in physiological dependence.', '2021-07-20', '2023-10-25', 125.00, NULL, NULL, 'images/herbolax_tablet_100_s_0.jpg', NULL, '2021-07-02 06:06:16', '100 tablets'),
(28, 'Clevira Syrup 200 ml', 'Apex Laboratories Pvt Ltd', 4, 8, 'clevira syrup is anantioxidant cough syrup that provides protection from infections. The Syrup contains natural ingredients and herb that help improves overall well being.', '2021-02-17', '2023-12-14', 213.60, NULL, NULL, 'images/clevira_syrup_200ml_0.jpg', NULL, '2021-07-02 06:12:15', '200 ml'),
(29, 'Himalaya Geriforte Syrup', 'The Himalaya Drug Company', 4, 8, 'this natural ingredient in geriforte work synergistically to prevent free radical -induced oxidative damage to various organs. the ingredients are natural rejuvenators and cardioprotective agents.', '2021-01-05', '2023-09-12', 102.35, NULL, NULL, 'images/geriforte_syrup_200ml_0.jpg', NULL, '2021-07-02 06:13:56', '200 ml'),
(30, 'Rex Shakrino Tablet ', 'Rex Remedies Ltd', 4, 8, 'Rex Shakrino Tablet is used as herbal remedy that help treat diabetes. the tablet produces the most beneficial results in treating diabetes. it enhances the production of insulin  in the pancreas, normalises the sugar level in the blood of diabetic, check polyuria and is destroyer of glycosuria and other urinary disorder.', '2021-04-14', '2023-09-03', 235.00, NULL, NULL, 'images/rex_shakrino_tablet_40s_0_0.jpg', NULL, '2021-07-02 06:17:08', '40 Tablets'),
(31, 'Inlife Vitamin B12 Tablet', 'Inlife Pharma Private Ltd', 9, 10, 'Inlife vitamin  B12 ta deficiency in through to be one of major nutrients deficiency in the world.this  help in the blood cell regeneration', '2021-02-27', '2024-03-13', 420.00, NULL, NULL, 'images/inlife_vitamin_b12_tablets_60_s_0.jpg', NULL, '2021-07-02 06:22:25', '60 tablets'),
(32, 'Setu Fish Oil Omega3 60 S', 'Setu', 9, 10, 'setu omega 3 tablet contain fish oil ,DHA,DPA,EPA, daily essential  nutrient for  a healthy heart  and brain. these\'good\'fats are shown to reduce triglycerodes and also  work on your mood, fortify your brain and are essential for pregnant womens.e', '2019-04-19', '2022-08-17', 700.00, NULL, NULL, 'images/setu_fish_oil_omega_3_1000_mg_softgel_60_s_0.jpg', NULL, '2021-07-02 06:24:21', '1000mg'),
(33, 'Immuance Tablet', 'Meyer Organics Ltd.', 9, 10, 'Immunace tablet works by slowing down the processes that damages cells. maintaining fluid balance within body cell and  and acidity levels. promoting protien synthesis and wound healing. this tablet is used for treatment, control prevention and improvement of following diseases,condition .', '2020-04-28', '2024-01-02', 80.00, NULL, NULL, 'images/immunace_tablet_6s_0_1.jpg', NULL, '2021-07-02 06:25:53', '6 Tablets'),
(34, 'Nutrolin B plus New Capsule', 'Cipla Ltd', 9, 10, 'New Nutrolone B Plus contains loctobacillus niacinamide,pyridoxine and folic acid. new nutrolin plus capsule is a preparation that normalizes', '2020-10-21', '2023-10-20', 45.91, NULL, NULL, 'images/nutrolin_b_plus_capsule_15_s_0.jpg', NULL, '2021-07-02 06:28:19', '15 Tablets'),
(35, 'Multigates Syrup', 'Gates India Pvt Ltd', 9, 10, 'Multigate syrup is useful in the treatment of pregnancy complication, high blood pressure, type-II', '2020-05-27', '2023-05-24', 298.00, NULL, NULL, 'images/multigates_syrup_200ml_0.jpg', NULL, '2021-07-02 06:29:47', '200 ml'),
(36, 'Ferikind Tablet', 'Mankind Pharma Pvt Ltd', 9, 10, 'Ferikind tablet contains elemental iron and folic acid is essential to numerous bodily functions ranging from nucleotide biosynthesis to the remethylation of homocysteine. it  is especially important during period of rapid cell division and growth. Both children and adult require folic acid to produce healthy red blood cell and prevent anemia iron transport oxygen throughout the body and maintain red blood cells, thus making an individual feel energetic and preventing anemia.', '2021-01-05', '2023-01-05', 1046.76, NULL, NULL, 'images/ferikind_tablet_10_s_0.jpg', NULL, '2021-07-02 06:31:25', '10 Tablets'),
(37, 'Dr. Natcure Apple Cider Vinegar for Heart and Diabetic Care Ginger Garlic', 'Cresenzia Tradetch Private Ltd', 9, 11, ' The ginger, garlic,lemon ,honey, and apple cider vinegar blended drink is believed to unclog the fat and provide multiple health benefits .It help in weight loss, fungal infections, improves immunity, enhances digestion.', '2021-06-28', '2023-10-25', 440.10, NULL, NULL, 'images/drnatcure_apple_cider_vinegar_for_heart_and_diabetic_care_ginger_garlic_lemon_fenugreek_honey_flavour_500_ml_0_0.jpg', NULL, '2021-07-02 06:35:37', '500 ml'),
(38, 'Sri Sri Tattva Madhukari Herbal Tea ', 'Sriveda Satta Pvt Ltd.', 9, 10, 'Sri Sri Tattva Madhukari Herbal TEA is an exquiste blend of 16 exotic herbs. the combination of these herbs act AS Appetizer,Digestive aid and helps in kapha embalances. use it as an alternative and coffee and get refreshed  and energized with aromatic caffeine free sri sri tattva madhukari herbal tea. ', '2020-06-17', '2023-10-11', 118.75, NULL, NULL, 'images/sri_sri_tattva_madhukari_herbal_tea_100_gm_0.jpg', NULL, '2021-07-02 06:37:31', '100 gm'),
(39, 'Glucon-D Tangy Orange Flavour Powder', 'Heinz India Pvt Ltd', 9, 10, 'Glucon D instant energy tang orange flavour  gives you  energy two time faster than any other sugar drink.It contains Glucose and vitamin D  which help you absorb energy and leaves you feeling fresh and active', '2020-03-28', '2021-12-23', 149.96, NULL, NULL, 'images/glucon_d_tangy_orange_flavour_powder_450_gm_0_2.jpg', NULL, '2021-07-02 06:39:37', '450 gm'),
(40, 'The Bridge Mia Organic Drink Almond', 'The Bridge SRL', 9, 11, 'the premium almond based drinks serves as a healthy and deliciothe added nutrition properties provide a wholesome and energies stat to your day.us substitute for dairy milk .', '2020-10-01', '2021-08-08', 425.00, NULL, NULL, 'images/the_bridge_almond_drink_1_litre_0_1.jpg', NULL, '2021-07-02 06:44:57', 'I LITRE'),
(41, 'The Bridge Mia Organic Drink OAT', 'The Bridge SRL', 9, 10, ' the premium organic oat based drink serves as a healthy and delicious substitutes for dairy milk that added nutritional properties provide a wholesome and energizing start to your day', '2021-01-01', '2023-01-01', 425.00, NULL, NULL, 'images/the_bridge_oat_drink_1_litre_0_1.jpg', NULL, '2021-07-02 06:46:01', 'I LITRE'),
(42, 'The Bridge Mia Organic Drink SOYA', 'The Bridge SRL', 9, 11, ' the premium organic soya based drink serves as a healthy and delicious substitute for dairy milk.all this ingredient are selected according to high quality  and traceability  standard. it\'s a non dairy, lactose-free and gluten free drink. it can be enjoyed  at breakfast or a leisure or even durind work.', '2021-01-01', '2023-01-01', 425.00, NULL, NULL, 'images/the_bridge_soya_drink_1_litre_0_1.jpg', NULL, '2021-07-02 06:47:49', 'I LITRE'),
(43, 'Exalte Kashmir Valley Green Tea Leaves', 'Exalte Tea', 9, 11, 'this is rich blend of green tea with exotic ingredient makes you experience the best of Kashmir in the interior of your home .Studies shows that tea is useful in  reducing LDL cholesterol levels. the content of almonds in this tea will ensure that you get a healthier diet with every cup of Tea. Green tea with rose ,almonds and spices make this an elixir which warms the belly,eases the chest and leads to a sensory satisfaction.', '2021-01-05', '2023-11-16', 250.00, NULL, NULL, 'images/exalte_kashmir_valley_green_tea_leaves_25_gm_0_1.jpg', NULL, '2021-07-02 08:19:06', '25g'),
(44, 'Exalte Masala Chai Tea', 'Exalte Tea', 9, 11, 'this is a Black tea with aromatic indian spices gives you the globally famous India chai!!!Orignating in the Indian sub continent. it has gained worldwide popularity.', '2021-02-05', '2021-02-05', 250.00, NULL, NULL, 'images/exalte_masala_chai_tea_leaves_25_gm_0_0.jpg', NULL, '2021-07-02 08:20:29', '25gm'),
(45, 'Lama Giloy Ghanvati Tablet', 'Lama Pharmacy', 9, 12, 'Giloy Ghan Vati helps in increase immunity beneficial in all types of fever,cold and cough ,help to prevent iunfection and several other diseases.helpful in boosting immunity.Beneficial in general debility,fever, skin and urinary disorder.', '2021-03-18', '2023-07-13', 80.00, NULL, NULL, 'images/lama_giloy_ghanbati_tablet_60s_0_0.jpg', NULL, '2021-07-02 08:22:38', '60 tablets'),
(46, 'Himalaya Wellneess Ashvagandha Tablet', 'The Himalaya Drug Company', 9, 12, 'Himalayas Ashvagandha ghanvati popularly known as Indian Ginseng Ayurvedic Text revere to rejuvenative tonic and for its immunomodulatory and inflammation reducing properties which help support the body to fight against infections', '2021-06-30', '2024-06-30', 143.55, NULL, NULL, 'images/himalaya_wellness_ashvagandha_tablet_60_s_0.jpg', NULL, '2021-07-02 08:24:12', '60 tablets'),
(47, 'Dr. Vaidya Giloy Capsule', 'Herbolab India Pvt Ltd', 9, 11, 'DR. Vaidya Giloy capsule are a perfect choice as it contains no added chemical r synthetic ingredient  it is a natural supplement and support immune system and also  do management of various diseases ,improve immunity.', '2020-02-14', '2022-02-14', 171.00, NULL, NULL, 'images/dr_vaidyas_giloy_capsule_pack_of_2_x_30s_1s_0_1.jpg', NULL, '2021-07-02 08:27:14', 'Pck of 2x30 S'),
(48, 'Patanjali Honey', 'Patanjali Ayurveda Ltd', 9, 11, 'patanjali pur honey is a sweet ailment produced by honey bees and derived from the nector of flowers sweetness from the monosaccharide fructose and glucose minerals vitamins and other nutrients elements it is not only natural sweetner but a multifunctional food that offer ample of benefits.', '2021-06-01', '2023-02-01', 315.00, NULL, NULL, 'images/patanjali_honey_1_kg_0.jpg', NULL, '2021-07-02 08:28:16', '1 kg'),
(49, 'Carboload', 'Hexagon Nutrition Pvt Ltd', 9, 13, 'Carboload is a unique carbohydrate supplementation exclusively designed to support enhanced recovery after  surgery. oral carbohydrate loading is known to attenuate insulin resistance, minimize protein and muscle loss and improves patient comfort.', '2021-02-17', '2023-10-13', 334.00, NULL, NULL, 'images/carboload_150_gm_0.jpg', NULL, '2021-07-02 08:30:28', '150 gm'),
(50, 'Inlife Whey Protien Powder Vanilla Flavour', 'Inlife Pharma Private Ltd', 9, 13, 'INLIFE Whey protien(combination of whey protien isolate,concentrate and hydrolysate)your muscles absorb the protien very fast ,it very fast, it\'s the best kind of protien very fast ,it is best kind of protien powder if you want to improve body composition.', '2021-06-29', '0024-06-29', 1791.36, NULL, NULL, 'images/happy_bar_300_gm_pack_of_10_bars_0_0 (1).jpg', NULL, '2021-07-02 08:32:29', '1 kg'),
(51, 'Penta Sure HP 100% Whey Protien Banana & Vanilla Flavour', 'Hexagon Nutrition Pvt Ltd', 9, 13, 'Pentasure HP is high protien quality whey protein concentrates providing enhanced muscle repair and muscle building . each serving of 30 g of pentasure HP PROVIDES 12.90G   pure whey protien  which help in elevation  muscles synthesis while promoting muscles recovery and repair.', '2021-05-13', '2023-05-14', 2055.00, NULL, NULL, 'images/penta_sure_hp_100_whey_protein_banana_vanilla_flavour_1_kg_0.jpg', NULL, '2021-07-02 08:34:28', '1 kg'),
(52, 'Soulflower Soap -Papaya Cucumber', 'Pt Invent India Pvt Ltd', 14, 15, 'a soothing soap with the benefits of papaya which acts as a natural exfoliator and cucumber to reduce tan and wrinkles for your skin.', '2021-06-29', '2024-06-29', 300.00, NULL, NULL, 'images/soulflower_soap_papaya_cucumber_150_gm_1.jpg', NULL, '2021-07-02 08:41:54', '150 gm'),
(53, 'Bioderma Atoderm Intensive Baume', 'Naos Skin Care India Pvt Ltd', 14, 15, 'Bioderma atoderm cream has been made with an exclusive formula that quickly stops itching,instantly calms irritation and restores the skin barrier for a long time. this face and body moisturizer is used to intensely nourish and soothe the skin.', '2021-03-18', '2024-03-13', 1300.00, NULL, NULL, 'images/bioderma_atoderm_intensive_baume_200_ml_0.jpg', NULL, '2021-07-02 08:43:47', '200ml'),
(54, 'Palmolive  Aroma Shower Gel Absolute Relax', 'Colgate Palmolive India Ltd', 14, 15, 'palmolive body wash gel relaxing reverie of aroma under the shower from enchanting the sense with its pleasant aroma to cleansing , polmolive shower gel have whatever you  are looking for to relax and unwind. contain perfect blend of exotic ylang  ylang essential oil and iris extract, it provides you the essence of blissful shower moment, immerse yourself in the smoothing fragrance of this relaxing palmolive body wash that helps unveil the new you with every blissful shower moment.', '2021-02-18', '2023-07-22', 499.00, NULL, NULL, 'images/palmolive_aroma_shower_gel_absolute_relax_750_ml_0.jpg', NULL, '2021-07-02 08:45:56', '750 ml'),
(55, 'Sri-Sri Tattva Moisturising Cream', 'Sriveda Satta Pvt Ltd.', 14, 15, 'Sri Sri Tattva Moisturising Cream softens smoothes and condition your skin giving it as natural glow. mMade from natural actives like Rose extract,aloveraextract soya Oil and shea Butter. soya oil and soya butter moisturize  you skin and prevent dryness.', '2020-06-10', '2024-06-10', 114.00, NULL, NULL, 'images/sri_sri_tattva_moisturising_cream_100_gm_0.jpg', NULL, '2021-07-02 08:47:15', '100gm '),
(56, 'Dettol Soap', 'Reckitt Benckiser India Ltd.', 14, 15, 'Dettol soap with crispy menthol and trusted germ protection help skin retain it moisture and leaves it feeling healthy and refreshed. it gently cleanses and cleanses and cool that leaves you feeling healthy and refreshed.', '2021-04-07', '2024-06-30', 52.25, NULL, NULL, 'images/dettol_soap_original_125_gm_0.jpg', NULL, '2021-07-02 08:48:28', '125 gm'),
(57, 'Bio Seaweed Eye Gel', 'Bio Veda Action Research Company', 14, 16, 'It anti fatique Eye gel that reduces and prevent signs of stress puffiness and dark circles which is enriched with seaweed . extract the soothes tired skin, reduces inflammation and refreshes the skin.', '2021-02-18', '2023-07-29', 199.00, NULL, NULL, 'images/biosweed_eyegell.jpg', NULL, '2021-07-03 07:49:49', '15 gm'),
(58, 'Mama Earth Under Eye Cream', 'Honasa Consumer Pvt.Ltd', 14, 16, 'tiring day and sleepless nights can harm your beautiful eyes MAMAEARTH bye bye dark circle eye cream is here to help you rejuvenate you eye with goodness of natural ingredients.', '2020-11-30', '2024-11-30', 539.10, NULL, NULL, 'images/mamaearth_under_eye_creme_50_ml_0.jpg', NULL, '2021-07-03 07:51:56', '50 ml'),
(59, 'DCR Dark Circle Remover Lotion ', 'West Coast Phamaceuticals Works Ltd', 14, 16, 'DCR dark circle removal lotion treatment only works protect the skin,but it is also help to restore glow to your eye and improve liminosity and brightness . this lotion  radiance glow back your skin around your eyes.', '2021-06-30', '2024-06-30', 396.00, NULL, NULL, 'images/dcr_dark_circle_remover_lotion_50_ml_1_0.jpg', NULL, '2021-07-03 08:12:39', '50 ml'),
(60, 'Biotrue Multipupose   solution', 'Bausch and comb', 14, 16, 'Biotrue multi-purpose solution moistens in a way your eyes do as it uses a lubricant also found in your eyes and it is PH balanced to match healthy tears. it help to prevent from denaturing for clean contact lenses and fight germs for a healthy contact lens wear.', '2020-08-05', '2023-09-09', 283.65, NULL, NULL, 'images/biotrue_multi_purpose_solution_120_ml_1_0.jpg', NULL, '2021-07-06 02:18:59', '120ml'),
(61, 'Renu  fresh multipurpose solution', 'Baush', 14, 16, 'Renu fresh is  a multi-purpose solution for fresh lens comfort, renu fresh provides a cushion of comfort for you contact lens wear. use for cleaning,rinsing ,disinfecting and storing your soft contact lenses.', '2021-05-04', '2023-08-06', 248.40, NULL, NULL, 'images/renu.jpg', NULL, '2021-07-06 03:35:27', '120ml'),
(62, 'Pee Safe Toilet seat Sanitizer spray mint', 'Redcliffe hygiene private  Limited', 14, 17, ' toilet seat sanitizer spray protect ypu from germs foung in toilet and reduces your risk of contracting infection like uti, this spray kill 99.9% germs which are present on toilet seats surface.', '2021-07-09', '2023-06-05', 296.65, NULL, NULL, 'images/pee_safe_toilet_seat_sanitizer_spray_mint_pack_of_3_x_50_ml_0.jpg', NULL, '2021-07-06 05:01:14', '3x50 ml'),
(64, ' COLORBAR Pure lzer Face Wipes  ', 'Colorbar Cosmetic  India Pvt.Ltd', 14, 17, 'This wipes keeps your hand and face germ free with pure -izer sanitizer wipes lightweight and travel friendly pack easy to carry around  for a clean and healthy skin you must buy this product.', '2021-03-09', '2023-01-09', 179.00, NULL, NULL, 'images/purelize.jpg', NULL, '2021-07-06 05:23:57', '30 piece'),
(65, 'Wipeout Sanitizer spray', 'Sanghvi beauty', 14, 17, 'wipe out sanitizer is a gentle yet powerful disinfectants spray  that kill 99% germs not just on surfaces but also in the air around you. enriched with antimicrobial lemongrass oil, neem and lemon extracts it cleans kills 99%germs and sanitizer ,and freshens your surrounding.\r\n', '2021-03-09', '2023-06-05', 199.00, NULL, NULL, 'images/wipeout.jpg', NULL, '2021-07-06 05:32:55', '200 ml'),
(68, 'Savlon  Sanitizer Disinfectant Spray', 'Itc India Ltd', 14, 17, 'This spray is useful in wide variety of high traffic surface such as door,handles,seats, tables chairs,carpets,curtain etc. are touched often by a number of different people and are reservoir for a wide variety of germs and bacteria.it is a versatile spray that disinfects and deodorizes in one easy step,', '2021-04-04', '2023-05-09', 159.00, NULL, NULL, 'images/savlon spray.jpg', NULL, '2021-07-06 05:44:33', '170 ml'),
(72, 'Bio Oil', 'Marico limited', 14, 20, 'Bio Oil is a specialist skincare product formulated to help improve the apperance of scars,stretch marks and uneven skin tone. it is unique formulation ,which contains the breakthrough ingredient purcellin Oil is also highly effective for ageing and dehydrated skin .\r\n', '2020-07-09', '2023-05-09', 383.00, NULL, NULL, 'images/bio-oil.png', NULL, '2021-07-06 05:54:58', '60 ml'),
(73, 'Nivea Smooth Milk body lotion with Shea Butter', 'Beirrsdoef AG ', 14, 20, 'The Nevia smooth milk lotion works deep within the skin repairing dryness layer by layer to give you long lasting  softness and protection .Enriches with Shea butter and deep moisture serum, it deeply moisturizes dry skin and gives it a silky feeling that lasts for up to 48 hours.', '2021-07-06', '2023-07-06', 361.00, NULL, NULL, 'images/nivea.png', NULL, '2021-07-06 06:06:14', '400ml'),
(74, 'Citaphil moisturizing lotion all skin types', 'Nestle skin health India Pvt Ltd', 14, 20, 'Cetaphil Moisturizer Lotion is for all ski n types.it provides long -lasting skin hydration and help restore the skin natural protective barrier.It is specifically formulated to hydrate sensitive or dry skin.', '2021-04-01', '2024-08-09', 699.00, NULL, NULL, 'images/cetaphiil.png', NULL, '2021-07-06 06:15:04', '250 ml'),
(75, 'Veet normal skin women Hair Removal', 'Reckitt Benckiser India Ltd.', 14, 20, 'This hair removal cream is enriched with the goodness of herbal ingredients,takes only 3 to 6 minutes to remove cream contains the natural goodness of sandal, saffron and turmeric.\r\n', '2021-07-09', '2024-04-06', 470.00, NULL, NULL, 'images/veet.png', NULL, '2021-07-06 06:21:52', '100 gm'),
(77, 'Scalpe Plus Anti Dandruff Shampoo', 'Glenmark pharmaceutical Ltd', 14, 19, 'Scalpe Pro is a Daily use Anti Dandruff Shampoo specially designed with Climbazole which has a proven mechanism of action to eliminate dandruff at its source.also contain Piroctone Olamine which is known to omprove hair shaft thickness which reduces hair hair fall due to breakage.', '2021-04-09', '2025-12-08', 198.90, NULL, NULL, 'images/scalpe_plus_anti_dandruff_shampoo_75_ml_0_1.jpg', NULL, '2021-07-06 06:34:54', '75 ml'),
(78, 'Bio Green Apple Shampoo Conditioner', 'Bio veda', 14, 19, 'Biotique green apple conditioner purify shampoo and conditioner comes with a blend of green apple extract,centralla and sea algae to provide your hair with vital minerals and protein, making it healthy and shiny .this shampoo is apt for daily usage and does not dry scalp,retaining the natural shine and body of the hair.', '2021-06-09', '2023-09-03', 600.00, NULL, NULL, 'images/bio_green_apple_shampoo_conditioner_800_ml_0_1.jpg', NULL, '2021-07-06 06:58:24', '800ml'),
(79, 'Indulekha Bringraj Oil', 'Induleka', 14, 19, 'Indulekha Bringraj Oil is an Ayurvedic medicine for reducing hair fall and promoting new hair growth. The oil produced by using extract of bringraj and svetakutaja which is soaked and matured with virgin coconut oil sunlight for 7 day . the goodness  of herbs and sunlight make indulekha hair oil a potent source of increasing hair growth.', '2021-07-09', '2024-05-07', 388.80, NULL, NULL, 'images/indulekha_bringha_oil_100_ml_0.jpg', NULL, '2021-07-06 07:10:44', '100ML'),
(80, 'Ducray Anaphase Anti Hair loss complete Shampoo', 'Aboortt Healthcare Pvt Ltd', 14, 19, 'Ducray anaphase stimulating cream shampoo completes the anti hair loss and strengthening action of treatment(lotion  and nutrient supplement .it is very well tolerated and can be used as oftenas desired. a shampoo that gently cleanse and nourishes thinning hair ,the smooth creamy texture aids microcirculation of the scalp, formulated with complex featuring tocopherol nicitinate and recus.', '2021-04-09', '2024-12-01', 647.80, NULL, NULL, 'images/ducray_anaphase_anti_hair_loss_complement_shampoo_100_ml_0_3.jpg', NULL, '2021-07-06 07:26:55', '10 ml'),
(81, 'Sri Sri Tattva Neem Face Pack', 'Sri veda', 14, 18, 'Sri  Sri Tattv Neem Face Pack is a soap free herbal product highly effective and is known for its antibacterial properties. It help removes impurities, dull surface cells and improves skin complexion. It is used for clean and fresh skin care.', '2021-09-02', '2023-08-09', 61.75, NULL, NULL, 'images/sri sri face pack.jpg', NULL, '2021-07-06 07:40:09', '60 gm'),
(82, 'Nature Cell Lightening Excel day Bxl coconut cream', 'Bio veda Action research Company', 14, 18, 'This luxurious cream is a blend with extract of pure virgin coconut ,dandelion and manijishtha to fade away dark spots and blemishes  as it is  whitening cream made with botanical ingredients claims helpfully skin problem like fade dark spots ans dicoloration.', '2021-07-09', '2025-09-08', 999.00, NULL, NULL, 'images/coconut cream.jpg', NULL, '2021-07-06 07:48:42', '50 gm'),
(86, 'Matra elixir Illuminating  beauty oil rose gold', 'Matra skincare essentials Pvt.Ltd', 14, 18, 'Matra rose gold beauty elixir is a thoroughly researched formula to render illuminating and glowing skin the radiance of pure gold. infused witrh pure gold flakes, it absorb deep into your skin to nourishment and radiant skin.', '2021-02-09', '2023-08-09', 995.00, NULL, NULL, 'images/illuminator.jpg', NULL, '2021-07-06 07:53:50', '15 ml'),
(87, 'Bio Papaya exfoliating Face wash', 'Bio veda Action research Company', 14, 18, 'Papaya is a luscious tropical fruit known for its rejuvenating and healing benefits. full vitamin minerals and phytochemical.papaya can act as a youth activator and natural exfoliated to revitalize skin without inflammation or irritation.', '2021-06-09', '2024-04-09', 270.00, NULL, NULL, 'images/bio_papaya_exfoliating_face_wash_200_ml_0_0.jpg', NULL, '2021-07-06 07:57:24', '200 ml'),
(91, 'Bio Neem Purifier Face wash', 'Bio  Veda  Action Research Company', 14, 18, 'this is a fresh forming 100 percent soap free antibacterial cleansing gel is blended with extracts of neem leaves,ritha and kulanjan removes impurities,prevent pimples and purify the complexion for clear ,soft, and pimple free skin.', '2021-03-09', '2023-01-04', 240.00, NULL, NULL, 'images/bio_neem_purifying_face_wash_200_ml_0_0.jpg', NULL, '2021-07-06 08:01:52', '200 ml'),
(94, 'Himalaya Men Pimple clear Neem Face wash', 'himalayas', 14, 21, 'Himalayas men pimple clear face wash fortifies with double action of neem and natural salcylic with fast and strong action on pimples it act as boost technology faster penetration of herbal activities into men tough skiin thereby gives effective results.', '2021-02-09', '2025-03-09', 153.00, NULL, NULL, 'images/himalaya face wash.png', NULL, '2021-07-06 08:07:15', '100 ml'),
(96, 'The Man company Argon And geranium beard oil', 'Helios Lifestyle Pvt Ltd', 14, 21, 'this oil blend of moroccan argon oil and geranium packed with anti oxidants. this oil instantly enhance manageability ,shine and ensure long lasting conditioning. argon omoisturizes the facial skin and adds a lightweight shine to beard.', '2021-07-09', '2026-08-04', 280.00, NULL, NULL, 'images/beard oil.png', NULL, '2021-07-06 08:20:40', '80 ml'),
(98, 'Inlife Multivitamin and mineral capsule for Men', 'Inlife Pharmaceutical Pvt Ltd', 14, 21, 'inlife multivitamin and minerals capsule for men is specially designed for men it is enriched with more than 25 essential vitamins ,minerals and natural herbs which along with overall health also promote sexual and prostate health.', '2021-03-01', '2025-05-04', 384.00, NULL, NULL, 'images/multivitamin.png', NULL, '2021-07-06 08:25:27', '60 capsules'),
(101, 'Bakson s sunny herbals  Shaving cream', 'Bakson s Homeopathy', 14, 21, 'this is formulated to give you clean asmooth shave with natural antiseptic  protection   of lemon and neem it enriches smooth shave with natural antiseptic action.d l', '2021-07-09', '2024-03-05', 75.00, NULL, NULL, 'images/cream.png', NULL, '2021-07-06 08:29:45', '75 gm'),
(102, 'Dr Ortho an Ayurvedic Medicine Oil', 'Dr Ortho ayurvedic', 14, 23, 'this is an ayurvedic formulation blended with oil from  eight efficacious medicinal plants. these threputic properties of medicinal herbal oil helps in relieving pain associated with neck, joints,legs shoulders etc.', '2021-06-08', '2027-06-05', 246.00, NULL, NULL, 'images/ortho oil.png', NULL, '2021-07-06 09:01:38', '120 ml'),
(103, 'Friend Easy Adult Diaper larger', 'Noble Hygiene Ltd', 14, 23, 'this diapers comes with anti bacterial super absorbent gel core that quickly locks fluid away this provides up to eight hour of protection against moderate urine leakage.', '2021-07-09', '2025-06-08', 426.00, NULL, NULL, 'images/diapers.png', NULL, '2021-07-06 09:07:20', '110 diapers'),
(104, 'Tynor  Invalid walker with all  pods heavy Duty Universal', 'Tynor orthotics Pvt Ltd', 14, 23, 'this walker with pod  heavy duty is a walking device  that help patient to walk .it is designed to provide full weight bearing when one or both legs are physically challenged because of some injury or could be due to old age this provide patient a grip to walk', '0000-00-00', '0000-00-00', 1441.00, NULL, NULL, 'images/walker.png', NULL, '2021-07-06 09:12:20', 'not applicable'),
(105, 'Himalayas wellness pure herbs shalliki tablet', 'himalayas', 14, 23, 'this  tablet prevent for excessive joint wear and tear by inhabiting glycosaminoglycan degradation.', '2021-07-09', '2027-07-09', 145.00, NULL, NULL, 'images/himalaya 3.png', NULL, '2021-07-06 09:15:26', '60 Tablets'),
(109, 'Nestle NAN Pro two six month powder', 'Nestle India ltd.', 25, 26, 'this is ved by science to give baby whole nutrients this product is best.infant nutrition product backed by evol', '2021-05-09', '2023-04-05', 640.00, NULL, NULL, 'images/p1.jpg', NULL, '2021-07-07 01:25:54', '400 gm'),
(110, 'Nestle ceralac stage four to twelve month powder', 'Nestle India ltd.', 25, 26, 'this multigrain dal veg is complementary food for babies from 12 to 14 month .while infants and childrenhave higher requirement of nutrient than adult 2 serve Ceralac  daily needs are fulfilled minerals , protien ,ioon slso all sources of  16 important nutrients required for their growth', '2021-06-09', '2025-06-05', 272.00, NULL, NULL, 'images/nestle ceralac.jpg', NULL, '2021-07-07 01:28:32', '300 gm'),
(111, 'VIgini intimate whitening and moisturizing gel', 'Global Medicare INC', 25, 27, 'this is 100% natural active feminine vaginal hygeine whitening gel wash for women reduce itiching,hyper pigmentation,malanin production and restore natueal colour of intimate parts.', '2021-03-06', '2026-06-09', 625.00, NULL, NULL, 'images/vigini.jpg', NULL, '2021-07-07 01:31:56', '100 gm'),
(112, 'Clean and  Dry wash', 'Midas Care Pharmaceutical Pvt Ltd', 25, 27, ' this is feminine hygiene product that prevents dryness,itchiness and irritation ', '2021-05-07', '2026-09-03', 170.00, NULL, NULL, 'images/clean.jpg', NULL, '2021-07-07 01:34:42', '90 ml'),
(113, 'Pristina balance PL Nutition Powder chocolate flavour', 'Pristine Organic Pvt Ltd', 25, 28, 'balance pl nutrient powder contain dha which is beneficial for recamosus whichincrease milk production during lactation.', '2021-05-09', '2023-06-08', 234.00, NULL, NULL, 'images/pristina .jpg', NULL, '2021-07-07 01:38:09', '200 gm'),
(114, 'PRO three sixty MOM Nutritional Protien Powder', 'GMN Healthcare Pvt ltd.', 25, 28, 'this a pregnancy and breast feeding maternal nutrition supplement need ed by mother with a nourishing formula with no added sugar .', '2021-07-09', '2025-06-07', 471.75, NULL, NULL, 'images/pro1.jpg', NULL, '2021-07-07 01:42:00', '400gm'),
(115, 'Sahyog Wellness Hot Water Bottle', 'Sahyog wellness', 43, 44, 'this is  durable product good quality with leak proof technology .it is used as natural body warmer in winter and also heat   the back problems.', '2021-04-09', '2025-06-05', 249.00, NULL, NULL, 'images/orthopedic1.jpg', NULL, '2021-07-07 01:45:44', 'not available'),
(116, 'Tynor Elastic Knee Support', 'Tynor orthotics Pvt Ltd', 43, 44, 'this g aluminum hinges ensure rigid side splinting but free flexion movement. open patella design release patellar pressure, hold patella on positionstron', '0000-00-00', '0000-00-00', 460.00, NULL, NULL, 'images/knee.jpg', NULL, '2021-07-07 01:48:06', 'XL'),
(117, 'OMRON NE C twenty eight Nebulizer', 'OMRON', 43, 45, 'VVT OMRON  (virtual value  technology) is a nebulizer kit for efficient delivery of medication without silicon value. Highly efficient nebulization  with reduced in medication wastage. It is one of the safe and easy cleaner comes in compact ,light weight and low noise device.', '0001-01-01', '0000-00-00', 2669.00, NULL, NULL, 'images/omron nebulizer.jpg', NULL, '2021-07-07 01:55:32', 'not available'),
(118, 'DR Morepen  VP  Six breath free vaporizer', 'Dr morepen ', 43, 45, 'Dr morepen vp six breath free vaporizer is a mechanical device that turn water into steam and transmit that steam into the surrounding. it help to clear congestion,moisturize dry nasal passageway ,treat in cold,bronchit,sinustis,asthma,throat irritation.', '0000-00-00', '0000-00-00', 302.00, NULL, NULL, 'images/vaporizer.jpg', NULL, '2021-07-07 02:01:25', 'not available'),
(119, 'Pro Plus Fingertip pulse with digital oximeter', 'pro plus limited', 43, 45, 'this  determine the spo two (blood oxygen saturation level ) and pulse rate comes with an alarm function is used for measuring the pulse oxygen saturation and pulse through finger.741', '0000-00-00', '0000-00-00', 741.00, NULL, NULL, 'images/oximeter.jpg', NULL, '2021-07-07 02:06:36', 'not available'),
(120, 'Oxygen Concentrator Can', 'Canta High purity Medical Oxygen Concentrator', 43, 45, 'It is helpful in preventing medical emergencies . the oxygen concentrator is made as per WHO standards. IT provide 93% Pure oxygen and CE approve product.', '0000-00-00', '0000-00-00', 77799.00, NULL, NULL, 'images/concentrator.jpg', NULL, '2021-07-07 02:15:09', '8 litre'),
(121, 'ACCUSURE  MT Digital Thermometer', 'Microgene Diagnostic Sytem pvt ltd.', 43, 57, 'Accusure MT digital Thermometer is a fast ,accurate  and easy to use thermometer that help you to know the temperature in a few second .It has a rigid tip is a water resistant and help to indicate the fever.', '0000-00-00', '0000-00-00', 250.00, NULL, NULL, 'images/thermometer.jpg', NULL, '2021-07-07 02:20:45', 'not defines'),
(122, 'Blood Pressure monitor', 'Dr morepen Bp', 43, 57, 'This device is fully automatic monitoring in home blood pressure pulse rate and store the result in memory. this is a medical device that incorporated new capability that enable user to improve the ease and accuracte and also manages self care purpose.', '0000-00-00', '0000-00-00', 1129.00, NULL, NULL, 'images/bp morepen.jpg', NULL, '2021-07-07 02:24:32', 'not available'),
(123, 'Equinox weigh machine', 'Equinox oversea pvt ltd', 43, 57, 'EQUINOX machine weigh scale is a tool to monitor and measure your maximum of 130 kilogram . the weighing scale has a zero adjuster, we need to set zero before taking the weight one has to measure his/her weight without any movement while measuring the weight.', '0000-00-00', '0000-00-00', 901.00, NULL, NULL, 'images/weighing machine.jpg', NULL, '2021-07-07 02:30:12', '130 kilogram  it can measure '),
(124, 'Easy Care Auto two in one Dispenser', 'Easycare', 29, 31, 'this is smart motion infrared sensor technology touchless and hand free activation, put your hands close to nozzle and you get sanitized.', '0000-00-00', '0000-00-00', 1400.00, NULL, NULL, 'images/EASYCARE.jpg', NULL, '2021-07-07 02:33:19', 'not available'),
(125, 'EasyCare Fetal Dopper', 'easycare', 29, 31, 'this is dopper  is product used as devices forsurgical field only preferable bu specialized surgen', '0000-00-00', '0000-00-00', 2549.83, NULL, NULL, 'images/DOPPLER.jpg', NULL, '2021-07-07 02:35:40', 'not available'),
(126, 'Hansplast Cotton Crepe Bandage BP', 'Neptune Orthopedics', 29, 30, 'this entire bandage is crafted from non slipping sterilizable material in order to allow the skin to breath free which is used dressing', '0000-00-00', '0000-00-00', 370.00, NULL, NULL, 'images/cotton.jpg', NULL, '2021-07-07 02:38:23', '15x4 cm'),
(127, 'Dispovan  thirty one Syringing', 'Hindustan Syringes and Medical Device ltd', 29, 30, ' this product are only used by surgen or doctor selling odf thid product is only applicable by authorization of authentic user prescription only', '0000-00-00', '0000-00-00', 85.00, NULL, NULL, 'images/insulin.jpg', NULL, '2021-07-07 02:43:23', '1 ml 10syringes'),
(128, 'One Mile Latex Examination Gloves', 'One Mile Healthcare', 29, 32, 'this isaproduct tgloves that are used by doctor surgen their made up of polythplastic that is smooth and protect from infection extreniously.', '0000-00-00', '0000-00-00', 850.00, NULL, NULL, 'images/1 MILE.jpg', NULL, '2021-07-07 02:46:43', 'large 100 pc'),
(129, 'Easy Care Aluminum two fold strecher', 'Easycare', 29, 32, 'this is used only used in hospital in emergency when patient is at extreme condition plded streacher is used.atient tooked from ambulance to hospital this fo', '0000-00-00', '0000-00-00', 5399.00, NULL, NULL, 'images/STRECHER.jpg', NULL, '2021-07-07 02:49:09', 'not defines'),
(130, 'Dispovan  Needle  Twenty one G', 'Hindustan Syringes and Medical Device ltd', 29, 33, 'this is also adoctor validation is needed as if product is not in sale', '0000-00-00', '0000-00-00', 100.00, NULL, NULL, 'images/SYRING.jpg', NULL, '2021-07-07 02:52:02', '10 pc'),
(131, 'Surgical instrument  kit', 'SRK Meditech', 29, 33, 'surgery kit as all aspecial instrument needed a  whhole package is provided  with all types of ', '0000-00-00', '0000-00-00', 15000.00, NULL, NULL, 'images/surgical-instruments KIT.jpg', NULL, '2021-07-07 02:55:00', 'not available'),
(132, 'Pro Three sixty Diabetic Care Powder Real Badam', 'GNM Healthcare Pvt Ltd', 49, 50, 'this diabeties care product  purchase the product not only regreting of not havingsugary tasty this supplement help to enhance your taste badam flavour.', '2021-06-09', '2025-08-08', 616.00, NULL, NULL, 'images/pro 360.jpg', NULL, '2021-07-07 05:17:00', '500 gm'),
(133, 'Dr Oxyn Silver Diabetic  Care Socks', 'Monatc Lifestyle', 49, 50, 'these socks protect the diabetic patient from injury socks are very soft  as if no wound or injury occur to diabetic patient as recovery of wounds are littleslow and difficult.', '0000-00-00', '0000-00-00', 346.00, NULL, NULL, 'images/socks.jpg', NULL, '2021-07-07 05:19:20', '1 pair'),
(134, 'John  burn Care Kit', 'St John first Aid Kit Pvt Ltd', 49, 51, 'this is first aid kit  in which all needed medcines dressing everthing related first aid kit as name signifiesfirst aid kit.', '0001-01-01', '0001-01-01', 1584.00, NULL, NULL, 'images/john.jpg', NULL, '2021-07-07 05:22:45', 'not defines'),
(135, 'Vinodine Povidone Iodine Anti Septic Germicidal', 'Midas Care Pharmaceutical Pvt Ltd', 49, 51, 'this is alsoan skin injury ligament lubrican protect us  from skin infection helps to treat our skin wounds.', '2021-06-09', '2023-07-09', 225.00, NULL, NULL, 'images/vinola.jpg', NULL, '2021-07-07 05:25:31', '80 ml'),
(137, 'MOOV Pain Relief Specialist Cream', 'Reckitt Benckiser India Ltd', 49, 52, 'this is pain relief ointment which prevent muscles pain cramsload pain  in every time of bones related pains it act relief agent to prevent pain', '0000-00-00', '0000-00-00', 118.00, NULL, NULL, 'images/moov.jpg', NULL, '2021-07-07 05:28:08', '30 gm'),
(139, 'Navalgin NV Tablet', 'Sonafi Indian limited', 49, 52, 'this  tablet prevent for excessive joint wear and tear by inhabiting glycosaminoglycan degradation.', '2021-05-07', '2025-07-08', 30.00, NULL, NULL, 'images/novalgin.jpg', NULL, '2021-07-07 05:30:56', '100 tablet'),
(140, 'Itch Guard Cream', 'Reckitt Benckiser India Ltd', 49, 53, 'this is antifungal cream to treat itching commonly associated with many fungal infections', '2021-05-07', '2024-07-04', 95.00, NULL, NULL, 'images/itch.jpg', NULL, '2021-07-07 05:33:40', '20 gm'),
(141, 'Candid Dustin Powder', 'Glenmark pharmaceutical Ltd', 49, 53, 'this is antifungal powder to treat itching commonly associated with many fungal infections.', '2021-01-09', '2026-08-05', 99.00, NULL, NULL, 'images/candid.jpg', NULL, '2021-07-07 05:36:40', '100 gm'),
(142, 'ENO fruit Salt', 'GSk Consumer Healthcare', 49, 54, 'this is today gastric problem medicine eno  prevent acidity  only in two minutes it act fast and effectice', '2021-02-07', '2023-05-03', 9.00, NULL, NULL, 'images/eno.jpg', NULL, '2021-07-07 05:39:36', '5 gm'),
(144, 'Digene Ultra Fizz Sachet Lemon Flavour', 'Abboott India limited', 49, 54, 'this is adigene help in digestion of food even when overeating problems can be recovered with this one tablespoon of digine help prevent various stomach problems', '2021-02-02', '2024-07-05', 10.00, NULL, NULL, 'images/digene.jpg', NULL, '2021-07-07 05:42:56', '6.25 gm'),
(145, 'Health Aid digeston papaya and digestive enzymes tablet', 'Radicura Pharmaceutical pvt ltd', 49, 55, 'this is adigestive papaya enzyme  extracting papays to fulfill the basic health digestion and constipation problem get resoved', '2021-04-04', '2022-08-03', 124.00, NULL, NULL, 'images/digeston.jpg', NULL, '2021-07-07 06:09:51', '60  tablets'),
(146, 'creamaffin syrup  for constipation relief  mixed fruit flavour', 'Abboott India limited', 49, 55, 'this special syrup for constipation as we known all problem starts from stomatch if stamatch is healthy we are healthy.', '2021-03-02', '2025-03-04', 191.00, NULL, NULL, 'images/creamaffin.jpg', NULL, '2021-07-07 06:14:07', '225 ml'),
(147, 'Vicks Inhaler ', 'Procter and Gamble', 49, 56, 'this prevent the nostrile irritation problem during cold the management of refreshen yur smelling power open bronchia.', '2021-02-02', '2024-04-03', 55.00, NULL, NULL, 'images/inhaler.jpg', NULL, '2021-07-07 06:16:27', '0.5 ml'),
(148, 'dr Morepen lemolate Gold  Syrup', 'Dr morepen ', 49, 56, 'it is used for treatment of common cold symptoms', '2021-03-03', '2023-05-02', 66.00, NULL, NULL, 'images/lemolate.jpg', NULL, '2021-07-07 06:18:35', '100 ml'),
(149, 'Jiva Ashwagandha Tablet', 'Jiva Ayurvedic Pharmacy ltd.', 34, 35, ' Jiva Ashvagandha tablets are made from pure root extracts of herb.', '2020-02-05', '2023-05-04', 180.00, NULL, NULL, 'images/jiva.jpg', NULL, '2021-07-07 07:41:43', '120 tablets');
INSERT INTO `tab_product` (`product_id`, `product_name`, `product_company`, `parent_category`, `sub_category`, `product_description`, `manufactured_date`, `expiry_date`, `product_price`, `user_id`, `user_type`, `product_image`, `available`, `creation_date`, `product_size`) VALUES
(150, 'Himalayas Liv fifty two HB capsule', 'Himalayas drug Company', 34, 35, ' The ginger, garlic,lemon ,honey, and apple cider vinegar blended drink is believed to unclog the fat and provide multiple health benefits .It help in weight loss, fungal infections, improves immunity, enhances digestion.', '2021-02-09', '2024-03-03', 116.00, NULL, NULL, 'images/liv52.jpg', NULL, '2021-07-07 07:44:24', '10 capsules'),
(151, 'Baidyanath Basant Kusumarkar Ras with Gold Silver and pearl', 'Shree Baidyanath Ayurved Bhawan  Pvt Ltd', 34, 35, 'thisAyurveda is house of holistic herbs that promotes use of natural product for wellness of your body.it authentic ayurvedic product helps to cure many health problems in natural way.', '2020-01-02', '2024-04-02', 559.00, NULL, NULL, 'images/baidyanath.jpg', NULL, '2021-07-07 07:47:40', '10 tablets'),
(152, 'Himalayas Septilin Tablet', 'Himalaya Drug Company', 34, 37, ' The ginger, garlic,lemon ,honey, and apple cider vinegar blended drink is believed to unclog the fat and provide multiple health benefits .It help in weight loss, fungal infections, improves immunity, enhances digestion.', '2021-02-09', '2025-04-03', 240.00, NULL, NULL, 'images/septilin.jpg', NULL, '2021-07-07 07:50:02', '60  tablets'),
(153, 'Patanjali VADMANS medohar vati', 'Patanjali', 34, 37, 'patanjali chwanprash stimulates appetite and is good remedy for anaemia. antioxidants rich tonic keeps the heart and body healthy and young.It is highly beneficial against degenerativedisease like diabetes, arthritis,dementia,etc. it aids in', '2021-01-09', '2028-04-03', 225.00, NULL, NULL, 'images/madar vati.jpg', NULL, '2021-07-07 07:52:25', '3x100 tablets'),
(154, 'Dabur Pudin hara Pear', 'Dabur  India Ltd', 34, 37, 'patanjali chwanprash stimulates appetite and is good remedy for anaemia. antioxidants rich tonic keeps the heart and body healthy and young.It is highly beneficial against degenerativedisease like diabetes, arthritis,dementia,etc. it aids in the digestion of food and absorption of nutrients.', '2021-07-01', '2024-05-04', 24.00, NULL, NULL, 'images/pudin hera.jpg', NULL, '2021-07-07 07:55:10', '10 tablets'),
(155, 'Neera KFT Syrup SugarFree', 'Aimil Pharmaceutical India ltd', 34, 37, 'this is house of holistic herbs that promotes use of natural product for wellness of your body.it authentic ayurvedic product helps to cure many health problems in natural way.', '2021-03-09', '2027-03-02', 416.00, NULL, NULL, 'images/neeri kft.jpg', NULL, '2021-07-07 07:58:20', '200 ml'),
(156, 'ADEL Diacard Gold Madaus Drop', 'Adel Pekana Germany', 38, 39, 'this  relaxing reverie of aroma under the shower from enchanting the sense with its pleasant aroma to cleansing , polmolive shower gel have whatever you  are looking for to relax and unwind. contain perfect blend of exotic ylang  ylang essential oil and iris extract, it provides you the essence of blissful shower moment, immerse yourself in the smoothing fragrance of this relaxing palmolive body wash that helps unveil the new you with every blissful shower moment.', '2020-05-09', '2025-04-03', 494.00, NULL, NULL, 'images/adel.jpg', NULL, '2021-07-07 08:01:08', '25 ml'),
(157, 'SBL Nux Vomica Dilution', 'SBL pvt ltd', 38, 39, 'almolive body wash gel relaxing reverie of aroma under the shower from enchanting the sense with its pleasant aroma to cleansing , polmolive shower gel have whatever you  are looking for to relax and unwind. contain perfect blend of exotic ylang  ylang essential oil and iris extract, it provides you the essence of blissful shower moment, immerse yourself in the smoothing fragrance of this relaxing palmolive body wash that helps unveil the new you with every blissful shower moment.almolive body wash gel relaxing reverie of aroma under the shower from enchanting the sense with its pleasant aroma to cleansing , polmolive shower gel have whatever you  are looking for to relax and unwind. contain perfect blend of exotic ylang  ylang essential oil and iris extract, it provides you the essence of this fragrance of this relaxing palmolive body wash that helps unveil the new you with every blissful shower momen', '2021-03-09', '2027-04-03', 87.00, NULL, NULL, 'images/nux.jpg', NULL, '2021-07-07 08:10:55', '30 ml drop'),
(158, 'Bhargava Spondin Drop', 'Bhargav  Phyto lab', 38, 40, 'this medicine deals with bones joint and catilagous bones tp help and prevent desiease.', '2020-05-09', '2026-04-09', 162.00, NULL, NULL, 'images/spondil.jpg', NULL, '2021-07-07 08:13:57', '30 ml drop'),
(159, 'SBL Caladium  seguinum', 'SBL pvt ltd', 38, 40, 'this is a homeopathis caladium medicines tdilution trear male genital organ', '2021-05-09', '2025-04-04', 100.00, NULL, NULL, 'images/dilute.jpg', NULL, '2021-07-07 08:15:55', '300ml'),
(160, 'BJAIN Kali Phosphoricum   tablet', ' BJAIN biochemical pvt ltd', 38, 40, 'it is useful for patientd suffering from bad breath and in chidren it prevents bed wetting', '2021-04-09', '2027-04-04', 92.00, NULL, NULL, 'images/bajain.jpg', NULL, '2021-07-07 08:21:27', '25 ml'),
(162, 'Dr Reckweg Hair Care Drop', 'Dr Reckweg and Co', 38, 41, 'almolive body wash gel relaxing reverie of aroma under the shower from enchanting the sense with its pleasant aroma to cleansing , polmolive shower gel have whatever you  are looking for to relax and unwind. contain perfect blend of exotic ylang  ylang essential oil and iris extract, it provides you the essence of blissful shower moment, immerse yourself in the smoothing fragrance of this relaxing palmolive body wash that helps unveil the new you with every blissful shower moment.', '2021-01-02', '2025-03-09', 271.00, NULL, NULL, 'images/reckeweg.jpg', NULL, '2021-07-07 08:23:46', '30 ml drop'),
(163, 'Bakson s throat  aid tablet', 'Bakson s Homeopathy', 38, 41, 'this is a homeopathic product  deal with throat problems cough,cold toncens with this prevent our body ifectious viruses by providing one drop of this medicine', '2021-04-09', '2025-04-06', 179.00, NULL, NULL, 'images/throat.jpg', NULL, '2021-07-07 08:25:42', '75 tablet'),
(164, 'Canyearn Medical', 'Canyearn', 1, 3, '', '0000-00-00', '0000-00-00', 4205.00, NULL, NULL, 'images/canyearn_medical_infrared_thermometer_0_0.jpg', NULL, '2021-07-08 05:29:54', 'not applicable'),
(165, 'Sahyog Wellness Digital Thermometer', 'Sahyog Wellness', 1, 3, '', '0000-00-00', '0000-00-00', 120.00, NULL, NULL, 'images/sahyog_wellness_digital_thermometer_0_0 (1).jpg', NULL, '2021-07-08 05:31:36', 'not applicable'),
(166, '1 Mile Protective Fcae Shield', '1 Mile Mealtcare', 1, 3, '', '0000-00-00', '0000-00-00', 129.00, NULL, NULL, 'images/1mile_protective_face_shield_be_alert_400_micron_10s_0_0.jpg', NULL, '2021-07-08 05:33:31', 'not applicable');

-- --------------------------------------------------------

--
-- Table structure for table `tab_product_image`
--

CREATE TABLE `tab_product_image` (
  `id` int(11) NOT NULL,
  `image_title` varchar(200) DEFAULT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  `product_id` int(20) DEFAULT NULL,
  `available` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_product_image`
--

INSERT INTO `tab_product_image` (`id`, `image_title`, `image_path`, `product_id`, `available`, `creation_date`) VALUES
(6, 'Tri-active', 'images/tri_activ_instant_hand_sanitizer_500_ml_2_0.jpg', 4, 1, '2021-07-09 07:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `tab_product_size`
--

CREATE TABLE `tab_product_size` (
  `size_id` int(11) NOT NULL,
  `size_title` varchar(200) DEFAULT NULL,
  `size_description` varchar(50) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_unit` varchar(200) DEFAULT NULL,
  `available` tinyint(11) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tab_shipping`
--

CREATE TABLE `tab_shipping` (
  `id` int(255) NOT NULL,
  `order_id` varchar(500) DEFAULT NULL,
  `customer_id` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `house_no` varchar(500) DEFAULT NULL,
  `street` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_admin`
--
ALTER TABLE `tab_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tab_cart`
--
ALTER TABLE `tab_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_category`
--
ALTER TABLE `tab_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tab_company`
--
ALTER TABLE `tab_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `tab_consultation`
--
ALTER TABLE `tab_consultation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_customer`
--
ALTER TABLE `tab_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tab_customer_profile`
--
ALTER TABLE `tab_customer_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `tab_expert_advisor`
--
ALTER TABLE `tab_expert_advisor`
  ADD PRIMARY KEY (`expert_id`);

--
-- Indexes for table `tab_expert_profile`
--
ALTER TABLE `tab_expert_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `tab_offer`
--
ALTER TABLE `tab_offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `tab_order`
--
ALTER TABLE `tab_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_order_item`
--
ALTER TABLE `tab_order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_payment`
--
ALTER TABLE `tab_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_pharmacist`
--
ALTER TABLE `tab_pharmacist`
  ADD PRIMARY KEY (`pharmacist_id`);

--
-- Indexes for table `tab_pharmacist_profile`
--
ALTER TABLE `tab_pharmacist_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `tab_product`
--
ALTER TABLE `tab_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tab_product_image`
--
ALTER TABLE `tab_product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_product_size`
--
ALTER TABLE `tab_product_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `tab_shipping`
--
ALTER TABLE `tab_shipping`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_admin`
--
ALTER TABLE `tab_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_cart`
--
ALTER TABLE `tab_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tab_category`
--
ALTER TABLE `tab_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tab_company`
--
ALTER TABLE `tab_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tab_consultation`
--
ALTER TABLE `tab_consultation`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_customer`
--
ALTER TABLE `tab_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_customer_profile`
--
ALTER TABLE `tab_customer_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_expert_advisor`
--
ALTER TABLE `tab_expert_advisor`
  MODIFY `expert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tab_expert_profile`
--
ALTER TABLE `tab_expert_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tab_offer`
--
ALTER TABLE `tab_offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tab_order`
--
ALTER TABLE `tab_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_order_item`
--
ALTER TABLE `tab_order_item`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tab_payment`
--
ALTER TABLE `tab_payment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_pharmacist`
--
ALTER TABLE `tab_pharmacist`
  MODIFY `pharmacist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tab_pharmacist_profile`
--
ALTER TABLE `tab_pharmacist_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_product`
--
ALTER TABLE `tab_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `tab_product_image`
--
ALTER TABLE `tab_product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tab_product_size`
--
ALTER TABLE `tab_product_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tab_shipping`
--
ALTER TABLE `tab_shipping`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
