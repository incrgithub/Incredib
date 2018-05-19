DROP TABLE tbl_login;

CREATE TABLE `tbl_login` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tbl_login VALUES("1","admin","123456","Amit","Bhalerao");
INSERT INTO tbl_login VALUES("2","student","student","Student","Student");



DROP TABLE tbl_marks;

CREATE TABLE `tbl_marks` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `mobileno` varchar(10) NOT NULL,
  `subject1` varchar(3) NOT NULL,
  `subject2` varchar(3) NOT NULL,
  `subject3` varchar(3) NOT NULL,
  `subject4` varchar(3) NOT NULL,
  `subject5` varchar(3) NOT NULL,
  `subject6` varchar(3) NOT NULL,
  `subject7` varchar(3) NOT NULL,
  `subject8` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=927 DEFAULT CHARSET=latin1;




