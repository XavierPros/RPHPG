-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 17 Janvier 2015 à 15:38
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `rphpg_test`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `afficher_perso_menu`()
    READS SQL DATA
SELECT p_name, p_hp, p_mana
FROM perso$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `afficher_stuff`()
    READS SQL DATA
SELECT armor_name, armor_defense, a_type
FROM armor$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `changer_arme_id`()
    MODIFIES SQL DATA
UPDATE perso
SET p_weapon_id = (SELECT w_id
		   FROM weapon)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `change_armor_id`()
    MODIFIES SQL DATA
UPDATE perso
SET p_armor_id = (SELECT id_armor
		   FROM armor)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `return_id_loot`(OUT `e_loot_id` INT)
    READS SQL DATA
SELECT e_loot_id 
FROM ennemy$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `stat_ennemy`()
    READS SQL DATA
SELECT e_name, e_life, e_mana, e_slowhit, e_fasthit, e_defense, e_speed
FROM ennemy$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `stat_weapon`()
    READS SQL DATA
SELECT w_name, w_damage, w_crit, w_hit, w_type
FROM weapon$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_arme`()
    MODIFIES SQL DATA
UPDATE perso
SET p_weapon_id = (SELECT w_id
		   FROM weapon),

    p_weapon_damage = (SELECT w_damage
			FROM weapon),
    p_weapon_name = (SELECT w_name
		     FROM weapon)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_armor`()
    MODIFIES SQL DATA
UPDATE perso
SET p_armor_id = (SELECT id_armor
		   FROM armor),
    p_armor_name = (SELECT armor_name
			FROM armor),
    p_armor_defense = (SELECT armor_defense
			FROM armor)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_inventory`()
    READS SQL DATA
SELECT *
FROM inventory$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `afficher inventaire`
--
CREATE TABLE IF NOT EXISTS `afficher inventaire` (
`id_inventory` int(1)
,`nb_object` int(11)
,`item_name` varchar(255)
,`item_type` varchar(255)
,`effect` varchar(255)
);
-- --------------------------------------------------------

--
-- Structure de la table `armor`
--

CREATE TABLE IF NOT EXISTS `armor` (
  `id_armor` int(11) NOT NULL AUTO_INCREMENT,
  `armor_name` varchar(255) NOT NULL,
  `armor_defense` int(11) NOT NULL,
  `a_type` varchar(255) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id_armor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `armor`
--

INSERT INTO `armor` (`id_armor`, `armor_name`, `armor_defense`, `a_type`, `updated_at`, `created_at`) VALUES
(3, 'peau d''ours', 15, 'torse', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ennemy`
--

CREATE TABLE IF NOT EXISTS `ennemy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(255) NOT NULL,
  `e_life` int(11) NOT NULL,
  `e_mana` int(11) NOT NULL,
  `e_hit` int(11) NOT NULL,
  `e_defense` int(11) NOT NULL,
  `e_speed` int(11) NOT NULL,
  `e_loot_id` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `e_lifemax` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `ennemy`
--

INSERT INTO `ennemy` (`id`, `e_name`, `e_life`, `e_mana`, `e_hit`, `e_defense`, `e_speed`, `e_loot_id`, `updated_at`, `created_at`, `e_lifemax`) VALUES
(1, 'Ours', 80, 10, 35, 30, 15, 0, 2015, 0, 80);

-- --------------------------------------------------------

--
-- Structure de la table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `id_inventory` int(1) NOT NULL AUTO_INCREMENT,
  `nb_object` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `effect` varchar(255) NOT NULL,
  `armor_id` int(11) NOT NULL,
  `weapon_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantite` int(100) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id_inventory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `inventory`
--

INSERT INTO `inventory` (`id_inventory`, `nb_object`, `item_name`, `item_type`, `effect`, `armor_id`, `weapon_id`, `item_id`, `quantite`, `updated_at`, `created_at`) VALUES
(1, 10, 'potion', 'soin', 'Redonne 50hp à l''utilisateur', 1, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `effect` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `item`
--

INSERT INTO `item` (`id_item`, `item_name`, `item_type`, `effect`, `quantite`, `updated_at`, `created_at`) VALUES
(2, 'potion', 'soin', 'Redonne 50 points de vie', 3, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `perso`
--

CREATE TABLE IF NOT EXISTS `perso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) NOT NULL,
  `p_hp` int(11) NOT NULL,
  `p_mana` int(11) NOT NULL,
  `p_fasthit` int(11) NOT NULL,
  `p_slowhit` int(11) NOT NULL,
  `p_defense` int(11) NOT NULL,
  `p_speed` int(11) NOT NULL,
  `p_weapon_id` int(11) NOT NULL,
  `p_armor_id` int(11) NOT NULL,
  `p_weapon_damage` int(11) NOT NULL,
  `p_weapon_name` varchar(255) NOT NULL,
  `p_armor_defense` int(11) NOT NULL,
  `p_armor_name` varchar(255) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `p_hpmax` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `perso`
--

INSERT INTO `perso` (`id`, `p_name`, `p_hp`, `p_mana`, `p_fasthit`, `p_slowhit`, `p_defense`, `p_speed`, `p_weapon_id`, `p_armor_id`, `p_weapon_damage`, `p_weapon_name`, `p_armor_defense`, `p_armor_name`, `updated_at`, `created_at`, `p_hpmax`) VALUES
(1, 'Titi', 500, 30, 50, 25, 40, 45, 1, 3, 30, 'epee longue', 15, 'peau d''ours', 2015, 0, 500),
(2, 'Xavier', 500, 200, 30, 60, 50, 50, 1, 1, 2000, 'Arc', 9, 'Elfique', 2015, 0, 500);

-- --------------------------------------------------------

--
-- Structure de la table `weapon`
--

CREATE TABLE IF NOT EXISTS `weapon` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(255) NOT NULL,
  `w_damage` int(11) NOT NULL,
  `w_crit` int(11) NOT NULL,
  `w_hit` int(11) NOT NULL,
  `w_type` varchar(255) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `weapon`
--

INSERT INTO `weapon` (`w_id`, `w_name`, `w_damage`, `w_crit`, `w_hit`, `w_type`, `updated_at`, `created_at`) VALUES
(1, 'epee longue', 30, 50, 80, 'arme a une main', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la vue `afficher inventaire`
--
DROP TABLE IF EXISTS `afficher inventaire`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `afficher inventaire` AS select `inventory`.`id_inventory` AS `id_inventory`,`inventory`.`nb_object` AS `nb_object`,`inventory`.`item_name` AS `item_name`,`inventory`.`item_type` AS `item_type`,`inventory`.`effect` AS `effect` from `inventory`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
