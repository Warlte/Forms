<?php
require "top.php";
require "nav.php";
require "start.php";
//require "bottom.php";


$url='http://localhost'.$_SERVER['REQUEST_URI'];
echo $url;
$arrurl=parse_url($url);
var_dump($arrurl);
$url_parts=explode('/',$arrurl['path']);
var_dump($url_parts);


if($url_parts[3]==null){
    top();
    nav();
    start();
    //bottom();
}
?>
