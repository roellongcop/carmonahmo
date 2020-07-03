DROP TABLE IF EXISTS hmo_about;

CREATE TABLE `hmo_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO hmo_about VALUES("1","name","Municipal Health Office - Carmona","0");
INSERT INTO hmo_about VALUES("2","history","Advancement\nWe\'re committed to setting ambitious goals and move healthcare and our communities forward\n\nInclusiveness\nEveryone working together collaboratively\n\nRespect\nIn our regard for, and actions toward, our communities, patients and each other\n\nResponsibility\nActing in honest, forthright and fiscally responsible ways","0");
INSERT INTO hmo_about VALUES("3","mission","The Mission of Reading Hospital is to provide compassionate, accessible, high quality, cost effective healthcare to the community; to promote health; to educate healthcare professionals; and to participate in appropriate clinical research.","0");
INSERT INTO hmo_about VALUES("4","vission","Reading Hospital will be an innovative, leading regional health system dedicated to advancing the health and transforming the lives of the people we serve through excellent clinical quality; accessible, patient-centered, caring service; and unmatched physician and employee commitment.","0");
INSERT INTO hmo_about VALUES("5","address","J.M. Loyola St. Brgy. 4 Carmona Cavite","0");
INSERT INTO hmo_about VALUES("6","contact number","(046) 430-3010","0");
INSERT INTO hmo_about VALUES("7","image_path","/resources/frontend/img/arms-care-check-905874.jpg","0");



DROP TABLE IF EXISTS hmo_activity;

CREATE TABLE `hmo_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `day` varchar(32) NOT NULL,
  `time` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO hmo_activity VALUES("1","CONSULTATION","this is sample text","Monday-Friday","8:00AM-5:00PM","0");
INSERT INTO hmo_activity VALUES("2","IMMUNIZATION/WELL BABY","","Wednesday","1:00PM","0");
INSERT INTO hmo_activity VALUES("3","PRENATAL","","Friday","8:00AM-5:00PM","0");
INSERT INTO hmo_activity VALUES("4","FAMILY PLANNING SEMINAR","","Tuesday","1:00PM","0");
INSERT INTO hmo_activity VALUES("5","PHYSICAL THERAPY CLINIC/ SPEECH/OT CLINIC","","Monday-Friday","8:00AM-5:00PM","0");
INSERT INTO hmo_activity VALUES("6","CLINICAL LABORATORY","","Monday-Friday","8:00AM-5:00PM","0");
INSERT INTO hmo_activity VALUES("7","DENTAL CLINIC","Description","Monday-Friday","8:00AM-5:00PM","0");
INSERT INTO hmo_activity VALUES("8","DOTS CLINIC","","Monday-Friday","8:00AM-5:00PM","0");
INSERT INTO hmo_activity VALUES("9","WATER LABORATORY","","Monday-Friday","8:00AM-5:00PM","0");
INSERT INTO hmo_activity VALUES("10","PHARMACY","","Monday-Friday","8:00AM-5:00PM","0");
INSERT INTO hmo_activity VALUES("11","HEALTH CARD/PERMIT/CERTIFICATES","","Monday-Friday","8:00AM-5:00PM","0");



DROP TABLE IF EXISTS hmo_appointment;

CREATE TABLE `hmo_appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `complaint_id` int(11) NOT NULL,
  `scheduled_date` date NOT NULL,
  `scheduled_time` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `notified` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO hmo_appointment VALUES("5","9","4","2018-12-15","","sample","2019-02-17 00:33:48","1","0");
INSERT INTO hmo_appointment VALUES("6","11","5","2018-12-28","","test","2019-02-17 00:33:48","1","0");
INSERT INTO hmo_appointment VALUES("8","16","5","2019-02-21","8:00 AM","lorem ipsum","2019-02-17 01:34:26","3","0");
INSERT INTO hmo_appointment VALUES("9","18","5","2019-03-15","8:00 AM","severe pain\n","2019-03-14 08:49:47","3","0");
INSERT INTO hmo_appointment VALUES("10","8","5","2019-08-24","3:00 PM","","2019-03-15 13:24:11","2","1");



DROP TABLE IF EXISTS hmo_archieve;

CREATE TABLE `hmo_archieve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_archieve` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




DROP TABLE IF EXISTS hmo_birthing;

CREATE TABLE `hmo_birthing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `chief_complaint` text NOT NULL,
  `start_of_pregnancy` date NOT NULL,
  `end_of_pregnancy` date NOT NULL,
  `guardian_name` varchar(128) NOT NULL,
  `guardian_civil_status` varchar(32) NOT NULL,
  `guardian_gender` tinyint(1) NOT NULL,
  `guardian_contact` varchar(32) NOT NULL,
  `guardian_age` tinyint(3) NOT NULL,
  `guardian_relationship` varchar(32) NOT NULL,
  `guardian_address` text NOT NULL,
  `date_added` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO hmo_birthing VALUES("1","8","sample test","2018-12-05","2019-04-25","werliza","2","2","092743734","35","2","pulido rest house","2018-12-03 02:32:10","0");
INSERT INTO hmo_birthing VALUES("2","9","asdasd","2018-12-13","2018-12-21","ad","2","1","wewqe","34","4","adasd","2018-12-08 19:12:30","0");
INSERT INTO hmo_birthing VALUES("3","8","sample test","2018-12-05","2019-04-25","werliza","2","2","092743734","35","2","pulido rest house","2018-12-03 02:32:10","0");



DROP TABLE IF EXISTS hmo_birthing_assessment;

CREATE TABLE `hmo_birthing_assessment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `assessment` text NOT NULL,
  `chief_complaint` text NOT NULL,
  `intervention` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO hmo_birthing_assessment VALUES("1","2","2018-12-08","qwe","qwe","qwe","0");
INSERT INTO hmo_birthing_assessment VALUES("2","1","2018-12-08","asdasd","sadasdsad","sadasdas","0");
INSERT INTO hmo_birthing_assessment VALUES("3","3","2018-12-08","qwe","qwe","qwe","0");
INSERT INTO hmo_birthing_assessment VALUES("4","1","2019-08-25","test","Test","Test","0");



DROP TABLE IF EXISTS hmo_birthing_intravenous_fluid;

CREATE TABLE `hmo_birthing_intravenous_fluid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `bag_no` int(11) NOT NULL,
  `solution` varchar(256) NOT NULL,
  `blood` varchar(256) NOT NULL,
  `time_started` time NOT NULL,
  `time_end` time NOT NULL,
  `remarks` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO hmo_birthing_intravenous_fluid VALUES("1","1","2018-12-08","123","123","123","03:22:00","15:23:00","12312","0");
INSERT INTO hmo_birthing_intravenous_fluid VALUES("2","1","2018-12-08","123","123","123","03:22:00","15:23:00","12312","0");



DROP TABLE IF EXISTS hmo_birthing_monitoring_sheet;

CREATE TABLE `hmo_birthing_monitoring_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `blood_pressure` varchar(32) NOT NULL,
  `pulse` varchar(32) NOT NULL,
  `respiration` varchar(32) NOT NULL,
  `urine_output` varchar(64) NOT NULL,
  `cvp_level` varchar(32) NOT NULL,
  `others` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO hmo_birthing_monitoring_sheet VALUES("1","1","2018-12-08","21","123","123","123","123","123","0");
INSERT INTO hmo_birthing_monitoring_sheet VALUES("2","1","2018-12-08","21","123","123","123","123","123","0");



DROP TABLE IF EXISTS hmo_birthing_newborn;

CREATE TABLE `hmo_birthing_newborn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `birthing_id` int(11) NOT NULL,
  `baby_name` varchar(128) NOT NULL,
  `date_delivered` date NOT NULL,
  `time_delivered` time NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `delivery_type` tinyint(1) NOT NULL,
  `weight` varchar(32) NOT NULL,
  `apgar_score` varchar(32) NOT NULL,
  `head_circumference` varchar(32) NOT NULL,
  `abdominal_circumference` varchar(32) NOT NULL,
  `chest_circumference` varchar(32) NOT NULL,
  `body_length` varchar(32) NOT NULL,
  `procedures` text NOT NULL,
  `medications` text NOT NULL,
  `remarks` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO hmo_birthing_newborn VALUES("1","1","qwewq","2018-12-14","14:33:00","1","1","321","32","321","123","123","123","123213","123123","13213","0");
INSERT INTO hmo_birthing_newborn VALUES("2","1","qwewq","2018-12-14","14:33:00","1","1","321","32","321","123","123","123","123213","123123","13213","0");



DROP TABLE IF EXISTS hmo_birthing_physician_order;

CREATE TABLE `hmo_birthing_physician_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `prescription` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO hmo_birthing_physician_order VALUES("1","1","2018-12-20","sdasdasd","0");
INSERT INTO hmo_birthing_physician_order VALUES("2","1","2018-12-20","sdasdasd","0");



DROP TABLE IF EXISTS hmo_birthing_weight_progress;

CREATE TABLE `hmo_birthing_weight_progress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `birthing_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `weight` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO hmo_birthing_weight_progress VALUES("1","1","2018-12-14","123","0");
INSERT INTO hmo_birthing_weight_progress VALUES("2","1","2018-12-14","100","0");



DROP TABLE IF EXISTS hmo_complaint;

CREATE TABLE `hmo_complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `department` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO hmo_complaint VALUES("1","TB","something is good","[\"1\",\"2\",\"8\"]","0");
INSERT INTO hmo_complaint VALUES("2","sample","sample","","0");
INSERT INTO hmo_complaint VALUES("3","dental","dental","","1");
INSERT INTO hmo_complaint VALUES("4","cancer warrior","lorem ipsum desktop","","0");
INSERT INTO hmo_complaint VALUES("5","Broken Legs","this is a test","","0");
INSERT INTO hmo_complaint VALUES("6","atritis","bone issue","","0");



DROP TABLE IF EXISTS hmo_dental;

CREATE TABLE `hmo_dental` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `chief_complaint` text DEFAULT NULL,
  `medical_history` text DEFAULT NULL,
  `dental_history` text DEFAULT NULL,
  `treatment` text DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `oral_condition` text NOT NULL,
  `dental_health` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO hmo_dental VALUES("1","8","2018-12-03","[\"Pain\",\"Decayed\",\"\"]","[\"Hypertension\",\"Epilepsy\",\"\"]","[\"Oral Prophylaxis\",\"RCT\",\"\"]","test","test","{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}","[{\"tooth_number\":\"28\",\"treatment\":\"PONTICS\"},{\"tooth_number\":\"61\",\"treatment\":\"PONTICS\"},{\"tooth_number\":\"37\",\"treatment\":\"PONTICS\"},{\"tooth_number\":\"15\",\"treatment\":\"PONTICS\"}]","0");
INSERT INTO hmo_dental VALUES("3","8","2018-12-03","[\"Pain\",\"Decayed\",\"\"]","[\"Hypertension\",\"Epilepsy\",\"\"]","[\"Oral Prophylaxis\",\"RCT\",\"\"]","test","test","{\"date\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"carries\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"gingivitis\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"pockets\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"debris\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"calculus\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"neoplasm\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_lip\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"cleft_palate\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"dmf\":[\"\",\"\",\"\",\"\",\"\",\"\"],\"others\":[\"\",\"\",\"\",\"\",\"\",\"\"]}","[{\"tooth_number\":\"28\",\"treatment\":\"PONTICS\"},{\"tooth_number\":\"61\",\"treatment\":\"PONTICS\"},{\"tooth_number\":\"37\",\"treatment\":\"PONTICS\"},{\"tooth_number\":\"15\",\"treatment\":\"PONTICS\"}]","0");



DROP TABLE IF EXISTS hmo_department;

CREATE TABLE `hmo_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO hmo_department VALUES("1","1","Birthing Department","sample","0");
INSERT INTO hmo_department VALUES("2","1","water laboratory department","sample","0");
INSERT INTO hmo_department VALUES("4","1","dental Department","sample","0");
INSERT INTO hmo_department VALUES("8","1","clinic laboratory","this is a test","0");
INSERT INTO hmo_department VALUES("9","1","Physical Medicine and Rehabilitation","this is a test","0");



DROP TABLE IF EXISTS hmo_dots;

CREATE TABLE `hmo_dots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `name_of_collection_unit` varchar(255) DEFAULT NULL,
  `date_of_request` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `age` int(11) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `telephone_number` int(11) DEFAULT NULL,
  `history_of_treatment` text DEFAULT NULL,
  `disease_classification` text DEFAULT NULL,
  `reason_for_examination` text DEFAULT NULL,
  `type_of_specimen` text DEFAULT NULL,
  `test_requested` text DEFAULT NULL,
  `specimen` text DEFAULT NULL,
  `date_of_collection` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO hmo_dots VALUES("2","8","12","2018-12-09 05:58:59","12","","22","[\"News\",\"Transfer-in\",\"Re-treatment\",\"\"]","[\"Extra-pulmonary\"]","[\"Diagnosis\"]","[\"Sputum\",\"\"]","[\"Xpert MTB\\/RIF\",\"Culture\"]","","");
INSERT INTO hmo_dots VALUES("3","8","121","2018-12-09 06:24:51","20","Female","212","[\"News\",\"Transfer-in\",\"\"]","[\"Extra-pulmonary\"]","[\"Diagnosis\",\"Follow-up\"]","[\"Sputum\",\"\"]","[\"Xpert MTB\\/RIF\",\"Culture\",\"DST\"]","","");
INSERT INTO hmo_dots VALUES("4","8","dasdsa","2019-02-18 11:03:49","16","2","21321","{\"others\":\"\"}","null","null","{\"others\":\"\"}","null","","");
INSERT INTO hmo_dots VALUES("5","12","asdas","2019-02-18 12:06:01","12","1","2312","{\"others\":\"\"}","null","null","{\"others\":\"\"}","null","","");



DROP TABLE IF EXISTS hmo_dots_opd_record;

CREATE TABLE `hmo_dots_opd_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dots_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bp` varchar(255) DEFAULT NULL,
  `wt` varchar(255) DEFAULT NULL,
  `pr` varchar(255) DEFAULT NULL,
  `rr` varchar(255) DEFAULT NULL,
  `t` varchar(255) DEFAULT NULL,
  `S` text DEFAULT NULL,
  `O` text DEFAULT NULL,
  `A` text DEFAULT NULL,
  `P` text DEFAULT NULL,
  `smoking_hx` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO hmo_dots_opd_record VALUES("2","2","2018-12-09 06:56:00","121","21","21","21","21","21","21","21","21","[\"21\",\"21\",\"21\",\"12\",\"12\",\"12\"]");
INSERT INTO hmo_dots_opd_record VALUES("3","2","2019-02-18 11:13:34","teest","dsa","dsd","ds","ds","dss","d","s","dsd","[\"s\",\"dsd\",\"ds\",\"ddsds\",\"d\",\"sd\"]");



DROP TABLE IF EXISTS hmo_dots_tb_treatment;

CREATE TABLE `hmo_dots_tb_treatment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dots_id` int(11) DEFAULT NULL,
  `tb_case_number` int(11) DEFAULT NULL,
  `region` text DEFAULT NULL,
  `name_of_dots_facility` text DEFAULT NULL,
  `bcg_scar` text DEFAULT NULL,
  `other_patient_details` text DEFAULT NULL,
  `diagnostic_test` text DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `history_of_anti_tb_drug_intake` text DEFAULT NULL,
  `bacteriological_status` text DEFAULT NULL,
  `classification_of_tb_disease` text DEFAULT NULL,
  `registeration_group` text DEFAULT NULL,
  `treatment_started` text DEFAULT NULL,
  `treatment_outcome` text DEFAULT NULL,
  `clinical_examination_before_and_during_treatment` text DEFAULT NULL,
  `dosage_and_preperation` text DEFAULT NULL,
  `date_the_card_was_opened` text DEFAULT NULL,
  `source_of_patient` text DEFAULT NULL,
  `house_hold_members` text DEFAULT NULL,
  `tb_disease_treatment_regimen` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO hmo_dots_tb_treatment VALUES("7","2","23","32","23","1","[\"23\",\"32\",\"32\",\"32\"]","{\"0\":\"23\",\"1\":\"2018-12-14\",\"2\":\"2018-12-18\",\"3\":\"2018-12-20\",\"4\":\"2323\",\"5\":\"3232\",\"months 0\":[\"2018-12-20\",\"\",\"\"],\"months 1\":[\"\",\"\",\"\"],\"months 2\":[\"\",\"\",\"\"],\"months 3\":[\"\",\"\",\"\"],\"months 4\":[\"\",\"\",\"\"],\"months 5\":[\"\",\"\",\"\"],\"months 6\":[\"\",\"\",\"\"],\"> months 7\":[\"\",\"\",\"\"]}","1","2","1","1","2","2018-12-19","2","{\"Date Examined\\/Results\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Weight in Kg.\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Unexplained fever > 2 wks\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Unexplained cough\\/wheezing > 2wks\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Unimproved general well being\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Poor Appetite\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Positive PE findings for Extra-pulmonary TB\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Side Effects\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]}","{\"Isoniazid (H) 10mg\\/kg (200mg\\/5ml)\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Rifampicin (R) 15mg\\/kg (200mg\\/5ml)\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Pyraninamide (Z) 30mg\\/kg (200mg\\/5ml)\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Ethambutol (E) 20mg\\/kg (400mg tab)\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Streptomycin (S) 15mg\\/kg (1g\\/vial)\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]}","","","","");
INSERT INTO hmo_dots_tb_treatment VALUES("8","2","111","test","tdsads","1","[\"\",\"\",\"\",\"\"]","{\"0\":\"\",\"1\":\"\",\"2\":\"\",\"3\":\"\",\"4\":\"\",\"5\":\"\",\"months 0\":[\"\",\"\",\"\"],\"months 1\":[\"\",\"\",\"\"],\"months 2\":[\"\",\"\",\"\"],\"months 3\":[\"\",\"\",\"\"],\"months 4\":[\"\",\"\",\"\"],\"months 5\":[\"\",\"\",\"\"],\"months 6\":[\"\",\"\",\"\"],\"> months 7\":[\"\",\"\",\"\"]}","2","1","1","1","1","2121-03-12","1","{\"Date Examined\\/Results\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Weight in Kg.\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Unexplained fever > 2 wks\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Unexplained cough\\/wheezing > 2wks\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Unimproved general well being\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Poor Appetite\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Positive PE findings for Extra-pulmonary TB\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Side Effects\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]}","{\"Isoniazid (H) 10mg\\/kg (200mg\\/5ml)\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Rifampicin (R) 15mg\\/kg (200mg\\/5ml)\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Pyraninamide (Z) 30mg\\/kg (200mg\\/5ml)\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Ethambutol (E) 20mg\\/kg (400mg tab)\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"],\"Streptomycin (S) 15mg\\/kg (1g\\/vial)\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]}","0111-11-11","2","{\"firstname\":[\"asdsa\",\"dsdsds\",\"\",\"\",\"\",\"\",\"\"],\"age\":[\"dsd\",\"sds\",\"\",\"\",\"\",\"\",\"\"],\"sex\":[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]}","{\"2HRZES\\/1HRZE\\/9HRE\":[\"EPTB, retx-CNS\\/bones or joint\"]}");



DROP TABLE IF EXISTS hmo_fecalysis;

CREATE TABLE `hmo_fecalysis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `color` varchar(256) NOT NULL,
  `consistency` varchar(256) NOT NULL,
  `pus_cells` varchar(256) NOT NULL,
  `red_cells` varchar(256) NOT NULL,
  `fat_globules` varchar(256) NOT NULL,
  `yeast_cells` varchar(256) NOT NULL,
  `bateria` varchar(256) NOT NULL,
  `starch_granules` varchar(256) NOT NULL,
  `muscle_fiber` varchar(256) NOT NULL,
  `vegetable_cells` varchar(256) NOT NULL,
  `parasite` text NOT NULL,
  `amoeba` text NOT NULL,
  `others` text NOT NULL,
  `date_created` date NOT NULL,
  `pathologist_id` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS hmo_hematology;

CREATE TABLE `hmo_hematology` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `hemoglobin` varchar(32) NOT NULL,
  `hematocrit` varchar(32) NOT NULL,
  `leokocyte` varchar(32) NOT NULL,
  `erythrocyte` varchar(32) NOT NULL,
  `reticulocyte` varchar(32) NOT NULL,
  `platelet` varchar(32) NOT NULL,
  `esr` varchar(32) NOT NULL,
  `bleeding_time` varchar(32) NOT NULL,
  `clotting_time` varchar(32) NOT NULL,
  `bands` varchar(32) NOT NULL,
  `segmenters` varchar(32) NOT NULL,
  `eosinophil` varchar(32) NOT NULL,
  `basophil` varchar(32) NOT NULL,
  `lymphocytes` varchar(32) NOT NULL,
  `monocytes` varchar(32) NOT NULL,
  `nucleated_rbc` varchar(64) NOT NULL,
  `malarial_smear` varchar(64) NOT NULL,
  `toxic_granulation` text NOT NULL,
  `blood_rh_type` text NOT NULL,
  `others` text NOT NULL,
  `pathologist_id` tinyint(1) NOT NULL,
  `date_created` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO hmo_hematology VALUES("1","8","1","213","67","6","5","65","6","6","564","5","45","6","5","65","56","5","5","65","65","65","65","1","2018-12-05","1");



DROP TABLE IF EXISTS hmo_medical;

CREATE TABLE `hmo_medical` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `assessment_date` date DEFAULT NULL,
  `chief_complaint` text DEFAULT NULL,
  `primary_diagnosis` varchar(256) DEFAULT NULL,
  `clinical_history` text DEFAULT NULL,
  `other_diagnosis` text DEFAULT NULL,
  `treatment` text NOT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO hmo_medical VALUES("1","8","2018-12-13","sample","test","test","test","test ","2018-12-04 11:54:03","0");
INSERT INTO hmo_medical VALUES("2","11","2018-12-21","Broken Legs","Test","test","Test","Test","2018-12-25 04:54:19","0");
INSERT INTO hmo_medical VALUES("3","8","2018-12-13","sample","test","test","test","test ","2018-12-04 11:54:03","0");



DROP TABLE IF EXISTS hmo_notification;

CREATE TABLE `hmo_notification` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `date_time` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO hmo_notification VALUES("1","8","You created an appointment","2018-12-03 09:27:43","1");
INSERT INTO hmo_notification VALUES("2","8","Your Reservation was approved","2018-12-03 09:31:04","1");
INSERT INTO hmo_notification VALUES("3","9","Your Reservation was approved","2018-12-05 10:13:11","1");
INSERT INTO hmo_notification VALUES("4","9","Youve created an appointment","2018-12-09 01:47:45","1");
INSERT INTO hmo_notification VALUES("5","9","Youve created an appointment","2018-12-09 01:52:13","1");
INSERT INTO hmo_notification VALUES("6","9","Youve created an appointment","2018-12-09 04:50:31","1");
INSERT INTO hmo_notification VALUES("7","11","You created an appointment","2018-12-25 03:52:52","1");
INSERT INTO hmo_notification VALUES("8","11","Your Reservation was approved","2018-12-25 03:53:59","0");
INSERT INTO hmo_notification VALUES("9","8","Your Reservation was approved","2019-01-02 12:03:16","1");
INSERT INTO hmo_notification VALUES("10","1","Youve created an appointment","2019-01-02 12:23:08","1");
INSERT INTO hmo_notification VALUES("11","16","You created an appointment","2019-02-17 09:34:26","0");
INSERT INTO hmo_notification VALUES("12","18","You created an appointment","2019-03-14 16:49:47","1");
INSERT INTO hmo_notification VALUES("13","19","You created an appointment","2019-03-15 21:24:11","0");
INSERT INTO hmo_notification VALUES("14","9","You created an appointment","2019-03-17 09:34:02","0");
INSERT INTO hmo_notification VALUES("15","1","Anna K. Behrensmeyercreated an appointment","2019-03-17 09:34:02","1");
INSERT INTO hmo_notification VALUES("16","8","You created an appointment","2019-08-22 20:08:41","1");
INSERT INTO hmo_notification VALUES("17","1","Annabelle Gernale Test created an appointment","2019-08-22 20:08:41","1");
INSERT INTO hmo_notification VALUES("18","8","You created an appointment","2019-08-22 20:45:08","1");
INSERT INTO hmo_notification VALUES("19","1","Annabelle Gernale Test created an appointment","2019-08-22 20:45:08","1");
INSERT INTO hmo_notification VALUES("20","8","You created an appointment","2019-08-22 20:45:55","1");
INSERT INTO hmo_notification VALUES("21","1","Annabelle Gernale Test created an appointment","2019-08-22 20:45:55","1");
INSERT INTO hmo_notification VALUES("22","8","You created an appointment","2019-08-22 20:46:24","1");
INSERT INTO hmo_notification VALUES("23","1","Annabelle Gernale Test created an appointment","2019-08-22 20:46:25","1");
INSERT INTO hmo_notification VALUES("24","8","You created an appointment","2019-08-22 20:47:02","1");
INSERT INTO hmo_notification VALUES("25","1","Annabelle Gernale Test created an appointment","2019-08-22 20:47:02","1");
INSERT INTO hmo_notification VALUES("26","16","Your Reservation was cancel <br> because of ","2019-08-22 21:17:19","0");
INSERT INTO hmo_notification VALUES("27","16","Your Reservation was cancel <br> because of ","2019-08-22 21:17:35","0");
INSERT INTO hmo_notification VALUES("28","16","Your Reservation was cancel <br> because of asdasd","2019-08-22 21:17:37","0");
INSERT INTO hmo_notification VALUES("29","16","Your Reservation was cancel <br> because of asdasd","2019-08-22 21:18:16","0");
INSERT INTO hmo_notification VALUES("30","16","Your Reservation was cancel <br> because of asdasd","2019-08-22 21:18:21","0");
INSERT INTO hmo_notification VALUES("31","8","Your Reservation was cancel <br> because of test","2019-08-22 21:19:33","1");
INSERT INTO hmo_notification VALUES("32","8","Your Reservation was cancel <br> because of Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.","2019-08-22 21:20:31","1");
INSERT INTO hmo_notification VALUES("33","8","Your Reservation was cancel <br> because of test","2019-08-22 21:30:36","1");
INSERT INTO hmo_notification VALUES("34","8","Your Reservation was cancel <br> because of Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.","2019-08-22 21:31:33","1");
INSERT INTO hmo_notification VALUES("35","8","Your Reservation was cancel <br> because of because of the typhoon","2019-08-22 21:51:25","1");
INSERT INTO hmo_notification VALUES("36","8","Your Reservation was cancel <br> because of test","2019-08-22 21:52:34","1");
INSERT INTO hmo_notification VALUES("37","8","Your Reservation was cancel <br> because of test","2019-08-22 21:53:11","1");
INSERT INTO hmo_notification VALUES("38","8","Your Reservation was cancel <br> because of test","2019-08-22 21:54:25","1");
INSERT INTO hmo_notification VALUES("39","8","Your Reservation was cancel <br> because of test","2019-08-22 21:54:29","1");
INSERT INTO hmo_notification VALUES("40","8","Your Reservation was cancel <br> because of qweqwe","2019-08-22 21:54:32","1");
INSERT INTO hmo_notification VALUES("41","8","Your Reservation was cancel <br> because of asda","2019-08-22 21:55:43","1");
INSERT INTO hmo_notification VALUES("51","8","Your Appointment was scheduled tommorrow. <br>Don\'t be late","2019-08-25 15:30:33","0");



DROP TABLE IF EXISTS hmo_physical;

CREATE TABLE `hmo_physical` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `occupation` varchar(256) NOT NULL,
  `diagnosis` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `bp` varchar(32) NOT NULL,
  `pr` varchar(32) NOT NULL,
  `rr` varchar(32) NOT NULL,
  `temp` varchar(32) NOT NULL,
  `wt` varchar(32) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO hmo_physical VALUES("1","8","453","34534","2018-12-09","00:00:00","6","76","7","67","67","1");
INSERT INTO hmo_physical VALUES("2","8","dsad","sdasdas","1211-12-12","13:21:00","dsad","sd","dsd","sdssd","sd","1");



DROP TABLE IF EXISTS hmo_urinalysis;

CREATE TABLE `hmo_urinalysis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `color` varchar(256) NOT NULL,
  `reaction` varchar(256) NOT NULL,
  `transparency` varchar(256) NOT NULL,
  `specific_gravity` varchar(256) NOT NULL,
  `albumin` varchar(256) NOT NULL,
  `sugar` varchar(256) NOT NULL,
  `ketone` varchar(256) NOT NULL,
  `amorphus_urates` varchar(256) NOT NULL,
  `amorphus_phosphates` varchar(256) NOT NULL,
  `calcium_oxalates` varchar(256) NOT NULL,
  `uric_acid` varchar(256) NOT NULL,
  `triple_phosphates` varchar(256) NOT NULL,
  `hyaline` varchar(256) NOT NULL,
  `fine_granular` varchar(256) NOT NULL,
  `coarse_granular` varchar(256) NOT NULL,
  `wbc_casts` varchar(256) NOT NULL,
  `rbc_casts` varchar(256) NOT NULL,
  `waxy` varchar(256) NOT NULL,
  `pus_cells` varchar(256) NOT NULL,
  `red_blood_cells` varchar(256) NOT NULL,
  `ephithelial_cells` varchar(256) NOT NULL,
  `yeast_cells` varchar(256) NOT NULL,
  `renal_ephithelial_cells` varchar(256) NOT NULL,
  `mocous_threads` varchar(256) NOT NULL,
  `bacteria` text NOT NULL,
  `pregnancy_test` varchar(256) NOT NULL,
  `pathologist_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO hmo_urinalysis VALUES("2","8","1","32412","7","676","76","78","67","67","67","67","678","678","6","786","76","7","678","67","67","76","786","76","868","76","6","76","76","1","2018-12-05","0");



DROP TABLE IF EXISTS hmo_user;

CREATE TABLE `hmo_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(128) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `age` tinyint(3) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` text DEFAULT NULL,
  `educational_attainment` tinyint(1) DEFAULT NULL,
  `employment_status` tinyint(1) DEFAULT NULL,
  `civil_status` tinyint(1) DEFAULT NULL,
  `dswd_nhtsmember` varchar(128) DEFAULT NULL,
  `family_household_number` int(16) DEFAULT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `authkey` varchar(10) NOT NULL,
  `access_token` varchar(256) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO hmo_user VALUES("1","John_Doe_luvena","1","32","1987-01-13","20_30_San Jose_Gma_Cavite","1","1","1","123","23123","bambam","$2y$13$u1vWwKnuoNK3cSOdEq8cVuhXGYS9CWyG..Nsivm6GoIwX7MWemz1.","SXCFRIUTII","PhlsqVFOje","2","0");
INSERT INTO hmo_user VALUES("8","annabelle_gernale_test","2","20","1998-06-17","pulido GMA","1","1","1","437643292","7493632","annabelle","$2y$13$TQAeVWGD46y/40//JoXL0urv7wk2BtqBqw9SENt6h5X6G.ubK1lyq","6GYIG8IDFP","eWy1Yvo6WH","0","0");
INSERT INTO hmo_user VALUES("9","Anna_K._Behrensmeyer","2","20","1998-06-17","pulido GMA","1","1","1","55657","749363223","roel","$2y$13$I6udiUhBkNIKt51K8DjNqeRU0qi5HRhcLAE17PJgezeieyHBnfAeu","ZJAMUGD9ZG","UkvvYx2esy","0","0");
INSERT INTO hmo_user VALUES("10","Blaise_T_Pascal","1","31","1987-02-04","carmona","1","1","2","123123","2147483647","Assistant","$2y$13$yQjLf40qCUYZo4dFS6I7E.fNTU.YwPO46wokBhrlM74L21VbXZVnK","74QU6HFK5A","pokoZsFJRh","1","0");
INSERT INTO hmo_user VALUES("11","Cecilia_Payne_Gaposchkin","1","0","2018-12-19","qweqwe","1","1","1","321321","213123","2tr5kt","$2y$13$APYPJC75RVKRlpWg7qKQj.MHCd.pWvob3fCPlskp0M8t8ZoAMTFjG","SMYBBUF966","0Ear4Us08U","0","0");
INSERT INTO hmo_user VALUES("12","Chien_Shiung_Wu","1","0","2019-01-25","zxc","1","1","2","3213123","3213123","hey0eo","$2y$13$fRErKdimZeR.hLQQrfKfFus9yU8Dcyk9P.EgELUtuxpQZy6ofTIgm","PJIPPNMLWG","-1VJRk8_Rd","0","0");
INSERT INTO hmo_user VALUES("13","Dorothy_G_Hodgkin","1","43","1975-02-11","gfdg","1","1","3","32131234324","231123","abvtqi","$2y$13$eoqJfPMuMektceVGsfQvC.P0aibOtMJwobrKDY9OvJnuNfVov64R2","B2HAIB6YRP","J29JkoyYoK","0","0");
INSERT INTO hmo_user VALUES("14","Edmond_F_Halley","1","43","1975-02-11","gfdg","1","1","3","32131232323","2147483647","phi1bq","$2y$13$yDXLrXy.xIovp6yNs6adlOsqGv8YEDT37qCRuIX0opgEzCMDZ8G.2","2DZU2HXHBT","GXzhVDkfzv","0","0");
INSERT INTO hmo_user VALUES("15","Edwin_Powell_Hubble","1","43","1975-02-11","gfdg","1","1","3","321312232312","23112332","jy4w5s","$2y$13$62C8LZJR1uOY8BJucIfiDe.Devvolaphr/e5l8b0L9BN2jbj/y07C","M_CUEPLT-N","K1yLl_09mm","0","0");
INSERT INTO hmo_user VALUES("16","john_estrada_luvena","1","14","2005-02-08","roel","1","1","2","213123213","123123123","njdkd4","$2y$13$zKDbS.x64TwA9rA.s2AJPuvC58gPSSMzd4Iw2dDTXv5p1.QWY6wZy","HEM97GUNEV","H3j1qqkwYA","0","0");
INSERT INTO hmo_user VALUES("17","luicito_ramon_hernandez","1","16","2002-03-14","18_29_san jose_gma_cavite","2","1","1","56789","5678","bfsbaj","$2y$13$xpe.kJXw8/oPzdLUfXF5reoHLG26m0e7ejJXETtq7JKLGP7wXf5Wy","6UILQ9TPY0","HFZFCeP9u6","0","0");



DROP TABLE IF EXISTS hmo_water_lab;

CREATE TABLE `hmo_water_lab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `sampling_collected_by` varchar(255) DEFAULT NULL,
  `sampling_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sampling_point` text DEFAULT NULL,
  `specify_address_sampling_point` text DEFAULT NULL,
  `source_of_water_supply` text DEFAULT NULL,
  `type_of_ownership` text DEFAULT NULL,
  `type_of_well` text DEFAULT NULL,
  `well_usage` text DEFAULT NULL,
  `pump_required_priming` text DEFAULT NULL,
  `repair_done_within_2_months` text DEFAULT NULL,
  `water_treated` text DEFAULT NULL,
  `distance_from_well_of_the_following_in_meter` text DEFAULT NULL,
  `analysis_requested` text DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `location_of_well` text DEFAULT NULL,
  `received_by` varchar(255) DEFAULT NULL,
  `date_time` text DEFAULT NULL,
  `labaratory_no` int(11) DEFAULT NULL,
  `parameters_to_be_examined` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `result` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO hmo_water_lab VALUES("1","9","232","2019-02-18 10:26:05","[\"Tank\",\"House Faucet\"]","2312","[\"River\",\"Lake\",\"Spring Developed\"]","[\"Private\",\"Public\"]","[\"DUG\"]","[\"New (Not yet in use) \",\"Recent (in use less than 3 months) \"]","[\"Yes\"]","[\"None\",\"Pump\"]","[\"Yes\"]","[\"Privy\",\"Septic Tank\",\"Cesspool\"]","[\"BACTERIOLOGICAL\",\"BIOLOGICAL\"]","213","213","213","2018-12-21","123","123213","0","0");



