-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 15 Nis 2024, 11:36:39
-- Sunucu sürümü: 5.7.15-log
-- PHP Sürümü: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `arac_kiralama_a`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_araclar`
--

CREATE TABLE `tbl_araclar` (
  `arac_id` int(11) NOT NULL,
  `marka` varchar(40) CHARACTER SET utf8 NOT NULL,
  `model` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `model_yili` smallint(6) DEFAULT NULL,
  `vites` varchar(15) CHARACTER SET utf8 DEFAULT 'Otomatik',
  `yakit` varchar(10) CHARACTER SET utf8 DEFAULT 'Benzin',
  `fiyat` double DEFAULT NULL,
  `musait_mi` varchar(1) CHARACTER SET utf8 DEFAULT 'E',
  `resim_var_mi` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT 'H'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `tbl_araclar`
--

INSERT INTO `tbl_araclar` (`arac_id`, `marka`, `model`, `model_yili`, `vites`, `yakit`, `fiyat`, `musait_mi`, `resim_var_mi`) VALUES
(1, 'Ford', 'Focus', 2020, 'Otomatik', 'Benzin', 2000, 'E', 'E'),
(2, 'Peugeot', '508', 2016, 'Manuel', 'Dizel', 2500, 'E', 'E'),
(3, 'Ford', 'Mustang Dark Horse', 2024, 'Manuel', '', 20000, 'H', 'E'),
(4, 'BMW', 'M5 Competition', 2022, 'Otomatik', '', 14000, 'E', 'E'),
(5, 'Hyundai', 'Tuscon', 2021, 'Otomatik', '', 2500, 'E', 'E'),
(7, 'Fiat', 'Tipo 1.6 ie', 1999, 'Manuel', 'LPG', 1000, 'E', 'E');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_araclar`
--
ALTER TABLE `tbl_araclar`
  ADD PRIMARY KEY (`arac_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_araclar`
--
ALTER TABLE `tbl_araclar`
  MODIFY `arac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
