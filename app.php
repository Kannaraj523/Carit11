<!DOCTYPE html>
<html lang="en">

<head>
    <title> Center for Applied Research in Information Technology</title>
    <link rel="stylesheet" type="text/css" href="ss1.css" />
    <style> 
    .error{color :#FF0000;}
    </style>
</head>

<body>

    <div class="mylogo">
    <?php include ("php_reusable_comp\logo.php"); ?>
    </div>
    
    <div id="h1">
        <h1> Center for Applied Research in Information Technology (CARIT) </h1>

    </div>
    <div>
        <div class="topnav">
        <?php include('menu_apply.php');?>
        </div>
    </div>
    <div class="faculty">
    <p>
        Welcome to the Center for Applied Research in Information Technology (CARIT) website. There are 4 <b>student assistant positions </b>open.
        In order to be considered for the positions students needs to meet certain criteria . You can check you elibibilty by giving your details below
        .Do not loose this wornderful oppurtunity !!<br>
    </p>
    
    <div id="cong">
        <p>
        Congratulations on your selection for the Graduate assistance program. 
        Please fill in the details needed for this position.
        </p>
    </div>
        <h2>Student Profile</h2>
    <form name="profile" method="post" action="student_form-action1.php <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table width="500" border="0">
    <tr> 
      <td width="150" bgcolor="#99CCFF"><strong>Name</strong></td>
      <td><input type="text" name="personname" size="20" maxlength="20" /></td>
    </tr>
    <tr> 
      <td width="150" bgcolor="#99CCFF"><strong>KSU ID</strong></td>
      <td><input type="text" name="ksuid" size="20" maxlength="20" /></td>
    </tr>
    <tr> 
      <td width="150" bgcolor="#99CCFF"><strong>Email id</strong></td>
      <td><input type="text" name="mailid" size="20" maxlength="20" /></td>
    </tr>
    
    <tr> 
      <td bgcolor="#99CCFF"><strong>Status</strong></td>
      <td><input type="radio" name="education" value="Graduate" />
        Graduate
        <input type="radio" name="education" value="Undergraduate" checked="checked"/>
        UnderGraduate
    </tr>
    <tr> 
      <td bgcolor="#99CCFF"><strong>Email Alerts</strong></td>
      <td><input type="checkbox" name="alert" value="Yes" />
        Need Email Alerts? </td>
    </tr>
    <tr> 
      <td bgcolor="#99CCFF"><strong>Semesters</strong></td>
      <td><select name="sem">
          <option value="FALL">Fall 2020</option>
          <option value="SPRING" selected="selected">Spring 2021</option>
          <option value="SUMMER">Summer 2020</option>
        </select></td>
    </tr>
  </table>
 <?php 
 // defining variables and settting them to empty values 



  <p>
    <input type="submit" value="Submit" />
  </p>
  </form>

   <div id ="footer">
       <?php include('footer.php');?> 
    </div>
    </body>
    </html>
