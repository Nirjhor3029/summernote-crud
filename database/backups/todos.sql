-- phpMyAdmin SQL Dump
-- version 5.2.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2022 at 08:43 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `editor_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `title`, `content`, `created_by`, `created_at`, `updated_at`) VALUES
(5, 'swds', 'dsdsd', NULL, '2022-11-12 12:55:34', '2022-11-12 12:55:34'),
(6, 'sfdgsg', 'sgfsdg', NULL, '2022-11-12 12:55:40', '2022-11-12 12:55:40'),
(7, 'sfdgsg', 'sgfsdg', NULL, '2022-11-12 12:56:07', '2022-11-12 12:56:07'),
(10, 'test', '<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><u>Hello this is new\r\ncontent</u></p><hr><p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><u><o:p></o:p></u></p>\r\n\r\n<table class=\"MsoTableGrid\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-width: initial; border-style: none;\">\r\n <tbody><tr>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.85pt; border-width: 1pt; border-style: solid; border-color: windowtext; background: rgb(127, 127, 127); padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><b>Name<o:p></o:p></b></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.85pt; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left-width: initial; border-left-style: none; background: rgb(127, 127, 127); padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><b>Title<o:p></o:p></b></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.9pt; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left-width: initial; border-left-style: none; background: rgb(127, 127, 127); padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><b>number<o:p></o:p></b></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.9pt; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left-width: initial; border-left-style: none; background: rgb(127, 127, 127); padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><b>&nbsp;</b></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.85pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top-width: initial; border-top-style: none; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\">Nirjhor<o:p></o:p></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.85pt; border-top-width: initial; border-style: none solid solid none; border-left-width: initial; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\">Nirjhor<o:p></o:p></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.9pt; border-top-width: initial; border-style: none solid solid none; border-left-width: initial; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\">0168526236<o:p></o:p></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.9pt; border-top-width: initial; border-style: none solid solid none; border-left-width: initial; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><o:p>&nbsp;</o:p></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.85pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top-width: initial; border-top-style: none; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><o:p>&nbsp;</o:p></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.85pt; border-top-width: initial; border-style: none solid solid none; border-left-width: initial; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><o:p>&nbsp;</o:p></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.9pt; border-top-width: initial; border-style: none solid solid none; border-left-width: initial; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><o:p>&nbsp;</o:p></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.9pt; border-top-width: initial; border-style: none solid solid none; border-left-width: initial; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><o:p>&nbsp;</o:p></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.85pt; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-top-width: initial; border-top-style: none; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><o:p>&nbsp;</o:p></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.85pt; border-top-width: initial; border-style: none solid solid none; border-left-width: initial; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><o:p>&nbsp;</o:p></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.9pt; border-top-width: initial; border-style: none solid solid none; border-left-width: initial; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><o:p>&nbsp;</o:p></p>\r\n  </td>\r\n  <td width=\"156\" valign=\"top\" style=\"width: 116.9pt; border-top-width: initial; border-style: none solid solid none; border-left-width: initial; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><o:p>&nbsp;</o:p></p>\r\n  </td>\r\n </tr>\r\n</tbody></table>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>', NULL, '2022-11-12 14:38:53', '2022-11-12 14:38:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
