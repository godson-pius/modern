-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 01:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modern`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` int(11) NOT NULL,
  `academic_year` varchar(20) NOT NULL,
  `active` int(11) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `academic_year`, `active`, `date_added`) VALUES
(1, '2013', 0, '2020-09-29'),
(2, '2016', 1, '2020-09-29'),
(3, '2020', 0, '2020-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `date_entered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `date_entered`) VALUES
(1, 'Mr. John', 'admin@mnps.com', 'dce0b27ba675df41e9cc07af80ec59c475810824', '2020-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `section_id_fk` int(11) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class`, `section_id_fk`, `date_added`) VALUES
(1, 'Basic Three', 1, '2020-09-29'),
(2, 'Basic 4', 2, '2020-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image_url` text NOT NULL,
  `post_by` int(11) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `image_url`, `post_by`, `date_posted`) VALUES
(1, 'School&apos;s Resume', 'jdvnrngvrvd', 'desktopOffice.png', 1, '2020-09-19'),
(2, 'Exam Commences', 'All exams commences', 'how-to-grow-up-and-be-more-mature-cover.jpg', 1, '2020-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `student_id_fk` int(11) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `tel_one` varchar(20) NOT NULL,
  `tel_two` varchar(20) DEFAULT NULL,
  `address` text NOT NULL,
  `maidens_name` varchar(255) NOT NULL,
  `date_entered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_score` text NOT NULL,
  `begin_date` date NOT NULL,
  `close_date` date NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answers`
--

CREATE TABLE `quiz_answers` (
  `answers_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `quiz_score` text NOT NULL,
  `date_submitted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `student_id_fk` int(11) NOT NULL,
  `subject_id_fk` int(11) NOT NULL,
  `teacher_id_fk` int(11) NOT NULL,
  `first_test_score` varchar(50) NOT NULL,
  `second_test_score` varchar(50) NOT NULL,
  `exam_score` varchar(50) NOT NULL,
  `grand_total` varchar(50) NOT NULL,
  `grade_subject` varchar(10) NOT NULL,
  `academic_year_fk` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `date_entered` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id_fk`, `subject_id_fk`, `teacher_id_fk`, `first_test_score`, `second_test_score`, `exam_score`, `grand_total`, `grade_subject`, `academic_year_fk`, `term`, `date_entered`, `updated_at`) VALUES
(1, 1, 1, 2, '20', '22', '66', '78', 'f', 1, 1, '2021-01-12', '2021-01-14'),
(2, 1, 3, 2, '20', '55', '77', '78', 'c', 2, 2, '2021-01-12', '2021-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section_name` varchar(11) NOT NULL,
  `date_entered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `date_entered`) VALUES
(1, 'Nursery', '2020-12-02'),
(2, 'Primary', '2020-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `academic_year_fk` int(11) NOT NULL,
  `section_id_fk` int(11) NOT NULL,
  `image` text NOT NULL,
  `tel` varchar(50) NOT NULL,
  `class_fk` int(11) NOT NULL,
  `position` varchar(50) DEFAULT NULL,
  `access` int(11) NOT NULL DEFAULT 0,
  `approve` int(11) NOT NULL DEFAULT 0,
  `updated_at` date NOT NULL,
  `date_registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `username`, `password`, `academic_year_fk`, `section_id_fk`, `image`, `tel`, `class_fk`, `position`, `access`, `approve`, `updated_at`, `date_registered`) VALUES
(1, 'James Adams', 'jamesadams', 'dce0b27ba675df41e9cc07af80ec59c475810824', 1, 2, '116797671_146372117082892_7521928587964523555_n.jpg', '3333333', 1, 'Head Boy', 1, 0, '0000-00-00', '2020-12-14'),
(2, 'Christian John', 'chrisjohn', 'dce0b27ba675df41e9cc07af80ec59c475810824', 1, 1, 'dddd', '3333333', 2, NULL, 0, 0, '0000-00-00', '2020-12-14'),
(3, 'Amarachi Abel', 'amara', 'dce0b27ba675df41e9cc07af80ec59c475810824', 1, 2, 'dddd', '3333333', 2, NULL, 1, 0, '0000-00-00', '2020-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `student_cards`
--

CREATE TABLE `student_cards` (
  `card_id` int(11) NOT NULL,
  `card_pin` varchar(100) NOT NULL,
  `student_id_fk` int(11) DEFAULT NULL,
  `acad_year_id` int(11) NOT NULL,
  `valid` int(11) NOT NULL DEFAULT 0,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_cards`
--

INSERT INTO `student_cards` (`card_id`, `card_pin`, `student_id_fk`, `acad_year_id`, `valid`, `created_at`) VALUES
(1, 'mnps/2016/2749126', 3, 2, 1, '2021-01-14'),
(2, 'mnps/2016/1190480', 1, 2, 1, '2021-01-14'),
(3, 'mnps/2016/4949716', NULL, 2, 0, '2021-01-14'),
(4, 'mnps/2016/101592', NULL, 2, 0, '2021-01-14'),
(5, 'mnps/2016/2484149', NULL, 2, 0, '2021-01-14'),
(6, 'mnps/2016/2824690', NULL, 2, 0, '2021-01-14'),
(7, 'mnps/2016/2777785', NULL, 2, 0, '2021-01-14'),
(8, 'mnps/2016/3292264', NULL, 2, 0, '2021-01-14'),
(9, 'mnps/2016/42394', NULL, 2, 0, '2021-01-14'),
(10, 'mnps/2016/3759972', NULL, 2, 0, '2021-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_teacher_fk` int(11) NOT NULL,
  `section_id_fk` int(11) NOT NULL,
  `date_entered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_teacher_fk`, `section_id_fk`, `date_entered`) VALUES
(1, 'Mathematics', 3, 1, '0000-00-00'),
(2, 'Further Maths', 3, 2, '0000-00-00'),
(3, 'English Language', 2, 1, '0000-00-00'),
(4, 'C.R.K', 2, 1, '0000-00-00'),
(5, 'Poem', 2, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `t_password` varchar(150) NOT NULL,
  `t_state` varchar(250) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `t_address` text NOT NULL,
  `t_image` text NOT NULL,
  `access` int(11) NOT NULL DEFAULT 0,
  `approve` int(11) NOT NULL DEFAULT 0,
  `date_entered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_name`, `email`, `gender`, `tel`, `dob`, `qualification`, `t_password`, `t_state`, `lga`, `t_address`, `t_image`, `access`, `approve`, `date_entered`) VALUES
(2, 'James Joe', 'jamesjoe@gmail.com', 'male', '09076787676', '2019-07-18', 'Bsc, Hnd', 'dce0b27ba675df41e9cc07af80ec59c475810824', 'Enugu', 'Enugu North', 'Enugu', 'IMG_0008.jpg', 1, 1, '2020-10-30'),
(3, 'Isaiah Jons', 'isaiah@yahoo.com', 'female', '08123456764', '2020-10-30', 'Bsc', 'dce0b27ba675df41e9cc07af80ec59c475810824', 'Abia', 'Bende', 'Enugu', 'how-to-grow-up-and-be-more-mature-cover.jpg', 0, 1, '2020-09-17'),
(5, 'Prince Godson', 'goddypius123@gmail.com', 'female', '8147871946', '2020-12-07', 'Bsc', 'dce0b27ba675df41e9cc07af80ec59c475810824', 'Anambra', 'Anambra West', 'No 4 moore house', 'download.jpg', 1, 1, '2020-12-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  ADD PRIMARY KEY (`answers_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_cards`
--
ALTER TABLE `student_cards`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  MODIFY `answers_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_cards`
--
ALTER TABLE `student_cards`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
