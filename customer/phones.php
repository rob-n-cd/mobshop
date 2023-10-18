
<!DOCTYPE html>
<html>  
    <title>SAMRTTIZE</title>
            <body>   
            <div class="body">
              <header>
                <h1 class="head">
                    <a href="index.php"><img class="logo" src="\images\ruby (1).png" wigth="50px" height="50px"><font class="head" color="skyblue">MARTTIZE</font></a><br>                  
                    <?php
            include('/wamp64/www/mobshop/admin/connection.php');
            $dis="SELECT * FROM `category` WHERE 1";
            $result=mysqli_query($conn,$dis);
            echo "<form action = 'mobilecategory.php'  method = POST>
            <select name=option class=category>";
            echo" <option>mobile types</option>";
            while($row=mysqli_fetch_assoc($result))
            {         
               echo "<option value=".$row['cname'].">".$row['cname']."</option>";
                
            }
           echo" </select>";
           $obj = true;
          echo" <input  class = btn1 type= submit name = submit>
           </form> ";
?>

                  </h1>
                  
                    <hr class="top">     
                </header>
                <br><br>
                </form>
                </div> 
       <?php
        $dis="SELECT * FROM `addmobile` WHERE 1";
        $result=mysqli_query($conn,$dis);
           echo" <table  class = imgtable>";
            while($row=mysqli_fetch_assoc($result))
            {
                $image = $row['mimg'];
                echo"<b>
                <tr>             
                    <td><a href='#'><img class=images src='/mobshop/images/".$image."'/></a>
                      <div class = grp>
                      
                      <h1>".$row['mname']."</h1><br>
                      <p>mobile name:<b>".$row['mname']."</b></p>
                      <p>software:<b>".$row['msoft']."</b></p>
                      <p>price:<b>".$row['mprice']."</b></p>
                      <p>mobile camera:<b>".$row['mcamera']."</b></p>
                      <p>mobile battery:<b>".$row['mbattery']."</b></p>
                      <p>mobile type:<b>".$row['mtype']."</b></p>
                      <span class=btn><a href='payment.php?name=$row[mname]'>purchase</a><a href=cartdisplay.php>add to cart</a></span>
                    </div>
                      <br><br><a href = phones.php><hr class = border></a><br><br></td>
                </tr>";
            }
            echo"</table>";
       ?>         
                
<style>
  form{
    margin-top: -40px;
  }
  .btn1{
    margin-left: 14px;
    outline: none;
    border: none;
    background: #00dfc4;
    font-size: medium;
    margin-top: -400px;
    border-radius: 30px;
  }
  *{
    text-decoration: none;
  }
  .category{
    margin-left: 270px;
    margin-top: 20px;
    width: 300px;
    border-radius: 20px;
    background:rgb(5, 39, 56);
    border-left: none;
    border-top: none;
    border-right: none;
    font-weight: bolder;
    color: whitesmoke;
    font-family: Arial, Helvetica, sans-serif;
    font-size: medium;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    appearance: none;
  }
  option{
    text-align: center;
    background: whitesmoke;
    color:black;
    
  }
  .btn{
    
    text-decoration: none;

  }
  .btn a{
    font-size: large;
    margin-left: 300px;
    border: 1px solid;
    border-radius: 4px;
    border-color: black;
    color:black;
    text-shadow: #00dfc4;
    background: olivedrab;

    justify-content: space-between;
  }
  .grp{
    margin-top: -300px;
  }
  h1{
    color: black;
    margin-left: 200px;
  }
p{
    color: black;
    margin-left: 235px;
}
.body{  
    margin-bottom: -1003px;
    margin-left: -80px;
    margin-top: 100px;
    padding-left: 260px;
    padding-bottom: 550px;
    bottom:-10%;
    height: 120px;
    width:1092px;
    background-color: white;
}
  *{text-decoration: none;}
  .link{
    justify-content: space-between;
    margin-top: -23px;
  }
  
  .top{
                              background-color: orangered;      
                             border: transparent solid;
                             margin-top: 35px;
                             width: 1020px;
                             margin-right: 385px;
                             padding-left: 260px;
                             }
                             header{
                                    border: transparent solid black;
                                    top:0;    
                                    width: 118%;
                                    height:75px;
                                    position: relative;
                                    margin-top: -100px;
                                    margin-left: -190px;
                                    padding: 20px,100px;
                                   /*display: flex;*/
                                    background:rgb(5, 39, 56);
                                   }      

                                    .top{
                              background-color: orangered;      
                             border: transparent solid;
                             margin-top: -2px;
                             margin-bottom: -4px;
                             padding-bottom: 2px;
                             width: 1020px;
                             margin-right: 385px;
                             padding-left: 260px;

                             }
.head{
    font-size: 25px;
 margin-left: 1px;
 font-style: italic;
                                            
   left: 1px;
    top:0;  
}
.logo{
    margin-left: 30px;
  }
  .imgtable{
        margin-left: 170px;
        margin-top: 420px;
        height: 500px;
        width: 9px;
        color:#00dfc4;
        border-radius: 10px;
       
    }
    .images{
        width: 190px;
        margin-top: 100px;
        margin-left: -100px;
        border-radius: 6px;
    }
    .border{
     width: 1020px;
     margin-left: -100px;
     border-width: 2px;
     border-radius: 20px;
     border-color: gray;
     margin-top: 27px;
     border-top: none;
    }
    
                </style>
                </body>
</html>