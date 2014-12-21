<?php
$data= Array();
$data["ecode"]="200";
$data["msg"]="努力学技术，潜心做精品";
sleep(1);
$callback = isset($_GET['callback']) ? trim($_GET['callback']) : ''; //jsonp回调参数，必需
header('Content-type:application/x-javascript');
echo $callback . '(' . json_encode($data) .')';  //返回格式，必需
?>