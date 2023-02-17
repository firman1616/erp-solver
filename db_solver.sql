/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : db_solver

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 17/02/2023 15:22:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_master_solver
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_solver`;
CREATE TABLE `tbl_master_solver`  (
  `id_solver` int(255) NOT NULL AUTO_INCREMENT,
  `nama_solver` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sub_nama_solver` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_solver` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_solver`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_master_solver
-- ----------------------------
INSERT INTO `tbl_master_solver` VALUES (1, 'Work Order Weaving', 'IKT Solver', 'fa-swatchbook', 'IKT');
INSERT INTO `tbl_master_solver` VALUES (2, 'Work Order Dyeing', 'KIKC', 'fa-vials', 'KIKC');

SET FOREIGN_KEY_CHECKS = 1;
