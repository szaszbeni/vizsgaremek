-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Dec 05. 10:09
-- Kiszolgáló verziója: 10.4.6-MariaDB
-- PHP verzió: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `szb_registration`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `agroup_users`
--

CREATE TABLE `agroup_users` (
  `agroupid` int(11) NOT NULL,
  `auserid` int(11) NOT NULL,
  `added` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `conversation`
--

CREATE TABLE `conversation` (
  `cid` int(11) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `friends`
--

CREATE TABLE `friends` (
  `fid` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `groups`
--

CREATE TABLE `groups` (
  `gid` int(11) NOT NULL,
  `group_name` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `gcreated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `login`
--

CREATE TABLE `login` (
  `lid` int(250) NOT NULL,
  `ldate` datetime NOT NULL,
  `lip` varchar(48) COLLATE utf8_hungarian_ci NOT NULL,
  `lsession` varchar(8) COLLATE utf8_hungarian_ci NOT NULL,
  `luid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `login`
--

INSERT INTO `login` (`lid`, `ldate`, `lip`, `lsession`, `luid`) VALUES
(1, '0000-00-00 00:00:00', '', '', 0),
(2, '0000-00-00 00:00:00', '::1', 'lhbqf4f7', 24),
(3, '0000-00-00 00:00:00', '::1', 'lhbqf4f7', 24),
(4, '0000-00-00 00:00:00', '::1', 'j0pbups9', 24),
(5, '0000-00-00 00:00:00', '::1', 'j0pbups9', 26),
(6, '0000-00-00 00:00:00', '::1', 'j0pbups9', 26),
(7, '0000-00-00 00:00:00', '::1', 's49fndja', 24),
(8, '0000-00-00 00:00:00', '::1', 'elt54d9g', 24),
(9, '0000-00-00 00:00:00', '::1', 'elt54d9g', 24),
(10, '0000-00-00 00:00:00', '::1', 'lleepbi9', 24),
(11, '0000-00-00 00:00:00', '::1', '51ulpnnv', 24),
(12, '0000-00-00 00:00:00', '::1', 'ni90uoaj', 24),
(13, '0000-00-00 00:00:00', '::1', 'ni90uoaj', 24),
(14, '0000-00-00 00:00:00', '::1', 'ni90uoaj', 24),
(15, '0000-00-00 00:00:00', '::1', '8gvmd9la', 24),
(16, '0000-00-00 00:00:00', '::1', '8gvmd9la', 30),
(17, '0000-00-00 00:00:00', '::1', '8gvmd9la', 24),
(18, '0000-00-00 00:00:00', '::1', '8gvmd9la', 24),
(19, '0000-00-00 00:00:00', '::1', '1agdvhpa', 0),
(20, '0000-00-00 00:00:00', '::1', '1agdvhpa', 24),
(21, '0000-00-00 00:00:00', '::1', '9nv092am', 24),
(22, '0000-00-00 00:00:00', '::1', '9nv092am', 24),
(23, '0000-00-00 00:00:00', '::1', 'ne1olvv3', 24),
(24, '0000-00-00 00:00:00', '::1', 'ne1olvv3', 24),
(25, '0000-00-00 00:00:00', '::1', 'ne1olvv3', 24),
(26, '0000-00-00 00:00:00', '::1', 'ne1olvv3', 24),
(27, '0000-00-00 00:00:00', '::1', 'thlcr3l8', 24),
(28, '0000-00-00 00:00:00', '::1', 'thlcr3l8', 24),
(29, '0000-00-00 00:00:00', '::1', 'sl38ec8q', 24),
(30, '0000-00-00 00:00:00', '::1', 'sl38ec8q', 24),
(31, '0000-00-00 00:00:00', '::1', 'sl38ec8q', 24),
(32, '0000-00-00 00:00:00', '::1', 'sl38ec8q', 24),
(33, '0000-00-00 00:00:00', '::1', 'i6quuv2i', 24),
(34, '0000-00-00 00:00:00', '::1', 'i6quuv2i', 24),
(35, '0000-00-00 00:00:00', '::1', 'i6quuv2i', 24),
(36, '0000-00-00 00:00:00', '::1', 'i6quuv2i', 0),
(37, '0000-00-00 00:00:00', '::1', 'i6quuv2i', 0),
(38, '0000-00-00 00:00:00', '::1', 'i6quuv2i', 0),
(39, '0000-00-00 00:00:00', '::1', 'i6quuv2i', 0),
(40, '0000-00-00 00:00:00', '::1', 'i6quuv2i', 43),
(41, '0000-00-00 00:00:00', '::1', 'sliug3dq', 0),
(42, '0000-00-00 00:00:00', '::1', 'sliug3dq', 38);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `messages`
--

CREATE TABLE `messages` (
  `mid` int(11) NOT NULL,
  `msender_id` int(11) NOT NULL,
  `mreceiver_id` int(11) DEFAULT NULL,
  `mgroup_id` int(11) DEFAULT NULL,
  `message_text` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `note`
--

CREATE TABLE `note` (
  `nid` int(250) NOT NULL,
  `ndate` date NOT NULL,
  `nip` varchar(48) COLLATE utf8_hungarian_ci NOT NULL,
  `nsession` varchar(8) COLLATE utf8_hungarian_ci NOT NULL,
  `nuid` int(250) NOT NULL,
  `nurl` varchar(250) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `note`
--

INSERT INTO `note` (`nid`, `ndate`, `nip`, `nsession`, `nuid`, `nurl`) VALUES
(1, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/'),
(2, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(3, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(4, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(5, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(6, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(7, '2024-10-21', '::1', 'lhbqf4f7', 0, '/szaszbeni/vizsgaremek/'),
(8, '2024-10-21', '::1', 'lhbqf4f7', 0, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(9, '2024-10-21', '::1', 'lhbqf4f7', 0, '/szaszbeni/vizsgaremek/'),
(10, '2024-10-21', '::1', 'lhbqf4f7', 0, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(11, '2024-10-21', '::1', 'lhbqf4f7', 0, '/szaszbeni/vizsgaremek/?p=login'),
(12, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/'),
(13, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(14, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(15, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/'),
(16, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/'),
(17, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/'),
(18, '2024-10-21', '::1', 'lhbqf4f7', 24, '/szaszbeni/vizsgaremek/'),
(19, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/index.php'),
(20, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=login'),
(21, '2024-10-21', '::1', 'j0pbups9', 24, '/szaszbeni/vizsgaremek/'),
(22, '2024-10-21', '::1', 'j0pbups9', 24, '/szaszbeni/vizsgaremek/?p=jelszo_form.php'),
(23, '2024-10-21', '::1', 'j0pbups9', 26, '/szaszbeni/vizsgaremek/'),
(24, '2024-10-21', '::1', 'j0pbups9', 26, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(25, '2024-10-21', '::1', 'j0pbups9', 26, '/szaszbeni/vizsgaremek/'),
(26, '2024-10-21', '::1', 'j0pbups9', 26, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(27, '2024-10-21', '::1', 'j0pbups9', 26, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(28, '2024-10-21', '::1', 'j0pbups9', 26, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(29, '2024-10-21', '::1', 'j0pbups9', 26, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(30, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/'),
(31, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/'),
(32, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/'),
(33, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/'),
(34, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=login'),
(35, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/'),
(36, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=login'),
(37, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=login'),
(38, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=kezdo'),
(39, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=kezdo'),
(40, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=kezdo'),
(41, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=kezdo'),
(42, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=kezdo'),
(43, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=kezdo'),
(44, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=login'),
(45, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=login'),
(46, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=login'),
(47, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=login'),
(48, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=kezdo'),
(49, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=kezdo'),
(50, '2024-10-21', '::1', 'j0pbups9', 0, '/szaszbeni/vizsgaremek/?p=kezdo'),
(51, '2024-10-24', '::1', 's49fndja', 0, '/szaszbeni/vizsgaremek/index.php'),
(52, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/'),
(53, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/'),
(54, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/'),
(55, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(56, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/'),
(57, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/'),
(58, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/'),
(59, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/'),
(60, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/'),
(61, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/'),
(62, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(63, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(64, '2024-10-24', '::1', 's49fndja', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(65, '2024-11-04', '::1', 'elt54d9g', 0, '/szaszbeni/vizsgaremek/index.php'),
(66, '2024-11-04', '::1', 'elt54d9g', 24, '/szaszbeni/vizsgaremek/'),
(67, '2024-11-04', '::1', 'elt54d9g', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(68, '2024-11-04', '::1', 'elt54d9g', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(69, '2024-11-04', '::1', 'elt54d9g', 24, '/szaszbeni/vizsgaremek/'),
(70, '2024-11-04', '::1', 'elt54d9g', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(71, '2024-11-04', '::1', 'elt54d9g', 24, '/szaszbeni/vizsgaremek/'),
(72, '2024-11-07', '::1', 'lleepbi9', 0, '/szaszbeni/vizsgaremek/index.php'),
(73, '2024-11-07', '::1', 'lleepbi9', 0, '/szaszbeni/vizsgaremek/index.php'),
(74, '2024-11-07', '::1', 'lleepbi9', 24, '/szaszbeni/vizsgaremek/'),
(75, '2024-11-07', '::1', 'lleepbi9', 24, '/szaszbeni/vizsgaremek/'),
(76, '2024-11-07', '::1', 'lleepbi9', 24, '/szaszbeni/vizsgaremek/'),
(77, '2024-11-07', '::1', 'lleepbi9', 24, '/szaszbeni/vizsgaremek/'),
(78, '2024-11-07', '::1', 'lleepbi9', 24, '/szaszbeni/vizsgaremek/'),
(79, '2024-11-13', '::1', '51ulpnnv', 0, '/szaszbeni/vizsgaremek/index.php'),
(80, '2024-11-13', '::1', '51ulpnnv', 0, '/szaszbeni/vizsgaremek/?p=kezdo'),
(81, '2024-11-13', '::1', '51ulpnnv', 24, '/szaszbeni/vizsgaremek/'),
(82, '2024-11-13', '::1', '51ulpnnv', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(83, '2024-11-13', '::1', '51ulpnnv', 24, '/szaszbeni/vizsgaremek/'),
(84, '2024-11-13', '::1', '51ulpnnv', 24, '/szaszbeni/vizsgaremek/'),
(85, '2024-11-13', '::1', '51ulpnnv', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(86, '2024-11-13', '::1', '51ulpnnv', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(87, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(88, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(89, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(90, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(91, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(92, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(93, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(94, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(95, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(96, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(97, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(98, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(99, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(100, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(101, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(102, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(103, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(104, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(105, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(106, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(107, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(108, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(109, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(110, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(111, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(112, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(113, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(114, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(115, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(116, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(117, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(118, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(119, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(120, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(121, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(122, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(123, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(124, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(125, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(126, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(127, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(128, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(129, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(130, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(131, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(132, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(133, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(134, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(135, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(136, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(137, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(138, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(139, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(140, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(141, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(142, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(143, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(144, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(145, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(146, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(147, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(148, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(149, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(150, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(151, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(152, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(153, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(154, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(155, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(156, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(157, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(158, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(159, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(160, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(161, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(162, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(163, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(164, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(165, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(166, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(167, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(168, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(169, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(170, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(171, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(172, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(173, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(174, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(175, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(176, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(177, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(178, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(179, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(180, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(181, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(182, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(183, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(184, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(185, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(186, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(187, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(188, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(189, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(190, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(191, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(192, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(193, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(194, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(195, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(196, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(197, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(198, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(199, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(200, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(201, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(202, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(203, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(204, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(205, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(206, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(207, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(208, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(209, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(210, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(211, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(212, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(213, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(214, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(215, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(216, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(217, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(218, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(219, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(220, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(221, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(222, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(223, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(224, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(225, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(226, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(227, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(228, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(229, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(230, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(231, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(232, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(233, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(234, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(235, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(236, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(237, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(238, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(239, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(240, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/?name=&enter='),
(241, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/?name=rz&enter='),
(242, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/?name=rz&enter='),
(243, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/?name=rz&enter='),
(244, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/?name=rz&enter='),
(245, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/?name=rz&enter='),
(246, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/?name=rz&enter='),
(247, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(248, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(249, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php?logout=true'),
(250, '2024-11-14', '::1', 'ni90uoaj', 0, '/szaszbeni/vizsgaremek/index.php'),
(251, '2024-11-14', '::1', 'ni90uoaj', 0, '/szaszbeni/vizsgaremek/?name=rz&enter='),
(252, '2024-11-14', '::1', 'ni90uoaj', 0, '/szaszbeni/vizsgaremek/?name=&enter='),
(253, '2024-11-14', '::1', 'ni90uoaj', 0, '/szaszbeni/vizsgaremek/'),
(254, '2024-11-14', '::1', 'ni90uoaj', 0, '/szaszbeni/vizsgaremek/?name=&enter='),
(255, '2024-11-14', '::1', 'ni90uoaj', 0, '/szaszbeni/vizsgaremek/?name=rz&enter='),
(256, '2024-11-14', '::1', 'ni90uoaj', 0, '/szaszbeni/vizsgaremek/index.php'),
(257, '2024-11-14', '::1', 'ni90uoaj', 0, '/szaszbeni/vizsgaremek/index.php'),
(258, '2024-11-14', '::1', 'ni90uoaj', 0, '/szaszbeni/vizsgaremek/index.php'),
(259, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(260, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(261, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(262, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php?logout=true'),
(263, '2024-11-14', '::1', 'ni90uoaj', 0, '/szaszbeni/vizsgaremek/index.php'),
(264, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/'),
(265, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(266, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(267, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(268, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(269, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(270, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(271, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(272, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(273, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(274, '2024-11-14', '::1', 'ni90uoaj', 24, '/szaszbeni/vizsgaremek/index.php'),
(275, '2024-11-18', '::1', '8gvmd9la', 24, '/szaszbeni/vizsgaremek/'),
(276, '2024-11-18', '::1', '8gvmd9la', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(277, '2024-11-18', '::1', '8gvmd9la', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(278, '2024-11-18', '::1', '8gvmd9la', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(279, '2024-11-18', '::1', '8gvmd9la', 24, '/szaszbeni/vizsgaremek/?p=users'),
(280, '2024-11-18', '::1', '8gvmd9la', 30, '/szaszbeni/vizsgaremek/'),
(281, '2024-11-18', '::1', '8gvmd9la', 30, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(282, '2024-11-18', '::1', '8gvmd9la', 30, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(283, '2024-11-18', '::1', '8gvmd9la', 24, '/szaszbeni/vizsgaremek/'),
(284, '2024-11-18', '::1', '8gvmd9la', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(285, '2024-11-18', '::1', '8gvmd9la', 24, '/szaszbeni/vizsgaremek/'),
(286, '2024-11-20', '::1', '1agdvhpa', 0, '/szaszbeni/vizsgaremek/'),
(287, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(288, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(289, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(290, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(291, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(292, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(293, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(294, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(295, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(296, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(297, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(298, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(299, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(300, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(301, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(302, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(303, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(304, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(305, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(306, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(307, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(308, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(309, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(310, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(311, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(312, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(313, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(314, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(315, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(316, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(317, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(318, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(319, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(320, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(321, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(322, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(323, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(324, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(325, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(326, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(327, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(328, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(329, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(330, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(331, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(332, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(333, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(334, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(335, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(336, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(337, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(338, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(339, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(340, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(341, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(342, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(343, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(344, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(345, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(346, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(347, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(348, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(349, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(350, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(351, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(352, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(353, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(354, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(355, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(356, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(357, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(358, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(359, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(360, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(361, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(362, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(363, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(364, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(365, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(366, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(367, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(368, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(369, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(370, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(371, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(372, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(373, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(374, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(375, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(376, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(377, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(378, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(379, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(380, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(381, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(382, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(383, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(384, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(385, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(386, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(387, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(388, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(389, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(390, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(391, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(392, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(393, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(394, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(395, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(396, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(397, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(398, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(399, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(400, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(401, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(402, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(403, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(404, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(405, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(406, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(407, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(408, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(409, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(410, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(411, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(412, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(413, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(414, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(415, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(416, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(417, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(418, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(419, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(420, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(421, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(422, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(423, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(424, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(425, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(426, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(427, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(428, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(429, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(430, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(431, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(432, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(433, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(434, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(435, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(436, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(437, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(438, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(439, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(440, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(441, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(442, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(443, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(444, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(445, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(446, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(447, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(448, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(449, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(450, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(451, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(452, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(453, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(454, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(455, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(456, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(457, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(458, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(459, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(460, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(461, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(462, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(463, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(464, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(465, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(466, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(467, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(468, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(469, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(470, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(471, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(472, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(473, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(474, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(475, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(476, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(477, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(478, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(479, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(480, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(481, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(482, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(483, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(484, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(485, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(486, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(487, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(488, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(489, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(490, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(491, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(492, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(493, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(494, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(495, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(496, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(497, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(498, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(499, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(500, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(501, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(502, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(503, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(504, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(505, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(506, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(507, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(508, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(509, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(510, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(511, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(512, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(513, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(514, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(515, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(516, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(517, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(518, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(519, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(520, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(521, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(522, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(523, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(524, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(525, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(526, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(527, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(528, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(529, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(530, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(531, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(532, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(533, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(534, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(535, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(536, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(537, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(538, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(539, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(540, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(541, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(542, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(543, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(544, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(545, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(546, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(547, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(548, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(549, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(550, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(551, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(552, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(553, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(554, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(555, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(556, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(557, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(558, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(559, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(560, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(561, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(562, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(563, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(564, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(565, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(566, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(567, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(568, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(569, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(570, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(571, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(572, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(573, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(574, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(575, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(576, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(577, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(578, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(579, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(580, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(581, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(582, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(583, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(584, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(585, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(586, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(587, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(588, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(589, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(590, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(591, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(592, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(593, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(594, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(595, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(596, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(597, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(598, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(599, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(600, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(601, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(602, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(603, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(604, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(605, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(606, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(607, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(608, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(609, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(610, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(611, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(612, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(613, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(614, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(615, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(616, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(617, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(618, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(619, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(620, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(621, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(622, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(623, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(624, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(625, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(626, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(627, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(628, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(629, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(630, '2024-11-20', '::1', '1agdvhpa', 24, '/szaszbeni/vizsgaremek/'),
(631, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(632, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(633, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(634, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(635, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(636, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(637, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(638, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(639, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(640, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(641, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(642, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(643, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(644, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(645, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(646, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(647, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(648, '2024-11-21', '::1', '9nv092am', 0, '/szaszbeni/vizsgaremek/'),
(649, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(650, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(651, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(652, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(653, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(654, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(655, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(656, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(657, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(658, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(659, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(660, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(661, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(662, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(663, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(664, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(665, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(666, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(667, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(668, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(669, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(670, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(671, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(672, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(673, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(674, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(675, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(676, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(677, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(678, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(679, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(680, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(681, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(682, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(683, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(684, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(685, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(686, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(687, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(688, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(689, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(690, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(691, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(692, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(693, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(694, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(695, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(696, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(697, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(698, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(699, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(700, '2024-11-21', '::1', '9nv092am', 24, '/szaszbeni/vizsgaremek/'),
(701, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/'),
(702, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(703, '2024-11-21', '::1', 'ne1olvv3', 0, '/szaszbeni/vizsgaremek/'),
(704, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/'),
(705, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/'),
(706, '2024-11-21', '::1', 'ne1olvv3', 0, '/szaszbeni/vizsgaremek/'),
(707, '2024-11-21', '::1', 'ne1olvv3', 0, '/szaszbeni/vizsgaremek/?p=login'),
(708, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/'),
(709, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(710, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/?p=users');
INSERT INTO `note` (`nid`, `ndate`, `nip`, `nsession`, `nuid`, `nurl`) VALUES
(711, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/?p=users'),
(712, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/?p=users'),
(713, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/?p=users'),
(714, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/?p=users'),
(715, '2024-11-21', '::1', 'ne1olvv3', 24, '/szaszbeni/vizsgaremek/'),
(716, '2024-11-27', '::1', 'thlcr3l8', 24, '/szaszbeni/vizsgaremek/'),
(717, '2024-11-27', '::1', 'thlcr3l8', 24, '/szaszbeni/vizsgaremek/'),
(718, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(719, '2024-11-28', '::1', 'sl38ec8q', 0, '/szaszbeni/vizsgaremek/'),
(720, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(721, '2024-11-28', '::1', 'sl38ec8q', 0, '/szaszbeni/vizsgaremek/'),
(722, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(723, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(724, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(725, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(726, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(727, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(728, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(729, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(730, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(731, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(732, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(733, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(734, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(735, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(736, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(737, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(738, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(739, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(740, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(741, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(742, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(743, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(744, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(745, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(746, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(747, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(748, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(749, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(750, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(751, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(752, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(753, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(754, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(755, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(756, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(757, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(758, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(759, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(760, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(761, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(762, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(763, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(764, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(765, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(766, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(767, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(768, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(769, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(770, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(771, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(772, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(773, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(774, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(775, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(776, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(777, '2024-11-28', '::1', 'sl38ec8q', 24, '/szaszbeni/vizsgaremek/'),
(778, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/'),
(779, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(780, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(781, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(782, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/'),
(783, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(784, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/'),
(785, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(786, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/'),
(787, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(788, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/'),
(789, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(790, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(791, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/'),
(792, '2024-12-02', '::1', 'i6quuv2i', 24, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(793, '2024-12-02', '::1', 'i6quuv2i', 0, '/szaszbeni/vizsgaremek/'),
(794, '2024-12-02', '::1', 'i6quuv2i', 0, '/szaszbeni/vizsgaremek/'),
(795, '2024-12-02', '::1', 'i6quuv2i', 0, '/szaszbeni/vizsgaremek/'),
(796, '2024-12-02', '::1', 'i6quuv2i', 0, '/szaszbeni/vizsgaremek/?p=login'),
(797, '2024-12-02', '::1', 'i6quuv2i', 0, '/szaszbeni/vizsgaremek/'),
(798, '2024-12-02', '::1', 'i6quuv2i', 43, '/szaszbeni/vizsgaremek/'),
(799, '2024-12-02', '::1', 'i6quuv2i', 43, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(800, '2024-12-02', '::1', 'i6quuv2i', 43, '/szaszbeni/vizsgaremek/'),
(801, '2024-12-02', '::1', 'i6quuv2i', 43, '/szaszbeni/vizsgaremek/'),
(802, '2024-12-05', '::1', 'sliug3dq', 0, '/szaszbeni/vizsgaremek/'),
(803, '2024-12-05', '::1', 'sliug3dq', 0, '/szaszbeni/vizsgaremek/?p=login'),
(804, '2024-12-05', '::1', 'sliug3dq', 38, '/szaszbeni/vizsgaremek/'),
(805, '2024-12-05', '::1', 'sliug3dq', 38, '/szaszbeni/vizsgaremek/?p=adatlapom'),
(806, '2024-12-05', '::1', 'sliug3dq', 38, '/szaszbeni/vizsgaremek/');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `uname` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `uemail` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `upass` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `utime` datetime NOT NULL,
  `uproffkepnev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `uproffkeredetikepnev` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `uip` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `usession` varchar(8) COLLATE utf8_hungarian_ci NOT NULL,
  `ustat` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `ucomm` text COLLATE utf8_hungarian_ci NOT NULL,
  `ubirtd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `upass`, `utime`, `uproffkepnev`, `uproffkeredetikepnev`, `uip`, `usession`, `ustat`, `ucomm`, `ubirtd`) VALUES
(24, 'magoriii', 'benjamin.szasz@gmail.com', '$2y$10$GuxKnXW8STrWvi.Hr3TRAutYEoGj2lNQZXLKTEaexuiTthMbYopM.', '2024-10-09 13:37:45', '', '', '', '', '', '', '0000-00-00'),
(25, 'NÃ¡ndor', 'nandivok@gmail.com', '68053af2923e00204c3ca7c6a3150cf7', '2024-10-17 11:23:12', '', '', '', '', '', '', '0000-00-00'),
(30, 'Ferenc', 'ferenc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2024-11-18 13:55:52', '', '', '', '', '', '', '0000-00-00'),
(31, 'fasz', 'fasz@gmail.com', '3d17d9a1e6416bfe415beee77157fbab', '2024-11-27 12:55:40', '', '', '', '', '', '', '0000-00-00'),
(32, 'fasz', 'fasz@gmail.com', '3d17d9a1e6416bfe415beee77157fbab', '2024-11-27 12:55:48', '', '', '', '', '', '', '0000-00-00'),
(33, 'fasz', 'fasz@gmail.com', '9f5cc93a91524713c66b55d7ff1233fb', '2024-11-27 12:55:59', '', '', '', '', '', '', '0000-00-00'),
(34, 'fasz', 'fasz@gmail.com', '9f5cc93a91524713c66b55d7ff1233fb', '2024-11-27 12:58:19', '', '', '', '', '', '', '0000-00-00'),
(35, 'fasz', 'fasz@gmail.com', '7b42cfe60c1dbcac21fca968abb597ac', '2024-11-27 12:58:59', '', '', '', '', '', '', '0000-00-00'),
(36, 'fasz', 'fasz@gmail.com', 'e875462cf0437d929ebe01f1b5013e87', '2024-11-27 13:00:20', '', '', '', '', '', '', '0000-00-00'),
(37, 'fasz', 'fasz@gmail.com', '3d17d9a1e6416bfe415beee77157fbab', '2024-11-27 13:02:20', '', '', '', '', '', '', '0000-00-00'),
(38, 'asd', 'asd@gmail.com', '7815696ecbf1c96e6894b779456d330e', '2024-11-27 13:04:26', '', '', '', '', '', '', '0000-00-00'),
(39, 'asd', 'asd@gmail.com', '7815696ecbf1c96e6894b779456d330e', '2024-11-27 13:05:40', '', '', '', '', '', '', '0000-00-00'),
(40, 'fasz', 'fasz@gmail.com', '3d17d9a1e6416bfe415beee77157fbab', '2024-11-27 13:06:25', '', '', '', '', '', '', '0000-00-00'),
(41, 'Ferenc', 'kakamatyivok@gmal.com', '5feb0f63984f36659d7fcb064d895dec', '2024-11-27 13:07:01', '', '', '', '', '', '', '0000-00-00'),
(42, 'andras', 'asd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-11-28 10:04:44', '', '', '', '', '', '', '0000-00-00'),
(43, 'joska', 'joska@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2024-12-02 13:09:38', '', '', '', '', '', '', '0000-00-00'),
(44, 'fasz', 'asd@gmail.com', '7815696ecbf1c96e6894b779456d330e', '2024-12-05 09:59:59', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uusername` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `uemail` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `upassword_hash` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `ucreated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `uupdated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `agroup_users`
--
ALTER TABLE `agroup_users`
  ADD PRIMARY KEY (`agroupid`);

--
-- A tábla indexei `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`cid`);

--
-- A tábla indexei `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`fid`);

--
-- A tábla indexei `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`gid`);

--
-- A tábla indexei `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`);

--
-- A tábla indexei `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- A tábla indexei `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`nid`);

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uusername` (`uusername`),
  ADD UNIQUE KEY `uemail` (`uemail`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `agroup_users`
--
ALTER TABLE `agroup_users`
  MODIFY `agroupid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `conversation`
--
ALTER TABLE `conversation`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `friends`
--
ALTER TABLE `friends`
  MODIFY `fid` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `groups`
--
ALTER TABLE `groups`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT a táblához `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `note`
--
ALTER TABLE `note`
  MODIFY `nid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=807;

--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
