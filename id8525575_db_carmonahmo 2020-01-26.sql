-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 07:28 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8525575_db_carmonahmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `hmo_about`
--

CREATE TABLE `hmo_about` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_about`
--

INSERT INTO `hmo_about` (`id`, `name`, `description`, `status`) VALUES
(1, 'name', 'Municipal Health Office - Carmona', 0),
(2, 'history', 'Advancement\r\nWe\'re committed to setting ambitious goals and move healthcare and our communities forward\r\n\r\nInclusiveness\r\nEveryone working together collaboratively\r\n\r\nRespect\r\nIn our regard for, and actions toward, our communities, patients and each other\r\n\r\nResponsibility\r\nActing in honest, forthright and fiscally responsible ways', 0),
(3, 'mission', 'The Mission of Reading Hospital is to provide compassionate, accessible, high quality, cost effective healthcare to the community; to promote health; to educate healthcare professionals; and to participate in appropriate clinical research.', 0),
(4, 'vission', 'Reading Hospital will be an innovative, leading regional health system dedicated to advancing the health and transforming the lives of the people we serve through excellent clinical quality; accessible, patient-centered, caring service; and unmatched physician and employee commitment.', 0),
(5, 'address', 'J.M. Loyola St. Brgy. 4 Carmona Cavite', 0),
(6, 'contact number', '(046) 430-3010', 0),
(7, 'image_path', '/resources/frontend/img/arms-care-check-905874.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_activity`
--

CREATE TABLE `hmo_activity` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `day` varchar(32) NOT NULL,
  `time` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_activity`
--

INSERT INTO `hmo_activity` (`id`, `name`, `description`, `day`, `time`, `status`) VALUES
(1, 'CONSULTATION', 'this is sample text', 'Monday-Friday', '8:00AM-5:00PM', 0),
(2, 'IMMUNIZATION/WELL BABY', '', 'Wednesday', '1:00PM', 0),
(3, 'PRENATAL', '', 'Friday', '8:00AM-5:00PM', 0),
(4, 'FAMILY PLANNING SEMINAR', '', 'Tuesday', '1:00PM', 0),
(5, 'PHYSICAL THERAPY CLINIC/ SPEECH/OT CLINIC', '', 'Monday-Friday', '8:00AM-5:00PM', 0),
(6, 'CLINICAL LABORATORY', '', 'Monday-Friday', '8:00AM-5:00PM', 0),
(7, 'DENTAL CLINIC', 'Description', 'Monday-Friday', '8:00AM-5:00PM', 0),
(8, 'DOTS CLINIC', '', 'Monday-Friday', '8:00AM-5:00PM', 0),
(9, 'WATER LABORATORY', '', 'Monday-Friday', '8:00AM-5:00PM', 0),
(10, 'PHARMACY', '', 'Monday-Friday', '8:00AM-5:00PM', 0),
(11, 'HEALTH CARD/PERMIT/CERTIFICATES', '', 'Monday-Friday', '8:00AM-5:00PM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_appointment`
--

CREATE TABLE `hmo_appointment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `complaint_id` int(11) NOT NULL,
  `scheduled_date` date NOT NULL,
  `scheduled_time` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `notified` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_appointment`
--

INSERT INTO `hmo_appointment` (`id`, `user_id`, `complaint_id`, `scheduled_date`, `scheduled_time`, `description`, `date_created`, `status`, `notified`) VALUES
(1, 1, 5, '2019-11-20', '10:00 AM', 'headache', '2019-11-10 05:22:29', 0, 0),
(2, 32, 5, '2019-11-13', '9:00 AM', 'test', '2019-11-10 05:53:37', 3, 0),
(3, 33, 1, '2019-11-29', '2:00 PM', 'none', '2019-11-11 01:18:20', 3, 0),
(4, 34, 6, '2019-11-22', '10:00 AM', 'pain', '2019-11-11 01:20:56', 3, 1),
(5, 35, 4, '2019-11-19', '9:00 AM', 'bleeding', '2019-11-11 01:22:33', 3, 0),
(6, 36, 4, '2019-11-14', '1:00 PM', 'none', '2019-11-11 01:31:19', 3, 0),
(7, 37, 2, '2019-11-13', '1:00 PM', 'pain', '2019-11-11 01:32:44', 3, 0),
(8, 39, 1, '2019-11-13', '12:00 NN', 'none', '2019-11-11 05:22:06', 3, 0),
(9, 40, 6, '2019-11-14', '8:00 AM', 'PAIN', '2019-11-11 12:24:02', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_archieve`
--

CREATE TABLE `hmo_archieve` (
  `id` int(11) NOT NULL,
  `date_archieve` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hmo_birthing`
--

CREATE TABLE `hmo_birthing` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `chief_complaint` text NOT NULL,
  `start_of_pregnancy` date NOT NULL,
  `end_of_pregnancy` date NOT NULL,
  `guardian_name` varchar(128) NOT NULL,
  `guardian_civil_status` varchar(32) NOT NULL,
  `guardian_gender` tinyint(1) NOT NULL,
  `guardian_contact` varchar(32) NOT NULL,
  `guardian_age` tinyint(3) NOT NULL,
  `guardian_relationship` varchar(32) NOT NULL,
  `guardian_address` text NOT NULL,
  `date_added` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing`
--

INSERT INTO `hmo_birthing` (`id`, `patient_id`, `chief_complaint`, `start_of_pregnancy`, `end_of_pregnancy`, `guardian_name`, `guardian_civil_status`, `guardian_gender`, `guardian_contact`, `guardian_age`, `guardian_relationship`, `guardian_address`, `date_added`, `status`) VALUES
(1, 8, 'headache', '2019-11-08', '2019-11-14', 'john doe', '1', 1, 'N/A', 33, '1', 'GMA', '2019-11-10 05:24:22', 0),
(2, 9, 'Test', '2019-11-04', '2019-11-05', 'Rhevie Serad', '2', 2, '09287323427', 42, '2', 'Milagrosa,carmona,cavite', '2019-11-10 12:45:55', 0),
(3, 33, 'none', '2019-02-23', '2019-12-09', 'ana', '1', 2, '09878765454', 25, '2', 'carmona', '2019-11-11 01:27:30', 0),
(4, 34, 'none', '2019-04-27', '2019-11-29', 'marie', '1', 2, '09987655', 35, '2', 'bancal', '2019-11-11 01:29:39', 0),
(5, 38, 'none', '2019-08-09', '2020-04-21', 'rosalie', '1', 2, '09876654434', 42, '2', 'none', '2019-11-11 01:37:47', 0),
(6, 38, 'pain', '2019-01-21', '2019-10-25', 'jun', '2', 1, '4654564156456', 31, '4', 'none', '2019-11-11 01:38:45', 0),
(7, 36, 'none', '2019-01-25', '2019-10-28', 'mario', '2', 1, '2454235236', 45, '5', 'milagrosa', '2019-11-11 01:39:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_birthing_assessment`
--

CREATE TABLE `hmo_birthing_assessment` (
  `id` int(11) NOT NULL,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `assessment` text NOT NULL,
  `chief_complaint` text NOT NULL,
  `intervention` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing_assessment`
--

INSERT INTO `hmo_birthing_assessment` (`id`, `birthing_id`, `date`, `assessment`, `chief_complaint`, `intervention`, `status`) VALUES
(1, 1, '2019-11-10', 'test', 'test', 'test\r\n', 0),
(2, 3, '2019-11-11', 'none', 'none', 'none', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_birthing_intravenous_fluid`
--

CREATE TABLE `hmo_birthing_intravenous_fluid` (
  `id` int(11) NOT NULL,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `bag_no` int(11) NOT NULL,
  `solution` varchar(256) NOT NULL,
  `blood` varchar(256) NOT NULL,
  `time_started` time NOT NULL,
  `time_end` time NOT NULL,
  `remarks` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing_intravenous_fluid`
--

INSERT INTO `hmo_birthing_intravenous_fluid` (`id`, `birthing_id`, `date`, `bag_no`, `solution`, `blood`, `time_started`, `time_end`, `remarks`, `status`) VALUES
(1, 1, '2019-11-10', 7, '87', '878', '07:08:00', '20:09:00', '7', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_birthing_monitoring_sheet`
--

CREATE TABLE `hmo_birthing_monitoring_sheet` (
  `id` int(11) NOT NULL,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `blood_pressure` varchar(32) NOT NULL,
  `pulse` varchar(32) NOT NULL,
  `respiration` varchar(32) NOT NULL,
  `urine_output` varchar(64) NOT NULL,
  `cvp_level` varchar(32) NOT NULL,
  `others` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing_monitoring_sheet`
--

INSERT INTO `hmo_birthing_monitoring_sheet` (`id`, `birthing_id`, `date`, `blood_pressure`, `pulse`, `respiration`, `urine_output`, `cvp_level`, `others`, `status`) VALUES
(1, 1, '2019-11-10', '67', '6', '87678', '678', '678', '67', 0),
(2, 3, '2019-11-11', 'none', 'none', 'none', 'noen', 'nnoe', 'none', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_birthing_newborn`
--

CREATE TABLE `hmo_birthing_newborn` (
  `id` int(11) NOT NULL,
  `birthing_id` int(11) NOT NULL,
  `baby_name` varchar(128) NOT NULL,
  `date_delivered` date NOT NULL,
  `time_delivered` time NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `delivery_type` tinyint(1) NOT NULL,
  `weight` varchar(32) NOT NULL,
  `apgar_score` varchar(32) NOT NULL,
  `head_circumference` varchar(32) NOT NULL,
  `abdominal_circumference` varchar(32) NOT NULL,
  `chest_circumference` varchar(32) NOT NULL,
  `body_length` varchar(32) NOT NULL,
  `procedures` text NOT NULL,
  `medications` text NOT NULL,
  `remarks` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing_newborn`
--

INSERT INTO `hmo_birthing_newborn` (`id`, `birthing_id`, `baby_name`, `date_delivered`, `time_delivered`, `gender`, `delivery_type`, `weight`, `apgar_score`, `head_circumference`, `abdominal_circumference`, `chest_circumference`, `body_length`, `procedures`, `medications`, `remarks`, `status`) VALUES
(1, 1, '7878', '0007-09-08', '08:07:00', 1, 1, '987', '7', '897', '987', '89', 'i8', '8', '789', '798', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_birthing_physician_order`
--

CREATE TABLE `hmo_birthing_physician_order` (
  `id` int(11) NOT NULL,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `prescription` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing_physician_order`
--

INSERT INTO `hmo_birthing_physician_order` (`id`, `birthing_id`, `date`, `prescription`, `status`) VALUES
(1, 1, '2019-11-28', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_birthing_weight_progress`
--

CREATE TABLE `hmo_birthing_weight_progress` (
  `id` int(11) NOT NULL,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `weight` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing_weight_progress`
--

INSERT INTO `hmo_birthing_weight_progress` (`id`, `birthing_id`, `date`, `weight`, `status`) VALUES
(1, 1, '2019-11-15', '321', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_complaint`
--

CREATE TABLE `hmo_complaint` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `department` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_complaint`
--

INSERT INTO `hmo_complaint` (`id`, `name`, `description`, `department`, `status`) VALUES
(1, 'tB', 'something is good', '[\"1\",\"2\",\"8\"]', 0),
(2, 'sample', 'sample', '', 0),
(3, 'dental', 'dental', '', 1),
(4, 'cancer warrior', 'lorem ipsum desktop', '', 0),
(5, 'Broken Legs', 'this is a test', '', 0),
(6, 'atritis', 'bone issue', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_dental`
--

CREATE TABLE `hmo_dental` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `chief_complaint` text,
  `medical_history` text,
  `dental_history` text,
  `treatment` text,
  `diagnosis` text,
  `oral_condition` text NOT NULL,
  `dental_health` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_dental`
--

INSERT INTO `hmo_dental` (`id`, `patient_id`, `date`, `chief_complaint`, `medical_history`, `dental_history`, `treatment`, `diagnosis`, `oral_condition`, `dental_health`, `status`) VALUES
(1, 13, '2019-11-10', '[\"Pain\",\"Swelling\",\"\"]', '[\"Heart Ailment\",\"\"]', '[\"Oral Prophylaxis\",\"\"]', '97', '77', '{\"date\":[\"0079-08-09\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}', '[{\"tooth_number\":\"82\",\"treatment\":\"\"}]', 0),
(2, 11, '2019-11-10', '[\"Pain\",\"\"]', '[\"Heart Ailment\",\"\"]', '[\"Permanent Filling\",\"\"]', 'None', 'None', '{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}', '[{\"tooth_number\":\"18\",\"treatment\":\"FILL\"}]', 0),
(3, 14, '2019-11-10', '[\"Checkup\",\"\"]', '[\"Heart Ailment\",\"\"]', '[\"Permanent Filling\",\"\"]', 'None', 'None', '{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}', '[{\"tooth_number\":\"47\",\"treatment\":\"SEALANT\"}]', 0),
(4, 15, '2019-11-10', '[\"Pain\",\"\"]', '[\"Anemia\",\"\"]', '[\"RCT\",\"\"]', 'None', 'None', '{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}', '[{\"tooth_number\":\"42\",\"treatment\":\"PONTICS\"}]', 0),
(5, 16, '2019-11-10', '[\"Headache\",\"\"]', '[\"Diabetes\",\"\"]', '[\"Alveolectomy\",\"\"]', 'None', 'None', '{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}', '[{\"tooth_number\":\"36\",\"treatment\":\"INDICATED FOR EXO\"}]', 0),
(6, 17, '2019-11-10', '[\"Checkup\",\"\"]', '[\"Allergies\",\"\"]', '[\"RCT\",\"\"]', 'None', 'None', '{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}', '[{\"tooth_number\":\"38\",\"treatment\":\"SEALANT\"}]', 0),
(7, 36, '2019-11-11', '[\"Pain\",\"Swelling\",\"Decayed\",\"\"]', '[\"Allergies\",\"Diabetes\",\"\"]', '[\"Temporary Filling\",\"Oral Prophylaxis\",\"\"]', '', '', '{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}', '[{\"tooth_number\":\"45\",\"treatment\":\"FILL\"},{\"tooth_number\":\"54\",\"treatment\":\"FILL\"},{\"tooth_number\":\"32\",\"treatment\":\"\"},{\"tooth_number\":\"33\",\"treatment\":\"\"},{\"tooth_number\":\"34\",\"treatment\":\"\"}]', 0),
(8, 33, '2019-11-11', '[\"Bleeding\",\"Headache\",\"\"]', '[\"Heart Ailment\",\"Allergies\",\"\"]', '[\"Temporary Filling\",\"Oral Prophylaxis\",\"\"]', 'gjhg', 'ghjgjh', '{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}', '[{\"tooth_number\":\"63\",\"treatment\":\"CAVITY\"},{\"tooth_number\":\"34\",\"treatment\":\"CAVITY\"},{\"tooth_number\":\"53\",\"treatment\":\"EXTRACTED\"},{\"tooth_number\":\"42\",\"treatment\":\"EXTRACTED\"},{\"tooth_number\":\"61\",\"treatment\":\"EXTRACTED\"}]', 0),
(9, 35, '2019-11-11', '[\"Checkup\",\"\"]', '[\"Anemia\",\"\"]', '[\"RCT\",\"\"]', '', '', '{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}', '[{\"tooth_number\":\"74\",\"treatment\":\"\"},{\"tooth_number\":\"23\",\"treatment\":\"\"}]', 0),
(10, 17, '2019-11-11', '[\"Pain\",\"\"]', '[\"Heart Ailment\",\"\"]', '[\"Temporary Filling\",\"\"]', '', '', '{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}', '[{\"tooth_number\":\"83\",\"treatment\":\"EXTRACTED\"},{\"tooth_number\":\"42\",\"treatment\":\"EXTRACTED\"}]', 0),
(11, 36, '2019-11-11', '[\"Swelling\",\"\"]', '[\"Epilepsy\",\"\"]', '[\"Alveolectomy\",\"\"]', '', '', '{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}', '[{\"tooth_number\":\"22\",\"treatment\":\"\"},{\"tooth_number\":\"14\",\"treatment\":\"\"}]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_department`
--

CREATE TABLE `hmo_department` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_department`
--

INSERT INTO `hmo_department` (`id`, `user_id`, `name`, `description`, `status`) VALUES
(1, 1, 'Birthing Department', 'sample', 0),
(2, 1, 'water laboratory department', 'sample', 0),
(4, 1, 'dental Department', 'sample', 0),
(8, 1, 'clinic laboratory', 'this is a test', 0),
(9, 1, 'Physical Medicine and Rehabilitation', 'this is a test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_dots`
--

CREATE TABLE `hmo_dots` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `name_of_collection_unit` varchar(255) DEFAULT NULL,
  `date_of_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `telephone_number` bigint(20) DEFAULT NULL,
  `history_of_treatment` text,
  `disease_classification` text,
  `reason_for_examination` text,
  `type_of_specimen` text,
  `test_requested` text,
  `specimen` text,
  `date_of_collection` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_dots`
--

INSERT INTO `hmo_dots` (`id`, `patient_id`, `name_of_collection_unit`, `date_of_request`, `age`, `sex`, `telephone_number`, `history_of_treatment`, `disease_classification`, `reason_for_examination`, `type_of_specimen`, `test_requested`, `specimen`, `date_of_collection`) VALUES
(1, 11, '676', '2019-11-10 05:48:35', 78, '1', 76, '{\"0\":\"News\",\"1\":\"Transfer-in\",\"others\":\"\"}', '\"null\"', '\"null\"', '{\"others\":\"\"}', '\"null\"', NULL, NULL),
(2, 14, 'Testing', '2019-11-10 12:47:44', 32, '1', 18002882020, '{\"0\":\"News\",\"others\":\"\"}', '[\"Pulmonary\"]', '[\"Diagnosis\"]', '{\"0\":\"Sputum\",\"others\":\"\"}', '[\"DSSM\"]', NULL, NULL),
(3, 33, '', '2019-11-11 01:46:22', 21, '2', 13324124, '{\"0\":\"News\",\"1\":\"Relapse\",\"others\":\"\"}', '[\"Extra-pulmonary\"]', 'null', '{\"0\":\"Sputum\",\"others\":\"\"}', '[\"DSSM\",\"Xpert MTB\\/RIF\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_dots_opd_record`
--

CREATE TABLE `hmo_dots_opd_record` (
  `id` int(11) NOT NULL,
  `dots_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bp` varchar(255) DEFAULT NULL,
  `wt` varchar(255) DEFAULT NULL,
  `pr` varchar(255) DEFAULT NULL,
  `rr` varchar(255) DEFAULT NULL,
  `t` varchar(255) DEFAULT NULL,
  `S` text,
  `O` text,
  `A` text,
  `P` text,
  `smoking_hx` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hmo_dots_tb_treatment`
--

CREATE TABLE `hmo_dots_tb_treatment` (
  `id` int(11) NOT NULL,
  `dots_id` int(11) DEFAULT NULL,
  `tb_case_number` int(11) DEFAULT NULL,
  `region` text,
  `name_of_dots_facility` text,
  `bcg_scar` text,
  `other_patient_details` text,
  `diagnostic_test` text,
  `diagnosis` text,
  `history_of_anti_tb_drug_intake` text,
  `bacteriological_status` text,
  `classification_of_tb_disease` text,
  `registeration_group` text,
  `treatment_started` text,
  `treatment_outcome` text,
  `clinical_examination_before_and_during_treatment` text,
  `dosage_and_preperation` text,
  `date_the_card_was_opened` text,
  `source_of_patient` text,
  `house_hold_members` text,
  `tb_disease_treatment_regimen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hmo_fecalysis`
--

CREATE TABLE `hmo_fecalysis` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `color` varchar(256) NOT NULL,
  `consistency` varchar(256) NOT NULL,
  `pus_cells` varchar(256) NOT NULL,
  `red_cells` varchar(256) NOT NULL,
  `fat_globules` varchar(256) NOT NULL,
  `yeast_cells` varchar(256) NOT NULL,
  `bateria` varchar(256) NOT NULL,
  `starch_granules` varchar(256) NOT NULL,
  `muscle_fiber` varchar(256) NOT NULL,
  `vegetable_cells` varchar(256) NOT NULL,
  `parasite` text NOT NULL,
  `amoeba` text NOT NULL,
  `others` text NOT NULL,
  `date_created` date NOT NULL,
  `pathologist_id` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_fecalysis`
--

INSERT INTO `hmo_fecalysis` (`id`, `patient_id`, `staff_id`, `color`, `consistency`, `pus_cells`, `red_cells`, `fat_globules`, `yeast_cells`, `bateria`, `starch_granules`, `muscle_fiber`, `vegetable_cells`, `parasite`, `amoeba`, `others`, `date_created`, `pathologist_id`, `status`) VALUES
(1, 9, 1, '89', '89', '8', '908', '9', '8', '098', '98', '98', '989', '890', '89', '89', '2019-11-10', 10, 1),
(2, 8, 1, 'Yellow', 'None', '12', '23', '34', '45', '12', '23', '12', '23', 'None', 'None', 'None', '2019-11-10', 1, 1),
(3, 16, 1, 'Red', 'None', '12', '34', '54', '33', '12', '23', '54', '43', 'None', 'None', 'None', '2019-11-10', 1, 1),
(4, 17, 1, 'Yellow', 'None', '43', '32', '43', '43', '10', '23', '54', '32', 'None', 'None', 'None', '2019-11-10', 1, 1),
(5, 13, 1, 'Res', 'None', '21', '32', '43', '32', '9', '54', '76', '43', 'None', 'None', 'None', '2019-11-10', 1, 1),
(6, 15, 1, 'Green', 'None', '33', '54', '54', '65', '43', '65', '76', '54', 'None', 'None', 'None', '2019-11-10', 1, 1),
(7, 32, 1, 'Brown', 'None', '43', '54', '65', '54', '43', '43', '54', '65', 'None', 'None', 'None', '2019-11-10', 1, 1),
(8, 38, 1, 'yellow', 'none', '23', '89', '32', '12', '34', '23', '2', '32', 'Clear', 'None', 'None', '2019-11-11', 1, 1),
(9, 35, 10, 'gihg', 'ghj', 'ghj', 'g', 'jhg', 'hj', 'g', 'hj', 'ghjghj', 'hg', 'hjg', 'hjghj', 'ghj', '2019-11-11', 10, 1),
(10, 17, 1, 'AD', 'F', 'HF', 'F', 'FG', 'FH', 'GF', 'HGF', 'GH', 'FG', 'F', 'GH', 'F', '2020-01-06', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_hematology`
--

CREATE TABLE `hmo_hematology` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `hemoglobin` varchar(32) NOT NULL,
  `hematocrit` varchar(32) NOT NULL,
  `leokocyte` varchar(32) NOT NULL,
  `erythrocyte` varchar(32) NOT NULL,
  `reticulocyte` varchar(32) NOT NULL,
  `platelet` varchar(32) NOT NULL,
  `esr` varchar(32) NOT NULL,
  `bleeding_time` varchar(32) NOT NULL,
  `clotting_time` varchar(32) NOT NULL,
  `bands` varchar(32) NOT NULL,
  `segmenters` varchar(32) NOT NULL,
  `eosinophil` varchar(32) NOT NULL,
  `basophil` varchar(32) NOT NULL,
  `lymphocytes` varchar(32) NOT NULL,
  `monocytes` varchar(32) NOT NULL,
  `nucleated_rbc` varchar(64) NOT NULL,
  `malarial_smear` varchar(64) NOT NULL,
  `toxic_granulation` text NOT NULL,
  `blood_rh_type` text NOT NULL,
  `others` text NOT NULL,
  `pathologist_id` tinyint(1) NOT NULL,
  `date_created` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_hematology`
--

INSERT INTO `hmo_hematology` (`id`, `patient_id`, `staff_id`, `hemoglobin`, `hematocrit`, `leokocyte`, `erythrocyte`, `reticulocyte`, `platelet`, `esr`, `bleeding_time`, `clotting_time`, `bands`, `segmenters`, `eosinophil`, `basophil`, `lymphocytes`, `monocytes`, `nucleated_rbc`, `malarial_smear`, `toxic_granulation`, `blood_rh_type`, `others`, `pathologist_id`, `date_created`, `status`) VALUES
(1, 12, 1, '789', '897', '897', '87', '8978', '7', '897', '8', '7', '89', '789', '78', '979', '87', '98', '7', '987', '8', '9878', '787', 10, '2019-11-10', 1),
(2, 9, 1, '43', '54', '43', '43', '32', '32', '21', '3:00', '2:00', '32', '21', '43', '21', '43', '32', '31', '21', 'None', 'B', 'None', 1, '2019-11-10', 1),
(3, 11, 1, '21', '33', '21', '22', '43', '21', '43', '1:00', '1:30', '21', '54', '54', '32', '55', '31', '54', '32', 'None', 'A', 'None', 1, '2019-11-10', 1),
(4, 12, 1, '22', '32', '22', '22', '43', '22', '43', '1:00', '3:00', '22', '43', '21', '43', '33', '22', '43', '43', 'None', 'O+', 'None', 1, '2019-11-10', 1),
(5, 13, 1, '43', '43', '22', '43', '32', '32', '22', '2:00', '2:05', '12', '43', '43', '32', '32', '32', '33', '32', 'None', 'A', 'None', 1, '2019-11-10', 1),
(6, 14, 1, '21', '43', '32', '22', '43', '32', '32', '2:03', '2:05', '33', '43', '43', '33', '43', '32', '65', '65', 'None', 'B', 'None', 1, '2019-11-10', 1),
(7, 15, 1, '44', '53', '43', '54', '64', '43', '54', '2:00', '2:01', '43', '43', '44', '54', '54', '54', '43', '43', 'None', 'b', 'None', 1, '2019-11-10', 1),
(8, 16, 1, '43', '43', '32', '44', '43', '65', '64', '1:03', '1:05', '54', '53', '42', '32', '32', '65', '54', '43', 'None', 'A', 'None', 1, '2019-11-10', 1),
(9, 17, 1, '43', '43', '43', '43', '21', '65', '54', '1:00', '1:02', '54', '21', '54', '32', '32', '54', '65', '54', 'None', 'O', 'None', 1, '2019-11-10', 1),
(10, 34, 1, '89', '6876', '789', '6876', '876', '876', '876', '78', '678', '68', '67', '678', '67', '86', '786', '7', '6', 'JIOKJ', '678', 'NONE', 10, '2019-11-11', 1),
(11, 33, 1, '67', '678', '678', '678', '678', '6', '8', '67', '86', '876', '786', '78', '678', '6', '87', '6', '786', '786', '67', '86', 1, '2019-11-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_medical`
--

CREATE TABLE `hmo_medical` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `assessment_date` date DEFAULT NULL,
  `chief_complaint` text,
  `primary_diagnosis` varchar(256) DEFAULT NULL,
  `clinical_history` text,
  `other_diagnosis` text,
  `treatment` text NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_medical`
--

INSERT INTO `hmo_medical` (`id`, `patient_id`, `assessment_date`, `chief_complaint`, `primary_diagnosis`, `clinical_history`, `other_diagnosis`, `treatment`, `date_created`, `status`) VALUES
(1, 11, '2019-11-22', '67', '68767', '687', '86', '76', '2019-11-10 05:50:16', 1),
(2, 32, '2019-11-15', 'Broken Legs', 'test', 'test', 'test', 'test', '2019-11-10 05:54:27', 1),
(3, 32, NULL, 'Broken Legs', 'test', 'test', 'test', 'test', '2019-11-10 05:56:19', 1),
(4, 35, '2019-11-12', 'bleeding', 'imjured', 'none', 'none', 'medicine', '2019-11-11 01:24:15', 1),
(5, 33, '2019-11-13', 'tB', 'none', 'none', 'none', 'medicine', '2019-11-11 01:25:05', 1),
(6, 34, '2019-10-21', 'atritis', 'none', 'none', 'none', 'none', '2019-11-11 01:25:48', 1),
(7, 35, '2018-09-08', 'cancer warrior', 'none', 'none', 'none', 'none', '2019-11-11 01:26:25', 1),
(8, 36, '2019-04-21', 'cancer warrior', 'none', 'none', 'none', 'none', '2019-11-11 01:35:52', 1),
(9, 37, '2019-09-10', 'sample', 'none', 'none', 'none', 'none', '2019-11-11 01:36:32', 1),
(10, 33, '2019-11-02', 'hkjh', 'jkh', 'jhjkh', 'jk', 'hjk', '2019-11-11 05:15:01', 1),
(11, 35, '2019-09-10', 'ghujg', 'jh', 'jhg', 'gjh', 'g', '2019-11-11 05:15:21', 1),
(12, 12, '2018-02-09', 'ghjk', 'hkj', 'hkj', 'hjk', 'hjk', '2019-11-11 05:15:45', 1),
(13, 16, '2019-09-08', 'gjhg', 'jh', 'jhg', 'gjh', 'gjh', '2019-11-11 05:16:14', 1),
(14, 17, '2018-01-02', 'ghkjh', 'jk', 'kjh', 'hjk', 'h', '2019-11-11 05:16:33', 1),
(15, 40, '2019-12-11', 'atritis', 'none', 'none', 'none', 'none', '2019-11-13 08:50:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_notification`
--

CREATE TABLE `hmo_notification` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `date_time` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_notification`
--

INSERT INTO `hmo_notification` (`id`, `user_id`, `description`, `date_time`, `status`) VALUES
(1, 1, 'Youve created an appointment', '2019-11-10 13:22:29', 1),
(2, 32, 'You created an appointment', '2019-11-10 13:53:37', 0),
(3, 1, 'Maria C Clara created an appointment', '2019-11-10 13:53:37', 1),
(4, 33, 'You created an appointment', '2019-11-11 09:18:20', 0),
(5, 1, 'Bella Cruz Ramos created an appointment', '2019-11-11 09:18:20', 1),
(6, 34, 'You created an appointment', '2019-11-11 09:20:56', 0),
(7, 1, 'Marie Layos Chua created an appointment', '2019-11-11 09:20:56', 1),
(8, 35, 'You created an appointment', '2019-11-11 09:22:33', 0),
(9, 1, 'Sheena Dig Dig created an appointment', '2019-11-11 09:22:33', 1),
(10, 1, 'Your Reservation was approved', '2019-11-11 09:23:19', 1),
(11, 33, 'Your Reservation was approved', '2019-11-11 09:24:36', 0),
(12, 34, 'Your Reservation was approved', '2019-11-11 09:25:25', 0),
(13, 35, 'Your Reservation was approved', '2019-11-11 09:26:05', 0),
(14, 36, 'You created an appointment', '2019-11-11 09:31:19', 0),
(15, 1, 'Rowena Santos Magno created an appointment', '2019-11-11 09:31:19', 1),
(16, 37, 'You created an appointment', '2019-11-11 09:32:44', 0),
(17, 1, 'Liza Ana Cruz created an appointment', '2019-11-11 09:32:44', 1),
(18, 36, 'Your Reservation was approved', '2019-11-11 09:35:29', 0),
(19, 37, 'Your Reservation was approved', '2019-11-11 09:36:12', 0),
(20, 39, 'You created an appointment', '2019-11-11 13:22:06', 0),
(21, 1, 'Jasmin Solis Babila created an appointment', '2019-11-11 13:22:06', 1),
(22, 40, 'You created an appointment', '2019-11-11 20:24:02', 0),
(23, 1, 'RHEVIE SUMAPIG SERAD created an appointment', '2019-11-11 20:24:02', 1),
(24, 40, 'Your Reservation was approved', '2019-11-13 16:49:32', 0),
(25, 34, 'Your Appointment was scheduled tommorrow. <br>Don\'t be late', '2019-11-23 09:52:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_physical`
--

CREATE TABLE `hmo_physical` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `occupation` varchar(256) NOT NULL,
  `diagnosis` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `bp` varchar(32) NOT NULL,
  `pr` varchar(32) NOT NULL,
  `rr` varchar(32) NOT NULL,
  `temp` varchar(32) NOT NULL,
  `wt` varchar(32) NOT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_physical`
--

INSERT INTO `hmo_physical` (`id`, `patient_id`, `occupation`, `diagnosis`, `date`, `time`, `bp`, `pr`, `rr`, `temp`, `wt`, `status`) VALUES
(1, 11, '78', '78', '2019-11-10', '19:08:00', '7', '987', '98', '789', '789', 1),
(2, 11, 'Vendor', 'None', '2019-11-11', '22:15:00', '180/120', 'None', 'None', '26', '125', 1),
(3, 12, 'Call center', 'None', '2019-11-11', '21:18:00', 'None', 'None', 'None', '25', '128', 1),
(4, 13, 'House wife', 'None', '2019-11-13', '21:18:00', '120/50', 'None', 'None', '21', '126', 1),
(5, 14, 'None', 'None', '2019-11-10', '21:19:00', 'None', 'None', 'None', 'None', 'None', 1),
(6, 15, 'None', 'None', '2019-11-15', '20:20:00', '120/50', 'None', 'None', '27', '134', 1),
(7, 16, 'None', 'None', '2019-11-17', '21:21:00', '123/52', 'None', 'None', '28', '145', 1),
(8, 17, 'None', 'None', '2019-11-18', '21:21:00', '124/54', 'None', 'None', '34', '156', 1),
(9, 38, 'bhjgjk', 'jhjkh', '2019-09-09', '19:08:00', 'jkhjkh', 'jkh', 'jk', 'hjk', 'hjk', 1),
(10, 34, 'Unemployed', 'Injured', '2019-05-06', '00:00:00', '120/90', '12', '34', '37c', '41kg', 1),
(11, 32, 'hjih', '7bnkn', '2018-06-04', '18:07:00', 'bjkb', 'kjb', 'kj', 'b', 'kjb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_role`
--

CREATE TABLE `hmo_role` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `access` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_role`
--

INSERT INTO `hmo_role` (`id`, `name`, `access`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Birthing Staff', '{\"about\":[\"view\",\"create\",\"update\",\"delete\"],\"activity\":[\"view\",\"create\",\"update\",\"delete\"],\"appointment\":[\"index\",\"view\",\"check\",\"update\",\"delete\",\"approved\",\"chart\",\"cancel\"],\"archive\":[\"backup\",\"restore\",\"remove\"],\"birthing-assessment\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"birthing\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"monitoring\"],\"birthing-intravenous-fluid\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"birthing-monitoring-sheet\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"birthing-newborn\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"birthing-physician-order\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"birthing-weight-progress\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"complaint\":[\"view\",\"create\",\"update\",\"delete\"],\"dashboard\":[\"index\",\"get-reservation-chart\",\"clear-notification\",\"patient-chart\",\"physical\",\"clinical\",\"dots\",\"birthing\",\"dental\",\"water\"],\"dental\":[\"index\",\"view\"],\"department\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"dots\":[\"index\",\"view\",\"monitoring\",\"view-patient\"],\"dots-opd-record\":[\"print\",\"index\",\"view\"],\"dots-tb-treatment\":[\"print\",\"index\",\"view\"],\"fecalysis\":[\"index\",\"view\",\"print\"],\"hematology\":[\"index\",\"view\",\"print\"],\"medical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"start-checkup\",\"print\"],\"notification\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"physical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"records\":[\"index\"],\"role\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"site\":[\"check\",\"index\",\"has-week\",\"maximum\",\"login\",\"registration-successfull\",\"has-pending-appointment\",\"register\",\"confirm-email\",\"logout\",\"password-reset-form\",\"new-password-form\",\"about\"],\"urinalysis\":[\"index\",\"view\",\"print\"],\"user\":[\"view\",\"update\",\"detail\",\"compute-age\",\"profile\",\"show\",\"find-records\",\"print\"],\"water-lab\":[\"print\",\"index\",\"view\"]}', 1, '2020-01-26 06:58:10', '2020-01-27 05:03:08'),
(2, 'Administrator', '{\"about\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"activity\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"appointment\":[\"index\",\"view\",\"check\",\"create\",\"update\",\"delete\",\"approved\",\"chart\",\"cancel\"],\"archive\":[\"index\",\"backup\",\"restore\",\"remove\"],\"birthing-assessment\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"birthing\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"monitoring\"],\"birthing-intravenous-fluid\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"birthing-monitoring-sheet\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"birthing-newborn\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"birthing-physician-order\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"birthing-weight-progress\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"complaint\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"dashboard\":[\"index\",\"get-reservation-chart\",\"clear-notification\",\"patient-chart\",\"physical\",\"clinical\",\"dots\",\"birthing\",\"dental\",\"water\"],\"dental\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"department\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"dots\":[\"print\",\"index\",\"view\",\"create\",\"update\",\"delete\",\"monitoring\",\"view-patient\"],\"dots-opd-record\":[\"print\",\"index\",\"view\",\"create\",\"update\",\"delete\"],\"dots-tb-treatment\":[\"print\",\"index\",\"view\",\"create\",\"update\",\"delete\"],\"fecalysis\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"hematology\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"medical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"start-checkup\",\"print\"],\"notification\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"physical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"records\":[\"index\"],\"role\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"site\":[\"check\",\"index\",\"has-week\",\"maximum\",\"login\",\"registration-successfull\",\"has-pending-appointment\",\"register\",\"confirm-email\",\"logout\",\"password-reset-form\",\"new-password-form\",\"about\"],\"urinalysis\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"user\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"detail\",\"compute-age\",\"profile\",\"show\",\"find-records\",\"print\"],\"water-lab\":[\"print\",\"index\",\"view\",\"create\",\"update\",\"delete\"]}', 1, '2020-01-26 07:03:33', '2020-01-27 05:04:00'),
(3, 'Patient', '{\"about\":[\"view\",\"create\",\"update\",\"delete\"],\"activity\":[\"view\",\"create\",\"update\",\"delete\"],\"appointment\":[\"index\",\"view\",\"check\",\"create\",\"update\",\"delete\",\"approved\",\"chart\",\"cancel\"],\"archive\":[\"backup\",\"restore\",\"remove\"],\"birthing-assessment\":[\"index\",\"view\"],\"birthing\":[\"index\",\"view\",\"monitoring\"],\"birthing-intravenous-fluid\":[\"index\",\"view\"],\"birthing-monitoring-sheet\":[\"index\",\"view\"],\"birthing-newborn\":[\"index\",\"view\"],\"birthing-physician-order\":[\"index\",\"view\"],\"birthing-weight-progress\":[\"index\",\"view\"],\"complaint\":[\"view\",\"create\",\"update\"],\"dashboard\":[\"index\",\"get-reservation-chart\",\"clear-notification\",\"patient-chart\",\"physical\",\"clinical\",\"dots\",\"birthing\",\"dental\",\"water\"],\"dental\":[\"index\",\"view\"],\"department\":[\"index\",\"view\",\"delete\"],\"dots\":[\"print\",\"index\",\"view\",\"monitoring\",\"view-patient\"],\"dots-opd-record\":[\"print\",\"index\",\"view\"],\"dots-tb-treatment\":[\"print\",\"index\",\"view\"],\"fecalysis\":[\"index\",\"view\",\"print\"],\"hematology\":[\"index\",\"view\",\"print\"],\"medical\":[\"index\",\"view\",\"start-checkup\",\"print\"],\"notification\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"physical\":[\"index\",\"view\",\"print\"],\"role\":[\"index\",\"view\"],\"site\":[\"check\",\"index\",\"has-week\",\"maximum\",\"login\",\"registration-successfull\",\"has-pending-appointment\",\"register\",\"confirm-email\",\"logout\",\"password-reset-form\",\"new-password-form\",\"about\"],\"urinalysis\":[\"index\",\"view\",\"print\"],\"user\":[\"view\",\"create\",\"update\",\"delete\",\"detail\",\"compute-age\",\"profile\",\"show\",\"find-records\",\"print\"],\"water-lab\":[\"print\",\"index\",\"view\"]}', 1, '2020-01-26 08:01:26', '2020-01-27 06:24:26'),
(4, 'Laboratory Staff', '{\"about\":[\"view\",\"create\",\"update\",\"delete\"],\"activity\":[\"view\",\"create\",\"update\",\"delete\"],\"appointment\":[\"index\",\"view\",\"check\",\"create\",\"update\",\"delete\",\"approved\",\"chart\",\"cancel\"],\"archive\":[\"backup\",\"restore\"],\"birthing-assessment\":[\"index\",\"view\"],\"birthing\":[\"index\",\"view\",\"monitoring\"],\"birthing-intravenous-fluid\":[\"index\",\"view\"],\"birthing-monitoring-sheet\":[\"index\",\"view\"],\"birthing-newborn\":[\"index\",\"view\"],\"birthing-physician-order\":[\"index\",\"view\"],\"birthing-weight-progress\":[\"index\",\"view\"],\"complaint\":[\"view\",\"create\",\"update\"],\"dashboard\":[\"index\",\"get-reservation-chart\",\"clear-notification\",\"patient-chart\",\"physical\",\"clinical\",\"dots\",\"birthing\",\"dental\",\"water\"],\"dental\":[\"index\",\"view\"],\"department\":[\"view\"],\"dots\":[\"print\",\"index\",\"view\",\"monitoring\",\"view-patient\"],\"dots-opd-record\":[\"print\",\"index\",\"view\"],\"dots-tb-treatment\":[\"print\",\"index\",\"view\"],\"fecalysis\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"hematology\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"medical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"start-checkup\",\"print\"],\"notification\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"physical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"records\":[\"index\"],\"role\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"site\":[\"check\",\"index\",\"has-week\",\"maximum\",\"login\",\"registration-successfull\",\"has-pending-appointment\",\"register\",\"confirm-email\",\"logout\",\"password-reset-form\",\"new-password-form\",\"about\"],\"urinalysis\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"user\":[\"view\",\"create\",\"update\",\"delete\",\"detail\",\"compute-age\",\"profile\",\"show\",\"find-records\",\"print\"],\"water-lab\":[\"print\",\"index\",\"view\",\"create\",\"update\",\"delete\"]}', 1, '2020-01-27 05:09:05', '2020-01-27 05:22:32'),
(5, 'DOTS Staff', '{\"about\":[\"view\",\"create\",\"update\",\"delete\"],\"activity\":[\"view\",\"create\",\"update\",\"delete\"],\"appointment\":[\"index\",\"view\",\"check\",\"create\",\"update\",\"delete\",\"approved\",\"chart\",\"cancel\"],\"archive\":[\"backup\",\"restore\",\"remove\"],\"birthing-assessment\":[\"index\",\"view\"],\"birthing\":[\"index\",\"view\",\"monitoring\"],\"birthing-intravenous-fluid\":[\"index\",\"view\"],\"birthing-monitoring-sheet\":[\"index\",\"view\"],\"birthing-newborn\":[\"index\",\"view\"],\"birthing-physician-order\":[\"index\",\"view\"],\"birthing-weight-progress\":[\"index\",\"view\"],\"complaint\":[\"view\",\"create\",\"update\",\"delete\"],\"dashboard\":[\"index\",\"get-reservation-chart\",\"clear-notification\",\"patient-chart\",\"physical\",\"clinical\",\"dots\",\"birthing\",\"dental\",\"water\"],\"dental\":[\"index\",\"view\"],\"department\":[\"view\",\"create\",\"update\",\"delete\"],\"dots\":[\"print\",\"index\",\"view\",\"create\",\"update\",\"delete\",\"monitoring\",\"view-patient\"],\"dots-opd-record\":[\"print\",\"index\",\"view\",\"create\",\"update\",\"delete\"],\"dots-tb-treatment\":[\"print\",\"index\",\"view\",\"create\",\"update\",\"delete\"],\"fecalysis\":[\"index\",\"view\",\"print\"],\"hematology\":[\"index\",\"view\",\"print\"],\"medical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"start-checkup\",\"print\"],\"notification\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"physical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"records\":[\"index\"],\"role\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"site\":[\"check\",\"index\",\"has-week\",\"maximum\",\"login\",\"registration-successfull\",\"has-pending-appointment\",\"register\",\"confirm-email\",\"logout\",\"password-reset-form\",\"new-password-form\",\"about\"],\"urinalysis\":[\"index\",\"view\",\"print\"],\"user\":[\"view\",\"update\",\"detail\",\"compute-age\",\"profile\",\"show\",\"find-records\",\"print\"],\"water-lab\":[\"print\",\"index\",\"view\"]}', 1, '2020-01-27 05:22:57', '2020-01-27 05:40:58'),
(6, 'Water Laboratory Staff', '{\"about\":[\"view\",\"create\",\"update\",\"delete\"],\"activity\":[\"view\",\"create\",\"update\",\"delete\"],\"appointment\":[\"index\",\"view\",\"check\",\"create\",\"update\",\"delete\",\"approved\",\"chart\",\"cancel\"],\"archive\":[\"backup\",\"restore\",\"remove\"],\"birthing-assessment\":[\"index\",\"view\"],\"birthing\":[\"index\",\"view\",\"monitoring\"],\"birthing-intravenous-fluid\":[\"index\",\"view\"],\"birthing-monitoring-sheet\":[\"index\",\"view\"],\"birthing-newborn\":[\"index\",\"view\"],\"birthing-physician-order\":[\"index\",\"view\"],\"birthing-weight-progress\":[\"index\",\"view\"],\"complaint\":[\"view\",\"create\",\"update\"],\"dashboard\":[\"index\",\"get-reservation-chart\",\"clear-notification\",\"patient-chart\",\"physical\",\"clinical\",\"dots\",\"birthing\",\"dental\",\"water\"],\"dental\":[\"index\",\"view\"],\"department\":[\"index\",\"view\"],\"dots\":[\"print\",\"index\",\"view\",\"monitoring\",\"view-patient\"],\"dots-opd-record\":[\"print\",\"index\",\"view\"],\"dots-tb-treatment\":[\"print\",\"index\",\"view\"],\"fecalysis\":[\"index\",\"view\",\"print\"],\"hematology\":[\"index\",\"view\",\"print\"],\"medical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"start-checkup\",\"print\"],\"notification\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"physical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"records\":[\"index\"],\"role\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"site\":[\"check\",\"index\",\"has-week\",\"maximum\",\"login\",\"registration-successfull\",\"has-pending-appointment\",\"register\",\"confirm-email\",\"logout\",\"password-reset-form\",\"new-password-form\",\"about\"],\"urinalysis\":[\"index\",\"view\",\"print\"],\"user\":[\"view\",\"create\",\"update\",\"delete\",\"detail\",\"compute-age\",\"profile\",\"show\",\"find-records\",\"print\"],\"water-lab\":[\"print\",\"index\",\"view\",\"create\",\"update\",\"delete\"]}', 1, '2020-01-27 05:39:29', '2020-01-27 05:46:11'),
(7, 'Dental Staff', '{\"about\":[\"view\",\"create\",\"update\",\"delete\"],\"activity\":[\"view\",\"create\",\"update\",\"delete\"],\"appointment\":[\"index\",\"view\",\"check\",\"create\",\"update\",\"delete\",\"approved\",\"chart\",\"cancel\"],\"archive\":[\"backup\",\"restore\"],\"birthing-assessment\":[\"index\",\"view\"],\"birthing\":[\"index\",\"view\",\"monitoring\"],\"birthing-intravenous-fluid\":[\"index\",\"view\"],\"birthing-monitoring-sheet\":[\"index\",\"view\"],\"birthing-newborn\":[\"index\",\"view\"],\"birthing-physician-order\":[\"index\",\"view\"],\"birthing-weight-progress\":[\"index\",\"view\"],\"complaint\":[\"view\"],\"dashboard\":[\"index\",\"get-reservation-chart\",\"clear-notification\",\"patient-chart\",\"physical\",\"clinical\",\"dots\",\"birthing\",\"dental\",\"water\"],\"dental\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"department\":[\"view\"],\"dots\":[\"print\",\"index\",\"view\",\"monitoring\",\"view-patient\"],\"dots-opd-record\":[\"print\",\"index\",\"view\"],\"dots-tb-treatment\":[\"print\",\"index\",\"view\"],\"fecalysis\":[\"index\",\"view\",\"print\"],\"hematology\":[\"index\",\"view\",\"print\"],\"medical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"start-checkup\",\"print\"],\"notification\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"physical\":[\"index\",\"view\",\"create\",\"update\",\"delete\",\"print\"],\"records\":[\"index\"],\"role\":[\"index\",\"view\",\"create\",\"update\",\"delete\"],\"site\":[\"check\",\"index\",\"has-week\",\"maximum\",\"login\",\"registration-successfull\",\"has-pending-appointment\",\"register\",\"confirm-email\",\"logout\",\"password-reset-form\",\"new-password-form\",\"about\"],\"urinalysis\":[\"index\",\"view\",\"print\"],\"user\":[\"view\",\"create\",\"update\",\"delete\",\"detail\",\"compute-age\",\"profile\",\"show\",\"find-records\",\"print\"],\"water-lab\":[\"print\",\"index\",\"view\"]}', 1, '2020-01-27 05:48:39', '2020-01-27 05:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `hmo_urinalysis`
--

CREATE TABLE `hmo_urinalysis` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `color` varchar(256) NOT NULL,
  `reaction` varchar(256) NOT NULL,
  `transparency` varchar(256) NOT NULL,
  `specific_gravity` varchar(256) NOT NULL,
  `albumin` varchar(256) NOT NULL,
  `sugar` varchar(256) NOT NULL,
  `ketone` varchar(256) NOT NULL,
  `amorphus_urates` varchar(256) NOT NULL,
  `amorphus_phosphates` varchar(256) NOT NULL,
  `calcium_oxalates` varchar(256) NOT NULL,
  `uric_acid` varchar(256) NOT NULL,
  `triple_phosphates` varchar(256) NOT NULL,
  `hyaline` varchar(256) NOT NULL,
  `fine_granular` varchar(256) NOT NULL,
  `coarse_granular` varchar(256) NOT NULL,
  `wbc_casts` varchar(256) NOT NULL,
  `rbc_casts` varchar(256) NOT NULL,
  `waxy` varchar(256) NOT NULL,
  `pus_cells` varchar(256) NOT NULL,
  `red_blood_cells` varchar(256) NOT NULL,
  `ephithelial_cells` varchar(256) NOT NULL,
  `yeast_cells` varchar(256) NOT NULL,
  `renal_ephithelial_cells` varchar(256) NOT NULL,
  `mocous_threads` varchar(256) NOT NULL,
  `bacteria` text NOT NULL,
  `pregnancy_test` varchar(256) NOT NULL,
  `pathologist_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_urinalysis`
--

INSERT INTO `hmo_urinalysis` (`id`, `patient_id`, `staff_id`, `color`, `reaction`, `transparency`, `specific_gravity`, `albumin`, `sugar`, `ketone`, `amorphus_urates`, `amorphus_phosphates`, `calcium_oxalates`, `uric_acid`, `triple_phosphates`, `hyaline`, `fine_granular`, `coarse_granular`, `wbc_casts`, `rbc_casts`, `waxy`, `pus_cells`, `red_blood_cells`, `ephithelial_cells`, `yeast_cells`, `renal_ephithelial_cells`, `mocous_threads`, `bacteria`, `pregnancy_test`, `pathologist_id`, `date_created`, `status`) VALUES
(1, 11, 31, '897', '897', '879', '7', '7', '97', '98', '79', '87', '7', '987', '9879', '97', '97', '897', '98798', '79', '87', '79', '7', '9878', '97', '987', '9878', '97', '978', 1, '2019-11-10', 1),
(2, 8, 1, 'Yellow', 'None', 'None', 'None', '33', '43', '44', '32', '54', '44', '43', '33', '54', '43', '43', '43', '43', '54', '44', '43', '33', '33', '33', '43', 'None', 'Yes', 1, '2019-11-10', 1),
(3, 11, 1, 'Yellow', 'None', 'None', 'None', '43', '54', '54', '54', '64', '54', '54', '55', '54', '54', '55', '66', '43', '65', '43', '44', '54', '32', '54', '22', 'None', 'No', 1, '2019-11-10', 1),
(4, 36, 1, 'noe', 'nonen', 'non', 'noen', 'nonen', 'none', 'noe', 'noen', 'noenop', 'nop', 'n', 'no', 'ohiko', 'hjk', 'h', 'koh', 'ko', 'ihgji', 'nihjoi', 'hiohio', 'hio', 'h', 'iohi', 'ohh', 'nhoikn', 'khhk', 1, '2019-11-11', 1),
(5, 17, 10, 'gbjkig', 'jigj', 'gj', 'gjk', 'g', 'jkg', 'jkg', 'jk', 'g', 'jk', 'g', 'jk', 'g', 'jk', 'g', 'jk', 'gj', 'kg', 'g', 'jk', 'g', 'kg', 'jk', 'jk', 'jgg', 'gg', 1, '2019-11-11', 1),
(6, 34, 10, 'uig', 'g', 'uigu', 'igg', 'bjkbgh', 'jih', 'jh', 'jk', 'hjk', 'hjk', 'hjk', 'hj', 'jk', 'h', 'jk', 'hj', 'kh', 'jk', 'kh', 'jk', 'hj', 'hj', 'h', 'hj', 'hjkhj', 'jhjk', 10, '2019-11-11', 1),
(7, 35, 10, 'gjkigh', 'jkhjk', 'hjk', 'hjk', 'hj', 'kh', 'jkh', 'jk', 'hjkh', 'jkh', 'jk', 'h', 'hj', 'h', 'jh', 'jk', 'h', 'jh', 'j', 'hj', 'hj', 'h', 'jk', 'j', 'jhkh', 'hj', 31, '2019-11-11', 1),
(8, 33, 1, 'ghi', 'igj', 'h', 'hj', 'gh', 'jg', 'hj', 'ghj', 'g', 'hj', 'ghj', 'g', 'ghj', 'g', 'hj', 'gh', 'jg', 'hjg', 'h', 'gh', 'g', 'hg', 'h', 'h', 'hj', 'jg', 10, '2019-11-11', 1),
(9, 37, 10, 'yellowish', 'none', 'clear', 'none', '12', '21', '23', '12', '12', '34', '43', '43', '32', '21', '23', '23', '32', '11', '21', '34', '21', '12', '3', 'none', 'none', 'none', 10, '2019-11-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_user`
--

CREATE TABLE `hmo_user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(128) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `age` tinyint(3) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` text,
  `educational_attainment` tinyint(1) DEFAULT NULL,
  `employment_status` tinyint(1) DEFAULT NULL,
  `civil_status` tinyint(1) DEFAULT NULL,
  `dswd_nhtsmember` varchar(128) DEFAULT NULL,
  `family_household_number` int(16) DEFAULT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `authkey` varchar(10) NOT NULL,
  `access_token` varchar(256) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_user`
--

INSERT INTO `hmo_user` (`id`, `fullname`, `gender`, `age`, `birthday`, `address`, `educational_attainment`, `employment_status`, `civil_status`, `dswd_nhtsmember`, `family_household_number`, `username`, `password`, `authkey`, `access_token`, `user_type`, `status`) VALUES
(1, 'HOMER_L_AGUINALDO', 1, 32, '1987-01-13', '20_30_San Jose_Gma_Cavite', 1, 1, 1, '123', 23123, 'MHO123', '$2y$13$Ajeeugc70fHbP0IRsdIhUeP0FY6TKLy0zNPEEVQpCUBrw67Voo9su', 'SXCFRIUTII', '-moSLge0u_', 2, 0),
(8, 'annabelle_gernale_test', 2, 20, '1998-06-17', 'pulido GMA', 1, 1, 1, '437643292', 7493632, 'annabelle', '$2y$13$TQAeVWGD46y/40//JoXL0urv7wk2BtqBqw9SENt6h5X6G.ubK1lyq', '6GYIG8IDFP', 'eWy1Yvo6WH', 3, 0),
(9, 'Anna_K._Behrensmeyer', 2, 20, '1998-06-17', 'pulido GMA', 1, 1, 1, '55657', 749363223, 'roel', '$2y$13$yQjLf40qCUYZo4dFS6I7E.fNTU.YwPO46wokBhrlM74L21VbXZVnK', 'ZJAMUGD9ZG', 'UkvvYx2esy', 3, 0),
(10, 'Blaise_T_Pascal', 1, 31, '1987-02-04', 'carmona', 1, 1, 2, '123123', 2147483647, 'Assistant', '$2y$13$yQjLf40qCUYZo4dFS6I7E.fNTU.YwPO46wokBhrlM74L21VbXZVnK', '74QU6HFK5A', 'pokoZsFJRh', 1, 0),
(11, 'Cecilia_Payne_Gaposchkin', 1, 0, '2018-12-19', 'qweqwe', 1, 1, 1, '321321', 213123, '2tr5kt', '$2y$13$APYPJC75RVKRlpWg7qKQj.MHCd.pWvob3fCPlskp0M8t8ZoAMTFjG', 'SMYBBUF966', '0Ear4Us08U', 3, 0),
(12, 'Chien_Shiung_Wu', 1, 0, '2019-01-25', 'zxc', 1, 1, 2, '3213123', 3213123, 'hey0eo', '$2y$13$fRErKdimZeR.hLQQrfKfFus9yU8Dcyk9P.EgELUtuxpQZy6ofTIgm', 'PJIPPNMLWG', '-1VJRk8_Rd', 3, 0),
(13, 'Dorothy_G_Hodgkin', 1, 43, '1975-02-11', 'gfdg', 1, 1, 3, '32131234324', 231123, 'abvtqi', '$2y$13$eoqJfPMuMektceVGsfQvC.P0aibOtMJwobrKDY9OvJnuNfVov64R2', 'B2HAIB6YRP', 'J29JkoyYoK', 3, 0),
(14, 'Edmond_F_Halley', 1, 43, '1975-02-11', 'gfdg', 1, 1, 3, '32131232323', 2147483647, 'phi1bq', '$2y$13$yDXLrXy.xIovp6yNs6adlOsqGv8YEDT37qCRuIX0opgEzCMDZ8G.2', '2DZU2HXHBT', 'GXzhVDkfzv', 3, 0),
(15, 'Edwin_Powell_Hubble', 1, 43, '1975-02-11', 'gfdg', 1, 1, 3, '321312232312', 23112332, 'jy4w5s', '$2y$13$62C8LZJR1uOY8BJucIfiDe.Devvolaphr/e5l8b0L9BN2jbj/y07C', 'M_CUEPLT-N', 'K1yLl_09mm', 3, 0),
(16, 'john_estrada_luvena', 1, 14, '2005-02-08', 'roel', 1, 1, 2, '213123213', 123123123, 'njdkd4', '$2y$13$zKDbS.x64TwA9rA.s2AJPuvC58gPSSMzd4Iw2dDTXv5p1.QWY6wZy', 'HEM97GUNEV', 'H3j1qqkwYA', 3, 0),
(17, 'luicito_ramon_hernandez', 1, 16, '2002-03-14', '18_29_san jose_gma_cavite', 2, 1, 1, '56789', 5678, 'bfsbaj', '$2y$13$xpe.kJXw8/oPzdLUfXF5reoHLG26m0e7ejJXETtq7JKLGP7wXf5Wy', '6UILQ9TPY0', 'HFZFCeP9u6', 3, 0),
(31, 'john_doee_doee', 1, 3, '2016-02-09', 'gma ', 1, 1, 1, '0976543', 1234567, 'roelroel', '$2y$13$/iF8cAp4m8Hm68ZLZFYAzOt4eyAhBnUDPT71M2ftE2e63d4jypwiy', 'NMD3JCT3Q-', 'zJwxLaoBNd', 1, 0),
(32, 'Maria_C_Clara', 1, 9, '2010-07-08', '10_32_Pulido_GMA_Cavite', 2, 1, 1, '67890-=', 567890, 'qfbvy7', '$2y$13$TkWNjuqeOLfIN6nqR4OP4uF9jTCjWiBNwqWk.BBeTSoCfIjui875a', 'PNUHSQ0E4I', 'XJVBLpS4E8', 3, 0),
(33, 'bella_Cruz_ramos', 2, 32, '1987-01-23', '____quezon', 3, 2, 1, '', NULL, 'rleqsq', '$2y$13$Vv0A.aBkqto3kxHjsLcJeO4D49YMiJAlc.e7uTjAD0RMS5aLGHXQW', 'P6PGCHRWT6', 'quL4ObeJCe', 3, 0),
(34, 'marie_layos_chua', 2, 21, '1998-06-03', '____samar', 2, 1, 3, '', NULL, 'l52qka', '$2y$13$qXE9BFbazlXAXXrkKI1XiOTcDLat.20rh99Ug6f/GqRWXGihqR07e', 'RSWT3ABUHC', 'dgz3xRZkJj', 3, 0),
(35, 'sheena_dig_dig', 1, 21, '1997-12-23', '____', 3, 1, 2, '', NULL, 'ejsyln', '$2y$13$vj3bnL5NeV8VcJGcswNGBO6eiweBiQSxuuj24XrR/t9GsQENn5lAC', 'MP4IYMTWTW', 'cnkaWMz10g', 3, 0),
(36, 'rowena_santos_magno', 2, 17, '2002-05-12', '____', 1, 2, 1, '', NULL, '2xx9ti', '$2y$13$KuAakJAoW.CFZlrBzsWW9OkVsQ/.lKsbH.rLrTdz.GPTh.Axw/BYa', 'D3RFUJ8_CU', 'u1aPp3Pikt', 3, 0),
(37, 'liza_ana_cruz', 2, 24, '1995-09-21', '____', 4, 1, 2, '', NULL, 'wt9nhz', '$2y$13$Hp9tfINWXMnMl9GlSgtxZe1bkqJ9lY1M7iSCpPkF3G73DLFf7moZa', 'DOLKA8EPAM', 'DL0sxQU9S1', 3, 0),
(38, 'sally_baybay_maceda', 2, 27, '1992-03-28', '____', 2, 2, 2, '', NULL, 'xocvum', '$2y$13$tr9b5z6iVAV4W.Z6SYBN9ukgxEioqEMV0c7okd8URBnG6UuEafKra', 'RHYCAOMH1K', 'H32DTJAOmt', 3, 0),
(39, 'jasmin_solis_babila', 2, 19, '1999-12-04', '__milagrosa__', 4, 2, 1, '', NULL, 'ben2xh', '$2y$13$wmmNuAfq4rcMjbiJ.GQYV.uQ3UtImnH9jaZMfuiroXM4Mi7oVNpMm', 'UXDR3DIVZK', 'LVMdJRaaIi', 3, 0),
(40, 'RHEVIE_SUMAPIG_SERAD', 2, 20, '1999-01-28', '10_10_milagrosa_Carmona_Cavite', 4, 1, 1, '1234', 1234, 'rqrgjw', '$2y$13$1SkcWOvMO/O2u7H0ptpfO.k8gCvX38s5gFYmGUWzT2mxWh96kldny', 'FLQ9UQWKDS', 'pYp6TOoe-T', 3, 0),
(41, 'alyssa_Hernandez_Samson', 2, 20, '1999-09-08', '____', 4, 1, 1, '465', 45, 'daxcw3', '$2y$13$gmAuVem7WQn1XQHFOlsFNuTcktdusQZljuyQCXZqRaZz6NjXDRhca', 'Z5GDPHLHXF', '5VMA3pcucM', 3, 0),
(42, 'Serwin_R._Quihilag', 1, 34, '1985-01-01', '', 4, 1, 1, '0987655', 12345, 'serwin', '$2y$13$vbtN.5bK6jjirsOKjVh.zuy7kw/dVRyQqaWA4eZHzNCUr85NUMjPO', 'QCUYKKJTYO', 'aD5PXmi4xh', 1, 0),
(43, 'Anamarie_a_Fernandez', 2, 0, '2019-10-29', '12_12_1222_121_12', 4, 1, 1, '12', 12, 'z71htc', '$2y$13$Mrs.FJfNeyFLWSY8hINQrORCrv6esZcbb/RmXPCV3tpiiMDVLw1R.', 'KPBQFWYDKD', 'H6Mm_6UT6w', 3, 0),
(44, 'Anamarie_a_a', 2, 0, '2019-11-11', '12_12_1222_12_12', 2, 1, 2, '121', 121, 'i2tcyg', '$2y$13$wQ89K9QloFq.Y0kMFx6GsOzo8EOGe92VVJiiRaorXh7B3cnd24ERC', 'M5NZD46GVL', 'EcmpXBvhlD', 3, 0),
(45, 'Jhona_arcillas_isidoro', 2, 20, '1999-12-06', 'binan laguna', 4, 1, 1, 'none', 134, 'jhona', '$2y$13$tm4IoOBUWn.lUNYi8vVI.ej0/kJ0A8lSeyGdWnaSQiZA2j3oreLpe', 'H7OSKXJWHA', 'ogVFWbXPKa', 1, 0),
(46, 'Johnny_L_Locat', 1, 12, '2007-02-06', 'carmona', 2, 2, 1, '856297415', 59565587, 'laboratorystaff', '$2y$13$TLv1swxJF2NbVJiHdR1k3OjaYdocUIyEWWjvwfr79f3hBs4CZTxt6', '1MMFOSEXVL', '_UrQQVZbol', 4, 0),
(47, 'Jeffrey_J_Lopez', 1, 19, '2000-02-01', 'binan laguna', 3, 1, 1, '2547954', 95654889, 'dotsstaff', '$2y$13$6y.kIGPTZcdwiS16gE84/e/ogxrDbkGEpwLGiruzDd1ol9cSS2zJ2', '9YDDIK1MP6', 'KDAbi3pC3p', 5, 0),
(48, 'Kunnah_Jimehh_Kugnsa', 1, 27, '1992-02-11', 'binan laguna', 2, 2, 1, '1247684', 734765865, 'birthingstaff', '$2y$13$UxmETbSF3Rz0K08vLPg81u98oLuXo5E.C5yT2..JquipUls9b0x4i', 'YP7KJOIVTY', '_ci58515Rz', 1, 0),
(49, 'henne_Tetre_Hugnbij', 1, 25, '1994-06-14', 'binan laguna', 2, 1, 1, '843659287', 753492763, 'waterlaboratorystaff', '$2y$13$JnWCkTzN8AwydA2qN/hGU.MYPpDey1LESxXmIOs9yUBtIEo23EOaG', 'NB03IF8PNX', 'PBV99yBzPZ', 6, 0),
(50, 'jordan_Maestro_Logronio', 1, 17, '2002-02-13', 'binan laguna', 2, 1, 1, '8743947', 75393273, 'dentalstaff', '$2y$13$rsVL90yDH3OHokJIDDGiDOT2a0gpp/ONvGXb2La5vScc8TfHfGZs.', 'OKRN_9D_FL', 'lZ4ilpMEb-', 7, 0),
(51, 'Karl_Samson_Relovasa', 1, 17, '2003-01-08', '22_11_San pedro_San Pedro_Laguna', 2, 1, 1, '876574', 23434654, 'owh823', '$2y$13$rsVL90yDH3OHokJIDDGiDOT2a0gpp/ONvGXb2La5vScc8TfHfGZs.', 'TJMNM570QS', '9IkiTKrL4M', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_water_lab`
--

CREATE TABLE `hmo_water_lab` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `sampling_collected_by` varchar(255) DEFAULT NULL,
  `sampling_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sampling_point` text,
  `specify_address_sampling_point` text,
  `source_of_water_supply` text,
  `type_of_ownership` text,
  `type_of_well` text,
  `well_usage` text,
  `pump_required_priming` text,
  `repair_done_within_2_months` text,
  `water_treated` text,
  `distance_from_well_of_the_following_in_meter` text,
  `analysis_requested` text,
  `designation` text,
  `location_of_well` text,
  `received_by` varchar(255) DEFAULT NULL,
  `date_time` text,
  `labaratory_no` int(11) DEFAULT NULL,
  `parameters_to_be_examined` text,
  `status` tinyint(1) DEFAULT NULL,
  `result` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_water_lab`
--

INSERT INTO `hmo_water_lab` (`id`, `patient_id`, `sampling_collected_by`, `sampling_date_time`, `sampling_point`, `specify_address_sampling_point`, `source_of_water_supply`, `type_of_ownership`, `type_of_well`, `well_usage`, `pump_required_priming`, `repair_done_within_2_months`, `water_treated`, `distance_from_well_of_the_following_in_meter`, `analysis_requested`, `designation`, `location_of_well`, `received_by`, `date_time`, `labaratory_no`, `parameters_to_be_examined`, `status`, `result`) VALUES
(1, 11, '89', '2019-11-10 05:49:07', '[\"Fire Hydrant\"]', '87', '\"null\"', '\"null\"', '[\"BORED\"]', '\"null\"', '[\"Yes\"]', '\"null\"', '\"null\"', '\"null\"', '\"null\"', '', '878', '3232', '2019-11-10', 78, '7', NULL, 1),
(2, 14, 'Homer', '2019-11-10 13:11:18', '[\"Pumps\"]', 'Milagrosa', '[\"Deep Well\"]', '[\"Private\"]', '[\"DUG\"]', '[\"New (Not yet in use) \"]', '[\"Yes\"]', '[\"None\"]', '[\"Yes\"]', '[\"Privy\"]', '[\"BACTERIOLOGICAL\"]', 'None', 'None', 'Homer', '2019-11-11', 123, 'None', NULL, 0),
(3, 15, 'Homer', '2019-11-10 13:12:30', '[\"Pumps\"]', 'Phase 2 carmona, cavite', '[\"River\"]', '[\"Public\"]', '[\"BORED\"]', '[\"Recent (in use less than 3 months) \"]', '[\"Yes\"]', '[\"None\"]', '[\"Yes\"]', '[\"Privy\"]', '[\"BACTERIOLOGICAL\"]', 'None', 'None', 'Homer', '2019-11-12', 124, 'None', NULL, 0),
(4, 16, 'Homet', '2019-11-10 13:13:27', '[\"Pumps\"]', 'Phase 1 carmona, cavite', '[\"Lake\"]', '[\"Local Waterworks\"]', '[\"SANITARY\"]', '[\"Old (in use for over 3 months)\"]', '[\"Yes\"]', '[\"Cleaned Well\"]', '[\"Yes\"]', '[\"Privy\",\"Cemetery\"]', '[\"PHYSICAL \\/ CHEMICAL\"]', 'None', 'None', 'Homer', '2019-11-13', 125, 'None', NULL, 0),
(5, 17, 'Homer', '2019-11-10 13:14:46', '[\"Pumps\"]', 'Poblacion 1, carmona cavite', '[\"Lake\"]', '[\"Local Waterworks\"]', '[\"DRILLED\"]', '[\"Recent (in use less than 3 months) \"]', '[\"Yes\"]', '[\"None\"]', '[\"Yes\"]', '[\"Septic Tank\",\"Sea and others\",\"Canal\"]', '[\"BIOLOGICAL\"]', 'None', 'None', 'Homet', '2019-11-14', 126, 'None', NULL, 0),
(6, 9, 'Homer', '2019-11-10 13:15:46', '[\"Pumps\"]', 'Poblacion 2 Carmona, cavite', '[\"River\"]', '[\"Public\"]', 'null', '[\"Recent (in use less than 3 months) \"]', '[\"Yes\"]', '[\"Rod\"]', '[\"No\"]', '[\"Septic Tank\"]', '[\"BIOLOGICAL\"]', 'None', 'None', 'Homer', '2019-11-16', 127, 'None', NULL, 0),
(7, 32, 'Homer', '2019-11-10 13:16:41', '[\"Pumps\"]', 'Milagrosa carmona, cavite', '[\"Lake\"]', '[\"Local Waterworks\"]', '[\"BORED\"]', '[\"Recent (in use less than 3 months) \"]', '[\"No\"]', '[\"Pump\"]', '[\"Yes\"]', '[\"Septic Tank\"]', '[\"BIOLOGICAL\"]', 'None', 'None', 'Homer', '2019-11-16', 128, 'None', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hmo_about`
--
ALTER TABLE `hmo_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_activity`
--
ALTER TABLE `hmo_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_appointment`
--
ALTER TABLE `hmo_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_archieve`
--
ALTER TABLE `hmo_archieve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_birthing`
--
ALTER TABLE `hmo_birthing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_birthing_assessment`
--
ALTER TABLE `hmo_birthing_assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_birthing_intravenous_fluid`
--
ALTER TABLE `hmo_birthing_intravenous_fluid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_birthing_monitoring_sheet`
--
ALTER TABLE `hmo_birthing_monitoring_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_birthing_newborn`
--
ALTER TABLE `hmo_birthing_newborn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_birthing_physician_order`
--
ALTER TABLE `hmo_birthing_physician_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_birthing_weight_progress`
--
ALTER TABLE `hmo_birthing_weight_progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_complaint`
--
ALTER TABLE `hmo_complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_dental`
--
ALTER TABLE `hmo_dental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_department`
--
ALTER TABLE `hmo_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_dots`
--
ALTER TABLE `hmo_dots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_dots_opd_record`
--
ALTER TABLE `hmo_dots_opd_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_dots_tb_treatment`
--
ALTER TABLE `hmo_dots_tb_treatment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_fecalysis`
--
ALTER TABLE `hmo_fecalysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_hematology`
--
ALTER TABLE `hmo_hematology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_medical`
--
ALTER TABLE `hmo_medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_notification`
--
ALTER TABLE `hmo_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_physical`
--
ALTER TABLE `hmo_physical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_role`
--
ALTER TABLE `hmo_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_urinalysis`
--
ALTER TABLE `hmo_urinalysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo_user`
--
ALTER TABLE `hmo_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`id`);

--
-- Indexes for table `hmo_water_lab`
--
ALTER TABLE `hmo_water_lab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hmo_about`
--
ALTER TABLE `hmo_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hmo_activity`
--
ALTER TABLE `hmo_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hmo_appointment`
--
ALTER TABLE `hmo_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hmo_archieve`
--
ALTER TABLE `hmo_archieve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hmo_birthing`
--
ALTER TABLE `hmo_birthing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hmo_birthing_assessment`
--
ALTER TABLE `hmo_birthing_assessment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hmo_birthing_intravenous_fluid`
--
ALTER TABLE `hmo_birthing_intravenous_fluid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hmo_birthing_monitoring_sheet`
--
ALTER TABLE `hmo_birthing_monitoring_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hmo_birthing_newborn`
--
ALTER TABLE `hmo_birthing_newborn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hmo_birthing_physician_order`
--
ALTER TABLE `hmo_birthing_physician_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hmo_birthing_weight_progress`
--
ALTER TABLE `hmo_birthing_weight_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hmo_complaint`
--
ALTER TABLE `hmo_complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hmo_dental`
--
ALTER TABLE `hmo_dental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hmo_department`
--
ALTER TABLE `hmo_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hmo_dots`
--
ALTER TABLE `hmo_dots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hmo_dots_opd_record`
--
ALTER TABLE `hmo_dots_opd_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hmo_dots_tb_treatment`
--
ALTER TABLE `hmo_dots_tb_treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hmo_fecalysis`
--
ALTER TABLE `hmo_fecalysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hmo_hematology`
--
ALTER TABLE `hmo_hematology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hmo_medical`
--
ALTER TABLE `hmo_medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hmo_notification`
--
ALTER TABLE `hmo_notification`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hmo_physical`
--
ALTER TABLE `hmo_physical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hmo_role`
--
ALTER TABLE `hmo_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hmo_urinalysis`
--
ALTER TABLE `hmo_urinalysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hmo_user`
--
ALTER TABLE `hmo_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `hmo_water_lab`
--
ALTER TABLE `hmo_water_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
