-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 04:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultation_registration`
--

CREATE TABLE `consultation_registration` (
  `ConsultationRegID` int(11) NOT NULL,
  `PurposeOfConsult` varchar(255) NOT NULL,
  `ComplaintOfConsult` varchar(255) NOT NULL,
  `SolutionTaken` varchar(255) NOT NULL,
  `ConsultationRegDate` date NOT NULL,
  `ConsultationStatus` varchar(20) NOT NULL,
  `UserIC` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultation_registration`
--

INSERT INTO `consultation_registration` (`ConsultationRegID`, `PurposeOfConsult`, `ComplaintOfConsult`, `SolutionTaken`, `ConsultationRegDate`, `ConsultationStatus`, `UserIC`) VALUES
(2, 'Khidmat Nasihat', 'Kucing saya sakit', 'Bawa ke hospital', '2023-06-16', 'Belum Disemak', '020728060451');

-- --------------------------------------------------------

--
-- Table structure for table `userpartner_info`
--

CREATE TABLE `userpartner_info` (
  `UserPartnerIC` varchar(12) NOT NULL,
  `UserPartner_Name` varchar(50) NOT NULL,
  `UserPartner_PhoneNum` varchar(15) NOT NULL,
  `UserPartner_Email` varchar(200) NOT NULL,
  `UserPartner_BirthDate` date NOT NULL,
  `UserPartner_Race` varchar(20) DEFAULT NULL,
  `UserPartner_Citizenship` varchar(20) DEFAULT NULL,
  `UserPartner_Career` varchar(50) DEFAULT NULL,
  `UserPartner_Address` varchar(200) DEFAULT NULL,
  `UserPartner_Status` varchar(20) DEFAULT NULL,
  `UserIC` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userpartner_info`
--

INSERT INTO `userpartner_info` (`UserPartnerIC`, `UserPartner_Name`, `UserPartner_PhoneNum`, `UserPartner_Email`, `UserPartner_BirthDate`, `UserPartner_Race`, `UserPartner_Citizenship`, `UserPartner_Career`, `UserPartner_Address`, `UserPartner_Status`, `UserIC`) VALUES
('020728060452', 'NAZRINA NAIMAH BINTI ALI', '0115728661', 'nazrina@gmail.com', '2002-06-16', NULL, NULL, NULL, NULL, NULL, '020728060451'),
('990618066228', 'MINAH BINTI ABU', '0131234567', 'minah@gmail.com', '2000-06-27', NULL, NULL, NULL, NULL, NULL, '990618066227');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `UserIC` varchar(12) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `User_Password` varchar(30) NOT NULL,
  `User_PhoneNo` varchar(12) NOT NULL,
  `User_Gender` varchar(10) NOT NULL,
  `User_Email` varchar(255) NOT NULL,
  `User_BirthDate` date NOT NULL,
  `User_Citizenship` varchar(50) DEFAULT NULL,
  `User_Career` varchar(255) DEFAULT NULL,
  `User_Address` varchar(255) DEFAULT NULL,
  `User_Status` varchar(50) DEFAULT NULL,
  `User_Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`UserIC`, `User_Name`, `User_Password`, `User_PhoneNo`, `User_Gender`, `User_Email`, `User_BirthDate`, `User_Citizenship`, `User_Career`, `User_Address`, `User_Status`, `User_Role`) VALUES
('020728060451', 'NAZRIN NAIM BIN AHMAD MAHARI', 'nazrinnaim', '0105728660', 'MALE', 'nazrinnaim.nn2800@gmail.com', '2002-07-28', 'WARGANEGARA', NULL, NULL, NULL, 'USER'),
('990618066227', 'MUHAMMAD BIN MOKHTAR', 'muhammad', '0135309184', 'MALE', 'muhammad@gmail.com', '1999-06-18', 'WARGANEGARA', NULL, NULL, NULL, 'USER'),
('ADMIN123', 'SUPREME LEADER', 'adminhensem', '-', '-', '-', '0000-00-00', NULL, NULL, NULL, NULL, 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultation_registration`
--
ALTER TABLE `consultation_registration`
  ADD PRIMARY KEY (`ConsultationRegID`),
  ADD KEY `UserIC` (`UserIC`);

--
-- Indexes for table `userpartner_info`
--
ALTER TABLE `userpartner_info`
  ADD PRIMARY KEY (`UserPartnerIC`),
  ADD KEY `UserIC` (`UserIC`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`UserIC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultation_registration`
--
ALTER TABLE `consultation_registration`
  MODIFY `ConsultationRegID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consultation_registration`
--
ALTER TABLE `consultation_registration`
  ADD CONSTRAINT `consultation_registration_ibfk_1` FOREIGN KEY (`UserIC`) REFERENCES `user_info` (`UserIC`);

--
-- Constraints for table `userpartner_info`
--
ALTER TABLE `userpartner_info`
  ADD CONSTRAINT `userpartner_info_ibfk_1` FOREIGN KEY (`UserIC`) REFERENCES `user_info` (`UserIC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
