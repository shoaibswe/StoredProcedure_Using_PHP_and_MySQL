-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 10:21 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advdblab`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `std_marks_entry` (IN `stdid` VARCHAR(11), IN `labid` VARCHAR(7), IN `stdmarks` INT, IN `semester` VARCHAR(30))  BEGIN
	IF
		stdmarks<21 THEN BEGIN
    	insert into `students_marks`(`std_id`,`lab_id`,`std_marks`,`semester`) values (stdid,labid,stdmarks,semester);
		END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `test` ()  NO SQL
select * from students_marks where std_id='162-35-1688' and lab_id='swe423' and semester='fall'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `test2` (IN `id` VARCHAR(30))  NO SQL
BEGIN
SELECT std_marks, semester
from students_marks
WHERE students_marks.semester='fall' AND id=students_marks.std_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewprocess` (IN `id` VARCHAR(11), IN `labid` VARCHAR(6), IN `examst` VARCHAR(10))  BEGIN
DECLARE sid varchar(11);
DECLARE labid varchar(6);
DECLARE marks varchar(2);
DECLARE labt varchar(30);
DECLARE stdname varchar(30);

IF examst='p'
THEN BEGIN
SELECT sid=student_info.std_id, labid=students_marks.lab_id, marks=students_marks.std_marks, labt=lab_info.teacher_name 
from student_info LEFT OUTER JOIN 
students_marks on student_info.std_id = students_marks.std_id
LEFT OUTER JOIN lab_info
on students_marks.lab_id=lab_info.lab_id
WHERE students_marks.std_marks>10 AND id=students_marks.std_id AND labid=students_marks.lab_id;
END;
ELSEIF examst='f'
THEN BEGIN
SELECT sid=student_info.std_id, labid=students_marks.lab_id, marks=students_marks.std_marks, labt=lab_info.teacher_name 
from student_info LEFT OUTER JOIN 
students_marks on student_info.std_id = students_marks.std_id
LEFT OUTER JOIN lab_info
on students_marks.lab_id=lab_info.lab_id
WHERE students_marks.std_marks<10 AND id=students_marks.std_id AND labid=students_marks.lab_id;
END;
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `vp` (IN `id` VARCHAR(11), IN `labid` VARCHAR(6), IN `sem` VARCHAR(10))  BEGIN
IF sem='summer'
THEN BEGIN
SELECT student_info.std_id, students_marks.lab_id, students_marks.std_marks, students_marks.semester, lab_info.teacher_name 
from student_info INNER JOIN 
students_marks on student_info.std_id = students_marks.std_id
INNER JOIN lab_info
on students_marks.lab_id=lab_info.lab_id
WHERE students_marks.semester='summer' AND id=students_marks.std_id AND labid=students_marks.lab_id;
END;
ELSEIF sem='spring'
THEN BEGIN
SELECT student_info.std_id, students_marks.lab_id, students_marks.std_marks, students_marks.semester, lab_info.teacher_name 
from student_info INNER JOIN 
students_marks on student_info.std_id = students_marks.std_id
INNER JOIN lab_info
on students_marks.lab_id=lab_info.lab_id
WHERE students_marks.semester='spring' AND id=students_marks.std_id AND labid=students_marks.lab_id;
END;
ELSEIF sem='fall'
THEN BEGIN
SELECT student_info.std_id, students_marks.lab_id, students_marks.std_marks, students_marks.semester, lab_info.teacher_name 
from student_info INNER JOIN 
students_marks on student_info.std_id = students_marks.std_id
INNER JOIN lab_info
on students_marks.lab_id=lab_info.lab_id
WHERE students_marks.semester='fall' AND id=students_marks.std_id AND labid=students_marks.lab_id;
END;
END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lab_info`
--

CREATE TABLE `lab_info` (
  `lab_id` varchar(10) NOT NULL,
  `teacher_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_info`
--

INSERT INTO `lab_info` (`lab_id`, `teacher_name`) VALUES
('swe422', 'Tapushe Rabeya'),
('swe423', 'Tapushe'),
('swe424', 'Rabeya'),
('swe425', 'Toma');

-- --------------------------------------------------------

--
-- Table structure for table `students_marks`
--

CREATE TABLE `students_marks` (
  `std_id` varchar(11) NOT NULL,
  `lab_id` varchar(6) NOT NULL,
  `std_marks` int(11) NOT NULL,
  `semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_marks`
--

INSERT INTO `students_marks` (`std_id`, `lab_id`, `std_marks`, `semester`) VALUES
('162-35-1686', 'swe424', 12, 'summer'),
('162-35-1688', 'swe423', 17, 'fall'),
('162-35-1688', 'swe423', 19, 'spring'),
('162-35-1688', 'swe423', 18, 'summer'),
('162-35-1688', 'swe425', 18, 'summer');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `std_id` varchar(11) NOT NULL,
  `std_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`std_id`, `std_name`) VALUES
('162-35-1686', 'Mr X'),
('162-35-1687', 'Shuvo'),
('162-35-1688', 'Shoaib Rahman'),
('162-35-1689', 'Rahman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab_info`
--
ALTER TABLE `lab_info`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `students_marks`
--
ALTER TABLE `students_marks`
  ADD PRIMARY KEY (`std_id`,`lab_id`,`semester`),
  ADD KEY `lab_id` (`lab_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`std_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students_marks`
--
ALTER TABLE `students_marks`
  ADD CONSTRAINT `students_marks_ibfk_1` FOREIGN KEY (`lab_id`) REFERENCES `lab_info` (`lab_id`),
  ADD CONSTRAINT `students_marks_ibfk_2` FOREIGN KEY (`std_id`) REFERENCES `student_info` (`std_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
