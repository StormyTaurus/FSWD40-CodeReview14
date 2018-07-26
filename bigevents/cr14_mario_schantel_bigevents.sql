-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 26. Jul 2018 um 07:36
-- Server-Version: 5.6.38
-- PHP-Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr14_mario_schantel_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bigevents`
--

CREATE TABLE `bigevents` (
  `id` int(11) NOT NULL,
  `eventName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventDate` datetime DEFAULT NULL,
  `eventDateEnd` datetime DEFAULT NULL,
  `eventDesc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventImg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventCapacity` int(11) DEFAULT NULL,
  `eventMail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventPhone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventStreet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventStreetN` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventZip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `bigevents`
--

INSERT INTO `bigevents` (`id`, `eventName`, `eventDate`, `eventDateEnd`, `eventDesc`, `eventImg`, `eventCapacity`, `eventMail`, `eventPhone`, `eventUrl`, `eventType`, `eventStreet`, `eventStreetN`, `eventZip`, `eventCity`) VALUES
(6, 'Dummy Event', '2018-05-20 00:00:00', '2018-05-20 23:59:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata', 'https://cdn.pixabay.com/photo/2017/12/08/11/53/event-party-3005668_960_720.jpg', 50, 'dummy@bigevents.com', '123456', 'dummy.bigevents.com', 'Music', 'Event Alley', '1', '4321', 'Event Town');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bigevents`
--
ALTER TABLE `bigevents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `bigevents`
--
ALTER TABLE `bigevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
