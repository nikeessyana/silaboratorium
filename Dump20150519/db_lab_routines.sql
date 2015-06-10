CREATE DATABASE  IF NOT EXISTS `db_lab` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_lab`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: db_lab
-- ------------------------------------------------------
-- Server version	5.1.41

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary table structure for view `service`
--

DROP TABLE IF EXISTS `service`;
/*!50001 DROP VIEW IF EXISTS `service`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `service` (
  `id_kerusakan` int(11),
  `jenis_aset` varchar(20),
  `tempat_service` varchar(50),
  `jenis_kerusakan` varchar(25),
  `tgl_service` date
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `pendataan`
--

DROP TABLE IF EXISTS `pendataan`;
/*!50001 DROP VIEW IF EXISTS `pendataan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `pendataan` (
  `nama_pegawai` varchar(25),
  `jenis_aset` varchar(20),
  `id_dtl_aset` int(11),
  `nama_aset` varchar(20),
  `no_seri` int(11),
  `merk` varchar(20),
  `sumber_dana` varchar(20),
  `qty` int(4),
  `spec` varchar(50),
  `waktu_pendataan` datetime
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `denda`
--

DROP TABLE IF EXISTS `denda`;
/*!50001 DROP VIEW IF EXISTS `denda`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `denda` (
  `id_pengguna` int(11),
  `username` varchar(25),
  `id_aset` int(11),
  `waktu_pinjam` date,
  `waktu_kembali` date,
  `waktu_kemballi1` date,
  `denda` bigint(17)
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `lamapinjam`
--

DROP TABLE IF EXISTS `lamapinjam`;
/*!50001 DROP VIEW IF EXISTS `lamapinjam`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `lamapinjam` (
  `id_pengguna` int(11),
  `username` varchar(25),
  `id_aset` int(11),
  `waktu_pinjam` date,
  `waktu_kembali` date,
  `lamapinjam` int(7)
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `booking_lab`
--

DROP TABLE IF EXISTS `booking_lab`;
/*!50001 DROP VIEW IF EXISTS `booking_lab`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `booking_lab` (
  `id_pengguna` int(11),
  `username` varchar(25),
  `ruang` varchar(20),
  `nama_lab` varchar(30),
  `waktu_masuk` datetime,
  `waktu_keluar` datetime
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `service`
--

/*!50001 DROP TABLE IF EXISTS `service`*/;
/*!50001 DROP VIEW IF EXISTS `service`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `service` AS select `k`.`id_kerusakan` AS `id_kerusakan`,`a`.`jenis_aset` AS `jenis_aset`,`p`.`tempat_service` AS `tempat_service`,`k`.`jenis_kerusakan` AS `jenis_kerusakan`,`p`.`tgl_service` AS `tgl_service` from ((`aset` `a` join `perbaikan` `p` on((`a`.`id_aset` = `p`.`id_aset`))) join `kerusakan` `k` on((`k`.`id_kerusakan` = `p`.`id_kerusakan`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pendataan`
--

/*!50001 DROP TABLE IF EXISTS `pendataan`*/;
/*!50001 DROP VIEW IF EXISTS `pendataan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `pendataan` AS select `p`.`nama_pegawai` AS `nama_pegawai`,`a`.`jenis_aset` AS `jenis_aset`,`d`.`id_dtl_aset` AS `id_dtl_aset`,`d`.`nama_aset` AS `nama_aset`,`d`.`no_seri` AS `no_seri`,`d`.`merk` AS `merk`,`d`.`sumber_dana` AS `sumber_dana`,`d`.`qty` AS `qty`,`d`.`spec` AS `spec`,`i`.`waktu_pendataan` AS `waktu_pendataan` from (((`pegawai` `p` join `inventaris` `i` on((`i`.`id_pegawai` = `p`.`id_pegawai`))) join `aset` `a` on((`a`.`id_aset` = `i`.`id_aset`))) join `detail_aset` `d` on((`a`.`id_aset` = `d`.`id_aset`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `denda`
--

/*!50001 DROP TABLE IF EXISTS `denda`*/;
/*!50001 DROP VIEW IF EXISTS `denda`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `denda` AS select `p`.`id_pengguna` AS `id_pengguna`,`p`.`username` AS `username`,`t`.`id_aset` AS `id_aset`,`j`.`waktu_pinjam` AS `waktu_pinjam`,`j`.`waktu_kembali` AS `waktu_kembali`,`j`.`waktu_kemballi1` AS `waktu_kemballi1`,(((to_days(`j`.`waktu_kemballi1`) - to_days(`j`.`waktu_pinjam`)) - `l`.`lamapinjam`) * 10000) AS `denda` from (((`pengguna` `p` join `peminjaman` `j` on((`p`.`id_pengguna` = `j`.`id_pengguna`))) join `aset` `t` on((`t`.`id_aset` = `j`.`id_aset`))) join `lamapinjam` `l` on((`l`.`id_pengguna` = `p`.`id_pengguna`))) where (`p`.`id_pengguna` = `j`.`id_pengguna`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `lamapinjam`
--

/*!50001 DROP TABLE IF EXISTS `lamapinjam`*/;
/*!50001 DROP VIEW IF EXISTS `lamapinjam`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `lamapinjam` AS select `p`.`id_pengguna` AS `id_pengguna`,`p`.`username` AS `username`,`t`.`id_aset` AS `id_aset`,`j`.`waktu_pinjam` AS `waktu_pinjam`,`j`.`waktu_kembali` AS `waktu_kembali`,(to_days(`j`.`waktu_kembali`) - to_days(`j`.`waktu_pinjam`)) AS `lamapinjam` from ((`pengguna` `p` join `peminjaman` `j` on((`p`.`id_pengguna` = `j`.`id_pengguna`))) join `aset` `t` on((`t`.`id_aset` = `j`.`id_aset`))) where (`p`.`id_pengguna` = `j`.`id_pengguna`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `booking_lab`
--

/*!50001 DROP TABLE IF EXISTS `booking_lab`*/;
/*!50001 DROP VIEW IF EXISTS `booking_lab`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `booking_lab` AS select `p`.`id_pengguna` AS `id_pengguna`,`p`.`username` AS `username`,`l`.`ruang` AS `ruang`,`l`.`nama_lab` AS `nama_lab`,`j`.`waktu_masuk` AS `waktu_masuk`,`j`.`waktu_keluar` AS `waktu_keluar` from ((`pengguna` `p` join `jadwal` `j` on((`p`.`id_pengguna` = `j`.`id_pengguna`))) join `laboratorium` `l` on((`l`.`ruang` = `j`.`id_lab`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-19 15:46:01
