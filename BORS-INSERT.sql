DROP DATABASE IF EXISTS bors;
CREATE DATABASE IF NOT EXISTS bors;
USE bors;
DROP TABLE IF EXISTS STUDENT;
DROP TABLE IF EXISTS EDUCATION_HISTORY;
DROP TABLE IF EXISTS REGISTRATION;
DROP TABLE IF EXISTS GUARDIAN;
DROP TABLE IF EXISTS COURSE;

CREATE TABLE STUDENT(
	Learner_Ref_No INT NOT NULL PRIMARY KEY,
	First_Name VARCHAR(255),
	Middle_Name VARCHAR(255),
	Last_Name VARCHAR(255),
	Sex VARCHAR(6),
	Birth_Date DATE,
	Birth_Place VARCHAR(255),
	Land_Line VARCHAR(7),
	Email_Address VARCHAR(50),
	Cellphone_Number VARCHAR(11),
	House_Number VARCHAR(4),
	Building_Name VARCHAR(50),
	Street_Name VARCHAR(50),
	Village_Name  VARCHAR(50),
	Barangay_Name VARCHAR(50),
	City VARCHAR(50),
	ZIP_Code VARCHAR(5),
	Province VARCHAR(50),
	Country VARCHAR(50),
	CHECK ( Sex IN ('Male', 'Female'))
);

CREATE TABLE EDUCATION_HISTORY (
	Learner_Ref_No INT NOT NULL PRIMARY KEY,
	Previous_School VARCHAR(50),
	Current_School VARCHAR(50),
	Grade_Level_Attainment INT,
	FOREIGN KEY (Learner_Ref_No) REFERENCES STUDENT(Learner_Ref_No)
	ON DELETE CASCADE
);

CREATE TABLE REGISTRATION(
	Learner_Ref_No INT NOT NULL PRIMARY KEY,
	Date_of_Registration DATE,
	Grade_Level_Application INT,
	FOREIGN KEY (Learner_Ref_No) REFERENCES STUDENT(Learner_Ref_No)
	ON DELETE CASCADE
);

CREATE TABLE GUARDIAN(
	Learner_Ref_No INT,
	First_Name VARCHAR(255),
	Middle_Name VARCHAR(255),
	Last_Name VARCHAR(255),
	Sex VARCHAR(6),
	Relation_To_Student VARCHAR (50),
	Occupation VARCHAR(50),
	Email_Address VARCHAR(50),
	Cellphone_Number VARCHAR(11),
	FOREIGN KEY (Learner_Ref_No) REFERENCES STUDENT(Learner_Ref_No)
	ON DELETE CASCADE
);

CREATE TABLE COURSE(
	Course_Code VARCHAR(6) PRIMARY KEY,
	Course_Name VARCHAR(40),
	Grade_Level INT,
	Subject VARCHAR(40),
	CHECK( Subject IN ('English', 'Filipino', 'Math', 'Araling Panlipunan', 'Physical Education', 'Science'))
);

CREATE TABLE LOGIN_LOG(
	Username VARCHAR(255) PRIMARY KEY,
	Password VARCHAR(255)
);

INSERT INTO STUDENT
VALUES(12345, 'Robert', 'Evans', 'Downey', 'Male', '1970-09-10', 'Philippines', 
'9876543', 'rdowney@obf.ateneo.edu', '09263456789', '2', 'Avengers Tower',
'Broadway', 'NY Village', 'District 1', 'Quezon', '2456', 'NCR', 'Philippines');

INSERT INTO STUDENT
VALUES(23456, 'Chris', 'Laimbeer', 'Evans', 'Male', '1972-02-24', 'Philippines', 
'3567183', 'cevans@obf.ateneo.edu', '09170123457', '10', 'Avengers Bldg',
'Freedom St.', 'Kapayapaan Homes', 'Brgy. Wings', 'Quezon', '2456', 'NCR', 'Philippines');

INSERT INTO STUDENT
VALUES(34567, 'Vision', 'Soul', 'Stone', 'Male', '1992-11-27', 'Philippines', 
'7894321', 'vstone@obf.ateneo.edu', '09981230987', '11', 'Aerial Bldg.',
'Buhay St.', 'Avengers Village', 'Brgy. Digmaan', 'Quezon', '2456', 'NCR', 'Philippines');

INSERT INTO STUDENT
VALUES(45678, 'Peter', 'Junior', 'Parker', 'Male', '1999-01-14', 'Philippines', 
'8563475', 'pparker@obf.ateneo.edu', '09271298345', '32', 'Uncle Ben Bldg.',
'Spidey St.', 'Web Homes', 'Brgy. Bata', 'Marikina', '9876', 'NCR', 'Philippines');

INSERT INTO STUDENT
VALUES(56789, 'Thor', 'Son', 'Odin', 'Male', '1955-08-29', 'Philippines', 
'6547890', 'todin@obf.ateneo.edu', '09224561237', '45', 'Palace Bldg.',
'Hammer St.', 'Asgard Homes', 'Brgy. Asgard', 'Quezon', '2456', 'NCR', 'Philippines');

INSERT INTO EDUCATION_HISTORY
VALUES (12345,'Iron Academy','Barangka Elementary School',8);

INSERT INTO EDUCATION_HISTORY
VALUES (23456,'Shield University','Barangka Elementary School',9);

INSERT INTO EDUCATION_HISTORY
VALUES (34567,'Iron Academy','Barangka Elementary School',4);

INSERT INTO EDUCATION_HISTORY
VALUES (45678,'Spider School','Barangka Elementary School',1);

INSERT INTO EDUCATION_HISTORY
VALUES (56789,'Asgardian University','Barangka Elementary School',11);

INSERT INTO REGISTRATION
VALUES(12345, '2018-05-14', 9);

INSERT INTO REGISTRATION
VALUES(23456, '2018-05-12', 10);

INSERT INTO REGISTRATION
VALUES(34567, '2018-05-10', 5);

INSERT INTO REGISTRATION
VALUES(45678, '2018-05-11', 2);

INSERT INTO REGISTRATION
VALUES(56789, '2018-05-11', 12);

INSERT INTO GUARDIAN
VALUES(12345, 'Robby', 'Stark', 'Downey', 'Male', 'Father', 'Businessman', 'xd@xd.com', '09172312345');

INSERT INTO GUARDIAN
VALUES(23456, 'Samantha', 'Laimbeer', 'Evans', 'Female', 'Mother', 'Nurse', 'xd@xd.com', '09172312345');

INSERT INTO GUARDIAN
VALUES(34567, 'Toni', 'Stark', 'Stone', 'Female', 'Mother', 'Mechanic', 'xd@xd.com', '09172312345');

INSERT INTO GUARDIAN
VALUES(45678, 'Ben', 'Simmons', 'Parker', 'Male', 'Uncle', 'Carpenter', 'xd@xd.com', '09172312345');

INSERT INTO GUARDIAN
VALUES(56789, 'Odin', 'Heirlach', 'Odin', 'Male', 'Father', 'God', 'xd@xd.com', '09172312345');

INSERT INTO COURSE
VALUES('FIL08', 'Pakikipagtalastasan sa Filipino', '8', 'Filipino');

INSERT INTO COURSE
VALUES('MA09', 'Advanced Algebra','9','Math');

INSERT INTO COURSE
VALUES('AP10', 'Philippine History', '10', 'Araling Panlipunan');

INSERT INTO LOGIN_LOG
VALUES('admin', 'admin1');

INSERT INTO LOGIN_LOG
VALUES('student', 'student');