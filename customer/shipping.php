
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
        <div class="progress-bar">
        <div class="step active"></div>
        <div class="step active"></div>
        <div class="step "></div>
        <div class="step"></div>
      </div>
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
                    <div class = shipping>
                      <h1 class="header">shipping</h1>
                    <div class="payment">
        <B>name:</B><input type="text" name="name" placeholder="name"><br><br>
        <b>address:</b><input type="text" name="address" placeholder="address"><br><br>
        <b>pincode:</b><input type="number" name="pincode" placeholder="pincode"><br><br>
        <b>city:</b><input type="text" name="city" placeholder="city"><br><br>
        <b>contry:</b><input type="text" name="contry"placeholder="india"><br><br>
        <input type="submit" name="ship" value="shipping">
        </div>
                    </div>
   </form>
       
        <style>
          b{
            font-style: italic;
            font-variant: small-caps;
            letter-spacing: 1px;
            font-stretch: expanded;
            font-kerning: auto;
            font-family: Arial, Helvetica, sans-serif;
          }
          .header{
            font-variant: small-caps;
            font-style: italic;
            color: greenyellow;
            letter-spacing: 3px;
            font-size: xx-large;
            margin-right: 20px;
          }
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
input{
  font-weight: bolder;
  font-style: oblique;
  font-feature-settings: "c2sc";
  width: 200px;
  letter-spacing: normal;
  lighting-color: #f62f5e;
  border: none;
  border-bottom: #2e2e2e solid 3px;
  outline: none;
  background-color: greenyellow;
  transition: 4s;
}
input :hover{
  border-color: red;
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
    text-align: center;
    margin-left: 60px;
    height: 200px;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: greenyellow;
    width: 300px;
    margin-bottom: 100px;
    border: #2e2e2e 1px solid;
    box-shadow:  7px 7px 3px black;
    border-top-left-radius: 30px;
    border-bottom-right-radius: 30px;

   }
   .shipping{
    text-align: center;
  border: 1px solid black;
  width: 400px;
  padding-left: 20px;
  padding-right: 40px;
  border-radius: 15px;
  background-color: #f62f5e;

  margin-left: 370;
  margin-top: 100px;
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

  </style>
</body>
</html>