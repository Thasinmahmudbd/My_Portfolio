-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 09:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_info_table`
--

CREATE TABLE `basic_info_table` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `number_1` varchar(20) NOT NULL,
  `number_2` varchar(20) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `fb_page` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `pinterest` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `fiverr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_info_table`
--

INSERT INTO `basic_info_table` (`id`, `name`, `about`, `email`, `number_1`, `number_2`, `fb`, `fb_page`, `insta`, `linkedin`, `pinterest`, `github`, `fiverr`) VALUES
(1, 'Thasin', 'I work as a web-developer. I\'ve 2 years of experience under my belt. I use HTML, CSS, Javascript, PHP, Laravel & Git on my projects. Hit me up if you have something on your mind.', 'thasinmahmud.bd@gmail.com', '01984983948', '01757758904', 'https://www.facebook.com/thasinmahmud.bd/', '', '', 'https://www.linkedin.com/in/thasinmahmudbd/', '', 'https://github.com/Thasinmahmudbd', 'https://www.fiverr.com/thasin_bd?up_rollout=true');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_table`
--

CREATE TABLE `blogs_table` (
  `blogs_id` int(11) NOT NULL,
  `blogs_title` varchar(100) NOT NULL,
  `blogs_highlight` text NOT NULL,
  `blogs_post` text NOT NULL,
  `main_tag` varchar(30) NOT NULL,
  `tag_2` varchar(30) NOT NULL,
  `tag_3` varchar(30) NOT NULL,
  `tag_4` varchar(30) NOT NULL,
  `tag_5` varchar(30) NOT NULL,
  `blog_date` varchar(30) NOT NULL,
  `blog_status` varchar(10) NOT NULL DEFAULT 'drafted',
  `blog_picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs_table`
--

INSERT INTO `blogs_table` (`blogs_id`, `blogs_title`, `blogs_highlight`, `blogs_post`, `main_tag`, `tag_2`, `tag_3`, `tag_4`, `tag_5`, `blog_date`, `blog_status`, `blog_picture`) VALUES
(1, 'test title', 'test highlight', '<p><strong>test </strong>post</p>\r\n', 'main tag', 'sub tag', 'sub tag', 'sub tag', '', 'June 1, 2021, 2:23 am', 'published', '60b5f2a7bbf264.19962067.jpg'),
(3, 'test title 3', 'highlight 3', '<p><span class=\"marker\"><strong>test 3 </strong></span><strong>updated</strong></p>\r\n', 'main tag', 'sub tag 3', 'sub tag', '', '', 'June 1, 2021, 3:06 am', 'published', '60b6022c04b236.46348612.jpg'),
(4, 'test title is 4 update test', 'highlight 4 updated', '<p><s>test</s> updated</p>\r\n', 'a tag updated', '', '', '', '', 'June 1, 2021, 3:07 am', 'drafted', '60b5f2810972c9.72113909.jpg'),
(5, 'test title 5', 'ggg', '<p>ggg</p>\r\n', 'vv', '', '', '', '', 'June 1, 2021, 3:50 am', 'published', '60b5f56344ba48.11230519.jpg'),
(6, 'test no 6', 'test', '<p>test</p>\r\n', 'test', '', '', '', '', 'June 1, 2021, 4:02 pm', 'drafted', '60b6061de6c603.59321043.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client_confidentiality_table`
--

CREATE TABLE `client_confidentiality_table` (
  `client_confidentiality_policy_id` int(11) NOT NULL,
  `client_confidentiality_policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_confidentiality_table`
--

INSERT INTO `client_confidentiality_table` (`client_confidentiality_policy_id`, `client_confidentiality_policy`) VALUES
(1, 'this is a test no 1'),
(3, 'test 2\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customers_issues_table`
--

CREATE TABLE `customers_issues_table` (
  `customers_issues_id` int(11) NOT NULL,
  `customers_full_name` varchar(30) NOT NULL,
  `customers_email` varchar(100) NOT NULL,
  `customers_mobile` varchar(30) NOT NULL,
  `customers_issues` text NOT NULL,
  `issues_date` varchar(30) NOT NULL,
  `issue_status` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_issues_table`
--

INSERT INTO `customers_issues_table` (`customers_issues_id`, `customers_full_name`, `customers_email`, `customers_mobile`, `customers_issues`, `issues_date`, `issue_status`) VALUES
(1, 'Thasin', 'thasinmahmud.bd@gmail.com', '01984983948', 'no issue', 'May 29, 2021, 9:23 pm', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `developers_support_table`
--

CREATE TABLE `developers_support_table` (
  `developers_support_policy_id` int(11) NOT NULL,
  `developers_support_policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `developers_support_table`
--

INSERT INTO `developers_support_table` (`developers_support_policy_id`, `developers_support_policy`) VALUES
(1, 'this is a test no 1'),
(3, 'this is test no 2');

-- --------------------------------------------------------

--
-- Table structure for table `learn_more_table`
--

CREATE TABLE `learn_more_table` (
  `learn_more_article_id` int(11) NOT NULL,
  `learn_more_article_title` varchar(50) NOT NULL,
  `learn_more_article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learn_more_table`
--

INSERT INTO `learn_more_table` (`learn_more_article_id`, `learn_more_article_title`, `learn_more_article`) VALUES
(1, 'title', 'test 1'),
(4, 'title 2', 'test 2'),
(5, 'test 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `customer_full_name` varchar(30) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_mobile` varchar(20) NOT NULL,
  `orders` text NOT NULL,
  `order_date` varchar(30) NOT NULL,
  `order_status` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `customer_full_name`, `customer_email`, `customer_mobile`, `orders`, `order_date`, `order_status`) VALUES
(2, 'Thasin', 'doostupi@gmail.com', '01711375724', 'hello', 'May 29, 2021, 9:36 pm', 'Working on it');

-- --------------------------------------------------------

--
-- Table structure for table `projects_table`
--

CREATE TABLE `projects_table` (
  `projects_id` int(11) NOT NULL,
  `projects_title` varchar(100) NOT NULL,
  `projects_details` text NOT NULL,
  `go_live_link` varchar(100) NOT NULL,
  `git_hub_link` varchar(100) NOT NULL,
  `priority` tinyint(4) NOT NULL,
  `main_tag` varchar(30) NOT NULL,
  `sub_tag_2` varchar(30) NOT NULL,
  `sub_tag_3` varchar(30) NOT NULL,
  `project_image` varchar(50) NOT NULL,
  `project_status` varchar(12) NOT NULL DEFAULT 'drafted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects_table`
--

INSERT INTO `projects_table` (`projects_id`, `projects_title`, `projects_details`, `go_live_link`, `git_hub_link`, `priority`, `main_tag`, `sub_tag_2`, `sub_tag_3`, `project_image`, `project_status`) VALUES
(4, 'test 2', 'test test test', 'http://test.updated.com', 'http://test.updated.com', 0, 'test', '', '', '60b643cb866f57.47091191.jpg', 'published'),
(5, 'test 3', 'test', 'http://test.updated.com', 'http://test.updated.com', 0, 'a test', 'test', 'test', '60b646510b1693.10534360.jpg', 'drafted'),
(6, 'test 4', '<ol>\r\n	<li>this</li>\r\n	<li>is</li>\r\n	<li>a</li>\r\n	<li>test</li>\r\n</ol>\r\n\r\n<p><strong>hello </strong>how are <span class=\"marker\">you</span>? <a href=\"http://www.google.com\">google</a></p>\r\n', 'http://test.updated.com', 'http://test.updated.com', 1, 'test', '', '', '60b8ad28227825.66474442.jpg', 'drafted');

-- --------------------------------------------------------

--
-- Table structure for table `refund_policy_table`
--

CREATE TABLE `refund_policy_table` (
  `refund_policy_id` int(11) NOT NULL,
  `refund_policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refund_policy_table`
--

INSERT INTO `refund_policy_table` (`refund_policy_id`, `refund_policy`) VALUES
(1, 'this is a test no 1'),
(3, 'test 2');

-- --------------------------------------------------------

--
-- Table structure for table `security_table`
--

CREATE TABLE `security_table` (
  `security_id` int(11) NOT NULL,
  `p_word` varchar(100) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `otp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security_table`
--

INSERT INTO `security_table` (`security_id`, `p_word`, `pin`, `otp`) VALUES
(1, '$2y$10$22charactersarepreseneCohjJUSBgmXGaJZcwOoDmXSsQk2hwxq', 'Admin', '$2y$10$22charactersarepreseneZo.r1nLuGp8hYAuoUDa0ZJHPW38bd56');

-- --------------------------------------------------------

--
-- Table structure for table `store_table`
--

CREATE TABLE `store_table` (
  `products_id` int(11) NOT NULL,
  `products_title` varchar(100) NOT NULL,
  `products_details` text NOT NULL,
  `go_live_link` varchar(100) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL,
  `main_tag` varchar(30) NOT NULL,
  `sub_tag_2` varchar(30) NOT NULL,
  `sub_tag_3` varchar(30) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_status` varchar(12) NOT NULL DEFAULT 'drafted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_table`
--

INSERT INTO `store_table` (`products_id`, `products_title`, `products_details`, `go_live_link`, `price`, `priority`, `main_tag`, `sub_tag_2`, `sub_tag_3`, `product_image`, `product_status`) VALUES
(5, 'test', 'test', 'http://test.com', 100, 0, 'test', '', '', '60b898b9c69206.60879202.jpg', 'drafted'),
(6, 'test 2', 'test 2', 'http://test.updated.com', 11, 0, 'a test', '', '', '60b8994b3f0115.06232591.jpg', 'drafted'),
(7, 'test 3', 'ffgfds', 'http://test.updated.com', 12, 0, 'fr', '', '', '60b8c2f314c9f1.50780280.jpg', 'drafted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_info_table`
--
ALTER TABLE `basic_info_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_table`
--
ALTER TABLE `blogs_table`
  ADD PRIMARY KEY (`blogs_id`);

--
-- Indexes for table `client_confidentiality_table`
--
ALTER TABLE `client_confidentiality_table`
  ADD PRIMARY KEY (`client_confidentiality_policy_id`);

--
-- Indexes for table `customers_issues_table`
--
ALTER TABLE `customers_issues_table`
  ADD PRIMARY KEY (`customers_issues_id`);

--
-- Indexes for table `developers_support_table`
--
ALTER TABLE `developers_support_table`
  ADD PRIMARY KEY (`developers_support_policy_id`);

--
-- Indexes for table `learn_more_table`
--
ALTER TABLE `learn_more_table`
  ADD PRIMARY KEY (`learn_more_article_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `projects_table`
--
ALTER TABLE `projects_table`
  ADD PRIMARY KEY (`projects_id`);

--
-- Indexes for table `refund_policy_table`
--
ALTER TABLE `refund_policy_table`
  ADD PRIMARY KEY (`refund_policy_id`);

--
-- Indexes for table `security_table`
--
ALTER TABLE `security_table`
  ADD PRIMARY KEY (`security_id`);

--
-- Indexes for table `store_table`
--
ALTER TABLE `store_table`
  ADD PRIMARY KEY (`products_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_info_table`
--
ALTER TABLE `basic_info_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs_table`
--
ALTER TABLE `blogs_table`
  MODIFY `blogs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client_confidentiality_table`
--
ALTER TABLE `client_confidentiality_table`
  MODIFY `client_confidentiality_policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers_issues_table`
--
ALTER TABLE `customers_issues_table`
  MODIFY `customers_issues_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `developers_support_table`
--
ALTER TABLE `developers_support_table`
  MODIFY `developers_support_policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `learn_more_table`
--
ALTER TABLE `learn_more_table`
  MODIFY `learn_more_article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects_table`
--
ALTER TABLE `projects_table`
  MODIFY `projects_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `refund_policy_table`
--
ALTER TABLE `refund_policy_table`
  MODIFY `refund_policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `security_table`
--
ALTER TABLE `security_table`
  MODIFY `security_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store_table`
--
ALTER TABLE `store_table`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
