<?php
include("connector.php");
session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $sql="SELECT * FROM `logindata` WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($connector,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows>0){
        $row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
		header("Location: mainpage.php");
    }else{
        echo"<script>alert('email or password are wrong')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>login form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
    *{
        margin:0%;
        padding:0%;
    }
    body{
        background-color:crimson;
        position: fixed;
            background-image: url(im1.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
    }
    .reg{
        border:2px solid black;
        background-color: white;
        height: 25rem;
        width:54%;
        margin-left: 35rem;
        margin-top: 25%;
        position: relative;
        border-radius: 20px;
        text-align:center;
    }
    .reg h1{
        font-size: 2rem;
        text-align: center;
        color:black;
        padding-top: 8%;
        position: relative;
    }
    .lab{
     
       position: relative;
    }
    .data{
        margin-top: 8%;
       
        padding-top: 1%;
        height:2.4rem;
        width:65%;
        border: 1px solid grey;
        border-radius: 10px;
        padding-left: 10%;
        font-size: 1rem;
    }
    .but{
           height: 2.4rem;
           width:30%;
           background-color: rgb(77, 77, 214);
           color: white;
          
           margin-top: 4%;
           font-size: 15px;
        }
        .reg p{
            font-size: 20px;
            margin-top: 8%;
            
        }
</style>
   <body>
    <section>
        <form class="reg"  method="post" action="">
            <h1>LOGIN FORM</h1>
            <div class="lab">
          
            <input class="data" type="email" name="email" placeholder="EMAIL"/><br>
            <input class="data" type="password" name="password" placeholder="PASSWORD" ><br>
            <button class="but" name="login" >LOGIN</button>
                <p>haven't registered?  <a href="registerform.php"> register</a></p>
           
         </div>
        </form>
    </section>

   </body>
</html>