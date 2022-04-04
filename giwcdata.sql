-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 02, 2022 at 04:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giwcinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `affilate`
--

CREATE TABLE `affilate` (
  `affno` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `affdate` date NOT NULL,
  `gender` set('Male','Female') NOT NULL,
  `status` set('Single','Married','Divorced','Widow','Widower') NOT NULL,
  `email` varchar(50) NOT NULL,
  `affmobile` text NOT NULL,
  `affaddress` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `affsince` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `afftithes`
--

CREATE TABLE `afftithes` (
  `tid` int(11) NOT NULL,
  `titheno` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `pdate` date NOT NULL,
  `titype` set('Personal','Company','N/A') NOT NULL,
  `pmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `pamount` decimal(15,2) NOT NULL,
  `others` set('Pledge','Project Offering','Donation','Seed Offering','First Fruit','Thanksgiving','Sacrifice Offering','N/A') NOT NULL,
  `otmonth` set('January','February','March','April','May','June','July','August','September','October','November','December','N/A') NOT NULL,
  `otamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `atdate` date NOT NULL,
  `atmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `program` set('Sunday Service','Anointing Service','Thanksgiving Service','Special Service','Tuesday Service','Friday Night Service') NOT NULL,
  `members` text NOT NULL,
  `visitors` text NOT NULL,
  `children` text NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` int(11) NOT NULL,
  `eventname` varchar(255) NOT NULL,
  `fdate` date NOT NULL,
  `todate` date NOT NULL,
  `eventtime` time NOT NULL,
  `speakers` varchar(255) NOT NULL,
  `eincome` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expid` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `expmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `expname` varchar(255) NOT NULL,
  `expgory` set('Sundry','Rentals','Hotel','Internet Broadband & Data','MTN Bills','Food and Lunch','Fuel-Pastor','Fuel-Others','Honoranium- Musicians','Honoranium- Preachers','Pastors Monthly Provisions','Retreats/ Outreach','Printing and Stationery','Hand Bills and Posters','Media & Publicity','Children Service Expenses','Bank Charges','Pastors Expense','Church Workers Salaries & Allowance','Maintenance & Repairs','Cleaning and Sanitation','Security','Electricals and Lightening','Communion Wine','Transport','Water for the Office','Water Bill','Tissues','Office Expenses','Pastor/Pastors Wife Expenses','Grass Maintenance','Equipments','Electricity Bills') NOT NULL,
  `paytm` set('Cash','Mobile Money','Bank Transfer','Debit Card','Bank Deposit') NOT NULL,
  `expamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expid`, `expdate`, `expmonth`, `expname`, `expgory`, `paytm`, `expamount`) VALUES
(1, '2021-01-01', 'January', 'Cleaning and Sanitation', 'Cleaning and Sanitation', 'Cash', '87.00'),
(2, '2021-01-01', 'January', 'Electricals and Lightening', 'Electricals and Lightening', 'Cash', '50.00'),
(3, '2021-01-01', 'January', 'Communion Wine', 'Communion Wine', 'Cash', '360.00'),
(4, '2021-01-01', 'January', 'Transport', 'Transport', 'Cash', '26.00'),
(5, '2021-01-01', 'January', 'Water for the Office', 'Water for the Office', 'Cash', '48.00'),
(6, '2021-01-01', 'January', 'Tissues', 'Tissues', 'Cash', '60.00'),
(7, '2021-01-01', 'January', 'Pastor/Pastors Wife Expenses', 'Pastor/Pastors Wife Expenses', 'Cash', '150.00'),
(8, '2021-01-03', 'January', 'Food and Lunch', 'Food and Lunch', 'Cash', '500.00'),
(9, '2021-01-03', 'January', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(10, '2021-01-03', 'January', 'Fuel-Others', 'Fuel-Others', 'Cash', '100.00'),
(11, '2021-01-03', 'January', 'Pastors Monthly Provisions', 'Pastors Monthly Provisions', 'Cash', '1000.00'),
(12, '2021-01-03', 'January', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '1750.00'),
(13, '2021-01-03', 'January', 'Electricals and Lightening', 'Electricals and Lightening', 'Cash', '760.00'),
(14, '2021-01-03', 'January', 'Transport', 'Transport', 'Cash', '100.00'),
(15, '2021-01-03', 'January', 'Office Expenses', 'Office Expenses', 'Cash', '682.00'),
(16, '2021-01-10', 'January', 'Printing and Stationery', 'Printing and Stationery', 'Cash', '115.00'),
(17, '2021-01-10', 'January', 'Water Bill', 'Water Bill', 'Cash', '200.00'),
(18, '2021-01-10', 'January', 'Office Expenses', 'Office Expenses', 'Cash', '902.00'),
(19, '2021-01-10', 'January', 'Grass Maintenance', 'Grass Maintenance', 'Cash', '250.00'),
(20, '2021-01-17', 'January', 'Food and Lunch', 'Food and Lunch', 'Cash', '330.00'),
(21, '2021-01-17', 'January', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(22, '2021-01-17', 'January', 'Fuel-Others', 'Fuel-Others', 'Cash', '100.00'),
(23, '2021-01-17', 'January', 'Office Expenses', 'Office Expenses', 'Cash', '910.00'),
(24, '2021-01-22', 'January', 'Internet Broadband & Data', 'Internet Broadband & Data', 'Cash', '100.00'),
(25, '2021-01-22', 'January', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(26, '2021-01-22', 'January', 'Transport', 'Transport', 'Cash', '70.00'),
(27, '2021-01-24', 'January', 'Rentals', 'Rentals', 'Cash', '30.00'),
(28, '2021-01-24', 'January', 'Food and Lunch', 'Food and Lunch', 'Cash', '110.00'),
(29, '2021-01-24', 'January', 'Fuel-Others', 'Fuel-Others', 'Cash', '50.00'),
(30, '2021-01-24', 'January', 'Transport', 'Transport', 'Cash', '50.00'),
(31, '2021-01-24', 'January', 'Office Expenses', 'Office Expenses', 'Cash', '550.00'),
(32, '2021-01-25', 'January', 'Food and Lunch', 'Food and Lunch', 'Cash', '95.00'),
(33, '2021-01-25', 'January', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '100.00'),
(34, '2021-01-26', 'January', 'Rentals', 'Rentals', 'Cash', '40.00'),
(35, '2021-01-26', 'January', 'Food and Lunch', 'Food and Lunch', 'Cash', '50.00'),
(36, '2021-01-26', 'January', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '150.00'),
(37, '2021-01-27', 'January', 'Communion Wine', 'Communion Wine', 'Cash', '200.00'),
(38, '2021-01-27', 'January', 'Office Expenses', 'Office Expenses', 'Cash', '150.00'),
(39, '2021-01-28', 'January', 'Communion Wine', 'Communion Wine', 'Cash', '70.00'),
(40, '2021-01-28', 'January', 'Transport', 'Transport', 'Cash', '50.00'),
(41, '2021-01-28', 'January', 'Office Expenses', 'Office Expenses', 'Cash', '50.00'),
(42, '2021-01-29', 'January', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '140.00'),
(43, '2021-01-29', 'January', 'Transport', 'Transport', 'Cash', '150.00'),
(44, '2021-01-29', 'January', 'Office Expenses', 'Office Expenses', 'Cash', '100.00'),
(45, '2021-01-31', 'January', 'Rentals', 'Rentals', 'Cash', '3420.00'),
(46, '2021-01-31', 'January', 'Food and Lunch', 'Food and Lunch', 'Cash', '500.00'),
(47, '2021-01-31', 'January', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(48, '2021-01-31', 'January', 'Honoranium-Preachers', 'Honoranium- Preachers', 'Cash', '3500.00'),
(49, '2021-01-31', 'January', 'Communion Wine', 'Communion Wine', 'Cash', '270.00'),
(50, '2021-01-31', 'January', 'Transport', 'Transport', 'Cash', '20.00'),
(51, '2021-01-31', 'January', 'Water for the Office', 'Water for the Office', 'Cash', '200.00'),
(52, '2021-01-31', 'January', 'Office Expenses', 'Office Expenses', 'Cash', '120.00'),
(53, '2021-01-19', 'January', 'Food and Lunch', 'Food and Lunch', 'Cash', '25.00'),
(54, '2021-01-19', 'January', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '250.00'),
(55, '2021-01-19', 'January', 'Transport', 'Transport', 'Cash', '60.00'),
(56, '2021-01-19', 'January', 'Tissues', 'Tissues', 'Cash', '95.00'),
(57, '2021-02-07', 'February', 'Rentals', 'Rentals', 'Cash', '5200.00'),
(58, '2021-02-07', 'February', 'Food and Lunch', 'Food and Lunch', 'Cash', '200.00'),
(59, '2021-02-07', 'February', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(60, '2021-02-07', 'February', 'Honoranium-Preachers', 'Honoranium- Preachers', 'Cash', '800.00'),
(61, '2021-02-07', 'February', 'Pastors Monthly Provisions', 'Pastors Monthly Provisions', 'Cash', '1000.00'),
(62, '2021-02-07', 'February', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '1500.00'),
(63, '2021-02-07', 'February', 'Maintenance & Repairs', 'Maintenance & Repairs', 'Cash', '350.00'),
(64, '2021-02-07', 'February', 'Office Expenses', 'Office Expenses', 'Cash', '965.00'),
(65, '2021-02-07', 'February', 'Equipments', 'Equipments', 'Cash', '1000.00'),
(66, '2021-02-09', 'February', 'Transport', 'Transport', 'Cash', '50.00'),
(67, '2021-02-10', 'February', 'Food and Lunch', 'Food and Lunch', 'Cash', '30.00'),
(68, '2021-02-10', 'February', 'Transport', 'Transport', 'Cash', '30.00'),
(69, '2021-02-11', 'February', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '100.00'),
(70, '2021-02-11', 'February', 'Fuel-Others', 'Fuel-Others', 'Cash', '50.00'),
(71, '2021-02-11', 'February', 'Office Expenses', 'Office Expenses', 'Cash', '50.00'),
(72, '2021-02-12', 'February', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(73, '2021-02-12', 'February', 'Transport', 'Transport', 'Cash', '80.00'),
(74, '2021-02-14', 'February', 'Rentals', 'Rentals', 'Cash', '200.00'),
(75, '2021-02-14', 'February', 'Printing and Stationery', 'Printing and Stationery', 'Cash', '200.00'),
(76, '2021-02-14', 'February', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '150.00'),
(77, '2021-02-14', 'February', 'Pastor/Pastors Wife Expenses', 'Pastor/Pastors Wife Expenses', 'Cash', '500.00'),
(78, '2021-02-14', 'February', 'Equipments', 'Equipments', 'Cash', '100.00'),
(79, '2021-02-16', 'February', 'Food and Lunch', 'Food and Lunch', 'Cash', '15.00'),
(80, '2021-02-16', 'February', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '70.00'),
(81, '2021-02-21', 'February', 'Rentals', 'Rentals', 'Cash', '200.00'),
(82, '2021-02-21', 'February', 'Food and Lunch', 'Food and Lunch', 'Cash', '35.00'),
(83, '2021-02-21', 'February', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '400.00'),
(84, '2021-02-23', 'February', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '150.00'),
(85, '2021-02-23', 'February', 'Office Expenses', 'Office Expenses', 'Cash', '100.00'),
(86, '2021-02-26', 'February', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '500.00'),
(87, '2021-02-26', 'February', 'Security', 'Security', 'Cash', '1000.00'),
(88, '2021-02-26', 'February', 'Water for the Office', 'Water for the Office', 'Cash', '500.00'),
(89, '2021-02-26', 'February', 'Office Expenses', 'Office Expenses', 'Cash', '786.00'),
(90, '2021-02-26', 'February', 'Equipments', 'Equipments', 'Cash', '600.00'),
(91, '2021-02-28', 'February', 'Rentals', 'Rentals', 'Cash', '110.00'),
(92, '2021-02-28', 'February', 'Food and Lunch', 'Food and Lunch', 'Cash', '85.00'),
(93, '2021-02-28', 'February', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(94, '2021-02-28', 'February', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '150.00'),
(95, '2021-02-28', 'February', 'Electricals and Lightening', 'Electricals and Lightening', 'Cash', '100.00'),
(96, '2021-02-28', 'February', 'Communion Wine', 'Communion Wine', 'Cash', '270.00'),
(97, '2021-02-28', 'February', 'Office Expenses', 'Office Expenses', 'Cash', '100.00'),
(98, '2021-03-03', 'March', 'Food and Lunch', 'Food and Lunch', 'Cash', '77.00'),
(99, '2021-03-03', 'March', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(100, '2021-03-04', 'March', 'Food and Lunch', 'Food and Lunch', 'Cash', '100.00'),
(101, '2021-03-04', 'March', 'Printing and Stationery', 'Printing and Stationery', 'Cash', '141.00'),
(102, '2021-03-05', 'March', 'Rentals', 'Rentals', 'Cash', '70.00'),
(103, '2021-03-05', 'March', 'Food and Lunch', 'Food and Lunch', 'Cash', '50.00'),
(104, '2021-03-05', 'March', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '250.00'),
(105, '2021-03-05', 'March', 'Cleaning and Sanitation', 'Cleaning and Sanitation', 'Cash', '120.00'),
(106, '2021-03-05', 'March', 'Water for the Office', 'Water for the Office', 'Cash', '52.00'),
(107, '2021-03-07', 'March', 'Internet Broadband & Data', 'Internet Broadband & Data', 'Cash', '600.00'),
(108, '2021-03-07', 'March', 'Food and Lunch', 'Food and Lunch', 'Cash', '1175.00'),
(109, '2021-03-07', 'March', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '500.00'),
(110, '2021-03-07', 'March', 'Honoranium-Preachers', 'Honoranium- Preachers', 'Cash', '500.00'),
(111, '2021-03-07', 'March', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '2050.00'),
(112, '2021-03-07', 'March', 'Security', 'Security', 'Cash', '1000.00'),
(113, '2021-03-07', 'March', 'Office Expenses', 'Office Expenses', 'Cash', '1800.00'),
(114, '2021-03-07', 'March', 'Pastor/Pastors Wife Expenses', 'Pastor/Pastors Wife Expenses', 'Cash', '2000.00'),
(115, '2021-03-07', 'March', 'Grass Maintenance', 'Grass Maintenance', 'Cash', '250.00'),
(116, '2021-03-09', 'March', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '100.00'),
(117, '2021-03-09', 'March', 'Office Expenses', 'Office Expenses', 'Cash', '210.00'),
(118, '2021-03-12', 'March', 'Rentals', 'Rentals', 'Cash', '100.00'),
(119, '2021-03-12', 'March', 'Food and Lunch', 'Food and Lunch', 'Cash', '105.00'),
(120, '2021-03-12', 'March', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(121, '2021-03-12', 'March', 'Water for the Office', 'Water for the Office', 'Cash', '20.00'),
(122, '2021-03-12', 'March', 'Office Expenses', 'Office Expenses', 'Cash', '60.00'),
(123, '2021-03-14', 'March', 'Food and Lunch', 'Food and Lunch', 'Cash', '700.00'),
(124, '2021-03-14', 'March', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(125, '2021-03-14', 'March', 'Maintenance & Repairs', 'Maintenance & Repairs', 'Cash', '150.00'),
(126, '2021-03-14', 'March', 'Security', 'Security', 'Cash', '650.00'),
(127, '2021-03-14', 'March', 'Transport', 'Transport', 'Cash', '100.00'),
(128, '2021-03-14', 'March', 'Water Bill', 'Water Bill', 'Cash', '890.00'),
(129, '2021-03-14', 'March', 'Office Expenses', 'Office Expenses', 'Cash', '400.00'),
(130, '2021-03-16', 'March', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '310.00'),
(131, '2021-03-16', 'March', 'Office Expenses', 'Office Expenses', 'Cash', '56.00'),
(132, '2021-03-19', 'March', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(133, '2021-03-19', 'March', 'Fuel-Others', 'Fuel-Others', 'Cash', '100.00'),
(134, '2021-03-19', 'March', 'Office Expensee', 'Office Expenses', 'Cash', '289.00'),
(135, '2021-03-21', 'March', 'Food and Lunch', 'Food and Lunch', 'Cash', '130.00'),
(136, '2021-03-21', 'March', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(137, '2021-03-21', 'March', 'Honoranium-Preachers', 'Honoranium- Preachers', 'Cash', '300.00'),
(138, '2021-03-21', 'March', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '250.00'),
(139, '2021-03-21', 'March', 'Security', 'Security', 'Cash', '500.00'),
(140, '2021-03-21', 'March', 'Electricals and Lightening', 'Electricals and Lightening', 'Cash', '620.00'),
(141, '2021-03-21', 'March', 'Communion Wine', 'Communion Wine', 'Cash', '165.00'),
(142, '2021-03-21', 'March', 'Office Expenses', 'Office Expenses', 'Cash', '165.00'),
(143, '2021-03-21', 'March', 'Printing and Stationery', 'Printing and Stationery', 'Cash', '300.00'),
(144, '2021-03-23', 'March', 'Office Expenses', 'Office Expenses', 'Cash', '80.00'),
(145, '2021-03-26', 'March', 'Food and Lunch', 'Food and Lunch', 'Cash', '119.00'),
(146, '2021-03-26', 'March', 'Fuel-Others', 'Fuel-Others', 'Cash', '50.00'),
(147, '2021-03-26', 'March', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '200.00'),
(148, '2021-03-26', 'March', 'Transport', 'Transport', 'Cash', '20.00'),
(149, '2021-03-26', 'March', 'Water for the Office', 'Water for the Office', 'Cash', '60.00'),
(150, '2021-03-26', 'March', 'Tissues', 'Tissues', 'Cash', '110.00'),
(151, '2021-03-26', 'March', 'Office Expenses', 'Office Expenses', 'Cash', '240.00'),
(152, '2021-03-28', 'March', 'Rentals', 'Rentals', 'Cash', '100.00'),
(153, '2021-03-28', 'March', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(154, '2021-03-28', 'March', 'Honoranium-Preachers', 'Honoranium- Preachers', 'Cash', '150.00'),
(155, '2021-03-28', 'March', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '300.00'),
(156, '2021-03-28', 'March', 'Communion Wine', 'Communion Wine', 'Cash', '400.00'),
(157, '2021-03-28', 'March', 'Office Expenses', 'Office Expenses', 'Cash', '630.00'),
(158, '2021-03-30', 'March', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '100.00'),
(159, '2021-03-30', 'March', 'Transport', 'Transport', 'Cash', '18.00'),
(160, '2021-04-02', 'April', 'Rentals', 'Rentals', 'Cash', '100.00'),
(161, '2021-04-02', 'April', 'Food and Lunch', 'Food and Lunch', 'Cash', '210.00'),
(162, '2021-04-02', 'April', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(163, '2021-04-02', 'April', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '500.00'),
(164, '2021-04-02', 'April', 'Maintenance & Repairs', 'Maintenance & Repairs', 'Cash', '185.00'),
(165, '2021-04-02', 'April', 'Office Expenses', 'Office Expenses', 'Cash', '200.00'),
(166, '2021-04-04', 'April', 'Food and Lunch', 'Food and Lunch', 'Cash', '1040.00'),
(167, '2021-04-04', 'April', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(168, '2021-04-04', 'April', 'Honoranium-Preachers', 'Honoranium- Preachers', 'Cash', '1800.00'),
(169, '2021-04-04', 'April', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '800.00'),
(170, '2021-04-04', 'April', 'Water for the Office', 'Water for the Office', 'Cash', '45.00'),
(171, '2021-04-04', 'April', 'Office Expenses', 'Office Expenses', 'Cash', '200.00'),
(172, '2021-04-11', 'April', 'Rentals', 'Rentals', 'Cash', '100.00'),
(173, '2021-04-11', 'April', 'Food and Lunch', 'Food and Lunch', 'Cash', '155.00'),
(174, '2021-04-11', 'April', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(175, '2021-04-11', 'April', 'Pastors Monthly Provisions', 'Pastors Monthly Provisions', 'Cash', '1000.00'),
(176, '2021-04-11', 'April', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '1250.00'),
(177, '2021-04-11', 'April', 'Water for the Office', 'Water for the Office', 'Cash', '200.00'),
(178, '2021-04-13', 'April', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '100.00'),
(179, '2021-04-13', 'April', 'Office Expenses', 'Office Expenses', 'Cash', '100.00'),
(180, '2021-04-16', 'April', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(181, '2021-04-16', 'April', 'Fuel-Others', 'Fuel-Others', 'Cash', '100.00'),
(182, '2021-04-16', 'April', 'Water for the Office', 'Water for the Office', 'Cash', '78.00'),
(183, '2021-04-16', 'April', 'Office Expenses', 'Office Expenses', 'Cash', '180.00'),
(184, '2021-04-18', 'April', 'Rentals', 'Rentals', 'Cash', '400.00'),
(185, '2021-04-18', 'April', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(186, '2021-04-18', 'April', 'Cleaning and Sanitation', 'Cleaning and Sanitation', 'Cash', '165.00'),
(187, '2021-04-18', 'April', 'Transport', 'Transport', 'Cash', '300.00'),
(188, '2021-04-18', 'April', 'Office Expenses', 'Office Expenses', 'Cash', '490.00'),
(189, '2021-04-20', 'April', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '150.00'),
(190, '2021-04-23', 'April', 'Food and Lunch', 'Food and Lunch', 'Cash', '85.00'),
(191, '2021-04-23', 'April', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(192, '2021-04-23', 'April', 'Fuel-Others', 'Fuel-Others', 'Cash', '100.00'),
(193, '2021-04-23', 'April', 'Transport', 'Transport', 'Cash', '15.00'),
(194, '2021-04-23', 'April', 'Water for the Office', 'Water for the Office', 'Cash', '50.00'),
(195, '2021-04-23', 'April', 'Office Expenses', 'Office Expenses', 'Cash', '50.00'),
(196, '2021-04-25', 'April', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '500.00'),
(197, '2021-04-25', 'April', 'Communion Wine', 'Communion Wine', 'Cash', '250.00'),
(198, '2021-04-25', 'April', 'Transport', 'Transport', 'Cash', '250.00'),
(199, '2021-04-25', 'April', 'Office Expenses', 'Office Expenses', 'Cash', '414.00'),
(200, '2021-04-27', 'April', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '95.00'),
(201, '2021-04-30', 'April', 'Food and Lunch', 'Food and Lunch', 'Cash', '32.00'),
(202, '2021-04-30', 'April', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '750.00'),
(203, '2021-04-30', 'April', 'Fuel-Others', 'Fuel-Others', 'Cash', '70.00'),
(204, '2021-04-30', 'April', 'Transport', 'Transport', 'Cash', '100.00'),
(205, '2021-05-02', 'May', 'Rentals', 'Rentals', 'Cash', '100.00'),
(206, '2021-05-02', 'May', 'Internet Broadband & Data', 'Internet Broadband & Data', 'Cash', '400.00'),
(207, '2021-05-02', 'May', 'Pastors Monthly Provisions', 'Pastors Monthly Provisions', 'Cash', '1000.00'),
(208, '2021-05-02', 'May', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '2800.00'),
(209, '2021-05-02', 'May', 'Security', 'Security', 'Cash', '1000.00'),
(210, '2021-05-02', 'May', 'Transport', 'Transport', 'Cash', '250.00'),
(211, '2021-05-02', 'May', 'Water for the Office', 'Water for the Office', 'Cash', '415.00'),
(212, '2021-05-02', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '400.00'),
(213, '2021-05-04', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '18.00'),
(214, '2021-05-07', 'May', 'Food and Lunch', 'Food and Lunch', 'Cash', '100.00'),
(215, '2021-05-07', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(216, '2021-05-07', 'May', 'Fuel-Others', 'Fuel-Others', 'Cash', '70.00'),
(217, '2021-05-07', 'May', 'Maintenance & Repairs', 'Maintenance & Repairs', 'Cash', '90.00'),
(218, '2021-05-07', 'May', 'Transport', 'Transport', 'Cash', '60.00'),
(219, '2021-05-07', 'May', 'Water for the Office', 'Water for the Office', 'Cash', '75.00'),
(220, '2021-05-07', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '50.00'),
(221, '2021-05-09', 'May', 'Rentals', 'Rentals', 'Cash', '1500.00'),
(222, '2021-05-09', 'May', 'Food and Lunch', 'Food and Lunch', 'Cash', '710.00'),
(223, '2021-05-09', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(224, '2021-05-09', 'May', 'Fuel-Others', 'Fuel-Others', 'Cash', '200.00'),
(225, '2021-05-09', 'May', 'Retreats/Outreach', 'Retreats/ Outreach', 'Cash', '1500.00'),
(226, '2021-05-09', 'May', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '2250.00'),
(227, '2021-05-09', 'May', 'Maintenance & Repairs', 'Maintenance & Repairs', 'Cash', '970.00'),
(228, '2021-05-09', 'May', 'Cleaning and Sanitation', 'Cleaning and Sanitation', 'Cash', '350.00'),
(229, '2021-05-09', 'May', 'Security', 'Security', 'Cash', '335.00'),
(230, '2021-05-09', 'May', 'Electricals and Lightening', 'Electricals and Lightening', 'Cash', '100.00'),
(231, '2021-05-09', 'May', 'Transport', 'Transport', 'Cash', '210.00'),
(232, '2021-05-09', 'May', 'Water for the Office', 'Water for the Office', 'Cash', '75.00'),
(233, '2021-05-09', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '952.00'),
(234, '2021-05-11', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '100.00'),
(235, '2021-05-11', 'May', 'Cleaning and Sanitation', 'Cleaning and Sanitation', 'Cash', '50.00'),
(236, '2021-05-14', 'May', 'Rentals', 'Rentals', 'Cash', '100.00'),
(237, '2021-05-14', 'May', 'Food and Lunch', 'Food and Lunch', 'Cash', '137.00'),
(238, '2021-05-14', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(239, '2021-05-14', 'May', 'Fuel-Others', 'Fuel-Others', 'Cash', '70.00'),
(240, '2021-05-14', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '250.00'),
(241, '2021-05-16', 'May', 'Food and Lunch', 'Food and Lunch', 'Cash', '90.00'),
(242, '2021-05-16', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(243, '2021-05-16', 'May', 'Children Service Expenses', 'Children Service Expenses', 'Cash', '300.00'),
(244, '2021-05-16', 'May', 'Pastors Expense', 'Pastors Expense', 'Cash', '840.00'),
(245, '2021-05-16', 'May', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '200.00'),
(246, '2021-05-16', 'May', 'Maintenance & Repairs', 'Maintenance & Repairs', 'Cash', '1320.00'),
(247, '2021-05-16', 'May', 'Transport', 'Transport', 'Cash', '250.00'),
(248, '2021-05-16', 'May', 'Water Bill', 'Water Bill', 'Cash', '502.00'),
(249, '2021-05-16', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '50.00'),
(250, '2021-05-18', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '220.00'),
(251, '2021-05-21', 'May', 'Food and Lunch', 'Food and Lunch', 'Cash', '155.00'),
(252, '2021-05-21', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(253, '2021-05-21', 'May', 'Transport', 'Transport', 'Cash', '20.00'),
(254, '2021-05-21', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '108.00'),
(255, '2021-05-23', 'May', 'Rentals', 'Rentals', 'Cash', '60.00'),
(256, '2021-05-23', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(257, '2021-05-23', 'May', 'Fuel-Others', 'Fuel-Others', 'Cash', '100.00'),
(258, '2021-05-23', 'May', 'Pastors Expenses', 'Pastors Expense', 'Cash', '200.00'),
(259, '2021-05-23', 'May', 'Church Workers Salaries & Allowance', 'Church Workers Salaries & Allowance', 'Cash', '250.00'),
(260, '2021-05-23', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '200.00'),
(261, '2021-05-26', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(262, '2021-05-26', 'May', 'Fuel-Others', 'Fuel-Others', 'Cash', '70.00'),
(263, '2021-05-26', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '162.00'),
(264, '2021-05-27', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(265, '2021-05-27', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '120.00'),
(266, '2021-05-28', 'May', 'Food and Lunch', 'Food and Lunch', 'Cash', '105.00'),
(267, '2021-05-28', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(268, '2021-05-28', 'May', 'Honoranium-Preachers', 'Honoranium- Preachers', 'Cash', '300.00'),
(269, '2021-05-28', 'May', 'Transport', 'Transport', 'Cash', '100.00'),
(270, '2021-05-28', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '319.00'),
(271, '2021-05-30', 'May', 'Rentals', 'Rentals', 'Cash', '100.00'),
(272, '2021-05-30', 'May', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '400.00'),
(273, '2021-05-30', 'May', 'Fuel-Others', 'Fuel-Others', 'Cash', '100.00'),
(274, '2021-05-30', 'May', 'Honoranium-Preachers', 'Honoranium- Preachers', 'Cash', '2000.00'),
(275, '2021-05-30', 'May', 'Pastors Expenses', 'Pastors Expense', 'Cash', '500.00'),
(276, '2021-05-30', 'May', 'Maintenance & Repairs', 'Maintenance & Repairs', 'Cash', '400.00'),
(277, '2021-05-30', 'May', 'Transport', 'Transport', 'Cash', '250.00'),
(278, '2021-05-30', 'May', 'Water for the Office', 'Water for the Office', 'Cash', '56.00'),
(279, '2021-05-30', 'May', 'Water Bill', 'Water Bill', 'Cash', '500.00'),
(280, '2021-05-30', 'May', 'Office Expenses', 'Office Expenses', 'Cash', '82.00'),
(281, '2021-06-27', 'June', 'Instrumentalist Transport', 'Transport', 'Cash', '400.00'),
(282, '2021-06-27', 'June', 'Pastor Expense', 'Pastors Expense', 'Cash', '200.00'),
(283, '2021-06-27', 'June', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(284, '2021-06-27', 'June', 'Sanitizer for Church', 'Sundry', 'Mobile Money', '450.00'),
(285, '2021-06-27', 'June', 'Food for the Office', 'Food and Lunch', 'Cash', '400.00'),
(286, '2021-06-27', 'June', 'Other Sundries', 'Sundry', 'Cash', '236.00'),
(287, '2021-06-29', 'June', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '50.00'),
(288, '2021-06-29', 'June', 'Transportation', 'Transport', 'Cash', '55.00'),
(289, '2021-07-02', 'July', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(290, '2021-07-02', 'July', 'Transportation', 'Transport', 'Cash', '30.00'),
(291, '2021-06-01', 'June', 'Fuel-Pastor', 'Fuel-Pastor', 'Cash', '400.00'),
(292, '2021-06-01', 'June', 'Communion for Service', 'Communion Wine', 'Cash', '100.00'),
(293, '2021-06-01', 'June', 'Fuel for Evans', 'Fuel-Others', 'Cash', '70.00'),
(294, '2021-06-04', 'June', 'Office Provisions', 'Sundry', 'Cash', '350.00'),
(295, '2021-06-06', 'June', 'Salaries for Church Workers', 'Church Workers Salaries & Allowance', 'Cash', '6400.00'),
(296, '2021-06-06', 'June', 'Salaries for Security,Cleaner and Grass Guy', 'Church Workers Salaries & Allowance', 'Cash', '1750.00'),
(297, '2021-06-06', 'June', 'Pastors Request', 'Pastors Expense', 'Cash', '2200.00'),
(298, '2021-06-06', 'June', 'Provision for Pastor House', 'Sundry', 'Cash', '1500.00'),
(299, '2021-06-06', 'June', 'MTN Bill for Pastor', 'Internet Broadband & Data', 'Cash', '400.00'),
(300, '2021-06-06', 'June', 'Instrumentalists Transportation', 'Sundry', 'Cash', '500.00'),
(301, '2021-06-06', 'June', 'Fuel for Evans', 'Fuel-Others', 'Cash', '200.00'),
(302, '2021-06-06', 'June', 'Provisions for Pastor Office', 'Sundry', 'Cash', '624.00'),
(303, '2021-06-06', 'June', 'Other Office Expenses', 'Sundry', 'Cash', '370.00'),
(304, '2021-06-11', 'June', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(305, '2021-06-11', 'June', 'Office Expenses', 'Sundry', 'Cash', '95.00'),
(306, '2021-06-13', 'June', 'Transportation for Tkd Instrumentalist', 'Sundry', 'Cash', '200.00'),
(307, '2021-06-13', 'June', 'ECG for the month', 'Electricity Bills', 'Cash', '200.00'),
(308, '2021-06-13', 'June', 'Pastor Car Repairs', 'Maintenance & Repairs', 'Cash', '1500.00'),
(309, '2021-06-13', 'June', 'Fuel for Evans', 'Fuel-Others', 'Cash', '200.00'),
(310, '2021-06-13', 'June', 'Other Office Expenses', 'Sundry', 'Cash', '640.00'),
(311, '2021-06-15', 'June', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '100.00'),
(312, '2021-06-18', 'June', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '150.00'),
(313, '2021-06-18', 'June', 'ECG Prepaid', 'Electricity Bills', 'Cash', '100.00'),
(314, '2021-06-20', 'June', 'Takoradi Instrumentalist Transportation', 'Transport', 'Cash', '600.00'),
(315, '2021-06-20', 'June', 'ECG for Church', 'Electricity Bills', 'Cash', '800.00'),
(316, '2021-06-20', 'June', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '200.00'),
(317, '2021-06-20', 'June', 'Fuel for Evans', 'Fuel-Others', 'Cash', '80.00'),
(318, '2021-06-20', 'June', 'Water for Office', 'Water for the Office', 'Cash', '370.00'),
(319, '2021-06-20', 'June', 'Canopy Rental for Children Service', 'Rentals', 'Cash', '80.00'),
(320, '2021-06-22', 'June', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '100.00'),
(321, '2021-06-22', 'June', 'Transportation', 'Transport', 'Cash', '10.00'),
(322, '2021-06-25', 'June', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '350.00'),
(323, '2021-06-25', 'June', 'Fuel for Evans', 'Fuel-Others', 'Cash', '100.00'),
(324, '2021-06-25', 'June', 'Other Office Expenses', 'Sundry', 'Cash', '270.00'),
(325, '2021-07-04', 'July', 'Salaries for Church Workers', 'Church Workers Salaries & Allowance', 'Cash', '7000.00'),
(326, '2021-07-04', 'July', 'Honoranium for Cassy Martey & Min Kofy', 'Honoranium- Musicians', 'Cash', '1500.00'),
(327, '2021-07-04', 'July', 'Pastor Provisions for the month', 'Pastors Monthly Provisions', 'Cash', '1500.00'),
(328, '2021-07-04', 'July', 'Takoradi Instrumemtalist Transportation', 'Transport', 'Cash', '400.00'),
(329, '2021-07-04', 'July', 'Pastors Monthly Provisions', 'Pastors Monthly Provisions', '', '1500.00'),
(330, '2021-07-04', 'July', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '200.00'),
(331, '2021-07-04', 'July', 'Fuel for Evans', 'Fuel-Others', 'Cash', '200.00'),
(332, '2021-07-04', 'July', 'Food for the Office', 'Food and Lunch', 'Cash', '630.00'),
(333, '2021-07-04', 'July', 'Cheorography for Children Service', 'Sundry', 'Cash', '300.00'),
(334, '2021-07-04', 'July', 'Pastor MTN Bill', 'Internet Broadband & Data', 'Cash', '400.00'),
(335, '2021-07-04', 'July', 'Money for Pastor', 'Sundry', 'Cash', '500.00'),
(336, '2021-07-04', 'July', 'Water for the church', 'Water Bill', 'Cash', '65.00'),
(337, '2021-07-06', 'July', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '100.00'),
(338, '2021-07-09', 'July', 'Fuel  for Papa', 'Fuel-Pastor', 'Cash', '200.00'),
(339, '2021-07-09', 'July', 'Fuel for Genset', 'Fuel-Others', 'Cash', '100.00'),
(340, '2021-07-09', 'July', 'ECG for the Church', 'Electricity Bills', 'Cash', '200.00'),
(341, '2021-07-09', 'July', 'Printing adverts', 'Sundry', 'Cash', '150.00'),
(342, '2021-06-13', 'June', 'ECG Meter Corrections', 'Sundry', 'Cash', '2500.00'),
(343, '2021-06-20', 'June', 'Honoranium for Visitng Pastor', 'Honoranium- Preachers', 'Cash', '4000.00'),
(344, '2021-07-11', 'July', 'Transportation for Takoradi Instrumentalist', 'Transport', 'Cash', '400.00'),
(345, '2021-07-11', 'July', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '200.00'),
(346, '2021-07-11', 'July', 'Fuel for Evans', 'Fuel-Others', 'Cash', '150.00'),
(347, '2021-07-11', 'July', 'Food for Office', 'Food and Lunch', 'Cash', '60.00'),
(348, '2021-07-11', 'July', 'Canopy for Sunday School', 'Rentals', 'Cash', '80.00'),
(349, '2021-07-11', 'July', 'Expenses on Papa Vehicle', 'Maintenance & Repairs', 'Cash', '1000.00'),
(350, '2021-07-16', 'July', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '200.00'),
(351, '2021-07-16', 'July', 'Fuel for Evans', 'Fuel-Others', 'Cash', '70.00'),
(352, '2021-07-16', 'July', 'Prepaid Electricity', 'Electricity Bills', 'Cash', '100.00'),
(353, '2021-07-18', 'July', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '200.00'),
(354, '2021-07-18', 'July', 'Takoradi Instrumentalists Transport', 'Transport', 'Cash', '400.00'),
(355, '2021-07-18', 'July', 'Money for Pastor', 'Pastors Expense', 'Cash', '150.00'),
(356, '2021-07-18', 'July', 'Food for Office', 'Food and Lunch', 'Cash', '90.00'),
(357, '2021-07-18', 'July', 'DStv for Papa', 'Sundry', '', '300.00'),
(358, '2021-07-18', 'July', 'Cash for Papa', 'Pastors Expense', 'Cash', '200.00'),
(359, '2021-07-18', 'July', 'Evans Car Repair', 'Maintenance & Repairs', 'Cash', '1000.00'),
(360, '2021-07-23', 'July', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '200.00'),
(361, '2021-07-23', 'July', 'Cash for Pastor', 'Pastors Expense', 'Cash', '300.00'),
(362, '2021-07-23', 'July', 'ECG Prepaid for Church', 'Electricity Bills', 'Cash', '200.00'),
(363, '2021-07-23', 'July', 'Fuel for Evans', 'Fuel-Others', 'Cash', '50.00'),
(364, '2021-07-23', 'July', 'Provisions for the Office', 'Sundry', 'Cash', '280.00'),
(365, '2021-07-24', 'July', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '250.00'),
(366, '2021-07-24', 'July', 'Cash for Pastor', 'Pastors Expense', 'Cash', '200.00'),
(367, '2021-07-25', 'July', 'Pendrive for Guest Artiste', 'Sundry', 'Cash', '1000.00'),
(368, '2021-07-25', 'July', 'Takoradi Instrumentalists', 'Sundry', 'Cash', '400.00'),
(369, '2021-07-25', 'July', 'Cash for Pastor', 'Pastors Expense', 'Cash', '100.00'),
(370, '2021-07-25', 'July', 'Water Bill for the month of June', 'Water Bill', 'Cash', '500.00'),
(371, '2021-07-25', 'July', 'Office Expenses', 'Office Expenses', 'Cash', '530.00'),
(372, '2021-07-25', 'July', 'Fuel for Evans', 'Fuel-Others', 'Cash', '100.00'),
(373, '2021-07-25', 'July', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(374, '2021-07-25', 'July', 'Zoomlion Bill', 'Sundry', 'Cash', '110.00'),
(375, '2021-07-30', 'July', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '200.00'),
(376, '2021-07-30', 'July', 'Fuel for Evans', 'Fuel-Others', 'Cash', '100.00'),
(377, '2021-07-30', 'July', 'Communion for Church', 'Communion Wine', 'Cash', '300.00'),
(378, '2021-07-30', 'July', 'Prepaid ECG', 'Electricity Bills', 'Cash', '100.00'),
(379, '2021-07-30', 'July', 'Provisions for the Office', 'Sundry', 'Cash', '165.00'),
(380, '2021-08-01', 'August', 'Honoranium for Guest Musician Min.Cobby Gold', 'Honoranium- Musicians', 'Cash', '1000.00'),
(381, '2021-08-01', 'August', 'Food for the Office', 'Food and Lunch', 'Cash', '80.00'),
(382, '2021-08-01', 'August', 'Salaries for Church Workers', 'Church Workers Salaries & Allowance', 'Cash', '7100.00'),
(383, '2021-08-01', 'August', 'Monthly Provision for Pastor', 'Pastors Monthly Provisions', 'Cash', '1500.00'),
(384, '2021-08-01', 'August', 'Transport for Takoradi Instrumentalists', 'Transport', 'Cash', '300.00'),
(385, '2021-08-01', 'August', 'Instrumentalist Guest Assistance', 'Honoranium- Musicians', 'Cash', '200.00'),
(386, '2021-08-01', 'August', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(387, '2021-08-01', 'August', 'Fuel for Evans', 'Fuel-Others', 'Cash', '100.00'),
(388, '2021-08-01', 'August', 'DStv Subscription for Pastor', 'Pastors Expense', 'Cash', '300.00'),
(389, '2021-08-01', 'August', 'MTN Bill for Pastor July', 'MTN Bills', 'Cash', '400.00'),
(390, '2021-08-01', 'August', 'Printing Items', 'Printing and Stationery', 'Cash', '640.00'),
(391, '2021-08-05', 'August', 'Prepaid Electricity', 'Electricity Bills', 'Cash', '200.00'),
(392, '2021-08-05', 'August', 'Banner for Church Advertisement', 'Hand Bills and Posters', 'Cash', '140.00'),
(393, '2021-08-05', 'August', 'Other Office Expenses', 'Office Expenses', 'Cash', '60.00'),
(394, '2021-08-06', 'August', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(395, '2021-08-06', 'August', 'Fuel for Evans', 'Fuel-Others', 'Cash', '50.00'),
(396, '2021-08-06', 'August', 'Guest Basist TnT', 'Transport', 'Cash', '70.00'),
(397, '2021-08-08', 'August', 'Food for Pastor', 'Food and Lunch', 'Cash', '80.00'),
(398, '2021-08-08', 'August', 'Transportation for Instrumentalists', 'Transport', 'Cash', '300.00'),
(399, '2021-08-08', 'August', 'Evans Car Repair', 'Maintenance & Repairs', 'Cash', '400.00'),
(400, '2021-08-08', 'August', 'Fuel for Pastor', 'Food and Lunch', 'Cash', '200.00'),
(401, '2021-08-08', 'August', 'Fuel for Evans', 'Fuel-Others', 'Cash', '70.00'),
(402, '2021-08-08', 'August', 'Allowance for Grass Maintenance', 'Church Workers Salaries & Allowance', 'Cash', '250.00'),
(403, '2021-08-08', 'August', 'Allowance for Cleaner', 'Church Workers Salaries & Allowance', 'Cash', '300.00'),
(404, '2021-08-08', 'August', 'Marketing Item for Program', 'Printing and Stationery', 'Cash', '640.00'),
(405, '2021-08-08', 'August', 'Canopy Rental', 'Rentals', 'Cash', '90.00'),
(406, '2021-08-08', 'August', 'Prepaid Electricity for Church', 'Electricity Bills', 'Cash', '100.00'),
(407, '2021-08-08', 'August', 'Provisions for the Office', 'Office Expenses', 'Cash', '60.00'),
(408, '2021-08-13', 'August', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '150.00'),
(409, '2021-08-13', 'August', 'Fuel for Evans', 'Fuel-Others', 'Cash', '50.00'),
(410, '2021-08-15', 'August', 'Transport for Instrumentalists', 'Transport', 'Cash', '350.00'),
(411, '2021-08-15', 'August', 'Cash for Pastor', 'Pastors Expense', 'Cash', '570.00'),
(412, '2021-08-15', 'August', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(413, '2021-08-15', 'August', 'Fuel for Evans', 'Fuel-Others', 'Cash', '100.00'),
(414, '2021-08-15', 'August', 'Food for Pastor', 'Food and Lunch', 'Cash', '80.00'),
(415, '2021-08-15', 'August', 'Canopy Hire', 'Rentals', 'Cash', '100.00'),
(416, '2021-08-15', 'August', 'Tissue for the Office', 'Tissues', 'Cash', '245.00'),
(417, '2021-08-20', 'August', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '150.00'),
(418, '2021-08-20', 'August', 'Printing of Hand Bills', 'Hand Bills and Posters', 'Cash', '200.00'),
(419, '2021-08-20', 'August', 'Transportation', 'Transport', 'Cash', '60.00'),
(420, '2021-08-22', 'August', 'Food for Pastor', 'Food and Lunch', 'Cash', '70.00'),
(421, '2021-08-22', 'August', 'Transportation', 'Transport', 'Cash', '450.00'),
(422, '2021-08-22', 'August', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(423, '2021-08-22', 'August', 'Generator Servicing', 'Maintenance & Repairs', 'Mobile Money', '400.00'),
(424, '2021-08-22', 'August', 'Fuel for Evans', 'Fuel-Pastor', 'Cash', '100.00'),
(425, '2021-08-22', 'August', 'Fuel for Genset', 'Fuel-Others', 'Cash', '100.00'),
(426, '2021-08-22', 'August', 'Carpet Cleaning', 'Maintenance & Repairs', 'Cash', '450.00'),
(427, '2021-08-22', 'August', 'Canopy Hire', 'Rentals', 'Cash', '100.00'),
(428, '2021-08-22', 'August', 'Plumbing Works', 'Maintenance & Repairs', 'Cash', '300.00'),
(429, '2021-08-24', 'August', 'Honoranium for Ministress', 'Honoranium- Musicians', 'Cash', '1000.00'),
(430, '2021-08-24', 'August', 'Airtime for Visiting Pastor', 'Sundry', 'Cash', '200.00'),
(431, '2021-08-24', 'August', 'Provisions for the Office', 'Office Expenses', 'Cash', '350.00'),
(432, '2021-08-25', 'August', 'Transportation', 'Transport', 'Cash', '70.00'),
(433, '2021-08-25', 'August', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(434, '2021-08-25', 'August', 'Fuel for Evans', 'Fuel-Others', 'Cash', '70.00'),
(435, '2021-08-25', 'August', 'Honoranium for Ministress', 'Honoranium- Musicians', 'Cash', '300.00'),
(436, '2021-08-25', 'August', 'Provisions for the Office', 'Pastors Monthly Provisions', 'Cash', '274.00'),
(437, '2021-08-25', 'August', 'Water for the Office', 'Water for the Office', 'Cash', '65.00'),
(438, '2021-08-26', 'August', 'Hotel for Visiting Pastor', 'Sundry', 'Cash', '2500.00'),
(439, '2021-08-26', 'August', 'Honoranium for Minister', 'Honoranium- Musicians', 'Cash', '3000.00'),
(440, '2021-08-26', 'August', 'Tips for Instrumentalists', 'Sundry', 'Cash', '200.00'),
(441, '2021-08-26', 'August', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(442, '2021-08-26', 'August', 'Honoranium for Visiting Pastor', 'Honoranium- Preachers', 'Cash', '6150.00'),
(443, '2021-08-26', 'August', 'Battery for Microphone', 'Sundry', 'Cash', '25.00'),
(444, '2021-08-27', 'August', 'Money for Pastor', 'Pastors Expense', 'Cash', '2650.00'),
(445, '2021-08-27', 'August', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '100.00'),
(446, '2021-08-27', 'August', 'Food for Instrumentalist', 'Food and Lunch', 'Cash', '100.00'),
(447, '2021-08-27', 'August', 'Drum Sticks', 'Sundry', 'Cash', '70.00'),
(448, '2021-08-29', 'August', 'TnT for Instrumentalist', 'Transport', 'Cash', '500.00'),
(449, '2021-08-29', 'August', 'Transport for Takoradi Instrumentalist', 'Transport', 'Cash', '400.00'),
(450, '2021-08-29', 'August', 'Money for Pastor', 'Sundry', 'Cash', '1400.00'),
(451, '2021-08-29', 'August', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(452, '2021-08-29', 'August', 'Water Bill for Pastor', 'Water Bill', 'Cash', '330.00'),
(453, '2021-08-29', 'August', 'Water Bill for Church', 'Water Bill', 'Cash', '450.00'),
(454, '2021-08-29', 'August', 'Canopy Rental for  Church', 'Rentals', 'Cash', '100.00'),
(455, '2021-08-29', 'August', 'DStv Bill for Pastor', 'Sundry', 'Cash', '300.00'),
(456, '2021-08-29', 'August', 'ECG for Church', 'Electricity Bills', 'Cash', '250.00'),
(457, '2021-08-29', 'August', 'Fuel for Evans', 'Fuel-Pastor', 'Cash', '100.00'),
(458, '2021-08-29', 'August', 'Annointing Oil', 'Sundry', 'Cash', '430.00'),
(459, '2021-08-29', 'August', 'Office Stationery', 'Printing and Stationery', 'Cash', '90.00'),
(460, '2021-09-05', 'September', 'Monthly Provision for Pastor', 'Pastors Monthly Provisions', 'Cash', '1500.00'),
(461, '2021-09-05', 'September', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(462, '2021-09-05', 'September', 'Allowance for Evans', 'Church Workers Salaries & Allowance', 'Cash', '500.00'),
(463, '2021-09-05', 'September', 'Allowance for Emmanuel Akortia', 'Church Workers Salaries & Allowance', 'Cash', '300.00'),
(464, '2021-09-05', 'September', 'Salaries for Church Workers', 'Church Workers Salaries & Allowance', 'Cash', '6500.00'),
(465, '2021-09-05', 'September', 'TnT for Takoradi Instrumentalist', 'Transport', 'Cash', '400.00'),
(466, '2021-09-05', 'September', 'Allowance for Pastor Richard', 'Church Workers Salaries & Allowance', 'Cash', '500.00'),
(467, '2021-09-05', 'September', 'Allowance for Grass Maintenance and Cleaner', 'Church Workers Salaries & Allowance', 'Cash', '550.00'),
(468, '2021-09-05', 'September', 'Office Items', 'Printing and Stationery', 'Cash', '300.00'),
(469, '2021-09-08', 'September', 'Water for the Office', 'Water for the Office', 'Cash', '55.00'),
(470, '2021-09-09', 'September', 'Money for Pastor', 'Rentals', 'Cash', '480.00'),
(471, '2021-09-10', 'September', 'Gas for the AC', 'Maintenance & Repairs', 'Cash', '100.00'),
(472, '2021-09-12', 'September', 'Transport for Takoradi Instrumentalist', 'Transport', 'Cash', '400.00'),
(473, '2021-09-12', 'September', 'Honoranium for Guest Preacher', 'Honoranium- Preachers', 'Cash', '3000.00'),
(474, '2021-09-12', 'September', 'Food for Guest', 'Food and Lunch', 'Cash', '200.00'),
(475, '2021-09-12', 'September', 'Transport for Singer', 'Transport', 'Cash', '100.00'),
(476, '2021-09-12', 'September', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(477, '2021-09-12', 'September', 'Cleaning Provisions for the Office', 'Office Expenses', 'Cash', '150.00'),
(478, '2021-09-17', 'September', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(479, '2021-09-19', 'September', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(480, '2021-09-19', 'September', 'Transport for Instrumentalist', 'Transport', 'Cash', '400.00'),
(481, '2021-09-19', 'September', 'Honoranium for Visiting Pastor', 'Honoranium- Preachers', 'Cash', '3000.00'),
(482, '2021-09-19', 'September', 'Water Bill', 'Water Bill', 'Cash', '472.00'),
(483, '2021-09-19', 'September', 'Electrical and Lightening', 'Electricals and Lightening', 'Cash', '2555.00'),
(484, '2021-09-19', 'September', 'Fuel for Kwasi', 'Fuel-Pastor', 'Cash', '500.00'),
(485, '2021-09-19', 'September', 'Office Items', 'Printing and Stationery', 'Cash', '352.00'),
(486, '2021-09-24', 'September', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(487, '2021-09-24', 'September', 'Provision for the Office', 'Office Expenses', 'Cash', '70.00'),
(488, '2021-09-26', 'September', 'Transport for Instrumentalists', 'Transport', 'Cash', '400.00'),
(489, '2021-09-26', 'September', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(490, '2021-09-26', 'September', 'Communion for Church', 'Communion Wine', 'Cash', '250.00'),
(491, '2021-09-26', 'September', 'Flyers for Printing', 'Printing and Stationery', 'Cash', '1500.00'),
(492, '2021-09-26', 'September', 'Water', 'Water Bill', 'Cash', '60.00'),
(493, '2021-09-26', 'September', 'Office Items', 'Office Expenses', 'Cash', '104.00'),
(494, '2021-10-01', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '600.00'),
(495, '2021-10-01', 'October', 'Fuel for Evans', 'Fuel-Others', 'Cash', '100.00'),
(496, '2021-10-01', 'October', 'Office Provisions', 'Office Expenses', 'Cash', '250.00'),
(497, '2021-10-03', 'October', 'Salary for Instrumentalists for September', 'Church Workers Salaries & Allowance', 'Cash', '3200.00'),
(498, '2021-10-03', 'October', 'Transport for Instrumentalists', 'Transport', 'Cash', '500.00'),
(499, '2021-10-03', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(500, '2021-10-03', 'October', 'Derrick and Evans Allowance', 'Church Workers Salaries & Allowance', 'Cash', '1000.00'),
(501, '2021-10-03', 'October', 'Monthly Provision for Pastor', 'Pastors Monthly Provisions', 'Cash', '2000.00'),
(502, '2021-10-03', 'October', 'Salary for Security', 'Church Workers Salaries & Allowance', 'Cash', '1300.00'),
(503, '2021-10-03', 'October', 'Allowance Help for Emmanuel Akortia', 'Church Workers Salaries & Allowance', 'Cash', '300.00'),
(504, '2021-10-03', 'October', 'Food for Office', 'Food and Lunch', 'Cash', '222.00'),
(505, '2021-10-03', 'October', 'DStv for Pastor', 'Pastors Expense', 'Cash', '300.00'),
(506, '2021-10-03', 'October', 'Sound Enigneer Salary', 'Church Workers Salaries & Allowance', 'Cash', '2000.00'),
(507, '2021-10-03', 'October', 'Grass Maintenance Salary', 'Church Workers Salaries & Allowance', 'Cash', '250.00'),
(508, '2021-10-03', 'October', 'Cleaner Salary', 'Church Workers Salaries & Allowance', 'Cash', '300.00'),
(509, '2021-10-03', 'October', 'Honoranium for Minister', 'Honoranium- Musicians', 'Cash', '1000.00'),
(510, '2021-10-06', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '100.00'),
(511, '2021-10-06', 'October', 'Oil for the Office', 'Sundry', 'Cash', '25.00'),
(512, '2021-10-07', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(513, '2021-10-07', 'October', 'Office Expenses', 'Office Expenses', 'Cash', '75.00'),
(514, '2021-10-08', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(515, '2021-10-08', 'October', 'TV installations', 'Maintenance & Repairs', 'Cash', '500.00'),
(516, '2021-10-08', 'October', 'Food for Guest', 'Food and Lunch', 'Cash', '164.00'),
(517, '2021-10-08', 'October', 'Honoranium for Guest Minister', 'Honoranium- Preachers', 'Cash', '1500.00'),
(518, '2021-10-10', 'October', 'Instrumentalist Transport', 'Transport', 'Cash', '400.00'),
(519, '2021-10-10', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(520, '2021-10-10', 'October', 'Food for the Office', 'Food and Lunch', 'Cash', '200.00'),
(521, '2021-10-10', 'October', 'Data for Church Wifi', 'Internet Broadband & Data', 'Cash', '100.00'),
(522, '2021-10-10', 'October', 'Rent loan for Fafa', 'Sundry', 'Cash', '1000.00'),
(523, '2021-10-10', 'October', 'Canopy Hire', 'Rentals', 'Cash', '100.00'),
(524, '2021-10-13', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(525, '2021-10-13', 'October', 'Fuel for Evans', 'Fuel-Others', 'Cash', '50.00'),
(526, '2021-10-13', 'October', 'Office Expenses- Bulbs', 'Office Expenses', 'Cash', '20.00'),
(527, '2021-10-14', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(528, '2021-10-14', 'October', 'DStv for Pastor Office', 'Sundry', 'Cash', '240.00'),
(529, '2021-10-14', 'October', 'Tissue for Office', 'Tissues', 'Cash', '200.00'),
(530, '2021-10-14', 'October', 'Evans Transport', 'Transport', 'Cash', '150.00'),
(531, '2021-10-15', 'October', 'DStv guy cost', 'Maintenance & Repairs', 'Cash', '200.00'),
(532, '2021-10-15', 'October', 'Part Honoranium', 'Sundry', 'Cash', '300.00'),
(533, '2021-10-15', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(534, '2021-10-15', 'October', 'Locks and other Office Expenses', 'Office Expenses', 'Cash', '22.00'),
(535, '2021-10-15', 'October', 'Prepaid Electricity', 'Electricity Bills', 'Cash', '100.00'),
(536, '2021-10-17', 'October', 'Honoranium for Singing Ministers', 'Honoranium- Musicians', 'Cash', '3000.00'),
(537, '2021-10-17', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(538, '2021-10-17', 'October', 'Transport Instrumentalist', 'Transport', 'Cash', '400.00'),
(539, '2021-10-17', 'October', 'Food for Pastor', 'Food and Lunch', 'Cash', '517.00'),
(540, '2021-10-17', 'October', 'Canopy Hire', 'Rentals', 'Cash', '100.00'),
(541, '2021-10-17', 'October', 'Office Items', 'Printing and Stationery', 'Cash', '150.00'),
(542, '2021-10-20', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '100.00'),
(543, '2021-10-20', 'October', 'Office Provisions', 'Office Expenses', 'Cash', '70.00'),
(544, '2021-10-22', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(545, '2021-10-22', 'October', 'Electricals Works', 'Electricals and Lightening', 'Cash', '400.00'),
(546, '2021-10-22', 'October', 'Honoranium for Singing Ministers', 'Honoranium- Musicians', 'Cash', '450.00'),
(547, '2021-10-24', 'October', 'Honoranium to Dr.Commey and Min.Alolome', 'Honoranium- Preachers', 'Cash', '6000.00'),
(548, '2021-10-24', 'October', 'Transport for Instrumentalists', 'Transport', 'Cash', '400.00'),
(549, '2021-10-24', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(550, '2021-10-24', 'October', 'T&T', 'Transport', 'Cash', '200.00'),
(551, '2021-10-24', 'October', 'Aircon Repairs', 'Maintenance & Repairs', 'Cash', '500.00'),
(552, '2021-10-24', 'October', 'Water for the Office', 'Water for the Office', 'Cash', '350.00'),
(553, '2021-10-24', 'October', 'Food for the Office', 'Food and Lunch', 'Cash', '250.00'),
(554, '2021-10-24', 'October', 'Canopy Hire', 'Rentals', 'Cash', '100.00'),
(555, '2021-10-31', 'October', 'Canopy Hire', 'Rentals', 'Cash', '100.00'),
(556, '2021-10-31', 'October', 'Fuel for Evans', 'Fuel-Others', 'Cash', '100.00'),
(557, '2021-10-31', 'October', 'Food for Office', 'Food and Lunch', 'Cash', '250.00'),
(558, '2021-10-31', 'October', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(559, '2021-10-31', 'October', 'Prepaid Electricity', 'Electricity Bills', 'Cash', '100.00'),
(560, '2021-10-31', 'October', 'Transport Instrumentalists', 'Transport', 'Cash', '400.00'),
(561, '2021-10-31', 'October', 'Communion for the Church', 'Communion Wine', 'Cash', '360.00'),
(562, '2021-10-31', 'October', 'Table Hire', 'Rentals', 'Cash', '40.00'),
(563, '2021-10-31', 'October', 'Pull-up Banner', 'Printing and Stationery', 'Cash', '500.00'),
(564, '2021-11-05', 'November', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(565, '2021-11-05', 'November', 'Fuel for Evans', 'Fuel-Others', 'Cash', '50.00'),
(566, '2021-11-07', 'November', 'Salaries for Church Staff', 'Church Workers Salaries & Allowance', 'Cash', '7000.00'),
(567, '2021-11-07', 'November', 'Provisions for Pastor', 'Pastors Monthly Provisions', 'Cash', '2000.00'),
(568, '2021-11-07', 'November', 'Allowances for Evans', 'Church Workers Salaries & Allowance', 'Cash', '500.00'),
(569, '2021-11-07', 'November', 'Transportation  for Instrumentalsits', 'Transport', 'Cash', '400.00'),
(570, '2021-11-07', 'November', 'DStv for church and pastor house', 'Sundry', 'Cash', '600.00'),
(571, '2021-11-07', 'November', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(572, '2021-11-07', 'November', 'Allowance for Cleaner', 'Church Workers Salaries & Allowance', 'Cash', '300.00'),
(573, '2021-11-07', 'November', 'Allowance for Grass guy', 'Church Workers Salaries & Allowance', 'Cash', '250.00'),
(574, '2021-11-12', 'November', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '400.00'),
(575, '2021-11-14', 'November', 'Transportation for Instrumentalists', 'Transport', 'Cash', '400.00');
INSERT INTO `expenses` (`expid`, `expdate`, `expmonth`, `expname`, `expgory`, `paytm`, `expamount`) VALUES
(576, '2021-11-14', 'November', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '300.00'),
(577, '2021-11-14', 'November', 'Fuel for Evans', 'Fuel-Pastor', 'Cash', '100.00'),
(578, '2021-11-14', 'November', 'Water for Church', 'Water Bill', 'Cash', '200.00'),
(579, '2021-11-14', 'November', 'Papa', 'Sundry', 'Cash', '1050.00'),
(580, '2021-11-14', 'November', 'Papa kids books', 'Sundry', 'Cash', '3000.00'),
(581, '2021-11-19', 'November', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '200.00'),
(582, '2021-11-19', 'November', 'Fuel for Evans', 'Fuel-Others', 'Cash', '50.00'),
(583, '2021-11-19', 'November', 'Other Expenses for Office', 'Office Expenses', 'Cash', '116.00'),
(584, '2021-11-21', 'November', 'Transportation for Instrumentalists', 'Transport', 'Cash', '400.00'),
(585, '2021-11-21', 'November', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '300.00'),
(586, '2021-11-21', 'November', 'Hotel Bills', 'Sundry', 'Cash', '4000.00'),
(587, '2021-11-21', 'November', 'Aircon Repairs', 'Maintenance & Repairs', 'Cash', '500.00'),
(588, '2021-11-21', 'November', 'Fuel for Generator', 'Fuel-Others', 'Cash', '200.00'),
(589, '2021-11-26', 'November', 'Fuel for Papa', 'Fuel-Pastor', 'Cash', '200.00'),
(590, '2021-11-26', 'November', 'Prepaid Electricity', 'Electricity Bills', 'Cash', '100.00'),
(591, '2021-11-28', 'November', 'Photographers for program', 'Sundry', 'Cash', '300.00'),
(592, '2021-11-28', 'November', 'Transportation for Instrumentalists', 'Transport', 'Cash', '400.00'),
(593, '2021-11-28', 'November', 'Honoranium for Joyce Blessings', 'Honoranium- Musicians', 'Cash', '3000.00'),
(594, '2021-11-28', 'November', 'Printing of hand bills for program', 'Printing and Stationery', 'Cash', '350.00'),
(595, '2021-11-28', 'November', 'Sprayer for Office car', 'Maintenance & Repairs', 'Mobile Money', '150.00'),
(596, '2021-11-28', 'November', 'Cash for Pastor', 'Sundry', 'Cash', '1000.00'),
(597, '2021-12-03', 'December', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '100.00'),
(598, '2021-12-03', 'December', 'Cash for Pastor', 'Sundry', 'Cash', '810.00'),
(599, '2021-12-03', 'December', 'Office Stationery, items, drinks, water and handkerchief', 'Office Expenses', 'Cash', '150.00'),
(600, '2021-12-05', 'December', 'Provision for Pastor', 'Pastors Monthly Provisions', 'Cash', '2000.00'),
(601, '2021-12-05', 'December', 'Salary for Sound Enigneer', 'Church Workers Salaries & Allowance', 'Cash', '2000.00'),
(602, '2021-12-05', 'December', 'Salaries for Instrumentalists', 'Church Workers Salaries & Allowance', 'Cash', '3200.00'),
(603, '2021-12-05', 'December', 'Transport for Instrumentalists', 'Transport', 'Cash', '400.00'),
(604, '2021-12-05', 'December', 'Salaries for Evans and Deerick', 'Church Workers Salaries & Allowance', 'Cash', '1000.00'),
(605, '2021-12-05', 'December', 'Salaries for Security guys', 'Church Workers Salaries & Allowance', 'Cash', '1300.00'),
(606, '2021-12-05', 'December', 'Honoranium for Prophet Awusanya', 'Honoranium- Preachers', 'Cash', '3000.00'),
(607, '2021-12-05', 'December', 'TV for Pastor Office Hire Purchase', 'Office Expenses', 'Cash', '1000.00'),
(608, '2021-12-05', 'December', 'MTN for Pastor', 'Internet Broadband & Data', 'Cash', '400.00'),
(609, '2021-12-05', 'December', 'DStv for Pastor and Church', 'Sundry', 'Cash', '600.00'),
(610, '2021-12-05', 'December', 'Cash for Pastor', 'Sundry', 'Cash', '1000.00'),
(611, '2021-12-05', 'December', 'Items for Ushers', 'Sundry', 'Cash', '230.00'),
(612, '2021-12-05', 'December', 'Food for the Guest', 'Food and Lunch', 'Cash', '100.00'),
(613, '2021-12-05', 'December', 'Canopy Hire', 'Rentals', 'Cash', '100.00'),
(614, '2021-12-10', 'December', 'Fuel for Pastor', 'Fuel-Pastor', 'Cash', '150.00'),
(615, '2021-12-10', 'December', 'Fuel for Evans', 'Fuel-Others', 'Cash', '50.00'),
(616, '2021-12-10', 'December', 'Electricity Prepaid', 'Electricity Bills', 'Cash', '100.00'),
(617, '2021-12-10', 'December', 'Transportation', 'Transport', 'Cash', '41.00');

-- --------------------------------------------------------

--
-- Table structure for table `joint`
--

CREATE TABLE `joint` (
  `jid` int(11) NOT NULL,
  `tmid1` varchar(250) NOT NULL,
  `tmid2` varchar(250) NOT NULL,
  `jdate` date NOT NULL,
  `titype` set('Personal','Company','N/A') NOT NULL,
  `jmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `jamount` decimal(15,2) NOT NULL,
  `jothers` set('Pledge','Project Offering','Donation','Seed Offering','First Fruit','Thanksgiving','Sacrifice Offering','N/A') NOT NULL,
  `jotmonth` set('January','February','March','April','May','June','July','August','September','October','November','December','N/A') NOT NULL,
  `jotamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joint`
--

INSERT INTO `joint` (`jid`, `tmid1`, `tmid2`, `jdate`, `titype`, `jmonth`, `jamount`, `jothers`, `jotmonth`, `jotamount`) VALUES
(1, 'GIWC-02', 'GIWC-01', '2021-06-06', 'Personal', 'May', '3000.00', 'N/A', 'N/A', '0.00'),
(2, 'GIWC-02', 'GIWC-01', '2021-07-04', 'Personal', 'June', '3400.00', 'N/A', 'N/A', '0.00'),
(3, 'GIWC-02', 'GIWC-01', '2021-08-01', 'Personal', 'July', '3400.00', 'N/A', 'N/A', '0.00'),
(4, 'GIWC-31', 'GIWC-32', '2021-06-06', 'Personal', 'May', '700.00', 'N/A', 'N/A', '0.00'),
(5, 'GIWC-02', 'GIWC-01', '2021-08-29', 'Personal', 'August', '3400.00', 'N/A', 'N/A', '0.00'),
(6, 'GIWC-02', 'GIWC-01', '2021-10-03', 'Personal', 'September', '3400.00', 'N/A', 'N/A', '0.00'),
(7, 'GIWC-31', 'GIWC-32', '2021-09-12', 'Personal', 'June', '700.00', 'N/A', 'N/A', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `adid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passkey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`adid`, `username`, `passkey`) VALUES
(1, 'Admin', '$2y$10$j7rKxCCS1kebuVSejnjEfOFNn/Ov5MRwTLrgcgvR7d3J/RUJoh3tq');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `memberno` int(255) NOT NULL,
  `mid` varchar(250) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `gender` set('Male','Female') NOT NULL,
  `status` set('Single','Married','Divorced','Widow','Widower') NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `maddress` text NOT NULL,
  `paddress` text NOT NULL,
  `work` varchar(50) NOT NULL,
  `group1` set('Mighty Men','Impact Ladies','Deacons','Ramah Praise','Youth','Staff','Ushers','Caring Hearts','Events') NOT NULL,
  `group2` set('Mighty Men','Impact Ladies','Deacons','Ramah Praise','Youth','Staff','Ushers','Caring Hearts','Events','N/A') NOT NULL,
  `chapel` set('Faith Chapel','Love Chapel','Joy Chapel','Grace Chapel') NOT NULL,
  `since` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`memberno`, `mid`, `firstName`, `surname`, `date`, `gender`, `status`, `mobile`, `email`, `maddress`, `paddress`, `work`, `group1`, `group2`, `chapel`, `since`) VALUES
(1, 'GIWC-01', 'Rosemary', 'Lah-Anyane', '1987-06-01', 'Female', 'Married', '02421234567', 'rose@gmail.com', 'Tema Community 1', 'N/A', 'Businesswoman', 'Impact Ladies', 'Ramah Praise', 'Faith Chapel', '2010');

-- --------------------------------------------------------

--
-- Table structure for table `monetary`
--

CREATE TABLE `monetary` (
  `monid` int(11) NOT NULL,
  `monweek` varchar(50) NOT NULL,
  `mondate` date NOT NULL,
  `monetmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `montype` set('Sunday Offering','Tithes','Donations','Pledges','Project Offering','Seed Offering','Thanksgiving','Special Offering','First Fruit','Sacrifice Offering','Tuesday Offering','Friday Night Offering','Others') NOT NULL,
  `monprogram` set('Sunday Service','Anointing Service','Thanksgiving Service','Special Service','Tuesday Service','Friday Night Service') NOT NULL,
  `monamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monetary`
--

INSERT INTO `monetary` (`monid`, `monweek`, `mondate`, `monetmonth`, `montype`, `monprogram`, `monamount`) VALUES
(1, '2020-W53', '2021-01-01', 'January', 'Sunday Offering', 'Sunday Service', '793.00'),
(2, '2020-W53', '2021-01-03', 'January', 'Tithes', 'Sunday Service', '1324.00'),
(3, '2020-W53', '2021-01-03', 'January', 'Thanksgiving', 'Sunday Service', '2700.00'),
(4, '2020-W53', '2021-01-03', 'January', 'Sunday Offering', 'Sunday Service', '1085.00'),
(5, '2021-W01', '2021-01-10', 'January', 'Tithes', 'Sunday Service', '845.00'),
(6, '2021-W01', '2021-01-10', 'January', 'Sunday Offering', 'Sunday Service', '655.00'),
(7, '2021-W02', '2021-01-17', 'January', 'Tithes', 'Sunday Service', '170.00'),
(8, '2021-W02', '2021-01-17', 'January', 'Sunday Offering', 'Sunday Service', '1349.00'),
(9, '2021-W03', '2021-01-19', 'January', 'Tuesday Offering', 'Tuesday Service', '387.00'),
(10, '2021-W03', '2021-01-19', 'January', 'Tithes', 'Tuesday Service', '70.00'),
(11, '2021-W03', '2021-01-19', 'January', 'Special Offering', 'Tuesday Service', '189.00'),
(12, '2021-W03', '2021-01-22', 'January', 'Friday Night Offering', 'Friday Night Service', '424.00'),
(13, '2021-W03', '2021-01-24', 'January', 'Sunday Offering', 'Sunday Service', '949.00'),
(14, '2021-W04', '2021-01-25', 'January', 'Special Offering', 'Special Service', '195.00'),
(15, '2021-W04', '2021-01-26', 'January', 'Special Offering', 'Tuesday Service', '225.00'),
(16, '2021-W04', '2021-01-27', 'January', 'Tithes', 'Special Service', '60.00'),
(17, '2021-W04', '2021-01-27', 'January', 'Special Offering', 'Special Service', '256.00'),
(18, '2021-W04', '2021-01-28', 'January', 'Special Offering', 'Special Service', '170.00'),
(19, '2021-W04', '2021-01-29', 'January', 'Special Offering', 'Special Service', '391.00'),
(20, '2021-W04', '2021-01-31', 'January', 'Tithes', 'Sunday Service', '3560.00'),
(21, '2021-W04', '2021-01-31', 'January', 'Sunday Offering', 'Sunday Service', '3787.00'),
(22, '2021-W05', '2021-02-07', 'February', 'Tithes', 'Sunday Service', '4230.00'),
(23, '2021-W05', '2021-02-07', 'February', 'Thanksgiving', 'Sunday Service', '1609.00'),
(24, '2021-W05', '2021-02-07', 'February', 'Sunday Offering', 'Sunday Service', '489.00'),
(25, '2021-W06', '2021-02-09', 'February', 'Special Offering', 'Tuesday Service', '116.00'),
(26, '2021-W06', '2021-02-10', 'February', 'Tithes', 'Special Service', '80.00'),
(27, '2021-W06', '2021-02-10', 'February', 'Special Offering', 'Special Service', '85.00'),
(28, '2021-W06', '2021-02-11', 'February', 'Special Offering', 'Special Service', '198.00'),
(29, '2021-W06', '2021-02-12', 'February', 'Special Offering', 'Friday Night Service', '315.00'),
(30, '2021-W06', '2021-02-14', 'February', 'Tithes', 'Sunday Service', '425.00'),
(31, '2021-W06', '2021-02-14', 'February', 'Sunday Offering', 'Sunday Service', '468.00'),
(32, '2021-W07', '2021-02-16', 'February', 'Tuesday Offering', 'Tuesday Service', '85.00'),
(33, '2021-W07', '2021-02-21', 'February', 'Sunday Offering', 'Sunday Service', '356.00'),
(34, '2021-W08', '2021-02-23', 'February', 'Tuesday Offering', 'Tuesday Service', '247.00'),
(35, '2021-W08', '2021-02-26', 'February', 'Friday Night Offering', 'Friday Night Service', '186.00'),
(36, '2021-W08', '2021-02-28', 'February', 'Tithes', 'Sunday Service', '570.00'),
(37, '2021-W08', '2021-02-28', 'February', 'Sunday Offering', 'Sunday Service', '418.00'),
(38, '2021-W08', '2021-02-26', 'February', 'Tithes', 'Friday Night Service', '3000.00'),
(39, '2021-W09', '2021-03-03', 'March', 'Special Offering', 'Special Service', '277.00'),
(40, '2021-W09', '2021-03-04', 'March', 'Special Offering', 'Special Service', '241.00'),
(41, '2021-W09', '2021-03-05', 'March', 'Special Offering', 'Special Service', '540.00'),
(42, '2021-W09', '2021-03-07', 'March', 'Tithes', 'Sunday Service', '6735.00'),
(43, '2021-W09', '2021-03-07', 'March', 'Thanksgiving', 'Sunday Service', '1284.00'),
(44, '2021-W09', '2021-03-07', 'March', 'Sunday Offering', 'Sunday Service', '1615.00'),
(45, '2021-W10', '2021-03-09', 'March', 'Tithes', 'Tuesday Service', '160.00'),
(46, '2021-W10', '2021-03-09', 'March', 'Tuesday Offering', 'Tuesday Service', '154.00'),
(47, '2021-W10', '2021-03-12', 'March', 'Friday Night Offering', 'Friday Night Service', '520.00'),
(48, '2021-W10', '2021-03-14', 'March', 'Tithes', 'Sunday Service', '1145.00'),
(49, '2021-W10', '2021-03-14', 'March', 'Sunday Offering', 'Sunday Service', '1930.00'),
(50, '2021-W11', '2021-03-16', 'March', 'Tuesday Offering', 'Tuesday Service', '372.00'),
(51, '2021-W11', '2021-03-19', 'March', 'Friday Night Offering', 'Friday Night Service', '589.00'),
(52, '2021-W11', '2021-03-21', 'March', 'Sunday Offering', 'Sunday Service', '2291.00'),
(53, '2021-W12', '2021-03-23', 'March', 'Tuesday Offering', 'Tuesday Service', '88.00'),
(54, '2021-W12', '2021-03-26', 'March', 'Friday Night Offering', 'Friday Night Service', '919.00'),
(55, '2021-W12', '2021-03-28', 'March', 'Tithes', 'Sunday Service', '1255.00'),
(56, '2021-W12', '2021-03-28', 'March', 'Sunday Offering', 'Sunday Service', '471.00'),
(57, '2021-W13', '2021-03-30', 'March', 'Tuesday Offering', 'Tuesday Service', '118.00'),
(58, '2021-W13', '2021-04-02', 'April', 'Sunday Offering', 'Friday Night Service', '913.00'),
(59, '2021-W13', '2021-04-02', 'April', 'Tithes', 'Friday Night Service', '520.00'),
(60, '2021-W13', '2021-04-04', 'April', 'Tithes', 'Sunday Service', '645.00'),
(61, '2021-W13', '2021-04-04', 'April', 'Thanksgiving', 'Sunday Service', '1464.00'),
(62, '2021-W13', '2021-04-04', 'April', 'Sunday Offering', 'Sunday Service', '1841.00'),
(63, '2021-W14', '2021-04-11', 'April', 'Tithes', 'Sunday Service', '2000.00'),
(64, '2021-W14', '2021-04-11', 'April', 'Sunday Offering', 'Sunday Service', '780.00'),
(65, '2021-W15', '2021-04-13', 'April', 'Tuesday Offering', 'Tuesday Service', '191.00'),
(66, '2021-W15', '2021-04-16', 'April', 'Friday Night Offering', 'Friday Night Service', '534.00'),
(67, '2021-W15', '2021-04-18', 'April', 'Sunday Offering', 'Sunday Service', '1421.00'),
(68, '2021-W15', '2021-04-18', 'April', 'Tithes', 'Sunday Service', '175.00'),
(69, '2021-W16', '2021-04-20', 'April', 'Tuesday Offering', 'Tuesday Service', '150.00'),
(70, '2021-W16', '2021-04-23', 'April', 'Friday Night Offering', 'Friday Night Service', '527.00'),
(71, '2021-W16', '2021-04-25', 'April', 'Sunday Offering', 'Sunday Service', '587.00'),
(72, '2021-W16', '2021-04-25', 'April', 'Tithes', 'Sunday Service', '805.00'),
(73, '2021-W17', '2021-04-27', 'April', 'Tuesday Offering', 'Tuesday Service', '113.00'),
(74, '2021-W17', '2021-04-30', 'April', 'Tithes', 'Friday Night Service', '680.00'),
(75, '2021-W17', '2021-04-30', 'April', 'Friday Night Offering', 'Friday Night Service', '370.00'),
(76, '2021-W17', '2021-05-02', 'May', 'Sunday Offering', 'Sunday Service', '798.00'),
(77, '2021-W17', '2021-05-02', 'May', 'Tithes', 'Sunday Service', '3963.00'),
(78, '2021-W17', '2021-05-02', 'May', 'Thanksgiving', 'Sunday Service', '1600.00'),
(79, '2021-W18', '2021-05-04', 'May', 'Tuesday Offering', 'Tuesday Service', '102.00'),
(80, '2021-W18', '2021-05-07', 'May', 'Friday Night Offering', 'Friday Night Service', '534.00'),
(81, '2021-W18', '2021-05-09', 'May', 'Tithes', 'Sunday Service', '8785.00'),
(82, '2021-W18', '2021-05-09', 'May', 'Sunday Offering', 'Sunday Service', '603.00'),
(83, '2021-W19', '2021-05-11', 'May', 'Tuesday Offering', 'Tuesday Service', '183.00'),
(84, '2021-W19', '2021-05-14', 'May', 'Friday Night Offering', 'Friday Night Service', '759.00'),
(85, '2021-W19', '2021-05-16', 'May', 'Tithes', 'Sunday Service', '1630.00'),
(86, '2021-W19', '2021-05-16', 'May', 'Sunday Offering', 'Sunday Service', '693.00'),
(87, '2021-W20', '2021-05-18', 'May', 'Tuesday Offering', 'Tuesday Service', '220.00'),
(88, '2021-W20', '2021-05-21', 'May', 'Friday Night Offering', 'Friday Night Service', '624.00'),
(89, '2021-W20', '2021-05-23', 'May', 'Tithes', 'Sunday Service', '370.00'),
(90, '2021-W20', '2021-05-23', 'May', 'Sunday Offering', 'Sunday Service', '619.00'),
(91, '2021-W21', '2021-05-26', 'May', 'Special Offering', 'Special Service', '538.00'),
(92, '2021-W21', '2021-05-27', 'May', 'Special Offering', 'Special Service', '313.00'),
(93, '2021-W21', '2021-05-28', 'May', 'Special Offering', 'Special Service', '813.00'),
(94, '2021-W21', '2021-05-30', 'May', 'Tithes', 'Sunday Service', '620.00'),
(95, '2021-W21', '2021-05-30', 'May', 'Sunday Offering', 'Sunday Service', '3768.00'),
(96, '2021-W26', '2021-06-27', 'June', 'Sunday Offering', 'Sunday Service', '1461.00'),
(97, '2021-W26', '2021-06-27', 'June', 'Tithes', 'Sunday Service', '740.00'),
(98, '2021-W27', '2021-07-06', 'July', 'Tuesday Offering', 'Tuesday Service', '74.00'),
(99, '2021-W27', '2021-07-06', 'July', 'Tithes', 'Tuesday Service', '100.00'),
(100, '2021-W27', '2021-07-02', 'July', 'Friday Night Offering', 'Friday Night Service', '396.00'),
(101, '2021-W25', '2021-06-20', 'June', 'Sunday Offering', 'Sunday Service', '762.00'),
(102, '2021-W25', '2021-06-20', 'June', 'Tithes', 'Sunday Service', '2504.00'),
(103, '2021-W25', '2021-06-22', 'June', 'Tuesday Offering', 'Tuesday Service', '139.00'),
(104, '2021-W25', '2021-06-25', 'June', 'Friday Night Offering', 'Friday Night Service', '677.00'),
(105, '2021-W22', '2021-06-01', 'June', 'Tuesday Offering', 'Tuesday Service', '168.00'),
(106, '2021-W22', '2021-06-01', 'June', 'Tithes', 'Tuesday Service', '400.00'),
(107, '2021-W22', '2021-06-04', 'June', 'Friday Night Offering', 'Friday Night Service', '450.00'),
(108, '2021-W22', '2021-06-06', 'June', 'Thanksgiving', 'Thanksgiving Service', '1425.00'),
(109, '2021-W22', '2021-06-06', 'June', 'Tithes', 'Thanksgiving Service', '14550.00'),
(110, '2021-W22', '2021-06-06', 'June', 'Sunday Offering', 'Thanksgiving Service', '1024.00'),
(111, '2021-W23', '2021-06-11', 'June', 'Friday Night Offering', 'Friday Night Service', '295.00'),
(112, '2021-W23', '2021-06-13', 'June', 'Sunday Offering', 'Sunday Service', '478.00'),
(113, '2021-W23', '2021-06-13', 'June', 'Tithes', 'Sunday Service', '865.00'),
(114, '2021-W24', '2021-06-15', 'June', 'Tuesday Offering', 'Tuesday Service', '133.00'),
(115, '2021-W24', '2021-06-18', 'June', 'Friday Night Offering', 'Friday Night Service', '263.00'),
(116, '2021-W26', '2021-07-04', 'July', 'Thanksgiving', 'Thanksgiving Service', '1117.00'),
(117, '2021-W26', '2021-07-04', 'July', 'Thanksgiving', 'Thanksgiving Service', '10550.00'),
(118, '2021-W26', '2021-07-04', 'July', 'Sunday Offering', 'Thanksgiving Service', '1059.00'),
(119, '2021-W27', '2021-07-09', 'July', 'Friday Night Offering', 'Friday Night Service', '260.00'),
(120, '2021-W27', '2021-07-09', 'July', 'Tithes', 'Friday Night Service', '80.00'),
(121, '2021-W27', '2021-07-11', 'July', 'Sunday Offering', 'Sunday Service', '571.00'),
(122, '2021-W27', '2021-07-11', 'July', 'Tithes', 'Sunday Service', '1315.00'),
(123, '2021-W28', '2021-07-16', 'July', 'Friday Night Offering', 'Friday Night Service', '327.00'),
(124, '2021-W29', '2021-07-18', 'July', 'Sunday Offering', 'Sunday Service', '812.00'),
(125, '2021-W29', '2021-07-18', 'July', 'Tithes', 'Sunday Service', '1660.00'),
(126, '2021-W29', '2021-07-23', 'July', 'Special Offering', 'Special Service', '1044.00'),
(127, '2021-W29', '2021-07-24', 'July', 'Special Offering', 'Special Service', '526.00'),
(128, '2021-W29', '2021-07-25', 'July', 'Sunday Offering', 'Sunday Service', '2390.00'),
(129, '2021-W29', '2021-07-25', 'July', 'Tithes', 'Sunday Service', '750.00'),
(130, '2021-W30', '2021-07-30', 'July', 'Friday Night Offering', 'Friday Night Service', '513.00'),
(131, '2021-W30', '2021-07-30', 'July', 'Tithes', 'Friday Night Service', '200.00'),
(132, '2021-W30', '2021-08-01', 'August', 'Thanksgiving', 'Thanksgiving Service', '1086.00'),
(133, '2021-W30', '2021-08-01', 'August', 'Tithes', 'Thanksgiving Service', '7680.00'),
(134, '2021-W30', '2021-08-01', 'August', 'Sunday Offering', 'Thanksgiving Service', '955.00'),
(135, '2021-W31', '2021-08-05', 'August', 'Special Offering', 'Special Service', '267.00'),
(136, '2021-W31', '2021-08-06', 'August', 'Special Offering', 'Special Service', '389.00'),
(137, '2021-W31', '2021-08-08', 'August', 'Sunday Offering', 'Sunday Service', '980.00'),
(138, '2021-W31', '2021-08-08', 'August', 'Tithes', 'Sunday Service', '745.00'),
(139, '2021-W32', '2021-08-13', 'August', 'Friday Night Offering', 'Friday Night Service', '243.00'),
(140, '2021-W32', '2021-08-15', 'August', 'Sunday Offering', 'Sunday Service', '732.00'),
(141, '2021-W32', '2021-08-15', 'August', 'Tithes', 'Sunday Service', '1002.00'),
(142, '2021-W33', '2021-08-20', 'August', 'Friday Night Offering', 'Friday Night Service', '453.00'),
(143, '2021-W33', '2021-08-22', 'August', 'Sunday Offering', 'Sunday Service', '426.00'),
(144, '2021-W33', '2021-08-22', 'August', 'Tithes', 'Sunday Service', '1530.00'),
(145, '2021-W34', '2021-08-24', 'August', 'Special Offering', 'Special Service', '661.00'),
(146, '2021-W34', '2021-08-25', 'August', 'Special Offering', 'Special Service', '882.00'),
(147, '2021-W34', '2021-08-26', 'August', 'Special Offering', 'Special Service', '6889.00'),
(148, '2021-W34', '2021-08-27', 'August', 'Special Offering', 'Special Service', '3329.00'),
(149, '2021-W34', '2021-08-29', 'August', 'Special Offering', 'Special Service', '4901.00'),
(150, '2021-W34', '2021-08-29', 'August', 'Tithes', 'Special Service', '5550.00'),
(151, '2021-W35', '2021-09-05', 'September', 'Thanksgiving', 'Thanksgiving Service', '960.00'),
(152, '2021-W35', '2021-09-05', 'September', 'Tithes', 'Thanksgiving Service', '3805.00'),
(153, '2021-W35', '2021-09-05', 'September', 'Sunday Offering', 'Thanksgiving Service', '1542.00'),
(154, '2021-W36', '2021-09-08', 'September', 'Special Offering', 'Special Service', '131.00'),
(155, '2021-W36', '2021-09-09', 'September', 'Special Offering', 'Special Service', '81.00'),
(156, '2021-W36', '2021-09-09', 'September', 'Tithes', 'Special Service', '420.00'),
(157, '2021-W36', '2021-09-10', 'September', 'Special Offering', 'Special Service', '170.00'),
(158, '2021-W36', '2021-09-12', 'September', 'Special Offering', 'Special Service', '671.00'),
(159, '2021-W36', '2021-09-12', 'September', 'Special Offering', 'Special Service', '890.00'),
(160, '2021-W37', '2021-09-17', 'September', 'Friday Night Offering', 'Friday Night Service', '246.00'),
(161, '2021-W37', '2021-09-19', 'September', 'Sunday Offering', 'Sunday Service', '2267.00'),
(162, '2021-W37', '2021-09-19', 'September', 'Tithes', 'Sunday Service', '2050.00'),
(163, '2021-W38', '2021-09-24', 'September', 'Friday Night Offering', 'Friday Night Service', '483.00'),
(164, '2021-W38', '2021-09-26', 'September', 'Sunday Offering', 'Sunday Service', '2936.00'),
(165, '2021-W38', '2021-09-26', 'September', 'Tithes', 'Sunday Service', '720.00'),
(166, '2021-W39', '2021-10-01', 'October', 'Friday Night Offering', 'Friday Night Service', '655.00'),
(167, '2021-W39', '2021-10-01', 'October', 'Tithes', 'Friday Night Service', '670.00'),
(168, '2021-W39', '2021-10-03', 'October', 'Thanksgiving', 'Thanksgiving Service', '1487.00'),
(169, '2021-W39', '2021-10-03', 'October', 'Tithes', 'Thanksgiving Service', '8530.00'),
(170, '2021-W39', '2021-10-03', 'October', 'Sunday Offering', 'Thanksgiving Service', '995.00'),
(171, '2021-W40', '2021-10-06', 'October', 'Special Offering', 'Special Service', '151.00'),
(172, '2021-W40', '2021-10-07', 'October', 'Special Offering', 'Sunday Service', '320.00'),
(173, '2021-W40', '2021-10-08', 'October', 'Special Offering', 'Special Service', '917.00'),
(174, '2021-W40', '2021-10-10', 'October', 'Sunday Offering', 'Sunday Service', '661.00'),
(175, '2021-W40', '2021-10-10', 'October', 'Tithes', 'Sunday Service', '1675.00'),
(176, '2021-W41', '2021-10-13', 'October', 'Special Offering', 'Special Service', '169.00'),
(177, '2021-W41', '2021-10-14', 'October', 'Special Offering', 'Special Service', '790.00'),
(178, '2021-W41', '2021-10-15', 'October', 'Special Offering', 'Special Service', '782.00'),
(179, '2021-W41', '2021-10-17', 'October', 'Sunday Offering', 'Sunday Service', '3134.00'),
(180, '2021-W41', '2021-10-17', 'October', 'Tithes', 'Sunday Service', '200.00'),
(181, '2021-W42', '2021-10-20', 'October', 'Special Offering', 'Special Service', '179.00'),
(182, '2021-W42', '2021-10-22', 'October', 'Special Offering', 'Special Service', '922.00'),
(183, '2021-W42', '2021-10-24', 'October', 'Sunday Offering', 'Sunday Service', '1786.00'),
(184, '2021-W42', '2021-10-24', 'October', 'Tithes', 'Sunday Service', '525.00'),
(185, '2021-W43', '2021-10-31', 'October', 'Sunday Offering', 'Sunday Service', '499.00'),
(186, '2021-W43', '2021-10-31', 'October', 'Tithes', 'Sunday Service', '1800.00'),
(187, '2021-W44', '2021-11-05', 'October', 'Friday Night Offering', 'Friday Night Service', '350.00'),
(188, '2021-W44', '2021-11-07', 'November', 'Sunday Offering', 'Sunday Service', '635.00'),
(189, '2021-W44', '2021-11-07', 'November', 'Tithes', 'Sunday Service', '10825.00'),
(190, '2021-W44', '2021-11-07', 'November', 'Thanksgiving', 'Thanksgiving Service', '1553.00'),
(191, '2021-W45', '2021-11-12', 'November', 'Friday Night Offering', 'Friday Night Service', '309.00'),
(192, '2021-W45', '2021-11-14', 'November', 'Sunday Offering', 'Sunday Service', '800.00'),
(193, '2021-W45', '2021-11-14', 'November', 'Tithes', 'Sunday Service', '4450.00'),
(194, '2021-W46', '2021-11-19', 'November', 'Friday Night Offering', 'Friday Night Service', '304.00'),
(195, '2021-W46', '2021-11-21', 'November', 'Sunday Offering', 'Sunday Service', '4638.00'),
(196, '2021-W46', '2021-11-21', 'November', 'Tithes', 'Sunday Service', '880.00'),
(197, '2021-W47', '2021-11-26', 'November', 'Friday Night Offering', 'Friday Night Service', '740.00'),
(198, '2021-W47', '2021-11-28', 'November', 'Sunday Offering', 'Sunday Service', '2669.00'),
(199, '2021-W47', '2021-11-28', 'November', 'Tithes', 'Sunday Service', '1000.00'),
(200, '2021-W48', '2021-12-03', 'December', 'Friday Night Offering', 'Friday Night Service', '2024.00'),
(201, '2021-W48', '2021-12-03', 'December', 'Tithes', 'Friday Night Service', '100.00'),
(202, '2021-W48', '2021-12-05', 'December', 'Thanksgiving', 'Thanksgiving Service', '1870.00'),
(203, '2021-W48', '2021-12-05', 'December', 'Tithes', 'Thanksgiving Service', '6850.00'),
(204, '2021-W48', '2021-12-05', 'December', 'Sunday Offering', 'Thanksgiving Service', '596.00'),
(205, '2021-W49', '2021-12-10', 'December', 'Friday Night Offering', 'Friday Night Service', '243.00');

-- --------------------------------------------------------

--
-- Table structure for table `offerings`
--

CREATE TABLE `offerings` (
  `offid` int(11) NOT NULL,
  `offweek` varchar(50) NOT NULL,
  `offdate` date NOT NULL,
  `offprogram` set('Sunday Service','Anointing Service','Thanksgiving Service','Special Service','Tuesday Service','Friday Night Service') NOT NULL,
  `offertype` set('Sunday Offering','Seed Offering','Thanksgiving','Special Offering','First Fruit','Sacrifice Offering','Tuesday Offering','Friday Night Offering') NOT NULL,
  `ofamount` decimal(15,2) NOT NULL,
  `thamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offerings`
--

INSERT INTO `offerings` (`offid`, `offweek`, `offdate`, `offprogram`, `offertype`, `ofamount`, `thamount`) VALUES
(1, '2021-W22', '2021-04-05', 'Thanksgiving Service', 'Sacrifice Offering', '16.00', '56.00'),
(3, '2021-W09', '2021-04-01', 'Anointing Service', 'First Fruit', '450.00', '500.00'),
(4, '2021-W14', '2021-04-07', 'Thanksgiving Service', 'Thanksgiving', '789.00', '10000.00'),
(5, '2021-W15', '2021-04-14', 'Special Service', 'Special Offering', '79.00', '100.00'),
(6, '2021-W15', '2021-04-14', 'Anointing Service', 'First Fruit', '640.00', '222.00'),
(7, '2021-W15', '2021-04-14', 'Special Service', 'Special Offering', '50.00', '200.00'),
(11, '2021-W17', '2021-04-26', 'Thanksgiving Service', 'Special Offering', '40.00', '0.00'),
(12, '2021-W17', '2021-04-26', 'Sunday Service', 'Sunday Offering', '100.00', '120.00'),
(13, '2021-W16', '2021-04-20', 'Sunday Service', 'Sunday Offering', '700.00', '10.00'),
(14, '2021-W18', '2021-04-26', 'Sunday Service', 'Sunday Offering', '55.00', '50.00'),
(15, '2021-W17', '2021-04-26', 'Sunday Service', 'Sunday Offering', '60.00', '100.00'),
(16, '2021-W17', '2021-04-27', 'Sunday Service', 'Sunday Offering', '1285.00', '100.00'),
(17, '2021-W17', '2021-04-27', 'Anointing Service', 'First Fruit', '400.00', '100.00'),
(18, '2021-W18', '2021-05-04', 'Sunday Service', 'Special Offering', '1000.00', '300.00'),
(19, '2021-W19', '2021-05-11', 'Tuesday Service', 'Tuesday Offering', '1120.00', '0.00'),
(20, '2021-W19', '2021-05-12', 'Friday Night Service', 'Friday Night Offering', '270.00', '0.00'),
(21, '2021-W24', '2021-06-18', 'Tuesday Service', 'Tuesday Offering', '200.00', '150.00'),
(22, '2021-W24', '2021-06-18', 'Friday Night Service', 'Friday Night Offering', '1150.00', '10.00'),
(23, '2021-W25', '2021-06-26', 'Thanksgiving Service', 'Thanksgiving', '3508.00', '1477.00'),
(24, '2021-W25', '2021-06-27', 'Sunday Service', 'Sunday Offering', '700.00', '1000.00'),
(25, '2021-W31', '2021-08-06', 'Friday Night Service', 'Friday Night Offering', '500.00', '100.00'),
(26, '2021-W31', '2021-08-07', 'Anointing Service', 'Seed Offering', '5000.00', '10400.00');

-- --------------------------------------------------------

--
-- Table structure for table `overall`
--

CREATE TABLE `overall` (
  `memberid` varchar(500) NOT NULL DEFAULT '',
  `firstnamer` varchar(500) NOT NULL DEFAULT '',
  `surnamer` varchar(500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overall`
--

INSERT INTO `overall` (`memberid`, `firstnamer`, `surnamer`) VALUES
('GIWC-01', 'Rosemary', 'Lah-Anyane'),
('GIWC-02', 'Ernest', 'Lah-Anyane'),
('GIWC-03', 'Aniadjei', 'Patrick'),
('GIWC-04', 'Storph', 'Edwina Daniella'),
('GIWC-05', 'Akortia', 'Emmanuel'),
('GIWC-06', 'Newton', 'Michael Nana Kwame\r\n'),
('GIWC-07', 'Amevor', 'Charles'),
('GIWC-08', 'Storph', 'Adriana'),
('GIWC-09', 'Sowah', 'Augustus'),
('GIWC-10', ' Vivian Shika', 'Omolumo'),
('GIWC-11', 'Okpoti', 'Clara Atwei'),
('GIWC-12', 'Madagli', 'Richard Reasonableard'),
('GIWC-13', 'Kumah', 'Patience Sefakor\r\n'),
('GIWC-14', 'Ocansey', 'Docia Amaku Soyoo\r\n'),
('GIWC-15', 'Asare', 'James'),
('GIWC-16', 'Gelitsa', 'Frederica Delali'),
('GIWC-17', 'Vanderpuye-Orgle\r\n', 'Angela'),
('GIWC-18', 'Agbenyo', 'Evans Kwame'),
('GIWC-19', 'Alabi', 'Patrick Bortey'),
('GIWC-20', 'Ramsey', 'Hopeson Ewoenam\r\n'),
('GIWC-21', 'Tamakloe', 'Samuel Selorm'),
('GIWC-22', 'Tamakloe', 'Ayittah Maude'),
('GIWC-23', 'Amakye', 'Emelia Afi'),
('GIWC-24', 'Dankwah Smith', 'Aloysious'),
('GIWC-25', 'Aidoo', 'Stephen'),
('GIWC-26', 'Aidoo', 'Joyceline Amoakoa\r\n'),
('GIWC-27', 'Apenteng', 'Gyimah Portia'),
('GIWC-28', 'Droepenu', 'Judith Enyonam'),
('GIWC-29', 'Arthur', 'Isaac'),
('GIWC-30', 'Akoto', 'Juliana Appiah'),
('GIWC-31', 'Dadzie', 'William Ato'),
('GIWC-32', 'Dadzie', 'Lilian Agyeiwaa'),
('GIWC-33', 'Mercy Abena', 'Aryeh'),
('GIWC-34', 'Richard', 'Azah'),
('GIWC-35', 'Akosua Lois', 'Achia'),
('GIWC-36', 'Agnes Akua Fosua', 'Cobbina'),
('GIWC-37', 'Mawuli', 'Agato'),
('GIWC-38', 'Celino', 'Gussani  Sarpong'),
('GIWC-39', 'Ruth', 'Eshun'),
('GIWC-40', 'Diana', 'Akliku'),
('GIWC-41', 'Sandra', 'Kusi'),
('GIWC-42', 'Nana Akua', 'Kwofie'),
('GIWC-43', 'Dorcas Teiko', 'Martin Quansah'),
('GIWC-44', 'Samuel Nyame', 'Quansah'),
('GIWC-45', 'Adjoa Magdalene', 'Tettey'),
('GIWC-46', 'Christopher', 'Fynn'),
('GIWC-47', 'Desire', 'Denakpor'),
('GIWC-48', 'Joyce', 'Fynn'),
('GIWC-49', 'Ernestina', 'Tuafo'),
('GIWC-50', 'Elizabeth', 'Tuafo'),
('GIWC-51', 'Samuel Boateng', 'Asare'),
('GIWC-52', 'Daniel', 'Kumi'),
('GIWC-53', 'Anita', 'Kwarteng'),
('GIWC-54', 'Josephine Abena', 'Hinson'),
('GIWC-55', 'Lilian', 'Ohene Appiah'),
('GIWC-56', 'Abigail', 'Bonney'),
('GIWC-57', 'Emma Asantewaa', 'Appiah'),
('GIWC-58', 'Mercy', 'Andoh'),
('GIWC-59', 'Priscilla', 'Amoah'),
('GIWC-60', 'Khadijah Adwoa', 'Agyiri'),
('GIWC-61', 'Abena', 'Owusu'),
('GIWC-62', 'Rosemary Mawuli', 'Azah'),
('GIWC-63', 'Akua Gloria', 'Amponsah'),
('GIWC-64', 'Rebecca Adjoa', 'Bonney'),
('GIWC-65', 'Selina Abayaa', 'Sam'),
('GIWC-66', 'Daniel', 'Appiah Akoto'),
('GIWC-67', 'Henrietta Nana Adwoa', 'Kwofie'),
('GIY-01', 'Eriksen', 'Domale'),
('GIY-02', 'Jane', 'Tettey'),
('GIY-03', 'Paul', 'Smith'),
('GIY-04', 'Stella', 'Addo');

-- --------------------------------------------------------

--
-- Table structure for table `pledges`
--

CREATE TABLE `pledges` (
  `pdgid` int(11) NOT NULL,
  `pdgname` varchar(255) NOT NULL,
  `pdgory` set('Sunday Service','Anointing Service','Thanksgiving Service','Special Service','Tuesday Service','Friday Night Service') NOT NULL,
  `pgdate` date NOT NULL,
  `pdgstatus` set('Paid','Unpaid') NOT NULL,
  `pdgmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `pdgamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `revid` int(11) NOT NULL,
  `revweek` varchar(50) NOT NULL,
  `revdate` date NOT NULL,
  `revmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `revtype` set('Offering','Pledges','Project Offerings','Tithes','Sacrifices','Donations','Seed Offering','Others') NOT NULL,
  `revamount` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffno` int(11) NOT NULL,
  `staffid` varchar(500) NOT NULL,
  `stfname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `stfdate` date NOT NULL,
  `gender` set('Male','Female') NOT NULL,
  `status` set('Single','Married','Divorced','Widow','Widower') NOT NULL,
  `stfemail` varchar(50) NOT NULL,
  `stfmobile` text NOT NULL,
  `stfaddress` text NOT NULL,
  `stfcity` varchar(50) NOT NULL,
  `jobdesc` varchar(50) NOT NULL,
  `chapel` set('Faith Chapel','Love Chapel','Joy Chapel','Grace Chapel') NOT NULL,
  `empsince` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tithes`
--

CREATE TABLE `tithes` (
  `tid` int(11) NOT NULL,
  `tmid` varchar(250) NOT NULL,
  `pdate` date NOT NULL,
  `titype` set('Personal','Company') NOT NULL,
  `pmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `pamount` decimal(15,2) NOT NULL,
  `others` set('Pledge','Project Offering','Donation','Seed Offering','First Fruit','Thanksgiving','Sacrifice Offering','N/A') NOT NULL,
  `otmonth` set('January','February','March','April','May','June','July','August','September','October','November','December','N/A') NOT NULL,
  `otamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tithes`
--

INSERT INTO `tithes` (`tid`, `tmid`, `pdate`, `titype`, `pmonth`, `pamount`, `others`, `otmonth`, `otamount`) VALUES
(1, 'GIWC-76', '2021-06-20', 'Personal', 'June', '500.00', 'N/A', 'N/A', '0.00'),
(2, 'GIWC-76', '2021-07-25', 'Personal', 'June', '500.00', 'N/A', 'N/A', '0.00'),
(3, 'GIWC-76', '2021-08-22', 'Personal', 'July', '500.00', 'N/A', 'N/A', '0.00'),
(4, 'GIWC-03', '2021-06-06', 'Personal', 'April', '500.00', 'N/A', 'N/A', '0.00'),
(5, 'GIWC-03', '2021-06-06', 'Personal', 'May', '500.00', 'N/A', 'N/A', '0.00'),
(6, 'GIWC-03', '2021-07-04', 'Personal', 'June', '500.00', 'N/A', 'N/A', '0.00'),
(7, 'GIWC-03', '2021-08-22', 'Personal', 'July', '500.00', 'N/A', 'N/A', '0.00'),
(8, 'GIWC-34', '2021-07-10', 'Personal', 'March', '140.00', 'N/A', 'N/A', '0.00'),
(9, 'GIWC-34', '2021-07-10', 'Personal', 'April', '140.00', 'N/A', 'N/A', '0.00'),
(10, 'GIWC-34', '2021-07-10', 'Personal', 'May', '200.00', 'N/A', 'N/A', '0.00'),
(11, 'GIWC-34', '2021-08-01', 'Personal', 'June', '140.00', 'N/A', 'N/A', '0.00'),
(12, 'GIWC-34', '2021-08-01', 'Personal', 'July', '150.00', 'N/A', 'N/A', '0.00'),
(13, 'GIWC-22', '2021-08-01', 'Personal', 'May', '130.00', 'N/A', 'N/A', '0.00'),
(14, 'GIWC-22', '2021-08-01', 'Personal', 'June', '130.00', 'N/A', 'N/A', '0.00'),
(15, 'GIWC-22', '2021-08-01', 'Personal', 'July', '130.00', 'N/A', 'N/A', '0.00'),
(16, 'GIWC-21', '2021-06-13', 'Personal', 'May', '165.00', 'N/A', 'N/A', '0.00'),
(17, 'GIWC-21', '2021-08-22', 'Personal', 'June', '165.00', 'N/A', 'N/A', '0.00'),
(18, 'GIWC-21', '2021-08-22', 'Personal', 'July', '165.00', 'N/A', 'N/A', '0.00'),
(19, 'GIWC-36', '2021-06-06', 'Personal', 'April', '1000.00', 'N/A', 'N/A', '0.00'),
(20, 'GIWC-36', '2021-07-25', 'Personal', 'May', '250.00', 'N/A', 'N/A', '0.00'),
(21, 'GIWC-36', '2021-08-22', 'Personal', 'June', '250.00', 'N/A', 'N/A', '0.00'),
(22, 'GIWC-60', '2021-06-13', 'Personal', 'May', '105.00', 'N/A', 'N/A', '0.00'),
(23, 'GIWC-60', '2021-06-20', 'Personal', 'June', '105.00', 'N/A', 'N/A', '0.00'),
(24, 'GIWC-60', '2021-08-08', 'Personal', 'July', '105.00', 'N/A', 'N/A', '0.00'),
(25, 'GIWC-10', '2021-06-06', 'Personal', 'May', '4100.00', 'N/A', 'N/A', '0.00'),
(26, 'GIWC-10', '2021-07-04', 'Personal', 'June', '3000.00', 'N/A', 'N/A', '0.00'),
(27, 'GIWC-10', '2021-08-01', 'Personal', 'July', '3200.00', 'N/A', 'N/A', '0.00'),
(28, 'GIWC-10', '2021-08-29', 'Personal', 'August', '3200.00', 'N/A', 'N/A', '0.00'),
(29, 'GIWC-81', '2021-06-20', 'Personal', 'May', '1500.00', 'N/A', 'N/A', '0.00'),
(30, 'GIWC-81', '2021-07-18', 'Personal', 'June', '1500.00', 'N/A', 'N/A', '0.00'),
(31, 'GIWC-81', '2021-08-01', 'Personal', 'July', '1500.00', 'N/A', 'N/A', '0.00'),
(32, 'GIWC-81', '2021-08-29', 'Personal', 'August', '2000.00', 'N/A', 'N/A', '0.00'),
(33, 'GIWC-82', '2021-06-27', 'Personal', 'May', '390.00', 'N/A', 'N/A', '0.00'),
(34, 'GIWC-09', '2021-07-04', 'Personal', 'June', '50.00', 'N/A', 'N/A', '0.00'),
(35, 'GIWC-09', '2021-08-29', 'Personal', 'August', '50.00', 'N/A', 'N/A', '0.00'),
(36, 'GIWC-09', '2021-08-29', 'Personal', 'August', '50.00', 'N/A', 'N/A', '0.00'),
(37, 'GIWC-10', '2021-10-03', 'Personal', 'September', '3000.00', 'N/A', 'N/A', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `youth`
--

CREATE TABLE `youth` (
  `youthno` int(11) NOT NULL,
  `yid` varchar(500) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `surname` varchar(500) NOT NULL,
  `fathername` varchar(500) NOT NULL,
  `mothername` varchar(500) NOT NULL,
  `ydate` date NOT NULL,
  `gender` set('Male','Female') NOT NULL,
  `mobile` text NOT NULL,
  `raddress` text NOT NULL,
  `school` text NOT NULL,
  `group1` set('Mighty Men','Impact Ladies','Deacons','Ramah Praise','Youth','Staff','Ushers','Caring Hearts','Events') NOT NULL,
  `group2` set('Mighty Men','Impact Ladies','Deacons','Ramah Praise','Youth','Staff','Ushers','Caring Hearts','Events','N/A') NOT NULL,
  `chapel` set('Faith Chapel','Love Chapel','Joy Chapel','Grace Chapel') NOT NULL,
  `since` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `youthtithes`
--

CREATE TABLE `youthtithes` (
  `id` int(11) NOT NULL,
  `ymid` varchar(250) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `surname` varchar(500) NOT NULL,
  `pdate` date NOT NULL,
  `titype` set('Personal','Company') NOT NULL,
  `pmonth` set('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `pamount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affilate`
--
ALTER TABLE `affilate`
  ADD PRIMARY KEY (`affno`);

--
-- Indexes for table `afftithes`
--
ALTER TABLE `afftithes`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `titheno` (`titheno`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `id` (`id`),
  ADD KEY `atdate` (`atdate`) USING BTREE;

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expid`);

--
-- Indexes for table `joint`
--
ALTER TABLE `joint`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`adid`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`mid`) USING BTREE,
  ADD KEY `memberno` (`memberno`) USING BTREE;

--
-- Indexes for table `monetary`
--
ALTER TABLE `monetary`
  ADD PRIMARY KEY (`monid`);

--
-- Indexes for table `offerings`
--
ALTER TABLE `offerings`
  ADD PRIMARY KEY (`offid`);

--
-- Indexes for table `overall`
--
ALTER TABLE `overall`
  ADD KEY `overid` (`memberid`);

--
-- Indexes for table `pledges`
--
ALTER TABLE `pledges`
  ADD PRIMARY KEY (`pdgid`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`revid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffno`),
  ADD UNIQUE KEY `stfemail` (`stfemail`),
  ADD KEY `staffid` (`staffid`);

--
-- Indexes for table `tithes`
--
ALTER TABLE `tithes`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `tmid` (`tmid`);

--
-- Indexes for table `youth`
--
ALTER TABLE `youth`
  ADD PRIMARY KEY (`yid`),
  ADD KEY `youthno` (`youthno`);

--
-- Indexes for table `youthtithes`
--
ALTER TABLE `youthtithes`
  ADD PRIMARY KEY (`ymid`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affilate`
--
ALTER TABLE `affilate`
  MODIFY `affno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `afftithes`
--
ALTER TABLE `afftithes`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=618;

--
-- AUTO_INCREMENT for table `joint`
--
ALTER TABLE `joint`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `adid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `memberno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `monetary`
--
ALTER TABLE `monetary`
  MODIFY `monid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `offerings`
--
ALTER TABLE `offerings`
  MODIFY `offid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pledges`
--
ALTER TABLE `pledges`
  MODIFY `pdgid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `revenue`
--
ALTER TABLE `revenue`
  MODIFY `revid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tithes`
--
ALTER TABLE `tithes`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `youth`
--
ALTER TABLE `youth`
  MODIFY `youthno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `youthtithes`
--
ALTER TABLE `youthtithes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `afftithes`
--
ALTER TABLE `afftithes`
  ADD CONSTRAINT `afftithes_ibfk_1` FOREIGN KEY (`titheno`) REFERENCES `affilate` (`affno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tithes`
--
ALTER TABLE `tithes`
  ADD CONSTRAINT `tithes_ibfk_1` FOREIGN KEY (`tmid`) REFERENCES `membership` (`mid`);

--
-- Constraints for table `youthtithes`
--
ALTER TABLE `youthtithes`
  ADD CONSTRAINT `youthtithes_ibfk_1` FOREIGN KEY (`ymid`) REFERENCES `youth` (`yid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
