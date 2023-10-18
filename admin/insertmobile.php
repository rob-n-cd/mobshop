<?php
include('connection.php');
if(isset($_POST['sub']))
{
    $brand = $_POST['options'];
    $mobname = $_POST['name'];
    $mobsoft = $_POST['s/w'];
    $price = $_POST['price'];
    $camera = $_POST['camera'];
    $battery = $_POST['time'];
    $type = $_POST['option'];
        $image = $_FILES['image'];
        $filename = $image['name'];
        $tmpname = $image['tmp_name'];
       
        $filesize = $image['size'];
        $validfilextension = array('jpg', 'jpeg', 'png');
        $extensionsperate = explode('.',$filename);
        $filextension = strtolower(end($extensionsperate));
        if(!in_array($filextension,$validfilextension))
        {
            echo "<script> alert('Invalid Image Extention');</script>";
        }
        else if($filesize > 10000000){
            echo "<script> alert('IMAGE IS TOO LARGE');</script>";
        }
        else{
            $uplode_image = 'img/'.$filename;
           
            move_uploaded_file($tmpname,$uplode_image);
        }
 $sql = "INSERT INTO `addmobile`(`mname`, `msoft`, `mprice`, `mcamera`, `mbattery`, `mtype`, `mimg`,`brand`) VALUES ('$mobname','$mobsoft','$price','$camera','$battery','$type','$filename','$brand')";
 if(mysqli_query($conn,$sql))
 {
   
     header('location:addmobile.php');
     
 }
 else
 {echo "not inserted";}
}
 
?>