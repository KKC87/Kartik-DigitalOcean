-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2020 at 08:38 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('yashika@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('55892169bf6a7', '55892169d2efc'),
('5589216a3646e', '5589216a48722'),
('558922117fcef', '5589221195248'),
('55892211e44d5', '55892211f1fa7'),
('558922894c453', '558922895ea0a'),
('558922899ccaa', '55892289aa7cf'),
('558923538f48d', '558923539a46c'),
('55892353f05c4', '55892354051be'),
('558973f4389ac', '558973f462e61'),
('558973f4c46f2', '558973f4d4abe'),
('558973f51600d', '558973f526fc5'),
('558973f55d269', '558973f57af07'),
('558973f5abb1a', '558973f5e764a'),
('5e6aa0934a7f3', '5e6aa09359677'),
('5e6cbd4c3b55d', '5e6cbd4c4f4fb'),
('5e6cbd4c9d27f', '5e6cbd4c9d4e1'),
('5e6cbd4cf11c3', '5e6cbd4cf12e1'),
('5e6ccd1742c69', '5e6ccd174d27e'),
('5e6ccd1775ac3', '5e6ccd177dfb9'),
('5e6ccd17a681d', '5e6ccd17aed23'),
('5e6ccd17e79e5', '5e6ccd17efee1'),
('5e6ccd1824542', '5e6ccd1837796'),
('5e6ccd1860036', '5e6ccd18684fc'),
('5e6ccd188e245', '5e6ccd1893c07'),
('5e6ccd18d1ffb', '5e6ccd18da4b6'),
('5e6ccd1915b1d', '5e6ccd1920832'),
('5e6ccd1942246', '5e6ccd1947b8e'),
('5e6cd6a476892', '5e6cd6a476b60'),
('5e6cd6a6cbfd1', '5e6cd6a6cc0df');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('5e6a74809b722', 'yashika', 'yashika1@gmail.com', 'good', 'very good project', '2020-03-12', '05:42:24pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('nik1@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2015-06-23 16:11:50'),
('yashkagupta@gmail.com', '5589222f16b93', 1, 2, 1, 1, '2020-03-11 08:52:44'),
('yashikagupta@gmail.com', '5589222f16b93', -5, 2, 0, 5, '2020-03-11 14:47:46'),
('yashikagupta@gmail.com', '558922ec03021', -2, 2, 0, 2, '2020-03-11 17:24:12'),
('yash@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2020-03-12 20:10:37'),
('yash@gmail.com', '5589222f16b93', -1, 1, 0, 1, '2020-03-12 20:11:32'),
('yash@gmail.com', '558920ff906b8', 4, 2, 2, 0, '2020-03-14 13:17:25'),
('yash@gmail.com', '55897338a6659', -5, 5, 0, 5, '2020-03-14 13:18:01'),
('yashika0@gmail.com', '558920ff906b8', 4, 2, 2, 0, '2020-03-14 13:20:20'),
('yashika@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2020-03-17 18:01:45'),
('yashikagupta@gmail.com', '5e6cc9ab73788', -10, 10, 0, 10, '2020-03-17 18:52:26'),
('yashika@gmail.com', '558922ec03021', 1, 2, 1, 1, '2020-05-28 20:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('55892169bf6a7', 'printf()', '55892169d2efc'),
('55892169bf6a7', 'print()', '55892169d2f05'),
('55892169bf6a7', 'echo', '55892169d2f09'),
('55892169bf6a7', 'cout', '55892169d2f0c'),
('5589216a3646e', 'cin', '5589216a48713'),
('5589216a3646e', 'scan', '5589216a4871a'),
('5589216a3646e', 'printf', '5589216a4871f'),
('5589216a3646e', 'scanf', '5589216a48722'),
('558922117fcef', 'echo', '5589221195248'),
('558922117fcef', 'print', '558922119525a'),
('558922117fcef', 'printf', '5589221195265'),
('558922117fcef', 'cout', '5589221195270'),
('55892211e44d5', 'int a', '55892211f1f97'),
('55892211e44d5', '$a', '55892211f1fa7'),
('55892211e44d5', 'long int a', '55892211f1fb4'),
('55892211e44d5', 'int a$', '55892211f1fbd'),
('558922894c453', 'cin>>a;', '558922895ea0a'),
('558922894c453', 'cin<<a;', '558922895ea26'),
('558922894c453', 'cout>>a;', '558922895ea34'),
('558922894c453', 'cout<a;', '558922895ea41'),
('558922899ccaa', 'cout', '55892289aa7cf'),
('558922899ccaa', 'cin', '55892289aa7df'),
('558922899ccaa', 'print', '55892289aa7eb'),
('558922899ccaa', 'printf', '55892289aa7f5'),
('558923538f48d', '255.0.0.0', '558923539a46c'),
('558923538f48d', '255.255.255.0', '558923539a480'),
('558923538f48d', '255.255.0.0', '558923539a48b'),
('558923538f48d', 'none of these', '558923539a495'),
('55892353f05c4', '192.168.1.100', '5589235405192'),
('55892353f05c4', '172.168.16.2', '55892354051a3'),
('55892353f05c4', '10.0.0.0.1', '55892354051b4'),
('55892353f05c4', '11.11.11.11', '55892354051be'),
('558973f4389ac', 'O(nlog(n))', '558973f462e44'),
('558973f4389ac', 'O(n)', '558973f462e56'),
('558973f4389ac', 'O(n^2)', '558973f462e61'),
('558973f4389ac', 'None of the above', '558973f462e6b'),
('558973f4c46f2', 'n*log(n)', '558973f4d4abe'),
('558973f4c46f2', 'log(n)', '558973f4d4acf'),
('558973f4c46f2', '(n)', '558973f4d4ad9'),
('558973f4c46f2', 'none of these', '558973f4d4ae3'),
('558973f51600d', 'O(log(n))', '558973f526f9d'),
('558973f51600d', 'O(n^2)', '558973f526fb9'),
('558973f51600d', 'O(nlog(n))', '558973f526fc5'),
('558973f51600d', 'none of these', '558973f526fce'),
('558973f55d269', '(nlog(n))', '558973f57aef1'),
('558973f55d269', '(n)', '558973f57af07'),
('558973f55d269', '(n^2)', '558973f57af17'),
('558973f55d269', 'none of these', '558973f57af27'),
('558973f5abb1a', '(n)', '558973f5e7623'),
('558973f5abb1a', 'nlog(n)', '558973f5e7636'),
('558973f5abb1a', '(n^2)', '558973f5e7640'),
('558973f5abb1a', 'none of these', '558973f5e764a'),
('5e6aa0934a7f3', 'q', '5e6aa0935966d'),
('5e6aa0934a7f3', '4', '5e6aa09359677'),
('5e6aa0934a7f3', 'g', '5e6aa0935967a'),
('5e6aa0934a7f3', 'g', '5e6aa0935967d'),
('5e6cbd4c3b55d', 'VXDQ', '5e6cbd4c4f4f5'),
('5e6cbd4c3b55d', 'XUGX', '5e6cbd4c4f4fb'),
('5e6cbd4c3b55d', 'ROAR', '5e6cbd4c4f4fd'),
('5e6cbd4c3b55d', 'VSOV', '5e6cbd4c4f4ff'),
('5e6cbd4c9d27f', 'Father', '5e6cbd4c9d4d4'),
('5e6cbd4c9d27f', 'Brother', '5e6cbd4c9d4db'),
('5e6cbd4c9d27f', 'Grandfather', '5e6cbd4c9d4de'),
('5e6cbd4c9d27f', 'None of these', '5e6cbd4c9d4e1'),
('5e6cbd4cf11c3', 'GERH', '5e6cbd4cf12d9'),
('5e6cbd4cf11c3', 'GRHE', '5e6cbd4cf12e1'),
('5e6cbd4cf11c3', 'GREH', '5e6cbd4cf12ea'),
('5e6cbd4cf11c3', 'GEHR', '5e6cbd4cf12f3'),
('5e6ccd1742c69', 'Tennis', '5e6ccd174d274'),
('5e6ccd1742c69', 'Hockey', '5e6ccd174d27e'),
('5e6ccd1742c69', 'cricket', '5e6ccd174d283'),
('5e6ccd1742c69', 'none of above', '5e6ccd174d287'),
('5e6ccd1775ac3', 'Fairbanks', '5e6ccd177dfac'),
('5e6ccd1775ac3', 'Charlie Chaplin', '5e6ccd177dfb6'),
('5e6ccd1775ac3', 'Janit Gayner', '5e6ccd177dfb9'),
('5e6ccd1775ac3', 'Montgomery', '5e6ccd177dfbb'),
('5e6ccd17a681d', 'Agra', '5e6ccd17aed09'),
('5e6ccd17a681d', 'Delhi', '5e6ccd17aed18'),
('5e6ccd17a681d', 'Jaipur', '5e6ccd17aed1f'),
('5e6ccd17a681d', 'Chittor', '5e6ccd17aed23'),
('5e6ccd17e79e5', 'Nangal ', '5e6ccd17efed4'),
('5e6ccd17e79e5', 'Bhakra', '5e6ccd17efedd'),
('5e6ccd17e79e5', 'Hirakund', '5e6ccd17efee1'),
('5e6ccd17e79e5', 'None of these', '5e6ccd17efee4'),
('5e6ccd1824542', 'Vatican city', '5e6ccd1837796'),
('5e6ccd1824542', 'Tonga', '5e6ccd183779f'),
('5e6ccd1824542', 'Naura', '5e6ccd18377a2'),
('5e6ccd1824542', 'Monaco', '5e6ccd18377a5'),
('5e6ccd1860036', 'England', '5e6ccd18684fc'),
('5e6ccd1860036', 'Australia', '5e6ccd1868506'),
('5e6ccd1860036', 'India', '5e6ccd1868509'),
('5e6ccd1860036', 'None of these', '5e6ccd186850d'),
('5e6ccd188e245', 'tennis', '5e6ccd1893bf8'),
('5e6ccd188e245', 'chess', '5e6ccd1893c07'),
('5e6ccd188e245', 'ice hockey', '5e6ccd1893c0c'),
('5e6ccd188e245', 'none of these', '5e6ccd1893c11'),
('5e6ccd18d1ffb', '7', '5e6ccd18da4ac'),
('5e6ccd18d1ffb', '9', '5e6ccd18da4b6'),
('5e6ccd18d1ffb', '12', '5e6ccd18da4b9'),
('5e6ccd18d1ffb', '14', '5e6ccd18da4bd'),
('5e6ccd1915b1d', 'calcutta', '5e6ccd1920832'),
('5e6ccd1915b1d', 'lucknow', '5e6ccd192083c'),
('5e6ccd1915b1d', 'delhi', '5e6ccd192083f'),
('5e6ccd1915b1d', 'none of above', '5e6ccd1920841'),
('5e6ccd1942246', 'Baseketball', '5e6ccd1947b8e'),
('5e6ccd1942246', 'Hockey', '5e6ccd1947b98'),
('5e6ccd1942246', 'Football', '5e6ccd1947b9a'),
('5e6ccd1942246', 'none of above', '5e6ccd1947b9c'),
('5e6cd6a476892', 'GERH', '5e6cd6a476b58'),
('5e6cd6a476892', 'GRHE', '5e6cd6a476b60'),
('5e6cd6a476892', 'GEHR', '5e6cd6a476b64'),
('5e6cd6a476892', 'GHRE', '5e6cd6a476b67'),
('5e6cd6a6cbfd1', 'OLNNIE', '5e6cd6a6cc0df'),
('5e6cd6a6cbfd1', 'ONILEN', '5e6cd6a6cc0e9'),
('5e6cd6a6cbfd1', 'ONNLIE', '5e6cd6a6cc0f2'),
('5e6cd6a6cbfd1', 'NOILEN', '5e6cd6a6cc0f7');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('558920ff906b8', '55892169bf6a7', 'What is the command to print output in c ?', 4, 1),
('558920ff906b8', '5589216a3646e', 'what is the command to take input from user in c?', 4, 2),
('558921841f1ec', '558922117fcef', 'what is command for print in php??', 4, 1),
('558921841f1ec', '55892211e44d5', 'which is a variable of php??', 4, 2),
('5589222f16b93', '558922894c453', 'what is correct statement in c++??', 4, 1),
('5589222f16b93', '558922899ccaa', 'which command is use for print the output in c++?', 4, 2),
('558922ec03021', '558923538f48d', 'what is correct mask for A class IP???', 4, 1),
('558922ec03021', '55892353f05c4', 'which is not a private IP??', 4, 2),
('55897338a6659', '558973f4389ac', 'What is time complexity of QuickSort in Worst Case?', 4, 1),
('55897338a6659', '558973f4c46f2', 'What is the time complexity of Merge Sort in Worst Case?', 4, 2),
('55897338a6659', '558973f51600d', 'What is the time complexity of HeapSort in Worst Case?', 4, 3),
('55897338a6659', '558973f55d269', 'What is the time complexity of Bubble Sort in Best Case?', 4, 4),
('55897338a6659', '558973f5abb1a', 'What is the time complexity of Insertion Sort in Best Case?', 4, 5),
('5e6aa07502e9c', '5e6aa0934a7f3', '2+2', 4, 1),
('5e6cc9ab73788', '5e6ccd1742c69', 'The national game of Pakistan is....?', 4, 1),
('5e6cc9ab73788', '5e6ccd1775ac3', 'Who was the first actor to get Oscar Award..?', 4, 2),
('5e6cc9ab73788', '5e6ccd17a681d', 'Vijay Stambha is situated at â€¦.?', 4, 3),
('5e6cc9ab73788', '5e6ccd17e79e5', 'The longest Dam of India is â€¦.?', 4, 4),
('5e6cc9ab73788', '5e6ccd1824542', 'Smallest country of world is ..?', 4, 5),
('5e6cc9ab73788', '5e6ccd1860036', 'Which country host cricket world cup 2019....?', 4, 6),
('5e6cc9ab73788', '5e6ccd188e245', 'Naidu cup belongs to which game...?', 4, 7),
('5e6cc9ab73788', '5e6ccd18d1ffb', 'Number of players in kho kho are ..?', 4, 8),
('5e6cc9ab73788', '5e6ccd1915b1d', 'Eden Gardens cricket stadium is in...?', 4, 9),
('5e6cc9ab73788', '5e6ccd1942246', 'hook pass terminology belongs to which sports...?', 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('558920ff906b8', 'Programming in C ', 2, 1, 2, 5, '', 'linux', '2020-03-11 11:03:34'),
('558921841f1ec', 'Php Coding', 2, 1, 2, 5, '', 'PHP', '2015-06-23 09:06:12'),
('5589222f16b93', 'Object Oriented Programming Using C++', 2, 1, 2, 5, '', 'c++', '2020-03-11 14:38:41'),
('558922ec03021', 'Networking', 2, 1, 2, 5, '', 'networking', '2015-06-23 09:12:12'),
('55897338a6659', 'Data structure using C', 2, 1, 5, 10, '', 'linux', '2020-03-11 14:41:06'),
('5e6cc9ab73788', 'General Awareness  Quiz 2020 ', 2, 1, 10, 5, 'GK', '', '2020-03-14 12:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

DROP TABLE IF EXISTS `rank`;
CREATE TABLE IF NOT EXISTS `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('yashikagupta@gmail.com', -31, '2020-03-17 18:52:26'),
('yash@gmail.com', -22, '2020-03-14 13:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Yash', 'M', 'bbb', 'yash@gmail.com', 2233445566, '09e868b2c6c346df8251f22d957c3a54'),
('Yashika Gupta', 'F', 'knit ', 'yashikagupta@gmail.com', 7088497577, '6b974b8d0a6b6053d93553eb5e09ca57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
