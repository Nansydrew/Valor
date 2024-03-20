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

 Date: 07/06/2022 01:11:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for donate_logs
-- ----------------------------
DROP TABLE IF EXISTS `donate_logs`;
CREATE TABLE `donate_logs`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pers` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `bonusov` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date` datetime(0) NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of donate_logs
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
