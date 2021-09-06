<?php 

   ob_start();
   session_start();


   include '../process/db.php';

   $session=$_SESSION['admin_username'];

if (!empty($session)) {
header("Location:production/index.php");
}
else{
header("Location:production/login.php");

}

 ?>