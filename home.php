

<?php include 'database.php';?>


<?php
//session_start();
$_SESSION['block'] = true;

date_default_timezone_get();
$Nav="Home";
$value=0;


  
?>

<html dir="ltr" lang="en">

<body>

<?php include 'header.php';?>

<main>

<img src="http://nutrisystemofficial.42web.io/Programmer.gif" height="60%" style="position: absolute; left: 50px; top:140px ;">  




<div id="message" style="font-size: 9vw; text-align: center; color: #377eed; font-weight: bold; position: fixed; top: 5vw; left: 25vw;">
  
 
</div>



</main>
</body>

<script type="text/javascript">
  
  


n=0;
i=0;
 message="";
  str = ["Undernutrition Diagnosis Expert System  ","With Descriptive Analysis Using Rule-Based Algorithm "];
  type=0;



mytype1();
function mytype1() {
  if (i < str[type].length) {
     message += str[type].charAt(i);
    document.getElementById("message").innerHTML = message;
    i++;
    setTimeout(mytype1, 100);
  }
  else{
    message="";
    i=0;
    mytype();
  }
}

function mytype() {

  if (i < str[type].length-n) {
    message += str[type].charAt(i);
    i++;
   mytype();

  }
  else if(str[type].length==n){
     i=0;
    n=0;
    message="";
    

    if(type==0){
      type=1;
    }
    else{
      type=0;
    }

mytype1();
  }

  else{
    i=0;
    n++;
    document.getElementById("message").innerHTML = message;
    message="";
    setTimeout(mytype, 25);
  }
}


</script>
</html>






