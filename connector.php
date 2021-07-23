<?php
$server="localhost";
$username="root";
$password="";
$db="database1";
$connector=mysqli_connect($server,$username,$password,$db);

if(!$connector){
    die( "<script>aleart('connection failed.')</script>" );
}
?>