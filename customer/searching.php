<?php
include('/wamp64/www/mobshop/admin/connection.php');
                   if(isset($_POST['submit']))
                   {
                     $search = $_POST['search'];
                     $dis="SELECT * FROM `addmobile` WHERE mname = '$search'";
                     $result=mysqli_query($conn,$dis);
                     $row=mysqli_fetch_assoc($result);
                     $image = $row['mimg'];
                     echo "<td><a href='#'><img class=image src='/mobshop/images/".$image."'/></a></td>";
                   }
                   ?>