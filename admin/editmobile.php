<?php
include('connection.php');
$mname=$_GET['name'];
$dis = mysqli_query($conn,"SELECT * FROM `addmobile` where mname = '$mname'");
$row = mysqli_fetch_array($dis);
?>

<html>
    <title>edit form</title>
    <link rel="stylesheet" href="addmobile.css">
    <h1 class="head">EDIT MOBILE DETAILS</h1>
    <a class="back" href="addmobile.php">BACK</a><br><br>  <style>.back{margin-left: 10px;}</style>  
    <body bgcolor="#1d2b3a">
        <form method="POST" enctype="multipart/form-data">
        <?php
            include('connection.php');
            $dis="SELECT * FROM `brand` WHERE 1";
            $res=mysqli_query($conn,$dis);
            echo "<select name=options class=category>";
            echo" <option>$row[brand]</option>";
            while($row2=mysqli_fetch_assoc($res))
            {         
                if($row['brand'] != $row2['bname'])
               echo "<option value=".$row2['bname'].">".$row2['bname']."</option>";
                
            }
           echo" </select><br>";
                ?><br><br>
               
        </div>
        <div class="inputbox">
                <input type="text" name="name"  required="required">
                <span><?php echo "$row[mname]"; ?></span><br><br> 
               
        </div>
        <div class="inputbox">
                <br><input type="text" name="s/w" required="required">
                <span><?php echo "$row[msoft]"; ?>  </span><br><br>
        </div>
        <div class="inputbox">
                <input type="number" name="price" required="required" >
                <span><?php echo "$row[mprice]"; ?></span><br><br>
        </div>
        <div class="inputbox">
                <input type="text" name="camera" required="required">
                <span><?php echo "$row[mcamera]"; ?></span><br><br>
        </div>
        <div class="inputbox">
                <input type="text" name="time" required="required">
                <span><?php echo "$row[mbattery]"; ?></span><br><br>
       </div>
         <?php
            include('/wamp64/www/admin/connection.php');
            $disc="SELECT * FROM `category` WHERE 1";
            $result=mysqli_query($conn,$disc);
            echo "<select name=option class=category>";
            echo" <option>$row[mtype]</option>";
            while($row1=mysqli_fetch_assoc($result))
            {         
                 if($row['mtype'] != $row1['cname'])
               echo "<option value=".$row1['cname'].">".$row1['cname']."</option>";
                
            }
           echo" </select><br>";
                ?>
        Mobile Image:<input type="file" name="image" value="change image">
        <?php
          $image =  $row['mimg'];
        echo"<img class=images src='img/".$image."'/>
        <style>
    .images{
        width: 160px;
        margin-top:30px;
        margin-bottom:40px;
        margin-left:-360px;
    }
    </style>";
        ?>
          <br><br><br>
        <input type="submit" name="edit" value="Change">
        </form>
    </body>
</html>
<?php
if(isset($_POST['edit']))
{
$brand = $_POST['options'];
$name = $_POST['name'];
$soft = $_POST['s/w'];
$price = $_POST['price'];
$camera= $_POST['camera'];
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
$sql = "UPDATE `addmobile` SET `mname` = '$name',`msoft` = '$soft',mprice = '$price',`mcamera` = '$camera',`mbattery` = '$battery',`mtype` = '$type',`mimg` = '$filename',`brand` = '$brand' WHERE mname = '$mname'";
if(mysqli_query($conn,$sql))
{
    echo "updation is successfull";
    header('location:addmobile.php');
}
else{
    die("updation damped".mysqli_error($conn));
} 
}
?>
