-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 03:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `islamic_school_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `a_role` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`, `c_password`, `image`, `a_role`) VALUES
(8, 'Hassan', 'salman@yahoo.co', 'asd', 'asd', 'uploadAdmin/images (1).jpg', 2),
(13, 'Hamza Kamal Khan', 'hamza@yahoo.com', 'asdf', 'asdf', 'uploadAdmin/hamza.jpg', 2),
(19, 'Muhammad Adil Khan', 'marwatadil@yahoo.com', 'asdf', 'asdf', 'uploadAdmin/adil.jpg', 1),
(21, 'Salman', 'salman@yahoo.com', 'asdf', 'asdf', 'uploadAdmin/download.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `c_instructor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `e_id` int(100) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_type` varchar(100) NOT NULL,
  `e_class` varchar(100) NOT NULL,
  `e_section` varchar(100) NOT NULL,
  `e_time` varchar(100) NOT NULL,
  `e_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`e_id`, `e_name`, `e_type`, `e_class`, `e_section`, `e_time`, `e_date`) VALUES
(14, 'Final Paper', 'mathematic', 'play', 'A', '08.00 am - 09.00 am', '2021-07-14'),
(15, 'Final Paper', 'english', 'nursery', 'A', '09.00 am - 11.00 am', '2021-07-15'),
(16, 'Final Paper', 'english', 'one', 'C', '	08.00 am - 09.00 am', '2021-07-14'),
(17, 'Final Paper', 'economic', 'one', 'C', '	08.00 am - 09.00 am', '2021-07-15'),
(18, 'Final Paper', 'urdu', 'two', 'D', '	08.00 am - 09.00 am', '2021-07-16'),
(19, 'Final Paper', 'pak study', 'two', 'E', '	08.00 am - 09.00 am', '2021-07-16'),
(20, 'Final', 'pak study', 'three', 'E', '	08.00 am - 09.00 am', '2021-07-17'),
(21, 'Final Paper', 'mathematic', 'two', 'D', '	08.00 am - 09.00 am', '2021-07-18'),
(22, 'Final Paper', 'english', 'play', 'C', '	08.00 am - 09.00 am', '2021-07-18'),
(23, 'Final Paper', 'economic', 'nursery', 'B', '	08.00 am - 09.00 am', '2021-07-19'),
(24, 'Final Paper', 'economic', 'one', 'C', '	08.00 am - 09.00 am', '2021-07-20'),
(25, 'Final Paper', 'economic', 'one', 'C', '	08.00 am - 09.00 am', '2021-07-20'),
(26, 'Final Paper', 'economic', 'one', 'D', '	08.00 am - 09.00 am', '2021-07-21'),
(27, 'Final Paper', 'urdu', 'one', 'C', '	08.00 am - 09.00 am', '2021-07-21'),
(28, 'Final Paper', 'urdu', 'one', 'D', '	08.00 am - 09.00 am', '2021-07-22'),
(29, 'Final Paper', 'economic', 'three', '', '	08.00 am - 09.00 am', '2021-07-22'),
(30, 'Test', 'economic', 'play', 'B', '12.00 am - 02.00 pm', '2021-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(100) NOT NULL,
  `ex_name` varchar(100) NOT NULL,
  `ex_type` varchar(100) NOT NULL,
  `ex_amount` varchar(100) NOT NULL,
  `ex_status` varchar(100) NOT NULL,
  `ex_phone` varchar(100) NOT NULL,
  `ex_email` varchar(100) NOT NULL,
  `ex_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `ex_name`, `ex_type`, `ex_amount`, `ex_status`, `ex_phone`, `ex_email`, `ex_date`) VALUES
(2, 'Ashiq', 'salary', '$1000', 'paid', '12345678', 'ashiq@gmail.com', '12/6/2021'),
(3, 'Muhammad Adil Khan', 'salary', '$2000', 'due', '+39394943', 'adil@yahoo.comk', '12/7/2021');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `amount` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `id` int(100) NOT NULL,
  `hostel_name` varchar(100) NOT NULL,
  `room_number` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `no_of_bed` int(100) NOT NULL,
  `cost_per_bed` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `hostel_name`, `room_number`, `room_type`, `no_of_bed`, `cost_per_bed`) VALUES
(7, 'Boys-1', '3', 'medium', 3, '$50'),
(8, 'boys-1', '4', 'medium', 3, '$50');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `l_id` int(30) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `writer` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `publish` varchar(30) NOT NULL,
  `creating_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`l_id`, `book_name`, `subject`, `writer`, `class`, `publish`, `creating_date`) VALUES
(1, 'English Grammer', 'English', 'David Morgan', '5', '2019', '20.1.2021'),
(2, 'English Grammer', 'English', 'David Morgan', '5', '2019', '20.12021'),
(3, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(4, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(5, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(6, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(7, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(8, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(9, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(10, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(11, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(12, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(13, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(14, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(15, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(16, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(17, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(18, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(19, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(20, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015'),
(21, 'English Grammer', 'English', 'David Malan', '6', '2019', '20.20.2015');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `n_id` int(100) NOT NULL,
  `n_title` varchar(100) NOT NULL,
  `n_posted_by` varchar(100) NOT NULL,
  `n_details` text NOT NULL,
  `n_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`n_id`, `n_title`, `n_posted_by`, `n_details`, `n_date`) VALUES
(9, 'Covid-19 vacation', 'Zohaib Saeed', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?', '2021-07-14 20:53:51'),
(10, 'Spring Festival', 'Muzammil Ali', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus', '2021-07-14 20:59:59'),
(18, 'Summer Vacation', 'Ashiq Ullah', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus nostrum molestias ut officiis commodi aspernatur eligendi cum tempora, facilis tempore accusamus vel maiores. Provident, itaque tenetur?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum quas odit, ad natus', '2021-07-14 23:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(30) NOT NULL,
  `p_photo` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_gender` varchar(30) NOT NULL,
  `p_occupation` varchar(30) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `p_phone` varchar(50) NOT NULL,
  `p_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `p_photo`, `p_name`, `p_gender`, `p_occupation`, `p_address`, `p_phone`, `p_email`) VALUES
(6, 'images/images (1).jpg', 'Shah Raza', 'male', 'App Developer', 'Kohat', '0039394943', 'SShah@yahoo.com'),
(7, 'images/images (3).jpg', 'Zohaib Saeed', 'male', 'Data Analyst ', 'Charsada', '+39394943', 'Szohaib93@gmail.com'),
(8, 'images/images (4).jpg', 'Naina Said', 'female', 'AI ', 'Peshawar', '+39394943', 'SNaina@yahoo.com'),
(9, 'images/images (5).jpg', 'Hamza Kamal', 'male', 'Web Developer', 'Lower Dir', '+39394943', 'Shamza90@gmail.com'),
(10, 'images/images (6).jpg', 'Ali', 'male', 'Data Analyst ', 'Abbotabad', '+39394943', 'Sali@yahoo.com'),
(11, 'images/images (7).jpg', 'Salma', 'male', 'House Wife', 'peshawar', '+39394943', 'Ssalma$outlook.com'),
(12, 'images/images.jpg', 'Shahid', 'male', 'AI ', 'Peshawar, Hayatabad', '+39394943', 'Sshahid@gmail.com'),
(13, 'images/images (8).jpg', 'Salman Sarwar', 'male', 'Web Developer', 'waziristan ', '0039394943', 'Ssalman@yahoo.com'),
(14, 'images/images (9).jpg', 'Zakir', 'male', 'Electrical Engineer', 'peshawar', '+39394943', 'Szakir@yahoo.com'),
(15, 'images/images (12).jpg', 'Kinza', 'male', 'Data Analyst ', 'Karachi', '+39394943', 'Skinza@yahoo.com'),
(16, 'images/images (13).jpg', 'Haseeb', 'male', 'Web Developer', 'Peshawar', '+39394943', 'haseeb@yahoo.com'),
(172, 'images/images (20).jpg', 'khushdil', 'male', 'AI ', 'waziristan', '0039394943', 'salman@yahoo.co'),
(175, 'images/images (10).jpg', 'Zohaib', 'male', 'Data Analyst ', 'waziristan', '0039394943', 'zohaib@gmail.com'),
(176, 'images/images (18).jpg', 'Muhammad Adil Khan', 'male', 'Data Analyst ', 'Peshawar, Hayatabad, Phase 5, Sector C3,Street 1, House No D106.', '+39394943', 'salman@yahoo.co'),
(178, 'images/images (11).jpg', 'salman', 'male', 'AI ', 'waziristan golona', '0039394943', 'salman@yahoo.co'),
(185, 'images/images (16).jpg', 'Muhammad Adil Khan', 'male', 'Data Analyst ', 'Peshawar, Hayatabad, Phase 5, Sector C3,Street 1, House No D106.', '+39394943', 'salman@yahoo.co'),
(186, 'images/download.png', 'Abdullah', 'male', 'businessman', 'Muree', '+39394943', 'abdullah@yahoo.com'),
(187, 'images/download.jpg', 'John Doe', 'male', 'Web Developer', 'waziristan golona', '0039394943', 'salman@yahoo.com'),
(190, 'images/images (21).jpg', 'Muhammad Adil Khan', 'male', 'Web Developer', 'Peshawar, Hayatabad, Phase 5, Sector C3,Street 1, House No D106.', '+39394943', 'salman@yahoo.co'),
(191, 'images/pulse.png', 'Muhammad Adil Khan', 'male', 'Web Developer', 'Peshawar, Hayatabad, Phase 5, Sector C3,Street 1, House No D106.', '+39394943', 'salman@yahoo.co'),
(192, 'images/images (14).jpg', 'Muhammad Adil Khan', 'other', 'Web Developer', 'Peshawar, Hayatabad, Phase 5, Sector C3,Street 1, House No D106.', '+39394943', 'salman@yahoo.co');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `enroll_year` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `class` varchar(15) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `academic_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `image`, `fname`, `lname`, `father_name`, `enroll_year`, `dob`, `class`, `gender`, `academic_year`) VALUES
(178, 'images/adil.jpg', 'Adil', 'khan', 'munawar khan', '2011', '1999', '6', 'male', 2021),
(185, 'images/content_user-profile-design-15.jpg', 'Ashiq', 'Khan marwat', 'sarwar jan', '2011', '1999', '6', 'male', 2021),
(186, 'images/news2.jpg', 'Ayan', 'Khan marwat', 'Ashiq Ullah', '2011', '1999', '6', 'male', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fname`, `lname`, `address`, `qualification`, `city`, `state`, `zip`, `phone`, `email`, `gender`) VALUES
(111, 'Muhammad', 'Khan', 'Peshawar, Hayatabad, Phase 5, Sector C3,Street 1, House No D106.', 'web', 'Peshawar', 'Khyber Pakhtunkhwa', '25000', '+39394943', 'salman@yahoo.co', 'male'),
(112, 'Muhammad', 'Khan', 'Peshawar, Hayatabad, Phase 5, Sector C3,Street 1, House No D106.', 'web', 'Peshawar', 'Khyber Pakhtunkhwa', '25000', '+39394943', 'salman@yahoo.com', 'male'),
(113, 'Muhammad', 'Khan', 'Peshawar, Hayatabad, Phase 5, Sector C3,Street 1, House No D106.', 'web', 'Peshawar', 'Khyber Pakhtunkhwa', '25000', '+39394943', 'salman@yahoo.co', 'male'),
(114, 'Muhammad', 'Khan', 'Peshawar, Hayatabad, Phase 5, Sector C3,Street 1, House No D106.', 'web', 'Peshawar', 'Khyber Pakhtunkhwa', '25000', '+39394943', 'salman@yahoo.co', 'male'),
(115, 'Muhammad', 'Khan', 'Peshawar, Hayatabad, Phase 5, Sector C3,Street 1, House No D106.', 'web', 'Peshawar', 'Khyber Pakhtunkhwa', '25000', '+39394943', 'salman@yahoo.co', 'male'),
(116, 'Muhammad', 'Khan', 'Peshawar, Hayatabad, Phase 5, Sector C3,Street 1, House No D106.', 'web', 'Peshawar', 'Khyber Pakhtunkhwa', '25000', '+39394943', 'salman@yahoo.co', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(100) NOT NULL,
  `route_name` varchar(100) NOT NULL,
  `vehicle_no` varchar(50) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `driver_license` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `route_name`, `vehicle_no`, `driver_name`, `driver_license`, `contact_number`) VALUES
(1, 'University road', 'MT988800', 'Johnathan John', 'DLNC025936', '+889562365846'),
(2, 'University Road', 'MT988800', 'Johnathan John', 'DLNC025936', '+889562365846'),
(3, 'University Road', 'MT988800', 'Johnathan John', 'DLNC025936', '+889562365846'),
(4, 'University Road', 'MT988800', 'Johnathan John', 'DLNC025936', '+889562365846'),
(5, 'University Road', 'MT988800', 'Johnathan John', 'DLNC025936', '+889562365846');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `e_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `l_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `n_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
