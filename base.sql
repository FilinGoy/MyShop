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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Супер','2023-06-07 14:14:45','2023-06-07 14:14:45'),(2,'Вкуснишка','2023-06-07 14:14:45','2023-06-07 14:14:45'),(3,'Лакомка','2023-06-07 14:14:45','2023-06-07 14:14:45'),(4,'Желейка','2023-06-07 14:14:45','2023-06-07 14:14:45'),(5,'Машуля','2023-06-07 14:14:45','2023-06-07 14:14:45'),(6,'Swetty','2023-06-07 14:14:45','2023-06-07 14:14:45'),(7,'Luxure','2023-06-07 14:14:45','2023-06-07 14:14:45'),(8,'Марс','2023-06-07 14:14:45','2023-06-07 14:14:45'),(9,'LikeTea','2023-06-07 14:14:45','2023-06-07 14:14:45'),(10,'Lexono','2023-06-07 14:14:45','2023-06-07 14:14:45'),(11,'Наша семья','2023-06-07 14:14:45','2023-06-07 14:14:45'),(12,'Мельниковыч','2023-06-07 14:14:45','2023-06-07 14:14:45'),(13,'Кислинки','2023-06-07 14:14:45','2023-06-07 14:14:45'),(14,'Шипучки','2023-06-07 14:14:45','2023-06-07 14:14:45'),(15,'Соник Бемби','2023-06-07 14:14:45','2023-06-07 14:14:45');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Вафли','2023-06-07 14:14:45','2023-06-07 14:14:45'),(2,'Печенье','2023-06-07 14:14:45','2023-06-07 14:14:45'),(3,'Крекер','2023-06-07 14:14:45','2023-06-07 14:14:45'),(4,'Сухие завтраки','2023-06-07 14:14:45','2023-06-07 14:14:45'),(5,'Тараллини','2023-06-07 14:14:45','2023-06-07 14:14:45'),(6,'Пряники','2023-06-07 14:14:45','2023-06-07 14:14:45'),(7,'Круассаны','2023-06-07 14:14:45','2023-06-07 14:14:45'),(8,'Бисквиты, рулеты, кексы','2023-06-07 14:14:45','2023-06-07 14:14:45'),(9,'Конфеты','2023-06-07 14:14:45','2023-06-07 14:14:45'),(10,'Карамель','2023-06-07 14:14:45','2023-06-07 14:14:45'),(11,'Драже','2023-06-07 14:14:45','2023-06-07 14:14:45'),(12,'Шоколад','2023-06-07 14:14:45','2023-06-07 14:14:45'),(13,'Шоколадная и арахисовая паста','2023-06-07 14:14:45','2023-06-07 14:14:45'),(14,'Батончики','2023-06-07 14:14:45','2023-06-07 14:14:45'),(15,'Зефир, мармелад','2023-06-07 14:14:45','2023-06-07 14:14:45'),(16,'Халва, козинаки','2023-06-07 14:14:45','2023-06-07 14:14:45'),(17,'Сушеные фрукты','2023-06-07 14:14:45','2023-06-07 14:14:45'),(18,'Соки и нектары','2023-06-07 14:14:45','2023-06-07 14:14:45'),(19,'Чай','2023-06-07 14:14:45','2023-06-07 14:14:45'),(20,'Кофе, какао','2023-06-07 14:14:45','2023-06-07 14:14:45'),(21,'Жевательная резинка','2023-06-07 14:14:45','2023-06-07 14:14:45'),(22,'Ирис, гематоген','2023-06-07 14:14:45','2023-06-07 14:14:45'),(23,'Семечки','2023-06-07 14:14:45','2023-06-07 14:14:45'),(24,'Сухарики и гренки','2023-06-07 14:14:45','2023-06-07 14:14:45'),(25,'Соусы, кетчупы, майонезы','2023-06-07 14:14:45','2023-06-07 14:14:45'),(26,'Чипсы и попкорн','2023-06-07 14:14:45','2023-06-07 14:14:45'),(27,'Орехи, мясо, рыба','2023-06-07 14:14:45','2023-06-07 14:14:45'),(28,'Макаронные изделия','2023-06-07 14:14:45','2023-06-07 14:14:45'),(29,'Консервация','2023-06-07 14:14:45','2023-06-07 14:14:45'),(30,'Оливковое масло, оливки, маслины','2023-06-07 14:14:45','2023-06-07 14:14:45'),(31,'Супы и бульоны','2023-06-07 14:14:45','2023-06-07 14:14:45'),(32,'Смеси для десертов, специи, приправы','2023-06-07 14:14:45','2023-06-07 14:14:45');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abbreviation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `country_name_unique` (`name`),
  UNIQUE KEY `country_abbreviation_unique` (`abbreviation`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (1,'Россия','RUS','2023-06-07 14:14:45','2023-06-07 14:14:45'),(2,'Казахстан','KAZ','2023-06-07 14:14:45','2023-06-07 14:14:45');
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manufacturers`
--

DROP TABLE IF EXISTS `manufacturers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `manufacturers_fk0` (`country_id`),
  CONSTRAINT `manufacturers_fk0` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacturers`
--

LOCK TABLES `manufacturers` WRITE;
/*!40000 ALTER TABLE `manufacturers` DISABLE KEYS */;
INSERT INTO `manufacturers` VALUES (1,'ООО \"Кондитер\"',1,'2023-06-07 14:14:45','2023-06-07 14:14:45'),(2,'ООО \"ВкусВилл\"',2,'2023-06-07 14:14:45','2023-06-07 14:14:45'),(3,'ООО \"ВкуныйДомик\"',2,'2023-06-07 14:14:45','2023-06-07 14:14:45'),(4,'ОАО \"Николевская фабрика\"',1,'2023-06-07 14:14:45','2023-06-07 14:14:45'),(5,'ОАО \"Сладкоежка\"',2,'2023-06-07 14:14:45','2023-06-07 14:14:45'),(6,'ИП \"Александров И.Н.\"',1,'2023-06-07 14:14:45','2023-06-07 14:14:45'),(7,'ИП \"Семенов Л.А.\"',1,'2023-06-07 14:14:45','2023-06-07 14:14:45');
/*!40000 ALTER TABLE `manufacturers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_05_12_060853_create_brands_table',1),(6,'2023_05_12_060853_create_categories_table',1),(7,'2023_05_12_060853_create_country_table',1),(8,'2023_05_12_060853_create_manufacturers_table',1),(9,'2023_05_12_060853_create_orders_products_table',1),(10,'2023_05_12_060853_create_orders_table',1),(11,'2023_05_12_060853_create_packaging_types_table',1),(12,'2023_05_12_060853_create_payment_types_table',1),(13,'2023_05_12_060853_create_positions_table',1),(14,'2023_05_12_060853_create_product_images_table',1),(15,'2023_05_12_060853_create_products_table',1),(16,'2023_05_12_060853_create_products_tags_table',1),(17,'2023_05_12_060853_create_reviews_table',1),(18,'2023_05_12_060853_create_statuses_table',1),(19,'2023_05_12_060853_create_tags_table',1),(20,'2023_05_12_060853_create_time_types_table',1),(21,'2023_05_12_060853_create_weight_types_table',1),(22,'2023_05_12_060856_add_foreign_keys_to_manufacturers_table',1),(23,'2023_05_12_060856_add_foreign_keys_to_orders_products_table',1),(24,'2023_05_12_060856_add_foreign_keys_to_orders_table',1),(25,'2023_05_12_060856_add_foreign_keys_to_product_images_table',1),(26,'2023_05_12_060856_add_foreign_keys_to_products_table',1),(27,'2023_05_12_060856_add_foreign_keys_to_products_tags_table',1),(28,'2023_05_12_060856_add_foreign_keys_to_reviews_table',1),(29,'2023_05_12_060856_add_foreign_keys_to_users_table',1),(30,'2023_05_14_111856_entering_data',1),(31,'2023_05_14_111856_entering_data copy',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `datetime_delivery` datetime DEFAULT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_fk0` (`user_id`),
  KEY `orders_fk1` (`status_id`),
  KEY `orders_fk2` (`payment_id`),
  CONSTRAINT `orders_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_fk1` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  CONSTRAINT `orders_fk2` FOREIGN KEY (`payment_id`) REFERENCES `payment_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_products`
--

DROP TABLE IF EXISTS `orders_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_products_fk0` (`product_id`),
  KEY `orders_products_fk1` (`order_id`),
  CONSTRAINT `orders_products_fk0` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_products_fk1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_products`
--

LOCK TABLES `orders_products` WRITE;
/*!40000 ALTER TABLE `orders_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packaging_types`
--

DROP TABLE IF EXISTS `packaging_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packaging_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packaging_types`
--

LOCK TABLES `packaging_types` WRITE;
/*!40000 ALTER TABLE `packaging_types` DISABLE KEYS */;
INSERT INTO `packaging_types` VALUES (1,'Фасованный','2023-06-07 14:14:45','2023-06-07 14:14:45'),(2,'Бумага','2023-06-07 14:14:45','2023-06-07 14:14:45'),(3,'Упаковка','2023-06-07 14:14:45','2023-06-07 14:14:45'),(4,'Плёнка','2023-06-07 14:14:45','2023-06-07 14:14:45'),(5,'Весовой','2023-06-07 14:14:45','2023-06-07 14:14:45');
/*!40000 ALTER TABLE `packaging_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_types`
--

DROP TABLE IF EXISTS `payment_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_types`
--

LOCK TABLES `payment_types` WRITE;
/*!40000 ALTER TABLE `payment_types` DISABLE KEYS */;
INSERT INTO `payment_types` VALUES (1,'Наличными средствами','2023-06-07 14:14:44','2023-06-07 14:14:44'),(2,'Банковской картой (при получении)','2023-06-07 14:14:44','2023-06-07 14:14:44'),(3,'Оплата онлайн','2023-06-07 14:14:44','2023-06-07 14:14:44');
/*!40000 ALTER TABLE `payment_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES (1,'Пользователь','2023-06-07 14:14:45','2023-06-07 14:14:45'),(2,'Администратор','2023-06-07 14:14:45','2023-06-07 14:14:45');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_fk0` (`product_id`),
  CONSTRAINT `product_images_fk0` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `products_tags`
--

DROP TABLE IF EXISTS `products_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_tags_fk0` (`product_id`),
  KEY `products_tags_fk1` (`tag_id`),
  CONSTRAINT `products_tags_fk0` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_tags_fk1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_tags`
--

LOCK TABLES `products_tags` WRITE;
/*!40000 ALTER TABLE `products_tags` DISABLE KEYS */;
INSERT INTO `products_tags` VALUES (1,2,2,'2023-06-07 21:44:18','2023-06-07 21:44:18'),(2,3,3,'2023-06-07 21:49:58','2023-06-07 21:49:58'),(3,3,4,'2023-06-07 21:49:58','2023-06-07 21:49:58'),(4,9,2,'2023-06-07 21:55:00','2023-06-07 21:55:00'),(5,9,4,'2023-06-07 21:55:00','2023-06-07 21:55:00'),(6,10,3,'2023-06-07 21:56:04','2023-06-07 21:56:04');
/*!40000 ALTER TABLE `products_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `rate` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_fk0` (`user_id`),
  KEY `reviews_fk1` (`product_id`),
  CONSTRAINT `reviews_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `reviews_fk1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` VALUES (1,'В обработке','2023-06-07 14:14:44','2023-06-07 14:14:44'),(2,'Ожидает подтверждения','2023-06-07 14:14:44','2023-06-07 14:14:44'),(3,'Новый','2023-06-07 14:14:44','2023-06-07 14:14:44'),(4,'Оплачен','2023-06-07 14:14:44','2023-06-07 14:14:44'),(5,'В доставке','2023-06-07 14:14:44','2023-06-07 14:14:44'),(6,'Выполнен','2023-06-07 14:14:44','2023-06-07 14:14:44'),(7,'Отменён','2023-06-07 14:14:44','2023-06-07 14:14:44'),(8,'Возврат','2023-06-07 14:14:44','2023-06-07 14:14:44'),(9,'Утерян','2023-06-07 14:14:44','2023-06-07 14:14:44'),(10,'Удалён','2023-06-07 14:14:44','2023-06-07 14:14:44');
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Скидка','2023-06-07 14:14:45','2023-06-07 14:14:45'),(2,'Акция','2023-06-07 14:14:45','2023-06-07 14:14:45'),(3,'Новинка','2023-06-07 14:14:45','2023-06-07 14:14:45'),(4,'Хит','2023-06-07 14:14:45','2023-06-07 14:14:45');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time_types`
--

DROP TABLE IF EXISTS `time_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `time_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time_types`
--

LOCK TABLES `time_types` WRITE;
/*!40000 ALTER TABLE `time_types` DISABLE KEYS */;
INSERT INTO `time_types` VALUES (1,'ч.','2023-06-07 14:14:45','2023-06-07 14:14:45'),(2,'дн.','2023-06-07 14:14:45','2023-06-07 14:14:45'),(3,'мес.','2023-06-07 14:14:45','2023-06-07 14:14:45'),(4,'г.','2023-06-07 14:14:45','2023-06-07 14:14:45');
/*!40000 ALTER TABLE `time_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_id` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_login_unique` (`login`),
  KEY `users_fk0` (`position_id`),
  CONSTRAINT `users_fk0` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'den_suvorov2003@mail.ru','zMrwuP','Денис','Суворов',NULL,NULL,2,NULL,'$2y$10$v95W6uafJ.I64y3Ysc9BYO7qhXUzdOO1dtEmOKOtV4IQ3/gqk1o/y',NULL,'2023-06-07 14:14:45','2023-06-07 14:14:45'),(2,'temp@mail.ru','test','Иван','Иванов',NULL,NULL,1,NULL,'$2y$10$eGyIL9CV4IxoxZmCM2SaheS2CgJQ8CT3C8JI/Pg9xhOmBMdcxF2QW',NULL,'2023-06-07 14:14:45','2023-06-07 14:14:45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `weight_types`
--

DROP TABLE IF EXISTS `weight_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `weight_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `weight_types`
--

LOCK TABLES `weight_types` WRITE;
/*!40000 ALTER TABLE `weight_types` DISABLE KEYS */;
INSERT INTO `weight_types` VALUES (1,'г','2023-06-07 14:14:45','2023-06-07 14:14:45'),(2,'кг','2023-06-07 14:14:45','2023-06-07 14:14:45');
/*!40000 ALTER TABLE `weight_types` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-08 21:14:32
