<html>
    <title>contact-SMARTTIZE</title>
    
    <h1>CONTACT</h1>
    <body bgcolor="gold">
        <center>
            <h1 class="head"><b>
                Contact-Smarttize
                <hr>
                </b></h1>
        <table border="1">
            <tr><th>
    <form action="" method="POST"><br>               
       <b> full-name:<input type="text" name="name" placehol    der="name"><br><br>
        <b>contact:<input type="text" name="name" size="1px" placeholder="+91">  <input  class="type" type="text" name="contact" placeholder="number"><br><br>
        <b>email:<input type="email" name="email" placeholder="                    @gmail.com"><br><br>
        <input type="submit" name="submit"></th>
</tr>
</table>
</center>
<div>
        <p><b><span><ion-icon name="logo-whatsapp" size="large"> </ion-icon>contact of mobcart:</b><b class="number"><u>+91 8084293219</u></b><br><br><ion-icon name="mail-sharp"size="large"></ion-icon><b> email id:<b class="number">mob_cartshoping@gmail.com</b></b></p>
        <a href="/admin/adminlogin.php">admin-login</a>
</div>
    </form>
    <style>
        *{
            text-decoration: none
        }
        
        hr{
            height: 4px;
            width: 1000px;
            border: none;
            background-color:black;
        }   
       
        table{
            border-radius: 5px;
            border-color: red;
            border-width: 3px;
            border-style: solid;
            height: 300px;
            width:  400px;
        }
        input[type='text']{
            padding:10px;
            background-color:white;
            border: none;
            border-radius:3px;
            font-weight:bold;
            font-style: italic;
        }
        input[type='email']
        {
            padding:10px;
            background-color:white;
            border: none;
            border-radius:3px;
            font-weight:bold;
        }
        .number,u{
            color:red;
        }
        p{
            margin-top: 170px;
        }
        a{
            border:2px solid;
        }
        div{
            margin-top:-60px
        }
        .bold{
            color:red;
            font-style: italic;
        }
        .message{
            margin-top: -150px;
        }
        .error{
            margin-left: 840px;
            margin-top: -360px;
        }
        
        .type{
            margin-right: -30px;
        }
        </style>
        <!-----------------------------------------jss------------------------------------------->
        <script src="project.jss"></script>
           <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
           <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

           </script>
           <!------------------------------------------------------------------------------------->
    </body>
</html>
<?php
$name=$_POST["name"];
$contact=$_POST["contact"];
$email=$_POST['email'];
$error=strlen($contact);
if($name!=null && $error=="10" && $email!=null)
{
if((isset($_POST['submit'])))
{
    header('location:index.php');
}
}
else if($name==null && $email==null)
{
    echo"<div class=message><center><b class=bold>please complete youer contact - form!<br>check youer mobile-number properly</b></center></div><br>";
}
else
if(ctype_alpha($contact))
{
    echo"<div class=error><b class=bold>=>error:alphabets are not used in phone number</b></div>";
}
else
{
if($error=="10")
{
    if((isset($_POST['submit'])))
{
    header('location:index.php');
}
}
else
{
    echo"<div class=error><b class=bold>=>error:youer phone-number has.$error. numbers</b></div>";
}
}
?>