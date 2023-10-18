<?php
include('/wamp64/www/mobshop/admin/connection.php');
$name=$_GET['cname'];
    
    $delect = "DELETE FROM `mycart` WHERE `name` = '$name'";
    if(mysqli_query($conn,$delect)){
        echo "delection is successfull";
        header('location:cartdisplay.php');
    }
    else{
        die("delection damped".mysqli_error($conn));
    }
    
    mysqli_close($conn);
 
    ?>