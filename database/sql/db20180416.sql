# SQL Manager for MySQL 5.4.3.43929
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : fw


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `fw`
    CHARACTER SET 'utf8mb4'
    COLLATE 'utf8mb4_general_ci';

USE `fw`;

#
# Structure for the `bw_m_occupations` table : 
#

CREATE TABLE `bw_m_occupations` (
  `id` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY USING BTREE (`id`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=4 AVG_ROW_LENGTH=8192 CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_general_ci'
COMMENT=''
;

#
# Structure for the `bw_m_users` table : 
#

CREATE TABLE `bw_m_users` (
  `id` INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` VARCHAR(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occ_id` INTEGER(11) NOT NULL,
  `created_at` TIMESTAMP NULL NOT NULL,
  `updated_at` TIMESTAMP NULL NOT NULL,
  PRIMARY KEY USING BTREE (`id`) COMMENT '',
  UNIQUE INDEX `bw_m_users_email_unique` USING BTREE (`email`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=5 AVG_ROW_LENGTH=4096 CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci'
COMMENT=''
;

#
# Structure for the `migrations` table : 
#

CREATE TABLE `migrations` (
  `id` INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` INTEGER(11) NOT NULL,
  PRIMARY KEY USING BTREE (`id`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=6 AVG_ROW_LENGTH=8192 CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci'
COMMENT=''
;

#
# Structure for the `password_resets` table : 
#

CREATE TABLE `password_resets` (
  `email` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` TIMESTAMP NULL NOT NULL,
   INDEX `password_resets_email_index` USING BTREE (`email`) COMMENT ''
)ENGINE=InnoDB
CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci'
COMMENT=''
;

#
# Data for the `bw_m_occupations` table  (LIMIT -496,500)
#

INSERT INTO `bw_m_occupations` (`id`, `name`) VALUES

  (1,'Operator'),
  (2,'Verifikator'),
  (3,'Inspektorat');
COMMIT;

#
# Data for the `bw_m_users` table  (LIMIT -495,500)
#

INSERT INTO `bw_m_users` (`id`, `name`, `email`, `password`, `remember_token`, `occ_id`, `created_at`, `updated_at`) VALUES

  (1,'pirman','pirmandwiana@gmail.com','$2y$10$o1670kTQpqUE6veGzR9rf.HAhSfBiCnPvH07NehPwJ7EyIFJyKhOu','No0AXYB7gTCVHYmknRLd6qh0DBlf7nFMxKFD4uebs93YdWM1SgsDThUNmqyn',1,'2018-04-14 23:04:26','2018-04-14 23:04:26'),
  (2,'wahyu','wahyuw@gmail.com','$2y$10$Y9y249Morj6WJxTpEvEkdOPuX.KMrRA5dPaRh3c3EvC6pQM5kp/zS','mWeuBFqPeeLv92pm9msrOV4bwn7S0QvABzTTReOb3zZCogPzx11tVDGXG59c',99,'2018-04-15 03:24:02','2018-04-15 03:24:02'),
  (3,'I Made Pirman Duiana','pirmandwiana@yahoo.com','$2y$10$dl.sDXBzV7pViwNSt2m6depo2CKsV6rRP.k/NOphKXlnTtRCj5kya','EE963rRc8591s2RTBP7Sejfw8nNeZQNrtyBag8dqW5klAHZON93MNAygnDvA',3,'2018-04-15 03:36:17','2018-04-15 03:36:17'),
  (4,'Ni Ketut Ada','adaketut@gmail.com','$2y$10$roy9NgfXNnyyY/7.2A6nuOEd6PHAax8gukOfyhb3v6Mo8xsjShnUS','KroC3hf6eJ4fiwbxyiAgQ943QGd7p5gc6AJpJfrNkaUKqjf0Pk9o3zx9OIuv',3,'2018-04-15 06:40:44','2018-04-15 06:40:44');
COMMIT;

#
# Data for the `migrations` table  (LIMIT -496,500)
#

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES

  (1,'2014_10_12_000000_create_users_table',1),
  (2,'2014_10_12_100000_create_password_resets_table',1),
  (5,'2018_04_15_024627_create_users_table',2);
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;