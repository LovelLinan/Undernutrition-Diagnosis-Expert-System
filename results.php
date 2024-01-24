<?php include 'session.php'; ?>
<?php include 'database.php';?>

<?php
//session_start();
$_SESSION['block'] = true;

 $Nav="Result and Data";

 $count=0;

 $stunted=0;
 $wasted=0;
 $underweight=0;
 $micronutrient=0;

 $prevstunted=0;
 $prevwasted=0;
 $prevunderweight=0;
 $prevmicronutrient=0;

$male=0;
$female=0;
$prevmale=0;
$prevfemale=0;
$script="";


//GENDER CLASSIFICATION

    $sql="SELECT * from pre_diagnosis";
        $result=$conn ->query($sql);     
          if($result->num_rows>0){
          while($row=$result->fetch_assoc()){

            if($row["sex"]=="male"&&$row["diagnosis"]=="undernourish"){

               $male+=1;
            }
             if($row["sex"]=="female"&&$row["diagnosis"]=="undernourish"){

               $female+=1;
            }
          }


        }//pie

$shit="x x";
$sql = "DELETE FROM post_diagnosis WHERE username=$shit";
if (mysqli_query($conn, $sql)) {
      
     echo 'Record deleted successfully!';
    } 

    $sql="SELECT * from post_diagnosis";
        $result=$conn ->query($sql);     
          if($result->num_rows>0){
          while($row=$result->fetch_assoc()){

            if($row["sex"]=="male"&&$row["diagnosis"]=="undernourish"){

               $prevmale+=1;
            }
             if($row["sex"]=="female"&&$row["diagnosis"]=="undernourish"){

               $prevfemale+=1;
            }
          }


        }//post diagnosis

$calcium=0;
$iodine=0;
$iron=0;
$vitaminA=0;
$vitaminB=0;
$vitaminC=0;
$vitaminD=0;
$vitaminE=0;
$vitaminK=0;
$zinc=0;

$sql="SELECT * from pre_diagnosis";
        $result=$conn ->query($sql);     
          if($result->num_rows>0){
          while($row=$result->fetch_assoc()){

            if($row["calcium"]=="1"){

               $calcium+=1;
            }
            if($row["iodine"]=="1"){

               $iodine+=1;
            }
            if($row["iron"]=="1"){

               $iron+=1;
            }
            if($row["vitaminA"]=="1"){

               $vitaminA+=1;
            }
            if($row["vitaminB"]=="1"){

               $vitaminB+=1;
            }
            if($row["vitaminC"]=="1"){

               $vitaminC+=1;
            }
            if($row["vitaminD"]=="1"){

               $vitaminD+=1;
            }
            if($row["vitaminE"]=="1"){

               $vitaminE+=1;
            }
            if($row["vitaminK"]=="1"){

               $vitaminK+=1;
            }
            if($row["zinc"]=="1"){

               $zinc+=1;
            }

            
            
          }


        }//pie


$prevcalcium=0;
$previodine=0;
$previron=0;
$prevvitaminA=0;
$prevvitaminB=0;
$prevvitaminC=0;
$prevvitaminD=0;
$prevvitaminE=0;
$prevvitaminK=0;
$prevzinc=0;

$sql="SELECT * from post_diagnosis";
        $result=$conn ->query($sql);     
          if($result->num_rows>0){
          while($row=$result->fetch_assoc()){

            if($row["calcium"]=="1"){

               $prevcalcium+=1;
            }
            if($row["iodine"]=="1"){

               $previodine+=1;
            }
            if($row["iron"]=="1"){

               $previron+=1;
            }
            if($row["vitaminA"]=="1"){

               $prevvitaminA+=1;
            }
            if($row["vitaminB"]=="1"){

               $prevvitaminB+=1;
            }
            if($row["vitaminC"]=="1"){

               $prevvitaminC+=1;
            }
            if($row["vitaminD"]=="1"){

               $prevvitaminD+=1;
            }
            if($row["vitaminE"]=="1"){

               $prevvitaminE+=1;
            }
            if($row["vitaminK"]=="1"){

               $prevvitaminK+=1;
            }
            if($row["zinc"]=="1"){

               $prevzinc+=1;
            }

            
            
          }


        }//pie

  
      $sql="SELECT * from pre_diagnosis";
        $result=$conn ->query($sql);     
          if($result->num_rows>0){
          while($row=$result->fetch_assoc()){

            if($row["stunted"]!="No"&&$row["stunted"]!=""){

               $stunted+=1;
            }

            if($row["wasted"]!="No"&&$row["wasted"]!=""){

               $wasted+=1;
            }

              if($row["micronutrient"]!="No"&&$row["micronutrient"]!=""){

               $micronutrient+=1;
            }

             if($row["underweight"]!="No"&&$row["underweight"]!=""){

               $underweight+=1;
            }
            
            
            
          }
        }//pie


         $sql="SELECT * from post_diagnosis";
        $result=$conn ->query($sql);     
          if($result->num_rows>0){
          while($row=$result->fetch_assoc()){

            if($row["stunted"]!="No"&&$row["stunted"]!=""){

               $prevstunted+=1;
            }

            if($row["wasted"]!="No"&&$row["wasted"]!=""){

               $prevwasted+=1;
            }

              if($row["micronutrient"]!="No"&&$row["micronutrient"]!=""){

               $prevmicronutrient+=1;
            }

             if($row["underweight"]!="No"&&$row["underweight"]!=""){

               $prevunderweight+=1;
            }
            
            
            
          }
        }//pie

$arr=[];

for($i=0; $i<13; $i++){
  $arr[$i]=0;
}
$script="";
    $sql="SELECT * from pre_diagnosis";
        $result=$conn ->query($sql);     
          if($result->num_rows>0){
          while($row=$result->fetch_assoc()){
        
            for($i=0; $i<13; $i++){

          
               if($row["age"]==strval($i)&&$row["diagnosis"]=="undernourish"){
                  $arr[$i]+=1;

                 
              }
            }                   
          }
        }//pie


$prevarr=[];

for($i=0; $i<13; $i++){
  $prevarr[$i]=0;
}
$script="";
    $sql="SELECT * from post_diagnosis";
        $result=$conn ->query($sql);     
          if($result->num_rows>0){
          while($row=$result->fetch_assoc()){
        
            for($i=0; $i<13; $i++){

          
               if($row["age"]==strval($i)&&$row["diagnosis"]=="undernourish"){
                  $prevarr[$i]+=1;
          
                 
              }
            }                   
          }
        }//prev_AGE






      

mysqli_close($conn); 

?>
<html dir="ltr" lang="en">
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
  
<?php include 'header.php';?>
<body>



   
   

<main><center>


<br><h1></h1>



<input type="hidden" id="male" value="<?php echo $male?>">
          <input type="hidden" id="female" value="<?php echo $female?>">
           <input type="hidden" id="prevmale" value="<?php echo $prevmale?>">
          <input type="hidden" id="prevfemale" value="<?php echo $prevfemale?>">


          <canvas id="pie-chart" style="max-width:86%; "></canvas>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>

          <script type="text/javascript">

            var male = document.getElementById("male");
            var female = document.getElementById("female");
             var prevmale = document.getElementById("prevmale");
            var prevfemale = document.getElementById("prevfemale");

            var data = [{
               label: 'Pre-Diagnosis',
              data: [male.value, female.value,0],
              backgroundColor: 
                "lightblue",
                
              borderColor: "#fff"
            },
            {
               label: 'Post-Diagnosis',
              data: [prevmale.value, prevfemale.value,0],
              backgroundColor: [
                "lightgreen",
                "lightgreen"
              ],
              borderColor: "#fff"
            }
           ];

            var options = {
              title: {
                 
                  display: true,
                  fontFamily: "Times New Roman",
                  fontSize: 32,
                   text:'Undernutrition Base on Sex'
                 
                },
              tooltips: {
                enabled: true
              },
               legend: {display: true},
            
            };


            var ctx = document.getElementById("pie-chart").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
              labels: ['Male', 'Female'],
                datasets: data
              },

              options: options
            });
          </script> 

<br><br>


  <input type="hidden" id="stunted" value="<?php echo $stunted?>">
          <input type="hidden" id="wasted" value="<?php echo $wasted?>">
          <input type="hidden" id="underweight" value="<?php echo $underweight?>">
          <input type="hidden" id="micronutrient" value="<?php echo $micronutrient?>">

           <input type="hidden" id="prevstunted" value="<?php echo $prevstunted?>">
          <input type="hidden" id="prevwasted" value="<?php echo $prevwasted?>">
          <input type="hidden" id="prevunderweight" value="<?php echo $prevunderweight?>">
          <input type="hidden" id="prevmicronutrient" value="<?php echo $prevmicronutrient?>">

          <canvas id="subform-chart" style="max-width:86%; "></canvas>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>

          <script type="text/javascript">

            var sf1 = document.getElementById("stunted");
            var sf2  = document.getElementById("wasted");
            var sf3 =document.getElementById("underweight");
            var sf4 = document.getElementById("micronutrient");

            var sf5 = document.getElementById("prevstunted");
            var sf6  = document.getElementById("prevwasted");
            var sf7 =document.getElementById("prevunderweight");
            var sf8 = document.getElementById("prevmicronutrient");

            var data = [{
               label: 'Pre-Diagnosis',
              data: [sf1.value, sf2.value, sf3.value, sf4.value,0],
              backgroundColor: "lightblue",
              borderColor: "#fff"
            },{
               label: 'Post-Diagnosis',
              data: [sf5.value, sf6.value, sf7.value, sf8.value,0],
              backgroundColor: "lightgreen",
              borderColor: "#fff"
            }];

            var options = {

               title: {
                 
                  display: true,
                  fontFamily: "Times New Roman",
                  fontSize: 32,
                   text:'Undernutrition Base on Sub-form'
                 
                },

              tooltips: {
                enabled: true
              },
                legend: {display: true},
             
            };

            var ctx = document.getElementById("subform-chart").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
              labels: ['Stunted', 'Wasted', 'Underweight', 'Micronutrient Defiecient'],
                datasets: data
              },
              options: options
            });
          </script>


            <br><br>
           <input type="hidden" id="a5"  value=<?php echo $arr[5]?>>
          <input type="hidden" id="a6"  value=<?php echo $arr[6]?>>
          <input type="hidden" id="a7"  value=<?php echo $arr[7]?>>
          <input type="hidden" id="a8"  value=<?php echo $arr[8]?>>
          <input type="hidden" id="a9"  value=<?php echo $arr[9]?>>
          <input type="hidden" id="a10" value=<?php echo $arr[10]?>>
          <input type="hidden" id="a11" value=<?php echo $arr[11]?>>
          <input type="hidden" id="a12" value=<?php echo $arr[12]?>>

          <input type="hidden" id="preva5"  value=<?php echo $prevarr[5]?>>
          <input type="hidden" id="preva6"  value=<?php echo $prevarr[6]?>>
          <input type="hidden" id="preva7"  value=<?php echo $prevarr[7]?>>
          <input type="hidden" id="preva8"  value=<?php echo $prevarr[8]?>>
          <input type="hidden" id="preva9"  value=<?php echo $prevarr[9]?>>
          <input type="hidden" id="preva10" value=<?php echo $prevarr[10]?>>
          <input type="hidden" id="preva11" value=<?php echo $prevarr[11]?>>
          <input type="hidden" id="preva12" value=<?php echo $prevarr[12]?>>

          <canvas id="age-chart" style="max-width:86%; "></canvas>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
          <script type="text/javascript">

              var arr=[""];/*This declare array*/
              var num=5;/*value of first age*/
             
                for(var i=0; i<8; i++){
                    
                    var x="a"+num.toString();
                    arr[i]=document.getElementById(x);
                    num++;
                }//get and tr


              var arr2=[""];/*This declare array*/
                  num=5;/*value of first age*/
             
                for(var i=0; i<8; i++){
                    
                    var x="preva"+num.toString();
                    arr2[i]=document.getElementById(x);
                    num++;
                }//get and tr

            var data = [{
              label: 'Pre-Diagnosis',
              data: [arr[0].value, arr[1].value, arr[2].value ,arr[3].value, arr[4].value, arr[5].value , arr[6].value, arr[7].value],
              backgroundColor:"lightblue",
              borderColor: "#fff"
            },
            {
                label: 'Post-Diagnosis',
              data: [arr2[0].value, arr2[1].value, arr2[2].value ,arr2[3].value, arr2[4].value, arr2[5].value , arr2[6].value, arr2[7].value,0],
              backgroundColor: "lightgreen",
              borderColor: "#fff"
            }];

            var options = {
                title: {
                 
                  display: true,
                  fontFamily: "Times New Roman",
                  fontSize: 32,
                   text:'Undernutrition Base on Age'
                 
                },

              tooltips: {
                enabled: true
              },
               legend: {display: true},
             
            };

            var ctx = document.getElementById("age-chart").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
              labels: ["Age 5", "Age 6", "Age 7","Age 8","Age 9","Age 10","Age 11","Age 12"],
                datasets: data
              },
              options: options
            });
          </script>

<br><br>
 <input type="hidden" id="n0"  value=<?php echo $calcium?>>
          <input type="hidden" id="n1"  value=<?php echo $iodine?>>
          <input type="hidden" id="n2"  value=<?php echo $iron?>>
          <input type="hidden" id="n3"  value=<?php echo $vitaminA?>>
          <input type="hidden" id="n4"  value=<?php echo $vitaminB?>>
          <input type="hidden" id="n5" value=<?php echo $vitaminC?>>
          <input type="hidden" id="n6" value=<?php echo $vitaminD?>>
          <input type="hidden" id="n7" value=<?php echo $vitaminE?>>
          <input type="hidden" id="n8" value=<?php echo  $vitaminK?>>
          <input type="hidden" id="n9" value=<?php echo $zinc?>>

          <input type="hidden" id="prevn0"  value=<?php echo $prevcalcium?>>
          <input type="hidden" id="prevn1"  value=<?php echo $previodine?>>
          <input type="hidden" id="prevn2"  value=<?php echo $previron?>>
          <input type="hidden" id="prevn3"  value=<?php echo $prevvitaminA?>>
          <input type="hidden" id="prevn4"  value=<?php echo $prevvitaminB?>>
          <input type="hidden" id="prevn5" value=<?php echo $prevvitaminC?>>
          <input type="hidden" id="prevn6" value=<?php echo $prevvitaminD?>>
          <input type="hidden" id="prevn7" value=<?php echo $prevvitaminE?>>
          <input type="hidden" id="prevn8" value=<?php echo  $prevvitaminK?>>
          <input type="hidden" id="prevn9" value=<?php echo $prevzinc?>>

          <canvas id="nut-chart"style="max-width:86%;"></canvas>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
          <script type="text/javascript">

              var arr=[];/*This declare array*/
              var num2=0;/*value of first age*/
             
                for(var i=0; i<10; i++){
                    
                    var x2="n"+num2.toString();
                    arr[i]=document.getElementById(x2);
                   num2++;
                }//get and tr

              var arr2=[];/*This declare array*/
              var num2=0;/*value of first age*/
             
                for(var i=0; i<10; i++){
                    
                    var x2="prevn"+num2.toString();
                    arr2[i]=document.getElementById(x2);
                   num2++;
                }//get and tr

            var data = [{
              label: 'Pre-Diagnosis',
              data: [arr[0].value, arr[1].value, arr[2].value ,arr[3].value, arr[4].value, arr[5].value , arr[6].value, arr[7].value, arr[8].value, arr[9].value,20],
              backgroundColor:"lightblue",
              borderColor: "#fff"
            },
           {
            label: 'Post-Diagnosis',
              data: [arr2[0].value, arr2[1].value, arr2[2].value ,arr2[3].value, arr2[4].value, arr2[5].value , arr2[6].value, arr2[7].value, arr2[8].value, arr2[9].value,20],
              backgroundColor: "lightgreen",
              borderColor: "#fff"
            }];

            var options = {
              title: {
                 
                  display: true,
                  fontFamily: "Times New Roman",
                  fontSize: 32,
                   text:'Undernutrition Based on Micronutrient Deficiencies'
                 
                },

              tooltips: {
                enabled: true
              },
                legend: {display: true},
           
            };

            var ctx = document.getElementById("nut-chart").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
              labels: ["Calcium", "iodine", "Iron","Vitamin A","Vitamin B","Vitamin C","Vitamin D","Vitamin E" ,"Vitamin K","Zinc"],
                datasets: data
              },
              options: options
            });
          </script>


        
<br>


</main>

  
  </body>


  
</html>
