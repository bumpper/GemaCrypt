-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 09, 2024 at 05:34 AM
-- Server version: 8.0.36-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gematriaDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `gematriaTable`
--
-- Creation: May 09, 2024 at 08:25 AM
--

CREATE TABLE `gematriaTable` (
  `word1` text NOT NULL,
  `gematria1` int DEFAULT NULL,
  `summation` text,
  `letterCount` int DEFAULT NULL,
  `wordCount` int DEFAULT NULL,
  `paths` int DEFAULT NULL,
  `gatesTotal` int DEFAULT NULL,
  `skip` text,
  `gematriaSkip` int DEFAULT NULL,
  `leap` text,
  `gematriaLeap` int DEFAULT NULL,
  `reverse` text,
  `gematriaReversed` int DEFAULT NULL,
  `elision` text,
  `gematriaElision` int DEFAULT NULL,
  `backexch` text,
  `gematriaAvgadBE` int DEFAULT NULL,
  `forexch` text,
  `gematriaAvgadFE` int DEFAULT NULL,
  `acronym` text,
  `gematriaAcronym` int DEFAULT NULL,
  `sofim` text,
  `gematriaSofit` int DEFAULT NULL,
  `gematriaMiluy` int DEFAULT NULL,
  `textAB` text,
  `gematriaAB` int DEFAULT NULL,
  `textSaG` text,
  `gematriaSaG` int DEFAULT NULL,
  `textMaH` text,
  `gematriaMaH` int DEFAULT NULL,
  `textBaN` text,
  `gematriaBaN` int DEFAULT NULL,
  `RagilValue` int DEFAULT NULL,
  `KolelValue` int DEFAULT NULL,
  `Kolel1Value` int DEFAULT NULL,
  `HaKlaliValue` int DEFAULT NULL,
  `ReducedlValue` int DEFAULT NULL,
  `IntegralReducedlValue` int DEFAULT NULL,
  `KatanValue` int DEFAULT NULL,
  `OrdinalValue` int DEFAULT NULL,
  `HaKadmiValue` int DEFAULT NULL,
  `HaPeratiValue` int DEFAULT NULL,
  `MiluyValue` int DEFAULT NULL,
  `AYiKBeCheR` text,
  `gematria2AYiKBeCheR` int DEFAULT NULL,
  `ATBaSh` text,
  `gematria2ATBaSh` int DEFAULT NULL,
  `ALBaM` text,
  `gematria2ALBaM` int DEFAULT NULL,
  `AChBI` text,
  `gematria2AChBI` int DEFAULT NULL,
  `AChaSBeTA` text,
  `gematria2AChaSBeTA` int DEFAULT NULL,
  `ATBaCh` text,
  `gematria2ATBaCh` int DEFAULT NULL,
  `ATBaCh999` text,
  `gematria2ATBaCh999` int DEFAULT NULL,
  `AiYBaK` text,
  `gematria2AiYBaK` int DEFAULT NULL,
  `ATzBaPh` text,
  `gematria2ATzBaPh` int DEFAULT NULL,
  `ALBeTh` text,
  `gematria2ALBeTh` int DEFAULT NULL,
  `Ofanim` text,
  `gematria2Ofanim` int DEFAULT NULL,
  `AltATBaSh` text,
  `gematria2AltATBaSh` int DEFAULT NULL,
  `AltAShBaR` text,
  `gematria2AltAShBaR` int DEFAULT NULL,
  `AltARBaK` text,
  `gematria2AltARBaK` int DEFAULT NULL,
  `AltAQBeTz` text,
  `gematria2AltAQBeTz` int DEFAULT NULL,
  `AltEZBePh` text,
  `gematria2AltEZBePh` int DEFAULT NULL,
  `AltAPBE` text,
  `gematria2AltAPBE` int DEFAULT NULL,
  `AltAEBaS` text,
  `gematria2AltAEBaS` int DEFAULT NULL,
  `AltASBeN` text,
  `gematria2AltASBeN` int DEFAULT NULL,
  `AltANBaM` text,
  `gematria2AltANBaM` int DEFAULT NULL,
  `AltAMBeL` text,
  `gematria2AltAMBeL` int DEFAULT NULL,
  `AltELBaCh` text,
  `gematria2AltELBaCh` int DEFAULT NULL,
  `AltAChBI` text,
  `gematria2AltAChBI` int DEFAULT NULL,
  `AltAIBeT` text,
  `gematria2AltAIBeT` int DEFAULT NULL,
  `AltATBaCh` text,
  `gematria2AltATBaCh` int DEFAULT NULL,
  `AltAChBaZ` text,
  `gematria2AltAChBaZ` int DEFAULT NULL,
  `AltAZBO` text,
  `gematria2AltAZBO` int DEFAULT NULL,
  `AltAVBaH` text,
  `gematria2AltAVBaH` int DEFAULT NULL,
  `AltAHBaD` text,
  `gematria2AltAHBaD` int DEFAULT NULL,
  `AltADBeG` text,
  `gematria2AltADBeG` int DEFAULT NULL,
  `AltAGBaB` text,
  `gematria2AltAGBaB` int DEFAULT NULL,
  `AltABBA` text,
  `gematria2AltABBA` int DEFAULT NULL,
  `AltAAhBaT` text,
  `gematria2AltAAhBaT` int DEFAULT NULL,
  `AltABBaG` text,
  `gematria2AltABBaG` int DEFAULT NULL,
  `AltAGBaD` text,
  `gematria2AltAGBaD` int DEFAULT NULL,
  `AltADBaH` text,
  `gematria2AltADBaH` int DEFAULT NULL,
  `AltAHBeV` text,
  `gematria2AltAHBeV` int DEFAULT NULL,
  `AltAVBeZ` text,
  `gematria2AltAVBeZ` int DEFAULT NULL,
  `AltAZBeCh` text,
  `gematria2AltAZBeCh` int DEFAULT NULL,
  `AltAChBeT` text,
  `gematria2AltAChBeT` int DEFAULT NULL,
  `AltATBI` text,
  `gematria2AltATBI` int DEFAULT NULL,
  `AltAIBech` text,
  `gematria2AltAIBech` int DEFAULT NULL,
  `AltAChBeL` text,
  `gematria2AltAChBeL` int DEFAULT NULL,
  `AltELBaM` text,
  `gematria2AltELBaM` int DEFAULT NULL,
  `AltAMBeN` text,
  `gematria2AltAMBeN` int DEFAULT NULL,
  `AltANBeS` text,
  `gematria2AltANBeS` int DEFAULT NULL,
  `AltASBA` text,
  `gematria2AltASBA` int DEFAULT NULL,
  `AltAABaPh` text,
  `gematria2AltAABaPh` int DEFAULT NULL,
  `AltAPhBaTz` text,
  `gematria2AltAPhBaTz` int DEFAULT NULL,
  `AltATzBeQ` text,
  `gematria2AltATzBeQ` int DEFAULT NULL,
  `AltAKBaR` text,
  `gematria2AltAKBaR` int DEFAULT NULL,
  `AltARBeSh` text,
  `gematria2AltARBeSh` int DEFAULT NULL,
  `AltAShBeT` text,
  `gematria2AltAShBeT` int DEFAULT NULL,
  `AltATBaH` text,
  `gematria2AltATBaH` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- RELATIONSHIPS FOR TABLE `gematriaTable`:
--

--
-- Dumping data for table `gematriaTable`
--

INSERT INTO `gematriaTable` (`word1`, `gematria1`, `summation`, `letterCount`, `wordCount`, `paths`, `gatesTotal`, `skip`, `gematriaSkip`, `leap`, `gematriaLeap`, `reverse`, `gematriaReversed`, `elision`, `gematriaElision`, `backexch`, `gematriaAvgadBE`, `forexch`, `gematriaAvgadFE`, `acronym`, `gematriaAcronym`, `sofim`, `gematriaSofit`, `gematriaMiluy`, `textAB`, `gematriaAB`, `textSaG`, `gematriaSaG`, `textMaH`, `gematriaMaH`, `textBaN`, `gematriaBaN`, `RagilValue`, `KolelValue`, `Kolel1Value`, `HaKlaliValue`, `ReducedlValue`, `IntegralReducedlValue`, `KatanValue`, `OrdinalValue`, `HaKadmiValue`, `HaPeratiValue`, `MiluyValue`, `AYiKBeCheR`, `gematria2AYiKBeCheR`, `ATBaSh`, `gematria2ATBaSh`, `ALBaM`, `gematria2ALBaM`, `AChBI`, `gematria2AChBI`, `AChaSBeTA`, `gematria2AChaSBeTA`, `ATBaCh`, `gematria2ATBaCh`, `ATBaCh999`, `gematria2ATBaCh999`, `AiYBaK`, `gematria2AiYBaK`, `ATzBaPh`, `gematria2ATzBaPh`, `ALBeTh`, `gematria2ALBeTh`, `Ofanim`, `gematria2Ofanim`, `AltATBaSh`, `gematria2AltATBaSh`, `AltAShBaR`, `gematria2AltAShBaR`, `AltARBaK`, `gematria2AltARBaK`, `AltAQBeTz`, `gematria2AltAQBeTz`, `AltEZBePh`, `gematria2AltEZBePh`, `AltAPBE`, `gematria2AltAPBE`, `AltAEBaS`, `gematria2AltAEBaS`, `AltASBeN`, `gematria2AltASBeN`, `AltANBaM`, `gematria2AltANBaM`, `AltAMBeL`, `gematria2AltAMBeL`, `AltELBaCh`, `gematria2AltELBaCh`, `AltAChBI`, `gematria2AltAChBI`, `AltAIBeT`, `gematria2AltAIBeT`, `AltATBaCh`, `gematria2AltATBaCh`, `AltAChBaZ`, `gematria2AltAChBaZ`, `AltAZBO`, `gematria2AltAZBO`, `AltAVBaH`, `gematria2AltAVBaH`, `AltAHBaD`, `gematria2AltAHBaD`, `AltADBeG`, `gematria2AltADBeG`, `AltAGBaB`, `gematria2AltAGBaB`, `AltABBA`, `gematria2AltABBA`, `AltAAhBaT`, `gematria2AltAAhBaT`, `AltABBaG`, `gematria2AltABBaG`, `AltAGBaD`, `gematria2AltAGBaD`, `AltADBaH`, `gematria2AltADBaH`, `AltAHBeV`, `gematria2AltAHBeV`, `AltAVBeZ`, `gematria2AltAVBeZ`, `AltAZBeCh`, `gematria2AltAZBeCh`, `AltAChBeT`, `gematria2AltAChBeT`, `AltATBI`, `gematria2AltATBI`, `AltAIBech`, `gematria2AltAIBech`, `AltAChBeL`, `gematria2AltAChBeL`, `AltELBaM`, `gematria2AltELBaM`, `AltAMBeN`, `gematria2AltAMBeN`, `AltANBeS`, `gematria2AltANBeS`, `AltASBA`, `gematria2AltASBA`, `AltAABaPh`, `gematria2AltAABaPh`, `AltAPhBaTz`, `gematria2AltAPhBaTz`, `AltATzBeQ`, `gematria2AltATzBeQ`, `AltAKBaR`, `gematria2AltAKBaR`, `AltARBeSh`, `gematria2AltARBeSh`, `AltAShBeT`, `gematria2AltAShBeT`, `AltATBaH`, `gematria2AltATBaH`) VALUES
('יה', 15, 'יה', 2, 1, 2, 3, 'י', 10, 'ה', 5, 'הי', 15, '', 0, 'טד', 13, 'כו', 26, 'י', 10, 'ה', 5, 35, 'יוד הי ', 35, 'יוד הי ', 35, 'יוד הא ', 26, 'יוד הה ', 30, 15, 15, 15, 15, 6, 6, 6, 15, 70, 125, 26, 'קן', 800, 'מץ', 940, 'שע', 370, 'בז', 9, 'פל', 110, 'צה', 95, 'צה', 95, 'צה', 51, 'צה', 110, 'צה', 140, 'צה', 5, 'מץ', 940, 'לף', 830, 'כע', 90, 'יס', 70, 'טן', 709, 'חם', 608, 'זל', 37, 'וך', 506, 'הי', 15, 'דט', 13, 'גח', 11, 'בז', 9, 'או', 7, 'תה', 405, 'שד', 304, 'רג', 203, 'קב', 102, 'צא', 91, 'פת', 480, 'עש', 370, 'סר', 260, 'נק', 150, 'כו', 26, 'לז', 37, 'מח', 48, 'נט', 59, 'סי', 70, 'על', 90, 'פל', 110, 'צם', 690, 'קן', 800, 'רס', 260, 'שע', 370, 'תף', 1200, 'אץ', 901, 'בק', 102, 'גר', 203, 'דש', 304, 'הת', 405, 'וא', 7, 'זב', 9, 'חג', 11, 'טד', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gematriaTable`
--
ALTER TABLE `gematriaTable`
  ADD UNIQUE KEY `Index` (`word1`(255));


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table gematriaTable
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
