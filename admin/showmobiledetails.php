<?php
include('connection.php');
$name=$_GET['name'];
 $dis="SELECT * FROM `addmobile` WHERE mname = '$name'";
$result=mysqli_query($conn,$dis);
if(mysqli_num_rows($result) > 0)
{
   echo" <body  bgcolor=#1d2b3a>
   <table border = 1 class = imgtable>
   <tr>
        <th>mobile name </th>
        <th>mobile software </th>
        <th>mobile price</th>
        <th>mobile camera</th>
        <th>mobile charger</th>
        <th>mobile type</th>
        <th>mobile image</th>
   </tr>";
         
    while($row=mysqli_fetch_assoc($result))
    {
        $image = $row['mimg'];
        echo"<b><tr>
              <td ><b>".$row['mname']."</b></td>
              <td ><b>".$row['msoft']."</b></td>
              <td ><b>".$row['mprice']."</b></td>
              <td ><b>".$row['mcamera']."</b></td>
              <td ><b>".$row['mbattery']."</b></td>
              <td ><b>".$row['mtype']."</b></td>
              <td><img class=images src='img/".$image."'/></td>
              <td><a  href='addmobile.php'> <-BACK</a><BR><br>
              </tr>";
    }
    echo"</table>
    </body>
    <style>
    .images{
        width: 160px;
    }

    .op{
        margin-left: 20px;
       }
     .imgtable{
        height: 500px;
        width: 900px;
        color:#00dfc4;
     }
        a{
            text-decoration: none;
            color: skyblue;
            border: 1px solid;
            background:black;
            border-radius:6px;
            font-size:20px
        }
        </style>";
}