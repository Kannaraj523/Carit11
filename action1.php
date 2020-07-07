
<?php
// defining variables and settting them to empty values 
  $nameErr = $emailErr = $alertErr = $semErr =$ksuidErr="";
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {
  if (empty($_POST["personname"])) 
  {
    $nameErr = "Name is required";
  }
  else 
  {
    $name = test_input($_POST["personname"]);
  }   
}

 if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {
  if (empty($_POST["mailid"])) {
    $emailErr = "Email is required";
  }
  else 
  {
    $mailid = test_input($_POST["mailid"]);
  }
}

 if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {
  if (empty($_POST["ksuid"])) 
  {
    $ksuidErr = "KSUI is required";
  }
  else 
  {
    $ksuid = test_input($_POST["ksuid"]);
  }
 }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

 ?>