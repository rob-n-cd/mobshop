<html>
<title>admin-login</title>
<body>
    <header>
    <h1 class="mobcart"><b><img class="logo" src="\mobshop\images\ruby (1).png" wigth="50px" height="50px"><font class="head" color="skyblue">MARTTIZE</font><br></b></h1>
<style> 
.head{
    font-size: 25px;
 margin-left: 1px;
 font-style: italic;
                                            
   left: 1px;
    top:0;  
}
</style>
</header><center>
       
    </header>
    <br>
    <div class="box">
    <table>
    <tr><th>
        <form action="" method="POST">
        <h2>Admin - login</h2>
            <font size=5><br>
         <u><p class="right">Username</p></u> <p class="left"><input type="text" name="username"></p>
         <u><p class="right">password</p></u> <p class="left"><input type="password" name="password"></p>
          <input type="submit" name="login"value="l o g i n"></div><br>
    </center> 
        </form></th>
    </font>
    </tr>
</table>
</div>
<style>
    .right{
        margin-left: -260px;
    }
    
    div{
        display: flex;
        justify-content: space-between;
    }
     input[type=submit]{
    padding: 5px;
    border-radius: 5px;
    background-color: rgba(108, 51, 8, 0.954);
    color: rgb(222, 222, 219);
    font-weight: lighter;
    border-color: brown;
    margin-right:45px;
}
    body{
    background-image:url('/mobshop/images/bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    
}
input[type=text]{
    background-color: rgb(172, 115, 16);
    padding: 10px;
    border-radius: 20px;
    font-weight: bolder;
    font-size: medium;
   }
   input[type=password]{
    background-color: rgb(172, 115, 16);
    padding: 10px;
    border-radius: 20px;
    font-weight: bolder;
    font-size: medium;  
   }
.box{
    justify-content: center;
    align-items: center;
    position: relative;
    margin-top: 30px;
}

h1{
    font-size: 40px;
    color: rgb(172, 115, 16);
}
h2{
    margin-top: -60px;
    font-size: 22px;
    color: beige;
}
table{
    padding-left: 100px;
    padding-right: 100px;
    margin-bottom: auto;
    border-radius: 20px;
    backdrop-filter: blur(20px);
    transition: .7s;
    
}
 table:hover{
    background: rgb(18, 16, 16);
    color: rgb(225, 109, 14); 
    touch-action: initial;  
}   

</style>
</body>
<?php
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($password != "\admin")
    {
    $conn=mysqli_connect('localhost','root','','onlinemobileshop');
    if(!$conn){
       die("connection lost");  
    }
    else
    {
       //echo"   ";
    }
    $dis="SELECT * FROM `adminlogin` WHERE 1";
    $result = mysqli_query($conn,$dis);
    $row = mysqli_fetch_assoc($result);
    $pass = $row['cpassword'];

    if($pass == $password){
        header('location:adminpage.php');
    }
    else{
        echo"<br<br><br><b style = color:red;solid;>password is uncurrect!<br> try-again<b>";
    }
}
else
   {
        $pass=$_POST["password"];
        if($pass=="\admin")
        {
            header('Location:adminpage.php');

        }
   }
}
?>
</body>
</html>