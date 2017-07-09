-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 05:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dt_created` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `Email`, `Region`, `phone`, `dt_created`, `address`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'Goa', '8080868862', '2017-03-10 07:35:16', 'Candolim', 'admin'),
(2, 'admin_1', 'admin_1@gmail.com', 'Goa', '8080868862', '2017-03-10 07:38:20', 'Candolim', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `Role` int(11) NOT NULL,
  `Company_Id` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Company_Username` varchar(255) NOT NULL,
  `HR_Username` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `yoe` varchar(50) NOT NULL,
  `Company_name` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `Role`, `Company_Id`, `Password`, `Email`, `Branch`, `Company_Username`, `HR_Username`, `Contact`, `yoe`, `Company_name`, `Designation`) VALUES
(1, 3, 'Wi185601', '567656767878', 'dasjayatid@gmail.com', 'Computers', 'Jayati', 'Shruti', '9878034126', '2010', 'Wipro', 'Developer'),
(2, 3, 'Ai6798', '5676567678', 'varsha@gmail.com', 'Products', 'falgunv', 'Vimla Sentilakumaran', '9807654321', '2017', 'Atos', 'Assistant Manager');

-- --------------------------------------------------------

--
-- Table structure for table `complist`
--

CREATE TABLE `complist` (
  `id` int(11) NOT NULL,
  `Company_name` varchar(100) NOT NULL,
  `Company_desc` varchar(1024) NOT NULL,
  `yoe` varchar(50) NOT NULL,
  `services` varchar(100) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complist`
--

INSERT INTO `complist` (`id`, `Company_name`, `Company_desc`, `yoe`, `services`, `owner`, `website`) VALUES
(1, 'Wipro Limited (Western India Palm Refined Oils Limited or more recently, Western India Products Limi', '<b>Western India Products Limited</b>\r\nWipro Limited is a global company provider of comprehensive IT solutions and services, including Systems Integration, Consulting, Information Systems outsourcing, IT-enabled services, R&D services.[53]\r\n\r\nWipro entered into the technology business in 1981 and has over 140,000 employees and clients across 54 countries.[54] IT revenues were at $7.1 billion for the year ended 31 March 2015, with a repeat business ratio of over 95%\r\n<br/>\r\n<b>Wipro Consumer Care & Lighting</b>\r\nWipro Consumer Care and Lighting (WCCLG), a business unit of Wipro Limited operates in the FMCG segment dealing in consumable commodities. Established in 1945, its first product was vegetable oil, later sold under the brand name "Sunflower Vanaspati". It sells personal care products, such as Wipro Baby Soft and Wipro Safewash, toilet soaps Santoor and Chandrika as well as Yardley.[57] It sells lighting products, including Smartlite CFL,[58] LED, and emergency lights.[59]\r\n', '29 December 1945', 'Digital Strategy, Business Consulting and IT Services', 'Azim Premji', 'www.wipro.com'),
(2, 'Barclays', '<p><strong> Barclays</strong> is a British <a title="Multinational corporation" href="https://en.wikipedia.org/wiki/Multinational_corporation">multinational</a> banking and <a title="Financial services" href="https://en.wikipedia.org/wiki/Financial_services">financial services</a> company headquartered in London. It is a <a title="Universal bank" href="https://en.wikipedia.org/wiki/Universal_bank">universal bank</a> with operations in retail, wholesale and investment banking, as well as wealth management, mortgage lending and credit cards. It has operations in over 50 countries and territories and has around 48&nbsp;million customers</p>', '17 November 1690', 'Banking, Financial services', 'John McFarlane', 'www.home.barclays');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(1024) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `Upload` varchar(500) NOT NULL,
  `Crieteria` varchar(200) NOT NULL,
  `Specialization` varchar(200) NOT NULL,
  `Company_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `Title`, `Description`, `Branch`, `Upload`, `Crieteria`, `Specialization`, `Company_name`) VALUES
(1, 'Senior Officer - Sales Support', 'Any Grad with HSC-60% and SSC-60%', '\r\n\r\nSupporting the Sales & Marketing Team for residential and commercial projects.\r\nIn charge of handing over formalities and transactions of properties to the buyers.\r\nTo handhold the customer through the pre-sales - post sales process till possession.\r\n', '', '', ' Excellent spoken and written communication skills. Confidence and ability to interact with high profile clients. Good interpersonal skills. Proficiency in MS Office (Word, Excel, Power Point).', 'WIPRO INFOTECH'),
(2, 'Senior Officer - Sales Support', 'Any Grad with HSC-60% and SSC-60%', '<p>Supporting the Sales &amp; Marketing Team for residential and commercial projects.<br /> In charge of handing over formalities and transactions of properties to the buyers.<br /> To handhold the customer through the pre-sales - post sales process till ', '', '', '    	Excellent spoken and written communication skills.     Confidence and ability to interact with high profile clients.     Good interpersonal skills.     Proficiency in MS Office (Word, Excel, Powe', 'WIPRO INFOTECH'),
(3, 'Marketting-Executive', '<p>We request all B.E(Comps) graduate students <strong>holding M.B.A (marketting) or appeared</strong> are elligible to apply for the following</p>', 'Computers', '', '', 'Marketting', 'Alliance Atos'),
(4, 'Marketting-Executive', '<p>We request all B.E(Comps) graduate students <strong>holding M.B.A (marketting) or appeared</strong> are elligible to apply for the following</p>', 'Computers', '', '', 'Marketting', 'Alliance Atos'),
(5, 'Marketting-Executive', '<p>We request all B.E(Comps) graduate students <strong>holding M.B.A (marketting) or appeared</strong> are elligible to apply for the following</p>', 'Computers', '', 'MBA', 'Marketting', 'Alliance Atos'),
(6, 'Java Developer', '<p>Java developer who has a good knowledge of java basics and frameworks like Spring and Java2Enerprise Edition . He also has some experience in Android and developed some Android applications.</p>', 'Mumbai-EXTC', '', 'CGPA>6.5', 'Oracle Certified', 'Credit Suisse');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `age` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `sc_yop` varchar(100) NOT NULL,
  `sc_univ` varchar(100) NOT NULL,
  `sc_agg` varchar(100) NOT NULL,
  `hsc` varchar(100) NOT NULL,
  `hsc_yop` varchar(100) NOT NULL,
  `hsc_univ` varchar(100) NOT NULL,
  `hsc_agg` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `coll_yop` varchar(100) NOT NULL,
  `coll_univ` varchar(100) NOT NULL,
  `coll_agg` varchar(100) NOT NULL,
  `extra_curr` varchar(100) NOT NULL,
  `othr_qual` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `first_name`, `role`, `middle_name`, `last_name`, `gender`, `email`, `contact_no`, `city`, `address`, `dob`, `age`, `school`, `sc_yop`, `sc_univ`, `sc_agg`, `hsc`, `hsc_yop`, `hsc_univ`, `hsc_agg`, `college`, `coll_yop`, `coll_univ`, `coll_agg`, `extra_curr`, `othr_qual`, `username`, `password`, `uid`, `date_created`, `qual`) VALUES
(1, 'Debjyoti', 3, 'Debesh', 'Das', 'male', 'dasdebjyoti65@gmail.com', '8798674321', 'Mumbai', 'D-902 Datani Park', '29/02/1996', '22', 'TCET', '2008', 'DELHI BOARD', '97', 'TCSC', '2010', 'MAHARASHTRA', '86', 'SPIT', '2000', 'MUMBAI', '8.5', 'Athlete', 'OCPJP', 'debod', '5676567678', '123', '2017-03-31 19:36:30', 'B.E[Comp]'),
(2, 'Veena', 3, 'Ramesh', 'Gawde', 'female', 'veena_456@yahoo.com', '9876543210', 'Kolkatta', 'House No:21,down feet,67Ranaghat street', '6/12/85', '30', 'Govt.Girls', '2001', 'Kolkatta Board', '87', 'Presidency', '2003', 'Kolkatta Board', '75', 'Jadhavpur College of Engg', '2007', 'Jadhavpur University', '9', 'Bharatnatyam Dancer', 'Android Development,IOS Development', 'gawveen', '5676567678', '897', '2017-04-03 18:54:14', 'M.E.[E.X.T.C]');

-- --------------------------------------------------------

--
-- Table structure for table `upload_company`
--

CREATE TABLE `upload_company` (
  `id` int(11) NOT NULL,
  `img` varchar(1024) NOT NULL,
  `Company_Username` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_company`
--

INSERT INTO `upload_company` (`id`, `img`, `Company_Username`) VALUES
(1, '4814-Rajeev-Khandelwal1.jpg', ''),
(2, '13418833_582466518594448_2871823614096036538_n.jpg', 'Jayati'),
(3, '13418833_582466518594448_2871823614096036538_n.jpg', 'Jayati');

-- --------------------------------------------------------

--
-- Table structure for table `upload_student`
--

CREATE TABLE `upload_student` (
  `id` int(11) NOT NULL,
  `img` varchar(700) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_student`
--

INSERT INTO `upload_student` (`id`, `img`, `username`) VALUES
(1, 'hqdefault.jpg', 'debod');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complist`
--
ALTER TABLE `complist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `upload_company`
--
ALTER TABLE `upload_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_student`
--
ALTER TABLE `upload_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `complist`
--
ALTER TABLE `complist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `upload_company`
--
ALTER TABLE `upload_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `upload_student`
--
ALTER TABLE `upload_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
