/*
Navicat MySQL Data Transfer

Source Server         : sword
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : wuyang

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-17 09:29:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `w_coop_all_msg`
-- ----------------------------
DROP TABLE IF EXISTS `w_coop_all_msg`;
CREATE TABLE `w_coop_all_msg` (
  `w_coop_all_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_coop_directors_num` int(11) DEFAULT NULL,
  `w_coop_keyjob_num` int(11) DEFAULT NULL,
  `w_coop_pyear_employ_num` int(11) DEFAULT NULL,
  `w_coop_member_num` int(11) DEFAULT NULL,
  `w_coop_soil_property` varchar(255) DEFAULT NULL,
  `w_coop_all_dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_coop_all_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of w_coop_all_msg
-- ----------------------------

-- ----------------------------
-- Table structure for `w_coop_msg`
-- ----------------------------
DROP TABLE IF EXISTS `w_coop_msg`;
CREATE TABLE `w_coop_msg` (
  `w_coop_msg_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '合作社信息表ID',
  `w_coop_grantor` varchar(255) DEFAULT NULL COMMENT '实际种植人',
  `w_coop_soil_area` int(11) DEFAULT NULL COMMENT ' 土地面积',
  `w_coop_ID_num` varchar(255) DEFAULT NULL COMMENT ' 实际种植者身份证号',
  `w_coop_tel_num` varchar(255) DEFAULT NULL COMMENT '实际种植者电话',
  `w_coop_address` varchar(255) DEFAULT NULL COMMENT '实际种植者联系地址',
  `w_coop_soil_owner` varchar(255) DEFAULT NULL COMMENT ' 土地所有人',
  `w_coop_soil_tel_num` varchar(255) DEFAULT NULL COMMENT ' 土地所有者电话',
  `w_coop_soil_address` varchar(255) DEFAULT NULL COMMENT ' 土地所有者地址',
  `w_coop_soil_contract` varchar(255) DEFAULT NULL COMMENT '土地确权证等打包信息路径',
  `w_coop_dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_coop_msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of w_coop_msg
-- ----------------------------

-- ----------------------------
-- Table structure for `w_dept`
-- ----------------------------
DROP TABLE IF EXISTS `w_dept`;
CREATE TABLE `w_dept` (
  `w_dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_country_dept_name` varchar(255) DEFAULT NULL,
  `w_town_dept_name` varchar(255) DEFAULT NULL,
  `w_province_dept_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`w_dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of w_dept
-- ----------------------------

-- ----------------------------
-- Table structure for `w_machine`
-- ----------------------------
DROP TABLE IF EXISTS `w_machine`;
CREATE TABLE `w_machine` (
  `w_machine_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_machine_name` varchar(255) DEFAULT NULL,
  `w_machine_brand` varchar(255) DEFAULT NULL,
  `w_machine_sell_price` int(11) DEFAULT NULL,
  `w_machine_num` int(11) DEFAULT NULL,
  `w_machine_buy_price` int(11) DEFAULT NULL,
  `w_machine_buy_time` date DEFAULT NULL,
  `w_machine_allowance` int(11) DEFAULT NULL,
  `w_machine_owner` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`w_machine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of w_machine
-- ----------------------------

-- ----------------------------
-- Table structure for `w_private_msg`
-- ----------------------------
DROP TABLE IF EXISTS `w_private_msg`;
CREATE TABLE `w_private_msg` (
  `w_private_msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_private_owner` varchar(255) DEFAULT NULL,
  `w_private_soil_area` int(11) DEFAULT NULL,
  `w_private_ID_num` varchar(255) DEFAULT NULL,
  `w_private_tel_num` varchar(255) DEFAULT NULL,
  `w_private_address` varchar(255) DEFAULT NULL,
  `w_private_soil_contract` varchar(255) DEFAULT NULL,
  `w_private_dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_private_msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of w_private_msg
-- ----------------------------

-- ----------------------------
-- Table structure for `w_produfactors`
-- ----------------------------
DROP TABLE IF EXISTS `w_produfactors`;
CREATE TABLE `w_produfactors` (
  `w_produfactors_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_produfactors_cate` varchar(255) DEFAULT NULL,
  `w_produfactors_soil_cate` varchar(255) DEFAULT NULL,
  `w_produfactors_seed_price` int(11) DEFAULT NULL,
  `w_produfactors_chem_price` int(11) DEFAULT NULL,
  `w_produfactors_pesticide_price` int(11) DEFAULT NULL,
  `w_produfactors_sowing_price` int(11) DEFAULT NULL,
  `w_produfactors_rotary_price` int(11) DEFAULT NULL,
  `w_produfactors_spraying_price` int(11) DEFAULT NULL,
  `w_produfactors_harvest_price` int(11) DEFAULT NULL,
  `w_produfactors_autusoil_price` int(11) DEFAULT NULL,
  `w_produfactors_manmade_price` int(11) DEFAULT NULL,
  `w_produfactors_insurance_price` int(11) DEFAULT NULL,
  `w_produfactors_accrual_price` int(11) DEFAULT NULL,
  `w_produfactors_plantcost_sum` int(11) DEFAULT NULL,
  `w_produfactors_yield_num` int(11) DEFAULT NULL,
  `w_produfactors_dew` varchar(255) DEFAULT NULL,
  `w_produfactors_plant_allowance` int(11) DEFAULT NULL,
  `w_produfactors_grov_allowance` int(11) DEFAULT NULL,
  `w_produfactors_pearning` int(11) DEFAULT NULL,
  `w_produfactors_other_price` varchar(255) DEFAULT NULL,
  `w_produfactors_remark` varchar(255) DEFAULT NULL,
  `w_produfactors_dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_produfactors_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of w_produfactors
-- ----------------------------

-- ----------------------------
-- Table structure for `w_user`
-- ----------------------------
DROP TABLE IF EXISTS `w_user`;
CREATE TABLE `w_user` (
  `w_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_user_name` varchar(255) DEFAULT NULL,
  `w_pass` varchar(255) DEFAULT NULL,
  `w_dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of w_user
-- ----------------------------
