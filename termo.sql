-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: nov. 29, 2020 la 03:18 PM
-- Versiune server: 10.4.14-MariaDB
-- Versiune PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `termo`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `adminlogin`
--

CREATE TABLE `adminlogin` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) NOT NULL,
  `a_email` varchar(60) NOT NULL,
  `a_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `adminlogin`
--

INSERT INTO `adminlogin` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Admin', 'admin@yahoo.com', 'admin');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `assets`
--

CREATE TABLE `assets` (
  `pid` int(11) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `pdop` date NOT NULL,
  `pava` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `poriginalcost` int(11) NOT NULL,
  `psellingcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `assets`
--

INSERT INTO `assets` (`pid`, `pname`, `pdop`, `pava`, `ptotal`, `poriginalcost`, `psellingcost`) VALUES
(2, 'Fitinguri', '2020-11-26', -85, 20, 300, 400),
(3, 'Tub PVC', '2020-11-26', 12, 12, 500, 700);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `assignwork`
--

CREATE TABLE `assignwork` (
  `rno` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `requester_name` varchar(100) NOT NULL,
  `requester_add1` text NOT NULL,
  `requester_add2` text NOT NULL,
  `requester_city` varchar(80) NOT NULL,
  `requester_state` varchar(60) NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) NOT NULL,
  `requester_mobile` bigint(20) NOT NULL,
  `assign_tech` varchar(80) NOT NULL,
  `assign_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `assignwork`
--

INSERT INTO `assignwork` (`rno`, `request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `assign_tech`, `assign_date`) VALUES
(2, 3, 'Buda infundata #2', 'lorem ipsum dolores', 'Pulica', 'str hotilor', 'nr 16, ap. 22', 'Alba Iulia', 'Alba', 510255, 'pulica@yahoo.com', 258854695, 'Andrei', '2020-11-24');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `customer`
--

CREATE TABLE `customer` (
  `custid` int(11) NOT NULL,
  `custname` varchar(100) NOT NULL,
  `custadd` varchar(150) NOT NULL,
  `cpname` varchar(100) NOT NULL,
  `cpquantity` int(11) NOT NULL,
  `cpeach` int(11) NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `customer`
--

INSERT INTO `customer` (`custid`, `custname`, `custadd`, `cpname`, `cpquantity`, `cpeach`, `cptotal`, `cpdate`) VALUES
(1, 'Daniel', 'str. Closca, nr. 16, ap. 26', 'Fitinguri', 100, 4000, 4000000, '2020-11-30');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `requesterlogin`
--

CREATE TABLE `requesterlogin` (
  `r_login_id` int(11) NOT NULL,
  `r_name` varchar(60) NOT NULL,
  `r_email` varchar(60) NOT NULL,
  `r_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `requesterlogin`
--

INSERT INTO `requesterlogin` (`r_login_id`, `r_name`, `r_email`, `r_password`) VALUES
(6, 'John Doe', 'john@doe.com', 'test123'),
(7, 'Andrei', 'andrei@yahoo.com', 'and123');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `submitrequest`
--

CREATE TABLE `submitrequest` (
  `request_id` int(11) NOT NULL,
  `request_info` varchar(200) NOT NULL,
  `request_desc` text NOT NULL,
  `requester_name` varchar(150) NOT NULL,
  `requester_add1` text NOT NULL,
  `requester_add2` text NOT NULL,
  `requester_city` varchar(150) NOT NULL,
  `requester_state` varchar(60) NOT NULL,
  `requester_zip` bigint(20) NOT NULL,
  `requester_email` varchar(150) NOT NULL,
  `requester_mobile` bigint(20) NOT NULL,
  `requester_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `submitrequest`
--

INSERT INTO `submitrequest` (`request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `requester_date`) VALUES
(3, 'Buda infundata #2', 'lorem ipsum dolores', 'Pulica', 'str hotilor', 'nr 16, ap. 22', 'Alba Iulia', 'Alba', 510255, 'pulica@yahoo.com', 258854695, '2020-11-07');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `technician`
--

CREATE TABLE `technician` (
  `empid` int(11) NOT NULL,
  `empName` varchar(100) NOT NULL,
  `empCity` varchar(80) NOT NULL,
  `empMobile` bigint(20) NOT NULL,
  `empEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `technician`
--

INSERT INTO `technician` (`empid`, `empName`, `empCity`, `empMobile`, `empEmail`) VALUES
(1, 'Alexandru', 'Alba Iulia', 72664425, 'alxprda@yahoo.com');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexuri pentru tabele `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`pid`);

--
-- Indexuri pentru tabele `assignwork`
--
ALTER TABLE `assignwork`
  ADD PRIMARY KEY (`rno`);

--
-- Indexuri pentru tabele `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custid`);

--
-- Indexuri pentru tabele `requesterlogin`
--
ALTER TABLE `requesterlogin`
  ADD PRIMARY KEY (`r_login_id`);

--
-- Indexuri pentru tabele `submitrequest`
--
ALTER TABLE `submitrequest`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexuri pentru tabele `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pentru tabele `assets`
--
ALTER TABLE `assets`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pentru tabele `assignwork`
--
ALTER TABLE `assignwork`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pentru tabele `customer`
--
ALTER TABLE `customer`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pentru tabele `requesterlogin`
--
ALTER TABLE `requesterlogin`
  MODIFY `r_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pentru tabele `submitrequest`
--
ALTER TABLE `submitrequest`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pentru tabele `technician`
--
ALTER TABLE `technician`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
