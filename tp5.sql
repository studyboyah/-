/*
Navicat MySQL Data Transfer

Source Server         : projext
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tp5

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-23 16:40:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_ad
-- ----------------------------
DROP TABLE IF EXISTS `think_ad`;
CREATE TABLE `think_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `ad_position_id` varchar(10) DEFAULT NULL COMMENT '广告位',
  `link_url` varchar(128) DEFAULT NULL,
  `images` varchar(128) DEFAULT NULL,
  `start_date` date DEFAULT NULL COMMENT '开始时间',
  `end_date` date DEFAULT NULL COMMENT '结束时间',
  `status` tinyint(1) DEFAULT NULL COMMENT '状态',
  `closed` tinyint(1) DEFAULT '0',
  `orderby` tinyint(3) DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_ad
-- ----------------------------
INSERT INTO `think_ad` VALUES ('24', '23', '1', '123', '20170416\\363c841674371a9e730e65a085fbdf18.jpg', '0000-00-00', '0000-00-00', '1', '0', '23');
INSERT INTO `think_ad` VALUES ('25', '123', '1', '213', '20170416\\d8f2098b4846f2e087cc2c5dd1575219.jpg', '2016-10-12', '2016-10-12', '1', '0', '100');
INSERT INTO `think_ad` VALUES ('26', '345', '1', '345', '20170416\\f59059c762d959f04f9226eb0c126987.jpg', '2016-10-25', '2016-10-20', '0', '1', '127');

-- ----------------------------
-- Table structure for think_admin
-- ----------------------------
DROP TABLE IF EXISTS `think_admin`;
CREATE TABLE `think_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_bin DEFAULT '' COMMENT '用户名',
  `password` varchar(32) COLLATE utf8_bin DEFAULT '' COMMENT '密码',
  `portrait` varchar(100) COLLATE utf8_bin DEFAULT NULL COMMENT '头像',
  `loginnum` int(11) DEFAULT '0' COMMENT '登陆次数',
  `last_login_ip` varchar(255) COLLATE utf8_bin DEFAULT '' COMMENT '最后登录IP',
  `last_login_time` int(11) DEFAULT '0' COMMENT '最后登录时间',
  `real_name` varchar(20) COLLATE utf8_bin DEFAULT '' COMMENT '真实姓名',
  `status` int(1) DEFAULT '0' COMMENT '状态',
  `groupid` int(11) DEFAULT '1' COMMENT '用户角色id',
  `token` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of think_admin
-- ----------------------------
INSERT INTO `think_admin` VALUES ('1', 'admin', '218dbb225911693af03a713581a7227f', '20161122\\admin.jpg', '307', '127.0.0.1', '1514008635', 'admin', '1', '1', '1ac2fc424c64cdf80db98a246f439287');

-- ----------------------------
-- Table structure for think_ad_position
-- ----------------------------
DROP TABLE IF EXISTS `think_ad_position`;
CREATE TABLE `think_ad_position` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL COMMENT '分类名称',
  `orderby` varchar(10) DEFAULT '100' COMMENT '排序',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_ad_position
-- ----------------------------
INSERT INTO `think_ad_position` VALUES ('23', 'aaa', '30', '1501813046', '1501813046', '0');
INSERT INTO `think_ad_position` VALUES ('22', 'abvc', '15', '1501813036', '1502294001', '1');
INSERT INTO `think_ad_position` VALUES ('25', '首页banner', '10', '1502181832', '1502434196', '0');

-- ----------------------------
-- Table structure for think_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `think_auth_group`;
CREATE TABLE `think_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` text NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_auth_group
-- ----------------------------
INSERT INTO `think_auth_group` VALUES ('1', '超级管理员', '1', '', '1446535750', '1446535750');
INSERT INTO `think_auth_group` VALUES ('4', '系统测试员', '1', '1,2,9,3,30,4,39,61,62,5,6,7,27,29,13,14,22,24,25,40,41,43,26,44,45,47,48,49,50,51,52,53,54,55,56,57,58,70,71,72,73,80,75,76,77,79', '1446535750', '1501581108');

-- ----------------------------
-- Table structure for think_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `think_auth_group_access`;
CREATE TABLE `think_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_auth_group_access
-- ----------------------------
INSERT INTO `think_auth_group_access` VALUES ('1', '1');
INSERT INTO `think_auth_group_access` VALUES ('21', '4');
INSERT INTO `think_auth_group_access` VALUES ('22', '4');
INSERT INTO `think_auth_group_access` VALUES ('23', '4');
INSERT INTO `think_auth_group_access` VALUES ('24', '4');
INSERT INTO `think_auth_group_access` VALUES ('25', '4');
INSERT INTO `think_auth_group_access` VALUES ('26', '4');

-- ----------------------------
-- Table structure for think_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `think_auth_rule`;
CREATE TABLE `think_auth_rule` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `css` varchar(20) NOT NULL COMMENT '样式',
  `condition` char(100) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父栏目ID',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_auth_rule
-- ----------------------------
INSERT INTO `think_auth_rule` VALUES ('1', '#', '系统管理', '1', '1', 'fa fa-gear', '', '0', '1', '1446535750', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('2', 'admin/user/index', '用户管理', '1', '1', '', '', '1', '10', '1446535750', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('3', 'admin/role/index', '角色管理', '1', '1', '', '', '1', '20', '1446535750', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('4', 'admin/menu/index', '菜单管理', '1', '1', '', '', '1', '30', '1446535750', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('5', '#', '数据库管理', '1', '1', 'fa fa-database', '', '0', '2', '1446535750', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('6', 'admin/data/index', '数据库备份', '1', '1', '', '', '5', '50', '1446535750', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('7', 'admin/data/optimize', '优化表', '1', '1', '', '', '6', '50', '1477312169', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('8', 'admin/data/repair', '修复表', '1', '1', '', '', '6', '50', '1477312169', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('9', 'admin/user/useradd', '添加用户', '1', '1', '', '', '2', '50', '1477312169', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('10', 'admin/user/useredit', '编辑用户', '1', '1', '', '', '2', '50', '1477312169', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('11', 'admin/user/userdel', '删除用户', '1', '1', '', '', '2', '50', '1477312169', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('12', 'admin/user/user_state', '用户状态', '1', '1', '', '', '2', '20', '1477312169', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('13', '#', '日志管理', '1', '1', 'fa fa-tasks', '', '0', '6', '1477312169', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('14', 'admin/log/operate_log', '行为日志', '1', '1', '', '', '13', '50', '1477312169', '1477312169');
INSERT INTO `think_auth_rule` VALUES ('22', 'admin/log/del_log', '删除日志', '1', '1', '', '', '14', '50', '1477312169', '1477316778');
INSERT INTO `think_auth_rule` VALUES ('24', '#', '新闻管理', '1', '1', 'fa fa-paste', '', '0', '4', '1477312169', '1513146098');
INSERT INTO `think_auth_rule` VALUES ('25', 'admin/news/index_cate', '新闻分类', '1', '1', '', '', '24', '10', '1477312260', '1513581817');
INSERT INTO `think_auth_rule` VALUES ('26', 'admin/news/index', '新闻列表', '1', '1', '', '', '24', '20', '1477312333', '1513581830');
INSERT INTO `think_auth_rule` VALUES ('27', 'admin/data/import', '数据库还原', '1', '1', '', '', '5', '50', '1477639870', '1477639870');
INSERT INTO `think_auth_rule` VALUES ('28', 'admin/data/revert', '还原', '1', '1', '', '', '27', '50', '1477639972', '1477639972');
INSERT INTO `think_auth_rule` VALUES ('29', 'admin/data/del', '删除', '1', '1', '', '', '27', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('30', 'admin/role/roleAdd', '添加角色', '1', '1', '', '', '3', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('31', 'admin/role/roleEdit', '编辑角色', '1', '1', '', '', '3', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('32', 'admin/role/roleDel', '删除角色', '1', '1', '', '', '3', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('33', 'admin/role/role_state', '角色状态', '1', '1', '', '', '3', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('34', 'admin/role/giveAccess', '权限分配', '1', '1', '', '', '3', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('35', 'admin/menu/add_rule', '添加菜单', '1', '1', '', '', '4', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('36', 'admin/menu/edit_rule', '编辑菜单', '1', '1', '', '', '4', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('37', 'admin/menu/del_rule', '删除菜单', '1', '1', '', '', '4', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('38', 'admin/menu/rule_state', '菜单状态', '1', '1', '', '', '4', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('39', 'admin/menu/ruleorder', '菜单排序', '1', '1', '', '', '4', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('40', 'admin/news/add_cate', '添加分类', '1', '1', '', '', '25', '50', '1477640011', '1513582565');
INSERT INTO `think_auth_rule` VALUES ('41', 'admin/news/edit_cate', '编辑分类', '1', '1', '', '', '25', '50', '1477640011', '1513582577');
INSERT INTO `think_auth_rule` VALUES ('42', 'admin/news/del_cate', '删除分类', '1', '1', '', '', '25', '50', '1477640011', '1513582591');
INSERT INTO `think_auth_rule` VALUES ('43', 'admin/news/cate_state', '分类状态', '1', '1', '', '', '25', '50', '1477640011', '1513582603');
INSERT INTO `think_auth_rule` VALUES ('44', 'admin/news/add_list', '添加列表', '1', '1', '', '', '26', '50', '1477640011', '1513582782');
INSERT INTO `think_auth_rule` VALUES ('45', 'admin/news/edit_list', '编辑列表', '1', '1', '', '', '26', '50', '1477640011', '1513582799');
INSERT INTO `think_auth_rule` VALUES ('46', 'admin/news/del_list', '删除列表', '1', '1', '', '', '26', '50', '1477640011', '1513582818');
INSERT INTO `think_auth_rule` VALUES ('47', 'admin/news/news_state', '列表状态', '1', '1', '', '', '26', '50', '1477640011', '1513582840');
INSERT INTO `think_auth_rule` VALUES ('48', '#', '广告管理', '1', '1', 'fa fa-image', '', '0', '5', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('49', 'admin/ad/index_position', '广告位', '1', '1', '', '', '48', '10', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('50', 'admin/ad/add_position', '添加广告位', '1', '1', '', '', '49', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('51', 'admin/ad/edit_position', '编辑广告位', '1', '1', '', '', '49', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('52', 'admin/ad/del_position', '删除广告位', '1', '1', '', '', '49', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('53', 'admin/ad/position_state', '广告位状态', '1', '1', '', '', '49', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('54', 'admin/ad/index', '广告列表', '1', '1', '', '', '48', '20', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('55', 'admin/ad/add_ad', '添加广告', '1', '1', '', '', '54', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('56', 'admin/ad/edit_ad', '编辑广告', '1', '1', '', '', '54', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('57', 'admin/ad/del_ad', '删除广告', '1', '1', '', '', '54', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('58', 'admin/ad/ad_state', '广告状态', '1', '1', '', '', '54', '50', '1477640011', '1477640011');
INSERT INTO `think_auth_rule` VALUES ('61', 'admin/config/index', '配置管理', '1', '1', '', '', '1', '50', '1479908607', '1479908607');
INSERT INTO `think_auth_rule` VALUES ('62', 'admin/config/index', '配置列表', '1', '1', '', '', '61', '50', '1479908607', '1487943813');
INSERT INTO `think_auth_rule` VALUES ('63', 'admin/config/save', '保存配置', '1', '1', '', '', '61', '50', '1479908607', '1487943831');
INSERT INTO `think_auth_rule` VALUES ('70', '#', '会员管理', '1', '1', 'fa fa-users', '', '0', '3', '1484103066', '1484103066');
INSERT INTO `think_auth_rule` VALUES ('72', 'admin/member/add_group', '添加会员组', '1', '1', '', '', '71', '50', '1484103304', '1484103304');
INSERT INTO `think_auth_rule` VALUES ('71', 'admin/member/group', '会员组', '1', '1', '', '', '70', '10', '1484103304', '1484103304');
INSERT INTO `think_auth_rule` VALUES ('73', 'admin/member/edit_group', '编辑会员组', '1', '1', '', '', '71', '50', '1484103304', '1484103304');
INSERT INTO `think_auth_rule` VALUES ('74', 'admin/member/del_group', '删除会员组', '1', '1', '', '', '71', '50', '1484103304', '1484103304');
INSERT INTO `think_auth_rule` VALUES ('75', 'admin/member/index', '会员列表', '1', '1', '', '', '70', '20', '1484103304', '1484103304');
INSERT INTO `think_auth_rule` VALUES ('76', 'admin/member/add_member', '添加会员', '1', '1', '', '', '75', '50', '1484103304', '1484103304');
INSERT INTO `think_auth_rule` VALUES ('77', 'admin/member/edit_member', '编辑会员', '1', '1', '', '', '75', '50', '1484103304', '1484103304');
INSERT INTO `think_auth_rule` VALUES ('78', 'admin/member/del_member', '删除会员', '1', '1', '', '', '75', '50', '1484103304', '1484103304');
INSERT INTO `think_auth_rule` VALUES ('79', 'admin/member/member_status', '会员状态', '1', '1', '', '', '75', '50', '1484103304', '1487937671');
INSERT INTO `think_auth_rule` VALUES ('80', 'admin/member/group_status', '会员组状态', '1', '1', '', '', '71', '50', '1484103304', '1484103304');
INSERT INTO `think_auth_rule` VALUES ('83', '#', '关于我们', '1', '1', 'fa fa-user', '', '0', '50', '1512975888', '1512976586');
INSERT INTO `think_auth_rule` VALUES ('84', 'admin/aboutus/profile', '公司简介', '1', '1', '', '', '83', '50', '1512977001', '1513819925');
INSERT INTO `think_auth_rule` VALUES ('85', 'admin/about/add_about', '添加关于我们', '1', '1', '', '', '84', '50', '1513065239', '1513065239');
INSERT INTO `think_auth_rule` VALUES ('87', 'admin/about/edit_about', '编辑关于我们', '1', '1', '', '', '84', '50', '1513065376', '1513065376');
INSERT INTO `think_auth_rule` VALUES ('88', 'admin/about/delete', '删除关于我们', '1', '1', '', '', '84', '50', '1513065416', '1513065416');
INSERT INTO `think_auth_rule` VALUES ('89', 'admin/comculture/index', '企业文化', '1', '1', '', '', '83', '50', '1513065717', '1513820894');
INSERT INTO `think_auth_rule` VALUES ('92', '#', '作品管理', '1', '1', 'fa fa-image', '', '0', '50', '1513147587', '1513147905');
INSERT INTO `think_auth_rule` VALUES ('91', 'admin/news/index', '新闻列表', '1', '1', '', '', '90', '50', '1513145830', '1513145830');
INSERT INTO `think_auth_rule` VALUES ('93', 'admin/product/index_cate', '作品分类', '1', '1', '', '', '92', '50', '1513147625', '1513147625');
INSERT INTO `think_auth_rule` VALUES ('94', 'admin/product/index', '作品列表', '1', '1', '', '', '92', '50', '1513147664', '1513152125');
INSERT INTO `think_auth_rule` VALUES ('95', '#', '联系我们', '1', '1', 'fa fa-phone', '', '0', '50', '1513154065', '1513154065');
INSERT INTO `think_auth_rule` VALUES ('96', 'admin/contact/index', '联系我们', '1', '1', '', '', '95', '50', '1513154109', '1513154109');
INSERT INTO `think_auth_rule` VALUES ('97', '#', '人才管理', '1', '1', 'fa fa-frown-o', '', '0', '50', '1513306240', '1513306800');
INSERT INTO `think_auth_rule` VALUES ('98', 'admin/talents/index', '人才列表', '1', '1', '', '', '97', '50', '1513306302', '1513580214');
INSERT INTO `think_auth_rule` VALUES ('100', 'admin/talents/index_opus', '人才内容', '1', '1', '', '', '97', '50', '1513389922', '1513580251');
INSERT INTO `think_auth_rule` VALUES ('113', '#', '业务管理', '1', '1', 'fa fa-cogs', '', '0', '50', '1513578105', '1513645560');
INSERT INTO `think_auth_rule` VALUES ('114', 'admin/business/index', '业务列表', '1', '1', '', '', '113', '50', '1513578481', '1513578481');
INSERT INTO `think_auth_rule` VALUES ('115', 'admin/business/index_cate', '业务分类', '1', '1', '', '', '113', '50', '1513578620', '1513578620');
INSERT INTO `think_auth_rule` VALUES ('116', 'admin/aboutus/ideas', '公司理念', '1', '1', '', '', '83', '50', '1513820782', '1513820825');
INSERT INTO `think_auth_rule` VALUES ('117', 'admin/contact/index_footer', '底部管理', '1', '1', '', '', '95', '50', '1513906405', '1513906405');
INSERT INTO `think_auth_rule` VALUES ('118', 'admin/news/content', '新闻内容', '1', '1', '', '', '24', '50', '1514017642', '1514017642');

-- ----------------------------
-- Table structure for think_business
-- ----------------------------
DROP TABLE IF EXISTS `think_business`;
CREATE TABLE `think_business` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `cate_id` int(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `views` int(50) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_business
-- ----------------------------
INSERT INTO `think_business` VALUES ('11', 'banner 设计', '5', 'a', 'a', '20171218\\a1394228e8a61c1ca40f201e2c25c97b.png', '<p><span style=\"color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 16px; text-indent: 32px; background-color: rgba(0, 0, 0, 0.6);\">Banner其实是指网幅图象广告：以GIF，JPG等格式建立的图象文件，定位在网页中，大多用来表现网络广告内容。</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(255, 255, 255); font-size: 16px; text-indent: 32px; background-color: rgba(0, 0, 0, 0.6);\">同时还可使用Java等语言使其产生交互性，用Shockwave等插件工具增强表现力</span></p>', '1', '1513237922', '1513595275', '1');
INSERT INTO `think_business` VALUES ('12', 'qwe', '5', 'asd', 'xzcd', '20171219\\e6e2cf7fc541c3c8add1aa48102263b0.png', '<p>asdad</p>', '1', '1513337185', '1513666304', '0');

-- ----------------------------
-- Table structure for think_business_cate
-- ----------------------------
DROP TABLE IF EXISTS `think_business_cate`;
CREATE TABLE `think_business_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `orderby` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_business_cate
-- ----------------------------
INSERT INTO `think_business_cate` VALUES ('5', 'UI设计', '1513237743', '1513237743', '50', '1');
INSERT INTO `think_business_cate` VALUES ('6', '网页设计', '1513242144', '1513242144', '50', '1');
INSERT INTO `think_business_cate` VALUES ('7', '平面设计', '1513242160', '1513242160', '50', '1');
INSERT INTO `think_business_cate` VALUES ('8', '网站建设', '1513772403', '1513772403', '50', '1');
INSERT INTO `think_business_cate` VALUES ('9', '购物商城', '1513772416', '1513772416', '50', '1');
INSERT INTO `think_business_cate` VALUES ('10', '微信开发', '1513772425', '1513772425', '50', '1');

-- ----------------------------
-- Table structure for think_com_culture
-- ----------------------------
DROP TABLE IF EXISTS `think_com_culture`;
CREATE TABLE `think_com_culture` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `e_name` varchar(50) NOT NULL DEFAULT '',
  `pc_content` text NOT NULL,
  `ph_content` text NOT NULL,
  `cul_img` varchar(255) NOT NULL DEFAULT '',
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_com_culture
-- ----------------------------
INSERT INTO `think_com_culture` VALUES ('1', '企业文化', 'corporate culture', '<p style=\"box-sizing: border-box; margin-top: 35px; margin-bottom: 0px; padding: 0px; font-family: 微软雅黑; font-size: 14px; line-height: 1.1em; color: rgb(51, 51, 51); white-space: normal; background-color: rgb(255, 255, 255);\">社会价值——成为一家提供专业信息化服务的大型高科技企业</p><p style=\"box-sizing: border-box; margin-top: 35px; margin-bottom: 0px; padding: 0px; font-family: 微软雅黑; font-size: 14px; line-height: 1.1em; color: rgb(51, 51, 51); white-space: normal; background-color: rgb(255, 255, 255);\">行业价值——成为一个聚集众多IT精英自由发挥的平台</p><p><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; background-color: rgb(255, 255, 255);\"><p style=\"box-sizing: border-box; margin-top: 35px; margin-bottom: 0px; padding: 0px; font-size: 1em; line-height: 1.1em;\">人文价值——成为一个跨时代、有主张、有号召力的信息网络</p><p style=\"box-sizing: border-box; margin-top: 35px; margin-bottom: 0px; padding: 0px; font-size: 1em; line-height: 1.1em;\">不拘一格 人尽其才</p><p style=\"box-sizing: border-box; margin-top: 35px; margin-bottom: 0px; padding: 0px; font-size: 1em; line-height: 1.1em;\">优秀的人才是全方位的素质提升</p><p style=\"box-sizing: border-box; margin-top: 35px; margin-bottom: 0px; padding: 0px; font-size: 1em; line-height: 1.1em;\">优秀的人才是商脉生存发展的源动力</p><p style=\"box-sizing: border-box; margin-top: 35px; margin-bottom: 0px; padding: 0px; font-size: 1em; line-height: 1.1em;\">不一味迎合市场，创造来源于客户与设计师的良性互动</p></span></p><p><br/></p>', '', '20171221\\538bda74b8ec6628bbc2a00899466375.png', '1513055555', '1');
INSERT INTO `think_com_culture` VALUES ('6', '企业文化', 'fgfgf', '', '', '20171221\\96395a891bf2089e7cca0a840e0c9e8b.png', '1513825645', '1');

-- ----------------------------
-- Table structure for think_com_profile
-- ----------------------------
DROP TABLE IF EXISTS `think_com_profile`;
CREATE TABLE `think_com_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL DEFAULT '' COMMENT '标题',
  `e_title` varchar(50) NOT NULL DEFAULT '' COMMENT '英文名称',
  `img` text NOT NULL,
  `name1` varchar(255) NOT NULL DEFAULT '',
  `name2` varchar(255) NOT NULL DEFAULT '',
  `name3` varchar(255) NOT NULL DEFAULT '',
  `name4` varchar(255) NOT NULL DEFAULT '',
  `name5` varchar(255) NOT NULL DEFAULT '',
  `create_time` int(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_com_profile
-- ----------------------------
INSERT INTO `think_com_profile` VALUES ('1', '公司简介', 'Company profile', '20171211\\6a4c34476519a61d418c3ab7adf2cd9f.png', '四川商脉科技有限公司，位于成都市锦江区大型商圈内，注册资金一千万（人民币），资金实力雄厚，并拥有行业顶级的自主研发设计技术人才。成立以来，始终致力于为中国企业特别是成长型企业提供专业信息化服务，在川内率先开创了专属个性化定制模式，实现企业“信息化运营”。', '商脉科技已成功为川内多家知名企业客户提供了全方位，多层面的信息化解决方案。', '公司服务涵盖了网站品牌策划、网络品牌优化与推广、网页创意设计、官方电子商城、微信营销平台、技术方案实施等。', '我们专业、敬业，富有激情和创意，我们尊重并深入理解每一位客户的理念，并致力于运用我们的设计能力将其充分实现。', '我们追求一流的用户体验，坚信优秀的产品是优雅设计与精湛技术的完美结合。', '1512989059', '1');

-- ----------------------------
-- Table structure for think_config
-- ----------------------------
DROP TABLE IF EXISTS `think_config`;
CREATE TABLE `think_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置ID',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '配置名称',
  `value` text COMMENT '配置值',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_config
-- ----------------------------
INSERT INTO `think_config` VALUES ('1', 'web_site_title', '轮回后台管理系统');
INSERT INTO `think_config` VALUES ('2', 'web_site_description', '轮回后台管理系统');
INSERT INTO `think_config` VALUES ('3', 'web_site_keyword', '轮回后台管理系统');
INSERT INTO `think_config` VALUES ('4', 'web_site_icp', '陇ICP备15002349号-1');
INSERT INTO `think_config` VALUES ('5', 'web_site_cnzz', '');
INSERT INTO `think_config` VALUES ('6', 'web_site_copy', 'Copyright © 2017 轮回后台管理系统 All rights reserved.');
INSERT INTO `think_config` VALUES ('7', 'web_site_close', '1');
INSERT INTO `think_config` VALUES ('8', 'list_rows', '10');
INSERT INTO `think_config` VALUES ('9', 'admin_allow_ip', null);
INSERT INTO `think_config` VALUES ('10', 'alidayu_appkey', '');
INSERT INTO `think_config` VALUES ('11', 'alidayu_appSecret', '');
INSERT INTO `think_config` VALUES ('12', 'wchat', '商脉微信公众号');
INSERT INTO `think_config` VALUES ('13', 'weibo', '商脉官方微博');

-- ----------------------------
-- Table structure for think_contact
-- ----------------------------
DROP TABLE IF EXISTS `think_contact`;
CREATE TABLE `think_contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '大标题',
  `name` varchar(255) NOT NULL COMMENT '小标题',
  `ename` varchar(255) NOT NULL COMMENT '英文标题',
  `phone` varchar(255) NOT NULL COMMENT '电话',
  `fax` varchar(255) NOT NULL COMMENT '传真',
  `qq` varchar(255) NOT NULL COMMENT 'QQ',
  `email` varchar(255) NOT NULL COMMENT '电子邮箱',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `xname` varchar(255) NOT NULL COMMENT '姓名',
  `content` varchar(255) NOT NULL COMMENT '留言内容',
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `xphone` varchar(255) NOT NULL COMMENT '提交的电话',
  `xaddress` varchar(255) NOT NULL COMMENT '提交人的地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_contact
-- ----------------------------
INSERT INTO `think_contact` VALUES ('23', 'hello！how can we help？', '联系我们', 'contact us', '13123567359', '028-3367357', '121342190', '121342190@qq.com', '成都市锦江区东大街芷泉街229号', '小黄', '<p>欢迎来到本公司工作，本公司最大的优点就是加班，哈哈哈哈，，，，欢迎来加班啊！！！伙计们</p>', '20171222\\8c89ca5dba34456f05563cbccadfc5a2.png', '1', '1513386047', '1513905807', '15683996872', '重庆');
INSERT INTO `think_contact` VALUES ('24', 'hello！how can we help？', '联系我们', 'contact us', '13123567359', '028-3367357', '121342190', '121342190@qq.com', '成都市锦江区东大街芷泉街229号', '小黄', '', '20171221\\2f5efd425cb0fa693314bac2f381bece.png', '1', '1513827048', '1513827048', '15291337568', '重庆');
INSERT INTO `think_contact` VALUES ('25', 'hello！how can we help？', '联系我们', 'contact us', '13123567359', '028-3367357', '121342190', '121342190@qq.com', '成都市锦江区东大街芷泉街229号', '小黄', '', '20171221\\efdd39b54377f3f622ea4925b988073a.png', '1', '1513827656', '1513827656', '15291337568', '重庆');
INSERT INTO `think_contact` VALUES ('26', 'hello！how can we help？', '联系我们', 'contact us', '13123567359', '028-3367357', '121342190', '121342190@qq.com', '成都市锦江区东大街芷泉街229号', '小黄', '', '20171221\\462b43bab545e6bd5d4e1d65b6076988.png', '1', '1513827737', '1513827737', '15291337568', '重庆');
INSERT INTO `think_contact` VALUES ('27', 'hello！how can we help？', '联系我们', 'contact us', '13123567359', '028-3367357', '121342190', '121342190@qq.com', '成都市锦江区东大街芷泉街229号', '小黄', '', '20171221\\1fd8a27c0892a9e03f6ce1a470c2e2ec.png', '1', '1513827790', '1513827790', '15291337568', '重庆');

-- ----------------------------
-- Table structure for think_footer
-- ----------------------------
DROP TABLE IF EXISTS `think_footer`;
CREATE TABLE `think_footer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `qq` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_footer
-- ----------------------------
INSERT INTO `think_footer` VALUES ('3', '13123567359', '028-3367357', '121342190', '121342190@qq.com', '成都市锦江区东大街芷泉街229号', '20171222\\e4f2fe5cec3e3089cb8a0388121e5d51.png', '0', '0', '1');
INSERT INTO `think_footer` VALUES ('4', '13123567359', '028-3367357', '121342190', '121342190@qq.com', '成都市锦江区东大街芷泉街229号', '20171222\\fa7d99edbe3d754c22c74df06c21cab0.png', '0', '0', '1');
INSERT INTO `think_footer` VALUES ('5', '13123567359', '028-3367357', '121342190', '121342190@qq.com', '成都市锦江区东大街芷泉街229号', '20171222\\82444282f2924162e02c6974273519a1.png', '0', '0', '1');
INSERT INTO `think_footer` VALUES ('6', '13123567359', '028-3367357', '121342190', '121342190@qq.com', '成都市锦江区东大街芷泉街229号', '20171222\\ded2fc5946d7c6e5202412b9faf22e6d.png', '0', '0', '1');
INSERT INTO `think_footer` VALUES ('7', '13123567359', '028-3367357', '121342190', '121342190@qq.com', '成都市锦江区东大街芷泉街229号', '20171222\\0c88daff551fe680b70866949284be23.png', '0', '0', '1');

-- ----------------------------
-- Table structure for think_ideas
-- ----------------------------
DROP TABLE IF EXISTS `think_ideas`;
CREATE TABLE `think_ideas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idea` varchar(50) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `map` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_ideas
-- ----------------------------
INSERT INTO `think_ideas` VALUES ('1', '人才理念', '不拘一格，人尽其才', '20171221\\25c5ffd8e950c3b0ada3017868a07153.png', '1');
INSERT INTO `think_ideas` VALUES ('2', '人才理念', '不拘一格，人尽其才', '20171221\\dbbc176b56d1a40cef25c6afe338dc43.png', '1');
INSERT INTO `think_ideas` VALUES ('3', '人才理念', '不拘一格，人尽其才', '20171221\\48ba245a9d3d6b636628a51d49baf484.png', '1');
INSERT INTO `think_ideas` VALUES ('5', '人才理念', '不拘一格，人尽其才', '20171221\\f7e34e1c29dc6c848df8cd0b780f3ee7.png', '1');
INSERT INTO `think_ideas` VALUES ('6', '人才理念', '不拘一格，人尽其才', '20171221\\5d88c2ca99aa55f22c2d0f897db0ec74.png', '1');

-- ----------------------------
-- Table structure for think_log
-- ----------------------------
DROP TABLE IF EXISTS `think_log`;
CREATE TABLE `think_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) DEFAULT NULL COMMENT '用户ID',
  `admin_name` varchar(50) DEFAULT NULL COMMENT '用户姓名',
  `description` varchar(300) DEFAULT NULL COMMENT '描述',
  `ip` char(60) DEFAULT NULL COMMENT 'IP地址',
  `status` tinyint(1) DEFAULT NULL COMMENT '1 成功 2 失败',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4857 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_log
-- ----------------------------
INSERT INTO `think_log` VALUES ('4738', '1', 'admin', '用户【admin】删除管理员成功(ID=13)', '127.0.0.1', '1', '1512750744');
INSERT INTO `think_log` VALUES ('4739', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1512973613');
INSERT INTO `think_log` VALUES ('4740', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1512975888');
INSERT INTO `think_log` VALUES ('4741', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1512976586');
INSERT INTO `think_log` VALUES ('4742', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1512977001');
INSERT INTO `think_log` VALUES ('4743', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1512986155');
INSERT INTO `think_log` VALUES ('4744', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513039721');
INSERT INTO `think_log` VALUES ('4745', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513046562');
INSERT INTO `think_log` VALUES ('4746', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513051077');
INSERT INTO `think_log` VALUES ('4747', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513065239');
INSERT INTO `think_log` VALUES ('4748', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513065299');
INSERT INTO `think_log` VALUES ('4749', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513065339');
INSERT INTO `think_log` VALUES ('4750', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513065376');
INSERT INTO `think_log` VALUES ('4751', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513065416');
INSERT INTO `think_log` VALUES ('4752', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513065437');
INSERT INTO `think_log` VALUES ('4753', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513065717');
INSERT INTO `think_log` VALUES ('4754', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513076699');
INSERT INTO `think_log` VALUES ('4755', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513076721');
INSERT INTO `think_log` VALUES ('4756', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513076733');
INSERT INTO `think_log` VALUES ('4757', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513126188');
INSERT INTO `think_log` VALUES ('4758', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513136934');
INSERT INTO `think_log` VALUES ('4759', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513137473');
INSERT INTO `think_log` VALUES ('4760', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513145548');
INSERT INTO `think_log` VALUES ('4761', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513145744');
INSERT INTO `think_log` VALUES ('4762', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513145776');
INSERT INTO `think_log` VALUES ('4763', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513145788');
INSERT INTO `think_log` VALUES ('4764', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513145830');
INSERT INTO `think_log` VALUES ('4765', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513146068');
INSERT INTO `think_log` VALUES ('4766', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513146098');
INSERT INTO `think_log` VALUES ('4767', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513146134');
INSERT INTO `think_log` VALUES ('4768', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513147587');
INSERT INTO `think_log` VALUES ('4769', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513147625');
INSERT INTO `think_log` VALUES ('4770', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513147664');
INSERT INTO `think_log` VALUES ('4771', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513147905');
INSERT INTO `think_log` VALUES ('4772', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513152125');
INSERT INTO `think_log` VALUES ('4773', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513154065');
INSERT INTO `think_log` VALUES ('4774', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513154109');
INSERT INTO `think_log` VALUES ('4775', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513212779');
INSERT INTO `think_log` VALUES ('4776', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513298444');
INSERT INTO `think_log` VALUES ('4777', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513306240');
INSERT INTO `think_log` VALUES ('4778', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513306302');
INSERT INTO `think_log` VALUES ('4779', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513306705');
INSERT INTO `think_log` VALUES ('4780', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513306760');
INSERT INTO `think_log` VALUES ('4781', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513306800');
INSERT INTO `think_log` VALUES ('4782', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513307552');
INSERT INTO `think_log` VALUES ('4783', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513385728');
INSERT INTO `think_log` VALUES ('4784', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389921');
INSERT INTO `think_log` VALUES ('4785', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389922');
INSERT INTO `think_log` VALUES ('4786', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389926');
INSERT INTO `think_log` VALUES ('4787', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389928');
INSERT INTO `think_log` VALUES ('4788', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389928');
INSERT INTO `think_log` VALUES ('4789', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389929');
INSERT INTO `think_log` VALUES ('4790', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389929');
INSERT INTO `think_log` VALUES ('4791', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389929');
INSERT INTO `think_log` VALUES ('4792', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389929');
INSERT INTO `think_log` VALUES ('4793', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389929');
INSERT INTO `think_log` VALUES ('4794', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389929');
INSERT INTO `think_log` VALUES ('4795', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389929');
INSERT INTO `think_log` VALUES ('4796', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389930');
INSERT INTO `think_log` VALUES ('4797', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513389930');
INSERT INTO `think_log` VALUES ('4798', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513389972');
INSERT INTO `think_log` VALUES ('4799', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513389981');
INSERT INTO `think_log` VALUES ('4800', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513390041');
INSERT INTO `think_log` VALUES ('4801', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513396109');
INSERT INTO `think_log` VALUES ('4802', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513396119');
INSERT INTO `think_log` VALUES ('4803', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513396129');
INSERT INTO `think_log` VALUES ('4804', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513396162');
INSERT INTO `think_log` VALUES ('4805', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513396169');
INSERT INTO `think_log` VALUES ('4806', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513396177');
INSERT INTO `think_log` VALUES ('4807', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513396187');
INSERT INTO `think_log` VALUES ('4808', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513396194');
INSERT INTO `think_log` VALUES ('4809', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513396200');
INSERT INTO `think_log` VALUES ('4810', '1', 'admin', '用户【admin】删除菜单成功', '127.0.0.1', '1', '1513396207');
INSERT INTO `think_log` VALUES ('4811', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513558607');
INSERT INTO `think_log` VALUES ('4812', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513578105');
INSERT INTO `think_log` VALUES ('4813', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513578481');
INSERT INTO `think_log` VALUES ('4814', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513578620');
INSERT INTO `think_log` VALUES ('4815', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513580172');
INSERT INTO `think_log` VALUES ('4816', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513580214');
INSERT INTO `think_log` VALUES ('4817', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513580251');
INSERT INTO `think_log` VALUES ('4818', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513581817');
INSERT INTO `think_log` VALUES ('4819', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513581830');
INSERT INTO `think_log` VALUES ('4820', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582565');
INSERT INTO `think_log` VALUES ('4821', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582577');
INSERT INTO `think_log` VALUES ('4822', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582591');
INSERT INTO `think_log` VALUES ('4823', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582603');
INSERT INTO `think_log` VALUES ('4824', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582617');
INSERT INTO `think_log` VALUES ('4825', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582630');
INSERT INTO `think_log` VALUES ('4826', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582643');
INSERT INTO `think_log` VALUES ('4827', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582661');
INSERT INTO `think_log` VALUES ('4828', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582719');
INSERT INTO `think_log` VALUES ('4829', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582782');
INSERT INTO `think_log` VALUES ('4830', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582799');
INSERT INTO `think_log` VALUES ('4831', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582818');
INSERT INTO `think_log` VALUES ('4832', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513582840');
INSERT INTO `think_log` VALUES ('4833', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513645042');
INSERT INTO `think_log` VALUES ('4834', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513645198');
INSERT INTO `think_log` VALUES ('4835', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513645222');
INSERT INTO `think_log` VALUES ('4836', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513645297');
INSERT INTO `think_log` VALUES ('4837', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513645398');
INSERT INTO `think_log` VALUES ('4838', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513645468');
INSERT INTO `think_log` VALUES ('4839', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513645485');
INSERT INTO `think_log` VALUES ('4840', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513645560');
INSERT INTO `think_log` VALUES ('4841', '1', 'admin', '用户【admin】登录失败：密码错误', '127.0.0.1', '2', '1513731155');
INSERT INTO `think_log` VALUES ('4842', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513731170');
INSERT INTO `think_log` VALUES ('4843', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513818257');
INSERT INTO `think_log` VALUES ('4844', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513819520');
INSERT INTO `think_log` VALUES ('4845', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513819925');
INSERT INTO `think_log` VALUES ('4846', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513820079');
INSERT INTO `think_log` VALUES ('4847', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513820111');
INSERT INTO `think_log` VALUES ('4848', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513820782');
INSERT INTO `think_log` VALUES ('4849', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513820825');
INSERT INTO `think_log` VALUES ('4850', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513820853');
INSERT INTO `think_log` VALUES ('4851', '1', 'admin', '用户【admin】编辑菜单成功', '127.0.0.1', '1', '1513820894');
INSERT INTO `think_log` VALUES ('4852', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513904230');
INSERT INTO `think_log` VALUES ('4853', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1513906405');
INSERT INTO `think_log` VALUES ('4854', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1513925871');
INSERT INTO `think_log` VALUES ('4855', '1', 'admin', '用户【admin】登录成功', '127.0.0.1', '1', '1514008635');
INSERT INTO `think_log` VALUES ('4856', '1', 'admin', '用户【admin】添加菜单成功', '127.0.0.1', '1', '1514017642');

-- ----------------------------
-- Table structure for think_member
-- ----------------------------
DROP TABLE IF EXISTS `think_member`;
CREATE TABLE `think_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(64) DEFAULT NULL COMMENT '邮件或者手机',
  `nickname` varchar(32) DEFAULT NULL COMMENT '昵称',
  `sex` int(10) DEFAULT NULL COMMENT '1男2女',
  `password` char(32) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `head_img` varchar(128) DEFAULT NULL COMMENT '头像',
  `integral` int(11) DEFAULT '0' COMMENT '积分',
  `money` int(11) DEFAULT '0' COMMENT '账户余额',
  `mobile` varchar(11) DEFAULT NULL COMMENT '认证的手机号码',
  `create_time` int(11) DEFAULT '0' COMMENT '注册时间',
  `update_time` int(11) DEFAULT NULL COMMENT '最后一次登录',
  `login_num` varchar(15) DEFAULT NULL COMMENT '登录次数',
  `status` tinyint(1) DEFAULT NULL COMMENT '1正常  0 禁用',
  `closed` tinyint(1) DEFAULT '0' COMMENT '0正常，1删除',
  `token` char(32) DEFAULT '0' COMMENT '令牌',
  `session_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=212066 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_member
-- ----------------------------
INSERT INTO `think_member` VALUES ('2', '1217037610', 'XiMi丶momo', '2', 'd41d8cd98f00b204e9800998ecf8427e', '1', '20161122\\ab9f9c492871857e1a6c5bc1c658ef7f.jpg', '300', '200', '18809321956', '1476779394', '1476779394', '0', '1', '1', '0', '');
INSERT INTO `think_member` VALUES ('1', '18809321929', '醉凡尘丶Wordly', '1', 'd41d8cd98f00b204e9800998ecf8427e', '1', '20161122\\admin.jpg', '92960', '73', '18809321929', '1476762875', '1476762875', '0', '1', '0', '0', '');
INSERT INTO `think_member` VALUES ('3', '1217037610', '紫陌轩尘', '1', 'd41d8cd98f00b204e9800998ecf8427e', '1', '20161122\\293c8cd05478b029a378ac4e5a880303.jpg', '400', '434', '49494', '1476676516', '1476676516', '0', '1', '1', '0', '');
INSERT INTO `think_member` VALUES ('4', '', 'fag', '1', 'd41d8cd98f00b204e9800998ecf8427e', '1', '20161122\\8a69f4c962e26265fd9f12efbff65013.jpg', '24', '424', '242', '1476425833', '1476425833', '0', '0', '1', '0', '');
INSERT INTO `think_member` VALUES ('5', '18809321928', '空谷幽兰', '2', 'd41d8cd98f00b204e9800998ecf8427e', '1', '20161122\\admin.jpg', '53', '3636', '3636', '1476676464', '1476676464', '0', '1', '0', '0', '');
INSERT INTO `think_member` VALUES ('6', '', '787367373', '1', 'd41d8cd98f00b204e9800998ecf8427e', '1', '20161122\\ab9f9c492871857e1a6c5bc1c658ef7f.jpg', '414', '9', '73737373', '1476425750', '1476425750', '0', '0', '1', '0', '');
INSERT INTO `think_member` VALUES ('7', '18809321929', 'XMi丶呵呵', '2', 'd41d8cd98f00b204e9800998ecf8427e', '1', '20161122\\293c8cd05478b029a378ac4e5a880303.jpg', '373373', '33', '73', '1476692255', '1476692255', '0', '1', '0', '0', '');
INSERT INTO `think_member` VALUES ('8', '1246470984', 'XY', '1', 'd41d8cd98f00b204e9800998ecf8427e', '1', '20161122\\8a69f4c962e26265fd9f12efbff65013.jpg', '7383', '73737373', '7373', '1476692123', '1476692123', '0', '1', '1', '0', '');
INSERT INTO `think_member` VALUES ('9', '18793189097', '25773', '1', 'd41d8cd98f00b204e9800998ecf8427e', '1', '20161122\\admin.jpg', '7373737', '77', '7373733', '1476433452', '1476433452', '0', '1', '1', '0', '');
INSERT INTO `think_member` VALUES ('10', '1246470984', 'XiYu', '2', 'e10adc3949ba59abbe56e057f20f883e', '1', '20161122\\ab9f9c492871857e1a6c5bc1c658ef7f.jpg', '100', '100', '18793189091', '1476694831', '1476694831', '0', '1', '1', '0', '');
INSERT INTO `think_member` VALUES ('11', '', '烟勤话少脾气好', '0', '', '1', '20161122\\293c8cd05478b029a378ac4e5a880303.jpg', '0', '0', '', '1488030906', '1512750781', '0', '0', '1', '0', '');
INSERT INTO `think_member` VALUES ('12', '1246470984', 'XiYu', '2', 'e10adc3949ba59abbe56e057f20f883e', '1', '20161122\\8a69f4c962e26265fd9f12efbff65013.jpg', '100', '100', '18793189091', '1488030906', '1476694831', '0', '1', '1', '0', '');
INSERT INTO `think_member` VALUES ('212065', '111', '111', '0', 'deb2a3420354e40d55a1b0cb3a947cd0', '121', '<!doctype html>\n<html>\n<head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n    <title>跳转提示</title>\n', '0', '0', '', '1502341127', '1502341127', null, null, '0', '0', null);

-- ----------------------------
-- Table structure for think_member_group
-- ----------------------------
DROP TABLE IF EXISTS `think_member_group`;
CREATE TABLE `think_member_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言Id',
  `group_name` varchar(32) NOT NULL COMMENT '留言评论作者',
  `status` tinyint(1) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL COMMENT '留言回复时间',
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8 COMMENT='文章评论表';

-- ----------------------------
-- Records of think_member_group
-- ----------------------------
INSERT INTO `think_member_group` VALUES ('1', '系统组', '0', '1441616559', '1502935062');
INSERT INTO `think_member_group` VALUES ('2', '游客组', '0', '1441617195', '1502940499');
INSERT INTO `think_member_group` VALUES ('3', 'VIP1', '1', '1441769224', '1502940506');
INSERT INTO `think_member_group` VALUES ('122', '1', '1', '1503156190', '1503156190');
INSERT INTO `think_member_group` VALUES ('123', '123', '1', '1503340766', '1503340766');

-- ----------------------------
-- Table structure for think_news
-- ----------------------------
DROP TABLE IF EXISTS `think_news`;
CREATE TABLE `think_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章逻辑ID',
  `title` varchar(100) NOT NULL COMMENT '文章标题',
  `cate_id` int(11) NOT NULL DEFAULT '1' COMMENT '文章类别',
  `photo` varchar(64) DEFAULT '' COMMENT '文章图片',
  `content` text NOT NULL COMMENT '文章内容',
  `views` int(11) NOT NULL DEFAULT '1' COMMENT '浏览量',
  `status` tinyint(1) DEFAULT NULL,
  `is_tui` int(1) DEFAULT '0' COMMENT '是否推荐',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  `orderby` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `a_title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of think_news
-- ----------------------------
INSERT INTO `think_news` VALUES ('80', '如果你是第一次创业.....', '1', '20171220\\3ea4941cc434ff26d1fd61dcc6cfd3c2.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">打造一家成功的创业公司太不容易</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">。很多创业者都是在经历了几次失败</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513757612', '1513757612', '1');
INSERT INTO `think_news` VALUES ('81', '境由心造|第五届茶....', '1', '20171220\\7af8c9dd65f68a95013e902b6eeb7741.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">茶境·第五届国际茶文化交流展致力</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">于打造更好</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513761337', '1513761337', '2');
INSERT INTO `think_news` VALUES ('82', '美国知名电子商务网.....', '1', '20171220\\b1efb0954463fea338798bcda7d8dc78.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">今年早些时候，</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">Volusion</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">邀请旧金山的设计公司......</span></p>', '1', '1', '1', '1513761385', '1513761385', '3');
INSERT INTO `think_news` VALUES ('83', '奥地利萨尔茨堡应用.....', '1', '20171220\\7782dc2acd170885ae88a8b7389e14cf.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">新形象首次加入了“猫头鹰”图形</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">，猫头鹰作为智慧</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513761413', '1513761413', '4');
INSERT INTO `think_news` VALUES ('84', '扁平化风潮下的欧宝.....', '1', '20171220\\b4a454aa4f01758b8ddd96fa61cdc1a8.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">欧宝汽车新标志跟随了扁平化的风潮</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">，摒弃了汽车</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513761445', '1513761445', '5');
INSERT INTO `think_news` VALUES ('85', '包装设计《原创推荐》.....', '1', '20171220\\944751d8aec8a50fa8e0a11af6b8218e.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">中国设计网每周精选原创包装设计作品</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">，分享给大家</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513761472', '1513761472', '6');
INSERT INTO `think_news` VALUES ('86', '大麦网更换全新logo.....', '1', '20171220\\4264c98da5ba0630d623a5ac47897ee9.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">全新的品牌形象包括新LOGO以及新</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">的Slogan。新LOGO是</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513761501', '1513761501', '7');
INSERT INTO `think_news` VALUES ('87', 'Bila Tserkva乌克兰旅游城市.....', '1', '20171220\\197365e89cc00e3131076add5634fe58.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">标志采用弓箭头的三个箭头表示，我们还</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">添加了一</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513761530', '1513761530', '8');
INSERT INTO `think_news` VALUES ('88', '如果你是第一次创业.....', '2', '20171222\\09ec2d961fb2299104dd22a09fd4a465.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">打造一家成功的创业公司太不容易</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">。很多创业者都是在经历了几次失败</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513935761', '1513935761', '');
INSERT INTO `think_news` VALUES ('89', '境由心造|第五届茶....', '2', '20171222\\8123e5e16bd943eeaf84f118cb777673.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">茶境·第五届国际茶文化交流展致力</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">于打造更好</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513935802', '1513935802', '');
INSERT INTO `think_news` VALUES ('90', '美国知名电子商务网.....', '2', '20171222\\41da032a6c3c38265ad45344172b8c96.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">今年早些时候，</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">Volusion</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">邀请旧金山的设计公司......</span></p>', '1', '1', '1', '1513935830', '1513935830', '');
INSERT INTO `think_news` VALUES ('91', '扁平化风潮下的欧宝.....', '3', '20171222\\7a0fbd17fbfa0d1e80f32a3e1c1b9b2f.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">欧宝汽车新标志跟随了扁平化的风潮</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">，摒弃了汽车</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513935888', '1513935888', '');
INSERT INTO `think_news` VALUES ('92', '包装设计《原创推荐》.....', '3', '20171222\\ce73b0c5ed5557e3ed687ea1bb3057b0.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">中国设计网每周精选原创包装设计作品</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">，分享给大家</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513935915', '1513935915', '');
INSERT INTO `think_news` VALUES ('93', '大麦网更换全新logo.....', '3', '20171222\\982581007921db0d61060127343530fd.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">全新的品牌形象包括新LOGO以及新</span><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-family: 微软雅黑; color: rgb(51, 51, 51); font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">的Slogan。新LOGO是</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(238, 238, 238);\">......</span></p>', '1', '1', '1', '1513935944', '1513935944', '');

-- ----------------------------
-- Table structure for think_news_cate
-- ----------------------------
DROP TABLE IF EXISTS `think_news_cate`;
CREATE TABLE `think_news_cate` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '分类名称',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  `status` tinyint(1) NOT NULL,
  `orderby` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_news_cate
-- ----------------------------
INSERT INTO `think_news_cate` VALUES ('1', 'All', '1477140627', '1513077565', '1', '1');
INSERT INTO `think_news_cate` VALUES ('2', '公司动态', '1477140627', '1513077584', '1', '2');
INSERT INTO `think_news_cate` VALUES ('3', '行业动态', '1477140604', '1513077598', '1', '3');

-- ----------------------------
-- Table structure for think_product
-- ----------------------------
DROP TABLE IF EXISTS `think_product`;
CREATE TABLE `think_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `describe` varchar(255) NOT NULL COMMENT '描述',
  `views` varchar(255) NOT NULL COMMENT '浏览量',
  `create_time` int(255) NOT NULL,
  `update_time` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `is_tui` varchar(255) NOT NULL,
  `xname` varchar(255) NOT NULL COMMENT '内容页的标题',
  `firstname` varchar(255) NOT NULL COMMENT '内容页的第一行内容',
  `leftmain` varchar(255) NOT NULL COMMENT '左边的内容',
  `rightimg` varchar(255) NOT NULL COMMENT '右边的图片',
  `rightmain` varchar(255) NOT NULL COMMENT '右边的内容',
  `leftimg` varchar(255) NOT NULL COMMENT '左边的图片',
  `content` varchar(255) NOT NULL COMMENT '下边的内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_product
-- ----------------------------
INSERT INTO `think_product` VALUES ('9', '林氏家居体验馆', '20171222\\3780c248f4a29930ed1af55a8071d59b.png', '家居企业网站设计', '1', '1513156752', '1513928079', '1', '5', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('7', 'Auall珠宝', '20171220\\3733c02f1ff87b880418df28926c0518.png', '珠宝品牌商城设计', '1', '1513156591', '1513769846', '1', '5', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('8', 'Bazaarl珠宝', '20171222\\8cb5b781fe9b85d802fe67c2957fc519.png', '珠宝品牌商城设计', '1', '1513156716', '1513928072', '1', '5', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('10', '服装品牌', '20171222\\ccaaab6029ee3a023af07352301cbbaa.png', '服装品牌商城设计', '1', '1513156785', '1513928086', '1', '5', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('11', '左岸', '20171222\\74f3d7adbcd8963c4cbed9437681ade6.png', '品牌商城设计', '1', '1513156816', '1513928094', '1', '5', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('12', '易民宿', '20171222\\a677621d615b46d8f53f03e389a8fdf3.png', '民宿官网设计', '1', '1513156857', '1513928102', '1', '5', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('13', 'PH文具', '20171222\\8c07fc74a6ed419b649113ffc5a67b58.png', '文具商城设计', '1', '1513156900', '1513928115', '1', '5', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('14', '绿天健食品', '20171222\\3536e0a326aa0455ca60c5b8d8ec39de.png', '食品官网设计', '1', '1513156934', '1513928123', '1', '5', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('15', '悦居家居', '20171222\\3dfbbf35f209eb4cc2d6a64eef8b8ac5.png', '家居企业网站设计', '1', '1513156960', '1513928132', '1', '5', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('20', 'Auall珠宝', '20171222\\3086cb5e13fe5e577354c544a9053b96.png', '珠宝品牌商城设计', '1', '1513941101', '1513941101', '1', '4', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('21', 'Bazaarl珠宝', '20171222\\6e83c643f1602aa22b9610032179b3ef.png', '珠宝品牌设计', '1', '1513941167', '1513941167', '1', '6', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('22', '林氏家居体验馆', '20171222\\a032213f2aca1e6fc807c02a435cf40b.png', '家居企业网站设计', '1', '1513941201', '1513941201', '1', '9', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('23', '服装品牌', '20171222\\dd2220f24e98cfcd8c61330842d3b8bf.png', '服装品牌商城设计', '1', '1513941230', '1513941230', '1', '7', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('24', '左岸', '20171222\\e26013a16614b98c665d2da1a8996e5a.png', '品牌商城设计', '1', '1513941265', '1513941265', '1', '8', '1', '', '', '', '', '', '', '');
INSERT INTO `think_product` VALUES ('25', '易民宿', '20171222\\97ba591f1d9a0a37332617f1a56abaec.png', '民宿官网设计', '1', '1513941293', '1513941293', '1', '10', '1', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for think_product_cate
-- ----------------------------
DROP TABLE IF EXISTS `think_product_cate`;
CREATE TABLE `think_product_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '标题',
  `status` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `orderby` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_product_cate
-- ----------------------------
INSERT INTO `think_product_cate` VALUES ('5', 'ALL', '1', '1513149214', '1513149214', '1');
INSERT INTO `think_product_cate` VALUES ('4', '网页设计', '1', '1513149202', '1513149202', '2');
INSERT INTO `think_product_cate` VALUES ('6', 'UI设计', '1', '1513149223', '1513149223', '3');
INSERT INTO `think_product_cate` VALUES ('7', '平面设计', '1', '1513149235', '1513149235', '4');
INSERT INTO `think_product_cate` VALUES ('8', '网站建设', '1', '1513149245', '1513149245', '5');
INSERT INTO `think_product_cate` VALUES ('9', '购物商城', '1', '1513149258', '1513149258', '6');
INSERT INTO `think_product_cate` VALUES ('10', '微信开发', '1', '1513149270', '1513149270', '7');

-- ----------------------------
-- Table structure for think_talents
-- ----------------------------
DROP TABLE IF EXISTS `think_talents`;
CREATE TABLE `think_talents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `orderby` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_talents
-- ----------------------------
INSERT INTO `think_talents` VALUES ('8', '岑双华', '1514010041', '1514010041', '50', '1');
INSERT INTO `think_talents` VALUES ('7', '田静', '1514010031', '1514010031', '50', '1');
INSERT INTO `think_talents` VALUES ('9', '何莉', '1514010050', '1514010050', '50', '1');
INSERT INTO `think_talents` VALUES ('10', '李佳乐', '1514010060', '1514010060', '50', '1');
INSERT INTO `think_talents` VALUES ('11', '何迪', '1514010069', '1514010069', '50', '1');

-- ----------------------------
-- Table structure for think_talents_opus
-- ----------------------------
DROP TABLE IF EXISTS `think_talents_opus`;
CREATE TABLE `think_talents_opus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `writer` int(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `views` int(50) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `is_tui` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_talents_opus
-- ----------------------------
INSERT INTO `think_talents_opus` VALUES ('11', '资深网页设计师', '7', '资深网页设计师', '◆ 10年大学设计专业毕业\n\n◆ 会各种设计软件，更是PS熟练程度达到90%，AI熟练度80%\n\n◆ 会手写代码HTML+css和JS的效果修改等\n\n◆ 对设计有浓郁的爱好和设计制作能力，可敏锐发觉现在社会的设计流行趋势，观擦设业的社会发展。', '20171223\\9c47a7b5796c7efbebeeb1ab3eaf3fd7.png', '', '1', '1514010151', '1514010151', '1', '1');
INSERT INTO `think_talents_opus` VALUES ('12', '前端工程师', '8', '前端工程师', '十年工作经验。\n\n精通数据库技术、软件过程理论与研究、软件测试、面相对象方法研究.java、jsp、ssh、ajax、dwr、javascript、j2EE企业级架构、服务器集群、WebLogic中间件。', '20171223\\2f1d9e1a1081d0cb5eb0dfc34e14aca7.png', '', '1', '1514010179', '1514010179', '1', '1');
INSERT INTO `think_talents_opus` VALUES ('13', 'UI设计师', '9', 'UI设计师', '掌握前端开发的知识，以及Photoshop、图形设计以及代码编写的能力。设计理念强，在产品功能和视觉元素间能满足产品的功能需求。', '20171223\\e365c5cc030cdbf5dfa494d89683cf19.png', '', '1', '1514010214', '1514010214', '1', '1');
INSERT INTO `think_talents_opus` VALUES ('14', '平面设计师', '10', '平面设计师', '计算机相关专业毕业， 在J2EE体系结构使用SpringMVC、mybatis、Hibernate等开源框架 ,对MySQL,SQLServer等数据库性能和系统性能优化。', '20171223\\34dd05cb7422004711a4ae3511aa288e.png', '', '1', '1514010241', '1514010241', '1', '1');
INSERT INTO `think_talents_opus` VALUES ('15', 'Java工程师', '11', 'Java工程师', '从事java开发10多年，精通java基础、javaweb、javaservice，java中间件开发\n\n精通mybaties,freemark,activities,shiro等。对缓存、优化、并发、大数据、集群，搜索引擎有深入研究。', '20171223\\e00c64378a79114f846debe933fc2cbf.png', '', '1', '1514010272', '1514010272', '1', '1');

-- ----------------------------
-- Table structure for think_user
-- ----------------------------
DROP TABLE IF EXISTS `think_user`;
CREATE TABLE `think_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(20) DEFAULT NULL COMMENT '认证的手机号码',
  `nickname` varchar(32) DEFAULT NULL COMMENT '昵称',
  `password` char(32) DEFAULT NULL,
  `head_img` varchar(255) DEFAULT NULL COMMENT '头像',
  `status` tinyint(1) DEFAULT NULL COMMENT '1激活  0 未激活',
  `token` varchar(255) DEFAULT '0' COMMENT '令牌',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_user
-- ----------------------------
INSERT INTO `think_user` VALUES ('1', '18693281982', '田建龙', 'e10adc3949ba59abbe56e057f20f883e', 'http://123.56.237.22:8888/group1/M00/00/08/ezjtFlj4IHyAcjlzAABDms0T3Kk671.jpg', '1', 'LWBYIiLWinNiulNXYD1UzGgfynNx+gy/zmq5Ega0E0we4a0WyB8UaG4x+VKRoc9CG4e1BXrqZww=');
INSERT INTO `think_user` VALUES ('2', '18993075721', '账号1', 'e10adc3949ba59abbe56e057f20f883e', 'http://opgkfon0o.bkt.clouddn.com/108.png', '1', 'VslU7gKYuddZFPq4ssWLZCNYBsi3YQIicyG1jm5pUfvZHI4qw03b3A2sygA4efLyWHRkYBQX8LAscwsA7sLzhg==');
INSERT INTO `think_user` VALUES ('3', '15095340657', '呼丽华', 'e10adc3949ba59abbe56e057f20f883e', 'http://123.56.237.22:8888/group1/M00/00/00/ezjtFliGwvWAaYeXAABu1D1rZNo655.jpg', '1', '2d8471d156a9e6db155145571cedea5a');
