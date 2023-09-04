-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 04:09 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Adminame` varchar(255) NOT NULL,
  `Password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Adminame`, `Password`) VALUES
(1, 'fawas', '123');

-- --------------------------------------------------------

--
-- Table structure for table `adminpage`
--

CREATE TABLE `adminpage` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Adminname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `department` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpage`
--

INSERT INTO `adminpage` (`id`, `Fullname`, `Adminname`, `Email`, `Password`, `Address`, `Age`, `department`, `phone`) VALUES
(49, 'Dr. lawal', 'Dr. lawal', 'walewalex@gmail.com', 'lawal12@', 'Oke-Awasin Area, Erin Osun', '03/08/2000', ' Emergency', '09123369960'),
(50, ' Adekunle Opatunji', 'Dr. Opatunji', 'Adekunleopatunji12@gmail.com', 'opatunji12@', 'Ogo Oluwa aregbe osogbo osun state', '08/08/1997', 'Outpatient Department', '07034567108'),
(54, 'Azeez muhammad', 'Dr.Azeez', 'azeezmuhamad12@gmail.com', 'muhamad12@', 'Oke-Awasin Area, Erin Osun', '21/08/1990', ' Radiology', '08141382030'),
(55, 'Oguntoke mubarak', 'Dr.Oguntoke', 'Oguntokemubarak@gmail.com67', 'mubarak12@', 'okebaale osogbo osun state', '22/08/1998', ' Intensive Care Unit (ICU)', '09123369960');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Adminname` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `AppointmentDate` varchar(20) NOT NULL,
  `AppointmentTime` varchar(8) NOT NULL,
  `messages` varchar(1000) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `Age`, `Adminname`, `Department`, `specialty`, `AppointmentDate`, `AppointmentTime`, `messages`, `patient_id`, `status`) VALUES
(217, 'Oladeni', '49', 'Surgery', '', '01/09/2023', '11:14 PM', 'urgently', 47, 0),
(218, 'Oladimeji', '50', 'Outpatient Department', '', '03/09/2023', '11:15 PM', 'Am having a serious headaches ', 48, 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `Department`, `Description`) VALUES
(13, 'Emergency ', 'The emergency department is where patient go for medical attention when they are experiencing acute medical conditions such as heart attacks, strokes, and injuries.'),
(14, 'Surgery ', 'The surgery department is where patient go for surgical intervention to treat medical conditions or injuries'),
(15, 'Outpatient Department ', 'The outpatient department is where patient go for medical consultations, diagnosis tests, and  minor procedures. This department is to provide medical care to patient who do not require admission to the hospital.'),
(16, 'Inpatient Department ', 'The inpatient department is part of the hospital where patient are admitted for medical treatment and care.'),
(17, 'Intensive Care Unit  (ICU)', 'The intensive care unit (ICU) is a specialized department in the hospital that provide critical care to patients who are in life threatening  conditions or require constant monitoring and treatment.'),
(18, 'Cardiology ', 'The cardiology department is where patients go for the diagnosis and treatment of heart related conditions such as heart disease, heart attacks, and arrhythmias '),
(21, 'Neurology ', 'The neurology department is where patient go for diagnosis and treatment of neurological conditions.'),
(23, 'Psychiatry ', 'The psychiatry department is where go for the treatment of mental heart condition such as bipolar disorder, depression , anxiety.'),
(24, 'Radiology ', 'The radiology department is where diagnostic imaging tests are performed.'),
(25, 'Laboratory ', 'The laboratory department is where diagnostics test are performed on patient samples, such as blood and urine.');

-- --------------------------------------------------------

--
-- Table structure for table `leavetable`
--

CREATE TABLE `leavetable` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `leavetype` varchar(255) NOT NULL,
  `fromday` varchar(255) NOT NULL,
  `today` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leavetable`
--

INSERT INTO `leavetable` (`id`, `doctorname`, `department`, `leavetype`, `fromday`, `today`, `day`, `reason`, `status`) VALUES
(2, 'fawas', 'cardiology ', 'casual leave', 'monday', 'tuesday', '2days', 'not feeling well', 1),
(3, 'fawas', 'cardiology', 'casual', 'Monday', 'Sunday', '7days', 'urgently', 0),
(4, 'fawas', 'cardiology', 'casual', 'Monday', 'Sunday', '7days', 'urgently', 0),
(5, 'fawas', 'cardiology', 'casual', 'Monday', 'Sunday', '7days', 'urgently', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notificationboard`
--

CREATE TABLE `notificationboard` (
  `id` int(11) NOT NULL,
  `notification` varchar(255) NOT NULL,
  `messagefrom` varchar(255) NOT NULL,
  `Date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notificationboard`
--

INSERT INTO `notificationboard` (`id`, `notification`, `messagefrom`, `Date`) VALUES
(12, 'It is expected of the patients to be explicit in their complains', 'Management', '2023-08-09 10:30:43.102894');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `starttime` varchar(255) NOT NULL,
  `endtime` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL,
  `availableend` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `doctorname`, `department`, `starttime`, `endtime`, `available`, `availableend`) VALUES
(24, 'fawas', 'Select', '11:59 PM', '11:59 PM', 'Sunday', 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `userpage`
--

CREATE TABLE `userpage` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Age` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userpage`
--

INSERT INTO `userpage` (`id`, `Username`, `Fullname`, `Email`, `Password`, `Address`, `Age`) VALUES
(47, 'Oladeni', 'Oladeni toheeb', 'oladeni10@gmail.com', 'oladeni12@', 'Oke onti osogbo osun state ', '01/08/2000'),
(48, 'Oladimeji', 'Oladimeji Barakat', 'oladimejibaraka126@gmail.com', 'oladimeji12', 'Isale koko akure ', '09/01/2001'),
(49, 'Ibrahim ', 'Ibrahim Fawaz', 'ibrahimfawas10@gmail.com', 'ibrahim12@', 'No1Abaesa road osogbo osun state', '28/02/1997'),
(50, 'Ibrahim', 'Ibrahim Fawaz', 'ibrahimfawas10@gmail.com', 'Fawaz12@', 'No1Abaesa road osogbo osun state', '02/04/2004'),
(51, 'pt.Og', 'olayinka oluwatoyin', 'olayinkaoluwatoyin@gmail.com', 'olayinka12@', 'Oke onti osogbo osun state ', '13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpage`
--
ALTER TABLE `adminpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavetable`
--
ALTER TABLE `leavetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificationboard`
--
ALTER TABLE `notificationboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpage`
--
ALTER TABLE `userpage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminpage`
--
ALTER TABLE `adminpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `leavetable`
--
ALTER TABLE `leavetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notificationboard`
--
ALTER TABLE `notificationboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `userpage`
--
ALTER TABLE `userpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
