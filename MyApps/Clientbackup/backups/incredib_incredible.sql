DROP TABLE tbl_clients;

CREATE TABLE `tbl_clients` (
  `clientid` int(20) NOT NULL AUTO_INCREMENT,
  `clientname` text NOT NULL,
  `clientaddress` text NOT NULL,
  `clientemailid` text NOT NULL,
  `clientcontactno` text NOT NULL,
  `clienttype` text NOT NULL,
  PRIMARY KEY (`clientid`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO tbl_clients VALUES("6","Phadtare Knowledge City","Kalamb, Walchandnagar","contact@dkkkp.edu.in","9158592000","Fixed");
INSERT INTO tbl_clients VALUES("9","Kikale Associates","Baramati","kikaleassociates@gmail.com","9823025340","Fixed");
INSERT INTO tbl_clients VALUES("11","ConstroQcheck Labs","Baramati","constroqcheck@gmail.com","9404684424","Fixed");
INSERT INTO tbl_clients VALUES("12","IHSDP SATARA","Satara","ihsdpsatara@gmail.com","9890628584","Fixed");
INSERT INTO tbl_clients VALUES("13","Hotel Swarajya ","Pune-Solapur Road Mohol","abhijit.shinde22@rediffmail.com","9822991150","Fixed");
INSERT INTO tbl_clients VALUES("14","Hotel Maharaja","Machanur, Mangalwedha","abhijit.shinde22@rediffmail.com","9145671588","Fixed");
INSERT INTO tbl_clients VALUES("15","Chaitanya Sangeet Vidyalaya","Sangola, Dist-solapur","abhijit.shinde22@rediffmail.com","9049406050","Fixed");
INSERT INTO tbl_clients VALUES("16","Yummy Ice cream  ","MIDC Mangalwedha Dist-Solapur","abhijit.shinde22@rediffmail.com","8055224466","Fixed");
INSERT INTO tbl_clients VALUES("17","Sant Chokhamela Trust Mangalwedha","Mangalwedha Dist-Solapur","abhijit.shinde22@rediffmail.com","9595269226","Fixed");
INSERT INTO tbl_clients VALUES("18","Saptarshee Publication","Mangalwedha , Dist-Solapur","abhijit.shinde22@rediffmail.com","9822701657","Fixed");
INSERT INTO tbl_clients VALUES("19","Marathi Arthshastra Parishad","Mumbai, Maharashtra","abhijit.shinde22@rediffmail.com","9860960529","Fixed");
INSERT INTO tbl_clients VALUES("22","Vivahyog","Baramati","amitbaramatimca@gmail.com","8796154725","Fixed");
INSERT INTO tbl_clients VALUES("47","Santosh Mane","Mangalwedha","s@gmail.com","9765581080","Fixed");
INSERT INTO tbl_clients VALUES("48","Kasturi Collection","Near Bhairavnath Bhel,Narhegoan,Pune-411041","info@kasturicollection.com","7058756668","Fixed");
INSERT INTO tbl_clients VALUES("45","Marwade Grampanchayat","Marwade","abhijit.shinde22@gmail.com","7588504729","Fixed");
INSERT INTO tbl_clients VALUES("46","Prajwal shinde","mangalwedha","abhijit.shinde22@gmail.com","9860960529","Proposed");
INSERT INTO tbl_clients VALUES("40","Incredible Tech Solutions","Incredible Tech Solutions","abhijit.shinde22@gmail.com","9860960529","Fixed");



DROP TABLE tbl_complaint_dtls;

CREATE TABLE `tbl_complaint_dtls` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `complaint_dept` text NOT NULL,
  `address` text NOT NULL,
  `comp_comments` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `action_comments` text NOT NULL,
  `comp_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tbl_complaint_dtls VALUES("1","Amit Bhalerao","8796154725","PQR","Pune ","Hello","Completed","Hello","2017-02-01");
INSERT INTO tbl_complaint_dtls VALUES("2","Abhijit Shinde","9860960529","PQR","Solapur","Giyg","Completed","gccv","2017-02-01");
INSERT INTO tbl_complaint_dtls VALUES("3","abhijit shinde","9860960529","ABC","At- Kacharewadi Tal-Mangalwedha\nDist-Solapur","गटर नगरपालिका ","Completed","ok","2017-02-02");
INSERT INTO tbl_complaint_dtls VALUES("4","raju ","9860960529","ABC","At- Kacharewadi Tal-Mangalwedha\nDist-Solapur","light problem ","Pending","","2017-02-07");
INSERT INTO tbl_complaint_dtls VALUES("5","जवाहर गांधी ","0986096052","आरोग्य विभाग","At- Kacharewadi Tal-Mangalwedha\nDist-Solapur","गटार स्वच्च करत नाही ","Pending","","2017-03-25");



DROP TABLE tbl_desktopappdev;

CREATE TABLE `tbl_desktopappdev` (
  `appid` int(10) NOT NULL AUTO_INCREMENT,
  `appname` text NOT NULL,
  `desktopappexpirydate` date NOT NULL,
  `clientid` int(11) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tbl_desktopappdev VALUES("3","Hotel Billing ","2017-04-25","13");
INSERT INTO tbl_desktopappdev VALUES("4","Hotel Billing ","2017-05-18","14");



DROP TABLE tbl_enquiry;

CREATE TABLE `tbl_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO tbl_enquiry VALUES("2","Kasturi Bhalerao","kasturi.bhalerao@gmail.com","9970446416","I LOVE YOU AMTYA");
INSERT INTO tbl_enquiry VALUES("3","Amit Anil Bhalerao","amitbaramatimca@gmail.com","8796154725","I  LOVE YOU KASTURI");
INSERT INTO tbl_enquiry VALUES("4","Amit","amitbaramatimca@gmail.com","8796154725","saD");
INSERT INTO tbl_enquiry VALUES("5","Amit","amitbaramatimca@gmail.com","8796154725","asssadsadasd");
INSERT INTO tbl_enquiry VALUES("6","घुलें","सप्तर्शीप्रकाशन@gmail.com","७५०�","Nice");



DROP TABLE tbl_followup;

CREATE TABLE `tbl_followup` (
  `followupid` int(20) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `next_followup_date` date NOT NULL,
  `comments` text NOT NULL,
  `clientid` int(10) NOT NULL,
  PRIMARY KEY (`followupid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO tbl_followup VALUES("1","2017-01-09","2017-01-02","meeting with chairman \ngo to head cleck","10");
INSERT INTO tbl_followup VALUES("2","2017-01-09","2017-01-03","no head clerk ","10");
INSERT INTO tbl_followup VALUES("3","2017-01-09","2017-01-06","head clerk call metting on monday 9/01/17","10");
INSERT INTO tbl_followup VALUES("4","2017-01-19","2017-01-22","for the mobile app for Vari Parivar","24");
INSERT INTO tbl_followup VALUES("5","2017-01-19","2017-01-25","Call Mr Kadam","36");
INSERT INTO tbl_followup VALUES("6","2017-01-19","2017-01-20","Call Mr Satish Final Deal","34");
INSERT INTO tbl_followup VALUES("7","2017-01-19","2017-01-21","Call And Meet ","35");
INSERT INTO tbl_followup VALUES("8","2017-01-19","2017-01-21","Call For Finalize","37");
INSERT INTO tbl_followup VALUES("9","2017-01-19","2017-02-28","call","38");
INSERT INTO tbl_followup VALUES("10","2017-01-20","2017-02-11","Call","35");
INSERT INTO tbl_followup VALUES("11","2018-01-31","2018-02-03","positive","46");



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



DROP TABLE tbl_mobileappdev;

CREATE TABLE `tbl_mobileappdev` (
  `appid` int(10) NOT NULL AUTO_INCREMENT,
  `appname` text NOT NULL,
  `mobileappexpirydate` date NOT NULL,
  `clientid` int(11) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;




DROP TABLE tbl_sms;

CREATE TABLE `tbl_sms` (
  `smsid` int(11) NOT NULL AUTO_INCREMENT,
  `senderid` varchar(6) NOT NULL,
  `nosms` int(10) NOT NULL,
  `smsexpirydate` date NOT NULL,
  `clientid` int(11) NOT NULL,
  PRIMARY KEY (`smsid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;




DROP TABLE tbl_todo_career;

CREATE TABLE `tbl_todo_career` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0 for not completed, 1 for completed, 2 for hidden',
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

INSERT INTO tbl_todo_career VALUES("64","Amit = Kasturi Collection Multiseller Ecommerce Platform - Issue Fixing","0","0000-00-00 00:00:00");
INSERT INTO tbl_todo_career VALUES("65","Amit + Abhijit = Vivahyog.in Frontend New Template","0","0000-00-00 00:00:00");
INSERT INTO tbl_todo_career VALUES("66","Amit = Vivahyog.in Mobile Application Development","0","0000-00-00 00:00:00");
INSERT INTO tbl_todo_career VALUES("67","Abhijit = Incredible Website New Template with Products","0","0000-00-00 00:00:00");
INSERT INTO tbl_todo_career VALUES("68","Amit  + Abhijit  = Learning and Implementaing Github","0","0000-00-00 00:00:00");
INSERT INTO tbl_todo_career VALUES("69","Amit +  Abhijit = Bachat Gat Admin Testing and Go Live","0","0000-00-00 00:00:00");
INSERT INTO tbl_todo_career VALUES("70","Amit = Vivahyog.in convert mysql to mysqli","0","0000-00-00 00:00:00");
INSERT INTO tbl_todo_career VALUES("72","Abhijit = Chaitanya Sangeet Vidyalaya Website convert mysql to mysqli","0","0000-00-00 00:00:00");
INSERT INTO tbl_todo_career VALUES("74","Amit  + Abhijit = PHP Object Oriented Project Implmentation","0","0000-00-00 00:00:00");



DROP TABLE tbl_transactions;

CREATE TABLE `tbl_transactions` (
  `txnid` int(10) NOT NULL AUTO_INCREMENT,
  `txndate` date NOT NULL,
  `txnno` text NOT NULL,
  `bankname` text NOT NULL,
  `txnmode` text NOT NULL,
  `txnamount` int(10) NOT NULL,
  `txncomments` text NOT NULL,
  `clientid` int(11) NOT NULL,
  PRIMARY KEY (`txnid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tbl_transactions VALUES("2","2016-08-31","12233","Bank Of Maharashtra","NetBanking","25000","Website Payment","6");
INSERT INTO tbl_transactions VALUES("3","2017-03-01","13456","Bank Of Maharashtra","NetBanking","40000","Website Payment","6");
INSERT INTO tbl_transactions VALUES("4","2017-09-27","14678","Bank Of Maharashtra","NetBanking","50000","Website Balance Amount Paid","6");
INSERT INTO tbl_transactions VALUES("6","2017-09-27","14678","Bank Of Maharashtra","NetBanking","30000","6 Websites renewal charges ","6");



DROP TABLE tbl_voicecalls;

CREATE TABLE `tbl_voicecalls` (
  `callsid` int(11) NOT NULL AUTO_INCREMENT,
  `nocalls` int(10) NOT NULL,
  `callsexpirydate` date NOT NULL,
  `clientid` int(10) NOT NULL,
  PRIMARY KEY (`callsid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;




DROP TABLE tbl_webappdev;

CREATE TABLE `tbl_webappdev` (
  `appid` int(10) NOT NULL AUTO_INCREMENT,
  `appname` text NOT NULL,
  `webappexpirydate` date NOT NULL,
  `clientid` int(11) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;




DROP TABLE tbl_websites;

CREATE TABLE `tbl_websites` (
  `websiteid` int(11) NOT NULL AUTO_INCREMENT,
  `domainname` text NOT NULL,
  `webspace` text NOT NULL,
  `noofemailds` int(11) NOT NULL,
  `expirydate` date NOT NULL,
  `clientid` int(11) NOT NULL,
  PRIMARY KEY (`websiteid`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

INSERT INTO tbl_websites VALUES("11","www.kikaleassociates.com","1GB","8","2019-01-04","9");
INSERT INTO tbl_websites VALUES("8","www.dkkkpmba.com","1GB","4","2018-08-31","6");
INSERT INTO tbl_websites VALUES("9","www.dkkkpbpp.com","1GB","4","2018-08-31","6");
INSERT INTO tbl_websites VALUES("12","www.dkkkpitikalamb.com","1GB","4","2018-08-31","6");
INSERT INTO tbl_websites VALUES("13","www.ihsdpsatara.com","1GB","1","2018-09-16","12");
INSERT INTO tbl_websites VALUES("14","www.constroqchecklab.com","1GB","2","2019-01-04","11");
INSERT INTO tbl_websites VALUES("15","www.dkkkpsvems.com","1GB","4","2018-08-31","6");
INSERT INTO tbl_websites VALUES("18","www.dkkkpjrclscikalamb.com","1GB","4","2018-08-31","6");
INSERT INTO tbl_websites VALUES("17","www.dkkkppgs.com","1GB","4","2018-08-31","6");
INSERT INTO tbl_websites VALUES("19","www.dkkkp.edu.in","1GB","2","2018-12-19","6");
INSERT INTO tbl_websites VALUES("21","www.chaitanyasangeetvidyalay.com","2GB","0","2017-08-27","15");
INSERT INTO tbl_websites VALUES("22","www.myyummyicecream.com","1GB","0","2019-02-01","16");
INSERT INTO tbl_websites VALUES("23","www.santchokhoba.com","1GB","0","2017-04-28","17");
INSERT INTO tbl_websites VALUES("24","www.saptarsheebooks.com","2GB","0","2017-08-19","18");
INSERT INTO tbl_websites VALUES("25","www.marthpari.org","1GB","0","2018-09-28","19");
INSERT INTO tbl_websites VALUES("28","www.vivahyog.in","1GB","2","2018-12-11","22");
INSERT INTO tbl_websites VALUES("37","www.incredibletechsolve.com","1GB","5","2018-07-07","40");
INSERT INTO tbl_websites VALUES("39","www.marwadegrampanchayat.com","200MB","0","2018-10-11","45");
INSERT INTO tbl_websites VALUES("40","www.santoshmane.in","800MB","0","2019-04-01","47");
INSERT INTO tbl_websites VALUES("41","www.kasturicollection.com","2GB","2","2019-02-03","48");



