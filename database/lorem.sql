-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2012 at 09:06 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lorem`
--
CREATE DATABASE `lorem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lorem`;

-- --------------------------------------------------------

--
-- Table structure for table `coordinates`
--

CREATE TABLE IF NOT EXISTS `coordinates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(1, 'Dutch'),
(2, 'English'),
(3, 'Papiamento'),
(4, 'Spanish'),
(5, 'Balochi'),
(6, 'Dari'),
(7, 'Pashto'),
(8, 'Turkmenian'),
(9, 'Uzbek'),
(10, 'Ambo'),
(11, 'Chokwe'),
(12, 'Kongo'),
(13, 'Luchazi'),
(14, 'Luimbe-nganguela'),
(15, 'Luvale'),
(16, 'Mbundu'),
(17, 'Nyaneka-nkhumbi'),
(18, 'Ovimbundu'),
(19, 'English'),
(20, 'Albaniana'),
(21, 'Greek'),
(22, 'Macedonian'),
(23, 'Catalan'),
(24, 'French'),
(25, 'Portuguese'),
(26, 'Spanish'),
(27, 'Dutch'),
(29, 'Papiamento'),
(30, 'Arabic');

-- --------------------------------------------------------

--
-- Table structure for table `languages_users`
--

CREATE TABLE IF NOT EXISTS `languages_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE IF NOT EXISTS `nationalities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=236 ;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`id`, `name`) VALUES
(1, 'Aruba'),
(2, 'Afghanistan'),
(3, 'Angola'),
(4, 'Anguilla'),
(5, 'Albania'),
(6, 'Andorra'),
(7, 'Netherlands Antilles'),
(8, 'United Arab Emirates'),
(9, 'Argentina'),
(10, 'Armenia'),
(11, 'American Samoa'),
(12, 'Antarctica'),
(13, 'French Southern territories'),
(14, 'Antigua and Barbuda'),
(15, 'Australia'),
(16, 'Austria'),
(17, 'Azerbaijan'),
(18, 'Burundi'),
(19, 'Belgium'),
(20, 'Benin'),
(21, 'Burkina Faso'),
(22, 'Bangladesh'),
(23, 'Bulgaria'),
(24, 'Bahrain'),
(25, 'Bahamas'),
(26, 'Bosnia and Herzegovina'),
(27, 'Belarus'),
(28, 'Belize'),
(29, 'Bermuda'),
(30, 'Bolivia'),
(31, 'Brazil'),
(32, 'Barbados'),
(33, 'Brunei'),
(34, 'Bhutan'),
(35, 'Bouvet Island'),
(36, 'Botswana'),
(37, 'Central African Republic'),
(38, 'Canada'),
(39, 'Cocos (Keeling) Islands'),
(40, 'Switzerland'),
(41, 'Chile'),
(42, 'China'),
(43, 'Côte d’Ivoire'),
(44, 'Cameroon'),
(45, 'Congo, The Democratic Republic of the'),
(46, 'Congo'),
(47, 'Cook Islands'),
(48, 'Colombia'),
(49, 'Comoros'),
(50, 'Cape Verde'),
(51, 'Costa Rica'),
(52, 'Cuba'),
(53, 'Christmas Island'),
(54, 'Cayman Islands'),
(55, 'Cyprus'),
(56, 'Czech Republic'),
(57, 'Germany'),
(58, 'Djibouti'),
(59, 'Dominica'),
(60, 'Denmark'),
(61, 'Dominican Republic'),
(62, 'Algeria'),
(63, 'Ecuador'),
(64, 'Egypt'),
(65, 'Eritrea'),
(66, 'Western Sahara'),
(67, 'Spain'),
(68, 'Estonia'),
(69, 'Ethiopia'),
(70, 'Finland'),
(71, 'Fiji Islands'),
(72, 'Falkland Islands'),
(73, 'France'),
(74, 'Faroe Islands'),
(75, 'Micronesia, Federated States of Gabon'),
(76, 'United Kingdom'),
(77, 'Georgia'),
(78, 'Ghana'),
(79, 'Gibraltar'),
(80, 'Guinea'),
(81, 'Guadeloupe'),
(82, 'Gambia'),
(83, 'Guinea-Bissau'),
(84, 'Equatorial Guinea'),
(85, 'Greece'),
(87, 'Grenada'),
(88, 'Greenland'),
(89, 'Guatemala'),
(90, 'French Guiana'),
(91, 'Guam'),
(92, 'Guyana'),
(93, 'Hong Kong'),
(94, 'Heard Island and McDonald Islands'),
(95, 'Honduras'),
(96, 'Croatia'),
(97, 'Haiti'),
(98, 'Hungary'),
(99, 'Indonesia'),
(100, 'India'),
(101, 'British Indian Ocean Territory'),
(102, 'Ireland'),
(103, 'Iran'),
(104, 'Iraq'),
(105, 'Iceland'),
(106, 'Israel'),
(107, 'Italy'),
(108, 'Jamaica'),
(109, 'Jordan'),
(110, 'Japan'),
(111, 'Kazakstan'),
(112, 'Kenya'),
(113, 'Kyrgyzstan'),
(114, 'Cambodia'),
(115, 'Kiribati'),
(116, 'Saint Kitts and Nevis'),
(117, 'South Korea'),
(118, 'Kuwait'),
(119, 'Laos'),
(120, 'Lebanon'),
(121, 'Liberia'),
(122, 'Libyan Arab Jamahiriya'),
(123, 'Saint Lucia'),
(124, 'Liechtenstein'),
(125, 'Sri Lanka'),
(126, 'Lesotho'),
(127, 'Lithuania'),
(128, 'Luxembourg'),
(129, 'Latvia'),
(130, 'Morocco'),
(131, 'Monaco'),
(132, 'Moldova'),
(133, 'Madagascar'),
(134, 'Maldives'),
(135, 'Mexico'),
(136, 'Marshall Islands'),
(137, 'Macedonia'),
(138, 'Mali'),
(139, 'Malta'),
(140, 'Myanmar'),
(141, 'Mongolia'),
(142, 'Northern Mariana Islands'),
(143, 'Mozambique'),
(144, 'Mauritania'),
(145, 'Montserrat'),
(146, 'Martinique'),
(147, 'Mauritius'),
(148, 'Malawi'),
(149, 'Malaysia'),
(150, 'Mayotte'),
(151, 'Namibia'),
(152, 'New Caledonia'),
(153, 'Niger'),
(154, 'Norfolk Island'),
(155, 'Nigeria'),
(156, 'Nicaragua'),
(157, 'Niue'),
(158, 'Netherlands'),
(159, 'Norway'),
(160, 'Nepal'),
(161, 'Nauru'),
(162, 'New Zealand'),
(163, 'Oman'),
(164, 'Pakistan'),
(165, 'Panama'),
(166, 'Pitcairn\nPeru'),
(167, 'Philippines'),
(168, 'Palau'),
(169, 'Papua New Guinea'),
(170, 'Poland'),
(171, 'Puerto Rico'),
(172, 'North Korea'),
(173, 'Portugal'),
(174, 'Paraguay'),
(175, 'Palestine'),
(176, 'French Polynesia'),
(177, 'Qatar\nRéunion'),
(178, 'Romania'),
(179, 'Russian Federation'),
(180, 'Rwanda'),
(181, 'Saudi Arabia'),
(182, 'Sudan'),
(183, 'Senegal'),
(184, 'Singapore'),
(185, 'South Georgia and the South Sandwich Islands'),
(186, 'Saint Helena'),
(187, 'Svalbard and Jan Mayen'),
(188, 'Solomon Islands'),
(189, 'Sierra Leone\nEl Salvador'),
(190, 'Somalia'),
(191, 'Saint Pierre and Miquelon'),
(192, 'Sao Tome and Principe'),
(193, 'Suriname'),
(194, 'Slovakia'),
(195, 'Slovenia'),
(196, 'Sweden'),
(197, 'Swaziland'),
(198, 'Seychelles'),
(199, 'Syria'),
(200, 'Turks and Caicos Islands'),
(201, 'Chad'),
(202, 'Togo'),
(203, 'Thailand'),
(204, 'Tajikistan'),
(205, 'Tokelau'),
(206, 'Turkmenistan'),
(207, 'East Timor'),
(208, 'Tonga'),
(209, 'Trinidad and Tobago'),
(210, 'Tunisia'),
(211, 'Turkey'),
(212, 'Tuvalu'),
(213, 'Taiwan'),
(214, 'Tanzania'),
(215, 'Uganda'),
(216, 'Ukraine'),
(217, 'United States Minor Outlying Islands'),
(218, 'Uruguay'),
(219, 'United States'),
(220, 'Uzbekistan'),
(221, 'Vatican City State'),
(222, 'Saint Vincent and the Grenadines'),
(223, 'Venezuela'),
(224, 'Virgin Islands, British\nVirgin Islands, U.S.'),
(225, 'Vietnam'),
(226, 'Vanuatu'),
(227, 'Wallis and Futuna'),
(228, 'Samoa'),
(229, 'Yemen'),
(230, 'Yugoslavia'),
(231, 'South Africa'),
(232, 'Zambia'),
(233, 'Zimbabwe'),
(234, 'Macao'),
(235, 'San Marino');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE IF NOT EXISTS `universities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`) VALUES
(1, 'Delft University of Technology'),
(2, 'Eindhoven \n\nUniversity of Technology'),
(3, 'Erasmus University of Rotterdam'),
(4, 'Haagse Hogeschool'),
(5, 'Hogeschool Eindhoven'),
(6, 'Hogeschool van Amsterdam'),
(7, 'Hogeschool van Utrecht'),
(8, 'IJselland Polytechnic'),
(9, 'Leiden University'),
(10, 'Nijenrode University'),
(11, 'Noordelijke \n\n'),
(12, 'Hogeschool Leeuwarden'),
(13, 'Open University of the Netherlands'),
(14, 'Tilburg \n\nuniversity'),
(15, 'University of Amsterdam'),
(16, 'University of Groningen'),
(17, 'University of \n\nLimburg'),
(18, 'University of Nijmegen'),
(19, 'University of Twente'),
(20, '\nUtrecht University'),
(21, 'Vrije University'),
(22, 'Wageningen Agricultural University');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `university_id` int(11) DEFAULT NULL,
  `nationality_id` int(11) DEFAULT NULL,
  `picture_url` varchar(255) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `registered` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fid`, `first_name`, `last_name`, `email`, `university_id`, `nationality_id`, `picture_url`, `gender`, `age`, `date_of_birth`, `address`, `postal_code`, `created`, `modified`, `registered`) VALUES
(1, '100000526115021', 'Martin', 'Minchev', 'martin.m.minchev@gmail.com', NULL, NULL, 'http://graph.facebook.com/100000526115021/picture?type=normal', 'male', 24, '2012-06-01', '', '', '2012-06-01 17:59:27', '2012-06-01 20:13:16', 1),
(2, '774864390', 'Krancho', 'Shrilankov', 'lollard@abv.bg', NULL, NULL, 'http://graph.facebook.com/774864390/picture?type=normal', 'male', NULL, NULL, NULL, NULL, '2012-06-01 18:48:04', '2012-06-01 18:48:04', 0),
(3, '100001757543387', 'Katia', 'Stefanova', 'the_black_horror@yahoo.com', NULL, NULL, 'http://graph.facebook.com/100001757543387/picture?type=normal', 'female', NULL, NULL, NULL, NULL, '2012-06-01 18:56:51', '2012-06-01 18:56:51', 0),
(4, '22501625', 'Christine', 'Gerpheide', 'gerpheid@grinnell.edu', NULL, NULL, 'http://graph.facebook.com/22501625/picture?type=normal', 'female', NULL, NULL, NULL, NULL, '2012-06-01 19:03:36', '2012-06-01 19:03:36', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
