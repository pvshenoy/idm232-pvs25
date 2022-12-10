-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2022 at 10:23 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preetivs_idm232`
--

-- --------------------------------------------------------

--
-- Table structure for table `perfumes`
--

CREATE TABLE `perfumes` (
  `id` int(11) NOT NULL,
  `perfumeName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `topNote` varchar(250) NOT NULL,
  `middleNote` varchar(250) NOT NULL,
  `bottomNote` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perfumes`
--

INSERT INTO `perfumes` (`id`, `perfumeName`, `type`, `brand`, `image`, `description`, `topNote`, `middleNote`, `bottomNote`) VALUES
(38, 'Bee', 'Eau de Parfum', 'Zoologist Perfumes', 'dist/images/bee.png', 'The spring day seems still and peaceful. Yet beneath the wildly splattered canvas of a blossom-strewn meadow, thousands engage in a desperate race for survival. Worker bees toil at a frantic pace, ferrying a precious cargo of nectar and pollen to deposit it within cramped honeycomb cells, where it will nurture drones and larvae under the eye of a regal queen. In the claustrophobic hive, a deafening buzz offers evidence of the bees\' devotion to duty, not a single worker pausing to question its role in perpetual grind of life in the queendom.\r\n\r\nLike the frantic hustle of the bee through a maze of multi-faceted scents, Zoologist Bee delivers a surreal experience. The rich aroma of honey captivates, while alluring florals, royal jelly, animalic beeswax and regal incense unite to create a buzz, offering excitement, and the sweet rewards of life.', 'dist/images/notes/orange.png', 'dist/images/notes/mimosa.png', 'dist/images/notes/tonka.png'),
(39, 'Chameleon', 'Eau De Parfum', 'Zoologist Perfumes', 'dist/images/bee.png', 'Like the luminescent skin of a reptile, fiery scales of sunlight ripple across the surface of the Indian Ocean, fading slowly to gold and finally sapphire as the sun sinks and disappears. The sea exhales, its gentle tide caressing the beach of an island paradise. The salty breath combines with the narcotic aromas of the ylang and frangipani trees in an intimate kiss, sending shivers through the branches. Something stirs – an eye pivots, a tail grips a slender bough. Will the creature vanish among the leaves, or flirt with a daring display of colour? No one knows. The secrets that lie beneath the skin of the chameleon keep Madagascar guessing.', 'dist/images/notes/ylang-ylang.png', 'dist/images/notes/saffron.png', 'dist/images/notes/vanilla.png'),
(40, 'Cherries', 'Eau de Parfum', 'Oriflame', 'dist/images/cherries.png', 'Cherries is the smell of sweet temptations from the cherry fruit, which is hard to resist. This delicious floral - fruity perfume is composed of juicy red fruits, rich and sparkling, intoxicating bouquet of pink freesia, magnolia and jasmine, packed in a beautifully-shaped bottles in the form of three cherries. ', 'dist/images/notes/cherry.png', 'dist/images/notes/jasmine.png', 'dist/images/notes/musk.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perfumes`
--
ALTER TABLE `perfumes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perfumes`
--
ALTER TABLE `perfumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
