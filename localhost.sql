-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2021 at 02:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12681546_doapplication`
--
CREATE DATABASE IF NOT EXISTS `id12681546_doapplication` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id12681546_doapplication`;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `address`, `contact_no`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ABC', 'Quezon', '095551356', 'abc@gmail.com', '2020-10-29 00:00:00', '2020-10-29 00:00:00'),
(2, 'CAD', 'Manila', '0922568945', 'cad@gmail.com', '2020-10-30 00:00:00', '2020-10-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `created_at`, `updated_at`, `department_id`) VALUES
(1, 'Bachelor of Science in Computer Science', '2020-10-29 00:00:00', '2020-10-29 00:00:00', 1),
(3, 'Bachelor of Science in Information Technology', '2020-12-28 00:00:00', '2020-12-28 00:00:00', 1),
(4, 'Associate in Computer Technology ', '2020-12-28 00:00:00', '2020-12-28 00:00:00', 1),
(5, 'Bachelor of Science in Computer Engineering ', '2020-12-28 00:00:00', '2020-12-28 00:00:00', 3),
(6, 'Bachelor of Science in Electronics Engineering', '2020-12-28 00:00:00', '2020-12-28 00:00:00', 3),
(7, 'Bachelor of Science in Accountancy ', '2020-12-28 00:00:00', '2020-12-28 00:00:00', 6),
(8, 'Bachelor of Science in Tourism Management ', '2020-12-28 00:00:00', '2020-12-28 00:00:00', 6),
(9, 'Bachelor of Science in Management Accounting ', '2020-12-28 00:00:00', '2020-12-28 00:00:00', 6),
(10, 'Bachelor of Science in Business Administration', '2020-12-28 00:00:00', '2020-12-28 00:00:00', 6),
(11, 'Bachelor of Multimedia Arts', '2020-12-28 00:00:00', '2020-12-28 00:00:00', 4),
(12, 'Bachelor of Arts in Psychology ', '2020-12-28 00:00:00', '2020-12-28 00:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dean` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `dean`, `created_at`, `updated_at`) VALUES
(1, 'SOCIT', 'Ms. Rhea', '2020-10-29 00:00:00', '2020-10-29 00:00:00'),
(2, 'Security', 'Gab Pasaporte', '2020-10-30 00:00:00', '2020-10-30 00:00:00'),
(3, 'SOE', 'Sarsagon ', '2020-12-28 00:00:00', '2020-12-28 00:00:00'),
(4, 'SOMA', 'Alexander Bale', '2020-12-28 00:00:00', '2020-12-28 00:00:00'),
(5, 'SHS', 'Thomas Partey ', '2020-12-28 00:00:00', '2020-12-28 00:00:00'),
(6, 'SOM', 'Kieran Tierney', '2020-12-28 00:00:00', '2020-12-28 00:00:00'),
(7, 'Graduate School ', 'David Luiz', '2020-12-28 00:00:00', '2020-12-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`id`, `fname`, `mname`, `lname`, `contact_no`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Allan', 'na', 'Cho', '09174645895', 'allancho@gmail.com', '2020-10-29 00:00:00', '2020-10-29 00:00:00'),
(2, 'Johnna ', 'Tangle', 'Sabangan', '091746458953', 'johnnasabangan@gmail.com', '2020-11-06 00:00:00', '2020-11-06 00:00:00'),
(3, 'Dina', 'Cui', 'Sabroso', '09273065222', 'ssabr07@gmail.com', '2020-12-17 12:41:36', '2020-12-17 12:41:36'),
(4, 'April', '', 'Fortuno', '639985821078', 'AprilF@gmail.com', '2021-01-27 11:08:29', '2021-01-27 11:08:29'),
(5, 'Josefi', 'Cinaman', 'Krukov', '09562675233', 'Josefi@gmail.com', '2021-01-27 11:08:29', '2021-01-27 11:08:29'),
(6, 'Frugel', 'Lmain', 'Fischl', '09564879245', 'Frugel@gmail.com', '2021-01-27 11:10:08', '2021-01-27 11:10:08'),
(7, 'Timmie', 'lan', 'Fornand', '09562675233', 'Cchicken@gmail.com', '2021-02-24 13:53:25', '2021-02-24 13:53:25'),
(8, 'John', 'mely', 'Abram', '09564879245', 'Abraham@gmail.com', '2021-02-24 13:53:25', '2021-02-24 13:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `subject` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `notification_status_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `subject`, `message`, `guardian_id`, `staff_id`, `notification_status_id`, `created_at`, `updated_at`) VALUES
(1, 'Student violation was reported', 'please be inform ... ', 2, 1, 1, '2021-02-25 17:39:26', '2021-02-25 17:39:26'),
(2, 'aliah', 'please be inform...', 2, 1, 1, '2021-02-25 10:34:27', '2021-02-25 10:34:27'),
(3, 'Testing Matters', 'Hi Daddy', 3, 1, 1, '2021-02-25 10:45:58', '2021-02-25 10:45:58'),
(4, 'subject', 'text', 2, 1, 1, '2021-02-26 05:40:03', '2021-02-26 05:40:03'),
(5, 'Violation', 'No id', 3, 1, 1, '2021-02-27 22:05:35', '2021-02-27 22:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `notification_status`
--

CREATE TABLE `notification_status` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification_status`
--

INSERT INTO `notification_status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sent', '2021-02-25 17:38:34', '2021-02-25 17:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `code`, `created_at`, `updated_at`, `course_id`) VALUES
(1, 'SS181', '2020-10-30 00:00:00', '2020-10-30 00:00:00', 1),
(3, 'IT181', '2021-02-24 11:08:29', '2021-02-24 13:37:02', 3),
(5, 'CE191', '2021-02-24 13:37:02', '2021-02-24 13:37:02', 5),
(6, 'SOE181', '2021-02-24 14:00:12', '2021-02-24 14:00:12', 6),
(7, 'SOM181', '2021-02-24 14:00:12', '2021-02-24 14:00:12', 7),
(9, 'SOMA181', '2021-02-24 14:14:50', '2021-02-24 14:14:50', 11);

-- --------------------------------------------------------

--
-- Table structure for table `section_student`
--

CREATE TABLE `section_student` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_student`
--

INSERT INTO `section_student` (`id`, `section_id`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2020-10-30 00:00:00', '2020-10-30 00:00:00'),
(2, 1, 2, '2020-11-06 00:00:00', '2020-11-06 00:00:00'),
(3, 1, 4, '2020-12-17 00:00:00', '2020-12-17 00:00:00'),
(4, 1, 5, '2020-12-17 00:00:00', '2020-12-17 00:00:00'),
(5, 1, 6, '2021-01-27 11:08:29', '2021-01-27 11:08:29'),
(7, 3, 8, '2021-02-24 11:08:29', '2021-02-24 11:08:29'),
(8, 7, 9, '2021-02-24 16:57:44', '2021-02-24 16:57:44'),
(9, 9, 10, '2021-02-24 16:57:44', '2021-02-24 16:57:44'),
(10, 6, 11, '2021-02-24 16:58:30', '2021-02-24 16:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `staff_type_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `date_hired` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `employee_id`, `fname`, `mname`, `lname`, `email`, `contact_no`, `staff_type_id`, `department_id`, `company_id`, `date_hired`, `created_at`, `updated_at`) VALUES
(1, '100', 'Bruce', 'M', 'Jimenez', 'brucejimenez@gmail.com', '092532659', 2, 2, 1, '2020-10-30 00:00:00', '2020-10-30 00:00:00', '2020-10-30 00:00:00'),
(2, '2020-100048', 'Zinedine', 'Ga', 'Sabroso', 'sabroso@gmail.com', '0292815628', 3, 3, 2, '2021-01-05 13:17:56', '2021-01-01 13:18:39', '2021-01-28 13:19:10'),
(3, '145', 'Maya', 'Ming', 'Xingqiu', 'mxXingqiu@student.apc.edu.ph', '09562675233', 3, 2, 2, '2021-02-01 08:21:43', '2021-02-26 08:21:43', '2021-02-26 08:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `staff_type`
--

CREATE TABLE `staff_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff_type`
--

INSERT INTO `staff_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Guard', '2020-10-30 00:00:00', '2020-10-30 00:00:00'),
(3, 'Full-Time Professor', '2020-10-30 00:00:00', '2020-10-30 00:00:00'),
(4, 'Part-Time Professor', '2020-10-30 00:00:00', '2020-10-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'accepted', '2020-10-29 00:00:00', '2020-10-29 00:00:00'),
(2, 'canceled', '2020-11-05 00:00:00', '2020-11-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_number` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `mname`, `lname`, `student_number`, `email`, `contact_no`, `guardian_id`, `created_at`, `updated_at`) VALUES
(3, 'Bryan', 'NA', 'Kim', '2018-100386', 'skim@student.apc.edu.ph', '', 1, '2020-11-06 00:00:00', '2020-11-06 00:00:00'),
(4, 'Aliah', 'Sabangan', 'Casabuena', '2018-100078', 'ascasabuena@gmail.com', '09282561378', 2, '2020-11-06 00:00:00', '2020-11-06 00:00:00'),
(5, 'Zinedine', 'De Mesa', 'Sabroso', '2018-100072', 'Sricks1199c@gmail.com', '09562364233', 3, '2020-12-17 12:41:36', '2020-12-17 12:41:36'),
(6, 'Adrian', 'Ofiana', 'Fortuno', '2018-100288', 'aofortuno@student.apc.edu.ph', '639985821078', 4, '2021-01-27 11:08:29', '2021-01-27 11:08:29'),
(7, 'Petronovsky', 'Charl', 'Linda', '2018-100341', 'pclinda@student.apc.edu.ph', '09564879245', 5, '2021-01-27 11:14:22', '2021-01-27 11:14:22'),
(8, 'Miyamoto', 'Kon', 'Miyazaki', '2018-100478', 'Mmzaki@apc.edu.ph', '09273065222', 6, '2021-01-27 11:08:29', '2021-01-27 11:08:29'),
(9, 'Xinyan', 'Kui', 'Myun', '2018-100423', 'Xmyun@student.apc.edu.ph', '09562675233', 7, '2021-02-24 14:17:26', '2021-02-24 14:17:26'),
(10, 'Ivan', 'myet', 'Rezon', '2018-100011', 'Irezon@student.apc.edu.ph', '09564879245', 8, '2021-02-24 14:17:26', '2021-02-24 14:17:26'),
(11, 'Jame', 'Leo', 'Hallibut', '2018-123456', 'Hjame@student.apc.eud.ph', '09562675233', 7, '2021-02-24 14:22:56', '2021-02-24 14:22:56'),
(12, 'Andre', 'Dikoalam', 'Lagsac', '2018-100210', 'andremlagsac@gmail.com', '09163495840', 7, '2021-02-25 19:04:30', '2021-02-25 19:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id` int(11) NOT NULL,
  `school_yr` year(4) NOT NULL,
  `term_no` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `school_yr`, `term_no`, `created_at`, `updated_at`) VALUES
(1, 2020, 1, '2020-10-29 00:00:00', '2020-10-29 00:00:00'),
(2, 2020, 2, '2020-11-07 00:00:00', '2020-11-07 00:00:00'),
(3, 2020, 3, '2020-11-07 00:00:00', '2020-11-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `violation`
--

CREATE TABLE `violation` (
  `id` int(11) NOT NULL,
  `section_student_id` int(11) NOT NULL,
  `violation_code_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1,
  `term_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `remarks` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `violation`
--

INSERT INTO `violation` (`id`, `section_student_id`, `violation_code_id`, `status_id`, `term_id`, `staff_id`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, 1, 'Forgot the ID ', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(2, 1, 4, 1, 1, 1, 'No Proper Dress', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(3, 1, 3, 1, 1, 1, 'Plagiarism', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(4, 2, 6, 2, 1, 1, 'No ID', '2020-11-07 00:00:00', '2020-11-07 00:00:00'),
(5, 2, 4, 1, 1, 1, 'Dirty laundry', '2020-11-07 00:00:00', '2020-11-07 00:00:00'),
(7, 1, 2, 1, 1, 1, 'Test', '2020-11-08 10:31:12', '2020-11-08 10:31:12'),
(8, 1, 4, 1, 1, 1, 'Test', '2020-11-08 10:31:12', '2020-11-08 10:31:12'),
(9, 1, 1, 1, 1, 1, 'Test', '2020-11-08 10:31:12', '2020-11-08 10:31:12'),
(10, 1, 5, 1, 1, 1, 'Rain', '2020-11-09 06:24:13', '2020-11-09 06:24:13'),
(11, 1, 3, 1, 1, 1, 'Rain', '2020-11-09 06:24:13', '2020-11-09 06:24:13'),
(12, 1, 1, 1, 1, 1, '8545', '2020-11-10 08:11:40', '2020-11-10 08:11:40'),
(13, 1, 2, 1, 1, 1, 'I did not know', '2020-11-10 08:35:38', '2020-11-10 08:35:38'),
(14, 1, 7, 1, 1, 1, 'I did not know', '2020-11-10 08:35:38', '2020-11-10 08:35:38'),
(15, 1, 9, 1, 1, 1, 'I did not know', '2020-11-10 08:35:38', '2020-11-10 08:35:38'),
(16, 2, 3, 1, 2, 2, 'dadasdsa', '2021-02-07 15:26:03', '2021-02-07 15:26:03'),
(17, 3, 2, 1, 2, 2, 'test', '2021-02-07 15:26:41', '2021-02-07 15:26:41'),
(18, 2, 3, 1, 2, 2, 'dsfsfs', '2021-02-07 15:50:24', '2021-02-07 15:50:24'),
(19, 2, 3, 1, 2, 2, 'dsfsfs', '2021-02-07 15:52:26', '2021-02-07 15:52:26'),
(20, 2, 3, 1, 2, 2, 'dsfsfs', '2021-02-07 15:54:13', '2021-02-07 15:54:13'),
(21, 1, 3, 1, 1, 1, 'Testing 2021', '2021-02-07 16:09:25', '2021-02-07 16:09:25'),
(22, 1, 4, 1, 1, 1, 'Testing 2021', '2021-02-07 16:09:25', '2021-02-07 16:09:25'),
(23, 1, 1, 1, 2, 1, '2021 TEST', '2021-02-07 16:15:05', '2021-02-07 16:15:05'),
(24, 1, 4, 1, 2, 1, '2021 TEST', '2021-02-07 16:15:05', '2021-02-07 16:15:05'),
(25, 1, 6, 1, 2, 1, '2021 TEST', '2021-02-07 16:15:05', '2021-02-07 16:15:05'),
(26, 1, 2, 1, 3, 1, '12:16 TEST 2021', '2021-02-07 16:17:16', '2021-02-07 16:17:16'),
(27, 1, 5, 2, 3, 1, 'BRYAN TEST', '2021-02-07 16:23:27', '2021-02-07 16:23:27'),
(28, 3, 3, 1, 1, 1, 'aliah test', '2021-02-09 08:27:12', '2021-02-09 08:27:12'),
(29, 3, 3, 1, 2, 1, 'aliah test 4', '2021-02-09 08:31:00', '2021-02-09 08:31:00'),
(30, 3, 8, 1, 2, 1, 'aliah test 4', '2021-02-09 08:31:00', '2021-02-09 08:31:00'),
(31, 3, 2, 2, 1, 1, 'cutting class', '2021-02-14 08:39:15', '2021-02-14 08:39:15'),
(32, 3, 3, 2, 2, 1, 'new', '2021-02-17 04:35:43', '2021-02-17 04:35:43'),
(33, 3, 2, 2, 1, 1, 'remarks', '2021-02-17 05:05:04', '2021-02-17 05:05:04'),
(34, 3, 5, 2, 1, 1, 'remarks', '2021-02-17 05:05:04', '2021-02-17 05:05:04'),
(35, 3, 2, 1, 1, 1, 'aliah test ', '2021-02-18 05:46:00', '2021-02-18 05:46:00'),
(36, 4, 2, 1, 1, 1, 'cutting', '2021-02-18 09:43:24', '2021-02-18 09:43:24'),
(37, 4, 2, 1, 1, 1, 'cutting', '2021-02-18 10:13:53', '2021-02-18 10:13:53'),
(38, 3, 9, 1, 1, 1, 'no id', '2021-02-18 10:15:38', '2021-02-18 10:15:38'),
(39, 4, 2, 1, 1, 1, 'cutting', '2021-02-18 10:22:13', '2021-02-18 10:22:13'),
(40, 4, 2, 1, 1, 1, 'cutting', '2021-02-18 10:25:00', '2021-02-18 10:25:00'),
(41, 4, 9, 1, 1, 1, 'no id', '2021-02-18 10:28:50', '2021-02-18 10:28:50'),
(42, 4, 9, 1, 1, 1, 'no id', '2021-02-18 10:50:05', '2021-02-18 10:50:05'),
(43, 4, 9, 1, 1, 1, 'no ID', '2021-02-18 10:51:16', '2021-02-18 10:51:16'),
(44, 3, 6, 1, 1, 1, 'test', '2021-02-18 15:11:46', '2021-02-18 15:11:46'),
(45, 3, 8, 1, 2, 1, 'test aliah', '2021-02-18 15:12:45', '2021-02-18 15:12:45'),
(46, 3, 7, 1, 2, 1, 'aliah test', '2021-02-18 15:14:46', '2021-02-18 15:14:46'),
(47, 3, 3, 2, 2, 1, 'test aliah 1', '2021-02-18 15:16:04', '2021-02-18 15:16:04'),
(48, 3, 3, 1, 1, 1, 'test 2', '2021-02-18 15:19:58', '2021-02-18 15:19:58'),
(49, 3, 3, 1, 1, 1, 'asdfghj', '2021-02-18 20:55:56', '2021-02-18 20:55:56'),
(50, 3, 2, 1, 1, 1, 'test with phpmailer aliah', '2021-02-18 21:26:07', '2021-02-18 21:26:07'),
(51, 4, 2, 1, 2, 1, 'cutting', '2021-02-18 21:44:53', '2021-02-18 21:44:53'),
(52, 3, 9, 1, 2, 1, 'test php', '2021-02-19 01:26:14', '2021-02-19 01:26:14'),
(53, 3, 2, 1, 1, 1, 'php test 1', '2021-02-19 01:29:25', '2021-02-19 01:29:25'),
(54, 3, 2, 1, 1, 1, 'header test ', '2021-02-19 01:31:55', '2021-02-19 01:31:55'),
(55, 3, 2, 1, 1, 1, 'aliah test, mailer should not have output', '2021-02-19 01:34:43', '2021-02-19 01:34:43'),
(56, 3, 9, 1, 1, 1, 'aliah header() ', '2021-02-19 01:42:02', '2021-02-19 01:42:02'),
(57, 4, 2, 1, 1, 1, 'cutting', '2021-02-20 11:22:46', '2021-02-20 11:22:46'),
(58, 4, 2, 1, 2, 1, 'cutting', '2021-02-20 11:23:23', '2021-02-20 11:23:23'),
(59, 3, 3, 1, 1, 1, 'new', '2021-02-21 05:10:00', '2021-02-21 05:10:00'),
(60, 3, 1, 1, 2, 1, 'aliah', '2021-02-21 05:12:18', '2021-02-21 05:12:18'),
(61, 4, 9, 1, 2, 1, 'no id', '2021-02-21 06:24:45', '2021-02-21 06:24:45'),
(62, 3, 2, 1, 1, 1, 'das', '2021-02-21 14:37:26', '2021-02-21 14:37:26'),
(63, 4, 9, 1, 2, 1, 'no ID', '2021-02-22 01:35:57', '2021-02-22 01:35:57'),
(64, 4, 5, 1, 1, 1, 'dada', '2021-02-23 06:24:05', '2021-02-23 06:24:05'),
(65, 4, 7, 1, 1, 1, 'dada', '2021-02-23 06:37:09', '2021-02-23 06:37:09'),
(66, 3, 3, 1, 1, 1, 'aliah', '2021-02-23 06:39:38', '2021-02-23 06:39:38'),
(67, 4, 9, 1, 1, 1, 'Palace', '2021-02-23 06:42:02', '2021-02-23 06:42:02'),
(68, 3, 1, 1, 1, 1, '2:51', '2021-02-23 06:51:33', '2021-02-23 06:51:33'),
(69, 3, 3, 1, 1, 1, 'aliah 2:57', '2021-02-23 06:58:05', '2021-02-23 06:58:05'),
(70, 3, 2, 1, 1, 1, '3:15', '2021-02-23 07:15:46', '2021-02-23 07:15:46'),
(71, 4, 9, 1, 1, 1, 'No ID', '2021-02-24 00:02:50', '2021-02-24 00:02:50'),
(72, 3, 2, 1, 1, 1, 'dadasas', '2021-02-24 01:25:50', '2021-02-24 01:25:50'),
(73, 3, 6, 1, 1, 1, 'dasdas', '2021-02-24 01:33:35', '2021-02-24 01:33:35'),
(74, 3, 7, 1, 1, 1, 'success', '2021-02-24 01:39:11', '2021-02-24 01:39:11'),
(75, 3, 2, 1, 2, 1, '9th', '2021-02-24 01:55:44', '2021-02-24 01:55:44'),
(76, 3, 7, 1, 1, 1, '10TH', '2021-02-24 01:57:50', '2021-02-24 01:57:50'),
(77, 3, 4, 1, 1, 1, '11', '2021-02-24 02:00:14', '2021-02-24 02:00:14'),
(78, 3, 2, 1, 1, 1, '12', '2021-02-24 02:01:16', '2021-02-24 02:01:16'),
(79, 4, 9, 1, 1, 1, 'no id', '2021-02-24 02:22:33', '2021-02-24 02:22:33'),
(80, 4, 9, 1, 2, 1, 'no id', '2021-02-24 02:47:48', '2021-02-24 02:47:48'),
(81, 4, 9, 1, 1, 1, 'no id', '2021-02-24 02:55:14', '2021-02-24 02:55:14'),
(82, 4, 9, 1, 1, 1, 'No id', '2021-02-24 03:16:37', '2021-02-24 03:16:37'),
(83, 4, 9, 1, 1, 1, 'no id', '2021-02-24 04:37:17', '2021-02-24 04:37:17'),
(84, 4, 9, 1, 2, 1, 'No id', '2021-02-24 04:38:26', '2021-02-24 04:38:26'),
(85, 3, 2, 1, 2, 1, '20 aliah', '2021-02-24 05:14:41', '2021-02-24 05:14:41'),
(86, 3, 5, 1, 1, 1, 'adas', '2021-02-24 05:33:30', '2021-02-24 05:33:30'),
(87, 3, 9, 1, 2, 1, '120', '2021-02-24 05:43:10', '2021-02-24 05:43:10'),
(88, 3, 9, 1, 2, 1, 'sdadas', '2021-02-24 05:46:38', '2021-02-24 05:46:38'),
(89, 3, 3, 1, 2, 1, 'last', '2021-02-24 05:47:45', '2021-02-24 05:47:45'),
(90, 7, 9, 1, 1, 1, 'no id', '2021-02-24 05:51:15', '2021-02-24 05:51:15'),
(91, 3, 9, 1, 2, 1, '2019', '2021-02-24 07:25:13', '2021-02-24 07:25:13'),
(92, 3, 1, 2, 1, 1, 'ghghg', '2021-02-24 07:28:17', '2021-02-24 07:28:17'),
(93, 3, 3, 1, 1, 1, 'dsadsa', '2021-02-24 07:31:43', '2021-02-24 07:31:43'),
(94, 3, 2, 2, 2, 1, 'text2', '2021-02-24 07:37:15', '2021-02-24 07:37:15'),
(95, 3, 4, 2, 2, 1, 'vvv', '2021-02-24 07:40:16', '2021-02-24 07:40:16'),
(96, 4, 9, 1, 1, 1, 'No id', '2021-02-24 07:45:09', '2021-02-24 07:45:09'),
(97, 4, 9, 1, 1, 1, 'No ID', '2021-02-24 07:51:21', '2021-02-24 07:51:21'),
(98, 4, 10, 1, 1, 1, 'No ID', '2021-02-24 07:51:24', '2021-02-24 07:51:24'),
(99, 8, 9, 1, 1, 1, 'no id', '2021-02-24 09:00:37', '2021-02-24 09:00:37'),
(100, 9, 9, 1, 1, 1, 'No ID', '2021-02-24 09:01:50', '2021-02-24 09:01:50'),
(101, 10, 10, 1, 1, 1, 'Not in-proper attire', '2021-02-24 09:02:37', '2021-02-24 09:02:37'),
(102, 3, 3, 1, 1, 1, 'asdfg', '2021-02-24 10:22:50', '2021-02-24 10:22:50'),
(103, 3, 2, 1, 2, 1, 'll', '2021-02-24 10:23:50', '2021-02-24 10:23:50'),
(104, 3, 2, 1, 1, 1, 'hidden', '2021-02-24 23:56:00', '2021-02-24 23:56:00'),
(105, 3, 9, 1, 1, 1, 'hidden', '2021-02-24 23:56:02', '2021-02-24 23:56:02'),
(106, 3, 2, 2, 1, 1, 'ghj', '2021-02-25 00:15:51', '2021-02-25 00:15:51'),
(107, 3, 2, 2, 2, 1, 'Phone tes', '2021-02-25 09:28:52', '2021-02-25 09:28:52'),
(108, 3, 1, 1, 1, 1, 'test', '2021-02-25 12:43:55', '2021-02-25 12:43:55'),
(109, 4, 3, 1, 1, 1, 'ok', '2021-02-25 12:59:57', '2021-02-25 12:59:57'),
(110, 8, 11, 1, 2, 1, 'Smoking', '2021-02-26 00:13:52', '2021-02-26 00:13:52'),
(111, 9, 4, 1, 1, 1, 'Carrying a knife', '2021-02-26 00:14:35', '2021-02-26 00:14:35'),
(112, 9, 9, 1, 2, 3, 'No ID', '2021-02-26 00:52:29', '2021-02-26 00:52:29'),
(113, 8, 10, 1, 1, 3, 'Not in proper Attire', '2021-02-26 00:53:17', '2021-02-26 00:53:17'),
(114, 10, 11, 1, 3, 1, 'Smoking at 6th floor ', '2021-02-26 00:54:24', '2021-02-26 00:54:24'),
(115, 9, 1, 1, 2, 3, 'Threatening the guards', '2021-02-26 00:55:00', '2021-02-26 00:55:00'),
(116, 8, 9, 1, 2, 3, 'No id', '2021-02-26 00:55:35', '2021-02-26 00:55:35'),
(117, 9, 6, 1, 3, 3, 'Money', '2021-02-26 00:59:34', '2021-02-26 00:59:34'),
(118, 8, 10, 1, 2, 3, 'Not in Attire', '2021-02-26 01:00:27', '2021-02-26 01:00:27'),
(119, 9, 9, 1, 1, 3, 'No ID', '2021-02-26 01:05:46', '2021-02-26 01:05:46'),
(120, 9, 9, 1, 3, 3, 'No id', '2021-02-26 01:10:37', '2021-02-26 01:10:37'),
(121, 3, 1, 1, 2, 1, 'test 1 ', '2021-02-26 04:58:13', '2021-02-26 04:58:13'),
(122, 4, 9, 1, 1, 3, 'No id', '2021-02-26 05:35:37', '2021-02-26 05:35:37'),
(123, 3, 1, 1, 1, 1, 'no dress', '2021-02-27 01:36:00', '2021-02-27 01:36:00'),
(124, 4, 9, 1, 1, 3, 'No ID', '2021-02-27 05:57:04', '2021-02-27 05:57:04'),
(125, 4, 9, 1, 3, 3, 'ID forgot', '2021-02-27 07:08:42', '2021-02-27 07:08:42'),
(126, 4, 2, 1, 3, 3, 'ID forgot', '2021-02-27 07:08:44', '2021-02-27 07:08:44'),
(127, 4, 9, 1, 2, 1, 'No id In the morning', '2021-02-27 21:55:57', '2021-02-27 21:55:57'),
(128, 4, 9, 1, 3, 3, 'No ID in the morning and wearing a onesie', '2021-02-27 22:18:54', '2021-02-27 22:18:54'),
(129, 4, 10, 1, 3, 3, 'No ID in the morning and wearing a onesie', '2021-02-27 22:18:56', '2021-02-27 22:18:56'),
(130, 4, 9, 2, 3, 1, 'No ID at 6:00 in the morning, and wearing a Onesie.', '2021-02-27 22:34:48', '2021-02-27 22:34:48'),
(131, 4, 10, 1, 3, 1, 'No ID at 6:00 in the morning, and wearing a Onesie.', '2021-02-27 22:34:51', '2021-02-27 22:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `violation_code`
--

CREATE TABLE `violation_code` (
  `id` int(11) NOT NULL,
  `code` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `violation_code`
--

INSERT INTO `violation_code` (`id`, `code`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, '7.4.1', 'Dangers life and security of the community in APC', 'major', '2020-10-29 00:00:00', '2020-10-29 00:00:00'),
(2, '7.4.2', 'Cutting Class for SHS', 'major', '2020-10-29 00:00:00', '2020-10-29 00:00:00'),
(3, '7.4.3', 'Forgery or tampering of documents', 'major', '2020-10-29 00:00:00', '2020-10-29 00:00:00'),
(4, '7.4.8', 'Carrying firearms or deadly weapons', 'major', '2020-10-29 00:00:00', '2020-10-29 00:00:00'),
(5, '7.5.1', 'Unauthorize sale of any item without permission', 'minor', '2020-10-29 00:00:00', '2020-10-29 00:00:00'),
(6, '7.5.2', 'Soliciting money ', 'minor', '2020-10-29 00:00:00', '2020-10-29 00:00:00'),
(7, '7.4.4', 'Sexual Harassment', 'major', '2020-11-02 00:00:00', '2020-11-02 00:00:00'),
(8, '7.4.5', 'Sexual advances in words or deeds', 'major', '2020-11-02 00:00:00', '2020-11-02 00:00:00'),
(9, '7.5.9', 'No School ID', 'minor', '2020-11-07 00:00:00', '2020-11-07 00:00:00'),
(10, '7.9.10', 'Dress Code Violation', 'minor', '2020-11-07 00:00:00', '2020-11-07 00:00:00'),
(11, '7.5.12', 'Smoking within the school premise', 'minor', '2020-11-07 00:00:00', '2020-11-07 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guardian_id` (`guardian_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `notification_status_id` (`notification_status_id`);

--
-- Indexes for table `notification_status`
--
ALTER TABLE `notification_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `section_student`
--
ALTER TABLE `section_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`),
  ADD KEY `staff_type_id` (`staff_type_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `staff_type`
--
ALTER TABLE `staff_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guardian_id` (`guardian_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `violation`
--
ALTER TABLE `violation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`section_student_id`),
  ADD KEY `violation_code_id` (`violation_code_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `term_id` (`term_id`);

--
-- Indexes for table `violation_code`
--
ALTER TABLE `violation_code`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notification_status`
--
ALTER TABLE `notification_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `section_student`
--
ALTER TABLE `section_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff_type`
--
ALTER TABLE `staff_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `violation`
--
ALTER TABLE `violation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `violation_code`
--
ALTER TABLE `violation_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`guardian_id`) REFERENCES `guardian` (`id`),
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `notification_ibfk_3` FOREIGN KEY (`notification_status_id`) REFERENCES `notification_status` (`id`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `section_student`
--
ALTER TABLE `section_student`
  ADD CONSTRAINT `section_student_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`),
  ADD CONSTRAINT `section_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`staff_type_id`) REFERENCES `staff_type` (`id`),
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`guardian_id`) REFERENCES `guardian` (`id`);

--
-- Constraints for table `violation`
--
ALTER TABLE `violation`
  ADD CONSTRAINT `violation_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `violation_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `violation_ibfk_3` FOREIGN KEY (`section_student_id`) REFERENCES `section_student` (`id`),
  ADD CONSTRAINT `violation_ibfk_4` FOREIGN KEY (`violation_code_id`) REFERENCES `violation_code` (`id`),
  ADD CONSTRAINT `violation_ibfk_5` FOREIGN KEY (`term_id`) REFERENCES `term` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
