/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_sekolah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sekolah` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_sekolah`;

/*Table structure for table `detail_penilaian` */

DROP TABLE IF EXISTS `detail_penilaian`;

CREATE TABLE `detail_penilaian` (
  `id_penilaian` int(3) DEFAULT NULL,
  `id_mapel` int(3) DEFAULT NULL,
  `nilai` int(3) DEFAULT NULL,
  KEY `id_penilaian` (`id_penilaian`),
  KEY `id_mapel` (`id_mapel`),
  CONSTRAINT `detail_penilaian_ibfk_1` FOREIGN KEY (`id_penilaian`) REFERENCES `penilaian` (`id_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detail_penilaian_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_penilaian` */

/*Table structure for table `detail_tugas` */

DROP TABLE IF EXISTS `detail_tugas`;

CREATE TABLE `detail_tugas` (
  `id_tugas` int(3) DEFAULT NULL,
  `nis` varchar(8) DEFAULT NULL,
  `submit` enum('YA','TIDAK') DEFAULT NULL,
  KEY `id_tugas` (`id_tugas`),
  KEY `nis` (`nis`),
  CONSTRAINT `detail_tugas_ibfk_1` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id_tugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detail_tugas_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_tugas` */

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `nip` varchar(8) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `guru` */

insert  into `guru`(`nip`,`nama`,`alamat`,`email`,`username`,`password`) values 
('20222222','Wawan','Jl. Soreang','wawan@gmail.com','wawan','wawan'),
('20222223','Sutisna','Jl. Sangkuriang','sutisna@gmail.com','sutisna','sutisna'),
('20222224','Yani','Jl. Dago','yani@gmail.com','yani','yani'),
('20222225','Fitri','Jl. Cisitu','fitri@gmail.com','fitri','fitri');

/*Table structure for table `jadwal_pelajaran` */

DROP TABLE IF EXISTS `jadwal_pelajaran`;

CREATE TABLE `jadwal_pelajaran` (
  `id_jadwal` int(5) NOT NULL AUTO_INCREMENT,
  `waktu` varchar(100) DEFAULT NULL,
  `id_kelas` int(3) DEFAULT NULL,
  `id_mapel` int(3) DEFAULT NULL,
  `nip` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `id_kelas` (`id_kelas`),
  KEY `id_mapel` (`id_mapel`),
  KEY `jadwal_pelajaran_ibfk_3` (`nip`),
  CONSTRAINT `jadwal_pelajaran_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `jadwal_pelajaran_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `jadwal_pelajaran_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jadwal_pelajaran` */

insert  into `jadwal_pelajaran`(`id_jadwal`,`waktu`,`id_kelas`,`id_mapel`,`nip`) values 
(18,'Senin(00:00)',4,9,'20222224'),
(19,'Senin(00:00)',4,12,'20222225'),
(20,'Senin(00:00)',4,8,'20222222'),
(21,'Senin(00:00)',4,10,'20222222');

/*Table structure for table `kehadiran` */

DROP TABLE IF EXISTS `kehadiran`;

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_jadwal` int(5) DEFAULT NULL,
  `pertemuan_ke` int(3) DEFAULT NULL,
  `keterangan` enum('HADIR','IZIN','ALPHA') DEFAULT NULL,
  `nis` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_kehadiran`),
  KEY `id_jadwal` (`id_jadwal`),
  KEY `nis` (`nis`),
  CONSTRAINT `kehadiran_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_pelajaran` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `kehadiran_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kehadiran` */

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id_kelas` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `nip` (`nip`),
  CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kelas` */

insert  into `kelas`(`id_kelas`,`nama`,`nip`) values 
(4,'12C','20222222'),
(6,'12B','20222223'),
(11,'12A','20222222'),
(13,'10A','20222223'),
(14,'11A','20222225');

/*Table structure for table `mapel` */

DROP TABLE IF EXISTS `mapel`;

CREATE TABLE `mapel` (
  `id_mapel` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mapel` */

insert  into `mapel`(`id_mapel`,`nama`) values 
(1,'Matematika'),
(8,'B. Indonesia'),
(9,'Biologi'),
(10,'Fisika'),
(12,'Sejarah'),
(15,'Ekonomi'),
(16,'B. Inggris'),
(17,'Kimia');

/*Table structure for table `penilaian` */

DROP TABLE IF EXISTS `penilaian`;

CREATE TABLE `penilaian` (
  `id_penilaian` int(3) NOT NULL AUTO_INCREMENT,
  `kelas` int(3) DEFAULT NULL,
  `nis` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_penilaian`),
  KEY `nis` (`nis`),
  KEY `id_kelas` (`kelas`),
  CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `penilaian` */

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `nis` varchar(8) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `id_kelas` int(3) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nis`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `siswa` */

/*Table structure for table `tugas` */

DROP TABLE IF EXISTS `tugas`;

CREATE TABLE `tugas` (
  `id_tugas` int(3) NOT NULL AUTO_INCREMENT,
  `materi` varchar(255) NOT NULL,
  `rincian` varchar(500) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_mapel` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_tugas`),
  KEY `id_mapel` (`id_mapel`),
  CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tugas` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
