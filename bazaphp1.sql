-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 20 Maj 2021, 16:51
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bazaphp1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tajne_dane`
--

CREATE TABLE `tajne_dane` (
  `id` int(11) UNSIGNED NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `adres` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `tajne_dane`
--

INSERT INTO `tajne_dane` (`id`, `imie`, `nazwisko`, `adres`) VALUES
(2, 'Tomasz', 'Tomaszewski', 'Lwów 35'),
(3, 'Patryk', 'Walat', 'Łańcut 69'),
(4, 'Tomasz', 'Wierny', 'Poznań 225'),
(5, 'Paweł', 'Sowa', 'Domaradz 96'),
(8, 'Kazimierz', 'Nowak', 'Ziomkowo 420'),
(9, 'Kacper', 'Fajniewski', 'Fajnowo 725b'),
(11, 'Wawrzyniec', 'Pandonio', 'Kraków 13'),
(12, 'Konrad', 'Sawka', 'Tomaszów Lubelski 66'),
(13, 'Jarosław', 'Kaczyński', 'Warszawa 985'),
(15, 'Adrian', 'Baryka', 'Kijów 178b'),
(16, 'Patryk', 'Siemaszko', 'Ogródków 144'),
(17, 'Patryk', 'Lipczyński', 'Mączydoły Zielone 17'),
(18, 'Patryk', 'Kęsik', 'Warszawa 52'),
(19, 'Patryk', 'Gałecki', 'Tomaszów Lubelski 52'),
(20, 'Patryk', 'Sidor', 'Brzeziny 85'),
(21, 'Patryk', 'Ciećka', 'Wola Wielka 154'),
(22, 'Tomasz', 'Wojtaszek', 'Narol 18'),
(23, 'Jan', 'Kowalski', 'Warszawa 172'),
(24, 'Paweł', 'Podolski', 'Poznań 17'),
(25, 'Kamila', 'Kornelska', 'Ulhówek 195'),
(31, 'Tomisław', 'Apoloniusz', 'Curuś-Bachleda 12'),
(48, 'Krzysztof', 'Krawczyk ', 'Kraków 1245'),
(49, 'Grzegorz', 'Wójcik', 'Rzeszów 2137'),
(52, 'Tomasz', 'Wdzięczny', 'Wejherowo 188');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownika` int(11) UNSIGNED NOT NULL,
  `email` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `admin` varchar(30) COLLATE utf8_polish_ci NOT NULL DEFAULT 'NIE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzytkownika`, `email`, `haslo`, `login`, `imie`, `admin`) VALUES
(2, 'ziomek@ziomek.pl', '$2y$10$sSyYaXw31VWj/JNYA59ROOz', 'Ziomunio', 'Ziomeczek', 'NIE'),
(3, 'dupa@sraka.pl', '$2y$10$Jln5f0j1hTAyPmMmW/M85eb', 'admin', 'Admin', 'NIE'),
(4, 'hehe@hehe.pl', '$2y$10$OqxgcnHFDzhcGIJ85lbOL.C', 'kolorowy', 'Patryk', 'NIE'),
(5, 'login@login', '$2y$10$yoGY7PTdITd3RxaDuVMVy.B', 'login', 'Login', 'NIE');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `tajne_dane`
--
ALTER TABLE `tajne_dane`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `tajne_dane`
--
ALTER TABLE `tajne_dane`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytkownika` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
