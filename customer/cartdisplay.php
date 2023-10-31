<html>
<title>mycart</title>
<a  class = "back"href=index.php> <-BACK </a> 
<style>.back{color:black; font-weight: bolder; border: 3px solid; border-radius:12px ; text-decoration: none;}</style>
<h1>MYCART - LIST</h1>

<body bgcolor="#10389">
<?php
include('/wamp64/www/mobshop/admin/connection.php');
$display = "SELECT * FROM `mycart` WHERE 1";
   $result = mysqli_query($conn,$display);
   echo" <table>
<tr> <th>customer name </th>
       <th>address</th>
       <th>mobile name</th>
       <th>quandity</th>
       <th>mobile price</th>
       <th>purchased or not</th>
       </tr>";
 while($row = mysqli_fetch_assoc($result))
 {
   echo "<tr>                                           
   <td class = tdname><b>". $row['name']."</b></td>
   <td class = tdname><b>".$row['address']."</b></td>
   <td class = tdname><b>". $row['mobilename']."</b></td>
   <td class = tdname><b>". $row['quandity']."</b></td>
   <td class = tdname><b>".$row['mobileprice']."</b></td>";
   $payment = $row['mobileprice'];
   if($payment!=0)
 {
    $purchase = "Purchased";
    echo"<td class = tdgreen><b>".$purchase."</b></td>";
    echo"
    <td class = opns><a class= op href='deletecart.php?cname=$row[name]'> CANCEL</a><BR><br>
    </tr>";
 }
 else{

    $purchase = "not purchased";
    echo"<td class = tdred><b>".$purchase."</b></td>";
    echo"
    <td class = opns><a class= op href='deletecart.php?cname=$row[name]'> CANCEL</a><BR><br>
    <a class=op href='editpayment.php?ename=$row[mobilename]'>go to payment page</a></td>
    </tr>";
 }

 }
 echo "</table>";
 ?>

 <?php 

echo "<style>
.opns{
border-right:none;
}
th{

    border: 2px solid;
}
td{
    border: 2px solid;
    border-bottom:none;
    border-left:none;
    text-align:center;
    
}
tr{
    border: 1% soolid;
}
table{
    border: 2px solid;
    border: radious 5px;
}
.op{
    text-decoration: none;
    border:1;
    color: black;
    
}

.tdgreen{
    color : green;
    border-color:black;
}
.tdred{
 color: red;
 border-color:black;
}
</style>";
?>
</body>
</html>
