<?php
include("header.php");
include('connection.php');
$dis_register = "SELECT * FROM `register` WHERE 1";
$register_result = mysqli_query($conn,$dis_register);
echo"<table border =1 class = paytable>
<tr>
<td  class = tdgreen > name</td>
<td  class = tdgreen >address</td>
<td  class = tdgreen >phone number</td>
<td  class = tdgreen >gmail</td>
<td  class = tdgreen >password</td>
</tr>
<tr>";
while($row = mysqli_fetch_assoc($register_result))
{
    echo"<td class = tdgreen><b>".$row['name']."</b></td>";
    echo"<td class = tdgreen><b>".$row['address']."</b></td>";
    echo"<td class = tdgreen><b>".$row['phone']."</b></td>";
    echo"<td class = tdgreen><b>".$row['iprice']."</b></td>
    <tr>";
}
echo "</table>
<style>
.paytable{
    width: 600px;
margin-left:300px;
margin-top:-400px;

}
.tdgreen{
    text-align: center;
}
</style>";
?>