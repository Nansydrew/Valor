/*
 Navicat Premium Data Transfer

 Source Server         : ReWoW.FUN
 Source Server Type    : MySQL
 Source Server Version : 80029
 Source Host           : 212.22.93.21:3306
 Source Schema         : auth

 Target Server Type    : MySQL
 Target Server Version : 80029
 File Encoding         : 65001

 Date: 07/06/2022 01:12:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mmotop_vote
-- ----------------------------
DROP TABLE IF EXISTS `mmotop_vote`;
CREATE TABLE `mmotop_vote`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `vote_id` int(0) UNSIGNED NOT NULL,
  `vote_date` int(0) NOT NULL,
  `vote_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `vote_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `vote_count` int(0) NOT NULL,
  `vote_today` int(0) NOT NULL DEFAULT 0,
  `acc_id` int(0) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8956 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

SET FOREIGN_KEY_CHECKS = 1;
