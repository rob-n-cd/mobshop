<html>
    <title>admin-addproducts</title>
    <link rel="stylesheet" href="addmobile.css">
    <body bgcolor="#1d2b3a">
     <?php 
         $conn=mysqli_connect('localhost','root','','onlinemobileshop');
         if(!$conn){
            echo"connecion";
         }
         else
         {
            echo"<b> </b>";
         }
         ?>
    <h1 class="head">ADD + MOBILES PHONES</h1>
   <table border=1>
    <tr>
        <th>
            <a href="/mobshop/admin/adminpage.php"><-BACK</a>
            <font size=4>
            <h1 class="mobcart"><b><img class="logo" src="\images\ruby (1).png" wigth="50px" height="50px"></img><h1>
                <form  action="insertmobile.php"  method="POST" enctype="multipart/form-data" >
                <?php
            include('connection.php');
            $dis="SELECT * FROM `brand` WHERE 1";
            $result=mysqli_query($conn,$dis);
            echo "<select name=options class=category>";
            echo" <option>select mobile brand</option>";
            while($row=mysqli_fetch_assoc($result))
            {         
    
               echo "<option value=".$row['bname'].">".$row['bname']."</option>";
                
            }
           echo" </select><br>";
                ?><br><br>
               
        </div>
                    <div class="inputbox">
                <input type="text" name="name" required="required">
                <span>Mobile Name</span><br><br> 
               
        </div>
        <div class="inputbox">
                <br><input type="text" name="s/w" required="required">
                <span>Mobile software</span><br><br>
        </div>
        <div class="inputbox">
                <input type="number" name="price" required="required" >
                <span>Mobile Price</span><br><br>
        </div>
        <div class="inputbox">
                <input type="text" name="camera"required="required">
                <span>Mobile Camera</span><br><br>
        </div>
        <div class="inputbox">
                <input type="text" name="time"required="required">
                <span>Mobile Battery</span><br><br>
       </div>
       <?php
   
            $dis="SELECT * FROM `category` WHERE 1";
            $result=mysqli_query($conn,$dis);
            echo "<select name=option class=category>";
            echo" <option>mobile types</option>";
            while($row=mysqli_fetch_assoc($result))
            {         
    
               echo "<option value=".$row['cname'].">".$row['cname']."</option>";
                
            }
           echo" </select><br>";
                ?>
               <p>MOBILE IMAGE:</p><input type="file" name="image">
               <br> <input type="submit" name="sub"value="ADD+"><br><br>
            
                
            
            </font>
        </form>
        </th>
    </tr>
   </table>
   
   <?php
 $dis="SELECT * FROM `addmobile` WHERE 1";
$result=mysqli_query($conn,$dis);
if(mysqli_num_rows($result) > 0){
   echo" <table border = 1 class = imgtable>";
 
    while($row=mysqli_fetch_assoc($result))
    {
        $image = $row['mimg'];
        echo"<tr>                                           
              <td class = tdname><b>".$row['mname']."</b></td>
              <td class =tdimage><a class=limg href='showmobiledetails.php?name=$row[mname]'><img class=images src='img/".$image."'/></a></td>
              <td><a class= op href='deletemobile.php?name=$row[mname]'> DELECT</a><BR><br>
              <a class=op href='editmobile.php?name=$row[mname]'>EDIT</a></td>
              </tr>";
    }
    echo"</table>";
}


   ?>
</html>