-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: comp_web
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (7,'jasil',12),(20,'deepika',25),(21,'',26),(23,'susim',28),(24,'jasil user',29),(25,'jasil',30),(26,'good',29),(27,'zzz',31),(28,'zzz',32);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobile_brands`
--

DROP TABLE IF EXISTS `mobile_brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobile_brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobile_brands`
--

LOCK TABLES `mobile_brands` WRITE;
/*!40000 ALTER TABLE `mobile_brands` DISABLE KEYS */;
INSERT INTO `mobile_brands` VALUES (7,'Samsung'),(8,'Sony'),(9,'HTC');
/*!40000 ALTER TABLE `mobile_brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobile_details`
--

DROP TABLE IF EXISTS `mobile_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobile_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile_brand_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `specification_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mobile_brand_id` (`mobile_brand_id`),
  KEY `specification_id` (`specification_id`),
  CONSTRAINT `mobile_details_ibfk_1` FOREIGN KEY (`mobile_brand_id`) REFERENCES `mobile_brands` (`id`),
  CONSTRAINT `mobile_details_ibfk_2` FOREIGN KEY (`specification_id`) REFERENCES `specifications` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobile_details`
--

LOCK TABLES `mobile_details` WRITE;
/*!40000 ALTER TABLE `mobile_details` DISABLE KEYS */;
INSERT INTO `mobile_details` VALUES (1,7,' Samsung Galaxy S Duos 2 S7582 (Black)','black',7791,'/files/images/Samsung_Galaxy_S_Duos_2_S7582_Black.jpeg',NULL),(4,7,'Samsung Galaxy Core 2','white',11394,'/files/images/Samsung_Galaxy_Core_2.jpeg',NULL),(5,8,'Sony Xperia C','white',13999,'/files/images/sony_xperia_c.jpeg',NULL),(6,8,'xperia z','black',18443,'/files/images/sony_xperia_z.jpeg',NULL),(8,9,'HTC Desire 616','grey',15488,'/files/images/HTC_Desire_616_grey.jpeg',NULL),(9,9,'HTC Desire 700','white',17634,'/files/images/HTC_Desire_700_.jpeg',NULL),(13,8,'Sony Xperia C3','Mint',20939,'/files/images/Sony_Xperia_C3.jpeg',NULL),(14,8,'Sony Xperia L','white',13949,'/files/images/Sony_Xperia_L.jpeg',NULL),(15,8,'Sony Xperia M','white',9367,'/files/images/Sony_Xperia_M.jpeg',NULL),(16,7,'Samsung Galaxy Note 3','black',33239,'/files/images/Samsung_Galaxy_Note_3.jpeg',NULL),(17,7,'Samsung Galaxy Grand Neo','white',13807,'/files/images/Samsung_Galaxy_Grand_Neo.jpeg',NULL),(18,7,'Samsung Galaxy Star Pro','white',5520,'/files/images/Samsung_Galaxy_Star_Pro.jpeg',NULL),(19,9,'HTC Desire 816','white',21720,'/files/images/HTC_Desire_816.jpeg',NULL),(20,9,'HTC Desire 310 Dual Sim','white',9897,'/files/images/HTC_Desire_310_Dual_Sim.jpeg',NULL),(21,9,'HTC Desire 500','passion red',18160,'/files/images/HTC_Desire_500.jpeg',NULL);
/*!40000 ALTER TABLE `mobile_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specifications`
--

DROP TABLE IF EXISTS `specifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile_detail_id` int(11) NOT NULL,
  `primary_camera` varchar(11) DEFAULT NULL,
  `secondary_camera` varchar(11) DEFAULT NULL,
  `os` varchar(25) DEFAULT NULL,
  `screen` varchar(25) DEFAULT NULL,
  `internal_memory` varchar(25) DEFAULT NULL,
  `expandable_memory` varchar(25) DEFAULT NULL,
  `processor` varchar(25) DEFAULT NULL,
  `resolution` varchar(25) DEFAULT NULL,
  `flash` varchar(25) DEFAULT NULL,
  `talk_time` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mobile_detail_id` (`mobile_detail_id`),
  CONSTRAINT `specifications_ibfk_1` FOREIGN KEY (`mobile_detail_id`) REFERENCES `mobile_details` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specifications`
--

LOCK TABLES `specifications` WRITE;
/*!40000 ALTER TABLE `specifications` DISABLE KEYS */;
INSERT INTO `specifications` VALUES (1,1,'5mp primary','0.3mp secon','Android v4.2 OS','4','4 GB','microSD, upto 64 GB','1.2 GHz Dual Core Applica','WVGA, 480 x 800 Pixels','LED','8 hrs (3G)'),(4,4,'5 MP Primar','0.3 MP Seco','Android v4.4 (KitKat) OS','4.5','4 GB','microSD, upto 64 GB','1.2 GHz, Quad Core','WVGA, 480 x 800 Pixels','LED','8 hrs (3G)'),(5,5,'8 MP Primar','0.3 MP Seco','Android v4.2.2 OS','5','4 GB','microSD, upto 32 GB','1.2 GHz MTK6589 Quad Core','qHD, 960 x 540 Pixels','Pulsed LED','10 hrs (2G), 10 hrs (3G)'),(6,6,'13 MP Prima','2 Megapixel','Android v4.1','5','16 GB','microSD, upto 32 GB','1.5 GHz Qualcomm Snapdrag','Full HD, 1080 x 1920 Pixe','LED','11 hrs (2G), 14 hrs (3G)'),(8,8,'8 MP Primar','2 MP Second','Android 4.2.2','5','4 GB','microSD, upto 32 GB','1.4 GHz','HD, 1280 x 720 Pixels','yes','14 hrs (3G)'),(9,9,'8 MP Primar','2.1 MP Seco','Android v4.1.2','5','8 GB','microSD, upto 64 GB','1.2 GHz Quad Core Process','qHD, 960 x 540 Pixels','LED','8 hrs (3G)'),(13,13,'8 MP Primar','5 MP Second','Android v4.4','5.5','8 GB ','microSD, upto 32 GB','1.2 GHz Qualcomm MSM8926 ','HD, 1280 x 720 Pixels','Pulsed LED','11 hrs (2G), 25 hrs (3G)'),(14,14,'8 MP Primar','0.3 MP Seco','Android v4.1 OS','4.3','8 GB','microSD, upto 32 GB','1 GHz Qualcomm, Dual Core','FWVGA, 480 x 854 Pixels','LED','8 hrs (2G), 9 hrs (3G)'),(15,15,'5 MP Primar','0.3 MP Seco','Android v4.1','4','4 GB','microSD, upto 32 GB','1 GHz Qualcomm Snapdragon','FWVGA, 854 x 480 Pixels','LED','10 hrs (2G), 9 hrs (3G)'),(16,16,'13 Megapixe','2 Megapixel','Android v4.3','5.7','32 GB','microSD, upto 64 GB','Octa Core Processor (1.9 ','Full HD, 1920 x 1080 Pixe','LED','20 hr'),(17,17,'5 Megapixel','0.3 Megapix','Android v4.2','5.1','8 GB','microSD, upto 64 GB','1.2 GHz, Quad Core','WVGA, 480 x 800 Pixels','LED','11 hrs (3G)'),(18,18,'2 MP Primar','no','Android Jelly Bean','4','4 GB','microSD, upto 32 GB','1 GHz Cortex-A5 Processor','WVGA, 480 x 800 Pixels','no','15 hrs (2G)'),(19,19,'13 MP Prima','5 MP Second','Android OS, v4.4.2','5.5','8 GB','microSD, upto 128 GB','1.6 GHz Qualcomm Snapdrag','HD, 1280 x 720 Pixels','yes','21 hrs (3G)'),(20,20,'0.3 MP Seco','5 MP Primar','Android v4.2 OS','4.5','4 GB','microSD, upto 32 GB','1.3 GHz Quad Core Process','FWVGA, 854 x 480 Pixels','no','11 hrs (3G)'),(21,21,'8 MP Primar','1.6 MP Seco','Android v4.1','4.3','4 GB','microSD, upto 64 GB','1.2 GHz Qualcomm Snapdrag','WVGA, 480 x 800 Pixels','led','12 hrs (3G)');
/*!40000 ALTER TABLE `specifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store_details`
--

DROP TABLE IF EXISTS `store_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile_brand_id` int(11) NOT NULL,
  `mobile_detail_id` int(11) NOT NULL,
  `store_name` varchar(50) DEFAULT NULL,
  `store_url` varchar(255) NOT NULL,
  `store_price` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mobile_brand_id` (`mobile_brand_id`),
  KEY `mobile_detail_id` (`mobile_detail_id`),
  CONSTRAINT `store_details_ibfk_1` FOREIGN KEY (`mobile_brand_id`) REFERENCES `mobile_brands` (`id`),
  CONSTRAINT `store_details_ibfk_2` FOREIGN KEY (`mobile_detail_id`) REFERENCES `mobile_details` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store_details`
--

LOCK TABLES `store_details` WRITE;
/*!40000 ALTER TABLE `store_details` DISABLE KEYS */;
INSERT INTO `store_details` VALUES (1,7,1,'Flipkart','http://www.flipkart.com/samsung-galaxy-s-duos-2-s7582/p/itmdwzrbfzursyuy?pid=MOBDQZPY6EUNAPXJ&affid=sulakshanm&affExtParam1=electronics&affExtParam2=14108518715989','7940'),(2,7,1,'ebay','http://www.ebay.in/itm/Samsung-Galaxy-S-Duos-2-S7582-black-1-Year-Samsung-India-Warranty-/251630994127?aff_source=mysmartprice','7791'),(3,7,4,'flipkart','http://www.flipkart.com/samsung-galaxy-core-2-sm-g355h/p/itmdy3h6qhgz2phv?pid=MOBDY3H2W7WMTVCX&affid=sulakshanm&affExtParam1=electronics&affExtParam2=14108537349271','11589'),(4,7,4,'ebay','http://www.ebay.in/itm/SAMSUNG-GALAXY-CORE-2-DUOS-G355H-white-1-YEAR-MANUFACTURER-WARRANTY-/251630968998?aff_source=mysmartprice','11394'),(5,7,4,'snapdeal','http://www.snapdeal.com/product/samsung-galaxy-core-2-4gb/95934411?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=13521&aff_sub=electronics&aff_sub2=14108744204727','11591'),(6,8,5,'flipkart','http://www.flipkart.com/sony-xperia-c/p/itmdv6f72vn3sftr?pid=MOBDP6W69AT2FWKK&otracker=from-search&srno=t_2&query=sony+xperia+c&ref=ec84284c-052b-4daa-923e-bd883e0665d9','16990'),(7,8,5,'ebay','http://www.ebay.in/itm/New-Imported-Sony-Xperia-C-dualSIM-white-DAMAGED-NEAR-SPEAKER-accessories-/131286598442?aff_source=mysmartprice','13999'),(8,8,5,'snapdeal','http://www.snapdeal.com/product/sony-xperia-c-white/1436621591#bcrumbSearch:|bcrumbLabelId:175','15017'),(9,8,6,'flipkart','http://www.flipkart.com/sony-xperia-z/p/itmdv6f7jewegnsq?pid=MOBDGPDZ5BRABR2W&otracker=from-search&srno=t_1&query=xperia+z&ref=d0d9f4db-17a1-458c-9892-e91f3c92c0fd','31999'),(10,8,6,'ebay','http://www.ebay.in/itm/Deal-Brand-New-Sealed-Sony-Xperia-Z-Water-Resistant-Black-Color-/221528855082?pt=IN_Mobile_Phones&hash=item339426122a','18443'),(11,8,6,'snapdeal','http://www.snapdeal.com/product/sony-xperia-z-white/685812?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=13521&aff_sub=electronics&aff_sub2=14108557232367','28301'),(12,9,8,'Flipkart','http://www.flipkart.com/htc-desire-616-dual-sim/p/itmdy3h6zahyc6w6?pid=MOBDY3H289GHKPAH&affid=sulakshanm&affExtParam1=electronics&affExtParam2=141086451865210','15675'),(13,9,8,'ebay','http://www.ebay.in/itm/Deal-HTC-India-Warranty-Desire-616-dual-SIM-Dark-Grey-/131275508314?aff_source=mysmartprice','15488'),(14,9,8,'snapdeal','http://www.snapdeal.com/product/htc-desire-616-grey/567912314#bcrumbSearch:|bcrumbLabelId:175','15659'),(15,9,9,'ebay','http://www.ebay.in/itm/HTC-Desire-700-White-/151408800620?aff_source=mysmartprice','17634'),(16,9,9,'snapdeal','http://www.snapdeal.com/product/htc-desire-700-white/1710644229?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=13521&aff_sub=electronics&aff_sub2=141086451865210','18347'),(17,8,13,'flipkart','http://www.flipkart.com/sony-xperia-c3/p/itmdzb9hskqfhwgu?pid=MOBDZB9GKD3MA7JA&affid=sulakshanm&affExtParam1=electronics&affExtParam2=14108720953336','22830'),(18,8,13,'snapdeal','http://www.snapdeal.com/product/sony-xperia-c3-mint/599368180?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=13521&aff_sub=electronics&aff_sub2=14108720953336','21999'),(19,8,13,'ebay','http://www.ebay.in/itm/Sony-Xperia-Smartphone-C3-Dual-Mint-Colour-Company-Sealed-1-yr-Sony-India-Warr-/151408798833?pt=IN_Mobile_Phones&hash=item2340aaec71','20,939'),(20,8,14,'flipkart','http://www.flipkart.com/sony-xperia-l/p/itmdv6f5fm4sghwr?pid=MOBDKG7VPGHHVQNZ&affid=sulakshanm&affExtParam1=electronics&affExtParam2=14108720953336','14282'),(21,8,14,'snapdeal','http://www.snapdeal.com/product/sony-xperia-l-white/397026083?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=13521&aff_sub=electronics&aff_sub2=14108720953336','13949'),(22,8,15,'flipkart','http://www.flipkart.com/sony-xperia-m/p/itmdv6f7wm6xfhhv?pid=MOBDN9RGAUDJQECF&affid=sulakshanm&affExtParam1=electronics&affExtParam2=14108744204727','9899'),(23,8,15,'snapdeal','http://www.snapdeal.com/product/sony-xperia-m-white/869567953?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=13521&aff_sub=electronics&aff_sub2=14108744204727','9869'),(24,8,15,'ebay','http://www.ebay.in/itm/Sony-Xperia-M-Black-Single-Sim-GSM-5-MP-Camera-1-GB-RAM-DOW-/161419983709?aff_source=mysmartprice','9367'),(25,7,16,'flipkart','http://www.flipkart.com/samsung-galaxy-note-3-n9000/p/itmdv6f5dmrdkj2h?pid=MOBDZQ2EGPHQPJCH&affid=sulakshanm&affExtParam1=electronics&affExtParam2=14108762598758','39900'),(26,7,16,'snapdeal','http://www.snapdeal.com/product/samsung-galaxy-note-3-black/26460827?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=13521&aff_sub=electronics&aff_sub2=14108762598758','40889'),(27,7,16,'ebay','http://www.ebay.in/itm/Deal-35-New-Imported-Samsung-Galaxy-Note-3-N900-32GB-3GB-RAM-rose-gold-black-/141390447450?aff_source=mysmartprice','33239'),(28,7,17,'flipkart','http://www.flipkart.com/samsung-galaxy-grand-neo-gt-i9060/p/itmdv6f7uvrrzxaq?pid=MOBDTGFZ8BRJVGS3&affid=sulakshanm&affExtParam1=electronics&affExtParam2=14108762598758','14332'),(29,7,17,'ebay','http://www.ebay.in/itm/Samsung-Galaxy-Grand-Neo-GT-I9060-White-/151393256266?aff_source=mysmartprice','13807'),(30,7,17,'snapdeal','http://www.snapdeal.com/product/samsung-galaxy-grand-neo-gti9060/1301413077?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=13521&aff_sub=electronics&aff_sub2=14108762598758','14706'),(31,7,18,'flipkart','http://www.flipkart.com/samsung-galaxy-star-pro-s7262/p/itmdzkkxxvgzaysg?pid=MOBDP6W62AJNWKZJ&affid=sulakshanm&affExtParam1=electronics&affExtParam2=14108762598758','5520'),(32,7,18,'ebay','http://www.ebay.in/itm/SAMSUNG-GALAXY-STAR-PRO-S7262-4GB-2-0MP-MOBILE-PHONE-WHITE-Brand-New-/121434323649?aff_source=mysmartprice','5650'),(33,7,18,'snapdeal','http://www.snapdeal.com/product/samsung-galaxy-star-pro-white/247389602#bcrumbSearch:Samsung%20Galaxy%20Star%20Pro','5590'),(34,9,19,'flipkart','http://www.flipkart.com/htc-desire-816/p/itmdwgcegvq22g3b?pid=MOBDWHY9YWSCZTF3&affid=sulakshanm&affExtParam1=electronics&affExtParam2=14108782372332','21720'),(35,9,19,'ebay','http://www.ebay.in/itm/Brand-New-HTC-Desire-816-Single-SIM-8GB-WHITE-Color-/171460878058?pt=IN_Mobile_Phones&hash=item27ebdd5eea','26999'),(36,9,19,'snapdeal','http://www.snapdeal.com/product/htc-desire-816-dual-sim/697144087#bcrumbSearch:|bcrumbLabelId:175','22629'),(37,9,20,'flipkart','http://www.flipkart.com/htc-desire-310-dual-sim/p/itmdv6ezn6hkqznc?pid=MOBDURXPVJYHYUQ6&otracker=from-search&srno=t_1&query=HTC+Desire+310+Dual+Sim&ref=4ca122d9-c8ae-432e-a4e9-3de2811a2c45','9950'),(38,9,20,'ebay','http://www.ebay.in/itm/HTC-Desire-310-DS-White-/281434254876?aff_source=mysmartprice','10500'),(39,9,20,'snapdeal','http://www.snapdeal.com/product/htc-desire-310-white/2026701078?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=13521&aff_sub=electronics&aff_sub2=14108782372332','9897'),(40,9,21,'flipkart','http://www.flipkart.com/htc-desire-500/p/itmdv6f6zhzncf4r?pid=MOBDPEZCPRE58PQY&affid=sulakshanm&affExtParam1=electronics&affExtParam2=14108782372332','18459'),(41,9,21,'ebay','http://www.ebay.in/itm/HTC-Desire-500-4-GB-Red-Smartphone-/161402310067?aff_source=mysmartprice','18999'),(42,9,21,'snapdeal','http://www.snapdeal.com/product/htc-desire-500-blue/1811297248?utm_source=aff_prog&utm_campaign=afts&offer_id=17&aff_id=13521&aff_sub=electronics&aff_sub2=14108782372332','18160');
/*!40000 ALTER TABLE `store_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_reviews`
--

DROP TABLE IF EXISTS `user_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `mobile_detail_id` int(11) NOT NULL,
  `rating` enum('poor','average','satisfactory','good','very good') DEFAULT NULL,
  `review` text,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `mobile_detail_id` (`mobile_detail_id`),
  CONSTRAINT `user_reviews_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  CONSTRAINT `user_reviews_ibfk_2` FOREIGN KEY (`mobile_detail_id`) REFERENCES `mobile_details` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_reviews`
--

LOCK TABLES `user_reviews` WRITE;
/*!40000 ALTER TABLE `user_reviews` DISABLE KEYS */;
INSERT INTO `user_reviews` VALUES (1,7,19,'satisfactory','good');
/*!40000 ALTER TABLE `user_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `login_type` enum('admin','user') NOT NULL,
  `active` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (12,'jasil@admin.com','d5fd1a37579c26b6e43f4860db64a942de73fb26','admin','Y'),(25,'deepika@gmail.com','f45db876c2b069bf009ed0f5f2d76b35ee2771f4','user','Y'),(26,'arman@gmail.com','28573f3bede980e6f4e9a1c5ca24c072faeb3fb8','user','Y'),(28,'susim@gmail.com','772cc59d3119801ef297c8073e79af0a9184ad58','user','Y'),(29,'jasil@user.com','d5fd1a37579c26b6e43f4860db64a942de73fb26','user','Y'),(30,'jasil@gmail.com','d5fd1a37579c26b6e43f4860db64a942de73fb26','user','Y'),(31,'zzz@gmail.com','31c0b823245db7dc27d896211c167a50a0617121','user','Y'),(32,'zzzzz@gmail.com','31c0b823245db7dc27d896211c167a50a0617121','user','Y');
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

-- Dump completed on 2014-09-22  9:58:19
