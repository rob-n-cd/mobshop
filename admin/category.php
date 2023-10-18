<?php
include("adminpage.php");
?>
<!DOCTYPE html>
<title>category- prodects</title>
<body bgcolor="gold">
    <div class="category">
<h1>CATEGORY</h1>
<form action="" method="POST">
    enter category:<input type="text" name="category" value="category"><br><br>
    <input type="submit" name="sub">
</form>
    </div>
<?php
if(isset($_POST['sub']))
{
$category = $_POST['category'];
include('connection.php');
$sql = "INSERT INTO `category`(`cname`) VALUES ('$category')";
if(mysqli_query($conn,$sql))
{
    echo "<script> alert('category is added in the table');</script>";
}
else
{
    echo"insertion faild!";
}
}
?>
<style>
    .category{
        margin-left: 400px;
        margin-top: -400px;
        width: 300px;
    }
</style>
</html>