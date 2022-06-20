<?php
/************************************
Author: Natasha Lucio 
Course: CSCI 4000-01 
Program Date: 4-26-2021 
Description: Question 3 Assignment 6
************************************/

/*php code inserted before html so that values 
can be captured before anything else happens*/

//includes natasha_lucio_database.php file to this file
require_once('natasha_lucio_database.php');
$studentGPA = filter_input(INPUT_GET, 'studentGPA'); //variable that gets user input for GPA
//echo $studentGPA."<br>"; //for testing only


$query = 'SELECT * FROM student WHERE GPA>:studentGPA ORDER BY studentID';//query SELECT statement 
$statement = $db->prepare($query);//prepares a SQL statement
$statement->bindValue(':studentGPA', $studentGPA);//binds the user input as the variable for student GPA
$statement->execute();//executes a SQL statement
$students = $statement->fetchAll();//used to return all results 
?>



<h2>Student List (Students with GPAs higher than <?php echo $studentGPA; ?>):</h2>
<br><!--line break-->
<table style="width:100%"><!--creates a table-->
			<tr><!--table row-->
				<th>Student ID</th><!--table header-->
				<th>Name</th><!--table header-->
				<th>Email</th><!--table header-->
				<th>GPA</th><!--table header-->
				<!--<th></th>empty table header-->
			</tr><!--end table row-->
			
			<?php 
			foreach ($students as $student) ://beginning foreach to loop through student table
			?>
			
			<tr><!--table row-->
				<td><?php echo $student['studentID'];?></td><!--table data for studentID-->
				<td class="right"><?php echo $student['name'];?></td><!--table data for name-->
				<td class="right"><?php echo $student['email'];?></td><!--table data for email-->
				<td class="right"><?php echo $student['GPA'];?></td><!--table data for email-->
			</tr><!--end table row-->
			
			<?php
			endforeach;
			?>
			</table>
			<br><!--line break-->
			
