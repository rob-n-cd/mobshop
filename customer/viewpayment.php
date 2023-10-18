<?php
$conn=mysqli_connect('localhost','root','','onlinemobileshop');
if(!$conn){
   die("connection lost");
}
else
{
   echo"<b> </b>";
}
?>
<?php
ECHO"<B><FONT COLOR=RED SIZE=6>MOBCART-PAYMENT VIEW SECTION</FONT></B><BR><BR>";
ECHO"<a href=payment.php> <-BACK </a><BR><BR>
<STYLE>
table{
    background-color: green;
    border-width: bold;
    border-color: black;
    
    border-radius: 10px;
    height: 100px;
    width: 800px;
    margin-left: 200px;
    margin-top: -1px;
  }
  a{color:black; border: 1px solid; border-color:black; border-radius: 6px; text-shadow: none;color: whitesmoke; background-color:black ;font-weight: bolder; }
        *{text-decoration: none;}
</style>";
$dis="SELECT * FROM `payment` WHERE 1";
$result=mysqli_query($conn,$dis);
if(mysqli_num_rows($result) > 0){
   echo"<style>
    *{text-decoration: none;}
    .delete{
        color:red;
        border:2px solid;
        border-radius:4px;
    }
    .edit{
        color:green;
        border:2px solid;
        border-radius:4px;
        margin-left:5px;
    }
   </style>";
   echo"<br><b><table border=1>
   <tr style=background-color:green;>
    <th>card type</th>
    <th>card number</th>
    <th>cvv number</th>
    <th>holder name</th>
     <th>price</th>
      <th>operation</th>
      </tr></b>";
   while($row=mysqli_fetch_assoc($result)){
      echo"<b><tr>
            <td>".$row['ctype']."</td>
            <td>".$row['cnumber']."</td>
            <td>".$row['cvvnumber']."</td>
            <td>".$row['holdername']."</td>
            <td>".$row['iprice']."</td>
            <td><form method=POST>
            <input type=submit name=delete value=DELECT><BR><br>
            </form>
            </tr></b>";
   }
   echo"</table>";
}
else{
   echo"no record is found";
}
?>
<?php
if(isset($_POST['delete']))
{
    $delect = "DELETE FROM `purchase` WHERE 1";
    if(mysqli_query($conn,$delect)){
        echo "delection is successfull";
    
    }
    else{
        die("delection damped".mysqli_error($conn));
    }
    
    mysqli_close($conn);
  }
    ?>

    </body>
</html>