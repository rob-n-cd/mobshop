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
<div class="progress-bar">
        <div class="step active"></div>
        <div class="step"></div>
        <div class="step "></div>
        <div class="step"></div>
      </div>


<table border="1">
                  <tr>
                    <th class="white">mobile name</th>
                    <th class="white">price</th>
                    <th class="white">mobile image</th>
                    <th class="white">quandity</th>
                    <th class="white">total</th>
                  </tr>
                  <tr>
                    <td class="center"><?php echo $row['mname'];?></td>
                    <td class="center"><?php echo $row['mprice'];?></td>
                    <td class="center"><?php 
                                             $image = $row['mimg'];
                                             echo "
                                            <br><img class=pic src='/mobshop/images/".$image."' width = 135px hight = 100px/><br><br><br>";
                                            echo"
                                                        <style>
                                                              .pic{
                                                                   margin-left:20px;
                                                                   border-radius:10px;
                                                                  }
                                                        </style>
                                             ";

                                        ?>
                      </td>
                    <td class="center">
                      <form method="POST">
                    <input class="small" size=1 type="txt" name="nam" value="1">
                    </td>
                    <td class="center">
                    <?php echo $row['mprice'];?>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="result">
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
                       <td class = result>".$total."</td>";
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

<div class="form">
<form method="POST">
  <h4>payment</h4>
        <B>card type:</B><input type="text" name="name" placeholder="***********"><br><br>
        <b>card number:</b><input type="password" name="number" placeholder="************"><br><br>
        <b>cvv number:</b><input type="text" name="cvv" placeholder="************"><br><br>
        <b>holder name:</b><input type="text" name="holder" placeholder="************"><br><br>
        <b>product price:</b><input type="number" name="price"placeholder="00000"><br><br>
        <input type="submit" name="sub" value="payment">
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
            <div class = btn><input type=submit name=ship value= 'next step'></div>
            </form>
            </div><br><br>";
            

            
         }
         else
         {
            die("fill the blanks");
         }
         
}
         ?>
         <style>
          h4{
            font-size: 30px;
            font-weight: bolder;
            font-style: italic;
          }
          .small{
            border: 1px solid black;
            outline: none;
            text-align: center;
            border-radius: 3px;

          }
          .progress-bar {
          display: flex;
          margin-bottom: 50px;
          margin-left: 200px;
          }
          .step {
  box-sizing: border-box;
  position: relative;
  z-index: 1;
  display: block;
  width: 25px;
  height: 25px;
  margin-bottom: 30px;
  border: 4px solid #fff;
  border-radius: 50%;
  background-color: #efefef;
  margin-left: 130;
}

.step:after {
  position: absolute;
  z-index: -1;
  top: 5px;
  left: 22px;
  width: 225px;
  height: 6px;
  content: '';
  background-color: #efefef;
}

.step:before {
  color: #2e2e2e;
  position: absolute;
  top: 40px;
}

.step:last-child:after {
  content: none;
}

.step.active {
  background-color: #f62f5e;
}
.step.active:after {
  background-color: #f62f5e;
}
.step.active:before {
  color: #f62f5e;
}

.step.active + .step {
  background-color: #f62f5e;
}
.step.active + .step:before {
  color: #f62f5e;
}

.step:nth-child(1):before {
  content: 'BUY';
}
.step:nth-child(2):before {
  right: -40px;
  content: 'PAYMENT';
}
.step:nth-child(3):before {
  right: -30px;
  content: 'SHIPPING';
}
.step:nth-child(4):before {
  right: 0;
  content: 'FINISH';
}

          .form{
            margin-left: 440px;
            margin-top: 10px;
            border:1px solid black;
            box-shadow:  7px 7px 3px black;
            height: 390px;
            width: 340px;
            align-items: center;
            padding-left: 50px;
            padding-right: 20px;
            border-radius: 2px;
            padding-bottom: 65px;
            border-bottom-left-radius: 20px;
            border-top-right-radius: 20px;
            background-attachment: fixed;
            background-color: yellowgreen;
          }
          .form input{
            border: 5px solid black;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            padding-left: 12px;
            padding-top: 7px;
            font-weight: bolder;
            font-family: 'Courier New', Courier, monospace;
            font-style:italic;
            font-size: medium;
          }
          .form b{
            font-weight: bolder;
            font-variant: small-caps;
            font-style: italic;
            margin-right: 20px;
          }
          .btn{
            margin-left: 200px;
            margin-top: -40px;
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
   height: 140px; 
   font-size: large;
   color:white;
   font-display:inherit;
   font-variant: small-caps;
   gap:initial;
  }
  .result{
    text-align: center;
  
  }
  table{
    background-color: green;
    margin-left: 100px;
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
         