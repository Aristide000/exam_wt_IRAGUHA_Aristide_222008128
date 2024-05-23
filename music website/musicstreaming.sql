-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 01:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicstreaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `albumid` int(50) NOT NULL,
  `Artists` varchar(50) NOT NULL,
  `album_name` varchar(50) NOT NULL,
  `Plays` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`albumid`, `Artists`, `album_name`, `Plays`) VALUES
(1, 'Taylor swift', 'Fearless(2008), Forklore(2020), Midnights(2022)', '833,467,105'),
(2, 'Adele', '21(2011), 25(2015)', '730,712,300'),
(3, 'Gunna', 'One of wun(2023)', '616,389,200'),
(4, 'Future,Metroboomin', 'We don \'t trust you (2024)', '479,018,100');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `Likes_id` int(50) NOT NULL,
  `artists_name` varchar(50) NOT NULL,
  `Song_name` varchar(50) NOT NULL,
  `Likes_stats` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`Likes_id`, `artists_name`, `Song_name`, `Likes_stats`) VALUES
(1, 'Chrisbrown', 'Angel Numbers & Ten Toes ', '100'),
(2, 'Fireboy DML & Asake', 'Bandana', '400'),
(3, 'Qing Madi & BNXN', 'Ole', '200'),
(4, 'Patoranking & Victony', 'BABYLON', '400');

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `playlist_id` int(50) NOT NULL,
  `Playlist_name` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Created by` varchar(50) NOT NULL,
  `Creation date` varchar(50) NOT NULL,
  `Number of songs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`playlist_id`, `Playlist_name`, `Description`, `Created by`, `Creation date`, `Number of songs`) VALUES
(1, 'Summer Hits', 'Top tracks for the summer season', 'JohnDoe', '2024-05-01', '20'),
(2, 'Workout Mix', 'High-energy songs for workouts', 'JaneSmith', '2024-04-15', '25'),
(3, 'Chill Vibes', 'Relaxing and chill music', 'MikeJohnson', '2024-03-10', '18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `passwords`) VALUES
(0, 'IRAGUHA Aristide', 'arystoto47@gmail.com', '@ristide30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`albumid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`Likes_id`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`playlist_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
