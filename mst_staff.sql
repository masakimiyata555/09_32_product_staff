-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-07-16 10:36:16
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
-- テーブルの構造 `mst_staff`
--

CREATE TABLE `mst_staff` (
  `code` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mst_staff`
--

INSERT INTO `mst_staff` (`code`, `name`, `password`) VALUES
(1, 'ろくまる', '1234567890123456789012'),
(2, '宮田正樹', '宮田正樹'),
(3, '高田日向子', ''),
(4, '高田日向子', ''),
(5, '茶の間', ''),
(6, '茶の間', '8f60c8102d29fcd525162d02eed4566b'),
(7, '東京太郎', '562b530cff1f5bca3b1a4c1ad4ad9962'),
(8, 'pppppp', 'cc2bd8f09bb88b5dd20f9b432631b8ca'),
(9, '東京太郎', 'e61e7de603852182385da5e907b4b232'),
(10, '東京太郎', '6074c6aa3488f3c2dddff2a7ca821aab'),
(11, 'test', 'cb42e130d1471239a27fca6228094f0e'),
(12, '若杉太郎', '11ddbaf3386aea1f2974eee984542152'),
(13, '宮田正樹', '50f84daf3a6dfd6a9f20c9f8ef428942'),
(14, '宮田正樹', '0cc175b9c0f1b6a831c399e269772661'),
(15, '宮田正樹', '0cc175b9c0f1b6a831c399e269772661'),
(16, '茶の間', '11ddbaf3386aea1f2974eee984542152'),
(17, 'test', '386c57017f4658ca5215569643f0189d'),
(18, '宮田正樹', '698d51a19d8a121ce581499d7b701668');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `mst_staff`
--
ALTER TABLE `mst_staff`
  ADD PRIMARY KEY (`code`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `mst_staff`
--
ALTER TABLE `mst_staff`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
