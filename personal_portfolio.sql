-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 11:56 PM
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
(1, 'Thasin', 'I work as a web-developer. I\'ve 2 years of experience under my belt. I use HTML, CSS, Javascript, PHP, Laravel & Git on my projects. Hit me up if you have something on your mind.', 'thasinmahmud.bd@gmail.com', '01984983948', '01757758904', 'https://www.facebook.com/thasinmahmud.bd/', 'https://www.facebook.com/thasinmahmud.bd/', 'https://www.facebook.com/thasinmahmud.bd/', 'https://www.facebook.com/thasinmahmud.bd/', 'https://www.facebook.com/thasinmahmud.bd/', 'https://www.facebook.com/thasinmahmud.bd/', 'https://www.facebook.com/thasinmahmud.bd/');

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
(1, 'test title', 'test highlight', '<p><strong>test </strong>post</p>\r\n', 'main tag', 'sub tag', 'sub tag', 'sub tag', '', 'June 1, 2021, 2:23 am', 'drafted', '60b545b7844826.73208733.jpg'),
(2, 'test title 2', 'test highlight 2', '<p>test post <strong><em>2&nbsp;<a href=\"http://google.com\">google</a></em></strong></p>\r\n', 'main tag 2', 'sub tag 2', '', '', '', 'June 1, 2021, 2:27 am', 'drafted', '60b546bd263793.87119076.jpg'),
(3, 'test title 3', 'highlight 3', '<p><span class=\"marker\"><strong>test 3</strong></span></p>\r\n', 'main tag', 'sub tag 3', 'sub tag', '', '', 'June 1, 2021, 3:06 am', 'drafted', '60b54fc2bfb525.80422068.jpg'),
(4, 'test title 4', 'highlight 4', '<p><s>test</s></p>\r\n', 'a tag', '', '', '', '', 'June 1, 2021, 3:07 am', 'drafted', '60b54ffc422c32.05210584.jpg'),
(5, 'test title 5', 'ggg', '<p>ggg</p>\r\n', 'vv', '', '', '', '', 'June 1, 2021, 3:50 am', 'drafted', '60b55a3942f331.91451038.jpg');

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
-- Indexes for table `refund_policy_table`
--
ALTER TABLE `refund_policy_table`
  ADD PRIMARY KEY (`refund_policy_id`);

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
  MODIFY `blogs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `refund_policy_table`
--
ALTER TABLE `refund_policy_table`
  MODIFY `refund_policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
