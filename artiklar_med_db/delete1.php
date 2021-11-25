<?php
require_once('$dbcon.php');
delete_pk = filter_input(INPUT_GET,'cartartikel_pk',FILTER_SANITIZE_NUMBER_INT);

//delete FROM employees WHERE officeCode = 4;
$data['del_pk' => $delete_pk];

$db=new dbcon();
$start=$db->pdo->prepare('DELETE FROM cartartikel where cartartikel_pk = :del_pk');
$start->execute();

header('location: artiklar.php');




?>