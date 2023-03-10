
CREATE TABLE IF NOT EXISTS "migrations" (
	"id"	integer NOT NULL,
	"migration"	varchar NOT NULL,
	"batch"	integer NOT NULL,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "password_resets" (
	"email"	varchar NOT NULL,
	"token"	varchar NOT NULL,
	"created_at"	datetime,
	PRIMARY KEY("email")
);
CREATE TABLE IF NOT EXISTS "failed_jobs" (
	"id"	integer NOT NULL,
	"uuid"	varchar NOT NULL,
	"connection"	text NOT NULL,
	"queue"	text NOT NULL,
	"payload"	text NOT NULL,
	"exception"	text NOT NULL,
	"failed_at"	datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "personal_access_tokens" (
	"id"	integer NOT NULL,
	"tokenable_type"	varchar NOT NULL,
	"tokenable_id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"token"	varchar NOT NULL,
	"abilities"	text,
	"last_used_at"	datetime,
	"expires_at"	datetime,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "sessions" (
	"id"	varchar NOT NULL,
	"user_id"	integer,
	"ip_address"	varchar,
	"user_agent"	text,
	"payload"	text NOT NULL,
	"last_activity"	integer NOT NULL,
	PRIMARY KEY("id")
);
CREATE TABLE IF NOT EXISTS "admins" (
	"id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"email"	varchar NOT NULL,
	"mobile"	varchar,
	"email_verified_at"	datetime,
	"password"	varchar NOT NULL,
	"remember_token"	varchar,
	"created_at"	datetime,
	"updated_at"	datetime,
	"image"	varchar,
	"about"	varchar,
	"address"	varchar,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "categories" (
	"id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"slug"	varchar NOT NULL,
	"image"	varchar,
	"status"	tinyint(1) DEFAULT '0',
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "courses" (
	"id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"slug"	varchar NOT NULL,
	"category_id"	integer NOT NULL,
	"level"	varchar,
	"details"	text,
	"short_description"	varchar,
	"is_popular"	tinyint(1) DEFAULT '0',
	"source"	varchar,
	"source_url"	varchar,
	"image"	varchar,
	"is_free"	tinyint(1) DEFAULT '0',
	"default_price"	varchar,
	"current_price"	varchar,
	"status"	tinyint(1) DEFAULT '0',
	"created_at"	datetime,
	"updated_at"	datetime,
	FOREIGN KEY("category_id") REFERENCES "categories"("id"),
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "lessons" (
	"id"	integer NOT NULL,
	"course_id"	integer NOT NULL,
	"section_id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"provider"	varchar,
	"url"	varchar,
	"attachment"	varchar,
	"duration"	varchar,
	"summary"	text,
	"created_at"	datetime,
	"updated_at"	datetime,
	FOREIGN KEY("section_id") REFERENCES "sections"("id"),
	PRIMARY KEY("id" AUTOINCREMENT),
	FOREIGN KEY("course_id") REFERENCES "courses"("id")
);
CREATE TABLE IF NOT EXISTS "sections" (
	"id"	integer NOT NULL,
	"course_id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime,
	FOREIGN KEY("course_id") REFERENCES "courses"("id"),
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "enrolls" (
	"id"	integer NOT NULL,
	"user_id"	integer NOT NULL,
	"course_id"	integer NOT NULL,
	"payment_method"	varchar NOT NULL,
	"payment_status"	varchar NOT NULL,
	"payment_amount"	varchar NOT NULL,
	"payment_currency"	varchar NOT NULL,
	"payment_time"	varchar,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "users" (
	"id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"email"	varchar NOT NULL,
	"username"	varchar,
	"phone"	varchar,
	"address"	varchar,
	"email_verified_at"	datetime,
	"password"	varchar NOT NULL,
	"remember_token"	varchar,
	"current_team_id"	integer,
	"profile_photo_path"	varchar,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "settings" (
	"id"	integer NOT NULL,
	"title"	varchar,
	"description"	varchar,
	"address"	varchar,
	"phone"	varchar,
	"email"	varchar,
	"favicon"	varchar,
	"logo"	varchar,
	"login_background"	varchar,
	"footer_text"	varchar,
	"powered_by"	varchar,
	"currency"	varchar,
	"currency_symbol"	varchar,
	"currency_position"	varchar,
	"created_at"	datetime,
	"updated_at"	datetime,
	"breadcrumb_photo"	varchar,
	"social_link"	varchar,
	"slider"	varchar,
	"section"	varchar,
	PRIMARY KEY("id" AUTOINCREMENT)
);
INSERT INTO "migrations" VALUES (2,'2014_10_12_100000_create_password_resets_table',1);
INSERT INTO "migrations" VALUES (3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1);
INSERT INTO "migrations" VALUES (4,'2019_08_19_000000_create_failed_jobs_table',1);
INSERT INTO "migrations" VALUES (5,'2019_12_14_000001_create_personal_access_tokens_table',1);
INSERT INTO "migrations" VALUES (6,'2023_01_13_165440_create_sessions_table',1);
INSERT INTO "migrations" VALUES (7,'2023_01_13_170618_create_admins_table',2);
INSERT INTO "migrations" VALUES (9,'2023_01_14_201153_create_categories_table',3);
INSERT INTO "migrations" VALUES (11,'2023_01_15_173407_create_courses_table',4);
INSERT INTO "migrations" VALUES (13,'2023_01_16_141123_create_lessons_table',5);
INSERT INTO "migrations" VALUES (14,'2023_01_16_143929_create_sections_table',5);
INSERT INTO "migrations" VALUES (19,'2023_01_19_145332_create_enrolls_table',8);
INSERT INTO "migrations" VALUES (20,'2014_10_12_000000_create_users_table',9);
INSERT INTO "migrations" VALUES (21,'2023_01_30_134237_create_settings_table',10);
INSERT INTO "migrations" VALUES (22,'2023_01_30_152139_add_profile_photo_to_admins',11);
INSERT INTO "migrations" VALUES (23,'2023_02_02_200404_add_breadcrumb_photo_to_settings',12);
INSERT INTO "migrations" VALUES (24,'2023_02_03_181354_add_slider_to_settings',13);
INSERT INTO "migrations" VALUES (25,'2023_02_03_184619_add_section_to_settings',14);
INSERT INTO "sessions" VALUES ('aykADAzhXOjbMoqcFzlSTT4dr8SixjZoJJYhVNen',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEhhUTY0UzNtd2RuTmZxTGNkS0JxUlZBbk5PVTB6cEh1NWd5UGU5byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1675779911);
INSERT INTO "sessions" VALUES ('Mk4vQAK7yo4djrgG6zH8I9UEsf359nlr8HEsY7kG',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','YTo4OntzOjY6Il90b2tlbiI7czo0MDoieHI3cGdDdDJmUTdSeFh2YnRZNllrWEs0R3BIOXUwdVV2YzVsQktOWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjI2OiI0eVRsVERLdTNvSk9mekRfY2FydF9pdGVtcyI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRSRXRENVUzOXhRMHhybkZFNUouQ0JPdm13ZUkvRGo3U2s4ZHRGdzhTTFdTS042NUovZTZueSI7czoxNDoidXNlcl9lbnJvbGxfaWQiO2E6MTp7aTowO2k6Nzt9czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',1675780978);
INSERT INTO "admins" VALUES (1,'Admin','admin@gmail.com','0170000000000',NULL,'$2y$10$6Q31Fm7KueY6lk60bqBiCe394luqPe30oQp8AZgNstr8HKPwzzgGu',NULL,'2023-01-13 17:53:44','2023-01-30 17:44:25','1675100652.png',NULL,'Dhaka, Bangladesh');
INSERT INTO "categories" VALUES (6,'Web Development','web-development','1675452090.png','on','2023-01-15 15:56:25','2023-02-03 19:21:30');
INSERT INTO "categories" VALUES (10,'App Development','app-development','1675452123.png','on','2023-01-15 17:23:49','2023-02-03 19:22:03');
INSERT INTO "categories" VALUES (12,'Programming Languages','programming-languages','1675452208.png','on','2023-02-03 19:22:25','2023-02-03 19:23:28');
INSERT INTO "categories" VALUES (13,'Database Design & Development','database-design-development','1675452287.png','on','2023-02-03 19:24:47','2023-02-03 19:24:47');
INSERT INTO "categories" VALUES (14,'Network & Security','network-security','1675452310.png','on','2023-02-03 19:25:10','2023-02-03 19:25:10');
INSERT INTO "categories" VALUES (15,'Operating System & Servers','operating-system-servers','1675452337.png','on','2023-02-03 19:25:37','2023-02-03 19:25:37');
INSERT INTO "courses" VALUES (2,'App Development Fundamental','app-development-fundamental',6,'intermidiate','<p>This is App Development Course</p>','This is app development course short details','on','youtube',NULL,'1674048325.png',NULL,'500','100','on','2023-01-16 13:48:14','2023-01-18 13:25:25');
INSERT INTO "courses" VALUES (3,'PHP Fundamental','php-fundamental',10,'intermidiate','<p>This is PHP Fundamental Course</p>',NULL,NULL,'Select One',NULL,'1674048252.png',NULL,'2000','1000','on','2023-01-16 15:38:11','2023-01-18 13:24:12');
INSERT INTO "courses" VALUES (4,'Consequatur voluptatum dolorem.','consequatur-voluptatum-dolorem',10,'intermidiate','<p>Vero consequatur non molestias eius eum non aut. Natus rerum aut fugiat eius aut sequi vel. Sunt aut deleniti illum reiciendis.</p>','Recusandae voluptas quis est provident esse nemo omnis ipsam. Voluptatem occaecati culpa aut. Iusto eligendi delectus necessitatibus tenetur commodi et nesciunt.',NULL,'Select One','http://www.boyer.info/','1675171812.png',NULL,'67.17','20','on','2023-01-31 13:17:57','2023-01-31 14:13:39');
INSERT INTO "courses" VALUES (5,'Quaerat molestiae.','quaerat-molestiae',6,'ADVANCED','Repellendus facere repellat sit sunt aut dolorem optio. Sint fuga consequatur optio ut. Nobis dolores nihil recusandae voluptate et tempore asperiores. Autem enim ut et adipisci.','Facere et sequi ut. Occaecati reprehenderit quis voluptas in. Ut ut eum id.',1,'YOUTUBE','http://heaney.org/sapiente-qui-qui-consequuntur-nesciunt-eum','https://via.placeholder.com/640x480.png/0077ee?text=perferendis',1,'19','99.82',0,'2023-01-31 13:17:58','2023-01-31 13:17:58');
INSERT INTO "courses" VALUES (6,'Ea debitis et.','ea-debitis-et',10,'BEGINNER','Et ut veritatis cum perspiciatis. Dolor nulla mollitia sint ex ducimus. Quos quia aut ipsam aut voluptates et.','Quasi quod et accusamus. Velit non sunt exercitationem fugiat autem dolorem. Est sit reiciendis assumenda dicta. Incidunt dolor enim delectus soluta non.',0,'OTHER','http://www.johns.com/officiis-eaque-est-exercitationem','https://via.placeholder.com/640x480.png/00aa44?text=et',1,'14.19','50.12',0,'2023-01-31 13:17:58','2023-01-31 13:17:58');
INSERT INTO "courses" VALUES (7,'Nobis recusandae accusantium saepe corrupti.','nobis-recusandae-accusantium-saepe-corrupti',10,'advance','<p>Autem est beatae ut delectus ratione dolorem distinctio. Tempora a velit hic accusantium amet sit amet similique. Autem non magni voluptas eum rerum est. Rerum provident quas et tempora ducimus odit.</p>','Nisi voluptas qui id maxime rem quaerat. Distinctio culpa deleniti sit mollitia vel aut fugit. Est consequatur eum sapiente. Voluptatem nobis quidem eos animi iusto facere.','on','Select One','http://ondricka.org/aut-deserunt-eos-porro.html','1675171764.png',NULL,'16.68','54.26','on','2023-01-31 13:17:58','2023-01-31 14:13:15');
INSERT INTO "courses" VALUES (8,'Ratione consectetur dolorem reiciendis adipisci.','ratione-consectetur-dolorem-reiciendis-adipisci',6,'advance','<p>Occaecati qui consectetur hic dicta laboriosam repellendus. Optio quibusdam excepturi eos at quo doloribus. Ipsa nulla enim consequuntur vel.</p>','Aut ullam quis ipsa ut aut id. Ipsam ut ut minus culpa quis impedit veritatis. Sequi non hic possimus eos dolor sint laboriosam. Qui eum dicta dicta.','on','Select One','http://erdman.com/est-est-nemo-quia-minus-nesciunt-quam.html','1675171722.png',NULL,'68.21','8.72','on','2023-01-31 13:17:58','2023-01-31 14:12:57');
INSERT INTO "courses" VALUES (9,'Qui inventore et.','qui-inventore-et',6,'intermidiate','<p>Quos doloribus omnis doloremque aliquid voluptates sint deserunt. Iste rerum odit et amet eligendi omnis. A blanditiis eveniet nostrum. Placeat facere perspiciatis et placeat qui ab.</p>','Excepturi unde impedit enim qui aut voluptatum eos. Sapiente aliquam quia quia fugit itaque atque. Et iusto nam quibusdam veritatis hic.',NULL,'youtube','http://www.barton.com/et-quia-qui-deserunt-est','1675171680.png',NULL,'96.11','52.24','on','2023-01-31 13:17:58','2023-01-31 14:12:36');
INSERT INTO "courses" VALUES (10,'Est quia ea.','est-quia-ea',6,'BEGINNER','Quia cupiditate dolore et necessitatibus voluptatem non vel. Pariatur deleniti dolorum nisi eum. Dicta et libero quia aliquam vitae culpa molestiae.','Aut odit iusto facilis consequatur est. Et quo enim sunt excepturi voluptatem. Inventore consequatur et quos ut est.',0,'YOUTUBE','http://farrell.info/sit-dolorum-odio-cumque-qui-quod-eveniet.html','https://via.placeholder.com/640x480.png/004499?text=quidem',1,'3.07','68.69',0,'2023-01-31 13:17:58','2023-01-31 13:17:58');
INSERT INTO "courses" VALUES (11,'Mobile Development Architecture','mobile-development-architecture',10,'intermidiate','<p>This is an introduction the mobile development world.</p><p>Java, Kotlin, Swift, Objective-C, React Native, Nativescript, Cordova, PhoneGap, Ionic, PWAs, Angular, Vue. The number of different technologies claiming to be the easiest or the most efficient&nbsp;way to build apps for mobile devices is&nbsp;overwhelming.</p><p>This course is an effort to group them into architectural tiers to help you understand similarities and specificities of each one.</p><p>At the end, you will not be able to create your app, but to understand what they can provide you. You might find good tips to both start your next app and organise a learning path&nbsp;to kick off your mobile developer career.</p><h2><strong>Who this course is for:</strong></h2><ul><li>Mobile development students/beginners</li><li>Mobile development consultants</li><li>Mobile project managers</li><li>IT managers</li><li>Mobile architects</li></ul>','Native Apps, Web Apps, Progressive Web Apps, Hybrid Apps, Web-Native Apps or Cross-Compiled Apps. Learn how to choose','on','youtube',NULL,'1675452932.jpg',NULL,'24.99','19.99','on','2023-01-31 13:17:59','2023-02-03 19:35:32');
INSERT INTO "courses" VALUES (12,'Learn HTML5 Programming From Scratch','learn-html5-programming-from-scratch',6,'intermidiate','<p>HTML5 is one of the hot web technologies and is widely gaining acceptance across mobile and web. In our course, you get a complete resource that can get you started on application development for HTML5. In our course, you work on actual examples and go through important concepts required for thorough knowledge.&nbsp;</p><p>In our course, you will start with basic HTML tags. You will learn how to create HTML websites and use CSS in your work before we start discussing HTML5. We do not assume any prior knowledge so we go through the concepts from the beginner''s point of view. In our HTML5 lectures, we start with new tags and forms. We then gradually move to advance topics like Drag and Drop and Multimedia. We follow it with difficult topics like Geolocation, WebStorage, and Application cache. This course creates easy to grasp examples for each of the concepts and by the end of it, you will be able to understand the complete picture rather than just bits and pieces of the technology.&nbsp; Some of the salient features for the course are:</p><p>Designed for absolute beginners</p><p>Practical tips and tricks for the real world development</p><p>Updated to include modern concepts</p><p>It shows how to think in HTML</p><p>Learn the basic Javascript</p><p>This is the complete HTML5 course you will need to get started with HTML5 application development. The simplicity and its content have made it one of the most popular HTML5 courses on the planet.</p><h2><strong>Who this course is for:</strong></h2><ul><li>No programming background is assumed just a zeal to learn</li></ul>','A Complete HTML5 Programming Course for Beginners',NULL,'youtube',NULL,'1675452819.jpg',NULL,'24.99','12.99','on','2023-01-31 13:17:59','2023-02-03 19:33:39');
INSERT INTO "courses" VALUES (13,'Web Development Masterclass & Certifications','web-development-masterclass-certifications',6,'intermidiate','<p><strong>Completely Updated for 2023/2024 with 40 NEW lectures coding activities and projects!&nbsp;</strong></p><p>Learn What It Takes to Code Dynamic, Professional Websites and Web Apps From The Comfort of Your Own Home&nbsp;</p><p>Do you ever browse the internet wondering how your favorite websites were built? Facebook, Twitter, Amazon—they were all created by people who at one point in time didn’t know anything about coding. How did they obtain this knowledge?&nbsp;</p><p>In this comprehensive course, I’m going to show you everything you need to know so that you can follow in these people’s footsteps.&nbsp;</p><p>You’re going to learn how to code AND you’re going to become a certified professional from a recognized international trainer. And best of all, you’re going to have fun doing it.&nbsp;</p><p>You Don’t Have to Be a Genius or a Mathematical Wizard.&nbsp;</p><p>So many people believe that you must have a special ‘gift’ to create professional-quality, dynamic websites/web apps. I’m here to tell you once and for all that this is false. All you need to have is the desire to learn and the ability to follow instructions—that’s it!&nbsp;</p><p>Our course starts teaching basic coding principles and develops your coding skills in a variety of languages from beginner through to advanced. Here it is, once and for all, a complete guide that will take you from novice to web developer.&nbsp;</p><p>Skip Hours of Frustration and Thousands of Wasted Dollars and Become 100% Certified&nbsp;</p><p>The internet has changed the rules of doing business. More and more companies are migrating online while many new, never before seen businesses are created every day thanks to the power of this phenomenon. You know what that means? Higher demand for people just like you!&nbsp;</p><p>But the problem for these businesses is that while demand is high, supply is short.&nbsp;</p><p>Please don’t let a lack of knowledge stop you from having the career of your dreams, not when the knowledge you need is right here and is extremely affordable.&nbsp;</p><p>Don’t worry, you won’t need to buy any additional courses, it’s all here. No need to spend four years and over $15,000 per year in college tuition either—it really is all here. From HTML to CSS then to Javascript and finally PHP, you will learn how to Become a Certified Web Developer.&nbsp;</p><p>It Doesn’t Matter Where You’re Starting From...You Can Do It!&nbsp;</p><p>Maybe:&nbsp;</p><p>&nbsp; &nbsp; &nbsp;● You’re planning on studying coding at college and want to build a rock-solid foundation so that you have a huge head start before your course begins?&nbsp;</p><p>&nbsp; &nbsp; &nbsp;● You’re dissatisfied with your current job and want to learn exactly what it takes to become a fully qualified web developer?&nbsp;</p><p>&nbsp; &nbsp; &nbsp;● You’re currently working in IT but want to expand your skill base so that you’re 100% up to date with the latest developments in web technology?&nbsp;</p><p>&nbsp; &nbsp; &nbsp;● You want to develop mobile apps or websites on the side to create some additional income while retaining your current job?&nbsp;</p><p><strong>Learn Skills That Will Benefit You for The Rest of Your Life&nbsp;</strong></p><p>- Imagine being able to create a web app that is downloaded by millions of paying customers—or a website that’s visited by people from all seven continents.&nbsp;</p><p>- Imagine the limitless opportunities that having these programming skills will give you.&nbsp;</p><p>- Imagine working in a field that challenges you and allows you to express yourself freely every day.&nbsp;</p><p>- Imagine being paid extremely well for developing products and services that can help change people’s lives.&nbsp;</p><p>Stop imagining and take action! It’s time to start your journey. Your future is waiting for you...&nbsp;</p><p>&nbsp;</p><p><strong>Four Certifications in One</strong><br>The unique Certified Web Development Professional credential will provide proof that you have mastered the fundamental skills needed by new web developers. You''ll have a full understanding of HTML5, the language used to structure web sites and many mobile applications that you use every day. From there, you''ll move on to Javascript-- the language of interaction on the web. The use of Javascript is growing at a lightning pace and it''s been called "the most important language to learn today," by multiple experts.</p><p>Each language carries its own individual Specialist Designation for which you earn a certificate, the privilege of using the specialist credential badge, and a personal online transcript page that shows your designations, certification, and accomplishments.</p><p>&nbsp;</p><p><strong>Prepare for Valuable Industry Certifications</strong><br>This course is specially designed to prepare you for the&nbsp; Web Development Professional Certification from LearnToProgram, Inc. This certification will allow you to prove that you have achieved competencies in HTML, CSS, and JavaScript-- everything you need to create basic web applications. <strong>New for 2023:&nbsp; </strong>No exams are required to earn your certifications.&nbsp; Complete and submit all the lab activities for the course program and you''ll earn your new certifications!</p><p>&nbsp;</p><p><strong>Certified Web Developers</strong> will receive:&nbsp;</p><p>A printable certificate indicating the new certification that you can present to employers or prospects</p><p>A letter explaining the certification and its value to a prospective employer. The letter will state exactly what mastery the certification represents</p><p>Authorization to use the LearnToProgram Certified Web Developer Badge on your website and marketing materials</p><p>Automatic linkage to your LinkedIn account to display your certification</p><h2><strong>Who this course is for:</strong></h2><ul><li>Web Designers who Want to Learn To Code</li><li>Traditional Programmers who Want to Learn Web Development</li><li>People who Want to Develop Mobile Web Sites</li><li>Students who want Practical Development Skills</li><li>Web Masters who Need to Improve Development Skills</li><li>Volunteers who Manage a Site for a Church or Non Profit</li><li>Teachers who Want to Introduce Web Development to Their Classes</li><li>Those Considering a Career in Web Development</li></ul>','HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery','on','youtube',NULL,'1675452732.jpg',NULL,'84.99','12.99','on','2023-01-31 13:17:59','2023-02-03 19:32:12');
INSERT INTO "lessons" VALUES (1,2,1,'This is First Lesson','youtube','https://mdiqbal.xyz',NULL,NULL,NULL,'2023-01-17 13:26:31','2023-01-17 13:26:31');
INSERT INTO "lessons" VALUES (2,3,4,'What is PHP?','youtube','https://www.youtube.com/embed/IUN664s7N-c',NULL,NULL,NULL,'2023-01-17 13:29:44','2023-01-17 13:29:44');
INSERT INTO "lessons" VALUES (3,9,30,'Laverne Zemlak','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'34','Eaque ullam nobis accusantium dolor. Ut eos rerum voluptatum quam quia aperiam. Iusto dignissimos commodi perferendis voluptatem. Rerum ut earum nesciunt animi cupiditate ipsam.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (4,9,33,'Avis Bailey','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'29','Magni dolores minima quisquam qui modi. Asperiores nam asperiores natus non. Quod porro et dolor cumque. Qui praesentium minus amet.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (5,5,22,'Cortney Corwin','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'35','Quam quia ad doloremque. Corrupti ea ea reprehenderit ea perspiciatis. Sed odit qui sint odit quia ut hic.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (6,5,5,'Fabiola Swift Jr.','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'23','Quasi ea quasi culpa quasi non. Consequatur enim perspiciatis qui vitae voluptatum adipisci. Est cum tempora dolor vel.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (7,6,1,'Citlalli Grant','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'68','Omnis qui et necessitatibus aut nobis voluptates. Voluptatem minus est iusto nostrum culpa. Reprehenderit unde fuga fugiat iusto odio et.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (8,5,6,'Dr. Riley Harris II','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'91','Molestias fugiat quos sit officiis quae deleniti in incidunt. Et quibusdam et dicta dolor. Illum soluta vitae non quis harum.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (9,11,1,'Duane Bartoletti','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'22','Dolor qui officia placeat ullam vitae veritatis est ab. Voluptas aspernatur est est a excepturi. Non numquam ab nostrum ut ut.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (10,5,30,'Susie Goyette','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'8','Et tempore autem eligendi autem et. Optio explicabo velit incidunt doloremque ea iste voluptas. Doloribus autem corrupti aut sed consequuntur in. Laboriosam expedita fugiat minima id enim.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (11,13,27,'Glenna Herman','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'84','Qui perspiciatis aut iusto labore aliquam. Voluptatem velit voluptate aut non facilis. Recusandae ipsam esse veniam.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (12,10,23,'Ms. Susanna Hermiston','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'46','Corrupti voluptas qui distinctio odio id. Corrupti quia repellendus pariatur sunt perferendis sit ut laborum. Quibusdam veritatis harum expedita.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (13,3,6,'Cara Hettinger','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'57','Ratione fugit facilis sapiente alias voluptatem dolore quasi nihil. Enim aspernatur aut voluptas aperiam quis nesciunt. Officia rem velit et quia. Est quos fugit laborum natus at quisquam.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (14,9,34,'Prof. Sofia Schaden','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'10','Et excepturi laboriosam aut quidem tenetur voluptatem in. Vero vitae qui doloremque totam enim delectus laudantium. Ea quod exercitationem quas. Consequatur quo aut cum quaerat magni enim.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (15,3,18,'Ambrose Jones','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'14','Veritatis saepe ut laboriosam animi. Ipsa aspernatur in placeat possimus aut ut.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (16,9,27,'Major Adams Jr.','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'4','Qui et error omnis sit molestiae corporis. Ut doloribus non velit consequatur et explicabo. Exercitationem soluta quam enim quia.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (17,9,6,'Ms. Lexie Feil MD','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'9','Totam natus fuga consequatur nisi. Itaque iure quo hic illo harum officia aut. Et qui perspiciatis eos accusamus. Illo autem voluptatem ullam rem neque deserunt sapiente.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (18,11,2,'Marlen Pagac DVM','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'87','Illo molestiae fuga alias dolor. Doloremque cum consequatur recusandae ratione ut dolorem distinctio. Recusandae eius et in assumenda et.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (19,13,26,'Keshawn Tromp','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'5','Iure aspernatur ut rerum at voluptas omnis. Nesciunt sed facere ut quae veritatis nihil dolor. Iure qui nihil alias ad et omnis.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (20,9,11,'Cristal Simonis','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'66','Doloribus sint vitae rem molestiae fugiat. Modi velit est et. Est aperiam iusto perferendis sint voluptatum id nihil neque.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (21,12,31,'Mable Schmitt','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'49','Tempore pariatur incidunt sequi architecto harum molestias vel. Consequatur temporibus voluptatem dolor et magnam eius non.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (22,11,1,'Dr. Haleigh Heller Jr.','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'3','Aut magni error occaecati est sed est est. Recusandae vitae nesciunt reprehenderit blanditiis fugiat. Ut molestiae voluptas consequuntur nesciunt quia est autem.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (23,9,9,'Ashlynn Murphy','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'34','Molestiae omnis voluptas sunt exercitationem non. Tempora sint voluptatum est at ut porro voluptates occaecati. Iste voluptatem a quasi est. Illum eveniet tenetur qui veritatis libero iure.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (24,11,26,'Miss Ariane Emmerich','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'11','Libero ad corrupti ducimus molestiae error quo. Voluptatem iure quasi nemo dolorum repellat. Totam quisquam voluptas qui quae molestiae deleniti.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (25,8,14,'Stephany Pollich','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'26','Repellat ut vero facere sint accusamus. Delectus fugiat veniam non facilis rerum facilis delectus quo. Totam et qui quo ut voluptatem qui minima.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (26,5,15,'Karianne Schultz','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'99','Autem asperiores ea dolor similique minus. Labore eaque modi ullam qui et.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (27,11,34,'Bella Ankunding','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'84','Doloribus labore voluptatibus dolores voluptatem placeat fugiat eius perferendis. Minima fugit velit et repellendus. Porro consequatur autem et.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (28,6,34,'Cara Gislason','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'32','Nihil velit dolorum minima soluta tempore repellendus architecto. Quaerat neque autem eius rerum necessitatibus iure. Tempore quia illum et amet harum veniam.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (29,11,32,'Dr. Antonina Lakin','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'33','Voluptatem in atque occaecati sed voluptatibus. Dolore odio necessitatibus iure dolorem occaecati. Odio eos aut dolorem libero porro eligendi.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (30,9,11,'Ed Dare','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'19','Dignissimos ad eum voluptatem commodi id incidunt autem. Et molestias ipsum molestiae reiciendis doloribus temporibus quia. Et vitae voluptatem inventore et veniam et.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (31,11,15,'Dr. Saige Grimes IV','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'70','Sequi maxime ipsam at occaecati fuga aperiam. Ut voluptas dolor velit eum a. Id vitae sit assumenda fugiat nulla sed.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (32,8,23,'Ward Bosco','youtube','https://www.youtube.com/watch?v=QH2-TGUlwu4',NULL,'18','Explicabo at soluta in minus. Placeat voluptatem et omnis illum quibusdam voluptatem. Velit nulla eos tempora cumque qui. Accusantium maiores dolor sed.','2023-02-02 17:36:14','2023-02-02 17:36:14');
INSERT INTO "lessons" VALUES (33,13,35,'About Our Course','youtube','https://www.youtube.com/embed/M7lc1UVf-VE',NULL,'02:30','<p>HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery</p>','2023-02-03 19:42:44','2023-02-03 19:42:44');
INSERT INTO "lessons" VALUES (34,13,35,'About our Certifications','youtube','https://www.youtube.com/embed/M7lc1UVf-VE',NULL,'03:20','<p>HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery</p>','2023-02-03 19:43:37','2023-02-03 19:43:37');
INSERT INTO "lessons" VALUES (35,13,36,'Tools Introductions','youtube','https://www.youtube.com/embed/M7lc1UVf-VE',NULL,'01:20','<p>HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery</p>','2023-02-03 19:44:51','2023-02-03 19:44:51');
INSERT INTO "lessons" VALUES (36,13,36,'VSCode Workshop','youtube','https://www.youtube.com/embed/M7lc1UVf-VE',NULL,'23:09','<p>HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery</p>','2023-02-03 19:46:01','2023-02-03 19:46:01');
INSERT INTO "lessons" VALUES (37,13,36,'Github Workshop','youtube','https://www.youtube.com/embed/M7lc1UVf-VE',NULL,'25:02','<p>HTML | CSS | JavaScript | Web programming | Web development | Front-end | Responsive | JQuery</p>','2023-02-03 19:47:02','2023-02-03 19:47:02');
INSERT INTO "sections" VALUES (1,2,'Introduction of App Development','2023-01-16 15:23:30','2023-01-16 15:23:30');
INSERT INTO "sections" VALUES (2,2,'Basic of App Development','2023-01-16 15:24:15','2023-01-16 15:24:15');
INSERT INTO "sections" VALUES (3,3,'Introduction of PHP Fundamental','2023-01-16 15:38:42','2023-01-16 15:38:42');
INSERT INTO "sections" VALUES (4,3,'Basic of PHP Fundamental','2023-01-16 15:39:07','2023-01-16 15:39:07');
INSERT INTO "sections" VALUES (5,13,'Willis Considine','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (6,8,'Maeve Crooks','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (7,6,'Miss Eleanore Daniel DVM','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (8,11,'Brian Crist','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (9,13,'Raquel Sanford','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (10,4,'Dejon Armstrong MD','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (11,9,'Dr. Clint Feil','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (12,9,'Constance Kautzer','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (13,6,'Jonathon Marquardt','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (14,4,'Dr. Lane O''Kon Sr.','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (15,7,'Lily Paucek','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (16,11,'Mr. Davonte Marvin','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (17,8,'Leila Dach','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (18,4,'Mr. Chandler King','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (19,3,'Preston Bayer II','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (20,6,'Kelton Goldner','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (21,8,'Providenci Herman','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (22,10,'German Lang IV','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (23,6,'Robin Graham','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (24,5,'Adeline Cronin','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (25,11,'Prof. Jordane Hessel MD','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (26,3,'Jovani McDermott IV','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (27,3,'Chris Streich','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (28,5,'Miss Emmie Reynolds','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (29,9,'Lon Swaniawski','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (30,8,'Rod Lockman','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (31,12,'Dr. Ada Padberg V','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (32,8,'Fatima Rutherford','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (33,8,'Ford Fahey','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (34,9,'Miss Ariane Zemlak','2023-02-02 17:32:55','2023-02-02 17:32:55');
INSERT INTO "sections" VALUES (35,13,'Program Information','2023-02-03 19:37:26','2023-02-03 19:37:26');
INSERT INTO "sections" VALUES (36,13,'Your Development Toolbox','2023-02-03 19:38:01','2023-02-03 19:38:01');
INSERT INTO "sections" VALUES (37,13,'Certified HTML5 Foundation','2023-02-03 19:38:27','2023-02-03 19:38:27');
INSERT INTO "sections" VALUES (38,13,'Certified CSS3 Foundation','2023-02-03 19:38:48','2023-02-03 19:38:48');
INSERT INTO "sections" VALUES (39,13,'Certified Javascript Foundation','2023-02-03 19:39:09','2023-02-03 19:39:09');
INSERT INTO "sections" VALUES (40,13,'Practice Project','2023-02-03 19:39:32','2023-02-03 19:39:32');
INSERT INTO "enrolls" VALUES (1,1,3,'stripe','completed','1000','USD','2023-01-30','2023-01-30 13:24:22','2023-01-30 13:25:43');
INSERT INTO "enrolls" VALUES (2,4,2,'stripe','pending','100','USD',NULL,'2023-01-30 13:34:37','2023-01-30 13:34:37');
INSERT INTO "enrolls" VALUES (3,1,12,'stripe','completed','73.9','USD','2023-01-31','2023-01-31 20:20:54','2023-01-31 20:23:16');
INSERT INTO "enrolls" VALUES (4,1,13,'stripe','completed','12.99','USD','2023-02-04','2023-02-04 04:46:00','2023-02-04 04:48:05');
INSERT INTO "enrolls" VALUES (5,1,12,'stripe','completed','12.99','USD','2023-02-04','2023-02-04 05:35:56','2023-02-04 06:06:20');
INSERT INTO "enrolls" VALUES (6,5,13,'stripe','completed','12.99','USD','2023-02-04','2023-02-04 06:11:54','2023-02-04 06:12:21');
INSERT INTO "enrolls" VALUES (7,1,13,'stripe','pending','12.99','USD',NULL,'2023-02-07 14:34:24','2023-02-07 14:34:24');
INSERT INTO "users" VALUES (1,'User','user@gmail.com',NULL,'0170000000000','46/6, B, Jhigatola, Kacha Bazar Songlogno, Jhigatola, Dhanmondi, Dhaka',NULL,'$2y$10$REtD5U39xQ0xrnFE5J.CBOvmweI/Dj7Sk8dtFw8SLWSKN65J/e6ny',NULL,NULL,'1675236224.png','2023-01-22 06:50:02','2023-02-01 07:28:58');
INSERT INTO "users" VALUES (4,'Iqbal Hossan','jmiqbal2019@gmail.com',NULL,'01679487265','Dhaka',NULL,'$2y$10$YPGRdw5VRgOKKi0B0d.cp.TWC6NW6Piy/7N3fdeadlBcjRYcm2eTG',NULL,NULL,'','2023-01-30 13:31:28','2023-01-30 13:31:28');
INSERT INTO "users" VALUES (5,'Test','test@example.com',NULL,NULL,NULL,NULL,'$2y$10$uhqOZF5oI222QRazvfLoYuTr5cLFMc3Jt.lszoGPIBA2YqL5SlaOG',NULL,NULL,NULL,'2023-02-04 06:11:53','2023-02-04 06:11:53');
INSERT INTO "settings" VALUES (1,'Laravel LMS','Laravel Learning Management System','Dhaka, Bangladesh','01700000000','info@site.com','1675108779logo2.png','1675108779logo2.png','1675090615459724.webp','Laravel Learning Management System',NULL,'USD','$','left','2023-01-30 14:24:00','2023-02-03 18:32:31','1675369221459724.webp','{"facebook":"https:\/\/www.facebook.com","twitter":"https:\/\/www.twitter.com","linkedin":"https:\/\/www.linkedin.com\/in\/iqbal-hossan\/","youtube":"https:\/\/youtube.com"}','{"image":"1675449151banner_img.png","title":"Distant learning for further expansion","description":"The ultimate planning solution for people who want to reach their personal goals Effortless comfortable."}',NULL);
CREATE UNIQUE INDEX IF NOT EXISTS "failed_jobs_uuid_unique" ON "failed_jobs" (
	"uuid"
);
CREATE INDEX IF NOT EXISTS "personal_access_tokens_tokenable_type_tokenable_id_index" ON "personal_access_tokens" (
	"tokenable_type",
	"tokenable_id"
);
CREATE UNIQUE INDEX IF NOT EXISTS "personal_access_tokens_token_unique" ON "personal_access_tokens" (
	"token"
);
CREATE INDEX IF NOT EXISTS "sessions_user_id_index" ON "sessions" (
	"user_id"
);
CREATE INDEX IF NOT EXISTS "sessions_last_activity_index" ON "sessions" (
	"last_activity"
);
CREATE UNIQUE INDEX IF NOT EXISTS "admins_email_unique" ON "admins" (
	"email"
);
CREATE UNIQUE INDEX IF NOT EXISTS "admins_mobile_unique" ON "admins" (
	"mobile"
);
CREATE UNIQUE INDEX IF NOT EXISTS "categories_slug_unique" ON "categories" (
	"slug"
);
CREATE UNIQUE INDEX IF NOT EXISTS "courses_slug_unique" ON "courses" (
	"slug"
);
CREATE UNIQUE INDEX IF NOT EXISTS "users_email_unique" ON "users" (
	"email"
);
CREATE UNIQUE INDEX IF NOT EXISTS "users_username_unique" ON "users" (
	"username"
);
CREATE UNIQUE INDEX IF NOT EXISTS "users_phone_unique" ON "users" (
	"phone"
);
COMMIT;
