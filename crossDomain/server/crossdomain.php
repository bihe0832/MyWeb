<?php
$data= Array();
$data["ecode"]="200";
$data["msg"]="努力学技术，潜心做精品";
header("Access-Control-Allow-Origin: https://microdemo.bihe0832.com");
// header("Access-Control-Allow-Origin: http://microdemo.bihe0832.com");
$result = json_encode($data);
echo $result; 
?>