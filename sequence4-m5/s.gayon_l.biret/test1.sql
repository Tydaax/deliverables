-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Current Database: `mydb`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `mydb` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mydb`;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL,
  `author` varchar(70) NOT NULL,
  `genre` varchar(70) NOT NULL,
  `height` int(11) DEFAULT NULL,
  `publisher` varchar(70) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Fundamentals of Wavelets','Goswami, Jaideva','signal_processing',228,'Wiley',NULL),(2,'Data Smart','Foreman, John','data_science',235,'Wiley',NULL),(3,'God Created the Integers','Hawking, Stephen','mathematics',197,'Penguin',NULL),(4,'Superfreakonomics','Dubner, Stephen','economics',179,'HarperCollins',NULL),(5,'Orientalism','Said, Edward','history',197,'Penguin',NULL),(6,'Nature of Statistical Learning Theory, The','Vapnik, Vladimir','data_science',230,'Springer',NULL),(7,'Integration of the Indian States','Menon, V P','history',217,'Orient Blackswan',NULL),(8,'Drunkard\'s Walk, The','Mlodinow, Leonard','science',197,'Penguin',NULL),(9,'Image Processing & Mathematical Morphology','Shih, Frank','signal_processing',241,'CRC',NULL),(10,'How to Think Like Sherlock Holmes','Konnikova, Maria','psychology',240,'Penguin',NULL),(11,'Data Scientists at Work','Sebastian Gutierrez','data_science',230,'Apress',NULL),(12,'Slaughterhouse Five','Vonnegut, Kurt','fiction',198,'Random House',NULL),(13,'Birth of a Theorem','Villani, Cedric','mathematics',234,'Bodley Head',NULL),(14,'Structure & Interpretation of Computer Programs','Sussman, Gerald','computer_science',240,'MIT Press',NULL),(15,'Age of Wrath, The','Eraly, Abraham','history',238,'Penguin',NULL),(16,'Trial, The','Kafka, Frank','fiction',198,'Random House',NULL),(17,'Statistical Decision Theory\'','Pratt, John','data_science',236,'MIT Press',NULL),(18,'Data Mining Handbook','Nisbet, Robert','data_science',242,'Apress',NULL),(19,'New Machiavelli, The','Wells, H. G.','fiction',180,'Penguin',NULL),(20,'Physics & Philosophy','Heisenberg, Werner','science',197,'Penguin',NULL),(21,'Making Software','Oram, Andy','computer_science',232,'O\'Reilly',NULL),(22,'Analysis, Vol I','Tao, Terence','mathematics',248,'HBA',NULL),(23,'Machine Learning for Hackers','Conway, Drew','data_science',233,'O\'Reilly',NULL),(24,'Signal and the Noise, The','Silver, Nate','data_science',233,'Penguin',NULL),(25,'Python for Data Analysis','McKinney, Wes','data_science',233,'O\'Reilly',NULL),(26,'Introduction to Algorithms','Cormen, Thomas','computer_science',234,'MIT Press',NULL),(27,'Beautiful and the Damned, The','Deb, Siddhartha','nonfiction',198,'Penguin',NULL),(28,'Outsider, The','Camus, Albert','fiction',198,'Penguin',NULL),(29,'Complete Sherlock Holmes, The - Vol I','Doyle, Arthur Conan','fiction',176,'Random House',NULL),(30,'Complete Sherlock Holmes, The - Vol II','Doyle, Arthur Conan','fiction',176,'Random House',NULL),(31,'Wealth of Nations, The','Smith, Adam','economics',175,'Random House',NULL),(32,'Pillars of the Earth, The','Follett, Ken','fiction',176,'Random House',NULL),(33,'Mein Kampf','Hitler, Adolf','nonfiction',212,'Rupa',NULL),(34,'Tao of Physics, The','Capra, Fritjof','science',179,'Penguin',NULL),(35,'Surely You\'re Joking Mr Feynman','Feynman, Richard','science',198,'Random House',NULL),(36,'Farewell to Arms, A','Hemingway, Ernest','fiction',179,'Rupa',NULL),(37,'Veteran, The','Forsyth, Frederick','fiction',177,'Transworld',NULL),(38,'False Impressions','Archer, Jeffery','fiction',177,'Pan',NULL),(39,'Last Lecture, The','Pausch, Randy','nonfiction',197,'Hyperion',NULL),(40,'Return of the Primitive','Rand, Ayn','philosophy',202,'Penguin',NULL),(41,'Jurassic Park','Crichton, Michael','fiction',174,'Random House',NULL),(42,'Russian Journal, A','Steinbeck, John','nonfiction',196,'Penguin',NULL),(43,'Tales of Mystery and Imagination','Poe, Edgar Allen','fiction',172,'HarperCollins',NULL),(44,'Freakonomics','Dubner, Stephen','economics',197,'Penguin',NULL),(45,'Hidden Connections, The','Capra, Fritjof','science',197,'HarperCollins',NULL),(46,'Story of Philosophy, The','Durant, Will','philosophy',170,'Pocket',NULL),(47,'Asami Asami','Deshpande, P L','fiction',205,'Mauj',NULL),(48,'Journal of a Novel','Steinbeck, John','fiction',196,'Penguin',NULL),(49,'Once There Was a War','Steinbeck, John','nonfiction',196,'Penguin',NULL),(50,'Moon is Down, The','Steinbeck, John','fiction',196,'Penguin',NULL),(51,'Brethren, The','Grisham, John','fiction',174,'Random House',NULL),(52,'In a Free State','Naipaul, V. S.','fiction',196,'Rupa',NULL),(53,'Catch 22','Heller, Joseph','fiction',178,'Random House',NULL),(54,'Complete Mastermind, The','BBC','nonfiction',178,'BBC',NULL),(55,'Dylan on Dylan','Dylan, Bob','nonfiction',197,'Random House',NULL),(56,'Soft Computing & Intelligent Systems','Gupta, Madan','data_science',242,'Elsevier',NULL),(57,'Textbook of Economic Theory','Stonier, Alfred','economics',242,'Pearson',NULL),(58,'Econometric Analysis','Greene, W. H.','economics',242,'Pearson',NULL),(59,'Learning OpenCV','Bradsky, Gary','data_science',232,'O\'Reilly',NULL),(60,'Data Structures Using C & C++','Tanenbaum, Andrew','computer_science',235,'Prentice Hall',NULL),(61,'Computer Vision, A Modern Approach','Forsyth, David','data_science',255,'Pearson',NULL),(62,'Principles of Communication Systems','Taub, Schilling','computer_science',240,'TMH',NULL),(63,'Let Us C','Kanetkar, Yashwant','computer_science',213,'Prentice Hall',NULL),(64,'Amulet of Samarkand, The','Stroud, Jonathan','fiction',179,'Random House',NULL),(65,'Crime and Punishment','Dostoevsky, Fyodor','fiction',180,'Penguin',NULL),(66,'Angels & Demons','Brown, Dan','fiction',178,'Random House',NULL),(67,'Argumentative Indian, The','Sen, Amartya','nonfiction',209,'Picador',NULL),(68,'Sea of Poppies','Ghosh, Amitav','fiction',197,'Penguin',NULL),(69,'Idea of Justice, The','Sen, Amartya','nonfiction',212,'Penguin',NULL),(70,'Raisin in the Sun, A','Hansberry, Lorraine','fiction',175,'Penguin',NULL),(71,'All the President\'s Men','Woodward, Bob','history',177,'Random House',NULL),(72,'Prisoner of Birth, A','Archer, Jeffery','fiction',176,'Pan',NULL),(73,'Scoop!','Nayar, Kuldip','history',216,'HarperCollins',NULL),(74,'Ahe Manohar Tari','Deshpande, Sunita','nonfiction',213,'Mauj',NULL),(75,'Last Mughal, The','Dalrymple, William','history',199,'Penguin',NULL),(76,'Social Choice & Welfare, Vol 39 No. 1','Various','economics',235,'Springer',NULL),(77,'Radiowaril Bhashane & Shrutika','Deshpande, P L','nonfiction',213,'Mauj',NULL),(78,'Gun Gayin Awadi','Deshpande, P L','nonfiction',212,'Mauj',NULL),(79,'Aghal Paghal','Deshpande, P L','nonfiction',212,'Mauj',NULL),(80,'Maqta-e-Ghalib','Garg, Sanjay','fiction',221,'Mauj',NULL),(81,'Beyond Degrees','','nonfiction',222,'HarperCollins',NULL),(82,'Manasa','Kale, V P','nonfiction',213,'Mauj',NULL),(83,'India from Midnight to Milennium','Tharoor, Shashi','history',198,'Penguin',NULL),(84,'World\'s Greatest Trials, The','','history',210,'',NULL),(85,'Great Indian Novel, The','Tharoor, Shashi','fiction',198,'Penguin',NULL),(86,'O Jerusalem!','Lapierre, Dominique','history',217,'vikas',NULL),(87,'City of Joy, The','Lapierre, Dominique','fiction',177,'vikas',NULL),(88,'Freedom at Midnight','Lapierre, Dominique','history',167,'vikas',NULL),(89,'Winter of Our Discontent, The','Steinbeck, John','fiction',196,'Penguin',NULL),(90,'On Education','Russell, Bertrand','philosophy',203,'Routledge',NULL),(91,'Free Will','Harris, Sam','philosophy',203,'FreePress',NULL),(92,'Bookless in Baghdad','Tharoor, Shashi','nonfiction',206,'Penguin',NULL),(93,'Case of the Lame Canary, The','Gardner, Earle Stanley','fiction',179,'',NULL),(94,'Theory of Everything, The','Hawking, Stephen','science',217,'Jaico',NULL),(95,'New Markets & Other Essays','Drucker, Peter','economics',176,'Penguin',NULL),(96,'Electric Universe','Bodanis, David','science',201,'Penguin',NULL),(97,'Hunchback of Notre Dame, The','Hugo, Victor','fiction',175,'Random House',NULL),(98,'Burning Bright','Steinbeck, John','fiction',175,'Penguin',NULL),(99,'Age of Discontuinity, The','Drucker, Peter','economics',178,'Random House',NULL),(100,'Doctor in the Nude','Gordon, Richard','fiction',179,'Penguin',NULL),(101,'Down and Out in Paris & London','Orwell, George','nonfiction',179,'Penguin',NULL),(102,'Identity & Violence','Sen, Amartya','philosophy',219,'Penguin',NULL),(103,'Beyond the Three Seas','Dalrymple, William','history',197,'Random House',NULL),(104,'World\'s Greatest Short Stories, The','','fiction',217,'Jaico',NULL),(105,'Talking Straight','Iacoca, Lee','nonfiction',175,'',NULL),(106,'Maugham\'s Collected Short Stories, Vol 3','Maugham, William S','fiction',171,'Vintage',NULL),(107,'Phantom of Manhattan, The','Forsyth, Frederick','fiction',180,'',NULL),(108,'Ashenden of The British Agent','Maugham, William S','fiction',160,'Vintage',NULL),(109,'Zen & The Art of Motorcycle Maintenance','Pirsig, Robert','philosophy',172,'Vintage',NULL),(110,'Great War for Civilization, The','Fisk, Robert','history',197,'HarperCollins',NULL),(111,'We the Living','Rand, Ayn','fiction',178,'Penguin',NULL),(112,'Artist and the Mathematician, The','Aczel, Amir','science',186,'HighStakes',NULL),(113,'History of Western Philosophy','Russell, Bertrand','philosophy',213,'Routledge',NULL),(114,'Selected Short Stories','','fiction',215,'Jaico',NULL),(115,'Rationality & Freedom','Sen, Amartya','economics',213,'Springer',NULL),(116,'Clash of Civilizations and Remaking of the World Order','Huntington, Samuel','history',228,'Simon&Schuster',NULL),(117,'Uncommon Wisdom','Capra, Fritjof','nonfiction',197,'Fontana',NULL),(118,'One','Bach, Richard','nonfiction',172,'Dell',NULL),(119,'Karl Marx Biography','','nonfiction',162,'',NULL),(120,'To Sir With Love','Braithwaite','fiction',197,'Penguin',NULL),(121,'Half A Life','Naipaul, V S','fiction',196,'',NULL),(122,'Discovery of India, The','Nehru, Jawaharlal','history',230,'',NULL),(123,'Apulki','Deshpande, P L','nonfiction',211,'',NULL),(124,'Unpopular Essays','Russell, Bertrand','philosophy',198,'',NULL),(125,'Deceiver, The','Forsyth, Frederick','fiction',178,'',NULL),(126,'Veil: Secret Wars of the CIA','Woodward, Bob','history',171,'',NULL),(127,'Char Shabda','Deshpande, P L','nonfiction',214,'',NULL),(128,'Rosy is My Relative','Durrell, Gerald','fiction',176,'',NULL),(129,'Moon and Sixpence, The','Maugham, William S','fiction',180,'',NULL),(130,'Political Philosophers','','philosophy',162,'',NULL),(131,'Short History of the World, A','Wells, H G','history',197,'',NULL),(132,'Trembling of a Leaf, The','Maugham, William S','fiction',205,'',NULL),(133,'Doctor on the Brain','Gordon, Richard','fiction',204,'',NULL),(134,'Simpsons & Their Mathematical Secrets','Singh, Simon','science',233,'',NULL),(135,'Pattern Classification','Duda, Hart','data_science',241,'',NULL),(136,'From Beirut to Jerusalem','Friedman, Thomas','history',202,'',NULL),(137,'Code Book, The','Singh, Simon','science',197,'',NULL),(138,'Age of the Warrior, The','Fisk, Robert','history',197,'',NULL),(139,'Final Crisis','','comic',257,'',NULL),(140,'Killing Joke, The','','comic',283,'',NULL),(141,'Flashpoint','','comic',265,'',NULL),(142,'Batman Earth One','','comic',265,'',NULL),(143,'Crisis on Infinite Earths','','comic',258,'',NULL),(144,'Numbers Behind Numb3rs, The','Devlin, Keith','science',202,'',NULL),(145,'Superman Earth One - 1','','comic',259,'',NULL),(146,'Superman Earth One - 2','','comic',258,'',NULL),(147,'Justice League: Throne of Atlantis','','comic',258,'',NULL),(148,'Justice League: The Villain\'s Journey','','comic',258,'',NULL),(149,'Death of Superman, The','','comic',258,'',NULL),(150,'History of the DC Universe','','comic',258,'',NULL),(151,'Batman: The Long Halloween','','comic',258,'',NULL),(152,'Life in Letters, A','Steinbeck, John','nonfiction',196,'',NULL),(153,'Information, The','Gleick, James','science',233,'',NULL),(154,'Journal of Economics, vol 106 No 3','','economics',235,'',NULL),(155,'Elements of Information Theory','Thomas, Joy','data_science',229,'',NULL),(156,'Power Electronics - Rashid','Rashid, Muhammad','computer_science',235,'',NULL),(157,'Power Electronics - Mohan','Mohan, Ned','computer_science',237,'',NULL),(158,'Neural Networks','Haykin, Simon','data_science',240,'',NULL),(159,'Grapes of Wrath, The','Steinbeck, John','fiction',196,'',NULL),(160,'Vyakti ani Valli','Deshpande, P L','nonfiction',211,'',NULL),(161,'Statistical Learning Theory','Vapnik, Vladimir','data_science',228,'',NULL),(162,'Empire of the Mughal - The Tainted Throne','Rutherford, Alex','history',180,'',NULL),(163,'Empire of the Mughal - Brothers at War','Rutherford, Alex','history',180,'',NULL),(164,'Empire of the Mughal - Ruler of the World','Rutherford, Alex','history',180,'',NULL),(165,'Empire of the Mughal - The Serpent\'s Tooth','Rutherford, Alex','history',180,'',NULL),(166,'Empire of the Mughal - Raiders from the North','Rutherford, Alex','history',180,'',NULL),(167,'Mossad','Baz-Zohar, Michael','history',236,'',NULL),(168,'Jim Corbett Omnibus','Corbett, Jim','nonfiction',223,'',NULL),(169,'20000 Leagues Under the Sea','Verne, Jules','fiction',190,'',NULL),(170,'Batatyachi Chal','Deshpande P L','fiction',200,'',NULL),(171,'Hafasavnuk','Deshpande P L','fiction',211,'',NULL),(172,'Urlasurla','Deshpande P L','fiction',211,'',NULL),(173,'Pointers in C','Kanetkar, Yashwant','computer_science',213,'',NULL),(174,'Cathedral and the Bazaar, The','Raymond, Eric','computer_science',217,'',NULL),(175,'Design with OpAmps','Franco, Sergio','computer_science',240,'',NULL),(176,'Think Complexity','Downey, Allen','data_science',230,'',NULL),(177,'Devil\'s Advocate, The','West, Morris','fiction',178,'',NULL),(178,'Ayn Rand Answers','Rand, Ayn','philosophy',203,'',NULL),(179,'Philosophy: Who Needs It','Rand, Ayn','philosophy',171,'',NULL),(180,'World\'s Great Thinkers, The','','philosophy',189,'',NULL),(181,'Data Analysis with Open Source Tools','Janert, Phillip','data_science',230,'',NULL),(182,'Broca\'s Brain','Sagan, Carl','science',174,'',NULL),(183,'Men of Mathematics','Bell, E T','mathematics',217,'',NULL),(184,'Oxford book of Modern Science Writing','Dawkins, Richard','science',240,'',NULL),(185,'Justice, Judiciary and Democracy','Ranjan, Sudhanshu','philosophy',224,'',NULL),(186,'Arthashastra, The','Kautiyla','philosophy',214,'',NULL),(187,'We the People','Palkhivala','philosophy',216,'',NULL),(188,'We the Nation','Palkhivala','philosophy',216,'',NULL),(189,'Courtroom Genius, The','Sorabjee','nonfiction',217,'',NULL),(190,'Dongri to Dubai','Zaidi, Hussain','nonfiction',216,'',NULL),(191,'History of England, Foundation','Ackroyd, Peter','history',197,'',NULL),(192,'City of Djinns','Dalrymple, William','history',198,'',NULL),(193,'India\'s Legal System','Nariman','nonfiction',177,'',NULL),(194,'More Tears to Cry','Sassoon, Jean','fiction',235,'',NULL),(195,'Ropemaker, The','Dickinson, Peter','fiction',196,'',NULL),(196,'Angels & Demons','Brown, Dan','fiction',170,'',NULL),(197,'Judge, The','','fiction',170,'',NULL),(198,'Attorney, The','','fiction',170,'',NULL),(199,'Prince, The','Machiavelli','philosophy',173,'',NULL),(200,'Eyeless in Gaza','Huxley, Aldous','fiction',180,'',NULL),(201,'Tales of Beedle the Bard','Rowling, J K','fiction',184,'',NULL),(202,'Girl with the Dragon Tattoo','Larsson, Steig','fiction',179,'',NULL),(203,'Girl who kicked the Hornet\'s Nest','Larsson, Steig','fiction',179,'',NULL),(204,'Girl who played with Fire','Larsson, Steig','fiction',179,'',NULL),(205,'Batman Handbook','','comic',270,'',NULL),(206,'Murphy\'s Law','','nonfiction',178,'',NULL),(207,'Structure and Randomness','Tao, Terence','mathematics',252,'',NULL),(208,'Image Processing with MATLAB','Eddins, Steve','signal_processing',241,'',NULL),(209,'Animal Farm','Orwell, George','fiction',180,'',NULL),(210,'Idiot, The','Dostoevsky, Fyodor','fiction',197,'',NULL),(211,'Christmas Carol, A','Dickens, Charles','fiction',196,'',NULL);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loans`
--

DROP TABLE IF EXISTS `loans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `return` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_loans_users1_idx` (`user_id`),
  CONSTRAINT `fk_loans_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loans`
--

LOCK TABLES `loans` WRITE;
/*!40000 ALTER TABLE `loans` DISABLE KEYS */;
/*!40000 ALTER TABLE `loans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loans_has_books`
--

DROP TABLE IF EXISTS `loans_has_books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loans_has_books` (
  `book_id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  PRIMARY KEY (`book_id`,`loan_id`),
  KEY `fk_loans_has_books_loans2` (`loan_id`),
  CONSTRAINT `fk_loans_has_books_books2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_loans_has_books_loans2` FOREIGN KEY (`loan_id`) REFERENCES `loans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loans_has_books`
--

LOCK TABLES `loans_has_books` WRITE;
/*!40000 ALTER TABLE `loans_has_books` DISABLE KEYS */;
/*!40000 ALTER TABLE `loans_has_books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(70) NOT NULL,
  `firstname` varchar(70) NOT NULL,
  `birtdate` date DEFAULT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2019-09-05 11:31:29
