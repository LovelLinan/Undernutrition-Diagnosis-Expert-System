<?php include 'session.php'; ?>
<?php include 'database.php';?>

<?php

$_SESSION['block'] = true;

 $Nav="Developer";
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
  background-color: #377eed;
  height: 1px;
  width: 190px;
}
.name {
  color: #404245;
  font-size: 24px;
  font-weight: 600;
  margin-top: 16px;
  text-align: center;
}
.title {
 color: #2C3539;

  font-size: 30px;
 /* font-style: italic;*/
  margin-top: 4px;
  font-weight: bold;
}

 .table3{
  position: absolute;
  left: 260px;
  top: 100px;

}


</style>




  <body>
<?php include 'header.php';?>

<br>


    <main>
      
   



    <img src="http://nutrisystemofficial.42web.io/frameo.png" height="550px" width="1100px" style=" z-index: -1; position: absolute; left: 120px; top: 80px;  pointer-events: none; opacity: 0.4;">

  <div id="container1" style="width:320px; height:80px; ">

      <table class="table3" style="width: 850px;  vertical-align:top; ">   
        <tr>
          <th><br></th>          
        </tr>    
        <tr style="height: 422px;  vertical-align:top;">
          <td>
             <div style="width:100%; height:431px; ">
         
    
    
         
            
              <div id="developer" align="left">
              <div style="display: flex;">
              

              <div class="person">
         
                <div class="container">
                  <div class="container-inner">
                    <img class="circle" src="http://nutrisystemofficial.42web.io/css/canciobg.png"/>
                    <img class="img img1"src="http://nutrisystemofficial.42web.io/css/cancio.png"/>
                  </div>
                </div>
 <div class="title">Documentation</div>
                <div class="divider"></div>
                <div class="name">Japheth Cancio</div>
               
              </div>  


            <div class="person">   <br><br><br><br>
                <div class="container">
                  <div class="container-inner">
                    <img class="circle" src="http://nutrisystemofficial.42web.io/css/gg.jpg"/>
                    <img class="img img1"src="http://nutrisystemofficial.42web.io/css/Linan.png"/>
                  </div>
                </div>
                  <div class="title">Programmer</div>
                <div class="divider"></div>
                <div class="name">Lovel Iverson Linan</div>
  
            

               
              </div>   

                <div class="person">  
                <div class="container">
                  <div class="container-inner">
                    <img class="circle" src="http://nutrisystemofficial.42web.io/css/calataybg.png"/>
                    <img class="img img1"src="http://nutrisystemofficial.42web.io/css/calatay.png"/>
                  </div>
                </div>
 <div class="title">System Design</div>
                <div class="divider"></div>
                <div class="name">Jhon Carlo Calatay</div>
  
     

               
              </div>          
            </div>
              </div>

         
          </div>
          </td>
        </tr>
        
      </table>    


    </div>

    
    </main>





  </body>
</html>
