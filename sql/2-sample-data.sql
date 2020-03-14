
USE `friendsbook`;

SET FOREIGN_KEY_CHECKS=0;

--
-- Daten für Tabelle `entries`
--

INSERT INTO `entries` (`id`, `userID`, `tanID`, `vorname`, `nachname`, `geburtstag`, `wohnort`, `strasse`, `kennenUns`, `festnetz`, `handynummer`, `email`, `hobbies`, `berufswunsch`, `essen`, `insel`, `film`, `sport`, `charakter`, `tier`, `musik`, `game`, `alk`, `story`, `absturz`, `trinkspiel`) VALUES
(6, 24, 78, 'asdasd', 'asdasd', '', '', '', 'asdasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 24, 79, 'asdasd', 'asdasd', '', '', '', 'aaassad', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 24, 81, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 2, 123, 'asd', 'asdasd', '', '', '', 'ssssss', '', '', 'sssss', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 2, 124, 'Test', 'Nachname', '', '', '', 'von der Uni aus', '', '', 'sag_ich_nicht@noway.com ', 'Zocken', '', '', '', 'Terminator', '', '', '', '', '', '', '', '', ''),
(11, 2, 125, 'Peter', 'Dieter', '', '', 'SchlÃ¼pfweg 25', 'aus dem haus', '', '', 'mailmailman', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 2, 126, 'sadadsf', 'asdfasdf', '', '', '', 'asdfhjkkjl', '', '', 'jklhjkl', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 2, 131, 'Vorname ', 'Lol', '', '', '', 'Bahn', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 2, 132, 'Simon', 'Kellner', '', '', '', 'Studium ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 2, 133, 'llol', 'Ashfsad', '283843', 'Idsofnjdsn', 'Sijdfdendefjno', 'Eiisdfwnedfn', '479', 'Q23829', 'Dndsifnsjd', 'Ue2981e2wsnddsn', 'Uiwwerue2r2', 'Uiewfewkrw', 'Kwerfekjwj', 'Kesnfnfjekwfn', 'Esnfnfewfn', 'Kdsfnff', 'Wefjfednq', 'Jwendf', 'Koewnfdksjfn', 'Jkwenfsfn', 'Jkewnfndw', 'Ewnfnfejkw', 'Wefksff'),
(16, 2, 134, 'frieder heinrich', 'baumann von neuschwanberg', '01.01.1971', '', '', 'hochadeltreffen', '', '', '', '', 'bin zu reich zum arbeiten', 'kaviar', '', '', '', '', '', 'Mozart', '', 'Champagner ', '', '', ''),
(17, 2, 139, ' hi', 'du', '           ', '', '', 'fd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '             ', '                ', '            '),
(18, 2, 140, ' ', ' ', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 6, 141, 'Vorname', 'Nachname', '', '', '', 'Studium', '', '', 'mailadresse@mail.com', '', 'Entwickler', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 10, 61, 'Simon', 'Kellner', '', '', '', 'Studium', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 30, 144, 'Hans ', 'Wurst', '', 'Essen', 'Lyonerweg 12', ' Aus dem Supermarkt ', '', '', '', '', '', ' KÃ¤se ', '', '', '', '', '', '', '', '', '', '', ''),
(22, 30, 145, 'Angela', 'Merkel', '', '', '', 'Von den Wahlen', '', '', 'angieforpresident@cdu.de', ' Den Horst nerven ', ' Mutter Teresa ', '', ' Ein FlÃ¼chtlingsboot ', '', '', '', '', '', '', '', '', '', ''),
(23, 30, 146, ' Joachim ', 'LÃ¶w', '03.02.1960', 'Feiburg', 'Kicker-Allee 71', ' Aus dem Trainingslager ', '05474902014', 'nur fÃ¼r ganz besondere Freunde', 'hireme@besttrainereuwest.org', ' Handball, <b>Am Sack kratzen</b>', ' Volleyball Trainer ', '', ' Basketball ', ' Die wilden Kerle ', ' Tennis ', 'Trainer bei FIFA', ' LÃ¶we', 'We are the Champions', ' FIFA ', '', ' Mit dem Bus Ã¼ber den Pokal gefahren ', ' Bin schon ganz unten ', ''),
(24, 30, 147, 'Dagobert ', 'Duck', '99.99.9999â‚¬', 'Entenhausen', 'Goldweg 99', 'Du hast meinen Geldspeicher gereinigt', '', '', '', 'Geld zÃ¤hlen und im Geld schwimmen und angeben dass man der Reichste im Dorf ist', 'GoogilionÃ¤r', 'Frische Scheine', 'Meine Kreditkarte ', '', '', '', 'Sparschwein', '', '', 'Teuerer Scotch', '', '', ''),
(25, 2, 66, '<h1>Name</h1>', '<b>Schwarz</b>', '', '', '', 'lolo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 2, 67, 'asd', 'asd', '', '', '', '<div class=\"alert alert-dark\" role=\"alert\">         <h5>Deine unbenutzen Tans:</h5>           67 | 68 | 69 | 70 | 71 | 72 | 75 | 76 | 77 | 82 | 83 | 84 | 85 | 86 | 87 | 88 | 89 | 90 | 91 | 92 | 93 | 94 | 95 | 96 | 97 | 98 | 99 | 100 | 101 | 102 | 103 | 104 | 105 | 106 | 107 | 108 | 109 | 110 | 111 | 112 | 113 | 114 | 115 | 116 | 117 | 118 | 119 | 120 | 121 | 129 | 130 | 135 | 136 | 137 | 138 | 142 | 143 | 148 | 149 |         </div>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 8, 152, 'hgjfg', 'hfhgj', 'hgfjhgfj', '', '', 'jhgfhgjf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 8, 153, 'gfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshf', 'gfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshf', 'gfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshf', '', '', 'gfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshfgfdshf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 2, 110, 'asdfasdfasd', 'fasdfasdfasdf', '', '', '', 'asdfsadfasdfa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 2, 172, 'asdfadsfad', 'asdfasdfasd', '', '', '', 'asdfasdfasdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Daten für Tabelle `tans`
--

INSERT INTO `tans` (`id`, `userID`, `tan`, `used`) VALUES
(56, 2, '5b26cb6f52b00', 1),
(57, 2, '5b26cb8cab408', 1),
(58, 2, '5b26cbc094e4b', 1),
(59, 6, '5b26cbd5e5079', 1),
(60, 2, '5b26dfdf7ef82', 1),
(61, 10, '5b26e044ee6b4', 1),
(62, 10, '5b26e04b5fa17', 0),
(63, 10, '5b26e04ca13d3', 0),
(64, 10, '5b26e0978afa2', 0),
(65, 10, '5b26e09d6bb85', 0),
(66, 2, '5b26e0aab86df', 1),
(67, 2, '5b26e10f3ccec', 1),
(68, 2, '5b26e10fe7fe8', 0),
(69, 2, '5b26e1106cc5f', 0),
(70, 2, '5b26e11092fd1', 0),
(71, 2, '5b26e110af8bf', 0),
(72, 2, '5b26e1167aa12', 0),
(73, 10, '5b26e1318ac8c', 0),
(74, 10, '5b26e13246ae4', 0),
(75, 2, '5b26e1847838a', 0),
(76, 2, '5b26e8831b088', 0),
(77, 2, '5b26e89d078d5', 0),
(78, 24, '5b27c249a558a', 1),
(79, 24, '5b27c26b5d8fa', 1),
(80, 24, '5b27c26ee1364', 0),
(81, 24, '5b27d363876b9', 1),
(82, 2, '5b27de3b2d562', 0),
(83, 2, '5b27e53e75651', 0),
(84, 2, '5b27e53fdd5a6', 0),
(85, 2, '5b27e55417aa1', 0),
(86, 2, '5b27e55feb89a', 0),
(87, 2, '5b27e560a45cd', 0),
(88, 2, '5b27e56907521', 0),
(89, 2, '5b27e56eebee6', 0),
(90, 2, '5b27e586a27b2', 0),
(91, 2, '5b27e774ae8f1', 0),
(92, 2, '5b27e77650c98', 0),
(93, 2, '5b27e77a30937', 0),
(94, 2, '5b27e7ce24be6', 0),
(95, 2, '5b27ef2f1e384', 0),
(96, 2, '5b27ef3067710', 0),
(97, 2, '5b27ef30a3d8b', 0),
(98, 2, '5b27ef30d7cff', 0),
(99, 2, '5b27ef311836b', 0),
(100, 2, '5b27ef314c846', 0),
(101, 2, '5b27ef31866b4', 0),
(102, 2, '5b27ef3264a72', 0),
(103, 2, '5b27ef32ad605', 0),
(104, 2, '5b27ef333b5d4', 0),
(105, 2, '5b27ef376ef64', 0),
(106, 2, '5b27ef6751781', 0),
(107, 2, '5b27ef683d92f', 0),
(108, 2, '5b27ef80c21b1', 0),
(109, 2, '5b27efabb3e54', 0),
(110, 2, '5b27efc3b3fd3', 1),
(111, 2, '5b27efcf45cb1', 0),
(112, 2, '5b27efcfb9db2', 0),
(113, 2, '5b27effe82715', 0),
(114, 2, '5b27f01d0bb98', 0),
(115, 2, '5b27f02e2a691', 0),
(116, 2, '5b27f02fa0edd', 0),
(117, 2, '5b27f032b8fa5', 0),
(118, 2, '5b27f03401952', 0),
(119, 2, '5b27f2fe29d1d', 0),
(120, 2, '5b27f30ad2819', 0),
(121, 2, '5b27f38f7fabf', 0),
(122, 10, '5b27f3a84086f', 0),
(123, 2, '5b27f97bafe6f', 1),
(124, 2, '5b28017215d92', 1),
(125, 2, '5b2802ba4f013', 1),
(126, 2, '5b280388a76d2', 1),
(127, 24, '5b280510f4094', 0),
(128, 29, '5b280670dcb4f', 0),
(129, 2, '5b280c04c097f', 0),
(130, 2, '5b2831cdea21e', 0),
(131, 2, '5b28a84c13dcb', 1),
(132, 2, '5b28cb166f483', 1),
(133, 2, '5b28cbcdda3d5', 1),
(134, 2, '5b28cc211d9df', 1),
(135, 2, '5b291eb0e32d6', 0),
(136, 2, '5b291eb82d741', 0),
(137, 2, '5b291ec6b47f4', 0),
(138, 2, '5b291eca60052', 0),
(139, 2, '5b291eca8d267', 1),
(140, 2, '5b292fa313b33', 1),
(141, 6, '5b29318498b5d', 1),
(142, 2, '5b2933e999dfd', 0),
(143, 2, '5b2935c1a1455', 0),
(144, 30, '5b296bdd323e6', 1),
(145, 30, '5b296bdd9cc48', 1),
(146, 30, '5b296bde40a82', 1),
(147, 30, '5b296bdeb2dbf', 1),
(148, 2, '5b2a6db579881', 0),
(149, 2, '5b2a6db74b1d4', 0),
(151, 8, '5b2b8dea36bc1', 1),
(152, 8, '5b2b8e4ccadcc', 1),
(153, 8, '5b2b8e711aa0f', 1),
(154, 2, '5b2bfd2e6ee9b', 0),
(155, 30, '5b2c93c05ee3f', 1),
(156, 30, '5b2c941deaff7', 0),
(157, 30, '5b2c941e1ab05', 0),
(158, 30, '5b2c941e3f534', 0),
(159, 30, '5b2c941e694de', 0),
(160, 30, '5b2c941e8c875', 0),
(161, 30, '5b2c941eaff72', 0),
(162, 30, '5b2c941ed42d0', 0),
(163, 30, '5b2c941f01ac9', 0),
(164, 30, '5b2c941fbd02b', 0),
(165, 30, '5b2c941fe2335', 0),
(166, 30, '5b2c942008473', 0),
(167, 10, '5b3c1b75dd4bc', 0),
(168, 2, '5b665fbcf0b36', 0),
(169, 2, '5b665fbe0335e', 0),
(170, 2, '5b665fbf1ea2b', 0),
(171, 2, '5b665fbf515c7', 0),
(172, 2, '5b665fbf89319', 1),
(173, 2, '5b7df511aba41', 0),
(174, 2, '5bfb258d241cc', 0),
(175, 2, '5bfb258f56c52', 0),
(176, 2, '5bfb258fe4113', 0),
(177, 2, '5bfb259011caa', 0),
(178, 2, '5bfb25911c88c', 0),
(179, 2, '5bfb2591439b9', 0),
(180, 2, '5bfb2591862fb', 0),
(181, 2, '5bfb2591c5245', 0),
(182, 2, '5bfb25920a4ba', 0),
(183, 2, '5bfb2592381a2', 0),
(184, 2, '5bfb25925a839', 0),
(185, 2, '5bfb2592805e3', 0),
(186, 2, '5bfb2592a67e1', 0),
(187, 2, '5bfb2592c4dad', 0),
(188, 2, '5c9371215facd', 0);

-- --------------------------------------------------------

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`ID`, `username`, `email`, `password`) VALUES
(2, 'asd', 'asd', '7815696ecbf1c96e6894b779456d330e'),
(3, 'assd', 'assd', '40b114b04ce020d26ccdc8fe28add240'),
(4, 'aaa', 'aaa', '47bce5c74f589f4867dbd57e9ca9f808'),
(5, 'asddd', 'asddd', '845441edc5ed7ea737439aa46715eed2'),
(6, 'bbb', 'bbb', '08f8e0260c64418510cefb2b06eee5cd'),
(7, 'marcel', 'marcel', '24dde05168c24253ce9fec0fddd1e48d'),
(8, 'tim', 'tim', 'b15d47e99831ee63e3f47cf3d4478e9a'),
(10, 'simon', 'simon', 'b30bd351371c686298d32281b337e8e9'),
(11, 'sdfa', 'asdf', '912ec803b2ce49e4a541068d495ab570'),
(12, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, '123abc', '123abc', 'a906449d5769fa7361d7ecc6aa3f6d28'),
(14, 'fgfg', 'fgfg', '2af5c662cab479e5471ca76326a57563'),
(15, 'dfdf', 'dfdf', 'b52c96bea30646abf8170f333bbd42b9'),
(16, 'hallohallo', 'hallohallo', 'ecfcb09d14771e375f4a7ed2aa6b25c5'),
(18, 'test3', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(19, 'asdfg', 'asdfg', '040b7cf4a55014e185813e0644502ea9'),
(20, 'asdf', 'asd', '7815696ecbf1c96e6894b779456d330e'),
(21, 'problem', 'problemxampp', '7815696ecbf1c96e6894b779456d330e'),
(22, 'xamp', 'xamp problem test', '7815696ecbf1c96e6894b779456d330e'),
(23, 'contentfix', 'contentfix', '7815696ecbf1c96e6894b779456d330e'),
(24, 'vvv', 'vvv', '4786f3282f04de5b5c7317c490c6d922'),
(25, 'nnn', 'nnn', 'a1931ec126bbad3fa7a3fc64209fd921'),
(26, 'asdb', 'asdb', 'bed23bc3248b6edc2d08204410e832c5'),
(27, 'sss', 'sss', '9f6e6800cfae7749eb6c486619254b9c'),
(28, 'hi', 'hi', '49f68a5c8493ec2c0bf489821c21fc3b'),
(29, 'handy', 'handy', '16f198404de4bb7b994f16b84e30f14f'),
(30, 'MarcelDavis', 'presi', '196801e16a9c169a12f3975e83fe6556'),
(31, 'tim1', 'ehtdichnichtsan@web.de', 'd1c9a9d96ec1b245bd976930be6b9ab3'),
(32, 'tobi', 'tobi', 'e0dd692dcb560bc04bfa1cbfaca9ecff'),
(33, 'demo', 'demo@demo.com', 'fe01ce2a7fbac8fafaed7c982a04e229');

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT für Tabelle `tans`
--
ALTER TABLE `tans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
