<?php
include('/wamp64/www/mobshop/admin/connection.php');
 if(isset($_POST['ship']))
 {
 $name= $_POST['name'];
 $address=$_POST['address'];
 $pincode=$_POST['pincode'];
 $city=$_POST['city'];
 $contry=$_POST['contry'];
 session_start();
   $_SESSION['hname'] = $name;
   $_SESSION['address'] = $address;
 $sql = "INSERT INTO `shipping`(`city`, `pincode`, `name`, `address`, `contry`) VALUES('$city','$pincode','$name','$address','$contry')";
 if(mysqli_query($conn,$sql))
 { 
    echo"<script> alert('shipping is successfully complete');</script>";
    header('location:purchase.php');
 }
 else
 {
    die("insertion failed");
 }
 
}
?>