<?php include 'session.php'; ?>
<?php include 'database.php';?>


<?php

$_SESSION['block'] = true;

 $Nav="Terms of service";
?>
<html dir="ltr" lang="en">
<head>
 
</head>


<style type="text/css">


.person {
  align-items: center;
  display: flex;
  flex-direction: column;
  width: 280px;
}
.container {
  border-radius: 50%;
  height: 312px;
  -webkit-tap-highlight-color: transparent;
  transform: scale(0.48);
  transition: transform 250ms cubic-bezier(0.4, 0, 0.2, 1);
  width: 400px;
}
.container:after {

  content: "";
  height: 10px;
  position: absolute;
  top: 390px;
  width: 100%;
}
.container:hover {
  transform: scale(0.54);
}
.container-inner {
  clip-path: path(
    "M 390,400 C 390,504.9341 304.9341,590 200,590 95.065898,590 10,504.9341 10,400 V 10 H 200 390 Z"
  );
  position: relative;
  transform-origin: 50%;
  top: -200px;
}
.circle {
  background-color:red;
  border-radius: 50%;
  cursor: pointer;
  height: 380px;
  left: 10px;
  pointer-events: none;
  position: absolute;
  top: 210px;
  width: 380px;
}
.img {
  pointer-events: none;
  position: relative;
  transform: translateY(20px) scale(1.15);
  transform-origin: 50% bottom;
  transition: transform 300ms cubic-bezier(0.4, 0, 0.2, 1);
}
.container:hover .img {
  transform: translateY(0) scale(1.2);
}
.img1 {
  left: 22px;
  top: 164px;
  width: 340px;
}
.img2 {
  left: -46px;
  top: 174px;
  width: 444px;
}
.img3 {
  left: -16px;
  top: 144px;
  width: 466px;
}
.divider {
  background-color: #ca6060;
  height: 1px;
  width: 160px;
}
.name {
  color: #404245;
  font-size: 24px;
  font-weight: 600;
  margin-top: 16px;
  text-align: center;
}
.title {
  color: #6e6e6e;
  font-family: arial;
  font-size: 14px;
  font-style: italic;
  margin-top: 4px;
}

 .table3{
  position: absolute;

  top: 65px;

}


</style>




  <body>
<?php include 'header.php';?>



<br>
    <main>
      <h1  align="center" style="">Terms of Service of Nutrisystem</h1>
  
  
        <tr>
          <th></th>          
        </tr>    
        <tr style="height: 422px;  vertical-align:top;">
          <td>
             <div style="width:100%; height:431px;">
         
    
    
            <h2 style="font-weight: normal;">
            
            <div align="left">
                <ul>
                  <li>All the data and information is keep inside the database of the system and not shared to anyone without permission by the  service provider   </li>  <br>    
                  <li>The software is available  free of charge by service provider</li>  <br>  
                  <li>The undernutrition diagnosis expert system is diagnosing tool for only limited for children ages 5 to 12 years</li><br>  
                  <li>The service provider is also entitled to stop the software without notifying user  purposely for upgrade and repair.</li><br> 
                  <li>Do not use in case of emergency. Always seek a registered nutritionist-dietitian or medical doctor/physician for better advise.</li><br> 
                  <li>The children must need a guardian or assistance if he/she would undergo a diagnosis using undernutrition diagnosis expert system.</li><br>
                  <li>After following the recommendations, it is suggested that you wait at least one month before reusing the nutrisystem.</li>
                </ul> 
              </div>

            </h3>
          </div>
          </td>
        </tr>
        



    </main>





  </body>
</html>
