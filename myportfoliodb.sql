-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 01:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myportfoliodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int(11) NOT NULL,
  `categorias_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `id_foto` int(11) NOT NULL,
  `fk_id_projecto` int(11) NOT NULL,
  `nome_foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_blog_post` int(11) NOT NULL,
  `users_id_users` int(11) NOT NULL,
  `post_title` varchar(45) NOT NULL,
  `post_intro` varchar(200) NOT NULL,
  `post_text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_blog_post`, `users_id_users`, `post_title`, `post_intro`, `post_text`) VALUES
(3, 1, 'How to write HTML?', 'A small guide on how to write HTML', 'Lorem Ipsum is simpl dummy text of the printing.'),
(4, 1, 'How to write CSS?', 'A small guide on how to write CSS', 'Lorem Ipsum is simply dummy text of the printing.'),
(5, 1, 'How to write Javascript?', 'A small guide on how to write Javascript.', 'Lorem Ipsum is simply dummy text of the printing.');

-- --------------------------------------------------------

--
-- Table structure for table `post_has_categorias`
--

CREATE TABLE `post_has_categorias` (
  `post_id_blog_post` int(11) NOT NULL,
  `categorias_id_categorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `projectos`
--

CREATE TABLE `projectos` (
  `id_projecto` int(11) NOT NULL,
  `nome_projecto` varchar(45) NOT NULL,
  `cover_projecto` varchar(45) NOT NULL,
  `text_projecto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projectos`
--

INSERT INTO `projectos` (`id_projecto`, `nome_projecto`, `cover_projecto`, `text_projecto`) VALUES
(1, 'projecto do huog', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `projectos_has_tags`
--

CREATE TABLE `projectos_has_tags` (
  `fk_id_projecto` int(11) NOT NULL,
  `fk_id_tags` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projectos_has_tags`
--

INSERT INTO `projectos_has_tags` (`fk_id_projecto`, `fk_id_tags`) VALUES
(1, 1),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id_tags` int(11) NOT NULL,
  `nome_tags` varchar(45) NOT NULL,
  `icon_tags` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id_tags`, `nome_tags`, `icon_tags`) VALUES
(1, 'html', 'html.jpg'),
(2, 'css', 'css.jpg'),
(3, 'bananas', 'bananas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `users_name` varchar(45) NOT NULL,
  `users_email` varchar(45) NOT NULL,
  `users_pass` varchar(45) NOT NULL,
  `users_state` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `users_name`, `users_email`, `users_pass`, `users_state`) VALUES
(1, 'Mariana Ramos', 'teste@teste.com', 'teste1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`),
  ADD UNIQUE KEY `id_categorias_UNIQUE` (`id_categorias`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `fk_fotos_projectos1_idx` (`fk_id_projecto`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_blog_post`),
  ADD UNIQUE KEY `id_blog_post_UNIQUE` (`id_blog_post`),
  ADD KEY `fk_post_users_idx` (`users_id_users`);

--
-- Indexes for table `post_has_categorias`
--
ALTER TABLE `post_has_categorias`
  ADD PRIMARY KEY (`post_id_blog_post`,`categorias_id_categorias`),
  ADD KEY `fk_post_has_categorias_categorias1_idx` (`categorias_id_categorias`);

--
-- Indexes for table `projectos`
--
ALTER TABLE `projectos`
  ADD PRIMARY KEY (`id_projecto`),
  ADD UNIQUE KEY `id_projecto_UNIQUE` (`id_projecto`);

--
-- Indexes for table `projectos_has_tags`
--
ALTER TABLE `projectos_has_tags`
  ADD PRIMARY KEY (`fk_id_projecto`,`fk_id_tags`),
  ADD KEY `fk_projectos_has_tags_tags1_idx` (`fk_id_tags`),
  ADD KEY `fk_projectos_has_tags_projectos1_idx` (`fk_id_projecto`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id_tags`),
  ADD UNIQUE KEY `id_tags_UNIQUE` (`id_tags`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `id_users_UNIQUE` (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_blog_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projectos`
--
ALTER TABLE `projectos`
  MODIFY `id_projecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id_tags` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fk_fotos_projectos1` FOREIGN KEY (`fk_id_projecto`) REFERENCES `projectos` (`id_projecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_users` FOREIGN KEY (`users_id_users`) REFERENCES `users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post_has_categorias`
--
ALTER TABLE `post_has_categorias`
  ADD CONSTRAINT `fk_post_has_categorias_categorias1` FOREIGN KEY (`categorias_id_categorias`) REFERENCES `categorias` (`id_categorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_post_has_categorias_post1` FOREIGN KEY (`post_id_blog_post`) REFERENCES `post` (`id_blog_post`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `projectos_has_tags`
--
ALTER TABLE `projectos_has_tags`
  ADD CONSTRAINT `fk_projectos_has_tags_projectos1` FOREIGN KEY (`fk_id_projecto`) REFERENCES `projectos` (`id_projecto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projectos_has_tags_tags1` FOREIGN KEY (`fk_id_tags`) REFERENCES `tags` (`id_tags`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
