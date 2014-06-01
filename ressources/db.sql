--
-- Database: `formulator-devkit`
--
CREATE DATABASE IF NOT EXISTS `formulator-devkit` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `formulator-devkit`;

-- --------------------------------------------------------

--
-- Table structure for table `all_data_types`
--

CREATE TABLE IF NOT EXISTS `all_data_types` (
  `type_varchar` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Earth',
  `type_tinyint` tinyint(4) NOT NULL,
  `type_text` text COLLATE utf8_unicode_ci NOT NULL,
  `type_date` date NOT NULL,
  `type_smallint` smallint(6) NOT NULL,
  `type_mediumint` mediumint(9) NOT NULL,
  `type_int` int(11) NOT NULL,
  `type_bigint` bigint(20) NOT NULL,
  `type_float` float(10,2) NOT NULL,
  `type_double` double NOT NULL,
  `type_decimal` decimal(10,2) NOT NULL,
  `type_datetime` datetime NOT NULL,
  `type_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type_time` time NOT NULL,
  `type_year` year(4) NOT NULL,
  `type_char` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `type_tinyblob` tinyblob NOT NULL,
  `type_tinytext` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `type_blob` blob NOT NULL,
  `type_mediumblob` mediumblob NOT NULL,
  `type_mediumtext` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `type_longblob` longblob NOT NULL,
  `type_longtext` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type_enum` enum('1','2','3') COLLATE utf8_unicode_ci NOT NULL,
  `type_set` set('1','2','3') COLLATE utf8_unicode_ci NOT NULL,
  `type_bool` tinyint(1) NOT NULL,
  `type_binary` binary(20) NOT NULL,
  `type_varbinary` varbinary(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empty`
--

CREATE TABLE IF NOT EXISTS `empty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empty_names` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `moons`
--

CREATE TABLE IF NOT EXISTS `moons` (
  `planet` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`planet`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `moons`
--

INSERT INTO `moons` (`planet`, `name`) VALUES
(1, 'Moon'),
(2, 'Deimos'),
(2, 'Phobos');

-- --------------------------------------------------------

--
-- Table structure for table `planets`
--

CREATE TABLE IF NOT EXISTS `planets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) unsigned NOT NULL,
  `last_seen` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `planets`
--

INSERT INTO `planets` (`id`, `name`, `age`, `last_seen`) VALUES
(1, 'Earth', 4540, '2014-06-01'),
(2, 'Mars', 4500, '2014-04-08');
