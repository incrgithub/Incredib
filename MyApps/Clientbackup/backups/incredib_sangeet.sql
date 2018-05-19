DROP TABLE aboutus;

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contents` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO aboutus VALUES("10","<p > <h1><font color=red>चैतन्य संगीत विद्यालय सांगोला </font></h1></p>



DROP TABLE ahval;

CREATE TABLE `ahval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `filename` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO ahval VALUES("15","प्रवेश अर्ज","sangeet vidyalay frm.pdf");



DROP TABLE branchaddr;

CREATE TABLE `branchaddr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE gallery;

CREATE TABLE `gallery` (
  `photoid` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO gallery VALUES("1","page1 001_3.jpg");
INSERT INTO gallery VALUES("2","page1 001.jpg");
INSERT INTO gallery VALUES("3","Image-4_2.jpg");
INSERT INTO gallery VALUES("4","Image-2.jpg");
INSERT INTO gallery VALUES("5","Image-4_2_2.jpg");
INSERT INTO gallery VALUES("6","Image-3_3.jpg");
INSERT INTO gallery VALUES("7","Image-4_4.jpg");
INSERT INTO gallery VALUES("8","Image-5_3.jpg");
INSERT INTO gallery VALUES("9","Image-5.jpg");
INSERT INTO gallery VALUES("10","Image-3.jpg");
INSERT INTO gallery VALUES("11","Image-5.jpg");
INSERT INTO gallery VALUES("13","Image-6_2.jpg");
INSERT INTO gallery VALUES("14","Image-6_3.jpg");
INSERT INTO gallery VALUES("15","Image-5_2.jpg");



DROP TABLE logo;

CREATE TABLE `logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO logo VALUES("10","lo.gif");



DROP TABLE management;

CREATE TABLE `management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `post` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE members;

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

INSERT INTO members VALUES("100","admin","admin","Amit","Bhalerao");



DROP TABLE news;

CREATE TABLE `news` (
  `newsid` int(10) NOT NULL AUTO_INCREMENT,
  `contents` text NOT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO news VALUES("35","&#2326;&#2337;&#2325;&#2357;&#2366;&#2360;&#2354;&#2366; &#2343;&#2352;&#2339;&#2366;&#2340;&#2368;&#2354; &#2346;&#2366;&#2339;&#2368;&#2360;&#2366;&#2336;&#2381;&#2351;&#2366;&#2340; &#2333;&#2346;&#2366;&#2335;&#2381;&#2351;&#2366;&#2344;&#2375; &#2357;&#2366;&#2338; ");



DROP TABLE persons;

CREATE TABLE `persons` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` char(15) DEFAULT NULL,
  `LastName` char(15) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE slider;

CREATE TABLE `slider` (
  `photoid` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE societyinfo;

CREATE TABLE `societyinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `address` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO societyinfo VALUES("10","चैतन्य संगीत  विद्यालय सांगोला","चैतन्य संगीत  विद्यालय सांगोला");



DROP TABLE yojana;

CREATE TABLE `yojana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `filename` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO yojana VALUES("15","Application Form","sangeet vidyalay frm.pdf");


