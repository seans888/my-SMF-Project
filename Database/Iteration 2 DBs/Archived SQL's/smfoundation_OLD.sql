-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2015 at 11:26 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smfoundation`
--
CREATE DATABASE IF NOT EXISTS `smfoundation` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `smfoundation`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_3` (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'Y_OYGTahIQ0tqFf0o5a4jjDSeXEofOld', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'me@email.com', 10, 1436426903, 1436426903);

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE IF NOT EXISTS `allowance` (
  `allowance_id` int(11) NOT NULL AUTO_INCREMENT,
  `allowance_amount` int(11) DEFAULT NULL,
  `allowance_remark` varchar(255) DEFAULT NULL,
  `allowance_scholar_id` int(11) DEFAULT NULL,
  `allowance_school_id` int(11) DEFAULT NULL,
  `allowance_payStatus` enum('paid','not paid') DEFAULT NULL,
  `benefit_allowance_id` int(11) DEFAULT NULL,
  `allowance_scholar_lastName` varchar(100) DEFAULT NULL,
  `allowance_scholar_firstName` varchar(100) DEFAULT NULL,
  `allowance_scholar_middleName` varchar(100) DEFAULT NULL,
  `allowance_paidDate` date DEFAULT NULL,
  PRIMARY KEY (`allowance_id`),
  KEY `Scholar_Num` (`allowance_scholar_id`),
  KEY `School_Num` (`allowance_school_id`),
  KEY `allowance_scholar_id` (`allowance_scholar_id`),
  KEY `allowance_school_id` (`allowance_school_id`),
  KEY `benefit_allowance_id` (`benefit_allowance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `allowance`
--

INSERT INTO `allowance` (`allowance_id`, `allowance_amount`, `allowance_remark`, `allowance_scholar_id`, `allowance_school_id`, `allowance_payStatus`, `benefit_allowance_id`, `allowance_scholar_lastName`, `allowance_scholar_firstName`, `allowance_scholar_middleName`, `allowance_paidDate`) VALUES
(1, 10000, 'Allowance', 2, 2, 'not paid', NULL, NULL, NULL, NULL, '2015-07-25'),
(2, 10000, 'test', 3, 2, 'paid', NULL, NULL, NULL, NULL, '2015-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `applicantform`
--

CREATE TABLE IF NOT EXISTS `applicantform` (
  `id` int(11) NOT NULL,
  `last_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `first_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `middle_name` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `city_address` varchar(45) CHARACTER SET utf8 NOT NULL,
  `telephone_no` int(11) NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  `cellphone_no` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `status` enum('Single','Married','Widowed','Separated') CHARACTER SET utf8 NOT NULL,
  `sex` enum('Male','Female','','') CHARACTER SET utf8 NOT NULL,
  `birth_place` varchar(45) CHARACTER SET utf8 NOT NULL,
  `nationality` varchar(45) CHARACTER SET utf8 NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `religion` varchar(45) CHARACTER SET utf8 NOT NULL,
  `name_of_public_high_school_graduating_from` varchar(45) CHARACTER SET utf8 NOT NULL,
  `section` varchar(45) CHARACTER SET utf8 NOT NULL,
  `complete_address_of_school` varchar(45) CHARACTER SET utf8 NOT NULL,
  `name_of_principal` varchar(45) CHARACTER SET utf8 NOT NULL,
  `telephone_numbers` int(11) NOT NULL,
  `org_1` varchar(45) CHARACTER SET utf8 NOT NULL,
  `position_held1` varchar(45) CHARACTER SET utf8 NOT NULL,
  `school_you_want_to_enroll_in` varchar(45) CHARACTER SET utf8 NOT NULL,
  `course_you_plan_to_take` varchar(45) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicantform`
--

INSERT INTO `applicantform` (`id`, `last_name`, `first_name`, `middle_name`, `city_address`, `telephone_no`, `email`, `cellphone_no`, `birthday`, `status`, `sex`, `birth_place`, `nationality`, `height`, `weight`, `religion`, `name_of_public_high_school_graduating_from`, `section`, `complete_address_of_school`, `name_of_principal`, `telephone_numbers`, `org_1`, `position_held1`, `school_you_want_to_enroll_in`, `course_you_plan_to_take`) VALUES
(1, 'bisbal', 'bisbal', 'bisbal', '241', 231312, 'bisbal@yahoo.com', 1312414, '0000-00-00', 'Single', 'Female', 'sdfwqwefqfw', 'asdgeg2', 32, 32, 'wgwrgb', 'ergr4g2g2b', '4bv24bvvdfbd', 'fbt4b4', 'tb2442bb', 121414, 'sdvdgsd', 'wgrwewretew', 'weqqwerqwe', 'qwetewt');

-- --------------------------------------------------------

--
-- Table structure for table `benefit`
--

CREATE TABLE IF NOT EXISTS `benefit` (
  `benefit_id` int(11) NOT NULL AUTO_INCREMENT,
  `benefit_amount` int(11) DEFAULT NULL,
  `benefit_scholarShare` int(11) DEFAULT NULL,
  `benefit_tuitionfee_id` int(11) DEFAULT NULL,
  `benefit_scholar_id` int(11) DEFAULT NULL,
  `benefit_school_id` int(11) DEFAULT NULL,
  `benefit_scholar_lastName` varchar(100) DEFAULT NULL,
  `benefit_scholar_firstName` varchar(100) DEFAULT NULL,
  `benefit_scholar_middleName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`benefit_id`),
  KEY `Tuition_Num` (`benefit_tuitionfee_id`),
  KEY `Scholar_Num` (`benefit_scholar_id`),
  KEY `School_Num` (`benefit_school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `benefit`
--

INSERT INTO `benefit` (`benefit_id`, `benefit_amount`, `benefit_scholarShare`, `benefit_tuitionfee_id`, `benefit_scholar_id`, `benefit_school_id`, `benefit_scholar_lastName`, `benefit_scholar_firstName`, `benefit_scholar_middleName`) VALUES
(1, 10000, 5000, NULL, 2, 2, NULL, NULL, NULL),
(2, 20000, 10000, 5, 3, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `compile`
--

CREATE TABLE IF NOT EXISTS `compile` (
  `compile_id` int(11) NOT NULL AUTO_INCREMENT,
  `compile_scholar_id` int(11) DEFAULT NULL,
  `compile_school_id` int(11) DEFAULT NULL,
  `compile_tuitionfee_id` int(11) DEFAULT NULL,
  `compile_grade_id` int(11) DEFAULT NULL,
  `compile_scholar_firstName` varchar(100) DEFAULT NULL,
  `compile_scholar_lastName` varchar(100) DEFAULT NULL,
  `compile_scholar_middleName` varchar(100) DEFAULT NULL,
  `compile_school_name` varchar(100) DEFAULT NULL,
  `compile_school_area` varchar(100) DEFAULT NULL,
  `compile_pendingPaymentToSchool` enum('Yes','No') DEFAULT NULL,
  `compile_pendingPaymentToStudent` enum('Yes','No') DEFAULT NULL,
  PRIMARY KEY (`compile_id`),
  KEY `compile_scholar_id` (`compile_scholar_id`,`compile_school_id`,`compile_tuitionfee_id`,`compile_grade_id`),
  KEY `compile_school_id` (`compile_school_id`),
  KEY `compile_tuitionfee_id` (`compile_tuitionfee_id`),
  KEY `compile_grade_id` (`compile_grade_id`),
  KEY `compile_school_id_2` (`compile_school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `event_scholar_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `event_scholar_id` (`event_scholar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `start_date`, `end_date`, `event_scholar_id`) VALUES
(1, 'Payment to Asia Pacific College', 'Pay', '2015-07-01', '2015-07-02', 0),
(2, 'Payment to Asia Pacific College', 'et', '2015-07-02', '2015-07-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failures`
--

CREATE TABLE IF NOT EXISTS `failures` (
  `fail_id` int(11) NOT NULL AUTO_INCREMENT,
  `fail_subject` varchar(45) DEFAULT NULL,
  `fail_units` int(11) DEFAULT NULL,
  `fail_scholar_id` int(11) DEFAULT NULL,
  `fail_school_id` int(11) DEFAULT NULL,
  `failures_scholar_lastName` varchar(100) DEFAULT NULL,
  `failures_scholar_firstName` varchar(100) DEFAULT NULL,
  `failures_scholar_middleName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`fail_id`),
  KEY `Scholar_Num` (`fail_scholar_id`),
  KEY `School_Num` (`fail_school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `grade_id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_schoolYear` int(11) DEFAULT NULL,
  `grade_Term` int(11) DEFAULT NULL,
  `grade_scholar_id` int(11) DEFAULT NULL,
  `grade_scholar_lastName` varchar(100) DEFAULT NULL,
  `grade_scholar_firstName` varchar(100) DEFAULT NULL,
  `grade_scholar_middleName` varchar(100) DEFAULT NULL,
  `grade_value` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`grade_id`),
  KEY `grade_scholar_id` (`grade_scholar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `grade_schoolYear`, `grade_Term`, `grade_scholar_id`, `grade_scholar_lastName`, `grade_scholar_firstName`, `grade_scholar_middleName`, `grade_value`) VALUES
(15, 2015, 3, 2, '', '', '', '4.0'),
(16, 2015, 2, 3, NULL, NULL, NULL, '4.0');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1436093153),
('m130524_201442_init', 1436093154);

-- --------------------------------------------------------

--
-- Table structure for table `scholars`
--

CREATE TABLE IF NOT EXISTS `scholars` (
  `scholar_id` int(11) NOT NULL AUTO_INCREMENT,
  `scholar_firstName` varchar(100) NOT NULL,
  `scholar_lastName` varchar(100) NOT NULL,
  `scholar_middleName` varchar(100) DEFAULT NULL,
  `scholar_gender` enum('Male','Female') NOT NULL,
  `scholar_address` varchar(100) DEFAULT NULL,
  `scholar_school_id` int(11) NOT NULL,
  `scholar_course` varchar(100) DEFAULT NULL,
  `scholar_yearLevel` int(11) DEFAULT NULL,
  `scholar_email` varchar(100) DEFAULT NULL,
  `scholar_contactNum` int(100) NOT NULL,
  `scholar_cashCardNum` int(100) DEFAULT NULL,
  `scholar_school_area` enum('Provincial','NCR') NOT NULL,
  `scholar_user_id` int(11) NOT NULL,
  PRIMARY KEY (`scholar_id`),
  KEY `scholar_school_id` (`scholar_school_id`),
  KEY `scholar_user_id` (`scholar_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `scholars`
--

INSERT INTO `scholars` (`scholar_id`, `scholar_firstName`, `scholar_lastName`, `scholar_middleName`, `scholar_gender`, `scholar_address`, `scholar_school_id`, `scholar_course`, `scholar_yearLevel`, `scholar_email`, `scholar_contactNum`, `scholar_cashCardNum`, `scholar_school_area`, `scholar_user_id`) VALUES
(2, 'Syam', 'Daswani', 'Uy Sobierra', 'Male', 'some address', 2, 'BSIT-MI', 4, 'syam@email.com', 1234, 1234, 'NCR', 2),
(3, 'Kevin', 'Villacorta', 'dafsdf', 'Male', 'address', 2, 'BSIT-MI', 4, 'kevin@email.com', 1234, 12321, 'NCR', 3);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(100) NOT NULL,
  `school_area` enum('Provincial','NCR') NOT NULL,
  `school_address` varchar(100) DEFAULT NULL,
  `school_contactEmail` varchar(100) DEFAULT NULL,
  `school_contactNumber` int(100) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `school_name`, `school_area`, `school_address`, `school_contactEmail`, `school_contactNumber`) VALUES
(2, 'Asia Pacific College', 'Provincial', 'some address', 'test@ee.com', 1),
(3, 'De Lasalle University', 'NCR', 'address', 'test@email.com', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tuitionfees`
--

CREATE TABLE IF NOT EXISTS `tuitionfees` (
  `tuitionfee_id` int(11) NOT NULL AUTO_INCREMENT,
  `tuitionfee_scholar_id` int(11) DEFAULT NULL,
  `tuitionfee_scholar_lastName` varchar(100) DEFAULT NULL,
  `tuitionfee_scholar_firstName` varchar(100) DEFAULT NULL,
  `tuitionfee_scholar_middleName` varchar(100) DEFAULT NULL,
  `tuitionfee_amount` int(11) DEFAULT NULL,
  `tuitionfee_dateOfEnrollment` date DEFAULT NULL,
  `tuitionfee_dateOfPayment` date DEFAULT NULL,
  `tuitionfee_paidStatus` enum('paid','not paid') DEFAULT NULL,
  PRIMARY KEY (`tuitionfee_id`),
  KEY `tuitionfee_scholar_id` (`tuitionfee_scholar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tuitionfees`
--

INSERT INTO `tuitionfees` (`tuitionfee_id`, `tuitionfee_scholar_id`, `tuitionfee_scholar_lastName`, `tuitionfee_scholar_firstName`, `tuitionfee_scholar_middleName`, `tuitionfee_amount`, `tuitionfee_dateOfEnrollment`, `tuitionfee_dateOfPayment`, `tuitionfee_paidStatus`) VALUES
(4, 2, NULL, NULL, NULL, 20000, NULL, NULL, 'paid'),
(5, 3, NULL, NULL, NULL, 20000, '2015-07-01', '2015-07-29', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `uploadedforms`
--

CREATE TABLE IF NOT EXISTS `uploadedforms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scholar_lastName` varchar(100) NOT NULL,
  `scholar_firstName` varchar(100) NOT NULL,
  `scholar_middleName` varchar(100) NOT NULL,
  `uploadedForm` varchar(100) NOT NULL,
  `scholar_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `scholar_id` (`scholar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_3` (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'scholar', 'Y_OYGTahIQ0tqFf0o5a4jjDSeXEofOld', '$2y$13$fG5d6VsPMojMhJZJPZeH8e8NRdUXm5u.czrNZfZUg2wtg1HCPuxFq', NULL, 'me@email.com', 10, 1436426903, 1436426903),
(3, 'scholar2', 'kgJz_-7RaOwWQpjrUrV1QsenhrKAgFr8', '$2y$13$RRQyqJjUYmqZ2H2vtiNNouPE5pD04UQ3h6x2so6vIqOXtxOPuXGDO', NULL, 'scholar@email.com', 10, 1436766072, 1436766072);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allowance`
--
ALTER TABLE `allowance`
  ADD CONSTRAINT `allowance_ibfk_1` FOREIGN KEY (`allowance_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `allowance_ibfk_2` FOREIGN KEY (`allowance_school_id`) REFERENCES `schools` (`school_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `allowance_ibfk_3` FOREIGN KEY (`benefit_allowance_id`) REFERENCES `benefit` (`benefit_id`) ON UPDATE CASCADE;

--
-- Constraints for table `benefit`
--
ALTER TABLE `benefit`
  ADD CONSTRAINT `benefit_ibfk_1` FOREIGN KEY (`benefit_tuitionfee_id`) REFERENCES `tuitionfees` (`tuitionfee_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `benefit_ibfk_2` FOREIGN KEY (`benefit_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `benefit_ibfk_3` FOREIGN KEY (`benefit_school_id`) REFERENCES `schools` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `compile`
--
ALTER TABLE `compile`
  ADD CONSTRAINT `compile_ibfk_1` FOREIGN KEY (`compile_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `compile_ibfk_2` FOREIGN KEY (`compile_school_id`) REFERENCES `schools` (`school_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `compile_ibfk_3` FOREIGN KEY (`compile_tuitionfee_id`) REFERENCES `tuitionfees` (`tuitionfee_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `compile_ibfk_4` FOREIGN KEY (`compile_grade_id`) REFERENCES `grades` (`grade_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `failures`
--
ALTER TABLE `failures`
  ADD CONSTRAINT `failures_ibfk_1` FOREIGN KEY (`fail_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `failures_ibfk_2` FOREIGN KEY (`fail_school_id`) REFERENCES `schools` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`grade_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `scholars`
--
ALTER TABLE `scholars`
  ADD CONSTRAINT `scholars_ibfk_1` FOREIGN KEY (`scholar_school_id`) REFERENCES `schools` (`school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tuitionfees`
--
ALTER TABLE `tuitionfees`
  ADD CONSTRAINT `tuitionfees_ibfk_1` FOREIGN KEY (`tuitionfee_scholar_id`) REFERENCES `scholars` (`scholar_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `uploadedforms`
--
ALTER TABLE `uploadedforms`
  ADD CONSTRAINT `uploadedforms_ibfk_1` FOREIGN KEY (`scholar_id`) REFERENCES `scholars` (`scholar_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
