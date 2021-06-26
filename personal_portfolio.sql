-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 12:22 PM
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
(3, 'test title 3', 'highlight 3', '<p><span class=\"marker\"><strong>test 3 </strong></span><strong>updated</strong></p>\r\n', 'main tag', 'sub tag 3', 'sub tag', '', '', 'June 1, 2021, 3:06 am', 'drafted', '60b6022c04b236.46348612.jpg'),
(4, 'test title is 4 update test', 'highlight 4 updated', '<p><s>test</s> updated</p>\r\n', 'a tag updated', '', '', '', '', 'June 1, 2021, 3:07 am', 'published', '60b5f2810972c9.72113909.jpg'),
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
-- Table structure for table `feedback_table`
--

CREATE TABLE `feedback_table` (
  `feedback_id` int(11) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `feedback` text NOT NULL,
  `feedback_date` varchar(50) NOT NULL,
  `feedback_status` varchar(20) NOT NULL DEFAULT 'drafted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`feedback_id`, `sender`, `feedback`, `feedback_date`, `feedback_status`) VALUES
(1, 'thasin', 'feedback', 'June 10, 2021, 4:53 pm', 'published'),
(2, 'jamil', 'feedback', 'June 10, 2021, 4:56 pm', 'drafted');

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
(2, 'Thasin', 'doostupi@gmail.com', '01711375724', 'hello', 'May 29, 2021, 9:36 pm', 'Working on it'),
(3, 'ahasan', 'doostupi@gmail.com', '1234', 'I want to buy test 2, Unique ID = 6.', 'June 25, 2021, 10:28 pm', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `projects_table`
--

CREATE TABLE `projects_table` (
  `projects_id` int(11) NOT NULL,
  `projects_title` varchar(100) NOT NULL,
  `projects_details` text NOT NULL,
  `go_live_link` varchar(100) NOT NULL DEFAULT '1.1_not_for_sale.php',
  `git_hub_link` varchar(100) NOT NULL DEFAULT '1.1_not_for_sale.php',
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
(4, 'test 2', 'test test test', 'http://test.updated.com', 'http://test.updated.com', 0, 'test', '', '', '60b643cb866f57.47091191.jpg', 'drafted'),
(5, 'test 3', 'test', 'http://test.updated.com', 'http://test.updated.com', 0, 'a test', 'test', 'test', '60b646510b1693.10534360.jpg', 'published'),
(6, 'test 4', '<ol>\r\n	<li>this</li>\r\n	<li>is</li>\r\n	<li>a</li>\r\n	<li>test</li>\r\n</ol>\r\n\r\n<p><strong>hello </strong>how are <span class=\"marker\">you</span>? <a href=\"http://www.google.com\">google</a></p>\r\n', 'http://test.updated.com', 'http://test.updated.com', 1, 'test', '', '', '60b8ad28227825.66474442.jpg', 'published'),
(7, 'test link', '<p>lorem ipsum</p>\r\n', '1.1_not_for_sale.php', '1.1_not_for_sale.php', 0, 'tag', '', '', '60d6fbbdc3ffd1.99922546.jpg', 'published');

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
  `pin` varchar(100) NOT NULL,
  `otp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security_table`
--

INSERT INTO `security_table` (`security_id`, `p_word`, `pin`, `otp`) VALUES
(1, '$2y$10$22charactersarepreseneCohjJUSBgmXGaJZcwOoDmXSsQk2hwxq', '$2y$10$22charactersarepresene2g.DpnSwz9pTKzC.jxXnst70ZDzJKYO', '$2y$10$22charactersarepresene9Tekmxn5beaie3gzS6qoBrrZ40QFtji');

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
(5, 'test', 'test', 'http://test.com', 100, 1, 'test', '', '', '60c1f783455c25.55685890.jpg', 'drafted'),
(6, 'test 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Netus et malesuada fames ac turpis egestas integer eget. Et netus et malesuada fames ac. Pharetra pharetra massa massa ultricies mi. Ac tincidunt vitae semper quis lectus nulla at. Semper quis lectus nulla at volutpat diam. Risus quis varius quam quisque id. Et netus et malesuada fames ac turpis egestas sed. Dui nunc mattis enim ut tellus elementum sagittis vitae. Consequat semper viverra nam libero justo laoreet sit. Mi quis hendrerit dolor magna. Facilisis mauris sit amet massa. Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet. Dignissim cras tincidunt lobortis feugiat vivamus. Quisque sagittis purus sit amet volutpat consequat. Sed enim ut sem viverra aliquet eget sit. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Tortor dignissim convallis aenean et tortor at risus viverra adipiscing.\r\n\r\nUt lectus arcu bibendum at varius vel pharetra. Ullamcorper a lacus vestibulum sed arcu. Feugiat in ante metus dictum at tempor. Fermentum leo vel orci porta non pulvinar. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. In mollis nunc sed id semper risus. Morbi non arcu risus quis. Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Non curabitur gravida arcu ac. Gravida cum sociis natoque penatibus et magnis. Non consectetur a erat nam at lectus urna duis convallis. Cursus in hac habitasse platea dictumst quisque sagittis purus sit. Penatibus et magnis dis parturient montes. Et netus et malesuada fames ac turpis egestas. Auctor neque vitae tempus quam pellentesque. Orci porta non pulvinar neque laoreet suspendisse interdum. Enim nec dui nunc mattis enim. Dis parturient montes nascetur ridiculus mus mauris vitae. Porttitor rhoncus dolor purus non. Consequat nisl vel pretium lectus quam id leo.\r\n\r\nNatoque penatibus et magnis dis parturient. Tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum. Tristique risus nec feugiat in fermentum posuere urna nec. Nam aliquam sem et tortor consequat id porta nibh. Elementum nibh tellus molestie nunc non blandit massa. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc. Velit scelerisque in dictum non consectetur a erat nam at. Nulla malesuada pellentesque elit eget gravida cum. Elementum facilisis leo vel fringilla est ullamcorper. Eget est lorem ipsum dolor sit amet consectetur adipiscing. Nisi vitae suscipit tellus mauris. Aliquet enim tortor at auctor urna nunc id cursus metus. Sed velit dignissim sodales ut eu sem integer vitae justo. Dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in. Nibh mauris cursus mattis molestie a iaculis. Mauris commodo quis imperdiet massa tincidunt nunc.\r\n\r\nHendrerit dolor magna eget est lorem ipsum dolor sit amet. Proin nibh nisl condimentum id venenatis a. Morbi tincidunt augue interdum velit euismod in. Pharetra convallis posuere morbi leo. Lorem mollis aliquam ut porttitor leo a diam. Suspendisse in est ante in nibh mauris cursus mattis. Ac felis donec et odio pellentesque diam. At elementum eu facilisis sed odio morbi. Id cursus metus aliquam eleifend mi. Dignissim sodales ut eu sem. Bibendum neque egestas congue quisque egestas. Eu augue ut lectus arcu bibendum at. Risus at ultrices mi tempus. Augue neque gravida in fermentum et sollicitudin ac. At urna condimentum mattis pellentesque id nibh. Orci nulla pellentesque dignissim enim sit. Neque gravida in fermentum et sollicitudin ac orci. Volutpat consequat mauris nunc congue. Suscipit tellus mauris a diam maecenas sed enim ut.\r\n\r\nTortor dignissim convallis aenean et tortor at risus viverra adipiscing. Blandit libero volutpat sed cras ornare arcu dui. Adipiscing enim eu turpis egestas pretium aenean pharetra. Enim diam vulputate ut pharetra sit amet. Elementum curabitur vitae nunc sed velit dignissim. Netus et malesuada fames ac. In mollis nunc sed id semper risus in hendrerit. Luctus accumsan tortor posuere ac ut consequat. Nulla porttitor massa id neque aliquam. Senectus et netus et malesuada fames ac turpis egestas. Vivamus at augue eget arcu dictum varius duis at. In fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Amet volutpat consequat mauris nunc congue nisi. Amet risus nullam eget felis eget nunc. Nunc aliquet bibendum enim facilisis gravida. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra.\r\n\r\nAmet tellus cras adipiscing enim eu turpis. Mauris nunc congue nisi vitae suscipit tellus mauris a. Pharetra pharetra massa massa ultricies mi quis hendrerit. Euismod elementum nisi quis eleifend quam adipiscing vitae proin sagittis. Quisque non tellus orci ac auctor augue mauris augue. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Amet mauris commodo quis imperdiet. Facilisis sed odio morbi quis commodo odio. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. Nulla facilisi nullam vehicula ipsum a. Suscipit adipiscing bibendum est ultricies integer quis. Aenean euismod elementum nisi quis eleifend. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Lectus proin nibh nisl condimentum id venenatis a condimentum vitae. Quis ipsum suspendisse ultrices gravida dictum fusce ut. Ornare arcu odio ut sem nulla pharetra.\r\n\r\nSuscipit adipiscing bibendum est ultricies integer quis auctor. Malesuada fames ac turpis egestas maecenas pharetra convallis. Sed turpis tincidunt id aliquet. Et netus et malesuada fames ac turpis egestas maecenas pharetra. Commodo quis imperdiet massa tincidunt nunc pulvinar. In hac habitasse platea dictumst quisque sagittis purus. Eget arcu dictum varius duis at consectetur lorem. Lectus magna fringilla urna porttitor rhoncus dolor purus non. Tortor pretium viverra suspendisse potenti nullam ac tortor. Volutpat commodo sed egestas egestas fringilla phasellus. Nulla at volutpat diam ut venenatis tellus in metus. Accumsan in nisl nisi scelerisque eu ultrices. Eget aliquet nibh praesent tristique. Vestibulum sed arcu non odio euismod lacinia.\r\n\r\nPlatea dictumst quisque sagittis purus sit amet. Id porta nibh venenatis cras sed felis eget. Quis risus sed vulputate odio. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Proin libero nunc consequat interdum varius sit. Elementum tempus egestas sed sed risus pretium quam vulputate dignissim. Sit amet venenatis urna cursus eget. Dapibus ultrices in iaculis nunc. Sit amet porttitor eget dolor. Dignissim enim sit amet venenatis. Sit amet consectetur adipiscing elit. Pulvinar mattis nunc sed blandit. Nunc sed blandit libero volutpat sed cras ornare arcu dui. Est velit egestas dui id ornare. Quis hendrerit dolor magna eget est lorem ipsum. Aenean et tortor at risus viverra adipiscing at in tellus.\r\n\r\nUltrices gravida dictum fusce ut placerat orci nulla pellentesque. Placerat orci nulla pellentesque dignissim. Ac placerat vestibulum lectus mauris. Vestibulum rhoncus est pellentesque elit. Leo in vitae turpis massa sed elementum tempus egestas sed. Varius quam quisque id diam vel quam elementum pulvinar etiam. Et ligula ullamcorper malesuada proin libero. Lacus vestibulum sed arcu non odio euismod. Sit amet volutpat consequat mauris nunc congue nisi vitae. Aliquet porttitor lacus luctus accumsan tortor. In metus vulputate eu scelerisque felis imperdiet proin fermentum. Amet cursus sit amet dictum sit amet justo donec. Accumsan tortor posuere ac ut consequat semper. Nec tincidunt praesent semper feugiat. Quis viverra nibh cras pulvinar mattis nunc sed blandit libero. Lectus quam id leo in. Pellentesque habitant morbi tristique senectus et netus et. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat.\r\n\r\nAdipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Id diam vel quam elementum. Vitae justo eget magna fermentum. Ut aliquam purus sit amet luctus venenatis. Pretium quam vulputate dignissim suspendisse in est ante in. Cras pulvinar mattis nunc sed blandit libero volutpat sed. Id porta nibh venenatis cras sed felis eget velit aliquet. Vitae aliquet nec ullamcorper sit. Sit amet consectetur adipiscing elit ut. Mi sit amet mauris commodo quis. Id diam vel quam elementum pulvinar etiam non quam lacus. Vel pharetra vel turpis nunc eget lorem dolor sed. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Ut venenatis tellus in metus vulputate. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit. Praesent semper feugiat nibh sed. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent.', '', 11, 0, 'a test', '', '', '60d6f8e2618198.05743553.jpg', 'published'),
(7, 'test 3', 'ffgfds', 'http://test.updated.com', 12, 1, 'fr', '', '', '60c1f8066b82c0.48796530.jpg', 'published'),
(9, 'test link', 'lorem ipsum', '1.1_not_for_sale.php', 200, 0, 'sss', '', '', '60d6fc25c2aa23.78958914.jpg', 'published');

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
-- Indexes for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD PRIMARY KEY (`feedback_id`);

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
-- AUTO_INCREMENT for table `feedback_table`
--
ALTER TABLE `feedback_table`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `learn_more_table`
--
ALTER TABLE `learn_more_table`
  MODIFY `learn_more_article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects_table`
--
ALTER TABLE `projects_table`
  MODIFY `projects_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
