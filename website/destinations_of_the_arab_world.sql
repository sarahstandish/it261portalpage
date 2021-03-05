-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2021 at 02:04 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it261`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations_of_the_arab_world`
--

CREATE TABLE `destinations_of_the_arab_world` (
  `destination_id` int(11) NOT NULL,
  `attraction_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `about` mediumtext,
  `latitude` decimal(7,4) DEFAULT NULL,
  `longitude` decimal(7,4) DEFAULT NULL,
  `photo_permalink` varchar(255) DEFAULT NULL,
  `photo_author` varchar(255) DEFAULT NULL,
  `currently_visitable` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations_of_the_arab_world`
--

INSERT INTO `destinations_of_the_arab_world` (`destination_id`, `attraction_name`, `country`, `about`, `latitude`, `longitude`, `photo_permalink`, `photo_author`, `currently_visitable`) VALUES
(1, 'Museum of Islamic Art', 'Qatar', 'Without question the most stunning museum in the Arab world; an architectural marvel that imbues the visitor with the feeling of having stepped into a cathedral dedicated to the wonders of Islamic civilization.', '25.2955', '51.5392', 'https://www.flickr.com/photos/20264173@N00/6194962704', '\r\nFuad Al Ansari', 'Yes'),
(2, 'Old City of Sanaa', 'Yemen', 'An architecturally unique site with many buildings dating to before the 11th century.', '15.3694', '44.1910', 'https://www.flickr.com/photos/49786373@N00/350264025', 'Hiro Otake', 'No'),
(3, 'Chefchaouen', 'Morocco', 'A stunning village nestled in the mountains where all the buildings are painted blue.', '35.1688', '5.2684', 'https://www.flickr.com/photos/25863371@N07/48282244861', 'James Wu', 'Yes'),
(4, 'The Umayyad Mosque of Damascus', 'Syria', 'A site of worship for various religious dating back to Roman times, the Umayyad Mosque is both grand and welcoming.', '33.5117', '36.3067', 'https://www.flickr.com/photos/28454462@N07/4598825877', 'Alessandra Kocman', 'No'),
(5, 'Petra', 'Jordan', 'The ancient capital of the Nabatean Empire carved into the stone walls of dessert canyons.', '30.3285', '35.4444', 'https://www.flickr.com/photos/42381661@N04/5748356313', 'Seetheholyland.net', 'Yes'),
(6, 'Wadi Rum', 'Jordan', 'A desert landscape with an unearthly beauty that some may mistake for Mars.', '29.5559', '35.4076', 'https://www.flickr.com/photos/46383895@N00/50333496561', 'Enrico Strocchi', 'Yes'),
(7, 'Temples of Abu Simbel', 'Egypt', 'Less well known than the pyramids but just as impressive, the temples of Abu Simbel are a testament to the archictural gradeur of the age of Pharoahs.', '22.3460', '31.6156', 'https://www.flickr.com/photos/10345599@N03/2346939149', 'Francisco Anzola', 'Yes'),
(8, 'Burj Khalifa', 'United Arab Emirates', 'Quite simply, the tallest building in the world.', '25.1972', '55.2744', 'https://www.flickr.com/photos/60770655@N02/16750671073', 'Thomas Bunton', 'Yes'),
(9, 'Old City of Fes', 'Morocco', 'A souq (market) and maze to get lost in.', '34.0181', '5.0078', 'https://www.flickr.com/photos/50879678@N03/47486722071', 'Bernard Blanc', 'Yes'),
(10, 'Louvre Abu Dhabi', 'United Arab Emirates', 'A gulf-side branch of the storied French museum.', '24.5337', '54.3981', 'https://www.flickr.com/photos/10345599@N03/26706481828', 'Francisco Anzola', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations_of_the_arab_world`
--
ALTER TABLE `destinations_of_the_arab_world`
  ADD PRIMARY KEY (`destination_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations_of_the_arab_world`
--
ALTER TABLE `destinations_of_the_arab_world`
  MODIFY `destination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
