-- MariaDB dump 10.19  Distrib 10.11.6-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: esenciamzo
-- ------------------------------------------------------
-- Server version	10.11.6-MariaDB-0+deb12u1

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
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_author` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `type` enum('1','2','3') NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `likes` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `body` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` int(1) NOT NULL,
  `description` text NOT NULL,
  `body` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `attach` varchar(255) NOT NULL,
  `category` int(1) DEFAULT 1,
  `date` varchar(20) NOT NULL,
  `dateOfEvent` varchar(20) NOT NULL,
  `mainPicture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES
(1,'Feria del libro 2024',1,'Feria del libro oficiada por el gobierno de Manzanillo','d','Manzanillo Centro','events_attachments/6757da55e667e.pdf',1,'10-12-2024','10-12-2024','events_main_photos/6757da55e65c6.jpg');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gastro`
--

DROP TABLE IF EXISTS `gastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` int(1) NOT NULL,
  `logo` varchar(128) DEFAULT NULL,
  `description` text NOT NULL,
  `body` text NOT NULL,
  `delivery` enum('1','2') NOT NULL DEFAULT '2',
  `phone` varchar(15) DEFAULT NULL,
  `menu` varchar(128) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gastro`
--

LOCK TABLES `gastro` WRITE;
/*!40000 ALTER TABLE `gastro` DISABLE KEYS */;
INSERT INTO `gastro` VALUES
(2,'Burger King',1,'logos/66fe3c2bc11fa.png','Cadena de comida rápida americana','Fue fundada el 4 de diciembre de 1954 en Miami, cuando dos jóvenes emprendedores llamados James McLamore y David R. Edgerton inauguraron este restaurante basado en un concepto diferente al que existía y que se ha mantenido hasta hoy: \"The Home of The Whopper\".\r\n\r\nEn 1955, \"el producto rey\" fue incorporado como la imagen de la marca y ha perdurado como referencia: la Whopper, el producto principal de Burger King. En 1958 se lanzó el primer anuncio de televisión en Miami, lo que dio pie a una campaña televisiva de más de 50 años. En 1959 la marca comenzó su expansión por medio de franquicias, extendiendo sus operaciones por todo Estados Unidos y después a nivel mundial. Así, en el año 1963, abrió el primer restaurante fuera de los Estados Unidos, en Puerto Rico. En 1974 se inició la campaña de mercadeo «HAVE IT YOUR WAY» (Como tú quieras) permitiendo que los clientes personalizaran los ingredientes de sus hamburguesas. En 1975 se inició un nuevo servicio que permitía a los clientes recibir sus productos sin bajar de su automóvil. Ese mismo año la franquicia abrió su primer local en Europa: en Madrid, en donde la imagen de la inauguración fue la cantante internacional Rosa Morena. Debido a la demanda de clientes durante las primeras horas del día, en 1979, se incorporó el menú de desayunos.\r\n\r\n\r\nCombo Burger King de la Whopper original.\r\nEn 1989, la compañía Grand Metropolitan PLC adquirió los derechos de Burger King, comprando las acciones de Pillsbury, quien había adquirido los derechos previamente en 1967. En 1997, Grand Metropolitan PLC se fusionó con Guinness convirtiéndose en Diageo PLC, líder mundial en alimentos y dueños de los derechos de Burger King Corporation. Una nueva compra se gestó para el año 2002, Texas Pacific Group, Bain Capital Partners y Goldman Sachs Capital, compraron a Diageo PLC los derechos de marca, regresando la propiedad a Estados Unidos. En 2004, \'el rey\' resucitó como principal vehículo de marketing, ya que en 1998 durante la actualización del logotipo y los restaurantes, se había dejado de lado esta imagen legendaria. Para el 50.º aniversario de la Whopper, en 2007, se diseñó una campaña en la que se simulaba su desaparición del menú.','1',NULL,'menus/66fe3c2bc1331.pdf','Manzanillo','03-10-2024'),
(3,'Carl\'s Jr',1,'logos/66fe3cc9ef423.png','Carl\'s Jr. es una cadena de restaurante de comida rápida originada en los Estados Unidos y actualmente presente en el resto del mundo.','Carl Karcher comenzó a trabajar en el sector alimenticio en 1941, con varios establecimientos de hot dogs en Los Ángeles, California. En 1945, Karcher adquirió un restaurante independiente en Anaheim, California llamado Carl\'s Drive-In Barbeque. En 1956, Karcher abrió los dos primeros restaurantes de Carl\'s Jr.; llamado así por el mismo Karcher ya que los consideraba los \"hijos\" de su primer restaurante. La cadena se caracterizó por su servicio rápido y su logotipo, la estrella feliz de color amarillo brillante. Hardee\'s, otro restaurante de CKE Restaurants también posee el mismo logotipo.\r\n\r\nEn 1981, con 300 restaurantes en funcionamiento, Carl Karcher Enterprises se convirtió en una compañía pública.\r\n\r\nCarl\'s Jr. se expandió rápidamente, y actualmente tiene más de 1.000 restaurantes en 13 estados de los Estados Unidos, así como en México, donde abrió sus primeras sucursales en 1992 en Monterrey, Nuevo León y Tijuana, Baja California, siendo este el país con mayor presencia de la cadena fuera de los Estados Unidos, con 300 sucursales en 2021. Anteriormente, había dos restaurantes en Malasia, uno abierto en Ampang Point que cerró en 1998, y otro que se abrió cerca de Lake Gardens, actualmente también cerrado.','1',NULL,NULL,'Manzanillo','03-10-2024'),
(4,'Café Manzanillo',2,'logos/675875b99a09c.jpg','Café ubicado en el Centro','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut neque placerat, fermentum nisi non, viverra turpis. Pellentesque consequat ligula nibh, sed vehicula velit volutpat vel. Suspendisse rutrum orci nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed tellus varius, feugiat est tristique, tempor felis. Aenean nec dictum massa. Morbi commodo leo volutpat, suscipit neque nec, malesuada leo. Duis condimentum condimentum mi id posuere. Sed posuere libero ut dui tincidunt, vitae finibus lorem sodales. Etiam sollicitudin diam a leo accumsan hendrerit. Cras risus purus, accumsan a iaculis eget, iaculis at velit. Fusce ornare magna nisl, vel laoreet ante fermentum facilisis. Duis blandit nisi nisl, ut aliquam nibh facilisis et.\r\n\r\nNunc vel odio nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin dolor varius risus eleifend, a consectetur mi commodo. Sed posuere mi non odio pharetra, ac ornare tellus luctus. Integer eu vulputate arcu. Phasellus ac dolor euismod, tempus libero eget, facilisis sem. Morbi eget fermentum ex. Pellentesque purus urna, vulputate pellentesque lacus non, tincidunt molestie velit. Nullam nisl orci, finibus at faucibus sed, ullamcorper scelerisque risus. Donec consequat nisl ac leo sagittis consectetur. Cras ac dignissim tortor, sed venenatis dolor.\r\n\r\nCurabitur id vehicula purus, nec pulvinar magna. Donec posuere ante ac fringilla ornare. Suspendisse fermentum tortor vitae magna eleifend venenatis. Duis turpis lacus, auctor eget rutrum sed, blandit quis eros. Pellentesque tristique non magna a mollis. Proin tristique nisi sed mattis bibendum. Praesent tristique diam congue leo dignissim ultrices. Aliquam vel risus urna. Fusce vulputate sollicitudin sapien nec lacinia.','1',NULL,'menus/675875b99a2cc.pdf','Manzanillo, Centro','10-12-2024');
/*!40000 ALTER TABLE `gastro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route` varchar(128) DEFAULT NULL,
  `id_post` int(11) NOT NULL,
  `category` enum('1','2','3') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags_in_post`
--

DROP TABLE IF EXISTS `tags_in_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags_in_post` (
  `id_tag` int(11) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags_in_post`
--

LOCK TABLES `tags_in_post` WRITE;
/*!40000 ALTER TABLE `tags_in_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags_in_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turismo`
--

DROP TABLE IF EXISTS `turismo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turismo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` int(1) NOT NULL,
  `description` text NOT NULL,
  `body` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `photo` varchar(128) DEFAULT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turismo`
--

LOCK TABLES `turismo` WRITE;
/*!40000 ALTER TABLE `turismo` DISABLE KEYS */;
INSERT INTO `turismo` VALUES
(1,'San pedrito',1,'Playa de Manzanillo Centro','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tristique mi nec pellentesque pulvinar. Pellentesque consectetur ex nec nisi dapibus egestas. Curabitur eget sem nibh. Morbi at rhoncus lectus. Donec et urna placerat, luctus neque in, pharetra enim. In ac maximus magna, a ultrices urna. Donec volutpat diam non dapibus dictum. Nullam fermentum enim enim, at luctus mauris pellentesque molestie.\r\n\r\nIn eleifend semper orci. Proin ante lectus, rhoncus id fermentum vitae, imperdiet sed metus. Aenean imperdiet convallis risus, vel pretium justo sagittis et. Sed id ultrices massa. Curabitur euismod metus turpis, id pulvinar velit consectetur ac. Donec fermentum, elit et placerat auctor, nisl mi cursus eros, sit amet molestie nibh tortor nec dui. Nunc turpis velit, sagittis id velit vel, blandit sagittis turpis. Suspendisse in nibh ante. Curabitur libero odio, scelerisque eget diam eget, fringilla sagittis urna. In imperdiet egestas erat, ut gravida nisl porttitor in. Phasellus aliquet hendrerit diam nec posuere. Donec at eros tincidunt, pretium odio at, pulvinar sem. Cras sodales ultricies tellus.\r\n\r\nNulla ex quam, eleifend eu elit ut, lobortis rutrum dui. Nam mauris nisl, facilisis vel consequat vulputate, posuere ac nulla. In hac habitasse platea dictumst. Proin ut suscipit turpis. Praesent congue dapibus euismod. Praesent ultrices eget ex non aliquam. Morbi sit amet vestibulum sapien, vitae fermentum orci. Morbi ac turpis mi. In ornare viverra maximus.\r\n\r\nIn arcu leo, hendrerit et dui vitae, viverra lobortis orci. Integer ac maximus sapien, malesuada consectetur arcu. Pellentesque ultrices ante nec diam imperdiet ornare. Sed et risus sem. Quisque ligula risus, vulputate et metus a, fermentum porttitor eros. Duis at turpis ut tortor placerat interdum. Curabitur malesuada neque vel risus iaculis rutrum nec ut magna. Donec porttitor lacus non mollis tincidunt. Vivamus porta faucibus interdum. Aenean porttitor tincidunt arcu, et faucibus dolor egestas sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;','Manzanillo','tour_main_photos/66fe3d9329b79.jpg','03-10-2024');
/*!40000 ALTER TABLE `turismo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `role` enum('1','2','3') NOT NULL DEFAULT '3',
  `avatar` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nickname` (`nickname`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'Admin','Mzo',NULL,'admin@mzo.mx','Administrador de Esencia de Manzanillo','$2y$10$p3nW5zOhP/Dq/eSn4hubEOdXyot7MjawQd8bM2IINRIJFuBmOpsWO','1',NULL),
(2,'Carlos','Nolazco','Neku','cnolazco@ucol.mx','Estudiante de la UDC','$2y$10$iYkD96QcVYNF419UepHhCe8xuM1V09UUL555Gaqppomzv/DOBGrk6','2','avatars/6758749ce1d2b.png');
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

-- Dump completed on 2025-02-19 19:22:01
