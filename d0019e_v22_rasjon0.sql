-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 08:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d0019e_v22_rasjon0`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(5, 31, 13, 'Computer Science Intro', '1692446897_Image 1.jpg', 'The field of computer science is a dynamic and ever-evolving domain that has shaped the course of human progress over several centuries. From its humble beginnings as rudimentary counting methods to the era of quantum computing and artificial intelligence, computer science has left an indelible mark on society. In this blog post, we&#039;ll take a captivating journey through the key milestones that have defined the history of computer science. Take look at the 9 entry points of computer science. \r\n\r\n1. Precursors to Computing (Ancient Times to 19th Century):\r\nThe story begins with the ingenious minds of ancient civilizations, such as the Babylonians and Greeks, who pioneered basic methods of calculation. Among their inventions was the abacus, a mechanical device used for counting, which paved the way for more sophisticated computations. Fast-forward to the 19th century, where visionaries like Ada Lovelace and Charles Babbage conceptualized the &quot;Analytical Engine,&quot; a mechanical marvel considered the precursor to modern computers.\r\n\r\n2. Early Computational Machines (20th Century):\r\nThe 20th century ushered in a revolution in computation. Alan Turing&#039;s theoretical groundwork on the &quot;universal machine&quot; and the Turing machine laid the foundation for modern computation. During World War II, the Colossus and ENIAC computers marked the advent of electronic digital computing, setting the stage for what was to come.\r\n\r\n3. Birth of Computer Science (1950s-1960s):\r\nThe 1950s saw the birth of high-level programming languages, with Fortran and LISP making software development more accessible. In this era, the seeds of artificial intelligence were planted, exploring the realm of machine intelligence and problem-solving capabilities.\r\n\r\n4. Development of Operating Systems and Networking (1960s-1970s):\r\nThe 1960s witnessed the rise of operating systems, including the game-changing Unix OS. Concurrently, the ARPANET project set the foundation for the internet, which would eventually reshape global communication and information sharing.\r\n\r\n5. Microprocessors and Personal Computing (1970s-1980s):\r\nMicroprocessors emerged in the 1970s, democratizing computing with personal computers like the Altair 8800 and Apple I. This era marked a revolution in accessibility and usage.\r\n\r\n6. Software Engineering and Graphical User Interfaces (1980s-1990s):\r\nThe 1980s brought forth software engineering principles, focusing on systematic software development. Graphical user interfaces (GUIs) made computers more user-friendly, redefining user interaction.\r\n\r\n7. World Wide Web and Internet Expansion (1990s-2000s):\r\nThe 1990s witnessed the creation of the World Wide Web by Tim Berners-Lee, revolutionizing information sharing. The internet expanded rapidly, leading to the dot-com boom, e-commerce, and social media proliferation.\r\n\r\n8. Mobile Computing and Cloud Technology (2000s-Present):\r\nThe 21st century dawned with mobile computing&#039;s rise through smartphones and tablets. Cloud computing transformed remote storage and data processing. Artificial intelligence and machine learning underwent a resurgence, enabling deep learning and natural language processing.\r\n\r\n9. Modern Era (2010s-Present):\r\nToday&#039;s landscape is marked by quantum computing&#039;s emergence, AI advancements, and tech integration in various sectors. Ethical considerations surrounding data privacy, cybersecurity, and algorithmic biases have become paramount.\r\n\r\n\r\nThe history of computer science is a testament to human innovation and progress. From ancient abacuses to cutting-edge quantum computers, each era has contributed to our understanding of computation&#039;s possibilities. Computer science&#039;s evolution has made it an inseparable part of our lives, reshaping industries and fueling our imaginations. As we look to the future, the story of computer science continues to unfold, promising even more remarkable achievements on the horizon.', 1, '2023-08-19 14:08:17'),
(6, 31, 14, 'Programming Languages', '1692451468_ComputerCode.png', 'Programming languages have evolved significantly since the early days of computing. Assembly languages emerged in the 1950s as a more human-readable representation of machine code instructions, easing communication with computers. The late 1950s witnessed the birth of Fortran, designed for scientific calculations, and LISP, which shaped artificial intelligence research with its symbolic processing. COBOL followed suit, catering to business data processing. ALGOL aimed to create a universal algorithmic language, inspiring subsequent designs. BASIC provided a beginner-friendly interactive environment, while C, introduced in 1972, became the foundation for many languages, with C++ extending it to object-oriented programming in the 1980s. Pascal taught programming concepts, and Python, born in 1991, offered readability and versatility. Java, developed in 1995, focused on platform independence, and JavaScript emerged as a powerful language for web development. The history of programming languages is marked by a continuous evolution, meeting the diverse needs of software development.', 1, '2023-08-19 15:24:28'),
(8, 34, 15, 'History of Alogorithms & Data Structure', '1692452691_lightblub.jpg', 'The study of algorithms and data structures traces its roots back to ancient civilizations, where informal problem-solving methods were employed. However, formal exploration began with Al-Khwarizmi&#039;s contributions in the 9th century, setting the stage for algebra and algorithmic principles. The 17th century brought pioneers like Fermat and Pascal, advancing probability and combinatorics through Pascal&#039;s Triangle. In the 20th century, luminaries like Dijkstra and Hoare pioneered graph and sorting algorithms, while the concept of data structures emerged with arrays and linked lists. Hash tables gained prominence, and trees and graphs were explored extensively. The era also saw foundational texts like Knuth&#039;s &quot;The Art of Computer Programming,&quot; solidifying algorithmic understanding.\r\n\r\nAs computer science education expanded, algorithms and data structures found their place in curricula. These components became integral to software development, powering modern applications. Today&#039;s landscape features algorithms such as binary search, machine learning, and cryptography, while data structures encompass dynamic arrays, hash maps, and balanced search trees. The history of algorithms and data structures is a testament to human innovation, from ancient techniques to cutting-edge computational problem-solving, shaping how we approach complexity and efficiency in the digital age.', 1, '2023-08-19 15:44:51'),
(9, 34, 16, 'Artificial Intelligence & Machine Learning', '1692452799_AI & ML.jpg', 'Artificial Intelligence (AI) is a multidisciplinary field of computer science that focuses on creating systems and machines capable of performing tasks that typically require human intelligence. It encompasses the development of algorithms, models, and systems that enable computers to mimic cognitive functions such as problem-solving, decision-making, learning, perception, and language understanding. AI strives to create intelligent agents that can perceive their environment, reason about it, and take actions to achieve specific goals. It encompasses various subfields, including machine learning, natural language processing, computer vision, robotics, and more. AI has found applications in diverse domains, from autonomous vehicles and medical diagnostics to virtual personal assistants and financial trading systems. As AI technologies continue to advance, they hold the potential to revolutionize industries and shape the way we interact with technology in the future.\r\n\r\nMachine Learning (ML) is a subset of artificial intelligence that focuses on developing algorithms and techniques that enable computers to learn from data and improve their performance over time. It revolves around the idea that machines can automatically learn patterns and make predictions or decisions without being explicitly programmed for each task. Machine learning models are trained using large datasets, where they analyze patterns, relationships, and anomalies to make informed predictions or classifications. This process involves various techniques such as regression, clustering, decision trees, and neural networks. ML is at the core of many AI applications, including image and speech recognition, recommendation systems, fraud detection, and autonomous vehicles. As data availability and computational power increase, machine learning continues to make significant strides, enabling more accurate and sophisticated automation of tasks that were previously thought to be exclusively within the realm of human expertise.', 1, '2023-08-19 15:46:39'),
(10, 34, 17, 'Cyber Security & Privacy', '1692453135_cyber.jpg', 'Cybersecurity and privacy are fundamental pillars in the digital age, focusing on safeguarding sensitive information, systems, and individuals from malicious threats and unauthorized access. Cybersecurity involves the implementation of measures, protocols, and technologies to defend against cyberattacks, data breaches, and online vulnerabilities that can compromise the integrity and functionality of digital assets. It encompasses strategies such as encryption, network monitoring, firewalls, and secure authentication methods. Privacy, on the other hand, centers on preserving an individual&#039;s control over their personal data, ensuring that information shared online remains confidential and protected from unauthorized disclosure. Both cybersecurity and privacy play critical roles in maintaining trust, upholding ethical standards, and enabling secure interactions within the interconnected digital landscape.', 1, '2023-08-19 15:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(13, 'Computer Science Intro', 'Description on this history of computer science'),
(14, 'Programming Languages', 'Idea to get a what lanuages exists in the world'),
(15, 'Alogorithms & Data Structure ', 'Samples on how Alogorithms and Data Structures '),
(16, 'Artificial Intelligence & Machine Learning', 'Description on what AI and ML is'),
(17, 'Cyber Security & Privacy', 'Description about Cyber Security and Privacy in the IT world'),
(18, 'Web Development', 'Description on Web Development'),
(19, 'Internet of Things (IoT)', 'Internet of things and what it is, description'),
(20, 'Emerging Technologies', 'Short Description');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(31, 1, '01.Johnny', 'rasjon-0@student.ltu.se', '$2y$10$SE7vRWksbcR0EwqcUja5l.5unvV1ETNXByNdgvWzUB20xx6HUa9ay', '2023-08-16 20:47:27'),
(33, 0, 'io.johnny', 'test1@email.com', '$2y$10$7aCaa4vtdIAeaRhf0P8yXedIDJmZvkfGXxm98VFJLeGumEXq9uAye', '2023-08-18 21:41:43'),
(34, 1, '01.SF', 'susan.f@ltu.se', '$2y$10$ZjB97xTTdaVjU0W8mjrbT.TvCmSkN7Qz5zbpC80ge6b1GzhE2iG4i', '2023-08-19 13:43:24'),
(35, 1, 'B_Admin', 'BA@admin.com', '$2y$10$kQk7QZIUyYJiP4QQ/iwDL.I06aenQM9wMx6jMt1O/pk2j42P8Xisy', '2023-08-28 11:44:30'),
(36, 0, 'jr.binary', 'jr.binary@jb.se', '$2y$10$K98SdXs/nqz7iFyIPA9BMurH91859wLN2vldHtVIHizGv1XRw8Rxy', '2023-08-28 11:45:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
