<?php 
session_start();

if(isset($_SESSION["$username"])){
    echo"du läser hemlig information".$_SESSION["username"];
}else{
    header("location:index.php")
}



?>