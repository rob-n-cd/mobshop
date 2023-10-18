<html>
<?php
         $conn=mysqli_connect('localhost','root','','onlinemobileshop');
         if(!$conn){
            echo"";
         }
         else
         {
            echo"<b>      </b>";
         }
         ?>

<title>Smarttize-register</title>
<body>
    <header>
<h1 class="mobcart"><b>Smarttize</b></h1>
<nav class="navigation">
    <form method="POST">
    <BUTTON class="btnlogin" type="submit" name="login">LOGIN</BUTTON>
    </form>
    </nav>
</header><center>
       
    </header>
    <br>
    <div class="box">
    <table>
    <tr><th>
        <form action="" method="POST" enctype="multipart/form-data">
        <h2>Register - mob_cart</h2>
            <font size=5><br>
        <p class="right">name</p> <p class="left"><input type="text" name="name" placeholder="name"></p>
         <p class="right">address</p> <p class="left"><input type="text" name="address" placeholder="address"></p>
         <p class="right">Phone number</p> <p class="left"><input type="text" name="phone"></p>
         <p class="right">Gmail</p> <p class="left"><input type="email" name="gmail"></p>      
         <p class="right">Password</p> <p class="left"><input type="password" name="hide" placeholder="maximum length is 10"></p>
         <p class="right"> Retypess Password</p> <p class="left"><input type="password" name="cpassword" placeholder="maximum length is 10"></p>
         <p class="right">name</p> <p class="left"><input type="file" name="image"></p>
         <BR><div><input type="submit" name="register"value="Register"></div><br>
    </center> 
        </form></th>
    </font>
    </tr>
</table>
</div>
<style>
    a{
        border: 1px solid;
        border-radius: 4px;
        border-color: brown;
        font-weight: bold;
        color:rgb(222, 222, 219) ;
        background-color:  rgba(108, 51, 8, 0.954);
        margin-left: 45px;
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
    margin-left: 110px ;
}
    body{
    background-image:url('/images/bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
input[type=text]{
    background-color: rgb(172, 115, 16);
    padding: 10px;
    border-radius: 5px;
    font-weight: bolder;
    font-size: medium;
   }
   input[type=email]{
    background-color: rgb(172, 115, 16);
    padding: 10px;
    border-radius: 5px;
    font-weight: bolder;
    font-size: medium;
   }
   input[type=password]{
    background-color: rgb(172, 115, 16);
    padding: 10px;
    border-radius: 5px;
    font-weight: bolder;
    font-size: medium;  
   }
   input[type=radio]{
    accent-color:rgb(172, 115, 16);
   }
.box{
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    margin-top: -25px;
}
.navigation .btnlogin{
    width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid;
    outline: none;
    border-radius: 6px;
    color: aliceblue;
    margin-left: 44px;
    transition: .6s;
}
.navigation .btnlogin:hover{
    background: black;
    color: rgb(225, 109, 14);
}
*{
    text-decoration: none;
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
    margin-bottom: auto;
    width: 300px;
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
if(isset($_POST['register']))
{
   $name = $_POST['name'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $gmail = $_POST['gmail'];
   $password = $_POST['hide'];
   $current_password = $_POST['cpassword'];

   $image = $_FILES['image'];
        $filename = $image['name'];
        $tmpname = $image['tmp_name'];
       
        $filesize = $image['size'];
        $validfilextension = array('jpg', 'jpeg', 'png');
        $extensionsperate = explode('.',$filename);
        $filextension = strtolower(end($extensionsperate));
        if(!in_array($filextension,$validfilextension))
        {
            echo "<script> alert('Invalid Image Extention');</script>";
        }
        else if($filesize > 10000000){
            echo "<script> alert('IMAGE IS TOO LARGE');</script>";
        }
        else{
            $uplode_image = 'custimg/'.$filename;
           
            move_uploaded_file($tmpname,$uplode_image);
        }
   if($password == $current_password)
   {
   $sql = "INSERT INTO `register`(`name`, `address`, `phone`,`gmail`,`password`,`img`) VALUES('$name','$address','$phone','$gmail','$password','$filename')";
         if(mysqli_query($conn,$sql))
         {
            echo"<script>alert('Register is succussfully completed');</script>";
         }
         else
         {
            die("fill the blanks");
         }
    }
    else
    {
        echo "<b>password is not same</b>";
    }
}
if(isset($_POST['login']))
{
header('location: login.php');
}
?>
</html>