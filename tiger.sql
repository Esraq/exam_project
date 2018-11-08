-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 10:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiger`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('esraq26552@gmail.com', 'chatara823361');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `environment`
--

CREATE TABLE `environment` (
  `number` int(10) NOT NULL,
  `notice1` varchar(255) NOT NULL,
  `notice2` varchar(255) NOT NULL,
  `notice3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eslot1`
--

CREATE TABLE `eslot1` (
  `number` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eslot1`
--

INSERT INTO `eslot1` (`number`, `link`) VALUES
(1, '<a href="#">Test link</a>');

-- --------------------------------------------------------

--
-- Table structure for table `eslot2`
--

CREATE TABLE `eslot2` (
  `number` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eslot2`
--

INSERT INTO `eslot2` (`number`, `link`) VALUES
(2, '<a href="#">Second test</a>');

-- --------------------------------------------------------

--
-- Table structure for table `eslot3`
--

CREATE TABLE `eslot3` (
  `number` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eslot3`
--

INSERT INTO `eslot3` (`number`, `link`) VALUES
(3, '<a href="#">Click third link</a>');

-- --------------------------------------------------------

--
-- Table structure for table `image1`
--

CREATE TABLE `image1` (
  `number` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `design` varchar(255) NOT NULL,
  `art` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image1`
--

INSERT INTO `image1` (`number`, `code`, `design`, `art`) VALUES
(1, '	<a href="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/18952738_261437744332602_1575123373626076697_n.jpg?oh=63b6b4e1b0fc7a15cddf7be5afefe93c&oe=59E2A115" title="First image">		  ', '<img class="gallery_img" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/18952738_261437744332602_1575123373626076697_n.jpg?oh=63b6b4e1b0fc7a15cddf7be5afefe93c&oe=59E2A115" alt="img" />			  ', '	 <span class="view_btn">View</span>\r\n                </a>		  ');

-- --------------------------------------------------------

--
-- Table structure for table `image2`
--

CREATE TABLE `image2` (
  `number` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `design` varchar(255) NOT NULL,
  `art` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image2`
--

INSERT INTO `image2` (`number`, `code`, `design`, `art`) VALUES
(2, '  <a href="img/gallery/b.jpg" title="This is Title2">			  ', ' <img class="gallery_img" src="img/gallery/a.jpg" alt="img" />			  ', ' <span class="view_btn">View</span>\r\n                </a>			  ');

-- --------------------------------------------------------

--
-- Table structure for table `image3`
--

CREATE TABLE `image3` (
  `number` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `design` varchar(255) NOT NULL,
  `art` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image3`
--

INSERT INTO `image3` (`number`, `code`, `design`, `art`) VALUES
(20, '<a href="img/gallery/c.jpg" title="This is Title3">			  ', '<img class="gallery_img" src="img/gallery/c.jpg" alt="img" />			  ', '	<span class="view_btn">View</span>\r\n                </a>		  ');

-- --------------------------------------------------------

--
-- Table structure for table `image4`
--

CREATE TABLE `image4` (
  `number` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `design` varchar(255) NOT NULL,
  `art` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image4`
--

INSERT INTO `image4` (`number`, `code`, `design`, `art`) VALUES
(1, ' <a href="img/gallery/c.jpg" title="Imagge 4">			  ', '<img class="gallery_img" src="img/gallery/b.jpg" alt="img" />			  ', '<span class="view_btn">View</span>			  ');

-- --------------------------------------------------------

--
-- Table structure for table `image5`
--

CREATE TABLE `image5` (
  `number` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `design` varchar(255) NOT NULL,
  `art` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image5`
--

INSERT INTO `image5` (`number`, `code`, `design`, `art`) VALUES
(12, '  <a href="img/gallery/e.jpg" title="Image5">			  ', '<img class="gallery_img" src="img/gallery/b.jpg" alt="img" />			  ', '<span class="view_btn">View</span>			  ');

-- --------------------------------------------------------

--
-- Table structure for table `image6`
--

CREATE TABLE `image6` (
  `number` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `design` varchar(255) NOT NULL,
  `art` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image6`
--

INSERT INTO `image6` (`number`, `code`, `design`, `art`) VALUES
(1, '<a href="img/gallery/f.jpg">			  ', '<img class="gallery_img" src="img/gallery/f.jpg" alt="img" />			  ', ' <span class="view_btn">View</span>			  ');

-- --------------------------------------------------------

--
-- Table structure for table `image7`
--

CREATE TABLE `image7` (
  `number` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `design` varchar(255) NOT NULL,
  `art` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image7`
--

INSERT INTO `image7` (`number`, `code`, `design`, `art`) VALUES
(12, '	 <a href="img/gallery/g.jpg">		  ', '                  <img class="gallery_img" src="img/gallery/g.jpg" alt="img" />			  ', ' <span class="view_btn">View</span>			  ');

-- --------------------------------------------------------

--
-- Table structure for table `image8`
--

CREATE TABLE `image8` (
  `name` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `design` varchar(255) NOT NULL,
  `art` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image8`
--

INSERT INTO `image8` (`name`, `code`, `design`, `art`) VALUES
(32, '	<a href="img/gallery/h.jpg">		  ', '	 <img class="gallery_img" src="img/gallery/h.jpg" alt="img" />		  ', '	 <span class="view_btn">View</span>\r\n                </a>		  ');

-- --------------------------------------------------------

--
-- Table structure for table `important1`
--

CREATE TABLE `important1` (
  `number` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `important1`
--

INSERT INTO `important1` (`number`, `link`) VALUES
(1, '<a href="#">Important link 1</a>');

-- --------------------------------------------------------

--
-- Table structure for table `important2`
--

CREATE TABLE `important2` (
  `number` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `important2`
--

INSERT INTO `important2` (`number`, `link`) VALUES
(2, '<a href="#">Click for third link</a>');

-- --------------------------------------------------------

--
-- Table structure for table `important3`
--

CREATE TABLE `important3` (
  `number` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `important3`
--

INSERT INTO `important3` (`number`, `link`) VALUES
(3, '<a href="#">third link</a>');

-- --------------------------------------------------------

--
-- Table structure for table `n3`
--

CREATE TABLE `n3` (
  `number` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `n3`
--

INSERT INTO `n3` (`number`, `link`) VALUES
(1, '	Wait till the notice		  ');

-- --------------------------------------------------------

--
-- Table structure for table `notice1`
--

CREATE TABLE `notice1` (
  `number` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice1`
--

INSERT INTO `notice1` (`number`, `link`) VALUES
(1, '	22nd June 2017 our Isabela foundations new journey will begin		  ');

-- --------------------------------------------------------

--
-- Table structure for table `notice2`
--

CREATE TABLE `notice2` (
  `number` int(1) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice2`
--

INSERT INTO `notice2` (`number`, `link`) VALUES
(2, '	Our some event will take place and you will get notifictions soon.		  ');

-- --------------------------------------------------------

--
-- Table structure for table `notice3`
--

CREATE TABLE `notice3` (
  `number` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penvironment`
--

CREATE TABLE `penvironment` (
  `number` int(10) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `link3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penvironment`
--

INSERT INTO `penvironment` (`number`, `link1`, `link2`, `link3`) VALUES
(1, '<a href="#">link1</a>', '<a href="#">link2</a>', '<a href="#">link3</a>');

-- --------------------------------------------------------

--
-- Table structure for table `slot1`
--

CREATE TABLE `slot1` (
  `number` int(1) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot1`
--

INSERT INTO `slot1` (`number`, `link`) VALUES
(1, '<a href="#">Isabela new office launch event 22.6.17</a>');

-- --------------------------------------------------------

--
-- Table structure for table `slot2`
--

CREATE TABLE `slot2` (
  `number` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot2`
--

INSERT INTO `slot2` (`number`, `link`) VALUES
(2, '<a href="gallery.php">Latest images during these years</a>');

-- --------------------------------------------------------

--
-- Table structure for table `slot3`
--

CREATE TABLE `slot3` (
  `number` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot3`
--

INSERT INTO `slot3` (`number`, `link`) VALUES
(1, '<a href="gallery.php">Swatch tour images</a>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
