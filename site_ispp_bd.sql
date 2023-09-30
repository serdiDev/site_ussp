-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 21 juil. 2023 à 16:50
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_ispp_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `ecoles`
--

DROP TABLE IF EXISTS `ecoles`;
CREATE TABLE IF NOT EXISTS `ecoles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo_eco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_eco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ecoles`
--

INSERT INTO `ecoles` (`id`, `logo_eco`, `libelle_eco`, `created_at`, `updated_at`) VALUES
(1, 'img-01.png', 'Institut Moyen et Supérieur International des Sciences de la Santé', NULL, NULL),
(2, 'img-02.png', 'Ecole Polytechnique de PROCCL', NULL, NULL),
(3, 'img-03.png', 'Institut des Métiers Maritimes et Portuaires', NULL, NULL),
(4, 'img-04.png', 'Institut Sylvo-Agro-pastoral de Formation et d\'Appui à l\'Entrepreneuriat', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_21_112103_create_ecoles_table', 1),
(6, '2023_07_21_114232_create_programmes_table', 1),
(7, '2023_07_21_114644_create_options_table', 1),
(9, '2023_07_21_115615_create_preinscriptions_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `prog_id` bigint UNSIGNED NOT NULL,
  `libelle_opt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_opt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `options_prog_id_foreign` (`prog_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `options`
--

INSERT INTO `options` (`id`, `prog_id`, `libelle_opt`, `img_opt`, `created_at`, `updated_at`) VALUES
(1, 2, 'Infirmiers des Blocs Opératoires', 'img-04.jpg', NULL, NULL),
(2, 2, 'Infirmiers Diplômés d\'Etat Polyvalents', 'img-05.jpg', NULL, NULL),
(3, 2, 'Infirmiers Anesthésistes-Réanimateurs', 'img-06.jpg', NULL, NULL),
(4, 11, 'Production Animalière', 'img-07.jpg', NULL, NULL),
(5, 11, 'Production Végétale', 'img-08.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `preinscriptions`
--

DROP TABLE IF EXISTS `preinscriptions`;
CREATE TABLE IF NOT EXISTS `preinscriptions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `eco_id` bigint UNSIGNED NOT NULL,
  `prog_id` bigint UNSIGNED NOT NULL,
  `opt_id` bigint UNSIGNED NOT NULL,
  `preins_nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preins_prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preins_nation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preins_datenais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preins_lieunais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preins_parcours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preins_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preins_niveau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preins_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `preinscriptions_eco_id_foreign` (`eco_id`),
  KEY `preinscriptions_prog_id_foreign` (`prog_id`),
  KEY `preinscriptions_opt_id_foreign` (`opt_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `programmes`
--

DROP TABLE IF EXISTS `programmes`;
CREATE TABLE IF NOT EXISTS `programmes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `eco_id` bigint UNSIGNED NOT NULL,
  `libelle_prog` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `programmes_eco_id_foreign` (`eco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `programmes`
--

INSERT INTO `programmes` (`id`, `eco_id`, `libelle_prog`, `created_at`, `updated_at`) VALUES
(1, 1, 'Licence Sciences Infirmières', NULL, NULL),
(2, 1, 'Licence Kinésithérapie', NULL, NULL),
(3, 1, 'Licence Imagerie Médicale', NULL, NULL),
(4, 2, 'Licence Pro Biotechnologie', NULL, NULL),
(5, 2, 'Licence Pro Physique-Chimie', NULL, NULL),
(6, 2, 'Licence Pro Sciences de l\'Ingénieur', NULL, NULL),
(7, 3, 'Licence Navigation Maritime', NULL, NULL),
(8, 3, 'Licence Génie Mécanique Navale', NULL, NULL),
(9, 3, 'Licence Gestion et Administration des Ports', NULL, NULL),
(10, 3, 'Licence Electricité et Electronique Navals', NULL, NULL),
(11, 4, 'Licence Entrepreneur Agro-Pastoral', NULL, NULL),
(12, 4, 'Licence Conseiller d\'Exploitation Agro-Pastorale', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
