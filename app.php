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
    <?php include ("logo.htm"); ?>
    </div>
    
    <div id="h1">
        <h1> Center for Applied Research in Information Technology (CARIT) </h1>

    </div>
    <div>
        <div class="topnav">
        <?php include('menu_apply.htm');?>
        </div>
    </div>
    <div class="faculty">
    <p>
        Welcome to the Center for Applied Research in Information Technology (CARIT) website. There are 4 <b>student assistant positions </b>open.
        
        <br>
    </p>
    
    <div id="cong">
        <p>
        Congratulations on your selection for the Graduate assistance program. 
        Please fill in the details needed for this position.
        </p>
    </div>
  <?php include ('action1.php') ?>

  <h2>Student Profile</h2>
        
  <p><span class = "error">* required field.</span></p>
    <form name="profile" method="post" action="student_form-action1.php">

    
         <table width="500" border="0">
    <tr> 
        <td width="150" bgcolor="#99CCFF"><strong>Name</strong></td>
      <td><input type="text" pattern="[a-z A-Z]+" title="Enter your name" name="personname" required size="20" maxlength="20" >
         <span class = "error">* <?php echo $nameErr;?></span>
      </td>
    </tr>
    <tr> 
      <td width="150" bgcolor="#99CCFF"><strong>KSU ID</strong></td>
      <td><input type="text" pattern="[0-9]{9}" name="ksuid" title="9 Digit KSUID"required size="20" maxlength="20" />
      <span class = "error">* <?php echo $ksuidErr;?></span></td>
    </tr>
      <tr> 
      <td width="150" bgcolor="#99CCFF"><strong>Email id</strong></td>
      <td><input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter your email ID: Eg: name@domain.com"name="mailid" required size="20" maxlength="20" />
      <span class = "error">* <?php echo $emailErr;?></span></td>
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
  <p>
    <input type="submit" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" value="Submit" />
  </p>
  
   <div id ="footer">
       <?php include('footer.htm');?> 
    </div>
    </body>
    </html>

