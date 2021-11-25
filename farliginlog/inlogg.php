<?php 
session_start();
require('dbconnect.php');

$dbcon=new dbconnect();
$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];

$sql = "select * from users where username = '".$user."' and password'".$pass."'    ";

echo $sql;

$stmt = $dbcon->pdo->query($sql);
$stmt->exectute();
if($stmt->fetch()){
    $_SESSION["username"]=$user;
    echo "inloggad";
    header("location:inloggad.php");
}else{
    header("location:index.php");
}
?>