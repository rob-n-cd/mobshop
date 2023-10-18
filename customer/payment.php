<html>
<?php
include('/wamp64/www/mobshop/admin/connection.php');
$name1=$_GET['name'];
$sql = "SELECT * FROM `addmobile` WHERE mname = '$name1'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
session_start();
$_SESSION['mname'] = $row['mname'];
?> 

    <title>pay the product</title>
<u><h1>payment for <?php echo $row['mname'];?></h1></u>
<a href=phones.php> <-BACK </a>
<style>a{color:black; border: 1px solid; border-color:black; border-radius: 6px; text-shadow: none;color: whitesmoke; background-color:black ;font-weight: bolder; }
        *{text-decoration: none;}</style><br><br>
<body>
<?php 
        $image = $row['mimg'];
echo "<h2 class = heading>PRODECT - IMAGE:</h2>
<img class=pic src='/images/".$image."' width = 135px hight = 100px/><br><br><br>";
echo"
<style>
.pic{
  margin-left:100px;
}
</style>
";

?>


<table border="1">
                  <tr>
                    <th class="white">product</th>
                    <th class="white">price</th>
                    <th class="white">quandity</th>
                    <th class="white">total</th>
                  </tr>
                  <tr>
                    <td class="center"><?php echo $row['mname'];?></td>
                    <td class="center"><?php echo $row['mprice'];?></td>
                    <td class="center">
                      <form method="POST">
                    <input  size=1 type="txt" name="nam" value="1">
                    </td>
                    <td class="center">
                    <?php echo $row['mprice'];?>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td class="center">
                  <?php
                if(isset($_POST['ok']))
                {
                  $mname = $row['mname'];
                  $value=$_POST['nam'];
                  $val=$value;
                  $prize=$row['mprice'];
                  $num=null;
                  while($value!=0){
                    $total=$prize+$num;
                    $num=$total;
                    $value--;
                  }
                  echo  $val."</td>
                       <td class=center>".$total."</td>";
                       $_SESSION['total'] = $total;
                       $_SESSION['price'] = $prize;
                       $_SESSION['value'] = $val;
              
                }
                ?> 
        
                </tr>
                       </table>
                <div class="bts">
                  <input type="submit" name="ok" value="submit">
                  <input type="submit" name="delect" value="delect"></div>
        <br><br><br><br>


<form method="POST"><div class="payment">
        <B>card type:</B><input type="text" name="name" placeholder="***********"><br><br>
        <b>card number:</b><input type="text" name="number" placeholder="************"><br><br>
        <b>cvv number:</b><input type="text" name="cvv" placeholder="************"><br><br>
        <b>holder name:</b><input type="text" name="holder" placeholder="************"><br><br>
        <b>product price:</b><input type="number" name="price"placeholder="00000"><br><br>
        <input type="submit" name="sub" value="payment">
        </div>
   </form>
         <?php
         if(isset($_POST['sub']))
         {
         $cardtype=$_POST['name'];
         $cardnum=$_POST['number'];
         $price=$_POST['price'];
         $holder=$_POST['holder'];
         $cvv=$_POST['cvv'];
         $_SESSION['mprice'] = $price;
         $sql = "INSERT INTO `payment`(`ctype`, `cnumber`,`cvvnumber`,`holdername`,`iprice`) VALUES('$cardtype','$cardnum','$cvv','$holder','$price')";
         if(mysqli_query($conn,$sql))
         {
            echo"<script>alert('payment is succussfully completed');</script>
            <form action = shipping.php method = POST>
            <div class = btn><input type=submit name=ship value=shipping></div>
            </form>";

            
         }
         else
         {
            die("fill the blanks");
         }
         
}
         ?>
         <style>
          .btn{
            margin-left: 85px;
            margin-top: -35px;
          }
          input[type=submit]{
    background-size: 100px;
    border-radius: 8px;
    padding: 10px;
    border-top: red;
    border-left: green;
    background-color: black;
    color:aliceblue;
    border-bottom: black;
    border-right: black;
  }
  .bts{
    justify-content: space-between;
  }
  .white{
    background-color: whitesmoke;
  }
  .center{
   text-align: center;
  }
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
  input[name=ok]{
    margin-left: 500px;
    margin-top: 70px;
  }
  input[name=delect]{
    margin-right: -600px;
    margin-top: -40px;
  }
  .link{
    margin-top: 100px;
  }
     .payment{
      margin-top: -100px;
     }
    </style>
</body>
</html>
         