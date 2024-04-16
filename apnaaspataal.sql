-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 09:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apnaaspataal`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) DEFAULT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Hi', 'Hi, I am AI for Apna Aspataal. how can i help you?'),
(2, 'Symptoms ', '1. Headache\r\n2. Vomit\r\n3. Sneezing\r\n4. Cough\r\n5. Shivering'),
(3, 'Headache', '1 Drink plenty of water. If you don\'t drink enough water, you may still get a headache.\r\n2. Include magnesium in your diet. Magnesium is very important for your body.\r\n3 Sleep well.\r\n4 Use essential oils.\r\n5 Use any herbal remedy.\r\n6 drink coffee.'),
(4, 'Vomit', '\r\n1. drinking enough water\r\n2. drinking juice\r\n3. take a deep breath\r\n4. wrist acupressure\r\n5. Taking Ginger, Fennel, and Cloves\r\n6. sugar and salt water\r\n7. lemonade'),
(5, 'Cough', '1. Consume honey.                        2. Chew a piece of ginge                 3. Eat ginger juice mixed with honey.    4. Boil ginger, make its decoction and drink it.                                5. Drink turmeric decoction.'),
(6, 'Shivering', 'A doctor or medical professional can best help you with the necessary and accurate information. The purpose of this information is not to provide any kind of medical advice or suggestion.'),
(7, 'लक्षण', '1. सिरदर्द 2. उल्टी 3. छींक आना 4. खांसी 5. कंपकंपी');

-- --------------------------------------------------------

--
-- Table structure for table `doctorsignup`
--

CREATE TABLE `doctorsignup` (
  `DoctorName` varchar(30) NOT NULL,
  `Specialist` varchar(15) NOT NULL,
  `DoctorRegistrationNumber` int(20) NOT NULL,
  `DoctorEmail` varchar(30) NOT NULL,
  `DoctorMobileNumber` int(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `DoctorImage` varchar(500) NOT NULL,
  `DoctorLicense` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctorsignup`
--

INSERT INTO `doctorsignup` (`DoctorName`, `Specialist`, `DoctorRegistrationNumber`, `DoctorEmail`, `DoctorMobileNumber`, `Password`, `DoctorImage`, `DoctorLicense`) VALUES
('Priyanshu Goyal', 'Bone', 2147483647, 'Priyanshugoyal8839@gmail.com', 2147483647, '8839246860', 'AS.jpeg', 'BCA-II SEM.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `medicinedetails`
--

CREATE TABLE `medicinedetails` (
  `PatientEmail` varchar(30) NOT NULL,
  `MedicineName` varchar(30) NOT NULL,
  `Medicine_Time` varchar(20) NOT NULL,
  `MedicineImage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicinedetails`
--

INSERT INTO `medicinedetails` (`PatientEmail`, `MedicineName`, `Medicine_Time`, `MedicineImage`) VALUES
('Priyanshugoyal8839@gmail.com', 'asdf', '2', 'Screenshot 2024-01-18 102623.png'),
('Priyanshugoyal8839@gmail.com', 'cold', '2', 'Screenshot 2024-01-18 102623.png'),
('asdfghj@gmail.com', 'plkmn', '2', 'Screenshot 2023-10-14 163622.png'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patientsignup`
--

CREATE TABLE `patientsignup` (
  `PatientName` varchar(20) NOT NULL,
  `PatientEmail` varchar(30) NOT NULL,
  `PatientMobileNumber` int(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `PatientImage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientsignup`
--

INSERT INTO `patientsignup` (`PatientName`, `PatientEmail`, `PatientMobileNumber`, `Password`, `PatientImage`) VALUES
('Priyanshu Goyal', 'Priyanshugoyal8839@gmail.com', 2147483647, '8839246860', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorsignup`
--
ALTER TABLE `doctorsignup`
  ADD PRIMARY KEY (`DoctorEmail`);

--
-- Indexes for table `patientsignup`
--
ALTER TABLE `patientsignup`
  ADD PRIMARY KEY (`PatientEmail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
