-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-07-16 10:37:04
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsf_d06_db32`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `maruyo_product`
--

CREATE TABLE `maruyo_product` (
  `code` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `gazou` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `maruyo_product`
--

INSERT INTO `maruyo_product` (`code`, `name`, `price`, `gazou`) VALUES
(0, 'test', 1000, ''),
(0, 'test', 10000, ''),
(0, 'test2', 7000, ''),
(0, 'test4', 8000, ''),
(0, 'コンクリート', 1500, ''),
(0, 'コンクリート', 1500, ''),
(0, 'test10', 10000, ''),
(0, 'test11', 2000, ''),
(0, 'test12', 500, ''),
(0, 'test15', 300, 'concrete.png'),
(0, 'test16', 400, 'concrete.png'),
(0, 'test20', 2040, 'アングル.png'),
(0, 'test20', 10000, 'concrete.png'),
(0, 'test16', 15000, 'concrete.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
