DROP DATABASE IF EXISTS `fw`;

CREATE DATABASE `fw`
    CHARACTER SET 'utf8mb4'
    COLLATE 'utf8mb4_general_ci';

USE `fw`;

#
# Structure for the `bw_users` table : 
#

CREATE TABLE `bw_users` (
  `id` INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` VARCHAR(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` VARCHAR(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` TIMESTAMP NULL NOT NULL,
  `updated_at` TIMESTAMP NULL NOT NULL,
  PRIMARY KEY USING BTREE (`id`) COMMENT '',
  UNIQUE INDEX `bw_m_users_email_unique` USING BTREE (`email`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=3 AVG_ROW_LENGTH=5461 CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci'
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
# Data for the `bw_users` table  (LIMIT -497,500)
#

INSERT INTO `bw_users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES

  (1,'pirman','pirmandwiana@gmail.com','$2y$10$o1670kTQpqUE6veGzR9rf.HAhSfBiCnPvH07NehPwJ7EyIFJyKhOu','QY7QkucsJw82qk4V2F1rGVDXTAqmE19yfwkUqjSN4Zw6z7O3KvK1YRXTi4eI','2018-04-14 23:04:26','2018-04-14 23:04:26'),
  (2,'Pirman Twitter Oauth','pirmandwiana@yahoo.com','$2y$10$PPLw6gw12.0qDu7oBtldeOoxc8DF65JcwXUwJxFQRrnfhbNnt326i','5pmRNcwwELSQtciQ4hWTPL8MqzIsUWpMdfNzsiH6OGeLjNbZqGnmLhcKwsIL','2018-04-17 08:01:47','2018-04-17 08:01:47');
COMMIT;

#
# Data for the `migrations` table  (LIMIT -496,500)
#

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES

  (1,'2014_10_12_000000_create_users_table',1),
  (2,'2014_10_12_100000_create_password_resets_table',1),
  (5,'2018_04_15_024627_create_users_table',2);
COMMIT;