CREATE DATABASE IF NOT EXISTS `rent`;

USE `rent`;

-- 管理员表
DROP TABLE IF EXISTS `rent_admin`;
CREATE TABLE `rent_admin`(
`id` tinyint unsigned auto_increment KEY ,
`username` VARCHAR(20) NOT NULL UNIQUE ,
`password` VARCHAR(32) NOT NULL ,
`email` VARCHAR(50) NOT NULL
);

-- 分类表
-- DROP TABLE IF EXISTS `imooc_cate`;
-- CREATE TABLE `imooc_cate`(
-- `id` SMALLINT unsigned auto_increment KEY ,
-- `cName` VARCHAR(50) UNIQUE
-- );

-- 商品表
-- DROP TABLE IF EXISTS `imooc_pro`;
-- CREATE TABLE `imooc_pro`(
-- `id` INT unsigned auto_increment KEY ,
-- `pName` VARCHAR(50) NOT  NULL UNIQUE ,
-- `pSn` VARCHAR(50) NOT NULL ,
-- `pNum` INT unsigned DEFAULT 1,
-- `mPrice` DECIMAL(10,2) NOT NULL ,
-- `iPrice` DECIMAL(10,2) NOT NULL ,
-- `pDes` TEXT ,
-- `pImg` VARCHAR(50) NOT NULL ,
-- `pubTime` INT unsigned NOT NULL ,
-- `isShow` tinyint(1) DEFAULT 1,
-- `isHot` tinyint(1) DEFAULT 0,
-- `cId` SMALLINT unsigned NOT  NULL
-- );

-- 用户表
DROP TABLE IF EXISTS `rent_user`;
CREATE TABLE `rent_user`(
`id` INT unsigned auto_increment KEY ,
`username` VARCHAR(20) NOT  NULL UNIQUE ,
`password` CHAR(32) NOT NULL ,
`sex` enum('男','女','保密') NOT NULL DEFAULT '保密',
`regTime` INT unsigned NOT NULL,
`phone` VARCHAR(12) NOT NULL ,
`photoPath` VARCHAR(50)  NOT NULL
);

-- 相册表
-- DROP TABLE IF EXISTS `imooc_album`;
-- CREATE TABLE `imooc_album`(
-- `id` INT unsigned auto_increment KEY ,
-- `pid` INT unsigned NOT NULL ,
-- `albumPath` VARCHAR(50) NOT NULL
-- );