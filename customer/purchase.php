
<html>
  <?php
   session_start();
   $name =$_SESSION['mname'] ;
   $price =  $_SESSION['price'];
   $total =  $_SESSION['total'] ;
   $value = $_SESSION['value'];
  ?>
    <title>purchase</title>
    <h1>purchase product</h1>
    <br><br>
    <a href="shipping.php"> <-BACK </a>
    <style>
        a{color:black; border: 1px solid; border-color:black; border-radius: 6px; text-shadow: none;color: whitesmoke; background-color:black ;font-weight: bolder; }
        *{text-decoration: none;}
      input[type=text]{
         width:200px;
         border-color: black; border-radius: 10px; border-width: 5px; border-top:10px; border-style: solid;
         
         height: 40px;
         font-weight: bolder; font-size: large; font-display:initial; font-style: oblique;
      }
      input:hover{
         border-color: blue; 
      }
      div{
         margin-left: 100px;
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
    margin-left: 550px;
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
    <body bgcolor="gold">
    <div class="progress-bar">
        <div class="step active"></div>
        <div class="step active"></div>
        <div class="step active "></div>
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
                      <?php echo $total ?>
                    </td>
                  </tr>
                  <tr>
                    <td class="center"> shipping charge</td>
                    <td class="center"> 50rs</td>
                    <td>
                    
                  </td>
                       <td class=center><?php
                                            $cost_total = $total + 50;
                                            echo $cost_total;
                                                ?></td>
            
                </tr>
                       </table><br><br>
                <div class="bts">
                  <form action="addcart.php" method="POST">
                  <input type="submit" name="mycart" value="final_submit">  
</form>
                </div>
        <br><br><br><br>
    </body>
              </HTML>
        