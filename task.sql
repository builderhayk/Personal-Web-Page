-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 08:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `login`, `password`) VALUES
(1, 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `date`, `full_name`, `subject`, `email`, `message`) VALUES
(27, '8.03.2019', 'Hayk GHazaryan', 'Front end Developer', 'hayk1998@mail.ru', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ducimus itaque non ullam. Atque cum dicta eos et, fuga illo ipsum laboriosam laudantium nemo neque nobis quasi quis repudiandae sequi suscipit ullam vitae. Ad commodi enim hic maxime nam sint vel. Aperiam beatae facere modi possimus repellendus? Consequatur earum ex ipsa ipsum iure mollitia nam quas sequi tenetur. Assumenda impedit, ipsum omnis reprehenderit repudiandae similique ullam. Aspernatur, dolorum eaque enim excepturi ipsam quisquam ratione voluptatum.'),
(31, '8.03.2019', 'Ashot  Vardanyan', 'Front end developer', 'Vardan@mail.ru', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci dignissimos labore minima possimus provident, repellendus rerum voluptas! Animi culpa eaque fuga iste natus nisi nulla quisquam tempora? Accusamus aliquid ducimus eligendi labore magnam quas, quis? Accusantium aliquid aut consequatur cumque deleniti dolore est expedita facere illo incidunt ipsa minus nesciunt omnis pariatur perferendis perspiciatis placeat quam quis, recusandae reprehenderit rerum saepe sit soluta suscipit tempore temporibus veritatis. Ab cum minima molestiae nihil non sequi?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
