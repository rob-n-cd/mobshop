
<html>
<title>pay the product</title>
<u><h1>shipping</h1></u>
<?php
        session_start();
         $name =$_SESSION['mname'] ;
         $price =  $_SESSION['price'];
         $total =  $_SESSION['total'];
         $value = $_SESSION['value'];
      
        
echo "<a href='payment.php?name=$name'> <-BACK </a>";
?>
<style>a{color:black; border: 1px solid; border-color:black; border-radius: 6px; text-shadow: none;color: whitesmoke; background-color:black ;font-weight: bolder; }
        *{text-decoration: none;}</style><br><br>
        <body>
<table border="1">
                  <tr>
                    <th class="white">product</th>
                    <th class="white">price</th>
                    <th class="white">quandity</th>
                    <th class="white">total</th>
                  </tr>
                  <tr>
                    <td class="center"><?php echo $name;?></td>
                    <td class="center"><?php echo $price;?></td>
                    <td class="center">
                     <?php echo $value;?>
                    </td>
                    <td class="center">
                    <?php echo $total;?>
                    </td>
                  </tr>
</table>
                  <form method="POST" action="ship.php">
                    <div class="payment">
        <B>name:</B><input type="text" name="name" placeholder="name"><br><br>
        <b>address:</b><input type="text" name="address" placeholder="address"><br><br>
        <b>pincode:</b><input type="number" name="pincode" placeholder="pincode"><br><br>
        <b>city:</b><input type="text" name="city" placeholder="city"><br><br>
        <b>contry:</b><input type="text" name="contry"placeholder="india"><br><br>
        <input type="submit" name="ship" value="purchase">
        </div>
   </form>
       
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
    margin-top: 100px;
    margin-left: 500px;
   }
  </style>
</body>
</html>