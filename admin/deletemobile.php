<?php
$name=$_GET['name'];
include('connection.php');
    
    $delete = "DELETE FROM `addmobile` WHERE mname = '$name'";
    if(mysqli_query($conn,$delete)){
        echo "<script>alert('".$name."is deleted')</script>";
        header('location:addmobile.php');
    }
    else{
        die("delection damped".mysqli_error($conn));
    }
    
    mysqli_close($conn);
 
    ?>