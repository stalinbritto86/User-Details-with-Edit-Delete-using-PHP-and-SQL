-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 10:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mgrhospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `serial_num` int(11) NOT NULL,
  `patient_id` varchar(15) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `op_date` varchar(10) NOT NULL,
  `doctor_visited` varchar(30) NOT NULL,
  `fees_charged` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`serial_num`, `patient_id`, `patient_name`, `phone_number`, `op_date`, `doctor_visited`, `fees_charged`) VALUES
(22, 'MGR147', 'Tambor Khan', '9867436572', '16/09/2022', 'Dr. Raghu Thor', '5000'),
(24, 'MGR147', 'Hensa Sam', '7895789674', '08/09/2022', 'Dr. Guneshekaran', '12000'),
(27, 'MGR147', 'Hensa Sam', '9879764834', '18/09/2022', 'Dr. Guneshekaran', '4500'),
(28, 'MGR147', 'Krishna Kumaran', '9867562554', '18/09/2022', 'Dr. Guneshekaran', '12000'),
(29, 'MGR147', 'Tambor Khan', '9879764834', '16/09/2022', 'Dr. Raghu Thor', '5000'),
(30, 'MGR1678', 'Krishna Kumar', '7895789674', '19/09/2022', 'Dr. Raghu Thor', '4500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`serial_num`,`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `serial_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
