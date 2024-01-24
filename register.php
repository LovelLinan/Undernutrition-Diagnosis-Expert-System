<?php include 'session.php'; ?>
<?php include 'database.php';?>

<?php
//session_start();
$_SESSION['block'] = true;

$Nav="Diagnosis";
	
$footer="";
$lname="";
$fname="";
$message="";

 if(isset($_POST['register'])){

 	
 		$count=0;

 		$lname=$_POST['lname'];
    $fname=$_POST['fname'];
    $invalid=0;

    $name=$fname." ".$lname;

 		$count=0;





if (preg_match('~[0-9]+~', $name)) {
    $invalid=1;
}
if (preg_match('/[\'^£$%&*()}{@#~?><>,!|=_+¬-]/', $name))
{
    $invalid=1;
}


$i=0;
while($i<1){
  $i++;
        $myusername="UN".chr(rand(65,90)).rand(100,999);
      
     		$sql="SELECT username from post_diagnosis";
    		$result=$conn ->query($sql);
    		if($result->num_rows>0){
    		  while($row=$result->fetch_assoc()){

    		 		if($row["username"]==$myusername){
    		          $i=0;
                
                  break;
    		 		}	

    		  }
    		 }


    }

    


		 if($invalid==0){
      $temp_username=$myusername;//store the username for html
      $ciphertext = password_hash($myusername, PASSWORD_DEFAULT);
      $verify = password_verify($myusername, $ciphertext);
      $myusername=$ciphertext;

     /* $temp_name=$name;
      $ciphertext = password_hash($name, PASSWORD_DEFAULT);
      $verify = password_verify($name, $ciphertext);
      $name=$ciphertext;*/

		 	$sql_query="INSERT INTO pre_diagnosis(username,name) values('$myusername','$name')";//pwede sa increment
			mysqli_query($conn,$sql_query);

      $sql_query="INSERT INTO post_diagnosis (username,name) values('$myusername','$name')";//pwede sa increment
      mysqli_query($conn,$sql_query);
	

      $message="<input type=\"hidden\" id=\"username\" value=".$temp_username." ><div id=\"message\"></div>";
		 }

     else{
      $message="<input type=\"hidden\" id=\"username\" value=\"\" ><div id=\"message\"></div>";
     }
		
  }

mysqli_close($conn);

?>



<html dir="ltr" lang="en">
  


  <body>
<?php include 'header.php';?>
 



    <main><center>

 <img src="http://nutrisystemofficial.42web.io/doctor.gif" height="80%" style="position: absolute; left: 50px; top:100px ;   pointer-events: none; z-index: -1;">
<?php echo $message?>


 <img src="http://nutrisystemofficial.42web.io/frame.png" height="550px" width="800px" style=" z-index: -1; position: absolute; left: 267px; top: 80px;  pointer-events: none; opacity: 0.4">
 <br><br><br><br><br><br><br><br><br><br><br>
<h1>Register</h1>

<form action="http://nutrisystemofficial.42web.io/register.php" autocomplete="off"  method="post"> 
<div class="form__group field">
  <input type="input" class="form__field" placeholder="Name" name="fname" id='fname' required />
  <label for="name" class="form__label">First Name</label>
</div><br>
<div class="form__group field">
  <input type="input" class="form__field" placeholder="Name" name="lname" id='lname' required />
  <label for="name" class="form__label">Last Name</label>
  </div>

<br><br><br>
  <input type="submit" class="submit" name="register" value="Register" onclick="fregister()"  onmousedown="bleep.play()">&nbsp&nbsp
  <input type="button" class="reset"  value="Back" onclick="window.location.href = 'http://nutrisystemofficial.42web.io/index.php';"  onmousedown="bleep.play()"> 

</form>


<script src="inference.js"></script>
  <script type="text/javascript">

var username=document.getElementById("username");
var time=0;

if(username.value==0){
   str = " Name  must be an alphabet";
    time=2000;
}
else{
  str = "  Your Patient I.d is  "+username.value;
  time=60000;

}


    var bleep = new Audio();
  bleep.src = 'beep3.mp3';

 message="";
 
 myArr = str.split("");
 type = 0;                 //  set your counter to 1
function mytype() {         //  create a loop function
   message+=myArr[type];
  setTimeout(function() {   //  call a 3s setTimeout when the loop is called
   document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  //  your code here
    type++;                    //  increment the counter
    if (type < str.length) {           //  if the counter < 10, call the loop function
      mytype();             //  ..  again which will trigger another 
    }
    else{
        setTimeout(function(){document.getElementById("message").innerHTML =""; }, time); 
    }
                           //  ..  setTimeout()
  }, 20)
}
mytype();





  </script>


<?php echo $footer; ?>


 

</form>
  

    </main>

   
  </body>
</html>
