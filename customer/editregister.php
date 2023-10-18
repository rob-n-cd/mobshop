<?php
//( ! ) Warning: Undefined array key "name" in C:\wamp64\www\customer\editregister.php on line 3
include('/wamp64/www/mobshop/admin/connection.php');
$nam = $_GET['nam']; 
 $dis="SELECT * FROM `register` WHERE `name` = '$nam'";
$result=mysqli_query($conn,$dis);
   echo" <body  bgcolor=#1d2b3a>
   <div class = bg>
   <table class = imgtable>";
        
      while($row=mysqli_fetch_assoc($result))    
      {     
        $image = $row['img'];

//! ) Warning: Undefined array key "nam" in C:\wamp64\www\customer\editregister.php on line 4

        echo"<b>
       <tr><td><img class=images src='custimg/".$image."'/></td></tr>
       </table>
       <div class = box>
            <div class = questain><br><br><br>
            <h1>EDIT REGISTER DETAILS</h1><br>
              <b><label>name:</label></b><br><br><br>
              <b><label>address:</label></b><br><br><br>
              <b><label>phone:</label></b><br><br><br>
              
               <b><label>gmail:</label></b><br><br><br>
            
               <b><label>password:</label></b>

             </div>
             <form   method = POST>
              <div class=answer> <label class = right ><input type=text name=name value=".$row['name']."></label><br><br><br>
              <label class = right ><input type = text name=address value=".$row['address']."></label> <br><br>    <br>
              <label class = right ><input type = number name=phone value=".$row['phone']."></label>  <br><br><br>
              <label class = right ><input type = gmail name=gmail value =".$row['gmail']."></label><br><br><br>
              <label class = right ><input type = password name=password value =".$row['password']."></label><br><br><br>
            
              </div> 
              ";
             echo "<div class=operations>
            <span class=btn> <button  class=backword type =submit name =update>UPDATE</button></span>
            </form>
             </div>";
      }
    echo "</table>
    </div>
    <style>
    input{
    outline:none;
    border-left:none;
    border-right:none;
    border-top:none;
    border-radius:3px;
    border-bottom: 2px solid;
    border-color:black;
    font-weight:bold;
        width:145px;
        
    }
     .operations{margin-top:130px;
    margin-left:50px;
background:white;
border: 1px solid;
border-radius:6px;
padding-top:5px;
padding-bottom:5px;
width:250px;
height:25px;
}
.backword{
    font-size:20px;
    font-weight:bolder; 
    border:none;
    margin-left:48px;
    padding-right:30px;
    padding-left:30px;
    padding-bottom:3px;
    padding-top:5px;
border-color:3px;
border-radius:5px;
margin-top:-5px;
margin-right:15px;
background:green;
}
    h1{
      font-size:medium;
      margin-top:-30px;  
    }
.box{
    margin-top:-200px;
    border:1px solid;
    background:white;
    border-radius:9px;
    outline:none;
    width:350px;
    height:330px;
    margin-left:400px;
    box-shadow: 7px 7px 3px gray;
}
.box .questain{
    margin-left:30px;
    margin-bottom:-100px;
}
.box .answer{
    margin-left:200px;
    margin-bottom:-100px;
    margin-top:-230px;
}

    .imgtable{
        margin-left: 516px;
        border-radius: 30px;
        margin-top:300px;
        margin-bottom:-200px;
    
    }
    .details{
        border:2px solid;
        background:white;
        border-radius:6px;
        width:380px;
    }
    .images{
         width:100px;
         margin-top:-300px;
        border:6px solid;
        border-radius: 49px;
        border-color:black;
    }
    *{
        text-decoration:none;
    }
    a{
        color:black;
    }
    tr{
        height: 50px;
        border-top:none;
        border-bottom:none;

        shadow-box:none;
    }
    table{
        margin-left: 520px;
        margin-top:-60px;
    text-align:center;
    }
    .operation{
margin-top:100px;
    margin-left:455px;
background:white;
border: 1px solid;
border-radius:6px;
padding-top:5px;
padding-bottom:7px;
width:250px;
height:25px;
    }
.back{
    font-size:20px;
    font-weight:bolder; 
    border:none;
    margin-left:48px;
    padding-right:30px;
    padding-left:30px;
    padding-bottom:10px;
    padding-top:5px;
border-color:3px;
border-radius:5px;
margin-top:-5px;
margin-right:15px;
background:blue;  
}
.btn1{
margin-left:10px;
}
    </style>";
if(isset($_POST['update']))
{
$cname = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$gmail = $_POST['gmail'];
$password = $_POST['password'];
$sql = "UPDATE `register` SET `name`='$cname',`address`='$address',`phone`='$phone',`gmail`='$gmail',`password`='$password' WHERE `name` = '$nam'";
if(mysqli_query($conn,$sql))

    echo "<script>prompt('details updateded');</script>";
else
    die("updation damped".mysqli_error($conn));
    $dis="SELECT * FROM `register` WHERE `name` = '$cname'";
    $result=mysqli_query($conn,$dis);
    $row=mysqli_fetch_assoc($result);
    echo "<div class=operation>
    <span class=btn1> <a class = back href = 'viewregister.php?nam=$row[name]' >BACK</a></span>
     </div>";

}
?>