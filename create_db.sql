-- Author: Natasha Lucio --
-- Course: CSCI 4000-01 --
-- Program Date: 4-26-2021 --
-- Description: Question 1 Assignment 6 --




-- to create and select the database --
DROP DATABASE IF EXISTS natasha_lucio_assignment_db;
CREATE DATABASE natasha_lucio_assignment_db;
USE natasha_lucio_assignment_db;  

-- create table(s) and data elements --
CREATE TABLE student 
(
  studentID		INT(12)			NOT NULL	AUTO_INCREMENT,
  name     		VARCHAR(255)   	NOT NULL,
  email			VARCHAR(255)	NOT NULL	UNIQUE,
  GPA			DECIMAL(4,2)	NOT NULL,
  PRIMARY KEY (studentID)
);

-- insert data into the database --
INSERT INTO student VALUES
(1, 'PO BLACK', 'poblack@gmail.com', '3.51'),
(2, 'SHIFU HOFFMAN', 'shifuhoffman@gmail.com', '2.52'),
(3, 'TIGRESS JOLIE', 'tigressjolie@gmail.com', '3.63'),
(4, 'JENNIFER YUH', 'jenniferyuh@gmail.com', '1.44'),
(5, 'OX STORMING', 'oxstorming@gmail.com', '3.95'),
(6, 'MONKEY CHAN', 'monkeychan@gmail.com', '4.00'),
(7, 'VIPER LIU', 'viperliu@gmail.com', '2.37'),
(8, 'MANTIS ROGEN', 'mantisrogen@gmail.com', '3.29'),
(9, 'CRANE CROSS', 'cranecross@gmail.com', '3.72'),
(10, 'OOGWAY KIM', 'oogway@gmail.com', '1.53'),
(11, 'PING HONG', 'pinghong@gmail.com', '2.52');


-- create the user and grant priveleges to user --
GRANT SELECT, INSERT, UPDATE, DELETE
ON natasha_lucio_assignment_db.*
TO natashaweb@localhost
IDENTIFIED BY 'natashachocolate';
