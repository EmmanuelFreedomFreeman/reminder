-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 03 nov. 2021 à 11:17
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dorime`
--

-- --------------------------------------------------------

--
-- Structure de la table `jobcard`
--

CREATE TABLE `jobcard` (
  `id` int(11) NOT NULL,
  `jc_num` text NOT NULL,
  `date_arrive` text NOT NULL,
  `customer` text NOT NULL,
  `contact` text NOT NULL,
  `radiator_model` text NOT NULL,
  `job` text NOT NULL,
  `date_finish` text NOT NULL,
  `date_collect` text NOT NULL,
  `play_remind` text NOT NULL,
  `text_remind` text NOT NULL,
  `fc` float NOT NULL,
  `usd` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jobcard`
--

INSERT INTO `jobcard` (`id`, `jc_num`, `date_arrive`, `customer`, `contact`, `radiator_model`, `job`, `date_finish`, `date_collect`, `play_remind`, `text_remind`, `fc`, `usd`) VALUES
(7, '356', '2021-10-25T10:05', 'SALAM', '0826126221 (GENERI )', 'CAT - 320', 'change complete radiator and clean oil cooler', '', '2021-10-26T12:47', '', '', 0, 930),
(8, '357', '2021-10-25T10:05', 'ENDELEA', '0894971332', 'DIESEL TANK', 'CLEAN AND WELDING', '', '', '', '', 0, 0),
(9, '358', '2021-10-25T10:05', 'MR ALI MUTAZ', '0899486780', 'GENSET', 'FOR CLEANING REPAIR', '', '', '', '', 0, 90),
(10, '359', '2021-10-25T10:05', 'KYONDO RADIA / TV', '0997124908 - MR MWAMDA NICK', 'GENSET ( AKSA MODEL )', 'CLEANING REPAIRING AND GASKETING AS NECESSARY', '', '', '', '', 0, 325.8),
(11, '360', '2021-10-25T10:05', 'AVANT PETROLUIM', '0828236860', 'GENTE', 'CLEAN AND REPAIR', '', '', '', '', 0, 60),
(12, '237', '2021-10-25T10:08', 'MCK SARL  (WITH TVA)', '(BON : 8126 )', 'WL 900 RADIATOR', 'ASSES AND TEST', '', '', '', '', 0, 0),
(13, '238', '2021-10-25T10:12', 'MCK (WITH TVA)', '0990195773 : PATSIAN TWITE', 'AIR CONDENSOR ( BON : 8128 )', 'CLEAN AND REPAIR', '', '', '', '', 0, 0),
(14, '239', '2021-10-25T10:14', 'MUZURI SANA ( WITH TVA )', '0970224105 : JUNIOR', 'INTERCOOLER', 'CLEAN AND REPAIR', '', '', '', '', 0, 0),
(15, '618', '2021-10-25T14:25', 'REGINE', '0840843617', 'GENSET', 'ASSES AND TEST', '', '', '', '', 0, 300),
(16, '619', '2021-10-25T14:27', 'NDOLO', '0825818084', 'DAF - CF', 'CLEAN AND REPAIR AS NECESSARY', '', '', '', '', 0, 80),
(17, '621', '2021-10-25T14:29', 'LIBERTI', '0859200807 / MANACE', 'GROUPE', 'CLEAN AND REPAIR', '', '', '', '', 0, 80),
(18, '622', '2021-10-25T14:31', 'AMISI', '0852042836 / JEAN', 'FUSO', 'CLEAN AND REPAIR', '', '2021-10-25T09:46', '', '', 0, 50),
(19, '623', '', 'LAMBERT', '', 'FUSO', 'CLEAN AND REPAIR', '', '2021-10-25T14:33', '', '', 0, 30),
(20, '624', '2021-10-25T12:59', 'ETIENNE', '0999933927', 'GROUPE', 'CLEAN AND REPAIR', '2021-10-25T16:00', '2021-10-27T10:47', '', '', 0, 80),
(21, '625', '2021-10-26T13:50', 'CHICO', '0995278000', 'HINO', 'CLEAN AND REPAIR COMPLET', '', '2021-10-25T14:42', '', '', 0, 280),
(22, '626', '2021-10-25T14:43', 'GEUTAN', '', 'HUMER', 'ASSES AND TEST', '', '2021-10-25T14:43', '', '', 10000, 0),
(23, '627', '2021-10-25T14:25', 'AMISI', '0978068888 / ALI', 'FUSO', 'CLEAN AND REPAIR', '', '2021-10-26T11:25', '', '', 0, 50),
(24, '628', '2021-10-25T14:48', 'MR JOHN', '0994508886', 'HINO   ( F . O . C )', 'F.O.C : CLEAN AND REPAIR', '', '2021-10-26T10:30', '', '', 0, 0),
(25, '629', '2021-10-25T14:51', 'AMISI', '0975659306 / MAGLOIRE', 'FUSO', 'CLEAN AND REPAIR', '', '2021-10-26T12:50', '', '', 0, 50),
(26, '630', '2021-10-25T14:54', 'BTT TRANSPORT', '0824832216', 'PIPE', 'CLEAN AND REPAIR', '', '2021-10-25T14:54', '', '', 0, 15),
(27, '631', '2021-10-26T14:56', 'GERMAIN', '0994271087', 'PERKINS', 'CLEAN', '', '', '', '', 0, 60),
(28, '632', '2021-10-26T12:07', 'AMISI', '0978068888', 'HOWO', 'CLEAN AND REPAIR', '', '', '', '', 0, 50),
(29, '633', '2021-10-26T15:02', 'PAPA JOHN', '', 'HIAGE', 'CLEAN AND REPAIR ( CHANGE TANK )', '', '2021-10-26T18:10', '', '', 0, 30),
(30, '240', '2021-10-26T12:45', 'MUZURI SANA ( with tva )', '', '2 PCS INTERCOOLER ( bon : 03960 )', 'CLEAN AND REPAIR', '', '', '', '', 0, 0),
(31, '634', '2021-10-27T12:25', 'GODDENE AFRICA', '0994666600', 'TANIE GROUPE', 'CLEAN AND REPAIR', '', '', '', '', 0, 10),
(32, '635', '2021-10-28T12:27', 'MR PIERROT', '0995422254', 'PERKINS AND INTERCOOLER', 'CLEAN AND REPAIR', '', '', '', '', 0, 100),
(33, '636', '2021-10-28T12:29', 'GODENE AFRICA', '0995422254', 'RADIATOR AND HYDROLIC COOLER ( JCB CHARGESE )', 'ASSES AND TEST', '', '', '', '', 0, 0),
(34, '361', '2021-10-27T12:32', 'FAMARI (FAMAL )', '0852366080', 'INTERCOOLER AND RADIATOR ACTROS', 'CLEAN AND REPAIR', '', '', '', '', 0, 250),
(35, '362', '2021-10-27T12:35', 'OFFICE DES ROUTES', '0997131235 / MR GILBERT', 'SINO TRUCK AND INTERCOOLER', 'CLEAN AND TEST OR CHECK', '', '', '', '', 0, 150),
(36, '363', '2021-10-27T12:37', 'SALAM LOGISTICS', '0826126221 / BOSS', '1 PC DOZER RADIATOR AND 2 PCS TRANSMISSION COOLERS', 'DOZER RADIATOR FOR TESTING \nAND CLEANNING & REPAIRING THE TRANSMISSION COOLERS', '', '', '', '', 0, 0),
(37, '364', '2021-10-28T12:41', 'RAPHAELL', '', 'DOZER', 'CLEAN AND REPAIR', '', '', '', '', 0, 0),
(38, '637', '2021-10-28T08:14', 'AMISI', '0978068888 MR ALI', 'HOWO', 'CLEAN AND REPAIR', '', '', '', '', 0, 50),
(39, '638', '2021-10-28T08:16', 'MR IBRAHIM', '0974768612', 'MITSUBISH', 'CLEAN AND REPAIR', '', '2021-10-30T08:17', '', '', 0, 60),
(40, '639', '2021-10-28T08:19', 'CEDRICK', '0990030099', 'GMC', 'CLEAN AND REPAIR', '', '', '', '', 0, 80),
(41, '640', '2021-10-28T08:20', 'MR DEO', '0992028882', 'FUSO', 'CLEAN AND REPAIR', '', '', '', '', 0, 70),
(42, '641', '2021-10-28T08:33', 'NDOLO', '', 'EMPTY', 'CLEAN AND REPAIR', '', '', '', '', 0, 0),
(43, '642', '2021-10-29T08:35', 'CARLA SERVICE', '', 'EMPTY', 'CLEAN AND REPAIR', '', '', '', '', 0, 0),
(44, '643', '2021-10-30T08:36', 'GABY', '0995367670', 'PAJERO MINI ( MITSHUBISHI )', 'CLEAN AND CHANGE BRIKEN TOP PLASTIC TANK INTO ALUMINIUM AND BUYING A NEW COVER', '', '', '', '', 0, 60),
(45, '644', '2021-10-30T08:48', 'AUGY', '0852547264', '3 PCS PIPE', 'CLEAN AND REPAIR', '', '2021-11-01T08:49', '', '', 0, 30),
(46, '645', '2021-10-30T08:50', 'JEAN CLAUD', '', 'GRADER', 'CLEAN AND REPAIR', '', '', '', '', 0, 350),
(47, '646', '2021-11-01T08:52', 'MOHAMED', '', 'HOWO AND INTERCOOLER', 'CLEAN AND REPAIR', '', '', '', '', 0, 0),
(48, '647', '2021-11-01T08:54', 'PAPA RAYMOND', '099729425', 'FUSO', 'CLEAN AND REPAIR COMPLETE NEW CORE', '', '', '', '', 0, 450);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jobcard`
--
ALTER TABLE `jobcard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jobcard`
--
ALTER TABLE `jobcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
