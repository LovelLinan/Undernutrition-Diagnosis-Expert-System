


   <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <link href="http://nutrisystemofficial.42web.io/css/expertlayout.css" rel="stylesheet"/>
    <title>Expert System</title>

    <img src="http://nutrisystemofficial.42web.io/css/medical.png" style="z-index: -1; position: fixed; left: 0px;" height="100%" width="100%">
  </head>

<div  style=" position: fixed; font-size: 40px; left: 0px; top: 0px; background:linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 27%, rgba(0,212,255,1) 100%);    width: 100%; z-index: 1; height: 57px; padding: 5px;" > <font  style="color:cyan; font-weight: bold; ">&emsp; <?php echo $Nav; ?></font> </div>
<!--☰-->

<br>

<style>

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 5;
  top: 0;
  left: 0;
  background-color: lightblue;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 12px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: black

}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.a:hover{
  background: linear-gradient(90deg, rgba(79,209,197,1) 0%, rgba(129,230,217,1) 100%);
}
</style>

<body>

<div id="mySidenav" class="sidenav" style="background-image: url('http://nutrisystemofficial.42web.io/frame3.png'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: -150px;background-color: #ddf0f4;">

  <a href="javascript:void(0)" class="closebtn" style="user-select: none; font-size:40px; font-weight: bold; " onclick="closeNav()">✖</a>
    <a href="home.php" class="a">Home</a>
  <a href="index.php" class="a">Diagnosis</a>
  <a href="results.php" class="a">Statistisc</a>
  <!--a href="graphs.php" class="a">Reference</a-->
 
   <a href="developer.php" class="a">Developer</a>
    <a href="terms.php" class="a">Terms<font style="color: transparent;">_</font>of<font style="color: transparent;">_</font>Service</a>
     <a href="about.php" class="a">About</a>
  <!--a href="practice.php" class="a">practice</a-->
  <!--a href="home.php" class="a">Exit</a-->
</div>



<span style="font-size:40px; font-weight: bold; cursor:pointer; z-index: 4; position: fixed; top: 0px; left: 10px; user-select: none; color: #ddf0f4;" 
onclick="openNav()" >&#9776; </span>

<script>


function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

