<?php
include('/wamp64/www/admin/connection.php');
if(isset($_POST['mycart']))
{
session_start();
   $name =$_SESSION['hname']; 
  $mname = $_SESSION['mname'];
  $price = $_SESSION['mprice'];
  $quandity = $_SESSION['value'];
  $address = $_SESSION['address'];
?>
<?php

$sql = "INSERT INTO `mycart`(`name`,`address`,`mobilename`,`mobileprice`,`quandity`) VALUES('$name','$address','$mname','$price','$quandity')";
if(mysqli_query($conn,$sql))
{
   header('location:index.php');
}
else
{
   echo "no records are avaliable";
}
}
?>
<?php
/*
//shipping details
echo" <table border = 1 class = imgtable>
<tr> <th>customer name </th>
       <th>address</th>
       <th>mobile name</th>
       <th>mobile price</th>
       <th class = green >purchased or not</th>
       </tr>";
 $dis = "SELECT * FROM `shipping` WHERE `name` = '$name'";
 $res = mysqli_query($conn,$dis);
 while($row = mysqli_fetch_assoc($res))
 {
   echo"<tr>                                           
 <td class = tdname><b>". $row['name']."</b></td>
 <td class = tdname><b>".$row['address']."</b></td>";
 }

//mobile details
 $display = "SELECT * FROM `addmobile` WHERE `mname` = '$mname'";
 $result = mysqli_query($conn,$display);
 while($mrow = mysqli_fetch_assoc($result))
 {
   echo "<td class = tdname><b>".$mrow['mname']."</b></td>
 <td class = tdname><b>".$mrow['mprice']."</b></td>";
 }

//payment details
$dis_payment = "SELECT * FROM `payment` WHERE `holdername` = '$holder'";
$payment_result = mysqli_query($conn,$dis_payment);
while($prow = mysqli_fetch_assoc($payment_result))
{
   $payment = $prow['iprice'];
   if($payment!=0)
 {
    $purchase = "Purchased";
    echo"<td class = tdgreen><b>".$purchase."</b></td>";
 }
 else{
    $purchase = "not purchased";
    echo"<td class = tdred><b>".$purchase."</b></td>";
 }
 echo"
 <td><a class= op href='deletemobile.php'> DELECT</a><BR><br>
 <a class=op href='edit.php'>EDIT</a></td>
 </tr>";
}
echo"</table>";
*/
?>



?>