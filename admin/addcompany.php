<?php include("adminpage.php");
    ?>
<?php
include('connection.php');
if(isset($_POST['add']))
{
    $bname = $_POST['name'];
    echo $bname;
    $sql = "INSERT INTO `brand`(`bname`) VALUES ('$bname')";
    if(mysqli_query($conn,$sql))
        echo"<script>alert('new company name inserted');</script>";
    else
    echo"hloooooo";
}
?>



<html>
<title>company</title>
<body bgcolor="black">
<div class="comname">
<h1><u>COMPANY</u></h1>
        <form action="" method="POST">
<h1>BRAND NAME<h1><input  class = "gtext" type=text name=name placeholder=name><br><br>
<input  class ="gbtn"  type="submit" name="add" value="add">
</form>
</div>

</body>
<style>
    u{color:whitesmoke}
    h1{
        color:azure;
        font-size: 15px;
    }
    .gtext{
        outline: none;
        box-shadow: 0 0 5px cyan,0 0 25px cyan;
        border:2px solid cyan;
        height: 40px;
        font-size: 20px;
        border-radius: 6px;
        transition: 4s;

    }
    .gtext:hover{
        border-color: blueviolet;
    }
    .gbtn{
        box-shadow: 0 0 5px cyan,0 0 25px cyan;
        background: cyan;
        width: 60px;
        border-radius: 10px;
        font-size: medium;
        font-weight: bolder;
        font-style: italic;
        border:none;
        margin-left: 200px;
        transition: 4s;
    }
    .gbtn:hover{

        box-shadow: 0 0 5px cyan,
                    0 0 50px cyan,
                    0 0 200px cyan;
    }
    .comname{
        margin-left: 400px;
        margin-top: -400px;
        width: 300PX;
    }
    .back{
        
        color:black;
    }
</style>
</html>