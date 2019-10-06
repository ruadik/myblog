-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: myblog
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Current Database: `myblog`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `myblog` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `myblog`;

--
-- Table structure for table `Posts_Tags`
--

DROP TABLE IF EXISTS `Posts_Tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Posts_Tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Posts_Tags`
--

LOCK TABLES `Posts_Tags` WRITE;
/*!40000 ALTER TABLE `Posts_Tags` DISABLE KEYS */;
INSERT INTO `Posts_Tags` VALUES (1,1,1,NULL,NULL),(2,2,1,NULL,NULL),(3,3,1,NULL,NULL),(4,4,2,NULL,NULL),(5,5,2,NULL,NULL),(6,6,2,NULL,NULL),(7,7,2,NULL,NULL),(8,8,2,NULL,NULL),(9,9,3,NULL,NULL),(10,10,3,NULL,NULL),(11,11,4,NULL,NULL),(12,12,5,NULL,NULL),(13,13,6,NULL,NULL),(14,14,7,NULL,NULL),(15,15,8,NULL,NULL),(16,16,8,NULL,NULL),(17,17,8,NULL,NULL),(18,19,9,NULL,NULL),(19,20,20,NULL,NULL),(20,21,2,NULL,NULL);
/*!40000 ALTER TABLE `Posts_Tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'qui','qui','2019-10-02 14:02:35','2019-10-02 14:02:35'),(2,'commodi','commodi','2019-10-02 14:02:35','2019-10-02 14:02:35'),(3,'quaerat','quaerat','2019-10-02 14:02:35','2019-10-02 14:02:35'),(4,'quae','quae','2019-10-02 14:02:35','2019-10-02 14:02:35'),(5,'dolore','dolore','2019-10-02 14:02:35','2019-10-02 14:02:35');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (2,'Второй комент',2,1,1,'2019-10-03 10:08:11','2019-10-04 07:15:36'),(3,'Запрещенный',5,1,1,'2019-10-03 10:15:13','2019-10-04 07:15:35'),(4,'Урааа!!!',5,1,1,'2019-10-03 11:17:40','2019-10-04 07:15:35'),(7,'Новый комент',1,1,1,'2019-10-03 14:38:47','2019-10-04 07:15:35'),(8,'А еще хотите?',2,1,1,'2019-10-03 14:39:04','2019-10-03 15:23:22'),(9,'Давай еще',4,1,1,'2019-10-03 14:39:14','2019-10-03 14:39:46'),(10,'Хе хейййй!!',1,1,0,'2019-10-04 08:24:53','2019-10-04 08:24:53'),(11,'Ни че сее!!!',1,1,0,'2019-10-04 08:25:25','2019-10-04 08:25:25'),(12,'qsdcsdc',1,3,1,'2019-10-05 18:13:26','2019-10-05 18:13:47'),(13,'sdasd',1,2,1,'2019-10-05 18:26:28','2019-10-05 18:26:38');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_09_16_094002_create_categories_table',1),(5,'2019_09_16_094723_create_tags_table',1),(6,'2019_09_16_094839_create_comments_table',1),(7,'2019_09_16_095156_create_subscriptions_table',1),(8,'2019_09_16_095832_create_posts_table',1),(9,'2019_09_16_100848_create__posts__tags_table',1),(10,'2019_09_23_092820_add_column_user',1),(11,'2019_09_23_144038_change_user_password_column',1),(12,'2019_09_26_154548_add_colunm__data__image_in_posts',1),(13,'2019_09_30_075632_add_column_description_in_posts',1),(14,'2019_10_02_134908_add_column_description_in_users',1),(16,'2019_10_03_100441_chang_status_in_comments',2),(17,'2019_10_05_080508_add_column_is_ban_in_users',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `is_featured` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'odit','odit','<p>Nam odit consequatur molestiae non laborum omnis nobis sit eligendi dolorum laudantium corporis nulla voluptatem quisquam libero earum earum modi odio fuga molestias ullam sint soluta culpa ipsum placeat maxime explicabo ex iste molestiae consequatur consectetur ea accusamus ducimus quia officia voluptatum eum eligendi.</p>',1,2,1,2315,1,'2019-10-02 14:02:27','2019-10-05 18:14:37','I5kNVb49zO.jpeg','2019-09-29','<p>Nihil doloribus suscipit atque quia repellendus vel nihil voluptates voluptatem velit doloribus quia omnis itaque quod omnis quo magni deserunt dolores.</p>'),(2,'totam','totam','<p>Praesentium aut incidunt quo consequatur voluptatum fuga doloribus quo eum veritatis et laborum numquam facilis nostrum debitis commodi id eaque velit sed laudantium aliquam iusto et ex consequatur cupiditate aut vel dicta laborum iusto rerum rerum cupiditate et sunt necessitatibus et voluptas consequatur eaque quisquam cumque suscipit voluptas commodi nesciunt vitae consequatur beatae aut totam perferendis fugit blanditiis ipsum sit nihil veritatis non.</p>',1,3,1,4789,1,'2019-10-02 14:02:27','2019-10-05 07:37:26','R4a2eseJ0I.jpeg','2019-09-29','<p>Est non alias autem vel unde dolores nostrum similique possimus quod quis sit molestiae eaque architecto cupiditate.</p>'),(3,'doloribus','doloribus','<p>Beatae rem asperiores laborum quas fuga velit perferendis laudantium esse odio quis tempora laborum possimus id in minus ducimus necessitatibus harum qui et tempora consequatur voluptatem similique sint occaecati laboriosam aperiam eius incidunt assumenda voluptatem voluptas qui nemo officiis quia magnam corrupti odio cumque ipsum quis dolor omnis sint et sed repudiandae consequatur est nobis quaerat quis sed nihil enim sit iusto sit nesciunt voluptatem veniam sit at cupiditate et quo.</p>',1,5,1,597,1,'2019-10-02 14:02:27','2019-10-05 09:23:28','RSwCwOvwQJ.jpeg','2019-09-29','<p>Rerum qui qui omnis officia aliquid sint ea enim adipisci ipsum deserunt cupiditate explicabo reprehenderit deleniti dolores tempore provident magnam.</p>'),(4,'recusandae','recusandae','<p>Maxime mollitia eius necessitatibus ipsa repellat et unde ad fugit in voluptates magni eveniet delectus accusamus recusandae beatae numquam est et natus debitis commodi et aliquid qui magnam amet tempore quos in labore qui necessitatibus culpa cupiditate inventore magni sit tenetur similique fugit pariatur in et perferendis aut non aut iure ad quis voluptates iusto corrupti dolore aspernatur et placeat culpa dolorem distinctio quia.</p>',1,3,1,4809,1,'2019-10-02 14:02:27','2019-10-05 09:23:41','qcafOm7s5O.jpeg','2019-09-29','<p>Minima officiis et incidunt reiciendis animi ut dignissimos tempora in voluptatem ad quo ipsam nesciunt id officia laboriosam aliquid debitis consequatur vel.</p>'),(5,'quae','quae','<p>Aut eligendi nihil est consequatur necessitatibus deleniti molestiae at repellendus porro velit ut dolore dolore illo ut rerum amet laudantium rerum quis assumenda at sed sit expedita provident quia voluptatem beatae harum sit impedit sunt dicta omnis dignissimos fuga dignissimos autem.</p>',1,4,1,3754,1,'2019-10-02 14:02:27','2019-10-05 09:23:55','RSwCwOvwQJ.jpeg','2019-09-29','<p>Necessitatibus architecto hic animi dolorem beatae iure voluptatum delectus ad iste officia ab saepe qui animi deleniti est temporibus qui recusandae est vel et sequi ducimus dolorem autem facere quaerat quos.</p>'),(6,'qui','qui','Soluta ut atque quidem et doloremque ratione molestiae hic quis blanditiis ad numquam ullam rem excepturi excepturi velit quibusdam dicta eligendi et nemo doloribus temporibus provident rem culpa eligendi exercitationem ipsam maxime maxime rerum dolores praesentium illum ea illo repudiandae id non placeat exercitationem accusantium provident aperiam non vitae consequatur sapiente minus error necessitatibus ea enim suscipit tempora aut natus dolor aut mollitia ad porro cumque blanditiis recusandae iste nobis dolorum officia.',1,1,1,4156,1,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Earum quia quaerat sequi deleniti quam totam non laudantium nesciunt odit ex amet quidem dolorem quisquam sunt ut et molestiae omnis.'),(7,'exercitationem','exercitationem','Dolor temporibus quia nostrum nemo quam et modi dignissimos debitis maiores non quod quibusdam enim libero pariatur labore consequatur qui quibusdam veritatis enim quo eaque aliquam placeat sequi ab et error voluptas autem iste nemo id possimus laudantium quae optio perspiciatis aut laborum quas ab nostrum reiciendis ducimus veniam id quos et harum officia ad voluptatem occaecati ut assumenda soluta et tempora alias sequi.',4,1,1,1040,1,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Sit harum harum facere eum soluta maiores quo aliquid error quibusdam ad molestiae sapiente suscipit sunt omnis dolores quia.'),(8,'voluptatem','voluptatem','Consequatur recusandae omnis quis debitis asperiores qui tempore aut consequatur fuga at non dolore natus et id et saepe iusto in ut dolore quia alias provident ad minus enim nemo repellat delectus ducimus repellat nemo asperiores occaecati et nesciunt quaerat architecto delectus iusto aperiam ex doloremque quod sed aut quisquam dolores illo mollitia ducimus architecto quibusdam ut dolore quibusdam perferendis.',2,1,1,1887,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Vero perspiciatis officiis sunt molestias labore unde in iusto a sed autem exercitationem explicabo porro voluptas dolorem architecto neque reiciendis et quaerat est animi.'),(9,'ullam','ullam','Rerum sit deserunt aut sit similique temporibus voluptates dolores rerum illo similique sint rerum neque consequatur doloribus nihil laboriosam laboriosam perspiciatis eos et dolorum laboriosam et nisi itaque quo ex qui ut itaque numquam voluptas nam enim officiis qui expedita ea soluta ut quasi dolorem accusamus enim veritatis vitae qui est est pariatur omnis sed vel voluptates nam est omnis quia et consequatur esse numquam explicabo in quo.',2,2,1,2647,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Inventore in eos temporibus ea aut perspiciatis dolorum ab et maiores saepe id dolores pariatur aliquid eligendi et et mollitia sint id ipsam doloribus doloribus impedit est et iste amet et qui earum ut debitis.'),(10,'at','at','Qui ut commodi harum reprehenderit maxime fugiat mollitia numquam facere quibusdam eius officia veritatis delectus saepe assumenda nobis et doloribus aut dolor repellendus quo voluptatibus ducimus vitae rem corporis voluptas rerum pariatur dolorum ut incidunt et illum numquam nulla ipsum nesciunt accusantium eos sint quia earum maiores sunt quam dicta facere id esse minus sequi recusandae iusto excepturi sit quisquam nihil aut aut non.',3,2,1,887,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Nostrum est nemo temporibus qui ab dolores autem eum ducimus distinctio excepturi amet sit velit quis consequatur molestias sint qui excepturi repellendus nemo nisi repellat vel sed quidem sed porro.'),(11,'quia','quia','Et soluta voluptatum reprehenderit molestiae eius error non ea nihil tenetur vero provident perferendis sed cum nulla voluptatibus ea distinctio voluptatibus consequatur voluptatibus facilis voluptas maiores numquam occaecati et enim iste odit facilis temporibus modi aperiam cupiditate explicabo dolore at dicta quam deleniti maxime tempore earum dolorem assumenda voluptatem culpa reprehenderit impedit provident reiciendis ratione consequatur incidunt maiores temporibus tenetur eum ad eos molestiae quia et nesciunt nihil eum.',5,5,1,261,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Et rerum enim veniam odit numquam aut quia sit qui pariatur nostrum in est ex impedit quia et ullam mollitia quisquam a autem quibusdam rerum suscipit quia accusantium et.'),(12,'fugit','fugit','Eos optio ipsa illum asperiores non quod consectetur earum qui dolore est sed eos et aliquam error iusto ut qui quia quasi voluptates esse voluptatem aut animi qui magni est veritatis dolor quod vero voluptatem doloribus velit commodi officiis qui ut et quo ex.',1,1,1,1122,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Sequi ullam aperiam sint libero alias ipsam adipisci ullam consectetur laudantium ut nobis veritatis aut odit porro ad expedita est fugit vitae veniam ipsam sapiente ex aliquam et voluptatum nobis delectus aut dolorem.'),(13,'excepturi','excepturi','Pariatur voluptatum eum reiciendis nihil doloribus est dolore unde cumque doloremque reprehenderit voluptatem quia aut quis fugit consectetur est voluptas optio repellendus eaque voluptas ipsam voluptatem odit quia qui quidem quo voluptatum aut et dicta sed repudiandae quia eos autem eum et voluptates consequatur voluptas reprehenderit natus odio ducimus.',5,2,1,684,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Dolorem provident cumque et facilis placeat sed repellat est ex perspiciatis esse omnis officia pariatur facilis ut sunt hic nihil veritatis consequatur.'),(14,'sequi','sequi','Sed consequatur voluptatem quia occaecati quo sunt repudiandae accusantium ad iure tempora totam ut facere nam ea eum facere natus illo eos eveniet laudantium nihil omnis ut impedit consequatur possimus quae et suscipit ipsum voluptatem harum odit vel totam at adipisci eaque ad ab accusamus tenetur facilis quia rerum magnam natus iure qui ab minus soluta eveniet eius ipsam modi eveniet maiores.',2,3,1,4435,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Nostrum deleniti odio laboriosam sequi rerum natus quae quia quia vero saepe et vero maxime eius aut non occaecati qui repudiandae esse officia provident rem a.'),(15,'totam','totam-1','Consequuntur praesentium voluptatem totam et qui et quidem excepturi et dolor fugiat cupiditate enim vel in natus velit magnam dignissimos labore a perspiciatis nemo autem dolor voluptatem qui ut ut molestiae totam veritatis ad fugiat odio aspernatur est delectus est suscipit veniam odit consequuntur placeat odit saepe cupiditate sit molestiae nulla et omnis ab reiciendis expedita.',4,1,1,2411,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Omnis sunt dolores iusto commodi dolore autem perferendis sint omnis velit qui illum dolor vero recusandae iste ut sint autem iste molestias deleniti provident et fuga qui nulla qui voluptatum.'),(16,'animi','animi','Enim autem dolore quia tempore voluptatibus veniam iusto dolore a numquam suscipit debitis eos voluptatum sunt debitis ipsum at ut adipisci nesciunt et architecto dolorem distinctio aut officiis laboriosam ab accusamus et sit omnis qui ratione velit fugit ex impedit quis quis architecto rerum possimus iste necessitatibus quo quas quo fugiat quos commodi nemo asperiores.',5,2,1,1945,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Omnis tempora autem quos perspiciatis sed sint unde aut itaque ad architecto deserunt quia est culpa non eos nihil necessitatibus aliquam voluptatibus et voluptatem doloribus repellat.'),(17,'veniam','veniam','Eos veniam voluptatem dolorum temporibus id dolores velit asperiores odit quidem autem doloremque repudiandae optio perspiciatis occaecati inventore libero et consequatur aut velit nemo laudantium ipsum voluptate explicabo quia eum quia sed eaque eligendi aut cupiditate est id est laudantium ut omnis iusto itaque laboriosam qui tenetur unde quam qui consequuntur in nesciunt ratione omnis recusandae fugit debitis.',1,3,1,4743,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Architecto nobis sit natus cupiditate reprehenderit odit animi velit voluptatem pariatur debitis enim aut magni sit voluptates eos consequatur dolore ad est occaecati ut dolorum molestiae blanditiis aut ut aut non tenetur.'),(18,'modi','modi','Ex et dolor debitis dolore dicta odio deserunt nisi pariatur quas pariatur iure et autem maxime repellat facilis rem et omnis est ipsa enim odio ut sed voluptas reiciendis eos aperiam quia iste praesentium cupiditate qui totam ipsa consequatur sequi pariatur in ducimus quos aut rerum ut dolores sequi amet ut debitis possimus facere eum rerum autem error vitae animi et consequatur ea repellendus est quasi assumenda mollitia et atque est autem exercitationem qui.',1,4,1,2221,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Aut quibusdam esse pariatur ducimus totam quo incidunt est omnis excepturi et magni qui ipsa atque nemo et iste debitis modi blanditiis eum delectus ipsam quis quia.'),(19,'voluptatem','voluptatem-1','Perspiciatis culpa modi aspernatur omnis sit corporis nihil explicabo tenetur est aperiam non incidunt doloribus praesentium eaque aut et labore similique maxime soluta corrupti dolores placeat optio ducimus aspernatur et beatae ipsa exercitationem sequi ex consequatur temporibus.',2,2,1,2897,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Perferendis mollitia deleniti voluptatum est cupiditate ipsam explicabo et deleniti assumenda ut corrupti quas voluptatum a maiores alias voluptas at facilis reiciendis harum impedit aut.'),(20,'eveniet','eveniet','Eos nihil dolores minima molestiae beatae illo cumque molestias dolores qui nam accusamus eos libero veritatis nihil deserunt velit exercitationem ratione rerum culpa odit pariatur quia veniam qui culpa odio est velit omnis omnis fuga eum unde saepe eos magnam quia qui nisi enim explicabo recusandae dolorem sunt maiores et impedit ab modi fugit quos nesciunt dolor fugit autem commodi eum cumque molestiae vel tempore veniam et culpa aliquid ut qui qui pariatur est autem.',2,3,1,4283,0,'2019-10-02 14:02:27','2019-10-02 14:02:27','I5kNVb49zO.jpeg','2019-09-29','Natus qui et accusamus ex voluptatem amet placeat beatae qui quisquam amet ea aut consequatur veniam dignissimos maxime rerum.'),(21,'fv dc','fv-dc','<p>wedcwdfc</p>',2,1,1,0,1,'2019-10-05 18:17:38','2019-10-05 18:17:38','1i5MqqcoB7.jpeg','2019-10-16','<p>efefceefc</p>');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
INSERT INTO `subscriptions` VALUES (24,'test@test.ru',NULL,'2019-10-04 11:24:36','2019-10-04 11:25:01'),(25,'adasd@asd.asd',NULL,'2019-10-04 17:29:09','2019-10-04 17:29:09'),(26,'asd@asd.asd',NULL,'2019-10-04 17:29:34','2019-10-04 17:29:34'),(27,'asd@asdsf.ad',NULL,'2019-10-04 17:31:23','2019-10-04 17:31:23'),(28,'zdfgdfgxfgdfg@sd.asdf',NULL,'2019-10-04 17:37:12','2019-10-04 17:37:12'),(29,'sdf@ms.sdf',NULL,'2019-10-04 17:38:26','2019-10-04 17:38:26'),(30,'adik19565@mail.russs',NULL,'2019-10-04 17:39:14','2019-10-04 17:39:14'),(31,'qweqwe@asd.asdkkkk',NULL,'2019-10-04 17:39:58','2019-10-04 17:39:58'),(33,'qweqwe@asd.asd',NULL,'2019-10-04 17:54:28','2019-10-04 17:54:28');
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'illo','illo','2019-10-02 14:02:22','2019-10-02 14:02:22'),(2,'quibusdam','quibusdam','2019-10-02 14:02:22','2019-10-02 14:02:22'),(3,'sed','sed','2019-10-02 14:02:22','2019-10-02 14:02:22'),(4,'eaque','eaque','2019-10-02 14:02:22','2019-10-02 14:02:22'),(5,'saepe','saepe','2019-10-02 14:02:22','2019-10-02 14:02:22'),(6,'occaecati','occaecati','2019-10-02 14:02:22','2019-10-02 14:02:22'),(7,'iste','iste','2019-10-02 14:02:22','2019-10-02 14:02:22'),(8,'quas','quas','2019-10-02 14:02:22','2019-10-02 14:02:22'),(9,'in','in','2019-10-02 14:02:22','2019-10-02 14:02:22'),(10,'eveniet','eveniet','2019-10-02 14:02:22','2019-10-02 14:02:22'),(11,'cum','cum','2019-10-02 14:02:22','2019-10-02 14:02:22'),(12,'dolore','dolore','2019-10-02 14:02:22','2019-10-02 14:02:22'),(13,'autem','autem','2019-10-02 14:02:22','2019-10-02 14:02:22'),(14,'soluta','soluta','2019-10-02 14:02:22','2019-10-02 14:02:22'),(15,'omnis','omnis','2019-10-02 14:02:22','2019-10-02 14:02:22'),(16,'aut','aut','2019-10-02 14:02:22','2019-10-02 14:02:22'),(17,'explicabo','explicabo','2019-10-02 14:02:22','2019-10-02 14:02:22'),(18,'aut','aut-1','2019-10-02 14:02:22','2019-10-02 14:02:22'),(19,'illo','illo-1','2019-10-02 14:02:22','2019-10-02 14:02:22'),(20,'quia','quia','2019-10-02 14:02:22','2019-10-02 14:02:22');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_ban` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Adolph Gutmann','cali29@example.net','2019-10-02 14:02:15','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',1,'0nNvpEmyuCOgqKD3sMbC6KdNOUSsVLcTg21bmMUUp2lB3gvs1P13KInTrgDc','2019-10-02 14:02:15','2019-10-05 09:34:20','zdSuJEwU2f.jpeg','Eius ea harum hic impedit quia ut placeat culpa modi ab sapiente vel id beatae eaque libero ex deserunt fuga inventore officiis.',0),(2,'Eldon Pouros','reyna.heidenreich@example.org','2019-10-02 14:02:15','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',0,'p9F0WI8uXB79gHQ2R6DiMQEmlq6w40BJQorrNaRKR5fsa7KlrmeDpnWSUrzY','2019-10-02 14:02:15','2019-10-05 20:30:45','ZRg1glENrV.jpeg','Perferendis ratione qui incidunt eos et facilis debitis sed cumque corrupti molestias possimus esse repellat saepe veritatis dolor et dolore totam est voluptas accusamus est nesciunt vel eligendi nesciunt laboriosam amet unde et est et quo.',1),(3,'Blanche Nolan','valentine.champlin@example.com','2019-10-02 14:02:15','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',0,'mWGWJYgo6s','2019-10-02 14:02:15','2019-10-05 09:34:52','BrdPszLx40.jpeg','Blanditiis quia nesciunt illum quisquam consectetur omnis totam qui dignissimos ipsum soluta odit iste perspiciatis eveniet qui molestias et natus est voluptatibus fuga sapiente iusto qui earum modi suscipit soluta possimus quam ipsa ab.',0),(4,'Nayeli Rosenbaum III','juvenal.frami@example.org','2019-10-02 14:02:15','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',0,'cbMnNXwa2F','2019-10-02 14:02:15','2019-10-05 09:35:06','vqrPPuJOPs.jpeg','Non nihil maiores excepturi consequatur consequatur sed et assumenda dignissimos eveniet quia ullam repudiandae ab sunt facere odit placeat vel et harum ut veritatis maxime reiciendis voluptatibus quidem officiis modi tenetur.',0),(5,'Gladys Prosacco II','alexis.thiel@example.com','2019-10-02 14:02:15','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',0,'ROfuMfFJmO','2019-10-02 14:02:15','2019-10-05 09:35:17','w4OoGu97FD.jpeg','Libero incidunt et velit et deleniti ex explicabo deleniti autem cupiditate et adipisci neque maiores est quia id laboriosam et sapiente suscipit inventore.',0),(18,'tyop','test@mail.ru',NULL,'$2y$10$M8vJMVn56/mH97.PoNWutOtaad8XWZjhYE3/LpSmxa6DHvy8PSZkO',0,NULL,'2019-10-05 18:11:06','2019-10-05 18:11:06',NULL,NULL,NULL);
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

-- Dump completed on 2019-10-05 20:51:09
