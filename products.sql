-- MariaDB dump 10.19  Distrib 10.6.7-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: myshop
-- ------------------------------------------------------
-- Server version	10.6.7-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `expiration_date` int(11) DEFAULT NULL,
  `expiration_type_id` int(11) DEFAULT NULL,
  `article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packaging_id` int(11) DEFAULT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `weight_type_id` int(11) DEFAULT NULL,
  `calorie` int(11) DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `preview_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_fk0` (`category_id`),
  KEY `products_fk1` (`brand_id`),
  KEY `products_fk2` (`manufacturer_id`),
  KEY `products_fk3` (`expiration_type_id`),
  KEY `products_fk4` (`packaging_id`),
  KEY `products_fk5` (`weight_type_id`),
  CONSTRAINT `products_fk0` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `products_fk1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  CONSTRAINT `products_fk2` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturers` (`id`),
  CONSTRAINT `products_fk3` FOREIGN KEY (`expiration_type_id`) REFERENCES `time_types` (`id`),
  CONSTRAINT `products_fk4` FOREIGN KEY (`packaging_id`) REFERENCES `packaging_types` (`id`),
  CONSTRAINT `products_fk5` FOREIGN KEY (`weight_type_id`) REFERENCES `weight_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Трубочки вафельные с ананасовым кремом (коробка 2 кг)',1,NULL,3,3,3,'АБВ143',5,'сахар, какао масло, масла растительные, мука пшеничная, кокосовая стружка(содержит консервант: диоксид серы); молоко сухое цельное, сыворотка молочная сухая, мальтодекстрин, пермеат молочный сухой (лактоза, молочный белок, минеральные вещества); лактоза, порошок фруктово-ягодный: ананас (сухие вещества ананаса, мальтодекстрин); эмульгаторы: лецитины соевые, Е476; продукты яичные, масло подсолнечное (содержит антиокислитель: Е319); соль, ароматизаторы, регулятор кислотности; лимонная кислота. Может содержать следы арахиса, орехов.',100,1,560,1000,870.50,'<p><span style=\"color: rgb(0, 0, 0); font-family: Commissioner, Arial, sans-serif; font-size: 14px; letter-spacing: 0.1px; white-space: pre-line;\">Хрустящие трубочки с ананасовым кремом, в стружке спелой мякоти отборного кокоса.\r\n\r\n– С натуральным ананасом.\r\n\r\n– Двойной слой белого шоколада</span><br></p>',1,'images/products/fi7od0CeDeUeewVztmwzFQvw6sw9VTuKMM0ODvNN.webp','2023-06-07 14:14:45','2023-06-07 21:48:20'),(2,'Рулетики вафельные с шоколадным вкусом (коробка 2,5 кг)',1,NULL,2,NULL,NULL,NULL,NULL,'-',NULL,NULL,NULL,4565234,670.50,NULL,1,'images/products/sX8LBl3n7dnBrStnNcKWGK77enrfbfyFfDVphbcP.webp','2023-06-07 21:37:37','2023-06-07 21:49:09'),(3,'Трубочки вафельные в белой глазури с кокосом (коробка 2 кг)',1,NULL,1,NULL,NULL,NULL,NULL,'-',NULL,NULL,NULL,234231,234.23,NULL,1,'images/products/zXKUHH35AmTyE9pToHJJbmdHq7TfOkBKq02lB8Ht.webp','2023-06-07 21:38:06','2023-06-07 21:49:58'),(4,'Вафли «Сливочные», 200 г',1,NULL,1,NULL,NULL,NULL,NULL,'-',NULL,NULL,NULL,234,234.23,NULL,1,'images/products/LWPuTbDOYYZmkiFQZKT5Neoo6a61GqIv31Go4XVn.webp','2023-06-07 21:38:29','2023-06-07 21:51:24'),(5,'Вафли «Николаевская белочка», 200 г',1,NULL,1,NULL,NULL,NULL,NULL,'-',NULL,NULL,NULL,1332,123.12,NULL,1,'images/products/jD7iYvqNn6XJK3y7l28cGDycTt6VjtngGgC8wTuO.webp','2023-06-07 21:38:54','2023-06-07 21:52:17'),(6,'Вафли «Зебра», 200 г',1,NULL,2,NULL,NULL,NULL,NULL,'-',NULL,NULL,NULL,123123,1233.12,NULL,1,'images/products/ZlrDRhUFBXftPxhI0Mfl5Yte8wK7HHafUI31MGFB.webp','2023-06-07 21:39:32','2023-06-07 21:53:05'),(7,'Вафли с халвой, 200 г',1,NULL,4,NULL,NULL,NULL,NULL,'-',NULL,NULL,NULL,234,344.23,NULL,1,'images/products/7pTttPdIZedjV8sSSR9ETyDc6f7XqRsP9XkPKTj9.webp','2023-06-07 21:40:26','2023-06-07 21:53:43'),(8,'Вафли «Лимон-лайм», 200 г',1,NULL,3,NULL,NULL,NULL,NULL,'-',NULL,NULL,NULL,1233,234.13,NULL,1,'images/products/8XuWVNcLAueXlFCULi82v5OK8yxYVZCD68kM8NKW.webp','2023-06-07 21:40:56','2023-06-07 21:54:08'),(9,'Вафли в карамели, в молочно-шоколадной глазури (коробка 2 кг)',1,NULL,4,NULL,NULL,NULL,NULL,'-',NULL,NULL,NULL,23423,1235.43,NULL,1,'images/products/n9PHt5E7u4CmHjjMLfp9eSyrlkxlGh2P82EtKTjm.webp','2023-06-07 21:55:00','2023-06-07 21:55:15'),(10,'Вафли с изюмом и арахисом, в молочном шоколаде (коробка 2 кг)',1,NULL,3,NULL,NULL,NULL,NULL,'-',NULL,NULL,NULL,23423,657.23,NULL,1,'images/products/AZzSqTfHDc4sWth32obzx9ZKv4C2Yu9TJ9HsG4ff.webp','2023-06-07 21:56:04','2023-06-07 21:56:17'),(11,'Мини-пай голландский яблочный (коробка 1,08 кг)',2,NULL,4,NULL,NULL,NULL,NULL,'-',NULL,NULL,NULL,0,123.56,NULL,1,'images/products/9pVJof4pGireofyIngvZRLB2eAHooJng99fim8UF.webp','2023-06-07 21:57:23','2023-06-07 21:57:46');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-08 11:21:48
