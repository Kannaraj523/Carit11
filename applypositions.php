<!DOCTYPE html>
<html lang="en">

<head>
    <title> Center for Applied Research in Information Technology</title>
    <link rel="stylesheet" type="text/css" href="ss1.css" />

</head>

<body>
    <div class="mylogo">
    <?php include("logo.htm");?>

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
        In order to be considered for the positions students needs to meet certain criteria . You can check you elibibilty by giving your details below
        .Do not loose this wornderful oppurtunity !!<br>
    </p>
    <div id="h1">
    <h2>
        Follow below steps to verify your eligibility 
    </h2>
    </div>
    <div class="faculty">
    <ul>
        <li> Select the status from the drop down</li>
        <li> Provide your gradings for the courses displayed.</li>
        <li> Click on the evaluate button </li>
    </ul>
    </div>
    <div class="">

        <p1>Student Status</p1>
    
        <select id="mySelect" onchange='function1(this.value)'>
    
        <option value="0">Select your status</option>
        <option value="1">Under Graduate</option>
    
        <option value="2">Graduate</option>
    
        </select>
    </div>
      
  
         <label id ="course"><h3>Your Courses</h3></label>
  
    <div id = "grades">
      <span> <label id="course1"></label> </span> <span><label id="gpalb1"></label></span>
  
      <select id="gpa1">
  
      <option value="4">A</option>
  
      <option value="3">B</option>
  
      <option value="2">C</option>
  
      <option value="1">D</option>
  
      <option value="0">F</option>
  
      </select><br>
  
        
      <span> <label id="course2"></label> </span> <span><label id="gpalb2"></label></span>
  
      
      <select id="gpa2">
  
      <option value="4">A</option>
  
      <option value="3">B</option>
  
      <option value="2">C</option>
  
      <option value="1">D</option>
  
      <option value="0">F</option>
  
      </select>
  
      <br>
  
        
      <span> <label id="course3"></label> </span> <span><label id="gpalb3"></label></span>
  
      <select id="gpa3">
  
      <option value="4">A</option>
  
      <option value="3">B</option>
  
      <option value="2">C</option>
  
      <option value="1">D</option>
  
      <option value="0">F</option>
  
      </select>
  
      <br>
  
        
      <span> <label id="course4"></label> </span> <span><label id="gpalb4"></label></span>
  
      <select id="gpa4">
  
      <option value="4">A</option>
  
      <option value="3">B</option>
  
      <option value="2">C</option>
  
      <option value="1">D</option>
  
      <option value="0">F</option>
  
      </select>
  
      <br>
  
      <span> <label id="course5"></label> </span> <span><label id="gpalb5"></label></span>
  
      <select id="gpa5">
  
      <option value="4">A</option>
  
      <option value="3">B</option>
  
      <option value="2">C</option>
  
      <option value="1">D</option>
  
      <option value="0">F</option>
  
      </select>

      </div>
      <br>
  
      <br>
  
      </form>
  
        
      <button type="button" onclick="eval()">Evaluate</button><br>
      <p id="UnderGrad_GPA" ></p>
      <p id="Grad_GPA"></p>
      <div id ="cong">  
      <label id="message" for="chk2"></label>
      <br>
      <a href="app.php" id = "link" style ="visibility: hidden" >Click here to Apply!</a>
     </div>
    
        <script src="Javascripts/rd1.js"></script>
        <div id="footer">
        <?php include('footer.htm');?>
        
        </div>

</body>
</html>
