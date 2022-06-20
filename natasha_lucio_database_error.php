<!DOCTYPE html>
<!-- Author: Natasha Lucio -->
<!-- Course: CSCI 4000-01 -->
<!-- Program Date: 4-26-2021 -->
<!-- Description: Question 2 Assignment 6 -->
<html lang="en"><!-- specifies language used by this document -->

<head>
	<title>natasha lucio&#39;s kung fu school</title>
	<meta charset="utf-8"><!-- character coding -->
	<link href="main.css" rel="stylesheet" type="text/css"><!-- link to external style sheet -->
</head>

<body>
	<header>
		<h1>natasha lucio kung fu school</h1>
	</header>

<main>
	<h1>Database Error</h1>
		<p>There was an error connecting to the database.</p>
		<p class="error">Error message: <?php echo $error_message; ?></p><!--displays error message
		referenced from natasha_lucio_database.php file-->
</main>

<footer><!--displays copyright with current year-->
	<p class="right">&copy; <?php echo date("Y"); ?>
	natasha lucio kung fu school</p>
</footer>

</body>
</html>