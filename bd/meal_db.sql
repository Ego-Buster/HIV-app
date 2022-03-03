-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 24 fév. 2022 à 14:26
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
  `password` varchar(255) NOT NULL,
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
(1, 'carole@gmail.com', '$2y$10$D1VwSJQxcscbixai/O4x7ekk98GHL1gW582TRMaiM92Eqd3mAIotK', 'super', 'Meal manager', 'Carole Metekoua', '2022-02-23 04:07:32', '2022-02-23 04:07:32');

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
  `date_enrolment` date NOT NULL,
  `case_worker` varchar(200) NOT NULL,
  `beneficiary_type` varchar(30) NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0',
  `added_by` bigint(20) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `national_id` (`national_id`),
  UNIQUE KEY `art_code` (`art_code`),
  KEY `added_by` (`added_by`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enrolments`
--

INSERT INTO `enrolments` (`id`, `first_name`, `family_name`, `national_id`, `mobile`, `sex`, `date_of_birth`, `hiv_status`, `reason_unknown_hiv_status`, `art_status`, `art_code`, `date_initiation_art`, `treatment_health_facility_linked`, `art_regimen`, `school_level`, `class`, `relationship_caregiver_child`, `cause_of_dead_mother`, `cause_of_dead_father`, `population_type`, `index_case`, `disability`, `has_birth_certificate`, `pregnant_woman`, `health_district_residence`, `health_area`, `quarter`, `village`, `locality_description`, `point_of_entry`, `champ_code`, `type_enrolment`, `date_enrolment`, `case_worker`, `beneficiary_type`, `deleted`, `added_by`, `added_at`) VALUES
(1, 'Black', 'Black', '', '692503797', 'Male', '2002-01-06', 'Negative', 'Refused Testing', 'On Treatment', 'ART5602', '2022-02-23', '...', 'Exemple ART regimen', 'Not in school', '1', 'Father', '', '', 'HIV exposed infant', 0, 0, 0, 0, 'MAROUA 1', 'Deido health area', 'Deido', '...', '', '', '', 'In person', '2022-02-05', 'Karle Junior', 'Child', 1, 1, '2022-02-23 08:01:48'),
(3, 'Fabrice', '', '12312321225', '', 'Male', '2000-02-02', 'Negative', 'Refused Testing', 'On Treatment', 'SDFSDFSDF', '2000-02-02', '', 'sdfsdfsdfsdf', 'Pre-Primary', '1', 'Mother', '', '', 'HIV exposed infant', 0, 0, 0, 0, 'GAROUA 1', '', '', '', '', '', '', 'In person', '2000-02-02', 'Armand', 'Child', 1, 1, '2022-02-23 09:53:26'),
(2, 'Ebongue', 'Fabrice', '2121234355', '6 95 95 68 54', 'Male', '2000-02-02', 'Negative', 'Refused Testing', 'On Treatment', 'ART78O2', '2022-02-02', '', 'Exemple regimen', 'Pre-Primary', '1', 'Mother', '', '', 'HIV exposed infant', 0, 0, 0, 0, 'GAROUA 1', '', '', '', '', '', '', 'In person', '2022-02-23', 'Orland Fabrice', 'Child', 1, 1, '2022-02-23 08:29:37');

-- --------------------------------------------------------

--
-- Structure de la table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `zone_usaid` varchar(50) DEFAULT NULL,
  `zone_crs` varchar(50) DEFAULT NULL,
  `Implementing_Partner` varchar(200) DEFAULT NULL,
  `Region` varchar(50) DEFAULT NULL,
  `Health_District_of_Residence` varchar(80) DEFAULT NULL,
  `Case_Worker` varchar(200) DEFAULT NULL,
  `caseid` varchar(200) DEFAULT NULL,
  `Beneficiary_Code` varchar(200) DEFAULT NULL,
  `HH_Code` varchar(200) DEFAULT NULL,
  `bnf_type` varchar(50) DEFAULT NULL,
  `bnf_sex` varchar(10) DEFAULT NULL,
  `Child_Date_Of_Birth` date DEFAULT NULL,
  `Date_Report` date DEFAULT NULL,
  `Age_FY22` int(11) DEFAULT NULL,
  `Age_month` int(11) DEFAULT NULL,
  `Age_band_FY22` varchar(100) DEFAULT NULL,
  `O18_U18` varchar(10) DEFAULT NULL,
  `Age_band_datim` varchar(50) DEFAULT NULL,
  `HIV_Status` varchar(100) DEFAULT NULL,
  `Reason_Unknown_HIV_Status` varchar(200) DEFAULT NULL,
  `HHD9` varchar(100) DEFAULT NULL,
  `bnf_enrollment_date` date DEFAULT NULL,
  `Date_End_of_Quarter` date DEFAULT NULL,
  `bnf_profile` varchar(200) DEFAULT NULL,
  `Health_District_of_Treatment_Center` varchar(100) DEFAULT NULL,
  `Treatment_Center` varchar(200) DEFAULT NULL,
  `Treatment_Center_TX_CURR_Name` varchar(100) DEFAULT NULL,
  `In_Tx_CURR` varchar(10) DEFAULT NULL,
  `Active_SAPR_FY22` varchar(200) DEFAULT NULL,
  `Graduated_SAPR_FY22` varchar(200) DEFAULT NULL,
  `Graduated_Q1FY22` varchar(200) DEFAULT NULL,
  `Graduated_Q2FY22` varchar(200) DEFAULT NULL,
  `Graduated_Q3FY22` varchar(200) DEFAULT NULL,
  `Graduated_Q4FY22` varchar(200) DEFAULT NULL,
  `OVC_Serv_SAPR_FY22` varchar(200) DEFAULT NULL,
  `Serv_Q4FY21` varchar(10) DEFAULT NULL,
  `Exit_Without_Graduation_SAPR_FY2022` varchar(10) DEFAULT NULL,
  `Served_Q1FY22` varchar(10) DEFAULT NULL,
  `Served_Q2FY22` varchar(10) DEFAULT NULL,
  `Served_Q3FY22` varchar(10) DEFAULT NULL,
  `Served_Q4FY22` varchar(10) DEFAULT NULL,
  `Reason_Case_Closure` varchar(100) DEFAULT NULL,
  `Date_Case_Closure` date DEFAULT NULL,
  `Date_last_VL` date DEFAULT NULL,
  `Date_Initiation_ART` date DEFAULT NULL,
  `Eligible_VL_Testing` varchar(10) DEFAULT NULL,
  `Last_VL_Result` varchar(100) DEFAULT NULL,
  `CHD4_ART_Code` varchar(200) DEFAULT NULL,
  `CHD4_ART_regimen` varchar(200) DEFAULT NULL,
  `CHD3_On_ART` varchar(100) DEFAULT NULL,
  `service_date` date DEFAULT NULL,
  `HN_17t` varchar(20) DEFAULT NULL COMMENT '**Child nutritional status (0 to 14 years) - Use MUAC SOP**',
  `HN_10s` int(11) DEFAULT NULL COMMENT '*HEI referred for EID and follow-up >= 6 weeks [13 A]*',
  `HN_10t` int(11) DEFAULT NULL COMMENT '**HIV-exposed infant (HEI) linked to clinic for EID  and follow-up >= 6 weeks**',
  `HN_11s` int(11) DEFAULT NULL COMMENT '*Child Referred for ART [8 A]*',
  `HN_11t` int(11) DEFAULT NULL COMMENT '**Result for HIV exposed infant (HEI) >=6 weeks after EID**',
  `HN_12s` int(11) DEFAULT NULL COMMENT '*HEI referred for serology and followup >=  9 months [13 A]*',
  `HN_12t` int(11) DEFAULT NULL COMMENT '**HIV exposed infant (HEI) linked to clinic for serology and follow-up >=  9 months**',
  `HN_13s` int(11) DEFAULT NULL COMMENT '*HEI referred for PCR 2 and follow-up [ 13 A]*',
  `HN_13t` int(11) DEFAULT NULL COMMENT '**Result for HIV serology of exposed infant (HEI) >=9 months**',
  `HN_14s` int(11) DEFAULT NULL COMMENT '*Child Referred for ART [8 A]*',
  `HN_14t` int(11) DEFAULT NULL COMMENT '**Results of PCR2**\\',
  `HN_15s` int(11) DEFAULT NULL COMMENT '*HEI referred for HIV serology [13 A]*',
  `HN_15t` int(11) DEFAULT NULL COMMENT '**HIV exposed infant linked to HIv serology at >=18months)**',
  `HN_16s` int(11) DEFAULT NULL COMMENT '*Child is referred for ART*',
  `HN_16t` int(11) DEFAULT NULL COMMENT '**Results ofHIV serology at  18 months**',
  `cdvpr_skills` int(11) DEFAULT NULL COMMENT 'Caregiver mentored on child care and positive parenting skills for educational_counselling',
  `vocational_training` int(11) DEFAULT NULL,
  `School_placement` int(11) DEFAULT NULL,
  `Scholarship` int(11) DEFAULT NULL,
  `SCHOOLED` int(11) DEFAULT NULL,
  `positive_parenting_and_caregiver_skills` int(11) DEFAULT NULL,
  `srh_Home_Visits` int(11) DEFAULT NULL,
  `gbv_services` int(11) DEFAULT NULL,
  `legal_support` int(11) DEFAULT NULL,
  `child_protection_services` int(11) DEFAULT NULL,
  `SAFE` int(11) DEFAULT NULL,
  `hiv_peer_support_group` int(11) DEFAULT NULL,
  `ECD` int(11) DEFAULT NULL,
  `Nutritional_support` int(11) DEFAULT NULL,
  `Refered_and_linked_to_ART` int(11) DEFAULT NULL,
  `Adherence_to_art_counseling` int(11) DEFAULT NULL,
  `viral_load_testing` int(11) DEFAULT NULL,
  `hiv_disclosure_counseling` int(11) DEFAULT NULL,
  `Follow_up_of_hiv_exposed_infants` int(11) DEFAULT NULL,
  `medical_care` int(11) DEFAULT NULL,
  `anc_or_pmtct` int(11) DEFAULT NULL,
  `hiv_testing` int(11) DEFAULT NULL,
  `HIV_treatment_counseling` int(11) DEFAULT NULL,
  `HEALTHY` int(11) DEFAULT NULL,
  `silc` int(11) DEFAULT NULL,
  `Start_business_after_vocational_training` int(11) DEFAULT NULL,
  `Income_Generating_Activities` int(11) DEFAULT NULL,
  `Linked_to_emergency_cash_transfer` int(11) DEFAULT NULL,
  `Short_term_emergency_cash_support` int(11) DEFAULT NULL,
  `Financial_Literacy` int(11) DEFAULT NULL,
  `STABLE` int(11) DEFAULT NULL,
  `HN_17sc` int(11) DEFAULT NULL,
  `HN_18t` int(11) DEFAULT NULL,
  `CED1_School_Level` varchar(100) DEFAULT NULL,
  `CP_1t_Case_Plan` int(11) DEFAULT NULL,
  `COVID_WASH_CGV` varchar(20) DEFAULT NULL,
  `COVID_WASH_HHs` varchar(20) DEFAULT NULL,
  `CGV9` varchar(10) DEFAULT NULL,
  `CHD8` varchar(10) DEFAULT NULL,
  `Date_of_referral_for_HIV_testing` date DEFAULT NULL,
  `HIV_test_result` varchar(200) DEFAULT NULL,
  `Primary_CGV_profile` varchar(200) DEFAULT NULL,
  `Date_Closed_in_Colmis` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
