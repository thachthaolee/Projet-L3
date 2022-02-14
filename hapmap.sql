-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2022 at 01:55 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hapmap`
--

-- --------------------------------------------------------

--
-- Table structure for table `annee`
--

CREATE TABLE `annee` (
  `Annee` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annee`
--

INSERT INTO `annee` (`Annee`) VALUES
(2015),
(2016),
(2017),
(2018),
(2019);

-- --------------------------------------------------------

--
-- Table structure for table `contient`
--

CREATE TABLE `contient` (
  `Id_Continent` int(1) NOT NULL,
  `Nom_Continent` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contient`
--

INSERT INTO `contient` (`Id_Continent`, `Nom_Continent`) VALUES
(1, 'Africa'),
(2, 'Asia'),
(3, 'Australia'),
(4, 'Europe'),
(5, 'North America'),
(6, 'South America');

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `Id_Pays` int(3) NOT NULL,
  `Nom_Pays` varchar(24) DEFAULT NULL,
  `Id_Continent` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`Id_Pays`, `Nom_Pays`, `Id_Continent`) VALUES
(1, 'Afghanistan', 2),
(2, 'Albania', 4),
(3, 'Algeria', 1),
(4, 'Angola', 1),
(5, 'Argentina', 6),
(6, 'Armenia', 2),
(7, 'Australia', 3),
(8, 'Austria', 4),
(9, 'Azerbaijan', 2),
(10, 'Bahrain', 2),
(11, 'Bangladesh', 2),
(12, 'Belarus', 4),
(13, 'Belgium', 4),
(14, 'Belize', 5),
(15, 'Benin', 1),
(16, 'Bhutan', 2),
(17, 'Bolivia', 6),
(18, 'Bosnia and Herzegovina', 4),
(19, 'Botswana', 1),
(20, 'Brazil', 6),
(21, 'Bulgaria', 4),
(22, 'Burkina Faso', 1),
(23, 'Burundi', 1),
(24, 'Cambodia', 2),
(25, 'Cameroon', 1),
(26, 'Canada', 5),
(27, 'Central African Republic', 1),
(28, 'Chad', 1),
(29, 'Chile', 6),
(30, 'China', 2),
(31, 'Colombia', 6),
(32, 'Comoros', 1),
(33, 'Congo (Brazzaville)', 1),
(34, 'Congo (Kinshasa)', 1),
(35, 'Costa Rica', 5),
(36, 'Croatia', 4),
(37, 'Cyprus', 4),
(38, 'Czech Republic', 4),
(39, 'Denmark', 4),
(40, 'Djibouti', 1),
(41, 'Dominican Republic', 4),
(42, 'Ecuador', 6),
(43, 'Egypt', 1),
(44, 'El Salvador', 5),
(45, 'Estonia', 4),
(46, 'Ethiopia', 1),
(47, 'Finland', 4),
(48, 'France', 4),
(49, 'Gabon', 1),
(50, 'Gambia', 1),
(51, 'Georgia', 2),
(52, 'Germany', 4),
(53, 'Ghana', 1),
(54, 'Greece', 4),
(55, 'Guatemala', 5),
(56, 'Guinea', 1),
(57, 'Haiti', 5),
(58, 'Honduras', 5),
(59, 'Hong Kong', 2),
(60, 'Hungary', 4),
(61, 'Iceland', 4),
(62, 'India', 2),
(63, 'Indonesia', 2),
(64, 'Iran', 2),
(65, 'Iraq', 2),
(66, 'Ireland', 4),
(67, 'Israel', 2),
(68, 'Italy', 4),
(69, 'Ivory Coast', 1),
(70, 'Jamaica', 5),
(71, 'Japan', 2),
(72, 'Jordan', 2),
(73, 'Kazakhstan', 2),
(74, 'Kenya', 1),
(75, 'Kosovo', 4),
(76, 'Kuwait', 2),
(77, 'Kyrgyzstan', 2),
(78, 'Laos', 2),
(79, 'Latvia', 4),
(80, 'Lebanon', 2),
(81, 'Lesotho', 1),
(82, 'Liberia', 1),
(83, 'Libya', 1),
(84, 'Lithuania', 4),
(85, 'Luxembourg', 4),
(86, 'Macedonia', 4),
(87, 'Madagascar', 1),
(88, 'Malawi', 1),
(89, 'Malaysia', 2),
(90, 'Mali', 1),
(91, 'Malta', 4),
(92, 'Mauritania', 1),
(93, 'Mauritius', 1),
(94, 'Mexico', 5),
(95, 'Moldova', 4),
(96, 'Mongolia', 2),
(97, 'Montenegro', 4),
(98, 'Morocco', 1),
(99, 'Mozambique', 1),
(100, 'Myanmar', 2),
(101, 'Namibia', 1),
(102, 'Nepal', 2),
(103, 'Netherlands', 4),
(104, 'New Zealand', 3),
(105, 'Nicaragua', 5),
(106, 'Niger', 1),
(107, 'Nigeria', 1),
(108, 'North Cyprus', 4),
(109, 'North Macedonia', 4),
(110, 'Northern Cyprus', 4),
(111, 'Norway', 4),
(112, 'Oman', 1),
(113, 'Pakistan', 2),
(114, 'Palestinian Territories', 2),
(115, 'Panama', 5),
(116, 'Paraguay', 6),
(117, 'Peru', 6),
(118, 'Philippines', 2),
(119, 'Poland', 4),
(120, 'Portugal', 4),
(121, 'Puerto Rico', 5),
(122, 'Qatar', 2),
(123, 'Romania', 4),
(124, 'Russia', 2),
(125, 'Rwanda', 1),
(126, 'Saudi Arabia', 2),
(127, 'Senegal', 1),
(128, 'Serbia', 4),
(129, 'Sierra Leone', 1),
(130, 'Singapore', 2),
(131, 'Slovakia', 4),
(132, 'Slovenia', 4),
(133, 'Somalia', 1),
(134, 'Somaliland Region', 1),
(135, 'South Africa', 1),
(136, 'South Korea', 2),
(137, 'South Sudan', 1),
(138, 'Spain', 4),
(139, 'Sri Lanka', 2),
(140, 'Sudan', 1),
(141, 'Suriname', 6),
(142, 'Swaziland', 1),
(143, 'Sweden', 4),
(144, 'Switzerland', 4),
(145, 'Syria', 2),
(146, 'Taiwan', 2),
(147, 'Taiwan Province of China', 2),
(148, 'Tajikistan', 2),
(149, 'Tanzania', 1),
(150, 'Thailand', 2),
(151, 'Togo', 1),
(152, 'Trinidad & Tobago', 6),
(153, 'Trinidad and Tobago', 6),
(154, 'Tunisia', 1),
(155, 'Turkey', 2),
(156, 'Turkmenistan', 2),
(157, 'Uganda', 1),
(158, 'Ukraine', 4),
(159, 'United Arab Emirates', 2),
(160, 'United Kingdom', 4),
(161, 'United States', 5),
(162, 'Uruguay', 6),
(163, 'Uzbekistan', 2),
(164, 'Venezuela', 6),
(165, 'Vietnam', 2),
(166, 'Yemen', 2),
(167, 'Zambia', 1),
(168, 'Zimbabwe', 1),
(169, 'Hong Kong S.A.R.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `Nom_Region` varchar(31) DEFAULT NULL,
  `Id_Region` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`Nom_Region`, `Id_Region`) VALUES
('Australia and New Zealand', 1),
('Central and Eastern Europe', 2),
('Eastern Asia', 3),
('Latin America and Caribbean', 4),
('Middle East and Northern Africa', 5),
('North America', 6),
('Southeastern Asia', 7),
('Southern Asia', 8),
('Sub-Saharan Africa', 9),
('Western Europe', 10);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `Id_Score` int(1) NOT NULL,
  `Nom_Score` varchar(29) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`Id_Score`, `Nom_Score`) VALUES
(1, 'Hapiness Rank'),
(2, 'Hapiness Score'),
(3, 'Economy (GDP per Capita)'),
(4, 'Family'),
(5, 'Health (Life Expectancy)'),
(6, 'Freedom'),
(7, 'Trust (Government Corruption)'),
(8, 'Generosity'),
(9, 'Social support');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annee`
--
ALTER TABLE `annee`
  ADD PRIMARY KEY (`Annee`);

--
-- Indexes for table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`Id_Continent`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`Id_Pays`),
  ADD KEY `Id_Continent` (`Id_Continent`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`Id_Region`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`Id_Score`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pays`
--
ALTER TABLE `pays`
  ADD CONSTRAINT `pays_ibfk_1` FOREIGN KEY (`Id_Continent`) REFERENCES `contient` (`Id_Continent`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
