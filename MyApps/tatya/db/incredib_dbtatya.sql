DROP TABLE installment_register;

CREATE TABLE `installment_register` (
  `inst_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_id` int(11) NOT NULL,
  `inst_date` text NOT NULL,
  `inst_amount` double NOT NULL,
  PRIMARY KEY (`inst_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1 COMMENT='installment detail demo';

INSERT INTO installment_register VALUES("8","21","31/12/2014 ","40000");
INSERT INTO installment_register VALUES("9","19","05/01/2015","1000");
INSERT INTO installment_register VALUES("10","15","05/01/2015","500");
INSERT INTO installment_register VALUES("11","16","01/05/2015","200");
INSERT INTO installment_register VALUES("12","18","05/01/2015","300");
INSERT INTO installment_register VALUES("13","22","09/01/2015 ","2200");
INSERT INTO installment_register VALUES("14","16","01/12/2015 ","200");
INSERT INTO installment_register VALUES("15","15","12/01/2015 ","500");
INSERT INTO installment_register VALUES("16","18","12/01/2015 ","2000");
INSERT INTO installment_register VALUES("17","23","12/01/2015 ","1000");
INSERT INTO installment_register VALUES("18","19","12/01/2015 ","1000");
INSERT INTO installment_register VALUES("19","23","19/01/2015","1000");
INSERT INTO installment_register VALUES("20","16","01/19/2015","200");
INSERT INTO installment_register VALUES("21","19","19/01/2015","1000");
INSERT INTO installment_register VALUES("22","15","19/01/2015","500");
INSERT INTO installment_register VALUES("23","29","19/01/2015 ","5550");
INSERT INTO installment_register VALUES("24","24","13/01/2015","200");
INSERT INTO installment_register VALUES("25","24","20/01/2015 ","2000");
INSERT INTO installment_register VALUES("26","27","20/01/2015 ","45000");
INSERT INTO installment_register VALUES("27","16","26/01/2015","200");
INSERT INTO installment_register VALUES("28","37","26/01/2015","300");
INSERT INTO installment_register VALUES("29","15","26/01/2015","500");
INSERT INTO installment_register VALUES("30","38","26/01/2015","600");
INSERT INTO installment_register VALUES("31","19","26/01/2015","1000");
INSERT INTO installment_register VALUES("32","48","15/04/2015","10000");
INSERT INTO installment_register VALUES("33","55","2015-08-10","400");
INSERT INTO installment_register VALUES("34","55","","0");
INSERT INTO installment_register VALUES("35","55","2015-08-24","400");
INSERT INTO installment_register VALUES("36","52","2016-01-04","1000");
INSERT INTO installment_register VALUES("37","52","","0");
INSERT INTO installment_register VALUES("38","52","2016-01-04","1000");
INSERT INTO installment_register VALUES("39","52","2016-01-04","1000");



DROP TABLE members;

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO members VALUES("1","admin","admin@2014","system");
INSERT INTO members VALUES("2","Laxman","1486","Tatya");



DROP TABLE personal_book;

CREATE TABLE `personal_book` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Every one get uid',
  `per_name` text NOT NULL COMMENT 'name of a/c type',
  `per_add` text NOT NULL COMMENT 'address of',
  `per_mobile` varchar(12) NOT NULL COMMENT 'mobile number',
  `loan_amount` double NOT NULL,
  `loan_date` text NOT NULL,
  `loan_inst` text NOT NULL,
  `active` varchar(20) NOT NULL,
  PRIMARY KEY (`per_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1 COMMENT='Detail of every account';

INSERT INTO personal_book VALUES("13","javed darwajkar","dattu gali","9860175649","50000","2014-12-29","mahina 10%=5000","yes");
INSERT INTO personal_book VALUES("15","samadhan babar","doangar Gav Talu-mangalwedha","9665641404","4500","2014-12-29","10/hapte","no");
INSERT INTO personal_book VALUES("16","biru metkari","dogargavn","7741008763","1800","2014-12-29","10/hapte","yes");
INSERT INTO personal_book VALUES("18","aappa khule","killa bhag mangalwedha ","9890070792","3000","2014-12-29","A/300 somwar","no");
INSERT INTO personal_book VALUES("19","arun ramchandr murde","murde gali mangalwedha ","9028544978","10000","2014-12-29","10/hapte","no");
INSERT INTO personal_book VALUES("20","Aanna jadhav","dogargavn","9730154444","10000","2014-12-29","A/1000. somwar","yes");
INSERT INTO personal_book VALUES("21","ajay thengil","mangalwedha ","9405660000","500000","24/12/2014 ","A/40000 budhwar","no");
INSERT INTO personal_book VALUES("22","biru metkari","doangar Gav Talu-mangalwedha","7741008763","2000","03/01/2015 ","A/200, shaniwar","no");
INSERT INTO personal_book VALUES("23","shivaji shakarm khandekar","nagnewadi","9923512154","10000","06/01/2015 ","10/Hapte","no");
INSERT INTO personal_book VALUES("24","Onkar Bhagre","Dongargaw Rood","9860086100","20000","06/01/2015 ","A/2000.mangalwar","no");
INSERT INTO personal_book VALUES("25","Onkar Bhagre","Dongargaw Rood","9860086100","20000","06/01/2015 ","A/2000.mangalwar","no");
INSERT INTO personal_book VALUES("26","Onkar Bhagre","Dongargaw Rood","9860086100","20000","06/01/2015 ","A/2000.mangalwar","no");
INSERT INTO personal_book VALUES("27","ajay thengil","mangalwedha ","9405660000","40000","07/01/2015 ","A/4000/ budhwar","no");
INSERT INTO personal_book VALUES("28","pintu,babaso sahebraw jagtap","mangalwedha ","9730785555","1","08/01/2015 ","mahina 10%=20,000/","no");
INSERT INTO personal_book VALUES("29","sanju Langde","khomnal","9767018798","5000","12/01/2015 ","A/500. Raviwar","no");
INSERT INTO personal_book VALUES("30","onkar Aeknat bhagre","Dongargaw Rood","9860086100","20000","12/01/2015 ","A/2000.somwar","no");
INSERT INTO personal_book VALUES("31","mahesh shankar karande","shaniwar peth","9545388585","100000","12/01/2015 ","mahina 10% 10000/ waj katkarun dile","yes");
INSERT INTO personal_book VALUES("32","Shivaji sakharam khandekar","karkhana Rood. mangalwedha","9923512154","5000","13/01/2015 ","10/hapte,somwar","no");
INSERT INTO personal_book VALUES("33","jagdish manik Ranadive","mali Galli","9665974123","5000","10/01/2015 ","10/Hpte 500/Somwar","no");
INSERT INTO personal_book VALUES("34","dastagir shabir maner","Talsangi","9823408654","10000","19/01/2015","A/1000. somwar","no");
INSERT INTO personal_book VALUES("35","dastagir shabir maner","Talsangi","9823408654","10000","19/01/2015","A/1000. somwar","no");
INSERT INTO personal_book VALUES("36","dastagir shabir maner","Talsangi","9823408654","10000","19/01/2015","A/1000. somwar","no");
INSERT INTO personal_book VALUES("37","vikas namdev Avghde","sathenagar","7387305008","3000","20/01/2015 ","10/hapte,somwar","no");
INSERT INTO personal_book VALUES("38","shivaji madukar khankal","mudvi","9273199595","600","21/01/2015","10/hapte Somwar","yes");
INSERT INTO personal_book VALUES("39","Amar jadhav ","boarale Rasta","9860323742","50000","21/01/2015","Shukrwar 2000/ ghalun dene","no");
INSERT INTO personal_book VALUES("40","Arjun dattatray omne","Tukai nagr plot no 4","8087721014","100000","22/01/2015 ","mahina 5%=5000","yes");
INSERT INTO personal_book VALUES("41","Ankush baburav survase","Aadhalgav","8007746619","10000","22/01/2015 ","10/hapte Somwar","yes");
INSERT INTO personal_book VALUES("42","pankaj dhondapp maske","Dongargaw ","9096129669","2500","23/01/2015 ","A/250. shukrwar","no");
INSERT INTO personal_book VALUES("43","sanju goave","killa bhag mangalwedha ","9970647077","5000","24/01/2014 ","A/500/shaniwar ","yes");
INSERT INTO personal_book VALUES("44","dilip anant sathr","Ganeshwadi","7028598328","20000","27/01/2015 ","10/hapte,somwar","no");
INSERT INTO personal_book VALUES("45","dilip anant sathe","Ganeshwadi","7028598328","20000","27/01/2015 ","10/hapte,somwar","yes");
INSERT INTO personal_book VALUES("46","Dilip shamrav Aawghde","sathenagar","9860129053","5000","27/01/2015 ","10/hapte Somwar","no");
INSERT INTO personal_book VALUES("47","mahadev Toadkari","Talsangi","7066319926","2000","19/01/2015","A/200. somwar","no");
INSERT INTO personal_book VALUES("48","surykant chandrkant mali","doangargav","9823819718","100000","16/03/2015","mahina 10%=5000","no");
INSERT INTO personal_book VALUES("49","mahesh subhash wagmare","sathe nagar/santosh","9766534564","5000","18/03/2015","10/hapte Somwar","no");
INSERT INTO personal_book VALUES("50","shiva mhalapp shinde","shanti nagar mangalwedha ","7757864141","10000","23/03/2015","A/1000. somwar","no");
INSERT INTO personal_book VALUES("51","Aappa khule","Killay bhag","9890070792","2000","07/05/20145","A 200 /guruwar","no");
INSERT INTO personal_book VALUES("52","Santos Raot","chokaaera chuk","8888071123","10000","13/05/2015","10/hapte Somwar","yes");
INSERT INTO personal_book VALUES("53","umesh met mark /mane sir","doangargav","9130209058","25000","14/05/2015","A 2500/ u 5004","yes");
INSERT INTO personal_book VALUES("54","Sanhu gove","kills bhga","9970647077","5000","03/06/2015","8/3000/","no");
INSERT INTO personal_book VALUES("55","Dilip shamrow awghade","sathenagar","9860129053","4000","08/06/2015","10/hapte Somwar","yes");
INSERT INTO personal_book VALUES("56","Santos ankhs Randve","Parkham rood","9860960240","10000","11/06/2015","5% mahina","yes");
INSERT INTO personal_book VALUES("57","Sara Abdul rajbhahali","Sarah galli","8983808809","5000","25/06/2015","m% 500","yes");



DROP TABLE register;

CREATE TABLE `register` (
  `reg_id` int(11) NOT NULL,
  `comp_name` varchar(200) NOT NULL,
  `comp_add` varchar(200) NOT NULL,
  `owner_info` varchar(200) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` text NOT NULL,
  `vat_no` varchar(50) NOT NULL,
  `tin_no` varchar(50) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO register VALUES("111","Finance Pro","Mangalwedha","Mr.Tatya Kondubhairi","9890347134","abhijit.shinde22@gmail.com","www.incredibletechsolve.com","VAT200000000","TIN200000000");



