/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.1.39-MariaDB : Database - mvp_kids
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mvp_kids` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mvp_kids`;

/*Table structure for table `admin_acc` */

DROP TABLE IF EXISTS `admin_acc`;

CREATE TABLE `admin_acc` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) CHARACTER SET latin1 NOT NULL,
  `apellido1` varchar(30) CHARACTER SET latin1 NOT NULL,
  `apellido2` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(35) CHARACTER SET latin1 NOT NULL,
  `tel` varchar(11) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `admin_acc` */

insert  into `admin_acc`(`id`,`nombre`,`apellido1`,`apellido2`,`email`,`pass`,`tel`) values 
(1,'Gabriel','Ferrer','Torres','gabriel.ferrer1@upr.edu','3769','7879008282'),
(3,'John','Snow','Nothing','wolf@gmail.com','33rrHHa','1112223333'),
(4,'Ryan','Goose','','dd@gmail.com','vvB99','4542221111');

/*Table structure for table `encargado` */

DROP TABLE IF EXISTS `encargado`;

CREATE TABLE `encargado` (
  `p_id` int(3) NOT NULL AUTO_INCREMENT,
  `p_nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `p_apellido1` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `p_apellido2` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `grado_esc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `p_img` text COLLATE utf8_spanish_ci,
  `p_dir_fis` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `p_postal` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `encargado` */

insert  into `encargado`(`p_id`,`p_nombre`,`p_apellido1`,`p_apellido2`,`email`,`tel`,`grado_esc`,`p_img`,`p_dir_fis`,`p_postal`) values 
(1,'Alejandro','Santos','Nieves','don@gmail.com','9996663333','Bachillerato',NULL,'',''),
(3,'Billie','Ree','Williams','qa@gmail.com','','Bachi',NULL,'',''),
(4,'Don','Dee','Williams','qa@gmail.com','3032225555','Ba',NULL,'Man','13Street'),
(5,'Don','Dee','Williams','qa@gmail.com','3032225555','Ba',NULL,'Man','13Street'),
(6,'Don','Dee','Williams','qa@gmail.com','3032225555','Ba',NULL,'Man','13Street'),
(7,'Don','Dee','Williams','qa@gmail.com','3032225555','Ba',NULL,'Man','13Street'),
(8,'Don','Dee','Williams','qa@gmail.com','3032225555','Ba',NULL,'Man','13Street'),
(9,'Gus','Dolta','Cierre','qa@gmail.com','4445552222','Ba',NULL,'Damn','13Street'),
(10,'Wand','Cosmo','Suav','qa@gmail.com','4445552222','Grad',NULL,'Damn','13Street'),
(11,'GUS','Dam','Zax','qa@gmail.com','1112224444','Ba',NULL,'Fisca','Xax'),
(12,'Wanda','Suav','Fill','qa@gmail.com','1112224444','Grad',NULL,'Fisca','Xax'),
(13,'Do','Not','Dare','qa@gmail.com','3032225555','Bachillerato',NULL,'Hell','Down'),
(14,'Winry','Lo','La','qa@gmail.com','3032225555','Grad',NULL,'Hell','Down'),
(15,'Mario','Mario','Mush','mario@gmail.com','6662228888','Grad',NULL,'Kill','Coin'),
(16,'Mario','Dolta','Cool','gg@gmail.com','2023331111','Bachi',NULL,'Damn','Down'),
(17,'Doodman','Giga','Suav','gg@gmail.com','3032225555','Bachillerato',NULL,'Fisca','13Street'),
(18,'Don','Dam','Cierre','gg@gmail.com','4445552222','Bachillerato',NULL,'Damn','13Street'),
(19,'Juan','Acevedo','','aixa.ramirez@upr.edu','7873859197','12',NULL,'Arecibo','13Street'),
(20,'Aixa','Ramirez','','aixa.ramirez@upr.edu','7873859197','Maestria',NULL,'Arecibo','13Street');

/*Table structure for table `estudiante` */

DROP TABLE IF EXISTS `estudiante`;

CREATE TABLE `estudiante` (
  `e_id` int(3) NOT NULL AUTO_INCREMENT,
  `e_nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `e_apellido1` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `e_apellido2` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `parent_id` int(3) DEFAULT NULL,
  `edad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `img` text COLLATE utf8_spanish_ci,
  `genero` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `f_nacimiento` date NOT NULL,
  `escuela` varchar(75) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`e_id`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `matricula` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `estudiante` */

insert  into `estudiante`(`e_id`,`e_nombre`,`e_apellido1`,`e_apellido2`,`parent_id`,`edad`,`img`,`genero`,`grado`,`f_nacimiento`,`escuela`) values 
(1,'Juan','Santos','Guz',1,'7',NULL,'M','1','2013-05-01','Montessori'),
(2,'P','Ree','Wee',NULL,'8',NULL,'M','3','2023-01-01','Hi'),
(3,'P','Ree','Wee',NULL,'8',NULL,'M','3','2023-01-01','Hi'),
(4,'P','Ree','Wee',NULL,'8',NULL,'M','3','2023-01-01','Hi'),
(5,'P','Ree','Wee',NULL,'8',NULL,'M','3','2023-01-01','Hi'),
(6,'P','Ree','Wee',NULL,'8',NULL,'M','3','2023-01-01','Hi'),
(7,'Gag','Ma','Da',NULL,'7',NULL,'F','2','2020-05-05','Fergus'),
(8,'Gag','Ma','Da',NULL,'7',NULL,'F','2','2020-05-05','Fergus'),
(9,'Gag','Ma','Da',NULL,'7',NULL,'M','3','2013-04-28','Fergus'),
(10,'Gag','Ma','Da',NULL,'7',NULL,'M','3','2013-04-28','Fergus'),
(11,'Gag','Ma','Da',NULL,'7',NULL,'M','3','2013-04-28','Fergus'),
(12,'Johnny','Dam','Suav',NULL,'10',NULL,'M','4','2010-02-28','Win'),
(13,'Ferb','Dalt','Marty',NULL,'16',NULL,'M','1','2003-06-03','Wan'),
(14,'Bowser','Jr','Jr',NULL,'11',NULL,'M','4','2009-05-07','Fire'),
(15,'Vivi','Alba','Suav',NULL,'12',NULL,'F','6','2008-10-29','Win'),
(16,'Bob','Giga','Mega',NULL,'9',NULL,'M','3','2010-03-28','Ree'),
(17,'Sabi','Ree','Wee',NULL,'7',NULL,'M','3','2013-12-30','Wan'),
(18,'David','Acevedo','Ramirez',NULL,'17',NULL,'M','1','1993-10-28','Colegio San Felipe ');

/*Table structure for table `matricula` */

DROP TABLE IF EXISTS `matricula`;

CREATE TABLE `matricula` (
  `m_id` int(3) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `student_name` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `grade` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `dias_clases` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `programa` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `plan_medico` text COLLATE utf8_spanish_ci NOT NULL,
  `u_id` int(4) NOT NULL,
  `e_id` int(3) NOT NULL,
  `p_id` int(3) NOT NULL,
  `status` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `u_id` (`u_id`),
  KEY `e_id` (`e_id`),
  KEY `p_id` (`p_id`),
  CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`usuario_ID`),
  CONSTRAINT `matricula_ibfk_3` FOREIGN KEY (`p_id`) REFERENCES `encargado` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `matricula` */

insert  into `matricula`(`m_id`,`p_name`,`student_name`,`email`,`grade`,`dias_clases`,`programa`,`plan_medico`,`u_id`,`e_id`,`p_id`,`status`) values 
(1,'Alejandro','Juan','don@gmail.com','1','Lunes a Viernes','Visual','',5,1,1,'complete'),
(5,'John','Matt','qa@gmail.com','3','L-Mi','Audio','',4,13,12,'complete'),
(9,'Do','Ferb','qa@gmail.com','12','L-V','oral','Elysium.jpg',4,14,13,'pendiente'),
(10,'Mario','Bowser','mario@gmail.com','4','M&Mi','oral','fire_landscape.jpg',6,15,14,'pendiente'),
(13,'Mario','Vivi','gg@gmail.com','6','L-Mi','visual','Asig_4_1.pdf',7,0,16,'pendiente'),
(14,'Doodman','Bob','gg@gmail.com','3','L-V','oral','Autorizacion de Pago.pdf',7,0,17,'pendiente'),
(15,'Don','Sabi','gg@gmail.com','3','M-J','visual','beca_viejo.txt',7,17,18,'pendiente'),
(16,'Juan','David','aixa.ramirez@upr.edu','11','L-V','audicion','Autorizacion de Pago.pdf',8,18,20,'pendiente');

/*Table structure for table `payment_method` */

DROP TABLE IF EXISTS `payment_method`;

CREATE TABLE `payment_method` (
  `u_ID` int(3) NOT NULL,
  `payment_ID` int(3) NOT NULL AUTO_INCREMENT,
  `card_name` varchar(100) NOT NULL,
  `card_number` varchar(24) NOT NULL,
  `exp_date` text NOT NULL,
  `security_code` int(3) NOT NULL,
  PRIMARY KEY (`payment_ID`),
  UNIQUE KEY `u_ID` (`u_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `payment_method` */

insert  into `payment_method`(`u_ID`,`payment_ID`,`card_name`,`card_number`,`exp_date`,`security_code`) values 
(5,9,'Visa','','2024-05-06',0),
(4,49,'Visa2','2222222222222','2024-06-19',111),
(6,52,'1_UP','1111222233334444','2012-01-01',111),
(7,53,'Sassy','5555444466665555','2023-07-31',333),
(8,56,'MasterCard','111122223333444','2023-02-02',111);

/*Table structure for table `programas` */

DROP TABLE IF EXISTS `programas`;

CREATE TABLE `programas` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `class` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `programas` */

insert  into `programas`(`id`,`class`) values 
(1,'Auditiva'),
(2,'Oral'),
(3,'Visual'),
(4,'Escritura');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `usuario_ID` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir_fisica` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `postal` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`usuario_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `user` */

insert  into `user`(`usuario_ID`,`username`,`email`,`pass`,`tel`,`dir_fisica`,`postal`) values 
(1,'','','rev88TT','5558229999',NULL,NULL),
(2,'Ton','sr@gmail.com','rey88TT','5558227777',NULL,NULL),
(3,'Ray','rr@gmail.com','swa55RR','3039116666',NULL,NULL),
(4,'Wario15','qa@gmail.com','1111','',NULL,NULL),
(5,'The_Don','don@gmail.com','2222','7879996666','Madeup_Street','312222'),
(6,'Mario','mario@gmail.com','1111','7871015555','Good Street','Good'),
(7,'Cusko','gg@gmail.com','1234','2023331111','Madeup_Street','Col'),
(8,'axramirez','aixa.ramirez@upr.edu','1234','6068881212','Madeup_Street','PO Box 2424 Arecibo, P.R. 00613');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
