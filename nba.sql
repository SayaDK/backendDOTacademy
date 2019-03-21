/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100126
 Source Host           : localhost:3306
 Source Schema         : nba

 Target Server Type    : MySQL
 Target Server Version : 100126
 File Encoding         : 65001

 Date: 21/03/2019 12:23:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for conference
-- ----------------------------
DROP TABLE IF EXISTS `conference`;
CREATE TABLE `conference`  (
  `id_conf` int(11) NOT NULL,
  `conference` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_conf`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of conference
-- ----------------------------
INSERT INTO `conference` VALUES (1, 'Western');
INSERT INTO `conference` VALUES (2, 'Eastern');

-- ----------------------------
-- Table structure for level
-- ----------------------------
DROP TABLE IF EXISTS `level`;
CREATE TABLE `level`  (
  `id_level` int(11) NOT NULL,
  `level` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_level`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of level
-- ----------------------------
INSERT INTO `level` VALUES (1, 'Admin');
INSERT INTO `level` VALUES (2, 'Manager');

-- ----------------------------
-- Table structure for nationality
-- ----------------------------
DROP TABLE IF EXISTS `nationality`;
CREATE TABLE `nationality`  (
  `id_nat` int(11) NOT NULL AUTO_INCREMENT,
  `nationality` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `abbr_nat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_nat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nationality
-- ----------------------------
INSERT INTO `nationality` VALUES (1, 'Canada', 'CAN');
INSERT INTO `nationality` VALUES (2, 'United States', 'USA');

-- ----------------------------
-- Table structure for player
-- ----------------------------
DROP TABLE IF EXISTS `player`;
CREATE TABLE `player`  (
  `id_player` int(11) NOT NULL AUTO_INCREMENT,
  `nama_player` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_nat` int(11) NULL DEFAULT NULL,
  `id_team` int(11) NULL DEFAULT NULL,
  `ppg` int(50) NULL DEFAULT NULL,
  `apg` int(50) NULL DEFAULT NULL,
  `rpg` int(50) NULL DEFAULT NULL,
  `id_pos` int(11) NULL DEFAULT NULL,
  `number` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_player`) USING BTREE,
  INDEX `id_pos`(`id_pos`) USING BTREE,
  INDEX `player_ibfk_1`(`id_team`) USING BTREE,
  INDEX `player_ibfk_2`(`id_nat`) USING BTREE,
  CONSTRAINT `player_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `team` (`id_team`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `player_ibfk_2` FOREIGN KEY (`id_nat`) REFERENCES `nationality` (`id_nat`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `player_ibfk_3` FOREIGN KEY (`id_pos`) REFERENCES `position` (`id_pos`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of player
-- ----------------------------
INSERT INTO `player` VALUES (1, 'Lebron James', 1, 2, 28, 10, 11, 4, 23);
INSERT INTO `player` VALUES (2, 'Stephen Curry', 2, 3, 32, 10, 8, 1, 30);

-- ----------------------------
-- Table structure for position
-- ----------------------------
DROP TABLE IF EXISTS `position`;
CREATE TABLE `position`  (
  `id_pos` int(11) NOT NULL,
  `position` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `abbr_pos` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pos`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of position
-- ----------------------------
INSERT INTO `position` VALUES (1, 'Point Guard', 'PG');
INSERT INTO `position` VALUES (2, 'Shooting Giard', 'SG');
INSERT INTO `position` VALUES (3, 'Small Forward', 'SF');
INSERT INTO `position` VALUES (4, 'Power Forward', 'PF');
INSERT INTO `position` VALUES (5, 'Center', 'C');

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team`  (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `nama_team` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `abbr_team` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_conf` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_team`) USING BTREE,
  INDEX `id_conf`(`id_conf`) USING BTREE,
  CONSTRAINT `team_ibfk_1` FOREIGN KEY (`id_conf`) REFERENCES `conference` (`id_conf`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES (2, 'LA Lakers', 'LAL', 1);
INSERT INTO `team` VALUES (3, 'Golden State Warriors', 'GSW', 1);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_level` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE,
  INDEX `id_level`(`id_level`) USING BTREE,
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'user', 'user', 2);
INSERT INTO `user` VALUES (4, 'admin1', 'admin1', 2);
INSERT INTO `user` VALUES (5, 'admin2', 'admin2', 1);
INSERT INTO `user` VALUES (7, 'manager', '1d0258c2440a8d19e716292b231e3190', 2);
INSERT INTO `user` VALUES (8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

SET FOREIGN_KEY_CHECKS = 1;
