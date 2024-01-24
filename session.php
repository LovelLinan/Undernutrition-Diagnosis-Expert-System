  <?php
session_start();

 $_SESSION['count']++;

if( $_SESSION['count'] == 1){
   header('Location: home.php');

}




  ?>