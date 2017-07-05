-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2017 at 12:01 PM
-- Server version: 5.6.36-82.0-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haleygee_reformed`
--
CREATE DATABASE IF NOT EXISTS `haleygee_reformed` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `haleygee_reformed`;

-- --------------------------------------------------------

--
-- Table structure for table `bosses`
--

CREATE TABLE `bosses` (
  `boss_id` int(2) DEFAULT NULL,
  `boss_name` varchar(21) DEFAULT NULL,
  `boss_raid` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bosses`
--

INSERT INTO `bosses` (`boss_id`, `boss_name`, `boss_raid`) VALUES
(1, 'Baron Geddon', 'MC'),
(2, 'Garr', 'MC'),
(3, 'Gehennas', 'MC'),
(4, 'Golemagg', 'MC'),
(5, 'Lucifron', 'MC'),
(6, 'Magmadar', 'MC'),
(7, 'Majordomo', 'MC'),
(8, 'Ragnaros', 'MC'),
(9, 'Shazzrah', 'MC'),
(10, 'Sulfuron', 'MC'),
(11, 'Broodlord', 'BWL'),
(12, 'Chromaggus', 'BWL'),
(13, 'Ebonroc', 'BWL'),
(14, 'Firemaw', 'BWL'),
(15, 'Flamegor', 'BWL'),
(16, 'Grethok', 'BWL'),
(17, 'Krixix', 'BWL'),
(18, 'Nefarian', 'BWL'),
(19, 'Razorgore', 'BWL'),
(20, 'Ebonroc', 'BWL'),
(21, 'Onyxia', 'ONY'),
(22, 'Bloodlord Mandokir', 'ZG'),
(23, 'Gahzranka', 'ZG'),
(24, 'Grilek ', 'ZG'),
(25, 'Hakkar the Soulflayer', 'ZG'),
(26, 'Hazzarah ', 'ZG'),
(27, 'High Priest Thekal', 'ZG'),
(28, 'High Priest Venoxis', 'ZG'),
(29, 'High Priestess Arlokk', 'ZG'),
(30, 'High Priestess Jeklik', 'ZG'),
(31, 'High Priestess Mar li', 'ZG'),
(32, 'Jindo the Hexxer', 'ZG'),
(33, 'Renataki', 'ZG'),
(34, 'Wushoolay ', 'ZG');

-- --------------------------------------------------------

--
-- Table structure for table `nonsetloot`
--

CREATE TABLE `nonsetloot` (
  `item_id` int(2) DEFAULT NULL,
  `item_name` varchar(28) DEFAULT NULL,
  `item_slot` varchar(19) DEFAULT NULL,
  `item_boss` varchar(38) DEFAULT NULL,
  `item_class` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nonsetloot`
--

INSERT INTO `nonsetloot` (`item_id`, `item_name`, `item_slot`, `item_boss`, `item_class`) VALUES
(2, 'Aged Core Leather Gloves', 'Hands (Leather)', 'Golemagg', 'Melee DPS'),
(3, 'Ancient Purified Leaf', 'Hunter Quest', 'Golemagg, Magmadar, Garr, Baron Geddon', 'Hunter'),
(4, 'Aurastone Hammer', '1H Mace', 'Magmadar', 'Healer'),
(5, 'Azuresong Mageblade', '1H Sword', 'Baron Geddon', 'Caster DPS'),
(6, 'Band of Accuria', 'Finger', 'Majordomo', 'Ranged and melee DPS'),
(7, 'Blastershot Launcher', 'Gun', 'Baron Geddon', 'Ranged DPS'),
(8, 'Blazing Rune', 'Companion Pet', 'Magmadar', ''),
(9, 'Bonereavers Edge', '2H Sword', 'Majordomo', 'Ranged and melee DPS'),
(10, 'Brutality Blade', '1H Sword', 'Magmadar', 'Melee DPS'),
(11, 'Cauterizing Band', 'Finger', 'Golemagg, Magmadar, Garr, Baron Geddon', 'Caster DPS'),
(12, 'Choker of Enlightenment', 'Neck', 'Lucifron', 'Healer'),
(13, 'Choker of the Firelord', 'Neck', 'Majordomo', 'Caster'),
(14, 'Cloak of the Shrouded Mists', 'Back (Cloth)', 'Majordomo', 'Ranged and melee DPS'),
(15, 'Core Forged Greaves', 'Feet (Plate)', 'Golemagg, Magmadar, Garr, Baron Geddon', 'Tank'),
(16, 'Core Hound Tooth', 'Dagger', 'Golemagg, Magmadar, Garr, Baron Geddon', 'Melee DPS'),
(17, 'Core of Hardened Ash', 'Companion Pet', 'Golemagg', ''),
(18, 'Crimson Shocker', 'Wand', 'Sulfuron', 'DPS Caster'),
(19, 'Crown of Destruction', 'Head (Mail)', 'Majordomo', 'Shaman'),
(20, 'Deep Earth Spaulders', 'Shoulders (Mail)', 'Golemagg', 'Caster Shaman'),
(21, 'Dragons Blood Cape', 'Back (Cloth)', 'Majordomo', 'Melee DPS and Tank'),
(22, 'Drillborer Disk', 'Shield', 'Magmadar', 'Tank'),
(23, 'Earthshaker', '2H mace', 'Lucifron, Sulfuron, Gehennas, Shazzrah', 'Melee DPS'),
(24, 'Eskhanders Left Claw', 'Fist Weapon', 'Lucifron, Sulfuron, Gehennas, Shazzrah', 'Melee DPS'),
(25, 'Eskhanders Right Claw', 'Fist Weapon', 'Lucifron, Sulfuron, Gehennas, Shazzrah', 'Melee DPS'),
(26, 'Essence of the Pure Flame', 'Trinket', 'Majordomo', 'DPS'),
(27, 'Finkles Lava Dredger', '2H Mace', 'Golemagg, Magmadar, Garr, Baron Geddon', 'Healer'),
(28, 'Fire Runed Grimoire', 'Off-Hand', 'Golemagg', 'Caster'),
(29, 'Fireguard Shoulders', 'Shoulders (Leather)', 'Majordomo', 'Leather FR'),
(30, 'Fireproof Cloak', 'Back (Cloth)', 'Majordomo', 'Caster'),
(31, 'Flameguard Gauntlets', 'Hands (Plate)', 'Golemagg', 'Warrior'),
(32, 'Flamewalker Legplates', 'Legs (Plate)', 'Sulfuron, Golemagg', 'Warrior'),
(33, 'Gloves of the Hypnotic Flame', 'Hands (Cloth)', 'Majordomo', 'Caster'),
(34, 'Gutgore Ripper', 'Dagger', 'Magmadar', 'Warlock and Shadowpriest'),
(35, 'Heavy Dark Iron Ring', 'Finger', 'Sulfuron', 'Melee DPS'),
(36, 'Helm of the lifegiver', 'Helm (Mail)', 'Sulfuron', 'Resto Shammy'),
(37, 'Magma Tempered Boots', 'Feet (Plate)', 'Golemagg, Magmadar, Garr, Baron Geddon', 'Pally'),
(38, 'Malistars Defender', 'Shield', 'Ragnaros', 'Healer'),
(39, 'Mana Igniting Cord', 'Waist (Cloth)', 'Golemagg, Magmadar, Garr, Baron Geddon', 'Caster'),
(40, 'Manastorm Leggings', 'Legs (Cloth)', 'Lucifron, Sulfuron, Gehennas, Shazzrah', 'Healer'),
(41, 'Mark of Flame', 'Companion Pet', 'Sulfuron', ''),
(42, 'Medallion of Steadfast Might', 'Neck', 'Magmadar', 'Tank'),
(43, 'Obsidian Edged Blade', '2H Sword', 'Golemagg, Magmadar, Garr, Baron Geddon', 'Warrior'),
(44, 'Onslaught Girdle', 'Waist (Plate)', 'Ragnaros', 'Warrior'),
(45, 'Perditions Blade', 'Dagger', 'Ragnaros', 'Melee DPS'),
(46, 'Quick Strike Ring', 'Finger', 'Golemagg, Magmadar, Garr, Baron Geddon', 'Melee DPS'),
(47, 'Ring of Spellpower', 'Finger', 'Lucifron, Sulfuron, Gehennas, Shazzrah', 'Caster DPS'),
(48, 'Robe of Volatile Power', 'Chest (cloth)', 'Lucifron, Sulfuron, Gehennas, Shazzrah', 'Healer'),
(49, 'Sabatons of the flamewalker', 'Feet (Mail)', 'Golemagg, Magmadar, Garr, Baron Geddon', 'DPS Shaman'),
(50, 'Salamander Scale Pants', 'Legs (Leather)', 'Lucifron, Sulfuron, Gehennas, Shazzrah', 'Healer'),
(51, 'Seal of the Archmagus', 'Finger', 'Baron Geddon', 'Healer'),
(52, 'Shadowstrike', '2H Polearm', 'Sulfuron', ''),
(53, 'Shard of the Flame', 'Trinket', 'Ragnaros', ''),
(54, 'Slash of Whispered Secrets', 'Waist (Cloth)', 'Majordomo', 'Healer'),
(55, 'Sorcerous Dagger', 'Dagger', 'Lucifron, Sulfuron, Gehennas, Shazzrah', 'Caster DPS'),
(56, 'Spinal Reaper', '2H Axe', 'Ragnaros', 'DPS Warrior'),
(57, 'Staff of Dominance', 'Staff', 'Golemagg', 'Caster DPS'),
(58, 'Strikers Mark', 'Bow', 'Magmadar', 'Ranged DPS'),
(59, 'Sulfuron Ingot', 'Trade Item', 'Golemagg', ''),
(60, 'Talisman of Ephemeral Power', 'Neck', 'Golemagg, Magmadar, Garr, Baron Geddon', 'Caster DPS'),
(61, 'The Eye of Divinity', 'Priest Quest', 'Majordomo', 'Priest'),
(62, 'Wild Growth Spaulders', 'Shoulders (Leather)', 'Majordomo', 'Caster'),
(63, 'Wristguards of Stability', 'Wrist (Leather)', 'Lucifron, Sulfuron, Gehennas, Shazzrah', 'Melee DPS'),
(64, 'Wristguards of True Flight', 'Wrist (Leather)', 'Majordomo', 'Ranged and Melee DPS'),
(65, 'Deathbringer', '1H', 'Onyxia', 'Melee DPS'),
(66, 'Viskag the Bloodletter', '1H Axe', 'Onyxia', 'Melee DPS'),
(67, 'Sapphiron Drape', 'Back', 'Onyxia', 'Caster DPS'),
(68, 'Ancient Cornerstone Grimoire', 'Offhand', 'Onyxia', 'Caster'),
(69, 'Eskhanders Collar', 'Neck', 'Onyxia', 'Melee'),
(70, 'Head of Onyxia', '', 'Onyxia', 'All'),
(71, 'Mature Black Dragon Sinew', '', 'Onyxia', 'Hunter'),
(72, 'Ring of Binding', 'Finger', 'Onyxia', 'Tank'),
(73, 'Shard of the Scale', 'Trinket', 'Onyxia', 'Caster');

-- --------------------------------------------------------

--
-- Table structure for table `raids`
--

CREATE TABLE `raids` (
  `id` int(11) NOT NULL,
  `raid_id` varchar(999) NOT NULL,
  `raid_roster` varchar(999) NOT NULL,
  `raid_date` int(11) NOT NULL,
  `raid_instance` varchar(999) NOT NULL,
  `bosses` varchar(999) NOT NULL,
  `set_loot` varchar(999) NOT NULL,
  `set_loot_win` varchar(999) NOT NULL,
  `nonset_loot` varchar(999) NOT NULL,
  `nonset_loot_win` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `raids`
--

INSERT INTO `raids` (`id`, `raid_id`, `raid_roster`, `raid_date`, `raid_instance`, `bosses`, `set_loot`, `set_loot_win`, `nonset_loot`, `nonset_loot_win`) VALUES
(10, '', 'tharune pauris morgenstern chorage nemuu agne seipheroth poonpounder jezpalimu perpus gitrekt cheus  krackenskulz tess neqra speshtality kuddler penina askos frozeudown meggie bottled trujillo felinenima royko sassycow twentyxac ryjax', 170521, 'Onyxias Lair', 'Onyxia--------------', 'Bloodfang Helm-------------------', 'tess-------------------', 'Eskhanders Collar-------------------', 'neqra-------------------');

-- --------------------------------------------------------

--
-- Table structure for table `roster`
--

CREATE TABLE `roster` (
  `char_id` int(99) NOT NULL,
  `char_name` varchar(999) DEFAULT NULL,
  `char_class` varchar(999) DEFAULT NULL,
  `char_role` varchar(999) DEFAULT NULL,
  `officer` varchar(999) DEFAULT NULL,
  `join_date` varchar(999) DEFAULT NULL,
  `raids_attended` varchar(999) DEFAULT NULL,
  `set_loot` varchar(999) DEFAULT NULL,
  `nonset_loot` varchar(999) DEFAULT NULL,
  `last_set_loot` varchar(999) DEFAULT NULL,
  `last_nonset_loot` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roster`
--

INSERT INTO `roster` (`char_id`, `char_name`, `char_class`, `char_role`, `officer`, `join_date`, `raids_attended`, `set_loot`, `nonset_loot`, `last_set_loot`, `last_nonset_loot`) VALUES
(91, 'tharune', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(92, 'pauris', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(93, 'morgenstern', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(94, 'chorage', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(95, 'nemuu', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(96, 'agne', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(97, 'seipheroth', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(98, 'poonpounder', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(99, 'jezpalimu', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(100, 'perpus', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(101, 'gitrekt', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(102, 'cheus', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(103, '', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(104, 'krackenskulz', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(105, 'tess', NULL, NULL, NULL, NULL, '170521', '-Bloodfang Helm', NULL, '170521', NULL),
(106, 'neqra', NULL, NULL, NULL, NULL, '170521', NULL, '-Eskhanders Collar', NULL, '170521'),
(107, 'speshtality', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(108, 'kuddler', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(109, 'penina', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(110, 'askos', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(111, 'frozeudown', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(112, 'meggie', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(113, 'bottled', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(114, 'trujillo', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(115, 'felinenima', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(116, 'royko', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(117, 'sassycow', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(118, 'twentyxac', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL),
(119, 'ryjax', NULL, NULL, NULL, NULL, '170521', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setloot`
--

CREATE TABLE `setloot` (
  `item_name` varchar(36) DEFAULT NULL,
  `item_class` varchar(7) DEFAULT NULL,
  `item_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setloot`
--

INSERT INTO `setloot` (`item_name`, `item_class`, `item_id`) VALUES
('Arcanist Belt', 'Mage', 2),
('Arcanist Boots', 'Mage', 3),
('Arcanist Bracers', 'Mage', 4),
('Arcanist Chest', 'Mage', 5),
('Arcanist Gloves', 'Mage', 6),
('Arcanist Helm', 'Mage', 7),
('Arcanist Pants', 'Mage', 8),
('Arcanist Spaulders', 'Mage', 9),
('Battlegear of Might Belt', 'Warrior', 10),
('Battlegear of Might Boots', 'Warrior', 11),
('Battlegear of Might Bracers', 'Warrior', 12),
('Battlegear of Might Chest', 'Warrior', 13),
('Battlegear of Might Gloves', 'Warrior', 14),
('Battlegear of Might Helm', 'Warrior', 15),
('Battlegear of Might Pants', 'Warrior', 16),
('Battlegear of Might Spaulders', 'Warrior', 17),
('Battlegear of Wrath Belt', 'Warrior', 18),
('Battlegear of Wrath Boots', 'Warrior', 19),
('Battlegear of Wrath Bracers', 'Warrior', 20),
('Battlegear of Wrath Chest', 'Warrior', 21),
('Battlegear of Wrath Gloves', 'Warrior', 22),
('Battlegear of Wrath Helm', 'Warrior', 23),
('Battlegear of Wrath Pants', 'Warrior', 24),
('Battlegear of Wrath Spaulders', 'Warrior', 25),
('Bloodfang Belt', 'Rogue', 26),
('Bloodfang Boots', 'Rogue', 27),
('Bloodfang Bracers', 'Rogue', 28),
('Bloodfang Chest', 'Rogue', 29),
('Bloodfang Gloves', 'Rogue', 30),
('Bloodfang Helm', 'Rogue', 31),
('Bloodfang Pants', 'Rogue', 32),
('Bloodfang Spaulders', 'Rogue', 33),
('Cenarian  Spaulders', 'Druid', 34),
('Cenarian Belt', 'Druid', 35),
('Cenarian Boots', 'Druid', 36),
('Cenarian Bracers', 'Druid', 37),
('Cenarian Chest', 'Druid', 38),
('Cenarian Gloves', 'Druid', 39),
('Cenarian Helm', 'Druid', 40),
('Cenarian Pants', 'Druid', 41),
('Dragonstalker Belt', 'Hunter', 42),
('Dragonstalker Boots', 'Hunter', 43),
('Dragonstalker Bracers', 'Hunter', 44),
('Dragonstalker Chest', 'Hunter', 45),
('Dragonstalker Gloves', 'Hunter', 46),
('Dragonstalker Helm', 'Hunter', 47),
('Dragonstalker Pants', 'Hunter', 48),
('Dragonstalker Spaulders', 'Hunter', 49),
('Earthfury Belt', 'Shaman', 50),
('Earthfury Boots', 'Shaman', 51),
('Earthfury Bracers', 'Shaman', 52),
('Earthfury Chest', 'Shaman', 53),
('Earthfury Gloves', 'Shaman', 54),
('Earthfury Helm', 'Shaman', 55),
('Earthfury Pants', 'Shaman', 56),
('Earthfury Spaulders', 'Shaman', 57),
('Felheart Belt', 'Warlock', 58),
('Felheart Boots', 'Warlock', 59),
('Felheart Bracers', 'Warlock', 60),
('Felheart Chest', 'Warlock', 61),
('Felheart Gloves', 'Warlock', 62),
('Felheart Helm', 'Warlock', 63),
('Felheart Pants', 'Warlock', 64),
('Felheart Spaulders', 'Warlock', 65),
('Giantstalker Belt', 'Hunter', 66),
('Giantstalker Boots', 'Hunter', 67),
('Giantstalker Bracers', 'Hunter', 68),
('Giantstalker Chest', 'Hunter', 69),
('Giantstalker Gloves', 'Hunter', 70),
('Giantstalker Helm', 'Hunter', 71),
('Giantstalker Pants', 'Hunter', 72),
('Giantstalker Spaulders', 'Hunter', 73),
('Nemesis Belt', 'Warlock', 74),
('Nemesis Boots', 'Warlock', 75),
('Nemesis Bracers', 'Warlock', 76),
('Nemesis Chest', 'Warlock', 77),
('Nemesis Gloves', 'Warlock', 78),
('Nemesis Helm', 'Warlock', 79),
('Nemesis Pants', 'Warlock', 80),
('Nemesis Spaulders', 'Warlock', 81),
('Netherwind Belt', 'Mage', 82),
('Netherwind Boots', 'Mage', 83),
('Netherwind Bracers', 'Mage', 84),
('Netherwind Chest', 'Mage', 85),
('Netherwind Gloves', 'Mage', 86),
('Netherwind Helm', 'Mage', 87),
('Netherwind Pants', 'Mage', 88),
('Netherwind Spaulders', 'Mage', 89),
('Nightslayer Belt', 'Rogue', 90),
('Nightslayer Boots', 'Rogue', 91),
('Nightslayer Bracers', 'Rogue', 92),
('Nightslayer Chest', 'Rogue', 93),
('Nightslayer Gloves', 'Rogue', 94),
('Nightslayer Helm', 'Rogue', 95),
('Nightslayer Pants', 'Rogue', 96),
('Nightslayer Spaulders', 'Rogue', 97),
('Stormrage Belt', 'Druid', 98),
('Stormrage Boots', 'Druid', 99),
('Stormrage Bracers', 'Druid', 100),
('Stormrage Chest', 'Druid', 101),
('Stormrage Gloves', 'Druid', 102),
('Stormrage Helm', 'Druid', 103),
('Stormrage Pants', 'Druid', 104),
('Stormrage Spaulders', 'Druid', 105),
('Ten Storms Belt', 'Shaman', 106),
('Ten Storms Boots', 'Shaman', 107),
('Ten Storms Bracers', 'Shaman', 108),
('Ten Storms Chest', 'Shaman', 109),
('Ten Storms Gloves', 'Shaman', 110),
('Ten Storms Helm', 'Shaman', 111),
('Ten Storms Pants', 'Shaman', 112),
('Ten Storms Spaulders', 'Shaman', 113),
('Vestments of Prophecy Belt', 'Priest', 114),
('Vestments of Prophecy Boots', 'Priest', 115),
('Vestments of Prophecy Bracers', 'Priest', 116),
('Vestments of Prophecy Chest', 'Priest', 117),
('Vestments of Prophecy Gloves', 'Priest', 118),
('Vestments of Prophecy Helm', 'Priest', 119),
('Vestments of Prophecy Pants', 'Priest', 120),
('Vestments of Prophecy Spaulders', 'Priest', 121),
('Vestments of Transcendence Belt', 'Priest', 122),
('Vestments of Transcendence Boots', 'Priest', 123),
('Vestments of Transcendence Bracers', 'Priest', 124),
('Vestments of Transcendence Chest', 'Priest', 125),
('Vestments of Transcendence Gloves', 'Priest', 126),
('Vestments of Transcendence Helm', 'Priest', 127),
('Vestments of Transcendence Pants', 'Priest', 128),
('Vestments of Transcendence Spaulders', 'Priest', 129);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `raids`
--
ALTER TABLE `raids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roster`
--
ALTER TABLE `roster`
  ADD PRIMARY KEY (`char_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `raids`
--
ALTER TABLE `raids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `roster`
--
ALTER TABLE `roster`
  MODIFY `char_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;--
-- Database: `haleygee_stats`
--
CREATE DATABASE IF NOT EXISTS `haleygee_stats` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `haleygee_stats`;

-- --------------------------------------------------------

--
-- Table structure for table `ache`
--

CREATE TABLE `ache` (
  `ID` int(1) DEFAULT NULL,
  `group_1` varchar(10) DEFAULT NULL,
  `group_2` varchar(10) DEFAULT NULL,
  `test_type` varchar(16) DEFAULT NULL,
  `me_exposure_f` int(4) DEFAULT NULL,
  `me_exposure_err` int(6) DEFAULT NULL,
  `me_exposure_df` int(6) DEFAULT NULL,
  `me_exposure_p` int(6) DEFAULT NULL,
  `me_region_f` int(5) DEFAULT NULL,
  `me_region_err` int(4) DEFAULT NULL,
  `me_region_df` int(4) DEFAULT NULL,
  `me_region_p` int(4) DEFAULT NULL,
  `me_interaction_f` int(5) DEFAULT NULL,
  `me_interaction_err` int(4) DEFAULT NULL,
  `me_interaction_df` int(5) DEFAULT NULL,
  `me_interaction_p` int(5) DEFAULT NULL,
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
  `striat_p` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ache`
--

INSERT INTO `ache` (`ID`, `group_1`, `group_2`, `test_type`, `me_exposure_f`, `me_exposure_err`, `me_exposure_df`, `me_exposure_p`, `me_region_f`, `me_region_err`, `me_region_df`, `me_region_p`, `me_interaction_f`, `me_interaction_err`, `me_interaction_df`, `me_interaction_p`, `hipp_mean_1`, `hipp_se_1`, `hipp_n_1`, `hipp_mean_2`, `hipp_se_2`, `hipp_n_2`, `hipp_p`, `cort_mean_1`, `cort_se_1`, `cort_n_1`, `cort_n_2`, `cort_mean_2`, `cort_se_2`, `cort_p`, `cerb_mean_1`, `cerb_se_1`, `cerb_n_1`, `cerb_mean_2`, `cerb_se_2`, `cerb_n_2`, `cerb_p`, `striat_mean_1`, `striat_se_1`, `striat_n_1`, `striat_mean_2`, `striat_se_2`, `striat_n_2`, `striat_p`) VALUES
(1, 'oil_saline', 'cpf_saline', 'two_way_rm_anova', 4884, 445322, 765756, 856794, 47458, 456, 4647, 8658, 8564, 36, 778, 9786, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'oil_saline', 'oil_igf', 'two_way_rm_anova', 1, 7, 0, 4, 7, 5, 6, 8, 21, 9, 20, 22, '23', '23', '2344', '97', '96', '56', '876', '87', '798', '798', '8', '798', '979', '79', '798', '76', '65', '979', '87', '7', '1', '85', '8', '9', '87', '8', '987', '98'),
(3, 'cpf_saline', 'cpf_igf', 'two_way_rm_anova', 2948, 234870, 2397, 9824, 9348, 924, 248, 348, 23480, 2801, 2934, 80934, '234', '098', '5098', '3', '23480', '43', '3', '234', '234', '09', '9283', '348', '248', '84024', '098', '248', '209', '2480', '02948', '8240', '824', '234', '325', '634', '234', '5235', '2342', '2342'),
(4, 'oil_igf', 'cpf_igf', 'two_way_rm_anova', 2948, 234870, 2397, 9824, 9348, 924, 248, 348, 23480, 2801, 2934, 80934, '234', '098', '5098', '3', '23480', '43', '3', '234', '234', '09', '9283', '348', '248', '84024', '098', '248', '209', '2480', '02948', '8240', '824', '234', '325', '634', '234', '5235', '2342', '2342'),
(5, 'oil_igf', 'cpf_saline', 'two_way_rm_anova', 1, 7, 0, 4, 7, 5, 6, 8, 21, 9, 20, 22, '23', '23', '2344', '97', '96', '56', '876', '87', '798', '798', '8', '798', '979', '79', '798', '76', '65', '979', '87', '7', '1', '85', '8', '9', '87', '8', '987', '98'),
(6, 'oil_saline', 'cpf_igf', 'two_way_rm_anova', 2948, 234870, 2397, 9824, 9348, 924, 248, 348, 23480, 2801, 2934, 80934, '234', '098', '5098', '3', '23480', '43', '3', '234', '234', '09', '9283', '348', '248', '84024', '098', '248', '209', '2480', '02948', '8240', '824', '234', '325', '634', '234', '5235', '2342', '2342');

-- --------------------------------------------------------

--
-- Table structure for table `fv`
--

CREATE TABLE `fv` (
  `ID` int(1) DEFAULT NULL,
  `group_1` varchar(10) DEFAULT NULL,
  `group_2` varchar(10) DEFAULT NULL,
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
  `n_0_1` varchar(4) DEFAULT NULL,
  `mean_0_2` varchar(2) DEFAULT NULL,
  `se_0_2` varchar(5) DEFAULT NULL,
  `n_0_2` varchar(2) DEFAULT NULL,
  `p_0` varchar(3) DEFAULT NULL,
  `mean_50_1` varchar(3) DEFAULT NULL,
  `se_50_1` varchar(3) DEFAULT NULL,
  `n_50_1` varchar(3) DEFAULT NULL,
  `mean_50_2` varchar(4) DEFAULT NULL,
  `se_50_2` varchar(3) DEFAULT NULL,
  `n_50_2` varchar(3) DEFAULT NULL,
  `p_50` varchar(5) DEFAULT NULL,
  `mean_100_1` varchar(3) DEFAULT NULL,
  `se_100_1` varchar(3) DEFAULT NULL,
  `n_100_1` varchar(3) DEFAULT NULL,
  `mean_100_2` varchar(4) DEFAULT NULL,
  `se_100_2` varchar(4) DEFAULT NULL,
  `n_100_2` varchar(4) DEFAULT NULL,
  `p_100` varchar(3) DEFAULT NULL,
  `mean_150_1` varchar(3) DEFAULT NULL,
  `se_150_1` varchar(3) DEFAULT NULL,
  `n_150_1` varchar(3) DEFAULT NULL,
  `mean_150_2` varchar(3) DEFAULT NULL,
  `se_150_2` varchar(4) DEFAULT NULL,
  `n_150_2` varchar(4) DEFAULT NULL,
  `p_150` varchar(4) DEFAULT NULL,
  `mean_200_1` varchar(2) DEFAULT NULL,
  `se_200_1` varchar(2) DEFAULT NULL,
  `n_200_1` varchar(2) DEFAULT NULL,
  `mean_200_2` varchar(3) DEFAULT NULL,
  `se_200_2` varchar(2) DEFAULT NULL,
  `n_200_2` varchar(2) DEFAULT NULL,
  `p_200` varchar(2) DEFAULT NULL,
  `mean_250_1` varchar(3) DEFAULT NULL,
  `se_250_1` varchar(1) DEFAULT NULL,
  `n_250_1` varchar(10) DEFAULT NULL,
  `mean_250_2` varchar(3) DEFAULT NULL,
  `se_250_2` varchar(1) DEFAULT NULL,
  `n_250_2` varchar(2) DEFAULT NULL,
  `p_250` varchar(2) DEFAULT NULL,
  `mean_300_1` varchar(2) DEFAULT NULL,
  `se_300_1` varchar(2) DEFAULT NULL,
  `n_300_1` varchar(1) DEFAULT NULL,
  `mean_300_2` varchar(2) DEFAULT NULL,
  `se_300_2` varchar(2) DEFAULT NULL,
  `n_300_2` varchar(2) DEFAULT NULL,
  `p_300` varchar(1) DEFAULT NULL,
  `mean_350_1` varchar(1) DEFAULT NULL,
  `se_350_1` varchar(1) DEFAULT NULL,
  `n_350_1` varchar(2) DEFAULT NULL,
  `mean_350_2` varchar(2) DEFAULT NULL,
  `se_350_2` varchar(2) DEFAULT NULL,
  `n_350_2` varchar(3) DEFAULT NULL,
  `p_350` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fv`
--

INSERT INTO `fv` (`ID`, `group_1`, `group_2`, `test_type`, `me_exposure_f`, `me_exposure_err`, `me_exposure_df`, `me_exposure_p`, `me_intensity_f`, `me_intensity_err`, `me_intensity_df`, `me_intensity_p`, `me_interaction_f`, `me_interaction_err`, `me_interaction_df`, `me_interaction_p`, `mean_0_1`, `se_0_1`, `n_0_1`, `mean_0_2`, `se_0_2`, `n_0_2`, `p_0`, `mean_50_1`, `se_50_1`, `n_50_1`, `mean_50_2`, `se_50_2`, `n_50_2`, `p_50`, `mean_100_1`, `se_100_1`, `n_100_1`, `mean_100_2`, `se_100_2`, `n_100_2`, `p_100`, `mean_150_1`, `se_150_1`, `n_150_1`, `mean_150_2`, `se_150_2`, `n_150_2`, `p_150`, `mean_200_1`, `se_200_1`, `n_200_1`, `mean_200_2`, `se_200_2`, `n_200_2`, `p_200`, `mean_250_1`, `se_250_1`, `n_250_1`, `mean_250_2`, `se_250_2`, `n_250_2`, `p_250`, `mean_300_1`, `se_300_1`, `n_300_1`, `mean_300_2`, `se_300_2`, `n_300_2`, `p_300`, `mean_350_1`, `se_350_1`, `n_350_1`, `mean_350_2`, `se_350_2`, `n_350_2`, `p_350`) VALUES
(1, 'oil_saline', 'cpf_saline', 'two_way_rm_anova', 4884, 445322, 765756, 856794, 47458, 456, 4647, 8658, 8564, 36, 778, 9786, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'oil_saline', 'oil_igf', 'two_way_rm_anova', 9, 9, 9, 809, 79, 8, 78, 8, 8, 80, 9, 65, '6', '87', '69', '87', '08', '68', '7', '', '', '987', '98', '79', '87', '65', '87', '68', '76', '9', '79', '87', '9', '676', '87', '6', '87', '85', '8', '65', '58', '76', '87', '987', '98', '70', '87', '986', '6', '', '876', '7', '69', '76', '56', '96', '9', '76', '76', '87', '6', '7', '6', '87', '68', '76', '876', '87'),
(3, 'cpf_saline', 'cpf_igf', 'two_way_rm_anova', 2948, 234870, 2397, 9824, 9348, 924, 248, 348, 23480, 2801, 2934, 80934, '234', '98', '5098', '3', '23480', '43', '3', '234', '234', '9', '9283', '348', '248', '84024', '98', '248', '209', '2480', '2948', '8240', '824', '234', '325', '634', '234', '5235', '2342', '2342', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'oil_igf', 'cpf_igf', 'two_way_rm_anova', 2948, 234870, 2397, 9824, 9348, 924, 248, 348, 23480, 2801, 2934, 80934, '234', '98', '5098', '3', '23480', '43', '3', '234', '234', '9', '9283', '348', '248', '84024', '98', '248', '209', '2480', '2948', '8240', '824', '234', '325', '634', '234', '5235', '2342', '2342', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'oil_igf', 'cpf_saline', 'two_way_rm_anova', 1, 7, 0, 4, 7, 5, 6, 8, 21, 9, 20, 22, '23', '23', '2344', '97', '96', '56', '876', '87', '798', '798', '8', '798', '979', '79', '798', '76', '65', '979', '87', '7', '1', '85', '8', '9', '87', '8', '987', '98', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'oil_saline', 'cpf_igf', 'two_way_rm_anova', 7658, 57, 454, 6, 768, 70, 979, 5, 78, 76, 869, 98, '70', '87', '768', '65', '754', '63', '543', '45', '75', '687', '97', '9', '870', '86865', '54', '65', '4', '6', '58', '6', '876', '876', '6', '', '68', '76', '76', '78', '', '85', '65', '8', '86', '87', '87', '6', '7', '87', '687', '6', '76', '76', '86', '7', '6', '6', '7', '98', '0', '8', '9', '09', '8', '75', '75', '56');

-- --------------------------------------------------------

--
-- Table structure for table `slope`
--

CREATE TABLE `slope` (
  `ID` int(1) DEFAULT NULL,
  `group_1` varchar(10) DEFAULT NULL,
  `group_2` varchar(10) DEFAULT NULL,
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
  `n_0_1` varchar(4) DEFAULT NULL,
  `mean_0_2` varchar(2) DEFAULT NULL,
  `se_0_2` varchar(5) DEFAULT NULL,
  `n_0_2` varchar(2) DEFAULT NULL,
  `p_0` varchar(3) DEFAULT NULL,
  `mean_50_1` varchar(3) DEFAULT NULL,
  `se_50_1` varchar(3) DEFAULT NULL,
  `n_50_1` varchar(3) DEFAULT NULL,
  `mean_50_2` varchar(4) DEFAULT NULL,
  `se_50_2` varchar(3) DEFAULT NULL,
  `n_50_2` varchar(3) DEFAULT NULL,
  `p_50` varchar(5) DEFAULT NULL,
  `mean_100_1` varchar(3) DEFAULT NULL,
  `se_100_1` varchar(3) DEFAULT NULL,
  `n_100_1` varchar(3) DEFAULT NULL,
  `mean_100_2` varchar(4) DEFAULT NULL,
  `se_100_2` varchar(4) DEFAULT NULL,
  `n_100_2` varchar(4) DEFAULT NULL,
  `p_100` varchar(3) DEFAULT NULL,
  `mean_150_1` varchar(3) DEFAULT NULL,
  `se_150_1` varchar(3) DEFAULT NULL,
  `n_150_1` varchar(3) DEFAULT NULL,
  `mean_150_2` varchar(3) DEFAULT NULL,
  `se_150_2` varchar(4) DEFAULT NULL,
  `n_150_2` varchar(4) DEFAULT NULL,
  `p_150` varchar(4) DEFAULT NULL,
  `mean_200_1` varchar(2) DEFAULT NULL,
  `se_200_1` varchar(2) DEFAULT NULL,
  `n_200_1` varchar(2) DEFAULT NULL,
  `mean_200_2` varchar(3) DEFAULT NULL,
  `se_200_2` varchar(2) DEFAULT NULL,
  `n_200_2` varchar(2) DEFAULT NULL,
  `p_200` varchar(2) DEFAULT NULL,
  `mean_250_1` varchar(3) DEFAULT NULL,
  `se_250_1` varchar(1) DEFAULT NULL,
  `n_250_1` varchar(10) DEFAULT NULL,
  `mean_250_2` varchar(3) DEFAULT NULL,
  `se_250_2` varchar(1) DEFAULT NULL,
  `n_250_2` varchar(2) DEFAULT NULL,
  `p_250` varchar(2) DEFAULT NULL,
  `mean_300_1` varchar(2) DEFAULT NULL,
  `se_300_1` varchar(2) DEFAULT NULL,
  `n_300_1` varchar(1) DEFAULT NULL,
  `mean_300_2` varchar(2) DEFAULT NULL,
  `se_300_2` varchar(2) DEFAULT NULL,
  `n_300_2` varchar(2) DEFAULT NULL,
  `p_300` varchar(1) DEFAULT NULL,
  `mean_350_1` varchar(1) DEFAULT NULL,
  `se_350_1` varchar(1) DEFAULT NULL,
  `n_350_1` varchar(2) DEFAULT NULL,
  `mean_350_2` varchar(2) DEFAULT NULL,
  `se_350_2` varchar(2) DEFAULT NULL,
  `n_350_2` varchar(3) DEFAULT NULL,
  `p_350` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slope`
--

INSERT INTO `slope` (`ID`, `group_1`, `group_2`, `test_type`, `me_exposure_f`, `me_exposure_err`, `me_exposure_df`, `me_exposure_p`, `me_intensity_f`, `me_intensity_err`, `me_intensity_df`, `me_intensity_p`, `me_interaction_f`, `me_interaction_err`, `me_interaction_df`, `me_interaction_p`, `mean_0_1`, `se_0_1`, `n_0_1`, `mean_0_2`, `se_0_2`, `n_0_2`, `p_0`, `mean_50_1`, `se_50_1`, `n_50_1`, `mean_50_2`, `se_50_2`, `n_50_2`, `p_50`, `mean_100_1`, `se_100_1`, `n_100_1`, `mean_100_2`, `se_100_2`, `n_100_2`, `p_100`, `mean_150_1`, `se_150_1`, `n_150_1`, `mean_150_2`, `se_150_2`, `n_150_2`, `p_150`, `mean_200_1`, `se_200_1`, `n_200_1`, `mean_200_2`, `se_200_2`, `n_200_2`, `p_200`, `mean_250_1`, `se_250_1`, `n_250_1`, `mean_250_2`, `se_250_2`, `n_250_2`, `p_250`, `mean_300_1`, `se_300_1`, `n_300_1`, `mean_300_2`, `se_300_2`, `n_300_2`, `p_300`, `mean_350_1`, `se_350_1`, `n_350_1`, `mean_350_2`, `se_350_2`, `n_350_2`, `p_350`) VALUES
(1, 'oil_saline', 'cpf_saline', 'two_way_rm_anova', 4884, 445322, 765756, 856794, 47458, 456, 4647, 8658, 8564, 36, 778, 9786, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'oil_saline', 'oil_igf', 'two_way_rm_anova', 9, 9, 9, 809, 79, 8, 78, 8, 8, 80, 9, 65, '6', '87', '69', '87', '08', '68', '7', '', '', '987', '98', '79', '87', '65', '87', '68', '76', '9', '79', '87', '9', '676', '87', '6', '87', '85', '8', '65', '58', '76', '87', '987', '98', '70', '87', '986', '6', '', '876', '7', '69', '76', '56', '96', '9', '76', '76', '87', '6', '7', '6', '87', '68', '76', '876', '87'),
(3, 'cpf_saline', 'cpf_igf', 'two_way_rm_anova', 2948, 234870, 2397, 9824, 9348, 924, 248, 348, 23480, 2801, 2934, 80934, '234', '98', '5098', '3', '23480', '43', '3', '234', '234', '9', '9283', '348', '248', '84024', '98', '248', '209', '2480', '2948', '8240', '824', '234', '325', '634', '234', '5235', '2342', '2342', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'oil_igf', 'cpf_igf', 'two_way_rm_anova', 2948, 234870, 2397, 9824, 9348, 924, 248, 348, 23480, 2801, 2934, 80934, '234', '98', '5098', '3', '23480', '43', '3', '234', '234', '9', '9283', '348', '248', '84024', '98', '248', '209', '2480', '2948', '8240', '824', '234', '325', '634', '234', '5235', '2342', '2342', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'oil_igf', 'cpf_saline', 'two_way_rm_anova', 1, 7, 0, 4, 7, 5, 6, 8, 21, 9, 20, 22, '23', '23', '2344', '97', '96', '56', '876', '87', '798', '798', '8', '798', '979', '79', '798', '76', '65', '979', '87', '7', '1', '85', '8', '9', '87', '8', '987', '98', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'oil_saline', 'cpf_igf', 'two_way_rm_anova', 2948, 234870, 2397, 9824, 9348, 924, 248, 348, 23480, 2801, 2934, 80934, '234', '98', '5098', '3', '23480', '43', '3', '234', '234', '9', '9283', '348', '248', '84024', '98', '248', '209', '2480', '2948', '8240', '824', '234', '325', '634', '234', '5235', '2342', '2342', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
