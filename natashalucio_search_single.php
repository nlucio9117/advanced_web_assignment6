<?php
/************************************
Author: Natasha Lucio 
Course: CSCI 4000-01 
Program Date: 4-26-2021 
Description: Question 4 Assignment 6
************************************/

/*php code inserted before html so that values 
can be captured before anything else happens*/

//includes natasha_lucio_database.php file to this file
require_once('natasha_lucio_database.php');
$studentID = filter_input(INPUT_GET, 'studentID'); //variable that gets user input for student id
//cho $studentID."<br>"; //for testing only


$query = 'SELECT * FROM student WHERE studentID = :studentID';//query SELECT statement 
$statement = $db->prepare($query);//prepares a SQL statement
$statement->bindValue(':studentID', $studentID, PDO::PARAM_STR);//binds the user input as the variable for student id
$statement->execute();//executes a SQL statement
$students = $statement->fetchAll();//used to return all results 

?>


