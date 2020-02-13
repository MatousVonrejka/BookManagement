-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 13. úno 2020, 15:38
-- Verze serveru: 10.4.11-MariaDB
-- Verze PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `bookmanagmentdb`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `books`
--

CREATE TABLE `books` (
  `id` int(6) UNSIGNED NOT NULL,
  `BookName` varchar(30) NOT NULL,
  `WriterName` varchar(30) NOT NULL,
  `YearOfRelease` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `books`
--

INSERT INTO `books` (`id`, `BookName`, `WriterName`, `YearOfRelease`) VALUES
(1, '1984', 'George Orwell', 1949),
(2, 'Na západní frontě klid', 'Erich Maria Remarque', 1929),
(3, 'Občanský průkaz', 'Petr Šabach, Aleš Kovanda', 2006),
(4, 'Romeo a Julie', 'William Shakespeare', 1595),
(5, 'F. L. Věk', 'Alois Jirásek', 1891),
(6, 'Kytice', 'Karel Jaromír Erben', 1853),
(7, 'Hamlet', 'William Shakespeare', 1603),
(9, 'Maryša', 'Alois a Vilém Mrštíkovy', 1899),
(10, 'Povídky malostranské', 'Jan Neruda ', 1878),
(11, 'R.U.R.', 'Karel Čapek', 1921);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `books`
--
ALTER TABLE `books`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
