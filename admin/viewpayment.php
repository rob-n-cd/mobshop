<?php
include("adminpage.php");
include('connection.php');
$dis_payment = "SELECT * FROM `payment` WHERE 1";
$payment_result = mysqli_query($conn,$dis_payment);
echo"<table border =1 class = paytable>
<tr>
<td  class = tdgreen >holder name</td>
<td  class = tdgreen >card type</td>
<td  class = tdgreen >card number</td>
<td  class = tdgreen >price</td>
</tr>
<tr>";
while($row = mysqli_fetch_assoc($payment_result))
{
    echo"<td class = tdgreen><b>".$row['holdername']."</b></td>";
    echo"<td class = tdgreen><b>".$row['ctype']."</b></td>";
    echo"<td class = tdgreen><b>".$row['cnumber']."</b></td>";
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