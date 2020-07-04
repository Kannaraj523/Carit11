var course = document.getElementById("course");
    var gpa1 = document.getElementById("gpa1");
    var gpa2 = document.getElementById("gpa2");
    var gpa3 = document.getElementById("gpa3");
    var gpa4 = document.getElementById("gpa4");
    var gpa5 = document.getElementById("gpa5");
    var gpalb1 = document.getElementById("gpalb1");
    var gpalb2 = document.getElementById("gpalb2");
    var gpalb3 = document.getElementById("gpalb3");
    var gpalb4 = document.getElementById("gpalb4");
    var gpalb5 = document.getElementById("gpalb5");
    
    course.style.visibility = "hidden";

    gpa1.style.visibility = "hidden";

    gpa2.style.visibility = "hidden";

    gpa3.style.visibility = "hidden";

    gpa4.style.visibility = "hidden";

    gpa5.style.visibility = "hidden";

    gpalb1.style.visibility = "hidden";

    gpalb2.style.visibility = "hidden";

    gpalb3.style.visibility = "hidden";

    gpalb4.style.visibility = "hidden";

    gpalb5.style.visibility = "hidden";

    

    function function1(value) {

    	document.getElementById("message").innerHTML = "";

    	if(value == '1')

    {
    document.getElementById("course1").innerHTML = "CSE 3203 Mobile System Overview";

    document.getElementById("course2").innerHTML = "IT 4213 Mobile Web Development";

    document.getElementById("course3").innerHTML = "STAT 1401:Elementary Statistics";

    document.getElementById("course4").innerHTML = "MATH 1160:Elementary Applied Calculus";

    document.getElementById("course5").innerHTML = "CHEM 1211:General Chemistry I";

    document.getElementById("gpa1").style.visibility = "visible";

    document.getElementById("gpa2").style.visibility = "visible";

    document.getElementById("gpa3").style.visibility = "visible";

    document.getElementById("gpa4").style.visibility = "visible";

    document.getElementById("gpa5").style.visibility = "visible";

    document.getElementById("course").style.visibility = "visible";

    document.getElementById("gpalb1").style.visibility = "visible";

    document.getElementById("gpalb2").style.visibility = "visible";

    document.getElementById("gpalb3").style.visibility = "visible";

    document.getElementById("gpalb4").style.visibility = "visible";

    document.getElementById("gpalb5").style.visibility = "visible"; 
    document.getElementById("course5").style.visibility = "visible"; 


    }

    if(value == '2')

    {

    document.getElementById("course1").innerHTML = "IT 7113 Data Visualization";

    document.getElementById("course2").innerHTML = "IT 6713 Business Inteligence";

    document.getElementById("course3").innerHTML = "IT 5423 Computer Networks and System Administration";

    document.getElementById("course4").innerHTML = "IT 6853 Computer Forensics";

    document.getElementById("gpa1").style.visibility = "visible";

    document.getElementById("gpa2").style.visibility = "visible";

    document.getElementById("gpa3").style.visibility = "visible";

    document.getElementById("gpa4").style.visibility = "visible";

    document.getElementById("course").style.visibility = "visible";

    document.getElementById("gpalb1").style.visibility = "visible";

    document.getElementById("gpalb2").style.visibility = "visible";

    document.getElementById("gpalb3").style.visibility = "visible";

    document.getElementById("gpalb4").style.visibility = "visible";

    document.getElementById("course5").style.visibility = "hidden";

    document.getElementById("gpa5").style.visibility = "hidden";

    document.getElementById("gpalb5").style.visibility = "hidden";

    

    }

   
    }
    
    function eval()

{

let x = gpa1.value;

let y = gpa2.value;

let z = gpa3.value;   

let p = gpa4.value;

let q = gpa5.value; 

let UnderGrad_GPA=Number(x)+Number(y)+Number(z)+Number(p)+Number(q);
   UnderGrad_GPA=Number(UnderGrad_GPA/5);

let Grad_GPA=Number(x)+Number(y)+Number(z)+Number(p);
   Grad_GPA=Number(Grad_GPA/4);

if(document.getElementById("mySelect").value=='1')

{

  if((Number(x)+Number(y)+Number(z)+Number(p)+Number(q))/5 >3.2)

   {

    document.getElementById("UnderGrad_GPA").innerHTML = "GPA : " + UnderGrad_GPA.toString();
        document.getElementById("message").innerHTML = "Congratulations, You are eligible for a position.Click here for more details";
        document.getElementById("link").style.visibility = "visible";
        document.getElementById("Grad_GPA").style.visibility= "hidden";
   }
   else
   {
      document.getElementById("UnderGrad_GPA").innerHTML = "GPA : " + UnderGrad_GPA.toString();
      document.getElementById("message").innerHTML = "Thank you ! You are not eligible to apply for this position.";
      document.getElementById("link").style.visibility = "hidden";
      document.getElementById("Grad_GPA").style.visibility= "hidden";
   }

}
    if(document.getElementById("mySelect").value=='2')
    {
       if((Number(x)+Number(y)+Number(z)+Number(p))/4 >3.7)
       {
            document.getElementById("Grad_GPA").innerHTML = "GPA : " + Grad_GPA.toString();
            document.getElementById("message").innerHTML = "Congratulations, You are eligible for a position.Click here for more details";
            document.getElementById("link").style.visibility = "visible";
            document.getElementById("UnderGrad_GPA").style.visibility= "hidden";
       }

       else

       {
        document.getElementById("Grad_GPA").innerHTML = "GPA : " + Grad_GPA.toString();
        document.getElementById("message").innerHTML = "Thank you ! . You are not eligible to apply for this position.";
        document.getElementById("link").style.visibility = "hidden";
        document.getElementById("UnderGrad_GPA").style.visibility= "hidden";

       }

    }

    if(document.getElementById("mySelect").value=='0')

    {

      
	link.style.visibility = "hidden";
       document.getElementById("message").innerHTML = "";

      

    }

    }