/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : lixiaolong

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2015-12-28 11:47:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `no` char(20) CHARACTER SET utf8 NOT NULL COMMENT '学号',
  `name` varchar(60) CHARACTER SET utf8 NOT NULL COMMENT '姓名',
  `phone` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `class` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `add_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('201512250101', '张六', '78945612378', '二班', '1451009665');
INSERT INTO `student` VALUES ('201512250102', '张六', '78945612376', '二班', '1451009936');
INSERT INTO `student` VALUES ('201406030106', '李四', '12345678912', '二班', '1451272558');
