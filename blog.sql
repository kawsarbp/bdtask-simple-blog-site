-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 02:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`, `datetime`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2022-10-21 08:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `photo`, `datetime`) VALUES
(7, 'School is the place where we learn', 'School is the place where we start our learning. Apart from learning to read, write, and excel in academics, the school also teaches us valuable life lessons that we can incorporate in our daily lives. It is the place where the foundation of our knowledge and morals are laid. So let’s look at some of the things that are worth remembering about our schools. School is the place where we learn to read and write. It is the most crucial place for a student, and it helps us to learn new things. The teachers are always helpful and teach us important things in life. We must always be regular to school as missing classes can lead to problems during exams. Schools teach us how to be consistent, punctual, and obedient. It also makes us better human beings so that we can treat our elders with respect. Most of what we learn is a result of the learning imparted by our teachers.	', '221022123102.jpg', '2022-10-22 10:44:25'),
(8, 'So let’s look at some of the things', 'School is the place where we start our learning. Apart from learning to read, write, and excel in academics, the school also teaches us valuable life lessons that we can incorporate in our daily lives. It is the place where the foundation of our knowledge and morals are laid. So let’s look at some of the things that are worth remembering about our schools. School is the place where we learn to read and write. It is the most crucial place for a student, and it helps us to learn new things. The teachers are always helpful and teach us important things in life. We must always be regular to school as missing classes can lead to problems during exams. Schools teach us how to be consistent, punctual, and obedient. It also makes us better human beings so that we can treat our elders with respect. Most of what we learn is a result of the learning imparted by our teachers.	', '221022123053.jpg', '2022-10-22 10:43:43'),
(9, 'the school also teaches us valuable', '                                    School is the place where we start our learning. Apart from learning to read, write, and excel in academics, the school also teaches us valuable life lessons that we can incorporate in our daily lives. It is the place where the foundation of our knowledge and morals are laid. So let’s look at some of the things that are worth remembering about our schools. School is the place where we learn to read and write. It is the most crucial place for a student, and it helps us to learn new things. The teachers are always helpful and teach us important things in life. We must always be regular to school as missing classes can lead to problems during exams. Schools teach us how to be consistent, punctual, and obedient. It also makes us better human beings so that we can treat our elders with respect. Most of what we learn is a result of the learning imparted by our teachers.	                                    ', '221022123047.jpg', '2022-10-22 12:57:32'),
(10, 'Apart from learning to read', 'School is the place where we start our learning. Apart from learning to read, write, and excel in academics, the school also teaches us valuable life lessons that we can incorporate in our daily lives. It is the place where the foundation of our knowledge and morals are laid. So let’s look at some of the things that are worth remembering about our schools. School is the place where we learn to read and write. It is the most crucial place for a student, and it helps us to learn new things. The teachers are always helpful and teach us important things in life. We must always be regular to school as missing classes can lead to problems during exams. Schools teach us how to be consistent, punctual, and obedient. It also makes us better human beings so that we can treat our elders with respect. Most of what we learn is a result of the learning imparted by our teachers.	', '221022123039.jpg', '2022-10-22 10:59:35'),
(11, 'School is the place where', 'School is the place where we start our learning. Apart from learning to read, write, and excel in academics, the school also teaches us valuable life lessons that we can incorporate in our daily lives. It is the place where the foundation of our knowledge and morals are laid. So let’s look at some of the things that are worth remembering about our schools. School is the place where we learn to read and write. It is the most crucial place for a student, and it helps us to learn new things. The teachers are always helpful and teach us important things in life. We must always be regular to school as missing classes can lead to problems during exams. Schools teach us how to be consistent, punctual, and obedient. It also makes us better human beings so that we can treat our elders with respect. Most of what we learn is a result of the learning imparted by our teachers.	  ', '221022123112.jpg', '2022-10-22 10:41:41'),
(12, 'Lorem ipsum dolor sit ', 'School is the place where we start our learning. Apart from learning to read, write, and excel in academics, the school also teaches us valuable life lessons that we can incorporate in our daily lives. It is the place where the foundation of our knowledge and morals are laid. So let’s look at some of the things that are worth remembering about our schools. School is the place where we learn to read and write. It is the most crucial place for a student, and it helps us to learn new things. The teachers are always helpful and teach us important things in life. We must always be regular to school as missing classes can lead to problems during exams. Schools teach us how to be consistent, punctual, and obedient. It also makes us better human beings so that we can treat our elders with respect. Most of what we learn is a result of the learning imparted by our teachers.	', '221022123125.jpg', '2022-10-22 10:59:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
