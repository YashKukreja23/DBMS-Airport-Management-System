-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 02:19 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airport`
--

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `AIRLINEID` varchar(3) NOT NULL,
  `AL_NAME` varchar(50) DEFAULT NULL,
  `THREE_DIGIT_CODE` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`AIRLINEID`, `AL_NAME`, `THREE_DIGIT_CODE`) VALUES
('9W', 'Jet Airways', '589'),
('AA', 'American Airlines', '001'),
('AI', 'Air India Limited', '098'),
('BA', 'British Airways', '125'),
('EK', 'Emirates', '176'),
('EY', 'Ethiad Airways', '607'),
('LH', 'Lufthansa', '220'),
('QR', 'Qatar Airways', '157');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `AP_NAME` varchar(100) NOT NULL,
  `STATE` varchar(15) DEFAULT NULL,
  `COUNTRY` varchar(30) DEFAULT NULL,
  `CNAME` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`AP_NAME`, `STATE`, `COUNTRY`, `CNAME`) VALUES
('Chandigarh International Airport', 'Chandigarh', 'India', 'Chandigarh'),
('Chhatrapati Shivaji International Airport', 'Maharashtra', 'India', 'Mumbai'),
('Dallas/Fort Worth International Airport', 'Texas', 'United States', 'Fort Worth'),
('Frankfurt Airport', 'Hesse', 'Germany', 'Frankfurt'),
('George Bush Intercontinental Airport', 'Texas', 'United States', 'Houston'),
('Indira GandhiInternational Airport', 'Delhi', 'India', 'Delhi'),
('John F. Kennedy International Airport', 'New York', 'United States', 'New York City'),
('Louisville International Airport', 'Kentucky', 'United States', 'Louisville'),
('San Francisco International Airport', 'California', 'United States', 'San Francisco'),
('Tampa International Airport', 'Florida', 'United States', 'Tampa');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CNAME` varchar(15) NOT NULL,
  `STATE` varchar(15) DEFAULT NULL,
  `COUNTRY` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CNAME`, `STATE`, `COUNTRY`) VALUES
('Chandigarh', 'Chandigarh', 'India'),
('Delhi', 'Delhi', 'India'),
('Fort Worth', 'Texas', 'United States'),
('Frankfurt', 'Hesse', 'Germany'),
('Houston', 'Texas', 'United States'),
('Louisville', 'Kentucky', 'United States'),
('Mumbai', 'Maharashtra', 'India'),
('New York City', 'New York', 'United States'),
('San Francisco', 'California', 'United States'),
('Tampa', 'Florida', 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `contains`
--

CREATE TABLE `contains` (
  `AIRLINEID` varchar(3) NOT NULL,
  `AP_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contains`
--

INSERT INTO `contains` (`AIRLINEID`, `AP_NAME`) VALUES
('AA', 'George Bush Intercontinental Airport'),
('AA', 'John F. Kennedy International Airport'),
('AA', 'Louisville International Airport'),
('AA', 'San Francisco International Airport'),
('AA', 'Tampa International Airport'),
('AI', 'Chandigarh International Airport'),
('AI', 'Chhatrapati Shivaji International Airport'),
('AI', 'Dallas/Fort Worth International Airport'),
('AI', 'George Bush Intercontinental Airport'),
('AI', 'Indira GandhiInternational Airport'),
('BA', 'Chandigarh International Airport'),
('BA', 'Chhatrapati Shivaji International Airport'),
('BA', 'Frankfurt Airport'),
('BA', 'John F. Kennedy International Airport'),
('BA', 'San Francisco International Airport'),
('LH', 'Chhatrapati Shivaji International Airport'),
('LH', 'Dallas/Fort Worth International Airport'),
('LH', 'Frankfurt Airport'),
('LH', 'John F. Kennedy International Airport'),
('LH', 'San Francisco International Airport'),
('QR', 'Chhatrapati Shivaji International Airport'),
('QR', 'Dallas/Fort Worth International Airport'),
('QR', 'John F. Kennedy International Airport'),
('QR', 'Louisville International Airport'),
('QR', 'Tampa International Airport');

-- --------------------------------------------------------

--
-- Table structure for table `employee1`
--

CREATE TABLE `employee1` (
  `SSN` int(11) NOT NULL,
  `FNAME` varchar(20) DEFAULT NULL,
  `M` varchar(1) DEFAULT NULL,
  `LNAME` varchar(20) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `PHONE` bigint(20) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `SEX` varchar(1) DEFAULT NULL,
  `JOBTYPE` varchar(30) DEFAULT NULL,
  `ASTYPE` varchar(30) DEFAULT NULL,
  `ETYPE` varchar(30) DEFAULT NULL,
  `SHIFT` varchar(20) DEFAULT NULL,
  `POSITION` varchar(30) DEFAULT NULL,
  `AP_NAME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee1`
--

INSERT INTO `employee1` (`SSN`, `FNAME`, `M`, `LNAME`, `ADDRESS`, `PHONE`, `AGE`, `SEX`, `JOBTYPE`, `ASTYPE`, `ETYPE`, `SHIFT`, `POSITION`, `AP_NAME`) VALUES
(123456789, 'LINDA', 'M', 'GOODMAN', '731 Fondren, Houston, TX', 4356789345, 35, 'F', 'ADMINISTRATIVE SUPPORT', 'RECEPTIONIST', '', '', '', 'Louisville International Airport'),
(125478909, 'PRATIK', 'T', 'GOMES', '334 VITRUVIAN PARK, ALBANY, NY', 4444678903, 56, 'M', 'TRAFFIC MONITOR', '', '', 'DAY', '', 'John F. Kennedy International Airport'),
(324567897, 'ADIT', 'P', 'DESAI', '987 SOMNATH, CHANDIGARH, INDIA', 2244658909, 36, 'M', 'TRAFFIC MONITOR', '', '', 'DAY', '', 'Chandigarh International Airport'),
(333445555, 'JOHNY', 'N', 'PAUL', '638 Voss, Houston, TX', 9834561995, 40, 'M', 'ADMINISTRATIVE SUPPORT', 'SECRETARY', '', '', '', 'Louisville International Airport'),
(453453453, 'RAJ', 'B', 'SHARMA', '345 FLOYDS, MUMBAI,INDIA', 4326789031, 35, 'M', 'AIRPORT AUTHORITY', '', '', '', 'MANAGER', 'Chhatrapati Shivaji International Airport'),
(666884444, 'SHELDON', 'A', 'COOPER', '345 CHERRY PARK, HESSE,GERMANY', 1254678903, 55, 'M', 'TRAFFIC MONITOR', '', '', 'NIGHT', '', 'Frankfurt Airport'),
(888665555, 'SHUBHAM', 'R', 'GUPTA', '567 CHANDANI CHOWK, DELHI, INDIA', 8566778890, 39, 'M', 'ADMINISTRATIVE SUPPORT', 'DATA ENTRY WORKER', '', '', '', 'Indira GandhiInternational Airport'),
(987654321, 'SHERLOCK', 'A', 'HOLMES', '123 TOP HILL, SAN Francisco,CA', 8089654321, 47, 'M', 'TRAFFIC MONITOR', '', '', 'DAY', '', 'San Francisco International Airport'),
(987987987, 'NIKITA', 'C', 'PAUL', '110 SYNERGY PARK, DALLAS,TX', 5678904325, 33, 'F', 'ENGINEER', '', 'AIRPORT CIVIL ENGINEER', '', '', 'Dallas/Fort Worth International Airport'),
(999887777, 'JAMES', 'P', 'BOND', '3321 Castle, Spring, TX', 9834666995, 50, 'M', 'ENGINEER', '', 'RADIO ENGINEER', '', '', 'Louisville International Airport');

-- --------------------------------------------------------

--
-- Table structure for table `employee2`
--

CREATE TABLE `employee2` (
  `JOBTYPE` varchar(30) NOT NULL,
  `SALARY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee2`
--

INSERT INTO `employee2` (`JOBTYPE`, `SALARY`) VALUES
('ADMINISTRATIVE SUPPORT', 50000),
('AIRPORT AUTHORITY', 90000),
('ENGINEER', 70000),
('TRAFFIC MONITOR', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `FLIGHT_CODE` varchar(10) NOT NULL,
  `SOURCE` varchar(3) DEFAULT NULL,
  `DESTINATION` varchar(3) DEFAULT NULL,
  `ARRIVAL` varchar(10) DEFAULT NULL,
  `DEPARTURE` varchar(10) DEFAULT NULL,
  `CUR_STATUS` varchar(10) DEFAULT NULL,
  `DURATION` varchar(30) DEFAULT NULL,
  `FLIGHTTYPE` varchar(10) DEFAULT NULL,
  `LAYOVER_TIME` varchar(30) DEFAULT NULL,
  `NO_OF_STOPS` int(11) DEFAULT NULL,
  `AIRLINEID` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`FLIGHT_CODE`, `SOURCE`, `DESTINATION`, `ARRIVAL`, `DEPARTURE`, `CUR_STATUS`, `DURATION`, `FLIGHTTYPE`, `LAYOVER_TIME`, `NO_OF_STOPS`, `AIRLINEID`) VALUES
('9W2334', 'IAH', 'DEL', '23:00', '13:45', 'On-time', '23hrs', 'Direct', '0', 1, '9W'),
('AA4367', 'SFO', 'FRA', '18:10', '18:55', 'On-time', '21hrs', 'Non-stop', '0', 0, 'AA'),
('AA4369', 'BLR', 'MUM', '2:00', '4:00', 'On-Time', '2hrs', 'Direct', '0', 0, 'AA'),
('AI2014', 'BOM', 'DFW', '02:10', '03:15', 'On-time', '24hr', 'Connecting', '3', 1, 'AI'),
('BA1689', 'FRA', 'DEL', '10:20', '10:55', 'On-time', '14hrs', 'Non-stop', '0', 0, 'BA'),
('BA3056', 'BOM', 'DFW', '02:15', '02:55', 'On-time', '29hrs', 'Connecting', '3', 1, 'BA'),
('EK3456', 'BOM', 'SFO', '18:50', '19:40', 'On-time', '30hrs', 'Non-stop', '0', 0, 'EK'),
('EY1234', 'JFK', 'TPA', '19:20', '20:05', 'On-time', '16hrs', 'Connecting', '5', 2, 'EY'),
('LH9876', 'JFK', 'BOM', '05:50', '06:35', 'On-time', '18hrs', 'Non-stop', '0', 0, 'LH'),
('QR1902', 'IXC', 'IAH', '22:00', '22:50', 'Delayed', '28hrs', 'Non-stop', '5', 0, 'QR'),
('QR2305', 'BOM', 'DFW', '13:00', '13:55', 'Delayed', '21hr', 'Non-stop', '0', 0, 'QR');

-- --------------------------------------------------------

--
-- Table structure for table `passenger1`
--

CREATE TABLE `passenger1` (
  `PID` int(11) NOT NULL,
  `PASSPORTNO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger1`
--

INSERT INTO `passenger1` (`PID`, `PASSPORTNO`) VALUES
(1, 'A1234568'),
(2, 'B9876541'),
(3, 'C2345698'),
(4, 'D1002004'),
(5, 'X9324666'),
(6, 'B8765430'),
(7, 'J9801235'),
(8, 'A1122334'),
(9, 'Q1243567'),
(10, 'S1243269'),
(11, 'E3277889'),
(12, 'K3212322'),
(13, 'P3452390'),
(14, 'W7543336'),
(15, 'R8990566'),
(16, 'J9645263'),
(17, 'Z1234768');

-- --------------------------------------------------------

--
-- Table structure for table `passenger2`
--

CREATE TABLE `passenger2` (
  `PASSPORTNO` varchar(10) NOT NULL,
  `FNAME` varchar(20) DEFAULT NULL,
  `M` varchar(1) DEFAULT NULL,
  `LNAME` varchar(20) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `PHONE` bigint(20) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `SEX` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger2`
--

INSERT INTO `passenger2` (`PASSPORTNO`, `FNAME`, `M`, `LNAME`, `ADDRESS`, `PHONE`, `AGE`, `SEX`) VALUES
('A1122334', 'MANAN', 'S', 'LAKHANI', '5589 CHTHAM REFLECTIONS, APT 349 HOUSTON, TX', 9004335126, 25, 'F'),
('A1234568', 'ALEN', 'M', 'SMITH', '2230 NORTHSIDE, APT 11, ALBANY, NY', 8080367290, 30, 'M'),
('B8765430', 'LAKSHMI', 'P', 'SHARMA', '1110 FIR HILLS, APT 903, AKRON, OH', 7666190505, 30, 'F'),
('B9876541', 'ANKITA', 'V', 'AHIR', '3456 VIKAS APTS, APT 102,DOMBIVLI, INDIA', 8080367280, 26, 'F'),
('C2345698', 'KHYATI', 'A', 'MISHRA', '7820 MCCALLUM COURTS, APT 234, AKRON, OH', 8082267280, 30, 'F'),
('D1002004', 'ANKITA', 'S', 'PATIL', '7720 MCCALLUM BLVD, APT 1082, DALLAS, TX', 9080367266, 23, 'F'),
('E3277889', 'John', 'A', 'GATES', '1234 BAKER APTS, APT 59, HESSE, GERMANY', 9724569986, 10, 'M'),
('J9645263', 'Ankush', 'G', 'Kumar', '2078 BSK Bengaluru', 9863214582, 20, 'M'),
('J9801235', 'AKHILESH', 'D', 'JOSHI', '345 CHATHAM COURTS, APT 678, MUMBAI, INDIA', 9080369290, 29, 'M'),
('K3212322', 'SARA', 'B', 'GOMES', '6785 SPLITSVILLA, APT 34, MIAMI, FL', 9024569226, 15, 'F'),
('P3452390', 'ALIA', 'V', 'BHAT', '548 MARKET PLACE, SAN Francisco, CA', 9734567800, 10, 'F'),
('Q1243567', 'KARAN', 'M', 'MOTANI', '4444 FRANKFORD VILLA, APT 77, GUILDERLAND, NY', 9727626643, 22, 'M'),
('R8990566', 'RIA', 'T', 'GUPTA', '3355 PALENCIA, APT 2065, MUMBAI, INDIA', 4724512343, 10, 'M'),
('S1243269', 'ROM', 'A', 'SOLANKI', '7720 MCCALLUM BLVD, APT 2087, DALLAS, TX', 9004568903, 60, 'M'),
('W7543336', 'JOHN', 'P', 'SMITH', '6666 ROCK HILL, APT 2902, TAMPA, FL', 4624569986, 55, 'M'),
('X9324666', 'TEJASHREE', 'B', 'PANDIT', '9082 ESTAES OF RICHARDSON, RICHARDSON, TX', 9004360125, 28, 'F'),
('Z1234768', 'Balu', 'C', 'G', '2048 HSR Bengaluru', 9863120584, 4, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `passenger3`
--

CREATE TABLE `passenger3` (
  `PID` int(11) NOT NULL,
  `FLIGHT_CODE` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger3`
--

INSERT INTO `passenger3` (`PID`, `FLIGHT_CODE`) VALUES
(3, '9W2334'),
(7, '9W2334'),
(8, 'AA4367'),
(17, 'AA4367'),
(1, 'AI2014'),
(13, 'AI2014'),
(11, 'BA1689'),
(14, 'BA1689'),
(6, 'BA3056'),
(16, 'BA3056'),
(10, 'EK3456'),
(5, 'EY1234'),
(2, 'LH9876'),
(4, 'QR1902'),
(9, 'QR1902'),
(12, 'QR1902'),
(15, 'QR2305');

-- --------------------------------------------------------

--
-- Table structure for table `serves`
--

CREATE TABLE `serves` (
  `SSN` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `PASSPORTNO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serves`
--

INSERT INTO `serves` (`SSN`, `PID`, `PASSPORTNO`) VALUES
(123456789, 1, 'A1234568'),
(123456789, 7, 'J9801235'),
(123456789, 9, 'Q1243567'),
(123456789, 15, 'R8990566'),
(333445555, 10, 'S1243269'),
(333445555, 12, 'K3212322'),
(888665555, 4, 'D1002004'),
(888665555, 7, 'J9801235'),
(888665555, 12, 'K3212322'),
(888665555, 13, 'P3452390');

-- --------------------------------------------------------

--
-- Table structure for table `ticket1`
--

CREATE TABLE `ticket1` (
  `TICKET_NUMBER` bigint(15) NOT NULL,
  `SOURCE` varchar(3) DEFAULT NULL,
  `DESTINATION` varchar(3) DEFAULT NULL,
  `DATE_OF_BOOKING` date DEFAULT NULL,
  `DATE_OF_TRAVEL` date DEFAULT NULL,
  `SEATNO` varchar(5) DEFAULT NULL,
  `CLASS` varchar(15) DEFAULT NULL,
  `DATE_OF_CANCELLATION` date DEFAULT NULL,
  `PID` int(11) DEFAULT NULL,
  `PASSPORTNO` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket1`
--

INSERT INTO `ticket1` (`TICKET_NUMBER`, `SOURCE`, `DESTINATION`, `DATE_OF_BOOKING`, `DATE_OF_TRAVEL`, `SEATNO`, `CLASS`, `DATE_OF_CANCELLATION`, `PID`, `PASSPORTNO`) VALUES
(11234111122, 'BOM', 'DFW', '2019-05-11', '2019-12-15', '32A', 'ECONOMY', '0000-00-00', 1, 'A1234568'),
(984567222299, 'JFK', 'BOM', '2019-06-11', '2019-12-20', '45D', 'ECONOMY', '2019-12-10', 2, 'B9876541'),
(1251334499699, 'IXC', 'IAH', '2019-11-20', '2020-01-12', '45D', 'ECONOMY', '0000-00-00', 12, 'K3212322'),
(1255701876107, 'FRA', 'DEL', '2019-10-19', '2019-12-31', '57F', 'ECONOMY', '0000-00-00', 11, 'E3277889'),
(1258776199490, 'BOM', 'DFW', '2019-05-13', '2019-12-15', '37C', 'ECONOMY', '2019-05-25', 13, 'P3452390'),
(1570864987655, 'IXC', 'IAH', '2019-11-12', '2019-12-30', '54C', 'ECONOMY', '0000-00-00', 9, 'Q1243567'),
(1571357215116, 'SFO', 'FRA', '2019-10-15', '2019-12-18', '34E', 'ECONOMY', '0000-00-00', 8, 'A1122334'),
(1577654664266, 'JFK', 'TPA', '2019-06-09', '2019-12-10', '54E', 'ECONOMY', '0000-00-00', 5, 'X9324666'),
(1579283997799, 'BOM', 'SFO', '2019-01-22', '2019-12-15', '38A', 'ECONOMY', '0000-00-00', 10, 'S1243269'),
(1768901333273, 'IAH', 'DEL', '2019-08-21', '2019-12-25', '1A', 'BUSINESS', '0000-00-00', 3, 'C2345698'),
(2206543545545, 'BOM', 'DFW', '2019-11-11', '2020-02-12', '43B', 'ECONOMY', '0000-00-00', 6, 'B8765430'),
(5890987441464, 'IXC', 'IAH', '2019-08-10', '2020-01-12', '20C', 'FIRST-CLASS', '0000-00-00', 4, 'D1002004'),
(7064321779737, 'IAH', 'DEL', '2019-11-15', '2019-12-25', '27B', 'FIRST-CLASS', '0000-00-00', 7, 'J9801235');

-- --------------------------------------------------------

--
-- Table structure for table `ticket2`
--

CREATE TABLE `ticket2` (
  `DATE_OF_BOOKING` date NOT NULL,
  `SOURCE` varchar(3) NOT NULL,
  `DESTINATION` varchar(3) NOT NULL,
  `CLASS` varchar(15) NOT NULL,
  `PRICE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket2`
--

INSERT INTO `ticket2` (`DATE_OF_BOOKING`, `SOURCE`, `DESTINATION`, `CLASS`, `PRICE`) VALUES
('2019-01-22', 'BOM', 'SFO', 'ECONOMY', 98000),
('2019-05-11', 'BOM', 'DFW', 'ECONOMY', 95000),
('2019-05-13', 'BOM', 'DFW', 'ECONOMY', 65000),
('2019-06-11', 'JFK', 'BOM', 'ECONOMY', 100000),
('2019-06-26', 'FRA', 'DEL', 'ECONOMY', 80000),
('2019-08-10', 'IXC', 'IAH', 'FIRST-CLASS', 150000),
('2019-08-21', 'IAH', 'DEL', 'BUSINESS', 200000),
('2019-10-15', 'SFO', 'FRA', 'ECONOMY', 170000),
('2019-10-19', 'FRA', 'DEL', 'ECONOMY', 100000),
('2019-11-11', 'BOM', 'DFW', 'ECONOMY', 150000),
('2019-11-12', 'IXC', 'IAH', 'ECONOMY', 140000),
('2019-11-15', 'IAH', 'DEL', 'FIRST-CLASS', 195000),
('2019-11-20', 'IXC', 'IAH', 'ECONOMY', 120000);

--
-- Triggers `ticket2`
--
DELIMITER $$
CREATE TRIGGER `update ticket price` AFTER UPDATE ON `ticket2` FOR EACH ROW INSERT INTO TICKET_PRICE_HISTORY VALUES(OLD.DATE_OF_BOOKING, OLD.SOURCE, OLD.DESTINATION, OLD.CLASS, OLD.PRICE,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ticket3`
--

CREATE TABLE `ticket3` (
  `DATE_OF_CANCELLATION` date NOT NULL,
  `SURCHARGE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket3`
--

INSERT INTO `ticket3` (`DATE_OF_CANCELLATION`, `SURCHARGE`) VALUES
('0000-00-00', 0),
('2019-05-25', 25000),
('2019-12-10', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_price_history`
--

CREATE TABLE `ticket_price_history` (
  `DATE_OF_BOOKING` date NOT NULL,
  `SOURCE` varchar(3) NOT NULL,
  `DESTINATION` varchar(3) NOT NULL,
  `CLASS` varchar(15) NOT NULL,
  `PRICE` int(11) DEFAULT NULL,
  `DATE_OF_UPDATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(4, 'Srujan', 'Kamisetty', 'ka@gmail.com', '198e758164e025c790fabcb9a8754fb9'),
(5, 'test', 'user 5', 'abc@gmail.com', '3f009d72559f51e7e454b16e5d0687a1'),
(6, 'test', 'user 6', 'u6@gmail.com', 'e35a71d10461b39608ba2693c5797657'),
(7, 'test', 'user 7', 'u7@gmail.com', '79ba63d8c5e01dd7ffe9fae481afd5f3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`AIRLINEID`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`AP_NAME`),
  ADD KEY `CNAME` (`CNAME`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CNAME`);

--
-- Indexes for table `contains`
--
ALTER TABLE `contains`
  ADD PRIMARY KEY (`AIRLINEID`,`AP_NAME`),
  ADD KEY `AP_NAME` (`AP_NAME`);

--
-- Indexes for table `employee1`
--
ALTER TABLE `employee1`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `AP_NAME` (`AP_NAME`);

--
-- Indexes for table `employee2`
--
ALTER TABLE `employee2`
  ADD PRIMARY KEY (`JOBTYPE`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`FLIGHT_CODE`),
  ADD KEY `AIRLINEID` (`AIRLINEID`);

--
-- Indexes for table `passenger1`
--
ALTER TABLE `passenger1`
  ADD PRIMARY KEY (`PID`,`PASSPORTNO`);

--
-- Indexes for table `passenger2`
--
ALTER TABLE `passenger2`
  ADD PRIMARY KEY (`PASSPORTNO`);

--
-- Indexes for table `passenger3`
--
ALTER TABLE `passenger3`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `FLIGHT_CODE` (`FLIGHT_CODE`);

--
-- Indexes for table `serves`
--
ALTER TABLE `serves`
  ADD PRIMARY KEY (`SSN`,`PID`,`PASSPORTNO`),
  ADD KEY `PID` (`PID`,`PASSPORTNO`);

--
-- Indexes for table `ticket1`
--
ALTER TABLE `ticket1`
  ADD PRIMARY KEY (`TICKET_NUMBER`),
  ADD KEY `PID` (`PID`,`PASSPORTNO`);

--
-- Indexes for table `ticket2`
--
ALTER TABLE `ticket2`
  ADD PRIMARY KEY (`DATE_OF_BOOKING`,`SOURCE`,`DESTINATION`,`CLASS`);

--
-- Indexes for table `ticket3`
--
ALTER TABLE `ticket3`
  ADD PRIMARY KEY (`DATE_OF_CANCELLATION`);

--
-- Indexes for table `ticket_price_history`
--
ALTER TABLE `ticket_price_history`
  ADD PRIMARY KEY (`DATE_OF_BOOKING`,`SOURCE`,`DESTINATION`,`CLASS`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `airport`
--
ALTER TABLE `airport`
  ADD CONSTRAINT `airport_ibfk_1` FOREIGN KEY (`CNAME`) REFERENCES `city` (`CNAME`) ON DELETE CASCADE;

--
-- Constraints for table `contains`
--
ALTER TABLE `contains`
  ADD CONSTRAINT `contains_ibfk_1` FOREIGN KEY (`AIRLINEID`) REFERENCES `airline` (`AIRLINEID`) ON DELETE CASCADE,
  ADD CONSTRAINT `contains_ibfk_2` FOREIGN KEY (`AP_NAME`) REFERENCES `airport` (`AP_NAME`) ON DELETE CASCADE;

--
-- Constraints for table `employee1`
--
ALTER TABLE `employee1`
  ADD CONSTRAINT `employee1_ibfk_1` FOREIGN KEY (`AP_NAME`) REFERENCES `airport` (`AP_NAME`) ON DELETE CASCADE;

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`AIRLINEID`) REFERENCES `airline` (`AIRLINEID`) ON DELETE CASCADE;

--
-- Constraints for table `passenger3`
--
ALTER TABLE `passenger3`
  ADD CONSTRAINT `passenger3_ibfk_1` FOREIGN KEY (`FLIGHT_CODE`) REFERENCES `flight` (`FLIGHT_CODE`) ON DELETE CASCADE;

--
-- Constraints for table `serves`
--
ALTER TABLE `serves`
  ADD CONSTRAINT `serves_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `employee1` (`SSN`) ON DELETE CASCADE,
  ADD CONSTRAINT `serves_ibfk_2` FOREIGN KEY (`PID`,`PASSPORTNO`) REFERENCES `passenger1` (`PID`, `PASSPORTNO`) ON DELETE CASCADE;

--
-- Constraints for table `ticket1`
--
ALTER TABLE `ticket1`
  ADD CONSTRAINT `ticket1_ibfk_1` FOREIGN KEY (`PID`,`PASSPORTNO`) REFERENCES `passenger1` (`PID`, `PASSPORTNO`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
