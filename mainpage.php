<?php 
session_start();

if (!isset($_SESSION['username'])) {
    if (!isset($_SESSION['email'])){
    header("Location: login.php");
    }
}
?>
<style>
      *{
        margin:0%;
        padding:0%;
    }
    body{
        position: fixed;
        background-color:rgb(238, 191, 105);
    }
     .main{
         background-color:white;
         height:18rem;
         width:40rem;
         margin-left:69%;
         margin-top:25%;
         position: relative;
         text-align:center;
         padding-top:20%;
     }
     .main h1{
         padding-bottom:6%;
         font-size:40px;

     }
     .main h2{
         padding-bottom:10%;
     }
     .main a{
         font-size:23px;
         text-decoration:none;
     }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <div class="main">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
          echo "<h2>EMAIL ID : " . $_SESSION['email'] . "</h2>";
    ?>
    <a href="logout.php">Logout</a>
    </div>
</body>
</html>