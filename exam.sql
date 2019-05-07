-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2019 at 02:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) DEFAULT NULL,
  `que` varchar(1000) NOT NULL,
  `op1` varchar(1000) NOT NULL,
  `op2` varchar(1000) NOT NULL,
  `op3` varchar(1000) NOT NULL,
  `op4` varchar(1000) NOT NULL,
  `ans` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `que`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES
(1, 'An accurate clock shows 8 o\'clock in the morning. Through how may degrees will the hour hand rotate when the clock shows 2 o\'clock in the afternoon?', '144', '150', '168', '180', 'd'),
(2, 'A man buys Rs. 20 shares paying 9% dividend. The man wants to have an interest of 12% on his money. The market value of each share is: ', 'Rs. 12', 'Rs. 15', 'Rs. 18', 'Rs. 21', 'c'),
(3, 'Three pipes A, B and C can fill a tank from empty to full in 30 minutes, 20 minutes, and 10 minutes respectively. When the tank is empty, all the three pipes are opened. A, B and C discharge chemical solutions P,Q and R respectively. What is the proportion of the solution R in the liquid in the tank after 3 minutes? ', '5/11', '6/11', '7/11', '8/11', 'b'),
(4, 'From a group of 7 men and 6 women, five persons are to be selected to form a committee so that at least 3 men are there on the committee. In how many ways can it be done? ', '564', '645', '735', '756', 'd'),
(5, 'Eileen is planning a special birthday dinner for her husband\'s 35th birthday. She wants the evening to be memorable, but her husband is a simple man who would rather be in jeans at a baseball game than in a suit at a fancy restaurant. Which restaurant below should Eileen choose?', 'Alfredo\'s offers fine Italian cuisine and an elegant Tuscan decor. Patrons will feel as though they\'ve spent the evening in a luxurious Italian villa.', 'Pancho\'s Mexican Buffet is an all-you-can-eat family style smorgasbord with the best tacos in town.', 'The Parisian Bistro is a four-star French restaurant where guests are treated like royalty. Chef Dilbert Olay is famous for his beef bourguignon.', 'Marty\'s serves delicious, hearty meals in a charming setting reminiscent of a baseball clubhouse in honor of the owner,Marty Lester, a former major league baseball all-star.', 'd'),
(6, 'In the series, look for the degree and direction of change between the numbers. In other words, do the numbers increase or decrease, and by how much \r\n\r\n 	\r\n\r\nLook at this series: 2, 1, (1/2), (1/4), ... What number should come next?', '1/3', '1/8', '2/8', '1/16', 'b'),
(7, 'Read each sentence to find out whether there is any grammatical error in it. The error, if any will be in one part of the sentence. The letter of that part is the answer. If there is no error, the answer is \'D\'. (Ignore the errors of punctuation, if any).\r\n\r\n', 'We discussed about the problem so thoroughly', 'on the eve of the examination', 'that I found it very easy to work it out.', 'No error.', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `name` varchar(1000) NOT NULL,
  `rollno` varchar(1000) NOT NULL,
  `dob` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `cgpax` varchar(1000) NOT NULL,
  `cgpaxii` varchar(1000) NOT NULL,
  `cgpa` varchar(1000) NOT NULL,
  `yop` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`name`, `rollno`, `dob`, `address`, `cgpax`, `cgpaxii`, `cgpa`, `yop`, `password`, `mark`) VALUES
('akarsh', 'B160148CS', '12/2/2', 'Abcd', '10', '10', '10', '2020', '123', 2),
('rishad', 'B160277CS', '12/12/12', 'd', '10', '10', '10', '2020', '1234', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD UNIQUE KEY `qid` (`que`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
