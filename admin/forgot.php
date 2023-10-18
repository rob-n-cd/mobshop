<html>



<?php
    $conn=mysqli_connect('localhost','root','','onlinemobileshop');
    if(!$conn){
       die("connection lost");
    }
    else
    {
       echo"<b>connection success</b>";
    }
?>


   <?php
$dis="SELECT * FROM `adminlogin` WHERE 1";
$result=mysqli_query($conn,$dis);
   if(mysqli_num_rows($result) > 0)
   {
      
}
?>

<title>admin-login</title>
<body>
    <header>
<h1 class="mobcart"><b>MOB_CART</b></h1>
<a href="adminlogin.php"> <-BACK </a>
           <style> a{color:black; border: 1px solid; border-color:black; border-radius: 6px; text-shadow: none;color: whitesmoke; background-color:black ;font-weight: bolder; }
        *{text-decoration: none;}</style>
</header><center>
       
    </header>
    <br>
    <div class="box">
    <table>
    <tr><th>
        <form action="" method="POST">
        <h2>Admin - login</h2>
            <font size=5><br>
         Change password:<input type="password" name="cpass"></p>
          <input type="submit" name="change"value="change"></div><br>
    </center> 
        </form></th>
</body>


<?php
   if(isset($_POST['change']))
   {
   $cpass= $_POST['cpass'];
   $sql = "UPDATE `adminlogin` SET `cpassword`='$cpass' WHERE 1";
   if(mysqli_query($conn,$sql))
   {
      echo"<br><b><script>alert('successfully complete');</script></b><br>";
      header('location:adminlogin.php');
      
   }
   else
   {
      die("unsuccessfull");
   }



}
?>
</html>