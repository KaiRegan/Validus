/*
 Navicat Premium Data Transfer

 Source Server         : Validus Fitness
 Source Server Type    : MySQL
 Source Server Version : 50649
 Source Host           : validusfitness.uk:3306
 Source Schema         : validus

 Target Server Type    : MySQL
 Target Server Version : 50649
 File Encoding         : 65001

 Date: 23/04/2021 00:25:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for levels
-- ----------------------------
DROP TABLE IF EXISTS `levels`;
CREATE TABLE `levels`  (
  `levelID` int(11) NOT NULL AUTO_INCREMENT,
  `usersID` int(11) NOT NULL,
  `pairOne` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pairTwo` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pairThree` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`levelID`) USING BTREE,
  INDEX `usersID`(`usersID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 21 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of levels
-- ----------------------------
INSERT INTO `levels` VALUES (6, 27, '55', '54', '55');
INSERT INTO `levels` VALUES (7, 24, '55', '54', '55');
INSERT INTO `levels` VALUES (8, 28, '55', '54', '55');
INSERT INTO `levels` VALUES (9, 34, '32', '22', '22');
INSERT INTO `levels` VALUES (10, 36, '55', '54', '55');
INSERT INTO `levels` VALUES (11, 40, '55', '54', '55');
INSERT INTO `levels` VALUES (12, 38, '55', '54', '55');
INSERT INTO `levels` VALUES (13, 39, '33', '33', '33');
INSERT INTO `levels` VALUES (14, 42, '11', '11', '11');
INSERT INTO `levels` VALUES (15, 43, '55', '54', '55');
INSERT INTO `levels` VALUES (16, 44, '34', '22', '23');
INSERT INTO `levels` VALUES (17, 47, '44', '23', '44');
INSERT INTO `levels` VALUES (18, 48, '22', '11', '22');
INSERT INTO `levels` VALUES (19, 49, '24', '22', '44');
INSERT INTO `levels` VALUES (20, 50, '22', '22', '22');

-- ----------------------------
-- Table structure for userdetails
-- ----------------------------
DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE `userdetails`  (
  `detailsId` int(11) NOT NULL AUTO_INCREMENT,
  `usersId` int(11) NOT NULL,
  `stone` int(11) NOT NULL,
  `lbs` int(11) NOT NULL,
  `feet` int(11) NOT NULL,
  `inc` int(11) NOT NULL,
  `gender` enum('m','f') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dob` date NOT NULL,
  `active` enum('s','l','a','v') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `goal` varchar(190) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`detailsId`) USING BTREE,
  INDEX `usersId`(`usersId`) USING BTREE,
  CONSTRAINT `usersId` FOREIGN KEY (`usersId`) REFERENCES `users` (`usersId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of userdetails
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `usersId` int(11) NOT NULL AUTO_INCREMENT,
  `usersName` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `usersEmail` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `usersUid` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `usersPwd` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`usersId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (24, 'kai', 'unchartify@gmail.com', 'kai', '$2y$10$b7XElked8ua5waDtS0cVD.8CQD5njO96hjth4mbAUJ7Vqp1C3MYiy');
INSERT INTO `users` VALUES (31, 'Edward Patch', 'edwardpatch1@gmail.com', 'SKira21', '$2y$10$edssrgMgtUj3P6X5jSzrneZyRnfwC6rR2knIYxHs.ScDlv1Ors1g2');
INSERT INTO `users` VALUES (32, 'Steven Moore', 'stevenmoore536@gmail.com', 'aLinkz', '$2y$10$raB6NxAgyOPPQ9GtbkB4nOmB5kzo8L55tcOHI2NHkGp6sBAEdVrPy');
INSERT INTO `users` VALUES (36, 'Rob Keogh', 'wakiguy@gmail.com', 'test', '$2y$10$CPda/OxOPrpuBfZC6AygCuxzt9hZ62qcfAYjaXXlpPFpmb8i46ZGi');
INSERT INTO `users` VALUES (38, 'Jacqueline Strand', 'tulsistrand@gmail.com', 'Tulsi', '$2y$10$D5n9GeJ03NTFRT5lp/PYQODLPbJH0bwCwh8DP/vodXqQFGMp2KkJa');
INSERT INTO `users` VALUES (39, 'Keith Regan', 'k.regan@uwtsd.ac.uk', 'Bryn', '$2y$10$qAY5GX3loiM5ElnaNIhXI.QDKc/zzGuyt6oh8aVMF6qQ/9O1UmUCi');
INSERT INTO `users` VALUES (40, 'Lowri Jones', 'Lowriejones7@gmail.com', 'Lowri1', '$2y$10$28evu9Ako3MdoLtzKKO97OydoTUu4e8o2ckkQRWrDJT1NIh.xRbyu');
INSERT INTO `users` VALUES (41, 'Alexander Fox-Robinson', 'thestretchyfox@gmail.com', 'Xander', '$2y$10$FeO7wlIZiKa0eJPAJEuDJukhCT0EweQ1M6NaBobMCeGux5LfWAdPq');
INSERT INTO `users` VALUES (42, 'Shamuel Hashan', 'shamuelmiah7@gmail.com', 'Shamuel', '$2y$10$WyRAORZLHHwhA3GdJeShp.ucbjGb7fOUQbxMRc0wxmqINBtbpy8Yq');
INSERT INTO `users` VALUES (43, 'Rhys Alexander Davies', 'rhys4899@hotmail.com', 'RD4899', '$2y$10$6rjE00bRmgisAa3/SP3l9OS6O4QhaSDZV.HT0jaJsq1U.Ikzq9p6O');
INSERT INTO `users` VALUES (44, 'Gemma Dunlop', 'gemma.dunlop612@gmail.com', 'Gembreaker', '$2y$10$MJsvSfUem9J869K/wrtaO.4EQLTq1jAMFQOQx4iBxpk456rmhmD/a');
INSERT INTO `users` VALUES (45, 'Steven Moore', 'stevenmoore56@outlook.com', 'Alinkies', '$2y$10$QgR5nEtVj4V/RmDEsVd2YeimSUlrhwymyvaOWkCaJnYYQIwptStSW');
INSERT INTO `users` VALUES (46, 'emi', 'emilycatherineturner@gmail.com ', 'emilyoturner', '$2y$10$Do7rLMWZsi9X8bP4yagDkuz2lQbphf/Ityz8LY0zNfxezOgaKJuHW');
INSERT INTO `users` VALUES (47, 'Isaac Davis', 'idavis08123@gmail.com', 'isdavis', '$2y$10$2IHcx/SIwI4oRKsuM9dDZu1XogrjjqxS3FipISMfnGxDA1zA/P6fi');
INSERT INTO `users` VALUES (48, 'Mark Huntly', 'markhuntly@gmail.com', 'Marco', '$2y$10$ylqSdOGBwuup.AUyKo4k4eBUvCdEoWmHxjr0pRwsVNYBjFHITenyy');
INSERT INTO `users` VALUES (49, 'Cieran Hughes', 'cieranhughes99@googlemail.com', 'hughes', '$2y$10$6x9Ks2kV.YK3Mc1tqPa7wO5KEP9Y/8WEGIABHEJc/k0GT7CIahgfG');
INSERT INTO `users` VALUES (50, 'Kai Harley Strand-Regan', '1801495@gmail.com', 'student1', '$2y$10$5Xgumr8PkbyevfHoEhs5uejubFAnzwLjafKm3BlSU5d7D6mYlxP/y');

SET FOREIGN_KEY_CHECKS = 1;
