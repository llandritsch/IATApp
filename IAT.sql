-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 03, 2020 at 06:31 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `iceage`
--

-- --------------------------------------------------------

--
-- Table structure for table `segmentinfo`
--

CREATE TABLE `segmentinfo` (
  `ID` int(11) NOT NULL,
  `county` varchar(45) NOT NULL,
  `SegmentName` varchar(45) NOT NULL,
  `Distance` double NOT NULL,
  `ElevationGrade` int(11) NOT NULL,
  `TechnicalGrade` int(11) NOT NULL,
  `WaterAvailable` int(11) NOT NULL,
  `imageName` varchar(100) NOT NULL,
  `secondaryImageName` varchar(100) DEFAULT NULL,
  `tertiaryImageName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `segmentinfo`
--

INSERT INTO `segmentinfo` (`ID`, `county`, `SegmentName`, `Distance`, `ElevationGrade`, `TechnicalGrade`, `WaterAvailable`, `imageName`, `secondaryImageName`, `tertiaryImageName`) VALUES
(1, 'Polk & Burnett', 'St. Croix Falls', 9, 4, 3, 1, 'map1f.png', NULL, NULL),
(2, 'Polk & Burnett', 'Connecting (River Rd. to 160th Ave)', 4.5, 0, 0, 0, 'map1f.png', NULL, NULL),
(3, 'Polk & Burnett', 'Gandy Dancer', 15.5, 1, 1, 1, 'map1f.png', 'map2f.png', 'map3f.png'),
(4, 'Polk & Burnett', 'Trade River', 4.3, 2, 2, 1, 'map3f.png', NULL, NULL),
(5, 'Polk & Burnett', 'Straight Lake', 3.6, 2, 2, 1, 'map3f.png', NULL, NULL),
(6, 'Polk & Burnett', 'Connecting (100th St. to 270th Ave.)', 0.8, 0, 0, 0, 'map3f.png', 'map4f.png', NULL),
(7, 'Polk & Burnett', 'Straight River', 3.4, 3, 2, 1, 'map3f.png', 'map4f.png', NULL),
(8, 'Polk & Burnett', 'Pine Lake', 2.9, 2, 2, 0, 'map4f.png', NULL, NULL),
(9, 'Polk & Burnett', 'Connecting (70th - 270th) ', 0.7, 0, 0, 0, 'map4f.png', NULL, NULL),
(10, 'Polk & Burnett', 'McKenzie Creek', 9.4, 4, 3, 1, 'map4f.png', 'map5f.png', NULL),
(11, 'Polk & Burnett', 'Indian Creek', 5.4, 3, 3, 1, 'map5f.png', NULL, NULL),
(12, 'Polk & Burnett', 'Sand Creek', 6, 3, 3, 1, 'map5f.png', 'map6f.png', NULL),
(13, 'Barron & Washburn', 'Timberland Hills', 10.9, 3, 2, 1, 'map6f.png', NULL, NULL),
(14, 'Barron & Washburn', 'Connecting (Leach Lake Rd. - Pershing Rd.)', 2.5, 0, 0, 0, 'map6f.png', 'map7f.png', NULL),
(15, 'Barron & Washburn', 'Grassy Lake', 8.5, 2, 4, 1, 'map7f.png', 'map8f.png', NULL),
(16, 'Barron & Washburn', 'Bear Lake', 5.4, 3, 3, 1, 'map7f.png', 'map8f.png', NULL),
(17, 'Barron & Washburn', 'Connecting (16th St CTH-VV to CTH-SS)', 5.7, 0, 0, 0, 'map8f.png', NULL, NULL),
(18, 'Barron & Washburn', 'Tuscobia', 11.2, 1, 1, 1, 'map8f.png', 'map9f.png', 'map10f.png'),
(19, 'Barron & Washburn', 'Connecting (Featherstone Rd - Finohorn Rd.)', 2.4, 0, 0, 0, 'map10f.png', NULL, NULL),
(20, 'Barron & Washburn', 'Hemlock Creek', 7, 3, 3, 1, 'map10f.png', 'map11f.png', NULL),
(21, 'Rusk', 'Northern Blue Hills', 9.6, 3, 4, 1, 'map10f.png', 'map11f.png', NULL),
(22, 'Rusk', 'Connecting (CTH-F - CTH-F at Yuker Rd.)', 1.2, 0, 0, 0, 'map11f.png', 'map12f.png', NULL),
(23, 'Rusk', 'Southern Blue Hills', 7.3, 3, 4, 1, 'map11f.png', 'map12f.png', NULL),
(24, 'Rusk', 'Connecting (Bass Lake Rd. - Round Lake Rd.)', 15.6, 0, 0, 0, 'map12f.png', 'map13f.png', NULL),
(25, 'Chippewa', 'Connecting Round Lake Rd. - 267th Ave.)', 5.7, 0, 0, 0, 'map13f.png', 'map14f.png', NULL),
(26, 'Chippewa', 'Chippewa Moraine', 7.6, 4, 2, 1, 'map14f.png', 'map15f.png', NULL),
(27, 'Chippewa', 'Harwood Lakes', 6.1, 4, 3, 1, 'map15f.png', 'map16f.png', NULL),
(28, 'Chippewa', 'Connecting (CTH-E - Moonridge Trail)', 1.8, 0, 0, 0, 'map16f.png', NULL, NULL),
(29, 'Chippewa', 'Firth Lake', 8.4, 3, 3, 1, 'map16f.png', NULL, NULL),
(30, 'Chippewa', 'Chippewa River', 1.9, 3, 2, 1, 'map16f.png', NULL, NULL),
(31, 'Chippewa', 'Connecting (CTH-Z - 165th Ave.)', 26.7, 0, 0, 0, 'map16f.png', 'map17f.png', 'map19f.png'),
(32, 'Taylor', 'Connecting (165th ave. - STH - 64)', 14.5, 0, 0, 0, 'map18f.png', 'map19f.png', 'map20f.png'),
(33, 'Taylor', 'Lake Eleven', 15.6, 3, 4, 1, 'map20f.png', 'map21f.png', 'map22f.png'),
(34, 'Taylor', 'Jerry Lake', 15.2, 3, 4, 1, 'map22f.png', 'map23f.png', NULL),
(35, 'Taylor', 'Mondeaux Esker', 11.7, 3, 5, 1, 'map23f.png', NULL, NULL),
(36, 'Taylor', 'Connecting (Shady Dr. - Fischer Creek Rd.)', 3.4, 0, 0, 0, 'map23f.png', 'map24f.png', NULL),
(37, 'Taylor', 'Pine Line', 0.9, 2, 2, 1, 'map24f.png', NULL, NULL),
(38, 'Taylor', 'Connecting (along STH - 13)', 0.6, 0, 0, 0, 'map24f.png', NULL, NULL),
(39, 'Taylor', 'East Lake', 6.4, 4, 4, 1, 'map24f.png', 'map25f.png', NULL),
(40, 'Taylor', 'Rib Lake', 5.5, 3, 3, 1, 'map25f.png', NULL, NULL),
(41, 'Taylor', 'Wood Lake', 13.4, 4, 5, 1, 'map25f.png', 'map26f.png', NULL),
(42, 'Lincoln', 'Timberland Wilderness', 3.9, 2, 4, 1, 'map26f.png', NULL, NULL),
(43, 'Lincoln', 'Connecting (along Tower Rd.)', 1.9, 0, 0, 0, 'map26f.png', NULL, NULL),
(44, 'Lincoln', 'Camp 27', 2.9, 3, 5, 1, 'map26f.png', 'map27f.png', NULL),
(45, 'Lincoln', 'Newwood', 6.9, 3, 5, 0, 'map26f.png', 'map27f.png', NULL),
(46, 'Lincoln', 'Connecting (along CTH-E)', 0.6, 0, 0, 0, 'map27f.png', NULL, NULL),
(47, 'Lincoln', 'Averill-Kelly Creek Wilderness', 4.9, 2, 5, 1, 'map27f.png', 'map28f.png', NULL),
(48, 'Lincoln', 'Turtle Rock', 5.1, 3, 5, 1, 'map28f.png', NULL, NULL),
(49, 'Lincoln', 'Connecting (CTH-E - STH-107)', 2.1, 0, 0, 0, 'map28f.png', NULL, NULL),
(50, 'Lincoln', 'Grandfather Falls', 4, 2, 3, 1, 'map28f.png', NULL, NULL),
(51, 'Lincoln', 'Connecting (STH-107 - Horn Lake Rd.)', 10.4, 0, 0, 0, 'map28f.png', 'map29f.png', NULL),
(52, 'Lincoln', 'Underdown', 6.3, 5, 3, 1, 'map29f.png', 'map30f.png', NULL),
(53, 'Lincoln', 'Connecting (Copper Lake Ave. - CTH J)', 1.2, 0, 0, 0, 'map29f.png', 'map30f.png', NULL),
(54, 'Lincoln', 'Alta Junction', 1.2, 2, 2, 1, 'map30f.png', NULL, NULL),
(55, 'Lincoln', 'Harrison Hills', 14.5, 5, 4, 1, 'map30f.png', 'map31f.png', NULL),
(56, 'Langlade', 'Parrish Hills', 12, 3, 5, 1, 'map31f.png', 'map32f.png', NULL),
(57, 'Langlade', 'Highland Lakes', 12.8, 2, 3, 1, 'map32f.png', 'map33f.png', NULL),
(58, 'Langlade', 'Summit Moraine', 12.2, 2, 3, 1, 'map33f.png', 'map34f.png', NULL),
(59, 'Langlade', 'Lumbercamp', 12, 2, 4, 0, 'map34f.png', 'map35f.png', NULL),
(60, 'Langlade', 'Kettlebowl', 9.9, 4, 4, 0, 'map35f.png', 'map36f.png', NULL),
(61, 'Langlade', 'Connecting (Oak Rd. - CTH HH)', 24.1, 0, 0, 0, 'map36f.png', 'map37f.png', 'map38f.png'),
(62, 'Marathon', 'Plover River', 5.9, 3, 3, 1, 'map39f.png', 'map40f.png', NULL),
(63, 'Marathon', 'Connecting (along Sportsman Dr.)', 3.5, 0, 0, 0, 'map39f.png', 'map40f.png', NULL),
(64, 'Marathon', 'Dells of the Eau Claire', 2.6, 3, 2, 1, 'map40f.png', NULL, NULL),
(65, 'Marathon', 'Thornapple Creek', 4, 2, 4, 1, 'map40f.png', 'map41f.png', NULL),
(66, 'Marathon', 'Ringle', 8.5, 3, 3, 1, 'map41f.png', 'map42f.png', NULL),
(67, 'Marathon', 'Connecting (Curtis Ave - CTH I)', 18.4, 0, 0, 0, 'map41f.png', 'map42f.png', 'map43f.png'),
(68, 'Portage & Waupaca', 'Connecting (CTH I - Sunset Lake Rd)', 10.1, 0, 0, 0, 'map43f.png', 'map44f.png', 'map45f.png'),
(69, 'Portage & Waupaca', 'New Hope - Iola Ski Hill', 5.6, 4, 3, 1, 'map45f.png', NULL, NULL),
(70, 'Portage & Waupaca', 'Connecting (CTH-MM - N. Foley Dr.)', 13.1, 0, 0, 0, 'map45f.png', 'map46f.png', 'map47f.png'),
(71, 'Portage & Waupaca', 'Skunk and Foster Lakes', 4.4, 3, 3, 1, 'map46f.png', 'map47f.png', NULL),
(72, 'Portage & Waupaca', 'Waupaca River', 4.9, 3, 2, 1, 'map47f.png', 'map48f.png', NULL),
(73, 'Portage & Waupaca', 'Hartman Creek', 5.6, 3, 2, 1, 'map47f.png', 'map48f.png', NULL),
(74, 'Portage & Waupaca', 'Emmons Creek', 2.6, 3, 2, 1, 'map48f.png', NULL, NULL),
(75, 'Portage & Waupaca', 'Connecting (2nd ave. to Heffron Rd.)', 5.4, 0, 0, 0, 'map48f.png', 'map49f.png', NULL),
(76, 'Waushara', 'Connecting (Heffron Rd - CTH O)', 9.2, 0, 0, 0, 'map49f.png', 'map50f.png', NULL),
(77, 'Waushara', 'Deerfield', 3.7, 3, 2, 1, 'map50f.png', NULL, NULL),
(78, 'Waushara', 'Connecting (CTH-O - Beechnut Dr.)', 1.8, 0, 0, 0, 'map50f.png', 'map51f.png', NULL),
(79, 'Waushara', 'Bohn Lake', 1.8, 2, 2, 1, 'map50f.png', 'map51f.png', NULL),
(80, 'Waushara', 'Connecting (along 9th Ave)', 1, 0, 0, 0, 'map50f.png', 'map51f.png', NULL),
(81, 'Waushara', 'Greenwood', 5, 3, 2, 0, 'map51f.png', NULL, NULL),
(82, 'Waushara', 'Connecting (Bow String Dr. - Buttercup Dr.)', 0.5, 0, 0, 0, 'map51f.png', 'map52f.png', NULL),
(83, 'Waushara', 'Mecan River', 7.5, 2, 2, 1, 'map51f.png', 'map52f.png', NULL),
(84, 'Waushara', 'Connecting (Cumberland Ave. - Cypress Rd.)', 2.3, 0, 0, 0, 'map52f.png', NULL, NULL),
(85, 'Waushara', 'Wedde Creek', 1.2, 2, 2, 1, 'map52f.png', NULL, NULL),
(86, 'Waushara', 'Connecting (along Czech Ave.)', 0.7, 0, 0, 0, 'map52f.png', 'map53f-E.png', NULL),
(87, 'Waushara', 'Chaffee Creek', 2.5, 2, 2, 1, 'map52f.png', 'map53f-E.png', NULL),
(88, 'Waushara', 'Connecting (IAT blue - CTH CC)', 2.9, 0, 0, 0, 'map52f.png', 'map53f-E.png', NULL),
(89, 'Waushara', 'Connecting (CTH CC - 4th Rd)', 1.1, 0, 0, 0, 'map52f.png', 'map53f-E.png', 'map54f-E.png'),
(90, 'Marquette', 'Connecting (4th Rd - CTH F)', 35.4, 0, 0, 0, 'map53f-E.png', 'map54f-E.png', 'map55f-E.png'),
(91, 'Marquette', 'John Muir Park', 1.8, 2, 1, 1, 'map56f-E.png', NULL, NULL),
(92, 'Marquette', 'Connecting (John Muir park Entrance - CTH-F)', 4.7, 0, 0, 0, 'map56f-E.png', 'map57f-E.png', NULL),
(93, 'Northern Columbia', 'Connecting (CTH F - STH 33)', 7.7, 0, 0, 0, 'map57f-E.png', NULL, NULL),
(94, 'Northern Columbia', 'Portage Canal', 3, 1, 2, 1, 'map57f-E.png', NULL, NULL),
(95, 'Northern Columbia', 'Connecting (STH 33 - Levee Rd)', 6.9, 0, 0, 0, 'map57f-E.png', 'map58f-E.png', 'map59f-E.png'),
(96, 'Sauk', 'Baraboo', 4, 2, 1, 1, '', NULL, NULL),
(97, 'Sauk', 'Connecting (Levee Rd - DTH DL)', 14.5, 0, 0, 0, 'map61f.png', NULL, NULL),
(98, 'Sauk', 'Sauk Point', 3.9, 3, 2, 1, 'map61f.png', NULL, NULL),
(99, 'Sauk', 'Devil\'s Lake', 10.9, 5, 3, 1, 'map61f.png', NULL, NULL),
(100, 'Sauk', 'Merrimac', 3.7, 2, 2, 1, 'map61f.png', 'map62f.png', NULL),
(101, 'Sauk', 'Connecting (Marsh Rd - Merrimac Ferry)', 1.5, 0, 0, 0, 'map61f.png', 'map62f.png', NULL),
(102, 'Sauk', 'Merrimac Ferry (Across Lake Wisconsin)', 0.5, 0, 0, 0, 'map62f.png', NULL, NULL),
(103, 'Southern Columbia', 'Gibraltar Rock', 4.8, 5, 2, 1, 'map62f.png', NULL, NULL),
(104, 'Southern Columbia', 'Connecting (CTH V - CTH J)', 2.3, 0, 0, 0, 'map62f.png', 'map63f.png', NULL),
(105, 'Southern Columbia', 'Fern Glen', 1.3, 4, 2, 0, 'map62f.png', 'map63f.png', NULL),
(106, 'Southern Columbia', 'Connecting (Bilkey Rd - Strangeway Ave.)', 2.4, 0, 0, 0, 'map62f.png', 'map63f.png', NULL),
(107, 'Southern Columbia', 'City of Lodi', 2.2, 2, 2, 1, 'map63f.png', NULL, NULL),
(108, 'Southern Columbia', 'Eastern Lodi Marsh', 3.1, 4, 2, 0, 'map63f.png', NULL, NULL),
(109, 'Southern Columbia', 'Lodi Marsh', 1.8, 3, 2, 1, 'map63f.png', NULL, NULL),
(110, 'Dane', 'Connecting (Field Rd - Ballweg Rd)', 7.8, 0, 0, 0, 'map63f.png', 'map64f.png', NULL),
(111, 'Dane', 'Springfield Hill', 1.6, 3, 2, 0, 'map64f.png', NULL, NULL),
(112, 'Dane', 'Connecting (Ballweg Rd - STH 19)', 2.6, 0, 0, 0, 'map64f.png', NULL, NULL),
(113, 'Dane', 'Indian Lake', 2.9, 3, 2, 1, 'map64f.png', NULL, NULL),
(114, 'Dane', 'Connecting (STH 19 - Pine Rd.)', 3.6, 0, 0, 0, 'map64f.png', NULL, NULL),
(115, 'Dane', 'Table Bluff', 4.8, 3, 2, 0, 'map64f.png', 'map65f.png', NULL),
(116, 'Dane', 'Connecting (Scheele Rd. - Hickory Hill St.)', 1.6, 0, 0, 0, 'map65f.png', NULL, NULL),
(117, 'Dane', 'Cross Plains', 9, 4, 2, 1, 'map65f.png', NULL, NULL),
(118, 'Dane', 'Connecting (Timber Ln - Ice Age Ln)', 2.8, 0, 0, 0, 'map65f.png', 'map66f.png', NULL),
(119, 'Dane', 'Valley View', 1.8, 3, 2, 0, 'map65f.png', 'map66f.png', NULL),
(120, 'Dane', 'Connecting (Mid Town Rd - Woods Rd)', 1.9, 0, 0, 0, 'map66f.png', NULL, NULL),
(121, 'Dane', 'Madison', 3, 3, 2, 1, 'map66f.png', NULL, NULL),
(122, 'Dane', 'Verona', 6.4, 3, 2, 1, 'map66f.png', 'map67f.png', NULL),
(123, 'Dane', 'Connecting (Wesner Rd - Purcell Rd)', 2.9, 0, 0, 0, 'map66f.png', 'map67f.png', NULL),
(124, 'Dane', 'Montrose', 7.5, 3, 2, 0, 'map67f.png', 'map68f.png', NULL),
(125, 'Dane', 'Brooklyn Wildlife', 3.3, 3, 2, 1, 'map67f.png', 'map68f.png', NULL),
(126, 'Green', 'Connecting (Hughes Rd - CTH W)', 3.8, 0, 0, 0, 'map68f.png', NULL, NULL),
(127, 'Green', 'Monticello', 6.5, 1, 1, 1, 'map68f.png', 'map69f.png', NULL),
(128, 'Green', 'Albany', 9.4, 1, 1, 1, 'map69f.png', 'map70f.png', NULL),
(129, 'Green', 'Connecting (Sugar River St Trail - Bump Rd)', 3, 0, 0, 0, 'map70f.png', 'map71f.png', 'map72f.png'),
(130, 'Rock', 'Connecting (Bump Rd - Arboretum parking area)', 31.1, 0, 0, 0, 'map71f.png', 'map72f.png', 'map73f.png'),
(131, 'Rock', 'Arbor Ridge', 2.1, 3, 2, 1, 'map73f.png', 'map74f.png', NULL),
(132, 'Rock', 'Devil\'s Staircase', 1.8, 3, 3, 1, 'map73f.png', 'map74f.png', NULL),
(133, 'Rock', 'Janesville', 10.3, 1, 1, 1, 'map74f.png', 'map75f.png', NULL),
(134, 'Rock', 'Janesville to Milton', 3.2, 1, 1, 0, 'map74f.png', 'map75f.png', NULL),
(135, 'Rock', 'Milton', 4.3, 1, 1, 1, 'map75f.png', 'map76f.png', NULL),
(136, 'Rock', 'Storrs Lake', 1.8, 2, 2, 1, 'map75f.png', 'map76f.png', NULL),
(137, 'Rock', 'Connecting (Bowers Lake Rd - County Line Rd)', 9.3, 0, 0, 0, 'map75f.png', 'map76f.png', 'map77f.png'),
(138, 'Walworth & Jefferson', 'Clover Valley', 1.6, 2, 2, 1, 'map77f.png', NULL, NULL),
(139, 'Walworth & Jefferson', 'Connecting (Island Rd - Clover Valley Rd)', 4.9, 0, 0, 0, 'map77f.png', 'map78f.png', NULL),
(140, 'Walworth & Jefferson', 'Whitewater Lake', 4.6, 3, 2, 1, 'map78f.png', 'map79f.png', NULL),
(141, 'Walworth & Jefferson', 'Blackhawk', 7, 3, 2, 1, 'map78f.png', 'map79f.png', NULL),
(142, 'Walworth & Jefferson', 'Blue Spring Lake', 7.1, 3, 2, 1, 'map79f.png', 'map80f.png', NULL),
(143, 'Waukesha', 'Stony Ridge', 3.1, 3, 2, 1, 'map80f.png', NULL, NULL),
(144, 'Waukesha', 'Eagle', 5.6, 3, 2, 1, 'map80f.png', NULL, NULL),
(145, 'Waukesha', 'Scuppernong', 5.6, 3, 2, 1, 'map80f.png', 'map81f.png', NULL),
(146, 'Waukesha', 'Connecting (CTH C - CTH D)', 1.1, 0, 0, 0, 'map81f.png', NULL, NULL),
(147, 'Waukesha', 'Waterville', 3.9, 2, 2, 1, 'map81f.png', NULL, NULL),
(148, 'Waukesha', 'Lapham Peak', 7.8, 4, 3, 1, 'map81f.png', 'map82f.png', NULL),
(149, 'Waukesha', 'Delafield', 3.2, 1, 1, 1, 'map82f.png', NULL, NULL),
(150, 'Waukesha', 'Hartland', 6.8, 2, 2, 1, 'map82f.png', 'map83f.png', NULL),
(151, 'Waukesha', 'Merton', 5.2, 1, 2, 1, 'map82f.png', 'map83f.png', NULL),
(152, 'Waukesha', 'Monches', 3.1, 3, 2, 1, 'map83f.png', NULL, NULL),
(153, 'Washington', 'Loew Lake', 4.9, 2, 3, 1, 'map83f.png', 'map84f.png', NULL),
(154, 'Washington', 'Connecting (Emerald Dr to Donegal Rd)', 1.2, 0, 0, 0, 'map84f.png', NULL, NULL),
(155, 'Washington', 'Holy Hill', 6.9, 3, 3, 1, 'map84f.png', NULL, NULL),
(156, 'Washington', 'Pike Lake', 3.3, 3, 2, 1, 'map84f.png', 'map85f.png', NULL),
(157, 'Washington', 'Slinger', 1.5, 2, 1, 1, 'map85f.png', NULL, NULL),
(158, 'Washington', 'Cedar Lakes', 2.8, 2, 2, 0, 'map85f.png', NULL, NULL),
(159, 'Washington', 'Connecting (CTH NN - Paradise Dr)', 5.4, 0, 0, 0, 'map85f.png', NULL, NULL),
(160, 'Washington', 'West Bend', 6.7, 3, 2, 1, 'map85f.png', 'map86f.png', NULL),
(161, 'Washington', 'Southern Kewaskum', 6.7, 3, 2, 1, 'map86f.png', NULL, NULL),
(162, 'Washington', 'Connecting (Wildwood Rd - Ridge Rd)', 2.2, 0, 0, 0, 'map86f.png', NULL, NULL),
(163, 'Washington', 'Kewaskum', 2.1, 3, 2, 0, 'map86f.png', NULL, NULL),
(164, 'Washington', 'Milwaukee River', 6.9, 4, 3, 1, 'map86f.png', 'map87f.png', NULL),
(165, 'Fond du Lac & Sheboygan', 'Milwaukee River -2', 4.3, 3, 2, 1, 'map87f.png', NULL, NULL),
(166, 'Fond du Lac & Sheboygan', 'Parnell', 13.9, 4, 3, 1, 'map87f.png', 'map88f.png', 'map89f.png'),
(167, 'Fond du Lac & Sheboygan', 'Greenbush', 8.7, 4, 3, 1, 'map89f.png', 'map90f.png', NULL),
(168, 'Fond du Lac & Sheboygan', 'Coneecting (CTH P - Garton Rd)', 4.4, 0, 0, 0, 'map89.png', 'map90f.png', NULL),
(169, 'Fond du Lac & Sheboygan', 'LaBudde Creek', 3.5, 3, 2, 1, 'map90f.png', NULL, NULL),
(170, 'Fond du Lac & Sheboygan', 'Connecting (CTH FF - Thine Rd)', 3.9, 0, 0, 0, 'map90f.png', NULL, NULL),
(171, 'Manitowoc', 'Connecting (Lax Chapel Rd - Walla Hi)', 1.4, 0, 0, 0, 'map91f.png', NULL, NULL),
(172, 'Manitowoc', 'Walli Hi', 2.3, 4, 3, 1, 'map91f.png', NULL, NULL),
(173, 'Manitowoc', 'Connecting (Mueller Rd - Rapids Rd)', 27.2, 0, 0, 0, 'map91f.png', 'map92f.png', 'map93f.png'),
(174, 'Manitowoc', 'City of Manitowoc', 7.5, 2, 1, 1, 'map95f.png', NULL, NULL),
(175, 'Manitowoc', 'Dunes', 2.7, 2, 2, 1, 'map95f.png', 'map96f.png', NULL),
(176, 'Manitowoc', 'City of Two Rivers', 3, 2, 1, 1, 'map95f.png', 'map96f.png', NULL),
(177, 'Manitowoc', 'Point Beach', 10, 2, 2, 1, 'map96f.png', NULL, NULL),
(178, 'Manitowoc', 'Connecting (Lake Shore Rd - CTH V)', 5.3, 0, 0, 0, 'map96f.png', 'map97f.png', NULL),
(179, 'Manitowoc', 'Mishicot', 2.9, 2, 3, 1, 'map97f.png', NULL, NULL),
(180, 'Manitowoc', 'Connecting (Princl Rd - Rockledge Rd)', 0.7, 0, 0, 0, 'map97f.png', NULL, NULL),
(181, 'Manitowoc', 'East Twin River', 1.4, 2, 3, 1, 'map97f.png', NULL, NULL),
(182, 'Manitowoc', 'Connecting (Hillview Rd - CTH B)', 5.8, 0, 0, 0, 'map97f.png', 'map98f.png', NULL),
(183, 'Manitowoc', 'Tisch Mills', 2.6, 2, 4, 1, 'map98f.png', NULL, NULL),
(184, 'Kewaunee & Door', 'Connecting (Nuclear Rd - Sunset Rd)', 25.3, 0, 0, 0, 'map98f.png', 'map99f.png', 'map100f.png'),
(185, 'Kewaunee & Door', 'Kewaunee River', 12.5, 1, 1, 1, 'map100f.png', 'map101f.png', NULL),
(186, 'Kewaunee & Door', 'Connecting (Miller St - Birch Rd)', 13.7, 0, 0, 0, 'map101f.png', 'map102f.png', NULL),
(187, 'Kewaunee & Door', 'Forestville', 9.8, 1, 1, 1, 'map102f.png', 'map103f.png', 'map104f.png'),
(188, 'Kewaunee & Door', 'Sturgeon Bay', 13.7, 2, 2, 1, 'map104f.png', 'map105f.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(45) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `UserName`, `Password`, `FirstName`, `LastName`, `Email`) VALUES
(16, 'Lisa', '$2y$10$7Qlwj0oMjfAFuTmY.jua/u.r/yB0kUsehgPB9NWNARfIF3UETXh.u', 'Lisa', 'Andritsch', 'email@email.com'),
(17, 'joel', '$2y$10$tdoox/ShNnKbfAex3BR90ugqbowH.CTaXHxcnbKRKhvcNSr05dwji', 'joel', 'joeljoel', 'joel@joel.com'),
(20, 'test', '$2y$10$xCfTdiYElPOKyB/ZWbppxuaHQj65qUK7XGWQr.8srjr/Tsrp5GnYG', 'Lisa', 'test', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `usersegments`
--

CREATE TABLE `usersegments` (
  `completedID` int(100) NOT NULL,
  `userID` int(100) NOT NULL,
  `segmentID` int(100) NOT NULL,
  `DateCompleted` date NOT NULL,
  `distance` int(100) DEFAULT NULL,
  `time` int(100) DEFAULT NULL,
  `Pace` double DEFAULT NULL,
  `elevationGain` int(100) DEFAULT NULL,
  `elevationLoss` int(100) DEFAULT NULL,
  `comments` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usersegments`
--

INSERT INTO `usersegments` (`completedID`, `userID`, `segmentID`, `DateCompleted`, `distance`, `time`, `Pace`, `elevationGain`, `elevationLoss`, `comments`) VALUES
(1, 20, 128, '2020-06-20', 3, 45, 8.35, 356, 345, 'these are comments'),
(2, 20, 45, '2020-07-23', 3, 45, 8.35, 356, 345, 'more comments'),
(3, 20, 1, '2020-06-20', 56, 45, 8.35, 356, 345, 'comments'),
(4, 20, 1, '2020-06-20', 23, 45, 8.35, 356, 345, 'More comments');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `segmentinfo`
--
ALTER TABLE `segmentinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usersegments`
--
ALTER TABLE `usersegments`
  ADD PRIMARY KEY (`completedID`),
  ADD KEY `segment` (`userID`,`segmentID`),
  ADD KEY `segmentFK` (`segmentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `segmentinfo`
--
ALTER TABLE `segmentinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usersegments`
--
ALTER TABLE `usersegments`
  MODIFY `completedID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usersegments`
--
ALTER TABLE `usersegments`
  ADD CONSTRAINT `segmentFK` FOREIGN KEY (`segmentID`) REFERENCES `segmentinfo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userFK` FOREIGN KEY (`userID`) REFERENCES `userinfo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
