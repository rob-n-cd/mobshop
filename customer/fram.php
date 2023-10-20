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
                    <a class="adminlog" href="/admin/adminlogin.php">Admin-login</a>
                    </div>
                    <div class="inputbox">
                      <form  method="POST">
                      <input type="search"  name="search"placeholder=" search....."><button class="search" type="submit" name="submit"><i class="fa fa-search"></i></button>
                      
                    </form>

                  
                    </div>


                     <div class="login">
                      
                     </div>



                    <hr class="top">     
                </header>
                <?php
              if(isset($_POST['submit']))
             {
                    $flag = false;
                     $search = $_POST['search'];
                     $dis="SELECT * FROM `addmobile` WHERE brand = '$search'";
                     $result=mysqli_query($conn,$dis);
                     echo"<table class = imgtable>";
                     while($row=mysqli_fetch_assoc($result))
                     {
                        $flag = true; 
                        $image = $row['mimg'];
                        echo "<td><a class = img href='payment.php?name=$row[mname]'><span class = spanimg><img class=image src='/mobshop/images/".$image."'/><p class = name>".$row['mname']."<BR><BR>BUY NOW</p></span></a></td>
                        ";                 
                    }

               if($flag === false)
                  {
                    echo"<script>alert('".$search." is not avilable');</script>";
                  }
                     
                    echo"</table>";
            }
                    
                 echo"  <style>
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
                   ?>
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
                                                                              
                                                                                      
          </style>
          
          <!----------------------------------------------------CSS----------------------------------------------------------->
                  
          <!-------------------------------------------------JAVA-SCRIPT------------------------------------------------------>
                     <script src="project.jss"></script>
                     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
          
                     </script>
          <!--------------------------------------------------JAVA-SCRIPT----------------------------------------------------->
          </html>
               