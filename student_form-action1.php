<!DOCTYPE html>
<html>
<head>
	<title>Thank you for submitting the details </title>
</head>

<body>
    
	<h1>This page processes data submitted from 
	<a href="app.php">app.php</a></h1>
	
     
	<table title =" User values " width="500" border="10">
    <tr> 
        <td width="150" bgcolor="#99CCFF"><strong>Student Name</strong></td>
      <td width ="150" bgcolor="#f7ee9c"> <?php echo $_POST["personname"]?> </td>
    </tr>
	<tr> 
        <td width="150" bgcolor="#99CCFF"><strong>KSU ID</strong></td>
      <td width ="150" bgcolor="#f7ee9c"> <?php echo $_POST["ksuid"]?> </td>
    </tr>
	<tr> 
        <td width="150" bgcolor="#99CCFF"><strong>Email ID</strong></td>
      <td width ="150" bgcolor="#f7ee9c"> <?php echo $_POST["mailid"]?> </td>
    </tr>
	<tr> 
        <td width="150" bgcolor="#99CCFF"><strong>Status</strong></td>
      <td width ="150" bgcolor="#f7ee9c"> <?php echo $_POST["education"]?> </td>
    </tr>
	<tr> 
        <td width="150" bgcolor="#99CCFF"><strong>Alert Needed?</strong></td>
      <td width ="150" bgcolor="#f7ee9c"> <?php echo $_POST["alert"]?> </td>
    </tr>
	<tr> 
        <td width="150" bgcolor="#99CCFF"><strong>Semester enrolled for</strong></td>
      <td width ="150" bgcolor="#f7ee9c"> <?php echo $_POST["sem"]?> </td>
    </tr>

  </table>
  <span><a href="applypositions.php">Go Back</a></span>


</body>

</html>