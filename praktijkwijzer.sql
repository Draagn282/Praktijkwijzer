-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 apr 2023 om 10:05
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktijkwijzer`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fields`
--

CREATE TABLE `fields` (
  `FieldId` bigint(255) NOT NULL,
  `FieldStatus` int(2) NOT NULL,
  `FliedDateTaken` date NOT NULL,
  `FieldDateFree` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Gegevens worden geëxporteerd voor tabel `fields`
--

INSERT INTO `fields` (`FieldId`, `FieldStatus`, `FliedDateTaken`, `FieldDateFree`) VALUES
(1, 1, '2002-07-07', '2102-07-07');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `maasvallei`
--

CREATE TABLE `maasvallei` (
  `UserId` bigint(20) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `UserSurname` varchar(255) NOT NULL,
  `UserEmail` text NOT NULL,
  `UserPassword` text NOT NULL,
  `UserRol` text NOT NULL,
  `UserAdress` text NOT NULL,
  `UserBirthDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `maasvallei`
--

INSERT INTO `maasvallei` (`UserId`, `UserName`, `UserSurname`, `UserEmail`, `UserPassword`, `UserRol`, `UserAdress`, `UserBirthDate`) VALUES
(1, 'Daan', 'Parker', 'Animeweebx123@gmail.com', '123password', '1', 'Dommer van Poldersveldtweg 289', '0000-00-00');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`FieldId`);

--
-- Indexen voor tabel `maasvallei`
--
ALTER TABLE `maasvallei`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `fields`
--
ALTER TABLE `fields`
  MODIFY `FieldId` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `maasvallei`
--
ALTER TABLE `maasvallei`
  MODIFY `UserId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
