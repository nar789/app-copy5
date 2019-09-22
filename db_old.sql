-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- 생성 시간: 17-11-26 15:37
-- 서버 버전: 10.1.13-MariaDB
-- PHP 버전: 7.0.0p1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `iop0907`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `ref`
--

CREATE TABLE IF NOT EXISTS `ref` (
  `no` int(11) NOT NULL primary key auto_increment,
  `imgurl` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `ref`
--

INSERT INTO `ref` (`no`, `imgurl`, `url`) VALUES
(1, null, 'http://me2.do/x2iphweU'),
(2, null, 'http://me2.do/5zBylG9l'),
(3, null, 'http://me2.do/5zBylG9l'),
(4, null, 'http://me2.do/5zBylG9l'),
(5, null, 'http://me2.do/5zBylG9l'),
(6, null, 'http://me2.do/5zBylG9l'),
(7, null, 'http://me2.do/5zBylG9l'),
(8, null, 'http://me2.do/5zBylG9l'),
(9, null, 'http://me2.do/5zBylG9l'),
(10, null, 'http://me2.do/5zBylG9l');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `ref`
--
ALTER TABLE `ref`
  ADD PRIMARY KEY (`no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
