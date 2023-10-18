
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
     
    </style>
    <body bgcolor="gold">
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
        