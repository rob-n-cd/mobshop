<html>
<title>Smarttize-login</title>
<link rel="stylesheet" href="project.css">
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
body{
    background-image:url('/mobshop/images/bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
                                           
<nav class="navigation">
    <BUTTON class="btnlogin">Login</BUTTON>
    </nav>
</header><center>
        <h2>Login - Smarttize</h2>
    <br>
    <div class="box">
    <table>
    <tr><th>
        <form action="" method="POST">
            
            <font size=5><br>
        Email:<input type="text" name="email" placeholder="Username"><br><br>
        Password:<input type="password" name="pass" placeholder="Password">
        <div class="remember-forgot"><br>
        <label><input type="checkbox">-Remember</label>
        <a href="for.php"><b>Forgot Password</b></a>
        </div><br>
       <a class="register" href="register.php">Register- </a><input type="submit"name="submit"value="Submit"><br><br>
        <a class="adlogin"href="/mobshop/admin/adminlogin.php"><b>admin_login</b></a>
    </center> 
        </form></th>
    </font>
    </tr>
</table>
</div>
<?php
if(isset($_POST['submit']))
{
 include('/wamp64/www/mobshop/admin/connection.php');
  $email = $_POST['email'];
  $pass=$_POST['pass']; 
  $dis="SELECT * FROM `register` WHERE 1";
    $result = mysqli_query($conn,$dis);
    $flag = 0;
    while($row = mysqli_fetch_assoc($result))
    {
    $password = $row['password'];
    $emaill = $row['gmail'];
    if($pass == $password && $email === $emaill)
    {
        $flag = 1; 
        session_start();
   $_SESSION['pass'] = $password;
   $_SESSION['email'] = $emaill;
        break;
    }
    }
    if($flag == 1)
    {
        header('location:index.php?');
    }
    else{
        echo"<br<br><br><b style = color:red;solid;>password or email is uncurrect!<br> try-again<b>";
    }
}
?>
</body>
</html>