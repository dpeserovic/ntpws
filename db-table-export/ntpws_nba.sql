-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2021 at 11:49 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntpws_nba`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(65) COLLATE utf8_croatian_ci NOT NULL,
  `country_name` varchar(65) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `country_code` (`country_code`)
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `articleId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `articleId` (`articleId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `articleId`) VALUES
(1, 0x30, 1),
(2, 0x30, 2),
(3, 0x30, 3),
(4, 0x30, 4),
(5, 0x30, 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(1000) COLLATE utf8_croatian_ci NOT NULL,
  `text` varchar(5000) COLLATE utf8_croatian_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `isArchived` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `text`, `userId`, `isArchived`) VALUES
(1, '2021-11-30 20:58:00', 'The NBA at 75: From a very modest beginning, to a behemoth', 'It started in 1946 with 11 teams and 160 players\r\nIt started in 1946 with 11 teams and 160 players. The shot clock was nearly a decade away, the 3-point line was a couple generations away. Buildings were smaller. So were the players. And it wasnâ€™t even called the National Basketball Association.\r\n\r\nThe NBA, 75 years ago, was different in almost every imaginable way. Over the coming months, The Associated Press will look back at what the league was on and off the court, how it became what it is and where itâ€™ll be going over the next 25 years as it moves toward the century mark.\r\n\r\nThe series will recall those humble beginnings, with Ossie Schectman â€” who scored the first basket in league history â€” making $60 a game. Itâ€™ll show how what was happening in the country seemed to mirror what was happening in the league, from the leagueâ€™s path toward integrating in the 1950s, to its stance on social issues and race relations today.\r\n\r\nIn those earliest of years, teams lost plenty of money. Some of the inaugural franchises only had inaugural seasons, folding after Year 1. There was no robust following and the NBA had little to no impact on societal issues.\r\n\r\nAnd all the players were white. â€œNone of us who were playing at that time knew what this would be,â€ Schectman, who played for the original New York Knicks, said in a 2010 interview, three years before his death. â€œWe didnâ€™t know if this was going to work out and become something.â€\r\n\r\nSchectman scored the first basket in Basketball Association of America history; it wasnâ€™t called the NBA until three years later, but the NBA counts those years as part of its own. It was an underhand layup for the Knicks in a game at the Toronto Huskies on Nov. 1, 1946, the first two points of 13.7 million in league history and counting.\r\n\r\nIn time, Schectman got his answer: The NBA, indeed, would become something. Today, the 30 NBA franchises are worth at least $100 billion combined, possibly much more than that. The league has a fan base that stretches to each corner of the globe and a reputation of being a leader when it comes to social issues.\r\n\r\nRichard Lapchick, the son of former New York Knicks coach Joe Lapchick and researcher on social and racial issues within sport, said the leagueâ€™s platform has always provided an opportunity to be a conduit for change â€” perhaps never more so than now.\r\n\r\nâ€œI genuinely believe that the NBA, with Adam Silver as its current leader, is in this for the right reasons and has the support of the largest integrated labor force in America in terms of percentage of the population,â€ Lapchick said. â€œTheyâ€™re also very wealthy, so they can use their resources â€” and this is new â€” to invest in social justice campaigns in their communities.â€', 2, 0),
(2, '2021-11-29 20:58:36', 'Selecting the NBA\'s 75th Anniversary Team: Behind One Voter\'s Process', 'Did the panel get it right? Wrong? Here\'s my official ballot.\r\nSeventy-six players were just stamped as the greatest in NBA history. And if youâ€™re now raging, perplexed, frustrated or just a little woozy â€¦ congrats! You now have a sense of what it was like to be a voter.\r\n\r\nYes, I was one of the 88 peopleâ€”a mix of media, current and former players, coaches and team executivesâ€”who helped determine what is officially known as the 75th Anniversary Team. It was an honor, of course. It was also, I must tell you, positively torturous. Agonizing. Stressful.\r\n\r\nI pestered veteran scribes for advice. I spent a ridiculous number of hours clicking through Basketball-Reference.com, and flipping through Bill Simmonsâ€™s The Book of Basketball. I set principled standards for how the list should be compiled, then scrapped those principled standards. I downed whiskey shots. I lit a candle, played John Teshâ€™s â€œRoundball Rockâ€ on repeat and summoned the ghost of James Naismith.\r\n\r\nIt never got any easier. (Iâ€™ll lay out my full ballot below.)\r\n\r\nConsider this quick thought exercise: Whoâ€™s the better player, a) Russell Westbrook or b) Bob Cousy? a) Tracy McGrady or b) Jerry Lucas? a) Anthony Davis or b) Dolph Schayes? The three b optionsâ€”who played primarily in the 1950s and \'60sâ€”were all part of the NBAâ€™s 50th Anniversary Team, back in \'96. The three a options played in the modern era and were all strong candidates when I started contemplating my ballot for the top 75.\r\n\r\nThink about the sheer absurdity of those choices. Westbrook has his faults, but if you borrowed Doc Brownâ€™s DeLorean and sent him back in time, he would absolutely demolish the NBA of the 1950s and \'60s. (Or, as my NBA Radio colleague Zach Harper quipped, â€œHeâ€™d be tried as a witch.â€) T-Mac would look like an alien.\r\n\r\nImagine Kevin Durant, a 7-footer with slick handles and a silky jumper, unleashed on the black-and-white era. Imagine Damian Lillard pulling up from the logo (albeit for only two points)â€”not that heâ€™d ever need to, because heâ€™d fly past all of these guys.\r\n\r\nSo let\'s acknowledge this from the top: It is impossibleâ€”absolutely impossibleâ€”to fairly compare players across seven-plus decades of basketball. Todayâ€™s athletes are bigger, stronger, faster, better conditioned and more skilled than those even 30 years ago, to say nothing of 70 years ago. The game has changed dramatically.\r\n\r\nThis entire exercise is fraught on its face. Itâ€™s why I always demur on debates about the GOAT, or who would win the fantasy battle between the Showtime Lakers and the Splash Brothers Warriors. I just donâ€™t believe thereâ€™s an objective truth here.', 2, 0),
(3, '2021-11-28 20:59:20', 'After offseason focused on perfection, Stephen Curry could be even more unstoppable', 'A new wrinkle installed into Curry\'s summer workouts has pushed the sharpshooter toward loftier standards.\r\nSAN FRANCISCO â€“ Sometimes, Stephen Curry shot the ball without taking a dribble. Sometimes he pulled up from deep without being balanced. Sometimes he hoisted a shot despite a swarming defender giving him little space to move.\r\n\r\nFor a player that has cemented himself as the NBAâ€™s best shooter of all time, Curry often shot the ball as if he knew it would drop into the basket. He was usually right.\r\n\r\nCurry became the primary reason why the Warriors cemented a 115-113 win over the LA Clippers on Thursday at Chase Center. He finished with 45 points while shooting 16-of-25 from the field and 8-of-13 from 3-point range, marking the 50th time in his 13-year NBA career he had at least 40 points. He made two deep 3s in the final minute, including a pull-up from 31 feet and another from 26. And he then made two free throws with 4.7 seconds left to secure the win.\r\n\r\nOnly two days ago following the Warriorsâ€™ season-opening win over the Lakers, Curry described his triple-double performance as â€œtrashâ€ since he shot 5-of-21 from the field. It did not take long for Curry to turn his trash into treasure.\r\n\r\nâ€œI never worry about my shot, ever,â€ Curry said. Why? â€œEarned confidence with the work you put in,â€ Curry said. â€œThe next shot is always going in.â€\r\n\r\nThe work Curry has put in this past offseason might seem as familiar as any other offseason. He takes plenty of shots. But Curry and his trainer, Brandon Payne, detailed to NBA.com a new wrinkle in Curryâ€™s training regimen last summer. It has played a factor in Curry climbing to third place for most 45-point games for a player at least 33 years old (six), trailing only Michael Jordan (11) and Bernard King (eight).\r\n\r\nâ€œMaking shots in workouts is no longer good enough,â€ Payne told NBA.com â€œWeâ€™ve established heâ€™s going to make a lot of shots in workouts. He consistently does that. So for us, weâ€™ve utilized technology to be even more precise.â€\r\n\r\nAfter shattering numerous scoring records and climbing to No. 2 on the NBAâ€™s all-time list for most 3-pointers (2,842), Curry relied on shot-tracking technology that determined that not all of his made baskets are created equal.\r\n\r\nEach time Curry hoisted a shot, the technology tracked the ballâ€™s movement, the ballâ€™s arc and how deep the ball went into the rim. If the ball failed to drop through the middle of the rim, Curry and Payne simply counted that attempt as a missed shot. Curry and Payne also kept the same standard when he took shots on the move, an approach he took to emulate shooting against a swarming defender.', 3, 0),
(4, '2021-11-27 20:59:45', 'The NBA 75 Team: Biggest Snubs, Surprises and Ranking Best Players Ever', 'The NBA unveiled the 75th Anniversary Team. The Crossover staff reacts to the list.\r\nThe NBA officially unveiled its 75th-anniversary best players (consisting of 76 players due to a tie in votes). The Crossover staff reveals its biggest snubs, surprises, active players not on the 75th Anniversary Team are most likely to make the 100th Anniversary Team and top-five players of all time.\r\n\r\nHoward Beck: Full disclosure: I was one of the 88 voters, so I guess Iâ€™m 1/88th responsible for any and all grievances. That being the case, Iâ€™d say the biggest snub is Klay Thompsonâ€”the one player I voted for who did not make the final list. Thompson is the second-greatest shooter of all time, after Steph Curry. Heâ€™s a great defender. Heâ€™s a three-time champion and was absolutely essential to the Warriors dynasty. Iâ€™m astounded that he didnâ€™t make it.\r\n\r\nChris Herring: Iâ€™d love to come up with a more unique answer, like Alex English or someone like Joe Dumars. But the answer is obviously Dwight Howard. Itâ€™s mind-blowing that heâ€™s not part of the list.\r\n\r\nMichael Pina: Whittling thousands of NBA players down to 75 is next to impossible. But Dwight Howard should be here. Heâ€™s an eight-time All-Star who cracked eight All-NBA teams and won three Defensive Player of the Year trophies. Howard leads all active players in blocks and rebounds and was easily the most dominant two-way center in the entire league throughout his prime, which nearly lasted a decade. (He finished top-five for MVP four times.) This omission is hard to comprehend.\r\n\r\nRohan Nadkarni: The biggest snub has to be Dwight Howard, who I think is more accomplished than his current teammate Anthony Davis, who made the list. For all his antics, Howard is a surefire Hall of Famer. He was the leagueâ€™s most dominant center and defensive player for years. Dwight has eight All-Star appearances, eight All-NBAs, and three DPOYs. Itâ€™s hard to justify leaving him off this list for what heâ€™s done on the court. I blame Howard Beck for letting this happen.\r\n\r\nJeremy Woo: Itâ€™s hard to pick just one, and I donâ€™t think itâ€™s worth making a stink, but at a glance, Iâ€™d argue strongly for Derrick Rose, Manu GinÃ³bili, Tony Parker and Pau Gasol. Injuries obviously scuttled what would have been an obvious case for Rose, and he and Nikola JokiÄ‡ are the only two MVP winners not to make the list. An injury-riddled prime and short peak didnâ€™t keep Bill Walton off the list. Itâ€™s extremely hard for me to believe Tim Duncan should be the only player from the later era of Spurs title teams on the list, particularly when you consider the sheer number of guys from the various Celtics dynasties of yore who made the cut. Manu and Parker are both deserving. You can argue the same for Gasol, who was a multiple-time champion with longevity. It was the right thing to do to preserve the sanctity of the original top 50 (and Iâ€™m too young to really have strong takes on the older guys), but if the goal had been to relitigate the entire thing in earnest, this list looks different, I think.\r\n\r\nBeck: That Dwight Howard didnâ€™t make it. I didnâ€™t vote for him, but I thought most others would. Iâ€™m also surprised the entire 50th Anniversary Team made it on the 75th-anniversary list. I thought for sure that one or two old-timers would get cut in favor of more current stars.\r\n\r\nHerring: Anthony Davis. The body of work is undeniable, but seeing him on the list, but not Dwight, makes me wonder just how much Davis benefited from winning the title alongside LeBron James. Howard never won it as a star but was largely responsible for giving his team a chance to earn a ring. Davis has always been fantastic but was never able to single-handedly carry his club the way a prime Howard did.\r\n\r\nPina: For some reason I wasnâ€™t expecting some of the active players to make it, being that their careers remain unsettled. Anthony Davis and Damian Lillard are deserving, but what separates them from Nikola JokiÄ‡ (an MVP winner), Paul George, Klay Thompson and Jimmy Butler? Or the likes of Tracy McGrady, Vince Carter and Tony Parker?', 3, 0),
(5, '2021-11-26 21:00:02', 'What the Ben Simmons Standoff Means for the Sixers and the N.B.A.', 'Simmons is the latest N.B.A. star to ask for a trade then try to force his way off a team, but Philadelphia is holding firm so far.\r\nOver the summer, Philadelphia 76ers guard Ben Simmons requested a trade, initiating a standoff that has dragged into the regular season.\r\n\r\nThe organization fined Simmons repeatedly for missing practices, meetings and preseason games, according to ESPN. Simmons did not report to the team until near the end of the preseason and was suspended for the regular-season opener for conduct detrimental to the team. Simmons likely will not play for the 76ers again for a long while, if ever. Philadelphia hosts the Nets on Friday.\r\n\r\nIn response to a report from The Athletic on Friday that Simmons had said he was mentally unprepared to play, 76ers forward Tobias Harris wrote in a tweet: â€œAnd weâ€™ll respect his privacy and space during this time. When heâ€™s ready, we will embrace our brother with love and handle our business on the court. Thatâ€™s it, thatâ€™s all.â€\r\n\r\nHereâ€™s how the situation evolved, where it stands and what it could mean for the N.B.A.\r\n\r\nTechnically, we donâ€™t know. Simmons hasnâ€™t said anything publicly. Much of this has played out through anonymous reports in the media. There have been some signals from Simmonsâ€™s Instagram page, such as when he liked a post detailing how much the Sixers could fine him for missing games and practices.\r\n\r\nThe tension between Simmons and the Sixers has been festering for years, despite Simmonsâ€™s signing an extension in 2019. Now in his sixth season, he hasnâ€™t really changed much as a player (he missed his first season with a foot injury). He is one of the most versatile playmakers in the N.B.A. and an excellent defender, but he has not developed a jump shot, which has made him a liability on the offensive end in multiple playoff runs. Heâ€™s also a career 59.7 percent free-throw shooter, which means teams often foul him on purpose at the end of games.\r\n\r\nIn December 2019, Brett Brown, the former 76ers coach, publicly begged Simmons to take more 3s. One month later, Brown told reporters that he had â€œfailedâ€ in his mission.\r\n\r\nEven though Doc Rivers replaced Brown before last season, there hasnâ€™t been much difference. Rivers was Simmonsâ€™s steadfast defender last year, but after the Atlanta Hawks eliminated the Sixers in the Eastern Conference semifinals, Rivers told reporters that he didnâ€™t know whether Simmons could be a point guard for a championship team. Itâ€™s highly unusual to see a coach publicly criticize his own player minutes after a tough playoff loss.\r\n\r\nOn Thursday, Daryl Morey, the teamâ€™s president of basketball operations, said on a local Philadelphia radio station: â€œDoc Rivers defended Ben Simmons more than any human on Earth, maybe ever. If someone wants to interpret one comment out of 10,000, I donâ€™t think thatâ€™s very fair to the organization or Doc Rivers.â€\r\n\r\nHe added, â€œTo me, itâ€™s all some sort of like, you know, pretext to do something larger by his agent.â€', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` enum('1','2','3') COLLATE utf8_croatian_ci NOT NULL,
  `role` varchar(65) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
('1', 'user'),
('2', 'editor'),
('3', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) COLLATE utf8_croatian_ci NOT NULL,
  `surname` varchar(65) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(65) COLLATE utf8_croatian_ci NOT NULL,
  `country` varchar(65) COLLATE utf8_croatian_ci NOT NULL,
  `city` varchar(65) COLLATE utf8_croatian_ci NOT NULL,
  `street` varchar(65) COLLATE utf8_croatian_ci NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(65) COLLATE utf8_croatian_ci NOT NULL,
  `role` enum('1','2','3') COLLATE utf8_croatian_ci NOT NULL DEFAULT '1',
  `isApproved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `country` (`country`),
  KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `country`, `city`, `street`, `dob`, `password`, `role`, `isApproved`) VALUES
(1, 'Dario', 'PeÅ¡eroviÄ‡', 'dpeserovi@tvz.hr', 'HR', 'Osijek', 'Ljudevita Gaja', '1998-02-18', '$2y$12$GVX3hmkspA6lX4AC4lAlG.sP80ATkXxAsAN.wiAY4irT9CZ6xU60W', '3', 1),
(2, 'Maurice', 'Sutton', 'maurice.sutton@example.com', 'US', 'New York', '4645 College St', '1971-07-01', '$2y$12$kbneDBcxa3cTURhWIyVe0.JV7T.UKQVWF92wJJQArdjBR6GLSI5g6', '1', 1),
(3, 'Judy', 'Jordan', 'judy.jordan@example.com', 'BD', 'Dhaka', '6897 Photinia Ave', '1982-03-01', '$2y$12$Sdaaau/zAblWp4fnGQg6CuFT4tKlwofqkhnhEvW9IBf33Go/sdW42', '1', 1),
(4, 'Eleanor', 'Barrett', 'eleanor.barrett@example.com', 'FI', 'Helsinki', '1690 W Belt Line Rd', '1976-07-04', '$2y$12$TEme1CaGkqr7E4yFxCrajOZ9h1sIvAuk626eKawWvIRX51PrKqQ2.', '1', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`articleId`) REFERENCES `news` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`country`) REFERENCES `countries` (`country_code`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
