-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 08:05 AM
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
-- Database: `db_julia`
--

-- --------------------------------------------------------

--
-- Table structure for table `hmo_about`
--

CREATE TABLE `hmo_about` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_about`
--

INSERT INTO `hmo_about` (`id`, `name`, `description`, `status`) VALUES
(1, 'name', 'Municipal Health Office - Carmona', 1),
(2, 'history', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(3, 'mission', 'the mission', 0),
(4, 'vission', 'the vission', 0),
(5, 'address', 'carmona', 0),
(6, 'contact number', '092032732', 0);

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
  `status` tinyint(1) NOT NULL
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
(7, 'DENTAL CLINIC', '', 'Monday-Friday', '8:00AM-5:00PM', 0),
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
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_appointment`
--

INSERT INTO `hmo_appointment` (`id`, `user_id`, `complaint_id`, `scheduled_date`, `description`, `status`) VALUES
(1, 1, 3, '2018-12-13', '32PLXW8SVQ32PLXW8SVQ32PLXW8SVQ32PLXW8SVQ', 1),
(2, 5, 3, '2018-12-13', 'F__VWSBPNZF__VWSBPNZF__VWSBPNZ', 1),
(3, 5, 2, '2018-12-13', 'qweqwewq', 1),
(5, 5, 3, '2018-12-13', 'qweqwewq', 1),
(6, 4, 1, '2018-12-21', 'this is a test', 1),
(7, 1, 2, '2018-12-13', 'lorem ipsum', 1);

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
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing`
--

INSERT INTO `hmo_birthing` (`id`, `patient_id`, `chief_complaint`, `start_of_pregnancy`, `end_of_pregnancy`, `guardian_name`, `guardian_civil_status`, `guardian_gender`, `guardian_contact`, `guardian_age`, `guardian_relationship`, `guardian_address`, `date_added`, `status`) VALUES
(2, 2, '23213', '2018-01-17', '2018-12-21', '323213', '2', 1, '32132', 127, '2', '23123', '2018-12-01 23:04:28', 1),
(3, 2, '231321', '2018-12-13', '2018-12-21', '321321', '2', 2, '12312', 12, '2', '3213', '2018-12-01 23:48:32', 0);

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
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing_assessment`
--

INSERT INTO `hmo_birthing_assessment` (`id`, `birthing_id`, `date`, `assessment`, `chief_complaint`, `intervention`, `status`) VALUES
(1, 2, '2018-12-02', 'Assessments', 'Chief Complaints', 'Interventions', 0),
(2, 3, '2018-12-02', '1121', '21212', '21212', 0),
(3, 3, '2018-12-02', '323', '312321', '3123', 0);

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
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing_intravenous_fluid`
--

INSERT INTO `hmo_birthing_intravenous_fluid` (`id`, `birthing_id`, `date`, `bag_no`, `solution`, `blood`, `time_started`, `time_end`, `remarks`, `status`) VALUES
(1, 3, '2018-12-02', 32, '32', '232', '02:32:00', '15:23:00', '2323232', 1),
(2, 3, '2018-12-02', 32, '3213', '123213', '15:21:00', '15:21:00', '3213213', 0);

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
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing_newborn`
--

INSERT INTO `hmo_birthing_newborn` (`id`, `birthing_id`, `baby_name`, `date_delivered`, `time_delivered`, `gender`, `delivery_type`, `weight`, `apgar_score`, `head_circumference`, `abdominal_circumference`, `chest_circumference`, `body_length`, `procedures`, `medications`, `remarks`, `status`) VALUES
(1, 2, 'roel', '2018-12-21', '14:32:00', 1, 1, '232', '23', '32', '32', '32', '32', '323', '123', '123', 0),
(2, 2, 'eqweqw', '2018-12-19', '03:23:00', 1, 1, '123', '123', '123', '123', '312', '321', '312', '231', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_birthing_physician_order`
--

CREATE TABLE `hmo_birthing_physician_order` (
  `id` int(11) NOT NULL,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `prescription` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing_physician_order`
--

INSERT INTO `hmo_birthing_physician_order` (`id`, `birthing_id`, `date`, `prescription`, `status`) VALUES
(2, 2, '2018-12-20', '2321', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_birthing_weight_progress`
--

CREATE TABLE `hmo_birthing_weight_progress` (
  `id` int(11) NOT NULL,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `weight` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_birthing_weight_progress`
--

INSERT INTO `hmo_birthing_weight_progress` (`id`, `birthing_id`, `date`, `weight`, `status`) VALUES
(2, 3, '2018-12-13', '23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_complaint`
--

CREATE TABLE `hmo_complaint` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `department` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_complaint`
--

INSERT INTO `hmo_complaint` (`id`, `name`, `description`, `department`, `status`) VALUES
(1, 'TB', 'something is good', '[\"1\",\"2\",\"3\",\"4\"]', 0),
(2, 'sample', 'sample', '[\"2\",\"3\"]', 0),
(3, 'dental', 'dental', '[\"4\"]', 1),
(4, 'cancer warrior', 'lorem ipsum desktop', '[\"1\",\"2\"]', 0),
(5, 'Broken Legs', 'this is a test', '[\"2\",\"3\"]', 0),
(6, 'atritis', 'bone issue', '[\"1\",\"2\",\"4\",\"5\",\"7\"]', 0);

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
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_dental`
--

INSERT INTO `hmo_dental` (`id`, `patient_id`, `date`, `chief_complaint`, `medical_history`, `dental_history`, `treatment`, `diagnosis`, `oral_condition`, `dental_health`, `status`) VALUES
(4, 2, '2018-12-02', '[\"Swelling\",\"Checkup\",\"\"]', '[\"Heart Ailment\",\"Hypertension\",\"Anemia\",\"Epilepsy\",\"Asthma\",\"Allergies\",\"Diabetes\",\"\"]', '[\"Permanent Filling\",\"Temporary Filling\",\"Oral Prophylaxis\",\"Alveolectomy\",\"Extraction\",\"\"]', '123', '123', '{\"date\":[\"2018-12-18\",\"2018-12-10\",\"2018-12-03\",\"2018-12-17\",\"2018-11-26\",\"2018-12-08\"],\"carries\":[\"1\",\"1\",\"1\",\"1\",\"1\",\"1\"],\"gingivitis\":[\"0\",\"1\",\"0\",\"1\",\"0\",\"1\"],\"pockets\":[\"\",\"12312\",\"\",\"1\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"1\",\"\"],\"calculus\":[\"1\",\"\",\"1\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"1\",\"\",\"1\",\"\",\"\"],\"cleft_palate\":[\"\",\"1\",\"1\",\"\",\"1\",\"1\"],\"dmf\":[\"1\",\"\",\"\",\"1\",\"\",\"\"],\"others\":[\"\",\"1\",\"\",\"\",\"1\",\"\"]}', '[{\"tooth_number\":\"24\",\"treatment\":\"INDICATED FOR EXO\"},{\"tooth_number\":\"16\",\"treatment\":\"INDICATED FOR EXO\"},{\"tooth_number\":\"45\",\"treatment\":\"INDICATED FOR EXO\"},{\"tooth_number\":\"46\",\"treatment\":\"INDICATED FOR EXO\"}]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hmo_department`
--

CREATE TABLE `hmo_department` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmo_department`
--

INSERT INTO `hmo_department` (`id`, `user_id`, `name`, `description`, `status`) VALUES
(1, 1, 'clinic', 'sample', 0),
(2, 1, 'water laboratory', 'sample', 0),
(3, 1, 'birthing lab', 'sample', 0),
(4, 1, 'dental laboratory', 'sample', 0),
(5, 5, 'sample', 'asdasdasd', 0),
(6, 5, 'the best depatment', 'same thingis the best', 0),
(7, 7, 'sample test', 'ok oks', 0);

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
(3, 1, '2018-12-20', '21', '21', '21', '12', '21', '0000-00-00 00:00:00', 0),
(4, 4, '2018-12-20', '2313', '12312', '213', '123', '123', '2018-12-02 15:57:51', 0);

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
(1, 1, 'You created an appointment', '0000-00-00 00:00:00', 0),
(2, 2, 'You created an appointment', '0000-00-00 00:00:00', 0),
(3, 3, 'You created an appointment', '2018-12-01 07:44:19', 0),
(4, 2, 'You created an appointment', '2018-12-01 07:44:19', 0),
(5, 4, 'You created an appointment', '2018-12-01 23:03:23', 0),
(6, 5, 'Your Reservation was approved', '2018-12-02 05:03:53', 0);

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
(1, 'roel longcop', 1, 27, '1991-02-12', 'san jose', 6, 2, 1, '823874387148', 743864816, 'RErzzq', '$2y$13$c60Vvy1wrfVBqpqbStrzyetOmWRa9q95ajJgq8Hh5sq3OrYs.n9oe', '32PLXW8SVQ', 'xYGPXgpg5r', 0, 0),
(2, 'annabelle gernale', 2, 20, '1998-03-18', 'gma', 3, 2, 2, '4234234', 45321, '7cRK-C', '$2y$13$pbYM.rXTCwuozhaLZ8Ij6ugK7U.ixabGXfcEv2/3Soa1nJBllNPpS', 'F__VWSBPNZ', 'OArtUUbiOr', 0, 0),
(3, 'jeff', 1, 12, '2006-02-01', 'poblacion', 3, 2, 3, '4234234343', 432523, 'g-tJtL', '$2y$13$ZOTJmWgR6/2o5sVxj6t7D.myy5bgAix9cZZRvLnf.ipCnnBHZggxi', '5HAKSANZUT', 'fQC6uoCdS4', 0, 0),
(4, 'dezza evangelista', 2, 20, '1998-03-11', 'paliparan', 3, 1, 1, '323123', 312321323, 'rTqexv', '$2y$13$zfLFeEtH..hoDeI9G6nG..Ak5VkgPaf2p68hWE2jdrwECcPEMinSm', '1UAG0E9XMD', 'e_F1E6Sw7F', 0, 0),
(5, 'bam bam payat', 1, 26, '1992-02-19', 'qeqweqweqw', 4, 1, 1, '123', 23123, 'bambam', '$2y$13$u1vWwKnuoNK3cSOdEq8cVuhXGYS9CWyG..Nsivm6GoIwX7MWemz1.', 'UIC3UJQ38Y', 'PhlsqVFOje', 0, 0),
(6, 'julia', 2, 9, '2009-02-11', 'adsdasdas', 2, 1, 1, '2313213', 233232, 'julia', '$2y$13$8SRbAUI5Z1h3U2NOOBQBuOCyDeUwNRD83mDIODimWgCkX2o/mBNm.', 'DJRFT5QIR7', 'ekglNjd0Sg', 1, 0),
(7, 'partner', 2, 25, '1993-02-10', 'carmona cavite', 2, 2, 1, '434234234234234', 2147483647, 'partner', '$2y$13$BCyr0H1B7Dspvji8WB4RbensFe5z8MW1kIpZkNUozbV0l1iJxAEG.', '3YTBZEYAJA', 'Tn_X9anelX', 1, 0);

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
-- Indexes for table `hmo_user`
--
ALTER TABLE `hmo_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hmo_about`
--
ALTER TABLE `hmo_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hmo_activity`
--
ALTER TABLE `hmo_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hmo_appointment`
--
ALTER TABLE `hmo_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hmo_birthing`
--
ALTER TABLE `hmo_birthing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hmo_birthing_assessment`
--
ALTER TABLE `hmo_birthing_assessment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hmo_birthing_intravenous_fluid`
--
ALTER TABLE `hmo_birthing_intravenous_fluid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hmo_birthing_monitoring_sheet`
--
ALTER TABLE `hmo_birthing_monitoring_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hmo_birthing_newborn`
--
ALTER TABLE `hmo_birthing_newborn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hmo_birthing_physician_order`
--
ALTER TABLE `hmo_birthing_physician_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hmo_birthing_weight_progress`
--
ALTER TABLE `hmo_birthing_weight_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hmo_complaint`
--
ALTER TABLE `hmo_complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hmo_dental`
--
ALTER TABLE `hmo_dental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hmo_department`
--
ALTER TABLE `hmo_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hmo_medical`
--
ALTER TABLE `hmo_medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hmo_notification`
--
ALTER TABLE `hmo_notification`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hmo_user`
--
ALTER TABLE `hmo_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
