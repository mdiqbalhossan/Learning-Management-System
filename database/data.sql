-- MySQL dump 10.16  Distrib 10.1.48-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db
-- ------------------------------------------------------
-- Server version	10.1.48-MariaDB-0+deb9u2

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` tinyint(4) DEFAULT NULL,
  `name` varchar(5) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `email_verified_at` varchar(0) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `remember_token` varchar(0) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL,
  `updated_at` varchar(0) DEFAULT NULL,
  `image` varchar(14) DEFAULT NULL,
  `about` varchar(0) DEFAULT NULL,
  `address` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Admin','admin@gmail.com',170000000000,'','$2y$10$6Q31Fm7KueY6lk60bqBiCe394luqPe30oQp8AZgNstr8HKPwzzgGu','','','','1675100652.png','','Dhaka, Bangladesh');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` tinyint(4) DEFAULT NULL,
  `name` varchar(29) DEFAULT NULL,
  `slug` varchar(27) DEFAULT NULL,
  `image` varchar(14) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL,
  `updated_at` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (6,'Web Development','web-development','1675452090.png','on','',''),(10,'App Development','app-development','1675452123.png','on','',''),(12,'Programming Languages','programming-languages','1675452208.png','on','',''),(13,'Database Design & Development','database-design-development','1675452287.png','on','',''),(14,'Network & Security','network-security','1675452310.png','on','',''),(15,'Operating System & Servers','operating-system-servers','1675452337.png','on','','');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` tinyint(4) DEFAULT NULL,
  `name` varchar(48) DEFAULT NULL,
  `slug` varchar(47) DEFAULT NULL,
  `category_id` tinyint(4) DEFAULT NULL,
  `level` varchar(12) DEFAULT NULL,
  `details` text,
  `short_description` varchar(172) DEFAULT NULL,
  `is_popular` varchar(2) DEFAULT NULL,
  `source` varchar(10) DEFAULT NULL,
  `source_url` varchar(65) DEFAULT NULL,
  `image` varchar(63) DEFAULT NULL,
  `is_free` varchar(2) DEFAULT NULL,
  `default_price` varchar(5) DEFAULT NULL,
  `current_price` varchar(5) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL,
  `updated_at` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (2,'App Development Fundamental','app-development-fundamental',6,'intermidiate','<p>This is App Development Course</p>','This is app development course short details','on','youtube','','1674048325.png','','500','100','on','',''),(3,'PHP Fundamental','php-fundamental',10,'intermidiate','<p>This is PHP Fundamental Course</p>','','','Select One','','1674048252.png','','2000','1000','on','',''),(4,'Consequatur voluptatum dolorem.','consequatur-voluptatum-dolorem',10,'intermidiate','<p>Vero consequatur non molestias eius eum non aut. Natus rerum aut fugiat eius aut sequi vel. Sunt aut deleniti illum reiciendis.</p>','Recusandae voluptas quis est provident esse nemo omnis ipsam. Voluptatem occaecati culpa aut. Iusto eligendi delectus necessitatibus tenetur commodi et nesciunt.','','Select One','http://www.boyer.info/','1675171812.png','','67.17','20','on','',''),(5,'Quaerat molestiae.','quaerat-molestiae',6,'ADVANCED','Repellendus facere repellat sit sunt aut dolorem optio. Sint fuga consequatur optio ut. Nobis dolores nihil recusandae voluptate et tempore asperiores. Autem enim ut et adipisci.','Facere et sequi ut. Occaecati reprehenderit quis voluptas in. Ut ut eum id.','1','YOUTUBE','http://heaney.org/sapiente-qui-qui-consequuntur-nesciunt-eum','https://via.placeholder.com/640x480.png/0077ee?text=perferendis','1','19','99.82','0','',''),(6,'Ea debitis et.','ea-debitis-et',10,'BEGINNER','Et ut veritatis cum perspiciatis. Dolor nulla mollitia sint ex ducimus. Quos quia aut ipsam aut voluptates et.','Quasi quod et accusamus. Velit non sunt exercitationem fugiat autem dolorem. Est sit reiciendis assumenda dicta. Incidunt dolor enim delectus soluta non.','0','OTHER','http://www.johns.com/officiis-eaque-est-exercitationem','https://via.placeholder.com/640x480.png/00aa44?text=et','1','14.19','50.12','0','',''),(7,'Nobis recusandae accusantium saepe corrupti.','nobis-recusandae-accusantium-saepe-corrupti',10,'advance','<p>Autem est beatae ut delectus ratione dolorem distinctio. Tempora a velit hic accusantium amet sit amet similique. Autem non magni voluptas eum rerum est. Rerum provident quas et tempora ducimus odit.</p>','Nisi voluptas qui id maxime rem quaerat. Distinctio culpa deleniti sit mollitia vel aut fugit. Est consequatur eum sapiente. Voluptatem nobis quidem eos animi iusto facere.','on','Select One','http://ondricka.org/aut-deserunt-eos-porro.html','1675171764.png','','16.68','54.26','on','',''),(8,'Ratione consectetur dolorem reiciendis adipisci.','ratione-consectetur-dolorem-reiciendis-adipisci',6,'advance','<p>Occaecati qui consectetur hic dicta laboriosam repellendus. Optio quibusdam excepturi eos at quo doloribus. Ipsa nulla enim consequuntur vel.</p>','Aut ullam quis ipsa ut aut id. Ipsam ut ut minus culpa quis impedit veritatis. Sequi non hic possimus eos dolor sint laboriosam. Qui eum dicta dicta.','on','Select One','http://erdman.com/est-est-nemo-quia-minus-nesciunt-quam.html','1675171722.png','','68.21','8.72','on','',''),(9,'Qui inventore et.','qui-inventore-et',6,'intermidiate','<p>Quos doloribus omnis doloremque aliquid voluptates sint deserunt. Iste rerum odit et amet eligendi omnis. A blanditiis eveniet nostrum. Placeat facere perspiciatis et placeat qui ab.</p>','Excepturi unde impedit enim qui aut voluptatum eos. Sapiente aliquam quia quia fugit itaque atque. Et iusto nam quibusdam veritatis hic.','','youtube','http://www.barton.com/et-quia-qui-deserunt-est','1675171680.png','','96.11','52.24','on','',''),(10,'Est quia ea.','est-quia-ea',6,'BEGINNER','Quia cupiditate dolore et necessitatibus voluptatem non vel. Pariatur deleniti dolorum nisi eum. Dicta et libero quia aliquam vitae culpa molestiae.','Aut odit iusto facilis consequatur est. Et quo enim sunt excepturi voluptatem. Inventore consequatur et quos ut est.','0','YOUTUBE','http://farrell.info/sit-dolorum-odio-cumque-qui-quod-eveniet.html','https://via.placeholder.com/640x480.png/004499?text=quidem','1','3.07','68.69','0','',''),(11,'Mobile Development Architecture','mobile-development-architecture',10,'intermidiate','<p>This is an introduction the mobile development world.</p><p>Java, Kotlin, Swift, Objective-C, React Native, Nativescript, Cordova, PhoneGap, Ionic, PWAs, Angular, Vue. The number of different technologies claiming to be the easiest or the most efficient&nbsp;way to build apps for mobile devices is&nbsp;overwhelming.</p><p>This course is an effort to group them into architectural tiers to help you understand similarities and specificities of each one.</p><p>At the end, you will not be able to create your app, but to understand what they can provide you. You might find good tips to both start your next app and organise a learning path&nbsp;to kick off your mobile developer career.</p><h2><strong>Who this course is for:</strong></h2><ul><li>Mobile development students/beginners</li><li>Mobile development consultants</li><li>Mobile project managers</li><li>IT managers</li><li>Mobile architects</li></ul>','Native Apps, Web Apps, Progressive Web Apps, Hybrid Apps, Web-Native Apps or Cross-Compiled Apps. Learn how to choose','on','youtube','','1675452932.jpg','','24.99','19.99','on','',''),(12,'Learn HTML5 Programming From Scratch','learn-html5-programming-from-scratch',6,'intermidiate','<p>HTML5 is one of the hot web technologies and is widely gaining acceptance across mobile and web. In our course, you get a complete resource that can get you started on application development for HTML5. In our course, you work on actual examples and go through important concepts required for thorough knowledge.&nbsp;</p><p>In our course, you will start with basic HTML tags. You will learn how to create HTML websites and use CSS in your work before we start discussing HTML5. We do not assume any prior knowledge so we go through the concepts from the beginner\'s point of view. In our HTML5 lectures, we start with new tags and forms. We then gradually move to advance topics like Drag and Drop and Multimedia. We follow it with difficult topics like Geolocation, WebStorage, and Application cache. This course creates easy to grasp examples for each of the concepts and by the end of it, you will be able to understand the complete picture rather than just bits and pieces of the technology.&nbsp; Some of the salient features for the course are:</p><p>Designed for absolute beginners</p><p>Practical tips and tricks for the real world development</p><p>Updated to include modern concepts</p><p>It shows how to think in HTML</p><p>Learn the basic Javascript</p><p>This is the complete HTML5 course you will need to get started with HTML5 application development. The simplicity and its content have made it one of the most popular HTML5 courses on the planet.</p><h2><strong>Who this course is for:</strong></h2><ul><li>No programming background is assumed just a zeal to learn</li></ul>','A Complete HTML5 Programming Course for Beginners','','youtube','','1675452819.jpg','','24.99','12.99','on','',''),(13,'Web Development Masterclass & Certifications','web-development-masterclass-certifications',6,'intermidiate','<p><strong>Completely Updated for 2023/2024 with 40 NEW lectures coding activities and projects!&nbsp;</strong></p><p>Learn What It Takes to Code Dynamic, Professional Websites and Web Apps From The Comfort of Your Own Home&nbsp;</p><p>Do you ever browse the internet wondering how your favorite websites were built? Facebook, Twitter, Amazon—they were all created by people who at one point in time didn’t know anything about coding. How did they obtain this knowledge?&nbsp;</p><p>In this comprehensive course, I’m going to show you everything you need to know so that you can follow in these people’s footsteps.&nbsp;</p><p>You’re going to learn how to code AND you’re going to become a certified professional from a recognized international trainer. And best of all, you’re going to have fun doing it.&nbsp;</p><p>You Don’t Have to Be a Genius or a Mathematical Wizard.&nbsp;</p><p>So many people believe that you must have a special ‘gift’ to create professional-quality, dynamic websites/web apps. I’m here to tell you once and for all that this is false. All you need to have is the desire to learn and the ability to follow instructions—that’s it!&nbsp;</p><p>Our course starts teaching basic coding principles and develops your coding skills in a variety of languages from beginner through to advanced. Here it is, once and for all, a complete guide that will take you from novice to web developer.&nbsp;</p><p>Skip Hours of Frustration and Thousands of Wasted Dollars and Become 100% Certified&nbsp;</p><p>The internet has changed the rules of doing business. More and more companies are migrating online while many new, never before seen businesses are created every day thanks to the power of this phenomenon. You know what that means? Higher demand for people just like you!&nbsp;</p><p>But the problem for these businesses is that while demand is high, supply is short.&nbsp;</p><p>Please don’t let a lack of knowledge stop you from having the career of your dreams, not when the knowledge you need is right here and is extremely affordable.&nbsp;</p><p>Don’t worry, you won’t need to buy any additional courses, it’s all here. No need to spend four years and over $15,000 per year in college tuition either—it really is all here. From HTML to CSS then to Javascript and finally PHP, you will learn how to Become a Certified Web Developer.&nbsp;</p><p>It Doesn’t Matter Where You’re Starting From...You Can Do It!&nbsp;</p><p>Maybe:&nbsp;</p><p>&nbsp; &nbsp; &nbsp;● You’re planning on studying coding at college and want to build a rock-solid foundation so that you have a huge head start before your course begins?&nbsp;</p><p>&nbsp; &nbsp; &nbsp;● You’re dissatisfied with your current job and want to learn exactly what it takes to become a fully qualified web developer?&nbsp;</p><p>&nbsp; &nbsp; &nbsp;● You’re currently working in IT but want to expand your skill base so that you’re 100% up to date with the latest developments in web technology?&nbsp;</p><p>&nbsp; &nbsp; &nbsp;● You want to develop mobile apps or websites on the side to create some additional income while retaining your current job?&nbsp;</p><p><strong>Learn Skills That Will Benefit You for The Rest of Your Life&nbsp;</strong></p><p>- Imagine being able to create a web app that is downloaded by millions of paying customers—or a website that’s visited by people from all seven continents.&nbsp;</p><p>- Imagine the limitless opportunities that having these programming skills will give you.&nbsp;</p><p>- Imagine working in a field that challenges you and allows you to express yourself freely every day.&nbsp;</p><p>- Imagine being paid extremely well for developing products and services that can help change people’s lives.&nbsp;</p><p>Stop imagining and take action! It’s time to start your journey. Your future is waiting for you...&nbsp;</p><p>&nbsp;</p><p><strong>Four Certifications in One</strong><br>The unique Certified Web Development Professional credential will provide proof that you have mastered the fundamental skills needed by new web developers. You\'ll have a full understanding of HTML5, the language used to structure web sites and many mobile applications that you use every day. From there, you\'ll move on to Javascript-- the language of interaction on the web. The use of Javascript is growing at a lightning pace and it\'s been called \"the most important language to learn today,\" by multiple experts.</p><p>Each language carries its own individual Specialist Designation for which you earn a certificate, the privilege of using the specialist credential badge, and a personal online transcript page that shows your designations, certification, and accomplishments.</p><p>&nbsp;</p><p><strong>Prepare for Valuable Industry Certifications</strong><br>This course is specially designed to prepare you for the&nbsp; Web Development Professional Certification from LearnToProgram, Inc. This certification will allow you to prove that you have achieved competencies in HTML, CSS, and JavaScript-- everything you need to create basic web applications. <strong>New for 2023:&nbsp; </strong>No exams are required to earn your certifications.&nbsp; Complete and submit all the lab activities for the course program and you\'ll earn your new certifications!</p><p>&nbsp;</p><p><strong>Certified Web Developers</strong> will receive:&nbsp;</p><p>A printable certificate indicating the new certification that you can present to employers or prospects</p><p>A letter explaining the certification and its value to a prospective employer. The letter will state exactly what mastery the certification represents</p><p>Authorization to use the LearnToProgram Certified Web Developer Badge on your website and marketing materials</p><p>Automatic linkage to your LinkedIn account to display your certification</p><h2><strong>Who this course is for:</strong></h2><ul><li>Web Designers who Want to Learn To Code</li><li>Traditional Programmers who Want to Learn Web Development</li><li>People who Want to Develop Mobile Web Sites</li><li>Students who want Practical Development Skills</li><li>Web Masters who Need to Improve Development Skills</li><li>Volunteers who Manage a Site for a Church or Non Profit</li><li>Teachers who Want to Introduce Web Development to Their Classes</li><li>Those Considering a Career in Web Development</li></ul>','HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery','on','youtube','','1675452732.jpg','on','','','on','','');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enrolls`
--

DROP TABLE IF EXISTS `enrolls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enrolls` (
  `id` tinyint(4) DEFAULT NULL,
  `user_id` tinyint(4) DEFAULT NULL,
  `course_id` tinyint(4) DEFAULT NULL,
  `payment_method` varchar(5) DEFAULT NULL,
  `payment_status` varchar(9) DEFAULT NULL,
  `payment_amount` decimal(4,2) DEFAULT NULL,
  `payment_currency` varchar(3) DEFAULT NULL,
  `payment_time` varchar(10) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL,
  `updated_at` varchar(0) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `order_number` varchar(15) DEFAULT NULL,
  `payment_number` varchar(10) DEFAULT NULL,
  `transaction_id` varchar(9) DEFAULT NULL,
  `reference_number` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enrolls`
--

LOCK TABLES `enrolls` WRITE;
/*!40000 ALTER TABLE `enrolls` DISABLE KEYS */;
INSERT INTO `enrolls` VALUES (2,1,8,'nagad','completed',8.72,'BDT','2023-03-10','','','accepted','#20230310183737','0147852369','TXDFGHIJK','20230310183721'),(3,1,12,'','pending',12.99,'BDT','','','','pending','','','','');
/*!40000 ALTER TABLE `enrolls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` varchar(0) DEFAULT NULL,
  `uuid` varchar(0) DEFAULT NULL,
  `connection` varchar(0) DEFAULT NULL,
  `queue` varchar(0) DEFAULT NULL,
  `payload` varchar(0) DEFAULT NULL,
  `exception` varchar(0) DEFAULT NULL,
  `failed_at` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lessons` (
  `id` tinyint(4) DEFAULT NULL,
  `course_id` tinyint(4) DEFAULT NULL,
  `section_id` tinyint(4) DEFAULT NULL,
  `name` varchar(24) DEFAULT NULL,
  `provider` varchar(7) DEFAULT NULL,
  `url` varchar(43) DEFAULT NULL,
  `attachment` varchar(0) DEFAULT NULL,
  `duration` varchar(5) DEFAULT NULL,
  `summary` varchar(189) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL,
  `updated_at` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lessons`
--

LOCK TABLES `lessons` WRITE;
/*!40000 ALTER TABLE `lessons` DISABLE KEYS */;
INSERT INTO `lessons` VALUES (1,2,1,'This is First Lesson','youtube','https://mdiqbal.xyz','','','','',''),(2,3,4,'What is PHP?','youtube','https://www.youtube.com/embed/IUN664s7N-c','','','','',''),(3,9,30,'Laverne Zemlak','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','34','Eaque ullam nobis accusantium dolor. Ut eos rerum voluptatum quam quia aperiam. Iusto dignissimos commodi perferendis voluptatem. Rerum ut earum nesciunt animi cupiditate ipsam.','',''),(4,9,33,'Avis Bailey','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','29','Magni dolores minima quisquam qui modi. Asperiores nam asperiores natus non. Quod porro et dolor cumque. Qui praesentium minus amet.','',''),(5,5,22,'Cortney Corwin','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','35','Quam quia ad doloremque. Corrupti ea ea reprehenderit ea perspiciatis. Sed odit qui sint odit quia ut hic.','',''),(6,5,5,'Fabiola Swift Jr.','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','23','Quasi ea quasi culpa quasi non. Consequatur enim perspiciatis qui vitae voluptatum adipisci. Est cum tempora dolor vel.','',''),(7,6,1,'Citlalli Grant','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','68','Omnis qui et necessitatibus aut nobis voluptates. Voluptatem minus est iusto nostrum culpa. Reprehenderit unde fuga fugiat iusto odio et.','',''),(8,5,6,'Dr. Riley Harris II','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','91','Molestias fugiat quos sit officiis quae deleniti in incidunt. Et quibusdam et dicta dolor. Illum soluta vitae non quis harum.','',''),(9,11,1,'Duane Bartoletti','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','22','Dolor qui officia placeat ullam vitae veritatis est ab. Voluptas aspernatur est est a excepturi. Non numquam ab nostrum ut ut.','',''),(10,5,30,'Susie Goyette','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','8','Et tempore autem eligendi autem et. Optio explicabo velit incidunt doloremque ea iste voluptas. Doloribus autem corrupti aut sed consequuntur in. Laboriosam expedita fugiat minima id enim.','',''),(11,13,27,'Glenna Herman','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','84','Qui perspiciatis aut iusto labore aliquam. Voluptatem velit voluptate aut non facilis. Recusandae ipsam esse veniam.','',''),(12,10,23,'Ms. Susanna Hermiston','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','46','Corrupti voluptas qui distinctio odio id. Corrupti quia repellendus pariatur sunt perferendis sit ut laborum. Quibusdam veritatis harum expedita.','',''),(13,3,6,'Cara Hettinger','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','57','Ratione fugit facilis sapiente alias voluptatem dolore quasi nihil. Enim aspernatur aut voluptas aperiam quis nesciunt. Officia rem velit et quia. Est quos fugit laborum natus at quisquam.','',''),(14,9,34,'Prof. Sofia Schaden','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','10','Et excepturi laboriosam aut quidem tenetur voluptatem in. Vero vitae qui doloremque totam enim delectus laudantium. Ea quod exercitationem quas. Consequatur quo aut cum quaerat magni enim.','',''),(15,3,18,'Ambrose Jones','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','14','Veritatis saepe ut laboriosam animi. Ipsa aspernatur in placeat possimus aut ut.','',''),(16,9,27,'Major Adams Jr.','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','4','Qui et error omnis sit molestiae corporis. Ut doloribus non velit consequatur et explicabo. Exercitationem soluta quam enim quia.','',''),(17,9,6,'Ms. Lexie Feil MD','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','9','Totam natus fuga consequatur nisi. Itaque iure quo hic illo harum officia aut. Et qui perspiciatis eos accusamus. Illo autem voluptatem ullam rem neque deserunt sapiente.','',''),(18,11,2,'Marlen Pagac DVM','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','87','Illo molestiae fuga alias dolor. Doloremque cum consequatur recusandae ratione ut dolorem distinctio. Recusandae eius et in assumenda et.','',''),(19,13,26,'Keshawn Tromp','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','5','Iure aspernatur ut rerum at voluptas omnis. Nesciunt sed facere ut quae veritatis nihil dolor. Iure qui nihil alias ad et omnis.','',''),(20,9,11,'Cristal Simonis','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','66','Doloribus sint vitae rem molestiae fugiat. Modi velit est et. Est aperiam iusto perferendis sint voluptatum id nihil neque.','',''),(21,12,31,'Mable Schmitt','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','49','Tempore pariatur incidunt sequi architecto harum molestias vel. Consequatur temporibus voluptatem dolor et magnam eius non.','',''),(22,11,1,'Dr. Haleigh Heller Jr.','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','3','Aut magni error occaecati est sed est est. Recusandae vitae nesciunt reprehenderit blanditiis fugiat. Ut molestiae voluptas consequuntur nesciunt quia est autem.','',''),(23,9,9,'Ashlynn Murphy','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','34','Molestiae omnis voluptas sunt exercitationem non. Tempora sint voluptatum est at ut porro voluptates occaecati. Iste voluptatem a quasi est. Illum eveniet tenetur qui veritatis libero iure.','',''),(24,11,26,'Miss Ariane Emmerich','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','11','Libero ad corrupti ducimus molestiae error quo. Voluptatem iure quasi nemo dolorum repellat. Totam quisquam voluptas qui quae molestiae deleniti.','',''),(25,8,14,'Stephany Pollich','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','26','Repellat ut vero facere sint accusamus. Delectus fugiat veniam non facilis rerum facilis delectus quo. Totam et qui quo ut voluptatem qui minima.','',''),(26,5,15,'Karianne Schultz','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','99','Autem asperiores ea dolor similique minus. Labore eaque modi ullam qui et.','',''),(27,11,34,'Bella Ankunding','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','84','Doloribus labore voluptatibus dolores voluptatem placeat fugiat eius perferendis. Minima fugit velit et repellendus. Porro consequatur autem et.','',''),(28,6,34,'Cara Gislason','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','32','Nihil velit dolorum minima soluta tempore repellendus architecto. Quaerat neque autem eius rerum necessitatibus iure. Tempore quia illum et amet harum veniam.','',''),(29,11,32,'Dr. Antonina Lakin','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','33','Voluptatem in atque occaecati sed voluptatibus. Dolore odio necessitatibus iure dolorem occaecati. Odio eos aut dolorem libero porro eligendi.','',''),(30,9,11,'Ed Dare','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','19','Dignissimos ad eum voluptatem commodi id incidunt autem. Et molestias ipsum molestiae reiciendis doloribus temporibus quia. Et vitae voluptatem inventore et veniam et.','',''),(31,11,15,'Dr. Saige Grimes IV','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','70','Sequi maxime ipsam at occaecati fuga aperiam. Ut voluptas dolor velit eum a. Id vitae sit assumenda fugiat nulla sed.','',''),(32,8,23,'Ward Bosco','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4','','18','Explicabo at soluta in minus. Placeat voluptatem et omnis illum quibusdam voluptatem. Velit nulla eos tempora cumque qui. Accusantium maiores dolor sed.','',''),(33,13,35,'About Our Course','youtube','https://www.youtube.com/embed/M7lc1UVf-VE','','02:30','<p>HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery</p>','',''),(34,13,35,'About our Certifications','youtube','https://www.youtube.com/embed/M7lc1UVf-VE','','03:20','<p>HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery</p>','',''),(35,13,36,'Tools Introductions','youtube','https://www.youtube.com/embed/M7lc1UVf-VE','','01:20','<p>HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery</p>','',''),(36,13,36,'VSCode Workshop','youtube','https://www.youtube.com/embed/M7lc1UVf-VE','','23:09','<p>HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery</p>','',''),(37,13,36,'Github Workshop','youtube','https://www.youtube.com/embed/M7lc1UVf-VE','','25:02','<p>HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery</p>','','');
/*!40000 ALTER TABLE `lessons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` tinyint(4) DEFAULT NULL,
  `migration` varchar(55) DEFAULT NULL,
  `batch` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2023_01_13_165440_create_sessions_table',1),(7,'2023_01_13_170618_create_admins_table',2),(9,'2023_01_14_201153_create_categories_table',3),(11,'2023_01_15_173407_create_courses_table',4),(13,'2023_01_16_141123_create_lessons_table',5),(14,'2023_01_16_143929_create_sections_table',5),(20,'2014_10_12_000000_create_users_table',9),(21,'2023_01_30_134237_create_settings_table',10),(22,'2023_01_30_152139_add_profile_photo_to_admins',11),(23,'2023_02_02_200404_add_breadcrumb_photo_to_settings',12),(24,'2023_02_03_181354_add_slider_to_settings',13),(25,'2023_02_03_184619_add_section_to_settings',14),(28,'2023_01_19_145332_create_enrolls_table',15),(29,'2023_03_10_165603_add_status_to_enrolls',15),(30,'2023_03_14_131634_add_payment_column_to_settings',16);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(0) DEFAULT NULL,
  `token` varchar(0) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` varchar(0) DEFAULT NULL,
  `tokenable_type` varchar(0) DEFAULT NULL,
  `tokenable_id` varchar(0) DEFAULT NULL,
  `name` varchar(0) DEFAULT NULL,
  `token` varchar(0) DEFAULT NULL,
  `abilities` varchar(0) DEFAULT NULL,
  `last_used_at` varchar(0) DEFAULT NULL,
  `expires_at` varchar(0) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL,
  `updated_at` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` tinyint(4) DEFAULT NULL,
  `course_id` tinyint(4) DEFAULT NULL,
  `name` varchar(31) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL,
  `updated_at` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,2,'Introduction of App Development','',''),(2,2,'Basic of App Development','',''),(3,3,'Introduction of PHP Fundamental','',''),(4,3,'Basic of PHP Fundamental','',''),(5,13,'Willis Considine','',''),(6,8,'Maeve Crooks','',''),(7,6,'Miss Eleanore Daniel DVM','',''),(8,11,'Brian Crist','',''),(9,13,'Raquel Sanford','',''),(10,4,'Dejon Armstrong MD','',''),(11,9,'Dr. Clint Feil','',''),(12,9,'Constance Kautzer','',''),(13,6,'Jonathon Marquardt','',''),(14,4,'Dr. Lane O\'Kon Sr.','',''),(15,7,'Lily Paucek','',''),(16,11,'Mr. Davonte Marvin','',''),(17,8,'Leila Dach','',''),(18,4,'Mr. Chandler King','',''),(19,3,'Preston Bayer II','',''),(20,6,'Kelton Goldner','',''),(21,8,'Providenci Herman','',''),(22,10,'German Lang IV','',''),(23,6,'Robin Graham','',''),(24,5,'Adeline Cronin','',''),(25,11,'Prof. Jordane Hessel MD','',''),(26,3,'Jovani McDermott IV','',''),(27,3,'Chris Streich','',''),(28,5,'Miss Emmie Reynolds','',''),(29,9,'Lon Swaniawski','',''),(30,8,'Rod Lockman','',''),(31,12,'Dr. Ada Padberg V','',''),(32,8,'Fatima Rutherford','',''),(33,8,'Ford Fahey','',''),(34,9,'Miss Ariane Zemlak','',''),(35,13,'Program Information','',''),(36,13,'Your Development Toolbox','',''),(37,13,'Certified HTML5 Foundation','',''),(38,13,'Certified CSS3 Foundation','',''),(39,13,'Certified Javascript Foundation','',''),(40,13,'Practice Project','','');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(40) DEFAULT NULL,
  `user_id` tinyint(4) DEFAULT NULL,
  `ip_address` varchar(9) DEFAULT NULL,
  `user_agent` varchar(124) DEFAULT NULL,
  `payload` text,
  `last_activity` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('RQyRSIn6iSQ2L1JFQl58LhNXH0buuWRtUr0nnLc8',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36 OPR/96.0.0.0','YTo5OntzOjY6Il90b2tlbiI7czo0MDoiZVRrWXRTSU44T3I1eVRYZ3B1VUp5Yk11SDZmb2pNZzM1Q1BiSkJjMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFJFdEQ1VTM5eFEweHJuRkU1Si5DQk92bXdlSS9EajdTazhkdEZ3OFNMV1NLTjY1Si9lNm55IjtzOjI2OiI0eVRsVERLdTNvSk9mekRfY2FydF9pdGVtcyI7YTowOnt9czoxNDoidXNlcl9lbnJvbGxfaWQiO3M6MToiMyI7czoxMjoidG90YWxfYW1vdW50IjtzOjU6IjEyLjk5Ijt9',1678800787);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` tinyint(4) DEFAULT NULL,
  `title` varchar(11) DEFAULT NULL,
  `description` varchar(34) DEFAULT NULL,
  `address` varchar(17) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(13) DEFAULT NULL,
  `favicon` varchar(19) DEFAULT NULL,
  `logo` varchar(19) DEFAULT NULL,
  `login_background` varchar(21) DEFAULT NULL,
  `footer_text` varchar(34) DEFAULT NULL,
  `powered_by` varchar(0) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `currency_symbol` varchar(1) DEFAULT NULL,
  `currency_position` varchar(4) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL,
  `updated_at` varchar(0) DEFAULT NULL,
  `breadcrumb_photo` varchar(21) DEFAULT NULL,
  `social_link` varchar(173) DEFAULT NULL,
  `slider` varchar(206) DEFAULT NULL,
  `section` varchar(0) DEFAULT NULL,
  `bkash` bigint(20) DEFAULT NULL,
  `nagad` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Laravel LMS','Laravel Learning Management System','Dhaka, Bangladesh',1700000000,'info@site.com','1675108779logo2.png','1675108779logo2.png','1675090615459724.webp','Laravel Learning Management System','','BDT','৳','left','','','1675369221459724.webp','{\"facebook\":\"https://www.facebook.com\",\"twitter\":\"https://www.twitter.com\",\"linkedin\":\"https://www.linkedin.com/in/iqbal-hossan/\",\"youtube\":\"https://youtube.com\"}','{\"image\":\"1675449151banner_img.png\",\"title\":\"Distant learning for further expansion\",\"description\":\"The ultimate planning solution for people who want to reach their personal goals Effortless comfortable.\"}','',1478523694,1478523694);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sqlite_sequence`
--

DROP TABLE IF EXISTS `sqlite_sequence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sqlite_sequence` (
  `name` varchar(10) DEFAULT NULL,
  `seq` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sqlite_sequence`
--

LOCK TABLES `sqlite_sequence` WRITE;
/*!40000 ALTER TABLE `sqlite_sequence` DISABLE KEYS */;
INSERT INTO `sqlite_sequence` VALUES ('migrations',30),('admins',1),('categories',16),('courses',13),('sections',40),('lessons',37),('users',6),('settings',1),('enrolls',3);
/*!40000 ALTER TABLE `sqlite_sequence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` tinyint(4) DEFAULT NULL,
  `name` varchar(12) DEFAULT NULL,
  `email` varchar(21) DEFAULT NULL,
  `username` varchar(0) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL,
  `email_verified_at` varchar(0) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `remember_token` varchar(0) DEFAULT NULL,
  `current_team_id` varchar(0) DEFAULT NULL,
  `profile_photo_path` varchar(14) DEFAULT NULL,
  `created_at` varchar(0) DEFAULT NULL,
  `updated_at` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'User','user@gmail.com','','0170000000000','46/6, B, Jhigatola, Kacha Bazar Songlogno, Jhigatola, Dhanmondi, Dhaka','','$2y$10$REtD5U39xQ0xrnFE5J.CBOvmweI/Dj7Sk8dtFw8SLWSKN65J/e6ny','','','1675236224.png','',''),(4,'Iqbal Hossan','jmiqbal2019@gmail.com','','01679487265','Dhaka','','$2y$10$YPGRdw5VRgOKKi0B0d.cp.TWC6NW6Piy/7N3fdeadlBcjRYcm2eTG','','','','',''),(5,'Test','test@example.com','','','','','$2y$10$uhqOZF5oI222QRazvfLoYuTr5cLFMc3Jt.lszoGPIBA2YqL5SlaOG','','','','',''),(6,'Demo User','test@demo.com','','','','','$2y$10$ldv4WiLEXofK6i3UBDMxGO2ww0EDPAcJOJqr4b5i9H/lWGchF088y','','','','','');
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

-- Dump completed on 2022-12-27 22:44:51
