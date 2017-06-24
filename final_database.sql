-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-06-22 07:43:55
-- 伺服器版本: 5.7.14
-- PHP 版本： 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `final_database`
--

-- --------------------------------------------------------

--
-- 資料表結構 `recom`
--

CREATE TABLE `recom` (
  `songname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `singer` varchar(200) CHARACTER SET utf8 NOT NULL,
  `songinform` varchar(200) CHARACTER SET utf8 NOT NULL,
  `recom_num` int(11) NOT NULL DEFAULT '1',
  `u_id` int(11) NOT NULL,
  `recom_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `song`
--

CREATE TABLE `song` (
  `song_id` int(200) NOT NULL,
  `songname` varchar(500) CHARACTER SET utf8 NOT NULL,
  `singer` varchar(500) CHARACTER SET utf8 NOT NULL,
  `link` varchar(500) CHARACTER SET utf8 NOT NULL,
  `clickrate` int(11) NOT NULL DEFAULT '0',
  `recom_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `song`
--

INSERT INTO `song` (`song_id`, `songname`, `singer`, `link`, `clickrate`, `recom_id`) VALUES
(80, 'fghd', 'gfgs', 'gsdfgsdfg', 0, 40),
(84, 'gfsdg', 'gfsdgs', 'gsdfgsdf', 0, 42),
(85, 'gsdfg', 'gsdfg', 'gsdf', 0, 43),
(86, 'gfsdg', 'gfsdgs', 'gsdfgsdf 	', 0, 44);

-- --------------------------------------------------------

--
-- 資料表結構 `userdata`
--

CREATE TABLE `userdata` (
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(20) CHARACTER SET utf8 NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `userdata`
--

INSERT INTO `userdata` (`username`, `password`, `gender`, `u_id`) VALUES
('manager', 'password', 'male', 2),
('user', 'password', 'female', 3),
('alex', 'cc1124', 'male', 4),
('jane', 'jane123', 'female', 5),
('gginin', 'gginin', 'male', 6),
('ggggg', 'ggggg', 'female', 7),
('huaihuai', '123', 'male', 10),
('qwe', '123', 'female', 11),
('huai', '123', 'male', 15),
('jin943751', 'jin943761', 'male', 17),
('a100', 'aaa', 'male', 19),
('aa', 'aa', 'male', 20),
('aaa', 'aaaa', 'male', 22),
('123', '111', 'female', 23),
('feifei', 'q1633218932', 'male', 24);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `recom`
--
ALTER TABLE `recom`
  ADD PRIMARY KEY (`recom_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `u_id_2` (`u_id`);

--
-- 資料表索引 `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `recom_id` (`recom_id`),
  ADD KEY `recom_id_2` (`recom_id`),
  ADD KEY `recom_id_3` (`recom_id`),
  ADD KEY `recom_id_4` (`recom_id`);

--
-- 資料表索引 `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD KEY `username_2` (`username`),
  ADD KEY `username_3` (`username`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `recom`
--
ALTER TABLE `recom`
  MODIFY `recom_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- 使用資料表 AUTO_INCREMENT `userdata`
--
ALTER TABLE `userdata`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `recom`
--
ALTER TABLE `recom`
  ADD CONSTRAINT `recom_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `userdata` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
