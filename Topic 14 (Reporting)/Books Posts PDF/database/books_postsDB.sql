/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - books_posts
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`books_posts` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `books_posts`;

/*Table structure for table `books` */

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(200) DEFAULT NULL,
  `book_author` varchar(200) DEFAULT NULL,
  `book_image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `books` */

insert  into `books`(`book_id`,`book_name`,`book_author`,`book_image`) values 
(1,'Harry Potter','J.K. Rowling','images/Harry_Potter.jpg'),
(2,'The Chronicles of Narnia','C.S. Lewis ','images/Narnia.jpg'),
(3,'The Dark Tower','Stephen King','images/Dark_Tower.jpg'),
(4,'Artemis Fowl','Eoin Colfer','images/Artemis.jpg'),
(5,'Ender\'s Game','Orson Scott Card','images/Ender.jpg');

/*Table structure for table `topics` */

DROP TABLE IF EXISTS `topics`;

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `topic_title` varchar(200) DEFAULT NULL,
  `topic_description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `book_id` (`book_id`),
  CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `topics` */

insert  into `topics`(`topic_id`,`book_id`,`topic_title`,`topic_description`) values 
(1,1,'Philosopher\'s Stone','Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowling\'s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry.'),
(2,1,'Chamber of Secrets','Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series. The plot follows Harry\'s second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school\'s corridors warn that the \"Chamber of Secrets\" has been opened and that the \"heir of Slytherin\" would kill all pupils who do not come from all-magical families.'),
(3,1,'Prisoner of Azkaban','Harry Potter and the Prisoner of Azkaban is a fantasy novel written by British author J. K. Rowling and is the third in the Harry Potter series. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry. Along with friends Ronald Weasley and Hermione Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban, the wizard prison, believed to be one of Lord Voldemort\'s old allies. '),
(4,1,'Goblet of Fire','Harry Potter and the Goblet of Fire is a fantasy novel written by British author J. K. Rowling and the fourth novel in the Harry Potter series. It follows Harry Potter, a wizard in his fourth year at Hogwarts School of Witchcraft and Wizardry, and the mystery surrounding the entry of Harry\'s name into the Triwizard Tournament, in which he is forced to compete. '),
(5,1,'Order of the Phoenix','Harry Potter is due to start his fifth year at Hogwarts School of Witchcraft and Wizardry. He is desperate to get back to school and find out why his friends Ron and Hermione have been so secretive all summer. However, what Harry is about to discover in his new year at Hogwarts will turn his world upside down ...Harry Potter and the Order of the Phoenix continues the riveting tale of a 15-year-old wizard and his extraordinary powers. '),
(6,1,'Half-Blood Prince','Harry Potter and the Half-Blood Prince is a fantasy novel written by British author J. K. Rowling and the sixth and penultimate novel in the Harry Potter series. Set during Harry Potter\'s sixth year at Hogwarts, the novel explores the past of the boy wizard\'s nemesis, Lord Voldemort, and Harry\'s preparations for the final battle against Voldemort alongside his headmaster and mentor Albus Dumbledore. '),
(7,1,'Deathly Hallows','Harry Potter and the Deathly Hallows is a fantasy novel written by British author J. K. Rowling and the seventh and final novel of the main Harry Potter series. It was released on 21 July 2007 in the United Kingdom by Bloomsbury Publishing, in the United States by Scholastic, and in Canada by Raincoast Books. The novel chronicles the events directly following Harry Potter and the Half-Blood Prince (2005) and the final confrontation between the wizards Harry Potter and Lord Voldemort.'),
(8,2,'The Lion, the Witch and the Wardrobe','The Lion, the Witch and the Wardrobe is a fantasy novel for children by C. S. Lewis, published by Geoffrey Bles in 1950. It is the first published and best known of seven novels in The Chronicles of Narnia (1950 to 1956). Among all the author\'s books, it is also the most widely held in libraries. Although it was originally the first of The Chronicles of Narnia, it is volume two in recent editions that are sequenced by the stories\' chronology.'),
(9,2,'Prince Caspian','Prince Caspian (originally published as Prince Caspian: The Return to Narnia) is a high fantasy novel for children by C. S. Lewis, published by Geoffrey Bles in 1951. It was the second published of seven novels in The Chronicles of Narnia (1950 to 1956), and Lewis had finished writing it in 1949, before the first book was out.'),
(10,2,'The Voyage of the Dawn Treader','The Voyage of the Dawn Treader is a high fantasy novel for children by C. S. Lewis, published by Geoffrey Bles in 1952. It was the third published of seven novels in The Chronicles of Narnia (1950 to 1956). Macmillan US published an American edition within the calendar year.'),
(11,2,'The Silver Chair','The Silver Chair is a children\'s fantasy novel by C. S. Lewis, published by Geoffrey Bles in 1953. It was the fourth published of seven novels in The Chronicles of Narnia (1950 to 1956); it is volume six in recent editions, which are sequenced according to Narnian history. Like the others, it was illustrated by Pauline Baynes and her work has been retained in many later editions.'),
(12,2,'The Horse and His Boy','The Horse and His Boy is a novel for children by C. S. Lewis, published by Geoffrey Bles in 1954. Of the seven novels that comprise The Chronicles of Narnia (1950 to 1956), The Horse and His Boy was the fifth to be published. The novel is set in the period covered by the last chapter of The Lion, the Witch, and the Wardrobe during the reign of the four Pevensie children as Kings and Queens of Narnia.'),
(13,2,'The Magician\'s Nephew','The Magician\'s Nephew is a fantasy children\'s novel by C. S. Lewis, published in 1955 by The Bodley Head. It is the sixth published of seven novels in The Chronicles of Narnia (1950 to 1956). In recent editions, which sequence the books according to Narnia history, it is volume one of the series. Like the others, it was illustrated by Pauline Baynes whose work has been retained in many later editions.'),
(14,2,'The Last Battle','The Last Battle is a high fantasy novel for children by C. S. Lewis, published by The Bodley Head in 1956. It was the seventh and final novel in The Chronicles of Narnia (1950 to 1956). Like the other novels in the series, it was illustrated by Pauline Baynes and her work has been retained in many later editions.'),
(15,3,'The Gunslinger','The story centers Roland Deschain, the last gunslinger, who has been chasing his adversary, \"the man in black,\" for many years. The novel fuses Western fiction with fantasy, science fiction, and horror, following Roland\'s trek through a vast desert and beyond in search of the man in black. Roland meets several people along his journey, including a boy named Jake, who travels with him part of the way.'),
(16,3,'The Drawing of The Three','The Drawing of the Three is a dark fantasy novel by American writer Stephen King. It is the second book in the Dark Tower series, published by Grant in 1987. The series was inspired by Childe Roland to the Dark Tower Came by Robert Browning. The story is a continuation of The Gunslinger and follows Roland of Gilead and his quest towards the Dark Tower. The subtitle of this novel is RENEWAL. '),
(17,3,'The Waste Lands','The Waste Lands (subtitled \"Redemption\") is a dark fantasy novel by American writer Stephen King. It is the third book of the Dark Tower series. The original limited edition hardcover featuring full-color illustrations by Ned Dameron was published in 1991 by Grant. The book was reissued in 2003 to coincide with the publication of The Dark Tower V: Wolves of the Calla. '),
(18,3,'Wizard and Glass','Wizard and Glass is a fantasy novel by American writer Stephen King. It is the fourth book in the Dark Tower series, published in 1997. Subtitled \"Regard\", it placed fourth in the annual Locus Poll for best fantasy novel.'),
(19,3,'Wolves of the Calla','Wolves of the Calla is a fantasy novel by American writer Stephen King. It is the fifth book in his The Dark Tower series. The book continues the story of Roland Deschain, Eddie Dean, Susannah Dean, Jake Chambers, and Oy as they make their way toward the Dark Tower. The subtitle of this novel is Resistance.'),
(20,3,'Song of Susannah','Song of Susannah is a 2004 fantasy novel by American writer Stephen King. It is the sixth book in his Dark Tower series.[1] Its subtitle is Reproduction. '),
(21,3,'The Dark Tower','The Dark Tower is a 2004 fantasy novel by American writer Stephen King. It is the seventh and final book in his Dark Tower series. It was published by Grant on September 21, 2004 (King\'s birthday), and illustrated by Michael Whelan.'),
(22,4,'Artemis Fowl','Artemis Fowl is a young adult fantasy novel written by Irish author Eoin Colfer. It is the first book in the Artemis Fowl series, the first cycle of The Fowl Adventures, followed by Artemis Fowl and the Arctic Incident. '),
(23,4,'Artemis Fowl and the Arctic Incident','Artemis Fowl and the Arctic Incident, known in America as Artemis Fowl: The Arctic Incident, is a young adult and fantasy novel written by Irish author Eoin Colfer, published in 2002. It is the second book in the Artemis Fowl series, preceded by Artemis Fowl and followed by Artemis Fowl: The Eternity Code. '),
(24,4,'Artemis Fowl and the Eternity Code','Artemis Fowl and the Eternity Code (known in America as Artemis Fowl: The Eternity Code) is the third book of Irish children\'s fiction author Eoin Colfer\'s Artemis Fowl series. It is preceded by Artemis Fowl: The Arctic Incident and followed by Artemis Fowl: The Opal Deception. '),
(25,4,'Artemis Fowl and the Opal Deception','Artemis Fowl and the Opal Deception, known in America as Artemis Fowl: The Opal Deception, is a teen fantasy novel published in 2005, the 4th book in the Artemis Fowl series by the Irish author Eoin Colfer. Preceded by Artemis Fowl: The Eternity Code and followed by Artemis Fowl: The Lost Colony, it is centred on the brilliant pixie Opal Koboi\'s second try at rebellion (after her first attempt was a failure) and Artemis Fowl II and his fairy comrades\' efforts to stop her.'),
(26,4,'Artemis Fowl and the Lost Colony','Artemis Fowl and the Lost Colony, known in America as Artemis Fowl: The Lost Colony, is the fifth book in the Artemis Fowl Series by Irish writer Eoin Colfer. The book, originally expected to be published in the UK and Ireland on 7 September 2006, was shipped to stores early.'),
(27,5,'Ender\'s Game','Ender\'s Game is a 1985 military science fiction novel by American author Orson Scott Card. Set at an unspecified date in Earth\'s future, the novel presents an imperiled humankind after two conflicts with an insectoid alien species they dub \"the buggers\". In preparation for an anticipated third invasion, Earth\'s international military force recruits young children, including the novel\'s protagonist, Andrew \"Ender\" Wiggin, to be trained as elite officers.'),
(28,5,'Speaker for the Dead','Speaker for the Dead is a 1986 science fiction novel by American writer Orson Scott Card, an indirect sequel to the 1985 novel Ender\'s Game. The book takes place around the year 5270, some 3,000 years after the events in Ender\'s Game. However because of relativistic space travel at near-light speed Ender himself is only about 35 years old. '),
(29,5,'Xenocide','Xenocide (1991) is a science fiction novel by American writer Orson Scott Card, the third book in the Ender\'s Game series. It was nominated for both the Hugo and Locus Awards for Best Novel in 1992.'),
(30,5,'Children of the Mind','Children of the Mind (1996) is a novel by American author Orson Scott Card, the fourth in his successful Ender\'s Game series of science fiction novels that focus on the character Ender Wiggin. This book was originally the second half of Xenocide, before it was split into two novels.'),
(31,5,'Ender\'s Shadow','Ender\'s Shadow (1999) is a parallel science fiction novel by the American author Orson Scott Card, taking place at the same time as the novel Ender\'s Game and depicting some of the same events from the point of view of Bean, a supporting character in the original novel. It was originally to be titled Urchin, but it was retitled Ender\'s Shadow prior to release.');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
