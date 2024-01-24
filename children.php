<?php include 'session.php'; ?>
<?php include 'database.php';?>

<?php
date_default_timezone_set('Asia/Manila');
$date=date('Y-m-d H:i:s');
$Nav="Diagnosis";
$score=0;

//session_start();


if (isset($_SESSION['block'])) {
    header('Location: http://nutrisystemofficial.42web.io/index.php');//if session block is true goto index
}


if(isset($_POST['session'])){

     // session_destroy();
   $_SESSION['block'] = true;
      header('Location: http://nutrisystemofficial.42web.io/index.php');//go back to this initial For logout   
  }


  $sql="SELECT * from post_diagnosis";
    $result=$conn ->query($sql);
      if($result->num_rows>0){
      while($row=$result->fetch_assoc()){

 
        if(password_verify($_SESSION['username'] , $row["username"])==1){

         
         
         $prev_diagnosis="";
         $prev_weight=$row["weight"];
         $prev_height=$row["height"];
         $prev_bmi=$row["bmi"];
         $prev_micronutrient="";

         $prev_subform="";

   if($row["diagnosis"]=="undernourish"){
    $prev_diagnosis="Undernutrition";

   }


             if($row["stunted"]=="stunted"){
              $score++;
         $prev_subform.="Stunted<br>";}
           else if($row["stunted"]=="severe"){$score++;
         $prev_subform.="Severely Wtunted<br>";}

        

         if($row["wasted"]=="wasted"){$score++;
         $prev_subform.="Wasted<br>";}

          else if($row["wasted"]=="severe"){$score++;
         $prev_subform.="Severely Wasted<br>";}
        


         if($row["underweight"]=="underweight"){$score++;
         $prev_subform.="Underweighted<br>";}
         else if($row["underweight"]=="severe"){$score++;
         $prev_subform.="Severely Underweighted<br>";}
         


         if($row["iron"]=="1"){$score++;

         $prev_micronutrient.="Iron&ensp;";}

         if($row["iodine"]=="1"){$score++;

        $prev_micronutrient.="Iodine ";}

         if($row["zinc"]=="1"){$score++;
        $prev_micronutrient.="Zinc&ensp;";}

         if($row["calcium"]=="1"){$score++;
        $prev_micronutrient.="Calcium&ensp;";}


         if($row["vitaminA"]=="1"){$score++;
          $prev_micronutrient.="Vitamin A&ensp;";
         }
        
         if($row["vitaminB"]=="1"){$score++;
        $prev_micronutrient.="vitamin B&ensp;";}

          if($row["vitaminC"]=="1"){$score++;
         $prev_micronutrient.="vitamin C&ensp;";}

          if($row["vitaminD"]=="1"){$score++;
        $prev_micronutrient.="vitamin D&ensp;";}

          if($row["vitaminE"]=="1"){$score++;
        $prev_micronutrient.="vitamin E&ensp;";}

          if($row["vitaminK"]=="1"){$score++;
        $prev_micronutrient.="vitamin K&ensp;";}




if($prev_micronutrient.$prev_micronutrient.$prev_diagnosis==""){
       $previous='<div align="left">
<br><h3 style="font-weight: bold;">Previous Findings:</h3>

<div style="font-weight: normal;">'."You have no previous undernutrition health issue".'</div>


</div>';
}
else{
      $previous='<div align="left">
<br><h3 style="font-weight: bold;">Previous Findings:</h3>
<div style="font-weight: bold;">Type</h3>
<br><br><div style="font-weight: normal;">'.$prev_diagnosis.'</div>

<br><div style="font-weight: bold;">Sub-form of Undernutrition</div>


<br><div style="font-weight: normal;">'. $prev_subform.'</div>




<br><div style="font-weight: bold;">Micronutrient Defieciencies</div>


<br><div style="font-weight: normal;">'. $prev_micronutrient.'</div>

</div>';
}
         
        }         
      }
    }








if(isset($_POST['save'])){


  //transer of value
  $username=$_POST['username'];

  $age=$_POST['age'];
  $sex=$_POST['sex'];
 
  $height=$_POST['height'];
  $weight=$_POST['weight'];


  $bmi=$_POST['bmi'];

   $diagnosis=$_POST['temp_diagnosis'];
  $stunted=$_POST['temp_stunted'];
  $underweight=$_POST['temp_underweight']; 
  $wasted=$_POST['temp_wasted'];
  $micronutrient=$_POST['temp_micronutrient'];

  $calcium=$_POST['calcium'];
  $iodine=$_POST['iodine'];
  $iron=$_POST['iron'];
  $vitaminA=$_POST['vitaminA'];
  $vitaminB=$_POST['vitaminB'];
  $vitaminC=$_POST['vitaminC'];
  $vitaminD=$_POST['vitaminD'];
  $vitaminE=$_POST['vitaminE'];
  $vitaminK=$_POST['vitaminK'];
  $zinc=$_POST['zinc'];
 

  $count=0;
  $pass=1;







$sql="SELECT * from post_diagnosis";
    $result=$conn ->query($sql);
      if($result->num_rows>0){
      while($row=$result->fetch_assoc()){

        

         /*$query="UPDATE   `post_diagnosis` SET `age`='$tempo' WHERE name='$tname'";
    $result=mysqli_query($connect,$query);*/

 
        if(password_verify($username, $row["username"])==1){

          $passtbl2_username=$row["username"];


          if($row["diagnosis"]!=""){

              $passtbl2_age =$row["age"];
        
              $passtbl2_sex=$row["sex"];
              $passtbl2_height=$row["height"];
              $passtbl2_weight=$row["weight"];
              $passtbl2_bmi=$row["bmi"];

              $passtbl2_stunted=$row["stunted"];
              $passtbl2_wasted=$row["wasted"];
              $passtbl2_underweight=$row["underweight"];
              $passtbl2_micronutrient=$row["micronutrient"];

              $passtbl2_iodine=$row["iodine"];
              $passtbl2_iron=$row["iron"];
              $passtbl2_calcium=$row["calcium"];
              $passtbl2_zinc=$row["zinc"];

              $passtbl2_vitaminA=$row["vitaminA"];
              $passtbl2_vitaminB=$row["vitaminB"];
              $passtbl2_vitaminC=$row["vitaminC"];
              $passtbl2_vitaminD=$row["vitaminD"];
              $passtbl2_vitaminE=$row["vitaminE"];
              $passtbl2_vitaminK=$row["vitaminK"];

              $passtbl2_diagnosis=$row["diagnosis"];
                   $passtbl2_date=$row["date"];

              echo $passtbl2_diagnosis;
       


              $query="UPDATE `pre_diagnosis` SET `age`='$passtbl2_age', `sex`='$passtbl2_sex', `height`='$passtbl2_height', `weight`='$passtbl2_weight',`bmi`='$passtbl2_bmi', 
                         `micronutrient`='$passtbl2_micronutrient', `stunted`='$passtbl2_stunted', `underweight`='$passtbl2_underweight',`wasted`='$passtbl2_wasted', 
                         `iodine`='$passtbl2_iodine', `iron`='$passtbl2_iron', `calcium`='$passtbl2_calcium',`vitaminA`='$passtbl2_vitaminA',`vitaminB`='$passtbl2_vitaminB',
                         `vitaminC`='$passtbl2_vitaminC',`vitaminD`='$passtbl2_vitaminD',`vitaminE`='$passtbl2_vitaminE',`vitaminK`='$passtbl2_vitaminK',`zinc`='$passtbl2_zinc',
                         `diagnosis`='$passtbl2_diagnosis', `date` ='$passtbl2_date' WHERE username='$passtbl2_username'";
              $result=mysqli_query($conn,$query);

              $query="UPDATE `post_diagnosis` SET `age`='$age', `sex`='$sex', `height`='$height', `weight`='$weight',`bmi`='$bmi', 
                             `micronutrient`='$micronutrient', `stunted`='$stunted', `underweight`='$underweight',`wasted`='$wasted', 
                             `iodine`='$iodine', `iron`='$iron', `calcium`='$calcium',`vitaminA`='$vitaminA',`vitaminB`='$vitaminB',
                             `vitaminC`='$vitaminC',`vitaminD`='$vitaminD',`vitaminE`='$vitaminE',`vitaminK`='$vitaminK',`zinc`='$zinc',
                             `diagnosis`='$diagnosis', `date`='$date' WHERE username='$passtbl2_username'";
              $result=mysqli_query($conn,$query);             

           

              break;
          }

          else{

            
                $id=$row['id'];
                $query="UPDATE `post_diagnosis` SET `age`='$age', `sex`='$sex', `height`='$height', `weight`='$weight',`bmi`='$bmi', 
                             `micronutrient`='$micronutrient', `stunted`='$stunted', `underweight`='$underweight',`wasted`='$wasted', 
                             `iodine`='$iodine', `iron`='$iron', `calcium`='$calcium',`vitaminA`='$vitaminA',`vitaminB`='$vitaminB',
                             `vitaminC`='$vitaminC',`vitaminD`='$vitaminD',`vitaminE`='$vitaminE',`vitaminK`='$vitaminK',`zinc`='$zinc',
                             `diagnosis`='$diagnosis', `date`='$date' WHERE id='$id'";
                $result=mysqli_query($conn,$query);

                break;



          }

         

          }

         
        }         
      }













   /*$sql="SELECT * from es_table";
    $result=$connect ->query($sql);
      if($result->num_rows>0){
      while($row=$result->fetch_assoc()){

 
        if(password_verify($username, $row["username"])==1){

         
         


          if($row["diagnosis"]==null){
             $id=$row['id'];
            $query="UPDATE `es_table` SET `age`='$age', `sex`='$sex', `height`='$height', `weight`='$weight',`bmi`='$bmi', 
                         `micronutrient`='$micronutrient', `stunted`='$stunted', `underweight`='$underweight',`wasted`='$wasted', 
                         `iodine`='$iodine', `iron`='$iron', `calcium`='$calcium',`vitaminA`='$vitaminA',`vitaminB`='$vitaminB',
                         `vitaminC`='$vitaminC',`vitaminD`='$vitaminD',`vitaminE`='$vitaminE',`vitaminK`='$vitaminK',`zinc`='$zinc',
                         `diagnosis`='$diagnosis', `date`='".date('Y-m-d H:i:s')."' WHERE id='$id'";
            break;
          }
          else{
            
          //  $pass=1;
            break;

          }

         
        }         
      }
    }//passs

  $result=mysqli_query($connect,$query);*/

/*
if($pass==1){



   $sql="SELECT * from post_diagnosis";
    $result=$connect ->query($sql);
      if($result->num_rows>0){
      while($row=$result->fetch_assoc()){


        if(password_verify($username, $row["username"])==1){

        
             $username=$row['username'];
            $query="UPDATE `post_diagnosis` SET `age`='$age', `sex`='$sex', `height`='$height', `weight`='$weight',`bmi`='$bmi', 
                         `micronutrient`='$micronutrient', `stunted`='$stunted', `underweight`='$underweight',`wasted`='$wasted', 
                         `iodine`='$iodine', `iron`='$iron', `calcium`='$calcium',`vitaminA`='$vitaminA',`vitaminB`='$vitaminB',
                         `vitaminC`='$vitaminC',`vitaminD`='$vitaminD',`vitaminE`='$vitaminE',`vitaminK`='$vitaminK',`zinc`='$zinc',
                         `diagnosis`='$diagnosis', `date`='".date('Y-m-d H:i:s')."' WHERE username='$username'";
            break;
          
          


         
        }         
      }
    }

  $result=mysqli_query($connect,$query);





}*/






      
     // session_destroy();
   header('Location: index.php');

}//SAVE

mysqli_close($conn);

?>

<html dir="ltr" lang="en">
<style>
.c {
  height: 200vh;
  width: 960px;
  margin: auto;
  max-width: 95%;
}
::-webkit-scrollbar-track {
  border: 5px solid #a7f0e5;
  background-color: #b2bec3;
}
::-webkit-scrollbar {
  width: 15px;
  background-color: #dfe6e9;
}
::-webkit-scrollbar-thumb {
  background-color: #74b9ff;
  border-radius: 10px;
}

</style>

<body>

<?php include 'header.php';?>

<main>
<center>
 <img src="http://nutrisystemofficial.42web.io/doctor.gif" height="80%" style="position: absolute; left: 50px; top:100px ;   pointer-events: none;">







<input type="hidden" id="previous" value='<?php echo $previous; ?>'>
 



 



<form name="myForm"  autocomplete="off" action="http://nutrisystemofficial.42web.io/children.php" method="post" >



 <div id="message"></div>


    <div id="container" > 

      <br>
          <h1  style="text-align: center; ">Patient's Demograpics</h1> <br>


<input type="hidden" id="score" value='<?php echo $score; ?>'>
        
        <input type="hidden" name="username" value="<?php echo  $_SESSION['username']; ?>">
        <input type="hidden" name="name" value="<?php echo  $_SESSION['name']; ?>">
         
        <div class="inline" style="cursor: pointer;" id="girl"> <img src="http://nutrisystemofficial.42web.io/girl2.png" width="101" height="149" onclick="return fsex()"> </div>&nbsp&nbsp&nbsp
        <div class="inline" style="cursor: pointer;" id="boy"><img src="http://nutrisystemofficial.42web.io/boy2.png" width="100" height="150" onclick="return msex()"></div>
        
        <br><br>

        <div>Select Your Sex</div>
        
        <br><br>
        
       
        <input class="range" type="range" name="age" id="age" value="0" min="5" max="12" onmousemove="rangeSlide(this.value)"> 
        <label class="label" style="display: inline-block;" id="rangeValue">5</label>
        <div>Drag the penguin for Age</div>

        <br><br>

     
        <input class="text2" type="text" name="height" id="height" placeholder="Height(cm)" value="">&ensp;
        <input class="text2" type="text" name="weight" id="weight" placeholder="Weight(kg)">
        
        <br>   <br>
        <div >Enter Your Height And Weight</div>

        <br><br>
      
        <input type="submit"  class="submit"  value="Proceed"  name="" onclick="return process()"  onmousedown="bleep.play()">&ensp;
        <input type="submit"   class="reset"   value="Cancel" name="session" onclick="//window.location.href = 'http://nutrisystemofficial.42web.io/index.php';"  onmousedown="bleep.play()" >

       
    </div>



    <div id="container1" style="width:320px; height:80px; overflow:auto;">


      <table class="table" style="width: 850px;  vertical-align:top; ">   
        <tr>
          <th><h1 id="head" align="center" style="">Patients Demographics</h1></th>          
        </tr>    
        <tr style="height: 422px;  vertical-align:top;">
          <td>
             <div style="width:100%; height:431px; overflow:auto;">
            <br>
            <div id="question" align="center"></div>
    
            <h3 style="font-weight: normal;">
            
            <div id="input"></div>
           
              <div id="diagnosis" align="left"></div>
              

              <div id="graph" align="left">
                <input type="hidden" id="prev_weight" value="<?php echo $prev_weight?>">
                <canvas id="myChart2" style="max-width:100%; "></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


                <input type="hidden" id="prev_height" value="<?php echo $prev_height?>">
                <canvas id="myChart3" style="max-width:100%; "></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

                <input type="hidden" id="prev_bmi" value="<?php echo $prev_bmi?>">
                <canvas id="myChart4" style="max-width:100%; "></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>





              </div>

 
              <div id="advice" align="left"></div>
              <div id="diagnosisfile" hidden=""></div>
            </h3>
          </div>
          </td>
        </tr>
        <tr>
           <td align="center">
              <br>
              <div id="selection">
               
              </div>
           </td>
        </tr>
      </table>    
      <!--div id="input"></div-->

    </div>

</form>
 


</main>

</body>

<script src="http://nutrisystemofficial.42web.io/inference.js"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
function Export2Word(element, filename = ''){
    var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml+document.getElementById(element).innerHTML+postHtml;

    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });
    
    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
    
    // Specify file name
    filename = filename?filename+'.doc':'document.doc';
    
    // Create download link element
    var downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob ){
        navigator.msSaveOrOpenBlob(blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = url;
        
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
    
    document.body.removeChild(downloadLink);

    event.preventDefault();
}
</script>

<script>
  var x = document.getElementById("diagnosis");
  var y = document.getElementById("advice");
   var z = document.getElementById("graph");
  //var z = document.getElementById("intervention");

  z.style.display="none";
  y.style.display = "none";//hide advises
 //  z.style.display = "none";//hide intervention

function myFunction2() {
   var x = document.getElementById("diagnosis");
  var y = document.getElementById("advice");
   var z = document.getElementById("graph");

    document.getElementById("head").innerHTML="Diagnosis";
 

  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
    
  } else {
    
  }

  event.preventDefault();
}

function myFunction3() {
   var x = document.getElementById("diagnosis");
  var y = document.getElementById("advice");
 var z = document.getElementById("graph");


  document.getElementById("head").innerHTML="Advice";
  

  if (y.style.display === "none") {
    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "none";
    
     //document.getElementById("selection2").innerHTML="View Advice";
  } else{

  }

  event.preventDefault();
}


function myFunction4() {
   var x = document.getElementById("diagnosis");
  var y = document.getElementById("advice");
 var z = document.getElementById("graph");

  document.getElementById("head").innerHTML="Graph";
  //var z = document.getElementById("intervention");

  if (z.style.display === "none") {
    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "block";
    
     //document.getElementById("selection2").innerHTML="View Advice";
  } else{

  }

  event.preventDefault();
}
</script>

  </body>

</html>
