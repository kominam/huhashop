-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: huhashop
-- ------------------------------------------------------
-- Server version	5.7.13-0ubuntu0.16.04.2

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Admin','admin@gmail.com','$2y$10$QrIXjWVVHx6XAWY.9Ke1X.ouUUMVFqxGw.nySsdF1RF4L7/jV/DCS','2mw0ZcDKy1BQFVHHsFkjMtGVjz7P6ed1XR3y5mMSgro9T3t4D5kLYohcBiNh',NULL,'2016-12-23 09:47:59');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alone_sales`
--

DROP TABLE IF EXISTS `alone_sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alone_sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rate` int(11) NOT NULL,
  `began_at` date NOT NULL,
  `ended_at` date NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alone_sales_product_id_foreign` (`product_id`),
  CONSTRAINT `alone_sales_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alone_sales`
--

LOCK TABLES `alone_sales` WRITE;
/*!40000 ALTER TABLE `alone_sales` DISABLE KEYS */;
INSERT INTO `alone_sales` VALUES (1,10,'2016-12-22','2017-12-23',1,'2016-12-23 07:46:23','2016-12-23 07:46:24'),(2,15,'2016-12-22','2017-12-23',7,'2016-12-23 07:47:04','2016-12-23 07:47:05'),(3,15,'2016-12-22','2017-12-23',16,'2016-12-23 07:47:25','2016-12-23 07:47:27'),(4,20,'2016-12-22','2017-12-23',27,'2016-12-23 07:47:53','2016-12-23 07:47:54'),(5,30,'2017-12-22','2017-12-23',14,'2016-12-23 07:48:38','2016-12-23 07:48:39'),(6,15,'2016-12-22','2017-12-23',12,'2016-12-23 07:49:02','2016-12-23 07:49:03'),(7,10,'2016-12-22','2017-12-23',15,'2016-12-23 07:54:08','2016-12-23 07:54:09'),(8,22,'2016-12-23','2017-12-23',33,'2016-12-23 10:14:34','2016-12-23 10:14:36'),(9,11,'2016-12-23','2017-12-23',29,'2016-12-23 10:15:15','2016-12-23 10:15:17'),(10,44,'2016-12-23','2017-12-23',21,'2016-12-23 10:16:21','2016-12-23 10:16:23'),(11,13,'2016-12-23','2017-12-23',5,'2016-12-23 10:17:14','2016-12-23 10:17:17'),(12,2,'2016-12-23','2017-12-23',28,'2016-12-23 10:17:57','2016-12-23 10:18:00'),(13,30,'2016-12-23','2017-12-23',17,'2016-12-23 10:18:37','2016-12-23 10:18:40'),(14,12,'2016-12-23','2017-12-23',10,'2016-12-23 10:19:40','2016-12-23 10:19:42');
/*!40000 ALTER TABLE `alone_sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Dried Lavender','We offer all of our products at competitive wholesale prices to ensure your business can afford to have quality products in stock.','dried-lavender','frontend/images/category/cover_image/avatar/handmade.png','frontend/images/category/cover_image/avatar/lavender.jpg','2016-11-27 11:33:20','2016-11-27 11:33:20'),(2,'Arts & Crafts','A collection of art and craft, handemade product made from Lavender like scented bag, flower bottle...','arts-crafts','frontend/images/category/cover_image/avatar/handmade.png','frontend/images/category/cover_image/avatar/handmade.png','2016-11-27 11:33:20','2016-11-27 11:33:20'),(3,'Care Product','A collection of personal care product made from Lavender\', \'personal-care-products','care-product','frontend/images/category/cover_image/avatar/handmade.png','frontend/images/category/cover_image/avatar/handmade.png','2016-11-27 11:33:20','2016-11-27 11:33:20'),(4,'Combo','A collection of combo made from Lavender and other','combo','frontend/images/category/cover_image/avatar/handmade.png','frontend/images/category/cover_image/avatar/handmade.png','2016-11-27 11:33:20','2016-11-27 11:33:20'),(5,'Other','A collection of other exclude Lavender','other','frontend/images/category/cover_image/avatar/handmade.png','frontend/images/category/cover_image/avatar/handmade.png','2016-11-27 11:33:20','2016-11-27 11:33:20'),(6,'Lavender Mixed','Mix of Lavender and other','lavender-mixed','frontend/images/category/cover_image/avatar/handmade.png','frontend/images/category/cover_image/avatar/handmade.png','2016-12-20 20:56:29','2016-12-20 20:56:30'),(7,'Essential Oil','All kind of oil or Hydrosol & Hydrosol Based Products','essential-oil','frontend/images/category/cover_image/avatar/handmade.png','frontend/images/category/cover_image/avatar/handmade.png','2016-12-23 07:40:44','2016-12-23 07:40:46'),(8,'Dried Flowers','Others kind of dried flower we  provide','dried-flowers','Wholesale lavender buds or seed and product from buds/crafts','Wholesale lavender buds or seed and product from buds/crafts','2016-12-23 07:43:15','2016-12-23 07:43:20'),(9,'Buds/Seed','Wholesale lavender buds or seed and product from buds/crafts','buds-seed','Wholesale lavender buds or seed and product from buds/crafts','Wholesale lavender buds or seed and product from buds/crafts','2016-12-23 07:43:23','2016-12-23 07:43:21');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `combo_sale_product`
--

DROP TABLE IF EXISTS `combo_sale_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `combo_sale_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `combo_sale_id` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `combo_sale_product_combo_sale_id_foreign` (`combo_sale_id`),
  KEY `combo_sale_product_product_id_foreign` (`product_id`),
  CONSTRAINT `combo_sale_product_combo_sale_id_foreign` FOREIGN KEY (`combo_sale_id`) REFERENCES `combo_sales` (`id`) ON DELETE CASCADE,
  CONSTRAINT `combo_sale_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `combo_sale_product`
--

LOCK TABLES `combo_sale_product` WRITE;
/*!40000 ALTER TABLE `combo_sale_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `combo_sale_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `combo_sales`
--

DROP TABLE IF EXISTS `combo_sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `combo_sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `original_total_price` int(11) NOT NULL,
  `combo_sale_price` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `began_at` date NOT NULL,
  `ended_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `combo_sales_name_unique` (`name`),
  UNIQUE KEY `combo_sales_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `combo_sales`
--

LOCK TABLES `combo_sales` WRITE;
/*!40000 ALTER TABLE `combo_sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `combo_sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (124,'2014_10_12_000000_create_users_table',1),(125,'2014_10_12_100000_create_password_resets_table',1),(126,'2016_11_16_000355_create_categories_table',1),(127,'2016_11_16_000377_create_combo_sales_table',1),(128,'2016_11_16_000418_create_products_table',1),(129,'2016_11_16_000720_create_alone_sales_table',1),(130,'2016_11_16_005210_create_orders_table',1),(131,'2016_11_16_015125_create_orderables_table',1),(132,'2016_11_24_020759_create_combo_sale_product_table',1),(133,'2016_12_22_084947_create_subcriptions_table',2),(134,'2016_12_22_211516_create_admins_table',3),(135,'2016_12_25_151305_create_stocks_table',4),(136,'2016_12_26_132654_create_shipping_infos_table',5),(137,'2016_12_26_161316_create_social_accounts',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderables`
--

DROP TABLE IF EXISTS `orderables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `orderable_id` int(10) unsigned NOT NULL,
  `orderable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orderables_order_id_foreign` (`order_id`),
  KEY `orderables_orderable_id_orderable_type_index` (`orderable_id`,`orderable_type`),
  CONSTRAINT `orderables_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderables`
--

LOCK TABLES `orderables` WRITE;
/*!40000 ALTER TABLE `orderables` DISABLE KEYS */;
INSERT INTO `orderables` VALUES (15,11,1,'App\\Product',1,NULL,NULL),(17,13,1,'App\\Product',1,NULL,NULL);
/*!40000 ALTER TABLE `orderables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `is_paid` tinyint(4) NOT NULL DEFAULT '0',
  `is_sent` tinyint(4) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (11,1,1,239980,1,'2016-12-26 15:05:56','2016-12-26 15:07:14'),(13,1,1,239980,1,'2016-12-26 15:59:58','2016-12-26 17:32:23');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_new` tinyint(4) NOT NULL DEFAULT '0',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0',
  `is_shipping` tinyint(4) NOT NULL DEFAULT '0',
  `sale_count` int(11) NOT NULL DEFAULT '0',
  `url_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zoom_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Lavender Seed','lavender-seed','Blue Scent lavender plants are vigorous and branching to 12-16 in. tall. Plants bloom the first year, and with a denser growth habit than most lavenders. Plants are long-blooming, the fragrant deep violet-blue flowers appear on long stems from late spring',120000,'100gr',0,0,0,7,'lavender-seed.png','lavender-seed_big.png',1,'2016-11-27 11:33:20','2016-12-26 15:59:58'),(2,'Lavender Bud','lavender-bud','Our \"Grosso\" lavender is harvested at the peak of its bloom. Exceptionally fragrant, meticulously cleaned and ready for all your crafting needs or to enjoy all by itself. The heavenly fragrance will last for years!',120000,'100gr',0,1,0,0,'lavender_bud.png','lavender_bud_big.png',1,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(3,'WholeSale','wholesale','Retail Lavender',150000,'bunch',0,0,0,0,'wholesale 1.png','wholesale 1_big.png',1,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(4,'Scented Bags','scented-bags','Scenteds Bag Lavender with affordable price help you make you room more smelling',100000,'item',0,1,0,0,'scented bag 1.png','scented bag 1_big.png',2,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(5,'Flower Bottle','flower-bottle','Bottle for Flower Arrangement',100000,'bottle',0,0,0,0,'flower-bottle 2.png','flower-bottle 2_big.png',2,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(6,'Small Perfume','small-perfume','A smal Perfume ',400000,'bottle',0,1,0,0,'perfume 1.png','perfume 1_big.png',3,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(7,'Lavender Candle','lavender-candle','An herbaceous blend of fragrant lavender and soothing chamomile with notes of bergamot and a hint of wild musk.',800000,'bottle',0,0,0,0,'perfume 2.png','perfume 2_big.png',3,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(8,'Pure Oil','pure-oil','Pure Lavender  Oil from France We have a wide and diverse offering of products from Spa and Bath & Body to products for the Home, as well as culinary. Our ingredients are sourced locally when possible and are fair trade, mostly organic, and free of parabens, sulfates, gluten, and animal cruelty',250000,'bottle',0,0,0,0,'perfume 4.png','perfume 4_big.png',3,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(9,'Snowy','snowy','A smal bunch of snowny  ',200000,'bunch',0,0,0,0,'snowy2.png','snowy2_big.png',5,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(10,'Baby Bloom','baby-bloom','Even though many people look down upon baby’s breath because of the stigma that comes with its cheap price tag, you can’t deny how pretty, affordable, and available it is. Baby’s breath is full of potential, just waiting for the right artist to bring it to life.',200000,'bunch',0,0,0,0,'baby bloom.png','baby bloom_big.png',5,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(11,'Baby Breath','baby-breath','The most popular filler... Baby\'s Breath! This classic flower displays many tiny, cloud like blooms covering its branches. Baby\'s Breath is an ideal filler flower, but can also be used alone to create popular globe shaped centerpieces. Baby\'s Breath is offered in both Natural and Tinted varieties.',250000,'bunch',0,1,0,0,'baby bloom 2.png','baby bloom 2_big.png',5,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(12,'Barkey','barkey','A  small bunch of barkey ',200000,'bunch',0,0,0,0,'barkey.png','barkey_big.png',5,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(13,'Rose','rose','permernance rose with high technique in making shape ',250000,'bunch',0,0,0,0,'rose.png','rose_big.png',5,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(14,'Salem','salem','The packaging process occurs at the farm, where a certified worker will prepare your baby\'s breath for its journey. Your gypso won’t arrive looking as gorgeous as it really is. This is NORMAL. Once they are hydrated, they will open. You will witness the magic of a flower explosion! Flower Explosion uses FedEx to ship all of our orders. ',400000,'bunch',0,0,0,0,'salem.png','salem_big.png',5,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(15,'Hyodrangas','hyodrangas','Peruse the aisles for everything from sunflowers, succulents, hydrangeas, baby’s breath, tulips, lilies, colorful amaranth, proteas, and more.  The flower mart also sells other items, like vases, candle holders, and other decorative elements, like pieces of driftwood.  We purchased white hydrangeas for the table setting and tall sunflowers for surrounding vases to keep it simple.',100000,'bunch',0,0,0,0,'hyodrangas.png','hyodrangas_big.png',5,'2016-11-27 11:33:20','2016-11-27 11:33:20'),(16,'Lavender Snowy S1','lavender-snowy-s1','A mix of Lavender and Snowy',250000,'bunch',0,0,0,0,'combo special 1.png','combo special 1_big.png',6,'2016-12-20 21:01:14','2016-12-20 21:01:16'),(17,'Lavender Snowy S2','lavender-snowy-s2','A mix of Lavender and SNowy ',250000,'bunch',0,0,0,0,'combo special 2.png','combo special 2_big.png',6,'2016-12-20 21:03:46','2016-12-20 21:03:47'),(18,'Lavender Snowy S3','lavender-snowy-s3','A mix of Lavender and SNowy',200000,'bunch',0,0,0,0,'mix3.png','mix3_big.png',6,'2016-12-20 21:07:32','2016-12-20 21:07:47'),(19,'Lavender Snowy S4','lavender-snowy-s4','A mix of Lanver and SNowwy ',200000,'bunch',0,0,0,0,'mix4.png','mix4_big.png',6,'2016-12-20 21:12:29','2016-12-20 21:12:31'),(20,'Mixed S1','mixed-s1','A mix style 1',250000,'bunch',0,0,0,0,'mix2.png','mix2_big.png',6,'2016-12-20 21:15:15','2016-12-20 21:15:17'),(21,'Mixed S2','mixed-s2','A mix style 2',250000,'bunch',0,0,0,0,'mix5.png','mix5_big.png',6,'2016-12-20 21:17:39','2016-12-20 21:17:41'),(22,'Mixed S3','mixed-s3','A mix style3',250000,'bunch',0,0,0,0,'mix 6.png','mix 6_big.png',6,'2016-12-20 21:18:42','2016-12-20 21:18:46'),(23,'Mixed S4','mixed-s4','A mix style 4',250000,'bunch',0,0,0,0,'mix7.png','mix 7_big.png',6,'2016-12-20 21:21:25','2016-12-20 21:21:27'),(24,'Mixed S5','mixed-s5','A mix style off s5',250000,'bunch',0,0,0,0,'mix8.png','mix8_big.png',6,'2016-12-20 21:22:05','2016-12-20 21:22:07'),(25,'Mixed S6','mixed-s6','A mix style of s6',250000,'bunch',0,0,0,0,'mix9.png','mix9_big.png',6,'2016-12-20 21:32:55','2016-12-20 21:32:56'),(26,'Lavender Handmade Jewelry','lavender-handmade-jewelry','Jewelry product made from dried flower ',40000,'item',0,0,0,0,'chain1.png','chain1_big.png',2,'2016-12-22 05:49:21','2016-12-22 05:49:38'),(27,'Pure cinnamon oil','pure-cinnamon-oil','Cinnamon bark oil (Cinnamomum verum) is derived from the plant of the species name Laurus cinnamomum and belongs to the Lauraceae botanical family. Native to parts of South Asia, today cinnamon plants are grown across different nations throughout Asia and shipped around the world in the form of cinnamon essential oil or cinnamon spice. Its’ believed that today over 100 varieties of cinnamon are grown worldwide, but two types are definitely the most popular: Ceylon cinnamon and Chinese cinnamon.',299000,'bottle',0,0,0,0,'cinamonoil.png','cinamonoil_big.png',7,'2016-12-22 05:39:55','2016-12-22 05:41:26'),(28,'Lavender Handmade Soap','lavender-handmade-soap','Lavender SOAP \"enriched not only the essential oil, but also cooked in olive oil, nastoânnom on flowers of lavender.',150000,'item',0,0,0,0,'lavender soap.png','lavender soap_big.png',3,'2016-12-22 05:49:11','2016-12-22 05:49:16'),(29,'10 Brocade bag','10-brocade-bag','An beautiful packaging for you to decorate ',89000,'combo',0,0,0,0,'scented bag 3.png','scented bagscented bag 3_big.png',4,'2016-12-22 05:55:17','2016-12-22 05:55:19'),(33,'combo 500 Babies Breath','combo-500-babies-breath','Add a little shine and shimmer to your flower arrangements with this extravagant bundle of Baby\'s Breath flowers. This flower has long lasting vase life and is available in a vibrant white which you can mix and match with any flower arrangement, giving it a fuller look. Incorporate our fresh cut Baby\'s Breath in your order today.',369000,'combo',0,0,0,0,'baby bloom.png','baby bloom_big.png',4,'2016-12-22 06:06:08','2016-12-22 06:06:11'),(34,'10ml Perfume Bottle extract shell','10ml-perfume-bottle-extract-shell','10ml-perfume-bottle-extract-shell',35000,'item',0,0,0,0,'bluebottle.png','bluebottle_big.png',5,'2016-12-22 06:09:38','2016-12-22 06:09:43'),(35,'French Lavender Perfume 1802','french-lavender-perfume-1802','Chatelard 1802 LE is a trademark has been present in Provence, France from 1802 to the present. Unlike other brands, Le Chatelard in favor of the traditional values for years, its products are organic, environmentally friendly and totally reasonable prices.',699000,'item',0,0,0,0,'perfumela.png','perfumela_big.png',3,'2016-12-22 06:19:10','2016-12-22 06:19:22');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping_infos`
--

DROP TABLE IF EXISTS `shipping_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `shipping_infos_order_id_unique` (`order_id`),
  CONSTRAINT `shipping_infos_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping_infos`
--

LOCK TABLES `shipping_infos` WRITE;
/*!40000 ALTER TABLE `shipping_infos` DISABLE KEYS */;
INSERT INTO `shipping_infos` VALUES (3,'Nam ML','6T Ha Noi','012121212121',11,'2016-12-26 15:05:57','2016-12-26 15:05:57'),(5,'Nam Ml','6T Ha Noi','21212121212121212',13,'2016-12-26 15:59:58','2016-12-26 15:59:58');
/*!40000 ALTER TABLE `shipping_infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_accounts`
--

DROP TABLE IF EXISTS `social_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_accounts`
--

LOCK TABLES `social_accounts` WRITE;
/*!40000 ALTER TABLE `social_accounts` DISABLE KEYS */;
INSERT INTO `social_accounts` VALUES (2,'964692953663801','FacebookProvider','2016-12-26 16:32:47','2016-12-26 16:32:47'),(1,'115694706793881028812','GoogleProvider','2016-12-26 17:15:09','2016-12-26 17:15:09');
/*!40000 ALTER TABLE `social_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qty` int(11) NOT NULL,
  `import_price` int(11) NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stocks_product_id_unique` (`product_id`),
  CONSTRAINT `stocks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stocks`
--

LOCK TABLES `stocks` WRITE;
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;
INSERT INTO `stocks` VALUES (1,93,100000,1,'2016-12-25 16:12:40','2016-12-26 15:59:58'),(2,100,130000,2,'2016-12-25 16:12:42','2016-12-25 16:12:43'),(3,100,80000,3,'2016-12-25 16:12:43','2016-12-25 16:12:44'),(4,100,80000,4,'2016-12-25 16:12:45','2016-12-25 16:12:46'),(5,100,350000,5,'2016-12-25 16:12:47','2016-12-25 16:12:48'),(6,100,700000,6,'2016-12-25 16:12:48','2016-12-25 16:12:49'),(7,100,200000,8,'2016-12-25 16:12:50','2016-12-25 16:12:51'),(9,100,170000,9,'2016-12-25 16:12:52','2016-12-25 16:12:53'),(10,100,170000,10,'2016-12-25 16:12:54','2016-12-25 16:12:54'),(11,100,200000,11,'2016-12-25 16:12:55','2016-12-25 16:13:10'),(12,100,170000,12,'2016-12-25 16:13:10','2016-12-25 16:13:11'),(13,100,200000,13,'2016-12-25 16:13:12','2016-12-25 16:13:14'),(14,100,300000,14,'2016-12-25 16:13:15','2016-12-25 16:13:16'),(15,100,80000,15,'2016-12-25 16:13:17','2016-12-25 16:13:18'),(16,100,200000,16,'2016-12-25 16:13:19','2016-12-25 16:13:20'),(17,100,200000,17,'2016-12-25 16:13:21','2016-12-25 16:13:22'),(18,100,180000,18,'2016-12-25 16:13:23','2016-12-25 16:13:24'),(19,100,180000,19,'2016-12-25 16:13:25','2016-12-25 16:13:26'),(20,100,200000,20,'2016-12-25 16:13:27','2016-12-25 16:13:28'),(21,100,210000,21,'2016-12-25 16:13:28','2016-12-25 16:13:29'),(22,100,220000,22,'2016-12-25 16:13:30','2016-12-25 16:13:31'),(23,100,200000,23,'2016-12-25 16:13:32','2016-12-25 16:13:33'),(24,100,210000,24,'2016-12-25 16:13:34','2016-12-25 16:13:34'),(25,100,220000,25,'2016-12-25 16:13:35','2016-12-25 16:13:36'),(26,100,30000,26,'2016-12-25 16:13:37','2016-12-25 16:13:38'),(27,100,250000,27,'2016-12-25 16:13:39','2016-12-25 16:13:40'),(28,100,100000,28,'2016-12-25 16:13:41','2016-12-25 16:13:42'),(29,100,60000,29,'2016-12-25 16:13:45','2016-12-25 16:13:44'),(30,100,300000,33,'2016-12-25 16:13:46','2016-12-25 16:13:48'),(31,100,25000,34,'2016-12-25 16:13:49','2016-12-25 16:13:47'),(33,120,570000,35,'2016-12-25 16:16:53','2016-12-25 16:25:47');
/*!40000 ALTER TABLE `stocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
INSERT INTO `subscriptions` VALUES (1,1,'main','sub_9mwL8Jc9XPIQHD','normal',1,NULL,NULL,'2016-12-22 09:37:43','2016-12-22 09:37:43'),(2,2,'main','sub_9o3wMwU89VgzM6','normal',1,NULL,NULL,'2016-12-25 09:33:14','2016-12-25 09:33:14'),(3,2,'main','sub_9o3zJwtLmJJWh5','normal',1,NULL,NULL,'2016-12-25 09:35:27','2016-12-25 09:35:27'),(4,1,'main','sub_9oB38D0o3GkZA6','normal',1,NULL,NULL,'2016-12-25 16:53:58','2016-12-25 16:53:58'),(5,1,'main','sub_9oWGwYys5AmTjo','normal',1,NULL,NULL,'2016-12-26 14:43:53','2016-12-26 14:43:53'),(6,1,'main','sub_9oWcomAb2z8zHy','normal',1,NULL,NULL,'2016-12-26 15:06:22','2016-12-26 15:06:22'),(7,1,'main','sub_9oXXrFQ9ZbJyOP','normal',1,NULL,NULL,'2016-12-26 16:00:12','2016-12-26 16:00:12');
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trial_ends_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'GeminWind','gemini.wind285@gmail.com','$2y$10$QrIXjWVVHx6XAWY.9Ke1X.ouUUMVFqxGw.nySsdF1RF4L7/jV/DCS','VxwzOJjSy6NB2Z5dvP6c9ECWHlSaXU0nee8YBsbpKO493XBH3OkcT7E0KKK2','2016-11-27 11:34:41','2016-12-26 17:15:14','cus_9mwKtBaquAq6GD','Visa','4242',NULL),(2,'Dinh Van Hai','haiwind95@gmail.com','$2y$10$OhQA0D21o/wyKF06fMMyn.PPCpNcPkiwzpEecsX17m6l5H6FWtHKy','aXZSUAe4X8ywZT6z1t3a21AACm4eqqSPpsu1YZ9HMHZRjAyviA5MwbwIBZwK','2016-12-25 09:28:53','2016-12-26 17:32:09','cus_9o3w1BFhN2gWZO','Visa','4242',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-26 10:37:58
