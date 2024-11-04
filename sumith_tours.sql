/*
 Navicat Premium Data Transfer

 Source Server         : root
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : sumith_tours

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 04/11/2024 19:28:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cache
-- ----------------------------

-- ----------------------------
-- Table structure for cache_locks
-- ----------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cache_locks
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for galleries
-- ----------------------------
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galleries
-- ----------------------------
INSERT INTO `galleries` VALUES (3, 'Tour 01', 'images/E9apMQBGvR6ZLZ2OAkxxCk1N3C9Ina358w76n5uW.jpg', '2024-11-03 12:02:18', '2024-11-04 10:21:52');
INSERT INTO `galleries` VALUES (9, 'Tour 02', 'images/1jGrAHPBgyaaFlJEWUAJkTQjTqucx5ViPNOxcpTB.jpg', '2024-11-03 12:09:49', '2024-11-04 10:22:00');
INSERT INTO `galleries` VALUES (10, 'Tour 03', 'images/fOA99AwX7mPBiXOZQF3MhzgSThkbPMfgiikuNcTt.jpg', '2024-11-03 12:10:16', '2024-11-04 10:22:07');
INSERT INTO `galleries` VALUES (11, 'Tour 04', 'images/EIN73SAaBxhscb3knniwnvbhKr0GjHmNPz26pRQv.jpg', '2024-11-03 12:10:33', '2024-11-04 10:22:15');
INSERT INTO `galleries` VALUES (12, 'Tour 05', 'images/ndSDOLuAnm8lDpGSfKmnQpm4fpjPOphHDNc8jUxA.jpg', '2024-11-03 12:10:44', '2024-11-04 10:22:21');
INSERT INTO `galleries` VALUES (13, 'Tour 06', 'images/IoIe2JtW4dqestUb8SbVX6zxgc49y6WWoWPOgAB1.jpg', '2024-11-03 12:10:54', '2024-11-03 12:10:54');
INSERT INTO `galleries` VALUES (14, 'Tour 07', 'images/hSvCbWfDwkU3W6HNSdhaMwnM1OQtekX3wbs7R5Sr.jpg', '2024-11-03 12:11:03', '2024-11-03 12:11:03');
INSERT INTO `galleries` VALUES (15, 'Tour 08', 'images/ocmDegMViIERXEseEQEr4AfR5ahFPmKuHi9FWl2B.jpg', '2024-11-03 12:11:17', '2024-11-03 12:11:17');
INSERT INTO `galleries` VALUES (16, 'Tour 09', 'images/aPQCwomyQOLKTTwwBW63MGAjKxC2uHTFKXYVUXOo.jpg', '2024-11-03 12:11:28', '2024-11-03 12:11:28');
INSERT INTO `galleries` VALUES (17, 'Tour 10', 'images/KrKO9A5xJHITeeHdufxz5xVfd5lohNpyJ3UqChKt.jpg', '2024-11-04 13:22:40', '2024-11-04 13:22:40');

-- ----------------------------
-- Table structure for itineraries
-- ----------------------------
DROP TABLE IF EXISTS `itineraries`;
CREATE TABLE `itineraries`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of itineraries
-- ----------------------------
INSERT INTO `itineraries` VALUES (1, '2024-10-07', 'Visit the Negombo fish market, Walking around the Negombo town, Drive to Wilpattu for afternoon safari, Overnight stay in Sigiriya', '2024-11-04 12:36:07', '2024-11-04 13:15:15');
INSERT INTO `itineraries` VALUES (2, '2024-10-08', 'Sigiriya rock fortress, Village tour with traditional lunch, Elephant safari at Minneriye National Park, Climb Pidurangala rock to see sunset, Traditional Ayurveda spa, Overnight stay in Sigiriya', '2024-11-04 12:36:07', '2024-11-04 13:15:23');
INSERT INTO `itineraries` VALUES (3, '2024-10-09', 'Drive to Kandy, Dambulla cave temple visit(one of most beautiful temple in Asia), Spice Garden, Kandy city tour, Traditional dancing show, Overnight stay in Kandy', '2024-11-04 13:14:53', '2024-11-04 13:15:38');
INSERT INTO `itineraries` VALUES (4, '2024-10-10', 'Drive to Kithulgala for water rafting and canyoning, Devon waterfall and St. Clair waterfall, Overnight stay in Nuwara Eliya', '2024-11-04 13:16:41', '2024-11-04 13:16:41');
INSERT INTO `itineraries` VALUES (5, '2024-10-11', 'Tea plantation and factory visit, Gregory Park, Horse riding, Horton\'s Plains National Park walking track 9km. One of the most beautiful landscape, plants, animals, viewpoint, waterfall, grass land, Overnight stay in Nuwara Eliya', '2024-11-04 13:20:42', '2024-11-04 13:20:42');
INSERT INTO `itineraries` VALUES (6, '2024-10-12', 'No ride', '2024-11-04 13:24:39', '2024-11-04 13:24:39');
INSERT INTO `itineraries` VALUES (7, '2024-10-13', 'Train ride to Ella, Cookery Class, Overnight stay in Ella', '2024-11-04 13:25:03', '2024-11-04 13:25:03');
INSERT INTO `itineraries` VALUES (8, '2024-10-14', 'Climb Ella rock, Nine arch bridge, Climb little adam\'s peak, Zipline, Ravana pool club, Overnight stay in Ella', '2024-11-04 13:25:43', '2024-11-04 13:25:43');
INSERT INTO `itineraries` VALUES (9, '2024-10-15', 'Upper Diyaluma waterfall, Underground cave with blue water pond (Nil Diya Pokuna), Ravana waterfall, Overnight stay in Ella', '2024-11-04 13:26:12', '2024-11-04 13:26:12');
INSERT INTO `itineraries` VALUES (10, '2024-10-16', 'Drive ro Mirissa, Secret waterfall, End of Tour', '2024-11-04 13:26:42', '2024-11-04 13:26:42');

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `cancelled_at` int NULL DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of job_batches
-- ----------------------------

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED NULL DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jobs_queue_index`(`queue` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2024_10_02_115133_create_reviews_table', 2);
INSERT INTO `migrations` VALUES (5, '2024_10_03_050935_create_reservations_table', 3);
INSERT INTO `migrations` VALUES (6, '0001_01_01_000000_create_users_table', 4);
INSERT INTO `migrations` VALUES (7, '2024_11_03_100157_create_galleries_table', 5);
INSERT INTO `migrations` VALUES (8, '2024_11_04_123352_create_itineraries_table', 6);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for reservations
-- ----------------------------
DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of reservations
-- ----------------------------
INSERT INTO `reservations` VALUES (1, 'Samson Perera', 'Sri Lanka', '+94776521458', 'abc@gmail.com', 'Adventure Tour', '2024-10-17', '2024-10-03 10:24:55', '2024-11-04 13:23:15');
INSERT INTO `reservations` VALUES (2, 'Dinusha Hewage', 'Canada', '+94776521458', 'abc@gmail.com', 'Adventure Tour', '2024-10-10', '2024-10-03 10:25:28', '2024-11-03 14:08:33');
INSERT INTO `reservations` VALUES (3, 'Samson Perera', 'Canada', '+94776521458', 'abc@gmail.com', 'Adventure Tour', '2024-10-10', '2024-10-03 10:26:56', '2024-10-03 10:26:56');
INSERT INTO `reservations` VALUES (4, 'Samson Perera', 'Canada', '+94776521458', 'abc@gmail.com', 'Adventure Tour', '2024-10-10', '2024-10-03 10:31:32', '2024-10-03 10:31:32');
INSERT INTO `reservations` VALUES (6, 'Samson Perera', 'Canada', '+94776521458', 'abc@gmail.com', 'Adventure Tour', '2024-10-11', '2024-10-03 10:34:54', '2024-10-03 10:34:54');

-- ----------------------------
-- Table structure for reviews
-- ----------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of reviews
-- ----------------------------
INSERT INTO `reviews` VALUES (2, 'Leo Kane', 'Malaysia', 'Enjoyed a lot', 4, '2024-10-03 04:30:30', '2024-10-03 04:30:30');
INSERT INTO `reviews` VALUES (3, 'Donald jake', 'Canada', 'Nico is such a warm personality and highly motivated guide (recommendable!)', 5, '2024-10-03 04:53:32', '2024-10-03 04:53:32');
INSERT INTO `reviews` VALUES (4, 'Roy Angel', 'Spain', 'Comprehensive and very enjoyable tour. We enjoyed a full morning tour with our guide', 4, '2024-10-03 04:59:05', '2024-10-03 04:59:05');
INSERT INTO `reviews` VALUES (5, 'Dia Rishka', 'India', 'Woow.. Amazing experience with sumith tours', 5, '2024-10-03 12:34:53', '2024-10-03 12:34:53');
INSERT INTO `reviews` VALUES (6, 'Tony Zorzy', 'South Africa', 'Nice', 4, '2024-10-03 12:37:38', '2024-11-03 13:18:38');
INSERT INTO `reviews` VALUES (7, 'Alis Ferriera', 'Italy', 'Superb', 4, '2024-11-03 12:42:52', '2024-11-03 12:42:52');

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id` ASC) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('M6ppkucQ02uBOwqVvrY6nVvR3sIbP9fBjDjO9JKW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQnhaUldsVzFzMlBXUTFvOFNVMWNWQlg5Qk1oZXE3cWdtZW1mZHhUcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pdGluZXJhcmllcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1730728571);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_user_name_unique`(`user_name` ASC) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Super', 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$12$EEbACUKYQWjiQF.T1X/EXuPxEC4pcCO8q8YwZLxmgyZLayjo3nRZ2', NULL, '2024-11-03 09:58:30', '2024-11-03 09:58:30');

SET FOREIGN_KEY_CHECKS = 1;
