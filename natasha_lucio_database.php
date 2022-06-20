<?php
/*Author: Natasha Lucio 
Course: CSCI 4000-01 
Program Date: 4-26-2021 
Description: Question 2 Assignment 6*/

//connects to MYSQL database named "natasha_lucio_assignment_db"
$dsn = 'mysql:host=localhost;dbname=natasha_lucio_assignment_db';
$username = 'natashaweb';
$password = 'natashachocolate';

try //try statements for any statement that might throw an exception
{
	$db = new PDO($dsn, $username, $password); //creates PDO object
	//echo "Successful in connecting to database <br>\n";//for testing only
} 
catch (PDOException $e) //catch statement to execute error message if an exception is thrown
{
	$error_message = $e->getMessage();
	//echo $error_message;//for testing only
	include('natasha_lucio_database_error.php'); /*include natasha_lucio_database_error.php
	file to see error displayed nicely with CSS style */
	exit();
}
?>

