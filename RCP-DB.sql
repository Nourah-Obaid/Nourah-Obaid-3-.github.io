-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.13-log
-- Server OS:                    
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for RCP-DB
CREATE DATABASE IF NOT EXISTS `RCP-DB` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `RCP-DB`;

-- Dumping structure for table rcp.movement
CREATE TABLE IF NOT EXISTS `movement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forward` varchar(100) DEFAULT NULL,
  `backward` varchar(100) DEFAULT NULL,
  `right` varchar(100) DEFAULT NULL,
  `left` varchar(100) DEFAULT NULL,
  `stop` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table rcp.movement: ~8 rows (approximately)
/*!40000 ALTER TABLE `movement` DISABLE KEYS */;
INSERT INTO `movement` (`id`, `forward`, `backward`, `right`, `left`, `stop`) VALUES
	(1, 'Forward', NULL, NULL, NULL, NULL),
	(2, NULL, 'Backward', NULL, NULL, NULL),
	(3, NULL, NULL, NULL, NULL, 'Stop'),
	(4, NULL, NULL, 'Right', NULL, NULL),
	(5, NULL, NULL, NULL, 'Left', NULL),
	(6, NULL, 'Backward', NULL, NULL, NULL),
	(7, 'Forward', NULL, NULL, NULL, NULL),
	(8, NULL, NULL, NULL, NULL, 'Stop');
/*!40000 ALTER TABLE `movement` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
