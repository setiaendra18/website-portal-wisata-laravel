/*
 Navicat Premium Data Transfer

 Source Server         : DATABASE-ENDRA
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : zada_portal_wisata

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 16/01/2022 11:55:23
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for event
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_event` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_wisata` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `FK_event_wisata`(`id_wisata`) USING BTREE,
  CONSTRAINT `FK_event_wisata` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of event
-- ----------------------------
INSERT INTO `event` VALUES (3, 'Mendaki Gunung Melewati Lembah', '2022-01-14', '2022-01-28', 'Sangat Menarik', 2);
INSERT INTO `event` VALUES (4, 'aserwer afadfse', '2022-01-07', '2022-01-29', 'asdf', 1);
INSERT INTO `event` VALUES (5, '132e fsasad afadf asds', '2022-01-29', '2022-01-27', 'asdf', 4);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for fasilitas
-- ----------------------------
DROP TABLE IF EXISTS `fasilitas`;
CREATE TABLE `fasilitas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_fasilitas` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fasilitas
-- ----------------------------
INSERT INTO `fasilitas` VALUES (2, 'Kamar Mandi');
INSERT INTO `fasilitas` VALUES (3, 'Parkiran Luas banget');
INSERT INTO `fasilitas` VALUES (4, 'Mushola');
INSERT INTO `fasilitas` VALUES (5, 'Rumah Makand');

-- ----------------------------
-- Table structure for galeri
-- ----------------------------
DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_wisata` int(11) NULL DEFAULT NULL,
  `nama_gambar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galeri
-- ----------------------------
INSERT INTO `galeri` VALUES (1, 1, 'asdfad');

-- ----------------------------
-- Table structure for kategori_wisata
-- ----------------------------
DROP TABLE IF EXISTS `kategori_wisata`;
CREATE TABLE `kategori_wisata`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori_wisata
-- ----------------------------
INSERT INTO `kategori_wisata` VALUES (5, 'Wisata Sejarah dan Budaya');
INSERT INTO `kategori_wisata` VALUES (6, 'Wisata Gunung dan Perbukitan');
INSERT INTO `kategori_wisata` VALUES (19, 'Wisata Pendidikan');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$9dN9DwdBAjkqTGgU2s8UYOicoGtP/BKy9agjBUrA/fKLw3v0eBQim', NULL, '2022-01-06 06:37:02', '2022-01-06 06:37:02');

-- ----------------------------
-- Table structure for wisata
-- ----------------------------
DROP TABLE IF EXISTS `wisata`;
CREATE TABLE `wisata`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_wisata` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `harga_tiket` int(11) NOT NULL DEFAULT 0,
  `kontak_pengelola` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fasilitas` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gmaps` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `id_kategori` int(11) NULL DEFAULT NULL,
  `id_galeri` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_kategori`(`id_kategori`) USING BTREE,
  INDEX `id_galeri`(`id_galeri`) USING BTREE,
  CONSTRAINT `wisata_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `wisata_ibfk_2` FOREIGN KEY (`id_galeri`) REFERENCES `galeri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wisata
-- ----------------------------
INSERT INTO `wisata` VALUES (1, 'Bukit 4 G', 5000, '0813348859911', 'Gendang Sari, Gunungkidul', '[\"Kamar Mandi\",\"Parkiran Luas banget\",\"Mushola\",\"Rumah Makan\"]', 'Wisata Perbukitan', '-7.8583898219056065, 110.57083671805565', 6, NULL);
INSERT INTO `wisata` VALUES (2, 'Gunung Semeru', 12323, '081343316941', '12313', '[\"Kamar Mandi\",\"Parkiran Luas banget\",\"Rumah Makan\"]', '123', '12312', 6, NULL);
INSERT INTO `wisata` VALUES (4, 'Bukti Bintang Kejora', 50000, '081343316931', 'Jalan Raya Jogja Wonosati', '[\"Kamar Mandi\",\"Rumah Makand\"]', 'Wisata enak', 'asdfas1231asdf12', 6, NULL);

SET FOREIGN_KEY_CHECKS = 1;
