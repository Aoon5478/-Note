-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 05:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `note_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(8) NOT NULL,
  `description` text NOT NULL,
  `tag` text NOT NULL,
  `title` text NOT NULL,
  `path_image` text DEFAULT NULL,
  `path_video` text DEFAULT NULL,
  `email_status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `send_status` enum('send','unsend') NOT NULL DEFAULT 'unsend',
  `date_alert` date NOT NULL DEFAULT current_timestamp(),
  `time_alert` time(5) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `create_by` int(8) NOT NULL,
  `update_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `description`, `tag`, `title`, `path_image`, `path_video`, `email_status`, `send_status`, `date_alert`, `time_alert`, `create_date`, `update_date`, `create_by`, `update_by`) VALUES
(3, 'aaaaaaaaaaaaaaaaaaaaa', '', '', NULL, NULL, 'inactive', 'unsend', '2021-10-05', '00:00:00.00000', '2021-09-27 12:38:20', '2021-09-27 23:57:52', 2, 2),
(4, '2027-10-052027-10-052027-10-052027-10-05', '', '', NULL, NULL, 'inactive', 'unsend', '2021-10-05', '00:00:00.00000', '2021-09-28 11:04:17', '2021-09-28 11:04:17', 2, 2),
(5, '2027-10-052027-10-052027-10-052027-10-052027-10-052027-10-052027-10-052027-10-052027-10-052027-10-05', '', '', NULL, NULL, 'inactive', 'unsend', '2027-10-05', '00:00:00.00000', '2021-09-28 11:05:12', '2021-09-28 11:05:12', 2, 2),
(6, '222222222222222', '', '', NULL, NULL, 'inactive', 'unsend', '2021-09-28', '00:00:00.00000', '2021-09-28 12:12:23', '2021-09-28 12:12:23', 1, 1),
(7, 'qweqwqewe', '', '', NULL, NULL, 'inactive', 'unsend', '2021-09-29', '00:00:00.00000', '2021-09-28 12:12:32', '2021-09-28 12:12:32', 1, 1),
(8, 'qweqeweweqew', '', '', NULL, NULL, 'inactive', 'unsend', '2021-09-25', '00:00:00.00000', '2021-09-28 12:12:40', '2021-09-28 12:12:40', 1, 1),
(9, 'aaaaaaaaaaaas', '', '', NULL, NULL, 'inactive', 'unsend', '2021-10-01', '00:00:00.00000', '2021-09-28 13:45:41', '2021-09-28 13:45:41', 1, 1),
(10, 'dafsfdsfa', '', '', NULL, NULL, 'inactive', 'unsend', '2021-10-05', '00:00:00.00000', '2021-09-29 11:12:58', '2021-09-29 11:12:58', 1, 1),
(11, 'หฟกฟหกกหฟกหฟกหฟกหฟกห', '', '', NULL, NULL, 'inactive', 'unsend', '2021-10-01', '00:00:00.00000', '2021-10-01 11:38:31', '2021-10-01 11:38:31', 1, 1),
(12, 'โอ้โหนี่รึบางกอก', '', '', NULL, NULL, 'inactive', 'unsend', '0000-00-00', '00:00:00.00000', '2021-10-07 07:53:53', '2021-10-07 07:53:53', 3, 3),
(13, 'OMG', '', '', NULL, NULL, 'inactive', 'unsend', '2021-10-12', '00:00:00.00000', '2021-10-07 07:54:41', '2021-10-28 21:18:58', 3, 3),
(14, 'my name is sujiwan', '', '', NULL, NULL, 'active', 'unsend', '2021-10-14', '00:00:00.00000', '2021-10-07 07:55:17', '2021-10-06 20:05:40', 3, 3),
(15, 'สุดๆเลยค่าาาา', '', '', NULL, NULL, 'inactive', 'unsend', '2021-10-12', '00:00:00.00000', '2021-10-07 07:55:34', '2021-10-07 07:55:34', 3, 3),
(16, 'hfkjbvhjabrjh', '', '', NULL, NULL, 'active', 'send', '2021-10-07', '00:00:00.00000', '2021-10-07 12:34:17', '2021-10-07 00:45:35', 3, 3),
(17, 'ojhslrkhml.rs', '', '', NULL, NULL, 'inactive', 'unsend', '2021-10-07', '00:00:00.00000', '2021-10-07 13:18:20', '2021-10-07 13:18:20', 4, 4),
(18, '123e', '', '', NULL, NULL, 'inactive', 'unsend', '2021-10-09', '15:53:00.00000', '2021-10-09 08:51:41', '2021-10-09 08:51:41', 3, 3),
(19, 'sdfggfhjy', 'https://www.thesprucepets.com/thmb/sfuyyLvyUx636_Oq3Fw5_mt-PIc=/3760x2820/smart/filters:no_upscale()/adorable-white-pomeranian-puppy-spitz-921029690-5c8be25d46e0fb000172effe.jpg', '', NULL, NULL, 'active', 'send', '2021-10-11', '19:05:00.00000', '2021-10-09 09:04:26', '2021-10-08 21:16:45', 3, 3),
(20, 'Hello edok', '', '', NULL, NULL, 'active', 'unsend', '2021-10-11', '19:09:00.00000', '2021-10-11 12:09:23', '2021-10-11 04:34:55', 3, 3),
(21, 'Helloooooo', '', '', NULL, NULL, 'active', 'send', '2021-10-11', '19:12:00.00000', '2021-10-11 12:11:30', '2021-10-11 00:11:39', 3, 3),
(22, 'กูเบื่ออออมากกกค่าาาาาา', 'https://ggsc.s3.amazonaws.com/images/uploads/The_Science-Backed_Benefits_of_Being_a_Dog_Owner.jpg', '', NULL, NULL, 'inactive', 'unsend', '2021-10-12', '23:32:00.00000', '2021-10-11 16:32:18', '2021-10-11 16:32:18', 3, 3),
(23, 'rwguskhfjkdnkjyh;rulj', '', '', NULL, NULL, 'active', 'unsend', '2021-10-20', '15:08:00.00000', '2021-10-15 08:07:33', '2021-10-14 20:11:49', 3, 3),
(24, '<p>This is This is s</p><figure class=\"table\"><table><tbody><tr><td>a</td><td>b</td><td>c</td><td>d</td><td>r</td><td>f</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>j</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><p>This is some sample content.</p><ol><li><strong>hfjhviyg</strong>ome sample content.some sample content.</li></ol>', '#aaa', '', NULL, NULL, 'inactive', 'unsend', '2021-10-20', '21:47:00.00000', '2021-10-18 11:47:43', '2021-10-18 11:47:43', 3, 3),
(25, '<p>asdfghjjkflhngkfngaoun</p><figure class=\"table\"><table><tbody><tr><td>a</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>b</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '#aaa  ', '', NULL, NULL, 'inactive', 'unsend', '2021-10-19', '19:11:00.00000', '2021-10-18 12:09:58', '2021-10-18 00:36:47', 3, 3),
(26, '<p>ร้านอาหารไทยในอเมริกา</p><p>&nbsp;</p>', '#aaa', '', NULL, NULL, 'inactive', 'unsend', '2021-10-23', '00:00:00.00000', '2021-10-19 07:02:16', '2021-10-19 07:02:16', 3, 3),
(27, '<p>พิมพ์หัวข้อ...</p>', 'hbvjsd', '', NULL, NULL, 'inactive', 'unsend', '0000-00-00', '00:00:00.00000', '2021-10-19 08:04:51', '2021-10-19 08:04:51', 3, 3),
(28, '<p>พิมพ์หัวข้อ...</p>', '', '', NULL, NULL, 'inactive', 'unsend', '0000-00-00', '00:00:00.00000', '2021-10-19 14:57:43', '2021-10-19 14:57:43', 3, 3),
(29, '<p>พิมพ์หัวข้อ...</p>', '', '', NULL, NULL, 'inactive', 'unsend', '0000-00-00', '00:00:00.00000', '2021-10-19 14:57:53', '2021-10-19 14:57:53', 3, 3),
(30, '<p>พิมพ์หัวข้อ...</p>', '', '', NULL, NULL, 'inactive', 'unsend', '0000-00-00', '00:00:00.00000', '2021-10-19 14:58:12', '2021-10-19 14:58:12', 3, 3),
(31, '<p>รายการ</p>', '#aaa', '', NULL, NULL, 'inactive', 'unsend', '2021-10-23', '17:59:00.00000', '2021-10-22 10:57:51', '2021-10-22 10:57:51', 3, 3),
(32, '<p>qqqqq</p>', '#aaa', '', NULL, NULL, 'inactive', 'unsend', '2021-10-22', '17:00:00.00000', '2021-10-22 10:58:26', '2021-10-22 10:58:26', 3, 3),
(33, '<p>kjkhknbnv</p>', '#aaa', '', NULL, NULL, 'inactive', 'unsend', '2021-10-12', '18:07:00.00000', '2021-10-22 11:06:27', '2021-10-22 11:06:27', 3, 3),
(34, '<p>asdfgfgsdcvscdvsagc</p>', '#aaa', '', NULL, NULL, 'inactive', 'unsend', '2021-10-27', '20:10:00.00000', '2021-10-22 11:10:58', '2021-10-22 11:10:58', 3, 3),
(35, '<p>พิมพ์หัวข้อ...</p>', '#aaa', '', './files/19ff2abc1da045eec584fffcadf4cb35af6694f572fda5fe/Screenshot (11).png', './files/197ab258ab19584bb984ee7d5a95723bafeacffd13a493cf/6121614137-700-32.mp4', 'inactive', 'unsend', '2021-10-13', '19:14:00.00000', '2021-10-22 12:11:43', '2021-10-22 12:11:43', 3, 3),
(36, '<p>พิมพ์หัวข้อ...</p>', '#aaa', 'รายการของที่ซื้อ', './files/6c2a9a1b983f02889f053308140b3a90b03f1ec6d009df44/', './files/37753d944fd97cfadfae2059280f7ca1c690677f252a1728/', 'active', 'unsend', '2021-10-05', '19:42:00.00000', '2021-10-24 12:39:19', '2021-10-28 21:12:41', 3, 3),
(37, '<ol><li>แมงดาตุ๋น</li><li>กุ๊ดจี่ทอด</li><li>แมงแงาดองซีอิ๊ว</li><li>รายการของ</li></ol><figure class=\"table\"><table><tbody><tr><td>ลำดับ</td><td>รายการ</td><td>ราคา</td></tr><tr><td>1</td><td>กระทะ</td><td>450</td></tr><tr><td>2</td><td>น้ำมัน</td><td>45</td></tr></tbody></table></figure>', ' #food', 'รายการอาหารวันนี้', './files/4638d53039f22a4371f22b54f9b86ae09112f5bc97a7b53d/กุดจี่เบ้า.jpg', './files/c4a7ad78cd3d4cd942977d7c38a55d694e590bcb1b7d132f/', 'active', 'unsend', '0000-00-00', '00:00:00.00000', '2021-10-27 16:40:00', '2021-10-27 04:45:38', 5, 5),
(38, '<p>555</p>', '5555', '555', './files/f2fb23015c76cb50099c77c0994e046755f824058a94223f/', './files/683495d2fc231d5a7beedf9124e6be191d5064853e52a7f1/', 'inactive', 'unsend', '2021-10-29', '07:55:00.00000', '2021-10-29 12:55:33', '2021-10-29 12:55:33', 9, 9),
(39, '', '', '', './files/4839f5b66d3308c07ec83b42a140991aaac0714499ff6227/', './files/ee82643ebc3fa7d7b42040d9e0ba6ce523d3df6012cb481f/', 'inactive', 'unsend', '2021-10-29', '20:41:00.00000', '2021-10-29 13:41:14', '2021-10-29 13:41:14', 9, 9),
(40, '', '', '', './files/d4d57d28a2fa7f5b724381b9704fd3466aca883f0343b49e/', './files/fd615bfc9c075e5b43dd14fb1212876fd19042a8409269ba/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:20', '2021-10-29 13:41:20', 9, 9),
(41, '', '', '', './files/1595d0a05f1ca9f93add627b03c81fc65aaaa50bbfa23ec3/', './files/14987f2f43cad29764c866e7dc122c849c30d21168963e82/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:22', '2021-10-29 13:41:22', 9, 9),
(42, '', '', '', './files/9aabe182dd53e82ec8331aa7657c5188e81a40a169695cf9/', './files/49bf085766b80c1aae0834f364accf6a5bc607c051221b3d/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:25', '2021-10-29 13:41:25', 9, 9),
(43, '', '', '', './files/fb66c0ffae4080d7b0335febd0076938f33820efd93b081a/', './files/cd6e693f5fa60847c9e0c1f56a8579aa7c17e5fae8d92bbb/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:27', '2021-10-29 13:41:27', 9, 9),
(44, '', '', '', './files/b4cdcd21a1180f7c5296b8afb8f6353900fd82c67e19f974/', './files/0dbf9db264b3bb420fde0d60eda6ae1e66876f27b6f1acfb/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:30', '2021-10-29 13:41:30', 9, 9),
(45, '', '', '', './files/7baacf7a33f673f12855b0fbef87f4f357608d6ac81221d2/', './files/e1ecaf7e62b56c9b55fec2116ae6539ae38902b94dfb1b32/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:32', '2021-10-29 13:41:32', 9, 9),
(46, '', '', '', './files/b722c1586b812287b642759a693d1f3a843b7961da264df2/', './files/e0aafa9736632e7864000b9b8f7d06ef6776eee89ef45c92/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:35', '2021-10-29 13:41:35', 9, 9),
(47, '', '', '', './files/39bb91c14b14b68ec2b6c74f4cc07bd507ae2de3981dd126/', './files/70fbdfd21b44bc25e14c8e650f9d3a8f06ceea87bd01cd49/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:37', '2021-10-29 13:41:37', 9, 9),
(48, '', '', '', './files/9a5520231a04c2a3c4f5dabb7ef69847d9b6c67e9b7c7899/', './files/6cad3b4992d15b6e097f62ca41ef9dee53f50b6232613bdf/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:40', '2021-10-29 13:41:40', 9, 9),
(49, '', '', '', './files/7b1a3443cab853f1beb9896c6e7aefd215f09dcda3be20b3/', './files/fe90ec48eea5f3a3253ea9402b7ecee3ab51b8dedf1ddcf1/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:42', '2021-10-29 13:41:42', 9, 9),
(50, '', '', '', './files/745caf9a79f7ca609f26e650119bc738351c1137642bea7d/', './files/b413afaa26a20ed4c2ef2aac8efaf6aa751784bbf34521bd/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:44', '2021-10-29 13:41:44', 9, 9),
(51, '', '', '', './files/50b7277e6075655067f92778ec2da39f00e21a9b77556334/', './files/d4bac0c26dfd19b579d562bdbf69701799935ceee34c8f7a/', 'inactive', 'unsend', '2021-10-29', '00:00:00.00000', '2021-10-29 13:41:46', '2021-10-29 13:41:46', 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_by` int(8) NOT NULL,
  `update_by` int(8) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `create_by`, `update_by`, `create_date`, `update_date`) VALUES
(1, 'a', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', '60160027@go.buu.ac.th', 0, 0, '2021-09-25 10:43:54', '2021-09-25 10:43:54'),
(2, 'c', '84a516841ba77a5b4648de2cd0dfcb30ea46dbb4', 'c@cmail.mail.com', 0, 0, '2021-09-28 11:03:11', '2021-09-28 11:03:11'),
(3, 'aaon', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'aonsujiwan@gmail.com', 0, 0, '2021-10-07 07:52:36', '2021-10-07 07:52:36'),
(4, 'aa', '75dca01832391c098332c8217cb5ca0461ced07c', 'sujiwa.s@ku.th', 0, 0, '2021-10-07 13:17:58', '2021-10-07 13:17:58'),
(5, 'tawannsun', 'e5fdfecfc553986c951e0e21dbbff37e5462f772', 'tawanokgood@gmail.com', 0, 0, '2021-10-27 16:27:48', '2021-10-27 16:27:48'),
(7, 'sadsad', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'qwewqeqw@gmail.com', 0, 0, '2021-10-28 11:36:54', '2021-10-28 11:36:54'),
(8, 'AAA', 'a09db08e34078b2c3e696a0cf0021882c7f8d804', 'aonsujiwan@gmail.com', 0, 0, '2021-10-29 08:03:16', '2021-10-29 08:03:16'),
(9, 'supakjack', '03072df361cf6a6dbc90a41ae19badc47ca2f079', 'supakjack@gmail.com', 0, 0, '2021-10-29 12:48:35', '2021-10-29 12:48:35'),
(10, 'olo', '$2a$08$XjWwZ5M8HdxpXhl.s5SVUecjA340HRJ83tjXJlacFlPxT0nB9XQ/O', 'supakjack@gmail.com', 0, 0, '2021-10-29 15:04:53', '2021-10-29 15:04:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
