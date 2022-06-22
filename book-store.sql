-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 10:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `Price` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `language` varchar(10) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `photo`, `Price`, `cid`, `language`, `author`, `publisher`, `detail`) VALUES
(1, 'සෙoකොට්ටo', 'assets/img/portfolio/senkottan.jpg', 550, 1, 'Sinhala', ' mahinda prasad masimbula', 'santhawa prakashana', '\"උඹට කියන්න, අපේ කිරි අම්මා කෙනෙක් හිටියා මාගල්ලවත්තේ, වංසා රිදී කියල. කුණුහරප කියනවා කටේ නොගෑවී. මගේ ඔන්න ඔය එක පලහිලව්වකදි මගේ ළඟින් ඉඳගෙන, මෙන්න මේ මං උඹගෙ හිත හදන්නා වායේ ම මයේ හිත හදන්න හරිහරියට මහන්සි වුණා. ඒ ගෑනි කියපු කතාවක් මට අද වගේ ම මතකෙ තියනවා... ඒ කිරිඅම්මා කිව්වා, ඕනි එකෙක් එක්ක ඕන විගඩමක් නැටුවට කමක් නැතේ ය, හැබැයි ඔය පිරිමි ජාතිය මහ අමුතුම ජාතියක් ය, අත නිකං තියාගෙන ඉන්න පුරුද්දක් උන්ට නැත, අර අහවල් පලහිලව්ව නිකං තියාගෙන ඉන්න උන්ට පුරුද්දක් නැත. අන්න ඒ හිංදා උඹ ළඟ ඔය තියන හක්ගෙඩි දෙකයි, පංචා බෙල්ලයි විතරක් උන්ගෙ නොහොබිනාකංවලට පරිහරණෙට දෙන්න එපා ය කියල... බලාපං රත්තරනේ, ඒක මොන තරං මසුරං කතාවක් ද කියල. ඕනෑ ම ළමිස්සියෙකුට මිනිහෙක් එක්ක යන්න කලිං දෙසැරයක් හිතන්න ඒ කතාව කොයිතරං වටින් එකක් ද කියල. කතාවක් නෙමෙයි බොලං ඒක මසුරං මල්ලක් කියලයි මට නං හිතන්නේ.\"'),
(2, 'මරික්කාවත', 'assets/img/portfolio/Manikkawatha.png', 600, 1, 'Sinhala', 'mahinda prasad masimbula', '21st century publishers', 'MANIKKAWATHA'),
(3, 'අප්පචි ඇවිත්', 'assets/img/portfolio/Appachchi-awith.jpg', 560, 1, 'Sinhala', 'saman wickramaarachch', 'sarasavi publishers', 'APACHCHI AEVITH'),
(4, 'පන්හිද', 'assets/img/portfolio/panhida.jpeg', 700, 1, 'General', 'athkadure sumanasara himi', 's godage saha sahodarayo', ''),
(5, ' CHEENA COMMUNIST PAKSHAYA', 'assets/img/portfolio/CHEENA-COMMUNIST-PAKSHAYA.png', 660, 2, 'Sinhala', 'kaushalya hettiarachchi', 'neptune publications (pvt)', 'CHEENA COMMUNIST PAKSHAYA'),
(6, ' BRITHANYAN LIYU SAEBAE UVA ETHIHASAYA', 'assets/img/portfolio/BRITHANYAN-LIYU-SAEBAE-UVA-ETHIHASAYA.png', 1200, 2, 'Sinhala', 'nimal bandara', 'sooriya prakashakayo', 'BRITHANYAN LIYU SAEBAE UVA ETHIHASAYA'),
(7, 'HIMA SAENAKELIYA', 'assets/img/portfolio/HIMA-SAENAKELIYA.png', 480, 2, 'Sinhala', 'sudath rohan', 'tharanga prakasakayo', 'HIMA SAENAKELIYA'),
(8, 'ADARAYAKA ABIMAN - ආදරයක අබිමන්', 'assets/img/portfolio/adarayakaabiman.jpg', 616, 2, 'Sinhala', 'pramitha rohini', 'sarasavi publishers', 'ජේන් ඔස්ටින්ගේ Pride and Prejudice බුහුටි බව හා නුවණක්කාරකම් ඉහවහ ගිය නැවුම් රොමාන්තික ප‍්‍රහසනයකි. වංශවත්, මාන්නාධික ඩාර්සි, එළිසබෙක් බෙනට් සමග රැඟුමක් පෑම ප‍්‍රතික්ෂේප කළ විට, ඔහුගේ කීර්තිය, ධනය හා කඩවසම් අවිවාහකයෙකු යන්න මායිම් නොකර, ඇය තමා තුළ ඇතිවූ අප‍්‍රසාදය ක්ෂණිකවම ප‍්‍රකාශ කළාය.'),
(9, 'BOPATH SEWANA KETHI KATHA SANGRAHAYA', 'assets/img/portfolio/BOPATH-SEWANA-KETHI-KATHA-SANGRAHAYA.png', 400, 4, 'Sinhala', '', 'kathru prakashana', 'BOPATH SEWANA KETHI KATHA SANGRAHAYA');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(50) NOT NULL,
  `bookid` int(50) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`) VALUES
(1, 'නවකතා', 'assets/img/portfolio/portfolio-1.png'),
(2, 'පරිවර්තන ', 'assets/img/portfolio/portfolio-2.jpg'),
(3, 'ළමා කතා', 'assets/img/portfolio/portfolio-3.jpg'),
(4, 'කෙටි කතා', 'assets/img/portfolio/portfolio-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `password`, `email`, `address`, `phone`) VALUES
(1, 'H.P.J. Sandaruwan', 'janita', 'janithsanda256@gmail', 'address', 702036268),
(3, 'ja', 'ja', 'janithsanda256@gmail', 'a', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `text` (`cid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `text` FOREIGN KEY (`cid`) REFERENCES `categories` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `int` FOREIGN KEY (`bookid`) REFERENCES `book` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
