-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 
-- サーバのバージョン： 10.4.8-MariaDB
-- PHP のバージョン: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `my_portfolio`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `accounts`
--

INSERT INTO `accounts` (`account_id`, `username`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'A'),
(4, 'table1', '81dc9bdb52d04dc20036dbd8313ed055', 'U'),
(5, 'table2', '81dc9bdb52d04dc20036dbd8313ed055', 'U');

-- --------------------------------------------------------

--
-- テーブルの構造 `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `bills`
--

INSERT INTO `bills` (`bill_id`, `account_id`, `menu_id`, `order_id`) VALUES
(1, 4, 7, 1),
(2, 4, 4, 2),
(4, 4, 7, 1),
(5, 4, 4, 2),
(6, 4, 1, 3),
(7, 4, 2, 4),
(11, 4, 7, 1),
(12, 4, 4, 2),
(13, 4, 1, 3),
(14, 4, 2, 4),
(15, 5, 5, 5),
(16, 5, 7, 6);

-- --------------------------------------------------------

--
-- テーブルの構造 `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'pasta'),
(2, 'pizza'),
(3, 'meat'),
(4, 'fish'),
(5, 'drink'),
(6, 'dessert');

-- --------------------------------------------------------

--
-- テーブルの構造 `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_price` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `menu_picture` varchar(100) NOT NULL,
  `menu_amount` varchar(1000) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_price`, `category_id`, `menu_picture`, `menu_amount`) VALUES
(1, 'Meat sauce pasta', '250', '1', '2475981.jpg', '0'),
(2, 'Italian pizza', '200', '2', '7211.jpg', '0'),
(3, 'Beef steak', '500', '3', '3358.jpg', '0'),
(4, 'Salmon grill', '250', '4', 'grilled-salmon-fish-on-rectangular-black-ceramic-plate-842142.jpg', '0'),
(5, 'Orange juice', '120', '5', 'selective-focus-photography-of-pure-orange-juice-158053.jpg', '0'),
(6, 'Chocolate cake', '150', '6', 'blueberries-cake-chocolate-chocolate-cake-291528.jpg', '0'),
(7, 'Seafood pasta', '250', '1', 'cooked-shrimp-with-noodles-725997.jpg', '0'),
(8, 'Pork steak', '450', '3', 'asparagus-barbecue-cuisine-delicious-361184.jpg', '0'),
(9, 'Lemon tea', '120', '5', 'lemon-iced-tea-with-lemon-fruits-792613.jpg', '0'),
(10, 'Cheesecake', '250', '6', 'cheesecake-1126359.jpg', '0');

-- --------------------------------------------------------

--
-- テーブルの構造 `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_time` datetime NOT NULL DEFAULT current_timestamp(),
  `serve_time` datetime DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `order_quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `orders`
--

INSERT INTO `orders` (`order_id`, `order_time`, `serve_time`, `menu_id`, `account_id`, `order_quantity`) VALUES
(1, '2020-02-18 19:26:26', '2020-02-18 19:31:05', 7, 4, '1'),
(2, '2020-02-18 19:27:44', '2020-02-18 19:30:37', 4, 4, '2'),
(3, '2020-02-18 19:31:16', '2020-02-18 19:31:53', 1, 4, '10'),
(4, '2020-02-18 19:31:19', '2020-02-18 19:31:55', 2, 4, '10'),
(5, '2020-02-18 19:33:13', '2020-02-18 19:34:19', 5, 5, '5'),
(6, '2020-02-18 19:33:19', '2020-02-18 19:34:18', 7, 5, '5'),
(7, '2020-02-19 23:05:21', NULL, 2, 4, '2');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `address`, `contact_number`, `email`, `account_id`) VALUES
(1, 'admin', 'admin', 'admin', '1234', 'admin@email.com', 1),
(4, 'Ryo', 'Shinkawa', 'Japan', '1234', 'ryo@email.com', 4),
(5, 'Ryo', 'Shinkawa', 'Japan', '1234', 'ryo@email.com', 5);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- テーブルのインデックス `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`);

--
-- テーブルのインデックス `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- テーブルのインデックス `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- テーブルのインデックス `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルのAUTO_INCREMENT `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- テーブルのAUTO_INCREMENT `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルのAUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルのAUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- テーブルのAUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
