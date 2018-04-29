/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100113
 Source Host           : localhost
 Source Database       : wuyang

 Target Server Type    : MySQL
 Target Server Version : 100113
 File Encoding         : utf-8

 Date: 04/19/2018 10:27:59 AM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `w_coop_all_msg`
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
  `w_coop_name` varchar(255) DEFAULT NULL,
  `w_coop_person` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`w_coop_all_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `w_coop_msg`
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
  `w_coop_soil_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`w_coop_msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `w_dept`
-- ----------------------------
DROP TABLE IF EXISTS `w_dept`;
CREATE TABLE `w_dept` (
  `w_dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_country_dept_name` varchar(255) DEFAULT NULL COMMENT '县',
  `w_town_dept_name` varchar(255) DEFAULT NULL COMMENT '乡镇',
  `w_province_dept_name` varchar(255) DEFAULT NULL COMMENT '省',
  `w_village_dept_name` varchar(255) DEFAULT NULL COMMENT '村',
  `w_city_dept_name` varchar(255) DEFAULT NULL COMMENT '市',
  PRIMARY KEY (`w_dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `w_machine`
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
  `w_machine_dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_machine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `w_private_msg`
-- ----------------------------
DROP TABLE IF EXISTS `w_private_msg`;
CREATE TABLE `w_private_msg` (
  `w_private_msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_private_owner` varchar(255) DEFAULT NULL,
  `w_private_soil_area` int(11) DEFAULT NULL,
  `w_private_ID_num` varchar(255) DEFAULT NULL,
  `w_private_tel_num` varchar(255) DEFAULT NULL,
  `w_private_address` varchar(255) DEFAULT NULL,
  `w_private_soil_contract` varchar(255) DEFAULT NULL COMMENT '土地合同上传路径',
  `w_private_dept_id` int(11) DEFAULT NULL,
  `w_private_soil_name` varchar(255) DEFAULT NULL COMMENT '土地合同名称',
  PRIMARY KEY (`w_private_msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `w_produfactors`
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `w_user`
-- ----------------------------
DROP TABLE IF EXISTS `w_user`;
CREATE TABLE `w_user` (
  `w_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_user_name` varchar(255) DEFAULT NULL,
  `w_pass` varchar(255) DEFAULT NULL,
  `w_dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
