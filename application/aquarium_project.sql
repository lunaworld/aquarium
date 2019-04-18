-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2019 lúc 04:05 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `aquarium_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `animal`
--

CREATE TABLE `animal` (
  `IDAnimal` int(11) NOT NULL,
  `IDCategory` int(11) DEFAULT NULL,
  `NameAnimal` varchar(30) NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `Size` varchar(30) DEFAULT NULL,
  `Description` varchar(10000) DEFAULT NULL,
  `ImageName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `animal`
--

INSERT INTO `animal` (`IDAnimal`, `IDCategory`, `NameAnimal`, `Age`, `Size`, `Description`, `ImageName`) VALUES
(5, 8, 'Great white shark', 60, '6.4m', 'The great white shark (Carcharodon carcharias), also known as the great white, white shark or white pointer, is a species of large mackerel shark which can be found in the coastal surface waters of all the major oceans. The great white shark is notable for its size, with larger female individuals growing to 6.1 m (20 ft) in length and 1,905 kg (4,200 lb) in weight at maturity.[3][4][5] However, most are smaller; males measure 3.4 to 4.0 m (11 to 13 ft), and females measure 4.6 to 4.9 m (15 to 16 ft) on average.[5][6] According to a 2014 study, the lifespan of great white sharks is estimated to be as long as 70 years or more, well above previous estimates,[7] making it one of the longest lived cartilaginous fish currently known.[8] According to the same study, male great white sharks take 26 years to reach sexual maturity, while the females take 33 years to be ready to produce offspring.[9] Great white sharks can swim at speeds of over 56 km/h (35 mph),[10] and can swim to depths of 1,200 m (3,900 ft).[11]\r\n\r\nThe great white shark has no known natural predators other than, on very rare occasions, the killer whale.[12] The great white shark is arguably the world\'s largest known extant macropredatory fish, and is one of the primary predators of marine mammals. It is also known to prey upon a variety of other marine animals, including fish and seabirds. It is the only known surviving species of its genus Carcharodon, and is responsible for more recorded human bite incidents than any other shark.[13][14]\r\n\r\nThe species faces numerous ecological challenges which has resulted in international protection. The IUCN lists the great white shark as a vulnerable species,[2] and it is included in Appendix II of CITES.[15] It is also protected by several national governments such as Australia (as of 2018).[16]\r\n\r\nThe novel Jaws by Peter Benchley and its subsequent film adaptation by Steven Spielberg depicted the great white shark as a \"ferocious man eater\". Humans are not the preferred prey of the great white shark,[17] but the great white is nevertheless responsible for the largest number of reported and identified fatal unprovoked shark attacks on humans.', 'wshark.jpg'),
(6, 8, 'Hammerhead shark', 50, '6.0m', 'The hammerhead sharks are a group of sharks in the family Sphyrnidae, so named for the unusual and distinctive structure of their heads, which are flattened and laterally extended into a \"hammer\" shape called a cephalofoil. Most hammerhead species are placed in the genus Sphyrna, while the winghead shark is placed in its own genus, Eusphyra. Many, but not necessarily mutually exclusive, functions have been postulated for the cephalofoil, including sensory reception, manoeuvering, and prey manipulation. Hammerheads are found worldwide in warmer waters along coastlines and continental shelves. Unlike most sharks, hammerheads usually swim in schools during the day, becoming solitary hunters at night. Some of these schools can be found near Malpelo Island in Colombia, the Galapagos Islands in Ecuador, Cocos Island off Costa Rica, and near Molokai in Hawaii. Large schools are also seen in the waters off southern and eastern Africa.\r\nThe known species range from 0.9 to 6.0 m (3.0 to 19.7 ft) in length and weigh from 3 to 580 kg (6.6 to 1,278.7 lb).[2][3] They are usually light gray and have a greenish tint. Their bellies are white, which allows them to blend into the ocean when viewed from the bottom and sneak up on their prey.[4] Their heads have lateral projections which give them a hammer-like shape.\r\n\r\nHammerheads have disproportionately small mouths. They are also known to form schools during the day, sometimes in groups over 100. In the evening, like other sharks, they become solitary hunters. National Geographic explains that hammerheads can be found in warm tropical waters, but during the summer, they participate in a mass migration to search for cooler waters.', 'hshark.jpg'),
(7, 8, 'Belcher\'s sea snake', 12, '3.0 inches', 'Hydrophis belcheri, commonly known as the faint-banded sea snake or Belcher\'s sea snake, is an extremely venomous species of elapid sea snake. It has a timid temperament and would normally have to be subjected to severe mistreatment before biting. Usually those bitten are fishermen handling nets, although only one-quarter of those bitten are envenomated since the snake rarely injects much of its venom. Because of this, and its docile nature, it is generally not regarded as very dangerous. Although not much is known about the venom of this species,[2] its LD50 toxicity in mice has been determined to be 0.24 mg/kg[3] when delivered intramuscularly.\r\n\r\nBelcher\'s sea snake, which many times is mistakenly called the hook-nosed sea snake (Enhydrina schistosa), has been erroneously popularized as the most venomous snake in the world, due to Ernst and Zug\'s published book \"Snakes in Question: The Smithsonian Answer Book\" from 1996. Associate Professor Bryan Grieg Fry, a prominent venom expert, has clarified the error: \"The hook nosed myth was due to a fundamental error in a book called \'Snakes in question\'. In there, all the toxicity testing results were lumped in together, regardless of the mode of testing (e.g. subcutaneous vs. intramuscular vs intravenous vs intraperitoneal). As the mode can influence the relative number, venoms can only be compared within a mode. Otherwise, its apples and rocks.\".[4] Studies on mice[5][6][7] and human cardiac cell culture[4][8][9] shows that venom of the inland taipan, drop by drop, is the most toxic among all snakes; land or sea. The most venomous sea snake is actually Dubois\' seasnake (Aipysurus duboisii ).\r\nThe belcher\'s sea snake is of moderate size, ranging from 0.5 to 1 meter (about 20–40 inches) in adult length. Its thin body is usually chrome yellowish in colour with dark greenish crossbands. The dorsal pattern does not extend onto the venter. The head is short and has bands of the same colours. Its mouth is very small but suitable for aquatic life. Its body, when viewed out of water, appears to have a faint yellow colour. Its scales are different from most other snakes in that they overlap each other. Each dorsal scale has a central tubercle. The body is strongly laterally compressed posteriorly. The ventral scales are very narrow, only slightly wider than the dorsal scales.', 'bsnake.jpg'),
(8, 8, 'Yellow-bellied sea snake', 13, '3.1 inces', 'Hydrophis platurus, commonly known as the yellow-bellied sea snake, yellowbelly sea snake or pelagic sea snake, is a species of snake from the subfamily Hydrophiinae (the sea snakes) found in tropical oceanic waters around the world except for the Atlantic Ocean. It is the only member of the genus Pelamis, but recent molecular evidence suggests that it is closely related to the species of the genus \r\nThe yellow-bellied sea snake, as the name implies, has a distinctive bicolor pattern with a yellow underbelly and brown back, making it easily distinguishable from other sea snake species. Yellow-bellied sea snakes, like many other species of sea snake, are fully adapted to living their whole lives at sea: mating, eating and giving birth to live young (ovoviviparous). Adaptations to aquatic life include the reduced ventral scale size, laterally compressed body and paddle-tail for swimming,[12][13] valved nostrils and palatine seal for excluding seawater, and cutaneous gas exchange for prolonging dive times.[13][14][15] This species can uptake up to 33% of its oxygen requirements through the skin while diving and swimming at the surface of the water.[16] Sea snakes also have a special salt gland located in the lower jaw that was formerly believed to filter out salt from the surrounding seawater[17] but has been found not to be used for that purpose, as sea snakes drink fresh water only.', 'ysnake.jpg'),
(9, 8, 'Hammerhead shark', 50, '6.0m', 'The hammerhead sharks are a group of sharks in the family Sphyrnidae, so named for the unusual and distinctive structure of their heads, which are flattened and laterally extended into a \"hammer\" shape called a cephalofoil. Most hammerhead species are placed in the genus Sphyrna, while the winghead shark is placed in its own genus, Eusphyra. Many, but not necessarily mutually exclusive, functions have been postulated for the cephalofoil, including sensory reception, manoeuvering, and prey manipulation. Hammerheads are found worldwide in warmer waters along coastlines and continental shelves. Unlike most sharks, hammerheads usually swim in schools during the day, becoming solitary hunters at night. Some of these schools can be found near Malpelo Island in Colombia, the Galapagos Islands in Ecuador, Cocos Island off Costa Rica, and near Molokai in Hawaii. Large schools are also seen in the waters off southern and eastern Africa.\r\nThe known species range from 0.9 to 6.0 m (3.0 to 19.7 ft) in length and weigh from 3 to 580 kg (6.6 to 1,278.7 lb).[2][3] They are usually light gray and have a greenish tint. Their bellies are white, which allows them to blend into the ocean when viewed from the bottom and sneak up on their prey.[4] Their heads have lateral projections which give them a hammer-like shape.\r\n\r\nHammerheads have disproportionately small mouths. They are also known to form schools during the day, sometimes in groups over 100. In the evening, like other sharks, they become solitary hunters. National Geographic explains that hammerheads can be found in warm tropical waters, but during the summer, they participate in a mass migration to search for cooler waters.', 'hshark.jpg'),
(10, 8, 'Humpback Whale', 50, '15m', 'The humpback whale (Megaptera novaeangliae) is a species of baleen whale. One of the larger rorqual species, adults range in length from 12–16 m (39–52 ft) and weigh around 25–30 metric tons (28–33 short tons). The humpback has a distinctive body shape, with long pectoral fins and a knobbly head. It is known for breaching and other distinctive surface behaviors, making it popular with whale watchers. Males produce a complex song lasting 10 to 20 minutes, which they repeat for hours at a time. Its purpose is not clear, though it may have a role in mating.\r\n\r\nFound in oceans and seas around the world, humpback whales typically migrate up to 25,000 km (16,000 mi) each year. They feed in polar waters, and migrate to tropical or subtropical waters to breed and give birth, fasting and living off their fat reserves. Their diet consists mostly of krill and small fish. Humpbacks have a diverse repertoire of feeding methods, including the bubble net technique.\r\n\r\nLike other large whales, the humpback was a target for the whaling industry. Once hunted to the brink of extinction, its population fell by an estimated 90% before a 1966 moratorium. While stocks have partially recovered to some 80,000 animals worldwide, entanglement in fishing gear, collisions with ships and noise pollution continue to impact on the species.', 'hwhale.jpg'),
(11, 9, 'Great white shark', 60, '6.0m', '<p>d&agrave;ghsafdgashgf</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'bachtuoc1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `IDCustomer` int(11) NOT NULL,
  `IDEvent` int(11) DEFAULT NULL,
  `NameCustomer` varchar(50) DEFAULT NULL,
  `ImageCustomer` varchar(50) DEFAULT NULL,
  `EventPrice` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Mail` varchar(255) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Note` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`IDCustomer`, `IDEvent`, `NameCustomer`, `ImageCustomer`, `EventPrice`, `Name`, `Phone`, `Mail`, `StartDate`, `EndDate`, `StartTime`, `EndTime`, `Address`, `Note`, `status`) VALUES
(1, 5, 'minh huy', NULL, NULL, NULL, '0934472839', 'huyhoi2696@gmail.com', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '344/88 P.11 Gv TP.HCM', 'ádasfahdrfsd        ', 0),
(2, 5, 'minh huy', NULL, NULL, NULL, '0934472839', 'huyhoi2696@gmail.com', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '344/88 P.11 Gv TP.HCM', 'hgjhjhf  ', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `IDCategory` int(11) NOT NULL,
  `CategoryName` varchar(30) NOT NULL,
  `SpeciesInfomaton` varchar(10000) DEFAULT NULL,
  `ImageCategory` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`IDCategory`, `CategoryName`, `SpeciesInfomaton`, `ImageCategory`) VALUES
(8, 'shark', 'Sharks are a group of elasmobranch fish characterized by a cartilaginous skeleton, five to seven gill slits on the sides of the head, and pectoral fins that are not fused to the head. Modern sharks are classified within the clade Selachimorpha (or Selachii) and are the sister group to the rays. However, the term \"shark\" has also been used for extinct members of the subclass Elasmobranchii outside the Selachimorpha, such as Cladoselache and Xenacanthus, as well as other Chondrichthyes such as the holocephalid eugenedontidans.\r\n\r\nUnder this broader definition, the earliest known sharks date back to more than 420 million years ago.[2] Acanthodians are often referred to as \"spiny sharks\"; though they are not part of Chondrichthyes proper, they are a paraphyletic assemblage leading to cartilaginous fish as a whole. Since then, sharks have diversified into over 500 species. They range in size from the small dwarf lanternshark (Etmopterus perryi), a deep sea species of only 17 centimetres (6.', 'ca93.jpg'),
(9, 'Malacostraca', 'Malacostraca is the largest of the six classes of crustaceans, containing about 40,000 living species, divided among 16 orders. Its members, the malacostracans, display a great diversity of body forms and include crabs, lobsters, crayfish, shrimp, krill, woodlice, amphipods, mantis shrimp and many other, less familiar animals. They are abundant in all marine environments and have colonised freshwater and terrestrial habitats. They are segmented animals, united by a common body plan comprising 20 body segments (rarely 21), and divided into a head, thorax, and abdomen.', 'cua1.jpg'),
(10, 'Mammal', 'Mammals (from Latin mamma \"breast\") are vertebrate animals constituting the class Mammalia (/m??me?li?/), and characterized by the presence of mammary glands which in females produce milk for feeding (nursing) their young, a neocortex (a region of the brain), fur or hair, and three middle ear bones. These characteristics distinguish them from reptiles and birds, from which they diverged in the late Triassic, 201–227 million years ago. There are around 5,450 species of mammals. The largest orders are the rodents, bats and Soricomorpha (shrews and others). The next three are the Primates (humans, apes, monkeys, and others), the Cetartiodactyla (whales and even-toed ungulates), and the Carnivora (cats, dogs, seals, and others).\r\n\r\nIn cladistics, which reflect evolution, mammals are classified as endothermic amniotes. They are the only living Synapsida, which together with the Sauropsida (reptiles and birds) form the Amniota clade. The early synapsid mammalian ancestors were sphenacodont p', 'cavoi1.gif'),
(11, 'Mollusca', 'Mollusca is the second largest phylum of invertebrate animals. The members are known as molluscs or mollusks[note 1] (/?m?l?sk/). Around 85,000 extant species of molluscs are recognized.[2] The number of fossil species is estimated between 60,000 and 100,000 additional species.[3]\r\n\r\nMolluscs are the largest marine phylum, comprising about 23% of all the named marine organisms. Numerous molluscs also live in freshwater and terrestrial habitats. They are highly diverse, not just in size and in anatomical structure, but also in behaviour and in habitat. The phylum is typically divided into 8 or 9 taxonomic classes, of which two are entirely extinct. Cephalopod molluscs, such as squid, cuttlefish and octopus, are among the most neurologically advanced of all invertebrates—and either the giant squid or the colossal squid is the largest known invertebrate species. The gastropods (snails and slugs) are by far the most numerous molluscs and account for 80% of the total classified species.\r\n\r\n', 'sua1.jpg'),
(12, 'snake', 'Sea snakes, or coral reef snakes, are a subfamily of venomous elapid snakes, the Hydrophiinae, that inhabit marine environments for most or all of their lives. Most are extensively adapted to a fully aquatic life and are unable to move on land, except for the genus Laticauda, which has limited land movement. They are found in warm coastal waters from the Indian Ocean to the Pacific and are closely related to venomous terrestrial snakes in Australia.[2]\r\n\r\nAll sea snakes have paddle-like tails and many have laterally compressed bodies that give them an eel-like appearance. Unlike fish, they do not have gills and must surface regularly to breathe. Along with whales, they are among the most completely aquatic of all air-breathing vertebrates.[3] Among this group are species with some of the most potent venoms of all snakes. Some have gentle dispositions and bite only when provoked, but others are much more aggressive. Currently, 17 genera are described as sea snakes, comprising 69 species', 'ranbien1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `events`
--

CREATE TABLE `events` (
  `IDEvent` int(11) NOT NULL,
  `ImageEvent` varchar(50) DEFAULT NULL,
  `NameEvent` varchar(50) DEFAULT NULL,
  `AgeAllow` int(11) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `StartTime` time DEFAULT NULL,
  `EndTime` time DEFAULT NULL,
  `Description` varchar(10000) DEFAULT NULL,
  `EventPrice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `events`
--

INSERT INTO `events` (`IDEvent`, `ImageEvent`, `NameEvent`, `AgeAllow`, `StartDate`, `EndDate`, `StartTime`, `EndTime`, `Description`, `EventPrice`) VALUES
(5, 'aqua11.jpg', 'Aquarium Event', 10, '2019-04-18', '2019-04-20', '18:00:00', '06:00:00', '<p>Brownsville Recreation Center is hosting Basketball Clinics from 8:00 a.m. to 11:00 a.m. on Mondays through Saturdays from February 1 through April 30. Train with some of our best staff&nbsp;to improve your individual and team play for the tournament in May.&nbsp;Instructors will provide the rules, materials, tips, and scrimmage play.&nbsp;</p>\r\n', 10000),
(6, 'aqua22.jpg', 'Aquapark', 10, '2019-04-14', '2019-04-15', '06:00:00', '19:00:00', '<p>Get up, get out, and do something! Just about any day of the year, you can find something fun, informative, and healthy to enjoy at an area park. Feel free to browse the listings below, or use the search tools to find an event that matches your interests and location.</p>\r\n', 13000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `IDFeedback` int(11) NOT NULL,
  `Content` varchar(1000) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `IDLogin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `registion`
--

CREATE TABLE `registion` (
  `IDRegistion` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ImageUser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `registion`
--

INSERT INTO `registion` (`IDRegistion`, `Name`, `Email`, `username`, `password`, `ImageUser`) VALUES
(1, 'tao ne', 'mark.hua91@gmail.com', 'user123', '12345678', '3.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`IDAnimal`);

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`IDCustomer`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`IDCategory`);

--
-- Chỉ mục cho bảng `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`IDEvent`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`IDFeedback`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IDLogin`);

--
-- Chỉ mục cho bảng `registion`
--
ALTER TABLE `registion`
  ADD PRIMARY KEY (`IDRegistion`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `animal`
--
ALTER TABLE `animal`
  MODIFY `IDAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `IDCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `IDCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `events`
--
ALTER TABLE `events`
  MODIFY `IDEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `IDFeedback` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `IDLogin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `registion`
--
ALTER TABLE `registion`
  MODIFY `IDRegistion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
