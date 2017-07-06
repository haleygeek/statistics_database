-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2017 at 11:19 PM
-- Server version: 5.6.36-82.0-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haleygee_stats`
--

-- --------------------------------------------------------

--
-- Table structure for table `ache`
--

CREATE TABLE `ache` (
  `ID` int(1) DEFAULT NULL,
  `group_1` varchar(10) DEFAULT NULL,
  `group_2` varchar(10) DEFAULT NULL,
  `test_type` varchar(16) DEFAULT NULL,
  `me_exposure_f` varchar(4) DEFAULT NULL,
  `me_exposure_err` varchar(6) DEFAULT NULL,
  `me_exposure_df` varchar(6) DEFAULT NULL,
  `me_exposure_p` varchar(6) DEFAULT NULL,
  `me_region_f` varchar(5) DEFAULT NULL,
  `me_region_err` varchar(4) DEFAULT NULL,
  `me_region_df` varbinary(4) DEFAULT NULL,
  `me_region_p` varchar(4) DEFAULT NULL,
  `me_interaction_f` varchar(5) DEFAULT NULL,
  `me_interaction_err` varchar(4) DEFAULT NULL,
  `me_interaction_df` varchar(5) DEFAULT NULL,
  `me_interaction_p` varchar(5) DEFAULT NULL,
  `hipp_mean_1` varchar(3) DEFAULT NULL,
  `hipp_se_1` varchar(3) DEFAULT NULL,
  `hipp_n_1` varchar(4) DEFAULT NULL,
  `hipp_mean_2` varchar(2) DEFAULT NULL,
  `hipp_se_2` varchar(5) DEFAULT NULL,
  `hipp_n_2` varchar(2) DEFAULT NULL,
  `hipp_p` varchar(3) DEFAULT NULL,
  `cort_mean_1` varchar(3) DEFAULT NULL,
  `cort_se_1` varchar(3) DEFAULT NULL,
  `cort_n_1` varchar(3) DEFAULT NULL,
  `cort_n_2` varchar(4) DEFAULT NULL,
  `cort_mean_2` varchar(3) DEFAULT NULL,
  `cort_se_2` varchar(3) DEFAULT NULL,
  `cort_p` varchar(5) DEFAULT NULL,
  `cerb_mean_1` varchar(3) DEFAULT NULL,
  `cerb_se_1` varchar(3) DEFAULT NULL,
  `cerb_n_1` varchar(3) DEFAULT NULL,
  `cerb_mean_2` varchar(4) DEFAULT NULL,
  `cerb_se_2` varchar(5) DEFAULT NULL,
  `cerb_n_2` varchar(4) DEFAULT NULL,
  `cerb_p` varchar(3) DEFAULT NULL,
  `striat_mean_1` varchar(3) DEFAULT NULL,
  `striat_se_1` varchar(3) DEFAULT NULL,
  `striat_n_1` varchar(3) DEFAULT NULL,
  `striat_mean_2` varchar(3) DEFAULT NULL,
  `striat_se_2` varchar(4) DEFAULT NULL,
  `striat_n_2` varchar(4) DEFAULT NULL,
  `striat_p` varchar(4) DEFAULT NULL,
  `total_mean_1` varchar(10) NOT NULL,
  `total_se_1` varchar(10) NOT NULL,
  `n_1` varchar(10) NOT NULL,
  `total_mean_2` varchar(10) NOT NULL,
  `total_se_2` varchar(10) NOT NULL,
  `n_2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ache`
--

INSERT INTO `ache` (`ID`, `group_1`, `group_2`, `test_type`, `me_exposure_f`, `me_exposure_err`, `me_exposure_df`, `me_exposure_p`, `me_region_f`, `me_region_err`, `me_region_df`, `me_region_p`, `me_interaction_f`, `me_interaction_err`, `me_interaction_df`, `me_interaction_p`, `hipp_mean_1`, `hipp_se_1`, `hipp_n_1`, `hipp_mean_2`, `hipp_se_2`, `hipp_n_2`, `hipp_p`, `cort_mean_1`, `cort_se_1`, `cort_n_1`, `cort_n_2`, `cort_mean_2`, `cort_se_2`, `cort_p`, `cerb_mean_1`, `cerb_se_1`, `cerb_n_1`, `cerb_mean_2`, `cerb_se_2`, `cerb_n_2`, `cerb_p`, `striat_mean_1`, `striat_se_1`, `striat_n_1`, `striat_mean_2`, `striat_se_2`, `striat_n_2`, `striat_p`, `total_mean_1`, `total_se_1`, `n_1`, `total_mean_2`, `total_se_2`, `n_2`) VALUES
(1, 'oil_saline', 'cpf_saline', 'two_way_rm_anova', '6', '76', '8', '4', '8', '3', 0x36, '76', '7', '5', '6', '8', '5', '7', '', '8', '6', '', '9', '5', '7', '', '', '8', '6', '9', '5', '4', '', '3', '3', '', '2', '2', '3', '', '4', '5', '', '5', '8', '79', '5', '658', '76', '9'),
(2, 'oil_saline', 'oil_igf', 'two_way_rm_anova', '6', '76', '8', '4', '8', '3', 0x36, '76', '7', '5', '6', '8', '5', '7', '2344', '8', '6', '56', '9', '5', '7', '798', '8', '8', '6', '9', '5', '4', '65', '3', '3', '7', '2', '2', '3', '9', '4', '5', '987', '5', '8', '79', '5', '658', '76', '9'),
(3, 'cpf_saline', 'cpf_igf', 'two_way_rm_anova', '2948', '234870', '2397', '9824', '9348', '924', 0x323438, '348', '23480', '2801', '2934', '80934', '234', '098', '5098', '3', '23480', '43', '3', '234', '234', '09', '9283', '348', '248', '84024', '098', '248', '209', '2480', '02948', '8240', '824', '234', '325', '634', '234', '5235', '2342', '2342', '', '', '', '', '', ''),
(4, 'oil_igf', 'cpf_igf', 'two_way_rm_anova', '6', '76', '8', '4', '8', '3', 0x36, '76', '7', '5', '6', '8', '5', '7', '5098', '8', '6', '43', '9', '5', '7', '09', '9283', '8', '6', '9', '5', '4', '209', '3', '3', '8240', '2', '2', '3', '634', '4', '5', '2342', '5', '8', '79', '5', '658', '76', '9'),
(5, 'oil_igf', 'cpf_saline', 'two_way_rm_anova', '1', '7', '0', '4', '7', '5', 0x36, '8', '21', '9', '20', '22', '23', '23', '2344', '97', '96', '56', '876', '87', '798', '798', '8', '798', '979', '79', '798', '76', '65', '979', '87', '7', '1', '85', '8', '9', '87', '8', '987', '98', '', '', '', '', '', ''),
(6, 'oil_saline', 'cpf_igf', 'two_way_rm_anova', '6', '76', '8', '4', '8', '3', 0x36, '76', '7', '5', '6', '8', '5', '7', '5098', '8', '6', '43', '9', '5', '7', '09', '9283', '8', '6', '9', '5', '4', '209', '3', '3', '8240', '2', '2', '3', '634', '4', '5', '2342', '5', '8', '79', '5', '658', '76', '9');

-- --------------------------------------------------------

--
-- Table structure for table `fv`
--

CREATE TABLE `fv` (
  `ID` int(1) DEFAULT NULL,
  `group_1` varchar(10) DEFAULT NULL,
  `total_mean_1` varchar(10) NOT NULL,
  `total_se_1` varchar(10) NOT NULL,
  `n_1` varchar(10) NOT NULL,
  `group_2` varchar(10) DEFAULT NULL,
  `total_mean_2` varchar(10) NOT NULL,
  `total_se_2` varchar(10) NOT NULL,
  `n_2` varchar(10) NOT NULL,
  `test_type` varchar(16) DEFAULT NULL,
  `me_exposure_f` int(4) DEFAULT NULL,
  `me_exposure_err` int(6) DEFAULT NULL,
  `me_exposure_df` int(6) DEFAULT NULL,
  `me_exposure_p` int(6) DEFAULT NULL,
  `me_intensity_f` int(5) DEFAULT NULL,
  `me_intensity_err` int(3) DEFAULT NULL,
  `me_intensity_df` int(4) DEFAULT NULL,
  `me_intensity_p` int(4) DEFAULT NULL,
  `me_interaction_f` int(5) DEFAULT NULL,
  `me_interaction_err` int(4) DEFAULT NULL,
  `me_interaction_df` int(4) DEFAULT NULL,
  `me_interaction_p` int(5) DEFAULT NULL,
  `mean_0_1` varchar(3) DEFAULT NULL,
  `se_0_1` varchar(2) DEFAULT NULL,
  `mean_0_2` varchar(2) DEFAULT NULL,
  `se_0_2` varchar(5) DEFAULT NULL,
  `p_0` varchar(3) DEFAULT NULL,
  `mean_50_1` varchar(3) DEFAULT NULL,
  `se_50_1` varchar(3) DEFAULT NULL,
  `mean_50_2` varchar(4) DEFAULT NULL,
  `se_50_2` varchar(3) DEFAULT NULL,
  `p_50` varchar(5) DEFAULT NULL,
  `mean_100_1` varchar(3) DEFAULT NULL,
  `se_100_1` varchar(3) DEFAULT NULL,
  `mean_100_2` varchar(4) DEFAULT NULL,
  `se_100_2` varchar(4) DEFAULT NULL,
  `p_100` varchar(3) DEFAULT NULL,
  `mean_150_1` varchar(3) DEFAULT NULL,
  `se_150_1` varchar(3) DEFAULT NULL,
  `mean_150_2` varchar(3) DEFAULT NULL,
  `se_150_2` varchar(4) DEFAULT NULL,
  `p_150` varchar(4) DEFAULT NULL,
  `mean_200_1` varchar(2) DEFAULT NULL,
  `se_200_1` varchar(2) DEFAULT NULL,
  `mean_200_2` varchar(3) DEFAULT NULL,
  `se_200_2` varchar(2) DEFAULT NULL,
  `p_200` varchar(2) DEFAULT NULL,
  `mean_250_1` varchar(3) DEFAULT NULL,
  `se_250_1` varchar(1) DEFAULT NULL,
  `mean_250_2` varchar(3) DEFAULT NULL,
  `se_250_2` varchar(1) DEFAULT NULL,
  `p_250` varchar(2) DEFAULT NULL,
  `mean_300_1` varchar(2) DEFAULT NULL,
  `se_300_1` varchar(2) DEFAULT NULL,
  `mean_300_2` varchar(2) DEFAULT NULL,
  `se_300_2` varchar(2) DEFAULT NULL,
  `p_300` varchar(1) DEFAULT NULL,
  `mean_350_1` varchar(1) DEFAULT NULL,
  `se_350_1` varchar(1) DEFAULT NULL,
  `mean_350_2` varchar(2) DEFAULT NULL,
  `se_350_2` varchar(2) DEFAULT NULL,
  `p_350` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fv`
--

INSERT INTO `fv` (`ID`, `group_1`, `total_mean_1`, `total_se_1`, `n_1`, `group_2`, `total_mean_2`, `total_se_2`, `n_2`, `test_type`, `me_exposure_f`, `me_exposure_err`, `me_exposure_df`, `me_exposure_p`, `me_intensity_f`, `me_intensity_err`, `me_intensity_df`, `me_intensity_p`, `me_interaction_f`, `me_interaction_err`, `me_interaction_df`, `me_interaction_p`, `mean_0_1`, `se_0_1`, `mean_0_2`, `se_0_2`, `p_0`, `mean_50_1`, `se_50_1`, `mean_50_2`, `se_50_2`, `p_50`, `mean_100_1`, `se_100_1`, `mean_100_2`, `se_100_2`, `p_100`, `mean_150_1`, `se_150_1`, `mean_150_2`, `se_150_2`, `p_150`, `mean_200_1`, `se_200_1`, `mean_200_2`, `se_200_2`, `p_200`, `mean_250_1`, `se_250_1`, `mean_250_2`, `se_250_2`, `p_250`, `mean_300_1`, `se_300_1`, `mean_300_2`, `se_300_2`, `p_300`, `mean_350_1`, `se_350_1`, `mean_350_2`, `se_350_2`, `p_350`) VALUES
(1, 'oil_saline', '78', '45', '8', 'cpf_saline', '5', '5', '5', 'two_way_rm_anova', 48, 4, 6, 4, 68, 64, 84, 1, 78, 315, 18, 6, '48', '87', '84', '54', '68', '9', '684', '48', '6', '45', '51', '5', '6', '84', '68', '4', '5', '31', '54', '35', '1', '35', '78', '78', '87', '87', '4', '8', '6', '45', '45', '8', '1', '5', '4', '4', '4', '48', '46', '1'),
(2, 'oil_saline', '', '', '', 'oil_igf', '', '', '', 'two_way_rm_anova', 46, 2, 5, 31, 2, 12, 1, 1, 1, 321, 3, 321, '3', '12', '31', '546', '48', '484', '12', '13', '21', '21', '1', '231', '84', '23', '12', '15', '13', '1', '.02', '5', '54', '32', '15', '15', '32', '12', '1', '132', '1', '21', '2', '3', '21', '32', '1', '5', '5', '1', '53', '1'),
(3, 'cpf_saline', '', '', '', 'cpf_igf', '', '', '', 'two_way_rm_anova', 2948, 234870, 2397, 9824, 9348, 924, 248, 348, 23480, 2801, 2934, 80934, '234', '98', '3', '23480', '3', '234', '234', '9283', '348', '84024', '98', '248', '2480', '2948', '824', '234', '325', '234', '5235', '2342', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'oil_igf', '98', '9', '0', 'cpf_igf', '9', '0', '8', 'two_way_rm_anova', 7, 0, 6, 8, 7, 5, 6, 85, 5, 4, 4, 6, '7', '6', '7', '6', '8', '6', '6', '7', '4', '6', '6', '7', '8', '6', '9', '6', '7', '8', '5', '3', '4', '8', '5', '9', '0', '6', '7', '87', '6', '7', '8', '3', '4', '5', '6', '5', '5', '8', '9', '8'),
(5, 'oil_igf', '', '', '', 'cpf_saline', '', '', '', 'two_way_rm_anova', 1, 7, 0, 4, 7, 5, 6, 8, 21, 9, 20, 22, '23', '23', '97', '96', '876', '87', '798', '8', '798', '79', '798', '76', '979', '87', '1', '85', '8', '87', '8', '98', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'oil_saline', '', '', '', 'cpf_igf', '', '', '', 'two_way_rm_anova', 7658, 57, 454, 6, 768, 70, 979, 5, 78, 76, 869, 98, '70', '87', '65', '754', '543', '45', '75', '97', '9', '86865', '54', '65', '6', '58', '876', '876', '6', '68', '76', '78', '', '85', '8', '86', '87', '6', '7', '687', '6', '76', '86', '7', '6', '7', '0', '8', '9', '8', '75', '56');

-- --------------------------------------------------------

--
-- Table structure for table `slope`
--

CREATE TABLE `slope` (
  `ID` int(1) NOT NULL DEFAULT '0',
  `group_1` varchar(10) DEFAULT NULL,
  `total_mean_1` varchar(10) DEFAULT NULL,
  `total_se_1` varchar(10) DEFAULT NULL,
  `n_1` varchar(10) DEFAULT NULL,
  `group_2` varchar(10) DEFAULT NULL,
  `total_mean_2` varchar(10) DEFAULT NULL,
  `total_se_2` varchar(10) DEFAULT NULL,
  `n_2` varchar(10) DEFAULT NULL,
  `test_type` varchar(16) DEFAULT NULL,
  `me_exposure_f` varchar(4) DEFAULT NULL,
  `me_exposure_err` varchar(6) DEFAULT NULL,
  `me_exposure_df` varchar(6) DEFAULT NULL,
  `me_exposure_p` varchar(6) DEFAULT NULL,
  `me_intensity_f` varchar(5) DEFAULT NULL,
  `me_intensity_err` varchar(3) DEFAULT NULL,
  `me_intensity_df` varchar(4) DEFAULT NULL,
  `me_intensity_p` varchar(4) DEFAULT NULL,
  `me_interaction_f` varchar(5) DEFAULT NULL,
  `me_interaction_err` varchar(4) DEFAULT NULL,
  `me_interaction_df` varchar(4) DEFAULT NULL,
  `me_interaction_p` varchar(5) DEFAULT NULL,
  `mean_0_1` varchar(3) DEFAULT NULL,
  `se_0_1` varchar(2) DEFAULT NULL,
  `mean_0_2` varchar(2) DEFAULT NULL,
  `se_0_2` varchar(5) DEFAULT NULL,
  `p_0` varchar(3) DEFAULT NULL,
  `mean_50_1` varchar(3) DEFAULT NULL,
  `se_50_1` varchar(3) DEFAULT NULL,
  `mean_50_2` varchar(4) DEFAULT NULL,
  `se_50_2` varchar(3) DEFAULT NULL,
  `p_50` varchar(5) DEFAULT NULL,
  `mean_100_1` varchar(3) DEFAULT NULL,
  `se_100_1` varchar(3) DEFAULT NULL,
  `mean_100_2` varchar(4) DEFAULT NULL,
  `se_100_2` varchar(4) DEFAULT NULL,
  `p_100` varchar(3) DEFAULT NULL,
  `mean_150_1` varchar(3) DEFAULT NULL,
  `se_150_1` varchar(3) DEFAULT NULL,
  `mean_150_2` varchar(3) DEFAULT NULL,
  `se_150_2` varchar(4) DEFAULT NULL,
  `p_150` varchar(4) DEFAULT NULL,
  `mean_200_1` varchar(2) DEFAULT NULL,
  `se_200_1` varchar(2) DEFAULT NULL,
  `mean_200_2` varchar(3) DEFAULT NULL,
  `se_200_2` varchar(2) DEFAULT NULL,
  `p_200` varchar(2) DEFAULT NULL,
  `mean_250_1` varchar(3) DEFAULT NULL,
  `se_250_1` varchar(1) DEFAULT NULL,
  `mean_250_2` varchar(3) DEFAULT NULL,
  `se_250_2` varchar(1) DEFAULT NULL,
  `p_250` varchar(2) DEFAULT NULL,
  `mean_300_1` varchar(2) DEFAULT NULL,
  `se_300_1` varchar(2) DEFAULT NULL,
  `mean_300_2` varchar(2) DEFAULT NULL,
  `se_300_2` varchar(2) DEFAULT NULL,
  `p_300` varchar(1) DEFAULT NULL,
  `mean_350_1` varchar(1) DEFAULT NULL,
  `se_350_1` varchar(1) DEFAULT NULL,
  `mean_350_2` varchar(2) DEFAULT NULL,
  `se_350_2` varchar(2) DEFAULT NULL,
  `p_350` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slope`
--

INSERT INTO `slope` (`ID`, `group_1`, `total_mean_1`, `total_se_1`, `n_1`, `group_2`, `total_mean_2`, `total_se_2`, `n_2`, `test_type`, `me_exposure_f`, `me_exposure_err`, `me_exposure_df`, `me_exposure_p`, `me_intensity_f`, `me_intensity_err`, `me_intensity_df`, `me_intensity_p`, `me_interaction_f`, `me_interaction_err`, `me_interaction_df`, `me_interaction_p`, `mean_0_1`, `se_0_1`, `mean_0_2`, `se_0_2`, `p_0`, `mean_50_1`, `se_50_1`, `mean_50_2`, `se_50_2`, `p_50`, `mean_100_1`, `se_100_1`, `mean_100_2`, `se_100_2`, `p_100`, `mean_150_1`, `se_150_1`, `mean_150_2`, `se_150_2`, `p_150`, `mean_200_1`, `se_200_1`, `mean_200_2`, `se_200_2`, `p_200`, `mean_250_1`, `se_250_1`, `mean_250_2`, `se_250_2`, `p_250`, `mean_300_1`, `se_300_1`, `mean_300_2`, `se_300_2`, `p_300`, `mean_350_1`, `se_350_1`, `mean_350_2`, `se_350_2`, `p_350`) VALUES
(1, 'oil_saline', '8708', '70', '8', 'cpf_saline', '09', '7098', '0967', 'two_way_rm_anova', '876', '865', '76', '696', '9879', '676', '987', '78', '464', '7987', '545', '654', '5', '57', '69', '75', '747', '475', '76', '97', '987', '67', '5', '765', '8', '687', '9', '87', '86', '875', '0', '65', '76', '8', '76', '87', '6', '7', '8', '8', '8', '9', '6', '9', '5', '7', '4', '5', '7', '8', '9', '5'),
(2, 'oil_saline', '098', '75', '47', 'oil_igf', '67', '58', '5', 'two_way_rm_anova', '6', '8', '5', '6', '6', '6', '8', '5', '2', '4', '3', '8', '76', '5', '5', '6', '6', '7', '7', '6', '5', '4', '4', '5', '6', '7', '8', '8', '7', '6', '8', '6', '5', '0', '0', '7', '9', '6', '9', '7', '0', '07', '7', '86', '5', '4', '3', '5', '6', '7', '8', '6'),
(3, 'cpf_saline', '', '', '', 'cpf_igf', '', '', '', 'two_way_rm_anova', '2948', '234870', '2397', '9824', '9348', '924', '248', '348', '23480', '2801', '2934', '80934', '234', '98', '3', '23480', '3', '234', '234', '9283', '348', '84024', '98', '248', '2480', '2948', '824', '234', '325', '234', '5235', '2342', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'oil_igf', '', '', '', 'cpf_igf', '', '', '', 'two_way_rm_anova', '2948', '234870', '2397', '9824', '9348', '924', '248', '348', '23480', '2801', '2934', '80934', '234', '98', '3', '23480', '3', '234', '234', '9283', '348', '84024', '98', '248', '2480', '2948', '824', '234', '325', '234', '5235', '2342', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'oil_igf', '', '', '', 'cpf_saline', '', '', '', 'two_way_rm_anova', '1', '7', '0', '4', '7', '5', '6', '8', '21', '9', '20', '22', '23', '23', '97', '96', '876', '87', '798', '8', '798', '79', '798', '76', '979', '87', '1', '85', '8', '87', '8', '98', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'oil_saline', '548', '54', '4', 'cpf_igf', '98', '54', '97', 'two_way_rm_anova', '4', '98', '5', '6', '64', '16', '48', '1', '84', '545', '48', '48', '64', '48', '16', '518', '15', '64', '54', '68', '155', '025', '451', '15', '351', '154', '6', '489', '78', '54', '79', '54', '64', '87', '984', '3', '15', '564', '8', '48', '4', '15', '13', '48', '46', '84', '6', '4', '1', '67', '79', '87');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slope`
--
ALTER TABLE `slope`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
