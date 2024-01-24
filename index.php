<?php include 'session.php'; ?>
<?php include 'database.php';?>

<?php
date_default_timezone_set('Asia/Manila');
$Nav="Diagnosis";
$value=0;

//session_start();




if(isset($_POST['login'])){

    $count=0;

    $username=$_POST['username'];

    $sql="SELECT * from pre_diagnosis";
    $result=$conn ->query($sql);
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){

          if(password_verify($username, $row["username"])==1){
            $name=$row["name"];
            $count++;
         
            break;
          }                  
        }
      }

     if($count==0){

        echo '<div id="logmessage"></div>';
        
     }
     else{
      $_SESSION['block'] = null;//makes session false
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $name;
      echo "<script type=\"text/javascript\">window.location.href ='http://nutrisystemofficial.42web.io/children.php';</script>";//goto children
    }

}//LOGIN
else{
  $_SESSION['block'] = true;

}

?>

<html dir="ltr" lang="en">

<body>
<?php include 'header.php';?>

<main>
<center>
 <img src="http://nutrisystemofficial.42web.io/doctor.gif" height="80%" style="position: absolute; left: 50px; top:100px ;   pointer-events: none;z-index: -1;">

<form  action="http://nutrisystemofficial.42web.io/index.php"  autocomplete="off"  method="post" >

 <img src="http://nutrisystemofficial.42web.io/frame.png" height="550px" width="800px" style=" z-index: -1; position: absolute; left: 267px; top: 80px;  pointer-events: none; opacity: 0.4">

<br><br><br><br><br><br><br><br><br><br><br>
<h1>Log In</h1>



<div class="form__group field">
  <input type="input" class="form__field"  placeholder="Name" name="username" id='name' required  value="" />
  <label for="name" class="form__label">Patient I.D</label>
</div>


<br><br><br>
   <input type="submit" style="width: 370px; " class="submit" name="login" value="Start Diagnosis" onmousedown="bleep.play()" 
          onclick="setTimeout(function(){mapped.submit();}, 5000); ">
 <br><br>
    <div>or</div>
    <br>

    <input type="button" class="neutral" style="width: 370px; " value="Register New Patient I.D" onclick="window.location.href ='http://nutrisystemofficial.42web.io/register.php';"
    onmousedown="bleep.play()"> 
</form>




</main>

</body>
<script src="http://nutrisystemofficial.42web.io/inference.js"></script>
<script type="text/javascript">
          
 message="";
 str = " Invalid Credentials!   ";
 myArr = str.split("");
 type = 0;                 //  set your counter to 1
function mytype() {         //  create a loop function
   message+=myArr[type];
  setTimeout(function() {   //  call a 3s setTimeout when the loop is called
   document.getElementById("logmessage").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  //  your code here
    type++;                    //  increment the counter
    if (type < str.length) {           //  if the counter < 10, call the loop function
      mytype();             //  ..  again which will trigger another 
    }else{
       setTimeout(function(){document.getElementById("logmessage").innerHTML =""; }, 3000);   //  your code here
    }
                           //  ..  setTimeout()
  }, qtime)
}
mytype();

</script>

</html>

