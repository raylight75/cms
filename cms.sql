-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2016 at 09:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bl_cat`
--

CREATE TABLE IF NOT EXISTS `bl_cat` (
  `id` int(11) NOT NULL,
  `category` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bl_cat`
--

INSERT INTO `bl_cat` (`id`, `category`) VALUES
(1, 'dress'),
(2, 'jeans'),
(3, 'boots'),
(4, 'jackets'),
(5, 'shirts'),
(6, 'outwear'),
(7, 'blazers'),
(8, 'sweaters');

-- --------------------------------------------------------

--
-- Table structure for table `bl_tag`
--

CREATE TABLE IF NOT EXISTS `bl_tag` (
  `id` int(11) NOT NULL,
  `tag` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bl_tag`
--

INSERT INTO `bl_tag` (`id`, `tag`) VALUES
(1, 'dress'),
(2, 'jeans'),
(3, 'boots'),
(4, 'jackets'),
(5, 'shirts'),
(6, 'outwear'),
(7, 'blazers'),
(8, 'sweaters');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
`brand_id` int(11) NOT NULL,
  `brand` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand`) VALUES
(1, 'Gucci'),
(2, 'Dior'),
(3, 'Moschino'),
(4, 'Pepe'),
(5, 'CK'),
(6, 'DKNY'),
(7, 'Fendi');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(11) NOT NULL,
  `cat` varchar(32) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `m_img` varchar(200) NOT NULL,
  `f_img` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat`, `parent_id`, `m_img`, `f_img`) VALUES
(1, 'Men', 0, 'f213f-breadcrumb_bg2.jpg', ''),
(2, 'Women', 0, 'b1d40-breadcrumb_bg1.jpg', ''),
(3, 'Sweaters', 1, '', '29012-banner24.jpg'),
(5, 'Shirts', 1, '', '8513d-plaid-shirt-1.jpg'),
(6, 'Jeans', 1, '', '75807-jeans.jpg'),
(7, 'Blazers', 1, '', '416f4-banner33.jpg'),
(8, 'Outwear', 1, '', 'a2e9f-outwear.jpg'),
(9, 'Jackets', 1, '', 'a24f7-jacket.jpg'),
(10, 'Wrap', 2, '', 'a7d88-banner21.jpg'),
(11, 'Mini', 2, '', '8f375-banner06092014_1.jpg'),
(12, 'Denim', 2, '', 'bbef6-armani-jeans-women-banner.jpg'),
(13, 'Pants', 2, '', 'e7532-banner_reverse.jpg'),
(14, 'Casual', 2, '', '44d33-permanent_seo_banner_women.jpg'),
(15, 'Tops', 2, '', '86648-20150901_en_subcategorypage_women_topbanner6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
`id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `color` varchar(32) NOT NULL,
  `web` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_id`, `color`, `web`) VALUES
(1, 1, 'red', '#dc4343'),
(2, 2, 'blue', '#61acf2'),
(3, 3, 'green', '#63c85b'),
(4, 4, 'black', '#000000'),
(5, 5, 'brown', '#c98d4c'),
(6, 6, 'violet', '#b771db'),
(7, 7, 'white', '#d3d3d3');

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE IF NOT EXISTS `color_product` (
`id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color_product`
--

INSERT INTO `color_product` (`id`, `product_id`, `color_id`) VALUES
(1, 2, 2),
(2, 4, 1),
(3, 3, 2),
(4, 7, 6),
(5, 9, 5),
(6, 10, 5),
(7, 10, 3),
(8, 11, 7),
(9, 12, 4),
(10, 13, 4),
(11, 13, 5),
(12, 14, 4),
(13, 14, 5),
(14, 15, 4),
(15, 16, 7),
(16, 17, 4),
(17, 17, 7),
(18, 18, 2),
(19, 19, 7),
(20, 20, 7),
(21, 21, 3),
(22, 21, 1),
(23, 22, 2),
(24, 22, 6),
(25, 23, 6),
(26, 24, 2),
(27, 25, 7),
(28, 26, 2),
(29, 26, 5),
(30, 27, 4),
(31, 28, 2),
(32, 28, 6),
(33, 29, 4),
(34, 29, 7),
(35, 30, 6),
(36, 31, 2),
(37, 31, 6),
(38, 32, 7),
(39, 38, 2),
(40, 39, 4),
(41, 39, 5),
(42, 40, 2),
(43, 40, 6),
(44, 41, 2),
(45, 41, 6),
(46, 42, 4),
(47, 42, 2),
(48, 42, 6),
(49, 44, 4),
(50, 45, 1),
(51, 46, 4),
(52, 46, 6),
(53, 37, 6),
(54, 5, 5),
(55, 8, 2),
(56, 6, 5),
(57, 39, 6),
(58, 1, 2),
(59, 43, 6),
(60, 36, 1),
(61, 47, 2),
(62, 48, 2),
(63, 49, 2),
(64, 50, 2),
(65, 51, 2),
(66, 52, 2),
(67, 53, 2),
(68, 54, 4),
(69, 54, 7),
(70, 55, 4),
(71, 56, 7),
(72, 57, 4),
(73, 57, 5),
(74, 57, 7),
(75, 58, 4),
(76, 58, 5),
(77, 59, 4),
(78, 59, 5),
(79, 62, 7),
(80, 63, 5),
(81, 63, 7),
(82, 64, 4),
(83, 65, 4),
(84, 65, 1),
(85, 66, 4),
(86, 66, 7),
(87, 67, 4),
(88, 68, 1),
(89, 69, 1),
(90, 70, 3),
(91, 79, 5),
(92, 80, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`comments_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `comments` longtext NOT NULL,
  `name` varchar(32) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `id`, `comments`, `name`, `created`) VALUES
(1, 1, 'Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis.', 'raylight75', '2015-07-09 18:26:45'),
(2, 2, 'Thank you so much for putting this together Jeremy. Most of these seem like common sense but it is amazing how many times I see new employees having the worst days of their life because managers/leaders don’t want to be “bothered” with the new guy.', 'Ivan Ivanov', '2015-08-20 22:26:26'),
(3, 2, 'test comments for Eshop blog', 'raylight75', '2015-09-29 02:07:32'),
(4, 1, 'Yes,test posr nubmer 2', 'Ivan Ivanov', '2015-09-06 09:26:45'),
(5, 1, 'Second test comment for post', 'raylight75', '2015-09-10 18:29:35'),
(6, 2, 'I like comment raylight75', 'Ivan Ivanov', '2015-09-10 18:32:16'),
(7, 10, 'Great article,nice job', 'ana blajeva', '2015-09-21 20:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(5) NOT NULL,
  `code` char(2) NOT NULL DEFAULT '',
  `name` varchar(45) NOT NULL DEFAULT '',
  `vat` float NOT NULL,
  `images` varchar(45) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=251 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`, `vat`, `images`) VALUES
(1, 'AD', 'Andorra', 29, 'mobile_1.jpg'),
(2, 'AE', 'United Arab Emirates', 0, ''),
(3, 'AF', 'Afghanistan', 0, ''),
(4, 'AG', 'Antigua and Barbuda', 0, ''),
(5, 'AI', 'Anguilla', 0, ''),
(6, 'AL', 'Albania', 0, ''),
(7, 'AM', 'Armenia', 0, ''),
(8, 'AO', 'Angola', 0, ''),
(9, 'AQ', 'Antarctica', 0, ''),
(10, 'AR', 'Argentina', 0, ''),
(11, 'AS', 'American Samoa', 0, ''),
(12, 'AT', 'Austria', 0.2, ''),
(13, 'AU', 'Australia', 0, ''),
(14, 'AW', 'Aruba', 0, ''),
(15, 'AX', 'Aland', 0, ''),
(16, 'AZ', 'Azerbaijan', 0, ''),
(17, 'BA', 'Bosnia and Herzegovina', 0, ''),
(18, 'BB', 'Barbados', 0, ''),
(19, 'BD', 'Bangladesh', 0, ''),
(20, 'BE', 'Belgium', 0.21, ''),
(21, 'BF', 'Burkina Faso', 0, ''),
(22, 'BG', 'Bulgaria', 0.2, ''),
(23, 'BH', 'Bahrain', 0, ''),
(24, 'BI', 'Burundi', 0, ''),
(25, 'BJ', 'Benin', 0, ''),
(26, 'BL', 'Saint Barthelemy', 0, ''),
(27, 'BM', 'Bermuda', 0, ''),
(28, 'BN', 'Brunei', 0, ''),
(29, 'BO', 'Bolivia', 0, ''),
(30, 'BQ', 'Bonaire', 0, ''),
(31, 'BR', 'Brazil', 0, ''),
(32, 'BS', 'Bahamas', 0, ''),
(33, 'BT', 'Bhutan', 0, ''),
(34, 'BV', 'Bouvet Island', 0, ''),
(35, 'BW', 'Botswana', 0, ''),
(36, 'BY', 'Belarus', 0, ''),
(37, 'BZ', 'Belize', 0, ''),
(38, 'CA', 'Canada', 0, ''),
(39, 'CC', 'Cocos [Keeling] Islands', 0, ''),
(40, 'CD', 'Democratic Republic of the Congo', 0, ''),
(41, 'CF', 'Central African Republic', 0, ''),
(42, 'CG', 'Republic of the Congo', 0, ''),
(43, 'CH', 'Switzerland', 0, ''),
(44, 'CI', 'Ivory Coast', 0, ''),
(45, 'CK', 'Cook Islands', 0, ''),
(46, 'CL', 'Chile', 0, ''),
(47, 'CM', 'Cameroon', 0, ''),
(48, 'CN', 'China', 0, ''),
(49, 'CO', 'Colombia', 0, ''),
(50, 'CR', 'Costa Rica', 0, ''),
(51, 'CU', 'Cuba', 0, ''),
(52, 'CV', 'Cape Verde', 0, ''),
(53, 'CW', 'Curacao', 0, ''),
(54, 'CX', 'Christmas Island', 0, ''),
(55, 'CY', 'Cyprus', 0.19, ''),
(56, 'CZ', 'Czech Republic', 0.21, ''),
(57, 'DE', 'Germany', 0.19, ''),
(58, 'DJ', 'Djibouti', 0, ''),
(59, 'DK', 'Denmark', 0.25, ''),
(60, 'DM', 'Dominica', 0, ''),
(61, 'DO', 'Dominican Republic', 0, ''),
(62, 'DZ', 'Algeria', 0, ''),
(63, 'EC', 'Ecuador', 0, ''),
(64, 'EE', 'Estonia', 0.2, ''),
(65, 'EG', 'Egypt', 0, ''),
(66, 'EH', 'Western Sahara', 0, ''),
(67, 'ER', 'Eritrea', 0, ''),
(68, 'ES', 'Spain', 0.21, ''),
(69, 'ET', 'Ethiopia', 0, ''),
(70, 'FI', 'Finland', 0.24, ''),
(71, 'FJ', 'Fiji', 0, ''),
(72, 'FK', 'Falkland Islands', 0, ''),
(73, 'FM', 'Micronesia', 0, ''),
(74, 'FO', 'Faroe Islands', 0, ''),
(75, 'FR', 'France', 0.2, ''),
(76, 'GA', 'Gabon', 0, ''),
(77, 'GB', 'United Kingdom', 0.2, ''),
(78, 'GD', 'Grenada', 0, ''),
(79, 'GE', 'Georgia', 0, ''),
(80, 'GF', 'French Guiana', 0, ''),
(81, 'GG', 'Guernsey', 0, ''),
(82, 'GH', 'Ghana', 0, ''),
(83, 'GI', 'Gibraltar', 0, ''),
(84, 'GL', 'Greenland', 0, ''),
(85, 'GM', 'Gambia', 0, ''),
(86, 'GN', 'Guinea', 0, ''),
(87, 'GP', 'Guadeloupe', 0, ''),
(88, 'GQ', 'Equatorial Guinea', 0, ''),
(89, 'GR', 'Greece', 0.23, ''),
(90, 'GS', 'South Georgia and the South Sandwich Islands', 0, ''),
(91, 'GT', 'Guatemala', 0, ''),
(92, 'GU', 'Guam', 0, ''),
(93, 'GW', 'Guinea-Bissau', 0, ''),
(94, 'GY', 'Guyana', 0, ''),
(95, 'HK', 'Hong Kong', 0, ''),
(96, 'HM', 'Heard Island and McDonald Islands', 0, ''),
(97, 'HN', 'Honduras', 0, ''),
(98, 'HR', 'Croatia', 0.25, ''),
(99, 'HT', 'Haiti', 0, ''),
(100, 'HU', 'Hungary', 0.27, ''),
(101, 'ID', 'Indonesia', 0, ''),
(102, 'IE', 'Ireland', 0.23, ''),
(103, 'IL', 'Israel', 0, ''),
(104, 'IM', 'Isle of Man', 0, ''),
(105, 'IN', 'India', 0, ''),
(106, 'IO', 'British Indian Ocean Territory', 0, ''),
(107, 'IQ', 'Iraq', 0, ''),
(108, 'IR', 'Iran', 0, ''),
(109, 'IS', 'Iceland', 0, ''),
(110, 'IT', 'Italy', 0.22, ''),
(111, 'JE', 'Jersey', 0, ''),
(112, 'JM', 'Jamaica', 0, ''),
(113, 'JO', 'Jordan', 0, ''),
(114, 'JP', 'Japan', 0, ''),
(115, 'KE', 'Kenya', 0, ''),
(116, 'KG', 'Kyrgyzstan', 0, ''),
(117, 'KH', 'Cambodia', 0, ''),
(118, 'KI', 'Kiribati', 0, ''),
(119, 'KM', 'Comoros', 0, ''),
(120, 'KN', 'Saint Kitts and Nevis', 0, ''),
(121, 'KP', 'North Korea', 0, ''),
(122, 'KR', 'South Korea', 0, ''),
(123, 'KW', 'Kuwait', 0, ''),
(124, 'KY', 'Cayman Islands', 0, ''),
(125, 'KZ', 'Kazakhstan', 0, ''),
(126, 'LA', 'Laos', 0, ''),
(127, 'LB', 'Lebanon', 0, ''),
(128, 'LC', 'Saint Lucia', 0, ''),
(129, 'LI', 'Liechtenstein', 0, ''),
(130, 'LK', 'Sri Lanka', 0, ''),
(131, 'LR', 'Liberia', 0, ''),
(132, 'LS', 'Lesotho', 0, ''),
(133, 'LT', 'Lithuania', 0.21, ''),
(134, 'LU', 'Luxembourg', 0.15, ''),
(135, 'LV', 'Latvia', 0.21, ''),
(136, 'LY', 'Libya', 0, ''),
(137, 'MA', 'Morocco', 0, ''),
(138, 'MC', 'Monaco', 0, ''),
(139, 'MD', 'Moldova', 0, ''),
(140, 'ME', 'Montenegro', 0, ''),
(141, 'MF', 'Saint Martin', 0, ''),
(142, 'MG', 'Madagascar', 0, ''),
(143, 'MH', 'Marshall Islands', 0, ''),
(144, 'MK', 'Macedonia', 0, ''),
(145, 'ML', 'Mali', 0, ''),
(146, 'MM', 'Myanmar [Burma]', 0, ''),
(147, 'MN', 'Mongolia', 0, ''),
(148, 'MO', 'Macao', 0, ''),
(149, 'MP', 'Northern Mariana Islands', 0, ''),
(150, 'MQ', 'Martinique', 0, ''),
(151, 'MR', 'Mauritania', 0, ''),
(152, 'MS', 'Montserrat', 0, ''),
(153, 'MT', 'Malta', 0.18, ''),
(154, 'MU', 'Mauritius', 0, ''),
(155, 'MV', 'Maldives', 0, ''),
(156, 'MW', 'Malawi', 0, ''),
(157, 'MX', 'Mexico', 0, ''),
(158, 'MY', 'Malaysia', 0, ''),
(159, 'MZ', 'Mozambique', 0, ''),
(160, 'NA', 'Namibia', 0, ''),
(161, 'NC', 'New Caledonia', 0, ''),
(162, 'NE', 'Niger', 0, ''),
(163, 'NF', 'Norfolk Island', 0, ''),
(164, 'NG', 'Nigeria', 0, ''),
(165, 'NI', 'Nicaragua', 0, ''),
(166, 'NL', 'Netherlands', 0.21, ''),
(167, 'NO', 'Norway', 0, ''),
(168, 'NP', 'Nepal', 0, ''),
(169, 'NR', 'Nauru', 0, ''),
(170, 'NU', 'Niue', 0, ''),
(171, 'NZ', 'New Zealand', 0, ''),
(172, 'OM', 'Oman', 0, ''),
(173, 'PA', 'Panama', 0, ''),
(174, 'PE', 'Peru', 0, ''),
(175, 'PF', 'French Polynesia', 0, ''),
(176, 'PG', 'Papua New Guinea', 0, ''),
(177, 'PH', 'Philippines', 0, ''),
(178, 'PK', 'Pakistan', 0, ''),
(179, 'PL', 'Poland', 0.23, ''),
(180, 'PM', 'Saint Pierre and Miquelon', 0, ''),
(181, 'PN', 'Pitcairn Islands', 0, ''),
(182, 'PR', 'Puerto Rico', 0, ''),
(183, 'PS', 'Palestine', 0, ''),
(184, 'PT', 'Portugal', 0.23, ''),
(185, 'PW', 'Palau', 0, ''),
(186, 'PY', 'Paraguay', 0, ''),
(187, 'QA', 'Qatar', 0, ''),
(188, 'RE', 'Reunion', 0, ''),
(189, 'RO', 'Romania', 0.24, ''),
(190, 'RS', 'Serbia', 0, ''),
(191, 'RU', 'Russia', 0, ''),
(192, 'RW', 'Rwanda', 0, ''),
(193, 'SA', 'Saudi Arabia', 0, ''),
(194, 'SB', 'Solomon Islands', 0, ''),
(195, 'SC', 'Seychelles', 0, ''),
(196, 'SD', 'Sudan', 0, ''),
(197, 'SE', 'Sweden', 0.25, ''),
(198, 'SG', 'Singapore', 0, ''),
(199, 'SH', 'Saint Helena', 0, ''),
(200, 'SI', 'Slovenia', 0.22, ''),
(201, 'SJ', 'Svalbard and Jan Mayen', 0, ''),
(202, 'SK', 'Slovakia', 0.2, ''),
(203, 'SL', 'Sierra Leone', 0, ''),
(204, 'SM', 'San Marino', 0, ''),
(205, 'SN', 'Senegal', 0, ''),
(206, 'SO', 'Somalia', 0, ''),
(207, 'SR', 'Suriname', 0, ''),
(208, 'SS', 'South Sudan', 0, ''),
(209, 'ST', 'Sao Tome and Principe', 0, ''),
(210, 'SV', 'El Salvador', 0, ''),
(211, 'SX', 'Sint Maarten', 0, ''),
(212, 'SY', 'Syria', 0, ''),
(213, 'SZ', 'Swaziland', 0, ''),
(214, 'TC', 'Turks and Caicos Islands', 0, ''),
(215, 'TD', 'Chad', 0, ''),
(216, 'TF', 'French Southern Territories', 0, ''),
(217, 'TG', 'Togo', 0, ''),
(218, 'TH', 'Thailand', 0, ''),
(219, 'TJ', 'Tajikistan', 0, ''),
(220, 'TK', 'Tokelau', 0, ''),
(221, 'TL', 'East Timor', 0, ''),
(222, 'TM', 'Turkmenistan', 0, ''),
(223, 'TN', 'Tunisia', 0, ''),
(224, 'TO', 'Tonga', 0, ''),
(225, 'TR', 'Turkey', 0, ''),
(226, 'TT', 'Trinidad and Tobago', 0, ''),
(227, 'TV', 'Tuvalu', 0, ''),
(228, 'TW', 'Taiwan', 0, ''),
(229, 'TZ', 'Tanzania', 0, ''),
(230, 'UA', 'Ukraine', 0, ''),
(231, 'UG', 'Uganda', 0, ''),
(232, 'UM', 'U.S. Minor Outlying Islands', 0, ''),
(233, 'US', 'United States', 0, ''),
(234, 'UY', 'Uruguay', 0, ''),
(235, 'UZ', 'Uzbekistan', 0, ''),
(236, 'VA', 'Vatican City', 0, ''),
(237, 'VC', 'Saint Vincent and the Grenadines', 0, ''),
(238, 'VE', 'Venezuela', 0, ''),
(239, 'VG', 'British Virgin Islands', 0, ''),
(240, 'VI', 'U.S. Virgin Islands', 0, ''),
(241, 'VN', 'Vietnam', 0, ''),
(242, 'VU', 'Vanuatu', 0, ''),
(243, 'WF', 'Wallis and Futuna', 0, ''),
(244, 'WS', 'Samoa', 0, ''),
(245, 'XK', 'Kosovo', 0, ''),
(246, 'YE', 'Yemen', 0, ''),
(247, 'YT', 'Mayotte', 0, ''),
(248, 'ZA', 'South Africa', 0, ''),
(249, 'ZM', 'Zambia', 0, ''),
(250, 'ZW', 'Zimbabwe', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE IF NOT EXISTS `currencies` (
`id` int(11) NOT NULL,
  `name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `rate`) VALUES
(1, 'usd', 1),
(2, 'eur', 0.881),
(3, 'bgn', 1.724);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(64) NOT NULL,
  `city` varchar(64) NOT NULL,
  `postcode` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `phone` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `country`, `city`, `postcode`, `name`, `email`, `adress`, `phone`) VALUES
(1, 2, 'Bulgaria', 'V.Tarnovo', 5689, 'Ivan Ivanov', 'tblajev@yahoo.com', 'ul.Skopie 56', '0897544213'),
(2, 2, 'Bulgaria', 'Sofia', 4000, 'Ivan Ivanov', 'tblajev@yahoo.com', 'ul Mih.Georgiev 48', '0898654413'),
(3, 2, 'Bulgaria', 'Plovdiv', 4004, 'Ivan Ivanov', 'tblajev@yahoo.com', 'bul Hristo Botev 92B', '0898894213'),
(4, 2, 'Bulgaria', 'Varna', 3000, 'Ivan Ivanov', 'tblajev@yahoo.com', 'bul P.Iavorov 9', '0898894213'),
(5, 2, 'Australia', 'Sidney', 5006, 'Ivan Ivanov', 'tblajev@yahoo.com', 'Novel Str 34', '0877542389'),
(6, 2, 'Germany', 'Berlin', 3478, 'Ivan Ivanov', 'tblajev@yahoo.com', 'ChemnitzerStr 54', '0877653389'),
(7, 4, 'Hungary', 'Budapest', 45690, 'Ana', 'raylight75@gmail.com', 'Hungaroring Str 56', '9745765690'),
(8, 4, 'Hungary', 'Budapest', 45690, 'Ana', 'raylight75@gmail.com', 'Hungaroring Str 56', '9745765690'),
(9, 4, 'Australia', 'Sidney', 5212, 'Ana', 'raylight75@gmail.com', 'Hover Street 78', '0898734173'),
(11, 4, 'Australia', 'Kanbera', 4004, 'Ana', 'tihomir@designconnected.com', 'London Str 79', '0898894213'),
(12, 4, 'Bulgaria', 'Ruse', 4556, 'Ana', 'raylight75@gmail.com', 'Buzludja 45', '0898894213'),
(17, 2, 'Bulgaria', 'Blagoevgrad', 3005, 'Ivan', 'tblajev@yahoo.com', 'Gorni Dabnik 45', '0877542389'),
(20, 2, 'Bulgaria', 'Haskovo', 4008, 'Ivan', 'tblajev@yahoo.com', 'Georgi Georgiev 12', '0898894213'),
(21, 4, 'Bulgaria', 'Plovdiv', 4004, 'Ana', 'ana.blajeva@abv.bg', 'skopie 45', '124587'),
(22, 4, 'Austria', 'Viena', 4003, 'Ana', 'tomas@archimation.com', 'Wierbrudden Strase 45', '0567124678'),
(23, 4, 'Bulgaria', 'Plovdiv', 4004, 'Ana', 'ana.blajeva@abv.bg', 'skopie45', '0898457832'),
(24, 4, 'Bulgaria', 'Sofia', 4003, 'Ana', 'ana.blajeva@abv.bg', 'Wierbrudden Strase 45', '0898457832');

-- --------------------------------------------------------

--
-- Table structure for table `images_tmp`
--

CREATE TABLE IF NOT EXISTS `images_tmp` (
`img_id` int(11) NOT NULL,
  `images` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images_tmp`
--

INSERT INTO `images_tmp` (`img_id`, `images`) VALUES
(1, '51809-pmo000a.jpg'),
(2, '8f2b0-pmo000b.jpg'),
(3, 'ee087-pmo000c.jpg'),
(4, '9c53b-mtk006a.jpg'),
(5, '37a0b-mtk006b.jpg'),
(6, '295af-mtk006t.jpg'),
(7, '25cd2-mtk009a.jpg'),
(8, 'ba14e-mtk009b.jpg'),
(9, '58e6f-mtk009t.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_01_15_105324_create_roles_table', 1),
('2015_01_15_114412_create_role_user_table', 1),
('2015_01_26_115212_create_permissions_table', 1),
('2015_01_26_115523_create_permission_role_table', 1),
('2015_02_09_132439_create_permission_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(32) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(32) NOT NULL,
  `img` varchar(64) NOT NULL,
  `color` varchar(32) NOT NULL,
  `quantity` int(64) NOT NULL,
  `amount` int(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_date`, `status`, `product_id`, `size`, `img`, `color`, `quantity`, `amount`) VALUES
(1, 2, '2015-08-16 20:31:23', '6', 4, 'XL', '8d383-mtk006a.jpg', 'red', 2, 24),
(2, 2, '2015-08-16 20:32:59', '7', 4, 'XL', '8d383-mtk006a.jpg', 'red', 1, 12),
(3, 2, '2015-08-16 20:40:55', '2', 16, 'XXL', 'ebd78-pmtk004a.jpg', 'white', 3, 36),
(4, 2, '2015-08-16 20:52:50', '2', 16, 'XL', 'ebd78-pmtk004a.jpg', 'white', 2, 24),
(5, 1, '2015-08-16 20:52:50', '2', 15, 'M', '10551-pmtk006a.jpg', 'black', 1, 23),
(6, 4, '2015-08-16 21:11:05', '2', 4, 'XXL', '8d383-mtk006a.jpg', 'red', 1, 12),
(7, 1, '2015-08-16 21:11:05', '7', 15, 'L', '10551-pmtk006a.jpg', 'black', 1, 23),
(8, 1, '2015-08-16 21:23:58', '6', 10, 'M', '543ea-mtk004a.jpg', 'brown', 2, 10),
(9, 4, '2015-08-16 21:23:58', '5', 32, 'S', '11f4f-image1xxl.jpg', 'white', 1, 56),
(10, 4, '2015-08-16 22:06:38', '5', 19, 'M', '04776-pms000a.jpg', 'white', 2, 68),
(11, 4, '2015-08-16 23:27:35', '1', 40, 'XL', '742e0-image1xxl-7-.jpg', 'blue', 1, 34),
(12, 2, '2015-08-18 08:16:18', '4', 12, ' XXL', 'dd8f7-pmo001a.jpg', 'black', 3, 267),
(13, 2, '2015-08-18 08:20:05', '6', 12, ' XXL', 'dd8f7-pmo001a.jpg', 'black', 1, 89),
(14, 2, '2015-08-18 08:26:15', '1', 28, 'L', '68d00-4.jpg', 'violet', 2, 74),
(15, 1, '2015-08-18 08:59:21', '2', 21, 'S', 'ea72e-mpd006t.jpg', 'green', 1, 19),
(16, 1, '2015-08-18 08:59:21', '7', 17, 'L', '57e1d-pmtk001a.jpg', 'white', 2, 20),
(17, 2, '2015-08-20 11:30:21', '5', 8, ' XXXL', 'e11b9-mpd006a.jpg', 'blue', 1, 37),
(18, 1, '2015-09-03 18:00:52', '7', 17, 'L', '57e1d-pmtk001a.jpg', 'black', 2, 20),
(19, 4, '2015-09-03 18:00:52', '1', 1, ' XXL', 'ed60e-mpd000c.jpg', 'blue', 1, 25),
(20, 4, '2015-09-03 18:48:24', '5', 32, 'M', '11f4f-image1xxl.jpg', 'white', 2, 112),
(21, 4, '2015-09-03 18:56:32', '4', 44, 'L', '39915-v1.jpg', 'black', 1, 6),
(22, 1, '2015-09-14 20:18:30', '2', 39, ' XL', 'be3aa-image11.jpg', 'violet', 1, 108),
(23, 4, '2015-09-21 18:44:22', '5', 6, 'M', '94efc-mpd012a.jpg', 'brown', 3, 21),
(24, 1, '2015-09-21 18:44:22', '7', 47, ' XXL', '3c47b-pwt001a_1.jpg', 'blue', 3, 267),
(25, 1, '2015-10-26 13:13:10', '5', 1, 'XXL', 'ed60e-mpd000c.jpg', 'blue', 2, 50),
(26, 2, '2015-12-27 17:13:32', '2', 45, 'L', 'c2ae6-n1.jpg', 'red', 3, 15),
(27, 4, '2015-12-27 17:13:32', '2', 42, 'XXL', '729d0-b1.jpg', 'blue', 1, 103),
(28, 4, '2016-05-07 05:12:49', '3', 31, 'XL', 'de5e1-image1.jpg', 'blue', 2, 70),
(29, 4, '2016-05-07 05:33:00', '5', 68, 'M', '547c8-image1xxl-4-.jpg', 'red', 2, 24),
(30, 4, '2016-05-07 05:33:00', '6', 44, 'XXL', '39915-v1.jpg', 'black', 3, 18),
(31, 2, '2016-05-07 06:12:19', '', 15, 'XS', '10551-pmtk006a.jpg', 'black', 2, 46),
(32, 2, '2016-05-07 06:12:19', '', 40, 'XL', '742e0-image1xxl-7-.jpg', 'blue', 1, 34),
(33, 2, '2016-05-07 06:15:11', '', 42, 'XXL', '729d0-b1.jpg', 'black', 1, 103),
(34, 2, '2016-05-07 06:50:23', '', 39, 'XL', 'be3aa-image11.jpg', 'black', 1, 108),
(35, 2, '2016-05-07 06:50:24', '', 32, 'M', '11f4f-image1xxl.jpg', 'white', 2, 112),
(36, 2, '2016-05-07 06:50:24', '', 66, 'L', 'ee456-image1xxl-1-.jpg', 'black', 2, 40),
(37, 4, '2016-05-07 07:13:23', '', 56, 'L', 'a1fe9-pwd002a.jpg', 'white', 2, 44),
(38, 4, '2016-05-07 07:13:24', '', 55, 'XL', 'a88c7-pwd001a.jpg', 'black', 1, 54),
(39, 4, '2016-05-07 12:23:57', '', 47, 'S', '3c47b-pwt001a_1.jpg', 'blue', 1, 89);

--
-- Triggers `orders`
--
DELIMITER //
CREATE TRIGGER `quantity` AFTER INSERT ON `orders`
 FOR EACH ROW BEGIN
UPDATE products SET products.quantity = products.quantity - NEW.quantity WHERE  products.product_id = NEW.product_id; 
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
`id` int(11) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `status`) VALUES
(1, 'canceled'),
(2, 'complete'),
(3, 'expired'),
(4, 'failed'),
(5, 'pending'),
(6, 'refunded'),
(7, 'shipped'),
(8, 'denied');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
`id` int(11) NOT NULL,
  `method` varchar(32) NOT NULL,
  `img` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `method`, `img`) VALUES
(1, 'Visa', 'visa.jpg'),
(2, 'MasterCard', 'master_card.jpg'),
(3, 'PayPal', 'paypal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
`id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE IF NOT EXISTS `permission_user` (
`id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `url` varchar(32) DEFAULT NULL,
  `title` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `priority`, `url`, `title`) VALUES
(1, 2, 'e96e9-a1.jpg', 'Nissan'),
(2, 1, 'd70f1-a2.jpg', 'Lambo1'),
(4, 1, 'c2510-a3.jpg', 'Lambo2'),
(5, 2, 'a0809-a6.jpg', 'Audi\n'),
(6, 2, '32d56-a9.jpg', 'Honda'),
(7, 3, '98e8a-i9.jpg', 'int_1'),
(8, 3, 'b5fd8-i12.jpg', 'int_2'),
(10, 1, '9730c-a8.jpg', 'Mitsubishi'),
(11, 2, '396d5-a10.jpg', 'beast'),
(12, 2, 'a4d7f-a7.jpg', 'audi_2'),
(1, 2, 'e96e9-a1.jpg', 'Nissan'),
(2, 1, 'd70f1-a2.jpg', 'Lambo1'),
(4, 1, 'c2510-a3.jpg', 'Lambo2'),
(5, 2, 'a0809-a6.jpg', 'Audi\n'),
(6, 2, '32d56-a9.jpg', 'Honda'),
(7, 3, '98e8a-i9.jpg', 'int_1'),
(8, 3, 'b5fd8-i12.jpg', 'int_2'),
(10, 1, '9730c-a8.jpg', 'Mitsubishi'),
(11, 2, '396d5-a10.jpg', 'beast'),
(12, 2, 'a4d7f-a7.jpg', 'audi_2');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`post_id` int(11) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `username` varchar(45) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `category` varchar(45) NOT NULL,
  `tags` varchar(45) NOT NULL,
  `image` varchar(45) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `username`, `title`, `content`, `category`, `tags`, `image`, `created`) VALUES
(1, 2, 'tihomir blajev', 'See All the Ridiculously Hot, Nearly Naked Looks From Shakira and Rihanna''s New Video', '<p style="box-sizing: border-box; margin: 0px 0px 24px; line-height: 24px; font-size: 14px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif;">\r\n	The cousin had a point. Consider Casasola&rsquo;s spring/ summer 2014 lineup, which, inspired by the work of Brazilian constructivist master Lygia Clark, explores the duality of discipline and sensuality: There is something decidedly not of this century about the evening dresses&mdash;and they are almost all evening dresses, with a few soign&eacute; jumpsuits and pencil skirts in the mix&mdash;that she crafts from unembellished satins, cadys, and organzas, with hems cropped just above the ankle. &ldquo;A lot of people think it makes you look shorter,&rdquo; says Casasola of her preferred silhouette. &ldquo;But it&rsquo;s the other way around.&rdquo;</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 24px; line-height: 24px; font-size: 14px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif;">\r\n	This courage of conviction allows such friends of the designer as Caroline Issa and Brazilian princess Paola Orl&eacute;ans e Bragan&ccedil;a and other fans&mdash;like, say, Gwyneth Paltrow&mdash;to stand tall in her designs. (The five-inch pumps she collaborated on with Manolo Blahnik also help). Casasola has a Central Saint Martins degree and design work at Lanvin on her r&eacute;sum&eacute;, but she says she learned the most from her seamstress grandmother, who never left the house in anything but a maxi-length. The lesson, she says: &ldquo;Luxury is simplicity.&rdquo;</p>\r\n', '1', '1', '7.jpg', '2015-06-27 21:18:15'),
(2, 2, 'tihomir blajev', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '<p>\r\n	Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>\r\n', '2', '2', '8.jpg', '2015-06-30 15:48:45'),
(3, 2, 'tihomir blajev', 'Lorem ipsum dolor sit amet', '<p>\r\n	Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>\r\n', '3', '3', '10.jpg', '2015-07-01 17:35:22'),
(4, 2, 'tihomir blajev', 'Aliquam tincidunt mauris eu risus.', '<p>\r\n	Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>\r\n', '1', '1', '9.jpg', '2015-07-01 18:20:05'),
(5, 2, 'tihomir blajev', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '<p>\r\n	Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>\r\n', '1', '1', '11.jpg', '2015-07-01 18:21:17'),
(6, 2, 'tihomir blajev', 'Vestibulum auctor dapibus neque.', '<p>\r\n	Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>\r\n', '3', '3', 'ede0b-12.jpg', '2015-07-02 11:19:36'),
(7, 2, 'tihomir blajev', 'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', '<div>\r\n	Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna&nbsp;</div>\r\n<div>\r\n	aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea&nbsp;</div>\r\n<div>\r\n	commodo consequat.</div>\r\n', '3', '3', '29855-13.jpg', '2015-07-01 22:08:07'),
(8, 2, 'tihomir blajev', 'Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.', '<p>\r\n	Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.&nbsp;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>\r\n', '2', '2', '07718-14.jpg', '2015-07-01 23:12:18'),
(9, 2, 'tihomir blajev', ' Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.', '<p>\r\n	<span style="font-size:12px;"><span style="color: rgb(102, 102, 102); font-family: Verdana, Geneva, sans-serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</span></span></p>\r\n', '2', '2', '4f53f-15.jpg', '2015-07-01 22:12:00'),
(10, 2, 'tihomir blajev', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.', '8', '8', '41.jpg', '2015-09-21 20:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `productimg_tmp`
--

CREATE TABLE IF NOT EXISTS `productimg_tmp` (
  `product_id` int(11) DEFAULT NULL,
  `img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productimg_tmp`
--

INSERT INTO `productimg_tmp` (`product_id`, `img_id`) VALUES
(2, 1),
(2, 2),
(2, 3),
(1, 6),
(1, 5),
(1, 4),
(4, 7),
(4, 9),
(4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(11) NOT NULL,
  `slug` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` mediumtext NOT NULL,
  `a_img` varchar(45) NOT NULL,
  `b_img` varchar(45) NOT NULL,
  `c_img` varchar(45) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `slug`, `name`, `description`, `a_img`, `b_img`, `c_img`, `brand_id`, `cat_id`, `parent_id`, `quantity`, `price`) VALUES
(1, 'CK-Blue-Schoolboy-Blazer', 'CK Blue Schoolboy Blazer', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'ed60e-mpd000c.jpg', 'df7b4-mpd000t.jpg', '09a16-mpd000t_6.jpg', 5, 7, 1, 8, 25),
(2, 'Dior-Blue-Peacoat-Trench', 'Dior Blue Peacoat Trench', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '0c88d-mtk009a.jpg', '1d3f9-mtk009b.jpg', '604e7-mtk009t.jpg', 2, 3, 1, 5, 15),
(3, 'Fendi-Waxed-Blue-Jacket', 'Fendi Waxed Blue Jacket', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '51c1b-pmo000a.jpg', 'c10d9-pmo000b.jpg', 'bdb32-pmo000c.jpg', 7, 9, 1, 3, 80),
(4, 'Gucci-Red-Neck-Sweater', 'Gucci Red Neck Sweater', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '8d383-mtk006a.jpg', '07e30-mtk006b.jpg', '9cbb3-mtk006t.jpg', 1, 3, 1, 5, 12),
(5, 'Pepe-Jeans-Outwear-Jeans', 'Pepe Jeans Outwear Jeans', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Verdana, Geneva, sans-serif; font-size: 10px;">Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</span></p>\r\n', 'f0a95-mpd000a.jpg', '87131-mpd000b.jpg', '', 4, 8, 1, 23, 19),
(6, 'DKNY-Brown-Line-Jeans', 'DKNY Brown Line Jeans', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '94efc-mpd012a.jpg', '35a3f-mpd012b.jpg', 'aa423-mpd012t.jpg', 6, 6, 1, 45, 7),
(7, 'Moschino-Violet-Shirt ', 'Moschino Violet Shirt ', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'd4bfb-mtk000a.jpg', '0dfc6-mtk000b.jpg', '52d0c-mtk000t.jpg', 3, 5, 1, 67, 6),
(8, 'Pepe-Jeans-Blue-Retro', 'Pepe Jeans Blue Retro', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'e11b9-mpd006a.jpg', '01bc5-mpd006b.jpg', '', 4, 6, 1, 32, 37),
(9, 'Gucci-Brown-Jeans', 'Gucci Brown Jeans', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '9e254-mpd003a.jpg', '80540-mpd003b.jpg', 'c4a7d-mpd003t.jpg', 1, 6, 1, 34, 32),
(10, 'Dior-Brown-Mens-Shirt', 'Dior Brown Mens Shirt', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '543ea-mtk004a.jpg', '97d6f-mtk004t.jpg', '', 2, 5, 1, 78, 5),
(11, 'Fendi-White-Jacket', 'Fendi White Jacket', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'c6b37-pmtk001c.jpg', '04ec4-pmtk001t.jpg', '', 7, 9, 1, 3, 99),
(12, 'Dior-Black-Long-Blazer', 'Dior Black Long Blazer', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'dd8f7-pmo001a.jpg', 'd071b-pmo001b.jpg', 'd4450-pmo001t.jpg', 2, 7, 1, 3, 89),
(13, 'CK-Shell-Black-Blazer', 'CK Shell Black Blazer', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '3a815-pmo002a.jpg', '6cb7c-pmo002b.jpg', '3e659-pmo002t.jpg', 5, 7, 1, 4, 94),
(14, 'Fendi-Brown-Skinny-Jeans', 'Fendi Brown Skinny Jeans', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '56245-pmp002a.jpg', '1f543-pmp002b.jpg', '892a5-pmp002t.jpg', 7, 6, 1, 42, 54),
(15, 'DKNY-Black-Neck-Sweater', 'DKNY Black Neck Sweater', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '10551-pmtk006a.jpg', '594d8-pmtk006t.jpg', '', 6, 3, 1, 32, 23),
(16, 'Moschino-White-Hoodie', 'Moschino White Hoodie', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'ebd78-pmtk004a.jpg', '74d1c-pmtk004b.jpg', '405b7-pmtk004t.jpg', 3, 3, 1, 34, 12),
(17, 'Pepe-Jeans-Stripe-Shirt', 'Pepe Jeans Stripe Shirt', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '57e1d-pmtk001a.jpg', '41715-pmtk001b.jpg', '', 4, 5, 1, 76, 10),
(18, 'Fendi-Blue-Neck-Shirt', 'Fendi Blue Neck Shirt', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'be78d-pms004a.jpg', 'ee0c7-pms004b.jpg', 'e84e4-pms004t.jpg', 7, 8, 1, 21, 32),
(19, 'Gucci-White-Sleeve-Shirt', 'Gucci White Sleeve Shirt', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '04776-pms000a.jpg', 'ef015-pms000b.jpg', 'bd7a2-pms000t.jpg', 1, 5, 1, 3, 32),
(20, 'CK-White-Heisen-Sweater', 'CK White Heisen Sweater', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'b2890-pmtk000a.jpg', 'd513f-pmtk000t.jpg', '', 5, 3, 1, 32, 23),
(21, 'DKNY-Red-Neck-Shirt', 'DKNY Red Neck Shirt', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'ea72e-mpd006t.jpg', '02090-pms003a.jpg', '', 6, 5, 1, 76, 19),
(22, 'Fendi-Navy-Front-Jacket', 'Fendi Navy Front Jacket', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'd52bb-pmtk005b.jpg', '93d69-pmtk005t.jpg', '', 7, 9, 1, 67, 21),
(23, 'Moschino-Shell-Viol-Shirt', 'Moschino Shell Viol Shirt', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'ee72c-1.jpg', 'a35ee-1_2.jpg', '', 3, 8, 1, 31, 9),
(24, 'Pepe-Jeans-Blue-Shirt', 'Pepe Jeans Blue Shirt', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '1d60f-2.jpg', '43f35-2_2.jpg', '', 4, 8, 1, 71, 27),
(25, 'Moschino-White-Jacket', 'Moschino White Jacket', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '1ddb2-9.jpg', '88519-9_2.jpg', '', 3, 3, 1, 30, 23),
(26, 'Gucci-Fine-Sweaters', 'Gucci Fine Sweaters', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '6201a-8.jpg', '646e6-8_2.jpg', '', 1, 3, 1, 34, 16),
(27, 'Fendi-Black-Stripe-Shirt', 'Fendi Black Stripe Shirt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '9fee1-7_2.jpg', '5a8ba-7.jpg', '', 7, 5, 1, 23, 19),
(28, 'CK-Blue-Nautical-Shirt', 'CK Blue Nautical Shirt', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '68d00-4.jpg', '093a2-4_2.jpg', '', 5, 6, 1, 67, 37),
(29, 'Dior-White-Shirt', 'Dior White Shirt', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '727db-5.jpg', '36cb0-5_2.jpg', '', 2, 8, 1, 21, 22),
(30, 'DKNY-Blue-Sleeve-Shirt ', 'DKNY Blue Sleeve Shirt ', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '2bf67-6.jpg', '97b6b-6_2.jpg', '', 6, 8, 1, 6, 27),
(31, 'CK-Jeans-Mid-Wash', 'CK Jeans Mid Wash', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'de5e1-image1.jpg', '277fa-image2.jpg', 'b9e23-image3.jpg', 5, 6, 1, 76, 35),
(32, 'DKNY-White-Lapell-Blazer', 'DKNY White Lapell Blazer', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '11f4f-image1xxl.jpg', 'ae5f0-image2xxl.jpg', '70794-image4xxl.jpg', 6, 7, 1, 43, 56),
(36, 'Moschino-Red-Jacket', 'Moschino Red Jacket', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.&gt;</p>\r\n', '481c6-m0.jpg', '5ca87-m1.jpg', 'd394f-m2.jpg', 3, 9, 1, 60, 31),
(37, 'CK-Violet-Jacket-Arc', 'CK Violet Jacket Arc', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '429a3-image1xxl-3-.jpg', '48fc8-image2xxl-3-.jpg', '', 5, 8, 1, 32, 101),
(38, 'Fendi-Blue-Jacket ', 'Fendi Blue Jacket ', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'edcd0-image1xxl-5-.jpg', '62db1-image2xxl-5-.jpg', '1a69c-image3xxl-4-.jpg', 7, 9, 1, 41, 38),
(39, 'Pepe-Jeans-Violet-Blazer', 'Pepe Jeans Violet Blazer', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'be3aa-image11.jpg', 'ba959-image4xxl-1-.jpg', 'ccb74-image2xxl-7-.jpg', 4, 7, 1, 2, 108),
(40, 'Pepe-Jeans-Vintage-1969', 'Pepe Jeans Vintage 1969', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '742e0-image1xxl-7-.jpg', 'a8337-image2xxl-8-.jpg', 'cf60e-image4xxl-2-.jpg', 4, 6, 1, 55, 34),
(41, 'Moschino-Blue-Sweater', 'Moschin Blue Sweater', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '086c2-a1.jpg', '929fb-a2.jpg', 'c5e8e-a3.jpg', 3, 3, 1, 11, 11),
(42, 'Fendi-Tuxedo-Blazer', 'Fendi Tuxedo Blazer', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '729d0-b1.jpg', 'dae7a-b3.jpg', 'cd9f8-b2.jpg', 7, 7, 1, 1, 103),
(43, 'CK-Violet-Blazer', 'CK Violet Blazer', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '0455e-c1.jpg', '94765-c3.jpg', 'c3d77-c2.jpg', 5, 7, 1, 5, 108),
(44, 'Dior-Black-Shirt-Stripe', 'Dior Black Shirt Stripe', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', '39915-v1.jpg', '9b7f8-v2.jpg', '1f9e4-v3.jpg', 2, 5, 1, 53, 6),
(45, 'Fendi-Red-T-Shirt', 'Fendi Red T-Shirt', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n', 'c2ae6-n1.jpg', 'c5a0d-n2.jpg', '08ec9-n3.jpg', 7, 5, 1, 64, 5),
(46, 'DKNY-Black-Jacket', 'DKNY Black Jacket', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.\r\n', '7039c-image1xxl-6-.jpg', 'c3329-image4xxl-3-.jpg', '', 6, 9, 1, 23, 85),
(47, 'Dior-Blue-Women-Wrap', 'Dior Blue Women Wrap', '<p>\r\n	Nice blue stylish wrap from famous brand Dior</p>\r\n', '3c47b-pwt001a_1.jpg', '5f9ad-pwt001b.jpg', 'd808a-pwt001t.jpg', 5, 10, 2, 11, 89),
(48, 'CK-Nice-Women-Blue-Wrap', 'CK Nice Women Blue Wrap', '<p>\r\n	K Nice Women Blue Wrap.&nbsp;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>\r\n', '53b38-wsd013a.jpg', '9d808-wsd013b.jpg', '6a8b5-wsd013t.jpg', 5, 10, 2, 5, 43),
(49, 'CK-Wrap-Women-Blue ', 'CK Wrap Women Blue ', '<p>\r\n	Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>\r\n', 'df290-wbk003a.jpg', '18b18-wbk003b.jpg', 'be567-wbk003t.jpg', 5, 10, 2, 6, 32),
(50, 'CK-Women-Wrap', 'CK Women Wrap', '<p>\r\n	Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>\r\n', '942b2-pwd000a.jpg', '31ccc-pwd000b.jpg', '840c9-pwd000t.jpg', 5, 10, 2, 23, 78),
(51, 'CL-Light-Blue-Wrap', 'CL Light Blue Wrap', '<p>\r\n	Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>\r\n', '0bc05-pwt000a.jpg', 'e4bc3-pwt000b.jpg', 'b9cf1-pwt000t.jpg', 5, 10, 2, 3, 39),
(52, 'CK-Wrap-Blue-Jeans', 'CK Wrap Blue Jeans', '<p>\r\n	Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>\r\n', 'e8086-wpd005a.jpg', 'c5317-wpd005b.jpg', '', 5, 10, 2, 45, 30),
(53, 'CK-Blue-Wrap-Shirt', 'CK Blue Wrap Shirt', '<p>\r\n	Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>\r\n', '0c2d2-wbk012c-royal-blue.jpg', 'c6269-wbk012d-pink.jpg', '', 5, 10, 2, 23, 56),
(54, 'Dior-White-Mini', 'Dior White Mini', '<p style="box-sizing: border-box; margin: 0px 0px 20px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">\r\n	Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.</p>\r\n', '35f37-wsd008a.jpg', 'c45b2-wsd008b.jpg', '2282b-wsd008t.jpg', 2, 11, 2, 20, 34),
(55, 'DKNY-Black-Mini', 'DKNY Black Mini', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>\r\n', 'a88c7-pwd001a.jpg', 'd10c8-pwd001b.jpg', '78a4b-pwd001t.jpg', 6, 11, 2, 4, 67),
(56, 'Gucci-White-Mini', 'Gucci White Mini', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat.</span></p>\r\n', 'a1fe9-pwd002a.jpg', '7e425-pwd002b.jpg', '2defc-pwd002t.jpg', 1, 11, 2, 13, 22),
(57, 'Fendi-Brown-Mini', 'Fendi Brown Mini', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat.</span></p>\r\n', '27081-pwt004a.jpg', '01f42-pwt004b.jpg', '3f214-pwt004t.jpg', 7, 11, 2, 19, 14),
(58, 'Pepe-Jeans-Black-Mini', 'Pepe Jeans Black Mini', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat.</span></p>\r\n', 'e93d3-pwt003a.jpg', '9002f-pwt003t.jpg', '', 4, 11, 2, 34, 12),
(59, 'Moschino-Brown-Mini', 'Moschino Brown Mini', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat.</span></p>\r\n', '0122b-wsd000t.jpg', '9e31b-wsd000a.jpg', '64625-wsd000b.jpg', 3, 11, 2, 32, 21),
(62, 'CK-White-Pleated-Top', 'CK White Pleated Top', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px; line-height: 22px;">Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral. Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral.</span></p>\r\n', '53103-11000876_4923878_480.jpg', '6df9e-11000876_4923882_480.jpg', '25079-11000876_4923876_480.jpg', 5, 15, 2, 45, 23),
(63, 'Dior-Brown-Tops', 'Dior Brown Tops', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px; line-height: 22px;">Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral. Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral.</span></p>\r\n', '832bd-11087120_5289707_480.jpg', '554fe-11087120_5289711_480.jpg', 'd44ce-11087120_5289701_480.jpg', 2, 15, 2, 32, 45),
(64, 'Gucci-Black-Top', 'Gucci Black Top', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px; line-height: 22px;">Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral. Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90&prime;s vice trust fund gastropub gentrify retro marfa viral</span></p>\r\n', '2b287-image2xxl-1-.jpg', '40749-image3xxl.jpg', '78689-image4xxl-1-.jpg', 1, 15, 2, 3, 27),
(65, 'Moschino-Red-Top', 'Moschino Red Top', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.</span></p>\r\n', 'bc43c-image1xxl.jpg', '967a0-image2xxl.jpg', '21951-image4xxl.jpg', 3, 15, 2, 9, 34),
(66, 'DKNY-Black-Crop-Top', 'DKNY Black Crop Top', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.</span></p>\r\n', 'ee456-image1xxl-1-.jpg', '294b5-image2xxl-2-.jpg', '4a8a8-image4xxl-2-.jpg', 6, 15, 2, 18, 20),
(67, 'Pepe-Jeans-Mini', 'Pepe Jeans Mini', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '6e71c-image1xxl-2-.jpg', '759f6-image2xxl-3-.jpg', '0a402-image4xxl-3-.jpg', 4, 11, 2, 10, 16),
(68, 'Fendi-Red-Top', 'Fendi Red Top', 'Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat.\r\n', '547c8-image1xxl-4-.jpg', 'd3fdb-image2xxl-4-.jpg', 'ec72c-image4xxl-5-.jpg', 7, 15, 2, 2, 12),
(69, 'CK-Graphic-Top', 'CK Graphic Top', '<p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; line-height: 18px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque.</span></p>\r\n', '5ded8-image1xxl-5-.jpg', '372d5-image2xxl-5-.jpg', '74840-image4xxl-6-.jpg', 5, 15, 2, 8, 9),
(70, 'Pepe-Green-Shirt', 'Pepe Green Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt rhoncus malesuada. Cras consequat pharetra accumsan. Vivamus condimentum nibh sapien, eget lobortis libero feugiat ultricies. Curabitur ac libero tempus, congue magna sit amet, hendrerit tellus. Curabitur laoreet mattis maximus. In egestas ex in neque molestie, at lobortis odio luctus. Cras porta arcu vel mi commodo sodales. Mauris porttitor ante orci, id gravida lorem rhoncus nec. Praesent dapibus sapien a lacus egestas, vitae dapibus nibh dictum. Integer vel mauris diam. Mauris eleifend pulvinar augue. Mauris sollicitudin ligula id mattis condimentum. Duis ac tristique est. Integer facilisis, diam nec tempor congue, leo massa pulvinar purus, interdum laoreet nibh sem sed felis. Fusce tristique cursus urna a bibendum.', '2f92d-green.jpg', '', '', 4, 5, 1, 28, 7),
(79, 'Gucci-Black-Top', 'Gucci Black Top', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat faucibus sollicitudin. Sed nec fringilla nibh. Sed maximus finibus purus, eu volutpat arcu aliquet sit amet. Sed cursus ipsum sit amet elit sagittis, ac faucibus libero ultricies. In tempor velit vel dictum rhoncus. Morbi in ante commodo, condimentum felis in, lobortis ante. Praesent vitae magna ultricies, rutrum lorem et, iaculis nunc. Curabitur finibus neque neque, at consectetur tellus tristique ac. Praesent eu sollicitudin magna, in placerat nisi.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat faucibus sollicitudin. Sed nec fringilla nibh. Sed maximus finibus purus, eu volutpat arcu aliquet sit amet.', '6e71c-image1xxl-2-.jpg', '', '', 1, 15, 2, 8, 11),
(80, 'DKNY-Green-Shirt', 'DKNY Green Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elementum nibh nulla, eget gravida libero venenatis ac. Praesent sit amet metus cursus, ultricies ligula ut, sollicitudin libero. Phasellus sagittis posuere nisl sit amet eleifend. Ut nec metus feugiat, mollis ante vel, auctor orci. Phasellus sit amet vestibulum tortor. Praesent dignissim magna ut arcu ornare, a fringilla ipsum ultrices. Integer eros dolor, volutpat eget orci viverra, suscipit rhoncus arcu. Phasellus bibendum non turpis nec cursus. Pellentesque fringilla venenatis justo, ac pretium enim malesuada sit amet.\r\nNulla semper metus sit amet suscipit pellentesque. Maecenas ultrices tempor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec feugiat sollicitudin nibh, vel sollicitudin nulla elementum quis.', '2bf67-6.jpg', '', '', 6, 5, 1, 20, 25);

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE IF NOT EXISTS `product_size` (
`id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`) VALUES
(1, 2, 3),
(2, 2, 1),
(3, 1, 2),
(4, 1, 6),
(5, 1, 7),
(6, 3, 4),
(7, 3, 3),
(8, 3, 1),
(9, 4, 3),
(10, 4, 5),
(11, 2, 6),
(12, 5, 6),
(13, 5, 7),
(14, 6, 3),
(15, 6, 1),
(16, 6, 5),
(17, 7, 4),
(18, 7, 1),
(19, 7, 2),
(20, 8, 4),
(21, 8, 6),
(22, 8, 7),
(24, 10, 4),
(25, 10, 1),
(26, 10, 5),
(27, 11, 6),
(28, 12, 4),
(29, 12, 6),
(30, 13, 5),
(31, 13, 6),
(32, 15, 4),
(33, 15, 2),
(34, 16, 3),
(35, 16, 5),
(36, 16, 6),
(37, 17, 4),
(38, 18, 6),
(39, 18, 7),
(40, 19, 4),
(41, 19, 3),
(42, 19, 1),
(43, 20, 3),
(44, 20, 1),
(45, 20, 6),
(46, 21, 1),
(47, 21, 2),
(48, 22, 3),
(49, 22, 2),
(50, 22, 7),
(51, 23, 4),
(52, 23, 3),
(53, 23, 2),
(54, 24, 6),
(55, 25, 6),
(56, 26, 6),
(57, 26, 7),
(58, 27, 4),
(59, 27, 5),
(60, 27, 6),
(61, 28, 4),
(62, 29, 3),
(63, 29, 2),
(64, 30, 6),
(65, 30, 7),
(66, 31, 5),
(67, 31, 6),
(68, 32, 3),
(69, 32, 5),
(71, 36, 5),
(72, 36, 6),
(73, 36, 7),
(74, 37, 4),
(75, 37, 3),
(76, 38, 5),
(77, 38, 6),
(79, 39, 5),
(80, 40, 5),
(81, 41, 4),
(82, 41, 6),
(83, 42, 6),
(84, 43, 6),
(85, 44, 6),
(86, 44, 7),
(87, 45, 4),
(88, 45, 6),
(89, 46, 3),
(90, 46, 6),
(91, 47, 3),
(92, 47, 1),
(93, 47, 6),
(94, 48, 4),
(95, 48, 3),
(96, 48, 1),
(97, 49, 3),
(98, 49, 1),
(99, 50, 1),
(100, 51, 3),
(101, 52, 4),
(102, 52, 5),
(103, 53, 3),
(104, 54, 3),
(105, 54, 1),
(106, 54, 2),
(107, 55, 5),
(108, 56, 4),
(109, 56, 3),
(110, 56, 5),
(111, 57, 3),
(112, 57, 1),
(113, 57, 6),
(114, 58, 4),
(115, 58, 3),
(116, 58, 2),
(117, 58, 6),
(118, 59, 4),
(119, 59, 3),
(120, 59, 1),
(121, 62, 3),
(122, 62, 1),
(123, 62, 5),
(124, 63, 4),
(125, 63, 1),
(126, 63, 5),
(127, 64, 4),
(128, 64, 3),
(129, 64, 1),
(130, 64, 5),
(131, 65, 4),
(132, 65, 3),
(133, 65, 2),
(134, 66, 4),
(135, 66, 3),
(136, 66, 5),
(137, 67, 4),
(138, 67, 1),
(139, 67, 2),
(140, 68, 3),
(141, 68, 5),
(142, 68, 2),
(145, 70, 1),
(146, 70, 5),
(147, 70, 7),
(154, 69, 3),
(155, 69, 5),
(156, 69, 7),
(161, 9, 4),
(162, 9, 6),
(163, 9, 7),
(172, 79, 1),
(173, 79, 2),
(174, 80, 1),
(175, 80, 4),
(176, 80, 5);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'adminrole', 1, '2016-01-03 11:05:22', '2016-01-03 11:05:22'),
(2, 'User', 'user', 'userrole', 2, '2016-01-03 11:07:22', '2016-01-03 11:07:22'),
(3, 'Editor', 'editor', 'editors', 3, '2016-04-25 04:16:31', '2016-04-25 04:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
`id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2016-01-03 11:05:38', '2016-01-03 11:05:38'),
(2, 2, 2, '2016-01-03 11:07:31', '2016-01-03 11:07:31'),
(3, 2, 4, '2016-04-25 04:17:04', '2016-04-25 04:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `keyword` longtext NOT NULL,
  `description` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `keyword`, `description`) VALUES
(1, 'EShop eCommerce CMS', 'CMS, eCommerce, Bootstrap,Template, Theme, Responsive, Fluid, Retina', 'EShop eCommerce CMS');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE IF NOT EXISTS `shippings` (
`id` int(11) NOT NULL,
  `method` varchar(32) NOT NULL,
  `img` varchar(32) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `method`, `img`, `rate`) VALUES
(1, 'United States Postal Service', 'standart_post.jpg', 15),
(2, 'UPS', 'excluseve_post.jpg', 20),
(3, 'DHL', 'vip_post.jpg', 10),
(4, 'FedEx', 'premium_post.jpg', 35);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE IF NOT EXISTS `sizes` (
`id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `size` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size_id`, `size`) VALUES
(1, 1, 'S'),
(2, 2, 'XS'),
(3, 3, 'M'),
(4, 4, 'L'),
(5, 5, 'XL'),
(6, 6, 'XXL'),
(7, 7, 'XXXL');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE IF NOT EXISTS `taxes` (
`id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `code` varchar(32) NOT NULL,
  `discount` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `name`, `code`, `discount`) VALUES
(1, '20%', 'TAB4680', '20'),
(2, 'VAT', 'VAT', '10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tihomir', 'ui-zac.jpg', 'raylight75@gmail.com', '$2y$10$b17mr2swLgWrdJ2Mka6Ilegy0.kJPBgE1R/b1Y7Bsnc5VVBCDL.Rq', 'GEmCMaSz9rARPcgFC4wPoNiEMehivLIxBIoB4XxigLT0S7LmbRaTgisSf0xg', '2016-01-03 08:48:36', '2016-05-07 11:25:25'),
(2, 'Ivan', 'ui-sherman.jpg', 'tblajev@yahoo.com', '$2y$10$uQSDi6zBHxVU83adaZHjFOHqFAQWHZSPvNl6.R6EuOcRa30HlcUIi', 'IBaTJj7CvuXIGcypuCewd43oKWSJG6FbGAYOx4WhRIivswUHd3JHqgBpMvQY', '2016-01-03 10:58:24', '2016-05-07 07:11:28'),
(4, 'Ana', 'avatar-ani.jpg', 'ana.blajeva@abv.bg', '$2y$10$EDFjGgQ/Q8i00mrbXMU5VOIYeS/pfwI3iZubj4v0yuYJB4NjrdEwi', 'HReglPsLOlYpKyfV39bNex2YFm9fSvbixU3m1HNO6f090uplbA1JU9PfCX6E', '2016-04-19 06:02:27', '2016-05-07 16:31:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bl_cat`
--
ALTER TABLE `bl_cat`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `bl_tag`
--
ALTER TABLE `bl_tag`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
 ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cat_id`), ADD KEY `fk_categories_categories_idx` (`parent_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_productcolour_colour_idx` (`color_id`), ADD KEY `fk_productcolour_products_idx` (`product_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_tmp`
--
ALTER TABLE `images_tmp`
 ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_orders_customers_idx` (`user_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
 ADD PRIMARY KEY (`id`), ADD KEY `permission_role_permission_id_index` (`permission_id`), ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
 ADD PRIMARY KEY (`id`), ADD KEY `permission_user_permission_id_index` (`permission_id`), ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`), ADD UNIQUE KEY `post_id` (`post_id`), ADD KEY `fk_posts_users_idx` (`user_id`), ADD KEY `fk_posts_comments_idx` (`post_id`);

--
-- Indexes for table `productimg_tmp`
--
ALTER TABLE `productimg_tmp`
 ADD KEY `fk_images_products_idx` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`), ADD KEY `fk_products_brand_idx` (`brand_id`), ADD KEY `fk_products_categories_idx` (`cat_id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_productsize_size_idx` (`size_id`), ADD KEY `fk_productsize_products1_idx` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
 ADD PRIMARY KEY (`id`), ADD KEY `role_user_role_id_index` (`role_id`), ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `color_product`
--
ALTER TABLE `color_product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `images_tmp`
--
ALTER TABLE `images_tmp`
MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=177;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `productimg_tmp`
--
ALTER TABLE `productimg_tmp`
ADD CONSTRAINT `fk_images_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `fk_products_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_products_categories` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_size`
--
ALTER TABLE `product_size`
ADD CONSTRAINT `product_size_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
