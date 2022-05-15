-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: psexpressdb
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `en_banner_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_banner_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_banner_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_banner_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_banner_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_banner_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_banner_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_banner_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_banner_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_banner_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_banner_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_banner_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fr_brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carousels`
--

DROP TABLE IF EXISTS `carousels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carousels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fr_carousel_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_carousel_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_carousel_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_carousel_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_carousel_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_carousel_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_carousel_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_carousel_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_carousel_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_carousel_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_carousel_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_carousel_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carousels`
--

LOCK TABLES `carousels` WRITE;
/*!40000 ALTER TABLE `carousels` DISABLE KEYS */;
/*!40000 ALTER TABLE `carousels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fr_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fa-brands fa-app-store-ios',
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_category_slug_unique` (`category_slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorystocks`
--

DROP TABLE IF EXISTS `categorystocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorystocks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_stock_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_stock_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categorystocks_category_stock_slug_unique` (`category_stock_slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorystocks`
--

LOCK TABLES `categorystocks` WRITE;
/*!40000 ALTER TABLE `categorystocks` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorystocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fr_color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentproducts`
--

DROP TABLE IF EXISTS `commentproducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commentproducts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `product_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `ratingproduct_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentproducts`
--

LOCK TABLES `commentproducts` WRITE;
/*!40000 ALTER TABLE `commentproducts` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentproducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentsellers`
--

DROP TABLE IF EXISTS `commentsellers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commentsellers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `seller_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentsellers`
--

LOCK TABLES `commentsellers` WRITE;
/*!40000 ALTER TABLE `commentsellers` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentsellers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compaign_product`
--

DROP TABLE IF EXISTS `compaign_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compaign_product` (
  `compaign_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`compaign_id`,`product_id`),
  KEY `compaign_product_product_id_foreign` (`product_id`),
  CONSTRAINT `compaign_product_compaign_id_foreign` FOREIGN KEY (`compaign_id`) REFERENCES `compaigns` (`id`) ON DELETE CASCADE,
  CONSTRAINT `compaign_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compaign_product`
--

LOCK TABLES `compaign_product` WRITE;
/*!40000 ALTER TABLE `compaign_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `compaign_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compaigns`
--

DROP TABLE IF EXISTS `compaigns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compaigns` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compaigns`
--

LOCK TABLES `compaigns` WRITE;
/*!40000 ALTER TABLE `compaigns` DISABLE KEYS */;
/*!40000 ALTER TABLE `compaigns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coupons` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `reduction_rate` decimal(4,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupons`
--

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ctas`
--

DROP TABLE IF EXISTS `ctas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ctas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fr_cta_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_cta_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_cta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_fr_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_cta_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_cta_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_cta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_cta_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_cta_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_cta_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_cta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_cta_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ctas`
--

LOCK TABLES `ctas` WRITE;
/*!40000 ALTER TABLE `ctas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ctas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `currencies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_in_dollar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `currencies_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currencies`
--

LOCK TABLES `currencies` WRITE;
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;
/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deliveries`
--

DROP TABLE IF EXISTS `deliveries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deliveries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `truck_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deliveries`
--

LOCK TABLES `deliveries` WRITE;
/*!40000 ALTER TABLE `deliveries` DISABLE KEYS */;
/*!40000 ALTER TABLE `deliveries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dimensions`
--

DROP TABLE IF EXISTS `dimensions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dimensions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fr_dimension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_dimension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_dimension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dimensions`
--

LOCK TABLES `dimensions` WRITE;
/*!40000 ALTER TABLE `dimensions` DISABLE KEYS */;
/*!40000 ALTER TABLE `dimensions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `rate` decimal(4,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees`
--

LOCK TABLES `fees` WRITE;
/*!40000 ALTER TABLE `fees` DISABLE KEYS */;
/*!40000 ALTER TABLE `fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(6,'2016_06_01_000004_create_oauth_clients_table',1),(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(8,'2019_08_19_000000_create_failed_jobs_table',1),(9,'2019_12_14_000001_create_personal_access_tokens_table',1),(10,'2022_02_11_043623_create_categorystocks_table',1),(11,'2022_02_12_005435_create_stocks_table',1),(12,'2022_02_12_005518_create_fees_table',1),(13,'2022_02_12_005535_create_categories_table',1),(14,'2022_02_12_005549_create_subcategories_table',1),(15,'2022_02_12_005604_create_taxes_table',1),(16,'2022_02_12_005652_create_products_table',1),(17,'2022_02_12_005703_create_photos_table',1),(18,'2022_02_12_005741_create_commentproducts_table',1),(19,'2022_02_12_005753_create_commentsellers_table',1),(20,'2022_02_12_005817_create_orders_table',1),(21,'2022_02_12_005831_create_orderitems_table',1),(22,'2022_02_12_005852_create_coupons_table',1),(23,'2022_02_18_062027_create_substocks_table',1),(24,'2022_02_20_103712_create_shops_table',1),(25,'2022_02_20_104205_create_permissions_table',1),(26,'2022_02_20_112137_create_permission_user_table',1),(27,'2022_02_20_124524_create_notifications_table',1),(28,'2022_02_21_132632_create_compaigns_table',1),(29,'2022_02_21_133542_create_compaign_product_table',1),(30,'2022_02_21_134608_create_ctas_table',1),(31,'2022_02_21_151438_create_carousels_table',1),(32,'2022_02_21_151451_create_banners_table',1),(33,'2022_02_22_140646_create_currencies_table',1),(34,'2022_02_22_142338_create_sessions_table',1),(35,'2022_02_23_100903_create_ratingproducts_table',1),(36,'2022_02_23_100934_create_ratingsellers_table',1),(37,'2022_02_26_082842_create_wishlists_table',1),(38,'2022_03_07_010248_create_themes_table',1),(39,'2022_03_07_011202_create_deliveries_table',1),(40,'2022_03_07_060908_create_shippings_table',1),(41,'2022_03_15_074325_create_cache_table',1),(42,'2022_03_22_013734_create_jobs_table',1),(43,'2022_04_18_062107_create_brands_table',1),(44,'2022_04_18_062118_create_colors_table',1),(45,'2022_04_18_062140_create_dimensions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `client_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT INTO `oauth_access_tokens` VALUES ('00ae4390cfc3aa96b27eccbb8eb5219062a0e28e45f1c804d0fbcc58bd4d65a838628cd5e58f68d8',3,1,'authToken','[]',0,'2022-04-20 10:39:27','2022-04-20 10:39:27','2023-04-20 11:39:27'),('00f3121e13323ccefce9b7d8d94f4e1424893dc7574551d139b46d684ab8c3fa4329817e601b4e7c',4,1,'authToken','[]',0,'2022-04-26 17:00:03','2022-04-26 17:00:03','2023-04-26 18:00:03'),('0135f4aab91885ef5d4594a705eaec65c2150ddf6d92fd86bcec28875f8c18b932a48e09d8927ae6',4,1,'authToken','[]',0,'2022-04-20 11:03:39','2022-04-20 11:03:39','2023-04-20 12:03:39'),('0afa74ae327e5aa05cb1c826bea55dfacc681a116f7d64259dd32a09e5a4e5600b2fe65249fc9874',4,1,'admin-authToken','[]',0,'2022-04-26 19:37:16','2022-04-26 19:37:16','2023-04-26 20:37:16'),('0f55c383c4fbc83e2fd1d6552df0bc4e2b8a08dc45b715f1fa9ad381a5078d40454f4b77370e6ab3',4,1,'admin-authToken','[]',0,'2022-04-26 16:27:44','2022-04-26 16:27:44','2023-04-26 17:27:44'),('12c7b00342f28a5ca59cdfce25f1298c88de1320409fb876e7376c041fa9faf340fe7339d59ab495',4,1,'authToken','[]',0,'2022-04-24 14:54:41','2022-04-24 14:54:41','2023-04-24 15:54:41'),('191f854e8e81c823cd258de85fe99f238d65acb4d8c71e416f3d46bbd3fb3bbe5fd5f04698236570',4,1,'admin-authToken','[]',0,'2022-04-26 16:38:08','2022-04-26 16:38:08','2023-04-26 17:38:08'),('1e57dfde6090e4b7868e829902a8c487e84046b3baae83b40ee332fe2e0f38c89dd918413885de71',4,1,'authToken','[]',0,'2022-04-24 07:33:17','2022-04-24 07:33:17','2023-04-24 08:33:17'),('24a9b8c6636933b7e7258eb617982ee3df36b581b6b048eb089d05be362746447e1096f942d77ba3',3,1,'authToken','[]',0,'2022-04-20 09:45:09','2022-04-20 09:45:09','2023-04-20 10:45:09'),('28866423d4f993ec339d69533d093a334d711e8e3a3c0d1bf7d16809cd75edb13f845b4c9416b6b1',4,1,'authToken','[]',0,'2022-04-24 07:32:51','2022-04-24 07:32:51','2023-04-24 08:32:51'),('2c02503fe754bdd4386635f0d2f3c3d80d864350253d6366cd63294487b3a5854236a0126a74662e',4,1,'authToken','[]',0,'2022-05-01 15:37:48','2022-05-01 15:37:48','2023-05-01 16:37:48'),('2c0dfb9e9864f4e528450c0f46933f41cf018779c939a00a2389783eb4d08e413c16a43eb03b7f69',4,1,'authToken','[]',0,'2022-05-14 17:34:42','2022-05-14 17:34:42','2023-05-14 18:34:42'),('2e3c1b1e170fc3c899c9d0e965fe22352b03ad9e3905ab664450c7350ffc069d5ef53cc419d482c5',3,1,'authToken','[]',0,'2022-04-20 10:50:43','2022-04-20 10:50:43','2023-04-20 11:50:43'),('3096c9ba480b4bd3b71d4bf5c8b67d6ec9354aadcb2e2a568c1b39ff7051672ed5ba30d0677dd927',4,1,'authToken','[]',0,'2022-05-03 10:36:31','2022-05-03 10:36:31','2023-05-03 11:36:31'),('30da0e662b5a7685acabc6b83ea495a96459a6ca9a8d42c8e18ad1e9b53d8094ec55ee13491a09ec',3,1,'authToken','[]',0,'2022-04-20 09:46:00','2022-04-20 09:46:00','2023-04-20 10:46:00'),('3217c2df12b2b69f84fc954d9631f9dc9036ff6c1aab752907042884c832c27d9f4f7432907ca715',4,1,'admin-authToken','[]',0,'2022-04-26 16:27:45','2022-04-26 16:27:45','2023-04-26 17:27:45'),('32b73d31ac3b9da4de714ad32f69f8215233acba0e5eb108fb7c6b575d7915547005aef600ede816',4,1,'authToken','[]',0,'2022-05-10 21:19:22','2022-05-10 21:19:22','2023-05-10 22:19:22'),('377be61e59f37ad5c59ffe4bacc05981ec9bee41986fc185744a52a16c0f30f036ca782613dce0f6',4,1,'authToken','[]',0,'2022-05-02 18:11:05','2022-05-02 18:11:05','2023-05-02 19:11:05'),('3e09e0969770a427ca36efc94b3f44c48d09fe89d85e4084024a5e97f60f3269f6515e0397ab428f',4,1,'admin-authToken','[]',0,'2022-04-26 19:37:16','2022-04-26 19:37:16','2023-04-26 20:37:16'),('3e9f6521f5f2e8fa466239faca2315f6db5f6bf7ec8a6b45d7ec604cc7d1943bf6807ce6f93f2280',4,1,'admin-authToken','[]',0,'2022-04-26 16:37:22','2022-04-26 16:37:22','2023-04-26 17:37:22'),('582e65e54a157631840d664c968ecb0f519697eff71f03cbcb8de7b6db967e8f692f86022d57bf68',4,1,'authToken','[]',0,'2022-05-04 00:15:48','2022-05-04 00:15:48','2023-05-04 01:15:48'),('5fe07f27b8fb98c96527bbae59f14bd0815c965bdd549b67c2563af317dee743bfd6e54fb410191e',4,1,'authToken','[]',0,'2022-04-26 09:24:11','2022-04-26 09:24:11','2023-04-26 10:24:11'),('66e802b48c1666dd0d886947308fad68d1792ef82df538d002e5ca04839d90de734b99200ee0dcd3',4,1,'authToken','[]',0,'2022-04-26 16:42:19','2022-04-26 16:42:19','2023-04-26 17:42:19'),('72a000a4baede355b5bda438e4b5e8bd954c40ea4b8c03cfd14f25dc3a3c417a5e4739c3f87111db',4,1,'authToken','[]',0,'2022-05-02 18:20:52','2022-05-02 18:20:52','2023-05-02 19:20:52'),('7adb9d143eca7cf90bb7a981c0e37fe70d7ca799b5a81d7d25f44fd31e7c8ef12d0d0a969b699277',3,1,'authToken','[]',0,'2022-04-20 10:47:40','2022-04-20 10:47:40','2023-04-20 11:47:40'),('7bb1e342a4808eef9fc5e3f8543c0dd8aa5c39883bfffe71c52703add3e91ab8ce1eaeb191cf6ff4',4,1,'authToken','[]',0,'2022-04-26 19:17:40','2022-04-26 19:17:40','2023-04-26 20:17:40'),('7c89749cfa271c4e42ea0643f4ae0728e42f69c21491a1b0a76b36fcf6c51236b190b49ac81fb884',4,1,'authToken','[]',0,'2022-05-14 10:12:40','2022-05-14 10:12:40','2023-05-14 11:12:40'),('848e2e6738e8be703c7168d2792399b86b2eec04f5674e91cef91334135000712d9554eee01163a3',4,1,'admin-authToken','[]',0,'2022-04-26 16:18:55','2022-04-26 16:18:55','2023-04-26 17:18:55'),('88937d8115c8fd6999116ee40ccae4c53e5ca8fd453f70ccb6a8dc23976d246233387a3439ef4c88',4,1,'authToken','[]',0,'2022-05-14 19:56:14','2022-05-14 19:56:14','2023-05-14 20:56:14'),('899b6748ab4fafb77b565db13f15e1d814010277340b17cfc4d32c215f3d800e32c6b64c100a1c67',4,1,'authToken','[]',0,'2022-04-20 11:03:16','2022-04-20 11:03:16','2023-04-20 12:03:16'),('988739ebfb50063c7289dee20cdfdbf106e7876e492b9a45a41f864b34f1dfcd1e0dc444c538e73d',4,1,'authToken','[]',0,'2022-04-26 16:40:52','2022-04-26 16:40:52','2023-04-26 17:40:52'),('98d2abdda6155f84d58b7051b0d56612dcc34f68e2cab6f924581ebd9d443e59daea5f355e239dfb',4,1,'admin-authToken','[]',0,'2022-04-26 16:18:24','2022-04-26 16:18:24','2023-04-26 17:18:24'),('99fe37bdc8d33f411e6f0da956a26138e0873ab4887a830dad4b0ffbdf856177bb567a526fdcb185',4,1,'admin-authToken','[]',0,'2022-05-14 19:32:32','2022-05-14 19:32:32','2023-05-14 20:32:32'),('9a569c38eafa44b06f6c24f61265e68748f447250df575a0f0cbc78dd358b242fb283f5c93cc09dd',4,1,'authToken','[]',0,'2022-05-02 18:16:28','2022-05-02 18:16:28','2023-05-02 19:16:28'),('9dc5d75f3eb1a51ca14814263057fd7bfde962f5caedcc18cbc57d4d783880d91b27d53ecced7177',4,1,'authToken','[]',0,'2022-05-02 07:29:45','2022-05-02 07:29:45','2023-05-02 08:29:45'),('a5135f5b59a71ea6ea966ab9d93360e55f819ea97de85f60ed480b8827a6fc6ead0711904e8245b8',1,1,'authToken','[]',0,'2022-04-20 08:18:12','2022-04-20 08:18:12','2023-04-20 09:18:12'),('a5395f8da32d7bd09be4cf43cbe63e07581e63ab0abdb5f4c8d7cf31a33ef2dbd669ace6b361b181',4,1,'authToken','[]',0,'2022-05-14 17:41:02','2022-05-14 17:41:02','2023-05-14 18:41:02'),('a90d5038ef9d94764cd5fad0c238170cf831c25e095314d34c8a5766ba165d67b45ee8a1269aff8e',3,1,'authToken','[]',0,'2022-04-20 10:53:59','2022-04-20 10:53:59','2023-04-20 11:53:59'),('abccab4a26b9b8a048d2d010efa79ca498638d454a694d0cf6331a59e3bfe11f89a84aa2c47b9728',4,1,'authToken','[]',0,'2022-05-14 17:33:26','2022-05-14 17:33:26','2023-05-14 18:33:26'),('ac3ea8eb52aa457d97f71acd86bd284e2fe5462cacc52226a4bc2e90fecf0dc1c6e2ccef20d809e0',4,1,'admin-authToken','[]',0,'2022-04-26 16:18:24','2022-04-26 16:18:24','2023-04-26 17:18:24'),('ae565856c172246dba323926113c2e2c418835c383408d333185e40243baf877db893d628b272995',4,1,'authToken','[]',0,'2022-04-26 19:27:43','2022-04-26 19:27:43','2023-04-26 20:27:43'),('af7cb579d77d6d03f63f8a795ba49f7c59d93d3ef7643e68672d8c35696f6d67cb6af570f0e494e6',3,1,'authToken','[]',0,'2022-04-20 10:55:44','2022-04-20 10:55:44','2023-04-20 11:55:44'),('b189e2fa577ae07a2bd654896e5d2a5f5d2f06dc158c9da7d1a9a4f02fe14cc7751df23573c2c138',4,1,'admin-authToken','[]',0,'2022-04-26 16:38:08','2022-04-26 16:38:08','2023-04-26 17:38:08'),('b74a7154a5147852e3427d266b7f335691655df729ff7db7c6094d7d6068ed0ff27c5a343c97992c',2,1,'authToken','[]',0,'2022-04-20 08:24:06','2022-04-20 08:24:06','2023-04-20 09:24:06'),('b9e7a25ba6e01574454a83480594873981054c908fb3318bb17ab10282418494c3bd2b38bbf03d82',4,1,'authToken','[]',0,'2022-04-26 17:05:46','2022-04-26 17:05:46','2023-04-26 18:05:46'),('bf0d41a8635af3a2e25446a52f56d75b637ee6f65329a85f4dc0c8ff9da795f05d66aacec3e4edf0',4,1,'authToken','[]',0,'2022-05-10 23:12:21','2022-05-10 23:12:21','2023-05-11 00:12:21'),('cd5adfd56d0494d5682e807438c3cc6917550523011997de9c3c35012fbff48af7f8adb41d7611d9',1,1,'authToken','[]',0,'2022-04-20 08:53:24','2022-04-20 08:53:24','2023-04-20 09:53:24'),('ce29b907a4868fb3300ca14a8b0c5678fbf9fcb446f81461e5be9a5b124f407c43f30f81e3650ce0',4,1,'authToken','[]',0,'2022-05-14 17:31:52','2022-05-14 17:31:52','2023-05-14 18:31:52'),('d6674a45c41e309645589848cac990a406e75928c3d087a9bc008fce101027635bad6e8fb698be2f',3,1,'authToken','[]',0,'2022-04-20 10:45:25','2022-04-20 10:45:25','2023-04-20 11:45:25'),('d72d2c8a36356f7dc73c232f28aa79d33b6a295a3be2817844531d9dfcfe4888e2e5933d178002fb',4,1,'authToken','[]',0,'2022-05-14 17:25:05','2022-05-14 17:25:05','2023-05-14 18:25:05'),('d999b5ba68d6bffa7cd78c33414d642a741f6ac46f4d7cc37a00e85e4334aa9f8d054873f8e10e59',4,1,'authToken','[]',0,'2022-05-14 10:23:15','2022-05-14 10:23:15','2023-05-14 11:23:15'),('da9b562dc895c15b889033135888440eee68a60d6b68b38193dbec7d6cb66dac53f504f60034fda9',4,1,'admin-authToken','[]',0,'2022-05-14 19:32:32','2022-05-14 19:32:32','2023-05-14 20:32:32'),('db311b97eafe93d726d747aa72e8d98bb96dca78163981d4ca6912e542fbbdb889cb968551efb9dc',4,1,'authToken','[]',0,'2022-05-14 17:30:57','2022-05-14 17:30:57','2023-05-14 18:30:57'),('db3bcb2cbdf2daf740c00899502829cc3e69f5aad622fdc94a9d4591c35cb9d1a2aa4b7f4a8f2951',4,1,'authToken','[]',0,'2022-04-26 16:06:41','2022-04-26 16:06:41','2023-04-26 17:06:41'),('dd1c7216941a9277f1013be47fb59681718a432d7a42085d08c48637797112f4409a07c2302c4e49',4,1,'authToken','[]',0,'2022-04-25 15:41:15','2022-04-25 15:41:15','2023-04-25 16:41:15'),('de14c2ba3923d17024a2b515e8c45caf4318296c52a176b8c682d67c8ec0ce352960cd7e2073ad5b',4,1,'authToken','[]',0,'2022-04-26 16:02:19','2022-04-26 16:02:19','2023-04-26 17:02:19'),('e5ccbc76af928441b0410d1b63beb7db281c43ae5019549217bcc73789c65273ea30c8c7512e8486',4,1,'authToken','[]',0,'2022-05-14 17:28:12','2022-05-14 17:28:12','2023-05-14 18:28:12'),('f420bee831a878f469b9322e9a77341576b6d6c5c88e1f2b260c32eed0764a123f5f992353e8f235',4,1,'authToken','[]',0,'2022-05-14 17:32:26','2022-05-14 17:32:26','2023-05-14 18:32:26'),('f84c2c414af15e370131e7c0fde86c3bc03566c2f84664770b9e83c5519b6c3e02cf4019753dcc5c',4,1,'authToken','[]',0,'2022-04-26 07:05:46','2022-04-26 07:05:46','2023-04-26 08:05:46'),('fc3f1df6e119ad12d0389347ae90f833dd07883453cc35850a952b5ed714ff0a032bbcb18e893aec',4,1,'admin-authToken','[]',0,'2022-04-26 16:18:55','2022-04-26 16:18:55','2023-04-26 17:18:55'),('fc59ddb3dffc598380f781faab456ab1bd80192229decb5014734a0b77927c938b335fa2a54efb14',4,1,'authToken','[]',0,'2022-05-03 21:10:16','2022-05-03 21:10:16','2023-05-03 22:10:16'),('fef562eefee54cb1ca107381cf2ac64e43462d5a01001a38b7940071d1c1df726e1592988cc9c8b5',3,1,'authToken','[]',0,'2022-04-20 10:41:06','2022-04-20 10:41:06','2023-04-20 11:41:06'),('ff26b53edb4ca0a6027e7cfded96a5d7530992c8c055b4c7a7bc9c5d16b49073a18a0f82c3df7059',4,1,'authToken','[]',0,'2022-05-02 08:10:15','2022-05-02 08:10:15','2023-05-02 09:10:15');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` VALUES (1,NULL,'PSEXPRESS Personal Access Client','ifuBkZpf0pLq72ZESAAqEZRfe9vHYpYdOklFvvgH',NULL,'http://localhost',1,0,0,'2022-04-20 08:17:13','2022-04-20 08:17:13'),(2,NULL,'PSEXPRESS Password Grant Client','TiqIfHaHnyCxUwgy0k4kBVYp2t8kBHSv582pLfQv','users','http://localhost',0,1,0,'2022-04-20 08:17:13','2022-04-20 08:17:13');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2022-04-20 08:17:13','2022-04-20 08:17:13');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderitems`
--

DROP TABLE IF EXISTS `orderitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orderitems` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `productid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `order_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderitems`
--

LOCK TABLES `orderitems` WRITE;
/*!40000 ALTER TABLE `orderitems` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `order_status` enum('pending','completed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `currency` enum('dollar','euro') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dollar',
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_ht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_ttc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
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
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_user` (
  `permission_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`permission_id`,`user_id`),
  KEY `permission_user_user_id_foreign` (`user_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/users/empty-user.jpg',
  `product_photo_thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/users/empty-user.jpg',
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fr_product_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_product_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_product_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `seuil0` decimal(20,2) DEFAULT NULL,
  `price_seuil0` decimal(20,2) DEFAULT NULL,
  `seuil1` decimal(20,2) DEFAULT NULL,
  `price_seuil1` decimal(20,2) DEFAULT NULL,
  `seuil2` decimal(20,2) DEFAULT NULL,
  `price_seuil2` decimal(20,2) DEFAULT NULL,
  `discount` decimal(20,2) DEFAULT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/users/empty-user.jpg',
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/users/empty-user.jpg',
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/users/empty-user.jpg',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flash_sale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_deal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('sold','available','stolen','damaged','on_demand','other') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `substock_id` bigint unsigned NOT NULL,
  `stock_id` bigint unsigned NOT NULL,
  `shop_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_product_slug_unique` (`product_slug`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'smartphone1','casque p47','smartphone1','casque-p47','vert-asus-gg','casque','hh','jj',344.00,12.00,354.00,24.00,324.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','blanc',NULL,'21','asus',NULL,NULL,'12','2','available',1,1,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(2,'casque p48','gg','gg','casque-p48','vert-asus-gg','casque','hh','jj',345.00,12.00,354.00,24.00,324.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','rouge',NULL,'21','asus',NULL,NULL,'12','2','available',1,1,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(3,'casque p49','gg','gg','casque-p49','vert-asus-gg','casque','hh','jj',346.00,12.00,354.00,24.00,1555.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',2,1,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(4,'casque p50','gg','gg','casque-p50','vert-asus-gg','casque','hh','jj',347.00,12.00,354.00,24.00,324.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',2,1,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(5,'casque p51','gg','gg','casque-p51','vert-asus-gg','casque','hh','jj',348.00,12.00,354.00,24.00,1324.00,50.00,1304.00,5.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',3,1,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(6,'casque p52','gg','gg','casque-p52','vert-asus-gg','casque','hh','jj',349.00,12.00,354.00,24.00,324.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',3,1,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(7,'casque p53','gg','gg','casque-p53','vert-asus-gg','casque','hh','jj',1354.00,12.00,1354.00,24.00,1324.00,50.00,1304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',4,1,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(8,'casque p54','gg','gg','casque-p54','vert-asus-gg','casque','hh','jj',357.00,12.00,354.00,24.00,324.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',4,1,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(9,'casque p55','gg','gg','casque-p55','vert-asus-gg','casque','hh','jj',359.00,12.00,354.00,24.00,324.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',5,2,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(10,'casque p56','casque p47','gg','casque-p56','vert-asus-gg','casque','hh','jj',349.00,12.00,354.00,24.00,324.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',5,2,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(11,'casque p57','gg','gg','casque-p57','vert-asus-gg','casque','hh','jj',474.00,12.00,354.00,24.00,324.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',6,2,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(12,'casque p58','gg','gg','casque-p58','vert-asus-gg','casque','hh','jj',472.00,12.00,354.00,24.00,324.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',6,2,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(13,'casque p59','gg','gg','casque-p59','vert-asus-gg','casque','hh','jj',474.00,12.00,354.00,24.00,324.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',7,2,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(14,'casque p60','gg','gg','casque-p60','vert-asus-gg','casque','hh','jj',474.00,12.00,354.00,24.00,324.00,50.00,304.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',7,2,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(15,'casque p61','gg','gg','casque-p61','vert-asus-gg','casque','hh','jj',344.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',7,2,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(16,'casque p62','gg','gg','casque-p62','vert-asus-gg','casque','hh','jj',944.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',7,2,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(17,'casque p63','gg','gg','casque-p63','vert-asus-gg','casque','hh','jj',344.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',8,3,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(18,'casque p64','gg','gg','casque-p64','vert-asus-gg','casque','hh','jj',844.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',9,3,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(19,'casque p65','casque p47','gg','casque-p65','vert-asus-gg','casque','hh','jj',344.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',10,3,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(20,'casque p66','gg','gg','casque-p66','vert-asus-gg','casque','hh','jj',844.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',11,3,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(21,'casque p67','gg','gg','casque-p67','vert-asus-gg','casque','hh','jj',344.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',12,3,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(22,'casque p68','gg','gg','casque-p68','vert-asus-gg','casque','hh','jj',1344.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',13,4,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(23,'casque p69','gg','gg','casque-p69','vert-asus-gg','casque','hh','jj',344.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',13,4,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(24,'casque p70','gg','gg','casque-p70','vert-asus-gg','casque','hh','jj',344.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',13,4,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(25,'casque p71','gg','gg','casque-p71','vert-asus-gg','casque','hh','jj',844.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',14,5,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(26,'casque p72','gg','gg','casque-p72','vert-asus-gg','casque','hh','jj',544.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',14,5,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(27,'casque p73','gg','gg','casque-p73','vert-asus-gg','casque','hh','jj',144.00,3.00,3.00,4.00,3.00,4.00,4.00,3.00,'media/products/p47.webp','media/products/usb.png','media/products/usb.png','vert',NULL,'21','asus',NULL,NULL,'12','2','available',14,5,1,'2022-04-20 07:58:44','2022-04-20 07:58:44',NULL),(28,'ff','dd','ff','dd','vert-asus-dd','ffffffffff---------->','dd','ff',400.00,5.00,88.00,6.00,99.00,6.00,66.00,5.00,'media/products/62801399b06be-2021-08-04-61099dc738adb.png','','','vert',NULL,'21','asus',NULL,NULL,'12','2','available',1,1,1,'2022-05-14 19:39:53','2022-05-14 19:39:53',NULL),(29,'biat','biten','biatar','biten','rouge-asus-biten','e','tre','gtr',55.00,5.00,5.00,5.00,55.00,5.00,55.00,55.00,'media/products/628033a30ae2c-2021-07-08-60e61d8e61d88.png','media/products/628033a30aee9-2021-07-19-60f5523503873.png','media/products/628033a30afc7-2021-11-28-61a3658460e51.png','rouge',NULL,'14','asus',NULL,NULL,'12','2','available',1,1,1,'2022-05-14 21:56:35','2022-05-14 21:56:35',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratingproducts`
--

DROP TABLE IF EXISTS `ratingproducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ratingproducts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `rating` tinyint unsigned DEFAULT NULL,
  `product_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratingproducts`
--

LOCK TABLES `ratingproducts` WRITE;
/*!40000 ALTER TABLE `ratingproducts` DISABLE KEYS */;
/*!40000 ALTER TABLE `ratingproducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratingsellers`
--

DROP TABLE IF EXISTS `ratingsellers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ratingsellers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `rating` tinyint unsigned DEFAULT NULL,
  `shop_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `ratingseller_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratingsellers`
--

LOCK TABLES `ratingsellers` WRITE;
/*!40000 ALTER TABLE `ratingsellers` DISABLE KEYS */;
/*!40000 ALTER TABLE `ratingsellers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shippings`
--

DROP TABLE IF EXISTS `shippings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shippings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shippings`
--

LOCK TABLES `shippings` WRITE;
/*!40000 ALTER TABLE `shippings` DISABLE KEYS */;
/*!40000 ALTER TABLE `shippings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shops`
--

DROP TABLE IF EXISTS `shops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shops` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fr_shop_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hitcom',
  `en_shop_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hitcom',
  `ar_shop_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hitcom',
  `fr_shop_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `en_shop_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `ar_shop_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `shop_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_phone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_creation_date` datetime DEFAULT NULL,
  `seller_fiscal_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `shop_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/users/empty-user.jpg',
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shops`
--

LOCK TABLES `shops` WRITE;
/*!40000 ALTER TABLE `shops` DISABLE KEYS */;
INSERT INTO `shops` VALUES (4,'2bango.tn','2bango.tn','2bango.tn',NULL,NULL,NULL,NULL,'zahra',NULL,'55385474',NULL,NULL,NULL,NULL,'0',NULL,'media/users/empty-user.jpg',4,'2022-04-20 11:03:15','2022-04-20 11:03:15',NULL);
/*!40000 ALTER TABLE `shops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stocks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `stock_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_stock_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_stock_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_stock_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/users/empty-user.jpg',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fa-brands fa-app-store-ios',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stocks_stock_slug_unique` (`stock_slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stocks`
--

LOCK TABLES `stocks` WRITE;
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;
INSERT INTO `stocks` VALUES (1,'telephonie','Telephonie','telephonie-en','telephonie-ar','media/categories/smartphone-thumb.webp','fa','2022-04-01 23:00:00','2022-04-21 23:00:00',NULL),(2,'infomatique','Infomatique','telephonie-en','telephonie-ar','media/categories/info-thumb.webp','fa','2022-04-01 23:00:00','2022-04-21 23:00:00',NULL),(3,'multimedia','multimedia','telephonie-en','telephonie-ar','media/categories/media-thumb.webp','fa','2022-04-01 23:00:00','2022-04-21 23:00:00',NULL),(4,'stockage','stockage','telephonie-en','telephonie-ar','media/categories/stockage-thumb.webp','fa','2022-04-01 23:00:00','2022-04-21 23:00:00',NULL),(5,'securite','securite','telephonie-en','telephonie-ar','media/categories/sec-thumb.webp','fa','2022-04-01 23:00:00','2022-04-21 23:00:00',NULL);
/*!40000 ALTER TABLE `stocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subcategories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fr_subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subcategories_subcategory_slug_unique` (`subcategory_slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategories`
--

LOCK TABLES `subcategories` WRITE;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `substocks`
--

DROP TABLE IF EXISTS `substocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `substocks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fr_substock_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_substock_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_substock_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `substock_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `substock_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/users/empty-user.jpg',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fa-brands fa-app-store-ios',
  `stock_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `substocks_substock_slug_unique` (`substock_slug`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `substocks`
--

LOCK TABLES `substocks` WRITE;
/*!40000 ALTER TABLE `substocks` DISABLE KEYS */;
INSERT INTO `substocks` VALUES (1,'smartphone','ff','55','smartphone','yyy','uu',1,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(2,'telephone portable','ff','55','telephone-portable','yyy','uu',1,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(3,'tablette','ff','55','tablette','yyy','uu',1,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(4,'accessoire telephone','ff','55','accessoire-telephone','yyy','uu',1,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(5,'laptop','ff','55','laptop','yyy','uu',2,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(6,'desktop','ff','55','desktop','yyy','uu',2,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(7,'accessoire info','ff','55','accessoire-info','yyy','uu',2,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(8,'televiseur','ff','55','televiseur','yyy','uu',3,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(9,'video-projecteur','ff','55','video-projecteur','yyy','uu',3,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(10,'recepteur','ff','55','recepteur','yyy','uu',3,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(11,'appareil-photo','ff','55','appareil-photo','yyy','uu',3,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(12,'son','ff','55','son','yyy','uu',3,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(13,'camera surveillance','ff','55','camera-de-surveillence','yyy','uu',5,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(14,'disque dur externe','ff','55','disque-dur-externe','yyy','uu',4,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(15,'console de jeux','ff','55','console-jeux','yyy','uu',3,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(16,'Cle usb','ff','55','cle-usb','yyy','uu',4,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(17,'Carte memoire','ff','55','carte-memoire','yyy','uu',4,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(18,'Cd et dvd','ff','55','cd-et-dvd','yyy','uu',4,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(19,'Disque interne','ff','55','disque-interne','yyy','uu',4,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(20,'onduleurs','ff','55','onduleurs','yyy','uu',5,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL),(21,'systeme alarme','ff','55','sys-alarme','yyy','uu',5,'2021-12-31 23:00:00','2021-12-31 23:00:00',NULL);
/*!40000 ALTER TABLE `substocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taxes`
--

DROP TABLE IF EXISTS `taxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taxes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `rate` decimal(4,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taxes`
--

LOCK TABLES `taxes` WRITE;
/*!40000 ALTER TABLE `taxes` DISABLE KEYS */;
/*!40000 ALTER TABLE `taxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `themes`
--

DROP TABLE IF EXISTS `themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `themes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `font1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `font2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `themes`
--

LOCK TABLES `themes` WRITE;
/*!40000 ALTER TABLE `themes` DISABLE KEYS */;
/*!40000 ALTER TABLE `themes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `retailer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('client','manager','retailer','admin','superuser','system') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'retailer',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipment_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technical_details` mediumtext COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mac_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/users/empty-user.jpg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'samir karboul','admin','zahra',NULL,NULL,NULL,'55385474',NULL,NULL,NULL,NULL,NULL,'1','barhoumi.chawki@gmail.com','media/users/empty-user.jpg','2022-04-20 11:03:55','$2y$10$2hBwN0J71VlAhXU0g87wZOFhXEN84ub4rwvyurWkwOjpcE7hB9bxq',NULL,'2022-04-20 11:03:15','2022-04-20 11:03:55',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wishlists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlists`
--

LOCK TABLES `wishlists` WRITE;
/*!40000 ALTER TABLE `wishlists` DISABLE KEYS */;
/*!40000 ALTER TABLE `wishlists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-15  0:06:55
