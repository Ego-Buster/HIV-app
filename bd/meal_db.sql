-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 21 fév. 2022 à 13:48
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `meal_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` binary(20) NOT NULL,
  `role` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_seen` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `role`, `position`, `name`, `last_seen`, `added_at`) VALUES
(1, 'carole@gmail.com', 0x70352f41061eda4ff3c322094af068ba70c3b38b, 'super', 'Meal Manager', 'Carole Metekoua', '2022-02-17 12:43:32', '2022-02-17 12:43:32');

-- --------------------------------------------------------

--
-- Structure de la table `enrolments`
--

DROP TABLE IF EXISTS `enrolments`;
CREATE TABLE IF NOT EXISTS `enrolments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `family_name` varchar(100) NOT NULL,
  `national_id` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `date_of_birth` date NOT NULL,
  `hiv_status` varchar(30) NOT NULL,
  `reason_unknown_hiv_status` longtext NOT NULL,
  `art_status` varchar(100) DEFAULT NULL,
  `art_code` varchar(10) DEFAULT NULL,
  `date_initiation_art` date DEFAULT NULL,
  `treatment_health_facility_linked` longtext NOT NULL,
  `art_regimen` varchar(100) DEFAULT NULL,
  `school_level` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `relationship_caregiver_child` varchar(100) NOT NULL,
  `cause_of_dead_mother` varchar(200) NOT NULL,
  `cause_of_dead_father` varchar(200) NOT NULL,
  `population_type` varchar(100) NOT NULL,
  `index_case` tinyint(1) NOT NULL,
  `disability` tinyint(1) NOT NULL,
  `has_birth_certificate` tinyint(1) NOT NULL,
  `pregnant_woman` tinyint(1) NOT NULL,
  `health_district_residence` varchar(100) NOT NULL,
  `health_area` varchar(100) NOT NULL,
  `quarter` varchar(200) NOT NULL,
  `village` varchar(200) NOT NULL,
  `locality_description` longtext NOT NULL,
  `point_of_entry` varchar(100) NOT NULL,
  `champ_code` varchar(20) NOT NULL,
  `type_enrolment` varchar(20) NOT NULL,
  `case_worker` varchar(200) NOT NULL,
  `added_by` bigint(20) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `national_id` (`national_id`),
  UNIQUE KEY `art_code` (`art_code`),
  KEY `added_by` (`added_by`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
