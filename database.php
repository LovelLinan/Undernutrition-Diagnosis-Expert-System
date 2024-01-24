<?php

$server = "sql109.epizy.com";//MySQL Hostname
$username = "epiz_30507181";//MySQL Username
$password = "OAvHXVq9ewPInSd";//MySQL Passqword
$dbname="epiz_30507181_nut";//Database Name

$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
//	die ("connection fail:".mysqli_connect_error());
}
else{
    //echo '<html style=" background-color: #c3f0e9;"></html>';
}

 /* $sql = "INSERT INTO pre_diagnosis(name) VALUES ('lovel')"; 

$worked= mysqli_query($conn,$sql); 

echo "Error : cannot add to database: ".mysqli_errno($conn);*/

/* mysqli_query($conn, "
            CREATE TABLE post_diagnosis (
             
                id INT(11) UNSIGNED AUTO_INCREMENT 	PRIMARY KEY,
username VARCHAR(255) 			DEFAULT	 NULL,
name VARCHAR(255) 					DEFAULT	 NULL,
age INT(11) 						DEFAULT	 NULL,
sex VARCHAR(255) 					DEFAULT NULL,
height VARCHAR(255)					DEFAULT NULL,
weight VARCHAR(255)					DEFAULT NULL,
bmi VARCHAR(255)					DEFAULT NULL,
micronutrient VARCHAR(255)			DEFAULT NULL,
stunted VARCHAR(255)				DEFAULT NULL,
underweight VARCHAR(255)			DEFAULT NULL,
wasted VARCHAR(255)					DEFAULT NULL,
calcium VARCHAR(255)					DEFAULT NULL,
iodine VARCHAR(255)					DEFAULT NULL,
iron VARCHAR(255)					DEFAULT NULL,
vitaminA VARCHAR(255)					DEFAULT NULL,
vitaminB VARCHAR(255)					DEFAULT NULL,
vitaminC VARCHAR(255)					DEFAULT NULL,
vitaminD VARCHAR(255)					DEFAULT NULL,
vitaminE VARCHAR(255)					DEFAULT NULL,
vitaminK VARCHAR(255)					DEFAULT NULL,
zinc VARCHAR(255)					DEFAULT NULL,
diagnosis VARCHAR(255)				DEFAULT NULL,
date VARCHAR(255) 					DEFAULT NULL
            );
        ");


*/


?>
