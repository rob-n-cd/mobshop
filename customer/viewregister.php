<?php
include('/wamp64/www/mobshop/admin/connection.php');
$name = $_GET['nam']; 
 $dis="SELECT * FROM `register` WHERE `name` = '$name'";
$result=mysqli_query($conn,$dis);
   echo" <body  bgcolor=#1d2b3a>
   <div class = bg>
   <table class = imgtable>";
        
      while($row=mysqli_fetch_assoc($result))    
      {     
        $image = $row['img'];
        echo"<b>
       <tr><td><img class=images src='custimg/".$image."'/></td></tr>
       </table>
       <div class = box>
            <div class = questain><br><br><br>
            <h1>REGISTER DETAILS</h1><br>
              <b><label>name:</label></b><br><br><br>
              <b><label>address:</label></b><br><br><br>
              <b><label>phone:</label></b><br><br><br>
              
               <b><label>gmail:</label></b><br><br><br>
            
               <b><label>password:</label></b>

             </div>
              <div class=answer> <label class = right >".$row['name']."</label><br><br><br>
              <label class = right >".$row['address']."</label> <br><br>    <br>
              <label class = right >".$row['phone']."</label>  <br><br><br>
              <label class = right >".$row['gmail']."</label><br><br><br>
              <label class = right >".$row['password']."</label><br><br><br>
              </div> 
              ";
             echo "<div class=operations>
            <span class=btn> <a class = backword href = 'index.php' > BACK</a></span> <span class = btn ><a class = edit href = 'editregister.php?nam=$row[name]'> EDIT</a></span>
             </div>";
      }
    echo "</table>
    </div>
    <style>
     .operations{margin-top:130px;
    margin-left:40px;
background:white;
border: 1px solid;
border-radius:6px;
padding-top:5px;
padding-bottom:5px;
width:250px;
height:25px;
}
.backword{
    padding-right:30px;
    padding-left:20px;
    padding-bottom:8px;
    padding-top:5px;
border-color:3px;
border-radius:5px;
background:blue;}

.edit{
    padding-right:30px;
    font-weight:bolder;
    border-radius:5px;
    padding-left:30px;
    padding-bottom:8px;
    padding-top:5px;
    margin-left:29px;
border-color:3px;
background:red;}
.btn{
    font-size:20px;
margin-top:20px;}
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
    </style>";
?>
    