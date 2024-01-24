var bleep = new Audio();
bleep.src = 'beep3.mp3';

var bleep2 = new Audio();
bleep2.src = 'beep2.mp3';

var nurtrition=0;

var yes=0;
var no=0;
var  nurtrition_arr=[0,0,0,0,0,0,0,0,0,0];


var stunting_count=0;
var underweight_count=0;

var pre_score=document.getElementById("score");
var post_score=0;



var bmi=0;
var deviation=0;

var sex="";
var sextemp="";

var temp_wasted="wasted";
var temp_stunted="stunted";
var temp_underweight="underweight";
var temp_micronutrient="micronutrient deficiency";
var temp_diagnosis="undernourish";



var patient   =  "<div style=\"font-weight: bold; font-size: 24; text-align: center;\">Diagnosis</div>  <br><br>"+
                 "<h3 style=\"font-weight: bold; \">Patient Information:</h3>                          ";

var patient2  =  "<div style=\"font-weight: bold; font-size: 24; text-align: center;\">Advice</div>  <br><br>";

var previous =    document.getElementById("previous");
var analysis  =  previous.value;
                

var diagnosis =  '<h3 style="font-weight: bold;">Present Findings:</h3>'+"<div style=\"font-weight: bold; \">Type</div>                                       <br>";
var subform   =  "<div style=\"font-weight: bold; \">Sub-form of Undernutrition</div>                 <br>";
var advice    =  "<div style=\"font-weight: bold; \">General Nutrition Recommendation for All</div>         ";

var message="";
var str = "";
var myArr =[];
var type = 0;

var vitamin=[];
var intervention="";
var calcium="";
var iodine="";
var iron="";
var vitaminB="";
var vitaminC="";
var vitaminD="";
var vitaminE="";
var vitaminK="";
var vitaminA="";
var zinc="";

var temp_calcium=0;
var temp_iodine=0;
var temp_iron=0;
var temp_vitaminA=0;
var temp_vitaminB=0;
var temp_vitaminC=0;
var temp_vitaminD=0;
var temp_vitaminE=0;
var temp_vitaminK=0;
var temp_zinc=0;

var qtime=5;

var temp_vitamin="<br><div style=\"font-weight: bold; \">Micronutrient Deficiencies</div>                         <br>";

var y=document.getElementById("container1");
    y.style.display = "none";//hide container 1 or patient demograpics page

function fsex(){
  sextemp="female";
  document.getElementById('girl').innerHTML='<img src="girl.png" width="101" height="149" onclick="return fsex()">';
  document.getElementById('boy').innerHTML= '<img src="boy2.png" width="100" height="150" onclick="return msex()"><input type="hidden"  name="sex" id="sex" value="' + sextemp + '">';
  

}

function msex(){
  sextemp="male";
  document.getElementById('girl').innerHTML= '<img src="girl2.png" width="101" height="149" onclick="return fsex()">';
  document.getElementById('boy').innerHTML=  '<img src="boy.png"   width="100" height="150" onclick="return msex()"><input type="hidden" name="sex" id="sex" value="' + sextemp + '">';

}
			
		
 		
function rangeSlide(value) {

  document.getElementById('rangeValue').innerHTML = value;
}
			

function process(){

	var count=0;
	//html to javascript value

	var a = document.forms["myForm"]["username"].value;
  var b = document.forms["myForm"]["age"].value;
  var c =sextemp;
	var d = document.forms["myForm"]["height"].value;
	var e = document.forms["myForm"]["weight"].value;
  var f = document.forms["myForm"]["name"].value;

    
   if(isNaN(d)||isNaN(e)){

 message="";
 str = "   Height and weight must be a number!";
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
       setTimeout(function(){document.getElementById("message").innerHTML =""; }, 2000);   //  your code here
    }                       //  ..  setTimeout()
  }, qtime)
}
mytype();


      event.preventDefault();
      count++;
  }   
 else{      
	var temp=[a,b,c,d,e];


			for(var i=0; i<5; i++){

   				if (temp[i] == "" || temp[i] == null) {
   				 	  count++;
      

           



 message="";
 str = "   Please complete the form first to proceed!";
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
       
  setTimeout(function(){document.getElementById("message").innerHTML =""; }, 2000);  //  your code here
    }                       //  ..  setTimeout()
  }, qtime)
}
mytype();
           
                
              event.preventDefault();
              break;

    			}

				}//validation
}
				if(count==0){

					 var x = document.getElementById("container");
           var y=document.getElementById("container1");

  			   if (x.style.display === "none") {

   					  x.style.display = "block";                        
 					 } 

           else {
              
              patient+="Name:    "+f+"<br>"+
                       "Age:    "+b+"<br>"+
                       "Sex:    "+c+"<br>"+
                       "Height: "+d+" cm <br>"+
                       "Weight: "+e+" kg <br>";


              y.style.display = "block";//display container1
   					  x.style.display = "none";
 				   }

   				 event.preventDefault();
   				 question();	 
				}

}//process


function fyes(){

 
for(var i=0; i<10; i++){
  if(nurtrition==i+1){
       nurtrition_arr[i]=1;
  }
}

 // yes++;
  question();
}

function fno(){


 
for(var i=0; i<10; i++){
  if(nurtrition==i+1){
       nurtrition_arr[i]=0;
  }
}
  question();
}		

function fback(){

if(nurtrition==1){
        nurtrition=0;
        //yes=0;
         temp_calcium=0;
         temp_iodine=0;
         temp_iron=0;
         temp_vitaminA=0;
         temp_vitaminB=0;
         temp_vitaminC=0;
         temp_vitaminD=0;
         temp_vitaminE=0;
         temp_vitaminK=0;
          vitamin=[];
            
          patient   =  "<div style=\"font-weight: bold; font-size: 24; text-align: center;\">Diagnosis</div>  <br><br>"+
                 "<div style=\"font-weight: bold; \">Patient Information</div>                          <br>";
            calcium="";
iodine="";
iron="";
 vitaminB="";
vitaminC="";
vitaminD="";
 vitaminE="";
vitaminK="";
vitaminA="";

 

  document.getElementById("message").innerHTML ="";
 x = document.getElementById("container");
 y=document.getElementById("container1");
   y.style.display = "none";//display container1
              x.style.display = "block";
            
  event.preventDefault();
}
else {

  // yes-=2;
  nurtrition-=2;
  question();
    event.preventDefault();
}




}   


function symptoms1(){


        message="";
        str = " How long does unexplained weakness or tiredness it last before it goes away?";
        myArr = str.split("");
        type = 0;   
                      //  set your counter to 1
        function mytype() {         //  create a loop function
           message+=myArr[type];
          setTimeout(function() {   //  call a 3s setTimeout when the loop is called
            document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  //  your code here
            type++;                    //  increment the counter
            if (type < str.length) {           //  if the counter < 10, call the loop function
              mytype();             //  ..  again which will trigger another 
            }
                                  //  ..  setTimeout()
          }, 20)
        }
        mytype();
      
      document.getElementById("question").innerHTML = '<br><br>'+ 
                                                      '<br><br><input type="submit" class="round" value="After having a rest a couple of hours" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">'+
                                                      '<br><br><input type="submit" class="round" value="Up to 1 week" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                      '<br><br><input type="submit" class="round" value="More than 2 weeks" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">';



}

function symptoms3(){


  message="";
          str = "   How frequent does your hands and feet are cold";
          myArr = str.split("");
          type = 0;                 
          function mytype() {         
            message+=myArr[type];
            setTimeout(function() {   
              document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  
              type++;                    
              if (type < str.length) {           
                  mytype();             
              }                                   
            }, qtime)
          }
          mytype();
                 
          document.getElementById("question").innerHTML = '<br><br>'+ 
                                                          '<br><br><input type="submit" class="round" value="Always" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="Often" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="Sometimes" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="Seldom" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="Never" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';


}


function symptoms4(){


        message="";
        str = "   How long your diarrhea last?";
        myArr = str.split("");
        type = 0;   
                      //  set your counter to 1
        function mytype() {         //  create a loop function
           message+=myArr[type];
          setTimeout(function() {   //  call a 3s setTimeout when the loop is called
            document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  //  your code here
            type++;                    //  increment the counter
            if (type < str.length) {           //  if the counter < 10, call the loop function
              mytype();             //  ..  again which will trigger another 
            }
                                  //  ..  setTimeout()
          }, 20)
        }
        mytype();
      
      document.getElementById("question").innerHTML = '<br><br>'+ 
                                                      '<br><br><input type="submit" class="round" value="Up to 1 week" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                      '<br><br><input type="submit" class="round" value="1 to 2 days" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';



}

function symptoms5(){


        message="";
        str = "   What is the often cause of bleeding or swelling?";
        myArr = str.split("");
        type = 0;   
                      //  set your counter to 1
        function mytype() {         //  create a loop function
           message+=myArr[type];
          setTimeout(function() {   //  call a 3s setTimeout when the loop is called
            document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  //  your code here
            type++;                    //  increment the counter
            if (type < str.length) {           //  if the counter < 10, call the loop function
              mytype();             //  ..  again which will trigger another 
            }
                                  //  ..  setTimeout()
          }, 20)
        }
        mytype();
      
      document.getElementById("question").innerHTML = '<br><br>'+ 
                                                      '<br><br><input type="submit" class="round" value="After having a tootbrush" id="yes" name="" onclick="symptoms5toothbrush()" onmousedown="bleep2.play()">'+
                                                      '<br><br><input type="submit" class="round" value="Eating a food" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                      '<br><br><input type="submit" class="round" value="Any hard or soft physical contact" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                      '<br><br><input type="submit" class="round" value="It bleed without any physical contact" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">';



}

function symptoms5toothbrush(){


        message="";
        str = "   Do you brush hard your teeth?";
        myArr = str.split("");
        type = 0;   
                      //  set your counter to 1
        function mytype() {         //  create a loop function
           message+=myArr[type];
          setTimeout(function() {   //  call a 3s setTimeout when the loop is called
            document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  //  your code here
            type++;                    //  increment the counter
            if (type < str.length) {           //  if the counter < 10, call the loop function
              mytype();             //  ..  again which will trigger another 
            }
                                  //  ..  setTimeout()
          }, 20)
        }
        mytype();
      
      document.getElementById("question").innerHTML = '<br><br>'+ 
                                                      '<br><br><input type="submit" class="round" value="Yes" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">'+
                                                      '<br><br><input type="submit" class="round" value="No" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">';



}

function symptoms6(){


        message="";
        str = "   Is your fever recurrent?";
        myArr = str.split("");
        type = 0;   
                      //  set your counter to 1
        function mytype() {         //  create a loop function
           message+=myArr[type];
          setTimeout(function() {   //  call a 3s setTimeout when the loop is called
            document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  //  your code here
            type++;                    //  increment the counter
            if (type < str.length) {           //  if the counter < 10, call the loop function
              mytype();             //  ..  again which will trigger another 
            }
                                  //  ..  setTimeout()
          }, 20)
        }
        mytype();
      
      document.getElementById("question").innerHTML = '<br><br>'+ 
                                                      '<br><br><input type="submit" class="round" value="Yes it happen every month for more quarter year" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                      '<br><br><input type="submit" class="round" value="No it only happen few times a year " id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';



}

function symptoms8(){


        message="";
        str = "   Is your hair loss associated with head lice?";
        myArr = str.split("");
        type = 0;   
                      //  set your counter to 1
        function mytype() {         //  create a loop function
           message+=myArr[type];
          setTimeout(function() {   //  call a 3s setTimeout when the loop is called
            document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  //  your code here
            type++;                    //  increment the counter
            if (type < str.length) {           //  if the counter < 10, call the loop function
              mytype();             //  ..  again which will trigger another 
            }
                                  //  ..  setTimeout()
          }, 20)
        }
        mytype();
      
      document.getElementById("question").innerHTML = '<br><br>'+ 
                                                      '<br><br><input type="submit" class="round" value="Yes" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">'+
                                                      '<br><br><input type="submit" class="round" value="No" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">';



}

function question(){

  		  document.getElementById('head').innerHTML="Micronutrient Deficiency Symptomps";
       	nurtrition++;
     	
             document.getElementById("selection").innerHTML= '<button onclick="fback()" id="selection2" class="reset" onmousedown="bleep.play()">Return</button>';
        if(nurtrition==1){

          message="";
          str = " Do you experience weakness or tiredness despite not  engaging to  any physical activity?";
          myArr = str.split("");
          type = 0;                 //  set your counter to 1
          function mytype(){         //  create a loop function
            message+=myArr[type];
            setTimeout(function(){   //  call a 3s setTimeout when the loop is called
              document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  //  your code here
              type++;                    //  increment the counter
              if (type < str.length) {           //  if the counter < 10, call the loop function
                mytype();             //  ..  again which will trigger another 
              }
                                      //  ..  setTimeout()
            },qtime)
          }
          mytype();
        
        	document.getElementById("question").innerHTML = '<br><br>'+                                          
                                                          '<br><br><input type="submit" class="round" value="Yes" id="yes" name="" onclick="symptoms1()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="No" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';
                          

        }


        if(nurtrition==2){


          message="";
          str = "Do you have pale or yellowish skins?";
          myArr = str.split("");
          type = 0;                 
          function mytype() {         
            message+=myArr[type];
              setTimeout(function(){   
                document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  
                type++;                    
                if (type < str.length) {           
                  mytype();             
                }                                      
            }, qtime)
          }
          mytype();
      
        	document.getElementById("question").innerHTML = '<br><br>'+ 
                                                          '<br><br><input type="submit" class="round" value="Yes" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="No" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';
                                                          
        }



        if(nurtrition==3){

          message="";
          str = "   This month, have you experienced coldness in your hands and feet?";
          myArr = str.split("");
          type = 0;                 
          function mytype() {         
            message+=myArr[type];
            setTimeout(function() {   
              document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  
              type++;                    
              if (type < str.length) {           
                  mytype();             
              }                                   
            }, qtime)
          }
          mytype();
                 
        	document.getElementById("question").innerHTML = '<br><br>'+ 
                                                          '<br><br><input type="submit" class="round" value="Yes" id="yes" name="" onclick="symptoms3()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="No" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';

        }

        if(nurtrition==4){

           message="";
           str = "   Have you been experiencing diarrhea within this month?";
           myArr = str.split("");
           type = 0;                 
           function mytype() {         
             message+=myArr[type];
             setTimeout(function() {   
              document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>'; 
              type++;                    
              if (type < str.length) {           
                mytype();              
              }                                    
            }, qtime)
          }
          mytype();
      
        	document.getElementById("question").innerHTML = '<br><br>'+ 
                                                          '<br><br><input type="submit" class="round" value="Yes" id="yes" name="" onclick="symptoms4()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="No" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';
        }

        if(nurtrition==5){

           message="";
           str = "  Does your gum easily swell and bleed?";
           myArr = str.split("");
           type = 0;                 
           function mytype() {         
             message+=myArr[type];
            setTimeout(function() {   
              document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>'; 
              type++;                    
              if (type < str.length) {           
                mytype();             
              }                                   
            }, qtime)
           }
           mytype();
  
        	document.getElementById("question").innerHTML = '<br><br>'+ 
                                                          '<br><br><input type="submit" class="round" value="Yes" id="yes" name="" onclick="symptoms5()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="No" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';
        }

        if(nurtrition==6){


          message="";
          str = " When was the last time you suffered from fever?";
          myArr = str.split("");
          type = 0;                 
          function mytype() {         
            message+=myArr[type];
            setTimeout(function() {   
              document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>'; 
              type++;                    
              if (type < str.length) {          
                mytype();             
              }                                   
            }, qtime)
          }
          mytype();
          
        	document.getElementById("question").innerHTML = '<br><br>'+ 
                                                           '<br><br><input type="submit" class="round" value="Last Month" id="yes" name="" onclick="symptoms6()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="Within this month" id="yes" name="" onclick="symptoms6()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="More than 2 months" id="yes" name="" onclick="symptoms6()" onmousedown="bleep2.play()">';
        }

        if(nurtrition==7){

          message="";
          str = "  Do you have brittle nails or teeth?";
          myArr = str.split("");
          type = 0;                 
          function mytype() {         
             message+=myArr[type];
            setTimeout(function() {   
              document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  //  your code here
              type++;                    
              if (type < str.length) {           
                mytype();              
              }                                
            }, qtime)
          }
          mytype();
   
        	document.getElementById("question").innerHTML = '<br><br>'+ 
                                                          '<br><br><input type="submit" class="round" value="Yes" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="No" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';
        }

        if(nurtrition==8){

          message="";
          str = "   Are you suffering in  hair loss?";
          myArr = str.split("");
          type = 0;                
          function mytype() {        
            message+=myArr[type];
            setTimeout(function() {   
             document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  
              type++;                  
              if (type < str.length) {           
                mytype();            
              }                                   
            }, qtime)
          }
          mytype();
         
          document.getElementById("question").innerHTML = '<br><br>'+ 
                                                          '<br><br><input type="submit" class="round" value="Yes" id="yes" name="" onclick="symptoms8()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="No" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';
        }
        if(nurtrition==9){

          message="";
          str = "   Do you suffer from unexplained weightloss or loss in appetite for the past week or months?";
          myArr = str.split("");
          type = 0;                
          function mytype() {        
             message+=myArr[type];
            setTimeout(function() {  
              document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>'; 
              type++;                   
              if (type < str.length) {          
                mytype();            
              }                                 
            }, qtime)
          }
          mytype();
  
          document.getElementById("question").innerHTML = '<br><br>'+ 
                                                          '<br><br><input type="submit" class="round" value="Yes" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="No" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';
        }

        if(nurtrition==10){

          message="";
          str = "   Experiencing difficulty or trouble in learning?";
          myArr = str.split("");
          type = 0;                 
          function mytype() {         
            message+=myArr[type];
            setTimeout(function() {  
              document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  
              type++;                  
              if (type < str.length) {           
                mytype();             
              }                                 
            }, qtime)
          }
          mytype();

        	document.getElementById("question").innerHTML = '<br><br>'+
                                                           '<br><br><input type="submit" class="round" value="Always" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="Often" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="Sometimes" id="yes" name="" onclick="fyes()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="Seldom" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">'+
                                                          '<br><br><input type="submit" class="round" value="Never" id="yes" name="" onclick="fno()" onmousedown="bleep2.play()">';
        }
        
        if(nurtrition==11){ 

        for(var i=0; i<10; i++){
          if(nurtrition_arr[i]==1){
              yes++;
              post_score++;
          }
        }

  if(nurtrition_arr[0]==1||nurtrition_arr[7]==1|| nurtrition_arr[9]==1){
      vitamin.push("Iodine");
      temp_iodine=1;
      iodine='<div style=\"font-weight: bold; \">Iodine</div>  '+
            '<ol>'+
            '<li>Enough intake of Iodized Salt</li>'+
            '<li>Enough intake of seafoods and bread enriched or fortified with iodine</li>'+
            '</ol> ';
  }

  if( nurtrition_arr[0]==1|| nurtrition_arr[1]==1|| nurtrition_arr[4]==1|| nurtrition_arr[9]==1){
      vitamin.push("Iron");
      temp_iron=1;
       iron='<div style=\"font-weight: bold; \">Iron</div>  '+
            '<ol>'+
            '<li>Increase intake of liver, meats and eggs</li>'+
            '<li>Get enough serving of iron enriched breads and cereals</li>'+
            ' <li>Get enough intake of tofu and green leafy vegetables, legumes and nuts</li>'+
            '</ol> ';

  }

  if( nurtrition_arr[6]==1||nurtrition_arr[7]==1){
      vitamin.push("Calcium");
      temp_calcium=1;

      calcium='<div style=\"font-weight: bold; \">Calcium</div>  '+
            '<ol>'+
            '<li>Increase intake of milk and milk products '+
            '<li>Get enough intake of oysters, and small fishes (anchovies, and sardines) '+
            ' <li>Get enough intake of tofu and green leafy vegetables</li>'+
            '</ol> ';
  }

    if(nurtrition_arr[3]==1){
      vitamin.push("Vitamin A");
      temp_vitaminA=1;
       vitaminA='<div style=\"font-weight: bold; \">Vitamin A</div>  '+
            '<ol>'+
            '<li>Increase intake of retinol rich foods such as liver, egg yolk, cream, butter, or fortified milk and cheese and margarine '+
            '<li>2. Increase intake of beta carotene rich foods green and yellow vegetables, deep orange fruits and vegetables'+
            '</ol> ';
  }

  if( nurtrition_arr[0]==1|| nurtrition_arr[2]==1|| nurtrition_arr[3]==1|| nurtrition_arr[5]==5|| nurtrition_arr[9]==1){
      vitamin.push("Vitamin B");
        temp_vitaminB=1;

       vitaminB='<div style=\"font-weight: bold; \">Vitamin B</div>  '+
            '<ol>'+
            '<li>Increase intake on vitamin B rich foods. Such as green leafy vegetables such as spinach, kangkong, kale</li>'+
            '<li>Increase intake on Dairy Products such as milk, cheese, egg</li>'+
            ' <li>Increase protein intake such as meat, such as chicken and red meat</li>'+
             '<li>Increase intake of liver and kidney</li>'+
            '<li>Increase intake of whole grains and cereals</li>'+
            '</ol> ';
  }

  if( nurtrition_arr[4]==1|| nurtrition_arr[5]==1|| nurtrition_arr[7]==1){
      vitamin.push("Vitamin C");
        temp_vitaminC=1;

      vitaminC='<div style=\"font-weight: bold; \">Vitamin C</div>  '+
            '<ol>'+
            '<li>Increase intake of vitamin-c rich foods such as those coming from Citrus fruits. '+
            '<li>Make sure to have a balanced diet. '+
            ' <li>Get enough intake of vegetables especially those from dark green and leafy vegetables.</li>'+
            '</ol> ';
  }

  

  if(nurtrition_arr[1]==1||nurtrition_arr[6]==1){
      vitamin.push("Vitamin D");
        temp_vitaminD=1;

       vitaminD='<div style=\"font-weight: bold; \">Vitamin D</div>  '+
            '<ol>'+
            '<li>Increase intake of fortified or irradiated milk, butter, margarine and egg '+
            '<li>Increase intake of cereal, liver and oily fish like sardines '+
            ' <li>Get enough sunlight daily. </li>'+
            '</ol> ';
  }

  if(nurtrition_arr[5]==1||nurtrition_arr[7]==1){
      vitamin.push("Vitamin E");
        temp_vitaminE=1;

      vitaminE='<div style=\"font-weight: bold; \">Vitamin E</div>  '+
            '<ol>'+
            '<li>Increase intake of PUFA-rich foods such as those from plant oils (sunflower seed oil) '+
            '<li>Increase intake of green leafy vegetables '+
            ' <li>Increase intake of wheat and whole-wheat products, nuts, seeds </li>'+
            '</ol> ';

  }

  if(nurtrition_arr[4]==1){
      vitamin.push("Vitamin K");
        temp_vitaminK=1;

       vitaminK='<div style=\"font-weight: bold; \">Vitamin K</div>  '+
            '<ol>'+
            '<li>Green leafy vegetables, such as kale, spinach, turnip greens, collards, Swiss chard, mustard greens, parsley, romaine, and green leaf lettuce. '+
            '<li>Vegetables such as Brussels sprouts, broccoli, cauliflower, and cabbage '+
            ' <li>Fish, liver, meat, eggs, and cereals (contain smaller amounts)'+
            '</ol> ';
  }
  if(nurtrition_arr[8]==1){
      vitamin.push("Zinc");
        temp_zinc=1;

       zinc='<div style=\"font-weight: bold; \">Zinc</div>  '+
            '<ol>'+
            '<li>Increase intake of protein-rich foods: meats, fish, shelffish, and poultry. '+
            '<li>Enough serving of ruits and vegetables as well as grains '+
            '</ol> ';
  }


          intervention=iron+iodine+calcium+vitaminA+vitaminB+vitaminC+vitaminD+vitaminK+zinc;


        var temp_lenght= vitamin.length;

        for(var i=0; i<temp_lenght; i++){
          
            if(i==0){
              temp_vitamin+=vitamin[i];
            }
            else{
              temp_vitamin+=", "+vitamin[i];
            }
          
        }


          if(yes==0){
              
              temp_micronutrient="No";       
          }
        
          
          document.getElementById("question").innerHTML ="";
          event.preventDefault();
        	evaluate(); 
        }
		   
}//Question


function evaluate(){

      var weight =document.getElementById("weight");
  
      var height =document.getElementById("height");
      var age    =document.getElementById("age");
      var sex    =document.getElementById("sex");
      
      var H=0;
      var L=0;
      var S=0;
      var M=0;
      var W=0;
      var stunting=0;
      var underweight=0;
      var wasting=0;

    //BMI computation
      bmi=weight.value/(Math.pow(height.value*.01,2));
      bmi=bmi.toFixed(1);
      patient+="BMI: "+bmi+" kg/m²";

  if(sex.value=="female"){

    //WASTING FOR GIRLS
      if(age.value==5){

        W=bmi;
        L=-0.8886;
        M=15.2441;
        S=0.09692;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==6){

        W=bmi;
        L=-1.0956;
        M=15.276;
        S=0.10241;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==7){

        W=bmi;
        L=-1.2693;
        M=15.4211;
        S=0.10792;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==8){

        W=bmi;
        L=-1.3966;
        M=15.7107;
        S=0.11335;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==9){

        W=bmi;
        L=-1.4688;
        M=16.1358;
        S=0.11859;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==10){

        W=bmi;
        L=-1.4859;
        M=16.6612;
        S=0.12346;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==11){

        W=bmi;
        L=-1.4567;
        M=17.3044;
        S=0.12782;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==12){

        W=bmi;
        L=-1.3945;
        M=18.063;
        S=0.13158;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else{

      }


      if(deviation<-2&&deviation>-3){
     
          subform+="Wasted (low weight-for-height)<br> ";
          underweight_count++;
      }

      else if(deviation<-3){
          
          subform+="Severely Wasted (low weight-for-height)<br> ";
          underweight_count++;

               temp_wasted="severe";
      }
       
      else{

          temp_wasted="No";

      }

    //UNDERWEIGHT FOR GIRLS
      if(age.value==5){

        W=weight.value;
        L=-1.287691525;
        M=18.02313904;
        S=0.141190842;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==6){

        W=weight.value;
        L=-1.326763834;
        M=20.33635961;
        S=0.149589838;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==7){

        W=weight.value;
        L=-1.265548787;
        M=22.86804258;
        S=0.159693163;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==8){

        W=weight.value;
        L=-1.127684095;
        M=25.7570168;
        S=0.172147043;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==9){

        W=weight.value;
        L=-0.970685789;
        M=29.14291171;
        S=0.185201039;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==10){

        W=weight.value;
        L=-0.846872805;
        M=33.06392318;
        S=0.195947008;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

       else if(age.value==11){

        W=weight.value;
        L=-0.787374433;
        M=37.39088668;
        S=0.201971282;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

       else if(age.value==12){

        W=weight.value;
        L=-0.807599577;
        M=41.82797963;
        S=0.202298783;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else{

      }

        if(underweight<-2&&underweight>-3){
          
          subform+="Underweight (low weight-for-age)<br> ";
          underweight_count++;
        }

        else if(underweight<-3){
          
          subform+="Severely Underweight (low weight-for-age)<br> ";
          underweight_count++;

          temp_underweight="severe";
        }
       
        else{

          temp_underweight="No";
        }

      //STUNTING FOR GIRLS
      if(age.value==5){

        H=height.value;
        L=1;
        M=109.6016;
        S=0.04355;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==6){

        H=height.value;
        L=1;
        M=115.6039;
        S=0.04454;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==7){

        H=height.value;
        L=1;
        M=121.2843;
        S=0.04531;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==8){

        H=height.value;
        L=1;
        M=127.0424;
        S=0.04585;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==9){

        H=height.value;
        L=1;
        M=132.9989;
        S=0.04613;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }
      else if(age.value==10){

        H=height.value;
        L=1;
        M=139.1575;
        S=0.04612;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==11){

        H=height.value;
        L=1;
        M=145.528;
        S=0.0458;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==12){

        H=height.value;
        L=1;
        M=151.7182;
        S=0.04516;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }
  
      else{

      }


     if(stunting<-2&&stunting>-3){

          subform+="Stunted (low height-for-age)<br> ";
          stunting_count++;
      }

    

       else if(stunting<-3){

          subform+="Severely Stunted (low height-for-age)<br> ";
          stunting_count++;

          temp_stunted="severe";
      }

      else{

        temp_stunted="No";
      }
  
  }//GIRLS

  if(sex.value=="male"){


      //WASTING FOR BOYS
      if(age.value==5){

        W=bmi;
        L=-0.7387;
        M=15.2641;
        S=0.0839;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==6){

        W=bmi;
        L=-1.0144;
        M=15.3169;
        S=0.08711;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==7){

        W=bmi;
        L=-1.2656;
        M=15.5019;
        S=0.09103;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==8){

        W=bmi;
        L=-1.479;
        M=15.7606;
        S=0.09567;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==9){

        W=bmi;
        L=-1.6433;
        M=16.0781;
        S=0.10082;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==10){

        W=bmi;
        L=-1.7468;
        M=16.4807;
        S=0.10609;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==11){

        W=bmi;
        L=-1.7873;
        M=16.985;
        S=0.1111;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==12){

        W=bmi;
        L=-1.7719;
        M=17.5877;
        S=0.11556;
        deviation = (Math.pow((W/M), L)-1)/(S*L);
      }

      else{

      }


       if(deviation<-2&&deviation>-3){
          
          subform+="Wasted (low weight-for-height)<br> ";
          underweight_count++;
        }

        else if(deviation<-3){
          
          subform+="Severely Wasted (low weight-for-height)<br> ";
          underweight_count++;

          temp_wasted="severe";
        }
       
        else{
          temp_wasted="No";
        }


    //UNDERWEIGHT FOR BOYS
    if(age.value==5){

        W=weight.value;
        L=-1.000453886;
        M=18.48592413;
        S=0.129879257;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
     
        
      }

      else if(age.value==6){

        W=weight.value;
        L=-1.087471249;
        M=20.77769565;
        S=0.139142773;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==7){

        W=weight.value;
        L=-1.236497304;
        M=23.16741888;
        S=0.147337375;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==8){

        W=weight.value;
        L=-1.359710858;
        M=26.2128399;
        S=0.157591579;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==9){

        W=weight.value;
        L=-1.3394054539;
        M=28.68130005;
        S=0.166659247;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==10){

        W=weight.value;
        L=-1.206688407;
        M=32.08799062;
        S=0.17892874;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==11){

        W=weight.value;
        L=-1.019277299;
        M=36.07262569;
        S=0.190029545;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else if(age.value==12){

        W=weight.value;
        L=-0.836961905;
        M=40.67443658;
        S=0.196591612;
        underweight = (Math.pow((W/M), L)-1)/(S*L);
      }

      else{

      }


    if(underweight<-2&&underweight>-3){
          
          subform+="Underweight (low weight-for-age)<br> ";
          underweight_count++;
        }
    else if(underweight<-3){
          
          subform+="Severely Underweight (low weight-for-age)<br> ";
          underweight_count++;

          temp_underweight="severe";
        }
       
    else{
        temp_underweight="No";
    }

      //STUNTING FOR BOYS
      if(age.value==5){

        H=height.value;
        L=1;
        M=110.2647;
        S=0.04164;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==6){

        H=height.value;
        L=1;
        M=116.4432;
        S=0.04257;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==7){

        H=height.value;
        L=1;
        M=122.2053;
        S=0.0435;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==8){

        H=height.value;
        L=1;
        M=127.7129;
        S=0.04446;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==9){

        H=height.value;
        L=1;
        M=133.0031;
        S=0.04543;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==10){

        H=height.value;
        L=1;
        M=138.2119;
        S=0.04633;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==11){

        H=height.value;
        L=1;
        M=143.5795;
        S=0.04709;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else if(age.value==12){

        H=height.value;
        L=1;
        M=149.6212;
        S=0.04755;
        stunting=(Math.pow((H/M), L)-1)/(S*L);
      }

      else{

      }
      
      if(stunting<-2&&stunting>-3){

          subform+="Stunted (low height-for-age)<br> ";
          stunting_count++;
      }

      else if(stunting<-3){

          subform+="Severely Stunted (low height-for-age)<br> ";
          stunting_count++;

          temp_stunted="severe";
      }
       
      else{
          temp_stunted="No";
      }
 
  }//BOYS

  
    if(stunting_count!=0||underweight_count!=0||yes>0){

if(intervention==0){
  temp_vitamin+="none";
}


        diagnosis+="Undernutrition";
        subform=subform+temp_vitamin+analysis;
        document.getElementById("diagnosis").innerHTML = diagnosis + "<br><br>" +subform;
       
        ADVICES();
    }

    else{


        
      
        document.getElementById('head').innerHTML="Diagnosis"+ ' <meta http-equiv="refresh" content="60">';
        subform+="none";



        temp_vitamin+="none";



    
        diagnosis+="None";
        temp_diagnosis="No";
        document.getElementById("diagnosis").innerHTML = diagnosis + "<br><br>" +subform+ "<br>" +temp_vitamin+analysis;

        document.getElementById("selection").innerHTML= '<button onclick="myFunction2()" id="selection2" class="neutral"  onmousedown="bleep.play()">Diagnosis</button>&ensp;'+
                                                '<button onclick="myFunction3()" id="selection2" class="neutral"  onmousedown="bleep.play()">Advise</button>&ensp;'+

                                                '<button class="neutral" onmousedown="bleep.play()" onclick="Export2Word(\'diagnosisfile\', \'word-content.docx\');">Download</button>&ensp;'+
                                                '<input class="neutral" type="submit" id="check" name="save" value="Submit Results"  onmousedown="bleep.play()">';


        ADVICES();
    }
  
		  //event.preventDefault();

}//EVALUATE	
				

function ADVICES(){

    document.getElementById('head').innerHTML="Diagnosis";
    var calorie="";
    var fluid="";
  
if(age.value==5){
  calorie="1300 kcal";
  fluid="<li>Drink at least 5 or more glasses of water per day and 1 glass of milk daily</li>";
}
if(age.value>5&&age.value<11){
   calorie="1500 kcal";
   fluid="<li>Drink at least 6 or more glasses of water per day and 1 glass of milk daily</li>";
}
if(age.value>10){
    calorie="2000 kcal";
  fluid="<li>Drink at least 8 or more glasses of water per day and 1 glass of milk daily</li>";

}

     
   
if(temp_diagnosis=="undernourish"||temp_diagnosis!="undernourish"){
            advice +="<ul>"+
            " <li>Sleep for Atleast 8 hours a day</li> "+
                    " <li>Make sure to eat a balance meal. Have a variety of fresh foods every day.</li> "+
                     " <li>Avoid skipping your meals. Eat breakfast every day.</li> "+
                      " <li>Choose home-cooked meals over fast-food meals/processed foods.  Eat a variety of fresh and slightly processed foods "+
                      fluid+
                       " <li>Eat enough servings of fruits and vegetables every day. Snack on fruits and vegetables. You can get your energy sources from them. (They are rich with Vitamin C, E and B complex)."+
                        " <li>Limit intake of food with Trans Fat (processed with high fat etc.) substitute with grains or oil from fish, vegetable, legumes and nuts.</li> "+
                     " <li>Choose low sugar foods. </li> "+
                     " <li>Increase protein intake thru protein-rich foods.</li> "+
                     " <li>Limit high-sugar and high-sodium foods. </li> "+
                      " <li>Drink enough water per day.  "+
                       " <li>Get enough sleep. At least 8 hours to 11 hours sleep daily. "+
                        " <li>More Fibre! Example of foods that are rich in dietary fiber: e.g. oats, corn, starchy root s and tubers e.g. potatoes, gabi and kamote; fat-free milk</li> "+
                     " <li>Choose low sugar foods. </li> "+
                       " <li>The total calorie intake should be "+calorie+"</li> "+
                    "</ul>";

  }  

advice=advice+intervention;
document.getElementById("advice").innerHTML = advice;



document.getElementById("selection").innerHTML= '<button onclick="myFunction2()" id="selection2" class="neutral"  onmousedown="bleep.play()">Diagnosis</button>&ensp;'+
  '<button onclick="myFunction3()" id="selection2" class="neutral"  onmousedown="bleep.play()">Advise</button>&ensp;'+
                                                '<button onclick="myFunction4()" id="selection2" class="neutral"  onmousedown="bleep.play()">Graph</button>&ensp;'+
                                                '<button class="neutral" onmousedown="bleep.play()" onclick="Export2Word(\'diagnosisfile\', \'word-content.docx\');">Download</button>&ensp;'+
                                                '<input class="neutral" type="submit" id="check" name="save" value="Submit Result"  onmousedown="bleep.play()">';

   var input =  '<input  type="hidden" name="bmi" value="' +bmi+ '">'
               +'<input  type="hidden" name="sex" value="' + sextemp + '">'
               +'<input  type="hidden" name="temp_diagnosis" value="' + temp_diagnosis + '">'
               +'<input  type="hidden" name="temp_micronutrient" value="' + temp_micronutrient + '">'
               +'<input  type="hidden" name="temp_wasted" value="' + temp_wasted + '">'
               +'<input  type="hidden" name="temp_stunted" value="' +temp_stunted+ '">'
               +'<input  type="hidden" name="temp_underweight" value="' + temp_underweight + '">'
               +'<input  type="hidden" name="iron" value="' +temp_iron+ '">'
               +'<input  type="hidden" name="iodine" value="' + temp_iodine + '">'
               +'<input  type="hidden" name="calcium" value="' + temp_calcium + '">'
               +'<input  type="hidden" name="vitaminA" value="' + temp_vitaminA + '">'
                +'<input  type="hidden" name="vitaminB" value="' + temp_vitaminB + '">'
                 +'<input  type="hidden" name="vitaminC" value="' + temp_vitaminC + '">'
                  +'<input  type="hidden" name="vitaminD" value="' + temp_vitaminD + '">'
                   +'<input  type="hidden" name="vitaminE" value="' + temp_vitaminE + '">'
                    +'<input  type="hidden" name="vitaminK" value="' + temp_vitaminK + '">'
                    +'<input  type="hidden" name="zinc" value="' + temp_zinc + '">';

             
                







//GRAPH SECTION for  Weight
var arr_weight=[];
var wfa=[];

if(sextemp=="male"){
 arr_weight=  [14.65692044, 16.20370229, 18.25535252, 20.1146687, 21.67685313, 23.89264433, 24.09264433, 28.87256769];
 wfa = arr_weight[age.value-5];    
}
if(sextemp=="female"){
 arr_weight= [14.15692044, 15.80370229, 17.05535252, 19.2146687,21.17685313, 23.49264433, 26.29626062, 29.47256769]
 wfa = arr_weight[age.value-5];    
}

                var prev_weight = document.getElementById("prev_weight");  
                var xValues = ["Previous-diagnosis","Current-diagnosis"];

                new Chart("myChart2", {
                  type: "line",
                  data: {
                    labels: xValues,
                    datasets: [ { 
                      label: 'You',
                      data: [prev_weight.value, weight.value],
                      backgroundColor: "green",
                      borderColor: "lightgreen",

                      fill:false
                  
                    }, 
                    { 
                      label: 'Minimum Weight Required',
                      data: [wfa, wfa ],
                      backgroundColor: "blue",
                      borderColor: "lightblue",

                      fill:false
                  
                    },]
                  },
                  options: {


                      legend: {display: true,},
                       title: {
                       
                        display: true,
                        fontFamily: "Times New Roman",
                        fontSize: 24,
                         text:'Weight for Age Comparison Base on Centers for Disease Control and Prevention '
                       
                      }
                    }
                });


//GRAPH SECTION for  Height
var arr_height=[];
var hfa=[];

if(sextemp=="male"){
 arr_height=  [101.082,106.529, 111.573, 116.357, 120.918, 125.405, 130.057, 135.392];
 hfa = arr_height[age.value-5];    
}
if(sextemp=="female"){
 arr_height= [100.055, 105.306, 110.294, 115.393, 120.728, 126.322, 132.198, 138.015];
 hfa = arr_height[age.value-5];    
}

                var prev_height = document.getElementById("prev_height");  
               // var xValues = ["Previous-diagnosis","Current-diagnosis"];

                new Chart("myChart3", {
                  type: "line",
                  data: {
                    labels: xValues,
                    datasets: [ { 
                      label: 'You',
                      data: [prev_height.value, height.value],
                      backgroundColor: "green",
                      borderColor: "lightgreen",

                      fill:false
                  
                    }, 
                    { 
                      label: 'Minimum Height Required',
                      data: [hfa, hfa ],
                     backgroundColor: "blue",
                      borderColor: "lightblue",

                      fill:false
                  
                    },]
                  },
                  options: {


                      legend: {display: true,},
                       title: {
                       
                        display: true,
                        fontFamily: "Times New Roman",
                        fontSize: 24,
                         text:'Height for Age Comparison Base on World Health Organization'
                       
                      }
                    }
                });


//GRAPH SECTION for  BMI
var arr_bmi=[];
var bfa=[];

if(sextemp=="male"){
 arr_bmi=  [13.031, 13.047, 13.159, 13.317, 13.508, 13.759, 14.087,14.49];
 bfa = arr_bmi[age.value-5];    
}
if(sextemp=="female"){
 arr_bmi= [12.748, 12.699, 12.743, 12.902, 13.165, 13.501, 13.925, 14.436];
 bfa = arr_bmi[age.value-5];    
}

                var prev_bmi = document.getElementById("prev_bmi"); 

                if(prev_bmi.value==10000){
                  prev_bmi.value=0;
                }
               // var xValues = ["Previous-diagnosis","Current-diagnosis"];

                new Chart("myChart4", {
                  type: "line",
                  data: {
                    labels: xValues,
                    datasets: [ { 
                      label: 'You',
                      data: [prev_bmi.value, bmi],
                      backgroundColor: "green",
                      borderColor: "lightgreen",

                      fill:false
                  
                    }, 
                    { 
                      label: 'Minimum BMI Required',
                      data: [bfa, bfa ],
                      backgroundColor: "blue",
                      borderColor: "lightblue",

                      fill:false
                  
                    },]
                  },
                  options: {


                      legend: {display: true,},
                       title: {
                       
                        display: true,
                        fontFamily: "Times New Roman",
                        fontSize: 24,
                         text:'BMI for Age Comparison Base on World Health Organization'
                       
                      }
                    }
                });



if(temp_stunted=="No"){
}
else{
post_score++;
}
if(temp_wasted=="No"){
}
else{
post_score++;
}
if(temp_underweight=="No"){
}
else{
post_score++;
}


var health_score=0;




if(post_score==0&&pre_score.value==0){
   str="Your general health is still great or is in good shape.!!";
}
else if(post_score<pre_score.value){

    health_score= pre_score.value-post_score;

    if(health_score>7){
       str="Your overall health greatly improve";
    }
    else if(health_score>4){
        str="Your overall health improve";
    }
    else{
        str="Your Overall health slightly improve";
    }

}
else{
    str="Your general health isn't improving or is in poor shape.";
}


 message="";
         
          myArr = str.split("");
          type = 0;                 
          function mytype() {        
            message+=myArr[type];
            setTimeout(function() {   
              document.getElementById("message").innerHTML ='<h2 class="thought" style="position: absolute; left: 335px; top: 100px">' +message+'</h2>';  //  your code here
              type++;                   
              if (type < str.length) {           
                mytype();            
              }
              else{
                 setTimeout(function(){document.getElementById("message").innerHTML =""; }, 5000);
              }                                  
            }, qtime)
          }
          mytype();







//DIagnosis file
   document.getElementById("diagnosisfile").innerHTML = patient+
                                                        '<br><br>'+diagnosis+
                                                        '<br><br>'+subform+
                                                        '<br><br><br>'+patient2+
                                                        advice +
                           '<br><br><br>'+"<div style=\"font-weight: bold; font-size: 12; text-align: left;\"> Signed by:&ensp;MCL</div>"+
                            '<div style=\"font-weight: bold; font-size: 12; text-align: left;text-decoration: overline;\">&emsp;&emsp;&emsp;&emsp;&emsp;MARIA CLARICE G. LOPEZ, RND</div>';

   document.getElementById("input").innerHTML = input;

}//ADVICES


   
   