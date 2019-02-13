-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Feb 2019 um 11:27
-- Server-Version: 10.1.37-MariaDB
-- PHP-Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `liste`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestellen`
--

CREATE TABLE `bestellen` (
  `Vorname` text NOT NULL,
  `Artikel` text NOT NULL,
  `Preis` double NOT NULL,
  `gegeben` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `preise`
--

CREATE TABLE `preise` (
  `id` int(10) NOT NULL,
  `bezeichnung` varchar(255) NOT NULL,
  `preis` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `preise`
--

INSERT INTO `preise` (`id`, `bezeichnung`, `preis`) VALUES
(1, '', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `preise`
--
ALTER TABLE `preise`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `preise`
--
ALTER TABLE `preise`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
