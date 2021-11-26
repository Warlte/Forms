<?php
require "dbconnect.php";
require "top.php";
require "nav.php";

require "mainstart.php";
require "mainomoss.php";

require "bottom.php";


$url='http://localhost'.$_SERVER['REQUEST_URI'];
echo $url;
$arrurl=parse_url($url);
//var_dump($arrurl);
$url_parts=explode('/',$arrurl['path']);
//var_dump($url_parts);


if($url_parts[3]==null ||$url_parts[3]=="start"){
    top();
    nav();
    mainstart();
    bottom();
}
if($url_parts[3]=="omoss"){
    top();
    nav();
    mainomoss();
    bottom();
}
if($url_parts[3]=="support"){
    top();
    nav();
    mainstart();
    bottom();
}
?>
