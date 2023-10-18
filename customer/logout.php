<?php
session_start();
$pass = $_SESSION['pass'];
?>


<?php
 include('/wamp64/www/mobshop/admin/connection.php');
  $dis="DELETE FROM `register` WHERE `password` = '$pass'";
    if(mysqli_query($conn,$dis))
    {
        header('location:login.php');
    }
   
?>