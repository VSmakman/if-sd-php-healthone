-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 nov 2022 om 12:08
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fietsenmaker`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fietsen`
--

CREATE TABLE `fietsen` (
  `ID` int(11) NOT NULL,
  `Merk` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `prijs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `fietsen`
--

INSERT INTO `fietsen` (`ID`, `Merk`, `Type`, `prijs`) VALUES
(1, 'Batavus', 'BlockBuster', 699),
(2, 'Batavus', 'Flying D', 749),
(3, 'Gazelle', 'Giro', 899),
(4, 'Gazelle', 'Chamonix', 1049),
(5, 'Gazelle', 'Eclipse', 799),
(6, 'Giant', 'Competition', 999),
(7, 'Giant', 'Expedition AT', 1299);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `fietsen`
--
ALTER TABLE `fietsen`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `fietsen`
--
ALTER TABLE `fietsen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
