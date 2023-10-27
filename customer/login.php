
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
        header('location:face.html');
        echo"<script>alert('password or email is error');</script>";
    }
}
?>