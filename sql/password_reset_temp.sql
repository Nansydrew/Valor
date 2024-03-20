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

 Date: 07/06/2022 01:11:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for password_reset_temp
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_temp`;
CREATE TABLE `password_reset_temp`  (
  `email` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `key` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `expDate` datetime(0) NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of password_reset_temp
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
