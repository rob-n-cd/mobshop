<!DOCTYPE html>
<html>  
  <?php
  include('/wamp64/www/mobshop/admin/connection.php');
     session_start();
     $holdemail = $_SESSION['email'];
     $holdpassword = $_SESSION['pass'];
    if($holdemail ===null && $holdpassword === null)
     header('location:gologin.');
     else{
  ?>
    <title>Smarttize</title>
    <script> 
        </script>
            <body bgcolor="white">   
              <div class="body">
              <header>
                <h1 class="head">
                <img class="logo" src="\mobshop\images\ruby (1).png" wigth="50px" height="50px"><font color="skyblue">MARTTIZE</font><br>
                  </h1>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <div class="link">    
                    <a class="btnlogout" href="logout.php">Logout</a>
                    <a class="mycart" href="cartdisplay.php">Mycart</a>
                    <a class="adminlog" href="/mobshop/admin/adminlogin.php">Admin-login</a>
                    </div>
                    <div class="inputbox">
                      <form action="fram.php" method="POST">
                      <input type="search"  name="search"placeholder=" search....."><button class="search" type="submit" name="submit"><i class="fa fa-search"></i></button>
                      
                    </form>

                  
                    </div>


                     <div class="login">
                      
                     </div>



                    <hr class="top">     
                </header>
                <?php

$count = 0;
 $dis="SELECT * FROM `addmobile` WHERE 1 ";
$result=mysqli_query($conn,$dis);
if(mysqli_num_rows($result) > 0)
{
   echo" <body  bgcolor=#1d2b3a>
   <table  class = imgtable>";
        while($row=mysqli_fetch_assoc($result))
        {
          if($count <= 3)
          {
            $image = $row['mimg'];
            echo"<b>
            <td><a class = img href='payment.php?name=$row[mname]'><span class = spanimg><img class=image src='/mobshop/images/".$image."'/><p class = name>".$row['mname']."<BR><BR>BUY NOW</p></span></a></td>";
             $count++;
          }
          else
          {
            echo "<tr>";
           // echo "<td><a href='#'><img class=image src='/images/".$image."'/></a></td>";
            $count = -1;
            $count++;     
          }
        }
        echo"</table>
        <style>
        .spanimg{
          display:inline-block;
          width: 200px;
          height: 290px;
          border:1px solid black;
          margin-top:30px;
        background-color:whitesmoke;
      border-radius:10px;
       box-shadow: 7px 7px 3px whitesmoke;
        }
        .spanimg:hover{
          transform:translate(0px,-8px);
          transition:1;
        }
        .name{
          margin-top:-5px;
          margin-left:80px;
        }
        .img{
          color:black;
          margin-right:-110px;
        }
        .image{
            width: 120px;
            
            margin-left:40px;
        }
    
        .op{
            margin-left: 20px;
           }
         .imgtable{
            height: 500px;
            width: 900px;
            color:#00dfc4;
         }
         </style>";
      }
                 ?>
                  <!--  <img src="/images/iphone.jpg" wigth="160px" height="160px"><br>
                    <p class="iphone">iphone 14 pro max(256GB)</p></a>
                    <img class="nothing" src="/images/nothing.jpg" wigth="170px" height="170px"><br>
                    <p class="pnothing">nothing<br>(8GB RAM)</p>
                    <img  class="samsung" src="/images/samsung.jpg" wigth="160px" height="160px"><br>
                    <p class="psamsung">samsung s23 ultra(256GB)<br>5g</p>
                    <img class="realmenarzon"  src="/images/realmenarzon53.jpg" wigth="160px" height="160px"><br>
                    <p class="realme">realme narzon N53</p>
                    <img class="realme10" src="/images/realme10.jpg" wigth="170px" height="170px"><br>
                    <p class="real">realme 10(128GB)</p>
                    <img  class="vivot2x" src="/images/vivot2x.jpg" wigth="160px" height="160px"><br>
                    <p class="vivo">vivo t20x</p>
                    <img  class="oneplus" src="/images/oneplusnordce3lite.jpg" wigth="160px" height="160px"><br>
                    <p class="one">1+ nord ce3 lite</p>
                    <img class="huawei" src="/images/huawei.jpg" wigth="170px" height="170px"><br>
                    <p class="hua">huawei</p>
                    <img  class="oppo78" src="/images/oppoa78.jpg" wigth="160px" height="160px"><br>
                    <p class="oppo">oppo 78</p>
                    <img  class="pixel" src="/images/pixel.jpg" wigth="160px" height="160px"><br>
                    <p class="pix">pixel</p>
                    <img  class="iqooz7" src="/images/iqooz7.jpg" wigth="160px" height="160px"><br>
                    <p class="iq">iqoo z7</p>
                    <img  class="lavablaze" src="/images/lavablaze.jpg" wigth="160px" height="160px"><br>
                    <p class="lb">lavablaze</p>
                    <img class="nokiac22" src="/images/nokiac22.jpg" wigth="170px" height="170px"><br>
                    <p class="nokia">nokia c22</p>
                    <img  class="tecnospark" src="/images/tecnospark.jpg" wigth="160px" height="160px"><br>
                    <p class="ts">tecnospark</p>
                    <img  class="redminote12pro" src="/images/redminote12pro.jpg" wigth="160px" height="160px"><br>
                    <p class="redmi">redmi note12 pro</p></a>!-->
</div>             
               
         
       </div>
                </div>
                
                <div class="slide"><br>
                <div>
                  <br>

                <span><ion-icon name="home"></ion-icon> <a href="phones.php">---Mobiles---</a></span><br><hr ><br>
            <span><ion-icon name="call"></ion-icon> <a href="contact.php">---Contact---</a></span><br><hr><br>
            <span><ion-icon name="book"></ion-icon> <a href="#">---About---</a></span><br><hr><br>
            <span><ion-icon name="chatbox"></ion-icon> <a href="#">---Feedback---</a></span><br><hr><br><br>
            <?php
          include('/wamp64/www/mobshop/admin/connection.php');
            $dis="SELECT * FROM `register` WHERE 1";
$result=mysqli_query($conn,$dis);
   echo" <body  bgcolor=#1d2b3a>
   <div class = bg>
   <table class = imgtable>";
         
   while($row=mysqli_fetch_assoc($result))
   {
    if($holdemail === $row['gmail'] && $holdpassword === $row['password'])
    {
        $image = $row['img'];
        echo"<b>
       <tr><td><a href = 'viewregister.php?nam=$row[name]'><img class=images src='custimg/".$image."'/>".$row['name']."</a></td></tr>";
    }
   }
       echo "</table>
       <style>
       .bg{
        margin-top:-140px;
       }
       .images{
        width:55px;
        border:6px solid;
        border-radius: 38px;
        border-color:black;
       }
       </style>";
      }
            ?>
            <div class="icons">
            <ion-icon name="logo-youtube"></ion-icon><br><br>
            <ion-icon name="logo-twitter"></ion-icon><br><br>
            <ion-icon name="logo-instagram"></ion-icon><br><br>
            <ion-icon name="logo-google"></ion-icon><br><br>
            </div>
            <div class="words">
            <b>- youtube</b><br><br>
            <b>- twitter</b><br><br>
            <b>- instagram</b><br><br>
            <b>- google</b><br>
            </div>
    </body>
      
    
<!--------------------------------------------------CSS------------------------------------------------------------->                       
<style>
  .login{
    margin-left: 460px;
    margin-top: 79px;
    background-color: transparent;
    width: 500px;
    height: 500px;
  }
  .logo{
    margin-left: 10px;
  }
  .phones{
    color: black;
    font-weight: bolder;
    font-style: italic;
  }
  .phones:hover{
    color: black;
  }
  .iphone{
    margin-left: 80px;
    font-weight: bold;
    margin-top: -5px;
    margin-bottom: -28px;
  }
  .pnothing{
    margin-left: 310px;
    font-weight: bold;
    margin-top:-10px ;
    margin-bottom: -45px;
  }
  .psamsung{
    margin-left: 450px;
    font-weight: bold;
    margin-top: -6px;
    margin-bottom: -45px;
  }
  .realme{
    margin-left: 660px;
    font-weight: bold;
    margin-top: -6px;
    margin-bottom: -28px;
  }
  .real{
    margin-left: 880px;
    font-weight: bold;
    margin-top: -6px;
    margin-bottom: 35px;
  }
  .vivo{
    margin-left: 125px;
    font-weight: bold;
    margin-top: -6px;
    margin-bottom: -28px;
  }
  .one{
    margin-left: 280px;
    font-weight: bold;
    margin-top: -5px;
    margin-bottom: -28px;
  }
  .hua{
    margin-left: 505px;
    font-weight: bold;
    margin-top: -5px;
    margin-bottom: -28px;
  }
  .oppo{
    margin-left: 680px;
    font-weight: bold;
    margin-top: -5px;
    margin-bottom: -28px;
  }
  .pix{
    margin-left: 880px;
    font-weight: bold;
    margin-top: -5px;
    margin-bottom: 35px;
  }
  .iq{
    margin-left: 135px;
    font-weight: bold;
    margin-top: -5px;
    margin-bottom: -98px;
  }
  .lb{
    margin-left: 300px;
    font-weight: bold;
    margin-top: -5px;
    margin-bottom: -98px;
  }
  .nokia{
    margin-left: 500px;
    font-weight: bold;
    margin-top: -5px;
    margin-bottom: -258px;
  }
  .ts{
    margin-left: 660px;
    font-weight: bold;
    margin-top: -5px;
    margin-bottom: -98px;
  }
  .redmi{
    margin-left: 860px;
    font-weight: bold;
    margin-top: -5px;
    margin-bottom: -98px;
  }
  input[type=search]{
    font-style: italic;
    font-weight: bolder;
    font-size: 15px;
    border-radius: 6px;
    color: white;
    border:none;
    width: 400px;
    outline: none;
    height:30px;
    border-bottom: 2px solid;
    margin-top: 10px;
    margin-left: 290px;
    background-color:rgb(5, 39, 56);
    transition: 6s;
  }
  input[type=search]:hover{
  border-color: skyblue;
  }
  .words{
    margin-top: 48px;
    margin-left: 105px;
    color: white;
  }
  .icons{
    position: relative;
    bottom: -200px;
    margin-left: 80px;
  }
body{
  padding-bottom: 10px;
}
  .body{  
    margin-bottom: -1003px;
    margin-left: -80px;
    margin-top: 100px;
    padding-left: 260px;
    padding-bottom: 550px;
    bottom:-10%;
    height: 544px;
    width:1092px;
    background-color: white;
  }
  .link{
    justify-content: space-between;
    margin-top: -80px;
  }
  .mycart{
    width: 10px;
    height: 10px;
    font-size:20px;
    background: transparent;
    border: 2px solid;
    outline: none;
    border-radius: 6px;
    color: aliceblue;
    transition: .8s;
    margin-left:50px;
    
  }
 .btnlogout{
    width: 90px;
    height: 45px;
    font-size:20px;
    background: transparent;
    border: 2px solid;
    outline: none;
    border-radius: 6px;
    color: aliceblue;
    transition: .8s;
    margin-left: 900px;
    }
    .adminlog{
    width: 10px;
    height: 10px;
    font-size:20px;
    background: transparent;
    border: 2px solid;
    outline: none;
    border-radius: 6px;
    color: aliceblue;
    transition: .8s;
    margin-left:40px;
  }
  .search{
    border-radius: 50px;
    border: solid;
    font-size: medium;
    transition: 3s;
  }
  .search:hover{
   color: skyblue;
  }
  .inputbox{
    margin-bottom: 10px;
    margin-left: 130px;
    margin-top: -10px;
  }
                    
                         .top{
                              background-color: orangered;      
                             border: transparent solid;
                             margin-top: -570px;
                             width: 1020px;
                             margin-right: 385px;
                             padding-left: 260px;
                             }
                             header{
                                    border: transparent solid black;
                                    top:0;    
                                    width: 118%;
                                    height:91px;
                                    position: relative;
                                    margin-top: -100px;
                                    margin-left: -190px;
                                    padding: 20px,100px;
                                   /*display: flex;*/
                                    background:rgb(5, 39, 56);
                                   }           
                                   .slide{
                                           margin-left:-8px;
                                           margin-top: -600px;
                                           padding-bottom: 190px;
                                           width: 250px;
                                           height: 1007px;
                                           backdrop-filter: blur(40px);
                                           background-color:rgb(5, 39, 56);
                                         }
                                         .head{
                                            font-size: 25px;
                                            margin-left: 15px;
                                            font-style: italic;
                                            
                                            left: 1px;
                                            top:0;  
                                           }
                                           hr{
                                              height: 6px;
                                              background-color: orangered;
                                              border-color: orangered;
                                             }
                                             *{ 
                                               text-decoration: none;
                                               }
                                               span{
                                                    margin-left: 75px;
                                                    font-size: 20px;
                                                   }
                                                   a{  
                                                     color:aliceblue;
                                                    }
                                                    a:hover{
                                                            color: rgb(130, 35, 5); 
                                                           }
                                                           ion-icon {
                                                                      color: aliceblue;
                                                                    }
                                                                    
                                                                            img{
                                                                              margin-top:  30px;
                                                                              margin-left: 100px;
                                                                            }
                                                                            .nothing{
                                                                              margin-top:  -270px;
                                                                              margin-left: 270px;
                                                                            }
                                                                            .samsung{
                                                                              margin-top:  -270px;
                                                                              margin-left: 440px;
                                                                            }
                                                                            .realmenarzon{
                                                                              margin-top:  -270px;
                                                                              margin-left: 640px;
                                                                            }
                                                                            .oneplus{
                                                                              margin-top:  -180px;
                                                                              margin-left: 270px;
                                                                            }
                                                                            .realme10{
                                                                              margin-top:  -270px;
                                                                              margin-left: 840px;
                                                                            }
                                                                            .vivot2x{
                                                                              margin-top:  30px;
                                                                              margin-left: 100px;
                                                                            }
                                                                            .pixel{
                                                                              margin-top:  -180px;
                                                                              margin-left:  840px;
                                                                            }
                                                                            .oppo78{
                                                                              margin-top:  -180px;
                                                                              margin-left: 640px;
                                                                            }
                                                                            .huawei{
                                                                              margin-top:  -180px;
                                                                              margin-left:  440px;
                                                                            }
                                                                            .iqooz7{
                                                                              margin-top:  30px;
                                                                              margin-left: 100px;
                                                                            }
                                                                            .lavablaze{
                                                                              margin-top:   -80px;
                                                                              margin-left:   270px;
                                                                            }
                                                                            .nokiac22{
                                                                              margin-top:  -80px;
                                                                              margin-left: 440px;
                                                                            }
                                                                            .tecnospark{
                                                                              margin-top:  80px;
                                                                              margin-left: 640px;
                                                                            }
                                                                            .redminote12pro{
                                                                              margin-top:  -80px;
                                                                              margin-left: 840px;
                                                                            }
                                                                             
</style>

<!----------------------------------------------------CSS----------------------------------------------------------->
        
<!-------------------------------------------------JAVA-SCRIPT------------------------------------------------------>
           <script src="project.jss"></script>
           <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
           <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

           </script>
<!--------------------------------------------------JAVA-SCRIPT----------------------------------------------------->
</html>
