-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Mar 2018, 17:27:12
-- Sunucu sürümü: 10.1.28-MariaDB
-- PHP Sürümü: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dershaneotomasyonu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `deneme`
--

CREATE TABLE `deneme` (
  `id` int(11) NOT NULL,
  `yayin` varchar(20) NOT NULL,
  `yapilacak_tarih` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `deneme`
--

INSERT INTO `deneme` (`id`, `yayin`, `yapilacak_tarih`, `updated_at`, `created_at`) VALUES
(1, 'kavram', '2017-12-21', '2017-12-07 18:04:54', '2017-12-07 18:04:54'),
(2, 'final', '2017-12-19', '2017-12-07 18:38:55', '2017-12-07 18:38:55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dershanegenelbilgi`
--

CREATE TABLE `dershanegenelbilgi` (
  `kayitliogrencisayisi` int(11) NOT NULL,
  `calisansayisi` int(11) NOT NULL,
  `aylikgelir` int(11) NOT NULL,
  `aylikgider` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersprogrami`
--

CREATE TABLE `dersprogrami` (
  `id` int(11) NOT NULL,
  `ptesi` varchar(11) NOT NULL,
  `sali` varchar(11) NOT NULL,
  `carsamba` varchar(11) NOT NULL,
  `persembe` varchar(11) NOT NULL,
  `cuma` varchar(11) NOT NULL,
  `ctesi` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `dersprogrami`
--

INSERT INTO `dersprogrami` (`id`, `ptesi`, `sali`, `carsamba`, `persembe`, `cuma`, `ctesi`, `created_at`, `updated_at`) VALUES
(1, 'fizik', 'matematik', 'matematik', 'matematik', 'matematik', 'matematik', '2017-12-07 20:01:04', '2017-12-07 18:01:04'),
(2, 'fizik', 'matematik', 'matematik', 'matematik', 'matematik', 'matematik', '2017-12-07 20:01:04', '2017-12-07 18:01:04'),
(3, 'matematik', 'matematik', 'matematik', 'matematik', 'matematik', 'matematik', '2017-12-07 20:01:04', '2017-12-07 18:01:04'),
(4, 'fizik', 'matematik', 'matematik', 'matematik', 'matematik', 'matematik', '2017-12-07 20:01:04', '2017-12-07 18:01:04'),
(5, 'fizik', 'matematik', 'matematik', 'matematik', 'matematik', 'matematik', '2017-12-07 20:01:04', '2017-12-07 18:01:04'),
(6, 'fizik', 'matematik', 'matematik', 'matematik', 'matematik', 'matematik', '2017-12-07 20:01:05', '2017-12-07 18:01:05'),
(7, 'matematik', 'matematik', 'matematik', 'matematik', 'matematik', 'matematik', '2017-12-07 20:01:05', '2017-12-07 18:01:05'),
(8, 'matematik', 'matematik', 'matematik', 'matematik', 'matematik', 'matematik', '2017-12-07 20:01:05', '2017-12-07 18:01:05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE `ogrenci` (
  `id` int(11) NOT NULL,
  `tc` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kulaniciadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `alan` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `personel_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`id`, `tc`, `adi`, `soyadi`, `telefon`, `adres`, `kulaniciadi`, `sifre`, `alan`, `personel_id`, `updated_at`, `created_at`) VALUES
(1, '36847231420', 'ibrahim', 'dogan', '05392417145', 'diyarbakir', '1', '111111', 'eşitağırlık', 1, '2017-12-07 17:37:32', '2017-12-07 17:37:32'),
(2, '36847131421', 'nafiz', 'yakar', '05392417145', 'van', '2', '111111', 'sayısal', 1, '2017-12-07 17:38:49', '2017-12-07 17:38:49'),
(4, '36847314202', 'ahmet', 'dogan', '05392417145', 'diyarbakir', '12', '121212', 'eşitağırlık', 1, '2017-12-07 19:58:15', '2017-12-07 19:58:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci_deneme`
--

CREATE TABLE `ogrenci_deneme` (
  `id` int(11) NOT NULL,
  `deneme_id` int(11) NOT NULL,
  `ogrenci_id` int(11) DEFAULT NULL,
  `puan` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ogrenci_deneme`
--

INSERT INTO `ogrenci_deneme` (`id`, `deneme_id`, `ogrenci_id`, `puan`, `updated_at`, `created_at`) VALUES
(9, 1, 2, 120, '2017-12-08 08:38:01', '2017-12-08 08:38:01'),
(10, 2, 4, 345, '2017-12-08 08:38:09', '2017-12-08 08:38:09'),
(11, 2, 4, 120, '2017-12-08 09:48:07', '2017-12-08 09:48:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretmen_ders`
--

CREATE TABLE `ogretmen_ders` (
  `id` int(11) NOT NULL,
  `ogretmen_id` int(11) NOT NULL,
  `dersadi` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ogretmen_ders`
--

INSERT INTO `ogretmen_ders` (`id`, `ogretmen_id`, `dersadi`, `updated_at`, `created_at`) VALUES
(1, 1, 'matematik', '2017-12-07 17:35:33', '2017-12-07 17:35:33'),
(2, 2, 'fizik', '2017-12-07 17:36:46', '2017-12-07 17:36:46'),
(3, 3, 'matematik', '2017-12-07 18:37:46', '2017-12-07 18:37:46');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretmen_ogrenci`
--

CREATE TABLE `ogretmen_ogrenci` (
  `id` int(11) NOT NULL,
  `ogretmen_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ogrenci_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ogretmen_ogrenci`
--

INSERT INTO `ogretmen_ogrenci` (`id`, `ogretmen_id`, `created_at`, `updated_at`, `ogrenci_id`) VALUES
(1, 1, '2017-12-07 17:37:32', '2017-12-07 17:37:32', 1),
(2, 1, '2017-12-07 17:38:49', '2017-12-07 17:38:49', 2),
(3, 2, '2017-12-07 17:40:02', '2017-12-07 17:40:02', 3),
(4, 1, '2017-12-07 19:58:15', '2017-12-07 19:58:15', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretmen_ogrenci_deneme`
--

CREATE TABLE `ogretmen_ogrenci_deneme` (
  `id` int(11) NOT NULL,
  `ogretmen_id` int(11) NOT NULL,
  `ogrenci_id` int(11) NOT NULL,
  `deneme_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ogretmen_ogrenci_deneme`
--

INSERT INTO `ogretmen_ogrenci_deneme` (`id`, `ogretmen_id`, `ogrenci_id`, `deneme_id`, `updated_at`, `created_at`) VALUES
(1, 2, 2, 1, '2017-12-07 18:22:39', '2017-12-07 18:22:39'),
(2, 2, 2, 1, '2017-12-07 18:26:32', '2017-12-07 18:26:32'),
(3, 2, 2, 1, '2017-12-07 18:28:59', '2017-12-07 18:28:59'),
(4, 2, 2, 1, '2017-12-07 18:29:36', '2017-12-07 18:29:36'),
(5, 2, 2, 1, '2017-12-07 18:29:52', '2017-12-07 18:29:52'),
(6, 2, 2, 1, '2017-12-07 18:31:36', '2017-12-07 18:31:36'),
(7, 2, 2, 1, '2017-12-07 18:32:57', '2017-12-07 18:32:57'),
(8, 2, 2, 1, '2017-12-07 18:39:46', '2017-12-07 18:39:46'),
(9, 1, 2, 1, '2017-12-08 08:38:01', '2017-12-08 08:38:01'),
(10, 1, 4, 2, '2017-12-08 08:38:10', '2017-12-08 08:38:10'),
(11, 1, 4, 2, '2017-12-08 09:48:07', '2017-12-08 09:48:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

CREATE TABLE `personel` (
  `id` int(11) NOT NULL,
  `tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kulaniciadi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `brans` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `maas` int(11) NOT NULL,
  `adi` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `soyadi` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yonetici_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`id`, `tc`, `kulaniciadi`, `sifre`, `brans`, `maas`, `adi`, `soyadi`, `yonetici_id`, `updated_at`, `created_at`, `adres`, `telefon`) VALUES
(1, '36847231420', '1', 'ibrahim', 'matematik', 2500, 'ibrahim', 'dogan', 1, '2017-12-07 17:35:33', '2017-12-07 17:35:33', 'diyarbakir cinar, diyarbakir cinar', '05392417145'),
(2, '36847131420', '2', '111111', 'fizik', 2500, 'nafiz', 'yakar', 2, '2017-12-07 17:36:46', '2017-12-07 17:36:46', 'van', '05392417145'),
(3, '36847314200', '15', '123456', 'matematik', 2500, 'veysi', 'taş', 2, '2017-12-07 18:37:46', '2017-12-07 18:37:46', 'diyarbakir cinar, diyarbakir cinar', '05392417145');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL,
  `kulaniciadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(555) COLLATE utf8_turkish_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`id`, `kulaniciadi`, `sifre`, `adi`, `soyadi`, `updated_at`, `created_at`) VALUES
(1, '1', '111111', 'ibrahim', 'doğan', '2017-12-08 08:33:04', '0000-00-00 00:00:00'),
(2, 'nafiz1', '111111', 'nafiz', 'yakar', '2017-12-07 17:34:06', '2017-12-07 17:34:06'),
(3, 'nfz123', '123456', 'nafiz', 'yakar', '2017-12-08 09:44:55', '2017-12-08 09:44:55');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `deneme`
--
ALTER TABLE `deneme`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `dersprogrami`
--
ALTER TABLE `dersprogrami`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ogrenci`
--
ALTER TABLE `ogrenci`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ogrenci_deneme`
--
ALTER TABLE `ogrenci_deneme`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ogretmen_ders`
--
ALTER TABLE `ogretmen_ders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ogretmen_ogrenci`
--
ALTER TABLE `ogretmen_ogrenci`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ogretmen_ogrenci_deneme`
--
ALTER TABLE `ogretmen_ogrenci_deneme`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `deneme`
--
ALTER TABLE `deneme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `dersprogrami`
--
ALTER TABLE `dersprogrami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `ogrenci`
--
ALTER TABLE `ogrenci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `ogrenci_deneme`
--
ALTER TABLE `ogrenci_deneme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `ogretmen_ders`
--
ALTER TABLE `ogretmen_ders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `ogretmen_ogrenci`
--
ALTER TABLE `ogretmen_ogrenci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `ogretmen_ogrenci_deneme`
--
ALTER TABLE `ogretmen_ogrenci_deneme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `personel`
--
ALTER TABLE `personel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
