<?php
include 'connector.php';

if(isset($_POST['register'])){
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $confirmpassword =$_POST['confirmpassword'];

    if($password==$confirmpassword){
        $sql="SELECT * FROM `logindata` WHERE `email`='$email'";
        $result=mysqli_query($connector,$sql);
        $numrows=mysqli_num_rows($result);
        if($numrows != 0){
            echo"<script>alert('email is already taken')</script>";
        }else{
        $sql="INSERT INTO logindata(username,email,password)
        VALUE('$username','$email','$password')";
        $result= mysqli_query($connector,$sql);
        if($result){
            echo"<script>alert('sucessfully registerd')</script>";
        }else{
            echo"<script>alert('somrthing went wrong')</script>";
        }
      }
    } else{
        echo"<script>alert('password is not matched')</script>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <title>registration form</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        *{
        margin:0%;
        padding:0%;
    }
        body{
            align-items: center;
	        justify-content: center;
            position: fixed;
            background-image: url(im2.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .reg{
            
           position: relative;
           background-color:white;
           border:2px solid black;
            height: 35.5rem;
            width:50%;
            margin-left: 34rem;
            margin-top: 7%;
            position: relative;
            border-radius: 20px;
            text-align:center;
            box-shadow: 7px 7px 2px 2px rgba(0, 0, 0, 0.3);
    
        }
        .reg h1{
            font-size: 2rem;
            text-align: center;
            color:black;
            padding-top: 12%;
           
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
              
               margin-top: 7%;
               margin-bottom: 7%;
               font-size: 15px;
               text-align:center;
            }
            .reg p{
                font-size: 20px;
               
            }
    </style>
    <body>
       <section>
           <form class="reg" method="post" action="">
               <h1>REGISTRATION FORM</h1>
               <div class="lab">
             <div>
               <input class="data" type="text"  placeholder="USERNAME" name="username"  ><br>
             </div> 
             <div>      
               <input class="data" type="email"  placeholder="EMAIL ID" name="email"><br>
             </div> 
             <div>       
               <input class="data" type="password"  placeholder="PASSWORD" name="password"><br>
             </div>
             <div>       
               <input class="data" type="password"  placeholder="CONFIRM PASSWORD" name="confirmpassword"><br>
             </div> 
             <div>       
                 <button type="sumbit" class="but"  name="register">REGISTER</button>
             </div>   
                   <p >Already have an account ?<a href="login.php" >login</a></p>
            </div>
           </form>
       </section>
    </body>
</html>
