<?php
session_start();
require('dbconnect.php');

$dbcon=new dbconnect();
$user = $_REQUEST['usrname'];
$pass = $_REQUEST['pasword'];

$sql = "select * FROM users WHERE name = '".$user."' and password '".$pass."'    ";

echo $sql;

$stmt = $dbcon->pdo->query($sql);
$stmt->exectute();
if($stmt->fetch()){
    $_SESSION["name"]=$user;
    echo "inloggad";
}else{
}
?>
