
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Table structure for table `wisatawan`
--

CREATE TABLE `wisatawan` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `konfirmPassword` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `wisatawan`
--

INSERT INTO `wisatawan` (`id`, `username`, `password`, `konfirmPassword`,`email`) VALUES
(1, 'rama', '1234', 'fahri279',NULL),
(2, 'rama', 'rama', '1234',NULL ),
(3, 'helmi', 'helmi', 'helmi@gmail.com',NULL),
(4, 'admin', '1234', '123@gmail.com',NULL);




CREATE TABLE `Pemandu` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `pengalaman` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `pemandu`
--

INSERT INTO `Pemandu` (`id`, `username`, `password`, `nama`, `email`, `negara`, `pengalaman`, `jenis_kelamin`,`foto`) VALUES
(1, 'rama', '1234', 'fahri279', 'rama@gmail.com', 'palestina', 'memancing ikan','Laki-Laki'),
(2, 'rama', 'rama', '1234', 'rama@gmail.com', 'palestina', NULL,'Laki-Laki'),
(3, 'helmi', 'helmi', 'helmi@gmail.com', 'helmi@gmail.com', 'indonesia', NULL,'Laki-Laki'),
(4, 'admin', '1234', '123@gmail.com', 'admin@gmail.com', NULL, NULL,'Laki-Laki');




--
-- Indexes for table `wisatawan`
--
ALTER TABLE `wisatawam`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `wisatawan`
--
ALTER TABLE `wisatawan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

  --
-- Indexes for table `Pemandu`
--
ALTER TABLE `Pemandu`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `Pemandu`
--
ALTER TABLE `Pemandu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;