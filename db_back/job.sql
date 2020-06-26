-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 02:52 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_job_post`
--

CREATE TABLE IF NOT EXISTS `com_job_post` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_by` varchar(300) NOT NULL,
  `post_time` date NOT NULL,
  `accepted` varchar(300) NOT NULL,
  `continue` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `job_cat` varchar(100) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `com_name` varchar(300) NOT NULL,
  `vacancies` varchar(100) NOT NULL,
  `job_des` text NOT NULL,
  `job_nature` varchar(100) NOT NULL,
  `edu_req` varchar(300) NOT NULL,
  `exp_req` varchar(300) NOT NULL,
  `addition_job_req` text NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `other_benifit` text NOT NULL,
  `deadline` date NOT NULL,
  `com_address` varchar(300) NOT NULL,
  `cv_system` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `com_job_post`
--

INSERT INTO `com_job_post` (`id`, `post_by`, `post_time`, `accepted`, `continue`, `post`, `reg_date`, `last_update`, `remarks`, `user_id`, `job_cat`, `job_title`, `com_name`, `vacancies`, `job_des`, `job_nature`, `edu_req`, `exp_req`, `addition_job_req`, `job_location`, `salary`, `other_benifit`, `deadline`, `com_address`, `cv_system`) VALUES
(1, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-10-28 23:05:02', '', 21, 'Computer Science and Engineering', 'Java Programmer', 'test', '4', 'Programming in JAVA Language Mandatory.<br>->Japanese Language Training certificate.', 'Full Time', ' Bachelor Degree in IT or CSE.', '0', ' ->At least 2 year(s).<br>->The applicants should have experience in the following area(s):\nProgrammer/Software Engineer.\n', ' Barisal ', '15000', ' As per company Policy', '2017-12-31', 'Dhaka', 'cv_system'),
(2, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-10-28 00:31:51', '', 23, 'Bank/Non-Bank Fin. Institution', 'Android developer', 'murtuza_tech', '5', 'We are looking for talented iOS Application Developer who will be responsible for analyzing, designing and developing iOS Apps/Games from scratch.<br>->The ideal candidate should be a fast learner and has experience launching iOS apps across all Apple devices.', 'Part Time', 'CSE', '2', '->Practical experience on Software Development Life Cycle.<br>->Macbook Pro/ Mac Mini.', 'Chittagong', '15000', 'none', '2017-12-30', 'Rangpur', 'cv_system'),
(3, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-10-28 00:31:51', '', 23, 'IT/Telecommunication', 'Web Development', 'murtuza_tech', '3', '->Wordpress website development<br>->Must be skilled in writing clean, efficient code', 'Full Time', 'CSe', '0', 'Candidate must have at least 3 years of experience in the relevant field.', 'Dhaka', '12000', 'As per company policy', '2017-12-27', 'Dhaka', 'cv_system'),
(4, '', '0000-00-00', '', '', '1', '0000-00-00 00:00:00', '2017-10-26 21:57:48', '', 23, 'Computer Science and Engineering', 'Web Developer (PHP/ Mysql)', 'murtuza_tech', '6', '->Creating animation and programming in Object Oriented PHP 5.3.x script.<br>->HTML, PHP, AJAX, & JavaScript scripting for the web site, web application & web enabled business process development.', 'Full Time', 'b.sc. in cse', '2', '->Knowledge on ZEND Framework will be added extra credit.<br>->Knowledge on ZEND Framework will be added extra credit.', 'Khulna', 'user_name_cancel', 'none', '2017-12-27', 'com_address', 'cv_system'),
(5, '', '0000-00-00', '', '', '1', '0000-00-00 00:00:00', '2017-10-26 22:02:02', '', 23, 'Bank/Non-Bank Fin. Institution', '\nFinance Manager (Oman)', 'murtuza_tech', '4', '->Oman International Exchange is seeking Finance Manager on urgent basis who will be Responsible for all financial and fiscal management aspects of the company operations.', 'Full Time', 'BBA', '0', 'Age At most 45 year(s)', 'Rajshahi', '400000', 'yy', '2017-12-28', 'com_address', 'cv_system'),
(6, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-10-28 23:03:32', '', 25, 'IT/Telecommunication', 'Software Engineer ', 'apple_tech', '5', '->Creating animation and programming in Object Oriented PHP 5.3.x script.<br>->HTML, PHP, AJAX, & JavaScript scripting for the web site, web application & web enabled business process development.', 'Full Time', 'cse', '1', 'none', 'Dhaka ', '12000', 'As per company policy ', '2017-12-28', 'com_address', 'cv_system'),
(7, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-10-28 23:06:45', '', 25, 'Bank/Non-Bank Fin. Institution', 'Head of Risk Management', 'apple_tech', '6', '->Managing core risks and other material risk of the Bank.', 'Full Time', 'BBA', '0', 'Solid knowledge in risk management framework under Basel.', 'Rangpur', '120000', 'tes2 ', '2017-12-30', 'com_address', 'cv_system'),
(9, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-10-31 19:14:26', '', 25, 'Bank/Non-Bank Fin. Institution', 'Head of Risk Management', 'apple_tech', '5', 'none', 'Full Time', 'none ', 'none ', 'none ', 'Dhaka ', '12000', 'none ', '2017-12-31', 'com_address', 'cv_system'),
(10, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-12-26 00:24:26', '', 25, 'Commercial/Supply Chain', 'Front Desk Officer (Corporate Office)', 'apple_tech', '2', 'Host the reception desk in welcoming manner.\r\nManage all telephone calls, fax, mails and other correspondence.\r\nReceive & dispatch all documents and give due entry into the register.\r\nIssue visitors ID cards as per policy.', 'Full Time', 'Tertiary Degree  ', '2  ', 'Only females are allowed to apply.\r\nTyping skills,  ', 'Dhaka  ', '120000', 'As per company policy.   ', '2017-12-31', 'com_address', 'cv_system'),
(11, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-12-26 00:24:26', '', 25, 'Computer Science and Engineering', 'Programmer', 'apple_tech', '1', 'The incumbent of the position is responsible for designing and customization of graphical user interface of different platforms to achieve the optimum front end usage.', 'Full Time', 'Tertiary Degree  ', '2  ', 'Only females are allowed to apply.\r\nTyping skills,  ', 'Dhaka  ', '15000', 'As per company policy.   ', '2017-12-31', 'com_address', 'cv_system'),
(12, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-12-26 00:27:14', '', 25, 'Computer Science and Engineering', ' Programmer', 'apple_tech', '2', 'The incumbent of the position is responsible for designing and customization of graphical user interface of different platforms to achieve the optimum front end usage.', 'Full Time', 'Computer Science/ Software Engineering ', '2 ', '->Minimum 2 yearsâ€™ experience in Java EE , ASP.NET, C#, VB.net\n<br>->Knowledge and experience of MS SQL server 2000, 2005, 2008<br>\n->Understanding of MVC.', 'Dhaka ', '15000', 'As per company policy. ', '2017-12-26', 'com_address', 'cv_system'),
(13, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-12-26 00:35:52', '', 25, 'Computer Science and Engineering', 'Junior Website Developer', 'apple_tech', '2', '->Able to Analyze, design and develop Websites: PHP5 (Object Oriented / MVC)<br>\r\n->Have good working knowledge in PHP, Javascript, jQuery, AJAX, and MySQL framework.<br>\r\n->Have extensive knowledge in XHTML ,HTML5, CSS3 and bootstrap.\r\n', 'Full Time', 'BS/ MS in Computer Science, Computer Engineering ', 'none ', '->At least 3 year(s)<br>\r\n->The applicants should have experience in the following area(s):\r\nMobile apps developer, Web Developer/Web Designer ', 'Dhaka ', '18000', 'As per company policy. ', '2017-12-31', 'com_address', 'cv_system'),
(14, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-12-26 00:43:55', '', 25, 'Computer Science and Engineering', 'Senior Software Engineer', 'apple_tech', '2', '->To explore new avenues for software and hardware business in Bangladesh<br>\r\n->he jobholder will ensure that systems and procedures are in place for this\r\n\r\n', 'Part Time', 'Bachelors in Computer Science ', 'none ', 'none ', 'Dhaka ', '12000', 'As per company policy. ', '2017-01-08', 'com_address', 'cv_system'),
(15, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2015-12-26 00:46:37', '', 25, 'Computer Science and Engineering', 'Mobile App Developer (Android)', 'apple_tech', '2', '->Have to develop android apps & games.<br>\r\n->Have to train some office staff as a part of skill development<br>\r\n->Experience in Mobile Apps development to lead the design, development and maintenance of Android apps.', 'Full Time', 'B.Sc in Computer Science or equivalent ', '0 ', 'none ', 'Dhaka ', '', 'As per company policy. ', '2017-01-09', 'com_address', 'cv_system'),
(16, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2015-12-26 00:51:11', '', 23, 'Computer Science and Engineering', 'PHP Developer', 'murtuza_tech', '2', '->Looking for software developer with strong knowledge in Laravel PHP framework<br>\r\n->Expertise in professional PHP/ MySQL web programming.<br>\r\n->Solid experience in Object Oriented Programming and MVC', 'Full Time', 'CSE ', '1 ', 'none ', 'Dhaka ', '20000', 'As per company policy. ', '2016-01-09', 'com_address', 'cv_system'),
(17, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2015-12-26 00:54:39', '', 23, 'Bank/Non-Bank Fin. Institution', ' Senior Officer, Trade Finance', 'murtuza_tech', '2', 'N/A', 'Full Time', 'Masterâ€™s Degree or Equivalent (Preferably M.B.A.) ', '0 ', 'N/A ', 'Dhaka ', '12000', 'As per company policy. ', '2017-01-09', 'com_address', 'cv_system'),
(18, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2015-12-26 00:59:02', '', 23, 'Engineer/Architect', 'Civil Engineer', 'murtuza_tech', '2', '->Engineering & Design<br>\r\n->Budget Cost Preparation & control<br>\r\n->Cost Analysis', 'Full Time', 'Graduation in Civil Engineering from a Reputed University ', '0 ', 'none ', 'Dhaka ', '12000', 'As per company policy. ', '2017-01-09', 'com_address', 'cv_system'),
(19, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2015-12-26 01:09:52', '', 28, 'Engineer/Architect', 'Quality Control Officer', 'ak_tech', '2', '->Sample test and report on raw materials, packing materials & finished products according to standard specification.<br>\r\n->Prepare & standardize reagents of powder hair dye.', 'Full Time', 'MSC ', '0 ', 'none ', 'Dhaka ', '12000', 'As per company policy. ', '2017-01-07', 'com_address', 'cv_system'),
(20, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2015-12-26 01:12:13', '', 28, 'Computer Science and Engineering', ' Infrastructure Analyst, Linux System', 'ak_tech', '2', 'Overview: Server section provides end to end Operating Environment implementation, support, consultancy and managed service for Server platforms through industry standard ITIL V3 guided service operation. Role of System Administrator includes-Administration, monitor and manage smooth operation with optimum performance and high availability of server environment (Physical and Virtual). Satisfy business delivery for positive customer experience, meeting KPI & SLA targets, compliance, quality assurance and effective customer support. Reports to Server Systems Team Lead.', 'Full Time', 'CSE ', '0 ', 'none ', 'Dhaka ', '12000', 'As per company policy. ', '2017-01-05', 'com_address', 'cv_system'),
(21, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2015-12-26 15:43:05', '', 27, 'Accounting/Finance', ' Executive - VAT & Tax', '3m_tech', '2', '->Ensure proper compliance with VAT & Tax laws and keep updated with the changes brought in finance act to ensure its proper implementation in the business procedure, wherever applicable.', 'Full Time', 'BBA/ Bachelors in Finance ', '1 ', 'none ', 'Dhaka ', '15000', 'none ', '2017-12-31', 'com_address', 'cv_system'),
(22, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2015-12-26 15:49:10', '', 29, 'Accounting/Finance', 'Officer, Admin & Accounts', 'ABC_Tech', '4', '->The incumbent of the position is responsible for financial administration.<br>\r\n->Major responsibilities will be:<br>\r\n->Assist with preparation of the budget', 'Full Time', 'Minimum Bachelorâ€™s degree in commerce ', 'none ', 'none ', 'Rangpur ', '12000', 'As per company policy. ', '2017-12-31', 'com_address', 'cv_system'),
(23, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2015-12-26 15:58:19', '', 27, 'Computer Science and Engineering', 'Software Programmer', '3m_tech', '5', 'Familiar with Web Application Development with ASP.NET, C#, Entity framework, Web API, HTML5, CSS3, JQuery, Bootstrap 3, TFS, Visual Studio 2013, SQL Server 2012 etc.', 'Full Time', 'B. Sc in CSE ', '2 ', 'The applicants should have experience in the following area(s):\r\nSoftware Implementation ', 'Dhaka ', '15000', 'As per company policy. ', '2017-12-30', 'com_address', 'cv_system'),
(24, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2015-12-26 16:04:41', '', 25, 'Computer Science and Engineering', 'iOS Developer', 'apple_tech', '4', '->iOS platform expert (including Objective-C, Xcode, etc..) Knowledge of swift; experience using Swift in a commercial application is preferred.', 'Full Time', 'B.sc. in cse ', '0 ', '->Fluent communication and writing skills in English.<br>\r\n-> Interview process will start as soon as a CV is received. ', 'Dhaka ', '12000', 'As per company policy. ', '2017-12-31', 'com_address', 'cv_system'),
(25, '', '0000-00-00', '', '', '1', '0000-00-00 00:00:00', '2017-04-21 19:27:06', '', 21, 'Computer Science and Engineering', 'ABC', 'test', '5', 'dcdxdv', 'Part Time', 'sdvs', '1', 'dv', 'svd', 'sdv', 'sv', '2017-04-29', 'com_address', 'cv_system'),
(26, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-05-05 15:22:46', '', 21, 'Computer Science and Engineering', 'Jr. software Engineer', 'test', '5', 'Just basic knowledge in android and java', 'Full Time', 'No educational restriction ', '6 months', 'no additional requirements', 'Dhaka, Mohammadpur', '15000', 'As official rules', '2017-05-31', 'com_address', 'cv_system'),
(27, '', '0000-00-00', '', '', '0', '0000-00-00 00:00:00', '2017-05-05 15:33:17', '', 21, 'Computer Science and Engineering', 'sr. software engineer', 'test', '02', 'no description', 'Full Time', 'BSC in computer engineering  ', '2 years', '', 'Dhaka, Mohammadpur', '25000', '', '2017-05-20', 'com_address', 'cv_system'),
(28, 'admin', '0000-00-00', 'yes', '1', '1', '0000-00-00 00:00:00', '2017-05-06 14:39:14', '', 35, 'Computer Science and Engineering', 'Jr. software Engineer', 'Dafodil', '05', 'No validation ', 'Full Time', 'BSC ', 'qq ', 'qq ', 'Dhaka, Mohammadpur ', '1000', 's ', '2017-05-31', 'com_address', 'cv_system'),
(29, '', '0000-00-00', '', '', '2', '0000-00-00 00:00:00', '2017-05-07 08:01:36', '', 35, 'Computer Science and Engineering', 'sxsx', 'Dafodil', '2', 'scs', 'Full Time', 'scd', 'scd', 'scs', 'scsc', '25000', 'scc', '2017-05-17', 'com_address', 'cv_system'),
(30, '', '0000-00-00', '', '', '0', '0000-00-00 00:00:00', '2017-05-07 12:52:07', '', 35, 'Computer Science and Engineering', 'Jr. software Engineer', 'Dafodil', '05', 'Need at least 6 month experience. \r\nExpert in Java programming language. ', 'Full Time', 'BSC in IT', 'scs', 'scs', 'Dhaka, Mohammadpur', '1000', 'As official rules', '2017-05-31', 'com_address', 'cv_system');

-- --------------------------------------------------------

--
-- Table structure for table `com_nofitication`
--

CREATE TABLE IF NOT EXISTS `com_nofitication` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(100) NOT NULL,
  `send_by` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `Date` date NOT NULL,
  `view` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `com_nofitication`
--

INSERT INTO `com_nofitication` (`id`, `com_name`, `send_by`, `message`, `Date`, `view`) VALUES
(1, 'murtuza_tech', 'Accepted Post', 'murtuza_tech,<br> your job post request accepted and posted', '2015-10-26', '1'),
(2, 'murtuza_tech', 'Answer', 'murtuza_tech,<br>we recovery soon', '2015-10-27', '1'),
(3, '1', 'Answer', '1,<br>question_ans', '2015-10-27', '0'),
(4, 'test', 'Answer', 'test,<br>her test ok ok', '2015-10-27', '2'),
(5, 'murtuza_tech', 'Answer', 'murtuza_tech,<br>testing', '2015-10-27', '1'),
(6, 'murtuza_tech', 'Accepted Post', 'murtuza_tech,<br> your job post request accepted and posted', '2015-10-28', '1'),
(7, 'apple_tech', 'Accepted Post', 'apple_tech,<br> your job post request accepted and posted', '2015-10-28', '1'),
(8, 'test', 'Accepted Post', 'test,<br> your job post request accepted and posted', '2015-10-28', '1'),
(9, 'apple_tech', 'Accepted Post', 'apple_tech,<br> your job post request accepted and posted', '2015-10-28', '1'),
(10, 'apple_tech', 'Accepted Post', 'apple_tech,<br> your job post request accepted and posted', '2015-10-28', '1'),
(11, 'apple_tech', 'Accepted Post', 'apple_tech,<br> your job post request accepted and posted', '2015-10-31', '1'),
(12, 'apple_tech', 'Accepted Post', 'apple_tech,<br> your job post request accepted and posted', '2015-10-31', '2'),
(15, 'apple_tech', 'Cancel Post', 'apple_tech,<br> your job post request cancel.please check again job post formate', '2015-11-05', '2'),
(16, 'apple_tech', 'Accepted Post', 'apple_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(17, 'apple_tech', 'Accepted Post', 'apple_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(18, 'apple_tech', 'Accepted Post', 'apple_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(19, 'apple_tech', 'Accepted Post', 'apple_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(20, 'apple_tech', 'Accepted Post', 'apple_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(21, 'murtuza_tech', 'Accepted Post', 'murtuza_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(22, 'murtuza_tech', 'Accepted Post', 'murtuza_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(23, 'murtuza_tech', 'Accepted Post', 'murtuza_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(24, 'ak_tech', 'Accepted Post', 'ak_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(25, 'ak_tech', 'Accepted Post', 'ak_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(26, '3m_tech', 'Accepted Post', '3m_tech,<br> your job post request accepted and posted', '2015-12-26', '2'),
(27, 'ABC_Tech', 'Accepted Post', 'ABC_Tech,<br> your job post request accepted and posted', '2015-12-26', '0'),
(28, '3m_tech', 'Accepted Post', '3m_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(29, 'apple_tech', 'Accepted Post', 'apple_tech,<br> your job post request accepted and posted', '2015-12-26', '1'),
(30, 'test', 'Answer', 'test,<br>No answer for you', '2017-05-06', '0'),
(31, 'Dafodil', 'Accepted Post', 'Dafodil,<br> your job post request accepted and posted', '2017-05-06', '0');

-- --------------------------------------------------------

--
-- Table structure for table `com_report`
--

CREATE TABLE IF NOT EXISTS `com_report` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(300) NOT NULL,
  `com_name` varchar(300) NOT NULL,
  `report` text NOT NULL,
  `view` varchar(100) NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `com_report`
--

INSERT INTO `com_report` (`id`, `type`, `com_name`, `report`, `view`, `Date`) VALUES
(1, 'company', 'murtuza_tech', 'dear amin,\r\ni face a problem why???\r\n', '1', '2015-10-27 10:16:46'),
(2, 'company', '1', 'i can not access', '1', '2015-10-27 11:28:45'),
(3, 'company', 'test', 'hey admin why technical error', '1', '2015-10-27 11:29:39'),
(4, '', 'murtuza_tech', 'hi', '1', '2015-10-27 16:30:56'),
(5, '', 'test', 'c vdxfv dfv', '1', '2017-04-21 19:44:28'),
(6, '', 'test', 'cv cbv', '1', '2017-04-21 19:57:26'),
(7, '', 'test', 'Who is the system admin', '1', '2017-05-05 15:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `cv_send`
--

CREATE TABLE IF NOT EXISTS `cv_send` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job_user_id` bigint(20) NOT NULL,
  `job_title` varchar(300) NOT NULL,
  `com_name` varchar(300) NOT NULL,
  `com_job_post_id` bigint(20) NOT NULL,
  `uniqu_gen` varchar(100) NOT NULL,
  `view` varchar(100) NOT NULL,
  `continue` varchar(100) NOT NULL,
  `update` date NOT NULL,
  `remarks` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `cv_send`
--

INSERT INTO `cv_send` (`id`, `job_user_id`, `job_title`, `com_name`, `com_job_post_id`, `uniqu_gen`, `view`, `continue`, `update`, `remarks`) VALUES
(1, 3, 'Head of Risk Management', 'apple_tech', 7, 'Head of Risk Management_7', '1', '1', '2015-10-31', ''),
(2, 3, 'Java Programmer', 'test', 1, 'Java Programmer_1', '1', '1', '2015-10-31', ''),
(3, 3, 'Software Engineer ', 'apple_tech', 6, 'Software Engineer_6', '0', '2', '2015-10-30', ''),
(4, 19, 'Head of Risk Management', 'apple_tech', 7, 'Head of Risk Management_7', '1', '1', '2015-11-17', ''),
(5, 19, 'Java Programmer', 'test', 1, 'Java Programmer_1', '0', '1', '2015-10-31', ''),
(6, 3, 'Head of Risk Management', 'apple_tech', 9, 'Head of Risk Management_9', '0', '2', '2015-10-31', ''),
(7, 5, 'Head of Risk Management', 'apple_tech', 9, 'Head of Risk Management_9', '1', '1', '2015-10-01', ''),
(8, 5, 'Android developer', 'murtuza_tech', 2, 'Android developer_2', '0', '2', '2015-10-31', ''),
(9, 5, 'Web Development', 'murtuza_tech', 3, 'Web Development_3', '0', '2', '2015-11-01', ''),
(10, 1, 'iOS Developer', 'apple_tech', 24, 'iOS Developer_24', '0', '1', '2015-12-26', ''),
(11, 1, 'Software Programmer', '3m_tech', 23, 'Software Programmer_23', '0', '1', '2015-12-26', ''),
(12, 1, 'Senior Software Engineer', 'apple_tech', 14, 'Senior Software Engineer_14', '1', '1', '2015-12-26', ''),
(13, 1, ' Infrastructure Analyst, Linux System', 'ak_tech', 20, ' Infrastructure Analyst, Linux System_20', '0', '1', '2015-12-26', ''),
(14, 1, 'Mobile App Developer (Android)', 'apple_tech', 15, 'Mobile App Developer (Android)_15', '0', '1', '2015-12-26', ''),
(15, 1, 'Front Desk Officer (Corporate Office)', 'apple_tech', 10, 'Front Desk Officer (Corporate Office)_10', '1', '1', '2015-12-26', ''),
(16, 1, 'Officer, Admin & Accounts', 'ABC_Tech', 22, 'Officer, Admin & Accounts_22', '0', '1', '2015-12-26', ''),
(17, 2, 'Software Programmer', '3m_tech', 23, 'Software Programmer_23', '0', '1', '2015-12-26', ''),
(18, 2, ' Executive - VAT & Tax', '3m_tech', 21, ' Executive - VAT & Tax_21', '0', '1', '2015-12-26', ''),
(19, 2, 'iOS Developer', 'apple_tech', 24, 'iOS Developer_24', '0', '1', '2015-12-26', ''),
(20, 2, ' Programmer', 'apple_tech', 12, ' Programmer_12', '1', '1', '2015-12-26', ''),
(21, 3, ' Infrastructure Analyst, Linux System', 'ak_tech', 20, ' Infrastructure Analyst, Linux System_20', '0', '1', '2015-12-26', ''),
(22, 3, 'PHP Developer', 'murtuza_tech', 16, 'PHP Developer_16', '0', '1', '2015-12-26', ''),
(23, 3, 'Software Programmer', '3m_tech', 23, 'Software Programmer_23', '1', '1', '2015-12-26', ''),
(24, 4, 'iOS Developer', 'apple_tech', 24, 'iOS Developer_24', '0', '1', '2015-12-26', ''),
(25, 4, ' Executive - VAT & Tax', '3m_tech', 21, ' Executive - VAT & Tax_21', '0', '1', '2015-12-26', ''),
(26, 4, 'Java Programmer', 'test', 1, 'Java Programmer_1', '1', '1', '2015-12-26', ''),
(27, 4, 'Mobile App Developer (Android)', 'apple_tech', 15, 'Mobile App Developer (Android)_15', '0', '1', '2015-12-26', ''),
(28, 7, 'Software Programmer', '3m_tech', 23, 'Software Programmer_23', '0', '1', '2015-12-26', ''),
(29, 7, 'Officer, Admin & Accounts', 'ABC_Tech', 22, 'Officer, Admin & Accounts_22', '0', '1', '2015-12-26', ''),
(30, 7, 'iOS Developer', 'apple_tech', 24, 'iOS Developer_24', '0', '1', '2015-12-26', ''),
(31, 7, ' Infrastructure Analyst, Linux System', 'ak_tech', 20, ' Infrastructure Analyst, Linux System_20', '0', '1', '2015-12-26', ''),
(32, 30, 'Android developer', 'murtuza_tech', 2, 'Android developer_2', '0', '2', '2017-05-05', ''),
(33, 30, 'Software Programmer', '3m_tech', 23, 'Software Programmer_23', '0', '1', '2017-05-05', ''),
(34, 30, 'Jr. software Engineer', 'test', 26, 'Jr. software Engineer_26', '0', '1', '2017-05-06', ''),
(35, 30, 'Jr. software Engineer', 'Dafodil', 28, 'Jr. software Engineer_28', '1', '1', '2017-05-06', ''),
(36, 34, 'Jr. software Engineer', 'Dafodil', 28, 'Jr. software Engineer_28', '0', '1', '2017-05-06', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_edu_info`
--

CREATE TABLE IF NOT EXISTS `job_edu_info` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `s_major` varchar(200) NOT NULL,
  `s_institute` varchar(200) NOT NULL,
  `s_result` varchar(200) NOT NULL,
  `s_year` varchar(200) NOT NULL,
  `h_major` varchar(200) NOT NULL,
  `h_institute` varchar(200) NOT NULL,
  `h_result` varchar(200) NOT NULL,
  `h_year` varchar(200) NOT NULL,
  `d_major` varchar(200) NOT NULL,
  `d_institute` varchar(200) NOT NULL,
  `d_result` varchar(200) NOT NULL,
  `d_year` varchar(200) NOT NULL,
  `b_major` varchar(200) NOT NULL,
  `b_institute` varchar(200) NOT NULL,
  `b_result` varchar(200) NOT NULL,
  `b_year` varchar(200) NOT NULL,
  `m_major` varchar(200) NOT NULL,
  `m_institute` varchar(200) NOT NULL,
  `m_result` varchar(200) NOT NULL,
  `m_year` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `last_update` datetime NOT NULL,
  `remarks` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `MyTable_MyColumn_FK` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `job_edu_info`
--

INSERT INTO `job_edu_info` (`id`, `user_id`, `s_major`, `s_institute`, `s_result`, `s_year`, `h_major`, `h_institute`, `h_result`, `h_year`, `d_major`, `d_institute`, `d_result`, `d_year`, `b_major`, `b_institute`, `b_result`, `b_year`, `m_major`, `m_institute`, `m_result`, `m_year`, `status`, `last_update`, `remarks`) VALUES
(1, 3, 'Science ', 'ruhea high school', '5', '2008', 'Science', 'ruhea degree college', '5', '2010', '', '', '', '', 'CSE', 'BUBT', '3.50', '2015', '16', 'master', '444', '4444', 'Active', '2015-10-06 20:52:48', ''),
(2, 1, 'Science', 'Arts High School', '4.40', '2006', 'Science', 'Abc Govt college', '3.70', '2008', '', '', '', '', 'EEE', 'AIUB', '3.00', '2013', '', '', '', '', 'Active', '2015-10-06 23:29:48', ''),
(3, 15, 'Science', 'Abc high School', '', '2010', 'Science', 'Thakugaon govt college', '4.10', '2012', '', '', '', '', 'CSE', 'IUT', '4.00', '', '', '', '', '', 'Active', '2015-10-21 09:57:49', ''),
(4, 19, 'Science', 'test_school', '4.31', '2008', 'Science', 'test college', '4.70', '2010', '', '', '', '', 'EEE', 'DIU', '2.80', '2015', '', '', '', '', 'Active', '2015-10-21 12:20:17', ''),
(5, 2, 'Science', 'Arts High School', '4.50', '2008', '0', 'Arts college', '4.60', '2010', '', '', '', '', 'Computer Science and Engineering', 'NSu', '3.00', '2015', '', '', '', '', 'Active', '2015-11-16 15:05:35', ''),
(6, 4, 'Science', 'Commerce High School', '3.00', '2008', '0', 'ABC college', '3.70', '2010', '', '', '', '', 'Accounting/Finance', 'Bubt', '3.00', '2015', '', '', '', '', 'Active', '2015-11-16 15:07:34', ''),
(7, 26, 'Science', 'Dhaka city School', '4.40', '2008', 'Science', 'Dhaka city College', '4.40', '2010', '', '', '', '', 'Computer Science and Engineering', 'Bangladesh University of Business and Technology', '3.30', '2015', '', '', '', '', 'Active', '2015-12-21 01:22:27', ''),
(8, 7, 'Science', 'Nator High School', '4.80', '2008', 'Science', 'Nator govt college', '4.90', '2010', '', '', '', '', 'Computer Science and Engineering', 'Bangladesh University of Business and Technology', '3.40', '2015', '', '', '', '', 'Active', '2015-12-26 17:10:43', ''),
(9, 30, 'Science', 'dvd', 'dvdv', 'dvd', 'Science', 'ujk', 'ikiik,k', 'k,', '', '', '', '', '', '', '', '', '', '', '', '', 'Active', '2017-04-21 19:06:21', ''),
(10, 34, '0', 'sd', '3', '2010', '0', 'sd', 'second di', '2012', '', '', '', '', '0', 'diit', '3', '2012', '', '', '', '', 'Active', '2017-05-06 14:45:55', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_users`
--

CREATE TABLE IF NOT EXISTS `job_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `com_name` varchar(200) NOT NULL,
  `com_address` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `industry_type` varchar(200) NOT NULL,
  `com_url` varchar(200) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `reg_date` datetime NOT NULL,
  `dreg_date` datetime NOT NULL,
  `dreg_resion` varchar(200) NOT NULL,
  `last_update` date NOT NULL,
  `remarks` text NOT NULL,
  `key_g` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `job_users`
--

INSERT INTO `job_users` (`id`, `type`, `first_name`, `last_name`, `user_email`, `user_name`, `mobile`, `dob`, `gender`, `cat`, `user_password`, `com_name`, `com_address`, `country`, `city`, `industry_type`, `com_url`, `status`, `reg_date`, `dreg_date`, `dreg_resion`, `last_update`, `remarks`, `key_g`) VALUES
(1, 'user', 'Tonmoy', 'Sarker', 'tonmoy1@yahoo.com', 'tonmoy', '01723009411', '2015-12-20', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Active', '2015-09-02 17:53:40', '0000-00-00 00:00:00', '', '2015-09-02', '', ''),
(2, 'user', 'murtuza', 'ali', 'murtuza@yahoo.com', 'jalil', '01723009411', '2015-12-30', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Active', '2015-09-02 22:09:43', '0000-00-00 00:00:00', '', '2015-09-02', '', ''),
(3, 'user', 'Jalilur', 'Rahman', 'jalilcse03@gmail.com', 'jalil_cse', '01738696439', '2015-10-22', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Active', '2015-09-15 21:41:53', '0000-00-00 00:00:00', '', '2015-09-15', '', ''),
(4, 'user', 'Mithun', 'Kumar', 'mithun@yahoo.com', 'mithun', '01723009411', '2015-12-15', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Active', '2015-09-16 16:26:05', '0000-00-00 00:00:00', '', '2015-09-16', '', ''),
(5, 'user', 'b', 'b', 'b@yahoo.com', 'b', '01723009411', '2015-09-17', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Active', '2015-09-17 00:50:30', '0000-00-00 00:00:00', '', '2015-09-17', '', ''),
(6, 'user', 'Mahbubul', 'Islam', 'd@t.com', 'mahbub', '01723009411', '2015-09-17', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Active', '2015-09-17 01:07:46', '0000-00-00 00:00:00', '', '2015-09-17', '', ''),
(7, 'user', 'Rakib', 'Hossain', 'aa@yahoo.com', 'rakib', '01723009411', '2000-12-22', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Active', '2015-09-17 01:08:41', '0000-00-00 00:00:00', '', '2015-09-17', '', ''),
(8, 'user', 'AK', 'Mahi', 'e@yahoo.com', 'mahi', '01723009411', '2015-09-17', 'Male', 'Accounting/Finance', '123', '', '', '', '', '', '', 'Active', '2015-09-17 01:12:50', '0000-00-00 00:00:00', '', '2015-09-17', '', ''),
(9, 'user', 'Anik', 'Kumar', 'r@yahoo.com', 'anik', '01723009411', '2015-09-17', 'Male', 'Garments/Textile', '123', '', '', '', '', '', '', 'Active', '2015-09-17 01:15:00', '0000-00-00 00:00:00', '', '2015-09-17', '', ''),
(10, 'user', 'Sojon', 'Sojon', 'y@yahoo.com', 'sojon', '01723009411', '2015-09-17', 'Male', 'Accounting/Finance', '123', '', '', '', '', '', '', 'Active', '2015-09-17 01:17:53', '0000-00-00 00:00:00', '', '2015-09-17', '', ''),
(11, 'user', 'Khurshed', 'Hossain', 'who@gmail.com', 'khorshed', '01723009411', '2015-09-19', 'Male', 'Accounting/Finance', '123', '', '', '', '', '', '', 'Active', '2015-09-19 14:55:15', '0000-00-00 00:00:00', '', '2015-09-19', '', ''),
(12, 'user', 'Rohim', 'Uddin', 'ttest@yahoo.com', 'rohim', '01723009411', '2015-10-20', 'Male', 'Accounting/Finance', '123', '', '', '', '', '', '', 'Active', '2015-10-20 11:19:32', '0000-00-00 00:00:00', '', '2015-10-20', '', ''),
(14, 'admin', 'admin_1', 'admin_1', 'admin@yahoo.com', 'admin_1', '01723009411', '2012-12-12', 'Male', '', '1', '', '', '', '', '', '', 'Active', '2015-10-20 18:48:30', '0000-00-00 00:00:00', '', '2015-10-20', '', ''),
(15, 'user', 'JK', 'Khan', 'df@yahoo.com', 'jk', '01723009411', '2015-10-21', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Active', '2015-10-21 09:52:51', '0000-00-00 00:00:00', '', '2015-10-21', '', ''),
(16, 'admin', 'admin_test', 'admin_test', 'admin_test@yahoo.com', 'admin_test', '01723009411', '2015-10-07', 'Male', '', '1', '', '', '', '', '', '', 'Active', '2015-10-21 10:18:09', '0000-00-00 00:00:00', '', '2015-10-21', '', ''),
(17, 'admin', 'yy', 'yy', 'yy@yahoo.com', 'yy', '01723009411', '2015-10-14', 'Male', '', '1', '', '', '', '', '', '', 'Active', '2015-10-21 10:19:29', '0000-00-00 00:00:00', '', '2015-10-21', '', ''),
(18, 'admin', 'admin_2', 'admin_2', 'admin2@yahoo.com', 'admin_2', '01723009411', '2015-10-21', 'Male', '', '1', '', '', '', '', '', '', 'Inactive', '2015-10-21 10:20:51', '0000-00-00 00:00:00', '', '2015-10-21', '', ''),
(19, 'user', 'Nasir', 'Hossain', 'test@yahoo.com', 'nasir', '01723009411', '2015-10-21', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Active', '2015-10-21 12:17:06', '0000-00-00 00:00:00', '', '2015-10-21', '', ''),
(20, 'admin', 'adim_3', 'adim_3', 'adim_3@yahoo.com', 'adim_3', '01723009411', '2015-10-21', 'Male', '', '1', '', '', '', '', '', '', 'Active', '2015-10-21 12:26:05', '0000-00-00 00:00:00', '', '2015-10-21', '', ''),
(21, 'company', 'com', '', 'com_com@yahoo.com', 'com', '01723009411', '0000-00-00', '', '', '1', 'test', 'test', 'Bangladesh', 'test', 'Advertising Ageny', 'test', 'Active', '2015-10-22 12:35:49', '0000-00-00 00:00:00', '', '2015-11-07', '', ''),
(22, 'company', 't', '', '01@yahoo.com', 'tommm', 't', '0000-00-00', '', '', '1', '1', '1', 'India', '1', 'Bicycle', '1', 'Active', '2015-10-22 12:44:55', '0000-00-00 00:00:00', '', '2015-10-22', '', ''),
(23, 'company', 'murtuza_tech', '', 'com1@yahoo.com', 'com1', '01925460348', '0000-00-00', '', '', '1', 'murtuza_tech', 'Ruhea', 'Bangladesh', 'Thakurgaon', 'Developer', 'murtuza_tech.com', 'Active', '2015-10-23 16:18:52', '0000-00-00 00:00:00', '', '2015-11-11', '', ''),
(24, 'user', 'korim', 'Hassain', 'jest_test@yahoo.com', 'korim', '01723009411', '2015-10-28', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Active', '2015-10-28 01:10:00', '0000-00-00 00:00:00', '', '2015-10-28', '', ''),
(25, 'company', 'apple', '', 'apple@yahoo.com', 'apple', '01723009411', '0000-00-00', '', '', '123', 'apple_tech', 'Dhaka', 'Bangladesh', 'Dhaka', 'Developer', '', 'Active', '2015-10-28 22:32:15', '0000-00-00 00:00:00', '', '2015-10-28', '', ''),
(26, 'user', 'Roni', 'sarker', 'tonmoy@yahoo.com', 'tonmoy2', '01931043210', '2015-12-21', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Active', '2015-12-21 01:20:14', '0000-00-00 00:00:00', '', '2015-12-21', '', ''),
(27, 'company', '3m_tech', '', '3m@yahoo.com', '3m', '01931043210', '0000-00-00', '', '', '1', '3m_tech', 'Dhaka Bangladesh', 'Bangladesh', 'Dhaka', 'Developer', '', 'Active', '2015-12-26 01:01:33', '0000-00-00 00:00:00', '', '2015-12-26', '', ''),
(28, 'company', 'ak_tech', '', 'ak@yahoo.com', 'ak', '01931043210', '0000-00-00', '', '', '1', 'ak_tech', 'Dhaka Bangladesh', 'Bangladesh', 'Dhaka', 'Developer', '', 'Active', '2015-12-26 01:07:42', '0000-00-00 00:00:00', '', '2015-12-26', '', ''),
(29, 'company', 'ABC_Tech', '', 'abc@yahoo.com', 'abc', '01723432193', '0000-00-00', '', '', '1', 'ABC_Tech', 'Dhaka Bangladesh', 'Bangladesh', 'Dhaka', 'Developer', '', 'Active', '2015-12-26 15:46:48', '0000-00-00 00:00:00', '', '2015-12-26', '', ''),
(30, 'user', 'MD Tarikul Islam', 'islam', 'tarikul711@gmail.com', 'tarikul711', '01733029989', '2017-04-19', 'Male', 'IT/Telecommunication', '123', '', '', '', '', '', '', 'Active', '2017-04-21 19:01:17', '0000-00-00 00:00:00', '', '2017-04-21', '', ''),
(31, 'admin', 'tarikul', 'islam', 'ta@gmail.com', 'tarikul', '01733029989', '2010-01-05', 'Male', '', '123', '', '', '', '', '', '', 'Active', '2017-05-06 07:54:19', '0000-00-00 00:00:00', '', '2017-05-06', '', ''),
(32, 'user', 'tarikul', 'cvf', 'vfv@gmail.com', 'tar', '01733029989', '2009-01-01', 'Male', 'Medical/Pharma', '1', '', '', '', '', '', '', 'Active', '2017-05-06 07:59:27', '0000-00-00 00:00:00', '', '2017-05-06', '', ''),
(33, 'user', 'dfd', 'sfd', 'df@gmail.com', '1', '01733029989', '2017-05-08', 'Male', 'Production/Operation', '1', '', '', '', '', '', '', 'Active', '2017-05-06 12:02:20', '0000-00-00 00:00:00', '', '2017-05-06', '', ''),
(34, 'user', 'tarikul', 'islam', 'tarikul7@gmail.com', 'tarikul01', '01733029989', '2000-02-02', 'Male', 'Computer Science and Engineering', '123', '', '', '', '', '', '', 'Inactive', '2017-05-06 14:29:45', '0000-00-00 00:00:00', '', '2017-05-06', 'cxcx', ''),
(35, 'company', 'rana', '', 'diit@gmail.com', 'islam', '01557066674', '0000-00-00', '', '', '123', 'Dafodil', 'dhanmondi', 'Bangladesh', 'Dhaka', 'Developer', '', 'Active', '2017-05-06 14:33:18', '0000-00-00 00:00:00', '', '2017-05-06', '', ''),
(36, 'user', 'Md Tarikul ', 'islam', 'tarikul02@gmail.com', 'tarikul05', '01557066674', '1994-11-07', 'Male', 'Computer Science and Engineering', '123456', '', '', '', '', '', '', 'Active', '2017-05-07 11:21:25', '0000-00-00 00:00:00', '', '2017-05-07', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_users_image`
--

CREATE TABLE IF NOT EXISTS `job_users_image` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `job_users_image`
--

INSERT INTO `job_users_image` (`id`, `user_id`, `photo`) VALUES
(21, 3, '3.png'),
(22, 3, '3.png'),
(23, 26, '26.png'),
(24, 1, '1.png'),
(25, 2, '2.png'),
(26, 4, '4.png'),
(27, 7, '7.png'),
(28, 30, '30.png'),
(29, 34, '34.png');

-- --------------------------------------------------------

--
-- Table structure for table `job_users_others`
--

CREATE TABLE IF NOT EXISTS `job_users_others` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `special_quali` text NOT NULL,
  `specialization` text NOT NULL,
  `language` varchar(200) NOT NULL,
  `com_name` varchar(200) NOT NULL,
  `com_duration` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `objectives` text NOT NULL,
  `carreer_summary` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `last_update` datetime NOT NULL,
  `remarks` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `job_users_others`
--

INSERT INTO `job_users_others` (`id`, `user_id`, `special_quali`, `specialization`, `language`, `com_name`, `com_duration`, `experience`, `objectives`, `carreer_summary`, `status`, `last_update`, `remarks`) VALUES
(1, 3, 'I developed below projects:Android Base Application: Hotel management system using Java, Xml and SQLite.Java Desktop Base Application: Parlor Management System using JAVA ,MySQL.PHP Base Application: Job Searching Website using PHP,MySQL.\r\n', 'Android,c/c++,Java,Php,Html,Css', 'bangla', 'tamubytes', '1', '3', 'Establish myself as a Software Engineer.', 'I have completed my graduation from BUBT in CSE. Now I am working as an Android App Developer in Tamubytes.I have Participated in 8 national level programming contest (NCPC,ICPC) and solved around 450 problems in various online judges such as UVA, lightoj, spoj, codeforces. I have developed android apps and developed also Java desktop applications. I`ve worked in variety of platforms of programming, web development, database and development environment.', 'Active', '2015-12-05 13:32:38', 0),
(2, 15, 'test_special', 'c,c++,java', 'bangla', '', '', '1', 'test', 'test', 'Active', '2015-10-21 10:06:56', 0),
(3, 19, 'test', 'test', 'bangla', '', '', '', 'test', 'test', 'Active', '2015-10-21 12:21:14', 0),
(4, 26, 'I developed below projects:\r\nAndroid Base Application: Hotel management system using Java, Xml and SQLite.\r\nJava Desktop Base Application: Parlor Management System using JAVA ,MySQL.\r\nPHP Base Application: Job Searching Website using PHP,MySQL. \r\n', 'C,C++,java', 'bangla', '', '', '0', 'Establish myself as a Software Engineer in a challenging position with in progressive organization, where I can utilize my experience, technical skills and creativity, able to work on own initiative and as part of a team. ', 'I have completed my graduation from BUBT in CSE. Now I am working as an Android App Developer in Tamubytes.I have Participated in 8 national level programming contest (NCPC,ICPC) and solved around 450 problems in various online judges such as UVA, lightoj, spoj, codeforces. I have developed android apps and developed also Java desktop applications. I`ve worked in variety of platforms of programming, web development, database and development environment. ', 'Active', '2015-12-21 01:24:28', 0),
(5, 1, 'Android Base Application: Hotel management system using Java, Xml and SQLite.', 'C,C++', 'bangla', '', '', '1', 'Establish myself as a Software Engineer in a challenging position with in progressive organization, where I can utilize my experience, technical skills and creativity, able to work on own initiative and as part of a team. ', 'I have completed my graduation from BUBT in CSE. Now I am working as an Android App Developer in Tamubytes.I have Participated in 8 national level programming contest (NCPC,ICPC) and solved around 450 problems in various online judges such as UVA, lightoj, spoj, codeforces. I have developed android apps and developed also Java desktop applications. I`ve worked in variety of platforms of programming, web development, database and development environment. ', 'Active', '2015-12-26 16:43:42', 0),
(6, 2, 'Java Desktop Base Application: Parlor Management System using JAVA ,MySQL.', 'Java,php', 'bangla', '', '', '0', 'Establish myself as a Software Engineer in a challenging position with in progressive organization, where I can utilize my experience, technical skills and creativity, able to work on own initiative and as part of a team. ', 'I have completed my graduation from NSU in CSE. Now I am working as an Android App Developer in Tamubytes.I have Participated in 8 national level programming contest (NCPC,ICPC) and solved around 450 problems in various online judges such as UVA, lightoj, spoj, codeforces. I have developed android apps and developed also Java desktop applications. I`ve worked in variety of platforms of programming, web development, database and development environment. ', 'Active', '2015-12-26 16:53:42', 0),
(7, 4, 'PHP Base Application: Job Searching Website using PHP,MySQL. ', 'PHP ,HTML', 'bangla', '', '', '0', 'Establish myself as a Software Engineer in a challenging position with in progressive organization, where I can utilize my experience, technical skills and creativity, able to work on own initiative and as part of a team. ', 'I have developed android apps and developed also Java desktop applications. I`ve worked in variety of platforms of programming, web development, database and development environment. ', 'Active', '2015-12-26 17:05:41', 0),
(8, 7, 'PHP Base Application: Job Searching Website using PHP,MySQL. ', 'C,C++,Java,Php', 'bangla', '', '1', '1', 'Establish myself as a Software Engineer in a challenging position with in progressive organization, where I can utilize my experience, technical skills and creativity, able to work on own initiative and as part of a team. ', 'I have completed my graduation from BUBT in CSE. Now I am working as an Android App Developer in Tamubytes.I have Participated in 8 national level programming contest (NCPC,ICPC) and solved around 450 problems in various online judges such as UVA, lightoj, spoj, codeforces. I have developed android apps and developed also Java desktop applications. I`ve worked in variety of platforms of programming, web development, database and development environment. ', 'Active', '2015-12-26 17:12:45', 0),
(9, 30, 'dv', 'dvd', 'bangla', 'dvd', 'xvd', 'dvdv', 'sdvv', 'dsvsdv', 'Active', '2017-04-21 19:06:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_user_profile`
--

CREATE TABLE IF NOT EXISTS `job_user_profile` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `marital` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `present_address` varchar(200) NOT NULL,
  `permanent_address` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `last_update` date NOT NULL,
  `remarks` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `job_user_profile`
--

INSERT INTO `job_user_profile` (`id`, `user_id`, `father_name`, `mother_name`, `marital`, `nationality`, `present_address`, `permanent_address`, `status`, `last_update`, `remarks`) VALUES
(1, 3, 'Ruhul amin', 'Jahanara', 'Single', 'Bangladesh', 'House No: 26, Road No: 2/e Priyanka Housing, Mirpur-1, Dhaka-1216', 'House No: 26, Road No: 2/e Priyanka Housing, Mirpur-1, Dhaka-1216', 'Active', '2015-12-26', ''),
(2, 11, '', '', 'Single', 'Bangladesh', 'mirpur 1', 'thakurgo', 'Active', '2015-09-19', ''),
(3, 15, 'father_test', 'mother_test', 'Single', 'Bangladesh', 'test_address', 'test_permanet', 'Active', '2015-10-21', ''),
(4, 19, 'test_father', 'test_', 'Single', 'Bangladesh', 'test_address', 'test_address', 'Active', '2015-10-21', ''),
(5, 5, 'test', 'test', 'Single', 'Bangladesh', 'tes', 'test', 'Active', '2015-10-31', ''),
(6, 6, 'g_father', '', 'Single', 'Bangladesh', '', '', 'Active', '2015-11-07', ''),
(7, 26, 'Rohim Sarker', 'Moni Saker', 'Single', 'Bangladesh', 'Dhaka Bangladesh', 'Dhaka Bangladesh', 'Active', '2015-12-21', ''),
(8, 1, 'Rohim Sarker', 'Rajni Sarker', 'Single', 'Bangladesh', 'Mirpur 13 Dhaka Bangladesh', 'Mirpur 13 Dhaka Bangladesh', 'Active', '2015-12-26', ''),
(9, 2, 'Ruhul amin', 'Jahanara begum', 'Single', 'Bangladesh', 'Mirpur 1 , Sun Socity, Road12, Dhaka ,Bangladesh', 'Ruhea Thurgaon ', 'Active', '2015-12-26', ''),
(10, 4, 'Korim Kumar', 'Kakon Kumar', 'Single', 'Bangladesh', 'House No: 26, Road No: 2/e green Housing, Mirpur-12, Dhaka-1216', 'House No: 26, Road No: 2/e Priyanka Housing, Mirpur-1, Dhaka-1216', 'Active', '2015-12-26', ''),
(11, 7, 'Shajahan Ali', 'Rotna Ali', 'Single', 'Bangladesh', 'House No: 90, Road No: 2/b red Housing, Mirpur-11, Dhaka-1216', 'House No: 90, Road No: 2/b red Housing, Mirpur-11, Dhaka-1216', 'Active', '2015-12-26', ''),
(12, 30, 'cd', 'dvd', 'Single', 'Bangladesh', 'dvdv', 'dvdv', 'Active', '2017-04-21', ''),
(13, 34, 'dd', 'fd', 'Single', 'Bangladesh', 'gfg', 'gbrfg', 'Active', '2017-05-06', '');

-- --------------------------------------------------------

--
-- Table structure for table `signature`
--

CREATE TABLE IF NOT EXISTS `signature` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `sign` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `signature`
--

INSERT INTO `signature` (`id`, `user_id`, `sign`) VALUES
(1, 3, '3.png'),
(2, 5, '5.png'),
(3, 30, '30.png'),
(4, 34, '34.png');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE IF NOT EXISTS `super_admin` (
  `user_name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`user_name`, `pass`, `first_name`, `last_name`, `status`) VALUES
('admin', 'admin', 'admin', 'admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user_notification`
--

CREATE TABLE IF NOT EXISTS `user_notification` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `com_job_id` bigint(20) NOT NULL,
  `com_id` varchar(300) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `location` varchar(300) NOT NULL,
  `view` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `update` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_notification`
--

INSERT INTO `user_notification` (`id`, `user_id`, `com_job_id`, `com_id`, `Date`, `Time`, `location`, `view`, `type`, `update`) VALUES
(1, 5, 9, '25', '12/12/12', '12', 'Dhaka', '1', 'interview', '2015-11-02'),
(2, 19, 1, '21', '12/12/12', '10:00 AM', 'Dhaka', '1', 'interview', '2015-11-08'),
(3, 19, 7, '25', '12/11/2015', '12:00 PM', '', '1', 'interview', '2015-11-08'),
(4, 19, 7, '25', '23', '23', 'bangladesh', '1', 'interview', '2015-11-09'),
(5, 3, 1, '21', '12/12/12', '23:00 PM', 'test', '2', 'interview', '2015-11-09'),
(6, 3, 7, '25', '12/20/2015', '12:00 PM', 'Dhaka', '1', 'interview', '2015-12-20'),
(7, 2, 12, '25', '12/31/2015', '10:10 AM', 'Dhaka', '0', 'interview', '2015-12-26'),
(8, 1, 10, '25', '12/31/2015', '10:10 AM', 'Dhaka', '0', 'interview', '2015-12-26'),
(9, 1, 14, '25', '12/31/2015', '10:10 AM', 'Dhaka', '0', 'interview', '2015-12-26'),
(10, 19, 7, '25', '12/31/2015', '10:10 AM', 'Dhaka', '0', 'interview', '2015-12-26'),
(11, 5, 9, '25', '12/21/2015', '10:10 AM', 'Dhaka', '1', 'interview', '2015-12-26'),
(12, 4, 1, '21', '05/20/2017', '545', 'kmk', '0', 'interview', '2017-05-05'),
(13, 30, 28, '35', '30', '10.30', 'dhanmondi', '1', 'interview', '2017-05-06');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_edu_info`
--
ALTER TABLE `job_edu_info`
  ADD CONSTRAINT `MyTable_MyColumn_FK` FOREIGN KEY (`user_id`) REFERENCES `job_users` (`id`);

--
-- Constraints for table `job_user_profile`
--
ALTER TABLE `job_user_profile`
  ADD CONSTRAINT `fk_pro_user_id` FOREIGN KEY (`user_id`) REFERENCES `job_users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
