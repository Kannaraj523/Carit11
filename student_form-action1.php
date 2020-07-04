<!DOCTYPE html>
<html>
<head>
	<title>Thank you for submitting the details </title>
</head>

<body>
    
	<h1>This page processes data submitted from 
		<a href="app.php">app.php</a></h1>
    <h1> Thank you for submitting the details : Below are the details submitted by you ! </h1>
	<p>Student Name: <?php echo $_POST["personname"]?></p>
	<p>KSU ID : <?php echo $_POST["ksuid"]?></p>
	<p>Mail ID : <?php echo $_POST["mailid"]?></p>
    <p>Status : <?php echo $_POST["education"]?></p>
	<p>Alerts Needed: <?php echo $_POST["alert"]?></p>
    <p>Semesters enrolled for : <?php echo $_POST["sem"]?></p>

</body>

</html>