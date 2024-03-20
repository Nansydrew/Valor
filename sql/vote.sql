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

 Date: 07/06/2022 01:12:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for vote
-- ----------------------------
DROP TABLE IF EXISTS `vote`;
CREATE TABLE `vote`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `bonus` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `file_stat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of vote
-- ----------------------------
INSERT INTO `vote` VALUES (1, 'MMOTOP', 'https://wow.mmotop.ru/servers/35233/votes/new', '1', 'https://mmotop.ru/votes/0a7b920afad8e10e36e8052e5d5ecb93d043a25c.txt?8383be213e8280f00d5b38a5e05e7fe2');
INSERT INTO `vote` VALUES (2, 'MMORPG', 'https://wow.mmorpg.top/server/109', '1', 'https://api.mmorpg.top/api/user/server/export?serverId=109&key=b36449232b0c1ffee299d6870c56f514&page=0&onpage=50000&type=month&json=true');

SET FOREIGN_KEY_CHECKS = 1;
