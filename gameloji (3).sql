-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Şub 2023, 00:31:28
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gameloji`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `site_logo` varchar(400) NOT NULL,
  `site_baslik` varchar(350) NOT NULL,
  `site_aciklama` varchar(300) NOT NULL,
  `site_link` varchar(100) NOT NULL,
  `site_sahip_mail` varchar(100) NOT NULL,
  `site_mail_host` varchar(100) NOT NULL,
  `site_mail_mail` varchar(100) NOT NULL,
  `site_mail_port` int(11) NOT NULL,
  `site_mail_sifre` varchar(100) NOT NULL,
  `site_konum` varchar(300) NOT NULL,
  `site_telefon` varchar(300) NOT NULL,
  `footer_aciklama` text NOT NULL,
  `site_facebook` varchar(300) NOT NULL,
  `site_twitter` varchar(300) NOT NULL,
  `site_linkedin` varchar(300) NOT NULL,
  `site_instagram` varchar(300) NOT NULL,
  `site_tanim` text NOT NULL,
  `site_keywords` text NOT NULL,
  `site_yazari` text NOT NULL,
  `site_harita` varchar(500) NOT NULL,
  `github` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `site_logo`, `site_baslik`, `site_aciklama`, `site_link`, `site_sahip_mail`, `site_mail_host`, `site_mail_mail`, `site_mail_port`, `site_mail_sifre`, `site_konum`, `site_telefon`, `footer_aciklama`, `site_facebook`, `site_twitter`, `site_linkedin`, `site_instagram`, `site_tanim`, `site_keywords`, `site_yazari`, `site_harita`, `github`) VALUES
(1, 'gameloji.png', 'Gameoloji', 'Gameoloji', 'https://gameoloji.com', 'info@gameloji.com', '0000', 'info@gameloji.com', 587, '0000', '', '', 'developer by yigithangumus', '', '', 'https://www.linkedin.com/in/yiğithan-gümüş-b66060228/', 'https://www.instagram.com/yigithangumus/', 'Gameoloji', 'Gameoloji', 'Yiğithan Gümüş, Eren Ekmekçi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d689.3615574683113!2d29.00415461867526!3d41.09049294701649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab67c9b8edd33%3A0x16c28d62c35e3e99!2zU2FuYXlpLCBTdWx0YW4gU2VsaW0gQ2QuLCAzNDQxNSBLw6LEn8SxdGhhbmUvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1676849004723!5m2!1str!2str', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_img` varchar(300) NOT NULL,
  `blog_header` varchar(60) NOT NULL,
  `blog_text` text NOT NULL,
  `blog_date` date NOT NULL DEFAULT current_timestamp(),
  `blog_author` varchar(50) NOT NULL,
  `blog_seo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `mail` varchar(300) NOT NULL,
  `business` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `project` varchar(300) NOT NULL,
  `tel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `name`, `mail`, `business`, `message`, `project`, `tel`) VALUES
(6, 'asdsad', 'yigithangumuss@gmail.com', 'asdsadas', 'asdasdasdsa', 'SEO', 'asdasd'),
(7, 'asdsad', 'yigithangumuss@gmail.com', 'asdsadas', 'asdasdasdsa', 'SEO', 'asdasd'),
(8, 'asdsad', 'yigithangumuss@gmail.com', 'asdsadas', 'asdasdasdsa', 'SEO', 'asdasd'),
(9, 'asdsad', 'yigithangumuss@gmail.com', 'asdsadas', 'asdasdasdsa', 'SEO', 'asdasd'),
(10, 'asdsadasd', 'yigithangumuss@gmail.com', 'asdsadas', 'asdasdasdsaasd', 'SEO', 'asdasd'),
(11, 'asdsadasd', 'yigithangumuss@gmail.com', 'asdsadas', 'asdasdasdsaasd', 'SEO', 'asdasd'),
(12, 'asdsadasd', 'yigithangumuss@gmail.com', 'asdsadas', 'asdasdasdsaasd', 'SEO', 'asdasd'),
(13, 'asdsadasd', 'yigithangumuss@gmail.com', 'asdsadas', 'asdasdasdsaasd', 'SEO', 'asdasd'),
(14, 'dsadasd', 'yigithangumuss@gmail.com', 'dsadas', 'asdasdasd', 'Mobil Uygulama Yapımı', 'asdas'),
(15, 'Yiğithan Gümüş', 'gooodlordtr@gmail.com', 'asdsadas', 'asdasdasdasdasdas', '', 'asdasd'),
(16, 'Yiğithan Gümüş', 'yigithangumuss@gmail.com', 'a', 'a', '', 'asdasd'),
(17, 'Yiğithan Gümüş', 'yigithangumuss@gmail.com', 'a', 'asdasddsas', '', 'asdasd'),
(18, 'Yiğithan Gümüş', 'yigithangumuss@gmail.com', 'a', 'asdasdasdasdsa', '', 'asdasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kul_id` int(11) NOT NULL,
  `kul_isim` varchar(100) NOT NULL,
  `kul_mail` varchar(300) NOT NULL,
  `kul_ad` varchar(100) NOT NULL,
  `kul_sifre` varchar(300) NOT NULL,
  `kul_yetki` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_id`, `kul_isim`, `kul_mail`, `kul_ad`, `kul_sifre`, `kul_yetki`) VALUES
(2, 'Admin', 'admin@gameloji.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `gamestext` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `play_link` varchar(300) NOT NULL,
  `app_link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `project`
--

INSERT INTO `project` (`id`, `title`, `gamestext`, `image`, `play_link`, `app_link`) VALUES
(9, 'Egg It Up', '<p>Egg it up ile metroda, parkta, kafede, evde tek başınıza veya arkadaşlarınızla asla sıkılmayacaksınız.</p>\r\n', '434052egg.png', 'https://play.google.com/store/apps/details?id=com.gameoloji.eggitup2&hl=tr&gl=US', 'https://apps.apple.com/tr/app/eggitup/id1660051577?l=tr'),
(10, 'Numberbang', '<p>Numberbang ile metroda, parkta, kafede, evde tek başınıza veya arkadaşlarınızla asla sıkılmayacaksınız.</p>\r\n', '651356numberbang.png', 'https://play.google.com/store/apps/details?id=com.gameoloji.numberbang2&hl=tr&gl=US', 'https://apps.apple.com/tr/app/numberbang/id1660232236?l=tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(60) NOT NULL,
  `slider_text` varchar(300) NOT NULL,
  `slider_img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_text`, `slider_img`) VALUES
(1, 'aaa aaa', '<p>dfgfdgdfgdf</p>\r\n', '619970Ezmt1ApXEAQtbgE.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kul_id`);

--
-- Tablo için indeksler `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
